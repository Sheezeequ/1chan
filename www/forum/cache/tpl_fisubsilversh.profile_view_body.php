<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:14:53 +0300 (time=1669727693)

?><table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle"><?php echo isset($this->vars['L_VIEWING_PROFILE']) ? $this->vars['L_VIEWING_PROFILE'] : $this->lang('L_VIEWING_PROFILE'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_VIEWING_PROFILE']) ? $this->vars['L_VIEWING_PROFILE'] : $this->lang('L_VIEWING_PROFILE'); ?></td>
</tr>
</table>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_VIEWING_PROFILE']) ? $this->vars['L_VIEWING_PROFILE'] : $this->lang('L_VIEWING_PROFILE'); ?></th>
</tr>
<tr>
<td class="cat" width="40%" align="center"><?php echo isset($this->vars['L_AVATAR']) ? $this->vars['L_AVATAR'] : $this->lang('L_AVATAR'); ?></td>
<td class="cat" width="60%" align="center"><?php echo isset($this->vars['L_ABOUT_USER']) ? $this->vars['L_ABOUT_USER'] : $this->lang('L_ABOUT_USER'); ?></td>
</tr>
<tr>
<td class="row1" align="center"><?php echo isset($this->vars['AVATAR_IMG']) ? $this->vars['AVATAR_IMG'] : $this->lang('AVATAR_IMG'); ?><br />
<span class="postdetails"><?php echo isset($this->vars['POSTER_RANK']) ? $this->vars['POSTER_RANK'] : $this->lang('POSTER_RANK'); ?><br /><br /><?php echo isset($this->vars['L_ABSENCE']) ? $this->vars['L_ABSENCE'] : $this->lang('L_ABSENCE'); ?>&nbsp;<br /><b><?php echo isset($this->vars['ABSENCE_MESSAGE']) ? $this->vars['ABSENCE_MESSAGE'] : $this->lang('ABSENCE_MESSAGE'); ?></b></span></td>
<td class="row1" rowspan="3" valign="top">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?>:</td>
<td width="100%"><?php echo isset($this->vars['JOINED']) ? $this->vars['JOINED'] : $this->lang('JOINED'); ?></td>
</tr>
<!-- Start add - Last visit MOD -->
<tr> 
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_LOGON']) ? $this->vars['L_LOGON'] : $this->lang('L_LOGON'); ?>:</td> 
<td width="100%"><?php echo isset($this->vars['LAST_LOGON']) ? $this->vars['LAST_LOGON'] : $this->lang('LAST_LOGON'); ?></td> 
</tr>
<?php

$switch_user_is_moderator_count = ( isset($this->_tpldata['switch_user_is_moderator.']) ) ?  sizeof($this->_tpldata['switch_user_is_moderator.']) : 0;
for ($switch_user_is_moderator_i = 0; $switch_user_is_moderator_i < $switch_user_is_moderator_count; $switch_user_is_moderator_i++)
{
 $switch_user_is_moderator_item = &$this->_tpldata['switch_user_is_moderator.'][$switch_user_is_moderator_i];
 $switch_user_is_moderator_item['S_ROW_COUNT'] = $switch_user_is_moderator_i;
 $switch_user_is_moderator_item['S_NUM_ROWS'] = $switch_user_is_moderator_count;

?>
<tr> 
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_TOTAL_ONLINE_TIME']) ? $this->vars['L_TOTAL_ONLINE_TIME'] : $this->lang('L_TOTAL_ONLINE_TIME'); ?>:</td> 
<td width="100%"><?php echo isset($this->vars['TOTAL_ONLINE_TIME']) ? $this->vars['TOTAL_ONLINE_TIME'] : $this->lang('TOTAL_ONLINE_TIME'); ?></td> 
</tr> 
<tr> 
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_LAST_ONLINE_TIME']) ? $this->vars['L_LAST_ONLINE_TIME'] : $this->lang('L_LAST_ONLINE_TIME'); ?>:</td> 
<td width="100%"><?php echo isset($this->vars['LAST_ONLINE_TIME']) ? $this->vars['LAST_ONLINE_TIME'] : $this->lang('LAST_ONLINE_TIME'); ?></td> 
</tr> 
<tr> 
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_NUMBER_OF_VISIT']) ? $this->vars['L_NUMBER_OF_VISIT'] : $this->lang('L_NUMBER_OF_VISIT'); ?>:</td> 
<td width="100%"><?php echo isset($this->vars['NUMBER_OF_VISIT']) ? $this->vars['NUMBER_OF_VISIT'] : $this->lang('NUMBER_OF_VISIT'); ?></td> 
</tr> 
<tr> 
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_NUMBER_OF_PAGES']) ? $this->vars['L_NUMBER_OF_PAGES'] : $this->lang('L_NUMBER_OF_PAGES'); ?>:</td> 
<td width="100%"><?php echo isset($this->vars['NUMBER_OF_PAGES']) ? $this->vars['NUMBER_OF_PAGES'] : $this->lang('NUMBER_OF_PAGES'); ?></td> 
</tr> 
<?php

} // END switch_user_is_moderator

if(isset($switch_user_is_moderator_item)) { unset($switch_user_is_moderator_item); } 

?>
<!-- End add - Last visit MOD -->
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_TOTAL_POSTS']) ? $this->vars['L_TOTAL_POSTS'] : $this->lang('L_TOTAL_POSTS'); ?>:</td>
<td valign="top"><?php echo isset($this->vars['POSTS']) ? $this->vars['POSTS'] : $this->lang('POSTS'); ?><br />
<span class="genmed">[<?php echo isset($this->vars['POST_PERCENT_STATS']) ? $this->vars['POST_PERCENT_STATS'] : $this->lang('POST_PERCENT_STATS'); ?> / <?php echo isset($this->vars['POST_DAY_STATS']) ? $this->vars['POST_DAY_STATS'] : $this->lang('POST_DAY_STATS'); ?>]<br />
<a href="<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>"><?php echo isset($this->vars['L_SEARCH_USER_POSTS']) ? $this->vars['L_SEARCH_USER_POSTS'] : $this->lang('L_SEARCH_USER_POSTS'); ?></a></span></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_LOCATION']) ? $this->vars['L_LOCATION'] : $this->lang('L_LOCATION'); ?>:</td>
<td><?php echo isset($this->vars['LOCATION']) ? $this->vars['LOCATION'] : $this->lang('LOCATION'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?>:</td>
<td><?php echo isset($this->vars['WWW']) ? $this->vars['WWW'] : $this->lang('WWW'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_OCCUPATION']) ? $this->vars['L_OCCUPATION'] : $this->lang('L_OCCUPATION'); ?>:</td>
<td><?php echo isset($this->vars['OCCUPATION']) ? $this->vars['OCCUPATION'] : $this->lang('OCCUPATION'); ?></td>
</tr>
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_INTERESTS']) ? $this->vars['L_INTERESTS'] : $this->lang('L_INTERESTS'); ?>:</td>
<td><?php echo isset($this->vars['INTERESTS']) ? $this->vars['INTERESTS'] : $this->lang('INTERESTS'); ?></td>
</tr>
<!-- Custom Profile Fields MOD start + -->
<?php

$custom_about_count = ( isset($this->_tpldata['custom_about.']) ) ?  sizeof($this->_tpldata['custom_about.']) : 0;
for ($custom_about_i = 0; $custom_about_i < $custom_about_count; $custom_about_i++)
{
 $custom_about_item = &$this->_tpldata['custom_about.'][$custom_about_i];
 $custom_about_item['S_ROW_COUNT'] = $custom_about_i;
 $custom_about_item['S_NUM_ROWS'] = $custom_about_count;

?>
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($custom_about_item['ABOUT_N']) ? $custom_about_item['ABOUT_N'] : ''; ?>:</td>
<td><?php echo isset($custom_about_item['ABOUT_D']) ? $custom_about_item['ABOUT_D'] : ''; ?></td>
</tr>
<?php

} // END custom_about

if(isset($custom_about_item)) { unset($custom_about_item); } 

?>
<!-- Custom Profile Fields MOD finish + -->
<?php

$switch_upload_limits_count = ( isset($this->_tpldata['switch_upload_limits.']) ) ?  sizeof($this->_tpldata['switch_upload_limits.']) : 0;
for ($switch_upload_limits_i = 0; $switch_upload_limits_i < $switch_upload_limits_count; $switch_upload_limits_i++)
{
 $switch_upload_limits_item = &$this->_tpldata['switch_upload_limits.'][$switch_upload_limits_i];
 $switch_upload_limits_item['S_ROW_COUNT'] = $switch_upload_limits_i;
 $switch_upload_limits_item['S_NUM_ROWS'] = $switch_upload_limits_count;

?>
<tr> 
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?>:</td>
<td> 
<table width="175" cellspacing="1" cellpadding="2" border="0" class="bodyline">
<tr> 
<td colspan="3" width="100%" class="row2">
<table cellspacing="0" cellpadding="1" border="0">
<tr> 
<td bgcolor="<?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>"><img src="templates/fisubsilver/images/spacer.gif" width="<?php echo isset($this->vars['UPLOAD_LIMIT_IMG_WIDTH']) ? $this->vars['UPLOAD_LIMIT_IMG_WIDTH'] : $this->lang('UPLOAD_LIMIT_IMG_WIDTH'); ?>" height="8" alt="<?php echo isset($this->vars['UPLOAD_LIMIT_PERCENT']) ? $this->vars['UPLOAD_LIMIT_PERCENT'] : $this->lang('UPLOAD_LIMIT_PERCENT'); ?>" /></td>
</tr>
</table>
</td>
</tr>
<tr> 
<td width="33%" class="row1"><span class="gensmall">0%</span></td>
<td width="34%" align="center" class="row1"><span class="gensmall">50%</span></td>
<td width="33%" align="right" class="row1"><span class="gensmall">100%</span></td>
</tr>
</table>
<b><span class="genmed">[<?php echo isset($this->vars['UPLOADED']) ? $this->vars['UPLOADED'] : $this->lang('UPLOADED'); ?> / <?php echo isset($this->vars['QUOTA']) ? $this->vars['QUOTA'] : $this->lang('QUOTA'); ?> / <?php echo isset($this->vars['PERCENT_FULL']) ? $this->vars['PERCENT_FULL'] : $this->lang('PERCENT_FULL'); ?>]</span> </b><br />
<span class="genmed"><a href="<?php echo isset($this->vars['U_UACP']) ? $this->vars['U_UACP'] : $this->lang('U_UACP'); ?>" class="genmed"><?php echo isset($this->vars['L_UACP']) ? $this->vars['L_UACP'] : $this->lang('L_UACP'); ?></a></span></td>
</td>
</tr>
<?php

} // END switch_upload_limits

if(isset($switch_upload_limits_item)) { unset($switch_upload_limits_item); } 

?>
<!-- Start add - Gender MOD --> 
<tr> 
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_GENDER']) ? $this->vars['L_GENDER'] : $this->lang('L_GENDER'); ?>:</td>
<td><?php echo isset($this->vars['GENDER']) ? $this->vars['GENDER'] : $this->lang('GENDER'); ?></td>
</tr>
<!-- End add - Gender MOD -->
<!-- Start add - Birthday MOD -->
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_BIRTHDAY']) ? $this->vars['L_BIRTHDAY'] : $this->lang('L_BIRTHDAY'); ?>:</td>
<td><?php echo isset($this->vars['BIRTHDAY']) ? $this->vars['BIRTHDAY'] : $this->lang('BIRTHDAY'); ?></td>
</tr>
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_ZODIAC']) ? $this->vars['L_ZODIAC'] : $this->lang('L_ZODIAC'); ?>:</td>
<td><?php echo isset($this->vars['ZODIAC']) ? $this->vars['ZODIAC'] : $this->lang('ZODIAC'); ?>&nbsp;<?php echo isset($this->vars['ZODIAC_IMG']) ? $this->vars['ZODIAC_IMG'] : $this->lang('ZODIAC_IMG'); ?></td>
</tr>
<tr>
<td align="right" valign="top" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_CHINESE']) ? $this->vars['L_CHINESE'] : $this->lang('L_CHINESE'); ?>:</td>
<td><?php echo isset($this->vars['CHINESE']) ? $this->vars['CHINESE'] : $this->lang('CHINESE'); ?>&nbsp;<?php echo isset($this->vars['CHINESE_IMG']) ? $this->vars['CHINESE_IMG'] : $this->lang('CHINESE_IMG'); ?></td>
</tr>
<!-- End add - Birthday MOD -->
</table>
</td>
</tr>
<tr>
<td class="cat" align="center"><?php echo isset($this->vars['L_CONTACT']) ? $this->vars['L_CONTACT'] : $this->lang('L_CONTACT'); ?> <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></td>
</tr>
<tr>
<td class="row1" valign="top">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>:</td>
<td width="100%"><?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle">&nbsp;<?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></td>
<td><?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_MESSENGER']) ? $this->vars['L_MESSENGER'] : $this->lang('L_MESSENGER'); ?>:</td>
<td><?php echo isset($this->vars['MSN']) ? $this->vars['MSN'] : $this->lang('MSN'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_YAHOO']) ? $this->vars['L_YAHOO'] : $this->lang('L_YAHOO'); ?>:</td>
<td><?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_AIM']) ? $this->vars['L_AIM'] : $this->lang('L_AIM'); ?>:</td>
<td><?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?></td>
</tr>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($this->vars['L_ICQ_NUMBER']) ? $this->vars['L_ICQ_NUMBER'] : $this->lang('L_ICQ_NUMBER'); ?>:</td>
<td><?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></td>
</tr>
<!-- Custom Profile Fields MOD start + -->
<?php

$custom_contact_count = ( isset($this->_tpldata['custom_contact.']) ) ?  sizeof($this->_tpldata['custom_contact.']) : 0;
for ($custom_contact_i = 0; $custom_contact_i < $custom_contact_count; $custom_contact_i++)
{
 $custom_contact_item = &$this->_tpldata['custom_contact.'][$custom_contact_i];
 $custom_contact_item['S_ROW_COUNT'] = $custom_contact_i;
 $custom_contact_item['S_NUM_ROWS'] = $custom_contact_count;

?>
<tr>
<td align="right" nowrap="nowrap" class="explaintitle"><?php echo isset($custom_contact_item['CONTACT_N']) ? $custom_contact_item['CONTACT_N'] : ''; ?>:</td>
<td><?php echo isset($custom_contact_item['CONTACT_D']) ? $custom_contact_item['CONTACT_D'] : ''; ?></td>
</tr>
<?php

} // END custom_contact

if(isset($custom_contact_item)) { unset($custom_contact_item); } 

?>
<!-- Custom Profile Fields MOD finish + -->
<tr>
<td class="explaintitle" align="right" nowrap="nowrap"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?>:</td>
<td class="genmed"><?php echo isset($this->vars['GALLERY_IMG']) ? $this->vars['GALLERY_IMG'] : $this->lang('GALLERY_IMG'); ?>&nbsp;
<?php

$enable_view_toggle_count = ( isset($this->_tpldata['enable_view_toggle.']) ) ?  sizeof($this->_tpldata['enable_view_toggle.']) : 0;
for ($enable_view_toggle_i = 0; $enable_view_toggle_i < $enable_view_toggle_count; $enable_view_toggle_i++)
{
 $enable_view_toggle_item = &$this->_tpldata['enable_view_toggle.'][$enable_view_toggle_i];
 $enable_view_toggle_item['S_ROW_COUNT'] = $enable_view_toggle_i;
 $enable_view_toggle_item['S_NUM_ROWS'] = $enable_view_toggle_count;

?>
<a href="<?php echo isset($this->vars['U_TOGGLE_VIEW_ALL']) ? $this->vars['U_TOGGLE_VIEW_ALL'] : $this->lang('U_TOGGLE_VIEW_ALL'); ?>"><img src="<?php echo isset($this->vars['TOGGLE_VIEW_ALL_IMG']) ? $this->vars['TOGGLE_VIEW_ALL_IMG'] : $this->lang('TOGGLE_VIEW_ALL_IMG'); ?>" alt="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>" title="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>"></a>&nbsp;
<?php

} // END enable_view_toggle

if(isset($enable_view_toggle_item)) { unset($enable_view_toggle_item); } 

?>
<a href="<?php echo isset($this->vars['U_ALL_IMAGES_BY_USER']) ? $this->vars['U_ALL_IMAGES_BY_USER'] : $this->lang('U_ALL_IMAGES_BY_USER'); ?>"><?php echo isset($this->vars['L_ALL_IMAGES_BY_USER']) ? $this->vars['L_ALL_IMAGES_BY_USER'] : $this->lang('L_ALL_IMAGES_BY_USER'); ?></a>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_VIEWING_PROFILE']) ? $this->vars['L_VIEWING_PROFILE'] : $this->lang('L_VIEWING_PROFILE'); ?></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>