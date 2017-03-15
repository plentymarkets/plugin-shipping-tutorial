<?php

namespace ShippingTutorial\API;

class DepotDataType
{

    /**
     * @var string $Depot
     * @access public
     */
    public $Depot = null;

    /**
     * @var GeoDataType $GeoData
     * @access public
     */
    public $GeoData = null;

    /**
     * @var AddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @param string $Depot
     * @param GeoDataType $GeoData
     * @param AddressType $Address
     * @access public
     */
    public function __construct($Depot, $GeoData, $Address)
    {
      $this->Depot = $Depot;
      $this->GeoData = $GeoData;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getDepot()
    {
      return $this->Depot;
    }

    /**
     * @param string $Depot
     * @return \DPD\API\DepotDataType
     */
    public function setDepot($Depot)
    {
      $this->Depot = $Depot;
      return $this;
    }

    /**
     * @return GeoDataType
     */
    public function getGeoData()
    {
      return $this->GeoData;
    }

    /**
     * @param GeoDataType $GeoData
     * @return \DPD\API\DepotDataType
     */
    public function setGeoData($GeoData)
    {
      $this->GeoData = $GeoData;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \DPD\API\DepotDataType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
