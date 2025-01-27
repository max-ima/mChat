<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Slovenian Translation - Marko K.(max, max-ima,...)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	// Module titles
	'ACP_CAT_MCHAT'					=> 'mChat',
	'ACP_CAT_MCHAT_USER_CONFIG'		=> 'mChat in UKP',
	'ACP_MCHAT_GLOBALSETTINGS'		=> 'Globalne nastavitve',
	'ACP_MCHAT_GLOBALUSERSETTINGS'	=> 'Globalne uporabniške nastavitve',

	// Log entries (%1$s is replaced with the user name who triggered the event)
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>Konfiguracija mChat je posodobljena</strong><br>» %1$s',
	'LOG_MCHAT_TABLE_PRUNED'		=> '<strong>Obrezana sporočila mChat: %2$d</strong>',
	'LOG_MCHAT_TABLE_PURGED'		=> '<strong>Sporočila mChat so izbrisana</strong><br>» %1$s',
	'LOG_DELETED_MCHAT'				=> '<strong>Sporočilo mChat je izbrisano</strong><br>» %1$s',
	'LOG_EDITED_MCHAT'				=> '<strong>mChat sporočilo urejeno</strong><br>» %1$s',
]);
