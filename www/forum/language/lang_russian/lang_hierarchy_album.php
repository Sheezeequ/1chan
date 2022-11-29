<?php
/***************************************************************************
 *                          lang_hierarchy_album.php [Russian]
 *                          ------------------------
 *     begin                : Wednesday, May 12, 2004
 *     copyright            : (C) 2004 IdleVoid
 *     email                : idlevoid@slater.dk
 *
 *     version              : 1.0.2 12/08/2004
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
// Album Hierarchy Index Table
//
$lang ['Last_Comments'] = 'Последний комментарий';
$lang ['No_Comment_Info'] = 'Нет комментариев';
$lang ['No_Pictures_In_Cat'] = 'Нет изображений в категории';
$lang ['Total_Pics'] = 'Всего изображений';
$lang ['Total_Comments'] = 'Всего комментариев';
$lang ['Last_Index_Thumbnail'] = 'Последнее изображение';
$lang ['One_Sub_Total_Pics'] = ' (%d изображение)';
$lang ['Multiple_Sub_Total_Pics'] = ' (%d изображений)';
$lang ['Album_sub_categories'] = 'Подкатегории';
$lang ['No_Public_Galleries'] = 'Нет общих галереи';
$lang ['One_new_picture'] = '%d новое изображение';
$lang ['Multiple_new_pictures'] = '%d новых изображений';
//
// Personal Album Hierarchy Index Table
//
$lang ['Personal_Categories'] = 'Личная галерея';
$lang ['Personal_Cat_Admin'] = 'Админ категории личной галереи';
$lang ['Recent_Personal_Pics'] = 'Последнии изображения в личной галереи %s';
//
// Album Moderator Control Panel
//
$lang ['Modcp_check_all'] = 'Выбрать все';
$lang ['Modcp_uncheck_all'] = 'Отменить выбор';
$lang ['Modcp_inverse_selection'] = 'Инвертировать выбор';

$lang ['Show_selected_pic_view_mode'] = 'Показать только выбранные категории личной галереи';
$lang ['Show_all_pic_view_mode'] = 'Показать все изображения в личной галерее';

//
// Access language strings
//
$lang ['Album_Can_Manage_Categories'] = 'Вы <b>можете</b> %sуправлять%s категориями в галерее';
$lang ['No_Personal_Category_admin'] = 'Вы не можете управлять категориями в галерее';

// Upload message
$lang ['No_valid_category_selected'] = 'Не указана допустимая категория альбома';

//
// The picture list of a member (album_mod/album_memberlist.php)
//
$lang ['Pic_Cat'] = 'Категория';
$lang['Picture_List_Of_User'] = 'Все изображения %s';
$lang ['Member_Picture_List_Explain'] = 'Вы можете просматривать список изображений, добавленных другими пользователями, используя ссылки в их профилях';
//--- version 1.3.0
$lang ['Comment_List_Of_User'] = 'Все комментарии %s';
$lang ['Rating_List_Of_User'] = 'Все оценки %s';
$lang ['Show_All_Pictures_Of_user'] = 'Показать все изображения %s';
$lang ['Show_All_Comments_Of_user'] = 'Показать все комментарии %s';
$lang ['Show_All_Ratings_Of_user'] = 'Показать все оценки %s';

$lang ['Not_commented'] = '<i>не прокомментировал</i>';

/***************************************************************************
 * Album Hierarchy Administration                                          *
 ***************************************************************************/
//
// Configuration
//
$lang ['Album_config_notice'] = 'Если Вы делете какие-либо изменения в текущих параметрам и затем переходите на другую вкладку, у Вас будет запрошено подтверждение на сохранение изменений. <br /> Система <b>не сохраняет</b>изменения автоматически';
$lang ['Save_sucessfully_confimation'] = ' %s был успешно сохранен';

$lang ['Show_Recent_In_Subcats'] = 'Показать последние изображения в подкатегориях';
$lang ['Show_Recent_Instead_of_NoPics'] = 'Показать воследние изображения, если нет изображений для показа';

$lang ['Album_Index_Settings'] = 'Параметры таблиц альбома';
$lang ['Show_Index_Subcats'] = 'Показать подкатегории в таблице';
$lang ['Show_Index_Thumb'] = 'Показать эскизы в таблице категорий';
$lang ['Show_Index_Pics'] = 'Показать количество изображений в текущей категории в таблице';
$lang ['Show_Index_Comments'] = 'Показать количество комментариев в текущей категории в таблице';
$lang ['Show_Index_Total_Pics'] = 'Показать итоговое количество изображений для текущих категорий и всех подкатегорий в таблице';
$lang ['Show_Index_Total_Comments'] = 'Показать итоговое количество комментариев для текущих категорий и всех подкатегорий в таблице';
$lang ['Show_Index_Last_Comment'] = 'Показать последние комментарии для текущих категорий и всех подкатегорий в таблице';
$lang ['Show_Index_Last_Pic'] = 'Показать информацию о последних изображениях для текущих категорий и всех подкатегорий в таблице';
$lang ['Line_Break_Subcats'] = 'Показать каждую подкатегорию на новой линии';

$lang ['Show_Personal_Gallery_Link'] = 'Показать личные галереи и галереи пользователей ссылками в податегориях';

$lang ['Album_Personal_Auth_Explain'] = 'Здесь Вы можете выбрать, какая группа (ы) пользователей может быть модератором для <b>всех</b> личных категорий альбома или только иметь частный доступ к ним';

$lang ['Album_debug_mode'] = 'Включить режим отладки иерархий.<br><span class="gensmall">Это произведет вывод дополнительной информации на странице и некоторые предупреждающие заголовки.<br>Используйте эту опцию <b>только</b> при наличии проблем.</span>';

$lang ['New_Pic_Check_Interval'] = 'Время, в течении которого будет сообщаться, что изображение является новым.<br><span class="gensmall"><b>Формат</b>: &lt;число&gt;&lt;тип&gt; Где тип является H, D, W или M. (часы, дни, недели или месяцы).<br>Например 12H = 12 часов, 12D = 12 дней, 12W = 12 недель, 12M = 12 месяцев.<br>Если тип не указан, система использует <b>дни</b> по умолчанию.</span>';
$lang ['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = ЧАСЫ, D = ДНИ, W = НЕДЕЛИ, М = МЕСЯЦЫ</span>';
$lang ['Enable_Show_All_Pics'] = 'Включить переключение личного режима представления галереи (все изображения или только выбранная категория).<br/>Когда установлено в <b>Нет</b>, то отображает только выбранную категорию.';
$lang ['Enable_Index_Supercells'] = 'Включить улучшенные ячейки в таблице.<br><span class="gensmall">Включает эффекты наведения курсора мыши на столбцы, также известные как эффекты суперячейки.</span>';

// Sorting
$lang ['Album_Category_Sorting'] = 'Сортировка категорий альбома';
$lang ['Album_Category_Sorting_Id'] = 'Идентификатор (ID)';
$lang ['Album_Category_Sorting_Name'] = 'Имя';
$lang ['Album_Category_Sorting_Order'] = 'Порядок cортировки (значение по умолчанию)';
$lang ['Album_Category_Sorting_Direction'] = 'Направление сортировки (допустимо только для Идентификатора (ID) и Имени)';
$lang ['Album_Category_Sorting_Asc'] = 'Возрастание';
$lang ['Album_Category_Sorting_Desc'] = 'Убывание';

// Upload 
$lang ['Upload_Settings'] = 'Настройка загрузки';

// Personal Gallery
$lang ['Album_Personal_Settings'] = 'Параметры настройки личных галерей';
$lang ['Show_Personal_Sub_Cats'] = 'Показать личные подкатегории в таблице';
$lang ['Personal_Gallery_MOD'] = 'Допустить модерирование личной галереи владельцем';
$lang ['Personal_Sub_Cat_Limit'] = 'Максимальное количество подкатегорий (-1 = неограниченное)';
$lang ['User_Can_Create_Personal_SubCats'] = 'Пользователи могут создавать подкатегории в собственной личной галерее';

$lang ['Click_return_personal_gallery_index'] = 'Нажмите %sздесь%s для возврата к главной странице личной галереи';

$lang ['Show_Recent_In_Personal_Subcats'] = 'Показать последнии изображения в личных подкатегориях';
$lang ['Show_Recent_Instead_of_Personal_NoPics'] = 'Показать последнии изображения при отсуствии изображений в личной галерее';

//
// Categories
//
$lang ['Personal_Root_Gallery'] = 'Корневая категория личной галереи';
$lang ['Parent_Category'] = 'Родительская категория (для этой категории)';
$lang ['Child_Category_Moved'] = 'Выбранная категория содержит дочерниекатегории. Дочерние категории были перемещены в <B>%s</B> категорию.';
$lang ['No_Self_Refering_Cat'] = 'Вы не можете установить родительскую категорию самому себе';
$lang ['Can_Not_Change_Main_Parent'] = 'Вы не можете изменить на родительскую главную категорию вашей личной галереи';

//
// ACP - Javascript text
//
$lang ['acp_ask_save_changes'] = 'Вы действительно хотите сохранить изменения? (OK = Да, Отмена = Нет)';
$lang ['acp_nothing_to_save'] = 'Нечего сохранять!';
$lang ['acp_settings_changed_ask_save'] = 'Вы изменили параметры настройки. Вы хотите их сохранить? (OK = Да, Отмена = Нет)';

?>
