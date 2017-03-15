<?php

namespace ShippingTutorial\API;

class LabelDataType
{

    /**
     * @var string $YourInternalID
     * @access public
     */
    public $YourInternalID = null;

    /**
     * @var string $ParcelNo
     * @access public
     */
    public $ParcelNo = null;

    /**
     * @param string $YourInternalID
     * @param string $ParcelNo
     * @access public
     */
    public function __construct($YourInternalID, $ParcelNo)
    {
      $this->YourInternalID = $YourInternalID;
      $this->ParcelNo = $ParcelNo;
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
     * @return \DPD\API\LabelDataType
     */
    public function setYourInternalID($YourInternalID)
    {
      $this->YourInternalID = $YourInternalID;
      return $this;
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
     * @return \DPD\API\LabelDataType
     */
    public function setParcelNo($ParcelNo)
    {
      $this->ParcelNo = $ParcelNo;
      return $this;
    }

}
