<?php
/***************************************************************************
 *                            lang_nav_menus.php [Russian]
 *                              -------------------
 *     begin                : Sun Jan 09 2005
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

$lang['nm_title'] = 'Навигационное Меню для XS 2.1.0';
$lang['nm_mod_explain'] = 'Здесь Вы можете создавать/редактировать Блоки и Меню.';

$lang['nm_main_title'] = 'XS-Nav-Menu Управление.';
$lang['nm_main_title_explain'] = 'Здесь Вы можете создавать/редактировать Блоки и Пукнты Меню.';

//
// Add menu item
//
$lang['nm_add_page_title'] = 'Добавление пунктов меню';
$lang['nm_add_page_title_explain'] = 'Используя эту форму Вы можете создавать пункты меню.';

$lang['nm_add_header'] = 'Добавить новый пункт';

//
// edit menu item
//
$lang['nm_edit_page_title'] = 'Редактирование пунктов меню';
$lang['nm_edit_page_title_explain'] = 'Используя эту форму Вы можете редактировать пункты меню.';
$lang['nm_edit_header'] = 'Редактировать пункт';

//
// Delete
//
$lang['nm_menu_delete_subtitle'] = 'You cannot delete a subtitle as it is required for the Menus to work, this may change in future releases.';
$lang['nm_confirm_delete_menu'] = 'Are you sure you wish to delete the menu item: %s?';
$lang['nm_menu_block_delete'] = 'Menu Block Delete.';
$lang['nm_menu_block_delete_explain'] = 'Using the form below you can delete a menu block, and may also move the contents of the block to another block.<br /><br />If you do <b>not</b> wish to move the menu items then they should be deleted prior to deleting the menu block.';
$lang['nm_must_delete_menus'] = 'You need to delete all menus before you can delete this block';

//
// General Settings used by Add/Edit Menu item
//
$lang['nm_menu_title'] = 'Титул меню';
$lang['nm_menu_is_sub'] = 'Это субтитл?';
$lang['nm_menu_is_image'] = 'Это изображение?';
$lang['nm_menu_image_title'] = 'Путь к изображению (Если включена предыдущая опция)';
$lang['nm_menu_image_title_explain'] = 'Укажите путь к изображению относительно корневой директории PhpBB';
$lang['nm_menu_image_size'] = 'Ширина х Высота';
$lang['nm_menu_image_quick'] = 'Готовые ссылки на изображения';
$lang['nm_menu_ver'] = 'Информация о версии';
$lang['nm_menu_link'] = 'Ссылка';
$lang['nm_menu_link_target'] = 'Цель ссылки:';
$lang['nm_menu_bullet'] = 'Изображение маркера';
$lang['nm_menu_bullet_explain'] = 'Путь относительно корневой директории PhpBB<br />К примеру, "http://www.yourdomain.com/phpBB2/images/bullets/image.gif".';
$lang['nm_menu_bullet_quick'] = 'Готовые маркеры';

// Blocks
$lang['nm_addb_page_title'] = 'Добавить блок меню';
$lang['nm_addb_page_title_explain'] = 'Используйте эту форму для создания нового блока.';

$lang['nm_editb_page_title'] = 'Редактировать блок меню';
$lang['nm_editb_page_title_explain'] = 'Используйте эту форму для редактирования блока.';

$lang['nm_menu_block'] = 'Название блока';
$lang['nm_create_block'] = 'Создать блок';
$lang['nm_block_pos'] = 'Положение блока';
$lang['nm_block_type'] = 'Тип блока';
$lang['nm_block_display'] = 'Показывать блок?';
$lang['nm_block_edit'] = 'Редактировать нстройки блока';
$lang['nm_block_display_settings'] = 'Настройки отображения блока';
$lang['nm_block_footer_settings'] = 'Настройки низа блока';
$lang['nm_block_footer'] = 'Низ блока';
$lang['nm_block_footer_display'] = 'Показывать низ блока?';

$lang['nm_block_location'] = 'Отображать в:';
$lang['nm_block_location_left'] = 'Левом';
$lang['nm_block_location_right'] = 'Правом';

$lang['nm_block_shown_portal'] = 'Только портал';

$lang['nm_block_hidden'] = 'Скрыть:';
$lang['nm_block_status'] = 'Статус:';
$lang['nm_block_show_version'] = 'Версия';

// HTML
$lang['nm_block_html_settings'] = 'Настройки блока HTML/Text';
$lang['nm_block_html_text'] = 'HTML/Text к отображению:';
$lang['nm_block_html_text_explain'] = 'Если выбран тип блока \'HTML/Text\', то текст, указанный справа, будет показан в пределах блока. Вы можете использовать или нормальный текст или тэги HTML.';

// Buttons
$lang['nm_create_menu'] = 'Создать меню';
$lang['nm_create_block'] = 'Создать блок';

$lang['nm_menus_updated'] = 'Меню XS-Nav было обновлено';
$lang['nm_click_return_navmenus'] = 'Нажмите %sздесь%s для возврата к настройке меню';


//
// That's all, Folks!
// -------------------------------------------------

?>