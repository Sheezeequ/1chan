<?php
/***************************************************************************
 *                            lang_admin_album.php [Russian]
 *                              -------------------
 *     begin                : Monday, 12.04.2006
 *     copyright            : 2006 modelizm.net.ru
 *     email                : tankmod@yandex.ru
 *     translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
 *     ICQ                  : 270180730
 *
 *     $Id: lang_admin_album.php,v 1.0.6 2003/03/05 00:21:55 ngoctu Exp $
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

// phpBB2 Plus 1.53 Final Language File Build 

//--- Album Category Hierarchy : begin
//--- version : 1.10
include($phpbb_root_path.'language/lang_russian/lang_hierarchy_album.' . $phpEx);
//--- Album Category Hierarchy : end

//
// Configuration
//
$lang['Album_config'] = 'Конфигурация альбома';
$lang['Album_config_explain'] = 'Вы можете изменить основные настройки вашего Фотоальбома здесь';
$lang['Album_config_updated'] = 'Конфигурация альбома успешно обновлена';
$lang['Click_return_album_config'] = 'Нажмите %sздесь%s для возврата на страницу управления альбомом';
$lang['Max_pics'] = 'Максимум фотографий в категории (-1 = неогр.)';
$lang['User_pics_limit'] = 'Ограничение фотографий на пользователя (-1 = неогр.)';
$lang['Moderator_pics_limit'] = 'Ограничение фотографий на модератора (-1 = неогр.)';
$lang['Pics_Approval'] = 'Проверка фотографий';
$lang['Rows_per_page'] = 'Число строк в списке фото';
$lang['Cols_per_page'] = 'Число колонок в списке фото';
$lang['Thumbnail_quality'] = 'Качество иконки (1-100)';
$lang['Thumbnail_cache'] = 'Кэш иконок';
$lang['Manual_thumbnail'] = 'Ручные иконки';
$lang['GD_version'] = 'Оптимизировать под версию GD';
$lang['Pic_Desc_Max_Length'] = 'Описание фото/макс.длина (байт)';
$lang['Hotlink_prevent'] = 'Ограничение горячих ссылок';
$lang['Hotlink_allowed'] = 'Разрешение доменов (разделение запятой)';
$lang['Personal_gallery'] = 'Разрешить создавать личный альбом';
$lang['Personal_gallery_limit'] = 'Ограничение фотографий в личном альбоме (-1 = неогр.)';
$lang['Personal_gallery_view'] = 'Кто может просматривать личные папки';
$lang['Rate_system'] = 'Включить систему оценки';
$lang['Rate_Scale'] ='Шкала оценок';
$lang['Comment_system'] = 'Включить систему комментариев';
$lang['Thumbnail_Settings'] = 'Настройки значков';
$lang['Extra_Settings'] = 'Дополнительно';
$lang['Default_Sort_Method'] = 'Метод сортировки';
$lang['Default_Sort_Order'] = 'Порядок сортировки';
$lang['Fullpic_Popup'] = 'Показывать фотографию в новом окне';


// Personal Gallery Page
$lang['Personal_Galleries'] = 'Личные галереи';
$lang['Album_personal_gallery_title'] = 'Личная галерея';
$lang['Album_personal_gallery_explain'] = 'На этой странице вы можете выбрать какие группы имеют право на создание и просмотр личных галерей. Эти параметры влияют только при включенном "ПРИВАТН." для "Разрешение создавать личные папки" или "Кто может просматривать личные папки" в Конфигурации альбома';
$lang['Album_personal_successfully'] = 'Настройка успешно обновлена';
$lang['Click_return_album_personal'] = 'Нажмите %sздесь%s для возврата к странице настройки личных галерей';

//
// Categories
//
$lang['Album_Categories_Title'] = 'Управление категориями альбома';
$lang['Album_Categories_Explain'] = 'Здесь вы можете изменить категории: добавить, редактировать, удалить, сортировать и т.д.';
$lang['Category_Permissions'] = 'Разрешения категории';
$lang['Category_Title'] = 'Заголовок категории';
$lang['Category_Desc'] = 'Описание категории';
$lang['View_level'] = 'Уровень просмотра';
$lang['Upload_level'] = 'Уровень закачки';
$lang['Rate_level'] = 'Уровень оценки';
$lang['Comment_level'] = 'Уровень комментария';
$lang['Edit_level'] = 'Редактировать уровень';
$lang['Delete_level'] = 'Удалить уровень';
$lang['New_category_created'] = 'Новая категория успешно создана';
$lang['Click_return_album_category'] = 'Нажмите %sздесь%s для возврата к списку категорий';
$lang['Category_updated'] = 'Категория была успешно обновлена';
$lang['Delete_Category'] = 'Удалить категорию';
$lang['Delete_Category_Explain'] = 'Форма ниже разрешит вам удалить категорию и выберет, где расположить фотографии';
$lang['Delete_all_pics'] = 'Удалить все фотографии';
$lang['Category_deleted'] = 'Категория была успешно удалена';
$lang['Category_changed_order'] = 'Порядок категорий успешно изменен';

//
// Permissions
//
$lang['Album_Auth_Title'] = 'Разрешения альбома';
$lang['Album_Auth_Explain'] = 'Здесь вы можете выбрать группы, которые могут модерировать или просто просматривать категории или просто личные галереи';
$lang['Select_a_Category'] = 'Выберите категорию';
$lang['Look_up_Category'] = 'Проверить категорию';
$lang['Album_Auth_successfully'] = 'Успешно обновлено';
$lang['Click_return_album_auth'] = 'Нажмите %sздесь%s для возврата на страницу разрешений';

$lang['Upload'] = 'Закачать';
$lang['Rate'] = 'Оценить';
$lang['Comment'] = 'Комментарий';

//
// Clear Cache
//
$lang['Clear_Cache'] = 'Очистить кэш';
$lang['Album_clear_cache_confirm'] = 'Если вы используете систему кэша иконок, то вы должны очистить ваш кэш после изменения настроек в конфигурации для их регенерации.<br /><br /> Очистить кэш сейчас?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Ваш кэш успешно очищен<br />&nbsp;';
?>
