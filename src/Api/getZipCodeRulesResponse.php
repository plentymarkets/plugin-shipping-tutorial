<?php

namespace ShippingTutorial\API;

class getZipCodeRulesResponse
{

    /**
     * @var getZipCodeRulesResponseType $getZipCodeRulesResult
     * @access public
     */
    public $getZipCodeRulesResult = null;

    /**
     * @param getZipCodeRulesResponseType $getZipCodeRulesResult
     * @access public
     */
    public function __construct($getZipCodeRulesResult)
    {
      $this->getZipCodeRulesResult = $getZipCodeRulesResult;
    }

    /**
     * @return getZipCodeRulesResponseType
     */
    public function getGetZipCodeRulesResult()
    {
      return $this->getZipCodeRulesResult;
    }

    /**
     * @param getZipCodeRulesResponseType $getZipCodeRulesResult
     * @return \ShippingTutorial\API\getZipCodeRulesResponse
     */
    public function setGetZipCodeRulesResult($getZipCodeRulesResult)
    {
      $this->getZipCodeRulesResult = $getZipCodeRulesResult;
      return $this;
    }

}
