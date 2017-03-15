<?php

namespace ShippingTutorial\API;

class HolidayType
{

    /**
     * @var dateTime $HolidayFrom
     * @access public
     */
    public $HolidayFrom = null;

    /**
     * @var dateTime $HolidayEnd
     * @access public
     */
    public $HolidayEnd = null;

    /**
     * @param dateTime $HolidayFrom
     * @param dateTime $HolidayEnd
     * @access public
     */
    public function __construct($HolidayFrom, $HolidayEnd)
    {
      $this->HolidayFrom = $HolidayFrom;
      $this->HolidayEnd = $HolidayEnd;
    }

    /**
     * @return dateTime
     */
    public function getHolidayFrom()
    {
      return $this->HolidayFrom;
    }

    /**
     * @param dateTime $HolidayFrom
     * @return \DPD\API\HolidayType
     */
    public function setHolidayFrom($HolidayFrom)
    {
      $this->HolidayFrom = $HolidayFrom;
      return $this;
    }

    /**
     * @return dateTime
     */
    public function getHolidayEnd()
    {
      return $this->HolidayEnd;
    }

    /**
     * @param dateTime $HolidayEnd
     * @return \DPD\API\HolidayType
     */
    public function setHolidayEnd($HolidayEnd)
    {
      $this->HolidayEnd = $HolidayEnd;
      return $this;
    }

}
