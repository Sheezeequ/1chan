<?php

/***************************************************************************
 *                                lang_xs.php [Русский]
 *                                -----------
 *   копирайт                   : (C) 2003, 2004 CyberAlien
 *   поддержка                  : http://www.phpbbstyles.com
 *
 *   версия                     : 2.0.0.rc4
 *
 *   file revision              : 16
 *   project revision           : 25
 *   последнее изменение        : 02 Jul 2004  13:00:46
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

$lang['Extreme_Styles'] = 'eXtreme стили';
$lang['xs_title'] = 'МОД eXtreme стилей';

$lang['xs_file'] = 'Файл';
$lang['xs_template'] = 'Шаблон';
$lang['xs_id'] = 'ID';
$lang['xs_style'] = 'Стиль';
$lang['xs_styles'] = 'Стили';
$lang['xs_users'] = 'Пользователи';
$lang['xs_options'] = 'Опции';
$lang['xs_comment'] = 'Коментарии';
$lang['xs_upload_time'] = 'Время загрузки';
$lang['xs_select'] = 'Выбрать';

$lang['xs_continue'] = 'Продолжить';        // кнопка

$lang['xs_click_here_lc'] = 'нажать';
$lang['xs_edit_lc'] = 'Редактировать';

/*
* navigation
*/
$lang['xs_config_shownav'] = array(
        'Конфигурация',
        'Установить стиль',
        'Удалить стиль',
        'Стиль по умолчанию',
        'Править Кеш',
        'Импорт стилей',
        'Экспортировать стиль',
        'Клонировать стиль',
        'Скачать стиль',
        'Редактировать шаблоны',
        'Редактировать стиль',
        'Экспортировать базу',
        'Проверка обновлений',
	);

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = 'Меню мода extreme стилей ';
$lang['xs_support_forum_lc'] = 'Форум поддержки';
$lang['xs_download_styles_lc'] = 'Загрузить стили';
$lang['xs_install_styles_lc'] = 'Установить стили';

/*
* index.tpl
*/

$lang['xs_main_comment1'] = 'Это меню мода eXtreme стилей. Есть довольно много функций в пределах этого интерфейса, так что эта страница - здесь как пример.<br /><br />Обратите внимание: Этот мод заменяет phpBB управление стилей. Вы найдете те же функции что и по умолчанию в phpBB , но эти функции теперь оптимизированы и имеют дополнительные возможности.<br /><br />Если у вас есть любые вопросы, пожалуйста посетите <a href="http://www.phpbbstyles.com" target="_blank">форум поддержки</a> где вы можете получить помощь для этого мода.';
$lang['xs_main_comment2'] = 'Мод eXtreme стилей позволяет admin хранить полные стили в .style files. Стили сохранены в маленьком сжатом файле, это экономит время скачивания/загрузки большого количества файлов. Файлы стиля сжаты так что скачивание/загрузка, намного более эффективенее чем скачивание/загрузка обычных файлов стиля.';
$lang['xs_main_comment3'] = 'Все функции phpBB управления стилями заменены модом eXtreme стили.<br /><br /><a href="{URL}">Нажать</a> для просмотра меню.';
$lang['xs_main_title'] = 'Меню управления eXtreme стилями';
$lang['xs_menu'] = 'Меню eXtreme стилей';

$lang['xs_manage_styles'] = 'Управление стилями';
$lang['xs_import_export_styles'] = 'Импорт/Экспорт стилей';
$lang['xs_install_uninstall_styles'] = 'Инсталировать/Деинсталировать стили';
$lang['xs_edit_templates'] = 'Редактировать шаблоны';
$lang['xs_other_functions'] = 'Другие функции';

$lang['xs_configuration'] = 'Конфигурация';
$lang['xs_configuration_explain'] = 'Здесь вы можете изменять конфигурацию eXtreme стилей.';
$lang['xs_default_style'] = 'Стиль по умолчанию';
$lang['xs_default_style_explain'] = 'Здесь вы можете изменять стиль форума по умолчанию и переключать пользователей с одного стиля на другой.';
$lang['xs_manage_cache'] = 'Управление кэшем';
$lang['xs_manage_cache_explain'] = 'Здесь вы можете управлять кэшированными файлами.';
$lang['xs_import_styles'] = 'Импортировать стили';
$lang['xs_import_styles_explain'] = 'Здесь вы можете скачать и инсталировать .style files.';
$lang['xs_export_styles'] = 'Экспортировать стили';
$lang['xs_export_styles_explain'] = 'Здесь вы можете сохранить стиль для вашего форума как .style file и это легко передается другому форуму или вебсайту.';
$lang['xs_clone_styles'] = 'Копировать стили';
$lang['xs_clone_styles_explain'] = 'Здесь вы можете быстро скопировать стили или целый шаблон.';
$lang['xs_download_styles'] = 'Скачать стили';
$lang['xs_download_styles_explain'] = 'Здесь вы можете быстро загрузить и устанавить стили с вебсайтов. Вы можете формировать список вебсайтов самостоятельно.';
$lang['xs_install_styles'] = 'Установить стили';
$lang['xs_install_styles_explain'] = 'Здесь вы можете установить стили, которые уже загружены на ваш форум.';
$lang['xs_uninstall_styles'] = 'Удалить стили';
$lang['xs_uninstall_styles_explain'] = 'Здесь вы можете удалить стили для вашего форума.';
$lang['xs_edit_templates_explain'] = 'Здесь вы можете редактировать tpl файлы онлайн.';
$lang['xs_edit_styles_data'] = 'Редактирование данных стилей';
$lang['xs_edit_styles_data_explain'] = 'Здесь вы можете редактировать измененый стиль. Это доступно большиму количеству стилей, не доступно только в стилях основанных на css файлах.';
$lang['xs_export_styles_data'] = 'Экпорт данных стилей';
$lang['xs_export_styles_data_explain'] = 'Здесь вы можете записать и изменить theme_info.cfg стиля.';
$lang['xs_check_for_updates'] = 'Проверка для обновления';
$lang['xs_check_for_updates_explain'] = 'Здесь вы можете проверить обновлённые версии стилей и модов, установленных на вашем форуме.';

$lang['xs_set_configuration_lc'] = 'набор конфигурации';
$lang['xs_set_default_style_lc'] = 'набор стиля по умолчанию';
$lang['xs_manage_cache_lc'] = 'управление Кешем';
$lang['xs_import_styles_lc'] = 'импортировать стили';
$lang['xs_export_styles_lc'] = 'экспортировать стили';
$lang['xs_clone_styles_lc'] = 'копировать стили';
$lang['xs_uninstall_styles_lc'] = 'удалить стили';
$lang['xs_edit_templates_lc'] = 'редактировать шаблоны';
$lang['xs_edit_styles_data_lc'] = 'редактировать данные стилей';
$lang['xs_export_styles_data_lc'] = 'экспортировать данные стилей';
$lang['xs_check_for_updates_lc'] = 'проверить для обновления';

/*
* ftp.tpl, ftp functions
*/

$lang['xs_ftp_comment1'] = 'Чтобы использовать эту функцию, вы должны выбрать метод загрузки файла. Если вы выбираете FTP, то пароль не будет сохранен и eXtreme стили будут просить у вас пароль каждый раз, когда вы выбираете функции, которые требуют FTP доступа. Если вы выбираете локальную файловую систему, удостовертесь, что требуемая дериктория доступна.';
$lang['xs_ftp_comment2'] = 'Чтобы использовать эту функцию, вы должны установить FTP доступ. Пароль не будет сохранен, и eXtreme стили будут просить у вас пароль каждый раз, когда вы выбираете функции, который требуется для доступа на FTP .';
$lang['xs_ftp_comment3'] = 'Предупреждение: FTP доступ отсутствует на этом сервере. Вы не сможете использовать eXtreme стили, которые требуют FTP доступа.';

$lang['xs_ftp_title'] = 'FTP конфигурация';

$lang['xs_ftp_explain'] = 'FTP используется для загрузки новых стилей. Если вы хотите использовать преимущуства  импорта стилей, тогда вы должны указать соответствующее FTP. Делаются попытки авто-обнаружения стилей.';

$lang['xs_ftp_error_fatal'] = 'FTP функции отсутствуют на этом сервере. Не могу продолжать.';
$lang['xs_ftp_error_connect'] = 'FTP ошибка: не может соеденится с {HOST}';
$lang['xs_ftp_error_login'] = 'FTP ошибка: не может войти';
$lang['xs_ftp_error_chdir'] = 'FTP ошибка: не может изменить директорию на {DIR}';
$lang['xs_ftp_error_nonphpbbdir'] = 'FTP ошибка: неправильная директория. Нет файлов phpBB в этой директории';
$lang['xs_ftp_error_noconnect'] = 'Не может соеденится с ftp сервером';
$lang['xs_ftp_error_login2'] = 'Неверный ftp логин и (или) пароль';

$lang['xs_ftp_log_disabled'] = 'ftp функции отсутствуют на этом сервере. скрипт не может работать дальше.';
$lang['xs_ftp_log_connecting'] = 'соединение с {HOST}';
$lang['xs_ftp_log_noconnect'] = 'нет соединения с {HOST}';
$lang['xs_ftp_log_connected'] = 'соединение. вход в...';
$lang['xs_ftp_log_nologin'] = 'не входит как {USER}';
$lang['xs_ftp_log_loggedin'] = 'входит в';
$lang['xs_ftp_log_end'] = 'окончание работы скрипта';
$lang['xs_ftp_log_nopwd'] = 'Ошибка: не может восстановить текущую директорию';
$lang['xs_ftp_log_nomkdir'] = 'Ошибка: не может создать дирректорию {DIR}';
$lang['xs_ftp_log_mkdir'] = 'создать дирректорию {DIR}';
$lang['xs_ftp_log_nochdir'] = 'Ошибка: не может изменить директорию к {DIR}';
$lang['xs_ftp_log_normdir'] = 'Ошибка: не может удалить директорию {DIR}';
$lang['xs_ftp_log_rmdir'] = 'удаление директории {DIR}';
$lang['xs_ftp_log_chdir'] = 'изменение директории к {DIR}';
$lang['xs_ftp_log_noupload'] = 'Ошибка: не может загрузить файл {FILE}';
$lang['xs_ftp_log_upload'] = 'загружается файл {FILE}';
$lang['xs_ftp_log_nochmod'] = 'Предупреждение: не тот chmod файла {FILE}';
$lang['xs_ftp_log_chmod'] = 'chmod файла {FILE}  {MODE}';
$lang['xs_ftp_log_invalidcommand'] = 'Ошибка: неизвестная команда: {COMMAND}';
$lang['xs_ftp_log_chdir2'] = 'изменение текущей директории назад к {DIR}';
$lang['xs_ftp_log_nochdir2'] = 'не измененять директории к {DIR}';

$lang['xs_ftp_config'] = 'Конфигурация FTP';
$lang['xs_ftp_select_method'] = 'Выбрать метод загрузки';
$lang['xs_ftp_select_local'] = 'Выбрать локальную файловую систему (не требует конфигурации)';
$lang['xs_ftp_select_ftp'] = 'Выбрать FTP (параметры ftp выбираются ниже)';

$lang['xs_ftp_settings'] = 'FTP параметры';
$lang['xs_ftp_host'] = 'FTP Хост';
$lang['xs_ftp_login'] = 'FTP вход';
$lang['xs_ftp_path'] = 'FTP путь для phpBB';
$lang['xs_ftp_pass'] = 'FTP пароль';
$lang['xs_ftp_remotedir'] = 'Удалить директорию';

$lang['xs_ftp_host_guess'] = ' (обычно "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">хост</a>])';
$lang['xs_ftp_login_guess'] = ' (обычно "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">хост</a>])';
$lang['xs_ftp_path_guess'] = ' (обычно "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">патч</a>])';


/*
* config.tpl
*/

$lang['xs_config_updated'] = 'Конфигурания обновлена.';
$lang['xs_config_updated_explain'] = 'Вы должны обновить эту страницу прежде, чем новая конфигурация вступит в силу. <a href="{URL}">Нажать</a> для обновления страницы.';
$lang['xs_config_warning'] = 'Предупреждение: Кеш не может записаться.';
$lang['xs_config_warning_explain'] = 'Кеш не записан. eXtreme стили могут папытаться устранить эту проблемму.<br /><a href="{URL}">Нажать</a> чтобы изменить доступ на Кеш дерикторию.<br /><br />Если Кеш не работает на вашем сервере по некоторым причинам не волнуйтесь - eXtreme стили<br />форума работают достаточно быстро и без Кеш.';

$lang['xs_config_maintitle'] = 'Конфигурация мода eXtreme стилей';
$lang['xs_config_subtitle'] = 'Это конфигурация для eXtreme стилей. Если вы не понимаете, не изменяйте ее.';
$lang['xs_config_title'] = 'Параметры eXtreme мод стиля v{VERSION}';
$lang['xs_config_cache'] = 'Кеш конфигурация';

$lang['xs_config_navbar'] = 'Показ на левой рамке:';
$lang['xs_config_navbar_explain'] = 'Вы можете выбрать какие пункты показать на левой рамке в admin разделе.';

$lang['xs_config_def_template'] = 'Директория шаблона по умолчанию';
$lang['xs_config_def_template_explain'] = 'Если требуемый tpl файл не найден в текущей директории шаблона (если использовали неправильные моды phpBB) тогда система шаблона ищет такой же файл в связанной дерриктории (подобно тому, как если бы текущий шаблон - "myTemplate" требует файл "myTemplate/myfile.tpl" и этого файла нет, файл будеи искаться в "subSilver/myfile.tpl"). Можно отменить это.';

$lang['xs_config_check_switches'] = 'Проверьте параметры при компилировании';
$lang['xs_config_check_switches_explain'] = 'Здесь проверяются ошибки в шаблонах. Выключение этого ускорит компиляцию, но компилятор может пропустить некоторые ошибки в шаблонах, если они есть.<br /><br />Сильная проверка проверит шаблоны на ошибки и автоматически устранит их (есть немного известных опечаток в различных модах). Работает медленнее чем простая проверка.<br /><br />Но иногда шаблон выглядит неправильно только, когда проверка на ошибки не работала; это случается из-за плохого кодирования html станиц, кто бы ни написал tpl файл, если Вы хотите устранить ошибки.<br /><br />Если Кеш поврежден, то выключите это для более быстрой компиляции.';
$lang['xs_config_check_switches_0'] = 'Выкл.';
$lang['xs_config_check_switches_1'] = 'Подробная проверка';
$lang['xs_config_check_switches_2'] = 'Обычная проверка';

$lang['xs_config_show_errors'] = 'Показ ошибок, когда файлы неправильно включены в tpl файлы';
$lang['xs_config_show_error_explain'] = 'Здесь включаются/выключаются ошибки в tpl файлах внесенные пользователем &lt;!-- INCLUDE filename --&gt;';

$lang['xs_config_tpl_comments'] = 'Добавить tpl имя файла в html';
$lang['xs_config_tpl_comments_explain'] = 'Здесь добавлются комментарии к коду html, которые позволяют проектировщикам стиля обнаруживать, какой tpl файл используется.';

$lang['xs_config_use_cache'] = 'Использовать Кеш';
$lang['xs_config_use_cache_explain'] = 'Кеш сохраняется на диск  и это ускоряет формирование шаблонов, потому что не надо собирать шаблон каждый раз при демонстрации.';

$lang['xs_config_auto_compile'] = 'Автоматическая запись Кеш';
$lang['xs_config_auto_compile_explain'] = 'Здесь автоматически соберутся шаблоны, которые - не Кешируются и запишутся в дерикторию Кешировния.';

$lang['xs_config_auto_recompile'] = 'Автоматически обновлять Кеш';
$lang['xs_config_auto_recompile_explain'] = ' Здесь автоматически соберутся шаблоны, если шаблон был изменен.';

$lang['xs_config_php'] = 'Расширение имен файла Кеш';
$lang['xs_config_php_explain'] = 'Это - расширение Кешируемых файлов. Файлы сохраняются в формате php, так что расширение по умолчанию - "php". Не забудте про точку :-)))';

$lang['xs_config_back'] = '<a href="{URL}">Нажать</a> чтобы вернуть конфигурацию.';
$lang['xs_config_sql_error'] = 'Неудачное обновление основной конфигурации {VAR}';

// Debug info
$lang['xs_debug_header'] = 'Информация отладки';
$lang['xs_debug_explain'] = 'Информация отладки используемая, чтобы найти проблемы при конфигурировании Кеш.';
$lang['xs_debug_vars'] = 'Проверка шаблона';
$lang['xs_debug_tpl_name'] = 'Имя файла шаблона:';
$lang['xs_debug_cache_filename'] = 'Имя файла Кеш:';
$lang['xs_debug_data'] = 'Данные отладки:';

$lang['xs_check_hdr'] = 'Проверка Кеш для %s';
$lang['xs_check_filename'] = 'Ошибка: неправильное имя файла';
$lang['xs_check_openfile1'] = 'Ошибка: не могу открыть файл "%s". Буду пробывать создать директорию...';
$lang['xs_check_openfile2'] = 'Ошибка: не могу открыть файл "%s" в течение второго раза. Отказ...';
$lang['xs_check_nodir'] = 'Проверка "%s" - нет директории.';
$lang['xs_check_nodir2'] = 'Ошибка: не могу создать дерикторию "%s" - Вы, возможно, должны проверить разрешения.';
$lang['xs_check_createddir'] = 'Создается директория "%s"';
$lang['xs_check_dir'] = 'Проверка "%s" - директория существует.';
$lang['xs_check_ok'] = 'Файл "%s" открыт для записи. Кажется все в порядке.';


/*
* chmod
*/

$lang['xs_chmod'] = 'CHMOD';
$lang['xs_chmod_return'] = '<br /><br /><a href="{URL}">Нажмите</a> чтобы вернуть конфигурацию.';
$lang['xs_chmod_message1'] = 'Конфигурация изменена.';
$lang['xs_chmod_error1'] = 'Не могу изменить доступ Кеш дерриктории';


/*
* default style
*/

$lang['xs_def_title'] = 'Набор стиля по умолчанию';
$lang['xs_def_explain'] = 'Здесь вы можете быстро изменить стиль форума по умолчанию и также переключить пользователей от одного стиля к другому.';

$lang['xs_styles_set_default'] = 'набор по умолчанию';
$lang['xs_styles_no_override'] = 'применить пользовательские настройки';
$lang['xs_styles_do_override'] = 'отменить пользовательские настройки';
$lang['xs_styles_switch_all'] = 'переключить всех пользователей к этому стилю';
$lang['xs_styles_switch_all2'] = 'переключаь всех пользователей:';
$lang['xs_styles_defstyle'] = 'стиль по умолчанию';
$lang['xs_styles_available'] = 'Доступные стили';
$lang['xs_styles_make_public'] = 'сделать стиль публичным';
$lang['xs_styles_make_admin'] = 'сделать стиль только для администратора';
$lang['xs_styles_users'] = 'Список пользователей';


/*
* cache management
*/

$lang['xs_manage_cache_explain2'] = 'Здесь вы можете собирать или удалять кэшированные файлы для стилей.';
$lang['xs_clear_all_lc'] = 'очистить всё';
$lang['xs_compile_all_lc'] = 'компилировать всё';
$lang['xs_clear_cache_lc'] = 'очистить Кеш';
$lang['xs_compile_cache_lc'] = 'компиляция Кеш';
$lang['xs_cache_confirm'] = 'Если вы имеете много стилей, это может загрузить сервер. Вы уверены, что хотите продолжить?';

$lang['xs_cache_nowrite'] = 'Ошибка: не найдена Кеш дериктория';
$lang['xs_cache_log_deleted'] = 'Удален {FILE}';
$lang['xs_cache_log_nodelete'] = 'Ошибка: файл не удаляется {FILE}';
$lang['xs_cache_log_nothing'] = 'Нет ничего для удаления шаблона {TPL}';
$lang['xs_cache_log_nothing2'] = 'Нет ничего для удаления в Кеш дериктории';
$lang['xs_cache_log_count'] = 'Удалено {NUM} файлов';
$lang['xs_cache_log_count2'] = 'Ошибка удаления {NUM} файлов';
$lang['xs_cache_log_compiled'] = 'Компиляция: {NUM} файлов';
$lang['xs_cache_log_errors'] = 'Ошибки: {NUM}';
$lang['xs_cache_log_noaccess'] = 'Ошибка: не найдена дериктория {DIR}';
$lang['xs_cache_log_compiled2'] = 'Компиляция: {FILE}';
$lang['xs_cache_log_nocompile'] = 'Ошибка компилирования: {FILE}';

/*
* export/import/download/clone
*/

$lang['xs_import_explain'] = 'Здесь Вы можете импортировать стили.Здесь Вы можете также автоматически установить и модернизировать стили.<br /><br />Предупреждение: If you have added any mods (except for eXtreme Styles mod) on this forum then you should be careful when importing styles because styles might not be compatible with your forum. You can only install styles that have the same modifications as the other styles that you\'ve configured on your forums.';

$lang['xs_import_lc'] = 'импорт';
$lang['xs_list_files_lc'] = 'список файлов';
$lang['xs_delete_file_lc'] = 'удалить файл';
$lang['xs_export_style_lc'] = 'экспортировать стиль';

$lang['xs_import_no_cached'] = 'Нет кэшированных стилей для импорта';
$lang['xs_add_styles'] = 'Добавить стиль';
$lang['xs_add_styles_web'] = 'загрузить с вебсайта';
$lang['xs_add_styles_web_get'] = 'Загрузить';
$lang['xs_add_styles_copy'] = 'Копировать с локального файла';
$lang['xs_add_styles_copy_get'] = 'Копировать';
$lang['xs_add_styles_upload'] = 'Загрузка на копьютер';
$lang['xs_add_styles_upload_get'] = 'Загрузка';

$lang['xs_export_style'] = 'Экспортировать стиль';
$lang['xs_export_style_explain'] = 'Здесь Вы можете экспортировать стиль как отдельный файл. Отдельный файл является очень маленьким - smaller than a .zip file (because it is compressed with gzip, which works better than zip) and all styles inside is a single file. In turn, it is very easy to transfer styles from one forum to another.<br /><br />This feature also allows you to upload exported styles using ftp to a server. This system allows you to transfer a style to another forum quickly without manually copying it.';

$lang['xs_export_style_title'] = 'Экспортировать шаблон "{TPL}"';
$lang['xs_export_tpl_name'] = 'Экспортировать как (имя шаблона)';
$lang['xs_export_style_names'] = 'Выбрать стиль(и) для экспорта';
$lang['xs_export_style_name'] = 'Экспортировать стиль (имя стиля)';
$lang['xs_export_style_comment'] = 'Коментарии';
$lang['xs_export_where'] = 'Где экспортировать';
$lang['xs_export_where_download'] = 'Загрузить как файл';
$lang['xs_export_where_store'] = 'Store как файл на сервере';
$lang['xs_export_where_store_dir'] = 'Директория';
$lang['xs_export_where_ftp'] = 'Загрузка через FTP';
$lang['xs_export_filename'] = 'Экспортировать имя файла';

$lang['xs_download_explain2'] = 'Здесь Вы можете быстро разгружать и устанавливать стили непосредственно с различных вебсайтов. Кликните по названию сайта и вы будете переадресованы к странице загрузки стилей.<br /><br />Вы можете также управлять списком вебсайтов.';

$lang['xs_download_locations'] = 'Адрес закачки';
$lang['xs_edit_link'] = 'Редактировать ссылку';
$lang['xs_add_link'] = 'Добавить ссылку';
$lang['xs_link_title'] = 'Название соединения';
$lang['xs_link_url'] = 'Сылка URL';
$lang['xs_delete'] = 'Удалить';

$lang['xs_style_header_error_file'] = 'Не открывается локальный файл';
$lang['xs_style_header_error_server'] = 'Ошибка на сервере: ';
$lang['xs_style_header_error_invalid'] = 'Неправильный заголовок файла';
$lang['xs_style_header_error_reason'] = 'Ошибка чтения заголовка файла: ';
$lang['xs_style_header_error_incomplete'] = 'Файл не полный';
$lang['xs_style_header_error_incomplete2'] = 'Неверный размер файла. Вероятно файл неполон.';
$lang['xs_style_header_error_invalid2'] = 'Испорченый файл. Предположительно, файл не совместим с модом eXtreme стилей или неправильная версия.';
$lang['xs_error_cannot_open'] = 'Файл не открывается.';
$lang['xs_error_decompress_style'] = 'Ошибка, архивированного файла. Вероятно файл ипорчен.';
$lang['xs_error_cannot_create_file'] = 'Не могу создать файл "{FILE}"';
$lang['xs_error_cannot_create_tmp'] = 'Не могу создать временный файл "{FILE}"';
$lang['xs_import_invalid_file'] = 'Испорченный файл';
$lang['xs_import_incomplete_file'] = 'Неполный файл';
$lang['xs_import_uploaded'] = 'Стиль загружен.';
$lang['xs_import_installed'] = 'Стиль загружен и инсталирован.';
$lang['xs_import_notinstall'] = 'Стиль загружен, но ошибка инсталяции стиля (sql error).';
$lang['xs_import_notinstall2'] = 'Стиль загружен, но ошибка инсталяции стиля: не найден стиль в theme_info.cfg';
$lang['xs_import_notinstall3'] = 'Стиль загружен, но ошибка инсталяции стиля: не найден "{STYLE}" в theme_info.cfg';
$lang['xs_import_notinstall4'] = 'Стиль загружен, но ошибка инсталяции стиля: не могу получить затем themes_id информацию';
$lang['xs_import_notinstall5'] = 'Стиль загружен, но ошибка инсталяции стиля: не могу модернизировать таблицу стилей';
$lang['xs_import_nodownload'] = 'Не могу загрузить стиль с {URL}';
$lang['xs_import_nodownload2'] = 'Не могу скопировать стиль с {URL}';
$lang['xs_import_nodownload3'] = 'Файл не загружен.';
$lang['xs_import_uploaded2'] = 'Стиль загружен. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.';
$lang['xs_import_uploaded3'] = 'Стиль скопирован. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.';
$lang['xs_import_uploaded4'] = 'Стиль загружен. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.';
$lang['xs_export_no_open_dir'] = 'Не могу открыть директорию {DIR}';
$lang['xs_export_no_open_file'] = 'Не могу открыть файл {FILE}';
$lang['xs_export_no_read_file'] = 'Ошибка чтения файла {FILE}';
$lang['xs_no_theme_data'] = 'Не могу получить данные стиля для отобранного шаблона';
$lang['xs_no_style_info'] = 'Не могу получить информацию стиля';
$lang['xs_export_noselect_themes'] = 'Вы должны выбрать по крайней мере один стиль';
$lang['xs_export_error'] = 'Не могу экспортировать шаблон "{TPL}": ';
$lang['xs_export_error2'] = 'Не могу экспортировать шаблон "{TPL}": стиль пуст';
$lang['xs_export_saved'] = 'Стиль записан как "{FILE}"';
$lang['xs_export_error_uploading'] = 'Ошибка загрузки файла';
$lang['xs_export_uploaded'] = 'Файл загружен.';
$lang['xs_clone_taken'] = 'Это название стиля уже используется.';
$lang['xs_error_new_row'] = 'Не могу вставить новый ряд в таблицу.';
$lang['xs_theme_cloned'] = 'Копировать стиль.';
$lang['xs_invalid_style_name'] = 'Неправильное имя стиля.';
$lang['xs_clone_style_exists'] = 'Этот шаблон уже существует';
$lang['xs_clone_no_select'] = 'Вы должны выбрать по крайней мере один стиль, чтобы копировать.';
$lang['xs_no_themes'] = 'Стиль не существует в базе.';

$lang['xs_import_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться на страницу импорта стилей.';
$lang['xs_import_back_download'] = '<a href="{URL}" target="main">Нажмите здесь</a> чтобы вернуть закачки.';
$lang['xs_export_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться на страницу экспорта стилей.';
$lang['xs_clone_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться на страницу копирования стилей.';
$lang['xs_download_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться на страницу загрузки.';

$lang['xs_import_tpl'] = 'Импорт шаблона "{TPL}"';
$lang['xs_import_tpl_comment'] = 'Здесь вы можете загружать шаблон на ваш форум. Если шаблон с этим названием уже существует на вашем форуме, то автоматически сохранятся старые файлы, так что это может также использоваться, чтобы модернизировать стили.<br /><br />Также можете автоматически установить стили. Если Вы хотите установить стиль после импортирования, это тогда выбирает один или более стилей ниже.';
$lang['xs_import_tpl_filename'] = 'Имя файла:';
$lang['xs_import_tpl_tplname'] = 'Имя шаблона:';
$lang['xs_import_tpl_comment2'] = 'Коментарии:';
$lang['xs_import_select_styles'] = 'Выбрать стиль(и) для инсталяции:';
$lang['xs_import_install_def_lc'] = 'сделать стиль форума по умолчанию';
$lang['xs_import_install_style'] = 'Установить стиль:';
$lang['xs_import'] = 'Импортировать';

$lang['xs_import_list_contents'] = 'Содержание файла: ';
$lang['xs_import_list_filename'] = 'Имя файла: ';
$lang['xs_import_list_template'] = 'Шаблон: ';
$lang['xs_import_list_comment'] = 'Комментарии: ';
$lang['xs_import_list_styles'] = 'Стиль(и): ';
$lang['xs_import_list_files'] = 'Файлы ({NUM}):';
$lang['xs_import_download_lc'] = 'загрузить файл';
$lang['xs_import_view_lc'] = 'просмотреть файл';
$lang['xs_import_file_size'] = '({NUM} bytes)';

$lang['xs_import_nogzip'] = 'Эта функция требует gz сжатия, и очевидно что не поддерживается на этом сервере.';
$lang['xs_import_nowrite_cache'] = 'Не может записать Кеш. Эта функция требует, чтобы Кеш был перезаписываемым. Проверить конфигурацию мода.<br /><br /><a href="{URL1}">Нажать</a> чтобы сделать Кеш перезаписываемым.<br /><br /><a href="{URL2}">Нажать</a> чтобы вернуться на страницу импорта.';

$lang['xs_import_download_warning'] = 'Здесь вы можете с других вэб сайтов быстро загрузить стили используя особенности загрузки стилей';

$lang['xs_clone_style'] = 'Копировать стиль';
$lang['xs_clone_style_explain'] = 'Здесь вы можете быстро копировать стиль или целый шаблон.<br /><br />Опасность: Если вы копируете шаблон, удостоверьтесь, что автор оригинального шаблона позволяет Вам сделать это (если это не является subSilver - вы можете сделать то, что Вы хотите с subSilver). Обычно авторы позволяют изменять их стили, но измененный стиль не принадлежит вам.';
$lang['xs_clone_style_explain2'] = 'Здесь вы можете создать новый стиль из шаблона. Здесь не будут копироваться файлы - просто добавится вход в вашу базу стилей. И старый и новый стиль разделит те же самые шаблоны.';
$lang['xs_clone_style_explain3'] = 'Введите имя стиля который собираетесь создать и нажмите кнопку "Копирование".';
$lang['xs_clone_style_explain4'] = 'Здесь вы можете копировать шаблон. Вы можете также копировать все стили, связанные с тем шаблоном. После этого вы можете благополучно редактировать tpl файлы для нового шаблона не затрагивая старый.';

$lang['xs_clone_style_lc'] = 'копировать стиль';
$lang['xs_clone_style2'] = 'Копировать стиль "{STYLE}":';
$lang['xs_clone_style3'] = 'Копировать шаблон "{STYLE}"';
$lang['xs_clone_newdir_name'] = 'Новый шаблон (дирректория) название:';
$lang['xs_clone_select'] = 'Выберите стиль (и), чтобы копировать:';
$lang['xs_clone_select_explain'] = 'Вы должны выбрать по крайней мере один стиль.';
$lang['xs_clone_newname'] = 'Имя нового стиля:';


/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = 'Это список стилей Вашего форума, которые не установлены. Нажмите "инсталировать", чтобы выбрать стиль который вы хотите установить, выберите один или несколько и нажмите на кнопку.';
$lang['xs_uninstall_styles_explain2'] = 'Это лист стилей инсталированный на ваш форум. Нажмите "деинсталировать" чтобы выбрать стили форума для удаления. Деинсталирование является безопасным - все пользователи кто использует деинсталированный стиль будут переключены к стилю форума по умолчанию. Также, деинсталяция автоматически удалит Кеш для стиля.';

$lang['xs_install'] = 'Установка';
$lang['xs_install_lc'] = 'установка';
$lang['xs_uninstall'] = 'Удаление';
$lang['xs_remove_files'] = 'Удаление файлов';
$lang['xs_style_removed'] = 'Стиль удален.';
$lang['xs_uninstall_lc'] = 'удаление';
$lang['xs_uninstall2_lc'] = ' удаление файлов';

$lang['xs_install_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться в инсталяцию стилей.';
$lang['xs_uninstall_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться в деинсталяцию стили.';
$lang['xs_goto_default'] = '<a href="{URL}">Нажать</a> чтобы изменить стиль по умолчанию.';

$lang['xs_install_installed'] = 'Стиль(и) установлены.';
$lang['xs_install_error'] = 'Ошибка при установке стиля.';
$lang['xs_install_none'] = 'Нет новых стилей, для установки. Все доступные стили уже установлены.';

$lang['xs_uninstall_default'] = 'Вы не можете удалить стиль по умолчанию. Изменить стиль по умолчанию: <a href="{URL}">нажмите сюда</a>.';

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = 'Позволяет вам записать стиль в theme_info.cfg. Это нужно для того чтобы передавать базу стилей от одного форума к другому.<br /><br />Note: If you are using the eXtreme Styles export feature to move a style to another forum you don\'t need to save theme_info.cfg - it is done automatically by the style export feature.';
$lang['xs_export_styles_data_explain3'] = 'Выберите стили, которые Вы хотите экспортировать.';

$lang['xs_export_data_back'] = '<a href="{URL}">Нажать</a> чтобы вернуться на страницу экспорта стилей.';
$lang['xs_export_style_data_lc'] = 'дата экпорта стиля';

$lang['xs_export_data_saved'] = 'Дата экспорта.';

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = 'Позволяет вам редактировать шаблоны. Браузер показывает только файлы редакции таблиц';
$lang['xs_edit_template_comment2'] = 'Позволяет вам редактировать шаблоны.';
$lang['xs_edit_file_saved'] = 'Файл записан.';
$lang['xs_edit_not_found'] = 'Файл не существует.';
$lang['xs_edittpl_back_dir'] = '<a href="{URL}">Нажать</a> чтобы вернутся к управлению файлом.';

$lang['xs_fileman_browser'] = 'Выбрать файл';
$lang['xs_fileman_directory'] = 'Директория:';
$lang['xs_fileman_dircount'] = 'Директории ({COUNT}):';
$lang['xs_fileman_filter'] = 'Фильтр';
$lang['xs_fileman_filter_ext'] = 'Покажите только файлы с расширением:';
$lang['xs_fileman_filter_content'] = 'Показать только файлы которые содержат:';
$lang['xs_fileman_filter_clear'] = 'Оцистить фильтр';
$lang['xs_fileman_filename'] = 'Имя файла';
$lang['xs_fileman_filesize'] = 'Размер';
$lang['xs_fileman_filetime'] = 'Модификация';
$lang['xs_fileman_options'] = 'Опции';
$lang['xs_fileman_time_today'] = '(сегодня)';
$lang['xs_fileman_edit_lc'] = 'редактирование';

$lang['xs_fileedit_search_nomatch'] = 'Сравнение не найдено';
$lang['xs_fileedit_search_match1'] = 'Заменить 1 сравнение';
$lang['xs_fileedit_search_matches'] = "Replaced ' + count + ' matches";
$lang['xs_fileedit_noundo'] = 'Не возможно вернуть';
$lang['xs_fileedit_undo_complete'] = 'восстановить разорванное соединение';
$lang['xs_fileedit_edit_name'] = 'Редактировать файл:';
$lang['xs_fileedit_location'] = 'Расположение:';
$lang['xs_fileedit_reload_lc'] = 'пезагрузка файла';
$lang['xs_fileedit_download_lc'] = 'загрузить файл';
$lang['xs_fileedit_trim'] = 'Автоматически расставлять пробелы в начале и конце файла.';
$lang['xs_fileedit_functions'] = 'Редактирование функций';
$lang['xs_fileedit_replace1'] = 'Заменить ';
$lang['xs_fileedit_replace2'] = ' с ';
$lang['xs_fileedit_replace_first_lc'] = 'заменить сперва match';
$lang['xs_fileedit_replace_all_lc'] = 'заменить все matches';
$lang['xs_fileedit_replace_undo_lc'] = 'отменить изменения';
$lang['xs_fileedit_backups'] = 'Резервные копии';
$lang['xs_fileedit_backups_save_lc'] = 'записать резевную копию';
$lang['xs_fileedit_backups_show_lc'] = 'показать соеденения';
$lang['xs_fileedit_backups_restore_lc'] = 'восстановить';
$lang['xs_fileedit_backups_download_lc'] = 'загрузить';
$lang['xs_fileedit_backups_delete_lc'] = 'удалить';
$lang['xs_fileedit_upload'] = 'Загрузить';
$lang['xs_fileedit_upload_file'] = 'Загрузить файл:';

/*
* edit styles data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = 'CSS Талица стилей';
$lang['xs_data_body_background'] = 'Фоновая картинка';
$lang['xs_data_body_bgcolor'] = 'Цвет фона';
$lang['xs_data_style_name'] = 'Название стиля';
$lang['xs_data_body_link'] = 'Цвет соединения';
$lang['xs_data_body_text'] = 'Цвет текста';
$lang['xs_data_body_vlink'] = 'Цвет посещённой ссылки';
$lang['xs_data_body_alink'] = 'Цвет активной ссылки';
$lang['xs_data_body_hlink'] = 'Цвет ссылки при наведении мыши';
$lang['xs_data_tr_color'] = 'Цвет колонки таблицы %s';
$lang['xs_data_tr_class'] = 'Класс колонки таблицы %s';
$lang['xs_data_th_color'] = 'Цвет заголовка таблицы %s';
$lang['xs_data_th_class'] = 'Класс заголовка таблицы %s';
$lang['xs_data_td_color'] = 'Цвет ячейки таблицы %s';
$lang['xs_data_td_class'] = 'Класс ячейки таблицы %s';
$lang['xs_data_fontface'] = 'Вид шрифта %s';
$lang['xs_data_fontsize'] = 'Размер шрифта %s';
$lang['xs_data_fontcolor'] = 'Цвет шрифта %s';
$lang['xs_data_span_class'] = 'Размер отступа %s';
$lang['xs_data_img_size_poll'] = 'Polling размер картинки [px]';
$lang['xs_data_img_size_privmsg'] = 'Размер статуса приватного сообщения [px]';
$lang['xs_data_theme_public'] = 'Общий стиль (1 or 0)';
$lang['xs_data_unknown'] = 'Описание не доступно (%s)';

$lang['xs_edittpl_error_updating'] = 'Ошибка обновления стиля.';
$lang['xs_edittpl_style_updated'] = 'Обновленный стиль.';
$lang['xs_invalid_style_id'] = 'Ошибочный id стиля.';

$lang['xs_edittpl_back_edit'] = '<a href="{URL}">Нажмите здесь</a> чтобы вернуться к редактированию.';
$lang['xs_edittpl_back_list'] = '<a href="{URL}">Нажмите здесь</a> чтобы вернуть лист стилей.';

$lang['xs_editdata_explain'] = 'Здесь вы можете редактировать базу установленных стилей. Некоторые стили не используют базу стилей, а используют css файлы вместо этого или ипользуют базу не полностью.';
$lang['xs_editdata_var'] = 'Переменная';
$lang['xs_editdata_value'] = 'Значение';
$lang['xs_editdata_comment'] = 'Коментарии';

/*
* updates
*/

$lang['xs_updates'] = 'Обновления';
$lang['xs_updates_comment'] = 'Здесь проверяется обновления стилей и модов. Это работает только с темами, которые имеют совместимую информацию модернизации.';
$lang['xs_updates_comment2'] = 'Результат проверки версии.';
$lang['xs_update_total1'] = 'Итого: {NUM} тем';
$lang['xs_update_info1'] = 'Здесь администратор проверит доступные обновления phpBB, модов и стилей, установленных на вашем форуме. Когда это находит доступные обновления, показывает вам место, где Вы можете закачать обновленный файл.<br /><br />Эта функция требует, чтобы socketы были разрешены. Большинство бесплатных хостеров не имеет этого, если этот форум находится на бесплатных ресурсах (подобно lycos), тогда Вы не можете использовать особенность обновления, но если этот форум находится на нормальном сервере, тогда все должно работать.<br /><br />Когда вы нажимаете "продолжить", скрипт проверяет программное обеспечение установленное на ваш форум. Если ваш вебсайт не быстрый, это может занять некоторое время. Будьте терпеливы, и Дон \'t щелкает "остановкой" в вашем браузере, если процесс отсрочен. Если этот сервер  или вебсайт обновлений не быстрые, тогда скрипт может прекратить выполнение обновления - если это случается, что вы должны увеличить время timeout.';
$lang['xs_update_name'] = 'Имя';
$lang['xs_update_type'] = 'Тип';
$lang['xs_update_current_version'] = 'Ваша версия';
$lang['xs_update_latest_version'] = 'Последняя версия';
$lang['xs_update_downloadinfo'] = 'Загрузить URL';
$lang['xs_update_timeout'] = 'Скрипт обновления timeout (сек.):';
$lang['xs_update_continue'] = 'Продолжить';


$lang['xs_update_total2'] = 'Ошибка: {NUM}';
$lang['xs_update_total3'] = 'Доступные обновления: {NUM} items';
$lang['xs_update_select1'] = 'Выберите пункт для модернизации';
$lang['xs_update_types'] = array(
                0 => 'Неизвестный',
                1 => 'Стиль',
                2 => 'Мод',
                3 => 'phpBB'
                );
$lang['xs_update_fileinfo'] = 'Больше информации';
$lang['xs_update_nothing'] = 'Нечего обновлять.';
$lang['xs_update_noupdate'] = 'Вы используете последнюю версию.';

$lang['xs_update_error_url'] = 'Ошибка: не может восстановить url %s';
$lang['xs_update_error_noitem'] = 'Ошибка: Нет информации для обновления';
$lang['xs_update_error_noconnect'] = 'Ошибка: Не может соеденится с сервером обновлений';

$lang['xs_update_download'] = 'загрузить';
$lang['xs_update_downloadinfo2'] = 'загрузить/инфо';
$lang['xs_update_info'] = 'Сайт';

$lang['xs_permission_denied'] = 'Доступ отклонен';

$lang['xs_download_lc'] = 'загрузить';
$lang['xs_info_lc'] = 'инфо';

/*
* style configuration
*/
$lang['Template_Config'] = 'Конфигурация шаблона';
$lang['xs_style_configuration'] = 'Конфигурация шаблона';

?>
