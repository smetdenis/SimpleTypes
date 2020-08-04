<?php

/**
 * JBZoo Toolbox - SimpleTypes
 *
 * This file is part of the JBZoo Toolbox project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    SimpleTypes
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/SimpleTypes
 */

namespace JBZoo\SimpleTypes\Config;

/**
 * Class Time
 * @package JBZoo\SimpleTypes\Config
 */
class Time extends Config
{
    /**
     * Set default
     */
    public function __construct()
    {
        $this->default = 's';
    }

    /**
     * @inheritDoc
     */
    public function getRules(): array
    {
        return [
            's'  => [
                'symbol' => 'Sec',
                'rate'   => 1,
            ],
            'm'  => [
                'symbol' => 'Min',
                'rate'   => 60,
            ],
            'h'  => [
                'symbol' => 'H',
                'rate'   => 3600,
            ],
            'd'  => [
                'symbol' => 'Day',
                'rate'   => 86400,
            ],
            'w'  => [
                'symbol' => 'Week',
                'rate'   => 604800,
            ],
            'mo' => [
                'symbol' => 'Month',    // Only 30 days!
                'rate'   => 2592000,
            ],
            'q'  => [
                'symbol' => 'Quarter',  // 3 months
                'rate'   => 7776000,
            ],
            'y'  => [
                'symbol' => 'Year',     // 365.25 days
                'rate'   => 31557600,
            ],
        ];
    }
}
