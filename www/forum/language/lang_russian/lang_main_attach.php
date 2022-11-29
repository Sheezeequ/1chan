<?php
/***************************************************************************
 *                            lang_main_attach.php [Russian]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
 *
 *     $Id: lang_main_attach.php,v 1.27 2003/01/16 11:11:56 acydburn Exp $
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = 'Вы <b>можете</b> прикреплять файлы в этом форуме';
$lang['Rules_attach_cannot'] = 'Вы <b>не можете</b> прикреплять файлы в этом форуме';
$lang['Rules_download_can'] = 'Вы <b>можете</b> скачивать файлы в этом форуме';
$lang['Rules_download_cannot'] = 'Вы <b>не можете</b> скачивать файлы в этом форуме';
$lang['Sorry_auth_view_attach'] = 'Извините, но вам не разрешено просматривать или скачивать вложения';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Описание'; // used in Administration Panel too...
$lang['Downloaded'] = 'Скачан';
$lang['Download'] = 'Закачки'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Размер файла';
$lang['Viewed'] = 'Просмотрено';
$lang['Download_number'] = '%d раз'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Расширение \'%s\' отключено администратором, поэтому этот файл не может быть прикреплен.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Панель управления вложениями';
$lang['Attach_posting_cp_explain'] = 'Если вы щелкнете на Прикрепить файл, то вы увидите управление для прикрепления файлов.<br />Если вы нажмете на Прикрепленные файлы, то вы увидите список уже прикрепленных файлов и сможете их отредактировать.<br />Если вы хотите заменить (закачать новую версию) вложение, то вам надо щелкнуть по двум ссылкам. Добавьте вложение, затем, не нажимая кнопку Вложить, нажмите на кнопке Обновить вложение для обновления файла.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Прикрепить файл';
$lang['Add_attachment_title'] = 'Прикрепить файл';
$lang['Add_attachment_explain'] = 'Если вы не хотите прикреплять файл, то оставьте поля пустыми';
$lang['File_name'] = 'Имя файла';
$lang['File_comment'] = 'Комментарий';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Прикрепленные файлы';
$lang['Options'] = 'Опции';
$lang['Update_comment'] = 'Обновить комментарий';
$lang['Delete_attachments'] = 'Удалить вложения';
$lang['Delete_attachment'] = 'Удалить вложение';
$lang['Delete_thumbnail'] = 'Удалить изображение';
$lang['Upload_new_version'] = 'Обновить файл';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s - неправильное имя файла'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Файл слишком большой.<br />Не удаетс получить макс. размер в PHP.<br />Модуль вложений не может определить размер в php.ini.';
$lang['Attachment_php_size_overrun'] = 'Вложение слишком большое.<br />Максимальный размер: %d Мб.<br />Заметьте, что размер указан в php.ini, это значение установлено PHP и модуль вложений не может обойти это значение.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Расширение %s не разрешено'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Вам не разрешено размещать файлы с расширением %s в этом форуме'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Вложение слишком большое.<br />Макс. размер: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Извините, максимальный размер всех вложений превышен. Свяжитесь с администратором форумов для уточнения.';
$lang['Too_many_attachments'] = 'Вложение не может быть добавлено, т.к. максимальное кол-во вложений ( %d ) в этом сообщении ограничено'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Вложение/изображение должно быть меньше %d пиксел на %d пиксел';
$lang['General_upload_error'] = 'Ошибка закачки: не удается закачать вложение в %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Вам надо ввести данные в \'Прикрепить файл\'';
$lang['Error_missing_old_entry'] = 'Не удалось обновить вложение, не удается найти старое вложение';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Извините, но максимальный размер вложений в вашей папке ЛС превышен. Пожалуйста, удалите несколько сообщений.';
$lang['Attach_quota_receiver_pm_reached'] = 'Извините, но максимальный размер вложений в папке ЛС \'%s\' превышен. Пожалуйста, передайте ему или подождите удаления пользователем.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Вы не выбрали вложение для просмотра или скачивания.';
$lang['Error_no_attachment'] = 'Выбранное вложение не существует';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Вы действительно хотите удалить выбранные вложения?';
$lang['Deleted_attachments'] = 'Выбранные вложения были удалены.';
$lang['Error_deleted_attachments'] = 'Не удается удалить вложения.';
$lang['Confirm_delete_pm_attachments'] = 'Вы хотите удалить все вложения в этой ЛС?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Вложения выключены.';

$lang['Directory_does_not_exist'] = 'Папка \'%s\' не существует или не может быть найдена.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Пожалуйста, проверьте, что \'%s\' - это папка.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Папка \'%s\' только для чтения. Вам надо создать папку и сменить chmod на 777 (или сменить пользователя на владельца httpd) для закачки файлов.<br />Если у вас есть только FTP доступ, то смените \'Атрибут\' папки на rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Не удается соединиться с FTP-сервером: \'%s\'. Please check your FTP-Settings.';
$lang['Ftp_error_login'] = 'Не удается зайти на FTP-сервер. Имя пользователя \'%s\' или пароль неверны. Пожалуйста, проверьте настройки.';
$lang['Ftp_error_path'] = 'Не удается получить доступ к: \'%s\'. Проверьте ваши настройки.';
$lang['Ftp_error_upload'] = 'Не удается закачать файлы в: \'%s\'. Проверьте ваши настройки.';
$lang['Ftp_error_delete'] = 'Не удается удалить файлы в: \'%s\'. Проверьте ваши настройки.<br />Другой причиной может быть несовместимость вложения.';
$lang['Ftp_error_pasv_mode'] = 'Не удалось включить/выключить Пассивный режим FTP';

// Attach Rules Window
$lang['Rules_page'] = 'Правила вложений';
$lang['Attach_rules_title'] = 'Разрешенные вложения и их размеры';
$lang['Group_rule_header'] = '%s -> Максимальный размер: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Разрешенные расширения и размеры';
$lang['Note_user_empty_group_permissions'] = 'ПРИМЕЧАНИЕ:<br />по умолчанию вам разрешено прикреплять файлы в форуме, <br />но если разрешение здесь не указано, <br />То вы не сможете ничего прикрепить. Если вы попробуете, <br />то вы получите сообщение об ошибке.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Квота закачек';
$lang['Pm_quota'] = 'Квота ЛС';
$lang['User_upload_quota_reached'] = 'Извините, вы превысили ваш лимит квоты %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Панель пользователя';
$lang['UACP'] = 'Панель управления пользователя';
$lang['User_uploaded_profile'] = 'Закачано: %s';
$lang['User_quota_profile'] = 'Квота: %s';
$lang['Upload_percent_profile'] = '%d%% всего';

// Common Variables
$lang['Bytes'] = 'Байт';
$lang['KB'] = 'Kб';
$lang['MB'] = 'Mб';
$lang['Attach_search_query'] = 'Поиск вложений';
$lang['Test_settings'] = 'Проверка настроек';
$lang['Not_assigned'] = 'Не указано';
$lang['No_file_comment_available'] = 'Нет комментария';
$lang['Attachbox_limit'] = 'Ваш ящик вложений заполнен на %d%%';
$lang['No_quota_limit'] = 'Нет ограничения';
$lang['Unlimited'] = 'Неограниченная';

?>
