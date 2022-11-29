<?php
/***************************************************************************
 *                            lang_main_mini_cal.php [Russian]
 *                            ----------------------
 *   Author  		: 	netclectic - Adrian Cockburn - phpbb@netclectic.com
 *   Created 		: 	Thursday, Jan 30, 2003
 *	 Last Updated	:	Thursday, March 25, 2004
 *
 *	 Version		: 	MINI_CAL - 2.0.4
 *
 ***************************************************************************/
/* CONTRIBUTORS
   Переведено на русский: Греков Алексей. tankmod@yandex.ru,
*/

$lang['Mini_Cal_calendar'] = 'Календарь';
$lang['Mini_Cal_add_event'] = 'Добавить событие';
$lang['Mini_Cal_events'] = 'Наступающие события';
$lang['Mini_Cal_no_events'] = 'Нет';


// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%d %c';
$lang['Mini_Cal_date_format_Time'] = '%H:%i:%s';


// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa'; 
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su'; 
$lang['mini_cal']['day'][1] = 'Пн';
$lang['mini_cal']['day'][2] = 'Вт';
$lang['mini_cal']['day'][3] = 'Ср';
$lang['mini_cal']['day'][4] = 'Чт';
$lang['mini_cal']['day'][5] = 'Пт';
$lang['mini_cal']['day'][6] = 'Сб';
$lang['mini_cal']['day'][7] = 'Вс';

$lang['mini_cal']['month'][1] = 'Янв';
$lang['mini_cal']['month'][2] = 'Фев';
$lang['mini_cal']['month'][3] = 'Мар';
$lang['mini_cal']['month'][4] = 'Апр';
$lang['mini_cal']['month'][5] = 'Май';
$lang['mini_cal']['month'][6] = 'Июн';
$lang['mini_cal']['month'][7] = 'Июл';
$lang['mini_cal']['month'][8] = 'Авг';
$lang['mini_cal']['month'][9] = 'Сен';
$lang['mini_cal']['month'][10] = 'Окт';
$lang['mini_cal']['month'][11] = 'Ноя';
$lang['mini_cal']['month'][12] = 'Дек';

$lang['mini_cal']['long_month'][1] = 'Январь';
$lang['mini_cal']['long_month'][2] = 'Февраль';
$lang['mini_cal']['long_month'][3] = 'Март';
$lang['mini_cal']['long_month'][4] = 'Апрель';
$lang['mini_cal']['long_month'][5] = 'Май';
$lang['mini_cal']['long_month'][6] = 'Июнь';
$lang['mini_cal']['long_month'][7] = 'Июль';
$lang['mini_cal']['long_month'][8] = 'Август';
$lang['mini_cal']['long_month'][9] = 'Сентябрь';
$lang['mini_cal']['long_month'][10] = 'Октябрь';
$lang['mini_cal']['long_month'][11] = 'Ноябрь';
$lang['mini_cal']['long_month'][12] = 'Декабрь';
?>
