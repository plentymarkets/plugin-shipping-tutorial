<?php

namespace ShippingTutorial\API;

class TrackingProperty
{

    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param string $key
     * @param string $value
     * @access public
     */
    public function __construct($key, $value)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \DPD\API\TrackingProperty
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \DPD\API\TrackingProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
