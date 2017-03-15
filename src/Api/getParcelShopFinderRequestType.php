<?php

namespace ShippingTutorial\API;

class getParcelShopFinderRequestType
{

    /**
     * @var int $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var PartnerCredentialType $PartnerCredentials
     * @access public
     */
    public $PartnerCredentials = null;

    /**
     * @var UserCredentialType $UserCredentials
     * @access public
     */
    public $UserCredentials = null;

    /**
     * @var int $MaxReturnValues
     * @access public
     */
    public $MaxReturnValues = null;

    /**
     * @var SearchModeType $SearchMode
     * @access public
     */
    public $SearchMode = null;

    /**
     * @var SearchAddressType $SearchAddress
     * @access public
     */
    public $SearchAddress = null;

    /**
     * @var SearchGeoDataType $SearchGeoData
     * @access public
     */
    public $SearchGeoData = null;

    /**
     * @var string $HideOnClosedAt
     * @access public
     */
    public $HideOnClosedAt = null;

    /**
     * @var dpdServiceType $NeedService
     * @access public
     */
    public $NeedService = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param PartnerCredentialType $PartnerCredentials
     * @param UserCredentialType $UserCredentials
     * @param int $MaxReturnValues
     * @param SearchModeType $SearchMode
     * @param SearchAddressType $SearchAddress
     * @param SearchGeoDataType $SearchGeoData
     * @param string $HideOnClosedAt
     * @param dpdServiceType $NeedService
     * @access public
     */
    public function __construct($Version, $Language, $PartnerCredentials, $UserCredentials, $MaxReturnValues, $SearchMode, $SearchAddress, $SearchGeoData, $HideOnClosedAt, $NeedService)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->PartnerCredentials = $PartnerCredentials;
      $this->UserCredentials = $UserCredentials;
      $this->MaxReturnValues = $MaxReturnValues;
      $this->SearchMode = $SearchMode;
      $this->SearchAddress = $SearchAddress;
      $this->SearchGeoData = $SearchGeoData;
      $this->HideOnClosedAt = $HideOnClosedAt;
      $this->NeedService = $NeedService;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return PartnerCredentialType
     */
    public function getPartnerCredentials()
    {
      return $this->PartnerCredentials;
    }

    /**
     * @param PartnerCredentialType $PartnerCredentials
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setPartnerCredentials($PartnerCredentials)
    {
      $this->PartnerCredentials = $PartnerCredentials;
      return $this;
    }

    /**
     * @return UserCredentialType
     */
    public function getUserCredentials()
    {
      return $this->UserCredentials;
    }

    /**
     * @param UserCredentialType $UserCredentials
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxReturnValues()
    {
      return $this->MaxReturnValues;
    }

    /**
     * @param int $MaxReturnValues
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setMaxReturnValues($MaxReturnValues)
    {
      $this->MaxReturnValues = $MaxReturnValues;
      return $this;
    }

    /**
     * @return SearchModeType
     */
    public function getSearchMode()
    {
      return $this->SearchMode;
    }

    /**
     * @param SearchModeType $SearchMode
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setSearchMode($SearchMode)
    {
      $this->SearchMode = $SearchMode;
      return $this;
    }

    /**
     * @return SearchAddressType
     */
    public function getSearchAddress()
    {
      return $this->SearchAddress;
    }

    /**
     * @param SearchAddressType $SearchAddress
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setSearchAddress($SearchAddress)
    {
      $this->SearchAddress = $SearchAddress;
      return $this;
    }

    /**
     * @return SearchGeoDataType
     */
    public function getSearchGeoData()
    {
      return $this->SearchGeoData;
    }

    /**
     * @param SearchGeoDataType $SearchGeoData
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setSearchGeoData($SearchGeoData)
    {
      $this->SearchGeoData = $SearchGeoData;
      return $this;
    }

    /**
     * @return string
     */
    public function getHideOnClosedAt()
    {
      return $this->HideOnClosedAt;
    }

    /**
     * @param string $HideOnClosedAt
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setHideOnClosedAt($HideOnClosedAt)
    {
      $this->HideOnClosedAt = $HideOnClosedAt;
      return $this;
    }

    /**
     * @return dpdServiceType
     */
    public function getNeedService()
    {
      return $this->NeedService;
    }

    /**
     * @param dpdServiceType $NeedService
     * @return \DPD\API\getParcelShopFinderRequestType
     */
    public function setNeedService($NeedService)
    {
      $this->NeedService = $NeedService;
      return $this;
    }

}
