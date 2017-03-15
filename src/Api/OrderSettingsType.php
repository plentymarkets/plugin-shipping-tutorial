<?php

namespace ShippingTutorial\API;

class OrderSettingsType
{

    /**
     * @var dateTime $ShipDate
     * @access public
     */
    public $ShipDate = null;

    /**
     * @var LabelSizeType $LabelSize
     * @access public
     */
    public $LabelSize = null;

    /**
     * @var LabelStartPositionType $LabelStartPosition
     * @access public
     */
    public $LabelStartPosition = null;

    /**
     * @param dateTime $ShipDate
     * @param LabelSizeType $LabelSize
     * @param LabelStartPositionType $LabelStartPosition
     * @access public
     */
    public function __construct($ShipDate, $LabelSize, $LabelStartPosition)
    {
      $this->ShipDate = $ShipDate;
      $this->LabelSize = $LabelSize;
      $this->LabelStartPosition = $LabelStartPosition;
    }

    /**
     * @return dateTime
     */
    public function getShipDate()
    {
      return $this->ShipDate;
    }

    /**
     * @param dateTime $ShipDate
     * @return \ShippingTutorial\API\OrderSettingsType
     */
    public function setShipDate($ShipDate)
    {
      $this->ShipDate = $ShipDate;
      return $this;
    }

    /**
     * @return LabelSizeType
     */
    public function getLabelSize()
    {
      return $this->LabelSize;
    }

    /**
     * @param LabelSizeType $LabelSize
     * @return \ShippingTutorial\API\OrderSettingsType
     */
    public function setLabelSize($LabelSize)
    {
      $this->LabelSize = $LabelSize;
      return $this;
    }

    /**
     * @return LabelStartPositionType
     */
    public function getLabelStartPosition()
    {
      return $this->LabelStartPosition;
    }

    /**
     * @param LabelStartPositionType $LabelStartPosition
     * @return \ShippingTutorial\API\OrderSettingsType
     */
    public function setLabelStartPosition($LabelStartPosition)
    {
      $this->LabelStartPosition = $LabelStartPosition;
      return $this;
    }

}
