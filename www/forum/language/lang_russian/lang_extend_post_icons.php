<?php
/***************************************************************************
 *                   lang_extend_post_icons.php [Русский]
 *                   --------------------------
 *        начало       : 28/09/2003
 *        копирайт     : Ptirhiik
 *        email        : ptirhiik@clanmckeen.com
 *
 *        версия       : 1.0.1 - 28/10/2003
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
        $lang['Lang_extend_post_icons'] = 'Иконки для тем';

        $lang['Icons_settings_explain'] = 'Здесь Вы можете добавлять, изменять или удалять изображения.';
        $lang['Icons_auth'] = 'Авт. уровень';
        $lang['Icons_auth_explain'] = 'Иконки будут доступны только для пользователей принявшие это требование.';
        $lang['Icons_defaults'] = 'Значения по умолчанию';
        $lang['Icons_defaults_explain'] = 'Эти значения будут использованы в списках тем, когда теме не присвоена иконка.';
        $lang['Icons_delete'] = 'Удалить изображение';
        $lang['Icons_delete_explain'] = 'Выберите изображение для замены текущей иконки :';
        $lang['Icons_confirm_delete'] = 'Вы уверены, что хотите удалить изображение ?';

        $lang['Icons_lang_key'] = 'Название иконки';
        $lang['Icons_lang_key_explain'] = 'Название иконки будет показано при наведении курсора мыши на иконку. Вы можете использовать текст, или переменную языка. <br />(см. language/lang_<i>Ваш_язык</i>/lang_main.php).';
        $lang['Icons_icon_key'] = 'Иконка.';
        $lang['Icons_icon_key_explain'] = 'Ссылка на иконку или её переменная. <br />(см. templates/<i>Ваш_шаблон</i>/<i>ващ_шаблон</i>.cfg)';

        $lang['Icons_error_title'] = 'Название иконки отсутствует';
        $lang['Icons_error_del_0'] = 'Вы не можете удалить по умолчанию пустую иконку.';

        $lang['Refresh'] = 'Обновить';
        $lang['Usage'] = 'Использование';

        $lang['Image_key_pick_up'] = 'Переменная изображения';
        $lang['Lang_key_pick_up'] = 'Языковая переменная';
}

$lang['Icons_settings'] = 'Иконки для тем';
$lang['Icons_per_row'] = 'Иконок в колонке';
$lang['Icons_per_row_explain'] = 'Укажите количество иконок в колонке.';
$lang['post_icon_title'] = 'Иконка для темы';
// icons
$lang ['icon_none'] = 'Без иконки';
$lang ['icon_note'] = 'Примечание';
$lang ['icon_important'] = 'Важно';
$lang ['icon_idea'] = 'Идея';
$lang ['icon_warning'] = 'Предупреждение! ';
$lang ['icon_question'] = 'Вопрос';
$lang ['icon_cool'] = 'Круто';
$lang ['icon_funny'] = 'Забавно';
$lang ['icon_angry'] = 'РРРРР!';
$lang ['icon_sad'] = 'Грустно!';
$lang ['icon_mocker'] = 'Хэ-хэ-хэ! ';
$lang ['icon_shocked'] = 'ШОК! ';
$lang ['icon_complicity'] = 'Соучастие';
$lang ['icon_bad'] = 'Плохо!';
$lang ['icon_great'] = 'Великолепно!';
$lang ['icon_disgusting'] = 'Отвратительно! ';
$lang ['icon_winner'] = 'Победа!';
$lang ['icon_impressed'] = 'О да! ';
$lang ['icon_roleplay'] = 'Ролевик';
$lang ['icon_fight'] = 'Борьба';
$lang ['icon_loot'] = 'Ограбление';
$lang ['icon_picture'] = 'Картина';
$lang ['icon_calendar'] = 'Календарное событие';

?>
