<?php

namespace ShippingTutorial\API;

class setOrderResponseType
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
     * @var LabelResponseType $LabelResponse
     * @access public
     */
    public $LabelResponse = null;

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
     * @param LabelResponseType $LabelResponse
     * @param string $SystemInformation
     * @param ErrorDataType[] $ErrorDataList
     * @access public
     */
    public function __construct($Version, $Language, $Ack, $TimeStamp, $LabelResponse, $SystemInformation, $ErrorDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp;
      $this->LabelResponse = $LabelResponse;
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
     * @return \ShippingTutorial\API\setOrderResponseType
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
     * @return \ShippingTutorial\API\setOrderResponseType
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
     * @return \ShippingTutorial\API\setOrderResponseType
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
     * @return \ShippingTutorial\API\setOrderResponseType
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return LabelResponseType
     */
    public function getLabelResponse()
    {
      return $this->LabelResponse;
    }

    /**
     * @param LabelResponseType $LabelResponse
     * @return \ShippingTutorial\API\setOrderResponseType
     */
    public function setLabelResponse($LabelResponse)
    {
      $this->LabelResponse = $LabelResponse;
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
     * @return \ShippingTutorial\API\setOrderResponseType
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
     * @return \ShippingTutorial\API\setOrderResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
