<?php

namespace ShippingTutorial\API;

class GeoDataType
{

    /**
     * @var float $Distance
     * @access public
     */
    public $Distance = null;

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
     * @var float $CoordinateX
     * @access public
     */
    public $CoordinateX = null;

    /**
     * @var float $CoordinateY
     * @access public
     */
    public $CoordinateY = null;

    /**
     * @var float $CoordinateZ
     * @access public
     */
    public $CoordinateZ = null;

    /**
     * @param float $Distance
     * @param float $Longitude
     * @param float $Latitude
     * @param float $CoordinateX
     * @param float $CoordinateY
     * @param float $CoordinateZ
     * @access public
     */
    public function __construct($Distance, $Longitude, $Latitude, $CoordinateX, $CoordinateY, $CoordinateZ)
    {
      $this->Distance = $Distance;
      $this->Longitude = $Longitude;
      $this->Latitude = $Latitude;
      $this->CoordinateX = $CoordinateX;
      $this->CoordinateY = $CoordinateY;
      $this->CoordinateZ = $CoordinateZ;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param float $Distance
     * @return \DPD\API\GeoDataType
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
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
     * @return \DPD\API\GeoDataType
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
     * @return \DPD\API\GeoDataType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateX()
    {
      return $this->CoordinateX;
    }

    /**
     * @param float $CoordinateX
     * @return \DPD\API\GeoDataType
     */
    public function setCoordinateX($CoordinateX)
    {
      $this->CoordinateX = $CoordinateX;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateY()
    {
      return $this->CoordinateY;
    }

    /**
     * @param float $CoordinateY
     * @return \DPD\API\GeoDataType
     */
    public function setCoordinateY($CoordinateY)
    {
      $this->CoordinateY = $CoordinateY;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordinateZ()
    {
      return $this->CoordinateZ;
    }

    /**
     * @param float $CoordinateZ
     * @return \DPD\API\GeoDataType
     */
    public function setCoordinateZ($CoordinateZ)
    {
      $this->CoordinateZ = $CoordinateZ;
      return $this;
    }

}
