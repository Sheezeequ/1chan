<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:56:08 -0500 (time=1323528968)

?><div class="maintitle"><?php echo isset($this->vars['L_USER_TITLE']) ? $this->vars['L_USER_TITLE'] : $this->lang('L_USER_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_USER_EXPLAIN']) ? $this->vars['L_USER_EXPLAIN'] : $this->lang('L_USER_EXPLAIN'); ?></div>
<br />
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<form action="<?php echo isset($this->vars['S_PROFILE_ACTION']) ? $this->vars['S_PROFILE_ACTION'] : $this->lang('S_PROFILE_ACTION'); ?>" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?> method="post">
<table width="100%" cellspacing="1" cellpadding="3" border="0" class="forumline">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_REGISTRATION_INFO']) ? $this->vars['L_REGISTRATION_INFO'] : $this->lang('L_REGISTRATION_INFO'); ?></th>
</tr>
<tr> 
<td class="row2" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_ITEMS_REQUIRED']) ? $this->vars['L_ITEMS_REQUIRED'] : $this->lang('L_ITEMS_REQUIRED'); ?></span></td>
</tr>
<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>: *</td>
<td class="row2"> 
<input type="text" name="username" size="35" maxlength="40" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>: *</td>
<td class="row2"> 
<input type="text" name="email" size="35" maxlength="255" value="<?php echo isset($this->vars['EMAIL']) ? $this->vars['EMAIL'] : $this->lang('EMAIL'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_NEW_PASSWORD']) ? $this->vars['L_NEW_PASSWORD'] : $this->lang('L_NEW_PASSWORD'); ?>: *<br />
<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_IF_CHANGED']) ? $this->vars['L_PASSWORD_IF_CHANGED'] : $this->lang('L_PASSWORD_IF_CHANGED'); ?></span></td>
<td class="row2"> 
<input type="password" name="password" size="35" maxlength="32" value="" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_CONFIRM_PASSWORD']) ? $this->vars['L_CONFIRM_PASSWORD'] : $this->lang('L_CONFIRM_PASSWORD'); ?>: * <br />
<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_CONFIRM_IF_CHANGED']) ? $this->vars['L_PASSWORD_CONFIRM_IF_CHANGED'] : $this->lang('L_PASSWORD_CONFIRM_IF_CHANGED'); ?></span></td>
<td class="row2"> 
<input type="password" name="password_confirm" size="35" maxlength="32" value="" class="post" />
</td>
</tr>
<tr> 
<td class="cat" colspan="2">&nbsp;</td>
</tr>
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_PROFILE_INFO']) ? $this->vars['L_PROFILE_INFO'] : $this->lang('L_PROFILE_INFO'); ?></th>
</tr>
<tr> 
<td class="row2" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_PROFILE_INFO_NOTICE']) ? $this->vars['L_PROFILE_INFO_NOTICE'] : $this->lang('L_PROFILE_INFO_NOTICE'); ?></span></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ICQ_NUMBER']) ? $this->vars['L_ICQ_NUMBER'] : $this->lang('L_ICQ_NUMBER'); ?></td>
<td class="row2"> 
<input type="text" name="icq" size="10" maxlength="15" value="<?php echo isset($this->vars['ICQ']) ? $this->vars['ICQ'] : $this->lang('ICQ'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_AIM']) ? $this->vars['L_AIM'] : $this->lang('L_AIM'); ?></td>
<td class="row2"> 
<input type="text" name="aim" size="20" maxlength="255" value="<?php echo isset($this->vars['AIM']) ? $this->vars['AIM'] : $this->lang('AIM'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_MESSENGER']) ? $this->vars['L_MESSENGER'] : $this->lang('L_MESSENGER'); ?></td>
<td class="row2"> 
<input type="text" name="msn" size="20" maxlength="255" value="<?php echo isset($this->vars['MSN']) ? $this->vars['MSN'] : $this->lang('MSN'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_YAHOO']) ? $this->vars['L_YAHOO'] : $this->lang('L_YAHOO'); ?></td>
<td class="row2"> 
<input type="text" name="yim" size="20" maxlength="255" value="<?php echo isset($this->vars['YIM']) ? $this->vars['YIM'] : $this->lang('YIM'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></td>
<td class="row2"> 
<input type="text" name="website" size="35" maxlength="255" value="<?php echo isset($this->vars['WEBSITE']) ? $this->vars['WEBSITE'] : $this->lang('WEBSITE'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_LOCATION']) ? $this->vars['L_LOCATION'] : $this->lang('L_LOCATION'); ?></td>
<td class="row2"> 
<input type="text" name="location" size="35" maxlength="100" value="<?php echo isset($this->vars['LOCATION']) ? $this->vars['LOCATION'] : $this->lang('LOCATION'); ?>" class="post" />
</td>
</tr>
<!-- FLAGHACK-start -->
<tr>
<td class="row1"><?php echo isset($this->vars['L_FLAG']) ? $this->vars['L_FLAG'] : $this->lang('L_FLAG'); ?>:</td>
<td class="row2"><span class="gensmall">
<table><tr>
<td><?php echo isset($this->vars['FLAG_SELECT']) ? $this->vars['FLAG_SELECT'] : $this->lang('FLAG_SELECT'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><img src="../images/flags/<?php echo isset($this->vars['FLAG_START']) ? $this->vars['FLAG_START'] : $this->lang('FLAG_START'); ?>" width="32" height="20" name="user_flag" /></td>
</tr></table>
</span></td>
</tr>
<!-- FLAGHACK-end -->
<tr> 
<td class="row1"><?php echo isset($this->vars['L_OCCUPATION']) ? $this->vars['L_OCCUPATION'] : $this->lang('L_OCCUPATION'); ?></td>
<td class="row2"> 
<input type="text" name="occupation" size="35" maxlength="100" value="<?php echo isset($this->vars['OCCUPATION']) ? $this->vars['OCCUPATION'] : $this->lang('OCCUPATION'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_INTERESTS']) ? $this->vars['L_INTERESTS'] : $this->lang('L_INTERESTS'); ?></td>
<td class="row2"> 
<input type="text" name="interests" size="35" maxlength="150" value="<?php echo isset($this->vars['INTERESTS']) ? $this->vars['INTERESTS'] : $this->lang('INTERESTS'); ?>" class="post" />
</td>
</tr>
<?php

$allow_absence_count = ( isset($this->_tpldata['allow_absence.']) ) ?  sizeof($this->_tpldata['allow_absence.']) : 0;
for ($allow_absence_i = 0; $allow_absence_i < $allow_absence_count; $allow_absence_i++)
{
 $allow_absence_item = &$this->_tpldata['allow_absence.'][$allow_absence_i];
 $allow_absence_item['S_ROW_COUNT'] = $allow_absence_i;
 $allow_absence_item['S_NUM_ROWS'] = $allow_absence_count;

?>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_USER_ABSENCE']) ? $this->vars['L_USER_ABSENCE'] : $this->lang('L_USER_ABSENCE'); ?>:</span></td>
<td class="row2">
<input type="radio" name="user_absence" value="1" <?php echo isset($this->vars['USER_ABSENCE_YES']) ? $this->vars['USER_ABSENCE_YES'] : $this->lang('USER_ABSENCE_YES'); ?> />
<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp;
<input type="radio" name="user_absence" value="0" <?php echo isset($this->vars['USER_ABSENCE_NO']) ? $this->vars['USER_ABSENCE_NO'] : $this->lang('USER_ABSENCE_NO'); ?> />
<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
</tr>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_USER_ABSENCE_MODE']) ? $this->vars['L_USER_ABSENCE_MODE'] : $this->lang('L_USER_ABSENCE_MODE'); ?>:</span></td>
<td class="row2"><span class="gensmall"><?php echo isset($this->vars['S_USER_ABSENCE_MODE']) ? $this->vars['S_USER_ABSENCE_MODE'] : $this->lang('S_USER_ABSENCE_MODE'); ?></span></td>
</tr>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_USER_ABSENCE_TEXT']) ? $this->vars['L_USER_ABSENCE_TEXT'] : $this->lang('L_USER_ABSENCE_TEXT'); ?>:</span></td>
<td class="row2"><textarea name="user_absence_text" cols="75" rows="5"><?php echo isset($this->vars['S_USER_ABSENCE_TEXT']) ? $this->vars['S_USER_ABSENCE_TEXT'] : $this->lang('S_USER_ABSENCE_TEXT'); ?></textarea>
</tr>
<?php

} // END allow_absence

if(isset($allow_absence_item)) { unset($allow_absence_item); } 

?>
<!-- Start add - Gender MOD -->
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_GENDER']) ? $this->vars['L_GENDER'] : $this->lang('L_GENDER'); ?>:</span></td> 
<td class="row2"> 
<input type="radio" name="gender" value="0" <?php echo isset($this->vars['GENDER_NO_SPECIFY_CHECKED']) ? $this->vars['GENDER_NO_SPECIFY_CHECKED'] : $this->lang('GENDER_NO_SPECIFY_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_NOT_SPECIFY']) ? $this->vars['L_GENDER_NOT_SPECIFY'] : $this->lang('L_GENDER_NOT_SPECIFY'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="gender" value="1" <?php echo isset($this->vars['GENDER_MALE_CHECKED']) ? $this->vars['GENDER_MALE_CHECKED'] : $this->lang('GENDER_MALE_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_MALE']) ? $this->vars['L_GENDER_MALE'] : $this->lang('L_GENDER_MALE'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="gender" value="2" <?php echo isset($this->vars['GENDER_FEMALE_CHECKED']) ? $this->vars['GENDER_FEMALE_CHECKED'] : $this->lang('GENDER_FEMALE_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_FEMALE']) ? $this->vars['L_GENDER_FEMALE'] : $this->lang('L_GENDER_FEMALE'); ?></span></td> 
</tr>
<!-- End add - Gender MOD -->
<!-- Start add - Birthday MOD -->
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_BIRTHDAY']) ? $this->vars['L_BIRTHDAY'] : $this->lang('L_BIRTHDAY'); ?></span></td>
<td class="row2"><?php echo isset($this->vars['S_BIRTHDAY']) ? $this->vars['S_BIRTHDAY'] : $this->lang('S_BIRTHDAY'); ?></td>
</tr>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_NEXT_BIRTHDAY_GREETING']) ? $this->vars['L_NEXT_BIRTHDAY_GREETING'] : $this->lang('L_NEXT_BIRTHDAY_GREETING'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_NEXT_BIRTHDAY_GREETING_EXPLAIN']) ? $this->vars['L_NEXT_BIRTHDAY_GREETING_EXPLAIN'] : $this->lang('L_NEXT_BIRTHDAY_GREETING_EXPLAIN'); ?><br /></span></td>
<td class="row2"><input class="post" type="text" name="next_birthday_greeting" size="5" maxlength="4" value="<?php echo isset($this->vars['NEXT_BIRTHDAY_GREETING']) ? $this->vars['NEXT_BIRTHDAY_GREETING'] : $this->lang('NEXT_BIRTHDAY_GREETING'); ?>" /></td>
</tr>
<!-- End add - Birthday MOD -->
<tr> 
<td class="row1"><?php echo isset($this->vars['L_SIGNATURE']) ? $this->vars['L_SIGNATURE'] : $this->lang('L_SIGNATURE'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_SIGNATURE_EXPLAIN']) ? $this->vars['L_SIGNATURE_EXPLAIN'] : $this->lang('L_SIGNATURE_EXPLAIN'); ?><br />
<br />
<?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br />
<?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br />
<?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
<td class="row2"> 
<textarea name="signature" rows="6" cols="30" style="width: 300px" class="post"><?php echo isset($this->vars['SIGNATURE']) ? $this->vars['SIGNATURE'] : $this->lang('SIGNATURE'); ?></textarea>
</td>
</tr>
<!-- Custom Profile Fields MOD start + -->
	<?php

$switch_custom_fields_count = ( isset($this->_tpldata['switch_custom_fields.']) ) ?  sizeof($this->_tpldata['switch_custom_fields.']) : 0;
for ($switch_custom_fields_i = 0; $switch_custom_fields_i < $switch_custom_fields_count; $switch_custom_fields_i++)
{
 $switch_custom_fields_item = &$this->_tpldata['switch_custom_fields.'][$switch_custom_fields_i];
 $switch_custom_fields_item['S_ROW_COUNT'] = $switch_custom_fields_i;
 $switch_custom_fields_item['S_NUM_ROWS'] = $switch_custom_fields_count;

?>
	<tr> 
	  <td class="row3" colspan="2"><span class="gensmall"><?php echo isset($switch_custom_fields_item['L_CUSTOM_FIELD_NOTICE']) ? $switch_custom_fields_item['L_CUSTOM_FIELD_NOTICE'] : ''; ?></span></td>
	</tr>
	<?php

} // END switch_custom_fields

if(isset($switch_custom_fields_item)) { unset($switch_custom_fields_item); } 

?>
	<?php

$custom_fields_count = ( isset($this->_tpldata['custom_fields.']) ) ?  sizeof($this->_tpldata['custom_fields.']) : 0;
for ($custom_fields_i = 0; $custom_fields_i < $custom_fields_count; $custom_fields_i++)
{
 $custom_fields_item = &$this->_tpldata['custom_fields.'][$custom_fields_i];
 $custom_fields_item['S_ROW_COUNT'] = $custom_fields_i;
 $custom_fields_item['S_NUM_ROWS'] = $custom_fields_count;

?>
	<tr>
	 <td class="row1" valign="top"><span class="gen"><?php echo isset($custom_fields_item['NAME']) ? $custom_fields_item['NAME'] : ''; ?>:<?php echo isset($custom_fields_item['REQUIRED']) ? $custom_fields_item['REQUIRED'] : ''; ?><?php echo isset($custom_fields_item['ADMIN_ONLY']) ? $custom_fields_item['ADMIN_ONLY'] : ''; ?></span>
	 <?php

$switch_description_count = ( isset($custom_fields_item['switch_description.']) ) ? sizeof($custom_fields_item['switch_description.']) : 0;
for ($switch_description_i = 0; $switch_description_i < $switch_description_count; $switch_description_i++)
{
 $switch_description_item = &$custom_fields_item['switch_description.'][$switch_description_i];
 $switch_description_item['S_ROW_COUNT'] = $switch_description_i;
 $switch_description_item['S_NUM_ROWS'] = $switch_description_count;

?>
	 <br /><span class="gensmall"><?php echo isset($switch_description_item['DESCRIPTION']) ? $switch_description_item['DESCRIPTION'] : ''; ?></span>
	 <?php

} // END switch_description

if(isset($switch_description_item)) { unset($switch_description_item); } 

?>
   </td>
	 <td class="row2">
	 <?php echo isset($custom_fields_item['FIELD']) ? $custom_fields_item['FIELD'] : ''; ?>
	 </td>
	</tr>
	<?php

} // END custom_fields

if(isset($custom_fields_item)) { unset($custom_fields_item); } 

?>
<!-- Custom Profile Fields MOD finish + -->
<tr> 
<td class="cat" colspan="2">&nbsp;</td>
</tr>
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_PREFERENCES']) ? $this->vars['L_PREFERENCES'] : $this->lang('L_PREFERENCES'); ?></th>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_PUBLIC_VIEW_EMAIL']) ? $this->vars['L_PUBLIC_VIEW_EMAIL'] : $this->lang('L_PUBLIC_VIEW_EMAIL'); ?></td>
<td class="row2"> 
<input type="radio" name="viewemail" value="1" <?php echo isset($this->vars['VIEW_EMAIL_YES']) ? $this->vars['VIEW_EMAIL_YES'] : $this->lang('VIEW_EMAIL_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="viewemail" value="0" <?php echo isset($this->vars['VIEW_EMAIL_NO']) ? $this->vars['VIEW_EMAIL_NO'] : $this->lang('VIEW_EMAIL_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_HIDE_USER']) ? $this->vars['L_HIDE_USER'] : $this->lang('L_HIDE_USER'); ?></td>
<td class="row2"> 
<input type="radio" name="hideonline" value="1" <?php echo isset($this->vars['HIDE_USER_YES']) ? $this->vars['HIDE_USER_YES'] : $this->lang('HIDE_USER_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="hideonline" value="0" <?php echo isset($this->vars['HIDE_USER_NO']) ? $this->vars['HIDE_USER_NO'] : $this->lang('HIDE_USER_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?></td>
<td class="row2"> 
<input type="radio" name="notifyreply" value="1" <?php echo isset($this->vars['NOTIFY_REPLY_YES']) ? $this->vars['NOTIFY_REPLY_YES'] : $this->lang('NOTIFY_REPLY_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="notifyreply" value="0" <?php echo isset($this->vars['NOTIFY_REPLY_NO']) ? $this->vars['NOTIFY_REPLY_NO'] : $this->lang('NOTIFY_REPLY_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_NOTIFY_ON_PRIVMSG']) ? $this->vars['L_NOTIFY_ON_PRIVMSG'] : $this->lang('L_NOTIFY_ON_PRIVMSG'); ?></td>
<td class="row2"> 
<input type="radio" name="notifypm" value="1" <?php echo isset($this->vars['NOTIFY_PM_YES']) ? $this->vars['NOTIFY_PM_YES'] : $this->lang('NOTIFY_PM_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="notifypm" value="0" <?php echo isset($this->vars['NOTIFY_PM_NO']) ? $this->vars['NOTIFY_PM_NO'] : $this->lang('NOTIFY_PM_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_POPUP_ON_PRIVMSG']) ? $this->vars['L_POPUP_ON_PRIVMSG'] : $this->lang('L_POPUP_ON_PRIVMSG'); ?></td>
<td class="row2"> 
<input type="radio" name="popup_pm" value="1" <?php echo isset($this->vars['POPUP_PM_YES']) ? $this->vars['POPUP_PM_YES'] : $this->lang('POPUP_PM_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="popup_pm" value="0" <?php echo isset($this->vars['POPUP_PM_NO']) ? $this->vars['POPUP_PM_NO'] : $this->lang('POPUP_PM_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALWAYS_ADD_SIGNATURE']) ? $this->vars['L_ALWAYS_ADD_SIGNATURE'] : $this->lang('L_ALWAYS_ADD_SIGNATURE'); ?></td>
<td class="row2"> 
<input type="radio" name="attachsig" value="1" <?php echo isset($this->vars['ALWAYS_ADD_SIGNATURE_YES']) ? $this->vars['ALWAYS_ADD_SIGNATURE_YES'] : $this->lang('ALWAYS_ADD_SIGNATURE_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="attachsig" value="0" <?php echo isset($this->vars['ALWAYS_ADD_SIGNATURE_NO']) ? $this->vars['ALWAYS_ADD_SIGNATURE_NO'] : $this->lang('ALWAYS_ADD_SIGNATURE_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALWAYS_SET_BOOKMARK']) ? $this->vars['L_ALWAYS_SET_BOOKMARK'] : $this->lang('L_ALWAYS_SET_BOOKMARK'); ?></td>
<td class="row2"> 
<input type="radio" name="setbm" value="1" <?php echo isset($this->vars['ALWAYS_SET_BOOKMARK_YES']) ? $this->vars['ALWAYS_SET_BOOKMARK_YES'] : $this->lang('ALWAYS_SET_BOOKMARK_YES'); ?> />
<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="setbm" value="0" <?php echo isset($this->vars['ALWAYS_SET_BOOKMARK_NO']) ? $this->vars['ALWAYS_SET_BOOKMARK_NO'] : $this->lang('ALWAYS_SET_BOOKMARK_NO'); ?> />
<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALWAYS_ALLOW_BBCODE']) ? $this->vars['L_ALWAYS_ALLOW_BBCODE'] : $this->lang('L_ALWAYS_ALLOW_BBCODE'); ?></td>
<td class="row2"> 
<input type="radio" name="allowbbcode" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_BBCODE_YES']) ? $this->vars['ALWAYS_ALLOW_BBCODE_YES'] : $this->lang('ALWAYS_ALLOW_BBCODE_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="allowbbcode" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_BBCODE_NO']) ? $this->vars['ALWAYS_ALLOW_BBCODE_NO'] : $this->lang('ALWAYS_ALLOW_BBCODE_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALWAYS_ALLOW_HTML']) ? $this->vars['L_ALWAYS_ALLOW_HTML'] : $this->lang('L_ALWAYS_ALLOW_HTML'); ?></td>
<td class="row2"> 
<input type="radio" name="allowhtml" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_HTML_YES']) ? $this->vars['ALWAYS_ALLOW_HTML_YES'] : $this->lang('ALWAYS_ALLOW_HTML_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="allowhtml" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_HTML_NO']) ? $this->vars['ALWAYS_ALLOW_HTML_NO'] : $this->lang('ALWAYS_ALLOW_HTML_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALWAYS_ALLOW_SMILIES']) ? $this->vars['L_ALWAYS_ALLOW_SMILIES'] : $this->lang('L_ALWAYS_ALLOW_SMILIES'); ?></td>
<td class="row2"> 
<input type="radio" name="allowsmilies" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_SMILIES_YES']) ? $this->vars['ALWAYS_ALLOW_SMILIES_YES'] : $this->lang('ALWAYS_ALLOW_SMILIES_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="allowsmilies" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_SMILIES_NO']) ? $this->vars['ALWAYS_ALLOW_SMILIES_NO'] : $this->lang('ALWAYS_ALLOW_SMILIES_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_BOARD_LANGUAGE']) ? $this->vars['L_BOARD_LANGUAGE'] : $this->lang('L_BOARD_LANGUAGE'); ?></td>
<td class="row2"><?php echo isset($this->vars['LANGUAGE_SELECT']) ? $this->vars['LANGUAGE_SELECT'] : $this->lang('LANGUAGE_SELECT'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_BOARD_STYLE']) ? $this->vars['L_BOARD_STYLE'] : $this->lang('L_BOARD_STYLE'); ?></td>
<td class="row2"><?php echo isset($this->vars['STYLE_SELECT']) ? $this->vars['STYLE_SELECT'] : $this->lang('STYLE_SELECT'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_TIMEZONE']) ? $this->vars['L_TIMEZONE'] : $this->lang('L_TIMEZONE'); ?></td>
<td class="row2"><?php echo isset($this->vars['TIMEZONE_SELECT']) ? $this->vars['TIMEZONE_SELECT'] : $this->lang('TIMEZONE_SELECT'); ?></td>
</tr>
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_DATE_FORMAT']) ? $this->vars['L_DATE_FORMAT'] : $this->lang('L_DATE_FORMAT'); ?></span></td>
<td class="row2"><span class="gensmall"><?php echo isset($this->vars['DATE_FORMAT_SELECT']) ? $this->vars['DATE_FORMAT_SELECT'] : $this->lang('DATE_FORMAT_SELECT'); ?></span></td>
</tr>
<tr> 
<td class="cat" colspan="2">&nbsp;</td>
</tr>
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_AVATAR_PANEL']) ? $this->vars['L_AVATAR_PANEL'] : $this->lang('L_AVATAR_PANEL'); ?></th>
</tr>
<tr align="center"> 
<td class="row1" colspan="2"> 
<table width="70%" cellspacing="2" cellpadding="0" border="0">
<tr> 
<td width="65%"><span class="gensmall"><?php echo isset($this->vars['L_AVATAR_EXPLAIN']) ? $this->vars['L_AVATAR_EXPLAIN'] : $this->lang('L_AVATAR_EXPLAIN'); ?></span></td>
<td align="center"><span class="gensmall"><?php echo isset($this->vars['L_CURRENT_IMAGE']) ? $this->vars['L_CURRENT_IMAGE'] : $this->lang('L_CURRENT_IMAGE'); ?></span><br />
<?php echo isset($this->vars['AVATAR']) ? $this->vars['AVATAR'] : $this->lang('AVATAR'); ?><br />
<input type="checkbox" name="avatardel" />
&nbsp;<span class="gensmall"><?php echo isset($this->vars['L_DELETE_AVATAR']) ? $this->vars['L_DELETE_AVATAR'] : $this->lang('L_DELETE_AVATAR'); ?></span></td>
</tr>
</table>
</td>
</tr>
<?php

$avatar_local_upload_count = ( isset($this->_tpldata['avatar_local_upload.']) ) ?  sizeof($this->_tpldata['avatar_local_upload.']) : 0;
for ($avatar_local_upload_i = 0; $avatar_local_upload_i < $avatar_local_upload_count; $avatar_local_upload_i++)
{
 $avatar_local_upload_item = &$this->_tpldata['avatar_local_upload.'][$avatar_local_upload_i];
 $avatar_local_upload_item['S_ROW_COUNT'] = $avatar_local_upload_i;
 $avatar_local_upload_item['S_NUM_ROWS'] = $avatar_local_upload_count;

?>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_UPLOAD_AVATAR_FILE']) ? $this->vars['L_UPLOAD_AVATAR_FILE'] : $this->lang('L_UPLOAD_AVATAR_FILE'); ?></td>
<td class="row2"> 
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo isset($this->vars['AVATAR_SIZE']) ? $this->vars['AVATAR_SIZE'] : $this->lang('AVATAR_SIZE'); ?>" />
<input type="file" name="avatar" class="post" style="width: 200px"  />
</td>
</tr>
<?php

} // END avatar_local_upload

if(isset($avatar_local_upload_item)) { unset($avatar_local_upload_item); } 

?>
<?php

$avatar_remote_upload_count = ( isset($this->_tpldata['avatar_remote_upload.']) ) ?  sizeof($this->_tpldata['avatar_remote_upload.']) : 0;
for ($avatar_remote_upload_i = 0; $avatar_remote_upload_i < $avatar_remote_upload_count; $avatar_remote_upload_i++)
{
 $avatar_remote_upload_item = &$this->_tpldata['avatar_remote_upload.'][$avatar_remote_upload_i];
 $avatar_remote_upload_item['S_ROW_COUNT'] = $avatar_remote_upload_i;
 $avatar_remote_upload_item['S_NUM_ROWS'] = $avatar_remote_upload_count;

?>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_UPLOAD_AVATAR_URL']) ? $this->vars['L_UPLOAD_AVATAR_URL'] : $this->lang('L_UPLOAD_AVATAR_URL'); ?></td>
<td class="row2"> 
<input type="text" name="avatarurl" size="40" class="post" style="width: 200px"  />
</td>
</tr>
<?php

} // END avatar_remote_upload

if(isset($avatar_remote_upload_item)) { unset($avatar_remote_upload_item); } 

?>
<?php

$avatar_remote_link_count = ( isset($this->_tpldata['avatar_remote_link.']) ) ?  sizeof($this->_tpldata['avatar_remote_link.']) : 0;
for ($avatar_remote_link_i = 0; $avatar_remote_link_i < $avatar_remote_link_count; $avatar_remote_link_i++)
{
 $avatar_remote_link_item = &$this->_tpldata['avatar_remote_link.'][$avatar_remote_link_i];
 $avatar_remote_link_item['S_ROW_COUNT'] = $avatar_remote_link_i;
 $avatar_remote_link_item['S_NUM_ROWS'] = $avatar_remote_link_count;

?>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_LINK_REMOTE_AVATAR']) ? $this->vars['L_LINK_REMOTE_AVATAR'] : $this->lang('L_LINK_REMOTE_AVATAR'); ?></td>
<td class="row2"> 
<input type="text" name="avatarremoteurl" size="40" class="post" style="width: 200px"  />
</td>
</tr>
<?php

} // END avatar_remote_link

if(isset($avatar_remote_link_item)) { unset($avatar_remote_link_item); } 

?>
<?php

$avatar_local_gallery_count = ( isset($this->_tpldata['avatar_local_gallery.']) ) ?  sizeof($this->_tpldata['avatar_local_gallery.']) : 0;
for ($avatar_local_gallery_i = 0; $avatar_local_gallery_i < $avatar_local_gallery_count; $avatar_local_gallery_i++)
{
 $avatar_local_gallery_item = &$this->_tpldata['avatar_local_gallery.'][$avatar_local_gallery_i];
 $avatar_local_gallery_item['S_ROW_COUNT'] = $avatar_local_gallery_i;
 $avatar_local_gallery_item['S_NUM_ROWS'] = $avatar_local_gallery_count;

?>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_AVATAR_GALLERY']) ? $this->vars['L_AVATAR_GALLERY'] : $this->lang('L_AVATAR_GALLERY'); ?></td>
<td class="row2"> 
<input type="submit" name="avatargallery" value="<?php echo isset($this->vars['L_SHOW_GALLERY']) ? $this->vars['L_SHOW_GALLERY'] : $this->lang('L_SHOW_GALLERY'); ?>" class="button" />
</td>
</tr>
<?php

} // END avatar_local_gallery

if(isset($avatar_local_gallery_item)) { unset($avatar_local_gallery_item); } 

?>
<tr> 
<td class="cat" colspan="2">&nbsp;</td>
</tr>
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_SPECIAL']) ? $this->vars['L_SPECIAL'] : $this->lang('L_SPECIAL'); ?></th>
</tr>
<tr> 
<td class="row1" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_SPECIAL_EXPLAIN']) ? $this->vars['L_SPECIAL_EXPLAIN'] : $this->lang('L_SPECIAL_EXPLAIN'); ?></span></td>
</tr>
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?></span></td>
<td class="row2"><?php echo isset($this->vars['S_SELECT_UPLOAD_QUOTA']) ? $this->vars['S_SELECT_UPLOAD_QUOTA'] : $this->lang('S_SELECT_UPLOAD_QUOTA'); ?></td>
</tr>
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_PM_QUOTA']) ? $this->vars['L_PM_QUOTA'] : $this->lang('L_PM_QUOTA'); ?></span></td>
<td class="row2"><?php echo isset($this->vars['S_SELECT_PM_QUOTA']) ? $this->vars['S_SELECT_PM_QUOTA'] : $this->lang('S_SELECT_PM_QUOTA'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_USER_ACTIVE']) ? $this->vars['L_USER_ACTIVE'] : $this->lang('L_USER_ACTIVE'); ?></td>
<td class="row2"> 
<input type="radio" name="user_status" value="1" <?php echo isset($this->vars['USER_ACTIVE_YES']) ? $this->vars['USER_ACTIVE_YES'] : $this->lang('USER_ACTIVE_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="user_status" value="0" <?php echo isset($this->vars['USER_ACTIVE_NO']) ? $this->vars['USER_ACTIVE_NO'] : $this->lang('USER_ACTIVE_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALLOW_PM']) ? $this->vars['L_ALLOW_PM'] : $this->lang('L_ALLOW_PM'); ?></td>
<td class="row2"> 
<input type="radio" name="user_allowpm" value="1" <?php echo isset($this->vars['ALLOW_PM_YES']) ? $this->vars['ALLOW_PM_YES'] : $this->lang('ALLOW_PM_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="user_allowpm" value="0" <?php echo isset($this->vars['ALLOW_PM_NO']) ? $this->vars['ALLOW_PM_NO'] : $this->lang('ALLOW_PM_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ALLOW_AVATAR']) ? $this->vars['L_ALLOW_AVATAR'] : $this->lang('L_ALLOW_AVATAR'); ?></td>
<td class="row2"> 
<input type="radio" name="user_allowavatar" value="1" <?php echo isset($this->vars['ALLOW_AVATAR_YES']) ? $this->vars['ALLOW_AVATAR_YES'] : $this->lang('ALLOW_AVATAR_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="user_allowavatar" value="0" <?php echo isset($this->vars['ALLOW_AVATAR_NO']) ? $this->vars['ALLOW_AVATAR_NO'] : $this->lang('ALLOW_AVATAR_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_SELECT_RANK']) ? $this->vars['L_SELECT_RANK'] : $this->lang('L_SELECT_RANK'); ?></td>
<td class="row2"> 
<select name="user_rank"><?php echo isset($this->vars['RANK_SELECT_BOX']) ? $this->vars['RANK_SELECT_BOX'] : $this->lang('RANK_SELECT_BOX'); ?>
</select>
</td>
</tr>
<!-- Start add - Admin add user MOD -->
<?php

$switch_show_delete_count = ( isset($this->_tpldata['switch_show_delete.']) ) ?  sizeof($this->_tpldata['switch_show_delete.']) : 0;
for ($switch_show_delete_i = 0; $switch_show_delete_i < $switch_show_delete_count; $switch_show_delete_i++)
{
 $switch_show_delete_item = &$this->_tpldata['switch_show_delete.'][$switch_show_delete_i];
 $switch_show_delete_item['S_ROW_COUNT'] = $switch_show_delete_i;
 $switch_show_delete_item['S_NUM_ROWS'] = $switch_show_delete_count;

?>
<!-- End add - Admin add user MOD -->
<tr> 
<td class="row1"><?php echo isset($this->vars['L_DELETE_USER']) ? $this->vars['L_DELETE_USER'] : $this->lang('L_DELETE_USER'); ?>?</td>
<td class="row2"> 
<input type="checkbox" name="deleteuser" />
<?php echo isset($this->vars['L_DELETE_USER_EXPLAIN']) ? $this->vars['L_DELETE_USER_EXPLAIN'] : $this->lang('L_DELETE_USER_EXPLAIN'); ?></td>
</tr>
<!-- Start add - Admin add user MOD -->
<?php

} // END switch_show_delete

if(isset($switch_show_delete_item)) { unset($switch_show_delete_item); } 

?>
<!-- End add - Admin add user MOD -->
<!-- Start add - Protect user account MOD -->
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_FORCE_NEW_PASSWD']) ? $this->vars['L_FORCE_NEW_PASSWD'] : $this->lang('L_FORCE_NEW_PASSWD'); ?> ?</span><br /><span class="gensmall"><?php echo isset($this->vars['L_FORCE_NEW_PASSWD_EXPLAIN']) ? $this->vars['L_FORCE_NEW_PASSWD_EXPLAIN'] : $this->lang('L_FORCE_NEW_PASSWD_EXPLAIN'); ?></span></td>
<td class="row2"> 
<input type="checkbox" name="force_new_passwd" <?php echo isset($this->vars['FORCE_NEW_PASSWD_CHECKED']) ? $this->vars['FORCE_NEW_PASSWD_CHECKED'] : $this->lang('FORCE_NEW_PASSWD_CHECKED'); ?> value="ON"> <?php echo isset($this->vars['L_FORCE_NEW_PASSWD_DETAIL']) ? $this->vars['L_FORCE_NEW_PASSWD_DETAIL'] : $this->lang('L_FORCE_NEW_PASSWD_DETAIL'); ?></td>
</tr>
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_ACCOUNT_BLOCK']) ? $this->vars['L_ACCOUNT_BLOCK'] : $this->lang('L_ACCOUNT_BLOCK'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_ACCOUNT_BLOCK_EXPLAIN']) ? $this->vars['L_ACCOUNT_BLOCK_EXPLAIN'] : $this->lang('L_ACCOUNT_BLOCK_EXPLAIN'); ?><br /></td> 
<td class="row2">
<?php echo isset($this->vars['L_BAD_LOGIN_COUNT']) ? $this->vars['L_BAD_LOGIN_COUNT'] : $this->lang('L_BAD_LOGIN_COUNT'); ?>: <?php echo isset($this->vars['BAD_LOGIN_COUNT']) ? $this->vars['BAD_LOGIN_COUNT'] : $this->lang('BAD_LOGIN_COUNT'); ?><br/>
<?php echo isset($this->vars['BLOCK_UNTIL']) ? $this->vars['BLOCK_UNTIL'] : $this->lang('BLOCK_UNTIL'); ?><?php echo isset($this->vars['BLOCK_BY']) ? $this->vars['BLOCK_BY'] : $this->lang('BLOCK_BY'); ?>
<?php echo isset($this->vars['BLOCK']) ? $this->vars['BLOCK'] : $this->lang('BLOCK'); ?></td> 
</tr>
<!-- End add - Protect user account MOD -->
<tr> 
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_BANCARD']) ? $this->vars['L_BANCARD'] : $this->lang('L_BANCARD'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_BANCARD_EXPLAIN']) ? $this->vars['L_BANCARD_EXPLAIN'] : $this->lang('L_BANCARD_EXPLAIN'); ?><br /></td> 
<td class="row2"><input type="text" class="post" style="width: 40px"  name="user_ycard" size="4" maxlength="4" value="<?php echo isset($this->vars['BANCARD']) ? $this->vars['BANCARD'] : $this->lang('BANCARD'); ?>" /></td> 
</tr>
<tr> 
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" />
</td>
</tr>
</table>
</form>
<br />