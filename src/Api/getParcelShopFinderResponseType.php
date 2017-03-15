<?php

namespace ShippingTutorial\API;

class getParcelShopFinderResponseType
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
     * @var boolean $Ack
     * @access public
     */
    public $Ack = null;

    /**
     * @var dateTime $TimeStamp
     * @access public
     */
    public $TimeStamp = null;

    /**
     * @var int $ResultCounter
     * @access public
     */
    public $ResultCounter = null;

    /**
     * @var ParcelShopType[] $ParcelShopList
     * @access public
     */
    public $ParcelShopList = null;

    /**
     * @var string $SystemInformation
     * @access public
     */
    public $SystemInformation = null;

    /**
     * @var ErrorDataType[] $ErrorDataList
     * @access public
     */
    public $ErrorDataList = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param boolean $Ack
     * @param dateTime $TimeStamp
     * @param int $ResultCounter
     * @param ParcelShopType[] $ParcelShopList
     * @param string $SystemInformation
     * @param ErrorDataType[] $ErrorDataList
     * @access public
     */
    public function __construct($Version, $Language, $Ack, $TimeStamp, $ResultCounter, $ParcelShopList, $SystemInformation, $ErrorDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp;
      $this->ResultCounter = $ResultCounter;
      $this->ParcelShopList = $ParcelShopList;
      $this->SystemInformation = $SystemInformation;
      $this->ErrorDataList = $ErrorDataList;
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
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
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
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAck()
    {
      return $this->Ack;
    }

    /**
     * @param boolean $Ack
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setAck($Ack)
    {
      $this->Ack = $Ack;
      return $this;
    }

    /**
     * @return dateTime
     */
    public function getTimeStamp()
    {
      return $this->TimeStamp;
    }

    /**
     * @param dateTime $TimeStamp
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCounter()
    {
      return $this->ResultCounter;
    }

    /**
     * @param int $ResultCounter
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setResultCounter($ResultCounter)
    {
      $this->ResultCounter = $ResultCounter;
      return $this;
    }

    /**
     * @return ParcelShopType[]
     */
    public function getParcelShopList()
    {
      return $this->ParcelShopList;
    }

    /**
     * @param ParcelShopType[] $ParcelShopList
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setParcelShopList($ParcelShopList)
    {
      $this->ParcelShopList = $ParcelShopList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemInformation()
    {
      return $this->SystemInformation;
    }

    /**
     * @param string $SystemInformation
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setSystemInformation($SystemInformation)
    {
      $this->SystemInformation = $SystemInformation;
      return $this;
    }

    /**
     * @return ErrorDataType[]
     */
    public function getErrorDataList()
    {
      return $this->ErrorDataList;
    }

    /**
     * @param ErrorDataType[] $ErrorDataList
     * @return \ShippingTutorial\API\getParcelShopFinderResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
