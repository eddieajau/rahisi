<?php
/**
 * Entry point for Rahisi Joomla web portal.
 *
 * @package    \Rahisi\Tests
 *
 * @copyright  Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// Define the application home directory.
$RAHISIHOME = getenv('RAHISI_HOME') ?: dirname(__DIR__);

// Ensure that required path constants are defined.
defined('JPATH_BASE') or define('JPATH_BASE', realpath(__DIR__));
defined('JPATH_SITE') or define('JPATH_SITE', JPATH_BASE);
defined('JPATH_THEME') or define('JPATH_THEME', JPATH_SITE . '/');
defined('JPATH_CACHE') or define('JPATH_CACHE', '/tmp/rahisi');
defined('JPATH_CONFIGURATION') or define('JPATH_CONFIGURATION', $RAHISIHOME . '/etc');
defined('JPATH_LIB') or define('JPATH_LIB', realpath(__DIR__ . '/../lib/'));

// Import the Joomla Platform and testing classes.
require_once realpath($RAHISIHOME . '/lib/joomla.phar');

try
{
	require $RAHISIHOME . '/src/import.php';

	// Instantiate the application.
	$application = JApplicationWeb::getInstance('RApplicationWeb');
	$application->execute();
}
catch (Exception $e)
{
	// Set the server response code.
	header('Status: 500', true, 500);

	// An exception has been caught, echo the message and exit.
	echo $e->getMessage();
	exit($e->getCode());
}
