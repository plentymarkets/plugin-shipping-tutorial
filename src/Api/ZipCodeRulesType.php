<?php

namespace ShippingTutorial\API;

class ZipCodeRulesType
{

    /**
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var string $ZipCode
     * @access public
     */
    public $ZipCode = null;

    /**
     * @var string $NoPickupDays
     * @access public
     */
    public $NoPickupDays = null;

    /**
     * @var string $ExpressCutOff
     * @access public
     */
    public $ExpressCutOff = null;

    /**
     * @var string $ClassicCutOff
     * @access public
     */
    public $ClassicCutOff = null;

    /**
     * @var string $PickupDepot
     * @access public
     */
    public $PickupDepot = null;

    /**
     * @var string $State
     * @access public
     */
    public $State = null;

    /**
     * @param string $Country
     * @param string $ZipCode
     * @param string $NoPickupDays
     * @param string $ExpressCutOff
     * @param string $ClassicCutOff
     * @param string $PickupDepot
     * @param string $State
     * @access public
     */
    public function __construct($Country, $ZipCode, $NoPickupDays, $ExpressCutOff, $ClassicCutOff, $PickupDepot, $State)
    {
      $this->Country = $Country;
      $this->ZipCode = $ZipCode;
      $this->NoPickupDays = $NoPickupDays;
      $this->ExpressCutOff = $ExpressCutOff;
      $this->ClassicCutOff = $ClassicCutOff;
      $this->PickupDepot = $PickupDepot;
      $this->State = $State;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoPickupDays()
    {
      return $this->NoPickupDays;
    }

    /**
     * @param string $NoPickupDays
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setNoPickupDays($NoPickupDays)
    {
      $this->NoPickupDays = $NoPickupDays;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpressCutOff()
    {
      return $this->ExpressCutOff;
    }

    /**
     * @param string $ExpressCutOff
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setExpressCutOff($ExpressCutOff)
    {
      $this->ExpressCutOff = $ExpressCutOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassicCutOff()
    {
      return $this->ClassicCutOff;
    }

    /**
     * @param string $ClassicCutOff
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setClassicCutOff($ClassicCutOff)
    {
      $this->ClassicCutOff = $ClassicCutOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDepot()
    {
      return $this->PickupDepot;
    }

    /**
     * @param string $PickupDepot
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setPickupDepot($PickupDepot)
    {
      $this->PickupDepot = $PickupDepot;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \DPD\API\ZipCodeRulesType
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
