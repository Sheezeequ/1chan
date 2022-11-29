<?php
/***************************************************************************
 *  	        lang_extend_topic_calendar.php [Русский]
 *		------------------------------
 *	начало				: 28/09/2003
 *	копирайт			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	версия				: 1.0.0 - 28/09/2003
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
	$lang['Lang_extend_topic_calendar'] = 'Календарь';
}

$lang['Calendar'] = 'Календарь';
$lang['Calendar_scheduler'] = 'Планировщик';
$lang['Calendar_event'] = 'Календарное событие';
$lang['Calendar_from_to'] = 'С %s по %s (включая)';
$lang['Calendar_time'] = '%s';
$lang['Calendar_duration'] = 'С';

$lang['Calendar_settings'] = 'Настройки календаря';
$lang['Calendar_week_start'] = 'Первый день недели';
$lang['Calendar_header_cells'] = 'Число ячеек для отображения в календаре<br />(0 чтобы не отображались)';
$lang['Calendar_title_length'] = 'Длина заглавия в календарных ячейках';
$lang['Calendar_text_length'] = 'Длина текста показываемая в окошках обзора';
$lang['Calendar_display_open'] = 'Показывать календарь открытым';
$lang['Calendar_nb_row'] = 'Количество колонок в день в заглавии форума';
$lang['Calendar_birthday'] = 'Показывать дни рождения в календаре';
$lang['Calendar_forum'] = 'Показывать название форума под названием темы в планировщике';

$lang['Sorry_auth_cal'] = 'Извините, но только %s могут создавать события в этом форуме.';
$lang['Date_error'] = 'День %d, Месяц %d, Год %d неверная дата';

$lang['Event_time'] = 'Дата события';
$lang['Minutes'] = 'Минут';
$lang['Today'] = 'Сегодня';
$lang['All_events'] = 'Все события';

$lang['Rules_calendar_can'] = 'Вы <b>можете</b> создавать календарные события в этом форуме';
$lang['Rules_calendar_cannot'] = 'Вы <b>не можете</b> создавать календарные события в этом форуме';
$lang['birthday_header'] = 'С Днём Рождения !';
$lang['birthday'] = '<b>%s</b> сегодня отмечает ДР !';
?>
