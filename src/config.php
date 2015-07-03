<?php
/**
 * SimpleTypes
 *
 * Copyright (c) 2015, Denis Smetannikov <denis@jbzoo.com>.
 *
 * @package   SimpleTypes
 * @author    Denis Smetannikov <denis@jbzoo.com>
 * @copyright 2015 Denis Smetannikov <denis@jbzoo.com>
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      http://github.com/smetdenis/simpletypes
 */

namespace SmetDenis\SimpleTypes;

/**
 * Class Config
 * @package SmetDenis\SimpleTypes
 */
class Config
{
    /**
     * Base for all converting
     * @var string
     */
    public $default = '';

    /**
     * For logging all events
     * @var bool
     */
    public $isDebug = false;

    /**
     * Popular params for most measures
     * @var array
     */
    public $defaultParams = array(
        'symbol'          => '',
        'round_type'      => Formatter::ROUND_CLASSIC,
        'round_value'     => Formatter::ROUND_DEFAULT,
        'num_decimals'    => '2',
        'decimal_sep'     => '.',
        'thousands_sep'   => ' ',
        'format_positive' => '%v %s',
        'format_negative' => '-%v %s',
        'rate'            => 1,
    );

    /**
     * @var array
     */
    static protected $configs = array();

    /**
     * List of rules
     * @return array
     */
    public function getRules()
    {
        return array();
    }

    /**
     * @param string $type
     * @param Config $config
     * @throws Exception
     */
    public static function registerDefault($type, Config $config)
    {
        $type = trim(strtolower($type));
        if (!$config) {
            throw new Exception("You can't register empty config");
        }

        self::$configs[$type] = $config;
    }

    /**
     * @param string $type
     * @return Config
     */
    public static function getDefault($type)
    {
        $type = trim(strtolower($type));
        if (isset(self::$configs[$type])) {
            return self::$configs[$type];
        }

        return null;
    }
}
