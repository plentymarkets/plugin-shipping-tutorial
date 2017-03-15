<?php

namespace ShippingTutorial\API;

/*include_once('getZipCodeRules.php');
include_once('getZipCodeRulesRequestType.php');
include_once('PartnerCredentialType.php');
include_once('UserCredentialType.php');
include_once('getZipCodeRulesResponse.php');
include_once('getZipCodeRulesResponseType.php');
include_once('ZipCodeRulesType.php');
include_once('ErrorDataType.php');
include_once('setOrder.php');
include_once('setOrderRequestType.php');
include_once('OrderActionType.php');
include_once('OrderSettingsType.php');
include_once('LabelSizeType.php');
include_once('LabelStartPositionType.php');
include_once('OrderDataType.php');
include_once('AddressType.php');
include_once('ParcelDataType.php');
include_once('ShipServiceType.php');
include_once('CODType.php');
include_once('PaymentType.php');
include_once('setOrderResponse.php');
include_once('setOrderResponseType.php');
include_once('LabelResponseType.php');
include_once('LabelDataType.php');
include_once('getParcelShopFinder.php');
include_once('getParcelShopFinderRequestType.php');
include_once('SearchModeType.php');
include_once('SearchAddressType.php');
include_once('SearchGeoDataType.php');
include_once('dpdServiceType.php');
include_once('getParcelShopFinderResponse.php');
include_once('getParcelShopFinderResponseType.php');
include_once('ParcelShopType.php');
include_once('GeoDataType.php');
include_once('ShopServiceType.php');
include_once('OpeningHoursType.php');
include_once('OpenTimeType.php');
include_once('HolidayType.php');
include_once('getParcelLifeCycle.php');
include_once('getParcelLifeCycleRequestType.php');
include_once('getParcelLifeCycleResponse.php');
include_once('getParcelLifeCycleResponseType.php');
include_once('getOrderStatus.php');
include_once('getOrderStatusRequestType.php');
include_once('getOrderStatusResponse.php');
include_once('getOrderStatusResponseType.php');
include_once('OrderStatusType.php');
include_once('OrderInformationType.php');
include_once('StatusInfoType.php');
include_once('DepotDataType.php');
include_once('StatusInfoContainerType.php');
include_once('TrackingResult.php');
include_once('ShipmentInfo.php');
include_once('StatusInfo.php');
include_once('ContentLine.php');
include_once('ContentItem.php');
include_once('TrackingProperty.php');*/


/**
 * Version 1.0
 */
class DPDCloudService_v1 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'getZipCodeRules' => 'DPD\API\getZipCodeRules',
      'getZipCodeRulesRequestType' => 'DPD\API\getZipCodeRulesRequestType',
      'PartnerCredentialType' => 'DPD\API\PartnerCredentialType',
      'UserCredentialType' => 'DPD\API\UserCredentialType',
      'getZipCodeRulesResponse' => 'DPD\API\getZipCodeRulesResponse',
      'getZipCodeRulesResponseType' => 'DPD\API\getZipCodeRulesResponseType',
      'ZipCodeRulesType' => 'DPD\API\ZipCodeRulesType',
      'ErrorDataType' => 'DPD\API\ErrorDataType',
      'setOrder' => 'DPD\API\setOrder',
      'setOrderRequestType' => 'DPD\API\setOrderRequestType',
      'OrderSettingsType' => 'DPD\API\OrderSettingsType',
      'OrderDataType' => 'DPD\API\OrderDataType',
      'AddressType' => 'DPD\API\AddressType',
      'ParcelDataType' => 'DPD\API\ParcelDataType',
      'CODType' => 'DPD\API\CODType',
      'setOrderResponse' => 'DPD\API\setOrderResponse',
      'setOrderResponseType' => 'DPD\API\setOrderResponseType',
      'LabelResponseType' => 'DPD\API\LabelResponseType',
      'LabelDataType' => 'DPD\API\LabelDataType',
      'getParcelShopFinder' => 'DPD\API\getParcelShopFinder',
      'getParcelShopFinderRequestType' => 'DPD\API\getParcelShopFinderRequestType',
      'SearchAddressType' => 'DPD\API\SearchAddressType',
      'SearchGeoDataType' => 'DPD\API\SearchGeoDataType',
      'getParcelShopFinderResponse' => 'DPD\API\getParcelShopFinderResponse',
      'getParcelShopFinderResponseType' => 'DPD\API\getParcelShopFinderResponseType',
      'ParcelShopType' => 'DPD\API\ParcelShopType',
      'GeoDataType' => 'DPD\API\GeoDataType',
      'OpeningHoursType' => 'DPD\API\OpeningHoursType',
      'OpenTimeType' => 'DPD\API\OpenTimeType',
      'HolidayType' => 'DPD\API\HolidayType',
      'getParcelLifeCycle' => 'DPD\API\getParcelLifeCycle',
      'getParcelLifeCycleRequestType' => 'DPD\API\getParcelLifeCycleRequestType',
      'getParcelLifeCycleResponse' => 'DPD\API\getParcelLifeCycleResponse',
      'getParcelLifeCycleResponseType' => 'DPD\API\getParcelLifeCycleResponseType',
      'getOrderStatus' => 'DPD\API\getOrderStatus',
      'getOrderStatusRequestType' => 'DPD\API\getOrderStatusRequestType',
      'getOrderStatusResponse' => 'DPD\API\getOrderStatusResponse',
      'getOrderStatusResponseType' => 'DPD\API\getOrderStatusResponseType',
      'OrderStatusType' => 'DPD\API\OrderStatusType',
      'OrderInformationType' => 'DPD\API\OrderInformationType',
      'StatusInfoType' => 'DPD\API\StatusInfoType',
      'DepotDataType' => 'DPD\API\DepotDataType',
      'StatusInfoContainerType' => 'DPD\API\StatusInfoContainerType',
      'TrackingResult' => 'DPD\API\TrackingResult',
      'ShipmentInfo' => 'DPD\API\ShipmentInfo',
      'StatusInfo' => 'DPD\API\StatusInfo',
      'ContentLine' => 'DPD\API\ContentLine',
      'ContentItem' => 'DPD\API\ContentItem',
      'TrackingProperty' => 'DPD\API\TrackingProperty');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://cloud-stage.dpd.com/services/v1/DPDCloudService.asmx?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      if (isset($options['features']) == false) {
        $options['features'] = SOAP_USE_XSI_ARRAY_TYPE;
      }

      $options["features"] = SOAP_SINGLE_ELEMENT_ARRAYS|SOAP_USE_XSI_ARRAY_TYPE;
      $options['trace']       = 1;
      $options['version']     = SOAP_1_1;


        parent::__construct($wsdl, $options);
    }

    /**
     * @param getZipCodeRules $parameters
     * @access public
     * @return getZipCodeRulesResponse
     */
    public function getZipCodeRules(getZipCodeRules $parameters)
    {
      return $this->__soapCall('getZipCodeRules', array($parameters));
    }

    /**
     * @param setOrder $parameters
     * @access public
     * @return setOrderResponse
     */
    public function setOrder(setOrder $parameters)
    {
      return $this->__soapCall('setOrder', array($parameters));
    }

    /**
     * @param getParcelShopFinder $parameters
     * @access public
     * @return getParcelShopFinderResponse
     */
    public function getParcelShopFinder(getParcelShopFinder $parameters)
    {
      return $this->__soapCall('getParcelShopFinder', array($parameters));
    }

    /**
     * @param getParcelLifeCycle $parameters
     * @access public
     * @return getParcelLifeCycleResponse
     */
/*    public function getParcelLifeCycle(getParcelLifeCycle $parameters)
    {
      return $this->__soapCall('getParcelLifeCycle', array($parameters));
    }*/

    /**
     * @param getOrderStatus $parameters
     * @access public
     * @return getOrderStatusResponse
     */
/*    public function getOrderStatus(getOrderStatus $parameters)
    {
      return $this->__soapCall('getOrderStatus', array($parameters));
    }*/

}
