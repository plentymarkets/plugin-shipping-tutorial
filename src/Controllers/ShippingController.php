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

/**
 * Class ShippingController
 */
class ShippingController extends Controller
{

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
	    /*
	     * TODO implement in demo
	     */
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
     *
	 * @param array $response
	 * @return string
	 */
	private function getStatusMessage($response)
	{
		return 'Code: '.$response['status']; // should contain error code and descriptive part
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
        /*
	     * TODO implement in demo
	     */
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
