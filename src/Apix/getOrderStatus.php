<?php

namespace ShippingTutorial\API;

class getOrderStatus
{

    /**
     * @var getOrderStatusRequestType $getOrderStatusRequest
     * @access public
     */
    public $getOrderStatusRequest = null;

    /**
     * @param getOrderStatusRequestType $getOrderStatusRequest
     * @access public
     */
    public function __construct($getOrderStatusRequest)
    {
      $this->getOrderStatusRequest = $getOrderStatusRequest;
    }

    /**
     * @return getOrderStatusRequestType
     */
    public function getGetOrderStatusRequest()
    {
      return $this->getOrderStatusRequest;
    }

    /**
     * @param getOrderStatusRequestType $getOrderStatusRequest
     * @return \ShippingTutorial\API\getOrderStatus
     */
    public function setGetOrderStatusRequest($getOrderStatusRequest)
    {
      $this->getOrderStatusRequest = $getOrderStatusRequest;
      return $this;
    }

}
