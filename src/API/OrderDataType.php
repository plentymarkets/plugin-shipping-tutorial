<?php

namespace ShippingTutorial\API;

class OrderDataType
{

    /**
     * @var AddressType $ShipAddress
     * @access public
     */
    public $ShipAddress = null;

    /**
     * @var int $ParcelShopID
     * @access public
     */
    public $ParcelShopID = null;

    /**
     * @var ParcelDataType $ParcelData
     * @access public
     */
    public $ParcelData = null;

    /**
     * @param AddressType $ShipAddress
     * @param int $ParcelShopID
     * @param ParcelDataType $ParcelData
     * @access public
     */
    public function __construct($ShipAddress, $ParcelShopID, $ParcelData)
    {
      $this->ShipAddress = $ShipAddress;
      $this->ParcelShopID = $ParcelShopID;
      $this->ParcelData = $ParcelData;
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
     * @return \ShippingTutorial\API\OrderDataType
     */
    public function setShipAddress($ShipAddress)
    {
      $this->ShipAddress = $ShipAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelShopID()
    {
      return $this->ParcelShopID;
    }

    /**
     * @param int $ParcelShopID
     * @return \ShippingTutorial\API\OrderDataType
     */
    public function setParcelShopID($ParcelShopID)
    {
      $this->ParcelShopID = $ParcelShopID;
      return $this;
    }

    /**
     * @return ParcelDataType
     */
    public function getParcelData()
    {
      return $this->ParcelData;
    }

    /**
     * @param ParcelDataType $ParcelData
     * @return \ShippingTutorial\API\OrderDataType
     */
    public function setParcelData($ParcelData)
    {
      $this->ParcelData = $ParcelData;
      return $this;
    }

}
