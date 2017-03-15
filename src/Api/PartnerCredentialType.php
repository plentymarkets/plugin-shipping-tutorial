<?php

namespace ShippingTutorial\API;

class PartnerCredentialType
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $Token
     * @access public
     */
    public $Token = null;

    /**
     * @param string $Name
     * @param string $Token
     * @access public
     */
    public function __construct($Name, $Token)
    {
      $this->Name = $Name;
      $this->Token = $Token;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DPD\API\PartnerCredentialType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \DPD\API\PartnerCredentialType
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
