<?php

/**
*
* @package Show first post only to guest
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.2.4] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

//Show First Post Only
$lang = array_merge($lang, array(
	'SFPO_MSG_REPLY'        => array(
		1 => 'Este tópico tem <strong>1</strong> resposta',
		2 => 'Este tópico tem <strong>%d</strong> respostas',
	),
	'SFPO_MSG_REGISTER'        => 'Você deve ser um membro registrado e logado para ver as respostas neste tópico.',
	'SFPO_APPEND_MESSAGE' => '...<em>%slogin%s</em> para ver o resto desta postagem',
));
