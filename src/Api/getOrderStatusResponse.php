<?php

namespace ShippingTutorial\API;

class getOrderStatusResponse
{

    /**
     * @var getOrderStatusResponseType $getOrderStatusResult
     * @access public
     */
    public $getOrderStatusResult = null;

    /**
     * @param getOrderStatusResponseType $getOrderStatusResult
     * @access public
     */
    public function __construct($getOrderStatusResult)
    {
      $this->getOrderStatusResult = $getOrderStatusResult;
    }

    /**
     * @return getOrderStatusResponseType
     */
    public function getGetOrderStatusResult()
    {
      return $this->getOrderStatusResult;
    }

    /**
     * @param getOrderStatusResponseType $getOrderStatusResult
     * @return \ShippingTutorial\API\getOrderStatusResponse
     */
    public function setGetOrderStatusResult($getOrderStatusResult)
    {
      $this->getOrderStatusResult = $getOrderStatusResult;
      return $this;
    }

}
