<?php

namespace DPD\API;

class getParcelLifeCycleRequestType
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
     * @param int $Version
     * @param string $Language
     * @param PartnerCredentialType $PartnerCredentials
     * @param UserCredentialType $UserCredentials
     * @param string $ParcelNo
     * @access public
     */
    public function __construct($Version, $Language, $PartnerCredentials, $UserCredentials, $ParcelNo)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->PartnerCredentials = $PartnerCredentials;
      $this->UserCredentials = $UserCredentials;
      $this->ParcelNo = $ParcelNo;
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
     * @return \DPD\API\getParcelLifeCycleRequestType
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
     * @return \DPD\API\getParcelLifeCycleRequestType
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
     * @return \DPD\API\getParcelLifeCycleRequestType
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
     * @return \DPD\API\getParcelLifeCycleRequestType
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
     * @return \DPD\API\getParcelLifeCycleRequestType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

}
