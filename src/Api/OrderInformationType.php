<?php

namespace ShippingTutorial\API;

class OrderInformationType
{

    /**
     * @var string $ParcelNo
     * @access public
     */
    public $ParcelNo = null;

    /**
     * @var string $MPSID
     * @access public
     */
    public $MPSID = null;

    /**
     * @var int $ServiceCode
     * @access public
     */
    public $ServiceCode = null;

    /**
     * @var string $ProductName
     * @access public
     */
    public $ProductName = null;

    /**
     * @var string $Reference
     * @access public
     */
    public $Reference = null;

    /**
     * @var string $Weight
     * @access public
     */
    public $Weight = null;

    /**
     * @var string $CODAmount
     * @access public
     */
    public $CODAmount = null;

    /**
     * @var int $Collis
     * @access public
     */
    public $Collis = null;

    /**
     * @var string $ParcelNoList
     * @access public
     */
    public $ParcelNoList = null;

    /**
     * @var boolean $CompleteDelivery
     * @access public
     */
    public $CompleteDelivery = null;

    /**
     * @var string $ReceiverName
     * @access public
     */
    public $ReceiverName = null;

    /**
     * @var string $SenderName
     * @access public
     */
    public $SenderName = null;

    /**
     * @var string $EstimatedDeliveryTime
     * @access public
     */
    public $EstimatedDeliveryTime = null;

    /**
     * @param string $ParcelNo
     * @param string $MPSID
     * @param int $ServiceCode
     * @param string $ProductName
     * @param string $Reference
     * @param string $Weight
     * @param string $CODAmount
     * @param int $Collis
     * @param string $ParcelNoList
     * @param boolean $CompleteDelivery
     * @param string $ReceiverName
     * @param string $SenderName
     * @param string $EstimatedDeliveryTime
     * @access public
     */
    public function __construct($ParcelNo, $MPSID, $ServiceCode, $ProductName, $Reference, $Weight, $CODAmount, $Collis, $ParcelNoList, $CompleteDelivery, $ReceiverName, $SenderName, $EstimatedDeliveryTime)
    {
      $this->ParcelNo = $ParcelNo;
      $this->MPSID = $MPSID;
      $this->ServiceCode = $ServiceCode;
      $this->ProductName = $ProductName;
      $this->Reference = $Reference;
      $this->Weight = $Weight;
      $this->CODAmount = $CODAmount;
      $this->Collis = $Collis;
      $this->ParcelNoList = $ParcelNoList;
      $this->CompleteDelivery = $CompleteDelivery;
      $this->ReceiverName = $ReceiverName;
      $this->SenderName = $SenderName;
      $this->EstimatedDeliveryTime = $EstimatedDeliveryTime;
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
     * @return \DPD\API\OrderInformationType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMPSID()
    {
      return $this->MPSID;
    }

    /**
     * @param string $MPSID
     * @return \DPD\API\OrderInformationType
     */
    public function setMPSID($MPSID)
    {
      $this->MPSID = $MPSID;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param int $ServiceCode
     * @return \DPD\API\OrderInformationType
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \DPD\API\OrderInformationType
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \DPD\API\OrderInformationType
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \DPD\API\OrderInformationType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param string $CODAmount
     * @return \DPD\API\OrderInformationType
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCollis()
    {
      return $this->Collis;
    }

    /**
     * @param int $Collis
     * @return \DPD\API\OrderInformationType
     */
    public function setCollis($Collis)
    {
      $this->Collis = $Collis;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelNoList()
    {
      return $this->ParcelNoList;
    }

    /**
     * @param string $ParcelNoList
     * @return \DPD\API\OrderInformationType
     */
    public function setParcelNoList($ParcelNoList)
    {
      $this->ParcelNoList = $ParcelNoList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompleteDelivery()
    {
      return $this->CompleteDelivery;
    }

    /**
     * @param boolean $CompleteDelivery
     * @return \DPD\API\OrderInformationType
     */
    public function setCompleteDelivery($CompleteDelivery)
    {
      $this->CompleteDelivery = $CompleteDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
      return $this->ReceiverName;
    }

    /**
     * @param string $ReceiverName
     * @return \DPD\API\OrderInformationType
     */
    public function setReceiverName($ReceiverName)
    {
      $this->ReceiverName = $ReceiverName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
      return $this->SenderName;
    }

    /**
     * @param string $SenderName
     * @return \DPD\API\OrderInformationType
     */
    public function setSenderName($SenderName)
    {
      $this->SenderName = $SenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedDeliveryTime()
    {
      return $this->EstimatedDeliveryTime;
    }

    /**
     * @param string $EstimatedDeliveryTime
     * @return \DPD\API\OrderInformationType
     */
    public function setEstimatedDeliveryTime($EstimatedDeliveryTime)
    {
      $this->EstimatedDeliveryTime = $EstimatedDeliveryTime;
      return $this;
    }

}
