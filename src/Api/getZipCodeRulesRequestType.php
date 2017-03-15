<?php

namespace ShippingTutorial\API;

class getZipCodeRulesRequestType
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
     * @param int $Version
     * @param string $Language
     * @param PartnerCredentialType $PartnerCredentials
     * @param UserCredentialType $UserCredentials
     * @access public
     */
    public function __construct($Version, $Language, $PartnerCredentials, $UserCredentials)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->PartnerCredentials = $PartnerCredentials;
      $this->UserCredentials = $UserCredentials;
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
     * @return \ShippingTutorial\API\getZipCodeRulesRequestType
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
     * @return \ShippingTutorial\API\getZipCodeRulesRequestType
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
     * @return \ShippingTutorial\API\getZipCodeRulesRequestType
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
     * @return \ShippingTutorial\API\getZipCodeRulesRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

}
