<?php
/***************************************************************************
 *			lang_extend_merge.php [Russian]
 *			-------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
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
        $lang['Lang_extend_merge'] = 'Объединение тем';
}

$lang['Refresh'] = 'Обновить';
$lang['Merge_topics'] = 'Объединять темы';
$lang['Merge_title'] = 'Новое название темы';
$lang['Merge_title_explain'] = 'Это будет названием конечной темы. Оставьте поле пустым, если Вы хотите оставить название темы назначения';
$lang['Merge_topic_from'] = 'Тема для объединения';
$lang['Merge_topic_from_explain'] = 'Эта тема будет объединена с другой. Вы можете ввести id темы, ссылку темы(URL), ли ссылку на сообщение в этой теме.';
$lang['Merge_topic_to'] = 'Тема назначения';
$lang['Merge_topic_to_explain'] = 'Эта тема получит все сообщения предшествующей темы. Вы можете ввести id темы, ссылку темы(URL), ли ссылку на сообщение в этой теме.';
$lang['Merge_from_not_found'] = 'Темы для объединения не было найдено.';
$lang['Merge_to_not_found'] = 'Темы назначения не было найдено';
$lang['Merge_topics_equals'] = 'Вы не можете оьъединять одну и ту же тему.';
$lang['Merge_from_not_authorized'] = 'Вы не авторизованы для модерации тем.';
$lang['Merge_to_not_authorized'] =  'Вы не авторизованы для модерации тем.';
$lang['Merge_poll_from'] = 'В присоединяемой теме находитя опрос. Он также будет перемещён в тему назначения.';
$lang['Merge_poll_from_and_to'] = 'Тема назначения уже имеет опрос. Опрос присоединяемой темы будет удалён';
$lang['Merge_confirm_process'] = 'Вы уверены, что хотите объеденить <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'Темы были успешно объединены.';

?>
