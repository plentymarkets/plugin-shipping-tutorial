<?php

namespace ShippingTutorial\API;

class getParcelShopFinderResponse
{

    /**
     * @var getParcelShopFinderResponseType $getParcelShopFinderResult
     * @access public
     */
    public $getParcelShopFinderResult = null;

    /**
     * @param getParcelShopFinderResponseType $getParcelShopFinderResult
     * @access public
     */
    public function __construct($getParcelShopFinderResult)
    {
      $this->getParcelShopFinderResult = $getParcelShopFinderResult;
    }

    /**
     * @return getParcelShopFinderResponseType
     */
    public function getGetParcelShopFinderResult()
    {
      return $this->getParcelShopFinderResult;
    }

    /**
     * @param getParcelShopFinderResponseType $getParcelShopFinderResult
     * @return \DPD\API\getParcelShopFinderResponse
     */
    public function setGetParcelShopFinderResult($getParcelShopFinderResult)
    {
      $this->getParcelShopFinderResult = $getParcelShopFinderResult;
      return $this;
    }

}
