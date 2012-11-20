<?php
/**
 * Unit Test bootstrap file for the Rahisi Joomla.
*
* @package    \Rahisi\Tests
*
* @copyright  Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
* @license    GNU General Public License version 2 or later.
*/

/**
 * Test for Rahisi dependancies.
 *
 * @package  \Rahisi\Tests
 * @since    0.1
 */
class RDependanciesTest extends TestCase
{
	/**
	 * Test that we can access Mustache if we need it and the phar is working.
	 *
	 * @return  void
	 *
	 * @since   0.1
	 */
	public function testMustache()
	{
		$m = new Mustache_Engine;
		$this->assertEquals('Hello World', $m->render('Hello {{planet}}', array('planet' => 'World')));
	}

	/**
	 * Setup these test cases.
	 *
	 * @return  void
	 *
	 * @since   0.1
	 */
	protected function setUp()
	{
		if (!class_exists('Mustache_Autoloader'))
		{
			// Setup Mustache external library for autoloading.
			require_once 'phar://' . JPATH_LIB . '/mustache.phar/Mustache/Autoloader.php';
			Mustache_Autoloader::register('phar://' . JPATH_LIB . '/mustache.phar');
		}

		parent::setUp();
	}
}
