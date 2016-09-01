<?php

namespace efureev\fontawesome;

use efureev\fontawesome\components\Icon;
use efureev\fontawesome\components\Stack;
use efureev\fontawesome\components\UnorderedList;

/**
 * Class FA
 *
 * @package efureev\fontawesome
 */
class FontAwesome
{
    /** @var string CSS Class prefix */
    public static $cssPrefix = 'fa';

    /**
     * Creates an `Icon` component that can be used to FontAwesome html icon
     *
     * @param string $name
     * @param array  $options
     * @return Icon
     */
    public static function icon($name, $options = [])
    {
        return new Icon($name, $options);
    }

    /**
     * Shortcut for `icon()` method
     *
     * @see icon()
     * @param string $name
     * @param array  $options
     * @return Icon
     */
    public static function i($name, $options = [])
    {
        return static::icon($name, $options);
    }

    /**
     * Creates an `Stack` component that can be used to FontAwesome html icon
     *
     * @param array $options
     * @return Stack
     */
    public static function stack($options = [])
    {
        return new Stack($options);
    }

    /**
     * Shortcut for `stack()` method
     *
     * @see stack()
     * @param array $options
     * @return Stack
     */
    public static function s($options = [])
    {
        return static::stack($options);
    }

    /**
     * @param array $options
     * @return UnorderedList
     */
    public static function ul($options = [])
    {
        return new UnorderedList($options);
    }

    /**
     * Size values
     *
     * @see efureev\fontawesome\component\Icon::size
     */
    const SIZE_LARGE = 'lg';
    const SIZE_2X = '2x';
    const SIZE_3X = '3x';
    const SIZE_4X = '4x';
    const SIZE_5X = '5x';

    /**
     * Rotate values
     *
     * @see efureev\fontawesome\component\Icon::rotate
     */
    const ROTATE_90 = '90';
    const ROTATE_180 = '180';
    const ROTATE_270 = '270';

    /**
     * Flip values
     *
     * @see efureev\fontawesome\component\Icon::flip
     */
    const FLIP_HORIZONTAL = 'horizontal';
    const FLIP_VERTICAL = 'vertical';
}
