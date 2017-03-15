<?php

namespace ShippingTutorial\API;

class setOrderRequestType
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
     * @var OrderActionType $OrderAction
     * @access public
     */
    public $OrderAction = null;

    /**
     * @var OrderSettingsType $OrderSettings
     * @access public
     */
    public $OrderSettings = null;

    /**
     * @var OrderDataType[] $OrderDataList
     * @access public
     */
    public $OrderDataList = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param PartnerCredentialType $PartnerCredentials
     * @param UserCredentialType $UserCredentials
     * @param OrderActionType $OrderAction
     * @param OrderSettingsType $OrderSettings
     * @param OrderDataType[] $OrderDataList
     * @access public
     */
    public function __construct($Version, $Language, $PartnerCredentials, $UserCredentials, $OrderAction, $OrderSettings, $OrderDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->PartnerCredentials = $PartnerCredentials;
      $this->UserCredentials = $UserCredentials;
      $this->OrderAction = $OrderAction;
      $this->OrderSettings = $OrderSettings;
      $this->OrderDataList = $OrderDataList;
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
     * @return \ShippingTutorial\API\setOrderRequestType
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
     * @return \ShippingTutorial\API\setOrderRequestType
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
     * @return \ShippingTutorial\API\setOrderRequestType
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
     * @return \ShippingTutorial\API\setOrderRequestType
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return OrderActionType
     */
    public function getOrderAction()
    {
      return $this->OrderAction;
    }

    /**
     * @param OrderActionType $OrderAction
     * @return \ShippingTutorial\API\setOrderRequestType
     */
    public function setOrderAction($OrderAction)
    {
      $this->OrderAction = $OrderAction;
      return $this;
    }

    /**
     * @return OrderSettingsType
     */
    public function getOrderSettings()
    {
      return $this->OrderSettings;
    }

    /**
     * @param OrderSettingsType $OrderSettings
     * @return \ShippingTutorial\API\setOrderRequestType
     */
    public function setOrderSettings($OrderSettings)
    {
      $this->OrderSettings = $OrderSettings;
      return $this;
    }

    /**
     * @return OrderDataType[]
     */
    public function getOrderDataList()
    {
      return $this->OrderDataList;
    }

    /**
     * @param OrderDataType[] $OrderDataList
     * @return \ShippingTutorial\API\setOrderRequestType
     */
    public function setOrderDataList($OrderDataList)
    {
      $this->OrderDataList = $OrderDataList;
      return $this;
    }

}
