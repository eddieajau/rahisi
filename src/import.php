<?php
/**
 * Unit Test bootstrap file for the Rahisi Joomla.
*
* @package    \Rahisi
*
* @copyright  Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
* @license    GNU General Public License version 2 or later.
*/

// Make sure that the Joomla Platform has been successfully loaded.
if (!class_exists('JLoader'))
{
	throw new RuntimeException('Joomla Platform not loaded.');
}

// Setup the autoloader for Rahisi application classes.
JLoader::registerPrefix('R', __DIR__ . '/rahisi', true);

// Setup the autoloader for our overloaded Joomla Platform classes.
JLoader::registerPrefix('J', __DIR__ . '/joomla', true);
JLoader::registerPrefix('J', JPATH_PLATFORM . '/joomla');
