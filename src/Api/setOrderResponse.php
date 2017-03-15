<?php

namespace ShippingTutorial\API;

class setOrderResponse
{

    /**
     * @var setOrderResponseType $setOrderResult
     * @access public
     */
    public $setOrderResult = null;

    /**
     * @param setOrderResponseType $setOrderResult
     * @access public
     */
    public function __construct($setOrderResult)
    {
      $this->setOrderResult = $setOrderResult;
    }

    /**
     * @return setOrderResponseType
     */
    public function getSetOrderResult()
    {
      return $this->setOrderResult;
    }

    /**
     * @param setOrderResponseType $setOrderResult
     * @return \ShippingTutorial\API\setOrderResponse
     */
    public function setSetOrderResult($setOrderResult)
    {
      $this->setOrderResult = $setOrderResult;
      return $this;
    }

}
