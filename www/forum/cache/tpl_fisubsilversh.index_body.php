<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:47 +0300 (time=1669727207)

?><table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td colspan="2" class="maintitle"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></td>
	</tr>
<tr>
<td valign="bottom" class="gensmall">
<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
<?php echo isset($this->vars['LAST_VISIT_DATE']) ? $this->vars['LAST_VISIT_DATE'] : $this->lang('LAST_VISIT_DATE'); ?><br />
<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
<?php echo isset($this->vars['CURRENT_TIME']) ? $this->vars['CURRENT_TIME'] : $this->lang('CURRENT_TIME'); ?><br />
<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></td>
<td align="right" valign="bottom" class="gensmall">
<a href="<?php echo isset($this->vars['U_SEARCH_UNANSWERED']) ? $this->vars['U_SEARCH_UNANSWERED'] : $this->lang('U_SEARCH_UNANSWERED'); ?>"><?php echo isset($this->vars['L_SEARCH_UNANSWERED']) ? $this->vars['L_SEARCH_UNANSWERED'] : $this->lang('L_SEARCH_UNANSWERED'); ?></a><br />
<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
<a href="<?php echo isset($this->vars['U_SEARCH_NEW']) ? $this->vars['U_SEARCH_NEW'] : $this->lang('U_SEARCH_NEW'); ?>"><?php echo isset($this->vars['L_SEARCH_NEW']) ? $this->vars['L_SEARCH_NEW'] : $this->lang('L_SEARCH_NEW'); ?></a><br />
<a href="<?php echo isset($this->vars['U_MARK_READ']) ? $this->vars['U_MARK_READ'] : $this->lang('U_MARK_READ'); ?>"><strong><?php echo isset($this->vars['L_MARK_FORUMS_READ']) ? $this->vars['L_MARK_FORUMS_READ'] : $this->lang('L_MARK_FORUMS_READ'); ?></strong></a>
<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
</td>
</tr>
</table>
<?php echo isset($this->vars['BOARD_ANNOUNCES']) ? $this->vars['BOARD_ANNOUNCES'] : $this->lang('BOARD_ANNOUNCES'); ?>
<?php echo isset($this->vars['BOARD_INDEX']) ? $this->vars['BOARD_INDEX'] : $this->lang('BOARD_INDEX'); ?>
<?php

$switch_show_links_count = ( isset($this->_tpldata['switch_show_links.']) ) ?  sizeof($this->_tpldata['switch_show_links.']) : 0;
for ($switch_show_links_i = 0; $switch_show_links_i < $switch_show_links_count; $switch_show_links_i++)
{
 $switch_show_links_item = &$this->_tpldata['switch_show_links.'][$switch_show_links_i];
 $switch_show_links_item['S_ROW_COUNT'] = $switch_show_links_i;
 $switch_show_links_item['S_NUM_ROWS'] = $switch_show_links_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr> 
<td class="cat" width="100%" height="22"><span class="cattitle"><a href="<?php echo isset($this->vars['U_LINKS']) ? $this->vars['U_LINKS'] : $this->lang('U_LINKS'); ?>" class="cattitle"><?php echo isset($this->vars['L_LINKS']) ? $this->vars['L_LINKS'] : $this->lang('L_LINKS'); ?></a></span></td>
<td class="cat" nowrap="nowrap" align="center"><span class="cattitle"><?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?></span></td>
</tr>
<tr> 
<td class="row1" nowrap="nowrap"><iframe marginwidth="0" marginheight="0" src="<?php echo isset($this->vars['U_LINKS_JS']) ? $this->vars['U_LINKS_JS'] : $this->lang('U_LINKS_JS'); ?>" frameborder="0" scrolling="no" width="100%" height="<?php echo isset($this->vars['SITE_LOGO_HEIGHT']) ? $this->vars['SITE_LOGO_HEIGHT'] : $this->lang('SITE_LOGO_HEIGHT'); ?>"></iframe></td>
<td class="row2" nowrap="nowrap"><img src="<?php echo isset($this->vars['U_SITE_LOGO']) ? $this->vars['U_SITE_LOGO'] : $this->lang('U_SITE_LOGO'); ?>" alt="<?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?>" width="<?php echo isset($this->vars['SITE_LOGO_WIDTH']) ? $this->vars['SITE_LOGO_WIDTH'] : $this->lang('SITE_LOGO_WIDTH'); ?>" height="<?php echo isset($this->vars['SITE_LOGO_HEIGHT']) ? $this->vars['SITE_LOGO_HEIGHT'] : $this->lang('SITE_LOGO_HEIGHT'); ?>" border="0" /></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<?php

} // END switch_show_links

if(isset($switch_show_links_item)) { unset($switch_show_links_item); } 

?>
<?php

$switch_show_shoutbox_count = ( isset($this->_tpldata['switch_show_shoutbox.']) ) ?  sizeof($this->_tpldata['switch_show_shoutbox.']) : 0;
for ($switch_show_shoutbox_i = 0; $switch_show_shoutbox_i < $switch_show_shoutbox_count; $switch_show_shoutbox_i++)
{
 $switch_show_shoutbox_item = &$this->_tpldata['switch_show_shoutbox.'][$switch_show_shoutbox_i];
 $switch_show_shoutbox_item['S_ROW_COUNT'] = $switch_show_shoutbox_i;
 $switch_show_shoutbox_item['S_NUM_ROWS'] = $switch_show_shoutbox_count;

?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<th><a class="link2" href="<?php echo isset($this->vars['U_SHOUTBOX_MAX']) ? $this->vars['U_SHOUTBOX_MAX'] : $this->lang('U_SHOUTBOX_MAX'); ?>"><?php echo isset($this->vars['L_SHOUTBOX']) ? $this->vars['L_SHOUTBOX'] : $this->lang('L_SHOUTBOX'); ?></a></th>
</tr>
<tr>
<td class="row1"><span class="genmed"><iframe src="<?php echo isset($this->vars['U_SHOUTBOX']) ? $this->vars['U_SHOUTBOX'] : $this->lang('U_SHOUTBOX'); ?>" scrolling="NO" width="100%" height="270" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="true"></iframe></span></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<?php

} // END switch_show_shoutbox

if(isset($switch_show_shoutbox_item)) { unset($switch_show_shoutbox_item); } 

?>
<?php

$disable_viewonline_count = ( isset($this->_tpldata['disable_viewonline.']) ) ?  sizeof($this->_tpldata['disable_viewonline.']) : 0;
for ($disable_viewonline_i = 0; $disable_viewonline_i < $disable_viewonline_count; $disable_viewonline_i++)
{
 $disable_viewonline_item = &$this->_tpldata['disable_viewonline.'][$disable_viewonline_i];
 $disable_viewonline_item['S_ROW_COUNT'] = $disable_viewonline_i;
 $disable_viewonline_item['S_NUM_ROWS'] = $disable_viewonline_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="2"><a href="<?php echo isset($this->vars['U_VIEWONLINE']) ? $this->vars['U_VIEWONLINE'] : $this->lang('U_VIEWONLINE'); ?>"><?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></a></td>
</tr>
<tr>
<td class="row1" rowspan="5"><img src="templates/fisubsilversh/images/whosonline.gif" alt="<?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?>" width="25" height="25" class="imgfolder" title="<?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?>" />
</td>
<td class="row1" width="100%"><span class="gensmall"><?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?><br />
<?php echo isset($this->vars['TOTAL_USERS']) ? $this->vars['TOTAL_USERS'] : $this->lang('TOTAL_USERS'); ?><br />
<?php echo isset($this->vars['NEWEST_USER']) ? $this->vars['NEWEST_USER'] : $this->lang('NEWEST_USER'); ?></span></td>
</tr>
<tr>
<td class="row1"><span class="gensmall"><?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?> &nbsp;<?php echo isset($this->vars['COLOR_GROUPS_LIST']) ? $this->vars['COLOR_GROUPS_LIST'] : $this->lang('COLOR_GROUPS_LIST'); ?><br />
<?php echo isset($this->vars['RECORD_USERS']) ? $this->vars['RECORD_USERS'] : $this->lang('RECORD_USERS'); ?><br />
<?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?></span></td>
</tr>
<?php

} // END disable_viewonline

if(isset($disable_viewonline_item)) { unset($disable_viewonline_item); } 

?>
<?php

$switch_show_birthday_count = ( isset($this->_tpldata['switch_show_birthday.']) ) ?  sizeof($this->_tpldata['switch_show_birthday.']) : 0;
for ($switch_show_birthday_i = 0; $switch_show_birthday_i < $switch_show_birthday_count; $switch_show_birthday_i++)
{
 $switch_show_birthday_item = &$this->_tpldata['switch_show_birthday.'][$switch_show_birthday_i];
 $switch_show_birthday_item['S_ROW_COUNT'] = $switch_show_birthday_i;
 $switch_show_birthday_item['S_NUM_ROWS'] = $switch_show_birthday_count;

?>
<tr>
<td class="row1" align="left"><span class="gensmall"><?php echo isset($this->vars['L_WHOSBIRTHDAY_TODAY']) ? $this->vars['L_WHOSBIRTHDAY_TODAY'] : $this->lang('L_WHOSBIRTHDAY_TODAY'); ?><br /><?php echo isset($this->vars['L_WHOSBIRTHDAY_WEEK']) ? $this->vars['L_WHOSBIRTHDAY_WEEK'] : $this->lang('L_WHOSBIRTHDAY_WEEK'); ?></span></td>
</tr>
<?php

} // END switch_show_birthday

if(isset($switch_show_birthday_item)) { unset($switch_show_birthday_item); } 

?>
<?php

$switch_show_lastvisit_count = ( isset($this->_tpldata['switch_show_lastvisit.']) ) ?  sizeof($this->_tpldata['switch_show_lastvisit.']) : 0;
for ($switch_show_lastvisit_i = 0; $switch_show_lastvisit_i < $switch_show_lastvisit_count; $switch_show_lastvisit_i++)
{
 $switch_show_lastvisit_item = &$this->_tpldata['switch_show_lastvisit.'][$switch_show_lastvisit_i];
 $switch_show_lastvisit_item['S_ROW_COUNT'] = $switch_show_lastvisit_i;
 $switch_show_lastvisit_item['S_NUM_ROWS'] = $switch_show_lastvisit_count;

?>
<tr>
<td class="row1" align="left"><span class="gensmall"><?php echo isset($this->vars['L_USERS_TODAY']) ? $this->vars['L_USERS_TODAY'] : $this->lang('L_USERS_TODAY'); ?>&nbsp;<?php echo isset($this->vars['L_USERS_LASTHOUR']) ? $this->vars['L_USERS_LASTHOUR'] : $this->lang('L_USERS_LASTHOUR'); ?><br /><?php echo isset($this->vars['USERS_TODAY_LIST']) ? $this->vars['USERS_TODAY_LIST'] : $this->lang('USERS_TODAY_LIST'); ?></br></span></td>   
</tr>
<?php

} // END switch_show_lastvisit

if(isset($switch_show_lastvisit_item)) { unset($switch_show_lastvisit_item); } 

?>
<?php

$disable_viewonline_count = ( isset($this->_tpldata['disable_viewonline.']) ) ?  sizeof($this->_tpldata['disable_viewonline.']) : 0;
for ($disable_viewonline_i = 0; $disable_viewonline_i < $disable_viewonline_count; $disable_viewonline_i++)
{
 $disable_viewonline_item = &$this->_tpldata['disable_viewonline.'][$disable_viewonline_i];
 $disable_viewonline_item['S_ROW_COUNT'] = $disable_viewonline_i;
 $disable_viewonline_item['S_NUM_ROWS'] = $disable_viewonline_count;

?>
<tr>
<td height="20" class="row1"><span class="gensmall"><?php echo isset($this->vars['GOOGLE_VISIT_COUNTER']) ? $this->vars['GOOGLE_VISIT_COUNTER'] : $this->lang('GOOGLE_VISIT_COUNTER'); ?><br /><?php echo isset($this->vars['L_ONLINE_EXPLAIN']) ? $this->vars['L_ONLINE_EXPLAIN'] : $this->lang('L_ONLINE_EXPLAIN'); ?></span></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php

} // END disable_viewonline

if(isset($disable_viewonline_item)) { unset($disable_viewonline_item); } 

?> 
<?php

$switch_user_logged_out_count = ( isset($this->_tpldata['switch_user_logged_out.']) ) ?  sizeof($this->_tpldata['switch_user_logged_out.']) : 0;
for ($switch_user_logged_out_i = 0; $switch_user_logged_out_i < $switch_user_logged_out_count; $switch_user_logged_out_i++)
{
 $switch_user_logged_out_item = &$this->_tpldata['switch_user_logged_out.'][$switch_user_logged_out_i];
 $switch_user_logged_out_item['S_ROW_COUNT'] = $switch_user_logged_out_i;
 $switch_user_logged_out_item['S_NUM_ROWS'] = $switch_user_logged_out_count;

?>
<br />
<form method="post" action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat"><?php echo isset($this->vars['L_LOGIN_LOGOUT']) ? $this->vars['L_LOGIN_LOGOUT'] : $this->lang('L_LOGIN_LOGOUT'); ?></td>
</tr>
<tr>
<td class="row1" align="center">
<table border="0" cellspacing="0" cellpadding="2">
<tr> 
<td class="gensmall"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:&nbsp;</td>
<td><input class="post" type="text" name="username" size="10" /></td>
<td class="gensmall">&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>:</td>
<td><input class="post" type="password" name="password" size="10" maxlength="32" /></td>
<?php

$switch_allow_autologin_count = ( isset($switch_user_logged_out_item['switch_allow_autologin.']) ) ? sizeof($switch_user_logged_out_item['switch_allow_autologin.']) : 0;
for ($switch_allow_autologin_i = 0; $switch_allow_autologin_i < $switch_allow_autologin_count; $switch_allow_autologin_i++)
{
 $switch_allow_autologin_item = &$switch_user_logged_out_item['switch_allow_autologin.'][$switch_allow_autologin_i];
 $switch_allow_autologin_item['S_ROW_COUNT'] = $switch_allow_autologin_i;
 $switch_allow_autologin_item['S_NUM_ROWS'] = $switch_allow_autologin_count;

?>
<td class="gensmall">&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?></td>
<td><input class="text" type="checkbox" name="autologin" /></td>
<?php

} // END switch_allow_autologin

if(isset($switch_allow_autologin_item)) { unset($switch_allow_autologin_item); } 

?>
<td>&nbsp;&nbsp;<input type="submit" class="mainoption" name="login" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" /></td>
</tr>
</table></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
</form>
<?php

} // END switch_user_logged_out

if(isset($switch_user_logged_out_item)) { unset($switch_user_logged_out_item); } 

?>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
</tr>
</table>
<br />
<table border="0" align="center" cellpadding="0" cellspacing="3">
<tr>
<td><img src="<?php echo isset($this->vars['FORUM_NEW_IMG']) ? $this->vars['FORUM_NEW_IMG'] : $this->lang('FORUM_NEW_IMG'); ?>" alt="<?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FORUM_IMG']) ? $this->vars['FORUM_IMG'] : $this->lang('FORUM_IMG'); ?>" alt="<?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FORUM_LOCKED_IMG']) ? $this->vars['FORUM_LOCKED_IMG'] : $this->lang('FORUM_LOCKED_IMG'); ?>" alt="<?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?>" title="<?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?></td>
</tr>
</table>