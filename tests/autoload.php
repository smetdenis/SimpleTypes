<?php
/**
 * SimpleTypes
 *
 * Copyright (c) 2015, Denis Smetannikov <denis@jbzoo.com>.
 *
 * @package   SimpleTypes
 * @author    Denis Smetannikov <denis@jbzoo.com>
 * @copyright 2015 Denis Smetannikov <denis@jbzoo.com>
 * @link      http://github.com/smetdenis/simpletypes
 */

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

// main autoload
if ($autoload = realpath('./vendor/autoload.php')) {
    require_once $autoload;
} else {
    die('Please execute "composer update --no-dev" !');
}

define('ROOT_PATH', realpath('.'));

// test tools
require_once 'phpunit.php';
require_once 'fixtures.php';
require_once 'type/typeTest.php';


// @codeCoverageIgnoreEnd