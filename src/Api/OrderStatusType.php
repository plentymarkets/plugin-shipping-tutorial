<?php

namespace ShippingTutorial\API;

class OrderStatusType
{

    /**
     * @var string $ParcelNo
     * @access public
     */
    public $ParcelNo = null;

    /**
     * @var OrderInformationType $OrderInformation
     * @access public
     */
    public $OrderInformation = null;

    /**
     * @var AddressType $ShipAddress
     * @access public
     */
    public $ShipAddress = null;

    /**
     * @var StatusInfoType $LastStatusInfo
     * @access public
     */
    public $LastStatusInfo = null;

    /**
     * @var StatusInfoContainerType $StatusInfoContainer
     * @access public
     */
    public $StatusInfoContainer = null;

    /**
     * @param string $ParcelNo
     * @param OrderInformationType $OrderInformation
     * @param AddressType $ShipAddress
     * @param StatusInfoType $LastStatusInfo
     * @param StatusInfoContainerType $StatusInfoContainer
     * @access public
     */
    public function __construct($ParcelNo, $OrderInformation, $ShipAddress, $LastStatusInfo, $StatusInfoContainer)
    {
      $this->ParcelNo = $ParcelNo;
      $this->OrderInformation = $OrderInformation;
      $this->ShipAddress = $ShipAddress;
      $this->LastStatusInfo = $LastStatusInfo;
      $this->StatusInfoContainer = $StatusInfoContainer;
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
     * @return \DPD\API\OrderStatusType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

    /**
     * @return OrderInformationType
     */
    public function getOrderInformation()
    {
      return $this->OrderInformation;
    }

    /**
     * @param OrderInformationType $OrderInformation
     * @return \DPD\API\OrderStatusType
     */
    public function setOrderInformation($OrderInformation)
    {
      $this->OrderInformation = $OrderInformation;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShipAddress()
    {
      return $this->ShipAddress;
    }

    /**
     * @param AddressType $ShipAddress
     * @return \DPD\API\OrderStatusType
     */
    public function setShipAddress($ShipAddress)
    {
      $this->ShipAddress = $ShipAddress;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getLastStatusInfo()
    {
      return $this->LastStatusInfo;
    }

    /**
     * @param StatusInfoType $LastStatusInfo
     * @return \DPD\API\OrderStatusType
     */
    public function setLastStatusInfo($LastStatusInfo)
    {
      $this->LastStatusInfo = $LastStatusInfo;
      return $this;
    }

    /**
     * @return StatusInfoContainerType
     */
    public function getStatusInfoContainer()
    {
      return $this->StatusInfoContainer;
    }

    /**
     * @param StatusInfoContainerType $StatusInfoContainer
     * @return \DPD\API\OrderStatusType
     */
    public function setStatusInfoContainer($StatusInfoContainer)
    {
      $this->StatusInfoContainer = $StatusInfoContainer;
      return $this;
    }

}
