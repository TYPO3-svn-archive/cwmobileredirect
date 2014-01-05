<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cwmobileredirect".
 *
 * Auto generated 18-12-2013 09:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Mobile Redirect',
	'description' => 'Your all-in-one mobile device detection and redirection solution! Detects mobile browsers and redirects to other Typo3 sites in your setup (most likely optimized for mobiles). Allows to easily switch back to the normal version, with Cookie support to remember the users choice. The browser detection can be access via TypoScript or in your own extension.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.4.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Carsten Windler',
	'author_email' => 'carsten@windler-online.de',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '4.3.0-0.0.0',
			'php' => '5.3.0-0.0.0',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

?>