<?php

/* 
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

abstract class GdbcBasePublicPlugin extends MchWpPublicPlugin
{
	private $TokenSecretKey  = null;
	private $HiddenInputName = null;
	
	CONST TOKEN_SEPARATOR = '|';
	CONST TOKEN_LIVETIME  = 900;
	

	protected function __construct(array $arrPluginInfo)
	{
		parent::__construct($arrPluginInfo);

		$this->TokenSecretKey  = $this->ModulesController->getModuleSettingOption(GdbcModulesController::MODULE_SETTINGS, GdbcSettingsAdminModule::OPTION_TOKEN_SECRET_KEY);
		$this->HiddenInputName = $this->ModulesController->getModuleSettingOption(GdbcModulesController::MODULE_SETTINGS, GdbcSettingsAdminModule::OPTION_HIDDEN_INPUT_NAME);
	}

	/**
	 *
	 * @return \GdbcModulesController 
	 */	
	public function getModulesControllerInstance(array $arrPluginInfo)
	{
		return GdbcModulesController::getInstance($arrPluginInfo);
	}

	public function enqueuePublicScriptsAndStyles()
	{

		wp_register_script( $this->PLUGIN_SLUG . '-public-script', plugins_url( '/public/scripts/gdbc-public.js', $this->PLUGIN_MAIN_FILE ), array( 'jquery' ), $this->PLUGIN_VERSION);
		wp_localize_script( $this->PLUGIN_SLUG . '-public-script', 'Gdbc', array( 
								'ajaxUrl'         => admin_url( 'admin-ajax.php' ), 
								'formFieldName'   => $this->HiddenInputName,
								'shortCode'       => $this->PLUGIN_SHORT_CODE,
								'slug'	          => $this->PLUGIN_SLUG,
							));
		
		wp_enqueue_script($this->PLUGIN_SLUG . '-public-script');

	}

	
}