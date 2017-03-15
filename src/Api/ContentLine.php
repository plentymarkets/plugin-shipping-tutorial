<?php

namespace ShippingTutorial\API;

class ContentLine
{

    /**
     * @var string $content
     * @access public
     */
    public $content = null;

    /**
     * @var boolean $bold
     * @access public
     */
    public $bold = null;

    /**
     * @var boolean $paragraph
     * @access public
     */
    public $paragraph = null;

    /**
     * @param string $content
     * @param boolean $bold
     * @param boolean $paragraph
     * @access public
     */
    public function __construct($content, $bold, $paragraph)
    {
      $this->content = $content;
      $this->bold = $bold;
      $this->paragraph = $paragraph;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \ShippingTutorial\API\ContentLine
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBold()
    {
      return $this->bold;
    }

    /**
     * @param boolean $bold
     * @return \ShippingTutorial\API\ContentLine
     */
    public function setBold($bold)
    {
      $this->bold = $bold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParagraph()
    {
      return $this->paragraph;
    }

    /**
     * @param boolean $paragraph
     * @return \ShippingTutorial\API\ContentLine
     */
    public function setParagraph($paragraph)
    {
      $this->paragraph = $paragraph;
      return $this;
    }

}
