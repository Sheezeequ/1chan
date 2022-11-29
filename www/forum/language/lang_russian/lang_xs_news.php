<?php
/***************************************************************************
 *                            lang_xs_news.php [Russian]
 *                              -------------------
 *     begin                : Sat Jan 15 2005
 *     copyright            : (C) 2005 UseLess
 *
 ****************************************************************************/

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

$lang['n_title'] = 'XS-News Управление';

$lang['n_main_title'] = 'XS-News Новости.';
$lang['n_main_title_explain'] = 'Здесь Вы можете редактировать новости.<br /><br />Если Вы хотите поменяеть состояние отображения новости, то Вам необходимо отредактировать ее.';

//
// Config
//
$lang['n_config_title'] = 'XS-News Конфигурация';
$lang['n_config_title_explain'] = 'Здесь Вы можете настроить XS-News.';
$lang['n_config_updated'] = 'XS-News Конфигурация обновлена.';

//
// Add menu item
//
$lang['n_add_page_title'] = 'Добавить новость';
$lang['n_add_page_title_explain'] = 'Используйте эту форму для создания новой новости.';
$lang['n_add_header'] = 'Добавить новую новость.';
$lang['n_news_item_added'] = 'Новость добавлена.';

//
// edit menu item
//
$lang['n_edit_page_title'] = 'Редактировать новость';
$lang['n_edit_page_title_explain'] = 'Используйте эту форму для редактирования новости.';
$lang['n_edit_header'] = 'Редактировать эту новость';

//
// Delete
//
$lang['n_news_delete'] = 'Удалить новость.';
$lang['n_news_delete_explain'] = 'Используйте эту форму для удаления новости.';
$lang['n_confirm_delete_news'] = 'Вы уверены, что хотите удалить эту новость?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_news_item'] = 'Новость';
$lang['n_news_item_display'] = 'Отображать?';

$lang['n_news_date'] = 'Дата новости';

$lang['n_create_item'] = 'Создать новое сообщение';
$lang['n_create_item_null'] = 'Нельзя создать новость, не указав ее текст.';

$lang['n_news_smilies'] = 'Включить смайлы в тексте?';
$lang['n_smilies_button'] = 'Смайлы';

$lang['xs_no_news'] = 'Нет новостей.';
$lang['xs_news_invalid_date'] = 'Ошибка в дате, формат ввода: ДД/ММ/ГГГГ';
$lang['n_news_updated'] = 'Новости успешно обновлены';
$lang['n_click_return_newslist'] = 'Нажмите %sздесь%s для возврата к списку новостей';

//
// XS News XML Settings
//
$lang['n_xml_title'] = 'Управление XS-News лентами';
$lang['n_xml_title_explain'] = 'Здесь Вы можете управлять новостными лентами.';
$lang['n_xml_title_explain_0'] = 'Если статус ленты новостей (показанный выше) установлен в \'Off\', то изменение статуса показа любой ленты бессмысленно, поскольку отображения не произойдет ни для одного объекта, показанного ниже.<br /><br />Но, если если статус у становлен в \'On\' и Вы хотите изменить статус показа любой ленты, то Вам необходимо отредактировать ее.';
$lang['n_xml_sub_title'] = 'XS-News ленты.';
$lang['n_xml_master_switch'] = 'Статус ленты новостей: <b>%s</b> и значит, что ленты новостей <b>%s</b> отображаться.';
$lang['n_xml_ms_will'] = 'будут';
$lang['n_xml_ms_not'] = 'не будут';

$lang['xs_news_ticker_settings'] = 'Настройка ленты новостей';
$lang['xs_news_ticker_title'] = 'Название ленты новостей:';
$lang['xs_news_ticker_title_explain'] = 'Используемый в XML News Feed список, для идентификации каждой новости.';
$lang['xs_news_ticker_show'] = 'Показывать эту ленту новостей?';
$lang['xs_news_ticker_feed'] = 'XML News Feed';
$lang['xs_news_ticker_feed_explain'] = 'Полный URL для указания ленте новостей где получать пункты новостей';
$lang['xs_news_ticker_is_feed'] = 'Это - XML News Feed?';
$lang['xs_news_ticker_is_feed_explain'] = 'Если установить \'Да\', то по URL будет производиться попытка выбрать пункты новостей, если установить \'No\', то будет прокрычиваться любой текст, отображаемый по указанному URL.';
$lang['xs_news_ticker_wh'] = 'Ширина x Высота ленты Новостей.';
$lang['xs_news_ticker_wh_explain'] = 'Вы можете определить ширину и высоту ленты новостей, по умолчанию - 98 % x 20, ширина базируется на проценте от ширины таблицы, в то время как высота указывается в пикселах.';
$lang['xs_news_ticker_fontsize'] = 'Размер шрифта, используемый в ленте новостей';
$lang['xs_news_ticker_fontsize_explain'] = 'Вы можете сами указать размер шрифта для отображения новостей. Значение 0 отключает эту функцию.';
$lang['xs_news_ticker_ss'] = 'Скорость прокрутки';
$lang['xs_news_ticker_ss_explain'] = 'Чем больше значение, тем больше скорость';
$lang['xs_news_ticker_sd'] = 'Направление прокрутки';
$lang['xs_news_left'] = 'Влево';
$lang['xs_news_right'] = 'Вправо';

//
// Add menu item
//
$lang['n_xml_add_page_title'] = 'Добавление XML News Feed';
$lang['n_xml_add_page_title_explain'] = 'Используйте эту форму для добавления XML News Feed.';
$lang['n_xml_add_header'] = 'Добавить новую XML News Feed';
$lang['n_xml_news_item_added'] = 'XML News Feed добавлена.';

//
// edit menu item
//
$lang['n_xml_edit_page_title'] = 'Редактирование XML News Feed';
$lang['n_xml_edit_page_title_explain'] = 'используйте эту форму для редактирования XML News Feed.';
$lang['n_xml_edit_header'] = 'Редактировать XML News Feed';

//
// Delete
//
$lang['n_xml_news_delete'] = 'Удаление XML News Feed.';
$lang['n_xml_news_delete_explain'] = 'Используйте эту форму для удаления XML News Feed.';
$lang['n_xml_confirm_delete_news'] = 'вы уверены, что хотите удалить указанную XML News Feed?';

//
// General Settings used by Add/Edit Menu item
//
$lang['n_xml_news_item'] = 'Новость';
$lang['n_xml_news_item_display'] = 'Отображать?';

$lang['n_xml_create_item'] = 'Создать новую ленту';
$lang['n_xml_create_item_null'] = 'Не возможно создать ленту новостей без указания XML Feed URL или текста для прокрутки.';

$lang['n_xml_no_feeds'] = 'Нет XML News Feeds.';
$lang['n_xml_news_updated'] = 'Лента была обновлена';
$lang['n_xml_click_return_newslist'] = 'Нажмите %sздесь%s для возврата к списку новостных лент';

$lang['n_xml_show'] = 'Показать';
$lang['n_xml_title'] = 'Название ленты';

//
// That's all, Folks!
// -------------------------------------------------

?>