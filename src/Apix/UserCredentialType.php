<?php

namespace ShippingTutorial\API;

class UserCredentialType
{

    /**
     * @var int $cloudUserID
     * @access public
     */
    public $cloudUserID = null;

    /**
     * @var string $Token
     * @access public
     */
    public $Token = null;

    /**
     * @param int $cloudUserID
     * @param string $Token
     * @access public
     */
    public function __construct($cloudUserID, $Token)
    {
      $this->cloudUserID = $cloudUserID;
      $this->Token = $Token;
    }

    /**
     * @return int
     */
    public function getCloudUserID()
    {
      return $this->cloudUserID;
    }

    /**
     * @param int $cloudUserID
     * @return \ShippingTutorial\API\UserCredentialType
     */
    public function setCloudUserID($cloudUserID)
    {
      $this->cloudUserID = $cloudUserID;
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
     * @return \ShippingTutorial\API\UserCredentialType
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
