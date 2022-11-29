<?php
/***************************************************************************
*                         admin_panel_nivisec.php [Russian]
*                            -------------------
*   begin                : Friday, June 07, 2002
*   copyright            : (C) 2002 Nivisec.com
*   email                : admin@nivisec.com
*
*   $Id: lang_jr_admin.php,v 1.4 2003/08/15 02:09:36 nivisec Exp $
*
*
***************************************************************************/
/* CONTRIBUTORS
   Переведено на русский: Греков Алексей. tankmod@yandex.ru,
*/

$lang['None'] = 'Нету';
$lang['Allow_Access'] = 'Полный доступ';

$lang['Jr_Admin'] = 'Младший админ';
$lang['Options'] = 'Опции';
$lang['Example'] = 'Пример';
$lang['Version'] = 'Версия';
$lang['Add_Arrow'] = 'Добавить ->';
$lang['Super_Mod'] = 'Супермодератор';
$lang['Update'] = 'Обновить';
$lang['Module_Info'] = 'Информационный модуль';
$lang['Module_Count'] = 'Счетчик модуля';
$lang['Modules_Owned'] = '(%d модулей)';
$lang['Updated_Permissions'] = 'Обновить права доступа пользователя к модулям<br>';
$lang['Color_Group'] = 'Цвет группы';
$lang['Users_with_Access'] = 'Пользователь с доступом';
$lang['Users_without_Access'] = 'Пользователь без доступа';
$lang['Check_All'] = 'Выбрать/отменить выбор всех';
$lang['Cat_Check_All'] = 'Категория: выбрать, отменить выбор всех';
$lang['Edit_Permissions'] = 'Редактировать права доступа пользователя';
$lang['View_Profile'] = 'Просмотреть профиль пользователя';
$lang['Edit_User_Details'] = 'Редактировать детали пользователя';
$lang['Notes'] = 'Заметки';
$lang['Allow_View'] = 'Разрешить пользователю просмотр';
$lang['Start_Date'] = 'Включить изначально предоставленные права';
$lang['Update_Date'] = 'Включить последнии предоставленные права';
$lang['Edit_Modules'] = 'Редактировать модули';
$lang['Color_Group'] = 'Цвет группы';
$lang['Rank'] = 'Ранг';
$lang['Allow_PM'] = 'разрешить ЛС';
$lang['Allow_Avatar'] = 'разрешить Аватары';
$lang['User_Active'] = 'Пользователь активирован';
$lang['User_Info'] = 'Информация о пользователе';
$lang['User_Stats'] = 'Статус пользователя';
$lang['Junior_Admin_Info'] = 'Административная информация';
$lang['Admin_Notes'] = 'Заметки Админа';

//Descriptions
$lang ['Levels_Page_Desc'] = 'Эта страница позволяет Вам определять пользовательские уровни. Выберите имя пользователя в списке или введите вручную. Имена пользователей ДОЛЖНЫ быть перечислены через , (запятую) в каждом списке!';
$lang ['Permissions_Page_Desc'] = 'Эта страница позволяет Вам изменять  Админские права пользователей, а также редактировать их список модулей.<br>Вы может нажать на заголовке таблицы, чтобы использовать сортировку тем по заголовком.';

//Errors
$lang ['Error_Users_Table'] = 'Ошибка запроса таблицы пользователей.';
$lang ['Error_Module_Table'] = 'Ошибка запроса таблицы разрешений модулей Админа.';
$lang ['Error_Module_ID'] = 'Требуемый модуль не существует, или Вы - незарегистрированный пользователь.';
$lang ['Disabled_Color_Groups'] = ' Мод цветов групп не найден. Нет возможности назначить цвет группы.';
$lang ['Admin_Note'] = 'Внимание: Этот пользователь - Администратор. Любые ограничения, устанавливаемые здесь работают, пока Вы не измените его права доступа на Пользователя вместо Администратора.';
$lang ['No_Special_Ranks'] = 'Неопределены специальные ранги.';

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
//
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
//
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Seperate entry areas by a ,
//
$lang['ASCII_Search_Codes'] = '48&57, 65-90';

//Images
// Don't change these unless you need to
$lang['ASC_Image'] = 'images/asc_order.png';
$lang['DESC_Image'] = 'images/desc_order.png';

?>
