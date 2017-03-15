<?php

namespace ShippingTutorial\API;

class AddressType
{

    /**
     * @var string $Company
     * @access public
     */
    public $Company = null;

    /**
     * @var string $Salutation
     * @access public
     */
    public $Salutation = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

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
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $State
     * @access public
     */
    public $State = null;

    /**
     * @var string $Phone
     * @access public
     */
    public $Phone = null;

    /**
     * @var string $Mail
     * @access public
     */
    public $Mail = null;

    /**
     * @param string $Company
     * @param string $Salutation
     * @param string $Name
     * @param string $Street
     * @param string $HouseNo
     * @param string $Country
     * @param string $ZipCode
     * @param string $City
     * @param string $State
     * @param string $Phone
     * @param string $Mail
     * @access public
     */
    public function __construct($Company, $Salutation, $Name, $Street, $HouseNo, $Country, $ZipCode, $City, $State, $Phone, $Mail)
    {
      $this->Company = $Company;
      $this->Salutation = $Salutation;
      $this->Name = $Name;
      $this->Street = $Street;
      $this->HouseNo = $HouseNo;
      $this->Country = $Country;
      $this->ZipCode = $ZipCode;
      $this->City = $City;
      $this->State = $State;
      $this->Phone = $Phone;
      $this->Mail = $Mail;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \ShippingTutorial\API\AddressType
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
      return $this->Salutation;
    }

    /**
     * @param string $Salutation
     * @return \ShippingTutorial\API\AddressType
     */
    public function setSalutation($Salutation)
    {
      $this->Salutation = $Salutation;
      return $this;
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
     * @return \ShippingTutorial\API\AddressType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return \ShippingTutorial\API\AddressType
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
     * @return \ShippingTutorial\API\AddressType
     */
    public function setHouseNo($HouseNo)
    {
      $this->HouseNo = $HouseNo;
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
     * @return \ShippingTutorial\API\AddressType
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
     * @return \ShippingTutorial\API\AddressType
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
     * @return \ShippingTutorial\API\AddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \ShippingTutorial\API\AddressType
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \ShippingTutorial\API\AddressType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
      return $this->Mail;
    }

    /**
     * @param string $Mail
     * @return \ShippingTutorial\API\AddressType
     */
    public function setMail($Mail)
    {
      $this->Mail = $Mail;
      return $this;
    }

}
