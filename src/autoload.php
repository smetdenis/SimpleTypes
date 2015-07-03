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

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

/**
 * Autoloader for types
 */
spl_autoload_register(

    function ($class) {

        static $classMap = null;

        if (is_null($classMap)) {
            $classMap = array(
                // core
                'config'       => 'config.php',
                'exception'    => 'exception.php',
                'formatter'    => 'formatter.php',
                'parser'       => 'parser.php',
                'phpunit'      => 'phpunit.php',
                'type'         => 'type.php',

                // types
                'acceleration' => 'type/acceleration.php',
                'area'         => 'type/area.php',
                'degree'       => 'type/degree.php',
                'info'         => 'type/info.php',
                'length'       => 'type/length.php',
                'money'        => 'type/money.php',
                'number'       => 'type/number.php',
                'pressure'     => 'type/pressure.php',
                'speed'        => 'type/speed.php',
                'temp'         => 'type/temp.php',
                'time'         => 'type/time.php',
                'volume'       => 'type/volume.php',
                'weight'       => 'type/weight.php',

                'configmoney'  => 'config/money.php',
                'configinfo'   => 'config/info.php',
                'configtemp'   => 'config/temp.php',
            );
        }

        $namespace = 'smetdenis\\simpletypes\\';
        $class     = strtolower($class);
        $className = str_replace($namespace, '', $class);

        if (0 === strpos($class, $namespace) && isset($classMap[$className])) {
            require_once realpath(__DIR__ . '/' . $classMap[$className]);
        }
    }

);
// @codeCoverageIgnoreEnd