<?php
/**
 * SimpleTypes
 *
 * Copyright (c) 2015, Denis Smetannikov <denis@jbzoo.com>.
 *
 * @package    SimpleTypes
 * @author     Denis Smetannikov <denis@jbzoo.com>
 * @copyright  2015 Denis Smetannikov <denis@jbzoo.com>
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://github.com/smetdenis/simpletypes
 */

namespace SmetDenis\SimpleTypes;


// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

/**
 * Class ConfigTestEmpty
 * @package SmetDenis\SimpleTypes
 * @codeCoverageIgnore
 */
class ConfigTestEmpty extends Config
{
    public $default = 'i';
    public $isDebug = false;

    public function getRules()
    {
        return array('i' => []);
    }
}

/**
 * Class ConfigTestWeight
 * @package SmetDenis\SimpleTypes
 * @codeCoverageIgnore
 */
class ConfigTestWeight extends Config
{
    public $default = 'gram';
    public $isDebug = true;

    public function getRules()
    {
        return array(
            'kg'   => array('rate' => function ($value, $to) {

                if ($to == 'gram') {
                    return $value * 1000;
                }

                return $value / 1000;
            }),

            'gram' => array('rate' => function ($value) {
                return $value;
            })
        );
    }
}

/**
 * Class ConfigTestInfo
 * @package SmetDenis\SimpleTypes
 * @codeCoverageIgnore
 */
class ConfigTestInfo extends Config
{
    public $default = 'byte';
    public $isDebug = true;

    public function getRules()
    {
        return array(
            'byte' => array('rate' => 1),
            'kb'   => array('rate' => 1024)
        );
    }
}

// @codeCoverageIgnoreEnd