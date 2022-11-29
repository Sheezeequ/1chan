<?php
/***************************************************************************
 *		lang_extend_categories_hierarchy.php [Russian]
 *		------------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *  translated          : i_am_d, alexey@phpbb2.ru :: RENATA WEB SYSTEMS :: http://renatasystems.org (C) 2005
 *
 *	version				: 1.0.1 - 10/11/2003
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
/* CONTRIBUTORS
   Переведено на русский: Греков Алексей. tankmod@yandex.ru,
*/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_categories_hierarchy'] = 'Иерархия категорий';

	$lang['Category_attachment'] = 'Прикреплено к';
	$lang['Category_desc'] = 'Описание';
	$lang['Category_config_error_fixed'] = 'Ошибка в установке категорий исправлено';
	$lang['Attach_forum_wrong'] = 'Вы не можете прикрепить форум к форуму';
	$lang['Attach_root_wrong'] = 'Вы не можете прикрепить форум к списку форумов';
	$lang['Forum_name_missing'] = 'Вы не можете создавать форум без названия';
	$lang['Category_name_missing'] = 'Вы не можете создавать категорию без названия';
	$lang['Only_forum_for_topics'] = 'Темы могут быть только в форумах';
	$lang['Delete_forum_with_attachment_denied'] = 'Вы не можете удалять форумы с подфорумами';

	$lang['Category_delete'] = 'Удалить категорию';
	$lang['Category_delete_explain'] = 'Форма ниже позволит вам удалить категорию и расположить все форумы и категории.';

	// forum links type
	$lang['Forum_link_url'] = 'URL ссылки';
	$lang['Forum_link_url_explain'] = 'Вы можете выбрать URI к phpBB prog, или полный URL на другой сервер';
	$lang['Forum_link_internal'] = 'Внутри phpBB';
	$lang['Forum_link_internal_explain'] = 'Нажмите Да, если вы запускаете программу в папке phpBB';
	$lang['Forum_link_hit_count'] = 'Счетчик';
	$lang['Forum_link_hit_count_explain'] = 'Выберите Да, если вы хотите считать число переходов по ссылке';
	$lang['Forum_link_with_attachment_deny'] = 'Вы не можете выбрать форум как ссылку, если он содержит подфорумы';
	$lang['Forum_link_with_topics_deny'] = 'Вы не можете выбрать форум как ссылку, если он уже содержит темы';
	$lang['Forum_attached_to_link_denied'] = 'Вы не можете прикреплять форум или категорию к ссылке';

	$lang['Manage_extend'] = 'Управление +';
	$lang['No_subforums'] = 'Нет подфорумов';
	$lang['Forum_type'] = 'Выберите нужный форум';
	$lang['Presets'] = 'Предустановленное';
	$lang['Refresh'] = 'Обновить';
	$lang['Position_after'] = 'Позиция форума после';
	$lang['Link_missing'] = 'Ссылка ошибочна';
	$lang['Category_with_topics_deny'] = 'В этом форуме есть темы. Вы не можете сменить его в категорию.';
	$lang['Recursive_attachment'] = 'Вы не можете прикреплять форум к уровню ниже его';
	$lang['Forum_with_attachment_denied'] = 'Вы не можете сменить категорию с прикрепленными форумами в форум';
	$lang['icon'] = 'Значок';
	$lang['icon_explain'] = 'Значок будет показан перед заголовком форумов. Вы можете установить URI или $image[] (смотрите <i>your_template</i>/<i>your_template</i>.cfg).';
}

$lang['Forum_link'] = 'Переадресация ссылок';
$lang['Forum_link_visited'] = 'Ссылку посетили %d раз';
$lang['Redirect'] = 'Перенаправление';
$lang['Redirect_to'] = 'Еслли ваш браузер не поддерживает мета-перенаправление, то нажмите %sздесь% для перенаправления';

$lang['Use_sub_forum'] = 'Упаковка главной страницы';
$lang['Hierarchy_setting'] = 'Параметры иерархии категорий';
$lang['Index_packing_explain'] = 'Выберите уровень упаковки';
$lang['Medium'] = 'Средний';
$lang['Full'] = 'Полный';
$lang['Split_categories'] = 'Разделить категории';
$lang['Use_last_topic_title'] = 'Показывать последние темы';
$lang['Last_topic_title_length'] = 'Длина заголовка последней темы';
$lang['Sub_level_links'] = 'Ссылки нижнего уровня';
$lang['Sub_level_links_explain'] = 'Добавить подуровни в форумы или категории';
$lang['With_pics'] = 'Со значками';
$lang['Display_viewonline'] = 'Показывать кто онлайн';
$lang['Never'] = 'Никогда';
$lang['Root_index_only'] = 'Только на главной странице';
$lang['Always'] = 'Всегда';
$lang['Subforums'] = 'Подфорумы';
//-- mod : today at   yesterday at ------------------------------------------------------------------------ 
//-- add 
$lang['Today_at'] = '<b>сегодня</b> в %s'; // %s is the time
$lang['Yesterday_at'] = '<b>вчера</b> в %s'; // %s is the time
//-- end mod : today at   yesterday at ------------------------------------------------------------------------ 

?>
