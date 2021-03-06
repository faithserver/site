<?php
/**
 * @package    Joomla.Installation
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT);
ini_set('display_errors','Off');
if (version_compare(PHP_VERSION, '5.3.1', '<'))
{
	die('Your host needs to use PHP 5.3.1 or higher to run this version of Joomla!');
}


/**
 * Constant that is checked in included files to prevent direct access.
 * define() is used in the installation folder rather than "const" to not error for PHP 5.2 and lower
 */
define('_JEXEC', 1);

// Bootstrap the application
require_once dirname(__FILE__) . '/application/bootstrap.php';

// Get the application
$app = JApplicationWeb::getInstance('InstallationApplicationWeb');

// Execute the application
$app->execute();
