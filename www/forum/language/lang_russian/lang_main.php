<?php
/***************************************************************************
 *                            lang_main.php [Russian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'windows-1251';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Форум';
$lang['Category'] = 'Категория';
$lang['Topic'] = 'Тема';
$lang['Topics'] = 'Темы';
$lang['Replies'] = 'Ответов';
$lang['Views'] = 'Просмотров';
$lang['Post'] = 'Сообщение';
$lang['Posts'] = 'Сообщения';
$lang['Posted'] = 'Добавлено';
$lang['Username'] = 'Имя';
$lang['Password'] = 'Пароль';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Автор';
$lang['Author'] = 'Автор';
$lang['Time'] = 'Время';
$lang['Hours'] = 'Часы';
$lang['Message'] = 'Сообщение';

$lang['1_Day'] = 'за последний день';
$lang['7_Days'] = 'за последние 7 дней';
$lang['2_Weeks'] = 'за последние 2 недели';
$lang['1_Month'] = 'за последний месяц';
$lang['3_Months'] = 'за последние 3 месяца';
$lang['6_Months'] = 'за последние 6 месяцев';
$lang['1_Year'] = 'за последний год';

$lang['Go'] = 'Перейти';
$lang['Jump_to'] = 'Перейти';
$lang['Submit'] = 'Отправить';
$lang['Sending'] = 'Отправляется';
$lang['Reset'] = 'Вернуть';
$lang['Cancel'] = 'Отмена';
$lang['Preview'] = 'Предварительный просмотр';
$lang['Confirm'] = 'Подтвердите';
$lang['Spellcheck'] = 'Орфография';
$lang['Yes'] = 'Да';
$lang['No'] = 'Нет';
$lang['Enabled'] = 'Включено';
$lang['Disabled'] = 'Выключено';
$lang['Error'] = 'Ошибка';

$lang['Next'] = 'Следующий';
$lang['Previous'] = 'Предыдущий';
$lang['Goto_page'] = 'На страницу';
$lang['Joined'] = 'Зарегистрирован';
$lang['IP_Address'] = 'Адрес IP';

$lang['Select_forum'] = 'Выберите форум';
$lang['View_latest_post'] = 'Просмотреть последнее сообщение';
$lang['View_newest_post'] = 'Самое новое сообщение';
$lang['Page_of'] = 'Страница <b>%d</b> из <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Номер ICQ';
$lang['AIM'] = 'Адрес AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['JABBER'] = 'Jabber';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Список форумов %s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Начать новую тему';
$lang['Reply_to_topic'] = 'Ответить на тему';
$lang['Reply_with_quote'] = 'Ответить с цитатой';

$lang['Click_return_topic'] = '%sВернуться в тему%s'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sПопробовать еще раз%s';
$lang['Click_return_forum'] = '%sВернуться в форум%s';
$lang['Click_view_message'] = '%sПросмотреть ваше сообщение%s';
$lang['Click_return_modcp'] = '%sВернуться к панели модерации%s';
$lang['Click_return_group'] = '%sВернуться к информации о группах%s';

$lang['Admin_panel'] = 'Перейти в администраторский раздел';

$lang['Board_disable'] = 'Извините, эти форумы отключены. Попробуйте зайти попозже.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Зарегистрированные пользователи:';
$lang['Browsing_forum'] = 'Сейчас этот форум просматривают:';
$lang['Online_users_zero_total'] = 'Сейчас посетителей на форуме <b>0</b>, из них ';
$lang['Online_users_total'] = 'Сейчас посетителей на форуме <b>%d</b>, из них ';
$lang['Online_user_total'] = 'Сейчас посетителей на форуме <b>%d</b>, из них ';
$lang['Reg_users_zero_total'] = 'зарегистрированных: 0, ';
$lang['Reg_users_total'] = 'зарегистрированных: %d, ';
$lang['Reg_user_total'] = 'зарегистрированных: %d, ';
$lang['Hidden_users_zero_total'] = 'скрытых: 0 и ';
$lang['Hidden_user_total'] = 'скрытых: %d и ';
$lang['Hidden_users_total'] = 'скрытых: %d и ';
$lang['Guest_users_zero_total'] = 'гостей: 0';
$lang['Guest_users_total'] = 'гостей: %d';
$lang['Guest_user_total'] = 'гостей: %d';
$lang['Record_online_users'] = 'Больше всего посетителей <b>%s</b> здесь было %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sАдминистратор%s';
$lang['Mod_online_color'] = '%sМодератор%s';

$lang['You_last_visit'] = 'Вы последний раз заходили %s'; // %s replaced by date/time
$lang['Current_time'] = 'Текущее время %s'; // %s replaced by time

$lang['Search_new'] = 'Найти сообщения с вашего последнего посещения';
$lang['Search_new_p'] = 'Найти сообщения с <br />последнего посещения';
$lang['Search_your_posts'] = 'Найти ваши сообщения';
$lang['Search_unanswered'] = 'Найти сообщения без ответов';

$lang['Register'] = 'Регистрация';
$lang['Profile'] = 'Профиль';
$lang['Edit_profile'] = 'Редактировать ваш профиль';
$lang['Search'] = 'Поиск';
$lang['Memberlist'] = 'Пользователи';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Руководство по BBCode';
$lang['Usergroups'] = 'Группы';
$lang['Last_Post'] = 'Последнее сообщение';
$lang['Moderator'] = 'Модератор';
$lang['Moderators'] = 'Модераторы';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Наши пользователи не оставили ни одного сообщения'; // Number of posts
$lang['Posted_articles_total'] = 'Наши пользователи оставили сообщений: <b>%d</b>'; // Number of posts
$lang['Posted_article_total'] = 'Наши пользователи оставили сообщений: <b>%d</b>'; // Number of posts
$lang['Registered_users_zero_total'] = 'У нас нет зарегистрированных пользователей'; // # registered users
$lang['Registered_users_total'] = 'Всего зарегистрированных пользователей: <b>%d</b>'; // # registered users
$lang['Registered_user_total'] = 'Всего зарегистрированных пользователей: <b>%d</b>'; // # registered users
$lang['Newest_user'] = 'Последний зарегистрированный пользователь: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Нет новых сообщений с последнего посещения'; 
$lang['No_new_posts'] = 'Нет новых сообщений с последнего посещения'; 
$lang['New_posts'] = 'Сообщения с последнего посещения'; 
$lang['New_post'] = 'Сообщений с последнего посещения';
$lang['No_new_posts_hot'] = 'Нет новых сообщений [ Популярная тема ]';
$lang['New_posts_hot'] = 'Новые сообщения [ Популярная тема ]';
$lang['No_new_posts_locked'] = 'Нет новых сообщений [ Тема закрыта ]';
$lang['New_posts_locked'] = 'Новые сообщения [ Тема закрыта ]';
$lang['Forum_is_locked'] = 'Форум закрыт';


//
// Login
//
$lang['Enter_password'] = 'Введите ваше имя и пароль для входа в систему.';
$lang['Login'] = 'Вход';
$lang['Logout'] = 'Выход';

$lang['Forgotten_password'] = 'Забыли пароль?';

$lang['Log_me_in'] = 'Автоматически входить при каждом посещении';

$lang['Error_login'] = 'Вы ввели неверное/неактивное имя пользователя или неверный пароль.';


//
// Index page
//
$lang['Index'] = 'Главная';
$lang['No_Posts'] = 'Нет сообщений';
$lang['No_forums'] = 'На этом сайте нет форумов';

$lang['Private_Message'] = 'Личное сообщение';
$lang['Private_Messages'] = 'Личные сообщения';
$lang['Who_is_Online'] = 'Кто сейчас на форуме';

$lang['Mark_all_forums'] = 'Отметить все форумы как прочтённые';
$lang['Forums_marked_read'] = 'Все форумы были отмечены как прочтённые';


//
// Viewforum
//
$lang['View_forum'] = 'Просмотр форума';

$lang['Forum_not_exist'] = 'Форума, который вы выбрали, не существует.';
$lang['Reached_on_error'] = 'Вы попали на эту страницу из-за ошибки.';

$lang['Display_topics'] = 'Показать темы';
$lang['All_Topics'] = 'Все темы';

$lang['Topic_Announcement'] = '<b>Обьявление:</b>';
$lang['Topic_Sticky'] = '<b>Прилеплена:</b>';
$lang['Topic_Moved'] = '<b>Перемещена:</b>';
$lang['Topic_Poll'] = '<b>[ Опрос ]</b>';

$lang['Mark_all_topics'] = 'Отметить все темы как прочтённые';
$lang['Topics_marked_read'] = 'Все темы в этом форуме были отмечены как прочтенные';

$lang['Rules_post_can'] = 'Вы <b>можете</b> начинать темы';
$lang['Rules_post_cannot'] = 'Вы <b>не можете</b> начинать темы';
$lang['Rules_reply_can'] = 'Вы <b>можете</b> отвечать на сообщения';
$lang['Rules_reply_cannot'] = 'Вы <b>не можете</b> отвечать на сообщения';
$lang['Rules_edit_can'] = 'Вы <b>можете</b> редактировать свои сообщения';
$lang['Rules_edit_cannot'] = 'Вы <b>не можете</b> редактировать свои сообщения';
$lang['Rules_delete_can'] = 'Вы <b>можете</b> удалять свои сообщения';
$lang['Rules_delete_cannot'] = 'Вы <b>не можете</b> удалять свои сообщения';
$lang['Rules_vote_can'] = 'Вы <b>можете</b> голосовать в опросах';
$lang['Rules_vote_cannot'] = 'Вы <b>не можете</b> голосовать в опросах';
$lang['Rules_moderate'] = 'Вы <b>можете</b> %sмодерировать этот форум%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'В этом форуме пока нет сообщений<br />Нажмите <b>Начать новую тему</b>, и ваше сообщение станет первым.';


//
// Viewtopic
//
$lang['View_topic'] = 'Просмотр темы';

$lang['Guest'] = 'Гость';
$lang['Post_subject'] = 'Заголовок сообщения';
$lang['View_next_topic'] = 'Следующая тема';
$lang['View_previous_topic'] = 'Предыдущая тема';
$lang['Submit_vote'] = 'Проголосовать';
$lang['View_results'] = 'Результаты';

$lang['No_newer_topics'] = 'На этом форуме нет более новых тем';
$lang['No_older_topics'] = 'На этом форуме нет более старых тем';
$lang['Topic_post_not_exist'] = 'Темы, которую вы запросили, не существует';
$lang['No_posts_topic'] = 'В этой теме нет сообщений';

$lang['Display_posts'] = 'Показать сообщения';
$lang['All_Posts'] = 'Все сообщения';
$lang['Newest_First'] = 'Начиная с новых';
$lang['Oldest_First'] = 'Начиная со старых';

$lang['Back_to_top'] = 'Вернуться к началу';

$lang['Read_profile'] = 'Просмотреть профиль';
$lang['Send_email'] = 'Отправить e-mail';
$lang['Visit_website'] = 'Посетить сайт автора';
$lang['ICQ_status'] = 'Статус ICQ';
$lang['Edit_delete_post'] = 'Изменить/удалить это сообщение';
$lang['View_IP'] = 'Показать IP адрес автора';
$lang['Delete_post'] = 'Удалить это сообщение';

$lang['wrote'] = 'писал(а)'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Цитата'; // comes before bbcode quote output.
$lang['Code'] = 'Код'; // comes before bbcode code output.
$lang['Hide'] = 'Нажми для отображения';


$lang['Edited_time_total'] = 'Последний раз редактировалось: %s (%s), всего редактировалось %d раз'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Последняя раз редактировалось: %s (%s), всего редактировалось %d раз'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Закрыть тему';
$lang['Unlock_topic'] = 'Вновь открыть тему';
$lang['Move_topic'] = 'Переместить тему';
$lang['Delete_topic'] = 'Удалить тему';
$lang['Split_topic'] = 'Разделить тему';

$lang['Stop_watching_topic'] = 'Перестать следить за ответами';
$lang['Start_watching_topic'] = 'Следить за ответами в теме';
$lang['No_longer_watching'] = 'Вы больше не следите за ответами в этой теме';
$lang['You_are_watching'] = 'Теперь вы следите за ответами в этой теме';

$lang['Total_votes'] = 'Всего проголосовало';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Сообщение';
$lang['Topic_review'] = 'Обзор темы';

$lang['No_post_mode'] = 'Не указан режим сообщения'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Начать новую тему';
$lang['Post_a_reply'] = 'Ответить';
$lang['Post_topic_as'] = 'Статус создаваемой темы';
$lang['Edit_Post'] = 'Редактировать сообщение';
$lang['Options'] = 'Настройки';

$lang['Post_Announcement'] = 'Обьявление';
$lang['Post_Sticky'] = 'Прилепленная';
$lang['Post_Normal'] = 'Обычная';

$lang['Confirm_delete'] = 'Вы уверены, что хотите удалить это сообщение?';
$lang['Confirm_delete_poll'] = 'Вы уверены, что хотите удалить этот опрос?';

$lang['Flood_Error'] = 'Вы не можете отправить следующее сообщение сразу после предыдущего. Пожалуйста, попробуйте чуть попозже.';
$lang['Empty_subject'] = 'Вы должны указать заголовок сообщения, когда начинаете новую тему.';
$lang['Empty_message'] = 'Вы должны ввести текст сообщения.';
$lang['Forum_locked'] = 'Этот форум закрыт, вы не можете писать новые сообщения и редактировать старые.';
$lang['Topic_locked'] = 'Эта тема закрыта, вы не можете писать ответы и редактировать сообщения.';
$lang['No_post_id'] = 'Вы должны выбрать сообщение для редактирования';
$lang['No_topic_id'] = 'Вы должны выбрать тему для ответа';
$lang['No_valid_mode'] = 'Вы можете только создавать темы, отвечать и редактировать сообщения. Вернитесь и попробуйте еще раз.';
$lang['No_such_post'] = 'Сообщение отсутствует. Вернитесь и попробуйте еще раз.';
$lang['Edit_own_posts'] = 'Извините, вы можете редактировать только ваши собственные сообщения.';
$lang['Delete_own_posts'] = 'Извините, вы можете удалять только ваши собственные сообщения.';
$lang['Cannot_delete_replied'] = 'Извините, вы не можете удалить сообщение, на которое были получены ответы.';
$lang['Cannot_delete_poll'] = 'Извините, вы не можете удалить активный опрос.';
$lang['Empty_poll_title'] = 'Вы должны ввсети заголовок для опроса.';
$lang['To_few_poll_options'] = 'Вы должны ввести не менее двух вариантов ответа.';
$lang['To_many_poll_options'] = 'Вы попытались ввести слишком много вариантов ответа.';
$lang['Post_has_no_poll'] = 'В этом сообщении нет опроса.';
$lang['Already_voted'] = 'Вы уже голосовали в этом опросе.';
$lang['No_vote_option'] = 'Вы должны указать вариант ответа при голосовании.';

$lang['Add_poll'] = 'Добавить опрос';
$lang['Add_poll_explain'] = 'Если вы не хотите добавлять опрос к вашему сообщению, оставьте поля пустыми.';
$lang['Poll_question'] = 'Вопрос';
$lang['Poll_option'] = 'Вариант ответа';
$lang['Add_option'] = 'Добавить еще вариант';
$lang['Update'] = 'Обновить';
$lang['Delete'] = 'Удалить';
$lang['Poll_for'] = 'Опрос должен идти';
$lang['Days'] = 'Дней'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Введите 0 или оставьте поле пустым, чтобы опрос не кончался ]';
$lang['Delete_poll'] = 'Удалить опрос';

$lang['Disable_HTML_post'] = 'Отключить в этом сообщении HTML';
$lang['Disable_BBCode_post'] = 'Отключить в этом сообщении BBCode';
$lang['Disable_Smilies_post'] = 'Отключить в этом сообщении смайлики';

$lang['HTML_is_ON'] = 'HTML <u>ВКЛЮЧЕН</u>';
$lang['HTML_is_OFF'] = 'HTML <u>ВЫКЛЮЧЕН</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>ВКЛЮЧЕН</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>ВЫКЛЮЧЕН</u>';
$lang['Smilies_are_ON'] = 'Смайлики <u>ВКЛЮЧЕНЫ</u>';
$lang['Smilies_are_OFF'] = 'Смайлики <u>ВЫКЛЮЧЕНЫ</u>';

$lang['Attach_signature'] = 'Присоединить подпись (подпись можно менять в профиле)';
$lang['Notify'] = 'Сообщать мне о получении ответа';
$lang['Delete_post'] = 'Удалить сообщение';

$lang['Stored'] = 'Ваше сообщение было успешно добавлено.';
$lang['Deleted'] = 'Ваше сообщение было успешно удалено.';
$lang['Poll_delete'] = 'Ваш опрос был успешно удален.';
$lang['Vote_cast'] = 'Ваш голос учтен.';

$lang['Topic_reply_notification'] = 'Уведомление об ответах в теме';

$lang['bbcode_b_help'] = 'Жирный текст: [b]текст[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Наклонный текст: [i]текст[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Подчеркнутый текст: [u]текст[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Цитата: [quote]текст[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Код (программа): [code]код[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Список: [list]текст[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Нумерованный список: [list=]текст[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Вставить картинку: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Вставить ссылку: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Закрыть все открытые тэги bbCode ';
$lang['bbcode_s_help'] = 'Цвет шрифта: [color=red]текст[/color]  Подсказка: можно использовать color=#FF0000';
$lang['bbcode_f_help'] = 'Размер шрифта: [size=x-small]маленький текст[/size]';
$lang['bbcode_help']['hide'] = 'Скрытие текста: [hide]текст[/hide] или [hide=комментарий]текст[/hide] (alt+%s)';



$lang['Emoticons'] = 'Смайлики';
$lang['More_emoticons'] = 'Дополнительные смайлики';

$lang['Font_color'] = 'Цвет шрифта';
$lang['color_default'] = 'По умолчанию';
$lang['color_dark_red'] = 'Темно-красный';
$lang['color_red'] = 'Красный';
$lang['color_orange'] = 'Оранжевый';
$lang['color_brown'] = 'Коричневый';
$lang['color_yellow'] = 'Желтый';
$lang['color_green'] = 'Зеленый';
$lang['color_olive'] = 'Оливковый';
$lang['color_cyan'] = 'Голубой';
$lang['color_blue'] = 'Синий';
$lang['color_dark_blue'] = 'Темно-синий';
$lang['color_indigo'] = 'Индиго';
$lang['color_violet'] = 'Фиолетовый';
$lang['color_white'] = 'Белый';
$lang['color_black'] = 'Черный';

$lang['Font_size'] = 'Размер шрифта';
$lang['font_tiny'] = 'Очень маленький';
$lang['font_small'] = 'Маленький';
$lang['font_normal'] = 'Обычный';
$lang['font_large'] = 'Большой';
$lang['font_huge'] = 'Огромный';

$lang['Close_Tags'] = 'Закрыть тэги';
$lang['Styles_tip'] = 'Подсказка: Можно быстро применить стили к выделенному тексту.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Личные сообщения';

$lang['Login_check_pm'] = 'Войти и проверить личные сообщения';
$lang['New_pms'] = 'Новых ЛС: %d'; // You have 2 new messages
$lang['New_pm'] = 'Новое ЛС: %d'; // You have 1 new message
$lang['No_new_pm'] = 'Новых ЛС нет';
$lang['Unread_pms'] = 'Непрочитанных ЛС: %d';
$lang['Unread_pm'] = 'Непрочитанное ЛС: %d';
$lang['No_unread_pm'] = 'Нет непрочитанных ЛС';
$lang['You_new_pm'] = 'Вам пришло новое личное сообщение';
$lang['You_new_pms'] = 'Вам пришли новые личные сообщения';
$lang['You_no_new_pm'] = 'У вас нет новых личных сообщений';

$lang['Unread_message'] = 'Непрочитанное ЛС';
$lang['Read_message'] = 'Прочитанное ЛС';

$lang['Read_pm'] = 'Прочитать ЛС';
$lang['Post_new_pm'] = 'Написать новое ЛС';
$lang['Post_reply_pm'] = 'Ответить на ЛС';
$lang['Post_quote_pm'] = 'Ответить на ЛС с цитатой';
$lang['Edit_pm'] = 'Редактировать ЛС';

$lang['Inbox'] = 'Входящие';
$lang['Outbox'] = 'Исходящие';
$lang['Savebox'] = 'Сохраненные';
$lang['Sentbox'] = 'Отправленные';
$lang['Flag'] = 'Флаг';
$lang['Subject'] = 'Тема';
$lang['From'] = 'От';
$lang['To'] = 'Кому';
$lang['Date'] = 'Дата';
$lang['Mark'] = 'Отметка';
$lang['Sent'] = 'Отправлено';
$lang['Saved'] = 'Сохранено';
$lang['Delete_marked'] = 'Удалить отмеченное';
$lang['Delete_all'] = 'Удалить все';
$lang['Save_marked'] = 'Сохранить отмеченное';
$lang['Save_message'] = 'Сохранить сообщение';
$lang['Delete_message'] = 'Удалить сообщение';

$lang['Display_messages'] = 'Показать сообщения'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Все сообщения';

$lang['No_messages_folder'] = 'В этой папке нет сообщений';

$lang['PM_disabled'] = 'Возможность отправки личных сообщений на этих форумах была отключена.';
$lang['Cannot_send_privmsg'] = 'Извините, вам не разрешено отправлять личные сообщения.';
$lang['No_to_user'] = 'Вы должны указать имя получателя этого сообщения.';
$lang['No_such_user'] = 'Извините, но такого пользователя не существует.';

$lang['Disable_HTML_pm'] = 'Отключить в этом ЛС HTML';
$lang['Disable_BBCode_pm'] = 'Отключить в этом ЛС BBCode';
$lang['Disable_Smilies_pm'] = 'Отключить в этом ЛС смайлики';

$lang['Message_sent'] = 'Ваше ЛС было отправлено.';

$lang['Click_return_inbox'] = '%sВернуться в папку &laquo;Входящие&raquo;%s';
$lang['Click_return_index'] = '%sВернуться к списку форумов%s';

$lang['Send_a_new_message'] = 'Отправить личное сообщение';
$lang['Send_a_reply'] = 'Ответить на личное сообщение';
$lang['Edit_message'] = 'Редактировать личное сообщение';

$lang['Notification_subject'] = 'Вам пришло новое личное сообщение';

$lang['Find_username'] = 'Найти пользователя';
$lang['Find'] = 'Найти';
$lang['No_match'] = 'Не найдено.';

$lang['No_post_id'] = 'Не указан ID';
$lang['No_such_folder'] = 'Такой папки нет';
$lang['No_folder'] = 'Не указана папка';

$lang['Mark_all'] = 'Выделить все';
$lang['Unmark_all'] = 'Снять выделение';

$lang['Confirm_delete_pm'] = 'Вы уверены, что хотите удалить это ЛС?';
$lang['Confirm_delete_pms'] = 'Вы уверены, что хотите удалить эти ЛС?';

$lang['Inbox_size'] = 'Ваша папка &laquo;Входящие&raquo; заполнена на %d%%'; // eg. Your Inbox is 50% full$lang['Sentbox_size'] = 'Your Sentbox is %d%% full';
$lang['Savebox_size'] = 'Ваша папка &laquo;Сохраненные&raquo; заполнена на %d%%';

$lang['Click_view_privmsg'] = '%sПерейти в папку &laquo;Входящие&raquo;%s';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Профиль пользователя %s'; // %s is username
$lang['About_user'] = 'О пользователе %s'; // %s is username

$lang['Preferences'] = 'Личные настройки';
$lang['Items_required'] = 'Поля, отмеченные * обязательны к заполнению, если не указано обратное.';
$lang['Registration_info'] = 'Регистрационная информация';
$lang['Profile_info'] = 'Профиль';
$lang['Profile_info_warn'] = 'Эта информация будет в открытом доступе';
$lang['Avatar_panel'] = 'Управление аватаром';
$lang['Avatar_gallery'] = 'Галерея аватар';

$lang['Website'] = 'Сайт';
$lang['Location'] = 'Откуда';
$lang['Contact'] = 'Как связаться с';
$lang['Email_address'] = 'Адрес E-mail';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Отправить личное сообщение';
$lang['Hidden_email'] = '[ Скрыт ]';
$lang['Search_user_posts'] = 'Искать все сообщения этого пользователя';
$lang['Interests'] = 'Интересы';
$lang['Occupation'] = 'Род занятий';
$lang['Poster_rank'] = 'Звание';

$lang['Total_posts'] = 'Всего сообщений';
$lang['User_post_pct_stats'] = '%.2f%% от общего числа'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f сообщений в день'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Найти все сообщения пользователя %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Извините, такого пользователя не существует.';
$lang['Wrong_Profile'] = 'Вы не можете редактировать чужой профиль.';

$lang['Only_one_avatar'] = 'Может быть указан только однин тип аватара';
$lang['File_no_data'] = 'Файл по указанному вами URL не содержит данных';
$lang['No_connection_URL'] = 'Невозможно установить соединения с указанным вами URL';
$lang['Incomplete_URL'] = 'Вы указали неполный URL';
$lang['Wrong_remote_avatar_format'] = 'Неверный URL удаленного аватара';
$lang['No_send_account_inactive'] = 'Извините, но пароль не может быть выслан, так как ваша учетная запись неактивна. Обратитесь к администратору форума за дополнительной информацией.';

$lang['Always_smile'] = 'Смайлики всегда включены';
$lang['Always_html'] = 'HTML всегда включен';
$lang['Always_bbcode'] = 'BBCode всегда включен';
$lang['Always_add_sig'] = 'Всегда присоединять мою подпись';
$lang['Always_notify'] = 'Всегда сообщать мне об ответах';
$lang['Always_notify_explain'] = 'Когда кто-нибудь ответит на тему, в которую вы писали, вам высылается e-mail. Это можно также настроить при размещении сообщения.';

$lang['Board_style'] = 'Внешний вид форумов';
$lang['Board_lang'] = 'Язык';
$lang['No_themes'] = 'В базе нет цветовых схем';
$lang['Timezone'] = 'Часовой пояс';
$lang['Date_format'] = 'Формат даты';
$lang['Date_format_explain'] = 'Синтаксис идентичен функции <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> языка РНР.';
$lang['Signature'] = 'Подпись';
$lang['Signature_explain'] = 'Это текст, который можно добавлять к размещаемым вами сообщениям. Длина его ограничена %d символами';
$lang['Public_view_email'] = 'Всегда показывать адрес моего e-mail';

$lang['Current_password'] = 'Текущий пароль';
$lang['New_password'] = 'Новый пароль';
$lang['Confirm_password'] = 'Подтвердите пароль';
$lang['Confirm_password_explain'] = 'Вы должны указать ваш текущий пароль, если хотите изменить его или поменять свой адрес e-mail.';
$lang['password_if_changed'] = 'Указывайте пароль только если вы хотите его поменять';
$lang['password_confirm_if_changed'] = 'Подтверждать пароль нужно в том случае, если вы изменили его выше';

$lang['Avatar'] = 'Аватар';
$lang['Avatar_explain'] = 'Показывает небольшое изображение под информацией о вас в сообщениях. Может быть показано только одно изображение, шириной не более %d пикселов, высотой не более %d пикселов и объёмом не более %d КБ.';
$lang['Upload_Avatar_file'] = 'Загрузить аватар с вашего компьютера';
$lang['Upload_Avatar_URL'] = 'Загрузить аватар с URL';
$lang['Upload_Avatar_URL_explain'] = 'Введите URL по которому находится файл с изображением, он будет скопирован на этот сайт.';
$lang['Pick_local_Avatar'] = 'Выбрать аватар из галереи';
$lang['Link_remote_Avatar'] = 'Показывать аватар с другого сервера';
$lang['Link_remote_Avatar_explain'] = 'Введите URL изображения, на которое вы хотите сослаться.';
$lang['Avatar_URL'] = 'URL изображения Аватара';
$lang['Select_from_gallery'] = 'Выбрать Аватар из галереи';
$lang['View_avatar_gallery'] = 'Показать галерею';

$lang['Select_avatar'] = 'Выберите Аватар';
$lang['Return_profile'] = 'Вернуться к профилю';
$lang['Select_category'] = 'Выберите категорию';

$lang['Delete_Image'] = 'Удалить изображение';
$lang['Current_Image'] = 'Текущее изображение';

$lang['Notify_on_privmsg'] = 'Уведомлять о новых личных сообщениях';
$lang['Popup_on_privmsg'] = 'Открывать новое окно при новом личном сообщении';
$lang['Popup_on_privmsg_explain'] = 'В некоторых шаблонах может открываться новое окно браузера с уведомлением о приходе нового личного сообщения.';
$lang['Hide_user'] = 'Скрывать ваше пребывание на форуме';

$lang['Profile_updated'] = 'Ваш профиль был изменен';
$lang['Profile_updated_inactive'] = 'Ваш профиль был изменен, но вы изменили важные данные, так что теперь ваша учетная запись неактивна. Проверьте ваш почтовый ящик, чтобы узнать как вновь активизировать учетную запись или, если требуется одобрение администратора, подождите пока это сделает администратор.';

$lang['Password_mismatch'] = 'Введенные пароли не совпадают.';
$lang['Current_password_mismatch'] = 'Введённый вами пароль не совпадает с паролем из базы.';
$lang['Password_long'] = 'Ваш пароль должен быть не длиннее 32 символов.';
$lang['Too_many_registers'] = 'Вы сделали слишком много попыток зарегистрироваться. Пожалуйста, повторите попытку позже.';
$lang['Username_taken'] = 'Извините, пользователь с таким именем уже существует.';
$lang['Username_invalid'] = 'Извините, но это имя содержит неподходящие символы (например \').';
$lang['Username_disallowed'] = 'Извините, но это имя было запрещено к использованию.';
$lang['Email_taken'] = 'Извините, этот адрес e-mail уже занят другим пользователем.';
$lang['Email_banned'] = 'Тзвините, этот адрес e-mail находится в черном списке.';
$lang['Email_invalid'] = 'Извините, этот адрес e-mail неправилен.';
$lang['Signature_too_long'] = 'Слишком длинная подпись.';
$lang['Fields_empty'] = 'Вы должны заполнить обязательные поля.';
$lang['Avatar_filetype'] = 'Файл аватара должен быть .jpg, .gif или .png';
$lang['Avatar_filesize'] = 'Объем файла аватара должен быть не более %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Аватар должен быть не больше %d пикселов в ширину и %d пикселов в высоту';

$lang['Welcome_subject'] = 'Добро пожаловать на форумы %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Новый пользователь';
$lang['Account_activated_subject'] = 'Учетная запись активизирована';

$lang['Account_added'] = 'Спасибо за регистрацию, учетная запись была создана. Вы можете войти в систему, используя ваше имя и пароль.';
$lang['Account_inactive'] = 'Учетная запись была создана. На этом форуме требуется активизация учетной записи, ключ для активизации был выслан на введённый вами адрес. Проверьте вашу почту для более подробной информации.';
$lang['Account_inactive_admin'] = 'Учётная запись была создана. На этом форуме требуется активизация новой учётной записи администраторами. Им был отправлен e-mail, и, как только они активизируют вашу учётную запись, вы получите уведомление.';
$lang['Account_active'] = 'Ваша учетная запись была активизирована. Спасибо за регистрацию.';
$lang['Account_active_admin'] = 'Ваша учетная запись была активизирована.';
$lang['Reactivate'] = 'Вновь активизировать учетную запись.';
$lang['Already_activated'] = 'Вы уже активизировали свою учетную запись.';
$lang['COPPA'] = 'Ваша учётная запись была создана, но теперь она должна быть одобрена, более подробная информация была выслана вам по e-mail.';

$lang['Registration'] = 'Условия регистрации';
$lang['Reg_agreement'] = 'Хотя администраторы и модераторы этого форума стараются удалять или редактировать неприемлемые сообщения как можно быстрее, все сообщения просмотреть невозможно. Таким образом вы признаёте,  что сообщения на этих форумах отражают точки зрения их авторов, а не администрации форумов (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.<br /><br /> Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, могущих нарушить соответствующие законы. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов (при этом ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы форума имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, администрация форумов не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.<br /><br /> Эти форумы используют cookies для хранения информации на вашем компьютере. Эти cookie не содержат никакой информации из введённой вами и служат лишь для улучшения качества работы форумов. Ваш e-mail адрес используется лишь для подтверждения вашей регистрации и пароля (и для высылки нового пароля если вы забудете текущий).<br /><br />Нажатием на кнопку регистрации вы подтверждаете своё согласие с этими условиями';

$lang['Agree_under_13'] = 'Я согласен с этими условиями и мне <b>меньше</b> 13 лет';
$lang['Agree_over_13'] = 'Я согласен с этими условиями и мне 13 лет или <b>больше</b>';
$lang['Agree_not'] = 'Я не согласен с этими условиями';

$lang['Wrong_activation'] = 'Введённый вами ключ активизации не совпадает с хранящимся в базе.';
$lang['Send_password'] = 'Прислать новый пароль';
$lang['Password_updated'] = 'Новый пароль был создан, проверьте почтовый ящик, чтобы узнать как его активизировать.';
$lang['No_email_match'] = 'Введенный вами адрес e-mail не совпадает с записанным на этого пользователя.';
$lang['New_password_activation'] = 'Активизация нового пароля';
$lang['Password_activated'] = 'Ваша учетная запись была вновь активизирована. Для входа в систему используйте пароль из присланного вам письма.';

$lang['Send_email_msg'] = 'Отправить e-mail';
$lang['No_user_specified'] = 'Пользователь не был выбран';
$lang['User_prevent_email'] = 'Пользователь не желает получать e-mail. Попробуйте послать ему/ей личное сообщение.';
$lang['User_not_exist'] = 'Пользователя не существует';
$lang['CC_email'] = 'Отправить копию сообщения самому себе';
$lang['Email_message_desc'] = 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode. В качестве обратного адреса будет показываться ваш адрес e-mail.';
$lang['Flood_email_limit'] = 'Вы не можете отправить ещё один e-mail сразу после предыдущего, попробуйте сделать это попозже.';
$lang['Recipient'] = 'Получатель';
$lang['Email_sent'] = 'Сообщение было отправлено.';
$lang['Send_email'] = 'Отправить e-mail';
$lang['Empty_subject_email'] = 'Вы должны указать тему сообщения.';
$lang['Empty_message_email'] = 'Вы должны указать текст сообщения для отправки.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Введенный вами код подтверждения был неправильным';
$lang['Too_many_registers'] = 'Вы превысили количество попыток регистрации за один сеанс. Пожалуйста, повторите попытку позже.';
$lang['Confirm_code_impaired'] = 'Если вы по каким-либо причинам не можете прочитать этот код, свяжитесь с %sАдминистратором%s для получения помощи.';
$lang['Confirm_code'] = 'Код подтверждения';
$lang['Confirm_code_explain'] = 'Введите код точно так же, как вы его видите на экране. Не перепутайте регистр.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Упорядочить по';
$lang['Sort'] = 'Упорядочить';
$lang['Sort_Top_Ten'] = 'десять самых активных участников';
$lang['Sort_Joined'] = 'дате регистрации';
$lang['Sort_Username'] = 'имени пользователя';
$lang['Sort_Location'] = 'местонахождению';
$lang['Sort_Posts'] = 'количеству сообщений';
$lang['Sort_Email'] = 'адресу E-mail';
$lang['Sort_Website'] = 'адресу сайта';
$lang['Sort_Ascending'] = 'по возрастанию';
$lang['Sort_Descending'] = 'по убыванию';
$lang['Order'] = ''; // не нужно, в английском используется в контексте 'Order ascending'


//
// Group control panel
//

$lang['Group_Control_Panel'] = 'Панель управления группами';
$lang['Group_member_details'] = 'Информация о членстве в группах';
$lang['Group_member_join'] = 'Вступить в группу';

$lang['Group_Information'] = 'Информация о группе';
$lang['Group_name'] = 'Название группы';
$lang['Group_description'] = 'Описание группы';
$lang['Group_membership'] = 'Членство в группе';
$lang['Group_Members'] = 'Члены в группе';
$lang['Group_Moderator'] = 'Модератор группы';
$lang['Pending_members'] = 'Кандидаты в члены группы';

$lang['Group_type'] = 'Тип группы';
$lang['Group_open'] = 'Группа с открытым членством';
$lang['Group_closed'] = 'Группа с закрытым членством';
$lang['Group_hidden'] = 'Скрытая группа';

$lang['Current_memberships'] = 'Являетесь членом групп';
$lang['Non_member_groups'] = 'Не являетесь членом групп';
$lang['Memberships_pending'] = 'Кандидат в члены групп';

$lang['No_groups_exist'] = 'Нет ни одной группы';
$lang['Group_not_exist'] = 'Такой группы не существует';

$lang['Join_group'] = 'Вступить в группу';
$lang['No_group_members'] = 'В этой группе нет ни одного члена';
$lang['Group_hidden_members'] = 'Эта группа скрыта, вы не можете просмотреть её состав';
$lang['No_pending_group_members'] = 'В этой группе нет кандидатов в члены';
$lang['Group_joined'] = 'Вы попросили о вступлении в группу.<br />Когда вашу просьбу одобрит модератор группы, вам будет прислано уведомление.';
$lang['Group_request'] = 'Была подана просьба о вступлении в группу.';
$lang['Group_approved'] = 'Ваша просьба была удовлетворена.';
$lang['Group_added'] = 'Вы были включены в группу.';
$lang['Already_member_group'] = 'Вы уже являетесь членом этой группы';
$lang['User_is_member_group'] = 'Пользователь уже является членом этой группы';
$lang['Group_type_updated'] = 'Тип группы успешно изменен.';

$lang['Could_not_add_user'] = 'Выбранного пользователя не существует.';
$lang['Could_not_anon_user'] = 'Вы не можете сделать анонимного пользователя членом группы.';

$lang['Confirm_unsub'] = 'Вы уверены, что хотите выйти из этой группы?';
$lang['Confirm_unsub_pending'] = 'Вы уверены, что хотите отказаться от участия в этой группе? Ваша просьба о вступлении не была ни удовлетворена, ни отклонена!';

$lang['Unsub_success'] = 'Вы успешно покинули эту группу.';

$lang['Approve_selected'] = 'Одобрить выделенное';
$lang['Deny_selected'] = 'Отклонить выделенное';
$lang['Not_logged_in'] = 'Вы должны войти в систему, прежде чем вступать в группу.';
$lang['Remove_selected'] = 'Удалить выделенное';
$lang['Add_member'] = 'Добавить члена группы';
$lang['Not_group_moderator'] = 'Вы не являетесь модератором группы и не можете выполнить данное действие.';

$lang['Login_to_join'] = 'Войдите в систему, чтобы менять свое членство в группах';
$lang['This_open_group'] = 'Это группа с открытым членством, вы можете подать просьбу о вступлении';
$lang['This_closed_group'] = 'Это группа с закрытым членством, новые пользователи не принимаются';
$lang['This_hidden_group'] = 'Это скрытая группа, автоматическое добавление пользователей не разрешается';
$lang['Member_this_group'] = 'Вы член этой группы';
$lang['Pending_this_group'] = 'Вы кандидат в члены этой группы';
$lang['Are_group_moderator'] = 'Вы модератор этой группы';
$lang['None'] = 'Нет';

$lang['Subscribe'] = 'Подписаться';
$lang['Unsubscribe'] = 'Отписаться';
$lang['View_Information'] = 'Просмотреть информацию';


//
// Search
//
$lang['Search_query'] = 'Запрос';
$lang['Search_options'] = 'Параметры запроса';

$lang['Search_keywords'] = 'Ключевые слова';
$lang['Search_keywords_explain'] = 'Вы можете использовать <u>AND</u> чтобы определить слова, которые должны быть в результатах, <u>OR</u> для слов, которые могут быть в результатах, и <u>NOT</u> для слов, которых в результатах быть не должно. Используйте * в качестве шаблона для частичного совпадения.';
$lang['Search_author'] = 'Поиск по автору';
$lang['Search_author_explain'] = 'Используйте * в качестве шаблона';

$lang['Search_for_any'] = 'Искать любое слово/поиск с языком запросов';
$lang['Search_for_all'] = 'Искать все слова';
$lang['Search_title_msg'] = 'Искать в названиях тем и текстах сообщений';
$lang['Search_msg_only'] = 'Искать только в текстах сообщений';

$lang['Return_first'] = 'Показывать первые'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'символов сообщений';

$lang['Search_previous'] = 'Время размещения'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Упорядочить по';
$lang['Sort_Time'] = 'времени размещения';
$lang['Sort_Post_Subject'] = 'заголовку сообщения';
$lang['Sort_Topic_Title'] = 'теме';
$lang['Sort_Author'] = 'автору';
$lang['Sort_Forum'] = 'форуму';

$lang['Display_results'] = 'Показывать результаты как';
$lang['All_available'] = 'Все имеющиеся';
$lang['No_searchable_forums'] = 'У вас нет доступа к поиску ни в одном из форумов на сайте.';

$lang['No_search_match'] = 'Подходящих тем или сообщений не найдено';
$lang['Found_search_match'] = 'Результатов поиска: %d'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Результатов поиска: %d'; // eg. Search found 24 matches

$lang['Close_window'] = 'Закрыть окно';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Извините, только %s могут размещать обьявления на этом форуме.';
$lang['Sorry_auth_sticky'] = 'Извините, только %s могут размещать прилепленные темы на этом форуме.';
$lang['Sorry_auth_read'] = 'Извините, только %s могут читать сообщения на этом форуме.';
$lang['Sorry_auth_post'] = 'Извините, только %s могут начинать темы на этом форуме.';
$lang['Sorry_auth_reply'] = 'Извините, только %s могут отвечать на сообщения на этом форуме.';
$lang['Sorry_auth_edit'] = 'Извините, только %s могут редактировать сообщения на этом форуме.';
$lang['Sorry_auth_delete'] = 'Извините, только %s могут удалять сообщения на этом форуме.';
$lang['Sorry_auth_vote'] = 'Извините, только %s могут голосовать в опросах этого форума.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>гости</b>';
$lang['Auth_Registered_Users'] = '<b>зарегистрированные пользователи</b>';
$lang['Auth_Users_granted_access'] = '<b>пользователи со специальными правами доступа</b>';
$lang['Auth_Moderators'] = '<b>модераторы</b>';
$lang['Auth_Administrators'] = '<b>администраторы</b>';

$lang['Not_Moderator'] = 'Вы не являетесь модератором этого форума.';
$lang['Not_Authorised'] = 'Нет доступа';

$lang['You_been_banned'] = 'Вам был закрыт доступ к форуму.<br />Обратитесь к вэбмастеру или администратору форумов за дополнительной информацией.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Сейчас на форуме зарегистрированных пользователей: 0 и '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Сейчас на форуме зарегистрированных пользователей:  %d и '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Сейчас на форуме зарегистрированных пользователей: %d и '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'Скрытых пользователей: 0'; // 6 Hidden users online
$lang['Hidden_users_online'] = 'Скрытых пользователей: %d'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'Скрытых пользователей: %d'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Сейчас на форуме гостей: %d'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Сейчас на форуме гостей: 0'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Сейчас на форуме гостей: %d'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Этот форум сейчас никто не просматривает';

$lang['Online_explain'] = 'Эти данные основаны на активности пользователей за последние пять минут';

$lang['Forum_Location'] = 'Место на форуме';
$lang['Last_updated'] = 'Последнее изменение';

$lang['Forum_index'] = 'Список форумов';
$lang['Logging_on'] = 'Вход в систему';
$lang['Posting_message'] = 'Размещение сообщения';
$lang['Searching_forums'] = 'Поиск по форуму';
$lang['Viewing_profile'] = 'Просмотр профиля';
$lang['Viewing_online'] = 'Просмотр &laquo;Кто сейчас на форуме&raquo;';
$lang['Viewing_member_list'] = 'Просмотр списка пользователей';
$lang['Viewing_priv_msgs'] = 'Просмотр личных сообщений';
$lang['Viewing_FAQ'] = 'Просмотр FAQ';
$lang['Viewing_RSS'] = 'Просмотр RSS';         // RSS Feed Mod 

//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Панель модерации';
$lang['Mod_CP_explain'] = 'Здесь вы можете проводить массовую модерацию этого форума. Вы можете закрывать, открывать, перемещать или удалять любое количество тем.';

$lang['Select'] = 'Выбрать';
$lang['Delete'] = 'Удалить';
$lang['Move'] = 'Переместить';
$lang['Lock'] = 'Закрыть';
$lang['Unlock'] = 'Открыть';

$lang['Topics_Removed'] = 'Выбранные темы были успешно удалены из базы данных.';
$lang['Topics_Locked'] = 'Выбранные темы были закрыты.';
$lang['Topics_Moved'] = 'Выбранные темы были перемещены.';
$lang['Topics_Unlocked'] = 'Выбранные темы были открыты.';
$lang['No_Topics_Moved'] = 'Не было перенесено ни одной темы.';

$lang['Confirm_delete_topic'] = 'Вы действительно хотите удалить выбранные темы?';
$lang['Confirm_lock_topic'] = 'Вы действительно хотите закрыть выбранные темы?';
$lang['Confirm_unlock_topic'] = 'Вы действительно хотите открыть выбранные темы?';
$lang['Confirm_move_topic'] = 'Вы действительно хотите переместить выбранные темы?';

$lang['Move_to_forum'] = 'Переместить в форум';
$lang['Leave_shadow_topic'] = 'Оставить ссылку в старом форуме.';

$lang['Split_Topic'] = 'Разделение темы';
$lang['Split_Topic_explain'] = 'С использованием этой формы вы можете разделить тему на две либо выбирая сообщения по одному, либо разбив по выбранному сообщению';
$lang['Split_title'] = 'Заголовок новой темы';
$lang['Split_forum'] = 'Форум для новой темы';
$lang['Split_posts'] = 'Отделить выбранные сообщения';
$lang['Split_after'] = 'Отделить все сообщения после выбранного';
$lang['Topic_split'] = 'Выбранная тема была успешно отделена';

$lang['Too_many_error'] = 'Вы выбрали слишком много сообщений. Вы можете выбрать только одно сообщение, чтобы отделить все сообщения после него.';

$lang['None_selected'] = 'Вы не выбрали ни одной темы для совершения этой операции. Вернитесь назад и выберите.';
$lang['New_forum'] = 'Новый форум';

$lang['This_posts_IP'] = 'IP адрес для этого сообщения';
$lang['Other_IP_this_user'] = 'Другие IP адреса с которых писал этот пользователь';
$lang['Users_this_IP'] = 'Пользователи, писавшие с этого IP';
$lang['IP_info'] = 'Информация об IP адресе';
$lang['Lookup_IP'] = 'Посмотреть хост для IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Часовой пояс: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12';
$lang['-11'] = 'GMT - 11';
$lang['-10'] = 'GMT - 10';
$lang['-9'] = 'GMT - 9';
$lang['-8'] = 'GMT - 8';
$lang['-7'] = 'GMT - 7';
$lang['-6'] = 'GMT - 6';
$lang['-5'] = 'GMT - 5';
$lang['-4'] = 'GMT - 4';
$lang['-3.5'] = 'GMT - 3:30';
$lang['-3'] = 'GMT - 3';
$lang['-2'] = 'GMT - 2';
$lang['-1'] = 'GMT - 1';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1';
$lang['2'] = 'GMT + 2';
$lang['3'] = 'GMT + 3';
$lang['3.5'] = 'GMT + 3:30';
$lang['4'] = 'GMT + 4';
$lang['4.5'] = 'GMT + 4:30';
$lang['5'] = 'GMT + 5';
$lang['5.5'] = 'GMT + 5:30';
$lang['6'] = 'GMT + 6';
$lang['6.5'] = 'GMT + 6:30';
$lang['7'] = 'GMT + 7';
$lang['8'] = 'GMT + 8';
$lang['9'] = 'GMT + 9';
$lang['9.5'] = 'GMT + 9:30';
$lang['10'] = 'GMT + 10';
$lang['11'] = 'GMT + 11';
$lang['12'] = 'GMT + 12';
$lang['13'] = 'GMT + 13';

// Это для выпадающего меню
$lang['tz']['-12'] = '(GMT -12)';
$lang['tz']['-11'] = '(GMT -11)';
$lang['tz']['-10'] = '(GMT -10)';
$lang['tz']['-9'] = '(GMT -9)';
$lang['tz']['-8'] = '(GMT -8)';
$lang['tz']['-7'] = '(GMT -7)';
$lang['tz']['-6'] = '(GMT -6)';
$lang['tz']['-5'] = '(GMT -5)';
$lang['tz']['-4'] = '(GMT -4)';
$lang['tz']['-3.5'] = '(GMT -3:30)';
$lang['tz']['-3'] = '(GMT -3)';
$lang['tz']['-2'] = '(GMT -2)';
$lang['tz']['-1'] = '(GMT -1)';
$lang['tz']['0'] = '(GMT (время по Гринвичу))';
$lang['tz']['1'] = '(GMT +1)';
$lang['tz']['2'] = '(GMT +2 (киевское время))';
$lang['tz']['3'] = '(GMT +3 (московское время))';
$lang['tz']['3.5'] = '(GMT +3:30)';
$lang['tz']['4'] = '(GMT +4 (летнее московское время))';
$lang['tz']['4.5'] = '(GMT +4:30)';
$lang['tz']['5'] = '(GMT +5)';
$lang['tz']['5.5'] = '(GMT +5:30)';
$lang['tz']['5.75'] = '(GMT +5:45)';
$lang['tz']['6'] = '(GMT +6)';
$lang['tz']['6.5'] = '(GMT +6:30)';
$lang['tz']['7'] = '(GMT +7)';
$lang['tz']['8'] = '(GMT +8)';
$lang['tz']['9'] = '(GMT +9)';
$lang['tz']['9.5'] = '(GMT +9:30)';
$lang['tz']['10'] = '(GMT +10)';
$lang['tz']['11'] = '(GMT +11)';
$lang['tz']['12'] = '(GMT +12)';
$lang['tz']['13'] = '(GMT +13)';

$lang['datetime']['Sunday'] = 'Воскресенье';
$lang['datetime']['Monday'] = 'Понедельник';
$lang['datetime']['Tuesday'] = 'Вторник';
$lang['datetime']['Wednesday'] = 'Среда';
$lang['datetime']['Thursday'] = 'Четверг';
$lang['datetime']['Friday'] = 'Пятница';
$lang['datetime']['Saturday'] = 'Суббота';
$lang['datetime']['Sun'] = 'Вс';
$lang['datetime']['Mon'] = 'Пн';
$lang['datetime']['Tue'] = 'Вт';
$lang['datetime']['Wed'] = 'Ср';
$lang['datetime']['Thu'] = 'Чт';
$lang['datetime']['Fri'] = 'Пт';
$lang['datetime']['Sat'] = 'Сб';
$lang['datetime']['January'] = 'Январь';
$lang['datetime']['February'] = 'Февраль';
$lang['datetime']['March'] = 'Март';
$lang['datetime']['April'] = 'Апрель';
$lang['datetime']['May'] = 'Май';
$lang['datetime']['June'] = 'Июнь';
$lang['datetime']['July'] = 'Июль';
$lang['datetime']['August'] = 'Август';
$lang['datetime']['September'] = 'Сентябрь';
$lang['datetime']['October'] = 'Октябрь';
$lang['datetime']['November'] = 'Ноябрь';
$lang['datetime']['December'] = 'Декабрь';
$lang['datetime']['Jan'] = 'Янв';
$lang['datetime']['Feb'] = 'Фев';
$lang['datetime']['Mar'] = 'Мар';
$lang['datetime']['Apr'] = 'Апр';
$lang['datetime']['May'] = 'Май';
$lang['datetime']['Jun'] = 'Июн';
$lang['datetime']['Jul'] = 'Июл';
$lang['datetime']['Aug'] = 'Авг';
$lang['datetime']['Sep'] = 'Сен';
$lang['datetime']['Oct'] = 'Окт';
$lang['datetime']['Nov'] = 'Ноя';
$lang['datetime']['Dec'] = 'Дек';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Информация';
$lang['Critical_Information'] = 'Критическая информация';

$lang['General_Error'] = 'Общая ошибка';
$lang['Critical_Error'] = 'Критическая ошибка';
$lang['An_error_occured'] = 'Произошла ошибка';
$lang['A_critical_error'] = 'Произошла критическая ошибка';

//
// Custom Title MOD
//
$lang['Custom_title'] = 'Титул';
$lang['Custom_title_toolong'] = 'Введенный титул сильно большой по длине.';
$lang['Custom_title_explain'] = 'Использовано %s. Максимально допустимая длина - %s символов.';
$lang['Custom_title_independent_explain'] = 'добавить титул в Ваши сообщения';
$lang['Custom_title_replace_rank_explain'] = 'заместит Ваш ранг. Для возврата ранга, оставьте поле пустым.';
$lang['Custom_title_replace_both_explain'] = 'заместит Ваш ранг и изображение ранга. Для возврата ранга, оставьте поле пустым.';

$lang['proxy_detected'] = 'Обнаружен открытый HTTP-Proxy сервер %s по порту %d.';
$lang['proxy_blocked'] = 'Регистрация заблокирована.';
$lang['proxy_t0'] = 'Открытый';
$lang['proxy_t1'] = 'Анонимный';
$lang['proxy_t2'] = 'Высокая анонимность';

// Additional Stuff for phpBB2 Plus only ! Translators should get original Language Files for phpBB 2.0.8
// for the language they want to translate from http://www.phpbb.com/downloads.php. Then they need to translate 
// the following stuff only and use the rest from the original language files !

//-- mod : mods settings ---------------------------------------------------------------------------
//-- add
$lang['Click_return_preferences'] = 'Нажмите %sздесь%s для возврата к параметрам';
//-- fin mod : mods settings -----------------------------------------------------------------------

// Start add - Birthday MOD
$lang['Birthday'] = 'День рождения';
$lang['No_birthday_specify'] = 'Не указан';
$lang['Age'] = 'Возраст';
$lang['Wrong_birthday_format'] = 'Формат для дня рождения некорректен.';
$lang['Birthday_to_high'] = 'Извините, но этот сайт не принимает пользователей старше %d лет';
$lang['Birthday_require'] = 'Ваша дата рождения необходима на этом сайте';
$lang['Birthday_to_low'] = 'Извините, но этот сайт не принимает пользователей моложе %d лет';
$lang['Submit_date_format'] = 'd-m-Y'; //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
$lang['Birthday_greeting_today'] = 'Мы хотим вас поздравить с %s - тилетием.<br /><br /> Администрация';//%s is substituted with the users age
$lang['Birthday_greeting_prev'] = 'Мы хотим заранее поздравить с наступающим %s - тилетием %s.<br /><br /> Администрация';//%s is substituted with the users age, and birthday
$lang['Greeting_Messaging'] = 'Поздравляем';
$lang['Birthday_today'] = 'Пользователи, у которых сегодня день рождения:';
$lang['Birthday_week'] = 'Пользователи, у которых день рождения в течении %d дней:';
$lang['Nobirthday_week'] = 'Нет пользователей с днем рождения в течении %d дней'; // %d is substitude with the number of days
$lang['Nobirthday_today'] = 'Нет пользователей с днем рождения сегодня';
$lang['Year'] = 'Год';
$lang['Month'] = 'Месяц';
$lang['Day'] = 'День';

// NOTE: Please do not translate the folowing 4 lines !
// They are automatically translated into your language
$lang['day_short'] = array ($lang['datetime']['Sun'],$lang['datetime']['Mon'],$lang['datetime']['Tue'],$lang['datetime']['Wed'],$lang['datetime']['Thu'],$lang['datetime']['Fri'],$lang['datetime']['Sat']);
$lang['day_long'] = array ($lang['datetime']['Sunday'],$lang['datetime']['Monday'],$lang['datetime']['Tuesday'],$lang['datetime']['Wednesday'],$lang['datetime']['Thursday'],$lang['datetime']['Friday'],$lang['datetime']['Saturday']);
$lang['month_short'] = array ($lang['datetime']['Jan'],$lang['datetime']['Feb'],$lang['datetime']['Mar'],$lang['datetime']['Apr'],$lang['datetime']['May'],$lang['datetime']['Jun'],$lang['datetime']['Jul'],$lang['datetime']['Aug'],$lang['datetime']['Sep'],$lang['datetime']['Oct'],$lang['datetime']['Nov'],$lang['datetime']['Dec']);
$lang['month_long'] = array ($lang['datetime']['January'],$lang['datetime']['February'],$lang['datetime']['March'],$lang['datetime']['April'],$lang['datetime']['May'],$lang['datetime']['June'],$lang['datetime']['July'],$lang['datetime']['August'],$lang['datetime']['September'],$lang['datetime']['October'],$lang['datetime']['November'],$lang['datetime']['December']);
// End add - Birthday MOD
// zodiacs used for birthday mod
$lang['Zodiac'] = 'Зодиак';
$lang['Capricorn'] = 'Козерог';
$lang['Aquarius'] = 'Водолей';
$lang['Pisces'] = 'Рыбы';
$lang['Aries'] = 'Овен';
$lang['Taurus'] = 'Телец';
$lang['Gemini'] = 'Близнецы';
$lang['Cancer'] = 'Рак';
$lang['Leo'] = 'Лев';
$lang['Virgo'] = 'Дева';
$lang['Libra'] = 'Весы';
$lang['Scorpio'] = 'Скорпион';
$lang['Sagittarius'] = 'Стрелец';
// chinese zodiacs used for birthday mod
$lang['Chinese_zodiac']= 'Китайский зодиак';
$lang['Unknown'] = 'Неизвестный';
$lang['Rat'] = 'Крыса';
$lang['Buffalo'] = 'Буйвол';
$lang['Tiger'] = 'Тигр';
$lang['Cat'] = 'Кот';
$lang['Dragon'] = 'Дракон';
$lang['Snake'] = 'Змея';
$lang['Horse'] = 'Лошадь';
$lang['Goat'] = 'Козел';
$lang['Monkey'] = 'Обезьяна';
$lang['Cock'] = 'Петух';
$lang['Dog'] = 'Собака';
$lang['Pig'] = 'Свинья';

// Start add - Gender MOD
$lang['Gender'] = 'Пол';//used in users profile to display witch gender he/she is
$lang['Male'] = 'Мужской';
$lang['Female']='Женский';
$lang['No_gender_specify'] = 'Не указан';
// End add - Gender MOD

// Start add - Last visit MOD
$lang['Last_logon'] = 'Последнее посещение';
$lang['Hidde_last_logon'] = 'Скрыто';
$lang['Never_last_logon'] = 'Никогда';
$lang['Users_today_zero_total'] = 'Всего <b>0</b> пользователей посетило форумы сегодня :: ';
$lang['Users_today_total'] = 'Всего <b>%d</b> пользователь посетил форумы сегодня :: ';
$lang['User_today_total'] = 'Всего <b>%d</b> пользователей посетило форумы сегодня :: ';
$lang['Users_lasthour_explain'] = ', %d из них посетили нас за последний час.';
$lang['Users_lasthour_none_explain'] = ''; //showen of none have visited the last hour, fill if you like

$lang['Years'] = 'лет';
$lang['Year'] = 'год';
$lang['Weeks'] = 'недель';
$lang['Week'] = 'неделя';
$lang['Day'] = 'день';
$lang['Total_online_time'] = 'Всего онлайн';
$lang['Last_online_time'] = 'Последний раз онлайн';
$lang['Number_of_visit'] = 'Число посещений';
$lang['Number_of_pages'] = 'Число переходов';
// End add - Last visit MOD

// FLAGHACK-start
$lang['Country_Flag'] = 'Флаг страны';
$lang['Select_Country'] = 'ВЫБЕРИТЕ ФЛАГ' ;
// FLAGHACK-end

// Anti Robotic Registration
$lang['Wrong_reg_key'] = 'Ошибка антиавтоматической проверки';
$lang['Validation'] = 'Проверка';
$lang['Validation_explain'] = 'Для проверки введите символы, которые вы видите';

//
// Smartor's ezPortal
//
$lang['Home'] = 'Портал';
$lang['Board_navigation'] = 'Навигация';
$lang['Statistics'] = 'Статистика';
$lang['total_topics'] = " из <b>%s</b> тем"; // added in v2.1.6
$lang['Comments'] = 'комментарии';
$lang['Read_Full'] = 'Читать полностью';
$lang['View_comments'] = 'Показать комментарии';
$lang['Post_your_comment'] = 'Разместить комментарии';
$lang['Welcome'] = 'Добро пожаловать';
$lang['Register_new_account'] = 'Вы еще не зарегистрированы?<br />Вы можете %sзарегистрироваться%s бесплатно';
$lang['Remember_me'] = 'Запомнить меня';
$lang['View_complete_list'] = 'Показать полный список';
$lang['Poll'] = 'Опрос';
$lang['Login_to_vote'] = 'Вы должны авторизоваться для голосования';
$lang['Vote'] = 'Голосовать';
$lang['No_poll'] = 'Нет опроса в данный момент';

$lang['Download'] = 'Загрузка';
$lang['Viewing_Download'] = 'Просмотр';
$lang['Top_Downloads'] = 'Лучшие 10';
$lang['Newest_Downloads'] = 'Последние';
$lang['L_Word_on'] = 'в';
$lang['L_Word_by'] = '';
$lang['News_Reply'] = 'Ответить на эту новость';
$lang['News_Print'] = 'Распечатать эту тему';
$lang['News_Email'] = 'Отправить по E-Mail';
$lang['Save_Topic'] = 'Сохранить тему как файл';
$lang['News_Categories'] = 'Категории новостей';
$lang['News_Archieves'] = 'Архив новостей';
$lang['News_Summary'] = 'Эта новость имеет';
$lang['News_Views'] = 'просмотров';
$lang['News_And'] = 'и';
$lang['News_Comments'] = 'комментариев';
$lang['Credits'] = 'Моды и Кто сделал';
$lang['News_Cats'] = 'Категории новостей';
$lang['No_News_Cats'] = 'Извините, категории новостей недоступны!';
$lang['Recent_files'] = 'Последние файлы';
$lang['Forum_Search'] = 'Поиск по форуму';
$lang['About_us'] = 'О нас';
$lang['Portal_Navigate'] = 'Навигация';
$lang['Portal_Tools'] = 'Сервис';
$lang['Site_links'] = 'Ссылки';
$lang['Site_Contact'] = 'Контакты';
$lang['Last_Seen'] = 'Последний просмотр';
$lang['No_News'] = 'Извините, нет доступных новостей';
$lang['Quick_Search'] = 'Быстрый поиск';
$lang['Advanced_Search'] = 'Расширенный поиск';

//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = 'Альбом';
$lang['Personal_Gallery_Of_User'] = 'Личная галерея %s';
$lang['Newest_pic'] = 'Последние фото';
//--- Album Category Hierarchy : begin
//--- Version : 1.2.0
$lang['Personal_Gallery_Of_User_Profile'] = 'Личная галерея %s (%d изображений)';
$lang['Show_All_Pic_View_Mode_Profile'] = 'Показать все изображения в личной галерее %s (без категорий)';
//--- Album Category Hierarchy : end

//
// Start add  - Photo Album Block
$lang['Newest_pics'] = 'Новые фото';
// End add  - Photo Album Block

// Start Quick Reply Mod
$lang['Quick_Reply'] = 'Быстрый ответ';
$lang['Quick_quote'] = 'Цитата последнего сообщения';
$lang['Quick_add_smilies'] = 'Смайлики';
$lang['QuoteSelelected'] = 'Цитата выбранного';
$lang['QuoteSelelectedEmpty'] = 'Выберите текст на странице и попробуйте еще';
$lang['Quick_Reply_smilies'] = 'все';
// End Quick Reply Mod 

$lang['Recent_topics'] = 'Последне темы'; // Recent Topics
$lang['No_recent_topics'] = '<br />Нет темы в данный момент<br /><br />'; // No recent Topics
$lang['No_recent_files'] = '<br />Нет файлов в данный момент<br /><br />'; // No recent Files
$lang['No_articles'] = '<br />Нет новостей в данный момент<br /><br />'; // No News

//
// Online/Offline
//
$lang['Offline'] = 'Оффлайн';
$lang['Online'] = 'Онлайн';
$lang['Hidden'] = 'Скрытый';
$lang['On_off_status'] = 'Состояние';

//
// Staff Site
//
$lang['Staff'] = 'Администрация';
$lang['Staff_about'] = 'Информация о %s'; // %s = username
$lang['Staff_level'] = array('Администратор', 'Модератор');
$lang['Staff_forums'] = 'Форумы';
$lang['Staff_messenger'] = 'Messenger';
$lang['Staff_user_topic_day_stats'] = '%.2f тем в день'; // %.2f = topics
$lang['Staff_online'] = '<font color=#0000FF>онлайн</font>';
$lang['Staff_year'] = 'год';
$lang['Staff_years'] = 'лет';
$lang['Staff_week'] = 'неделя';
$lang['Staff_weeks'] = 'недель';
$lang['Staff_day'] = 'день';
$lang['Staff_days'] = 'дней';
$lang['Staff_hour'] = 'час';
$lang['Staff_hours'] = 'часов';
$lang['Staff_minute'] = 'минута';
$lang['Staff_minutes'] = 'минут';
$lang['Staff_since'] = '(начиная с %s)'; // %s = period
$lang['Staff_ago'] = '(%s назад)'; // %s = period


//
// Bookmark Mod
//
$lang['Bookmarks'] = 'Закладки';
$lang['Set_Bookmark'] = 'Поставить закладку для данной темы';
$lang['Remove_Bookmark'] = 'Удалить закладку для данной темы';
$lang['No_Bookmarks'] = 'Вы не выставили закладку';
$lang['Always_set_bm'] = 'Выставить закладку автоматически при размещении сообщения';
$lang['Found_bookmark'] = 'Вы выставили %d закладку.'; // eg. Search found 1 match
$lang['Found_bookmarks'] = 'Вы выставили %d закладки.'; // eg. Search found 24 matches
$lang['More_bookmarks'] = 'Другие закладки...'; // For mozilla navigation bar

// Start add - Fully integrated shoutbox MOD
$lang['Shoutbox'] = 'Чатбокс';
$lang['Shoutbox_date'] = ' d m Y h:i:s';
$lang['Shout_censor'] = 'Крик удален!';
$lang['Shout_refresh'] = 'Обновить';
$lang['Shout_text'] = 'Текст';
$lang['Viewing_Shoutbox']= 'Просмотр чатбокса';
$lang['Censor'] ='Цензор';
// End add - Fully integrated shoutbox MOD

$lang['bbcode_g_help'] = "Свечение: [glow=colour]Текст[/glow] (alt+g)";
$lang['bbcode_d_help'] = "Тень: [shadow=colour]Текст[/shadow] (alt+d)";
$lang['bbcode_e_help'] = "Выравнивание: [align=left|right|center|justify]Текст[/align] (alt+e)";
$lang['bbcode_h_help'] = "Исчезание: [fade]Текст[/fade] (alt+h)";
$lang['bbcode_j_help'] = "Двигающийся текст: [scroll**]Текст[/scroll**] (alt+j)";
$lang['bbcode_k_help'] = "Подсветка: [highlight=color]Текст[/highlight] (alt+k)";
$lang['bbcode_m_help'] = "flash: [flash width= height= loop=]Текст[/flash] (alt+m)";
$lang['bbcode_n_help'] = "Разворот: [flipv]Текст[/flipv] (alt+n)";
$lang['bbcode_r_help'] = "Разворот: [fliph]Текст[/fliph] (alt+r)";
$lang['bbcode_t_help'] = "Потоковые файлы (wma, mp3, mp2...): [stream]http://path_to_file.wma[/stream] (alt+t)";
$lang['bbcode_v_help'] = "Фото слева: [left]Path_to_Picture[/left] (alt+v)";
$lang['bbcode_x_help'] = "Фото справа: [right]Path_to_Picture[/right] (alt+x)";
$lang['PHPCode'] = 'PHP'; // PHP MOD
//
// Limit Image Width MOD
//

$lang['LIW_click_image'] = 'Нажмите на изображение, чтобы увидеть его в полном размере.';
$lang['LIW_click_image_explain'] = 'Нажмите на изображение, чтобы увидеть его в полном размере.';

//
// Limit Image Width MOD
//

$lang['bbcode_y_help'] = 'Подсветка синтаксиса PHP. [php]<php code>[/php] (alt+y)'; // PHP MOD
$lang['bbcode_z_help'] = "Google: [google]Строка для поиска[/google] (alt+z)";
$lang['bbcode_sc_help'] = 'Создатель смайликов: [schild=1]Текст[/schild] Генерирует смайлик';
$lang['bbcode_th_help'] = 'Зачеркнутый: [s]Текст[/s] (alt+th)';
$lang['Smilie_creator'] = 'Создатель смайликов';
$lang['SC_shieldtext'] = 'Текст смайлика';
$lang['SC_fontcolor'] = 'Цвет текста';
$lang['SC_shadowcolor'] = 'Тень цвета';
$lang['SC_shieldshadow'] = 'Тень экрана';
$lang['SC_shieldshadow_on'] = 'Активировать';
$lang['SC_shieldshadow_off'] = 'Деактивировать';
$lang['SC_smiliechooser'] = 'Выбрать смайлик';
$lang['SC_random_smilie'] = 'Любой смайлик';
$lang['SC_default_smilie'] = 'Стандартный смайлик';
$lang['SC_create_smilie'] = 'Создать';
$lang['SC_stop_creating'] = 'Отмена';
$lang['SC_error'] = 'Ваша защита - вы забыли текст...';
$lang['SC_another_shield'] = 'Хотите создать другой смайлик?';
$lang['SC_notext_error'] = 'Вы не можете создавать смайлик без текста';

//
// TELL A FRIEND
$lang['Tell_Friend'] = "Email другу.";
$lang['Tell_Friend_Sender_User'] = "Ваше имя:";
$lang['Tell_Friend_Sender_Email'] = "Ваш Email:";
$lang['Tell_Friend_Reciever_User'] = "Имя друга:";
$lang['Tell_Friend_Reciever_Email'] = "Email друга:";
$lang['Tell_Friend_Msg'] = "Сообщение:";
$lang['Tell_Friend_Title'] = "Рассказать";
$lang['Tell_Friend_Body'] = "Привет,\nЯ прочитал тему >>{TOPIC}<< на {SITENAME} и подумал, что ты можешь заинтересоваться этим. Здесь ссылка: {LINK}\n\nПрочитай! Также зарегистрируйся и ответь, что ты думаешь по этому поводу.";

// Start add - Who viewed a topic MOD
$lang['Topic_view_users'] = 'Список пользователей, просмотревших тему';
$lang['Topic_time'] = 'Последний просмотр';
$lang['Topic_count'] = 'Показать число';
$lang['Topic_view_count'] = 'Число просмотров тем';
// End add - Who viewed a topic MOD

//
// Recent Topics
//
$lang['Recent_topics'] = 'Последние темы';
$lang['Recent_today'] = 'Сегодня';
$lang['Recent_yesterday'] = 'Вчера';
$lang['Recent_last24'] = 'Последние 24 часа';
$lang['Recent_lastweek'] = 'На прошлой неделе';
$lang['Recent_lastXdays'] = 'Последние %s дней';
$lang['Recent_last'] = 'Последние';
$lang['Recent_days'] = 'дней';
$lang['Recent_first'] = 'Запущено в %s';
$lang['Recent_first_poster'] = ' %s';
$lang['Recent_select_mode'] = 'Выберите режим:';
$lang['Recent_showing_posts'] = 'Показаны сообщения:';
$lang['Recent_title_one'] = '<font size=4>%s</font> последняя тема %s'; // %s = topics; %s = sort method
$lang['Recent_title_more'] = '<font size=4>%s</font> последних тем %s'; // %s = topics; %s = sort method
$lang['Recent_title_today'] = ' за сегодня';
$lang['Recent_title_yesterday'] = ' за вчера';
$lang['Recent_title_last24'] = ' за последние 24 часа';
$lang['Recent_title_lastweek'] = ' за последнюю неделю';
$lang['Recent_title_lastXdays'] = ' за последние %s дней'; // %s = days
$lang['Recent_no_topics'] = 'Темы не найдены.';
$lang['Recent_wrong_mode'] = 'Вами выбран неправильный режим.';
$lang['Recent_click_return'] = 'Нажмите %sздесь%s для возврата назад.';

// Bottom of Page Link MOD - Daz - ForumImages.com - START/END Line Below
$lang['Go_to_bottom'] = 'Центр страницы';

// Start add - Yellow card admin MOD
$lang['Give_G_card']='Заново активировать пользователя';
$lang['Give_Y_card']='Выслать предупреждение #%d';
$lang['Give_R_card']='Забанить пользователя сейчас';
$lang['Ban_update_sucessful'] = 'Список банов успешно обновлен';
$lang['Ban_update_green'] = 'Пользователь заново активирован';
$lang['Ban_update_yellow'] = 'Пользователь получил предупреждение, сейчас у него %d предупреждений из максимальных %d';
$lang['Ban_update_red'] = 'Пользователь забанен';
$lang['Ban_reactivate'] = 'Аккаунт заново активирован';
$lang['Ban_warning'] = 'Вы получили предупреждение';
$lang['Ban_blocked'] = 'Ваш аккаунт заблокирован';
$lang['Click_return_viewtopic'] = 'Нажмите %sздесь%s для возврата в тему';
$lang['Rules_ban_can'] = 'Вы <b>можете</b> забанить других пользователей в этом форуме';
$lang['user_no_email'] = 'У пользователя нет email, поэтому сообщение не может быть отправлено. Вы должны отправить ЛС пользователю.';
$lang['user_already_banned'] = 'Выбранный пользователь уже забанен';
$lang['Ban_no_admin'] ='Этот пользователь - администратор, поэтому он не может быть предупрежден или забанен';
$lang['Rules_greencard_can'] = 'Вы <b>можете</b> разбанить пользователей в этом форуме';
$lang['Rules_bluecard_can'] = 'Вы <b>можете</b> отправить отчет модераторам в этом форуме';
$lang['Give_b_card'] = 'Отправить отчет о сообщении модераторам этого форума';
$lang['Clear_b_card'] = 'У сообщения %d синих карт. Нажав на кнопку вы их удалите.';
$lang['No_moderators'] = 'В данном форуме нет модераторов, отчет не может быть отправлен!';
$lang['Post_repported'] = 'Отчет был отправлен %d модераторам';
$lang['Post_repported_1'] = 'Отчет был отправлен модератору';
$lang['Post_repport'] = 'Отчет о сообщении'; //Subject in email notification
$lang['Post_reset'] = 'Синие карты для этого сообщения удалены';
$lang['Search_only_bluecards'] = 'Искать только сообщения с синими картами';
$lang['Send_message'] = 'Нажмите %sздесь%s для отправки сообщения модераторам или <br />';
$lang['Send_PM_user'] = 'Нажмите %sздесь%s для отправки ЛС пользователю или';
$lang['Link_to_post'] = 'Нажмите %sздесь%s для перехода к сообщению  <br/>--------------------------------<br/><br/>';
$lang['Post_a_report'] = 'Отправить отчет';
$lang['Report_stored'] = 'Ваш отчет успешно введен';
$lang['Send_report'] = 'Нажмите %sздесь%s для перехода к оригинальному сообщению';
$lang['Red_card_warning'] = 'Вы собираетесь дать пользователю %s красную карту, это действие забанит пользователя, вы уверены?';
$lang['Yellow_card_warning'] = 'Вы собираетесь дать пользователю %s желтую карту, это действие отправит пользователю предупреждение, вы уверены?';
$lang['Green_card_warning'] = 'Вы собираетесь дать пользователю %s зеленую карту, это действие разбанит пользователя, вы уверены?';
$lang['Blue_card_warning'] = 'Вы собираетесь дать сообщению синюю карту, это действие отправит модераторам уведомление, вы действительно этого хотите?';
$lang['Clear_blue_card_warning'] = 'Вы собираетесь удалить синие карты с этого сообщения, вы уверены?';
$lang['Warnings'] = 'Предупреждений: %d'; //shown beside users post, if any warnings given to the user
$lang['Banned'] = 'Забанено';//shown beside users post, if user are banned

// Start add - Protect user account MOD
$lang['Error_login_tomutch']='Вы указали имя заблокированного пользователя, попробуйте позднее';
$lang['Password_not_complex'] ='Указанный пароль не соответствует правилам, вы должны проверить, что пароль ';
$lang['Password_to_short'] = 'как минимум состоит из %d символов';
$lang['Password_mixed'] = 'содержит числа и буквы';
$lang['Password_not_same'] = 'не совпадает с именем';
$lang['Time_format'] = 'D d. M, Y H:i:s';// how time should be shown in email notification 
$lang['Passwd_have_expired'] = 'Ваш пароль просрочен, вы можете создать новый';
$lang['Passwd_expired'] = 'Ваш пароль просрочен и больше недействителен. Однако вы можете выбрать новый. Если, по какой-либо причине, вы не можете создать его сейчас, не волнуйтесь. Вы можете запросить случайный пароль, используя соответствующую ссылку перед входом.';
$lang['Passwd_soon_expired'] = 'Ваш пароль будет просрочен в течение %d дней. Мы рекомендуем вам сменить его сейчас. Если пароль просрочится, то вы сможете сгенерировать его, нажав на соответствующую ссылку при входе.';
$lang['Send_new_passwd'] = 'Отправить мне новый пароль';
$lang['Passwd_updated'] = 'Спасибо <br />Вапш новый пароль сохранен';
$Lang['Passwd_title'] = 'Пожалуйста, смените ваш пароль';
// End add - Protect user account MOD

$lang['Topic_description'] = 'Описание темы';
$lang['Description'] = 'Описание темы';

// Start add - Topic in Who is online MOD
$lang['Browsing_topic'] = 'Пользователи просматривают тему:';
// End add - Topic in Who is online MOD

//admin user list mail 
$lang['Usersname'] = "Имя пользователя";
$lang['Admin_Users_List_Mail_Title'] = "Список e-mail";
$lang['Admin_Users_List_Mail_Explain'] = "Это список e-mail-адресов пользователей";

// Moved Folder Image Mod
$lang['Moved'] = 'Перемещено';

//signature editor
$lang['sig_description'] = "Редактировать подпись (<b>Предпросмотр включен</b>)";
$lang['sig_edit'] = "Редактировать подпись";
$lang['sig_current'] = "Подпись сейчас";
$lang['sig_none'] = "Подпись недоступна";
$lang['sig_save'] = "Сохранить";
$lang['sig_save_message'] = "Подпись успешно сохранена!";

//Absent User Mod
$lang['On_holidays'] = 'на выходных';
$lang['User_ill'] = 'болею';
$lang['Longer_absenct'] = 'долго не будет';
$lang['User_absence'] = 'Отсутствие';
$lang['User_absence_mode'] = 'Причина отсутствия';
$lang['User_absence_text'] = 'Сообщение отсутствия';
$lang['User_absent'] = '<b>Сообщение отсутствия:</b><br /><br />%s is %s.<br /><br /><i>%s</i><br /><br />Вы не можее отправить сообщения для %s!';
$lang['Absence_notify'] = 'Вы включили отсутствие.<br />Вы хотите отключить его?';
$lang['Absence_deleted'] = 'Вы успешно отключили отсутствие.<br /><br />Добро пожаловать снова!';

// Top 5 Posters in EzPortal Mod
$lang['Top_Posters'] = 'Активные участники';
$lang['Top_Member'] = 'Пользователь';
$lang['Top_Posts'] = 'Сообщений';

// MOD MODCP EXTENSION BEGIN
$lang['Sticky_topic'] = 'Прилеплено';
$lang['Announce_topic'] = 'Объявление';
$lang['Normal_topic'] = 'Сбросить тему';
$lang['Sticky'] = 'Прилеплено';
$lang['Announce'] = 'Объявление';
$lang['Normalise'] = 'Нормально';
$lang['Topics_Stickyd'] = 'Выбранные темы прилеплены';
$lang['Topics_Announced'] = 'Выбранные темы теперь объявления';
$lang['Topics_Normalised'] = 'Выбранные темы нормализованы';
$lang['Check_All'] = 'Выбрать все';
$lang['Uncheck_All'] = 'Отключить все';
// MOD MODCP EXTENSION END
$lang['Search_new2'] = 'Cообщения с последнего посещения';

$lang['Search_for'] = "Искать";
$lang['Submit_search'] = "Отправить";
$lang['That_contains'] = "содержит";

$lang['Name'] = 'Имя';

// Contact Form Mod
// Kontakttext:
$lang['kontakt1'] = '<b>Примечание:</b> Если у вас есть вопросы по использованию форумов, то прочтите <a href="faq.php"><b>FAQ</b></a>. Если вы не найдете ответа в FAQ, то отправьте письмо, используя эту форму.<br><span class="gensmall">Необходимы поля отмечены *.</span>';
$lang['kontakt2'] = 'Имя:*';
$lang['kontakt3'] = 'E-Mail:*';
$lang['kontakt4'] = 'Тема:*';
$lang['kontakt5'] = 'Текст:*';
$lang['kontakt6'] = 'Отправить';
$lang['kontakt7'] = 'Удалить';
$lang['kontakt8'] = 'Ошибка, не удается EMail!';
$lang['kontakt9'] = 'Email отправлен!';
$lang['kontakt_js1'] = 'Вы хотите удалить введенные данные?';
$lang['kontakt_js2'] = 'Введите имя!';
$lang['kontakt_js3'] = 'Введите правильный EMail!';
$lang['kontakt_js4'] = 'Неправильный EMail!';
$lang['kontakt_js5'] = 'Введите тему!';
$lang['kontakt_js6'] = 'Введите текст!';
$lang['Kontakt'] = 'Страница контактов';

// Language Variables for phpBB2 Plus Forum Index Stats
$lang['Newest_user_plus'] = '<b>%s%s%s</b>'; // a href, username, /a
$lang['Live_Statistics'] = 'Статистика';
$lang['Latest_Member'] = 'Последний';
$lang['New_Today'] = 'Новые сегодня';
$lang['New_Yesterday'] = 'Новые вчера';
$lang['Members_Overall'] = 'Всего';
$lang['Online_Now'] = 'Сейчас онлайн';
$lang['Guests_P'] = 'гостей';
$lang['Members_P'] = 'пользователей';
$lang['Box_Stats'] = 'Статистика';
$lang['User_Record'] = 'Рекорд пользователей';
$lang['Birthdays_P'] = 'Дни рождения';
$lang['Online_Members_P'] = 'Онлайн';
$lang['Last_Visit'] = 'Статистика';

// Google Visit Counter Mod
$lang['Google_Visit_counter'] = 'Посещение Google: <b>%d</b>';

//+MOD: Select Expand BBcodes MOD
$lang['Select'] = "Выделить всё"; 
$lang['Expand'] = "Показать полностью"; 
$lang['Contract'] = "Свернуть";
//-MOD: Select Expand BBcodes MOD

$lang['Click_larger'] = 'Щелкните по картинке, чтобы увеличить её';

//BBCode Translations
$lang['B'] ='Ж';// Here the first letter of 'Bold' in your language
$lang['I'] ='К';// Here the first letter of 'Italic' in your language
$lang['U'] ='Ч';// Here the first letter of 'Underlined' in your language
$lang['Text'] ='Текст';
$lang['Font_type'] = 'Тип шрифта';

//Portal Additions
$lang['KB_title'] = 'База знаний';
$lang['Viewing_KB'] = 'Просмотр KB';

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Извините, но регистрация на этом форуме временно нет. Попробуйте позже.';
// END Disable Registration MOD
$lang['Admin_reauthenticate'] = 'Для администрирования форума вы должны заново ввести свой пароль.';
// [begin] Glance mod
$lang['Glance_anno'] = 'Объявления портала';
$lang['Glance_recent'] = 'Последние темы';
// [end] Glance mod

//
// Jabber
//
$lang['JNotify'] = 'Сообщать мне о получении ответа на Jabber ID';
$lang['Send_jabber'] = 'Отправить сообщение ';
$lang['Send_jabber_msg'] = 'Отправить jabber-сообщение';
$lang['JID'] = 'Jabber ID';
$lang['JID_explain'] = 'Введите Ваш JabberID на используемом Форумом jabber-сервере';
$lang['Jabber_server'] = 'Текущий Jabber-server, используемый Форумом';
$lang['Jabber_language'] = 'Язык jabber сообщений';
$lang['JID_not_specified'] = 'Пользователь не указал свой JabberID';
$lang['Jabber_reply'] = 'написал Вам ответ в теме';
$lang['Jabber_reply_link'] = 'Прямая ссылка:';
$lang['Always_jnotify'] = 'Всегда сообщать мне об ответах на JabberID';
$lang['Always_jnotify_explain'] = 'Когда кто-нибудь ответит на тему, в которую вы писали, вам высылается сообщение на JabberID. Это можно также настроить при размещении сообщения.';
$lang['JID_invalid'] = 'Извините, этот JabberID неправилен';
$lang['Jabber_message_desc'] = 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode. В качестве обратного адреса будет показываться ваш адрес JabberID.';
$lang['Sent_jabber_msg'] = 'отправил Вам сообщение';
$lang['Sent_from'] = 'Отправлено с Форумов ';

//+MOD: Search latest 24h 48h 72h
$lang['Search_latest'] = 'Просмотреть последнии за';
$lang['Search_latest_XXh'] = '%d часа';
//-MOD: Search latest 24h 48h 72h

//
// That's all, Folks!
// -------------------------------------------------


// PJIRC MOD
$lang['Chat_Room'] = 'Чат';
$lang['IRC_commands'] = 'Команды IRC-Чата';
$lang['IRC_commands_explain'] = 'Эти комманды будут выполняться перед тем, как вы будете авторизированы в Чате. Вводите команды в столбик. <br />Пример:<br /> /msg Ник ИД Пароль;<br />/beep';
$lang['IRC_disabled'] = '<b>Чат в текущий момент закрыт.</b> Пожалуйста попробуйте позже.';

$lang['top_referers'] = 'Top реферов';

// ChanceAce
$lang['chance_title'] = "Шанс";
// Slot machine
$lang['slotmachine_title'] = "Игровые автоматы";

// Lottery Variables
$lang ['lottery_second'] = 'секунда';
$lang ['lottery_seconds'] = 'секунд';
$lang ['lottery_minute'] = 'минута';
$lang ['lottery_minutes'] = 'минут';
$lang ['lottery_hour'] = 'час';
$lang ['lottery_hours'] = 'часов';
$lang ['lottery_day'] = 'день';
$lang ['lottery_days'] = 'дня';
$lang ['lottery_current_history'] = 'Текущая История';
$lang ['lottery_no_history'] = 'В настоящее время нет записей в истории!';
$lang ['lottery_history_disabled'] = 'История Лотерей отключена на форуме!';
$lang ['lottery_ticket_bought'] = 'Ваш билет в %s был успешно куплен.';
$lang ['lottery_tickets_bought'] = 'Ваши билеты (%s шт.) в %s были успешно куплены.';
$lang ['lottery_purchased_ticket'] = ' для покупки билета!';
$lang ['lottery_purchased_tickets'] = ' для покупки %s билетов!';
$lang ['lottery_purchased_ne'] = 'У вас недостаточно ';
$lang ['lottery_too_many_tickets'] = 'Вы уже купили максимально допустимое в этой лотерее количество билетов! Пожалуйста ждите до следующего старта.';
$lang ['lottery_information'] = 'Информация';
$lang ['lottery_actions'] = 'Состояние Лотереи';
$lang ['lottery_disabled'] = 'Лотерея в настоящее время выключена! <br /><br />Попробуйте позже.';
$lang ['lottery_ID'] = 'Идентификатор (ID)';
$lang ['lottery_winner'] = 'Победитель';
$lang ['lottery_amount_won'] = 'Выигранная сумма';
$lang ['lottery_time_won'] = 'Время выигрыша';
$lang ['lottery_total_history'] = 'Общее количество записей в истории лотереи: %s.';
$lang ['lottery_history'] = 'История';
$lang ['lottery_tickets_owned'] = 'Имеется билетов';
$lang ['lottery_ticket_cost'] = 'Стоимость билета';
$lang ['lottery_base_pool'] = 'Основной призовой лот';
$lang ['lottery_current_entries'] = 'Сейчас участников';
$lang ['lottery_total_pool'] = 'Полный призовой лот';
$lang ['lottery_item_draw'] = 'Разыгрываемые изделия';
$lang ['lottery_time_draw'] = 'Время до рестарта';
$lang ['lottery_last_winner'] = 'Последний победитель';
$lang ['lottery_buy_ticket'] = 'Купить билет';
$lang ['lottery_buy_tickets'] = 'Купить билетов';
$lang ['lottery_view_history'] = 'Просмотр истории Лотереи';
$lang ['lottery_view_phistory'] = 'Просмотр личной истории';
$lang['lottery'] = 'Лотереи';

// Lottery Error Variables
$lang ['lottery_error_updating'] = 'Ошибка обновления таблицы %s !';
$lang ['lottery_error_deleting'] = 'Ошибка удаления из таблицы %s !';
$lang ['lottery_error_selecting'] = 'Ошибка получения информацию из таблицы %s !';
$lang ['lottery_error_inserting'] = 'Ошибка вставки в таблицу %s !';
$lang ['lottery_error_variable'] = 'Не смог прочитать переменную %s !';
$lang ['lottery_invalid_command'] = 'Неверная команда!';
$lang ['lottery_no_history_type'] = 'Не выбран тип истории!';

// Job Variables
$lang['jobs'] = 'Работа';
$lang['jobs_unemployed'] = 'Безработный';
$lang['jobs_current'] = 'Текущая работа';
$lang['jobs_available'] = 'Доступная работа';
$lang['jobs_youre_unemployed'] = 'Вы сейчас безработный.';
$lang['jobs_cant_be_employed'] = 'Вы сейчас не можете трудоустроиться.';
$lang['jobs_not_employed'] = 'Вы не можете отказаться от работы, на которую Вы не наняты!';
$lang['jobs_quit'] = 'Вы можете уйти с работы как %s!';
$lang['jobs_now_employed'] = 'Вы сейчас работаете как %s!';
$lang['jobs_already_employed'] = 'Вы сейчас наняты на эту работу!';
$lang['job_requires'] = 'Эта работа требует %s.';
$lang['jobs_item'] = 'Изделия';
$lang['jobs_no_positions'] = 'В настоящее время нет доступной работы!';
$lang['jobs_not_public'] = 'Эта работа с приватным доступом!';
$lang['jobs_not_exist'] = 'Эта работа не существует!';
$lang['jobs_information'] = 'Информация о работе';
$lang['jobs_job'] = 'Работа';
$lang['jobs_pay'] = 'Оплата';
$lang['jobs_pay_length'] = 'Период оплаты';
$lang['jobs_started'] = 'Старт';
$lang['jobs_last_paid'] = 'Последняя выплата';
$lang['jobs_postions'] = 'Осталось мест';
$lang ['jobs_remaining_positions'] = 'Осталось рабочих мест';
$lang ['jobs_taken_positions'] = 'Занятых рабочих мест';
$lang ['jobs_total_employed'] = 'Всего занятых мест';
$lang ['jobs_total_positions'] = 'Всего рабочих мест';
$lang ['jobs_total_jobs'] = 'Всего работ';
$lang ['jobs_too_many'] = 'Вы уже заняли разрешеноое количество рабочих мест!';
$lang ['jobs_positions'] = 'Мест';
$lang['jobs_second'] = 'секунда';
$lang['jobs_seconds'] = 'секунд';
$lang['jobs_minute'] = 'минута';
$lang['jobs_minutes'] = 'минут';
$lang['jobs_hour'] = 'час';
$lang['jobs_hours'] = 'часов';
$lang['jobs_day'] = 'день';
$lang['jobs_days'] = 'дней';

// Job Buttons
$lang['jobs_button_accept'] = 'Принять';
$lang['jobs_button_quit'] = 'Выход!';

// Job Error Variables
$lang['jobs_error_updating'] = 'Ошибка обновления таблицы %s!';
$lang['jobs_error_deleting'] = 'Ошибка удаления из таблицы %s!';
$lang['jobs_error_selecting'] = 'Ошибка получения информации из таблицы %s!';
$lang['jobs_error_inserting'] = 'Ошибка вставки данных в таблицу %s!';
$lang['jobs_error_variable'] = 'Невозможно прочитать переменную %s!';

//
// These are UPDATED lang files. I've added this so you can easily find it with SEARCH. :)
// Ignore these comments if this is your first install, but make sure you include them all!
//
$lang ['jobs_requires_admin'] = 'Вы должны быть администратором, чтобы наняться на эту работу!';
$lang ['jobs_requires_mod'] = 'Вы должны быть модератором, чтобы наняться на эту работу!';
$lang ['jobs_requires_male'] = 'Вы должны быть мужчиной, чтобы наняться на эту работу!';
$lang ['jobs_requires_female'] = 'Вы должны быть женщиной, чтобы наняться на эту работу!';
$lang ['jobs_requires_nmale'] = 'Вы не должны быть мужчиной, чтобы наняться на эту работу!';
$lang ['jobs_requires_nfemale'] = 'Вы не должны быть женщиной, чтобы наняться на эту работу!';
$lang ['jobs_requires_gil'] = 'У Вас должно быть %s %s, чтобы наняться на эту работу!';
$lang ['jobs_requires_ngil'] = 'У Вас не должно быть %s %s, чтобы наняться на эту работу!';
$lang ['jobs_requires_mgil'] = 'У Вас должно быть больше, чем %s %s, чтобы наняться на эту работу!';
$lang ['jobs_requires_lgil'] = 'У Вас должно быть меньше, чем %s %s, чтобы наняться на эту работу!';
$lang ['jobs_requires_posts'] = 'У Вас должно быть %s постов, чтобы наняться на эту работу!';
$lang ['jobs_requires_nposts'] = 'У Вас не должно быть %s постов, чтобы наняться на эту работу!';
$lang ['jobs_requires_mposts'] = 'У Вас должно быть больше, чем %s постов, чтобы наняться на эту работу!';
$lang ['jobs_requires_lposts'] = 'У Вас должно быть меньше, чем %s постов, чтобы наняться на эту работу!';
$lang ['jobs_requires_item'] = 'У Вас в инвентаря должно быть %s, чтобы наняться на эту работу!';
$lang ['jobs_requires_nitem'] = 'У Вас в инвентаре не должно быть %s, чтобы наняться на эту работу!';

$lang['Rabbitoshi_topic']='Животные пользователя';

// [begin] Glance mod
$lang['Glance_anno'] = 'Объявления портала';
$lang['Glance_recent'] = 'Последние темы';
// [end] Glance mod

//
// Password-protected topics
//
$lang['Topic_password'] = 'Пароль на тему';
$lang['Enter_topic__password'] = 'Введи пароль';
$lang['Incorrect_topic_password'] = 'Неверный пароль';
$lang['Password_login_success'] = 'Вы ввели верный пароль';
$lang['Click_return_page'] = 'Нажмите %sздесь%s, чтобы вернуться на страницу';
$lang['Not_auth_edit_post'] = 'Вы не имеете прав, чтобы изменять это сообщение';
$lang['Not_delete_password_topics'] = 'Вы не имеет прав, чтобы удалить тему защищенную паролем';
$lang['Only_alpha_num_chars'] = 'Пароль должен содержать не меньше 3 и не больше 20 символов, и может состоять только из букв латинского алфавита и цифр (A-Z, a-z, 0-9).';

//
// Buddy list
//
$lang['Buddylist'] = 'Список друзей';
$lang['Buddy'] = 'Друг';
$lang['Add_buddy'] = 'Добавить в Ваш список друзей';
$lang['Remove_buddy'] = 'Удалить из Вашего списка друзей';
$lang['Buddy_added'] = 'Пользователь был добавлен в Ваш список друзей';
$lang['Buddy_removed'] = 'Пользователь был удален из Вашего списка друзей';
$lang['Click_return_page'] = 'Нажмите %sздесь%s чтобы вернуться';
$lang['Confirm_remove_buddy'] = 'Вы уверены что хотите удалить этого пользователя из своего списка друзей?';

$lang['Online'] = 'В сети';
$lang['Offline'] = 'Отключены';
$lang['Buddies_online'] = 'Друзья в сети';
$lang['Buddies_offline'] = 'Друзья отключены';
$lang['No_buddies'] = 'Нет друзей в списке';
$lang['No_buddies_online'] = 'Нет друзей в сети';
$lang['No_buddies_offline'] = 'Нет друзей отключенных';



//
// That's all, Folks!
// -------------------------------------------------
//

//======================================================================= |
//==== Start: == Activity Mod Plus ====================================== |
//==== v1.1.0 =========================================================== |
//==== 
$lang['Activity'] = 'Игры';
$lang['Trohpy'] = 'Игровые медали';
//====
//==== Author: aUsTiN [austin@phpbb-amod.com] [http://phpbb-amod.com] === |
//==== End: ==== Activity Mod Plus ====================================== |	
//======================================================================= |
//
// That's all, Folks!
// -------------------------------------------------



// Start add - Search back MOD
$lang['View_posts_of_last'] = 'Найти сообщения за ';
$lang['Select_time'] = "Выберите время";
$lang['Or'] = "или";
$lang['15_min'] = "15 минут";
$lang['30_min'] = "30 минут";
$lang['45_min'] = "45 минут";
$lang['1_Hour'] = "60 минут";
$lang['2_Hour'] = "2 часа";
$lang['6_Hour'] = "6 часов";
$lang['12_Hour'] = "12 часов";
// End add - Search back MOD

$lang['clock_name'] = 'Часы & Календарь';

// XS News
$lang['xs_latest_news'] = 'Последнии новости';
$lang['xs_no_news'] = 'Нет новостей.';
$lang['xs_news_version'] = 'XS-News Версия: %s';
$lang['xs_news_ticker_feed'] = 'XML-Feed Ресурс: %s';
$lang['xs_no_ticker'] = 'Нет лент новостей. Посетите панель ACP для настройки.';
$lang['xs_news_ticker_title'] = 'Лента новостей';
$lang['xs_news_tickers_title'] = 'Ленты новостей';
$lang['xs_news_item_title'] = 'Новость';
$lang['xs_news_items_title'] = 'Новости';

// XS Nav Menus
$lang['nm_version_info'] = 'XS-Nav Версии: %s';
// used if combining Google/Forum searches
$lang['nm_google_search'] = 'Google';
$lang['nm_forum_search'] = 'Форум';
// Used for Last # Topics
$lang['nm_last_topic_title'] = 'Последнии \'%s\' тем';
$lang['nm_last_topic_title_none'] = 'Нет последних тем';
// Used in viewforum forum search
$lang['nm_search_all'] = 'Поиск по всем форумам';
$lang['nm_search_this'] = 'Поиск по этому форуму';

// Page Loading MOD
$lang['Page_loading_wait'] = 'Страница загружается... пожалуйста, подождите!';
$lang['Page_loading_stop'] = 'Страница не отображается или Вы не хотите ждать? Нажмите <span onclick="hideLoadingPage()" style="cursor:hand"><u>здесь</u></span>';

// Mouse Hover Topic Started Date MOD
$lang['Topic_started'] = 'Тема начата';

// Visit Counter
$lang['Visit_counter'] = 'Всего <b>%d</b> посетителей было на портале';

//Header und Navigation
$lang['NP_NOT_ACTIVATED'] = 'Ваша страничка не создана!<br><br>Вы хотите создать ее сейчас?';
$lang['NP_NOT_ACTIVATED_2'] = 'Не удалось создать личную страничку!';
$lang['NP_NEEDED_POSTS'] = 'У Вас должно быть минимум <b>'.$posts.'</b> сообщений для создания собственной странички.';
$lang['NP_NICKPAGE_REQUEST'] = 'Личные странички вызываются по ссылке:<br><br><b>nickpage.php?user=ВыбранныйНик</b>';
$lang['NP_NICKPAGE_OF'] =  'Страничка ';
$lang['NP_VOTE_FOR'] = 'рейтинг странички';
$lang['NP_LAST_ONLINE'] = 'Был последний раз';
$lang['NP_STATUS'] = 'Статус';
$lang['NP_VISITS'] = 'Посещений';
$lang['NP_NAVIGATION'] = 'Навигация';
$lang['NP_HOME'] = 'Главная';
$lang['NP_SELFMADE'] = 'Сообщения';
$lang['NP_GALERIE'] = 'Галлерея';
$lang['NP_PM_ME'] = 'Связаться по ЛС';
$lang['NP_GB_ENTRY'] = 'Сообщение в гостевой';
$lang['NP_ADMIN'] = 'Управление';
$lang['NP_FAVORTIE_URL'] = 'Ссылки';
$lang['NP_BUDDY'] = 'Друзья';
$lang['NP_VOTES'] = 'Рейтнги';
$lang['NP_YES'] = 'ДА';
$lang['NP_NO'] = 'НЕТ';
$lang['NP_STOP'] = 'Доступ закрыт';
$lang['NP_WINDOW_CLOSE'] = 'Это окно закроется через 5 секунд.';
$lang['NP_BUDDY_ADD_ME'] = 'Добавь меня в Друзья';
	
//Allgemein
$lang['NP_NAME'] = 'Имя';
$lang['NP_OLD'] = 'Возраст';
$lang['NP_FROM'] = 'Город';
$lang['NP_EMAIL'] = 'Email';
$lang['NP_WEBSITE'] = 'Сайт';
$lang['NP_INTERESTS'] = 'Хобби';
$lang['NP_GUESTBOOK'] = 'Гостевая';
$lang['NP_SITE'] = 'Сайт';
$lang['NP_WRITE_ON'] = 'внести';
$lang['NP_NEXT_SITE'] = 'След. стр.';
$lang['NP_SITE_BEFORE'] = 'Пред. стр.';
$lang['NP_GB_BUTTON'] = 'Создать сообщение';

//Galerie
$lang['NP_NEXT'] = 'след.';
$lang['NP_BEFORE'] = 'пред.';
$lang['NP_PIC_ALT'] = 'hit';

//Guestbook Entry
$lang['NP_GUESTBOOK_AT'] = 'Оставить сообщение в гостевой ';
$lang['NP_WARNING'] = 'Тэги HTML <b><font color="red">отключены</b></font>, BB-CODE <b><font color="green">включены</font></b>, , Смайлы <b><font color="green">включены</font></b>';
$lang['NP_YOUR_NAME'] = 'Ваше имя';
$lang['NP_MESSAGE_TO'] = 'Сообдение для';
$lang['NP_ADD_ENTRY'] = 'Добавить';
$lang['NP_RESET_ENTRY'] = 'Сброс';
$lang['NP_GB_THX'] = 'Спасибо за сообщение в гостевой';
$lang['NP_GB_USER_WANTS'] = 'Только зарегистрированные пользователи могут оставлять сообщения в Гостевой';
$lang['NP_GB_REGISTERED_ONLY'] = 'Только зарегистрированные пользователи могут оставлять сообщения в Гостевой';
$lang['NP_GB_FORBIDDEN_FROM_ADMIN'] = 'Гостевая отключена Администратором';
	
//Vote
$lang['NP_VOTE'] = 'Рейтинг';
$lang['NP_CHOOSE'] = 'выбрать';
$lang['NP_FANTASTIC'] = 'прекрасно';
$lang['NP_GOOD'] = 'хорошо';
$lang['NP_NORMAL'] = 'нормально';
$lang['NP_BAD'] = 'плохо';
$lang['NP_VERY_BAD'] = 'отвратительно';
$lang['NP_DO_VOTE'] = 'Голос';
$lang['NP_VOTES_BEFORE'] = 'Вы уже голосовали за этого пользователя ;-).';
$lang['NP_NOT_ALLOWED'] = 'Вы еще не голосовали за этого пользователя!';
$lang['NP_VOTE_THX'] = 'Спасибо за Вашу оценку';
	
//Nickpage CMS
$lang['NP_BACK_TO_NICKPAGE'] = 'Назад к страничке';
$lang['NP_CONFIGURATION'] = 'Конфигурация';
$lang['NP_SECURITY'] = 'Защита';
$lang['NP_GUESTBOOK'] = 'Гостевая';
$lang['NP_BIRTHDAY'] = 'День рождения (ДД.ММ.ГГГГ)';
$lang['NP_BIRTHDAY_COMMENT'] = '(Если Вы не хотите показывать свой возраст,<br>оставьте все 3 поля чистыми!)';
$lang['NP_SHOW_EMAIL'] = 'Показывать Адресс Email';
$lang['NP_SHOW_EMAIL_COMMENT'] = '(Эта настройка изменит <br>профиль на портале!)';
$lang['NP_INFORMATION'] = 'Информация';
$lang['NP_SPECIALNICKNAME'] = 'Специальный Ник';
$lang['NP_USERPIC'] = 'Фотография (200x200,PNG/GIF/JPEG)';
$lang['NP_SAFE'] = 'Сохранить';
$lang['NP_SETBACK'] = 'Сбросить';
$lang['NP_ADD_LINK'] = 'Добавить ссылку';
$lang['NP_LINK_NAME'] = 'Описание';
$lang['NP_LINK_ADRESS'] = 'URL';
$lang['NP_EDIT_LINK'] = 'Редактировать ссылки';
$lang['NP_EDIT'] = 'Редактировать';
$lang['NP_DELETE'] = 'Удалить';
$lang['NP_ADD_BUDDY'] = 'Добавить друга';
$lang['NP_NICKNAME'] = 'Ник';
$lang['NP_NICKNAME_SEARCH'] = 'Найти Ник';
$lang['NP_ADD_GALERIE'] = 'Добавить фото';
$lang['NP_PIC'] = 'Фото';
$lang['NP_PIC_TITLE'] = 'Описание';
$lang['NP_ADD_SELFMADE'] = 'Создать сообщение';
$lang['NP_SECURITY_SETTINGS'] = 'Редактировать настройки защиты';
$lang['NP_REGISTERED_ONLY_VIEW'] = 'Только зарегистрированные пользователи могут видеть мою страничку';
$lang['NP_REGISTERED_ONLY_GB'] = 'Только зарегистрированные пользователи могут оставлять сообщения в моей Гостевой';
$lang['NP_MANAGE_GUESTBOOK'] = 'Редактировать записи в Гостевой';
$lang['NP_AUTHOR'] = 'Автор';
$lang['NP_DATE'] = 'Дата';
$lang['NP_TIME'] = 'Время';
$lang['NP_ENTRY'] = 'Текст';
$lang['NP_DELETE_PIC'] = 'Удалить фото';
$lang['NP_GB_EMAIL'] = 'Отсылать Email при новых сообщениях в Гостевой?';
//Notification
$lang['Notification_nickpage_subject'] = 'новая запись в Гостевой';

//Adminref
$lang['NICKPAGE'] = "Показать страничку";
$lang['Name'] = 'Имя';
$lang['Alter'] = 'Возраст';
$lang['Userpic'] = 'Фото';
$lang['Eintraege'] = 'Гостевая';
$lang['Bilder'] = 'Галлерея';
$lang['Zugang'] = 'Перейти';
$lang['Recent_Nickpages'] = "Посмотреть стрничку";
$lang['No_Recent_Nickpages'] = "Нет доступных страничек";
$lang['Nickpagelist'] = "Список стрничек";

$lang['Watched_Topics'] = 'Подписанные темы';
$lang['No_Watched_Topics'] = 'У Вас нет подписанных тем';
$lang['Watched_Topics_Started'] = 'Подписка начата';
$lang['Watched_Topics_Stop'] = 'Отсановить подписку';
$lang['Check_All'] = 'Выделить все';
$lang['UnCheck_All'] = 'Снять выделение';

?>