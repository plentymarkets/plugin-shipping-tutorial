<?php

namespace ShippingTutorial\API;

class getParcelLifeCycleResponseType
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
     * @var TrackingResult $ParcelLifeCycleData
     * @access public
     */
    public $ParcelLifeCycleData = null;

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
     * @param TrackingResult $ParcelLifeCycleData
     * @param string $SystemInformation
     * @param ErrorDataType[] $ErrorDataList
     * @access public
     */
    public function __construct($Version, $Language, $Ack, $TimeStamp, $ParcelLifeCycleData, $SystemInformation, $ErrorDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp;
      $this->ParcelLifeCycleData = $ParcelLifeCycleData;
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return TrackingResult
     */
    public function getParcelLifeCycleData()
    {
      return $this->ParcelLifeCycleData;
    }

    /**
     * @param TrackingResult $ParcelLifeCycleData
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
     */
    public function setParcelLifeCycleData($ParcelLifeCycleData)
    {
      $this->ParcelLifeCycleData = $ParcelLifeCycleData;
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
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
     * @return \ShippingTutorial\API\getParcelLifeCycleResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
