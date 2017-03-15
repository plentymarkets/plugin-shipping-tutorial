<?php

namespace ShippingTutorial\API;

class StatusInfoContainerType
{

    /**
     * @var StatusInfoType $Start
     * @access public
     */
    public $Start = null;

    /**
     * @var StatusInfoType $OnTheRoad
     * @access public
     */
    public $OnTheRoad = null;

    /**
     * @var StatusInfoType $DeliveryDepot
     * @access public
     */
    public $DeliveryDepot = null;

    /**
     * @var StatusInfoType $CarLoad
     * @access public
     */
    public $CarLoad = null;

    /**
     * @var StatusInfoType $Delivered
     * @access public
     */
    public $Delivered = null;

    /**
     * @param StatusInfoType $Start
     * @param StatusInfoType $OnTheRoad
     * @param StatusInfoType $DeliveryDepot
     * @param StatusInfoType $CarLoad
     * @param StatusInfoType $Delivered
     * @access public
     */
    public function __construct($Start, $OnTheRoad, $DeliveryDepot, $CarLoad, $Delivered)
    {
      $this->Start = $Start;
      $this->OnTheRoad = $OnTheRoad;
      $this->DeliveryDepot = $DeliveryDepot;
      $this->CarLoad = $CarLoad;
      $this->Delivered = $Delivered;
    }

    /**
     * @return StatusInfoType
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param StatusInfoType $Start
     * @return \DPD\API\StatusInfoContainerType
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getOnTheRoad()
    {
      return $this->OnTheRoad;
    }

    /**
     * @param StatusInfoType $OnTheRoad
     * @return \DPD\API\StatusInfoContainerType
     */
    public function setOnTheRoad($OnTheRoad)
    {
      $this->OnTheRoad = $OnTheRoad;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getDeliveryDepot()
    {
      return $this->DeliveryDepot;
    }

    /**
     * @param StatusInfoType $DeliveryDepot
     * @return \DPD\API\StatusInfoContainerType
     */
    public function setDeliveryDepot($DeliveryDepot)
    {
      $this->DeliveryDepot = $DeliveryDepot;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getCarLoad()
    {
      return $this->CarLoad;
    }

    /**
     * @param StatusInfoType $CarLoad
     * @return \DPD\API\StatusInfoContainerType
     */
    public function setCarLoad($CarLoad)
    {
      $this->CarLoad = $CarLoad;
      return $this;
    }

    /**
     * @return StatusInfoType
     */
    public function getDelivered()
    {
      return $this->Delivered;
    }

    /**
     * @param StatusInfoType $Delivered
     * @return \DPD\API\StatusInfoContainerType
     */
    public function setDelivered($Delivered)
    {
      $this->Delivered = $Delivered;
      return $this;
    }

}
