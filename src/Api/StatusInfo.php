<?php

namespace ShippingTutorial\API;

class StatusInfo
{

    /**
     * @var status $status
     * @access public
     */
    public $status = null;

    /**
     * @var ContentLine $label
     * @access public
     */
    public $label = null;

    /**
     * @var ContentItem $description
     * @access public
     */
    public $description = null;

    /**
     * @var boolean $statusHasBeenReached
     * @access public
     */
    public $statusHasBeenReached = null;

    /**
     * @var boolean $isCurrentStatus
     * @access public
     */
    public $isCurrentStatus = null;

    /**
     * @var boolean $showContactInfo
     * @access public
     */
    public $showContactInfo = null;

    /**
     * @var ContentLine $location
     * @access public
     */
    public $location = null;

    /**
     * @var ContentLine $date
     * @access public
     */
    public $date = null;

    /**
     * @var ContentItem[] $normalItems
     * @access public
     */
    public $normalItems = null;

    /**
     * @var ContentItem[] $importantItems
     * @access public
     */
    public $importantItems = null;

    /**
     * @var ContentItem[] $errorItems
     * @access public
     */
    public $errorItems = null;

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
     * @access public
     */
    public function __construct($status, $label, $description, $statusHasBeenReached, $isCurrentStatus, $showContactInfo, $location, $date, $normalItems, $importantItems, $errorItems)
    {
      $this->status = $status;
      $this->label = $label;
      $this->description = $description;
      $this->statusHasBeenReached = $statusHasBeenReached;
      $this->isCurrentStatus = $isCurrentStatus;
      $this->showContactInfo = $showContactInfo;
      $this->location = $location;
      $this->date = $date;
      $this->normalItems = $normalItems;
      $this->importantItems = $importantItems;
      $this->errorItems = $errorItems;
    }

    /**
     * @return status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param status $status
     * @return \DPD\API\StatusInfo
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param ContentLine $label
     * @return \DPD\API\StatusInfo
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return ContentItem
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param ContentItem $description
     * @return \DPD\API\StatusInfo
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatusHasBeenReached()
    {
      return $this->statusHasBeenReached;
    }

    /**
     * @param boolean $statusHasBeenReached
     * @return \DPD\API\StatusInfo
     */
    public function setStatusHasBeenReached($statusHasBeenReached)
    {
      $this->statusHasBeenReached = $statusHasBeenReached;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCurrentStatus()
    {
      return $this->isCurrentStatus;
    }

    /**
     * @param boolean $isCurrentStatus
     * @return \DPD\API\StatusInfo
     */
    public function setIsCurrentStatus($isCurrentStatus)
    {
      $this->isCurrentStatus = $isCurrentStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContactInfo()
    {
      return $this->showContactInfo;
    }

    /**
     * @param boolean $showContactInfo
     * @return \DPD\API\StatusInfo
     */
    public function setShowContactInfo($showContactInfo)
    {
      $this->showContactInfo = $showContactInfo;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param ContentLine $location
     * @return \DPD\API\StatusInfo
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return ContentLine
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param ContentLine $date
     * @return \DPD\API\StatusInfo
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getNormalItems()
    {
      return $this->normalItems;
    }

    /**
     * @param ContentItem[] $normalItems
     * @return \DPD\API\StatusInfo
     */
    public function setNormalItems($normalItems)
    {
      $this->normalItems = $normalItems;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getImportantItems()
    {
      return $this->importantItems;
    }

    /**
     * @param ContentItem[] $importantItems
     * @return \DPD\API\StatusInfo
     */
    public function setImportantItems($importantItems)
    {
      $this->importantItems = $importantItems;
      return $this;
    }

    /**
     * @return ContentItem[]
     */
    public function getErrorItems()
    {
      return $this->errorItems;
    }

    /**
     * @param ContentItem[] $errorItems
     * @return \DPD\API\StatusInfo
     */
    public function setErrorItems($errorItems)
    {
      $this->errorItems = $errorItems;
      return $this;
    }

}
