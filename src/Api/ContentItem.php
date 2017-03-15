<?php

namespace ShippingTutorial\API;

class ContentItem
{

    /**
     * @var ContentLine $label
     * @access public
     */
    public $label = null;

    /**
     * @var ContentLine[] $content
     * @access public
     */
    public $content = null;

    /**
     * @var string $linkTarget
     * @access public
     */
    public $linkTarget = null;

    /**
     * @param ContentLine $label
     * @param ContentLine[] $content
     * @param string $linkTarget
     * @access public
     */
    public function __construct($label, $content, $linkTarget)
    {
      $this->label = $label;
      $this->content = $content;
      $this->linkTarget = $linkTarget;
    }

    /**
     * @return ContentLine
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param ContentLine $label
     * @return \DPD\API\ContentItem
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return ContentLine[]
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param ContentLine[] $content
     * @return \DPD\API\ContentItem
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkTarget()
    {
      return $this->linkTarget;
    }

    /**
     * @param string $linkTarget
     * @return \DPD\API\ContentItem
     */
    public function setLinkTarget($linkTarget)
    {
      $this->linkTarget = $linkTarget;
      return $this;
    }

}
