<?php

namespace ShippingTutorial\API;

class TrackingResult
{

    /**
     * @var ShipmentInfo $shipmentInfo
     * @access public
     */
    public $shipmentInfo = null;

    /**
     * @var StatusInfo[] $statusInfo
     * @access public
     */
    public $statusInfo = null;

    /**
     * @var ContentItem[] $contactInfo
     * @access public
     */
    public $contactInfo = null;

    /**
     * @param ShipmentInfo $shipmentInfo
     * @param StatusInfo[] $statusInfo
     * @param ContentItem[] $contactInfo
     * @access public
     */
    public function __construct($shipmentInfo, $statusInfo, $contactInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      $this->statusInfo = $statusInfo;
      $this->contactInfo = $contactInfo;
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->shipmentInfo;
    }

    /**
     * @param ShipmentInfo $shipmentInfo
     * @return \DPD\API\TrackingResult
     */
    public function setShipmentInfo($shipmentInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      return $this;
    }

    /**
     * @return StatusInfo[]
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param StatusInfo[] $statusInfo
     * @return \DPD\API\TrackingResult
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getContactInfo()
    {
      return $this->contactInfo;
    }

    /**
     * @param ContentItem[] $contactInfo
     * @return \DPD\API\TrackingResult
     */
    public function setContactInfo($contactInfo)
    {
      $this->contactInfo = $contactInfo;
      return $this;
    }

}
