<?php

namespace ShippingTutorial\API;

class getParcelLifeCycleResponse
{

    /**
     * @var getParcelLifeCycleResponseType $getParcelLifeCycleResult
     * @access public
     */
    public $getParcelLifeCycleResult = null;

    /**
     * @param getParcelLifeCycleResponseType $getParcelLifeCycleResult
     * @access public
     */
    public function __construct($getParcelLifeCycleResult)
    {
      $this->getParcelLifeCycleResult = $getParcelLifeCycleResult;
    }

    /**
     * @return getParcelLifeCycleResponseType
     */
    public function getGetParcelLifeCycleResult()
    {
      return $this->getParcelLifeCycleResult;
    }

    /**
     * @param getParcelLifeCycleResponseType $getParcelLifeCycleResult
     * @return \DPD\API\getParcelLifeCycleResponse
     */
    public function setGetParcelLifeCycleResult($getParcelLifeCycleResult)
    {
      $this->getParcelLifeCycleResult = $getParcelLifeCycleResult;
      return $this;
    }

}
