<?php

namespace ShippingTutorial\API;

class getOrderStatusRequestType
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
     * @var string $ParcelNo
     * @access public
     */
    public $ParcelNo = null;

    /**
     * @var string $DeliveryZipCode
     * @access public
     */
    public $DeliveryZipCode = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param PartnerCredentialType $PartnerCredentials
     * @param UserCredentialType $UserCredentials
     * @param string $ParcelNo
     * @param string $DeliveryZipCode
     * @access public
     */
    public function __construct($Version, $Language, $PartnerCredentials, $UserCredentials, $ParcelNo, $DeliveryZipCode)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->PartnerCredentials = $PartnerCredentials;
      $this->UserCredentials = $UserCredentials;
      $this->ParcelNo = $ParcelNo;
      $this->DeliveryZipCode = $DeliveryZipCode;
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
     * @return \ShippingTutorial\API\getOrderStatusRequestType
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
     * @return \ShippingTutorial\API\getOrderStatusRequestType
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
     * @return \ShippingTutorial\API\getOrderStatusRequestType
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
     * @return \ShippingTutorial\API\getOrderStatusRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelNo()
    {
      return $this->ParcelNo;
    }

    /**
     * @param string $ParcelNo
     * @return \ShippingTutorial\API\getOrderStatusRequestType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZipCode()
    {
      return $this->DeliveryZipCode;
    }

    /**
     * @param string $DeliveryZipCode
     * @return \ShippingTutorial\API\getOrderStatusRequestType
     */
    public function setDeliveryZipCode($DeliveryZipCode)
    {
      $this->DeliveryZipCode = $DeliveryZipCode;
      return $this;
    }

}
