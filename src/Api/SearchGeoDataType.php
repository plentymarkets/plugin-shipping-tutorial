<?php

namespace ShippingTutorial\API;

class SearchGeoDataType
{

    /**
     * @var float $Longitude
     * @access public
     */
    public $Longitude = null;

    /**
     * @var float $Latitude
     * @access public
     */
    public $Latitude = null;

    /**
     * @param float $Longitude
     * @param float $Latitude
     * @access public
     */
    public function __construct($Longitude, $Latitude)
    {
      $this->Longitude = $Longitude;
      $this->Latitude = $Latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return \DPD\API\SearchGeoDataType
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return \DPD\API\SearchGeoDataType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

}
