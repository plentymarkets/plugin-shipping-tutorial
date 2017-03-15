<?php

namespace ShippingTutorial\API;

class getParcelShopFinder
{

    /**
     * @var getParcelShopFinderRequestType $getParcelShopFinderRequest
     * @access public
     */
    public $getParcelShopFinderRequest = null;

    /**
     * @param getParcelShopFinderRequestType $getParcelShopFinderRequest
     * @access public
     */
    public function __construct($getParcelShopFinderRequest)
    {
      $this->getParcelShopFinderRequest = $getParcelShopFinderRequest;
    }

    /**
     * @return getParcelShopFinderRequestType
     */
    public function getGetParcelShopFinderRequest()
    {
      return $this->getParcelShopFinderRequest;
    }

    /**
     * @param getParcelShopFinderRequestType $getParcelShopFinderRequest
     * @return \DPD\API\getParcelShopFinder
     */
    public function setGetParcelShopFinderRequest($getParcelShopFinderRequest)
    {
      $this->getParcelShopFinderRequest = $getParcelShopFinderRequest;
      return $this;
    }

}
