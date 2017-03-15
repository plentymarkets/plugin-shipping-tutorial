<?php

namespace ShippingTutorial\API;

class setOrder
{

    /**
     * @var setOrderRequestType $setOrderRequest
     * @access public
     */
    public $setOrderRequest = null;

    /**
     * @param setOrderRequestType $setOrderRequest
     * @access public
     */
    public function __construct($setOrderRequest)
    {
      $this->setOrderRequest = $setOrderRequest;
    }

    /**
     * @return setOrderRequestType
     */
    public function getSetOrderRequest()
    {
      return $this->setOrderRequest;
    }

    /**
     * @param setOrderRequestType $setOrderRequest
     * @return \ShippingTutorial\API\setOrder
     */
    public function setSetOrderRequest($setOrderRequest)
    {
      $this->setOrderRequest = $setOrderRequest;
      return $this;
    }

}
