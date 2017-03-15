<?php

namespace ShippingTutorial\API;

class OpeningHoursType
{

    /**
     * @var string $WeekDay
     * @access public
     */
    public $WeekDay = null;

    /**
     * @var OpenTimeType[] $OpenTimeList
     * @access public
     */
    public $OpenTimeList = null;

    /**
     * @param string $WeekDay
     * @param OpenTimeType[] $OpenTimeList
     * @access public
     */
    public function __construct($WeekDay, $OpenTimeList)
    {
      $this->WeekDay = $WeekDay;
      $this->OpenTimeList = $OpenTimeList;
    }

    /**
     * @return string
     */
    public function getWeekDay()
    {
      return $this->WeekDay;
    }

    /**
     * @param string $WeekDay
     * @return \DPD\API\OpeningHoursType
     */
    public function setWeekDay($WeekDay)
    {
      $this->WeekDay = $WeekDay;
      return $this;
    }

    /**
     * @return OpenTimeType[]
     */
    public function getOpenTimeList()
    {
      return $this->OpenTimeList;
    }

    /**
     * @param OpenTimeType[] $OpenTimeList
     * @return \DPD\API\OpeningHoursType
     */
    public function setOpenTimeList($OpenTimeList)
    {
      $this->OpenTimeList = $OpenTimeList;
      return $this;
    }

}
