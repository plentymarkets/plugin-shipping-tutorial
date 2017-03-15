<?php

namespace ShippingTutorial\API;

class OpenTimeType
{

    /**
     * @var string $TimeFrom
     * @access public
     */
    public $TimeFrom = null;

    /**
     * @var string $TimeEnd
     * @access public
     */
    public $TimeEnd = null;

    /**
     * @param string $TimeFrom
     * @param string $TimeEnd
     * @access public
     */
    public function __construct($TimeFrom, $TimeEnd)
    {
      $this->TimeFrom = $TimeFrom;
      $this->TimeEnd = $TimeEnd;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
      return $this->TimeFrom;
    }

    /**
     * @param string $TimeFrom
     * @return \DPD\API\OpenTimeType
     */
    public function setTimeFrom($TimeFrom)
    {
      $this->TimeFrom = $TimeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeEnd()
    {
      return $this->TimeEnd;
    }

    /**
     * @param string $TimeEnd
     * @return \DPD\API\OpenTimeType
     */
    public function setTimeEnd($TimeEnd)
    {
      $this->TimeEnd = $TimeEnd;
      return $this;
    }

}
