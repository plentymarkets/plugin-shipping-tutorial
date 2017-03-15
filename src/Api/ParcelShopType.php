<?php

namespace ShippingTutorial\API;

class ParcelShopType
{

    /**
     * @var int $ParcelShopID
     * @access public
     */
    public $ParcelShopID = null;

    /**
     * @var AddressType $ShopAddress
     * @access public
     */
    public $ShopAddress = null;

    /**
     * @var string $Homepage
     * @access public
     */
    public $Homepage = null;

    /**
     * @var GeoDataType $GeoData
     * @access public
     */
    public $GeoData = null;

    /**
     * @var string $ExpressCutOff
     * @access public
     */
    public $ExpressCutOff = null;

    /**
     * @var ShopServiceType[] $ShopServiceList
     * @access public
     */
    public $ShopServiceList = null;

    /**
     * @var OpeningHoursType[] $OpeningHoursList
     * @access public
     */
    public $OpeningHoursList = null;

    /**
     * @var HolidayType[] $HolidayList
     * @access public
     */
    public $HolidayList = null;

    /**
     * @var string $ExtraInfo
     * @access public
     */
    public $ExtraInfo = null;

    /**
     * @param int $ParcelShopID
     * @param AddressType $ShopAddress
     * @param string $Homepage
     * @param GeoDataType $GeoData
     * @param string $ExpressCutOff
     * @param ShopServiceType[] $ShopServiceList
     * @param OpeningHoursType[] $OpeningHoursList
     * @param HolidayType[] $HolidayList
     * @param string $ExtraInfo
     * @access public
     */
    public function __construct($ParcelShopID, $ShopAddress, $Homepage, $GeoData, $ExpressCutOff, $ShopServiceList, $OpeningHoursList, $HolidayList, $ExtraInfo)
    {
      $this->ParcelShopID = $ParcelShopID;
      $this->ShopAddress = $ShopAddress;
      $this->Homepage = $Homepage;
      $this->GeoData = $GeoData;
      $this->ExpressCutOff = $ExpressCutOff;
      $this->ShopServiceList = $ShopServiceList;
      $this->OpeningHoursList = $OpeningHoursList;
      $this->HolidayList = $HolidayList;
      $this->ExtraInfo = $ExtraInfo;
    }

    /**
     * @return int
     */
    public function getParcelShopID()
    {
      return $this->ParcelShopID;
    }

    /**
     * @param int $ParcelShopID
     * @return \DPD\API\ParcelShopType
     */
    public function setParcelShopID($ParcelShopID)
    {
      $this->ParcelShopID = $ParcelShopID;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShopAddress()
    {
      return $this->ShopAddress;
    }

    /**
     * @param AddressType $ShopAddress
     * @return \DPD\API\ParcelShopType
     */
    public function setShopAddress($ShopAddress)
    {
      $this->ShopAddress = $ShopAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
      return $this->Homepage;
    }

    /**
     * @param string $Homepage
     * @return \DPD\API\ParcelShopType
     */
    public function setHomepage($Homepage)
    {
      $this->Homepage = $Homepage;
      return $this;
    }

    /**
     * @return GeoDataType
     */
    public function getGeoData()
    {
      return $this->GeoData;
    }

    /**
     * @param GeoDataType $GeoData
     * @return \DPD\API\ParcelShopType
     */
    public function setGeoData($GeoData)
    {
      $this->GeoData = $GeoData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpressCutOff()
    {
      return $this->ExpressCutOff;
    }

    /**
     * @param string $ExpressCutOff
     * @return \DPD\API\ParcelShopType
     */
    public function setExpressCutOff($ExpressCutOff)
    {
      $this->ExpressCutOff = $ExpressCutOff;
      return $this;
    }

    /**
     * @return ShopServiceType[]
     */
    public function getShopServiceList()
    {
      return $this->ShopServiceList;
    }

    /**
     * @param ShopServiceType[] $ShopServiceList
     * @return \DPD\API\ParcelShopType
     */
    public function setShopServiceList($ShopServiceList)
    {
      $this->ShopServiceList = $ShopServiceList;
      return $this;
    }

    /**
     * @return OpeningHoursType[]
     */
    public function getOpeningHoursList()
    {
      return $this->OpeningHoursList;
    }

    /**
     * @param OpeningHoursType[] $OpeningHoursList
     * @return \DPD\API\ParcelShopType
     */
    public function setOpeningHoursList($OpeningHoursList)
    {
      $this->OpeningHoursList = $OpeningHoursList;
      return $this;
    }

    /**
     * @return HolidayType[]
     */
    public function getHolidayList()
    {
      return $this->HolidayList;
    }

    /**
     * @param HolidayType[] $HolidayList
     * @return \DPD\API\ParcelShopType
     */
    public function setHolidayList($HolidayList)
    {
      $this->HolidayList = $HolidayList;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param string $ExtraInfo
     * @return \DPD\API\ParcelShopType
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

}
