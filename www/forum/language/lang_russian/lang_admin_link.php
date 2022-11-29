<?php
/***************************************************************************
 *                            lang_admin_link.php
 *                            -------------------
 *  MOD add-on page. Contains GPL code copyright of phpBB group.
 *  Author: OOHOO < webdev@phpbb-tw.net >
 *  Author: Stefan2k1 and ddonker from www.portedmods.com
 *  Demo: http://phpbb-tw.net/
 *  Version: 1.0.X - 2002/03/22 - for phpBB RC serial, and was named Related_Links_MOD
 *  Version: 1.1.0 - 2002/04/25 - Re-packed for phpBB 2.0.0, and renamed to Links_MOD
 *  Version: 1.1.5 - 2003/06/11 - Enhanced and Re-packed for phpBB 2.0.4
 *  Version: 1.2.2 - 2004/05/10 - Enhanced by CRLin
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

// phpBB2 Plus 1.53 Final Language File Build 
//
// Categories
//
$lang['Link_Categories_Title'] = 'Ссылка управления категориями';
$lang['Link_Categories_Explain'] = 'Здесь Вы можете управлять вашими категориями: создавать, изменять, удалять, сортировать, и т.п.';
$lang['Category_Permissions'] = 'Права доступа';
$lang['Category_Title'] = 'Название категории';
$lang['Category_Desc'] = 'Описание категории';
$lang['View_level'] = 'Посмотреть уровень';
$lang['Upload_level'] = 'Загрузить уровень';
$lang['Rate_level'] = 'Рейтинг';
$lang['Comment_level'] = 'Коментировать уровень';
$lang['Edit_level'] = ' Редактировать уровень';
$lang['Delete_level'] = 'Удалить уровень';
$lang['New_category_created'] = 'Новая категория была создана.';
$lang['Click_return_link_category'] = 'Нажмите %sЗдесь%s, чтобы вернуться к Управлению категориями ссылок';
$lang['Category_updated'] = 'Категория обновлена';
$lang['Delete_Category'] = 'Удалить категорию';
$lang['Delete_Category_Explain'] = 'Эта форма позволит Вам удалить категорию.';
$lang['Category_deleted'] = 'Эта категория была удалена.';
$lang['Category_changed_order'] = 'Порядок категории изменён.';

//
// Config
//
$lang['Link_Config'] ='Управление ссылками';
$lang['Link_config_explain'] = 'Здесь Вы можете изменить основные настройки Ваших ссылок.';
$lang['lock_submit_site'] = 'Запретить пользователям добавлять сайты.';
$lang['allow_guest_submit_site'] = 'Позволять Гостям добавлять сайт.';
$lang['allow_no_logo'] = 'Позволять добавлять сайт без баннера.';
$lang['site_logo'] = 'Путь до Вашего логотипа (полный путь)';
$lang['site_url'] = 'Адрес Вашего сайта';
$lang['width'] = 'Макс. ширина баннеров.';
$lang['height'] = 'Макс. высота баннеров.';
$lang['linkspp'] = 'Макс. кол-во ссылок на страницу.';
$lang['interval'] = 'Как быстро показывать баннеры';
$lang['display_logo'] = 'Макс. кол-во баннеров за раз.';
$lang['Link_display_links_logo'] = 'Отображать баннер';
$lang['Link_email_notify'] = 'Оповещать администраторов по e-mail о появлении новой ссылки.';
$lang['Link_pm_notify'] = 'Оповещать администраторов личным сообщением о появлении новой ссылки.';
$lang['Link_config_updated'] = 'Конфигурация обновлена.';
$lang['Click_return_link_config'] = 'Нажмите %sздесь%s, чтобы вернуться к Управлению ссылками.';

// Link_MOD
$lang['Links'] = "Избранное";
$lang['Links_explain'] = "Через эту панель управления вы можете просматривать состояние ссылок, править или удалять соответствующие ссылки.";
$lang['Add_link'] = "Добавить ссылку";
$lang['Add_link_explain'] = "Следующая форма позволит добавить ссылку непосредственно вам.";
$lang['Edit_link'] = "Редактировать ссылку";
$lang['Edit_link_explain'] = "Следующая форма позволит править параметры ссылки, также вы можете ";
$lang['Delete_link'] = "Удалить ссылку";
$lang['Delete_link_explain'] = "Следующая форма позволит вам удалить ссылку, также вы можете ";
$lang['Link_update'] = "Обновить описание ссылки";
$lang['Link_delete'] = "Удалить эту ссылку";
$lang['Link_title'] = "Имя сайта";
$lang['Link_url'] = "URL сайта";
$lang['Link_logo_src'] = "Логотип сайта (88x31 пикселов, не больше 10K)";
$lang['Link_category'] = "Категория сайта";
$lang['Link_desc'] = "Описание сайта";
$lang['link_hits'] = "Кликов";
$lang['Link_basic_setting'] = "Основные параметры ссылки";
$lang['Link_adv_setting'] = "Дополнительные параметры";
$lang['Link_active'] = "Статус активации";

$lang['Link_admin_add_success'] = "Ссылки успешно добавлены";
$lang['Link_admin_add_fail'] = "Не удалось добавить новую ссылку, попробуйте позже";
$lang['Link_admin_update_success'] = "Ссылки успешно обновлены";
$lang['Link_admin_update_fail'] = "Не удалось обновить ссылку, попробуйте позже";
$lang['Link_admin_delete_success'] = "Ссылки успешно удалены";
$lang['Link_admin_delete_fail'] = "Не удалось удалить ссылку, попробуйте позже";
$lang['Click_return_lastpage'] = "Нажмите %sздесь%s для возврата на предыдущую страницу";
$lang['Click_return_admin_links'] = "Нажмите %sздесь%s для возвращения на страницу управления ссылками";
$lang['Preview'] = "Просмотр логотипа";
$lang['Search_site'] = "Искать сайт";
$lang['Search_site_title'] = "Искать имя сайта/описание:";
?>
