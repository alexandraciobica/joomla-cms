<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;

/**
 * Users Route Helper
 *
 * @since       1.6
 * @deprecated  4.0
 */
class UsersHelperRoute
{

	/**
	 * Method to get a route configuration for the login view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 */
	public static function getLoginRoute()
	{
		$link = 'index.php?option=com_users&view=login';
		return $link;
	}

	/**
	 * Method to get a route configuration for the profile view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 */
	public static function getProfileRoute()
	{
		$link = 'index.php?option=com_users&view=profile';
		return $link;
	}

	/**
	 * Method to get a route configuration for the registration view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 *
	 * @since       1.6
	 * @deprecated  4.0
	 */
	public static function getRegistrationRoute()
	{
		$link = 'index.php?option=com_users&view=registration';
		return $link;
	}

	/**
	 * Method to get a route configuration for the remind view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 *
	 * @since       1.6
	 * @deprecated  4.0
	 */
	public static function getRemindRoute()
	{
		$link = 'index.php?option=com_users&view=remind';
		return $link;
	}

	/**
	 * Method to get a route configuration for the resend view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 *
	 * @since       1.6
	 * @deprecated  4.0
	 */
	public static function getResendRoute()
	{
		$link = 'index.php?option=com_users&view=resend';
		return $link;
	}

	/**
	 * Method to get a route configuration for the reset view.
	 *
	 * @return  mixed  	Integer menu id on success, null on failure.
	 *
	 * @since       1.6
	 * @deprecated  4.0
	 */
	public static function getResetRoute()
	{
		$link = 'index.php?option=com_users&view=reset';
		return $link;
	}
}
