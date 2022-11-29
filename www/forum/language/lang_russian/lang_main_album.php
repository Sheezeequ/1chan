<?php
/***************************************************************************
 *                          lang_main_album.php [Russian]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *     translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
 *
 *     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $
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

//--- Album Category Hierarchy : begin
//--- version : 1.10
include($phpbb_root_path.'language/lang_russian/lang_hierarchy_album.' . $phpEx);
//--- Album Category Hierarchy : end


//
// Album Index
//
$lang['Photo_Album'] = 'Фотоальбом';
$lang['Pics'] = 'Фото';
$lang['Last_Pic'] = 'Последнее фото';
$lang['Public_Categories'] = 'Общие категории';
$lang['No_Pics'] = 'Нет фото';
$lang['Users_Personal_Galleries'] = 'Личные галереи пользователей';
$lang['Your_Personal_Gallery'] = 'Ваша личная галерея';
$lang['Recent_Public_Pics'] = 'Последние фотографии';
$lang['Highest_Rated_Pics'] = 'Лучшие фотографии';
$lang['Random_Pics'] = 'Случайные фотографии';

$lang['View'] = 'Показать';

//
// Category View
//
$lang['Category_not_exist'] = 'Категория не существует';
$lang['Upload_Pic'] = 'Закачать фото';
$lang['Pic_Title'] = 'Заголовок фото';

$lang['Album_upload_can'] = 'Вы <b>можете</b> закачивать новые фото в этой категории';
$lang['Album_upload_cannot'] = 'Вы <b>не можете</b> закачивать новые фото в этой категории';
$lang['Album_rate_can'] = 'Вы <b>можете</b> оценивать фото в этой категории';
$lang['Album_rate_cannot'] = 'Вы <b>не можете</b> оценивать фото в этой категории';
$lang['Album_comment_can'] = 'Вы <b>можете</b> размещать комментарии в этой категории';
$lang['Album_comment_cannot'] = 'Вы <b>не можете</b> размещать комментарии в этой категории';
$lang['Album_edit_can'] = 'Вы <b>можете</b> ваши фото и комментарии в этой категории';
$lang['Album_edit_cannot'] = 'Вы <b>не можете</b> редактировать ваши фото и комментарии в этой категории';
$lang['Album_delete_can'] = 'Вы <b>можете</b> удалять ваши фото и комментарии в этой категории';
$lang['Album_delete_cannot'] = 'Вы <b>не можете</b> удалять ваши фото и комментарии в этой категории';
$lang['Album_moderate_can'] = 'Вы <b>можете</b> %sмодерировать%s эту категорию';

$lang['Edit_pic'] = 'Редактировать';
$lang['Delete_pic'] = 'Удалить';
$lang['Rating'] = 'Оценка';
$lang['Comments'] = 'Комментарии';
$lang['New_Comment'] = 'Новый комментарий';

$lang['Not_rated'] = '<i>нет оценки</i>';

//
// Upload
//
$lang['Pic_Desc'] = 'Описание фото';
$lang['Plain_text_only'] = 'Только текст';
$lang['Max_length'] = 'Макс.длина (байт)';
$lang['Upload_pic_from_machine'] = 'Закачать фото с вашего компьютера';
$lang['Upload_to_Category'] = 'Закачать в категорию';
$lang['Upload_thumbnail_from_machine'] = 'Закачать значок с вашего компьютера (должен совпадать с вашей фото)';
$lang['Upload_thumbnail'] = 'Закачать изображение';
$lang['Upload_thumbnail_explain'] = 'Тип файла должен совпадать';
$lang['Thumbnail_size'] = 'Размер изображения (пиксел)';
$lang['Filetype_and_thumbtype_do_not_match'] = 'Ваше фото и изображение должны быть одного типа';

$lang['Upload_no_title'] = 'Вы должны ввести заголовок';
$lang['Upload_no_file'] = 'Вы должны ввести имя файла и путь к нему';
$lang['Desc_too_long'] = 'Ваше описание слишком длинное';

$lang['Max_file_size'] = 'Максимальный размер файла (байт)';
$lang['Max_width'] = 'Максимальная ширина (пиксел)';
$lang['Max_height'] = 'Максимальная высота (пиксел)';

$lang['JPG_allowed'] = 'Разрешены JPG';
$lang['PNG_allowed'] = 'Разрешены PNG';
$lang['GIF_allowed'] = 'Разрешены GIF';

$lang['Album_reached_quota'] = 'Эта категория превышает квоту изображений. Вы не можете больше закачивать. Свяжитесь с администратором для большей информации';
$lang['User_reached_pics_quota'] = 'Вы превысили квоту фотографий. Вы не можете больше закачивать. Свяжитесь с администратором для большей информации';

$lang['Bad_upload_file_size'] = 'Загруженный файл слишком большой или поврежден';
$lang['Not_allowed_file_type'] = 'Тип файла не разрешен';
$lang['Upload_image_size_too_big'] = 'Размер фото слишком большой';
$lang['Upload_thumbnail_size_too_big'] = 'Размер изображения слишком большой';

$lang['Missed_pic_title'] = 'Вы должны ввести заголовок';

$lang['Album_upload_successful'] = 'Ваше фото успешно закачано';
$lang['Album_upload_need_approval'] = 'Ваше фото успешно закачано.<br /><br />Проверка фотографий включена, ваше фото должно быть проверено администратором или модератором перед размещением';
$lang['Click_return_category'] = 'Нажмите %sздесь%s для возврата к категории';
$lang['Click_return_album_index'] = 'Нажмите %sздесь%s для возврата к главной странице';

// View Pic
$lang['Pic_not_exist'] = 'Фото не существует';

// Edit Pic
$lang['Edit_Pic_Info'] = 'Редактировать информацию о фото';
$lang['Pics_updated_successfully'] = 'Информация о фото успешно сохранена';

// Delete Pic
$lang['Album_delete_confirm'] = 'Вы хотите удалить эти фото?';
$lang['Pics_deleted_successfully'] = 'Фотографии удалены';

//
// ModCP
//
$lang['Approval'] = 'Проверка';
$lang['Approve'] = 'Разрешить';
$lang['Unapprove'] = 'Запретить';
$lang['Status'] = 'Состояние';
$lang['Locked'] = 'Заблокировано';
$lang['Not_approved'] = 'Не проверено';
$lang['Approved'] = 'Проверено';
$lang['Move_to_Category'] = 'Переместить в категорию';
$lang['Pics_moved_successfully'] = 'Ваши фото успешно перемещены';
$lang['Pics_locked_successfully'] = 'Ваши фото успешно заблокированы';
$lang['Pics_unlocked_successfully'] = 'Ваши фото успешно разблокированы';
$lang['Pics_approved_successfully'] = 'Ваши фото успешно проверены';
$lang['Pics_unapproved_successfully'] = 'Ваши фото успешно запрещены';

//
// Rate
//
$lang['Current_Rating'] = 'Оценка';
$lang['Please_Rate_It'] = 'Оцените';
$lang['Already_rated'] = 'Вы уже оценили это фото';
$lang['Album_rate_successfully'] = 'Фото успешно оценено';

//
// Comment
//
$lang['Comment_no_text'] = 'Вы должны ввести комментарий';
$lang['Comment_too_long'] = 'Ваш комментарий сликом длинный';
$lang['Comment_delete_confirm'] = 'Удалить комментарий?';
$lang['Pic_Locked'] = 'Извините, фото заблокировано. Вы больше не можете размещать комментарии';

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = 'Вы можете просматривать личные галереи других пользователей, нажав на ссылку в их профиле';
$lang['Personal_gallery_not_created'] = 'Личная галерея %s пуста или не была создана';
$lang['Not_allowed_to_create_personal_gallery'] = 'Извините, только администраторам разрешено создавать личные галереи';
$lang['Click_return_personal_gallery'] = 'Нажмите %sздесь%s для возврата к личной галерее';

/* Album Hierarchy - START */
$lang['Last_Comments'] = 'Последний комментарий';
$lang['No_Comment_Info'] = 'Нет комментариев';
$lang['No_Pictures_In_Cat']= 'Нет фото в этой категории';
$lang['Total_Pics'] = 'Всего фото';
$lang['Total_Comments'] = 'Всего комментариев';
$lang['Last_Index_Thumbnail'] = 'Последнее фото';
$lang['Sub_Total_Pics'] = 'Всего фото';
/* Album Hierarchy - STOP  */
/* Album Hierarchy - START */ 
$lang['Album_sub_categories'] = 'Подкатегории';
/* Album Hierarchy - STOP  */ 

?>
