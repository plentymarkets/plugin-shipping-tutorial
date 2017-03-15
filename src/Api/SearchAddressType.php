<?php

namespace ShippingTutorial\API;

class SearchAddressType
{

    /**
     * @var string $Street
     * @access public
     */
    public $Street = null;

    /**
     * @var string $HouseNo
     * @access public
     */
    public $HouseNo = null;

    /**
     * @var string $ZipCode
     * @access public
     */
    public $ZipCode = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @param string $Street
     * @param string $HouseNo
     * @param string $ZipCode
     * @param string $City
     * @param string $Country
     * @access public
     */
    public function __construct($Street, $HouseNo, $ZipCode, $City, $Country)
    {
      $this->Street = $Street;
      $this->HouseNo = $HouseNo;
      $this->ZipCode = $ZipCode;
      $this->City = $City;
      $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \DPD\API\SearchAddressType
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNo()
    {
      return $this->HouseNo;
    }

    /**
     * @param string $HouseNo
     * @return \DPD\API\SearchAddressType
     */
    public function setHouseNo($HouseNo)
    {
      $this->HouseNo = $HouseNo;
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
     * @return \DPD\API\SearchAddressType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \DPD\API\SearchAddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
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
     * @return \DPD\API\SearchAddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
