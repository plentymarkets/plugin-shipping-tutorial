<?php

namespace ShippingTutorial\API;

class getZipCodeRules
{

    /**
     * @var getZipCodeRulesRequestType $getZipCodeRulesRequest
     * @access public
     */
    public $getZipCodeRulesRequest = null;

    /**
     * @param getZipCodeRulesRequestType $getZipCodeRulesRequest
     * @access public
     */
    public function __construct($getZipCodeRulesRequest)
    {
      $this->getZipCodeRulesRequest = $getZipCodeRulesRequest;
    }

    /**
     * @return getZipCodeRulesRequestType
     */
    public function getGetZipCodeRulesRequest()
    {
      return $this->getZipCodeRulesRequest;
    }

    /**
     * @param getZipCodeRulesRequestType $getZipCodeRulesRequest
     * @return \DPD\API\getZipCodeRules
     */
    public function setGetZipCodeRulesRequest($getZipCodeRulesRequest)
    {
      $this->getZipCodeRulesRequest = $getZipCodeRulesRequest;
      return $this;
    }

}
