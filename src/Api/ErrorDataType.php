<?php

namespace ShippingTutorial\API;

class ErrorDataType
{

    /**
     * @var int $ErrorID
     * @access public
     */
    public $ErrorID = null;

    /**
     * @var string $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var string $ErrorMsgShort
     * @access public
     */
    public $ErrorMsgShort = null;

    /**
     * @var string $ErrorMsgLong
     * @access public
     */
    public $ErrorMsgLong = null;

    /**
     * @param int $ErrorID
     * @param string $ErrorCode
     * @param string $ErrorMsgShort
     * @param string $ErrorMsgLong
     * @access public
     */
    public function __construct($ErrorID, $ErrorCode, $ErrorMsgShort, $ErrorMsgLong)
    {
      $this->ErrorID = $ErrorID;
      $this->ErrorCode = $ErrorCode;
      $this->ErrorMsgShort = $ErrorMsgShort;
      $this->ErrorMsgLong = $ErrorMsgLong;
    }

    /**
     * @return int
     */
    public function getErrorID()
    {
      return $this->ErrorID;
    }

    /**
     * @param int $ErrorID
     * @return \DPD\API\ErrorDataType
     */
    public function setErrorID($ErrorID)
    {
      $this->ErrorID = $ErrorID;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \DPD\API\ErrorDataType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsgShort()
    {
      return $this->ErrorMsgShort;
    }

    /**
     * @param string $ErrorMsgShort
     * @return \DPD\API\ErrorDataType
     */
    public function setErrorMsgShort($ErrorMsgShort)
    {
      $this->ErrorMsgShort = $ErrorMsgShort;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsgLong()
    {
      return $this->ErrorMsgLong;
    }

    /**
     * @param string $ErrorMsgLong
     * @return \DPD\API\ErrorDataType
     */
    public function setErrorMsgLong($ErrorMsgLong)
    {
      $this->ErrorMsgLong = $ErrorMsgLong;
      return $this;
    }

}
