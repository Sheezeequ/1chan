<?php
/***************************************************************************
 *                            lang_easymod.php [Russian]
 *                              -------------------
 *   begin                : Saturday, Mar 22 2003
 *   copyright            : (C) 2002-2004 by Nuttzy - Craig Nuttall, 2005 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_easymod_english.php,v 1.13 2005/11/08 19:35:12 markus_petrux Exp $
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


//
// EasyMOD
//

// Name of the language, to write in this language
$lang['EM_lang_name'] = 'Русский';

// EM module entries in the ACP
$lang['Modifications'] = 'MOD-Центр';
$lang['MOD_ainstall'] = 'Установить MODы';
$lang['MOD_settings'] = 'Настройка EasyMOD';
$lang['MOD_history'] = 'История EasyMOD';

// header
$lang['EM_Title'] = 'EasyMOD - Автоматический установщик модов' ;

// login
$lang['EM_access_warning'] = 'Пароль для доступа к EasyMod.  Злоумышленник может получить доступ к базе данных и FTP без вашего ведома.' ;
$lang['EM_password_title'] = 'Пожалуйста введите пароль для доступа к EasyMod' ;
$lang['EM_password'] = 'Пароль' ;
$lang['EM_access_EM'] = 'Доступ к EasyMod' ;

// history (installed MODs)
$lang['EM_Installed'] = 'Установленные моды' ;
$lang['EM_installed_desc'] = 'Все эти моды были в какой-то момент установлены на вашем форуме.  В более поздних версиях вы будете получать больше деталей или удалять моды отсюда.' ;
$lang['EM_install_date'] = 'Установленный' ;
$lang['EM_details'] = 'Детали';
$lang['EM_No_mod_selected'] = 'Нет выбранного MODа. Пожалуйста вернитесь и сделайте выбор.';
$lang['EM_tables_added'] = 'Добавленные таблицы';
$lang['EM_tables_altered'] = 'Измененные таблицы';
$lang['EM_rows_added'] = 'Добавленные ряды';
$lang['EM_db_alt'] = 'Изменения БД';
$lang['EM_del_files '] = 'Удалить файлы MODа';
$lang['EN_del_record'] = 'Удалить запись о MODе';
$lang['EM_install_new_lang'] = 'Установить MOD для другого языка';
$lang['EM_install_new_themes '] = 'Установить MOD для новой темы';
$lang['EM_restore_backups '] = 'Восстановить из бэкапа';
$lang['EM_uninstall'] = 'Деинсталировать MOD';
$lang['Coming_soon'] = 'Выполняется';
$lang['EM_back_to_history'] = 'Назад в Историю';
$lang['EM_are_you_sure'] = 'Вы уверены, что хотите выполнить указанное действие?';
$lang['EM_record_deleted'] = 'Выбранная запись о MODе была удалена из БД';
$lang['EM_warning_deldir'] = 'ПРЕДУПРЕЖДЕНИЕ: Чтобы полностью удалить этот MOD из вашей системы, Вы должны удалить следующую директорию:';

// settings
$lang['EM_settings_pw'] = 'Пароль к EasyMod позволит вам ограничит других админов. При наличии доступа к EasyMod админ мог получить вам логин/пароль к базе данных и информацию о FTP. Оставьте поле пустым, чтобы не использовать пароль. Оставьте поле пустым, чтобы не изменять пароль.' ;
$lang['EM_read_server'] = 'сервер' ;
$lang['EM_write_server'] = 'сервер' ;
$lang['EM_write_ftp'] = 'буфер и FTP' ;
$lang['EM_write_download'] = 'загрузка' ;
$lang['EM_write_screen'] = 'на экране' ;
$lang['EM_move_copy'] = 'копия' ;
$lang['EM_move_ftp'] = 'автоматический FTP' ;
$lang['EM_move_exec'] = 'исполняющий скрипт' ;
$lang['EM_move_manual'] = 'загрузить в ручную' ;
$lang['EM_settings_desc'] = 'Выполните настройку здесь.  <b>Эта страница должна работать</b>  Здесь производится настройка EasyMod.' ;
$lang['EM_settings_update'] = 'Обновить изменения' ;
$lang['EM_settings_success'] = 'Ваши параметры для EasyMOD успешно изменены.' ;
$lang['EM_pass_disabled'] = '(EM отключить пароль)' ;
$lang['EM_pass_updated'] = '(EM обновить пароль)' ;
$lang['EM_pass_not_updated'] = '(EM пароль не обновлен)' ;
$lang['EM_supply_on_change'] = 'Введите только если хотите поменять его';
$lang['EM_emv_description'] = 'Если Вы переустановили EM, то здесь можно указать новую версию.';
$lang['EM_easymod_version'] = 'Версия EasyMOD';

// EasyMOD install
$lang['EM_Intro'] = 'EasyMOD быстро установит ваши моды для phpBB, раньше это было утомительным занятием. EasyMOD способен установить любой phpBB мод.  Однако, совместимые с EasyMod моды имеют больше шансов на корректную установку, чем другие.' ;
$lang['EM_none_installed'] = 'Нет модов' ;
$lang['EM_All_Processed'] = 'Все моды были обработаны.' ;
$lang['EM_unprocessed_mods'] = 'Эти моды лежат в вашей папке для модов и ещё не установлены. Клик на "Процесс" начинает пошаговую установку.  Ваши файлы не будут переписаны до последнего шага.  Моды, которые совместимы с EasyMod (EMC) имеют больше шансов на корректную установку, чем другие.  Для получения дополнительной информации кликните <a href="http://www.phpbb.com/phpBB/viewtopic.php?p=689082#689082">тут</a>.' ;
$lang['EM_Unprocessed'] = 'Необработанные моды' ;
$lang['EM_process'] = 'процесс' ;
$lang['EM_support_thread'] = 'поддержка' ;
$lang['EM_EMC'] = 'EMC' ;
$lang['EM_undefined_write'] = 'Неизвестный метод записи.';
$lang['EM_check_permissions'] = 'Файлы должны быть доступны для PHP и пользователя, управляющего сервером.';
$lang['EM_undefined_move_method'] = 'Неизвестный метод переноса.';
$lang['EM_settings'] = 'Настройка EasyMOD';

// Preview
$lang['EM_preview'] = 'Просмотр' ;
$lang['EM_preview_mode'] = 'Режим просмотра' ;
$lang['EM_preview_desc'] = 'Слейдущие файлы будут переписаны.  Кликните "Просмотр" чтобы рассмотреть изменения.  Изменения, которые EasyMod применит к файлам, отмечены жирным красным цветом.  К сожалению, из-за форматирования HTML, некоторые дополнительные переводы каретки иногда добавляются, но они не будут появляться, когда файл фактически записан.' ;
$lang['EM_preview_filename'] = 'Имя файла' ;
$lang['EM_preview_view'] = 'Просмотр' ;
$lang['EM_preview_nofile'] = 'Этот мод не будет изменять никаких файлов.  Нет файлов для просмотра.' ;

// History + Install
$lang['EM_Mod'] = 'Мод' ;
$lang['EM_File'] = 'Файл' ;
$lang['EM_Version'] = 'Версия' ;
$lang['EM_Author'] = 'Автор' ;
$lang['EM_Description'] = 'Описание' ;
$lang['EM_phpBB_Version'] = 'phpBB версия' ;
$lang['EM_Themes'] = 'Темы' ;
$lang['EM_Languages'] = 'Языки' ;
$lang['EM_Filter'] = 'Фильт';
$lang['EM_Filtered'] = 'Отфильтровано';
$lang['EM_Unfiltered'] = 'Неотфильтровано';
$lang['EM_Filter_by_file'] = 'Фильтровать MODы по изменяемым файлам';
$lang['EM_All_mods'] = 'Все MODы';
$lang['EM_Total_mods'] = 'Итого MODов';
$lang['EM_none_found'] = 'Не найдено MODы.';

// process
$lang['EM_proc_step1'] = 'Шаг 1 из 3' ;
$lang['EM_proc_complete'] = 'Обработка закончилась успешно!' ;
$lang['EM_proc_desc'] = 'EasyMOD закончил установку этого мода. Ваши оригинальные файлы остались не измененными. Следующий шаг обновит вашу базу данных и перепишет phpBB файлы.  Ваши файлы автоматически сохранены. Однако, <b>это бета версия, и вам надо делать резервные копии самому!!</b>  Нажмите на кнопку "Слейдущий шаг" для продолжения.' ;
$lang['EM_unprocessed_commands'] = 'Необработанные команды.' ;
$lang['EM_unprocessed_desc'] = 'Следующие команды не были признаны EasyMOD и игнорированы. Линии в скрипте показаны.' ;
$lang['EM_processed_commands'] = 'Обработка команды' ;
$lang['EM_processed_desc'] = 'EasyMOD успешно обработал следующие команды:';
$lang['EM_proc_failed'] = 'Установка не удалась' ;
$lang['EM_proc_failed_desc'] = 'EasyMOD столкнулся со следующей ошибкой(ками).  Общая ошибка в ABC.  Критическая ошибка означает D, и Вы должны сделать XYZ.' ;
$lang['EM_text_depend_move'] = 'ЭТОТ ТЕКСТ ЗАВИСИТ ОТ МЕТОДА ПЕРЕНОСА ФАЙЛОВ';

// process + post process
$lang['EM_Mod_Data'] = 'Файл мода' ;
$lang['EM_Mod_Title'] = 'Название мода' ;
$lang['EM_Proc_Themes'] = 'В темах' ;
$lang['EM_Proc_Languages'] = 'В языках' ;
$lang['EM_Files'] = 'Редактируемые файлы' ;

// EasyMOD sql
$lang['EM_sql_step2'] = 'Шаг 2 из 3' ;
$lang['EM_SQL_Intro'] = '<b>Изменения в базе данных</b> - DISABLED' ;
$lang['EM_Alterations'] = 'Предложенные изменения в базе данных' ;
$lang['EM_Pseudo'] = 'Псевдо SQL' ;
$lang['EM_Allow'] = 'Позволить' ;
$lang['EM_Perform'] = 'Выполните изменения в базе данных' ;
$lang['EM_complete_install'] = 'Установка завершена' ;
$lang['EM_proposed_alterations'] = 'Выполнены изменения в Вашей %s БД';
$lang['EM_sql_intro_explain'] = 'EasyMOD будет теперь делать изменения в вашей БД, если Вы разрешите. Любой SQL-запрос, который вы укажите, будет выполнен. Если Вы повторно устанавливаете MOD, то вероятно Вам <b>не надо</b> вносить изменения в БД во второй раз, <b>поэтому будьте осторожны!</b><br /><br /><b>Официальное предупреждение:</b> Это - НЕОБРАТИМЫЙ процесс. Запросы, которые Вы укажите, будут выполнены, но EM не проверяет, будут ли эти изменения отрицательно воздействовать на вашу БД. НАСТОЯТЕЛЬНО советуем <b>сделать резервную копию БД</b> перед вносом изменений.';
$lang['EM_sql_error'] = 'ОШИБКА SQL';
$lang['EM_not_attempted'] = 'Не выполнено';
$lang['EM_success'] = 'Успешно';
$lang['EM_skipped'] = 'Пропущено';
$lang['EM_processing_results'] = 'Результат работы с SQL';
$lang['EM_sql_attempted'] = 'Следующий запросы SQL были предприняты:';
$lang['EM_all_lines_successfull'] = 'ВСЕ ЗАПРОСЫ УСПЕШНО ВЫПОЛНЕНЫ';
$lang['EM_errors_detected'] = 'ОБНАРУЖЕНЫ ОШИБКИ';
$lang['EM_failed'] = 'НЕ ВЫПОЛНЕНО';
$lang['EM_line_results'] = 'Ниже - результаты для каждого запроса SQL.';
$lang['EM_sql_error_explain'] = 'В процессе выполнения запросов SQL были обнружены ошибки. Дальнейшая  SQL-обработка приостановлена. Вы можете хотеть закончить установку MODа и выполнить команды SQL вручную после.';
$lang['EM_sql_halted'] = 'ПРОЦЕСС SQL ОСТАНОВЛЕН';
$lang['EM_sql_process_error'] = 'ОШИБКА SQL-ОБРАБОТКИ';
$lang['EM_failed_line'] = 'Была ошибочная строка';
$lang['EM_no_sql_preformed'] = '<b>Изменения в БД не внесены.</b> Однако, вы можете пропустить этот шаг и выполнить изменения вручную.';
$lang['EM_following_error'] = 'Ниже указана ошибка';
$lang['EM_no_sql'] = 'Нет SQL-запросов.  Нажмите \'Установка завершена\' для продолжения.';
$lang['EM_notice'] = 'Примечание';
$lang['EM_urgent_warning'] = 'СРОЧНОЕ ПРЕДУПРЕЖДЕНИЕ';
$lang['EM_sql_drop_warning'] = 'Перечисленные SQL-запросы были обнаружены в сценарии установки. Хотя эти команды могут быть выполнены, Вы должны подтвердить необходимость их выполнения. Настоятельно рекомендуем сделать резервную копию БД перед продолжением!';
$lang['EM_sql_msaccess_warning'] = 'У Вас БД MS Access. EM должен выполнить большую часть SQL-запросов. Однако, при создании таблиу или добавления колонок нет никакого способа назначить знчение по умолчанию. Вы должны будете сделать это вручную в MS Access. Без значения по умолчанию, МОД может некорректно функционировать.';
$lang['EM_experimental_explain'] = 'У Вас БД %s. Наиболее вероятно EM может некорректно работать с SQL-запросами.';
$lang['EM_sql_warnings_reported'] = '%d Предупреждение(я), о которых сообщает SQL-Анализатор';
$lang['EM_database_alterations '] = 'Изменения Базы данных';

// EasyMOD sql errors
$lang['EM_Unable_to_parse'] = '<b>ФАТАЛЬНАЯ ОШИБКА</b>: Невозможно выполнить SQL-запрос;';
$lang['EM_malformed_type'] = 'ошибка в указании длины типа';
$lang['EM_unmatched_NOT'] = 'неопределенный NOT';
$lang['EM_missing_DEFAULT'] = 'неверное ЗНАЧЕНИЕ ПО УМОЛЧАНИЮ';
$lang['EM_not_enough'] = 'недостаточно параметров';
$lang['EM_improper_key'] = 'неверный формат ключа';
$lang['EM_type_invalid'] = 'Тип %s неверен';
$lang['EM_length_invalid'] = 'Длина %s неверная';
$lang['EM_malformed_DROP'] = 'ошибка при попытке DROP';
$lang['EM_malformed_DROP2'] = 'ошибка оператора DROP сильно много аттрибутов.';
$lang['EM_postgresql_ABORTED'] = 'ПРЕРВАНО: [%d]<br /> Пропуск поля в PostgreSQL не выполнен. Войдите в контакт с Nuttzy, если Вы знаете, как правильно делать это.';
$lang['EM_malformed_sql'] = 'ошибка в SQL, не указано назначение';
$lang['EM_type_unknown'] = 'Тип \'%s\' неизвестен.';
$lang['EM_subaction_unknown'] = 'Подзапрос \'%s\' неизвестен.';
$lang['EM_unknown_action'] = 'Запрос \'%s\' неизвестен.';
$lang['EM_SQL_line'] = 'Строка SQL:';

// post process
$lang['EM_pp_step3'] = 'Шаг 3 из 3' ;
$lang['EM_pp_install_comp'] = 'Установка завершена!' ;
$lang['EM_pp_comp_desc'] = 'Установка этого мода завершена.  Вы должны проверить, что мод функционирует должным образом со всеми установленными темами и языками.' ;
$lang['EM_pp_complete'] = 'завершено' ;
$lang['EM_pp_ready'] = 'готовый' ;
$lang['EM_pp_manual'] = 'РУКОВОДСТВО' ;
$lang['EM_pp_from'] = 'Копировать в [%s]' ;
$lang['EM_pp_backups'] = 'Сделать бэкап в [%s]' ;
$lang['EM_pp_backup'] = 'Бэкап' ;
$lang['EM_pp_download'] = 'Загрузка' ;
$lang['EM_pp_to'] = 'К' ;
$lang['EM_pp_status'] = 'Статус' ;

// diy
$lang['DIY_final'] = 'Завершающий шаг';
$lang['DIY_Instructions'] = '\'Дополнительные\' инструкции';
$lang['DIY_intro'] = '\'Дополнительные\' инструкции необходимо выполнить <strong>вручную</strong>, EasyMOD <strong>не может</strong> выполнить эти действия';
$lang['Final_install_step'] = 'Просмотреть завершающий шаг';
$lang['Install_complete'] = 'Инсталяция завершена';

// general use
$lang['EM_next_step'] = 'Следующий шаг' ;
$lang['EM_ok'] = 'OK';
$lang['EM_on'] = 'ВКЛ';
$lang['EM_off'] = 'ВЫКЛ';
$lang['EM_line'] = 'строка';


//
// installer
//
$lang['Safe_mode'] = 'Безопасный режим';
$lang['Go'] = 'Вперед';
$lang['EM_installing_beta'] = 'Устанавливаеться EasyMOD бета (%s)';
$lang['EM_more_info'] = 'Больше информации';
$lang['EM_see_file_access'] = 'Здесь показан Ваш уровень доступа к файлам. Нет необходимости, что все было \'ОК\'.';
$lang['EN_reinstall_version'] = 'Если Вы переустанавливаете эту версию, измените значение номера версии EM в ACP в Настройках EasyMOD. Или Вы можете узнать чем изменить номер версии EM <a href="http://gphemsley.music-hq.net/phpBB/EasyMOD/">здесь</a>.';
$lang['EM_simple_mode'] = 'Обычный режим';
$lang['EM_advanced_mode'] = 'Расширенный режим';


// step 1

$lang['EM_step1'] = '<b>Шаг 1 (из 5):</b> Добро пожаловать в установку EasyMOD.  В этом шаге EasyMod просмотрел сервер, чтобы знать какой доступ файла является доступным для ключевых шагов чтения, записи, и перемещения файлов.  EasyMOD рекомендует параметры настройки лучше всего соответствующей вашей конфигурации.' ;

$lang['EM_Install_Info'] = 'Информация о установке' ;
$lang['EM_Select_Language'] = 'Выберете язык' ;
$lang['EM_Database_type'] = 'Тип базы данных' ;
$lang['EM_phpBB_version'] = 'Версия phpBB' ;
$lang['EM_EasyMOD_version'] = 'Версия EasyMOD' ;
$lang['EM_EM_status'] = 'EM статус' ;
$lang['EM_new_install'] = 'Новая установка' ;
$lang['EM_update_from'] = 'Обновление EM' ;

$lang['EM_PHP_sysinfo'] = 'Additional System Information';
$lang['EM_not_avail'] = 'N/A';
$lang['EM_PHP_system'] = 'System';
$lang['EM_PHP_config'] = 'Configure Command';
$lang['EM_PHP_version'] = 'PHP version';

$lang['EM_File_Access'] = 'Информация о правах доступа' ;
$lang['EM_failed'] = 'битый' ;
$lang['EM_unattempted'] = 'не предпринятый' ;
$lang['EM_no_module'] = 'модуль не загружен' ;
$lang['EM_no_problem'] = 'NOTE: Проблемы нет, если некоторые неудавшиеся пункты не были предприняты.  Все нормально.' ;
$lang['EM_support'] = 'Для поддержки и справки посетите <a href="http://area51.phpbb.com/phpBB22/viewforum.php?f=15" target="_blank">EasyMOD Central</a> в Area51.  Не надо слать электронные письма, ICQ (и др.), или ЛС.' ;

$lang['EM_read_access'] = 'доступ к чтению' ;
$lang['EM_write_access'] = 'доступ к записи' ;
$lang['EM_root_write'] = 'запись в корневую директорию' ;
$lang['EM_chmod_access'] = 'доступ к chmod' ;
$lang['EM_unlink_access'] = 'доступ к unlink' ;
$lang['EM_mkdir_access'] = 'доступ к mkdir' ;
$lang['EM_tmp_write'] = 'запись во временную папку' ;
$lang['EM_ftp_ext'] = 'FTP расширение' ;
$lang['EM_copy_access'] = 'доступ к копированию' ;

$lang['EM_Settings'] = 'Настройки' ;
$lang['EM_password_title'] = 'EasyMOD Защита паролем' ;
$lang['EM_password_desc'] = 'Пароль для EasyMOD позволит вам ограничить админов от EasyMOD.  Злоумышленник может получить доступ к базе данных и FTP без вашего ведома.' ;
$lang['EM_password_set'] = 'Установите пароль для EM' ;
$lang['EM_password_confirm'] = 'Повторите пароль для EM' ;
$lang['EM_file_title'] = 'Доступ к файлом' ;
$lang['EM_file_desc'] = 'FTP доступ - perferred метод для доступа к файлу.  Если вы не имеете доступ к FTP, EasyMOD подготовил дополнительные параметры настройки.' ;
$lang['EM_file_reading'] = 'Чтение' ;
$lang['EM_file_writing'] = 'Запись' ;
$lang['EM_file_moving'] = 'Просмотр' ;
$lang['EM_file_alt'] = 'замена' ;
$lang['EM_ftp_title'] = 'FTP Информация' ;
$lang['EM_ftp_desc'] = 'Если вы имеете доступ к FTP, входите.  Информация будет сохранена в базе данных phpBB.  Это будет доступно через EasyMOD.' ;
$lang['EM_ftp_dir'] = 'FTP директория к phpBB2' ;
$lang['EM_ftp_user'] = 'FTP логин' ;
$lang['EM_ftp_pass'] = 'FTP пароль' ;
$lang['EM_ftp_host'] = 'FTP сервер' ;
$lang['EM_ftp_host_info'] = '(localhost должен быть лучшим вариантом)' ;
$lang['EM_ftp_port'] = 'FTP порт';
$lang['EM_ftp_port_info'] = '(21 по умолчанию)';

$lang['EM_ftp_advance_settings'] = 'Расширенная настройка FTP';
$lang['EM_ftp_debug'] = 'FTP Способ отладки' ;
$lang['EM_ftp_debug_not'] = '(используйте, если есть проблема)' ;
$lang['EM_ftp_use_ext'] = 'PHP FTP расширение' ;
$lang['EM_ftp_ext_not'] = '(не понял нифига :()' ;
$lang['EM_ftp_ext_noext'] = 'Не выбирайте.  PHP FTP модуль не загружен.' ;
$lang['EM_ftp_ext_notmp'] = 'Не выбирайте.  Нет доступа на запись к /tmp.' ;
$lang['EM_ftp_cache'] = 'Использовать FTP кэш' ;
$lang['EM_yes'] = 'Да';
$lang['EM_no'] = 'Нет';

// simple step 1
$lang['EM_step1_simple_header'] = '<strong>Шаг 1 (сбор настроек):</strong> Добро пожаловать в устнаовку EasyMOD. EasyMOD будет вести Вас через каждый шаг установки. Сначала, мы должны узнать немного о вашем сервере.';
$lang['EM_step1_ftp_header'] = '<strong>Шаг 1 (сбор нстроек):</strong> Вы указали, что у Вас FTP доступ. Введите вашу информацию о FTP ниже.';
$lang['EM_step1_password_header'] = '<strong>Шаг 1 (сбор нстроек):</strong> EasyMOD очень серьезно относится к безопасности. Пароль будет в дальнейшем скрыт даже от тех, у кого будет доступ. Если Вы используете FTP, то нам необходим пароль. Предоставленная вами информация о FTP благополучно зашифруется в БД.';
$lang['EM_server_style'] = 'Стиль сервера';
$lang['EM_about_server'] = 'О сервере';
$lang['EM_describes_server'] = 'Что из указанного лучше всего описывает ваш сервер phpBB:';
$lang['EM_have_ftp'] = 'У меня есть доступ по FTP к файлам phpBB на сервере.';
$lang['EM_have_windows'] = 'Это - сервер Windows, и я не должен волноваться о правах доступа к файлам.';
$lang['EM_no_ftp_suggest'] = 'У меня нет доступа по FTP. Пускай EasyMOD проверит, что можно сделать!';
$lang['EM_auto_detect'] = 'Автоопределение';
$lang['EM_diagnosis'] = 'Диагноз';
$lang['EM_auto_tech_detected'] = 'Обнаруженно Автоопределением!';
$lang['EM_ftp_desc'] = 'Введите информаци как Вы  получаете доступ к файлам phpBB через FTP.';

// no write no copy
$lang['Select_one'] = 'Выберите:';
$lang['EM_nowrite_nocopy__desc'] = 'Обнаружен самый неудобный вариант. EasyMOD не может создать новые файлы или заменять старые файлы новыми. Есть несколько возможных вариантов:<br />
<ol>
<li>Если у Вас есть доступ по FTP, используйте его.</li>
<li>Ваш сервер в "safe mode" (безопасном режиме) и EasyMOD не может автоматически заменять файлы phpBB. Попробуйте воспользоваться <a href="http://www.wikipedia.org/wiki/chmod" target="_blank">chmod</a> или <a href="http://www.wikipedia.org/wiki/chown" target="_blank">chown</a> для настройки доступа.</li>
<li>Вам необходимо воспользоваться <a href="http://www.wikipedia.org/wiki/chmod" target="_blank">chmod</a> для установки доступа. Однако, это не соответствует условиям защиты сервера.</li>
<li>Или Вам прийдется загружать файлы и устанавливать их вручную.</li>
</ol>';
$lang['EM_try_ftp'] = 'Я попробую использовать доступ по FTP';
$lang['EM_perms_mod_rescan'] = 'Я изменил права доступа к файлам и директориям. Проверить нынешний доступ EasyMOD.';
$lang['EM_download_manual'] = 'Я буду скачивать файлы и вручную устанавливать их';
$lang['EM_select_else'] = 'Я хотел бы воспользоваться чем-нибудь еще. (Расширенный режим)';

// write no copy
$lang['EM_write_nocopy_desc'] = 'Проблема.  EasyMOD может создавать новые файлы, но не может заменять старые файлы - новыми. Есть несколько путей решения:<br />
<ol>
<li>Если у Вас доступ по FTP, то проверьте настройки.</li>
<li>Ваш сервер в "safe mode" (безопасном режиме) и EasyMOD не может автоматически заменять файлы phpBB. Попробуйте воспользоваться <a href="http://www.wikipedia.org/wiki/chmod" target="_blank">chmod</a> или <a href="http://www.wikipedia.org/wiki/chown" target="_blank">chown</a> для настройки доступа.</li>
<li>Вам необходимо воспользоваться <a href="http://www.wikipedia.org/wiki/chmod" target="_blank">chmod</a> для установки доступа. Однако, это не соответствует условиям защиты сервера.</li>
<li>Или Вам прийдется загружать файлы и устанавливать их вручную.</li>
</ol>';
$lang['EM_use_post_process'] = 'Я хотел бы использовать скрипт post_process для автоматического перемещения файлов. (необходимо уметь выполнять скрипты)';

// write and copy
$lang['EM_write_copy_desc'] = 'Хорошие новости! EasyMOD обнаружил, что он может выполнять установку файлов автоматически.  Вам необходимо подтвердить этот режим.';
$lang['EM_yes_use_auto'] = 'Да, использовать автоматический метод.';
$lang['EM_no_use_else'] = 'Нет, я хотел бы воспользоваться чем-нибудь еще. (Расширенный режим)';


// step 2
$lang['EM_step2'] = '<b>Шаг 2 (из 5):</b> EasyMOD теперь подтвердит ваши параметры для доступа к файлам.' ;
$lang['EM_test_write'] = 'Метод записи (test)' ;
$lang['EM_confirm_write'] = 'Запишите метод доступа.';
$lang['EM_confirm_write_server'] = 'Измененные файлы будут записаны на сервере' ;
$lang['EM_confirm_write_ftp'] = "Измененные файлы будут записаны в буфер, а затем на FTP." ;
$lang['EM_confirm_write_local'] = 'Измененные файлы будут загружены с локальной машины через ваш браузер.' ;
$lang['EM_confirm_write_screen'] = 'Измененное содержание файла будет показано на экране..' ;
$lang['EM_test_move'] = 'Испытание метода передвижения' ;
$lang['EM_test_ftp1'] = '1) Успешно загружен' ;
$lang['EM_test_ftp2'] = '2) От CD к EasyMOD директории' ;
$lang['EM_test_ftp3'] = '3) Запись в корень phpBB' ;
$lang['EM_ftp_sync1'] = 'Вы выбрали FTP для записи файлов, но не для их перемещения.  Вы должны установить FTP на запись и перемещение, иначе вы не сможете использовать FTP.' ;
$lang['EM_ftp_sync2'] = 'Вы выбрали FTP для перемещения файлов, но не для записи.  Вы должны установить FTP на запись и перемещение, иначе вы не сможете использовать FTP.' ;
$lang['EM_confirm_move'] = 'Метод перемещения подтвержден!' ;
$lang['EM_confirm_move_ftp'] = 'Файлы будут автоматически заменены в ядре phpBB через FTP.' ;
$lang['EM_confirm_move_copy'] = 'Файлы будут автоматически заменены в ядре phpBB используя функцию копии.' ;
$lang['EM_confirm_move_exec'] = 'Скрипт сгенерирован так, чтобы вы смогли автоматически заменить ядро phpBB' ;
$lang['EM_confirm_move_ftpm'] = 'Вы выбрали ручную замену измененных файлов в ядро phpBB.' ;
$lang['EM_install_EM'] = 'Установка EasyMOD' ;
$lang['EM_confirm_download'] = '<b>ВАЖНО:</b> Чтобы полностью проверить метод загрузки, убедитесь в том, что вы можете загрузить этот файл.  В противном случае вы не сможете использовать "загрузку", нажмите "перескан" чтобы выбрать другой вариант.' ;

// step 2 ftp test
$lang['EM_ftp_testing'] = 'Тест доступа к FTP...' ;
$lang['EM_ftp_fail_conn'] = 'FTP Ошибка: не удалось подключиться к %s' ;
$lang['EM_ftp_fail_conn_lh'] = "Эта ошибка часто происходит, особенно на таких хостах как Lycos.  Вернитесь на шаг 1 и измените сервер FTP на 'localhost'." ;
$lang['EM_ftp_fail_conn_21'] = 'Эта ошибка указывает на то, что неверно указан порт FTP доступа.  Вернитесь на шаг 1 и измените порт FTP Port с 21 на используемый Вами.';
$lang['EM_ftp_fail_conn_invalid'] = "Не удалось подключиться, возможно, вы допустили ошибку в хосте FTP сервера.  Имя хоста не может иметь слеш (/ и \\) и двоеточий (:).  Вернитесь в настройки FTP." ;
$lang['EM_ftp_fail_conn_invalid2'] = 'Не удалось подключиться, возможно, вы допустили ошибку в порте FTP сервера.  Порт должен содержать цифры от 0 до 9. Вернитесь в настройки FTP.';
$lang['EM_fail_conn_info'] = 'FTP сервер, который вы указали, не подключен.  Наши рекомендации:';
$lang['EM_fail_conn_op1'] = 'Вы ставили дефлопный <b>localhost</b>?  Нужно попробовать сначала.' ;
$lang['EM_fail_conn_op2'] = 'Вы правильно ввели хост?  Проверьте.' ;
$lang['EM_fail_conn_op3'] = 'Вы уверены, что вы имеете доступ к phpBB файлам на FTP?  Очевидно это требование.' ;
$lang['EM_fail_conn_op4'] = "Некоторые серверы имеют проблемы с методом fsockopen, который EasyMod пытался использовать по умолчанию.  Если вы имеете загруженное расширение PHP FTP, то позвольте выбор в шаге 1" ;
$lang['EM_fail_login'] = 'FTP Ошибка: Доступ запрещен.' ;
$lang['EM_fail_login_info'] = 'Подключился к FTP, но логин или пароль не верны.  Следуйте нашим рекомендациям:' ;
$lang['EM_fail_login_op1'] = 'Вы уверены в правильности своего логина или пароля?  Убедитесь что CAPS LOCK выключен и повторите попытку.' ;
$lang['EM_fail_login_op2a'] = 'Если вы на 100% уверены в том, что ваш логин/пароль верен, то возможно вы соеденились не с тем хостом.  Попробуйте изменить ваш вход на FTP от "localhost" до фактического названия FTP хоста.' ;
$lang['EM_fail_login_op2b'] = 'Возможно вы соединились не с тем хостом. Попробуйте изменить вход в FTP обратно на "localhost", или введите хост правильно.' ;
$lang['EM_fail_pwd'] = 'FTP Ошибка: Битый pwd' ;
$lang['EM_fail_pwd_info'] = 'Вы успешно вошли на сервер, но команда PWD подвела.' ;
$lang['EM_fail_cd'] = 'FTP Ошибка: нет cd на %s' ;
$lang['EM_fail_cd_info'] = 'Вы успешно вошли на сервер, но не смогли изменить CD в директории easymod.  Следуйте нашим рекомендациям:' ;
$lang['EM_fail_cd_op1'] = '<b>Важно:</b> Кажется вы включили имя домена в настройке phpBB директории.  Для большинства серверов это не правильно.  Вернитесь и исправьте путь до phpBB без доменного имени (от переводчика: путь не может начинаться с ftp://, правильный пример: /work/WWW/phpBB) .' ;
$lang['EM_fail_cd_op2'] = '<b>Важно:</b> Вы имеете слеш (/) в конце пути до скриптов.  Попробуйте устранить это.' ;
$lang['EM_fail_cd_op3'] = 'Вы уверены, что вы указали правильный путь?  Листинг директории в корневой директории на FTP.  Корневая директория FTP, это просто стартовая точка, вы входите на нее при соединении.  Путь к phpBB2 должен начинаться с одной из директив упомянутых ниже.' ;
$lang['EM_fail_cd_op4'] = 'Названия директорий - чувствительный случай.  Убедитесь что easymod директория у вас в нижнем регистре.' ;
$lang['EM_fail_cd_op5'] = "В некотором случае, возможно, то, что вы не соединяетесь с надлежащим FTP сервером.  Попробуйте определить хост в области FTP сервера." ;
$lang['EM_fail_cd_op6'] = "Некоторые серверы имеют проблемы с пассивным режимом, который EasyMod использует по умолчанию." ;
$lang['EM_fail_cd_pwd'] = 'FTP Ошибка: Директивная информация не могла быть получена.  Это указывает на упомянутое выше решение 4.' ;
$lang['EM_fail_cd_nlist'] = 'FTP Ошибка: Не получен листинг файлов.  Это указывает на упомянутое выше решение 4.' ;
$lang['EM_fail_cd_nlist_no'] = 'Нет файлов для пересчета.' ;
$lang['EM_fail_make_cache'] = 'Не могу создать директорию [%s].';
$lang['EM_fail_tmp'] = 'Не могу создать временный файл [%s].';
$lang['EM_ftp_root'] = 'FTP корневая директория:';
$lang['EM_dir_current'] = 'Текущая рабочая директория';
$lang['EM_dir_nlist'] = '<b>Листинг директории:</b> (%d файлов обнаружено)';
$lang['EM_dir_list'] = '<b>Листинг директории:</b> Ваш путь в FTP должен начинаться с одной из перечисленных директорий';
$lang['EM_fail_put'] = 'FTP Ошибка: Не могу выполнить запись в phpBB директорию.' ;
$lang['EM_fail_put_info'] = 'EasyMOD требует чтобы ваш <b>%s</b> имел доступ на запись ко всем директориям и файлам в phpBB директории.  Выставите на все файлы и папке атрибут - 744.' ;
$lang['EM_ftp_phpbb_root'] = 'phpBB корневая директория:' ;
$lang['EM_fail_reput'] = 'FTP Ошибка: не мог переписать тестовый файл в корне phpBB' ;
$lang['EM_fail_delete'] = '<b>FTP ПРЕДУПРЕЖДЕНИЕ:</b> не мог удалить испытательный файл (не смертельно)' ;

// step 3
$lang['EM_step3'] = '<b>Шаг 3 (из 5):</b> EasyMOD теперь установлен. Процесс состоит из 2-х вариантов, создания измененных файлов и затем перемещения их на место.   Измененные файлы никогда не изменяют ядро phpBB до последнего шага.  Кликните на "закончить установку", чтобы переместить файлы на свое место.' ;
$lang['EM_processing_files'] = 'Обработка файлов' ;
$lang['EM_parsing'] = 'Парсинг' ;
$lang['EM_finding'] = 'Поиск' ;
$lang['EM_insert'] = 'Вставить' ;
$lang['EM_ifinding'] = 'Найти на линии' ;
$lang['EM_iafter'] = 'На линии, после добавить' ;
$lang['EM_before'] = 'перед' ;
$lang['EM_after'] = 'после' ;
$lang['EM_build_post'] = 'Обработка действий' ;
$lang['EM_build_post_desc'] = 'Следующие действия будут выполнены в заключительном шаге.' ;
$lang['EM_complete_processing'] = 'Полная обработка' ;

// step 4
$lang['EM_step4'] = '<b>Шаг 4 (из 5):</b> В зависимости от вашего выбора, измененные файлы были автоматически перемещены на свое место, или подготовились для перемещения их вручную.  Если нет никаких ошибок, щелкните на кнопку "Confirm", чтобы обновить вашу базу данных и закончить инсталляционный процесс.' ;
$lang['EM_add_db'] = 'Добавление таблицы EasyMOD к вашей базе данных.' ;
$lang['EM_exec_sql'] = 'Выполнение SQL' ;
$lang['EM_progress'] = 'Процесс' ;
$lang['EM_done'] = 'Сделать' ;
$lang['EM_result'] = 'Результат' ;
$lang['EM_already_exist'] = 'Таблица создана' ;
$lang['EM_failed_sql'] = 'Некоторые операции не выполнены, утверждения и ошибки смотрите ниже' ;
$lang['EM_no_worry'] = 'Нет повода для беспокойства, продолжайте установку. Если вы не в состоянии закончить установку, обратитесь на форум технической поддержки.' ;
$lang['EM_no_errors'] = 'Нет ошибок' ;
$lang['EM_update_db'] = 'Обновление данных в таблице EasyMod' ;
$lang['EM_store_entries'] = 'Хранение конфига в таблице' ;
$lang['EM_do_worry'] = 'Не мог обновить таблицу.  Установка не может продолжаться.' ;
$lang['EM_complete_post'] = 'Завершение постпроцесса' ;
$lang['EM_completed'] = 'Закончить' ;
$lang['EM_admin_panel'] = 'Теперь вы можете перейти в панель администратора и приступить к установке модов.  Вернуться на <a href="../../../index.php">список форумов</a>.' ;
$lang['EM_confirm'] = 'Confirm' ;
$lang['EM_move_files'] = '<b>ВАЖНО:</b> Перед подтверждением, файлы переместите на место.' ;

// step 5
$lang['EM_step5'] = '<b>Последний шаг:</b> EasyMOD подтверждает, что все файлы были перемещены на свое место.  Если подтверждено, ваша база данных будет обновлена и установка будет завершена!' ;
$lang['EM_confirming_mod'] = 'Подтверждение модификаций' ;
$lang['EM_confirmed'] = 'Подтвержденный!' ;
$lang['EM_confirm_lang'] = 'lang_admin.php, looking for' ;
$lang['EM_confirm_admin'] = 'admin_easymod.php, looking for' ;
$lang['EM_confirm_exist'] = 'подтверждение' ;
$lang['EM_confirm_failed'] = 'Ошибка установки' ;
$lang['EM_confirm_fix'] = 'EM не установлен должным образом, устраните вышеупомянутые ошибки.' ;
$lang['EM_install_completed'] = 'EasyMOD установлен!' ;

// debug info
$lang['EM_debug_header'] = '<b>Информация отладки:</b> Следующая информация сконфигурируема для показа на форуме.' ;
$lang['EM_debug_display'] = 'Информация отладки' ;
$lang['EM_debug_info'] = 'Расширенная информация отладки' ;
$lang['EM_debug_format'] = 'форматированный для форума' ;
$lang['EM_debug_installer'] = 'EM установка' ;
$lang['EM_debug_work_dir'] = 'Рабочая папка' ;
$lang['EM_debug_step'] = 'Шаг установки' ;
$lang['EM_debug_mode'] = 'Режим' ;
$lang['EM_debug_the_error'] = 'Ошибки' ;
$lang['EM_debug_no_error'] = 'Нет ошибок.' ;
$lang['EM_debug_permissions'] = 'Разрешения' ;
$lang['EM_debug_sys_errors'] = 'включенные ошибки системы' ;
$lang['EM_debug_recommend'] = 'Рекомендации' ;
$lang['EM_debug_write'] = 'запись' ;
$lang['EM_debug_move'] = 'перемещение' ;
$lang['EM_debug_ftp_dir'] = 'ftp папка' ;
$lang['EM_debug_ftp_host'] = 'ftp хост';
$lang['EM_debug_ftp_post'] = 'ftp порт';
$lang['EM_debug_ftp_debug'] = 'ftp отладка' ;
$lang['EM_debug_ftp_ext'] = 'ftp расширение' ;
$lang['EM_debug_ftp_cache'] = 'ftp кеш';
$lang['EM_debug_ftp_notest'] = 'НЕ проверен FTP так-как он не используется.' ;
$lang['EM_debug_selected'] = 'Обработанные параметры настройки' ;
$lang['EM_debug_listing'] = 'CWD листинг (текущая рабочая папка)' ;                // cwd = current working directory
$lang['EM_debug_ftp_test'] = 'Тест доступа к FTP' ;
$lang['EM_debug_success'] = 'успешно' ;

// forms
$lang['Submit'] = 'ОК';
$lang['Rescan'] = 'Рескан';

//
// errors
//
$lang['EM_err_warning'] = 'Предупреждение' ;
$lang['EM_err_error'] = 'Ошибка' ;
$lang['EM_err_critical_error'] = 'Критическая ошибка' ;
$lang['EM_err_secondary'] = 'Вторичная критическая ошибка' ;
$lang['EM_err_cwd'] = 'Текущая рабочая папка' ;
$lang['EM_err_install_dir'] = '<b>Критическая ошибка:</b> EasyMOD не корректно установлен.  Это должно быть перемещено в admin/mods/easymod от корня phpBB<br>' ;
$lang['EM_err_no_subsilver'] = '<b>Критическая ошибка:</b> EasyMOD не может быть установлен.  Тема subSilver не установлена.  Эта тема используется как стандартная тема для модов.  Тема subSilver поставляется в стандартном наборе phpBB, загрузите с <a href="http://www.phpbb.com">www.phpbb.com</a>.' ;
$lang['EM_err_no_english'] = '<b>Критическая ошибка:</b> EasyMOD не может быть установлен.  Не найден английский язык в директории с языками.  Английский язык используется как стандартный язык для модов.  Английский язык поставляется в стандартном наборе phpBB, загрузите с <a href="http://www.phpbb.com">www.phpbb.com</a>.' ;
$lang['EM_err_dupe_install'] = 'Эта версия EM уже установлена.  Завершите, чтобы предотвратить переустановку.' ;
$lang['EM_err_pw_match'] = '<b>Ошибка:</b> Пароль к EasyMOD не совпадает.  Повторите, нажимая кнопку "рескан".' ;
$lang['EM_err_acc_write'] = '<b>ОШИБКА ДОСТУПА:</b> phpBB не имеет разрешения на запись в директорию EasyMod.' ;
$lang['EM_err_acc_mkdir'] = '<b>ОШИБКА ДОСТУПА:</b> phpBB не имеет разрешения создать новые папки.' ;
$lang['EM_err_copy'] = '<b>ОШИБКА КОПИРОВАНИЯ:</b> Вы не имеете доступа к копии.  Метод перемещения не используется.' ;
$lang['EM_err_no_write'] = '<b>ОШИБКА ПЕРЕМЕЩЕНИЯ:</b> Метод записи, который вы выбрали, не создает файлы на сервере.  Поэтому, использование FTP или метод копирования не разрешен для метода перемещения.' ;
$lang['EM_err_config_table'] = 'Не могу получить содержание таблицы' ;
$lang['EM_err_open_pp'] = '<b>Критическая ошибка:</b> Не могу открыть файл для записи письма.' ;
$lang['EM_err_attempt_remainder'] = 'ОСТАТОК ATTEMPING ОТ ПОЧТОВОГО ПРОЦЕССА' ;
$lang['EM_err_write_pp'] = '<b>Критическая ошибка:</b> Не могу записать письмо.' ;
$lang['EM_err_no_step'] = '<b>Критическая ошибка:</b>  Вернитесь к установке.' ;
$lang['EM_err_no_sql'] = '<b>Критическая ошибка:</b> Не найдена БД!';
$lang['EM_err_no_tpl'] = 'Запрошенный файл [%s] не найден. Инсталяция прервана.';
$lang['EM_err_no_file'] = '<b>Критическая ошибка:</b> не найден [%s]. Инсталяция прервана.';
$lang['EM_err_insert'] = 'Не могу вставить %s в конфиг.' ;
$lang['EM_err_update'] = 'Не могу обновить %s в конфиге.' ;
$lang['EM_err_find'] = 'Не могу найти' ;
$lang['EM_err_pw_fail'] = 'НЕ ДЕЙСТВИТЕЛЬНЫЙ ПАРОЛЬ' ;
$lang['EM_err_find_fail'] = 'ОШИБКА ПОИСКА: На линии [%s] не могу найти' ;
$lang['EM_err_ifind_fail'] = 'ОШИБКА ПОИСКА НА ЛИНИИ: В файле [%s] не могу найти' ;

// admin_easymod errors
$lang['EM_trace'] = 'Функции Trace' ;
$lang['EM_FAQ'] = 'ЧаВо' ;
$lang['EM_report'] = 'Рапорт' ;
$lang['EM_error_detail'] = 'Детали ошибки' ;
$lang['EM_line_num'] = 'Скрипт мода, линия #' ;
$lang['EM_err_config_info'] = 'Не могу получить информацию с конфига' ;
$lang['EM_err_no_process_file'] = 'Критическая ошибка: Есть неопределенный параметр для обработки.' ;
$lang['EM_err_set_pw'] = 'Пароль к EasyMOD не совпадает.  Настройки не обновлены.' ;
$lang['EM_err_em_info'] = 'Не могу получить информацию о EasyMod' ;
$lang['EM_err_phpbb_ver'] = 'Не могу получить информацию о версии PHP' ;
$lang['EM_err_backup_open'] = 'Не могу открыть [%s] для чтения.' ;
$lang['EM_err_no_find'] = 'ОШИБКА: Некорректный скрипт.  Поиск не был предварительно выполнен.' ;
$lang['EM_err_comm_open'] = 'ОШИБКА: Нет названия файла поставляемое в скрипте мода.' ;
$lang['EM_err_comm_find'] = 'ОШИБКА: Не найдена команда в скрипте мода.' ;
$lang['EM_err_inline_body'] = 'ОШИБКА: Не действительное содержимое команды постовляемой с скрипте мода.' ;
$lang['EM_err_no_ifind'] = 'ОШИБКА: Некорректный скрипт.  Поиск на линии не был предварительно выполнен.' ;
$lang['EM_err_comm_copy'] = 'ОШИБКА: Целевой файл, который будет скопирован [%s%s] не найден.' ;
$lang['EM_err_modify'] = 'КРИТИЧЕСКАЯ ОШИБКА: Не могу изменить [%s]' ;
$lang['EM_err_theme_info'] = 'В базе данных нет информации о теме' ;
$lang['EM_err_copy_format'] = 'Не могу выполнить ненадлежащим образом сформированную команду COPY.' ;
$lang['EM_err_delete_em_info'] = 'Не могу удалить запись!';

// mod_io errors
$lang['EM_modio_mkdir_chdir'] = 'FTP ОШИБКА: не могу изменить директорию на [%s]<br>Текущая директория: [%s]' ;
$lang['EM_modio_mkdir_mkdir'] = 'FTP ОШИБКА: не могу создать директорию [%s]<br>Текущая директория: [%s]' ;
$lang['EM_modio_open_read'] = 'Не могу открыть [%s] для чтения.' ;
$lang['EM_modio_open_write'] = 'Не могу открыть [%s] для записи.' ;
$lang['EM_modio_open_none'] = 'Не признанный метод записи.' ;
$lang['EM_modio_close_chdir'] = 'FTP ОШИБКА: не могу изменить директорию на [%s]' ;
$lang['EM_modio_close_ftp'] = 'FTP ОШИБКА: не могу записать файл [%s]' ;
$lang['EM_modio_prep_conn'] = 'FTP ОШИБКА: не могу подключиться к localhost' ;
$lang['EM_modio_prep_login'] = 'FTP ОШИБКА: битый логин' ;
$lang['EM_modio_prep_chdir'] = 'FTP ошибка: не могу внедрить директорию в phpBB' ;
$lang['EM_modio_move_copy'] = 'ОШИБКА КОПИРОВАНИЯ: не могу переместить файл [%s] в [%s]' ;
$lang['EM_modio_move_ftpa'] = 'FTP ОШИБКА: не могу переместить файл [%s] в [%s]' ;

// EasyMOD Installer Help
$lang['EM_installer_help'] = 'EasyMOD Installer Help';
$lang['help']['file_writing'][] = 'File Writing';
$lang['help']['file_writing'][] = 'Here you can select one of the following options:
<ul>
<li><b>Server:</b> Files will be written using regular file manipulation functions. The user running the web server process needs write access to the files.</li>
<li><b>Buffer &amp; FTP:</b> Files will be prepared on a memory buffer and then written into place using an FTP connection to the server.</li>
<li><b>Download:</b> EasyMOD will offer you the possibility to download the modified files for you to manually upload to the server.</li>
<li><b>On Screen:</b> EasyMOD will display the modified files on the browser, then you would have to upload them manually.</li>
</ul>';
$lang['help']['file_moving'][] = 'File Moving';
$lang['help']['file_moving'][] = 'Here you can select one of the following options:
<ul>
<li><b>Copy:</b> Files will be copied using regular file manipulation functions. The user running the web server process needs access permissions to the files.</li>
<li><b>Automated FTP:</b> Files will be copied into place using an FTP connection to the server.</li>
<li><b>Execute Script:</b> EasyMOD will attempt to generate and execute a shell script to perform the required file operations.</li>
<li><b>Manually Load:</b> EasyMOD will allow you to download the files (or display them on screen) and then you have to manually upload the files to the server.</li>
</ul>';
$lang['help']['ftp_dir'][] = 'FTP Directory';
$lang['help']['ftp_dir'][] = 'Most of all it is important that you don\'t put the slash (/) at the end of the path.';
$lang['help']['ftp_dir'][] = 'Second thing to remember is that (in most cases) this path is not the same as you would put in your main configuration settings (in Administration Panel). Usually the path is different because FTP servers hide the real directory structure of the web server.';
$lang['help']['ftp_dir'][] = 'So the path needs to be the same as the one that you have to walk through when using your FTP client to get to your forum (there should be a file like extension.inc there). Common settings would be:
<ul>
<li>public_html/phpBB2</li>
<li>public_html/forum</li>
<li>httpdocs/phpBB2</li>
<li>httpdocs/forum</li>
<li>board_name/phpBB2</li>
<li>board_name/forum</li>
<li>phpBB2</li>
<li>forum</li>
<li>/ (this usually means that you don\'t actually have anything else on your FTP server than the forum)</li>
</ul>';
$lang['help']['ftp_host'][] = 'FTP Host';
$lang['help']['ftp_host'][] = 'This should usually remain localhost, but some servers (like Lycos) need a different name.';
$lang['help']['ftp_host'][] = 'If you don\'t know what to put in here then try the default (localhost) and then try to use the same setting as you use in you FTP client or ask your hosting provider or server administrator.';
$lang['help']['ftp_port'][] = 'FTP Port';
$lang['help']['ftp_port'][] = 'This should usually be the default value (that is 21), but some (rare) servers use a different port.';
$lang['help']['ftp_port'][] = 'If you don\'t know what to put in here then try the default (21) and then try to use the same setting as you use in you FTP client or ask your hosting provider or server administrator.';
$lang['help']['ftp_debug'][] = 'FTP Debug';
$lang['help']['ftp_debug'][] = 'This option tells EasyMOD to generate an extended report that may help to identify problems with FTP connections.';
$lang['help']['ftp_debug'][] = 'Support staff may request this information for diagnosis purposes.';
$lang['help']['ftp_php_ext'][] = 'PHP FTP Extension';
$lang['help']['ftp_php_ext'][] = 'This option instructs EasyMOD to use the <a href="http://www.php.net/ftp" target="_blank">PHP FTP Extension</a> to perform the file operations required to install MODs. However, this extension may not be enabled in your server configuration.';
$lang['help']['ftp_php_ext'][] = 'EasyMOD will try to use the <a href="http://www.php.net/network" target="_blank">PHP Network Functions</a>, if this option is not enabled. While there\'s no special requirement in PHP to use these functions, they may be restricted in your server configuration.';
$lang['help']['ftp_cache'][] = 'FTP Cache';
$lang['help']['ftp_cache'][] = 'When the <em>PHP FTP Extension</em> option is enabled, EasyMOD needs write access to a temporary location to store the files that need to be moved to their final locations using the FTP method.';
$lang['help']['ftp_cache'][] = 'EasyMOD will attempt to create a cache directory located in your admin/em_includes folder. Otherwise, when this option is disabled, it will try to use the system TEMP directory.';

?>