<?php
/***************************************************************************
*                            $RCSfile: lang_color_groups.php [russian],
*                            -------------------
*   copyright            : (C) 2003 Nivisec.com
*   email                : support@nivisec.com
*   translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
*
*   $Id: lang_color_groups.php,v 1.3 2003/09/03 02:52:47 nivisec Exp $
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

$lang['Color_Groups'] = 'Цвет групп';
$lang['Manage_Color_Groups'] = 'Настроить цвет групп';
$lang['Add_New_Group'] = 'Добавить новую группу';
$lang['Status'] = 'Состояние';
$lang['Color'] = 'Цвет';
$lang['User_Count'] = 'Число пользователей';
$lang['Color_List'] = 'Список цветов:';
$lang['Group_Name'] = 'Имя группы';
$lang['Define_Users'] = 'Указать пользователей';
$lang['Color_Group_User_List'] = 'Список пользователей группы';
$lang['Options'] = 'Опции';
$lang['Example'] = 'Пример';
$lang['Version'] = 'Версия';
$lang['User_List'] = 'Полный список';
$lang['Unassigned_User_List'] = 'Пользователь без группы';
$lang['Assigned_User_List'] = 'Пользователи с группой';
$lang['Add_Arrow'] = 'Добавить в список';
$lang['Update'] = 'Обновить';
$lang['Updated_Group'] = 'Обновлен список пользователей<br>';
$lang['Delete'] = 'Удалить';
$lang['Deleted_Group'] = 'Удалена указанная группа. Все пользователи, бывшие в этой группе, теперь не имеют группы<br>';
$lang['Hide'] = 'Спрятать';
$lang['Un-hide'] = 'Показать';
$lang['Move_Up'] = 'Вверх';
$lang['Move_Down'] = 'Вниз';
$lang['Group_Hidden'] = 'Группа скрыта<br>';
$lang['Group_Unhidden'] = 'Группа открыта<br>';
$lang['Groups_Updated'] = 'Группы обновлены<br>';
$lang['Moved_Group'] = 'Изменен список групп<br>';


//Descriptions
$lang['Manage_Color_Groups_Desc'] = 'Обновить группы, добавить группу или настроить указанных пользователей в отдельной группе.<br>Группы, выбранные "Скрыть" не будут показаны на Главной странице.';
$lang['Color_Group_User_List_Desc'] = 'Добавить или удалить пользователей группы.';

//Errors
$lang['Error_Group_Table'] = 'Ошибка при изменении таблицы групп.';
$lang['Error_Font_Color'] = '<b><u>Внимание:</b></u>  Указанный цвет шрифта возможно неправилен!';
$lang['Color_Ok'] = 'Указанный цвет шрифта нормальный.';
$lang['No_Groups_Exist'] = 'Группы не существуют.';
$lang['Error_Users_Table'] = 'Ошибка при изменении таблицы пользователей.';
$lang['Invalid_Group_Add'] = '%s - неправильная группа или группа уже существует.<br>';

//Dynamic
$lang['Group_Updated'] = 'Обновлен цвет группы %s<br>';
$lang['Editing_Group'] = 'Редактирование списка пользователей %s.';
$lang['Invalid_User'] = '%s - неправильное имя пользователя, пропуск<br>';
$lang['Invalid_Order_Num'] = '%s содержит неправильное число порядка, исправлен.  Попробуйте переместить выше/ниже.';

//New for 1.2.0
$lang['Users_List'] = 'Список пользователей';
$lang['Groups_List'] = 'Список групп пользователей';
$lang['List_Info'] = '<b>Примечание</b>: <ul><li>Удерживайте CTRL для выбора нескольких пунктов.  <li>Если пользователь принадлежит группе и цветовой группе, цветовая группа будет использована.<li>Список отформатирован как NAME (CURRENT_COLOR_GROUP).  Здесь не будет (CURRENT_COLOR_GROUP) , если пункт не принадлежит группе.<li>Если пользователь принадлежит 2 или более группам, то самая высокая оценка будет применена (вы расставляете их порядок).</ul>';

?>
