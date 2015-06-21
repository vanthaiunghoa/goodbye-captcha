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

final class GdbcModulesController extends MchWpModulesController
{
	CONST MODULE_SETTINGS         = 'Settings';
	CONST MODULE_WORDPRESS        = 'Wordpress';
	CONST MODULE_BUDDY_PRESS      = 'BuddyPress';
	CONST MODULE_POPULAR_FORMS    = 'PopularForms';
	CONST MODULE_POPULAR_PLUGINS  = 'PopularPlugins';
	CONST MODULE_REPORTS		  = 'Reports';
	CONST MODULE_NINJA_FORMS      = 'NinjaForms';
	CONST MODULE_CONTACT_FORM_7   = 'ContactForm7';
	CONST MODULE_GRAVITY_FORMS    = 'GravityForms';
	CONST MODULE_FAST_SECURE_FORM = 'FastSecureForm';
	CONST MODULE_FORMIDABLE_FORMS = 'FormidableForms';
	CONST MODULE_JETPACK_CONTACT_FORM  = 'JetPackContactForm';

	CONST MODULE_WOOCOMMERCE      = 'WooCommerce';

	CONST MODULE_SUBSCRIPTIONS    = 'Subscriptions';
	CONST MODULE_MAIL_CHIMP_LITE  = 'MailChimpForWordPress';

	CONST MODULE_UJI_COUNTDOWN    = 'UjiCountDown';
	CONST MODULE_ULTIMATE_MEMBER  = 'UltimateMember';
	CONST MODULE_USER_PROFILE_MADE_EASY = 'UPME';


	private static $arrModules = array(

		self::MODULE_SETTINGS => array(
			'info'    => array(
				'ModuleId'   => -1,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcSettingsAdminModule'  => '/modules/settings/GdbcSettingsAdminModule.php',
				'GdbcSettingsPublicModule' => '/modules/settings/GdbcSettingsPublicModule.php',
			)
		),

		self::MODULE_WORDPRESS => array(
			'info'    => array(
				'ModuleId' => 1,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcWordpressAdminModule'  => '/modules/wordpress/GdbcWordpressAdminModule.php',
				'GdbcWordpressPublicModule' => '/modules/wordpress/GdbcWordpressPublicModule.php',
			)
		),

		self::MODULE_POPULAR_FORMS => array(
			'info'    => array(
				'ModuleId' => -2,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcPopularFormsAdminModule'  => '/modules/popular-forms/GdbcPopularFormsAdminModule.php',
				'GdbcPopularFormsPublicModule' => '/modules/popular-forms/GdbcPopularFormsPublicModule.php',
			)
		),

		self::MODULE_JETPACK_CONTACT_FORM => array(
			'info'    => array(
				'ModuleId' => 2,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcJetPackContactFormAdminModule'  => '/modules/jetpack-contact-form/GdbcJetPackContactFormAdminModule.php',
				'GdbcJetPackContactFormPublicModule' => '/modules/jetpack-contact-form/GdbcJetPackContactFormPublicModule.php',
			)
		),

		self::MODULE_BUDDY_PRESS => array(
			'info'    => array(
				'ModuleId' => 3,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcBuddyPressAdminModule'  => '/modules/buddy-press/GdbcBuddyPressAdminModule.php',
				'GdbcBuddyPressPublicModule' => '/modules/buddy-press/GdbcBuddyPressPublicModule.php',
			)
		),

		self::MODULE_NINJA_FORMS => array(
			'info'    => array(
				'ModuleId' => 4,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcNinjaFormsAdminModule'  => '/modules/ninja-forms/GdbcNinjaFormsAdminModule.php',
				'GdbcNinjaFormsPublicModule' => '/modules/ninja-forms/GdbcNinjaFormsPublicModule.php',
			)
		),

		self::MODULE_CONTACT_FORM_7 => array(
			'info'    => array(
				'ModuleId' => 5,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcContactForm7AdminModule'  => '/modules/contact-form-7/GdbcContactForm7AdminModule.php',
				'GdbcContactForm7PublicModule' => '/modules/contact-form-7/GdbcContactForm7PublicModule.php',
			)
		),

		self::MODULE_GRAVITY_FORMS => array(
			'info'    => array(
				'ModuleId' => 6,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcGravityFormsAdminModule'  => '/modules/gravity-forms/GdbcGravityFormsAdminModule.php',
				'GdbcGravityFormsPublicModule' => '/modules/gravity-forms/GdbcGravityFormsPublicModule.php',
			)
		),

		self::MODULE_FAST_SECURE_FORM => array(
			'info'    => array(
				'ModuleId' => 7,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcFastSecureFormAdminModule'  => '/modules/fast-secure-form/GdbcFastSecureFormAdminModule.php',
				'GdbcFastSecureFormPublicModule' => '/modules/fast-secure-form/GdbcFastSecureFormPublicModule.php',
			)
		),

		self::MODULE_FORMIDABLE_FORMS => array(
			'info'    => array(
				'ModuleId' => 8,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcFormidableFormsAdminModule'  => '/modules/formidable-forms/GdbcFormidableFormsAdminModule.php',
				'GdbcFormidableFormsPublicModule' => '/modules/formidable-forms/GdbcFormidableFormsPublicModule.php',
			)
		),

		self::MODULE_SUBSCRIPTIONS => array(
			'info'    => array(
				'ModuleId' => -3,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcSubscriptionsAdminModule'  => '/modules/subscriptions/GdbcSubscriptionsAdminModule.php',
				'GdbcSubscriptionsPublicModule' => '/modules/subscriptions/GdbcSubscriptionsPublicModule.php',
			)
		),

		self::MODULE_MAIL_CHIMP_LITE => array(
			'info'    => array(
				'ModuleId' => 9,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcMailChimpLiteAdminModule'  => '/modules/mail-chimp-lite/GdbcMailChimpLiteAdminModule.php',
				'GdbcMailChimpLitePublicModule' => '/modules/mail-chimp-lite/GdbcMailChimpLitePublicModule.php',
			)
		),

		self::MODULE_UJI_COUNTDOWN => array(
			'info'    => array(
				'ModuleId' => 10,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcUjiCountDownAdminModule'  => '/modules/uji-countdown/GdbcUjiCountDownAdminModule.php',
				'GdbcUjiCountDownPublicModule' => '/modules/uji-countdown/GdbcUjiCountDownPublicModule.php',
			)
		),

		self::MODULE_POPULAR_PLUGINS => array(
			'info'    => array(
				'ModuleId' => 11,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcPopularPluginsAdminModule'  => '/modules/popular-plugins/GdbcPopularPluginsAdminModule.php',
				'GdbcPopularPluginsPublicModule' => '/modules/popular-plugins/GdbcPopularPluginsPublicModule.php',
			)
		),

		self::MODULE_ULTIMATE_MEMBER => array(
			'info'    => array(
				'ModuleId' => 12,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcUltimateMemberAdminModule'  => '/modules/ultimate-member/GdbcUltimateMemberAdminModule.php',
				'GdbcUltimateMemberPublicModule' => '/modules/ultimate-member/GdbcUltimateMemberPublicModule.php',
			)
		),

		self::MODULE_WOOCOMMERCE => array(
			'info'    => array(
				'ModuleId' => 13,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcWooCommerceAdminModule'  => '/modules/woocommerce/GdbcWooCommerceAdminModule.php',
				'GdbcWooCommercePublicModule' => '/modules/woocommerce/GdbcWooCommercePublicModule.php',
			)
		),

		self::MODULE_USER_PROFILE_MADE_EASY => array(
			'info'    => array(
				'ModuleId' => 14,
				'IsPublic' => false,
			),
			'classes' => array(
				'GdbcUPMEAdminModule'  => '/modules/user-profiles-made-easy/GdbcUPMEAdminModule.php',
				'GdbcUPMEPublicModule' => '/modules/user-profiles-made-easy/GdbcUPMEPublicModule.php',
			)
		),


		self::MODULE_REPORTS => array(
			'info'    => array(
				'ModuleId' => -4,
				'IsPublic' => true,
			),
			'classes' => array(
				'GdbcReportsAdminModule'       => '/modules/reports/GdbcReportsAdminModule.php',
				'GdbcReportsPublicModule'      => '/modules/reports/GdbcReportsPublicModule.php',
			)
		),

	);

	protected function __construct(array $arrPluginInfo)
	{
		parent::__construct($arrPluginInfo);
	}

	public function getModuleIdByName($moduleName)
	{
		return isset(self::$arrModules[$moduleName]['info']['ModuleId']) ? self::$arrModules[$moduleName]['info']['ModuleId'] : null;
	}

	public function IsPublicModule($moduleIdORmoduleName)
	{
		$moduleName = ((false === filter_var($moduleIdORmoduleName, FILTER_VALIDATE_INT)) ? $moduleIdORmoduleName : $this->getModuleNameById($moduleIdORmoduleName));

		if(!isset(self::$arrModules[$moduleName]['info']['IsPublic']))
			return false;

		#Returns TRUE for true, "1", "true", "on" and "yes"
		return (false === filter_var(self::$arrModules[$moduleName]['info']['IsPublic'], FILTER_VALIDATE_BOOLEAN)) ? false : true;
	}

	public function getPublicModuleNames()
	{
		$arrFreeModules = array();
		foreach(self::$arrModules as $moduleName => $arrModuleSettings)
		{
			$this->IsPublicModule($moduleName) ? $arrFreeModules[] = $moduleName : null;
		}

		return $arrFreeModules;
	}

	public function getModuleNameById($moduleId)
	{
		$moduleId = (int)$moduleId;
		foreach(self::$arrModules as $moduleKey => $moduleValue)
		{
			if (isset($moduleValue['info']['ModuleId']) && $moduleValue['info']['ModuleId'] === $moduleId)
				return $moduleKey;
		}
		return null;
	}

	public function getRegisteredModules()
	{
		static $arrRegisteredModules = array();

		if(!empty($arrRegisteredModules))
			return $arrRegisteredModules;

		$proBundleClassReflector = class_exists("GoodByeCaptchaPro", false) ? new ReflectionClass("GoodByeCaptchaPro") : null;
		foreach(self::$arrModules as $moduleName => $arrModule)
		{
			$arrRegisteredModules[$moduleName] = array();

			foreach ($arrModule['classes'] as $className => $filePath)
			{
				!empty($filePath) ? $filePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . ($dirPath = MchWpUtil::stripLeftSlashes(dirname($filePath))) . DIRECTORY_SEPARATOR . basename($filePath) : null;

				if(file_exists($filePath))
				{
					$arrRegisteredModules[$moduleName][$className] = $filePath;
					continue;
				}

				if(null !== $proBundleClassReflector)
				{
					$newFilePath    = dirname($proBundleClassReflector->getFileName()) . '/engine/' . $dirPath . DIRECTORY_SEPARATOR . basename($filePath);
					file_exists($newFilePath)  ? $arrRegisteredModules[$moduleName][$className] = $newFilePath : null;

					continue;
				}

				if(!class_exists("GoodByeCaptcha{$moduleName}", false))
					continue;

				$classReflector = new ReflectionClass("GoodByeCaptcha{$moduleName}");
				$newFilePath    = dirname($classReflector->getFileName()) . '/engine/' . $dirPath . DIRECTORY_SEPARATOR . basename($filePath);

				file_exists($newFilePath)  ? $arrRegisteredModules[$moduleName][$className] = $newFilePath : null;
			}

			if(empty($arrRegisteredModules[$moduleName]))
				unset($arrRegisteredModules[$moduleName]);
		}

		return $arrRegisteredModules;
	}

	/**
	 *
	 * @staticvar null $instance
	 * @return \GdbcModulesController
	 */
	public static function getInstance(array $arrPluginInfo)
	{
		static $arrInstances = array();
		$instanceKey         = implode('', $arrPluginInfo);
		return isset($arrInstances[$instanceKey]) ? $arrInstances[$instanceKey] : $arrInstances[$instanceKey] = new self($arrPluginInfo);
	}

}