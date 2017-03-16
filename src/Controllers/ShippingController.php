<?php

namespace ShippingTutorial\Controllers;

use Plenty\Modules\Order\Shipping\Package\Models\OrderShippingPackage;
use ShippingTutorial\API\setOrder;
use Plenty\Modules\Account\Address\Contracts\AddressRepositoryContract;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;
use Plenty\Modules\Order\Shipping\Information\Contracts\ShippingInformationRepositoryContract;
use Plenty\Modules\Order\Shipping\Package\Contracts\OrderShippingPackageRepositoryContract;
use Plenty\Modules\Order\Shipping\PackageType\Contracts\ShippingPackageTypeRepositoryContract;
use Plenty\Modules\Order\Shipping\ParcelService\Models\ParcelServicePreset;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Modules\Plugin\Storage\Contracts\StorageRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\ConfigRepository;
use ShippingTutorial\API\AddressType;
use ShippingTutorial\API\CODType;
use ShippingTutorial\API\DPDCloudService_v1;
use ShippingTutorial\API\OrderActionType;
use ShippingTutorial\API\OrderDataType;
use ShippingTutorial\API\OrderSettingsType;
use ShippingTutorial\API\ParcelDataType;
use ShippingTutorial\API\PartnerCredentialType;
use ShippingTutorial\API\PaymentType;
use ShippingTutorial\API\setOrderRequestType;
use ShippingTutorial\API\setOrderResponse;
use ShippingTutorial\API\setOrderResponseType;
use ShippingTutorial\API\ShipServiceType;
use ShippingTutorial\API\UserCredentialType;
use Plenty\Plugin\Log\Loggable;


/**
 * Class ShippingController
 */
class ShippingController extends Controller
{

    use loggable;


    /**
	 * @var Request
	 */
	private $request;

    /**
     * @var string $wsdl
     */
    private $wsdl = 'https://cloud-stage.dpd.com/services/v1/DPDCloudService.asmx?wsdl';

    /**
     * @var DPDCloudService_v1 $dpdapi
     */
    private $dpdapi;


	/**
	 * @var OrderRepositoryContract $orderRepository
	 */
	private $orderRepository;

	/**
	 * @var AddressRepositoryContract $addressRepository
	 */
	private $addressRepository;

	/**
	 * @var OrderShippingPackageRepositoryContract $orderShippingPackage
	 */
	private $orderShippingPackage;

	/**
	 * @var ShippingInformationRepositoryContract
	 */
	private $shippingInformationRepositoryContract;

	/**
	 * @var StorageRepositoryContract $storageRepository
	 */
	private $storageRepository;

	/**
	 * @var ShippingPackageTypeRepositoryContract
	 */
	private $shippingPackageTypeRepositoryContract;

    /**
     * @var PaymentMethodRepositoryContract
     */
    private $paymentMethodRepository;

    /**
     * @var PartnerCredentialType $partnerCredentials
     */
    private $partnerCredentials;

    /**
     * @var UserCredentialType $userCredentials
     */
    private $userCredentials;

    /**
     * @var  array
     */
    private $createOrderResult = [];

    /**
     * @var ConfigRepository
     */
    private $config;

    /**
     * label constants
     */
    CONST UPPER_LEFT_START_POSITION = 'UpperLeft';
    CONST UPPER_RIGHT_START_POSITION = 'UpperRight';
    CONST LOWER_LEFT_START_POSITION = 'LowerLeft';
    CONST LOWER_RIGHT_START_POSITION = 'LowerRight';

    CONST LABEL_SIZE_PDF_A6 = 'PDF_A6';
    CONST LABEL_SIZE_PDF_A4 = 'PDF_A4';

    /**
     * Plugin key
     */
    CONST PLUGIN_KEY = 'ShippingTutorial';

    /**
     * COD
     */
    CONST PLENTY_MOP_COD = 1;

    /**
     * API version
     */
    CONST VERSION = 100;

	/**
	 * ShipmentController constructor.
     *
	 * @param Request $request
	 * @param OrderRepositoryContract $orderRepository
	 * @param AddressRepositoryContract $addressRepositoryContract
	 * @param OrderShippingPackageRepositoryContract $orderShippingPackage
	 * @param StorageRepositoryContract $storageRepository
	 * @param ShippingInformationRepositoryContract $shippingInformationRepositoryContract
	 * @param ShippingPackageTypeRepositoryContract $shippingPackageTypeRepositoryContract
     * @param ConfigRepository $config
     */
	public function __construct(Request $request,
								OrderRepositoryContract $orderRepository,
								AddressRepositoryContract $addressRepositoryContract,
								OrderShippingPackageRepositoryContract $orderShippingPackage,
								StorageRepositoryContract $storageRepository,
								ShippingInformationRepositoryContract $shippingInformationRepositoryContract,
								ShippingPackageTypeRepositoryContract $shippingPackageTypeRepositoryContract,
                                PaymentMethodRepositoryContract $paymentMethodRepository,
                                ConfigRepository $config)
	{
		$this->request = $request;

		$this->dpdapi = pluginApp(DPDCloudService_v1::class,[array(),$this->wsdl]);

		// Contracts
		$this->orderRepository = $orderRepository;
		$this->addressRepository = $addressRepositoryContract;
		$this->orderShippingPackage = $orderShippingPackage;
		$this->storageRepository = $storageRepository;
		$this->shippingInformationRepositoryContract = $shippingInformationRepositoryContract;
		$this->shippingPackageTypeRepositoryContract = $shippingPackageTypeRepositoryContract;
        $this->paymentMethodRepository = $paymentMethodRepository;

		$this->config = $config;

		// Get credential by UI config
        $partnerCredentialsName     = $this->config->get('ShippingTutorial.partnerName');
        $partnerCredentialsToken    = $this->config->get('ShippingTutorial.partnerToken');
        $userCredentialsName        = $this->config->get('ShippingTutorial.userName');
        $userCredentialsToken       = $this->config->get('ShippingTutorial.userToken');

        $this->partnerCredentials = pluginApp(PartnerCredentialType::class,[$partnerCredentialsName, $partnerCredentialsToken]);
        $this->userCredentials = pluginApp(UserCredentialType::class,[$userCredentialsName, $userCredentialsToken]);
	}


	/**
	 * Registers shipment(s)
	 *
	 * @param Request $request
	 * @param array $orderIds
	 * @return string
	 */
	public function registerShipments(Request $request, $orderIds)
	{
		$orderIds = $this->getOrderIds($request, $orderIds);
		$orderIds = $this->getOpenOrderIds($orderIds);
		$shipmentDate = date('Y-m-d');

        $orderSettingsType = pluginApp(OrderSettingsType::class,
            array(
                $shipmentDate,
                self::LABEL_SIZE_PDF_A6,
                self::UPPER_LEFT_START_POSITION
            )
        );

		foreach($orderIds as $orderId)
		{
            /**
             * --- ORDER ---
             */
			$order = $this->orderRepository->findOrderById($orderId);

            // check shipping profile
            if($this->getParcelServicePreset($order->shippingProfileId) != null)
            {
                // gathering required data for registering the shipment

                /**
                 * --- ADDRESS ---
                 */
                $shipAddress = $this->getShipAddressFromOrder($order);

                // reads sender data from plugin config. this is going to be changed in the future to retrieve data from backend ui settings
                $senderName           = $this->config->get('ShippingTutorial.senderName', 'plentymarkets GmbH - Timo Zenke');
                $senderStreet         = $this->config->get('ShippingTutorial.senderStreet', 'Bürgermeister-Brunner-Str.');
                $senderNo             = $this->config->get('ShippingTutorial.senderNo', '15');
                $senderPostalCode     = $this->config->get('ShippingTutorial.senderPostalCode', '34117');
                $senderTown           = $this->config->get('ShippingTutorial.senderTown', 'Kassel');
                $senderCountryID      = $this->config->get('ShippingTutorial.senderCountry', '0');
                $senderCountry        = ($senderCountryID == 0 ? 'Germany' : 'Austria');

                //TODO get service from profile/settings
                $shipService = ShipServiceType::Classic;

                /**
                 * --- SHIPPING PACKAGE --- gets order shipping packages from current order
                 */
                $packages = $this->orderShippingPackage->listOrderShippingPackages($order->id);

                $orderDataList = [];

                // Iterating through packages
                foreach($packages as $package)
                {
                    // Weight
                    $weight = 0.2; //Fallback minimum weight

                    if ($package->weight) {
                        $weight = $package->weight / 1000;
                    }

                    // EXAMPLE ONLY - Determine packageType, but not needed for DPD API
                    $packageType = $this->shippingPackageTypeRepositoryContract->findShippingPackageTypeById($package->packageId);

                    // EXAMPLE ONLY - Package dimensions, but not needed for DPD API
                    list($length, $width, $height) = $this->getPackageDimensions($packageType);

                    $content = 'Paketinhalt';
                    $internalId = $orderId . '_' . $package->id; // Kind of reference number
                    $reference1 = strlen($order->deliveryAddress->email) ? $order->deliveryAddress->email : $order->deliveryAddress->phone;
                    $reference1 = substr($reference1, 0, 35);
                    $reference2 = substr('Auftragsnummer: ' . $orderId, 0, 35);


                    // EXAMPLE ONLY - get payment methods
                    $paymentMethods = $this->paymentMethodRepository->allForPlugin(self::PLUGIN_KEY);

                    // --- cod ---
                    if ($order->methodOfPaymentId == self::PLENTY_MOP_COD) {
                        $payment = pluginApp(PaymentType::class,
                            array(
                                PaymentType::Cash
                            ));
                        $cod = pluginApp(CODType::class,
                            array(
                                'Nachnahme',
                                100.00/*$order->invoiceTotal*/,
                                $payment
                            ));
                        $cod->Purpose = 'Nachnahme';
                        $cod->Amount = 100.00/*$order->invoiceTotal*/
                        ;
                    }

                    $parcelData = pluginApp(ParcelDataType::class,
                        array(
                            $shipService,
                            $weight,
                            $content,
                            $internalId,
                            $reference1,
                            $reference2,
                            ($cod ? $cod : null)
                        )
                    );

                    /*
                     * Add order data to order list (1:n parcels:shipping registration here)
                     */
                    $orderDataList[] = pluginApp(OrderDataType::class,
                        array(
                            $shipAddress,
                            0,
                            $parcelData
                        )
                    );
                }

                // register
                $setOrderRequest = pluginApp(setOrderRequestType::class,
                    array(
                        self::VERSION,
                        'de_DE',
                        $this->partnerCredentials,
                        $this->userCredentials,
                        OrderActionType::startOrder,
                        $orderSettingsType,
                        $orderDataList
                    )
                );

                try
                {
                    // EXAMPLE ONLY - check whether we are in test or productive mode, use different login or connection data
                    $isTestmode = $this->config->get('ShippingTutorial.mode', '0');

                    $setOrder = pluginApp(setOrder::class,
                        array(
                            $setOrderRequest
                        )
                    );

                    $response = $this->dpdapi->setOrder($setOrder);

                    $shipmentItems = array();
                    if (    isset($response->setOrderResult) &&
                            (!isset($response->setOrderResult->ErrorDataList) && count($response->setOrderResult->ErrorDataList) == 0))
                    {

                        if (!is_array($response->setOrderResult))
                        {
                            $shipmentItems = $this->handleAfterRegisterShipment($response->setOrderResult);
                        }
                        else
                        {
                            /** @var setOrderResponseType $setOrderResult */
                            foreach ($response->setOrderResult as $setOrderResult)
                            {
                                $shipmentItems = $this->handleAfterRegisterShipment($setOrderResult);
                            }
                        }
                        $this->createOrderResult[$orderId] = $this->buildResultArray(
                            true,
                            $this->getStatusMessage($response),
                            false,
                            $shipmentItems);

                        $this->saveShippingInformation($orderId, $shipmentDate, $shipmentItems);
                    }
                    else
                    {
                        $this->createOrderResult[$orderId] = $this->buildResultArray(
                            false,
                            $this->getStatusMessage($response),
                            false,
                            $shipmentItems);
                    }
                }
                catch(\SoapFault $soapFault)
                {
                    $this->handleSoapFault($soapFault);
                    // handle exception
                }

            }
        }

		// return all results to service
		return $this->createOrderResult;
	}

    /**
     * @param Order $order
     * @return AddressType $shipAddress
     */
    private function getShipAddressFromOrder($order)
    {

        /** @var Address $address */
        $address = $order->deliveryAddress;

        $addressData = [
            ($address->firstName == '' && $address->lastName == '' ? '' : $address->companyName),
            '', /* gender */
            ($address->firstName == '' && $address->lastName == '' ? $address->companyName : $address->firstName.' '.$address->lastName),
            $address->street,
            $address->houseNumber,
            $address->country->isoCode3,
            $address->postalCode,
            $address->town,
            $address->state,
            $address->phone,
            $address->email
        ];

        $shipAddress = pluginApp(AddressType::class,
            $addressData
        );

        return $shipAddress;
    }

    /**
     * Cancels registered shipment(s)
     *
     * @param Request $request
     * @param array $orderIds
     * @return array
     */
    public function deleteShipments(Request $request, $orderIds)
    {
        $orderIds = $this->getOrderIds($request, $orderIds);
        foreach ($orderIds as $orderId)
        {
            $shippingInformation = $this->shippingInformationRepositoryContract->getShippingInformationByOrderId($orderId);

            if (isset($shippingInformation->additionalData) && is_array($shippingInformation->additionalData))
            {
                foreach ($shippingInformation->additionalData as $additionalData)
                {
                    try
                    {
                        $shipmentNumber = $additionalData['shipmentNumber'];

                        // use the shipping service provider's API here
                        $response = '';

                        $this->createOrderResult[$orderId] = $this->buildResultArray(
                            true,
                            $this->getStatusMessage($response),
                            false,
                            null);

                    }
                    catch(\SoapFault $soapFault)
                    {
                        // exception handling
                    }

                }

                // resets the shipping information of current order
                $this->shippingInformationRepositoryContract->resetShippingInformation($orderId);
            }


        }

        // return result array
        return $this->createOrderResult;
    }


	/**
     * Retrieves the label file from a given URL and saves it in S3 storage
     *
	 * @param $labelUrl
	 * @param $key
	 * @return StorageObject
	 */
	private function saveLabelToS3($labelUrl, $key)
	{
		$ch = curl_init();

		// Set URL to download
		curl_setopt($ch, CURLOPT_URL, $labelUrl);

		// Include header in result? (0 = yes, 1 = no)
		curl_setopt($ch, CURLOPT_HEADER, 0);

		// Should cURL return or print out the data? (true = return, false = print)
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Timeout in seconds
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);

		// Download the given URL, and return output
		$output = curl_exec($ch);

		// Close the cURL resource, and free system resources
		curl_close($ch);
		return $this->storageRepository->uploadObject('ShippingTutorial', $key, $output);

	}

	/**
	 * Returns the parcel service preset for the given Id.
	 *
	 * @param int $parcelServicePresetId
	 * @return ParcelServicePreset
	 */
	private function getParcelServicePreset($parcelServicePresetId)
	{
		/** @var ParcelServicePresetRepositoryContract $parcelServicePresetRepository */
		$parcelServicePresetRepository = pluginApp(ParcelServicePresetRepositoryContract::class);

		$parcelServicePreset = $parcelServicePresetRepository->getPresetById($parcelServicePresetId);

		if($parcelServicePreset)
		{
			return $parcelServicePreset;
		}
		else
		{
			return null;
		}
	}

    /**
     * Returns a formatted status message
     * @TODO retrieve from settings if logger should be used
     *
     * @param array $response
     * @return string
     */
    private function getStatusMessage($response)
    {
        $msg = '';
        if(isset($response->setOrderResult->ErrorDataList->ErrorDataType))
        {
            foreach($response->setOrderResult->ErrorDataList->ErrorDataType as $error)
            {
                $msg .= 'Code: '.$error->ErrorCode.'; Id: '.$error->ErrorID.'; Message: '.$error->ErrorMsgLong;
            }
        }

        // push error to logger
        $this->getLogger('ShippingTutorial')->critical('register shipment: '.$msg);

        return $msg; // should contain error code and descriptive part
    }

    /**
     * Saves the shipping information
     *
     * @param $orderId
     * @param $shipmentDate
     * @param $shipmentItems
     */
	private function saveShippingInformation($orderId, $shipmentDate, $shipmentItems)
	{
		$transactionIds = array();
		foreach ($shipmentItems as $shipmentItem)
		{
			$transactionIds[] = $shipmentItem['shipmentNumber'];
			
		}

        $shipmentAt = date(\DateTime::W3C, strtotime($shipmentDate));
        $registrationAt = date(\DateTime::W3C);

		$data = [
			'orderId' => $orderId,
			'transactionId' => implode(',', $transactionIds),
			'shippingServiceProvider' => 'ShippingTutorial',
			'shippingStatus' => 'registered',
			'shippingCosts' => 0.00,
			'additionalData' => $shipmentItems,
			'registrationAt' => $registrationAt,
			'shipmentAt' => $shipmentAt

		];
		$this->shippingInformationRepositoryContract->saveShippingInformation(
			$data);
	}

    /**
     * Returns all order ids with shipping status 'open'
     *
     * @param array $orderIds
     * @return array
     */
	private function getOpenOrderIds($orderIds)
	{
		
		$openOrderIds = array();
		foreach ($orderIds as $orderId)
		{
			$shippingInformation = $this->shippingInformationRepositoryContract->getShippingInformationByOrderId($orderId);
			if ($shippingInformation->shippingStatus == null || $shippingInformation->shippingStatus == 'open')
			{
				$openOrderIds[] = $orderId;
			}
		}
		return $openOrderIds;
	}


	/**
     * Returns an array in the structure demanded by plenty service
     *
	 * @param bool $success
	 * @param string $statusMessage
	 * @param bool $newShippingPackage
	 * @param array $shipmentItems
	 * @return array
	 */
	private function buildResultArray($success = false, $statusMessage = '', $newShippingPackage = false, $shipmentItems = [])
	{
		return [
			'success' => $success,
			'message' => $statusMessage,
			'newPackagenumber' => $newShippingPackage,
			'packages' => $shipmentItems,
		];
	}

	/**
     * Returns shipment array
     *
	 * @param string $labelUrl
	 * @param string $shipmentNumber
	 * @return array
	 */
	private function buildShipmentItems($labelUrl, $shipmentNumber)
	{
		return  [
			'labelUrl' => $labelUrl,
			'shipmentNumber' => $shipmentNumber,
		];
	}

	/**
     * Returns package info
     *
	 * @param string $packageNumber
	 * @param string $labelUrl
	 * @return array
	 */
	private function buildPackageInfo($packageNumber, $labelUrl)
	{
		return [
			'packageNumber' => $packageNumber,
			'label' => $labelUrl
		];
	}

	/**
     * Returns all order ids from request object
     *
	 * @param Request $request
	 * @param $orderIds
	 * @return array
	 */
	private function getOrderIds(Request $request, $orderIds)
	{
		if (is_numeric($orderIds))
		{
			$orderIds = array($orderIds);
		}
		else if (!is_array($orderIds))
		{
			$orderIds = $request->get('orderIds');
		}
		return $orderIds;
	}

	/**
     * Returns the package dimensions by package type
     *
	 * @param $packageType
	 * @return array
	 */
	private function getPackageDimensions($packageType): array
	{
		if ($packageType->length > 0 && $packageType->width > 0 && $packageType->height > 0)
		{
			$length = $packageType->length;
			$width = $packageType->width;
			$height = $packageType->height;
		}
		else
		{
			$length = null;
			$width = null;
			$height = null;
		}
		return array($length, $width, $height);
	}

    /**
     * @param Request $request
     * @param array $orderIds
     * @return array
     */
    public function getLabels(Request $request, $orderIds)
    {
        /**
         * --- S3 ---
         */

        $orderIds = $this->getOrderIds($request, $orderIds);
        $labels = array();
        foreach ($orderIds as $orderId)
        {
            $results = $this->orderShippingPackage->listOrderShippingPackages($orderId);
            /** @var OrderShippingPackage $result */
            foreach ($results as $result)
            {
                if ($this->storageRepository->doesObjectExist('', $result->packageNumber.'.pdf'))
                {
                    $storageObject = $this->storageRepository->getObject('ShippingTutorial', $result->packageNumber.'.pdf');
                    $labels[] = $storageObject->body;
                }
            }
        }
        return $labels;
    }


    /**
     * @param setOrderResponse $setOrderResponse
     * @return array
     */
    private function handleAfterRegisterShipment($setOrderResponse)
    {
        $shipmentItems = array();

        foreach($setOrderResponse->LabelResponse->LabelDataList->LabelData as $labelData) {
            $internalID = $labelData->YourInternalID;
            $shipmentNumber = $labelData->ParcelNo;
        }

        if(strlen($setOrderResponse->LabelResponse->LabelPDF) > 0 && strlen($shipmentNumber) > 0) {
            $storageObject = $this->saveLabelToS3(
            /*base64_decode($setOrderResponse->LabelResponse->LabelPDF),*/
                $setOrderResponse->LabelResponse->LabelPDF,
                $shipmentNumber . '.pdf');

            $shipmentItems[] = $this->buildShipmentItems(
                'path_to_pdf_in_S3',
                $shipmentNumber);

            $this->orderShippingPackage->updateOrderShippingPackage(
                1,
                $this->buildPackageInfo(
                    $shipmentNumber,
                    $storageObject->key)
            );
        }

        return $shipmentItems;
    }

    /**
     * @param $soapFault
     */
    private function handleSoapFault($soapFault)
    {
        echo $soapFault;
        echo $this->dpdapi->getLastRequest();
        echo $this->dpdapi->getLastRequestHeaders();
        echo $this->dpdapi->getLastResponse();
        echo $this->dpdapi->getLastResponseHeaders();
        exit;
    }
}
