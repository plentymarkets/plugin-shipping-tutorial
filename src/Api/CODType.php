<?php

namespace ShippingTutorial\API;

class CODType
{

    /**
     * @var string $Purpose
     * @access public
     */
    public $Purpose = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var PaymentType $Payment
     * @access public
     */
    public $Payment = null;

    /**
     * @param string $Purpose
     * @param float $Amount
     * @param PaymentType $Payment
     * @access public
     */
    public function __construct($Purpose, $Amount, $Payment)
    {
      $this->Purpose = $Purpose;
      $this->Amount = $Amount;
      $this->Payment = $Payment;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param string $Purpose
     * @return \DPD\API\CODType
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \DPD\API\CODType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return PaymentType
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param PaymentType $Payment
     * @return \DPD\API\CODType
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

}
