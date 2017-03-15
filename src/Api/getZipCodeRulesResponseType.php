<?php

namespace ShippingTutorial\API;

class getZipCodeRulesResponseType
{

    /**
     * @var int $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var boolean $Ack
     * @access public
     */
    public $Ack = null;

    /**
     * @var dateTime $TimeStamp
     * @access public
     */
    public $TimeStamp = null;

    /**
     * @var ZipCodeRulesType $ZipCodeRules
     * @access public
     */
    public $ZipCodeRules = null;

    /**
     * @var string $SystemInformation
     * @access public
     */
    public $SystemInformation = null;

    /**
     * @var ErrorDataType[] $ErrorDataList
     * @access public
     */
    public $ErrorDataList = null;

    /**
     * @param int $Version
     * @param string $Language
     * @param boolean $Ack
     * @param dateTime $TimeStamp
     * @param ZipCodeRulesType $ZipCodeRules
     * @param string $SystemInformation
     * @param ErrorDataType[] $ErrorDataList
     * @access public
     */
    public function __construct($Version, $Language, $Ack, $TimeStamp, $ZipCodeRules, $SystemInformation, $ErrorDataList)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Ack = $Ack;
      $this->TimeStamp = $TimeStamp;
      $this->ZipCodeRules = $ZipCodeRules;
      $this->SystemInformation = $SystemInformation;
      $this->ErrorDataList = $ErrorDataList;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAck()
    {
      return $this->Ack;
    }

    /**
     * @param boolean $Ack
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setAck($Ack)
    {
      $this->Ack = $Ack;
      return $this;
    }

    /**
     * @return dateTime
     */
    public function getTimeStamp()
    {
      return $this->TimeStamp;
    }

    /**
     * @param dateTime $TimeStamp
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return ZipCodeRulesType
     */
    public function getZipCodeRules()
    {
      return $this->ZipCodeRules;
    }

    /**
     * @param ZipCodeRulesType $ZipCodeRules
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setZipCodeRules($ZipCodeRules)
    {
      $this->ZipCodeRules = $ZipCodeRules;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemInformation()
    {
      return $this->SystemInformation;
    }

    /**
     * @param string $SystemInformation
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setSystemInformation($SystemInformation)
    {
      $this->SystemInformation = $SystemInformation;
      return $this;
    }

    /**
     * @return ErrorDataType[]
     */
    public function getErrorDataList()
    {
      return $this->ErrorDataList;
    }

    /**
     * @param ErrorDataType[] $ErrorDataList
     * @return \DPD\API\getZipCodeRulesResponseType
     */
    public function setErrorDataList($ErrorDataList)
    {
      $this->ErrorDataList = $ErrorDataList;
      return $this;
    }

}
