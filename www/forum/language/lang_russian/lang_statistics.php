<?php
/***************************************************************************
*                           lang_statistics.php [Russian]
*                            -------------------
*   begin                : Tue February 26 2002
*   copyright            : (C) 2002 Nivisec.com
*   email                : admin@nivisec.com
*   translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
*
*   $Id: lang_statistics.php,v 1.4 2002/11/09 16:04:08 acydburn Exp $
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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

//
// If you want to credit the Author on the Statistics Page, uncomment the second line.
//
$lang['Version_info'] = '<br />Версия мода статистики %s'; //%s = number
//$lang['Version_info'] = '<br />Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>';

//
// These Language Variables are available for all installed Modules
//
$lang['Rank'] = 'Оценка';
$lang['Percent'] = 'Процент';
$lang['Graph'] = 'График';
$lang['Uses'] = 'Использует';
$lang['How_many'] = 'Сколько';

//
// Main Language
//

//
// Page Header/Footer
//
$lang['Install_info'] = 'Установлено %s'; //%s = date
$lang['Viewed_info'] = 'Страница статистики загружена %d раз'; //%d = number
$lang['Statistics_title'] = 'Статистика форумов';

//
// Admin Language
//
$lang['Statistics_management'] = 'Модули статистики';
$lang['Statistics_config'] = 'Конфигурация статистики';

//
// Statistics Config
//
$lang['Statistics_config_title'] = 'Конфигурация статистики';

$lang['Return_limit'] = 'Лимит выводов';
$lang['Return_limit_desc'] = 'Количество пунктов, включенное в каждую оценку. Значение будет автоматически пропущено модулями, если указано здесь.';
$lang['Clear_cache'] = 'Очистить кэш модулей';
$lang['Clear_cache_desc'] = 'Очистить весь кэш модулей';
$lang['Modules_directory'] = 'Папка модулей';
$lang['Modules_directory_desc'] = 'Папка phpBB, где расположены все модули. Заметьте, что / или \ не должен быть использован!';

//
// Status Messages
//
$lang['Messages'] = 'Сообщения администратора';
$lang['Updated'] = 'Обновлено';
$lang['Active'] = 'Активно';
$lang['Activate'] = 'Активировать';
$lang['Activated'] = 'Активировано';
$lang['Not_active'] = 'Неактивно';
$lang['Deactivate'] = 'Деактивировать';
$lang['Deactivated'] = 'Деактивировано';
$lang['Install'] = 'Установить';
$lang['Installed'] = 'Установлено';
$lang['Uninstall'] = 'Удалить';
$lang['Uninstalled'] = 'Удалено';
$lang['Move_up'] = 'Вверх';
$lang['Move_down'] = 'Вниз';
$lang['Update_time'] = 'Время обновления';
$lang['Auth_settings_updated'] = 'Параметры авторизации - [Постоянно обновлены]';

//
// Modules Management
//
$lang['Back_to_management'] = 'Вернуться к странице управления модулями';
$lang['Statistics_modules_title'] = 'Модуль статистики';

$lang['Module_name'] = 'Имя';
$lang['Directory_name'] = 'Имя папки';
$lang['Status'] = 'Состояние';
$lang['Update_time_minutes'] = 'Время обновления в минутах';
$lang['Update_time_desc'] = 'Интервал (в минутах) до обновления данных.';
$lang['Auto_set_update_time'] = 'Определить и установить рекомендуемое значение для каждого активного и установленного модуля. Заметьте, что это может занять времени.';
$lang['Uninstall_module'] = 'Удалить модуль';
$lang['Uninstall_module_desc'] = 'Отмечает модуль как "не установлен", так что вы можете установить его заново. Модуль не удаляется из вашей системы, вамм придется вручную удалить модуль для полного удаления.';
$lang['Active_desc'] = 'Опция, если модуль активен, то он будет показан в зависимости от разрешений.';
$lang['Go'] = 'Вперед';

$lang['Not_allowed_to_install'] = 'Вы не можете установить этот модуль. Чаще всего это происходит, если не установлен модуль, от которого зависит этот модуль. Пожалуйста, свяжитесь с автором этого модуля, если у вас есть вопросы и если эта информация не помогает вам.';
$lang['Wrong_stats_mod_version'] = 'Вы не можете установить этот модуль, потому что версия вашего модуля статистики не соответствует версии, необходимой модулю. Для установки модуля вам нужна версия %s или выше.'; // replace %s with Version (2.1.3 for example)
$lang['Module_install_error'] = 'Произошла ошибка при установке данного модуля. Скорей всего некоторые команды SQL не могут быть выполнены, проверьте ошибки ниже.';

$lang['Preview_debug_info'] = 'Этот модуль был сгенерирован за %f секунд: %d запросов выполнено.'; // Replace %f with seconds and %d with queries
$lang['Update_time_recommend'] = 'Модуль статистики (в зависимости от настроек) имеет время обновления: <b>%d</b> минут.'; // Replace %d with Minutes

?>
