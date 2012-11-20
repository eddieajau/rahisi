<?php
/**
 * The Rahisi Joomla web application.
 *
 * @package    \Rahisi\Application
 *
 * @copyright  Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

class RApplicationWeb extends JApplicationWeb
{
	/**
	 * A router object for the application to use.
	 *
	 * @var    JApplicationWebRouter
	 * @since  0.1
	 */
	protected $router;

	/**
	 * Runs the web application.
	 *
	 * @return  void
	 *
	 * @since   0.1
	 */
	protected function doExecute()
	{
		echo 'It works';

		var_dump($this->config);
	}

	/**
	 * Method to get the application configuration data to be loaded.
	 *
	 * @param   string  $file   The path and filename of the configuration file. If not provided, configuration.php
	 *                          in JPATH_BASE will be used.
	 * @param   string  $class  The class name to instantiate.
	 *
	 * @return  object  An object to be loaded into the application configuration.
	 *
	 * @since   0.1
	 * @throws  RuntimeException if configuration cannot be read.
	 */
	protected function fetchConfigurationData($file = '', $class = 'JConfig')
	{
		// Set the configuration file path for the application.
		if (empty($file) && file_exists(JPATH_CONFIGURATION . '/config.json'))
		{
			$file = JPATH_CONFIGURATION . '/config.json';
		}

		if (!is_readable($file))
		{
			throw new RuntimeException('Configuration file does not exist or is unreadable.');
		}

		// Load the configuration file into an object.
		$config = json_decode(file_get_contents($file));

		return $config;
	}
}
