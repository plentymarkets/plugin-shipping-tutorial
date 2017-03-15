<?php

namespace ShippingTutorial\API;

class ParcelDataType
{

    /**
     * @var ShipServiceType $ShipService
     * @access public
     */
    public $ShipService = null;

    /**
     * @var float $Weight
     * @access public
     */
    public $Weight = null;

    /**
     * @var string $Content
     * @access public
     */
    public $Content = null;

    /**
     * @var string $YourInternalID
     * @access public
     */
    public $YourInternalID = null;

    /**
     * @var string $Reference1
     * @access public
     */
    public $Reference1 = null;

    /**
     * @var string $Reference2
     * @access public
     */
    public $Reference2 = null;

    /**
     * @var CODType $COD
     * @access public
     */
    public $COD = null;

    /**
     * @param ShipServiceType $ShipService
     * @param float $Weight
     * @param string $Content
     * @param string $YourInternalID
     * @param string $Reference1
     * @param string $Reference2
     * @param CODType $COD
     * @access public
     */
    public function __construct($ShipService, $Weight, $Content, $YourInternalID, $Reference1, $Reference2, $COD)
    {
      $this->ShipService = $ShipService;
      $this->Weight = $Weight;
      $this->Content = $Content;
      $this->YourInternalID = $YourInternalID;
      $this->Reference1 = $Reference1;
      $this->Reference2 = $Reference2;
      $this->COD = $COD;
    }

    /**
     * @return ShipServiceType
     */
    public function getShipService()
    {
      return $this->ShipService;
    }

    /**
     * @param ShipServiceType $ShipService
     * @return \DPD\API\ParcelDataType
     */
    public function setShipService($ShipService)
    {
      $this->ShipService = $ShipService;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \DPD\API\ParcelDataType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \DPD\API\ParcelDataType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return string
     */
    public function getYourInternalID()
    {
      return $this->YourInternalID;
    }

    /**
     * @param string $YourInternalID
     * @return \DPD\API\ParcelDataType
     */
    public function setYourInternalID($YourInternalID)
    {
      $this->YourInternalID = $YourInternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1()
    {
      return $this->Reference1;
    }

    /**
     * @param string $Reference1
     * @return \DPD\API\ParcelDataType
     */
    public function setReference1($Reference1)
    {
      $this->Reference1 = $Reference1;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference2()
    {
      return $this->Reference2;
    }

    /**
     * @param string $Reference2
     * @return \DPD\API\ParcelDataType
     */
    public function setReference2($Reference2)
    {
      $this->Reference2 = $Reference2;
      return $this;
    }

    /**
     * @return CODType
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param CODType $COD
     * @return \DPD\API\ParcelDataType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
    }

}
