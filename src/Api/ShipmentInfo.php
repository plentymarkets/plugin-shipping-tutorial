<?php

namespace ShippingTutorial\API;

//include_once('StatusInfo.php');

class ShipmentInfo extends StatusInfo
{

    /**
     * @var ContentItem $receiver
     * @access public
     */
    public $receiver = null;

    /**
     * @var ContentItem $predictInformation
     * @access public
     */
    public $predictInformation = null;

    /**
     * @var ContentItem $serviceDescription
     * @access public
     */
    public $serviceDescription = null;

    /**
     * @var ContentItem $additionalServiceElements
     * @access public
     */
    public $additionalServiceElements = null;

    /**
     * @var TrackingProperty[] $trackingProperty
     * @access public
     */
    public $trackingProperty = null;

    /**
     * @param status $status
     * @param ContentLine $label
     * @param ContentItem $description
     * @param boolean $statusHasBeenReached
     * @param boolean $isCurrentStatus
     * @param boolean $showContactInfo
     * @param ContentLine $location
     * @param ContentLine $date
     * @param ContentItem[] $normalItems
     * @param ContentItem[] $importantItems
     * @param ContentItem[] $errorItems
     * @param ContentItem $receiver
     * @param ContentItem $predictInformation
     * @param ContentItem $serviceDescription
     * @param ContentItem $additionalServiceElements
     * @param TrackingProperty[] $trackingProperty
     * @access public
     */
    public function __construct($status, $label, $description, $statusHasBeenReached, $isCurrentStatus, $showContactInfo, $location, $date, $normalItems, $importantItems, $errorItems, $receiver, $predictInformation, $serviceDescription, $additionalServiceElements, $trackingProperty)
    {
      parent::__construct($status, $label, $description, $statusHasBeenReached, $isCurrentStatus, $showContactInfo, $location, $date, $normalItems, $importantItems, $errorItems);
      $this->receiver = $receiver;
      $this->predictInformation = $predictInformation;
      $this->serviceDescription = $serviceDescription;
      $this->additionalServiceElements = $additionalServiceElements;
      $this->trackingProperty = $trackingProperty;
    }

    /**
     * @return ContentItem
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ContentItem $receiver
     * @return \DPD\API\ShipmentInfo
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getPredictInformation()
    {
      return $this->predictInformation;
    }

    /**
     * @param ContentItem $predictInformation
     * @return \DPD\API\ShipmentInfo
     */
    public function setPredictInformation($predictInformation)
    {
      $this->predictInformation = $predictInformation;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getServiceDescription()
    {
      return $this->serviceDescription;
    }

    /**
     * @param ContentItem $serviceDescription
     * @return \DPD\API\ShipmentInfo
     */
    public function setServiceDescription($serviceDescription)
    {
      $this->serviceDescription = $serviceDescription;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getAdditionalServiceElements()
    {
      return $this->additionalServiceElements;
    }

    /**
     * @param ContentItem $additionalServiceElements
     * @return \DPD\API\ShipmentInfo
     */
    public function setAdditionalServiceElements($additionalServiceElements)
    {
      $this->additionalServiceElements = $additionalServiceElements;
      return $this;
    }

    /**
     * @return TrackingProperty[]
     */
    public function getTrackingProperty()
    {
      return $this->trackingProperty;
    }

    /**
     * @param TrackingProperty[] $trackingProperty
     * @return \DPD\API\ShipmentInfo
     */
    public function setTrackingProperty($trackingProperty)
    {
      $this->trackingProperty = $trackingProperty;
      return $this;
    }

}
