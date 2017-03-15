<?php

namespace ShippingTutorial\API;

class getOrderStatusResponseType
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
     * @var OrderStatusType $OrderStatus
     * @access public
     */
    public $OrderStatus = null;

    /**
     * @var string $SystemInformation
     * @access public
     */
    public $SystemInformation = null;

    /**
     * @var ErrorDataType1[] $ErrorDataList
     * @access public
     */
    public $ErrorDataList = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param boolean $Ack
     * @param dateTime $TimeStamp
     * @param OrderStatusType $OrderStatus
     * @param string $SystemInformation
     * @param ErrorDataType1[] $ErrorDataList
     * @access public
     */
    public function __construct($Version, $Language, $Ack, $TimeStamp, $OrderStatus, $SystemInformation, $ErrorDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp;
      $this->OrderStatus = $OrderStatus;
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
     * @return \DPD\API\getOrderStatusResponseType
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
     * @return \DPD\API\getOrderStatusResponseType
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
     * @return \DPD\API\getOrderStatusResponseType
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
     * @return \DPD\API\getOrderStatusResponseType
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return OrderStatusType
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatusType $OrderStatus
     * @return \DPD\API\getOrderStatusResponseType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
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
     * @return \DPD\API\getOrderStatusResponseType
     */
    public function setSystemInformation($SystemInformation)
    {
      $this->SystemInformation = $SystemInformation;
      return $this;
    }

    /**
     * @return ErrorDataType1[]
     */
    public function getErrorDataList()
    {
      return $this->ErrorDataList;
    }

    /**
     * @param ErrorDataType1[] $ErrorDataList
     * @return \DPD\API\getOrderStatusResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
