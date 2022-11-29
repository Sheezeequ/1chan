<?php

/***************************************************************************
 *                            lang_admin.php [Russian]
 *                              -------------------
 *     begin                : 2006.04.12
 *     copyright            : (C) 2006 modelizm.net.ru
 *     email                : tankmod@yandex.ru
 *	 ICQ                  : 270180730
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/06/10 00:31:19 psotfx Exp $
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

   Переведено на русский: Греков Алексей. tankmod@yandex.ru, ICQ:270180730
*/


// phpBB2 Plus 1.53 final Language File Build 123

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

$lang['General'] = 'Общие настройки';
$lang['Users'] = 'Пользователи';
$lang['Groups'] = 'Группы';
$lang['Forums'] = 'Форумы';
$lang['Styles'] = 'Стили';
// EASYMOD-start
$lang['Modifications'] = 'МОД-Центр';
// EASYMOD-end

$lang['Configuration'] = 'Конфигурация';
$lang['Configuration_plus'] = 'Конфигурация Plus';
$lang['Configuration_portal'] = 'Конфигурация Портала';
$lang['Permissions'] = 'Права доступа';
$lang['Manage'] = 'Управление';
$lang['Disallow'] = 'Запрещённые имена';
$lang['Prune'] = 'Чистка';
$lang['Mass_Email'] = 'Массовая рассылка почты';
$lang['Ranks'] = 'Звания';
$lang['Smilies'] = 'Смайлики';
$lang['Ban_Management'] = 'Чёрные списки (Ban)';
$lang['Word_Censor'] = 'Автоцензор';
$lang['Export'] = 'Экспорт';
$lang['Create_new'] = 'Создать';
$lang['Add_new'] = 'Добавить';
$lang['Backup_DB'] = 'Резервная копия БД';
$lang['Restore_DB'] = 'Восстановить БД';
$lang['DB_Maintenance'] = 'Ремонт БД';
// EASYMOD-start
$lang['MOD_ainstall'] = 'Установить MODы';
$lang['MOD_settings'] = 'Настроить EasyMOD';
$lang['MOD_history'] = 'История EasyMOD';
$lang['MOD_control_tag'] = '0.1.13';
// EASYMOD-end
//
// Custom Profile Fields MOD
//
$lang['custom_field_notice_admin'] = 'Эти пункты были созданы Вами или другим администратором. Для дополнительной информации, проверьте пункты в профиле в навигационной панели. Пункты, отмеченные с * являются требуемыми полями. Пункты, отмеченные с  &dagger; видны только админам.';

$lang['field_deleted'] = 'Указанное поле было удалено' ;
$lang['double_check_delete'] = 'Вы уверенный, что хотите удалить область(поле) профиля "%s" из базы данных?';

$lang['here'] = 'Here';
$lang['new_field_link'] = '<a href="'.append_sid("$filename?mode=add&pfid=x").'">%s</a>';
$lang['edit_field_link'] = '<a href="'.append_sid("$filename?mode=edit&pfid=x").'">%s</a>';
$lang['index_link'] = '<a href="'.append_sid("admin_profile_fields.$phpEx?mode=edit&pfid=x").'">%s</a>';
$lang['field_exists'] = 'Это поле уже существует.<br /><br />Вы можете пробовать создать ' . sprintf($lang['new_field_link'],'новое') . ' поле в профиле,<br /><br />or try ' . sprintf($lang['edit_field_link'],'editing') . ' это поле уже созданно.';
$lang['click_here_here'] = 'Нажмите ' . sprintf($lang['new_field_link'],$lang['here']) . ' чтоб добавить другое поле в профиль,<br /><br />или нажмите ' . sprintf($lang['index_link'],$lang['here']) . ' чтоб вернуться назад.';
$lang['field_success'] = 'Поле успешно добавленно!<br /><br />' . $lang['click_here_here'];
$lang['Custom_Profile'] = 'Поля в профиле';
$lang['profile_field_created'] = 'Поле в профиле созданно';
$lang['profile_field_updated'] = 'Поле в профиле измененно';

$lang['add_field_title'] = 'Добавить обычное поле в профиль';
$lang['edit_field_title'] = 'Изменить обычное поле в профиле';
$lang['add_field_explain'] = 'Здесь Вы можете создавать новые области (поля) для ваших пользователей, чтобы установить в их профилях.';
$lang['edit_field_explain'] = ' Здесь Вы можете редактировать области(поля), которые Вы уже создали для ваших пользователей, чтобы установить в их профилях.';

$lang['add_field_general'] = 'Общие настройки';
$lang['add_field_admin'] = 'Настройки администратора';
$lang['add_field_view'] = 'Просмотр настроек';
$lang['add_field_text_field'] = 'Настройка текстовых полей';
$lang['add_field_text_area'] = 'Настройка зон текста';
$lang['add_field_radio_button'] = 'Настройка переключателей';
$lang['add_field_checkbox'] = 'Настройка флажков выбора';

$lang['default_value'] = 'По умолчанию';
$lang['default_value_explain'] = 'Эта настройка поля по умолчанию. Если пользователь не поменяет значение, то будет установленно значение по умолчанию. Если это требуемые настройки поля, то они будут установленны для всех существующих пользователей.';
$lang['default_value_radio_explain'] = 'Выберите имя, идентичное одному из созданных в доступной области (поле) значений.';
$lang['default_value_checkbox_explain'] = 'Выберите значение по умолчанию. Эти величинвы должны совпадать с величинами в разрешенной области значений';
$lang['max_length'] = 'Максимальная длина';
$lang['max_length_explain'] = 'Это максимальная длина для этого поля.';
$lang['max_length_value'] = ' Это должен быть номер между %d и %d.';
$lang['available_values'] = 'Разрешенные величины';
$lang['available_values_explain'] = 'Put each value on its own line';

$lang['add_field_view_disclaimer'] = 'Со всеми этими назначениями будут обращаться как "no" Если пользователям не позволяют просмотреть эту область(поле) ';

$lang['add_field_name'] = 'Название поля';
$lang['add_field_name_explain'] = 'Введите имя, которое вы бы хотели связать с этим полем.';
$lang['add_field_description'] = 'Описание поля';
$lang['add_field_description_explain'] = 'Введите описание поля, которое вы хотите связать с этим полем. Это будет показано как маленький текст ниже названия поля, точно так же как этот текст.';
$lang['add_field_type'] = 'Тип поля';
$lang['add_field_type_explain'] = 'Выберите тип поля, которое вы хотите добавить.';
$lang['edit_field_type_explain'] = 'Выберите тип поля, которое выхотите изменить на данное. Examples of each field type are shown to the far right.';
$lang['add_field_required'] = 'Set as Required';
$lang['add_field_required_explain'] = 'Если область(поле) установлена в "Требуемый", любой пользователь, который регистрируется позже <strong>Обязан</strong> заполнить его, и всем существующим пользователям будет заполена ячейка по умолчанию.';
$lang['add_field_user_can_view'] = 'Разрешить всем пользователям просмотр';
$lang['add_field_user_can_view_explain'] = 'Если установленно "yes", то пользователь может видеть и изменять поля. Если "no", то только администратор может просматривать и изменять эти значения  Также, если установленно "yes", эти поля не могут требоваться.';
$lang['view_in_profile'] = 'Видимо в пользовательском профиле';
$lang['profile_locations_explain'] = 'Эта опция для того, чтоб поля не были видны в профиле пользователя(ей).';
$lang['contacts_column'] = 'Колонка контактов';
$lang['about_column'] = 'Колонка О';
$lang['view_in_memberlist'] = 'Видимые в списке пользователей';
$lang['view_in_topic'] = 'Видимые в топике';
$lang['topic_locations_explain'] = 'Эта опция для того, чтоб поля не были видны в постах.';
$lang['author_column'] = 'Секция автора';
$lang['above'] = 'Выше ';
$lang['below'] = 'Ниже ';

$lang['textarea'] = 'Зона текста';
$lang['textarea_example'] = "Пример зоны текста.";
$lang['text_field'] = 'Текст скрыт';
$lang['text_field_example'] = 'Пример скрытого текста';
$lang['radio'] = 'Переключатель';
$lang['radio_example'] = 'Пример из двух переключателей';
$lang['checkbox'] = 'Кнопка выбора';
$lang['checkbox_example'] = 'Пример из двух кнопок выбора';

$lang['profile_field_list'] = 'Ваши обычные поля в профиле';
$lang['profile_field_list_explain'] = 'Все обычные профили вы можете создать для вашего форума с сылками для изменения их.';
$lang['profile_field_id'] = 'ID #';
$lang['profile_field_name'] = 'Название поля';
$lang['profile_field_action'] = 'Действие';
$lang['no_profile_fields_exist'] = 'Нет созданных полей.';

$lang['enter_a_name'] = 'Вы <strong>должны</strong>название поля<br /><br />Нажмите назад и попробуте снова';
//
// END Custom Profile Fields MOD
//

//
// Index
//
$lang['Admin'] = 'Администрирование';
$lang['Not_admin'] = 'У вас нет прав на администрирование';
$lang['Welcome_phpBB'] = 'Добро пожаловать на phpBB';
$lang['Admin_intro'] = 'Спасибо за выбор phpBB в качестве решения для ваших форумов. На этой странице дан краткий обзор различных возможностей этой доски объявлений. Вернуться на эту страницу вы можете, щёлкнув на ссылку <u>Главная страница</u> в левой панели. Для перехода на список форумов щёлкните по логотипу phpBB также в левой панели. Остальные ссылки в левой части этого экрана позволят вам управлять всеми аспектами ваших форумов, на каждом экране будут даны инструкции по использованию.';
$lang['Main_index'] = 'Список форумов';
$lang['Forum_stats'] = 'Статистика Форумов';
$lang['Admin_Index'] = 'Главная страница';
$lang['Preview_forum'] = 'Предварительный просмотр форума';

$lang['Click_return_admin_index'] = '%sВернуться на главную страницу администраторского раздела%s';

$lang['Statistic'] = 'Статистика';
$lang['Value'] = 'Значение';
$lang['Number_posts'] = 'Кол-во сообщений';
$lang['Posts_per_day'] = 'Сообщений в день';
$lang['Number_topics'] = 'Кол-во тем';
$lang['Topics_per_day'] = 'Тем в день';
$lang['Number_users'] = 'Кол-во пользователей';
$lang['Users_per_day'] = 'Пользователей в день';
$lang['Board_started'] = 'Дата запуска';
$lang['Avatar_dir_size'] = 'Размер директории с аватарами';
$lang['Database_size'] = 'Объём БД';
$lang['Gzip_compression'] ='сжатие Gzip';
$lang['Not_available'] = 'Недоступно';

$lang['ON'] = 'ВКЛ'; // This is for GZip compression
$lang['OFF'] = 'ВЫКЛ'; 

// Cracker Tracker
// Security System from http://www.cback.de
//
$lang ['ctrack_pro_update'] = 'Автообновление';
$lang ['ctrack_pro_idetect'] = 'Обнаружение инъекции';
$lang ['ctrack_pro_logfile'] = 'Логи и Статистика';
$lang ['ctrack_pro_settings'] = 'Настройка';

$lang ['ctrack_logfile'] = 'Лог-файл Шпиона взломщиков';
$lang ['ctrack_loginfo'] = 'Это - Лог-файл Шпиона взломщиков МОДа Защиты <a href="http://www.community.cback.de" target="_blank">CBACK.DE</a>, Система Защиты для вашего phpBB Форума. Здесь Вы можете увидеть блокированные попытки взлома.';
$lang ['ctrack_showlog'] = 'Показать Лог-файл';
$lang ['ctrack_downloadlog'] = 'Загрузить Лог-файл';
$lang ['ctrack_deletelog'] = 'Очистить Лог-файл';
$lang ['ctrack_logdate'] = 'Дата';
$lang ['ctrack_logip'] = 'IP';
$lang ['ctrack_logagent'] = 'Пользовательский Агент';
$lang ['ctrack_logattack'] = 'Попытка атаки';
$lang ['ctrack_logstat'] = 'Статистика Лог-файла';
$lang ['ctrack_logentr'] = 'вхождений в Лог-файл';
$lang ['ctrack_logdowninfo'] = 'Нажмите здесь для закачки Лог-файла!';
$lang ['ctrack_logdowninfo2'] = 'Правая кнопка мыши > Сохранить объект как ...';
$lang ['ctrack_logreset'] = 'Лог-файл успешно удален';
$lang ['ctrack_idhead'] = 'Обнаружение инъекции';
$lang ['ctrack_idpass'] = 'Пароль';
$lang ['ctrack_idrpass'] = ' Повторите Пароль';
$lang ['ctrack_idpassfail'] = 'Пароли не совпадают. Пожалуйста, пробуйте снова!';
$lang ['ctrack_idinfo'] = 'Это - система Обнаружения Инъекций. Это проверяет целостность ваших главных файлов портала. Если Вы изменили эти файлы, возможно после включения другого МОДа, Вы должны повторно протестировать систему. Просто нажмите на "Повторно проверить Систему". Ссылкой "Проверка Целостности" Вы можете проверить ваши файлы портала на наличие изменений. Так Вы сможете, например, обнаружить нападение по ФТП.';
$lang ['ctrack_idfirststart'] = 'Это - первый запуск Обнаружения инъекций. Вы должны установить специальную защиту - Пароль для этой Системы. Пожалуйста <b>НЕ ИСПОЛЬЗУЙТЕ</b> ваш пароль Учетной записи пользователя, чтобы гарантировать высоткую Защиту. После создания пароля Система начинает сканирование. Это может занять некоторое время. Дождитесь окончания, пожалуйста.';
$lang ['ctrack_idok'] = '<font color="green"><b>Файл OK</b></font>';
$lang ['ctrack_iderr'] = '<font color="red"><b>Файл ИЗМЕНЕН</b></font>';
$lang ['ctrack_idwarn'] = '<font color="yellwo"><b>ПРЕДУПРЕЖДЕНИЕ</b></font>';
$lang ['ctrack_idlearn'] = 'Повторное изучение Системы';
$lang ['ctrack_idlogin'] = 'Проверка целостности';
$lang ['ctrack_sys_footer'] = 'Система защиты разработана <a href="http://www.cback.de" target="_blank">CBACK.DE</a>';

$lang ['ctrack_log'] = 'Просмотр и Управление Лог-файлами';
$lang ['ctrack_logdesc'] = 'Здесь Вы найдете перечень общих атак на ваш форум, которые блокировал Шпион взломщиков. Пожалуйста помните, что IP и Пользовательский агент могут быть изменены саморазмножающимся вирусом и могут не всегда правильно отображаться в Лог-файле.';
$lang ['ctrack_llogdesc'] = 'Здесь Вы найдете перечень атак попытки входа в систему на вашем форуме, которые блокировал Шпион взломщиков. Пожалуйста помните, что IP и Пользовательский агент могут быть изменены саморазмножающимся вирусом и могут не всегда правильно отображаться в Лог-файле.';
$lang ['ctrack_modules'] = 'Общая статистика';
$lang ['ctrack_loglogin'] = 'Лог-файл Защиты Входа в систему';
$lang ['ctrack_lognormal'] = 'Лог-файл атак';
$lang ['ctrack_inlog'] = 'Лог-файл вхождений';
$lang ['ctrack_inllog'] = 'Лог-файл защиты вхождений';
$lang ['ctrack_blocked'] = 'Блокированные атаки';
$lang ['ctrack_juststat'] = 'CBACK Шпиона взломщиков - Только защита ...';

$lang ['ctrack_uplink'] = 'Центр обновлений Шпиона Взломщиков - CBACK.DE Uplink';
$lang ['ctrack_youver'] = 'Версия вашего файла защиты';
$lang ['ctrack_myver'] = 'Версия файла защиты на CBACK Сервере';
$lang ['ctrack_info'] = 'Если доступна новая версия, то нажмите на ОБНОВИТЬ, для обновления вашего файла защиты';
$lang ['ctrack_upbut'] = 'ОБНОВИТЬ';
$lang ['ctrack_uperr'] = 'Невозможно подключиться.';
$lang ['ctrack_active'] = 'Подключение установлено!';
$lang ['ctrack_usucc'] = 'Обновление успешно завершено!';
$lang ['ctrack_back'] = 'НАЗАД';
$lang ['ctrack_nolinkp'] = 'Нет ссылки';
$lang ['ctrack_ok']      = '<font color="green"><b>OK</b></font>';
$lang ['ctrack_clink'] = 'Закрыть ссылку...';
$lang ['ctrack_defup'] = 'Определение обновлений...';
$lang ['ctrack_noup'] = 'В настоящее время нет обновлений';


$lang ['ctrack_set_head'] = 'Настрйка Шпиона взломщиков';
$lang ['ctrack_set_1'] = 'Выбирают подложку';
$lang ['ctrack_set_2'] = 'Настройки Лог-файла';
$lang ['ctrack_goforit'] = 'Сохранить настройки';
$lang ['ctrack_setmax'] = 'Максимум вхождений в Лог-файл';
$lang ['ctrack_update_success'] = 'Настройка Кэша Шпиона взломщиков успешно сохранена.';
$lang ['ctrack_return'] = 'Вернуться к настройке Шпиона взломщиков';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Управление БД';

$lang['Restore'] = 'Восстановить';
$lang['Backup'] = 'Резервное копирование';
$lang['Restore_explain'] = 'Будет проведено полное восстановление всех таблиц phpBB из файла. Если ваш сервер поддерживает такую возможность, вы можете закачать файл, сжатый gzip\'ом, и он будет автоматически распакован. <b>ВНИМАНИЕ</b> Все существующие данные будут утеряны. Восстановление может занять много времени, не уходите с этой страницы до завершения процесса.';
$lang['Backup_explain'] = 'Вы можете сохранить все связанные с phpBB данные. Если в БД для phpBB есть другие таблицы, которые вы тоже хотели бы сохранить, пожалуйста, введите их названия, разделённые запятыми, в поле "Дополнительные таблицы" чуть ниже. Если ваш сервер поддерживает такую возможность, вы можете также перед скачиванием сжать файл gzip\'ом для уменьшения его размера.';

$lang['Backup_options'] = 'Настройки резервного копирования';
$lang['Start_backup'] = 'Начать копирование';
$lang['Full_backup'] = 'Полная копия';
$lang['Structure_backup'] = 'Копировать только структуру';
$lang['Data_backup'] = 'Копировать только данные';
$lang['Additional_tables'] = 'Дополнительные таблицы';
$lang['Gzip_compress'] = 'Сжать файл gzip\'ом';
$lang['Select_file'] = 'Выберите файл';
$lang['Start_Restore'] = 'Начать восстановление';

$lang['Restore_success'] = 'БД была успешно восстановлена.<br /><br />Ваши форумы должны были вернуться в то же состояние, в котором они были на момент резервного копирования.';
$lang['Backup_download'] = 'Скачивание скоро начнётся, пожалуйста, подождите.';
$lang['Backups_not_supported'] = 'Извините, резервное копирование для используемой вами СУБД не поддерживается.';

$lang['Restore_Error_uploading'] = 'Ошибка в закачке файла';
$lang['Restore_Error_filename'] = 'Проблема с именем файла, пожалуйста, попробуйте другой файл';
$lang['Restore_Error_decompress'] = 'Не могу распаковать сжатый gzip\'ом файл, пожалуйста, закачайте распакованную версию';
$lang['Restore_Error_no_file'] = 'Файл не был закачан';

//
// Auth pages
//
$lang['Select_a_User'] = 'Выберите пользователя';
$lang['Select_a_Group'] = 'Выберите группу';
$lang['Select_a_Forum'] = 'Выберите форум';
$lang['Auth_Control_User'] = 'Права пользователей'; 
$lang['Auth_Control_Group'] = 'Права групп'; 
$lang['Auth_Control_Forum'] = 'Доступ к форумам'; 
$lang['Look_up_User'] = 'Выбрать пользователя'; 
$lang['Look_up_Group'] = 'Выбрать группу'; 
$lang['Look_up_Forum'] = 'Выбрать форум'; 

$lang['Group_auth_explain'] = 'Здесь вы можете изменить права доступа и статус модератора для каждой группы пользователей. Не забывайте при изменении прав доступа для групп, что права доступа для отдельных пользователей могут давать пользователю воможность входа в форумы и т.п. Вы будете предупреждены в этом случае.';
$lang['User_auth_explain'] = 'Здесь вы можете изменить права доступа и статус модератора для отдельных пользователей. Не забывайте при изменении прав пользователя, что права доступа для группы могут давать пользователю возможность входа в форумы и т.п. Вы будете предупреждены в этом случае.';
$lang['Forum_auth_explain'] = 'Здесь вы можете регулировать доступ к каждому форуму. У вас будет обычный и продвинутый режим для этого, продвинутый даёт больше возможностей для контроля. Помните, что изменение прав доступа к форуму повлияет на то, какие пользователи смогут совершать в нём различные действия';

$lang['Simple_mode'] = 'Простой режим';
$lang['Advanced_mode'] = 'Продвинутый режим';
$lang['Moderator_status'] = 'Статус модератора';

$lang['Allowed_Access'] = 'Доступ открыт';
$lang['Disallowed_Access'] = 'Доступ закрыт';
$lang['Is_Moderator'] = 'Модератор';
$lang['Not_Moderator'] = 'Не модератор';

$lang['Conflict_warning'] = 'Предупреждение о конфликте прав';
$lang['Conflict_access_userauth'] = 'У пользователя (пользователей) всё ещё есть права доступа к этому форуму, связанные с членством в группе. Вам, возможно, надо изменить права доступа для групп или исключить пользователя из группы для того, чтобы полностью закрыть ему права доступа. Группы, дающие такие права, перечислены ниже.';
$lang['Conflict_mod_userauth'] = 'У данного пользователя всё ещё есть право модерирования этого форума, связанное с его членством в группе. Вам, возможно, надо изменить права доступа для групп или исключить пользователя из группы для того, чтобы полностью закрыть ему право модерации. Группы, дающие это право, перечислены ниже.';

$lang['Conflict_access_groupauth'] = 'У пользователя (пользователей) всё ещё есть права доступа к этому форуму из-за установок их личных прав. Вам, возможно, надо изменить их права для того, чтобы полностью закрыть им доступ. Пользователи, имеющие такие права, перечислены ниже.';
$lang['Conflict_mod_groupauth'] = 'У пользователя (пользователей) всё ещё есть право модерирования этого форума из-за установок их личных прав. Вам, возможно, надо изменить их права для того, чтобы полностью закрыть им возможность модерирования. Пользователи, имеющие такие права, перечислены ниже.';

$lang['Public'] = 'Публичный';
$lang['Private'] = 'Приватный';
$lang['Registered'] = 'Зарегистрированный';
$lang['Administrators'] = 'Администраторы';
$lang['Hidden'] = 'Спрятанный';


// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Все';
$lang['Forum_REG'] = 'Регистр.';
$lang['Forum_PRIVATE'] = 'Приватный';
$lang['Forum_MOD'] = 'Модератор';
$lang['Forum_ADMIN'] = 'Админ';

$lang['View'] = 'Смотреть';
$lang['Read'] = 'Читать';
$lang['Post'] = 'Создавать темы';
$lang['Reply'] = 'Отвечать';
$lang['Edit'] = 'Редактировать';
$lang['Delete'] = 'Удалять';
$lang['Sticky'] = 'Прилеплять темы';
$lang['Announce'] = 'Создавать Объявления';
$lang['Vote'] = 'Голосовать';
$lang['Pollcreate'] = 'Создавать опросы';

$lang['Permissions'] = 'Права доступа';
$lang['Simple_Permission'] = 'Простое право доступа';

$lang['User_Level'] = 'Статус пользователя'; 
$lang['Auth_User'] = 'Пользователь';
$lang['Auth_Admin'] = 'Администратор';
$lang['Group_memberships'] = 'Членство в группах';
$lang['Usergroup_members'] = 'В этой группе состоят';

$lang['Forum_auth_updated'] = 'Права доступа к форуму изменены';
$lang['User_auth_updated'] = 'Права пользователя изменены';
$lang['Group_auth_updated'] = 'Права группы изменены';

$lang['Auth_updated'] = 'Права доступа изменены';
$lang['Click_return_userauth'] = '%sВернуться к управлению правами пользователей%s';
$lang['Click_return_groupauth'] = '%sВернуться к управлению правами групп%s';
$lang['Click_return_forumauth'] = '%sВернуться к управлению доступом к форумам%s';



//
// Banning
//
$lang['Ban_control'] = 'Чёрные списки';
$lang['Ban_explain'] = 'Здесь вы можете закрывать пользователям любой доступ к форумам. Вы можете внести в чёрный список конкретного пользователя, а также один ил несколько IP адресов или имён серверов. Этот метод не даст пользователю увидеть даже список форумов. Чтобы запретить регистрацию под другим именем, вы можете также внести в чёрный список адрес e-mail. Учтите, запрещение только e-mail адреса не закроет пользователю возможность заходить на форум и писать сообщения. Для этого вам придётся воспользоваться одним из первых двух методов.';
$lang['Ban_explain_warn'] = 'Учтите, что ввод диапазона IP адресов приведёт к добавлению всех адресов между первым и последним в &laquo;чёрный список&raquo;. Будут проделаны попытки уменьшить это количество вводом шаблонов, где это возможно. Если вам действительно надо ввести диапазон адресов, постарайтесь сделать его поменьше или, что ещё лучше, вводите отдельные адреса.';

$lang['Select_username'] = 'Выберите пользователя';
$lang['Select_ip'] = 'Выберите IP адрес';
$lang['Select_email'] = 'Выберите адрес e-mail';

$lang['Ban_username'] = 'Закрытие доступа отдельным пользователям';
$lang['Ban_username_explain'] = 'Вы можете закрыть доступ нескольким пользователям за один раз, используя подходящую для вашего компьютера и браузера комбинацию клавиатуры и мыши.';

$lang['Ban_IP'] = 'Закрыть доступ с одного или нескольких адресов IP или хостов';
$lang['IP_hostname'] = 'Адреса IP или хосты';
$lang['Ban_IP_explain'] = 'Чтобы указать несколько разных адресов или хостов, разделите их запятыми. Чтобы указать последовательность адресов IP разделите начало и конец дефисом (-), чтобы указать шаблон используйте *';

$lang['Ban_email'] = 'Запретить e-mail адреса';
$lang['Ban_email_explain'] = 'Чтобы запретить несколько e-mail адресов, разделите их запятыми. Чтобы указать шаблон, используйте *, например *@mail.ru';

$lang['Unban_username'] = 'Вновь открыть доступ пользователям';
$lang['Unban_username_explain'] = 'Вы можете вновь открыть доступ нескольким пользователям за один раз, используя подходящую для вашего компьютера и браузера комбинацию клавиатуры и мыши.';

$lang['Unban_IP'] = 'Вновь открыть доступ с адресов IP';
$lang['Unban_IP_explain'] = 'Вы можете вновь разрешить доступ с нескольких адресов IP за один раз, используя подходящую для вашего компьютера и браузера комбинацию клавиатуры и мыши.';

$lang['Unban_email'] = 'Вновь разрешить адреса e-mail';
$lang['Unban_email_explain'] = 'Вы можете вновь разрешить несколько адресов e-mail за один раз, используя подходящую для вашего компьютера и браузера комбинацию клавиатуры и мыши.';

$lang['No_banned_users'] = 'Чёрный список пользователей пуст';
$lang['No_banned_ip'] = 'Чёрный список адресов IP пуст';
$lang['No_banned_email'] = 'Чёрный список адресов e-mail пуст';

$lang['Ban_update_sucessful'] = 'Чёрный список был успешно обновлён';
$lang['Click_return_banadmin'] = '%sВернуться к чёрным спискам%s';


//
// Configuration
//
$lang['General_Config'] = 'Общие настройки';
$lang['Config_explain'] = 'Эта форма позволит вам изменить общие настройки форумов. Для управления пользователями и отдельными форумами используйте соответствующие ссылки слева.';

$lang['Click_return_config'] = '%sВернуться к общим настройкам%s';

$lang['General_settings'] = 'Общие настройки форумов';
$lang['Server_name'] = 'Имя сервера';
$lang['Server_name_explain'] = 'Имя сервера, на котором запущены эти форумы';
$lang['Script_path'] = 'Путь к форумам';
$lang['Script_path_explain'] = 'Путь к каталогу, содержащему phpBB, относительно корня сайта';
$lang['Server_port'] = 'Порт веб-сервера';
$lang['Server_port_explain'] = 'Порт, на котором запущен ваш веб-сервер (обычно 80, изменяйте <b>только</b> если сервер работает на другом порту)';
$lang['Site_name'] = 'Название сайта';
$lang['Site_desc'] = 'Описание сайта';
$lang['Board_disable'] = 'Отключить форумы';
$lang['Board_disable_explain'] = 'Форумы станут недоступными пользователям. Не выходите после отключения форумов, снова войти вы не сможете!';
$lang['Acct_activation'] = 'Включить активизацию учётных записей';
$lang['Acc_None'] = 'Нет'; // These three entries are the type of activation
$lang['Acc_User'] = 'Пользователем';
$lang['Acc_Admin'] = 'Администратором';

$lang['Abilities_settings'] = 'Общие настройки форумов и пользователей';
$lang['Max_poll_options'] = 'Макс. кол-во вариантов ответа в опросе';
$lang['Flood_Interval'] = 'Задержка &laquo;флуда&raquo;';
$lang['Flood_Interval_explain'] = 'Время (в секундах), которое должно пройти между двумя сообщениями пользователя.'; 
$lang['Board_email_form'] = 'Рассылка e-mail сообщений через форумы';
$lang['Board_email_form_explain'] = 'Пользователи смогут посылать друг другу e-mail через форумы';
$lang['Topics_per_page'] = 'Тем на страницу';
$lang['Posts_per_page'] = 'Сообщений на страницу';
$lang['Hot_threshold'] = 'Сообщений в &laquo;популярной&raquo; теме';
$lang['Default_style'] = 'Стиль по умолчанию';
$lang['Override_style'] = 'Заменять стиль пользователя';
$lang['Override_style_explain'] = 'Заменять выбранный пользователем стиль на стиль по умолчанию';
$lang['Default_language'] = 'Язык по умолчанию';
$lang['Date_format'] = 'Формат даты';
$lang['System_timezone'] = 'Часовой пояс';
$lang['Enable_gzip'] = 'Включить сжатие GZip';
$lang['Enable_prune'] = 'Включить чистку форумов';
$lang['Allow_HTML'] = 'Разрешить HTML';
$lang['Allow_BBCode'] = 'Разрешить BBCode';
$lang['Allowed_tags'] = 'Разрешённые теги HTML';
$lang['Allowed_tags_explain'] = 'Список разрешенных тегов, разделённый запятыми';
$lang['Allow_smilies'] = 'Разрешить смайлики';
$lang['Smilies_path'] = 'Путь к смайликам';
$lang['Smilies_path_explain'] = 'Каталог ниже корня phpBB, например images/smilies';
$lang['Allow_sig'] = 'Разрешить подписи';
$lang['Max_sig_length'] = 'Макс. длина подписи';
$lang['Max_sig_length_explain'] = 'Максимальное кол-во символов в подписи пользователя';
$lang['Allow_name_change'] = 'Разрешить смену имени пользователя';

$lang['Avatar_settings'] = 'Настройки аватар';
$lang['Allow_local'] = 'Разрешить аватар из галереи';
$lang['Allow_remote'] = 'Разрешить удаленных аватар';
$lang['Allow_remote_explain'] = 'Ссылка на аватару, находящуюся на другом сайте';
$lang['Allow_upload'] = 'Разрешить закачку аватар';
$lang['Max_filesize'] = 'Макс. размер файла аватары';
$lang['Max_filesize_explain'] = 'Для закачанных файлов';
$lang['Max_avatar_size'] = 'Макс. размер изображения';
$lang['Max_avatar_size_explain'] = '(высота x ширина в пикселях)';
$lang['Avatar_storage_path'] = 'Путь к аватарам';
$lang['Avatar_storage_path_explain'] = 'Каталог ниже корня phpBB, например images/avatars';
$lang['Avatar_gallery_path'] = 'Путь к галерее аватар';
$lang['Avatar_gallery_path_explain'] = 'Каталог ниже корня phpBB для готовых картинок, например images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Settings';
$lang['COPPA_fax'] = 'COPPA Fax Number';
$lang['COPPA_mail'] = 'COPPA Mailing Address';
$lang['COPPA_mail_explain'] = 'This is the mailing address where parents will send COPPA registration forms';

$lang['Email_settings'] = 'Настройки e-mail';
$lang['Admin_email'] = 'Адрес e-mail администратора';
$lang['Email_sig'] = 'Подпись в сообщениях e-mail';
$lang['Email_sig_explain'] = 'Этот текст будет подставляться во все письма, рассылаемые из форумов';
$lang['Use_SMTP'] = 'Использовать сервер SMTP для отправки почты';
$lang['Use_SMTP_explain'] = 'Отметьте, если вы хотите/вынуждены отсылать почту через сервер SMTP, а не локальную почтовую службу';
$lang['SMTP_server'] = 'Адрес сервера SMTP';
$lang['SMTP_username'] = 'Имя пользователя для SMTP';
$lang['SMTP_username_explain'] = 'Не указывайте имя пользователя если оно не требуется для работы с вашим сервером SMTP';
$lang['SMTP_password'] = 'Пароль для SMTP';
$lang['SMTP_password_explain'] = 'Не указывайте пароль если он не требуется для работы с вашим сервером SMTP';

$lang['Disable_privmsg'] = 'Личные сообщения';
$lang['Inbox_limits'] = 'Макс. число сообщений в папке &laquo;Входящие&raquo;';
$lang['Sentbox_limits'] = 'Макс. число сообщений в папке &laquo;Отправленные&raquo;';
$lang['Savebox_limits'] = 'Макс. число сообщений в папке &laquo;Сохранённые&raquo;';

$lang['Cookie_settings'] = 'Настройки куков'; 
$lang['Cookie_settings_explain'] = 'Вы можете изменить параметры куков (cookies), отправляемых пользователям. В большинстве случаев подходят значения по умолчанию. Если вам требуется их изменить, соблюдайте осторожность: неверные значения могут помешать пользователям входить в систему.';
$lang['Cookie_domain'] = 'Домен куки';
$lang['Cookie_name'] = 'Имя куки';
$lang['Cookie_path'] = 'Путь куки';
$lang['Cookie_secure'] = 'Безопасные куки [ https ]';
$lang['Cookie_secure_explain'] = 'Если ваш сервер работает через SSL, то включите эту установку, в противном случае оставьте выключенной.';
$lang['Session_length'] = 'Длина сессии [ в секундах ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Включить визуальное подтверждение';
$lang['Visual_confirm_explain'] = 'Отображает картинку с символами, необходимыми для регистрации.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Разрешить автоматический вход';
$lang['Allow_autologin_explain'] = 'Определяет, разрешенно ли пользователем выбор автоматического входа';
$lang['Autologin_time'] = 'Время действия автоматического входа с этим ключом истекло';
$lang['Autologin_time_explain'] = 'Как долго действует ключ (дни).Поставьте 0 для отключения.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Найти флуд интервал';
$lang['Search_Flood_Interval_explain'] = 'Время в секундах до написания след. сообщения'; 

//
// Forum Management
//
$lang['Forum_admin'] = 'Управление форумами';
$lang['Forum_admin_explain'] = 'Здесь вы можете создавать, удалять и изменять порядок вывода категорий и форумов';
$lang['Edit_forum'] = 'Изменить форум';
$lang['Create_forum'] = 'Создать новый форум';
$lang['Create_category'] = 'Создать новую категорию';
$lang['Remove'] = 'Удалить';
$lang['Action'] = 'Действие';
$lang['Update_order'] = 'Изменить порядок';
$lang['Config_updated'] = 'Конфигурация форумов успешно изменена';
$lang['Edit'] = 'Изменить';
$lang['Delete'] = 'Удалить';
$lang['Move_up'] = 'Сдвинуть вверх';
$lang['Move_down'] = 'Сдвинуть вниз';
$lang['Resync'] = 'Синхронизация';
$lang['No_mode'] = 'Не было задано действие';
$lang['Forum_edit_delete_explain'] = 'Здесь вы можете изменить название и описание форума, закрыть его (или вновь открыть) и настроить автоматическую чистку. Для управления правами доступа к форуму воспользуйтесь соответствующей ссылкой в левой части.';

$lang['Move_contents'] = 'Перенести всё содержимое';
$lang['Forum_delete'] = 'Удалить форум';
$lang['Forum_delete_explain'] = 'Здесь вы сможете удалить форум (или категорию) и решить, куда перенести все темы (или форумы), которые там содержались.';

$lang['Status_locked'] = 'Закрыт';
$lang['Status_unlocked'] = 'Открыт';
$lang['Forum_settings'] = 'Общие параметры форума';
$lang['Forum_name'] = 'Название форума';
$lang['Forum_desc'] = 'Описание';
$lang['Forum_status'] = 'Статус форума';
$lang['Forum_pruning'] = 'Автоматическая чистка';

$lang['prune_freq'] = 'Проверять возраст темы каждые';
$lang['prune_days'] = 'Удалять темы, в которых не было сообщений последние';
$lang['Set_prune_data'] = 'Вы выбрали для этого форума автоматическую чистку, но не указали частоту, с которой его требуется чистить. Пожалуйста, вернитесь и укажите её.';

$lang['Move_and_Delete'] = 'Перенести и удалить';

$lang['Delete_all_posts'] = 'Удалить все темы';
$lang['Nowhere_to_move'] = 'Некуда переносить';

$lang['Edit_Category'] = 'Изменить категорию';
$lang['Edit_Category_explain'] = 'Используйте эту форму, чтобы изменить название категории';

$lang['Forums_updated'] = 'Информация о форумах и категориях успешно изменена';

$lang['Must_delete_forums'] = 'Вы должны удалить все форумы, прежде чем сможете удалить эту категорию';

$lang['Click_return_forumadmin'] = '%sВернуться к управлению форумами%s';


//
// Smiley Management
//
$lang['smiley_title'] = 'Утилита редактирования смайликов';
$lang['smile_desc'] = 'Здесь вы можете редактировать список смайликов';

$lang['smiley_config'] = 'Управление смайликами';
$lang['smiley_code'] = 'Код смайлика';
$lang['smiley_url'] = 'Файл с изображением смайлика';
$lang['smiley_emot'] = 'Эмоция смайлика';
$lang['smile_add'] = 'Добавить новый смайлик';
$lang['Smile'] = 'Смайлик';
$lang['Emotion'] = 'Эмоция';

$lang['Select_pak'] = 'Выберите файл с набором (.pak)';
$lang['replace_existing'] = 'Заменить существующий смайлик';
$lang['keep_existing'] = 'Сохранить существующий смайлик';
$lang['smiley_import_inst'] = 'Вы должны распаковать набор смайликов и закачать все файлы в подходящую для вашей установки директорию. Потом выберите в этой форме нужную информацию для импорта набора смайликов.';
$lang['smiley_import'] = 'Импорт набора смайликов';
$lang['choose_smile_pak'] = 'Выберите файл .pak с набором';
$lang['import'] = 'Импортировать смайлики';
$lang['smile_conflicts'] = 'Что делать в случае конфликта';
$lang['del_existing_smileys'] = 'Удалить перед импортом существующие смайлики';
$lang['import_smile_pack'] = 'Импортировать набор смайликов';
$lang['export_smile_pack'] = 'Создать набор смайликов';
$lang['export_smiles'] = 'Для создания набора смайликов из смайликов, установленных в данный момент, %sскачайте файл smiles.pak%s. Переименуйте его как вам нужно, сохранив при этом расширение .pak, затем создайте файл zip, содержащий все изображения смайликов, а также этот файл.';

$lang['smiley_add_success'] = 'Смайлик был успешно добавлен';
$lang['smiley_edit_success'] = 'Смайлик был успешно изменён';
$lang['smiley_import_success'] = 'Набор смайликов был успешно импортирован';
$lang['smiley_del_success'] = 'Смайлик был успешно удалён';
$lang['Click_return_smileadmin'] = '%sВернуться к списку смайликов%s';
$lang['position_new_smilies'] = 'Добавлять новые смайлы в начале или в конце существующих смайлов?';
$lang['smiley_change_position'] = 'Измените положения вставки';
$lang['before'] = 'в начало';
$lang['after'] = 'в конец';
$lang['Move_top'] = 'Отправить в начало';
$lang['Move_end'] = 'Отправить в конец';

//
// User Management
//
$lang['User_admin'] = 'Управление пользователями';
$lang['User_admin_explain'] = 'Здесь вы можете изменить информацию о пользователе. Чтобы изменить права доступа используйте панель управления правами доступа';

$lang['Look_up_user'] = 'Выбрать пользователя'; 

$lang['Admin_user_fail'] = 'Не могу изменить профиль пользователя';
$lang['Admin_user_updated'] = 'Профиль пользователя был успешно изменён';
$lang['Click_return_useradmin'] = '%sВернуться к управлению пользователями%s';

$lang['User_delete'] = 'Удалить этого пользователя';
$lang['User_delete_explain'] = 'Щелкните здесь для удаления этого пользователя. Операцию нельзя будет отменить.';
$lang['User_deleted'] = 'Пользователь был успешно удалён.';

$lang['User_status'] = 'Пользователь активен';
$lang['User_allowpm'] = 'Может посылать личные сообщения';
$lang['User_allowavatar'] = 'Может показывать аватару';

$lang['Admin_avatar_explain'] = 'Здесь вы можете просмотреть и удалить текущую аватару пользователя';

$lang['User_special'] = 'Поля только для админа';
$lang['User_special_explain'] = 'Эти поля сами пользователи редактировать не могут. Здесь вы можете установить их статус и сделать прочие недоступные им настройки.';

// Custom Title MOD
//
$lang['Custom_title_status'] = 'Статус титулов';
$lang['Custom_title_status_regdate'] = 'Основан на регистрационной дате и сообщениях';
$lang['Custom_title_status_disabled'] = 'Выключен';
$lang['Custom_title_status_enabled'] = 'Включен';
$lang['Custom_title_settings'] = 'Настройки титулов';
$lang['Custom_title_days'] = 'Необходимо, чтоб прошло дней от регистрации';
$lang['Custom_title_posts'] = 'Сообщений требуется';
$lang['Custom_title_mode'] = 'МОД замены ранга';
$lang['Custom_title_mode_explain'] = 'Здесь Вы можете выбрать заменять ли ранг, изображение ранга при присвоении Титула пользователю. Если Вы выбирете \'Не заменять\' то титул появится как отдельное название.';
$lang['Custom_title_mode_independent'] = 'Не заменять';
$lang['Custom_title_mode_replace_rank'] = 'Заменить только ранг';
$lang['Custom_title_mode_replace_both'] = 'Заменить ранг и его изображение';
$lang['Custom_title_maxlength'] = 'Максимальная длина';
$lang['Custom_title_maxlength_explain'] = 'Здесь указывается максимальное количество символов в титуле.  Please enter a number from 0 to 255.Пожалуйста, введите значение от 0 до 255.';

//
// Group Management
//
$lang['Group_administration'] = 'Управление группами';
$lang['Group_admin_explain'] = 'Здесь вы можете управлять всеми вашими группами: это включает удаление, добавление и изменение групп. Вы можете назначать модераторов, изменять открытый/закрытый статус группы и устанавливать её название и описание.';
$lang['Error_updating_groups'] = 'Ошибка при изменении группы.';
$lang['Updated_group'] = 'Группа была успешно изменена';
$lang['Added_new_group'] = 'Группа была успешно создана';
$lang['Deleted_group'] = 'Группа была успешно удалена';
$lang['New_group'] = 'Создать новую группу';
$lang['Edit_group'] = 'Изменить группу';
$lang['group_name'] = 'Название группы';
$lang['group_description'] = 'Описание группы';
$lang['group_moderator'] = 'Модератор группы';
$lang['group_status'] = 'Статус группы';
$lang['group_open'] = 'Группа с открытым членством';
$lang['group_closed'] = 'Группа с закрытым членством';
$lang['group_hidden'] = 'Скрытая группа';
$lang['group_delete'] = 'Удалить группу.';
$lang['group_delete_check'] = 'Удалить эту группу';
$lang['submit_group_changes'] = 'Сохранить изменения';
$lang['reset_group_changes'] = 'Отменить изменения';
$lang['No_group_name'] = 'Вы должны указать название группы';
$lang['No_group_moderator'] = 'Вы должны выбрать модератора группы';
$lang['No_group_mode'] = 'Вы должны выбрать режим группы: открытый или закрытый';
$lang['No_group_action'] = 'Не было выбрано действие';
$lang['delete_group_moderator'] = 'Удалить старого модератора?';
$lang['delete_moderator_explain'] = 'Если вы меняете модератора группы и поставите здесь галочку, то предыдущий модератор будет исключён из группы. Если вы её не поставите, то он станет обычным членом группы.';
$lang['Click_return_groupsadmin'] = '%sВернуться к управлению группами%s';
$lang['Select_group'] = 'Выберите группу';
$lang['Look_up_group'] = 'Выбрать группу';



//
// Prune Administration
//
$lang['Forum_Prune'] = 'Чистка форумов';
$lang['Forum_Prune_explain'] = 'Будут удалены темы, в которых не было новых сообщений за выбранное число дней. Если вы не введёте число, то будут удалены все темы. Не будут удалены темы, в которых продолжаются опросы, а также объявления. Вам придётся удалять такие темы вручную.';
$lang['Do_Prune'] = 'Провести чистку';
$lang['All_Forums'] = 'Все форумы';
$lang['Prune_topics_not_posted'] = 'Удалять темы, в которых не было ответов за данное кол-во дней';
$lang['Topics_pruned'] = 'Тем вычищено';
$lang['Posts_pruned'] = 'Сообщений вычищено';
$lang['Prune_success'] = 'Форум успешно почищен';



//
// Word censor
//
$lang['Words_title'] = 'Автоцензор';
$lang['Words_explain'] = 'Здесь вы можете добавить, изменить или удалить слова, которые будут автоматически подвергаться цензуре на ваших форумах. Кроме того, пользователи не смогут зарегистрироваться под именами, содержащими эти слова. В списке слов могут использоваться шаблоны (*), т.е. к \'*тест*\' подойдёт \'протестировать\', к \'тест*\' &mdash; \'тестирование\', к \'*тест\' &mdash; \'протест\'.<br>(Примечание переводчика) Рекомендую пользоваться этой фичей <b>очень</b> аккуратно: например, некие очевидные замены буду неадекватно реагировать на слова \'потребитель\', \'употреблять\' и т.п.';
$lang['Word'] = 'Слово';
$lang['Edit_word_censor'] = 'Изменить автоцензор';
$lang['Replacement'] = 'Замена';
$lang['Add_new_word'] = 'Добавить новое слово';
$lang['Update_word'] = 'Обновить автоцензор';

$lang['Must_enter_word'] = 'Вы должны ввести слово и его замену';
$lang['No_word_selected'] = 'Не выбрано слово для редактирования';

$lang['Word_updated'] = 'Выбранный автоцензор был успешно изменён';
$lang['Word_added'] = 'Автоцензор был успешно добавлен';
$lang['Word_removed'] = 'Выбранный автоцензор был успешно удалён';

$lang['Click_return_wordadmin'] = '%sВернуться к управлению автоцензором%s';



//
// Mass Email
//
$lang['Mass_email_explain'] = 'Вы можете разослать e-mail сообщение либо всем вашим пользователям, либо пользователям, входящим в определённую группу. Сообщение будет отправлено на административный адрес, с BCC: всем получателям. Если вы отправляете письмо большой группе людей, то будьте терпеливы: не останавливайте загрузку страницы после нажатия кнопки. Массовая рассылка может занять много времени, вы увидите сообщение, когда выполнение завершится.';
$lang['Compose'] = 'Текст сообщения'; 

$lang['Recipients'] = 'Получатели'; 
$lang['All_users'] = 'Все пользователи';

$lang['Email_successfull'] = 'Ваше сообщение было отправлено';
$lang['Click_return_massemail'] = '%sВернуться к массовой рассылке%s';

//
// Ranks admin
//
$lang['Ranks_title'] = 'Управление званиями';
$lang['Ranks_explain'] = 'Здесь вы можете добавлять, редактировать, просматривать и удалять звания. Вы также можете создавать специальные звания, которые могут затем быть присвоены пользователям на странице управления пользователями.';

$lang['Add_new_rank'] = 'Новое звание';

$lang['Rank_title'] = 'Звание';
$lang['Rank_special'] = 'Специальное звание';
$lang['Rank_minimum'] = 'Минимум сообщений';
$lang['Rank_maximum'] = 'Максимум сообщений';
$lang['Rank_image'] = 'Картинка к званию (относительно корня phpBB2)';
$lang['Rank_image_explain'] = 'Здесь вы можете присвоить всем имеющим такое звание специальное изображение. Вы можете указать либо относительный, либо абсолютный путь к изображению';

$lang['Must_select_rank'] = 'Извините, вы не выбрали звание. Вернитесь и попробуйте ещё раз.';
$lang['No_assigned_rank'] = 'Специального звания не присвоено';

$lang['Rank_updated'] = 'Звание было успешно изменено';
$lang['Rank_added'] = 'Звание было успешно добавлено';
$lang['Rank_removed'] = 'Звание было успешно удалено';
$lang['No_update_ranks'] = 'Звание было успешно удалено. Тем не менее, информация о пользователях, у которых было это звание, не была изменена. Вам придётся изменить эту информацию вручную.';

$lang['Click_return_rankadmin'] = '%sВернуться к управлению званиями%s';



//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Запрещённые имена пользователя';
$lang['Disallow_explain'] = 'Здесь вы можете задать имена, которые будут запрещены к использованию. Запрещённые имена могут содержать шаблон '*'. Учтите: вы не сможете запретить имя, если уже существует пользователь с таким именем. Вам придётся сначала удалить пользователя, а уже потом запретить имя.';

$lang['Delete_disallow'] = 'Удалить';
$lang['Delete_disallow_title'] = 'Удалить запрещённое имя пользователя';
$lang['Delete_disallow_explain'] = 'Вы можете убрать запрещённое имя, выбрав его из списка и нажав кнопку &laquo;сохранить&raquo;';

$lang['Add_disallow'] = 'Добавить';
$lang['Add_disallow_title'] = 'Добавить запрещённое имя пользователя';
$lang['Add_disallow_explain'] = 'Вы можете запретить имя пользователя, используя шаблон \'*\', который подходит к любому символу';

$lang['No_disallowed'] = 'Нет запрещённых имён';

$lang['Disallowed_deleted'] = 'Запрещённое имя пользователя было успешно удалено';
$lang['Disallow_successful'] = 'Запрещённое имя пользователя было успешно добавлено';
$lang['Disallowed_already'] = 'Имя, которое вы пытаетесь запретить, либо уже запрещено, либо есть в списке нецензурных слов, либо существует пользователь с подходящим именем';

$lang['Click_return_disallowadmin'] = '%sВернуться к управлению запрещёнными именами%s';

//
// Styles Admin
//
$lang['Styles_admin'] = 'Управление стилями';
$lang['Styles_explain'] = 'Здесь вы можете добавлять, удалять и изменять стили (шаблоны и цветовые схемы), доступные вашим пользователям.';
$lang['Styles_addnew_explain'] = 'Этот список содержит все цветовые схемы, подходящие к имеющимся у вас шаблонам. Элементы этого списка НЕ БЫЛИ пока установлены в базу phpBB. Для установки схемы просто нажмите &laquo;Установить&raquo; рядом с выбранным элементом';

$lang['Select_template'] = 'Выберите шаблон';

$lang['Style'] = 'Стиль';
$lang['Template'] = 'Шаблон';
$lang['Install'] = 'Установить';
$lang['Download'] = 'Downloads';

$lang['Edit_theme'] = 'Изменить цветовую схему';
$lang['Edit_theme_explain'] = 'Здесь вы можете изменить настройки выбранной цветовой схемы.';

$lang['Create_theme'] = 'Создать цветовую схему';
$lang['Create_theme_explain'] = 'Здесь вы можете создать новую цветовую схему для выбранного шаблона. При указании кодов цветов не включайте знак \'#\', т.е.: CCCCCC подходит, #CCCCCC - нет.';

$lang['Export_themes'] = 'Экспорт цветовых схем';
$lang['Export_explain'] = 'Здесь вы сможете экспортировать цветовую схему для выбранного шаблона. Выберите шаблон из списка, и программа попытается создать файл с конфигурацией схемы и записать его в каталог с выбранным шаблоном. Если файл не удастся записать, то у вас будет возможность скачать его. Для того, чтобы программа могла записать файл, вам надо дать серверу права на запись в каталог с выбранным шаблоном. За дополнительной информацией обратитесь к руководству пользователя phpBB.';

$lang['Theme_installed'] = 'Выбранная цветовая схема была успешно установлена';
$lang['Style_removed'] = 'Стиль был удалён из базы. Для полного удаления стиля с вашей системы удалите соответствующий каталог из каталога с шаблонами.';
$lang['Theme_info_saved'] = 'Информация о цветовой схеме для выбранного шаблона была сохранена. Вы должны вернуть права ТОЛЬКО ДЛЯ ЧТЕНИЯ на файл theme_info.cfg и/или каталог с выбранным шаблоном.';
$lang['Theme_updated'] = 'Выбранная тема была изменена. Не забудьте экспортировать её настройки в файл настроек цветовой схемы!';
$lang['Theme_created'] = 'Цветовая схема создана. Не забудьте экспортировать её настройки в файл настроек цветовой схемы!';

$lang['Confirm_delete_style'] = 'Вы уверены, что хотите удалить этот стиль?';

$lang['Download_theme_cfg'] = 'Программа не смогла записать файл с информацией о цветовой схеме. Нажмите на кнопку, чтобы скачать этот файл через браузер. После того, как вы его скачаете, вы сможете записать его в каталог с шаблонами и, если захотите, подготовить ваши шаблоны к распространению.';
$lang['No_themes'] = 'К выбранному шаблону не присоединено ни одной цветовой схемы. Щёлкните по ссылке слева, чтобы создать схему.';
$lang['No_template_dir'] = 'Не могу открыть каталог с шаблонами, он либо закрыт на чтение для сервера, либо не существует.';
$lang['Cannot_remove_style'] = 'Выбранный вами стиль является стилем по умолчанию для форумов и не может быть удалён. Измените стиль по умолчанию и попробуйте ещё раз.';
$lang['Style_exists'] = 'Выбранное имя стиля уже существует, вернитесь назад и выберите другое имя.';

$lang['Click_return_styleadmin'] = '%sВернуться к управлению стилями%s';

$lang['Theme_settings'] = 'Настройки цветовой схемы';
$lang['Theme_element'] = 'Элемент цветовой схемы';
$lang['Simple_name'] = 'Имя';
$lang['Value'] = 'Значение';
$lang['Save_Settings'] = 'Сохранить настройки';

$lang['Stylesheet'] = 'Файл стилей CSS';
$lang['Background_image'] = 'Фоновое изображение';
$lang['Background_color'] = 'Цвет фона';
$lang['Theme_name'] = 'Название цветовой схемы';
$lang['Link_color'] = 'Цвет ссылок';
$lang['Text_color'] = 'Цвет текста';
$lang['VLink_color'] = 'Цвет посещённых ссылок';
$lang['ALink_color'] = 'Цвет активных ссылок';
$lang['HLink_color'] = 'Цвет ссылок под курсором';
$lang['Tr_color1'] = 'Цвет строки таблицы 1';
$lang['Tr_color2'] = 'Цвет строки таблицы 2';
$lang['Tr_color3'] = 'Цвет строки таблицы 3';
$lang['Tr_class1'] = 'Класс строки таблицы 1';
$lang['Tr_class2'] = 'Класс строки таблицы 2';
$lang['Tr_class3'] = 'Класс строки таблицы 3';
$lang['Th_color1'] = 'Цвет шапки таблицы 1';
$lang['Th_color2'] = 'Цвет шапки таблицы 2';
$lang['Th_color3'] = 'Цвет шапки таблицы 3';
$lang['Th_class1'] = 'Класс шапки таблицы 1';
$lang['Th_class2'] = 'Класс шапки таблицы 2';
$lang['Th_class3'] = 'Класс шапки таблицы 3';
$lang['Td_color1'] = 'Цвет ячейки таблицы 1';
$lang['Td_color2'] = 'Цвет ячейки таблицы 2';
$lang['Td_color3'] = 'Цвет ячейки таблицы 3';
$lang['Td_class1'] = 'Класс ячейки таблицы 1';
$lang['Td_class2'] = 'Класс ячейки таблицы 2';
$lang['Td_class3'] = 'Класс ячейки таблицы 3';
$lang['fontface1'] = 'Шрифт 1';
$lang['fontface2'] = 'Шрифт 2';
$lang['fontface3'] = 'Шрифт 3';
$lang['fontsize1'] = 'Размер шрифта 1';
$lang['fontsize2'] = 'Размер шрифта 2';
$lang['fontsize3'] = 'Размер шрифта 3';
$lang['fontcolor1'] = 'Цвет шрифта 1';
$lang['fontcolor2'] = 'Цвет шрифта 2';
$lang['fontcolor3'] = 'Цвет шрифта 3';
$lang['span_class1'] = 'Класс выделения 1';
$lang['span_class2'] = 'Класс выделения 2';
$lang['span_class3'] = 'Класс выделения 3';
$lang['img_poll_size'] = 'Размер картинки голосования [ пикселы ]';
$lang['img_pm_size'] = 'Размер картинки ЛС [ пикселы ]';



//
// Install Process
//
$lang['Welcome_install'] = 'Добро пожаловать в установку phpBB 2!';
$lang['Initial_config'] = 'Основные настройки';
$lang['DB_config'] = 'Настройки базы данных';
$lang['Admin_config'] = 'Настройки админа';
$lang['continue_upgrade'] = 'Как только вы скачаете файл настроек на ваш компьютер, вы можете нажать кнопку &laquo;Продолжить обновление&raquo; для продолжения процесса. Пожалуйста, не закачивайте файл настроек на сервер до завершения процесса обновления.';
$lang['upgrade_submit'] = 'Продолжить обновление';

$lang['Installer_Error'] = 'В процессе установки возникла ошибка';
$lang['Previous_Install'] = 'Была обнаружена предыдущая установка';
$lang['Install_db_error'] = 'При попытке обновить базу данных возникла ошибка';

$lang['Re_install'] = 'Предыдущая установка всё ещё активна. <br /><br />Если вы хотите установить phpBB 2 заново, вы должны нажать кнопку &laquo;Да&raquo; внизу. Учтите, что при этом будут уничтожены все имеющиеся данные, никаких копий сделано не будет! Ранее использовавшиеся имя и пароль администратора будут вновь созданы после переустановки, остальные настройки будут потеряны. <br /><br />Как следует подумайте, прежде чем нажимать &laquo;Да&raquo;!';

$lang['Inst_Step_0'] = 'Спасибо вам за выбор phpBB 2. Для продолжения установки укажите, пожалуйста, требуемые сведения. Учтите, что база данных, в которую вы устанавливаете phpBB 2, уже должна существовать. Если вы устанавливаете в БД, использующую ODBC (например, MS Access), вам надо сначала создать для неё DSN.';

$lang['Start_Install'] = 'Начать установку';
$lang['Finish_Install'] = 'Закончить установку';

$lang['Default_lang'] = 'Язык по умолчанию';
$lang['DB_Host'] = 'Имя сервера БД / DSN';
$lang['DB_Name'] = 'Название базы данных';
$lang['DB_Username'] = 'Имя пользователя БД';
$lang['DB_Password'] = 'Пароль к БД';
$lang['Database'] = 'База данных';
$lang['Install_lang'] = 'Выберите язык для установки';
$lang['dbms'] = 'Тип базы данных';
$lang['Table_Prefix'] = 'Префикс для таблиц в базе данных';
$lang['Admin_Username'] = 'Имя администратора';
$lang['Admin_Password'] = 'Пароль администратора';
$lang['Admin_Password_confirm'] = 'Пароль администратора [ повторите ]';

$lang['Inst_Step_2'] = 'Была создана учётная запись администратора. Основная установка на этом закончена. Теперь вы будете переправлены на страницу, с которой вы сможете настроить новую установку. Обязательно проверьте раздел Основных настроек и внесите необходимые изменения. Спасибо вам за выбор phpBB 2.';

$lang['Unwriteable_config'] = 'Запись в файл настроек невозможна. Вы сможете скачать копию файла, если нажмёте соответствующую кнопку. Вам надо будет закачать этот файл в каталог, в который вы установили phpBB 2. Как только это будет сделано, вы сможете войти в систему, используя ранее введённые имя и пароль администратора, и перейти в администраторский раздел (ссылка будет внизу каждой страницы), чтобы проверить основные настройки. Спасибо вам за выбор phpBB 2.';
$lang['Download_config'] = 'Скачать файл настроек';

$lang['ftp_choose'] = 'Выберите метод скачивания';
$lang['ftp_option'] = '<br />В этой версии PHP включены возможности FTP, вы можете попробовать сначала автоматически закачать файл настроек по FTP в нужный каталог.';
$lang['ftp_instructs'] = 'Вы решили закачать файл настроек по FTP в каталог, содержащий phpBB 2. Пожалуйста, укажите информацию, требуемую для осуществления этого процесса. Учтите, что путь FTP должен быть полным путём к вашей установке phpBB 2, как если бы вы пользовались обычным клиентом FTP.';
$lang['ftp_info'] = 'Укажите настройки FTP';
$lang['Attempt_ftp'] = 'Попробовать закачать файл настроек по FTP';
$lang['Send_file'] = 'Просто прислать файл, я закачаю его вручную';
$lang['ftp_path'] = 'Путь FTP к каталогу phpBB 2';
$lang['ftp_username'] = 'Имя пользователя для FTP';
$lang['ftp_password'] = 'Пароль для FTP';
$lang['Transfer_config'] = 'Начать закачку';
$lang['NoFTP_config'] = 'Попытка закачать файл настроек по FTP завершилась неудачей. Пожалуйста, скачайте файл настроек и поместите его в нужный каталог вручную.';

$lang['Install'] = 'Установка';
$lang['Upgrade'] = 'Обновление';


$lang['Install_Method'] = 'Выберите метод установки';

$lang['Install_No_Ext'] = 'Конфигурация PHP на вашем сервере не поддерживает выбранную вами СУБД';

$lang['Install_No_PCRE'] = 'Для работы phpBB2 требуется модуль Перл-совместимых регулярных выражений, который, видимо, отключен в вашей конфигурации PHP!';
$lang['proxy_title'] = 'Блокирование регистрации через прокси-сервера';
$lang['proxy_desc'] = 'На этой страничке Вы сможете настроить возможность проверять IP-адреса пользователей портала на наличие входа через прокси-сервер.';
$lang['proxy_test'] = 'Проверить IP-адрес';
$lang['proxy_test_desc'] = 'Проверить, действительно ли выбранный IP-адрес использует прокси-сервер. Действует, даже при отключенном МОДе Блокировки прокси-серверов.';
$lang['proxy_ip'] = 'IP-адрес';
$lang['proxy_enable'] = 'Блокировка использования прокси-серверов';
$lang['proxy_ban'] = 'Блокировать открытые прокси-серверы';
$lang['proxy_ban_explain'] = 'Блокировать IP-адрес, если он использует прокси.';
$lang['proxy_timeout'] = 'Время ожидания соединения';
$lang['proxy_timeout_explain'] = 'Чем больше значение, тем более точно произведется обнаружение прокси, но пользователи, пытающиеся регистрироваться, должны будут дольше ждать.';
$lang['proxy_seconds'] = 'секунд';
$lang['proxy_minutes'] = 'минут';
$lang['proxy_hours'] = 'часов';
$lang['proxy_days'] = 'дней';
$lang['proxy_weeks'] = 'недель';
$lang['proxy_months'] = 'месяцев';
$lang['proxy_years'] = 'лет';
$lang['proxy_type'] = 'Тип';
$lang['proxy_last_checked'] = 'Последняя проверка';
$lang['proxy_port'] = 'Порт';
$lang['proxy_ports'] = 'Порты для сканирования';
$lang['proxy_ports_explain'] = 'Теоретически, до 64 портов могут быть одновременно просмотрены, но практически, общее количество должно сводиться к минимуму.';
$lang['proxy_cache_time'] = 'Время кэша';
$lang['proxy_cache_time_explain'] = 'Определяет, как часто проверять один и тот-же IP-адрес. Если ввести 0, то IP-адреса никогда не будут проверяться дважды.';
$lang['proxy_user_agent'] = 'Строка User-Agents';
$lang['proxy_user_agent_explain'] = 'Определяет, как запросы HTTP должны идентифицировать себя при попытке соединиться с прокси.';
$lang['proxy_debug'] = 'Отладочная информация';
$lang['proxy_settings'] = 'Настройки МОДа';
$lang['proxy_list_desc'] = 'Перечисляются три последних использованных прокси.';
$lang['proxy_sample_http_1'] = 'Пример HTTP-запроса № 1';
$lang['proxy_sample_http_2'] = 'Пример HTTP-запроса № 2';
$lang['proxy_sample_sql'] = 'Пример SQL-запроса';
$lang['proxy_exec_time'] = 'Время выполнения';
$lang['proxy_none'] = 'Прокси-сервера не обнаружены.';
$lang['proxy_connect_error'] = 'Невозможно соединиться с %s для проверки процессов<br /><b>Ошибка %d</b>: %s';
$lang['proxy_testing'] = 'Проверяю <b>%s</b>...';
$lang['proxy_hostname'] = 'Имя хоста <b>%s</b>';
$lang['proxy_check'] = 'Проверить';
$lang['proxy_view_list'] = 'ПРосмотреть список';
$lang['proxy_deleted'] = '%s был успешно удален.';
$lang['proxy_download'] = 'Скачать как текст';
$lang['proxy_return'] = 'Нажмите %sздесь%s для возврата на предыдущую страницу';
$lang['proxy_name'] = 'Блокировка прокси';

// Additional Stuff for phpBB2 Plus only ! Translators should get original Language Files for phpBB 2.0.8
// for the language they want to translate from http://www.phpbb.com/downloads.php. Then they need to translate 
// the following stuff only and use the rest from the original language files !

// Start add - Birthday MOD
$lang['Birthday_required'] = 'Заставить пользователей указать свой день рождения';
$lang['Enable_birthday_greeting'] = 'Включить поздравления с днем рождения';
$lang['Birthday_greeting_expain'] = 'Пользователи, которые указали свой день рождения, могут получить поздравления, когда посещают форумы';
$lang['Next_birthday_greeting'] = 'Следующий день рождения...';
$lang['Next_birthday_greeting_expain'] = 'Это поле показывать план на следующий год, пользователей, которых надо поздравить';
$lang['Wrong_next_birthday_greeting'] = 'Следующий год с днями рождения был со сбоями, попробуйте снова';
$lang['Max_user_age'] = 'Максимальный возраст';
$lang['Min_user_age'] = 'Минимальный возраст';
$lang['Birthday_lookforward'] = 'Дни рождения, заранее';
$lang['Birthday_lookforward_explain'] = 'За сколько дней скрипт должен отметить дни рождения';
// End add - Birthday MOD

// Start add - Last visit MOD
$lang['Hidde_last_logon'] = "Спрятать последнее время входа"; 
$lang['Hidde_last_logon_expain'] = "Если да, то последнее время входа скрыто для всех кроме администраторов"; 
// End add - Last visit MOD

// FLAGHACK-start
$lang['Flags'] = 'Флаги';
$lang['Flags_title'] = 'Управление флагами';
$lang['Flags_explain'] = 'Используя эту форму вы можете добавлять, редактировать, просматривать и удалять флаги. Вы также можете создать другой флаг, он будет добавлен в список';
$lang['Add_new_flag'] = 'Добавить новый флаг';
$lang['Flag_name'] = 'Название';
$lang['Flag_pic'] = 'Изображение';
$lang['Flag_image'] = 'Изображение флага (в папке images/flags/)';
$lang['Flag_image_explain'] = 'Используйте пункт, если есть небольшое изображение';
$lang['Must_select_flag'] = 'Вы должны выбрать флаг';
$lang['Flag_updated'] = 'Флаг успешно обновлен';
$lang['Flag_added'] = 'Флаг успешно добавлен';
$lang['Flag_removed'] = 'Флаг успешно удален';
$lang['No_update_flags'] = 'Флаг успешно удален. Однако, пользователи, использующие этот флаг, остались.  Вам надо вручную сбросить флаги в учетных записях';
$lang['Flag_confirm'] = 'Удалить флаг' ;
$lang['Confirm_delete_flag'] = 'Вы действительно хотите удалить выбранный флаг?' ;
$lang['Click_return_flagadmin'] = 'Нажмите %sздесь%s для возврата на страницу управления флагами';
// FLAGHACK-end

// Start Additional Language Stuff phpBB2 Plus specific
$lang['Plus_Settings'] = 'Настройки phpBB2 Plus';
$lang['Enable_indexlinks'] = 'Показывать ссылки на главной странице';
$lang['Indexlinks_explain'] = 'Вы можете включить или выключить отображение ссылок';
$lang['General_Plusconfig'] = 'Конфигурация phpBB2 Plus';
$lang['Plusconfig_explain'] = 'Вы можете настроить phpBB2 Plus здесь';
$lang['Index_Layout'] = 'Конфигурация phpBB2 Plus';
$lang['Plusstyle_explain'] = 'Вы можете выбрать шаблон форума здесь. Вы можете выбрать шаблон phpBB2 Plus (Онлайн статистика в правой части) или стандартный шаблон phpBB2 (без онлайн статистики).';
$lang['Plusstyle1'] = 'phpBB2';
$lang['Plusstyle2'] = 'Plus';
$lang['Plusstyle3'] = 'Н/Д';
$lang['Enable_defaultavatar'] = 'Стандартная аватара';
$lang['Defaultavatar_explain'] = 'Вы можете выбрать стандартную аватару для пользователей, которые не выбрали свою аватару. Вы обязаны скопировать изображение, которое будет выбрано, под именем default_avatar.gif в папке /images';
$lang['Enable_quickreply'] = 'Включить быстрый ответ';
$lang['Quickreply_explain'] = 'Вы можете включить или выключить форму быстрого ответа';
$lang['Enable_shoutbox'] = 'Включить Чатбокс';
$lang['Shoutbox_explain'] = 'Вы можете включить или отключить чатбокс';
$lang['Shoutbox_yes_reg'] = 'Включенно только для зарегистрированных';
$lang['Shoutbox_portal'] = 'Только портал';
$lang['Shoutbox_portal_reg'] = 'Только портал (рег.)';
$lang['Shoutbox_index'] = 'Только на форуме';
$lang['Shoutbox_index_reg'] = 'Только на форуме (рег.)';
$lang['Shoutbox_yes'] = 'Вкл.';
$lang['Shoutbox_no'] = 'Выкл.';
$lang['Enable_Lastvisit'] = 'Включить отображение последнего посещения на форуме';
$lang['Lastvisit_explain'] = 'Вы можете включить или выключить отображение пользователей за сегодня (Последнее посещение) на форумах';
$lang['Lastvisit_24guest'] = 'Сегодня + Гости(!!увеличивает нагрузку)'; 
$lang['Enable_Gentime'] = 'Включить статистику генерации страницы в нижнем колонтитуле';
$lang['Gentime_Explain'] = 'Вы можете включить или отключить дисплей статистики времени генерации страницы в нижнем колонтитуле форумов. Это показывает PHP и SQL cтатистику';
$lang['Enable_Bannerhack'] = 'Включить банеры';
$lang['Bannerhack_explain'] = 'Вы можете включить или отключить баннеры';
$lang['Confirm_code_guestpost'] = 'Включить визуальное подтверждение для гостей';
$lang['Confirm_guestpost_Explain'] = 'Требует гостей ввести код изображения для посылки поста.';
$lang['Fulltext_Config'] = 'Включить полнотекстовый поиск в б.д.';
$lang['Fulltext_Explain'] = 'Если вы впервые запускаете этот запрос в б.д., вы можете использовать полнотекстовый поиск в MySQL.';
// End additional Language Stuff phpBB2 Plus specific 

//
// Bookmark Mod
//
$lang['Max_bookmarks_links'] = 'Максимальное число закладок';
$lang['Max_bookmarks_links_explain'] = 'Максимальное число закладок. Эта информация для Mozilla. Введите 0 для отключения функции.';

// Admin Account Actions Mod
$lang['Deleted_user'] = "Пользователь с идентификатором #%d удален"; //%d = user id
$lang['Activate_title'] = 'Действия с аккаунтом';
$lang['Reg_date'] = 'Зарегистрирован';
$lang['Activate'] = 'Активировать';
$lang['Actions'] = 'Действия';
$lang['Waiting_1'] = '(ждет активации с %d)'; // %d = day
$lang['Waiting_2'] = '(ждет активации с %d)'; // %d = days
$lang['No_users'] = 'Нет пользователей, ожидающих активации.';
$lang['Total_member'] = '<b>%d</b> пользователь ждет активации.';
$lang['Total_members'] = '<b>%d</b> пользователей ждут активации.';

// Start add - Fully integrated shoutbox MOD
$lang['Prune_shouts'] = 'Авточистка криков';
$lang['Prune_shouts_explain'] = 'Число дней перед удалением криков, если 0, то авточистка отключена';
// End add - Fully integrated shoutbox MOD


//
// mod : ezportal Admin
//
$lang['EZPortal_Config'] = 'Конфигурация EZPortal';
$lang['EZPortal_Portal_settings'] = 'Настройки EZPortal';
$lang['Welcome_Text'] = 'Приветствие';
$lang['Number_of_News'] = 'Количество новостей';
$lang['News_length'] = 'Длина новостей';
$lang['News_Forum'] = 'Форумы новостей';
$lang['Poll_Forum'] = 'Форумы опросов';
$lang['Number_Recent_Topics'] = 'Количество последних тем';
$lang['Number_Recent_Files'] = 'Количество последних файлов';
$lang['Last_Seen'] = 'Последние пользователи на форумах';
$lang['Comma'] = 'Разделите идентификаторы форумов запятой';
$lang['Exceptional_Forum'] = 'Форумы для последних тем, например, 2,4,10';
$lang['Exceptional_Comma'] = 'Введите идентификатор(ы) Форума(ов), которые Вы <b>не</b> хотите видеть в разделе Последних тем в портале.';
$lang['Picture_cat_id'] = 'Категории, последние изображения которых вы хотите изображать. Выставьте 0 для отображения всех категорий';
$lang['Picture_number'] = 'Число изображений в портале';
$lang['Picture_all'] = 'Скажите <b>Да</b>, если вы хотите отображать также личные фотографии, в противном случае будут отображаться только общие фотографии.';
$lang['Picture_sort'] = 'Скажите <b>Да</b>, если вы хотите отображать любое фотографии, в противном случае будут отображаться последние фотографии.';
$lang['Recent_Pic_Settings'] = 'Параметры для последних фото в портале';
$lang['Pic_Comma'] = 'Разделите категории через запятую';
//

//  END ezportal Admin
//
// Start add - Yellow card admin MOD
$lang['Ban'] = 'Бан';
$lang['Max_user_bancard'] = 'Максимальное число предупреждений';
$lang['Max_user_bancard_explain'] = 'Если пользователь получит большее количество желтых карточек, чем разрешено, то он будет забанен';
$lang['ban_card'] = 'Желтая карта';
$lang['ban_card_explain'] = 'Пользователь будет забанен, если превысит %d желтых карт';
$lang['Greencard'] = 'Разбанить';
$lang['Bluecard'] = 'Отправить отчет';
$lang['Bluecard_limit'] = 'Интервал синей карты';
$lang['Bluecard_limit_explain'] = 'Уведомить модераторов снова за каждую x синюю карту в сообщении';
$lang['Bluecard_limit_2'] = 'Ограничение синих карт';
$lang['Bluecard_limit_2_explain'] = 'Первое уведомление модераторам отправлено, когда сообщение наберет определенное количество синих карт';
$lang['Report_forum']= 'Сообщить о форуме';
$lang['Report_forum_explain'] = 'Заполните ID форумов, где отчеты пользователей отмечены, значение 0 выключит эту функцию, пользователи обязаны отмечать доступ в этот форум';

// Start add - Protect user account MOD
$lang['user_password_settings'] = 'Настройки паролей';
$lang['Max_login_error'] = 'Число запросов перед блокировкой пользователя';
$lang['Max_login_error_explain'] = 'Если пользователь вводит неверный пароль, снова, тогда его аккаунт временно блокируется, введите сколько раз может быть введен неверный пароль перед блокировкой';
$lang['Block_time'] = 'Время блокировки';
$lang['Block_time_explain'] = 'На сколько минут заблокируется аккаунт, если пароль введен неправильно больше указанного количества';
$lang['Password_complex'] = 'Комплекс пароль';
$lang['Password_complex_explain'] = 'Пользователи могут совмещать все символы';
$lang['Password_len'] = 'Минимальная длина пароля';
$lang['Password_len_explain'] = 'Правильное значение между [ 1 - 32 ]';
$lang['Password_not_login'] = 'Пароль отличается от имени';
$lang['Password_not_login_explain'] = 'Пароль должен отличаться от имени пользователя';
$lang['Account_block'] = 'Аккаунт заблокирован';
$lang['Account_block_explain'] = 'Здесь вы можете просмотреть/задать или сбросить блок информации пользователей';
$lang['Block_until'] ='Заблокирован до: %s';// %s is substituded with the date/time
$lang['Block_by'] = 'Заблокирован по IP: %s';// %s is substituded with the ip addr.
$lang['Last_block_by'] = 'Последний заблокирован по IP: %s';// %s is substituded with the ip addr.
$lang['Unblock_user'] ='Разблокировать аккаунт';
$lang['Block_user'] ='Заблокировать аккаунт на %s минут';// %s is substituded with the date/time
$lang['Badlogin_count'] = 'Число неправильных входов';
$lang['Force_new_passwd'] = 'Заставить пользователя сменить пароль при входе';
$lang['Force_new_passwd_detail'] = 'Выберите здесь, чтобы заставить этого пользователя изменить его/ее пароль при следующем входе в систему.';
$lang['Password_intervall'] = 'Дней перед тем, как заставить пользователей сменить пароль';
$lang['Password_intervall_explain'] = 'Введите число дней через которое Пользователи вынуждены будут изменить их пароль. Устанавление этого значения <b> 0 </b> отключит эту функцию!';
$lang['Password_expire'] = 'Этот пароль будет недействителен: %s';
// End add - Protect user account MOD

// Start add - Prune users MOD
$lang['Prune_users'] = 'Чистка пользователей';
// End add - Prune users MOD

// Start add - Admin add user MOD
$lang['Create_user'] = 'Создать нового пользователя';
$lang['Create_user_explain'] = 'Вы хотите создать нового пользователя. При создании скрипт проверит данные пользователя %s, ID этого пользователя будет в admin_users.php, вы можете изменить это значение ID, которое будет использовано.<br />Есть 2 исключения: <br />1. Пароль пользователя будет "%s", если он не был указан на странице администратора<br />2. email должен быть указан';
// End add - Admin add user MOD

$lang['Post_count'] = 'Считать сообщения в этом форуме?';

$lang['Contact_Config'] = 'Контактный EMail';
$lang['Contact_Explain'] = 'Введите EMail-адрес, который будет введен в контактные формы';

//
// Acronyms
//
$lang['Acronyms_title'] = 'Управление акронимами';
$lang['Acronyms_explain'] = 'В этой панели вы можете добавить, редактировать и удалить акронимы, которые будут автоматически добавлены в сообщения на форуме.';
$lang['Acronym'] = 'Акроним';
$lang['Acronyms'] = 'Акронимы';
$lang['Edit_acronym'] = 'Редактировать акроним';
$lang['Description'] = 'Описание';
$lang['Add_new_acronym'] = 'Добавить акроним';
$lang['Update_acronym'] = 'Обновить акроним';

$lang['Must_enter_acronym'] = 'Вы должны ввести акроним и его описание';
$lang['No_acronym_selected'] = 'Акронимы не выбраны для редактирования';

$lang['Acronym_updated'] = 'Выбранный акроним был успешно обновлен';
$lang['Acronym_added'] = 'Акроним был успешно добавлен';
$lang['Acronym_removed'] = 'Выбранный акроним был успешно удален';

$lang['Click_return_acronymadmin'] = 'Нажмите %sздесь%s для возврата на страницу управления акронимами';

// Disable Board Message Mod
$lang['Board_disable_msg'] = 'Сообщение о выключенных форумах';
$lang['Board_disable_msg_explain'] = 'Текст будет отображен, если "Сообщение о выключенных форумах" включено.';

// Install Process
$lang['Welcome_install'] = 'Добро пожаловать в установку phpBB 2 Plus';
$lang['Admin_intro'] = 'Спасибо за выбор phpBB2 Plus в качестве вашего форума. Это краткое описание данного форума. Вы можете вернуться на эту страницу, нажав на ссылку <u>Главная страница</u> в левой панели. Для возвращения к главной панели, нажмите на изображение phpBB в левой панели. Другие ссылки в левой части экрана помогут вам улучшить ваш форум. Каждая страница имеет инструкцию по использованию.';
$lang['Inst_Step_0'] = 'Спасибо за выбор phpBB2 Plus. Для установки введите все данные в поля ниже. Заметьте, что база данных должна уже существовать. В данный момент поддерживается <b>только MySQL</b> в phpBB2 Plus.';

$lang['Absence_user_allowed'] = 'Разрешить пользователям включать отсутствие.<br />Если НЕТ, то только модераторы и администраторы смогут делать это.';
$lang['Mod_able_sent_absent'] = 'Разрешить модераторам отправлять сообщения отсутствующим пользователям';
$lang['Absent_button_on_username'] = 'Разместить значок отсутствия рядом с именем пользователя<br />Если НЕТ, то значок будет размещен вместо кнопки email.';

$lang['Portal_thumb_size'] = 'Размер иконки портала для последних изображений (пиксел)';

// ShortURLs
$lang ['Enable_Shorturls'] = 'Включить короткие URL';
$lang ['Shorturls_explain'] = 'Здесь Вы можете включить статические ссылки на форуме (.html). Для использования этой функции <b>ваш ВЕБ-сервер ДОЛЖЕН использовать апач с загруженным Модулем mod_rewrite!</b>. Вы также должны сделать необходимые изменения в файлах .htaccess.shorturl и переименовывать их в .htaccess! Оригинал .htaccess Файл в корневой папке Форумов должен быть удален!';
$lang ['Disable_Sid'] = 'Отключить идентификаторы сеансов для незарегистрированных пользователей (и боты, подобные Googlebot)';
$lang ['Disable_Sid_Explain'] = 'Если Вы выбирете, Да, идентификаторы сеансов будут отключены в Ваших URL Форума для незарегистрированных пользователей и ботов. Поскольку Googlebot также работает как незарегистрированный пользователь.';

// Antirobot Switching
$lang['Enable_Antirobot'] = 'Включить визуальное подтверждение';
$lang['Antirobot_Explain'] = 'Отображает картинку с символами, необходимыми для регистрации.';
//
//

//Admin Users List Addon
$lang ['Admin_Users_List'] = 'Список Пользователей';
$lang ['There_are'] = 'Где';
$lang ['Boardmembers'] = 'Члены вашего портала';
$lang ['ID'] = 'ID';
$lang ['Last_Visit'] = 'Последнее Посещение';
$lang ['Active'] = 'Активный';
$lang ['Permission'] = 'Права доступа';

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Отключить регистрацию';
$lang['registration_status_explain'] = 'Это отключит регистрацию новых пользователей на Вашем портале.';
$lang['registration_closed'] = 'Причина отключения регистрации';
$lang['registration_closed_explain'] = 'Текст, который поясняет причины закрытия регистрации, который появляется, когда новый пользователь попробует зарегистрироваться. Оставьте пустым, чтобы отображался заданный по умолчанию текст объяснения.';
// END Disable Registration MOD

$lang['Plus'] = 'Plus';
$lang['Portal'] = 'Портал';
$lang['Banner'] = 'Банер';
$lang['Org. Configuration'] = 'Ориг. конфигурация';
$lang['News Admin'] = 'Администрирование новостей';
$lang['Download'] = 'Закачки';
$lang['Email_List'] = 'Список EMail';
$lang['Users List'] = 'Список пользователей';

//
// Version Check
//
$lang ['Version_up_to_date'] = 'У вас самая свежая версия phpBB.';
$lang ['Version_not_up_to_date'] = 'Для Вашей версии <b>есть</b> обновления. Модификации, доступные для вашей версии phpBB находятся на <href = "http://www.phpbb.com/downloads.php" target = "_new"> http://www.phpbb.com/downloads.php </a>.';
$lang ['Latest_version_info'] = 'Последняя доступная версия - <b>phpBB %s</b>.';
$lang ['Current_version_info'] = 'Ваша версия - <b>phpBB %s</b>.';
$lang ['Connect_socket_error'] = 'Невозможно установить соединение к серверу phpBB, сообщение об ошибке: <br />%s';
$lang ['Socket_functions_disabled'] = 'Невозможно использовать функции подключения.';
$lang ['Mailing_list_subscribe_reminder'] = 'Для получения последней информации относительно модификаций к phpBB воспользуйтесь <href = "http://www.phpbb.com/support / " target = "_new"> подпиской на нашу рассылку</a>. ';
$lang['Version_information'] = 'Информация о версии';
//
//Added for Topposters Configuration in Portal
$lang['Number_Topposters'] = 'Номерация лучших постеров';
$lang['Topposters_Explain'] = 'Конфигурация количества топпостеров, показываемых в портале. 0 отключит эту функцию.';
//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Вход пользователей';
$lang['Max_login_attempts_explain'] = 'Количество разрешенных попыток входа.';
$lang['Login_reset_time'] = 'Блокировка пользователей';
$lang['Login_reset_time_explain'] = 'Время блокировки';

//Advance Admin Index
//
$lang['Board_statistic'] = 'Статистика портала';
$lang['Database_statistic'] = 'Статистика БД';
$lang['Version_info'] = 'Информация о версиях';
$lang['Thereof_deactivated_users'] = 'Количество неактивированных пользователей';
$lang['Thereof_Moderators'] = 'Количество Модераторов';
$lang['Thereof_Administrators'] = 'Количество Администраторов';
$lang['Deactivated_Users'] = 'Пользователи, которых необходимо активировать';
$lang['Users_with_Admin_Privileges'] = 'Пользователи с правами Админа';
$lang['Users_with_Mod_Privileges'] = 'Пользователи с правами Модератора';
$lang['DB_size'] = 'Размер БД';
$lang['Version_of_board'] = 'Версия <a href="http://www.phpbb2.ru">phpbb</a>';
$lang['Version_of_PHP'] = 'Версия <a href="http://www.php.net/">PHP</a>';
$lang['Version_of_MySQL'] = 'Версия <a href="http://www.mysql.com/">MySQL</a>';

//Added for Topposters Configuration in Portal
$lang ['Number_Topposters'] = 'Число лучших тем';
$lang ['Topposters_Explain'] = 'Конфигурация для количество лучших тем, отображаемых в блоке портала лучгие темы. Установите 0, чтобы отключить этот блок';
//
// Limit Image Width MOD
//
$lang['Max_img_width'] = 'Максимальная ширина изображений в портале';
$lang['Max_img_width_explain'] = 'Укажите максимальную ширину изображений, добавляемых, используя [img] тег. Значение в пикселах.<br />Установите 0, чтобы отменить уменьшение изображений.';
//
// Limit Image Width MOD
// start PJIRC MOD

$lang['IRC'] = 'Конфигурация IRC-Чат';
$lang['xIRC_Chat'] = 'Настройки IRC-Чата';
$lang['IRC_Chat_updated'] = 'Настройки IRC-Чата успешно обновлены';
$lang['IRC_Click_return_chat'] = 'Нажмите %sздесь%s для возврата к настройкам IRC-Чата';
$lang['IRC_Chat_explain'] = 'Представленные по умолчанию параметры - для оптимального использования вашего чата. Вы можете изменять эти параметры по своему усмотрению. Если Вы сделали ошибку при изменении конфигурации и Вам требуются параметры по умолчанию, то Вы должны обратиться к запросам SQL в тексте установки.';
$lang['IRC_basic'] = 'Базовые настройки';
$lang['IRC_status'] = 'Статус чата';
$lang['IRC_status_open'] = 'Открыт';
$lang['IRC_status_closed'] = 'Закрыт';
$lang['IRC_server'] = 'IRC-Сервер';
$lang['IRC_port'] = 'IRC-Порт';
$lang['IRC_channel'] = 'IRC-Канал';
$lang['IRC_language'] = 'Выберите язык по умолчанию';
$lang['IRC_template'] = 'Выберите стиль по умолчанию';
$lang['IRC_access'] = 'Контроль доступа';
$lang['IRC_popup_onoff'] = 'Открывать чат в новом окне? (иначе будет открываться на странице)';
$lang['IRC_allow_guests'] = 'Разрешить гостям входить в чат?';
$lang['IRC_guestname'] = 'Гостевое имя';
$lang['IRC_guestname_explain'] = 'Определите имена гостей - не допускает использование чисел и специальных символов!';
$lang['IRC_auth_joinlist'] = 'Авторизироваться для присоединения к списку каналов';
$lang['IRC_auth_joinlist_explain'] = 'Оставьте чистым, чтобы разрешить пользователям обращается ко всем каналам на сервере. Синтаксис для указанных каналов: none + #канал1 + #канал2 + #канал3';
$lang['IRC_buttons'] = 'Управление кнопками и полями';
$lang['IRC_show_connect'] = 'Отображать кнопку Соединить';
$lang['IRC_show_chanlist'] = 'Отображать кнопку Список каналов';
$lang['IRC_show_about'] = 'Отображать кнопку О програме';
$lang['IRC_show_help'] = 'Отображать кнопку Помощь';
$lang['IRC_show_close'] = 'Отображать кнопку Закрыть';
$lang['IRC_show_status'] = 'Отображать поле Статус';
$lang['IRC_show_dock'] = 'Отображать поле Соединения';
$lang['IRC_show_nickfield'] = 'Отображать Список имен';
$lang['IRC_time_stamp'] = 'Отображать текущее время';
$lang['IRC_topicscroller'] = 'Скорость прокрутки в основном окне';
$lang['IRC_topicscroller_definition_explain'] = 'Установить скорость прокрутки от 0 - "ВЫКЛ" до 10 - рекомендуемый максимум.';
$lang['IRC_quit'] = 'Сообщение выхода из IRC';
$lang['IRC_smilies_control'] = 'Управление смайлами';
$lang['IRC_smilies'] = 'Отображать смайлы?';
$lang['IRC_smilies_enter'] = 'Авто-отсылка смайлов по щелчку?';
$lang['IRC_smilies_count'] = 'Количество смайлов?';
$lang['IRC_smilies_count_explain'] = 'Сколько смайлов отображать под окном чата? (Рекомендуется 20)';
$lang['IRC_smilies_lines'] = 'Количество смайлов в строке?';
$lang['IRC_sound'] = 'Контроль звука';
$lang['IRC_sound_explain'] = 'Каждое поле определяет звуковой файл, который будет запущен в указанном случае. Вы можете использовать значения по умолчанию или загружать ваши собственные звуковые файлы в <b>chat_room/snd/</b> каталог. Оставляя текстовое поле чистым, Вы можете отключить звук.';
$lang['IRC_sound_beep'] = 'Звук входа в чат';
$lang['IRC_sound_beep_delay'] = 'Введите задержку выполнения звука входа в чат';
$lang['IRC_sound_query'] = 'Звук входящего сообщения';
$lang['IRC_sound_profile'] = 'Звук при открытии меню Просмотр профиля';
$lang['IRC_sound_im'] = 'Звук при открытии меню сообщений';
$lang['IRC_sound_ignore'] = 'Звук при открытии меню Игнорировать';
$lang['IRC_sound_unignore'] = 'Звук при открытии меню Не игнорировать';
$lang['IRC_sound_away'] = 'Звук при открытии Сообщения об отсуствии';
$lang['IRC_sound_back'] = 'Звук при открытии меню Назад';
$lang['IRC_sound_clear'] = 'Звук открытия меню Очистить окно';
$lang['IRC_sound_whois'] = 'Звук открытия меню Статус Кто есть кто';
$lang['IRC_sound_help'] = 'Звук при открытии меню Помощь';
$lang['IRC_soundwords_explain'] = 'Конфигурируйте слова, которые активируют звук каждый раз, когда они будут напечатаны в чате. У Вас есть два звуковых варианта, но неограниченный выбор слова до 255 символов. Введите ваши звуки, и отделите каждое слово пробелом.';
$lang['IRC_sound_sound1'] = 'Звук слов № 1';
$lang['IRC_sound_sound1words'] = 'Слова, активирующие звук № 1';
$lang['IRC_sound_sound2'] = 'Звук слов № 2';
$lang['IRC_sound_sound2words'] = 'Слова, активирующие звук № 2';
$lang['IRC_bot_control'] = 'Настройка БОТа';
$lang['IRC_bot_overall'] = 'Включить БОТ?';
$lang['IRC_bot_overall_explain'] = 'Если включено, то БОТ "Разделы справки" будет добавлен в меню.';
$lang['IRC_bot_switch1'] = 'Включить приветствие БОТа?';
$lang['IRC_bot_switch1_yes'] = 'Да';
$lang['IRC_bot_switch1_no'] = 'Нет';
$lang['IRC_bot_overall_timer'] = 'Пауза перед публикацией приветствия';
$lang['IRC_bot_switch2'] = 'Включить повторения БОТа?';
$lang['IRC_bot_switch2_yes'] = 'Да';
$lang['IRC_bot_switch2_no'] = 'Нет';
$lang['IRC_advanced'] = 'Расширенная конфигурация';
$lang['IRC_channel2'] = 'IRC-Канал № 2';
$lang['IRC_channel2_disable'] = 'Отключен';
$lang['IRC_channel2_definition_explain'] = 'Для автоматизации второго канала, переключите и введите #ИмяКанала2.';
$lang['IRC_channel3'] = 'IRC-Канал № 3';
$lang['IRC_channel3_disable'] = 'Отключен';
$lang['IRC_channel3_definition_explain'] = 'Для автоматизации третьего канала, переключите и введите #ИмяКанала3.';
$lang['IRC_multiserver'] = 'Включить Мульти-Сервер?';
$lang['IRC_multiserver_explain'] = 'См. Справку для указания команд, если не использовать автосоединение.';
$lang['IRC_multiserver_server'] = 'Второй IRC-Сервер';
$lang['IRC_multiserver_port'] = 'Второй IRC-Порт';
$lang['IRC_multiserver_delay'] = 'Пауза перед соединением на второй IRC-Сервер';
$lang['IRC_multiserver_delay_explain'] = 'Укажите в милисекундах через какое время сделать автосоединение ко второму серверу. По умолчанию установлено 60 сек.';
$lang['IRC_use_info'] = 'Суммировать информацию об использовании?';
$lang['IRC_looks'] = 'Расширенное управление стилем';
$lang['IRC_style_selector'] = 'Использовать опции Цвета, Выделенного и Подчеркивания?';
$lang['IRC_style_selector_definition'] = 'Настроить цветовую гамму';
$lang['IRC_style_selector_definition_explain'] = 'Установите цветовое правило. СИнтаксис правила: "type name index1=color1 index2=color2 ...". НЕ ИЗМЕНЯЙТЕ, если Вы не уверены в правильности своих действий!';
$lang['IRC_font_style'] = 'Использовать опции Шрифта?';
$lang['IRC_font_style_definition'] = 'Настроить опции Шрифта';
$lang['IRC_font_style_definition_explain'] = 'Установить правило шрифтов. Синтаксис правила: "type name fontname fontsize". НЕ ИЗМЕНЯЙТЕ, если Вы не уверены в правильности своих действий!';
$lang['IRC_style_nick'] = 'Формат Ников (открывающие и закрывающие тэги)';
$lang['IRC_style_nick_explain'] = 'Используйте <b>\\b для Выделенного</b>, <u>\\u для подчеркивания<u>, \\k для цвета - Синтаксис цвета: \kX,Y где X цвет текста и Y цвет фона в диапазоне цветов от 0 до 15. Используйте одиночное или комбинированное форматирование. Помните, <b>всегда</b>, закрывайте тэги и <b>всегда</b> заканчивайте \\o, чтобы сохранить пробел перед текстом!';
$lang['IRC_show_highlight'] = 'Показывать эффекты Подсветки';
$lang['IRC_highlightcolor'] = 'Цвет Подсветки';
$lang['IRC_highlightcolor_definition_explain'] = 'Установите цвет подсветки, где: 1 - черный, 4 - красный и т. д. Цвета отсортированы слева на право. Диапазон номеров 0-15.';
$lang['IRC_highlightwords'] = 'Слова Подсветки';
$lang['IRC_highlightwords_definition_explain'] = 'Укажите слова, которые будут отображаться с эффектом Подсветки через пробел.';
$lang['IRC_background_which'] = 'Выберите фоновый рисунок';
$lang['IRC_background_which_0'] = 'Нет';
$lang['IRC_background_which_1'] = 'Фон 1';
$lang['IRC_background_which_2'] = 'Фон 2';
$lang['IRC_background_which_custom'] = 'Имя файла фона';
$lang['IRC_background_custom_explain'] = 'Рекомендуется, чтобы Вы использовали автостили, выбирая Фон шаблона из варианта 1 или 2. Указанный файл фона можно использовать, если он был помещен в <b>chat_room/</b> каталог и должен иметь расширение: .jpeg. jpg. gif или .png';

// end PJIRC MOD
// Admin HTTP Referrers Mod
$lang['HTTP_Referers_Title'] = 'HTTP-Реферы';
$lang['HTTP_Referers_Explain'] = 'Здесь вы можете увидеть с каких сайтов к Вам заходят';
$lang['Referer_urls_show'] = 'Показать URLы';
$lang['Referer_urls_hide'] = 'Скрыть URLы';
$lang['Referer_host'] = 'Реферы хостов';
$lang['Referer_url'] = 'Реферы URL';
$lang['Referer_ip'] = 'IP последнего рефера';
$lang['Referer_hits'] = 'Хиты';
$lang['referer_del_success'] = 'HTTP-рефер был успешно удален.';
$lang['Click_return_referersadmin'] = 'Нажмите %sздесь%s для возврата к настройкам HTTP-реферов';
$lang['Referer_firstvisit'] = 'Первый визит';
$lang['Referer_lastvisit'] = 'Последний визит';
$lang['Confirm_delete_referer'] = 'Вы уверены, что хотите удалить этот HTTP-рефер?';
$lang['Confirm_delete_referers'] = 'Вы уверены, что хотите удалить ВСЕ HTTP-реферы?';

// Lottery Variables
$lang ['lottery_second'] = 'секунда';
$lang ['lottery_seconds'] = 'секунд';
$lang ['lottery_minute'] = 'минута';
$lang ['lottery_minutes'] = 'минут';
$lang ['lottery_hour'] = 'час';
$lang ['lottery_hours'] = 'часов';
$lang ['lottery_day'] = 'день';
$lang ['lottery_days'] = 'дня';
$lang ['lottery_no_items'] = 'Нет изделий в базе данных магазина!';
$lang ['lottery_rand'] = 'Случайно';
$lang ['lottery_statistics'] = 'Статистика лотерей';
$lang ['lottery_edit_settings'] = 'Редактировать настройки лотереи';
$lang ['lottery_no_one'] = 'не было';
$lang ['lottery_editor'] = 'Редактор лотерей';
$lang ['lottery_index_explain'] = 'Эта секция позволит Вам настроить Лотереи';
$lang ['lottery_no_item'] = 'Несуществует ниодного изделия!';
$lang ['lottery_invalid_action'] = 'Неверная команда!';
$lang ['lottery_click_to_return'] = 'Нажмите %sздесь%s для возврата к редактированию Лотерей';
$lang ['lottery_random_items_updated'] = 'Настройки случайного выбора изделия успешно обновлены!';
$lang ['lottery_item_added'] = 'Изделие успешно добавлено в лот розыгрышей!';
$lang ['lottery_item_removed'] = 'Изделие успешно удалено из лота розыгрышей!';
$lang ['lottery_updated'] = 'Лотерея успешно обновленна!';
$lang ['lottery_status'] = 'Статус Лотереи';
$lang ['lottery_add_item'] = 'Добавить изделие';
$lang ['lottery_add_items'] = 'Добавить изделие в лот';
$lang ['lottery_remove_item'] = 'Удалить изделие';
$lang ['lottery_current_items'] = 'Текущее состояние лота';
$lang ['lottery_update_settings'] = 'Обновить настройки';
$lang ['lottery_max_cost'] = 'Максимальная стоимость';
$lang ['lottery_min_cost'] = 'Минимальная стоимость';
$lang ['lottery_all_shops'] = 'Все магазины';
$lang ['lottery_from_shop'] = 'Из магазина';
$lang ['lottery_update'] = 'Обновить';
$lang ['lottery_currency'] = 'Используемая валюта';
$lang ['lottery_history'] = 'История Лотерей';
$lang ['lottery_item_pool'] = 'Лот изделий';
$lang ['lottery_full_display'] = 'Полное отображение';
$lang ['lottery_max'] = 'максимум';
$lang ['lottery_off'] = 'ВЫКЛ';
$lang ['lottery_on'] = 'ВКЛ';
$lang ['lottery_mult_tickets'] = 'Покупка больше одного билета?';
$lang ['lottery_multiple'] = 'многократно';
$lang ['lottery_single'] = 'однократно';
$lang ['lottery_tickets_allowed'] = 'Использовать билеты';
$lang ['lottery_draw_periods'] = 'Период длительности розыгрыша';
$lang ['lottery_entry_cost'] = 'Стоимость билета';
$lang ['lottery_base_amount'] = 'Стартовая сумма лотереи';
$lang ['lottery_name'] = 'Название Лотереи';
$lang ['lottery_auto_restart'] = 'Автоматический перезапуск';
$lang ['lottery_last_won'] = 'Последний выигрыш';
$lang ['lottery_pool'] = 'Лот Лотереи';
$lang ['lottery_time_left'] = 'Осталось времени до розыгрыша';
$lang ['lottery_duration_left'] = 'Следующий розыгрыш через';
$lang ['lottery_total_entries'] = 'Всего участников';
$lang ['lottery_items_table'] = 'Редактировать лот лотереи';
$lang ['lottery_items_settings'] = 'Редактировать настройки изделий';

// Lottery Error Variables
$lang ['lottery_error_updating'] = 'Ошибка обновления таблицы %s !';
$lang ['lottery_error_deleting'] = 'Ошибка удаления из таблицы %s !';
$lang ['lottery_error_selecting'] = 'Ошибка получения информацию из таблицы %s !';
$lang ['lottery_error_inserting'] = 'Ошибка вставки в таблицу %s !';
$lang ['lottery_error_variable'] = 'Не смог прочитать переменную %s !';

// Job Variables
$lang['jobs_settings'] = 'Настройка работы';
$lang['jobs_modify_settings'] = 'Изменить настройки работы';
$lang['jobs_edit_jobs'] = 'Редактировать работу пользователей';
$lang['jobs_edit_jobs_settings'] = 'Редактировать настройки работы';
$lang['jobs_create_new'] = 'Создать новую работу';
$lang['jobs_editor'] = 'Редактор работы';
$lang['jobs_edit_user'] = 'Редактировать пользователя';
$lang['jobs_edit_job'] = 'Редактировать работу';
$lang['jobs_dont_have'] = 'У них нет этой работы!';
$lang['jobs_no_action'] = 'Не выбрано действие!';
$lang['jobs_already_exists'] = 'Эта работа уже существует!';
$lang['jobs_already_has_one'] = 'У них уже есть эта работа!';
$lang['jobs_status'] = 'Статус работы';
$lang['jobs_job_name'] = 'Название работы';
$lang['jobs_job_positions'] = 'Макимум рабочих мест';
$lang['jobs_job_type'] = 'Тип работы';
$lang['jobs_job_pay'] = 'Оплата работы';
$lang['jobs_job_time'] = 'Срок оплаты';
$lang['jobs_job_requirements'] = 'Требования';
$lang['jobs_private'] = 'ПРИВАТ';
$lang['jobs_public'] = 'Публичная';
$lang['jobs_pay_out_type'] = 'Вид выплаты';
$lang['jobs_on'] = 'ВКЛ';
$lang['jobs_off'] = 'ВЫКЛ';
$lang['jobs_max_pp'] = 'Максимум работ на одногго пользователя';
$lang['jobs_pay_pp'] = 'Оплата пользователю';
$lang['jobs_pay_all'] = 'Отплата всем';
$lang['jobs_extended'] = 'Расширенный';
$lang['jobs_compact'] = 'Компактный';
$lang['jobs_index'] = 'Экран индекса';
$lang['jobs_second'] = 'секунда';
$lang['jobs_seconds'] = 'секунд';
$lang['jobs_minute'] = 'минута';
$lang['jobs_minutes'] = 'минут';
$lang['jobs_hour'] = 'час';
$lang['jobs_hours'] = 'часов';
$lang['jobs_day'] = 'день';
$lang['jobs_days'] = 'дней';

$lang['jobs_explain_main'] = 'Здесь Вы можете редактировать настройки Работ, добавлять новые работы, редактировать старые работы и редактировать людей на работах, которые используются в настоящее время.';
$lang['jobs_explain_user'] = 'Здесь Вы можете редактировать работы, на которые пользователь нанят в настоящее время.';
$lang['jobs_explain_jobs'] = 'Здесь Вы можете редактировать определенную информацию работы, к примеру, сумма оплаты, срок оплаты и так далее.';

$lang['jobs_global_updated'] = 'Настройки работы успешно обновлены!';
$lang['jobs_updated'] = 'Работа успешно обновлена!';
$lang['jobs_deleted'] = 'Все рабочие уволены и работа успешно удалена!';
$lang['jobs_invalid_name'] = 'Неверное имя!';
$lang['jobs_created'] = 'Работа успешно создана!';
$lang['jobs_user_updated'] = 'Пользователь обновлен!';

$lang['jobs_main_link'] = 'Нажмите %sздесь%s для возврата на главную страницу настройки работ.';

//buttons
$lang['jobs_button_update'] = 'Обновить';
$lang['jobs_button_edit'] = 'Редактировать работы';
$lang['jobs_button_find'] = 'Найти пользователя';
$lang['jobs_button_job'] = 'Создать работу';
$lang['jobs_button_add'] = 'Добавить работу';
$lang['jobs_button_fire'] = 'Уволить с работы!';
$lang['jobs_button_update_job'] = 'Обновить работу';
$lang['jobs_button_delete_job'] = 'Удалить работу';

// Job Error Variables
$lang['jobs_error_updating'] = 'Ошибка обновления таблицы %s!';
$lang['jobs_error_deleting'] = 'Ошибка удаления из таблицы %s!';
$lang['jobs_error_selecting'] = 'Ошибка получения информации из таблицы %s!';
$lang['jobs_error_inserting'] = 'Ошибка вставки данных в таблицу %s!';
$lang['jobs_error_variable'] = 'Невозможно прочитать переменную %s!';
$lang['jobs_invalid_action'] = 'Неверное действие!';

// Start add - Max sessions MOD
$lang['Max_sessions'] = 'Ограничение сессий';
$lang['Max_sessions_explain'] = 'Здесь указывается макимальное количество сессий';
$lang['Max_sessions_ip'] = 'Ограничение сессий с одного IP';
$lang['Max_sessions_ip_explain'] = 'Здесь указывается максимальное количество сессий с одного IP';
// End add - Max sessions MOD

$lang['Rabbitoshi_Pets_Management']='Управление животными';
$lang['Rabbitoshi_Shop']='Магазин животных';
$lang['Rabbitoshi_settings']='Конфигурация';
$lang['Rabbitoshi_owners']='Принадлежность';


// [begin] Glance mod
$lang['Glance_anno_post_explain'] = 'Текст этого сообщения будет показываться в разделе объявлений на главной странице портала и форума.';
$lang['Glance_recent_explain'] = 'Номер последних тем будут показываться в разделе последних тем на главной странице портала и форума.';
// [end] Glance mod

//
// Jabber
//
$lang['Board_jabber_form'] = 'Рассылка jabber сообщений через форумы';
$lang['Board_jabber_form_explain'] = 'Пользователи смогут посылать друг другу jabber сообщения через форумы';

$lang['Default_jabber_language'] = 'Язык jabber-сообщений по умолчанию';

$lang['Jabber_settings'] = 'Настройки Jabber';
$lang['Jabber_server'] = 'Адрес Jabber-сервера';
$lang['Jabber_port'] = 'Порт сервера для jabber-подключений';
$lang['Jabber_resource'] = 'Ресурс пользователя, передаваемый Jabber-серверу';
$lang['Jabber_resource_explain'] = 'Например Forum_www.somedomen.com';
$lang['Jabber_username'] = 'Имя jabber пользователя';
$lang['Jabber_username_explain'] = 'Имя учетной записи зарегистрированного на Jabber-сервере пользователя';
$lang['Jabber_password'] = 'Пароль для jabber пользователя';
$lang['Jabber_password_explain'] = 'Пароль учетной записи зарегистрированного на Jabber-сервере пользователя';

//
// Begin Syntax Highlighting Mod
//
$lang['Syntax_Highlighting'] = 'Подсветка Синтаксиса';
$lang['syntax_explain'] = 'Здесь Вы можете управлять подсветкой синтаксиса сообщений с использованием BBCode\'а  [syntax]. Подсветка синтаксиса разработана на базе <a href="http://qbnz.com/highlighter">GeSHi</a>, документацию можно прочитать <a href="http://qbnz.com/highlighter/documentation.php">здесь</a>, если Вы хотите расширить возможности этого МОДа самостоятельно.';
$lang['Syntax_highlighting_advanced_mode'] = 'Подсветка синтаксиса находится в <span style="color: green;">расширенном</span> режиме. Это означает, что у Вас полный доступ ко всем возможностям этого МОДа.';
$lang['Syntax_highlighting_simple_mode'] = 'Подсветка синтаксиса находится в <span style="color: #FF6600;">простом</span> режиме. Чтобы перейти в расширенный режим, Вы должны запустить скрипт <code>install_syntax.php</code>, прилагающийся к МОДу Подсветки синтаксиса, или SQL, указанный в МОД-файле.';
$lang['Syntax_main_control'] = 'Главные настройки';
$lang['Syntax_main_control_explain'] = '<p>Здесь Вы можете управлять подсветкой на основном уровне. Вы можете выбрать один из трех вариантов:</p>

<ul class="gen">
    <li><p><strong>Включить Подсветку синтаксиса</strong>: Если Вы используете этот режим, подсвечивание синтаксиса на вашем портале будет разрешено. Пользователи смогут включать/выключить подсветку синтаксиса для себя по желанию.</p></li>
    <li><p><strong>Отключить Подсветку синтаксиса, но использовать блоки [syntax], как [code]</strong>: Выбор этого режима будет подразумевать, что bbcode [syntax] интерпретируется, как будто это был блок [code]. Пользователи не смогут использовать подсветку синтаксиса для себя, если Вы используете этот режим.</p></li>
    <li><p><strong>Отключить Подсвечтку синтаксиса</strong>: BBCode [syntax] будет заблокирован. Будет полностью отключен блок [syntax] и все упоминания об этом МОДе на странице FAQ. Эффективно скрывает факт, что этот МОД установлен. Пользователи не смогут использовать подсветку синтаксиса для себя.</p></li>
</ul>';
$lang['Syntax_cache_control'] = 'Управление Кэшированием';
$lang['Syntax_enabled'] = 'Включить Подсветку синтаксиса';
$lang['Syntax_partial'] = 'Отключить Подсветку синтаксиса, но использовать блоки [syntax], как [code]';
$lang['Syntax_disabled'] = 'Отключить Подсвечтку синтаксиса';
$lang['Syntax_update_status'] = 'Обновить статус';
$lang['Syntax_main_control_disabled'] = 'Так как Вы находитесь в простом режиме, Вы не можете изменять состояние Подсветки синтаксиса на панели Администрирования. Если Вы желаете включить/отключить Подсветку синтаксиса, откройте <code>includes/bbcode.php</code> и редактируйте соответствующие поля. Кроме того, если Вы используете директорию кэша, Вы должны очистить кэш (см. управление кэша ниже).';
$lang['Syntax_cache_control_disabled'] = 'Так как Вы находитесь в простом режиме, Вы не можете изменять состояние использования кэша. Если Вы желаете включить/отключить кэш, откройте <code>includes/bbcode.php</code> и редактируйте соответствующие поля. Кроме того, Вы должны очистить кэш после любого изменения в этой опции (см. ниже).';
$lang['Syntax_enable_cache'] = 'Включить кэш';
$lang['Syntax_update_cache_enabled'] = 'Обновлено состояние Кэша';
$lang['Syntax_clear_the_cache'] = 'Очистить Кэш';
$lang['Syntax_clear_cache_yes_no'] = 'Очистить кэш?';
$lang['Syntax_clear_cache'] = 'Очитска кэша';
$lang['Syntax_cache_options'] = 'Настройки кэша';
$lang['Syntax_bytes'] = 'байты';
$lang['Syntax_kilobytes'] = 'килобайты';
$lang['Syntax_megabytes'] = 'мегабайты';
$lang['Syntax_gigabytes'] = 'гигабайты';
$lang['Syntax_cache_dir_size'] = 'Максимальный размер каталога кэша (0 для неограниченного, иначе по крайней мере 1 КБ). Рекомендуется, чтобы Вы оставили это в неограниченном или большом объеме и использовали промежуток чистки, чтобы управлять размером кэша.';
$lang['Syntax_set_cache_options'] = 'Настройка опций кэша';
$lang['Syntax_cache_options_disabled'] = 'Так как Вы используете простой режим, Вы не можете изменить настройки кэша. По умолчанию кэш - 20 мегабайт, и элементы старше 30 дней удаляются. Если Вы желаете изменитьнастройки кэша, откройте <code>includes/bbcode.php</code> и редактируйте  соответствующие поля. Кроме того, Вы должны очистить кэш после любых изменений этой опции (см. выше).';
$lang['Syntax_seconds'] = 'секунд';
$lang['Syntax_minutes'] = 'минут';
$lang['Syntax_hours'] = 'часов';
$lang['Syntax_days'] = 'дней';
$lang['Syntax_months'] = 'месяцев';
$lang['Syntax_years'] = 'лет';
$lang['Syntax_cache_expiry_time'] = 'Сколько должно пройти времени перед тем, как кэш синтаксиса очищается (0 для неограниченного, но не рекомендую).';
$lang['Syntax_line_numbers_enabled'] = 'Использовать нумерация строк или нет (вызовет очистку кэша если изменено)';
$lang['Syntax_function_urls_enabled'] = 'Функция нумерации встроится в URL, чтобы использовать документацию (вызовет чистку кэша если изменено и обращается только к некоторым языкам, для которых есть в наличии документация).';
$lang['Syntax_general_options'] = 'Общие настройки';
$lang['Syntax_change_general_options'] = 'Изменить Общие настройки';
$lang['Syntax_language_control'] = 'Управление языками';
$lang['Syntax_advanced_language_control_explain'] = 'Используйте эту форму, чтобы управлять тем, в каких языках будет подсвечиваться синтаксис, какое имя использовать в BBCode [syntax="..."] и какое имя отображать для них. Изменение этих настроек очистит кэш.';
$lang['Syntax_simple_language_control_explain'] = 'Используйте эту форму, чтобы управлять тем, в каких языках будет подсвечиваться синтаксис, какое имя использовать в BBCode [syntax="..."] и какое имя отображать для них. Изменение этих настроек очистит кэш.';
$lang['Syntax_language_name'] = 'Имя языка';
$lang['Syntax_language_name_explain'] = 'Это - имя GeSHi-файла языка';
$lang['Syntax_language_enabled'] = 'Язык включен?';
$lang['Syntax_language_enabled_explain'] = 'Поставьте галочку, чтобы включить язык';
$lang['Syntax_language_code'] = 'Код языка';
$lang['Syntax_language_code_explain'] = 'Что должно быть вставлено [syntax=&quot;...&quot;] при подсветке этого языка';
$lang['Syntax_language_display_name'] = 'Имя языка на экране';
$lang['Syntax_language_display_name_explain'] = 'Имя языка, отображаемое  на вашем форуме';
$lang['Syntax_update_language_options'] = 'Обновить языковые опции';
$lang['Syntax_reset_language_form'] = 'Сброс формы языков';

$lang['Syntax_click_return_syntaxadmin'] = 'Нажмите %sздесь%s Для возврата к настройкам Подсветки синтаксиса';

$lang['Syntax_cache_cleared_successfully'] = 'Кэш подсветки синтаксиса успешно очищен';
$lang['Syntax_cache_not_cleared'] = 'Кэш подсветки синтаксиса не очистился';
$lang['Syntax_status_updated_successfully'] = 'Настройки Подсветки синтаксиса обновлены. Необходимо произвезти очистку кэша для получения результата.';
$lang['Syntax_status_not_updated'] = 'Статус Подсветки синтаксиса небыл обновлен, нет изменений.';

$lang['Syntax_installer_new_install'] = 'Добро пожаловать в инсталлятор SQL МОДа Подсветки синтаксиса. Этот скрипт используветься, чтобы автоматически выполнить SQL-запросы, требуемые для установки этого МОДа.<br /><br />Пожалуйста, учтите, что этот МОД является<strong>АЛЬФА-ПО</strong>. Рекомендуем Вам сделать резервное копирование вашей базы данных перед установкой этого МОДа!';
$lang['Syntax_installer_install_mod'] = 'Инсталировать МОД';
$lang['Syntax_installer_install_files_first'] = 'Вы должны выполнить модификации файлов и копирование дополнений этого МОДа перед тем, как Вы выполняите SQL-запросы в БД.';
$lang['Syntax_installer_sql_failed'] = 'Упс! По некоторым причинам, один из запросов SQL для этого МОДа невыполнен. Запрос, который невыполнен показан ниже.<br /><br />Так как это альфа-по, невозможно исправление ошибки. Если Вы выполнили SQL или установили проблему - просмотрите в .mod-файле оставшиеся команды SQL, которые должны быть выполнены, и выполните их каким-либо другим способом.';
$lang['Syntax_installer_mod_installed'] = 'Поздравляю! SQL для этого МОДа успешно установлен.<br /><br />Пожалуйста, теперь удаляет этот скрипт и убедитесь, что у Вас имеете CHMODed директории cache/syntax установлен 777 (и cache/syntax/cache.txt файл установлен 666).';
$lang['Syntax_installer_previous_install'] = 'Если Вы видите это сообщение, этот МОД успешно установлен. Удалите этот файл!';
//
// End Syntax Highlighting Mod
//

//+MOD: Search latest 24h 48h 72h
$lang['Search_latest_hours'] = 'Искать последние (часы)';
$lang['Search_latest_hours_explain'] = 'Перечислите через запятую, за сколько часов проводит поиски.';
$lang['Search_latest_hours_error'] = 'Неверные данные введены в \'Искать за последние (часы)\'.<br /><br />Пожалуйста, укажите числа через запятую.';
$lang['Search_latest_results'] = 'Искать последние (результат)';
$lang['Search_latest_results_explain'] = 'Укажите, в каком виде показывать результат поиска.';
//-MOD: Search latest 24h 48h 72h

//

//Copyright Information
$lang['site_copyright'] = 'Copyright сайта';
$lang['site_copyright_explain'] = 'Здесь можно оставить Ваш копирайт и год';
$lang['site_copyright_href'] = 'Ссылка на copyright';

// That's all Folks!
// -------------------------------------------------
//
// Logo Selector MOD
$lang['f_Logo_settings'] = 'Настройки логотипа Форума';
$lang['f_Logo_explain'] = 'Здесь Вы можете указать путь к папке с логотипами Форума, выбрать изображение из этой папки, изменить ширину и высоту изображения.';
$lang['f_Logo_path'] = 'Путь хранения логотипов Форума';
$lang['f_Logo_path_explain'] = 'Путь относительно корня phpBB к логотипам Форума, к примеру images/logo';
$lang['f_Logo'] = 'Выберите логотип Форума';
$lang['f_Logo_dimensions'] = 'Размер изображения логотипа Форума';
$lang['f_Logo_dimensions_explain'] = '(Высота x Ширина в пикселях) ';
$lang['p_Logo_settings'] = 'Настройки логотипа Портала';
$lang['p_Logo_explain'] = 'Здесь Вы можете указать путь к папке с логотипами Портала, выбрать изображение из этой папки, изменить ширину и высоту изображения.';
$lang['p_Logo_path'] = 'Путь хранения логотипов Портала';
$lang['p_Logo_path_explain'] = 'Путь относительно корня phpBB к логотипам Портала, к примеру images/logor';
$lang['p_Logo'] = 'Выберите логотип Портала';
$lang['p_Logo_dimensions'] = 'Размер изображения логотипа Портала';
$lang['p_Logo_dimensions_explain'] = '(Высота x Ширина в пикселях) ';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Разрешить автоматический вход на форум';
$lang['Allow_autologin_explain'] = 'Разрешен ли пользователям автоматический вход на форум';
$lang['Autologin_time'] = 'Автоматический вход на форум действителен';
$lang['Autologin_time_explain'] = 'Срок в днях с последнего посещения, в течение которого пользователь может автоматически войти на форум. Установите равным нулю, если хотите отключить данную возможность.';

$lang['Stylesheet_explain'] = 'Имя файла с таблицей стилей для данного шаблона.';

$lang['Styles_Management'] = 'Управление стилями';

// XS News
$lang['XS_News_Config'] = 'Управление Новостями';
$lang['XS_News'] = 'Настройка пунктов новостей';
$lang['XS_News_Tickers'] = 'Настройка лент новостей';
$lang['xs_news_settings'] = 'Настройки XS-Новостей';
$lang['xs_news_show'] = 'Отображать банер новостей?';
$lang['xs_news_show_ticker'] = 'Отображать новстные ленты?';
$lang['xs_news_show_ticker_explain'] = 'Если вы установите Нет, то отключите отображение и получение новостных лент. Если выбрать Да, то надо будет настроить также отображение новостных лент.';
$lang['xs_news_show_ticker_subtitle'] = 'Отображать заголовок новостных лент?';
$lang['xs_news_show_ticker_subtitle_explain'] = 'Нажмите Да для отображения шапки в таблице новостных лент.';
$lang['xs_news_show_news_subtitle'] = 'Отображать заголовок новостей?';
$lang['xs_news_show_news_subtitle_explain'] = 'Нажмите Да для отображения шапки в таблице новостей.';
$lang['xs_news_dateformat'] = 'Формат даты';
$lang['xs_news_dateformat_helper'] = 'Используется формат да: %s';

// XS Nav Menus
$lang['XS_Nav_Menus'] = 'Настройка Меню';
$lang['xs_display_settings'] = 'Настройка XS-Nav Меню';
$lang['xs_display_left'] = 'Отображать левое меню?';
$lang['xs_display_left_explain'] = 'Если Вы ответите ДА, то будет включено отображение левой панели';
$lang['xs_display_right'] = 'Отображать правое меню?';
$lang['xs_display_right_explain'] = 'Если Вы ответите ДА, то будет включено отображение правой панели';
$lang['xs_display_left_width'] = 'Ширина левой навигационной панели, по умолчанию 160';
$lang['xs_display_right_width'] = 'Ширина правой навигационной панели, по умолчанию 160';
$lang['xs_nm_exclude_forums'] = 'Исключить форумы';
$lang['xs_nm_exclude_forums_explain'] = 'ID форумов, которые будут исключены из панели Last # Topics list при подсчете последних тем, перечисляются через \',\'.';
$lang['xs_nm_exclude_report'] = 'Исключить форум отчетов?';
$lang['xs_nm_exclude_report_explain'] = 'Если у Вас установлен МОД Yellow Card То здесь Вы можете отключить форум для отправки отчетов из Last # Topics list.';

// START-faq_admin_mod
$lang['FAQ_Admin'] = 'Управление FAQ';
$lang['FAQ Admin'] = 'Пункты FAQ';
$lang['BBCode Admin'] = 'Пункты BBCode';
$lang['FAQ lang installer'] = 'Установка языковых пакетов';
$lang['bbcode'] = 'BBCode';
$lang['bbcode_admin'] = 'Управление BBCode';
$lang['Faq_admin'] = 'Упрвление FAQ';
$lang['Faq_admin_explain'] = 'Здесь Вы сможете добавлять, удалять и редактировать категории и пункты FAQ и BBCode';
$lang['Edit_faq'] = 'Редактировать FAQ';
$lang['Create_faq'] = 'Создать новый пункт FAQ';
$lang['Faq_edit_delete_explain'] = 'Здесь Вы сможете настроить FAQ этого вопроса';
$lang['Faq_settings'] = 'Настройка вопроса';
$lang['Faq_name'] = 'Имя вопроса';
$lang['Faq_desc'] = 'Ответ';
$lang['Faqs_updated'] = 'FAQ и информация о категории успешно обновлены';
$lang['Faq_delete'] = 'Удалить FAQ';
$lang['Faq_delete_explain'] = 'Здесь Вы сможете удалить FAQ (или категорию) и выбрать, куда перенести содержимое';
$lang['Language'] = 'Язык';
$lang['Click_return_faqadmin'] = 'Нажмите %sздесь%s для возврата в Управление FAQ';
$lang['Must_delete_faqs'] = 'Вы должны удалить все FAQs перед удалением категории';
$lang['Aff_rows_faq'] = 'Измененные ряды в таблице FAQ';
$lang['Aff_rows_bbcode'] = 'Измененные ряды в таблице BBCode';
$lang['Aff_rows_cat_t'] = 'Измененные ряды в таблице категорий';
$lang['Aff_rows_q_t'] = 'Измененные ряды в таблице вопросов';
$lang['faq_admin_ad_explain'] = 'Здесь Вы можете устанваливать языковые пакеты FAQs и BBCode из языковых пакетов, скачанных с официальной странички <a href="http://www.phpbb.com">phpBB</a>';
$lang['no_language_in_db'] = 'Нет установленных языков';
$lang['no_language_on_hd'] = 'Нет языков к установке';
// END-faq_admin_mod

//
//Nickpage Allgemein
//
$lang['Nickpage'] = "Личная страничка";
$lang['General_nickpage'] = "Настройки личных страничек";
$lang['Beschreibung_general_nickpage'] = "Здесь Вы можете редактировать настройки личных страничек вашего Портала. Для отключения отдельных Страничек, пожалуйста используйте <b>Редактировать странички</b>.";
$lang['Anzahl_postings'] = "Сколько должно быть сообщений у пользователя для создания Странички?";
$lang['Registered_only'] = "Только зарегистрированные пользователи могут видеть Странички?";
$lang['Buddielist'] = "Макисмум записей в Друзьях?";
$lang['Favlinks'] = "Максимум записей в Избранных ссылках?";
$lang['Guestbook'] = "Гостевая";
$lang['Allow_guestbook'] = "Включить Гостевую?";
$lang['Entry_per_page'] = "Сколько сообщений на страничке в Гостевой?";
$lang['Guestbook_guestwriter'] = "Только зарегистрированные пользователи могут оставлять сообщения в Гостевой?";
$lang['Galerie'] = "Галлерея";
$lang['Allow_galerie'] = "Включить Галлерею?";
$lang['Galerie_maxpics'] = "Максимальное количество Фото?";
$lang['GD'] = "Версия GD, используемая на Сервере?";
$lang['GD_1'] = "&lt; 1.6";
$lang['GD_2'] = "&gt; 1.6";
$lang['GD_3'] = "&gt; 2.0.1";
$lang['Kreatives'] = "Страничка сообщений";
$lang['Allow_kreatives'] = "Включить Страничку сообщений?";

//
//Nickpage Pages sperren
//
$lang['Sperren'] = "Редактировать странички";
$lang['Beschreibung_sperren_nickpage'] = "Здесь Вы можете включать и отключать Странички пользователей.";
$lang['Sperren_nickpage'] = "Отключить страничку";
$lang['Sperren_go'] = "Отключить";
$lang['Sperren_search'] = "Найти пользователя";
$lang['Gesperrt_nickpage'] = "Страничка отключена";
$lang['Gesperrt_aktion'] = "Включить";
	
//
//Nickpage Pruning
//
$lang['PRUNE'] = "Здесь Вы сможете удалить Странички пользователей.";
$lang['WHAT_YOU_WANT_TO_DO'] = 'Что Вы хотите сделать?';
$lang['PRUNE_NOT_EXISTENT'] = 'Удалить Странички (Странички удаленных акаунтов)';
$lang['Nickpage_prune_ready'] = 'Чистка страничек завершена';
$lang['Nickpage_pruned_users'] = 'Страничка и следующие данные удалены.';
$lang['Nickpage_pruned_np'] = 'Удалены странички';
$lang['Nickpage_pruned_gb'] = 'Удалены записи Гостевой';
$lang['Nickpage_pruned_ga'] = 'Удалены Фото';
$lang['Nickpage_pruned_bu'] = 'Удалены Друзья';
$lang['Nickpage_pruned_li'] = "Удалены URL'ы";
$lang['Nickpage_pruned_vo'] = 'Удалены Оценки';

?>
