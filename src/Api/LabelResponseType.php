<?php

namespace ShippingTutorial\API;

class LabelResponseType
{

    /**
     * @var string $LabelPDF
     * @access public
     */
    public $LabelPDF = null;

    /**
     * @var LabelDataType[] $LabelDataList
     * @access public
     */
    public $LabelDataList = null;

    /**
     * @param string $LabelPDF
     * @param LabelDataType[] $LabelDataList
     * @access public
     */
    public function __construct($LabelPDF, $LabelDataList)
    {
      $this->LabelPDF = $LabelPDF;
      $this->LabelDataList = $LabelDataList;
    }

    /**
     * @return string
     */
    public function getLabelPDF()
    {
      return $this->LabelPDF;
    }

    /**
     * @param string $LabelPDF
     * @return \ShippingTutorial\API\LabelResponseType
     */
    public function setLabelPDF($LabelPDF)
    {
      $this->LabelPDF = $LabelPDF;
      return $this;
    }

    /**
     * @return LabelDataType[]
     */
    public function getLabelDataList()
    {
      return $this->LabelDataList;
    }

    /**
     * @param LabelDataType[] $LabelDataList
     * @return \ShippingTutorial\API\LabelResponseType
     */
    public function setLabelDataList($LabelDataList)
    {
      $this->LabelDataList = $LabelDataList;
      return $this;
    }

}
