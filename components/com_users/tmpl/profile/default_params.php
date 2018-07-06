<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

HTMLHelper::addIncludePath(JPATH_COMPONENT . '/helpers/html');

$user = $this->data;
?>
<?php if ($this->data->showFrontendUserparams) : ?>
	<fieldset id="users-profile-custom" class="com-users-profile__params">
		<legend><?php echo Text::_('COM_USERS_SETTINGS_FIELDSET_LABEL'); ?></legend>
		<div>
			<span><?php echo Text::_('COM_USERS_PROFILE_EDITOR_LABEL'); ?></span>
			<?php echo $user->params['editor'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
		</div>

		<div>
			<span><?php echo Text::_('COM_USERS_PROFILE_TIMEZONE_LABEL'); ?></span>
			<?php  echo $user->params['timezone'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
		</div>

		<div>
			<span><?php echo Text::_('COM_USERS_PROFILE_FRONTEND_LANGUAGE_LABEL'); ?></span>
			<?php  echo $user->params['language'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
		</div>

		<?php if ($this->data->showFrontendAdminParams) : ?>
			<div>
				<span><?php echo Text::_('COM_USERS_USER_FIELD_BACKEND_TEMPLATE_LABEL'); ?></span>
				<?php  echo $user->params['admin_style'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
			</div>

			<div>
				<span><?php echo Text::_('COM_USERS_USER_FIELD_BACKEND_LANGUAGE_LABEL'); ?></span>
				<?php  echo $user->params['admin_language'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
			</div>

			<div>
				<span><?php echo Text::_('COM_USERS_USER_FIELD_HELPSITE_LABEL'); ?></span>
				<?php  echo $user->params['helpsite'] ?: Text::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
			</div>
		<?php endif; ?>
	</fieldset>
<?php endif; ?>
