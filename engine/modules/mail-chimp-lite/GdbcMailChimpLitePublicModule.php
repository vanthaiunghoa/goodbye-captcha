<?php
/**
 * Copyright (C) 2014 Mihai Chelaru
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

class GdbcMailChimpLitePublicModule extends GdbcBasePublicModule
{
	protected function __construct(array $arrPluginInfo)
	{
		parent::__construct($arrPluginInfo);
	}

	public function activateActions()
	{
		if(!GdbcPluginUtils::isMailChimpLiteActivated())
			return;

		add_filter('mc4wp_form_before_fields', create_function('', 'return GdbcTokenController::getInstance()->getTokenInputField();'));
		add_filter('mc4wp_valid_form_request', create_function('$isFormValid', 'return GdbcRequest::isValid(array("module" => GdbcModulesController::MODULE_MAIL_CHIMP_LITE));'));

	}


	public static function getInstance(array $arrPluginInfo)
	{
		static $arrInstances = array();
		$instanceKey         = implode('', $arrPluginInfo);
		return isset($arrInstances[$instanceKey]) ? $arrInstances[$instanceKey] : $arrInstances[$instanceKey] = new self($arrPluginInfo);
	}
}