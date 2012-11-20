<?php
/**
 * Unit Test bootstrap file for the Rahisi Joomla.
 *
 * @package    \Rahisi\Tests
 *
 * @copyright  Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

/*
 * Ensure that required path constants are defined.  These can be overriden within the phpunit.xml file
 * if you chose to create a custom version of that file.
 */
defined('JPATH_TESTS') or define('JPATH_TESTS', realpath(__DIR__));
defined('JPATH_LIB') or define('JPATH_LIB', realpath(__DIR__ . '/../lib/'));

// Import the Joomla Platform and testing classes.
require_once realpath( __DIR__ . '/../lib/joomla-test.phar');

// Import the application loader.
require_once realpath(__DIR__ . '/../src/import.php');

// Maximise error reporting.
error_reporting(E_ALL);
ini_set('display_errors', 1);
