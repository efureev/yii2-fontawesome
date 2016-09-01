<?php

namespace efureev\fontawesome\components;

use efureev\fontawesome\FA;
use yii\helpers\Html;

/**
 * Class UnorderedList
 *
 * @package efureev\fontawesome\components
 */
class UnorderedList
{
    /**
     * @var string
     */
    public static $defaultTag = 'ul';

    /**
     * @var string
     */
    private $tag;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var array
     */
    private $items = [];

    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        Html::addCssClass($options, FA::$cssPrefix . '-ul');

        $this->options = $options;
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param string|Icon $icon
     * @param string|null $label
     * @param array       $options
     * @return $this
     * @throws \yii\base\InvalidConfigException
     */
    public function item($icon, $label = null, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($icon);
        }

        $content = trim((string)$icon->li() . $label);

        $this->items[] = Html::tag('li', $content, $options);

        return $this;
    }

    /**
     * Change html tag.
     *
     * @param string $tag
     * @return static
     * @throws \yii\base\InvalidParamException
     */
    public function tag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @param string|null $tag
     * @param array       $options
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function render($tag = null, $options = [])
    {
        $tag = empty($tag)
            ? (empty($this->tag) ? static::$defaultTag : $this->tag)
            : $tag;

        $options = array_merge($this->options, $options);

        $items = $this->items;

        return Html::tag($tag, implode($items), $options);
    }
}
