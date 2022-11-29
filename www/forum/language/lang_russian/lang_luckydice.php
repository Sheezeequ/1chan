<?php
/***************************************************************************
 *                           lang_luckydice.php
 *                            -------------------
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   copyright (C) 2002/2003  RCTycooner
 *
 *   This program is free software; you can redistribute it and/or
 *   modify it under the terms of the GNU General Public License
 *   as published by the Free Software Foundation; either version 2
 *   of the License, or (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   http://www.gnu.org/copyleft/gpl.html
 *
 ***************************************************************************/
/* CONTRIBUTORS
   Переведено на русский: Греков Алексей. tankmod@yandex.ru,
*/

//
// Admin 
$lang['admin_submit'] = 'Подтвердить';
$lang['admin_title'] = 'Администрирование Игры Кости.';
$lang['admin_enable'] = 'Игру Включить или Выключить?';
$lang['admin_maxbet'] = 'Максимальная ставка?';
$lang['admin_return'] = 'Вернуться к настройкам Игры Кости?';
$lang['admin_updated'] = 'Настройка успешно обновлена.';
$lang['admin_windouble'] = 'Увеличение ставки пользователя при двойном выиграше (если совпадает два числа).';
$lang['admin_wintriple'] = 'Увеличение ставки пользователя при тройном выиграше (если совпадает три числа).';
$lang['admin_winperfect'] = 'Увеличение ставки пользователя при полном выиграше (если совпадает четыре числа).';
$lang['admin_bonussmall'] = 'Малый бонус (при полной победе + совпадение с малым бонусным числом)';
$lang['admin_bonusbig'] = 'Большой бонус (при полной победе + совпадение с большим бонусным числом)';
$lang['admin_desc'] = 'Здесь можно настроить все данные для игры в Кости.';

//
// User
$lang['game_disabled'] = 'Игра сейчас отключена. Попробуйте позже.';
$lang['game_explanation1'] = 'Если выпадет два одинаковых числа, то это называется парой, ';
$lang['game_explanation2'] = 'и Вы ничего не выиграете и не проиграете. Две пары удвоят Вашу ставку. ';
$lang['game_explanation3'] = 'Три совпадения утроят Вашу ставку. Четыре совпадения вызовет полный выигрыш и Ваша ставка умножится на пять. ';
$lang['game_explanation4'] = 'В случае полной победы и совпадении с малым или большим бонусным числом вам будет доначислен бонус!';
$lang['title'] = 'Кости';
$lang['home1'] = 'Кости. Бросьте кубики и попробуйте получить выигрыш. ';
$lang['home2'] = 'Призы начисляются согласно выпавшех чисел. ';
$lang['home3'] = 'Чем больше совпало чисел, тем больше Вы выиграете.';
$lang['maxbetis'] = 'Максимальная ставка: ';
$lang['youhave'] = 'У Вас сейчас ';
$lang['error_values'] = 'Вы должны ввести свою ставку';
$lang['error_money'] = 'У Вас недостаточно '.$board_config['points_name'].'!';
$lang['error_maxbet'] = 'Вы можете поставить максимум '.$board_config['luckydice_maxbet'].'!';
$lang['again'] = 'Пробуем еще?';
$lang['winperfect'] = 'Поздравляю! Это полная победа! Вы выиграли ';
$lang['winbonussmall'] = 'Вы получили Малый бонус! Вы выиграли ';
$lang['winbonusbig'] = 'Поздараляю! Вы получили Большой бонус!!!!!!! Вам начислено ';
$lang['wintriple'] = 'Поздравляю! Вы утроили ставку! Получите ';
$lang['windouble'] = 'Поздравляю! Вы удвоили ставку! Получите ';
$lang['winpair'] = 'У Вас пара. Вы ничего не выиграли, но и не проиграли!';
$lang['lose'] = 'Вы проиграли. Желаю удачи в следующий раз!';
$lang['played'] = 'Игра запускалась ';
$lang['_times'] = ' раз.';
$lang['taken'] = 'Было получено ';
$lang['given'] = ' и выплачено ';
$lang['zero_error_values'] = 'У Вас должен быть положительный баланс';

?>
