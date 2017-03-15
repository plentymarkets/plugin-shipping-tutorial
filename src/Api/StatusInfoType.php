<?php

namespace ShippingTutorial\API;

class StatusInfoType
{

    /**
     * @var boolean $StatusReached
     * @access public
     */
    public $StatusReached = null;

    /**
     * @var string $StatusID
     * @access public
     */
    public $StatusID = null;

    /**
     * @var string $Headline
     * @access public
     */
    public $Headline = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $StatusText_Mobile
     * @access public
     */
    public $StatusText_Mobile = null;

    /**
     * @var string $StatusText_Desktop
     * @access public
     */
    public $StatusText_Desktop = null;

    /**
     * @var string $StatusDate
     * @access public
     */
    public $StatusDate = null;

    /**
     * @var DepotDataType $DepotData
     * @access public
     */
    public $DepotData = null;

    /**
     * @param boolean $StatusReached
     * @param string $StatusID
     * @param string $Headline
     * @param string $Description
     * @param string $StatusText_Mobile
     * @param string $StatusText_Desktop
     * @param string $StatusDate
     * @param DepotDataType $DepotData
     * @access public
     */
    public function __construct($StatusReached, $StatusID, $Headline, $Description, $StatusText_Mobile, $StatusText_Desktop, $StatusDate, $DepotData)
    {
      $this->StatusReached = $StatusReached;
      $this->StatusID = $StatusID;
      $this->Headline = $Headline;
      $this->Description = $Description;
      $this->StatusText_Mobile = $StatusText_Mobile;
      $this->StatusText_Desktop = $StatusText_Desktop;
      $this->StatusDate = $StatusDate;
      $this->DepotData = $DepotData;
    }

    /**
     * @return boolean
     */
    public function getStatusReached()
    {
      return $this->StatusReached;
    }

    /**
     * @param boolean $StatusReached
     * @return \DPD\API\StatusInfoType
     */
    public function setStatusReached($StatusReached)
    {
      $this->StatusReached = $StatusReached;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param string $StatusID
     * @return \DPD\API\StatusInfoType
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->Headline;
    }

    /**
     * @param string $Headline
     * @return \DPD\API\StatusInfoType
     */
    public function setHeadline($Headline)
    {
      $this->Headline = $Headline;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DPD\API\StatusInfoType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText_Mobile()
    {
      return $this->StatusText_Mobile;
    }

    /**
     * @param string $StatusText_Mobile
     * @return \DPD\API\StatusInfoType
     */
    public function setStatusText_Mobile($StatusText_Mobile)
    {
      $this->StatusText_Mobile = $StatusText_Mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText_Desktop()
    {
      return $this->StatusText_Desktop;
    }

    /**
     * @param string $StatusText_Desktop
     * @return \DPD\API\StatusInfoType
     */
    public function setStatusText_Desktop($StatusText_Desktop)
    {
      $this->StatusText_Desktop = $StatusText_Desktop;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
      return $this->StatusDate;
    }

    /**
     * @param string $StatusDate
     * @return \DPD\API\StatusInfoType
     */
    public function setStatusDate($StatusDate)
    {
      $this->StatusDate = $StatusDate;
      return $this;
    }

    /**
     * @return DepotDataType
     */
    public function getDepotData()
    {
      return $this->DepotData;
    }

    /**
     * @param DepotDataType $DepotData
     * @return \DPD\API\StatusInfoType
     */
    public function setDepotData($DepotData)
    {
      $this->DepotData = $DepotData;
      return $this;
    }

}
