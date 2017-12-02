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

$lang = array_merge($lang, array(
	// ACP
	'ENABLE_SFPO' 			=> 'Ativar Mostrar primeiro post apenas para visitante',
	'ENABLE_SFPO_EXPLAIN' 	=> 'Se configurado para sim, os usuários/visitantes não registrados podem visualizar apenas a primeira postagem de qualquer tópico. O resto das postagens no tópico irá pedir-lhes para entrar ou se registrar.',
	'SFPO_CHARACTERS'		=> 'Número de caracteres a serem exibidos',
	'SFPO_CHARACTERS_EXPLAIN'	=> 'Digite o número de caracteres a serem exibidos para o primeiro tópico (o padrão é 150). Configurar o valor para 0 desabilita esse recurso.',
	'SFPO_CHARS'			=> 'Caracteres',
));
