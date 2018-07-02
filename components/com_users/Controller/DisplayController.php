<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Joomla\Component\Users\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;
use Joomla\CMS\Router\Route;

/**
 * Base controller class for Users.
 *
 * @since  1.5
 */
class DisplayController extends BaseController
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean        $cachable   If true, the view output will be cached
	 * @param   array|boolean  $urlparams  An array of safe URL parameters and their variable types,
	 *                                     for valid values see {@link Joomla\CMS\Filter\InputFilter::clean()}.
	 *
	 * @return  static  This object to support chaining.
	 *
	 * @since   1.5
	 * @throws  \Exception
	 */
	public function display($cachable = false, $urlparams = false)
	{
		// Get the document object.
		$document = Factory::getDocument();

		// Set the default view name and format from the Request.
		$vName   = $this->input->getCmd('view', 'login');
		$vFormat = $document->getType();

		$user = Factory::getUser();

		if ($vName == 'remind' || $vName == 'reset')
		{
			if ($user->get('guest') != 1)
			{
				// Redirect to profile page.
				$this->setRedirect(Route::_('index.php?option=com_users&view=profile', false));

				return;
			}
		}

		if ($vName == 'profile')
		{
			if ($user->get('guest') == 1)
			{
				// Redirect to login page.
				$this->setRedirect(Route::_('index.php?option=com_users&view=login', false));

				return;
			}
		}

		if ($vName =='registration')
		{
			// If the user is already logged in, redirect to the profile page.
			if ($user->get('guest') != 1)
			{
				// Redirect to profile page.
				$this->setRedirect(Route::_('index.php?option=com_users&view=profile&layout=edit', false));

				return;
			}

			// Check if user registration is enabled
			if (ComponentHelper::getParams('com_users')->get('allowUserRegistration') == 0)
			{
				// Registration is disabled - Redirect to login page.
				$this->setRedirect(Route::_('index.php?option=com_users&view=login', false));

				return;
			}
		}

		$this->input->set('view', $vName);

		$safeurlparams = array(
			'catid' => 'INT',
			'id' => 'INT',
			'cid' => 'ARRAY',
			'year' => 'INT',
			'month' => 'INT',
			'limit' => 'UINT',
			'limitstart' => 'UINT',
			'showall' => 'INT',
			'return' => 'BASE64',
			'filter' => 'STRING',
			'filter_order' => 'CMD',
			'filter_order_Dir' => 'CMD',
			'filter-search' => 'STRING',
			'print' => 'BOOLEAN',
			'lang' => 'CMD',
			'Itemid' => 'INT');

		parent::display($cachable, $safeurlparams);

		return $this;
	}
}
