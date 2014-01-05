<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cwmobileredirect".
 *
 * Auto generated 05-01-2014 22:20
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Mobile Redirect',
	'description' => 'Your all-in-one mobile device detection and redirection solution! Detects mobile browsers and redirects to other Typo3 sites in your setup (most likely optimized for mobiles). Allows to easily switch back to the normal version, with Cookie support to remember the users choice. The browser detection can be access via TypoScript or in your own extension.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.4.3',
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
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-6.1.99',
			'php' => '5.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"56ce";s:20:"class.ext_update.php";s:4:"1895";s:29:"class.tx_cwmobileredirect.php";s:4:"554a";s:21:"ext_conf_template.txt";s:4:"a1c0";s:12:"ext_icon.gif";s:4:"4904";s:17:"ext_localconf.php";s:4:"51fd";s:14:"doc/manual.sxw";s:4:"a752";}',
);

?>