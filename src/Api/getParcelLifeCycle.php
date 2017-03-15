<?php

namespace ShippingTutorial\API;

class getParcelLifeCycle
{

    /**
     * @var getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     * @access public
     */
    public $getParcelLifeCycleRequest = null;

    /**
     * @param getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     * @access public
     */
    public function __construct($getParcelLifeCycleRequest)
    {
      $this->getParcelLifeCycleRequest = $getParcelLifeCycleRequest;
    }

    /**
     * @return getParcelLifeCycleRequestType
     */
    public function getGetParcelLifeCycleRequest()
    {
      return $this->getParcelLifeCycleRequest;
    }

    /**
     * @param getParcelLifeCycleRequestType $getParcelLifeCycleRequest
     * @return \DPD\API\getParcelLifeCycle
     */
    public function setGetParcelLifeCycleRequest($getParcelLifeCycleRequest)
    {
      $this->getParcelLifeCycleRequest = $getParcelLifeCycleRequest;
      return $this;
    }

}
