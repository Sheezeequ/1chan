<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:52:25 -0500 (time=1323528745)

?><script type="text/javascript" src="includes/javascript/ajax_postfunctions.js"></script>
<script type="text/javascript" src="includes/javascript/ajax_regfunctions.js"></script>

<form action="<?php echo isset($this->vars['S_PROFILE_ACTION']) ? $this->vars['S_PROFILE_ACTION'] : $this->lang('S_PROFILE_ACTION'); ?>" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?> method="post" name="addprofile">

<table width="100%" cellspacing="2" cellpadding="3" border="0">
<tr>
	<td class="maintitle"><?php echo isset($this->vars['L_PROFILE_INFO']) ? $this->vars['L_PROFILE_INFO'] : $this->lang('L_PROFILE_INFO'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_PROFILE_INFO']) ? $this->vars['L_PROFILE_INFO'] : $this->lang('L_PROFILE_INFO'); ?></td>
</tr>
</table>
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_REGISTRATION_INFO']) ? $this->vars['L_REGISTRATION_INFO'] : $this->lang('L_REGISTRATION_INFO'); ?></th>
</tr>
<tr>
<td height="22" colspan="2" class="row2"><span class="gensmall"><?php echo isset($this->vars['L_ITEMS_REQUIRED']) ? $this->vars['L_ITEMS_REQUIRED'] : $this->lang('L_ITEMS_REQUIRED'); ?></span></td>
</tr>
<?php

$switch_namechange_disallowed_count = ( isset($this->_tpldata['switch_namechange_disallowed.']) ) ?  sizeof($this->_tpldata['switch_namechange_disallowed.']) : 0;
for ($switch_namechange_disallowed_i = 0; $switch_namechange_disallowed_i < $switch_namechange_disallowed_count; $switch_namechange_disallowed_i++)
{
 $switch_namechange_disallowed_item = &$this->_tpldata['switch_namechange_disallowed.'][$switch_namechange_disallowed_i];
 $switch_namechange_disallowed_item['S_ROW_COUNT'] = $switch_namechange_disallowed_i;
 $switch_namechange_disallowed_item['S_NUM_ROWS'] = $switch_namechange_disallowed_count;

?>
<tr>
<td class="row1" width="38%"><span class="explaintitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span> *</td>
<td width="62%" class="row2"><input type="hidden" name="username" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" />
<span class="name"><?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></span></td>
</tr>
<?php

} // END switch_namechange_disallowed

if(isset($switch_namechange_disallowed_item)) { unset($switch_namechange_disallowed_item); } 

?>
<?php

$switch_namechange_allowed_count = ( isset($this->_tpldata['switch_namechange_allowed.']) ) ?  sizeof($this->_tpldata['switch_namechange_allowed.']) : 0;
for ($switch_namechange_allowed_i = 0; $switch_namechange_allowed_i < $switch_namechange_allowed_count; $switch_namechange_allowed_i++)
{
 $switch_namechange_allowed_item = &$this->_tpldata['switch_namechange_allowed.'][$switch_namechange_allowed_i];
 $switch_namechange_allowed_item['S_ROW_COUNT'] = $switch_namechange_allowed_i;
 $switch_namechange_allowed_item['S_NUM_ROWS'] = $switch_namechange_allowed_count;

?>
<tr>
<td class="row1" width="38%"><span class="explaintitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span> *</td>
<td class="row2" width="62%">
<input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" onblur="AJAXCheckPostUsername(this.value);" />
</td>
</tr>
<tr id="post_username_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen" id="post_username_error_text">&nbsp;</span></td>
</tr>
<?php

} // END switch_namechange_allowed

if(isset($switch_namechange_allowed_item)) { unset($switch_namechange_allowed_item); } 

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>:</span> *</td>
<td class="row2">
<input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="<?php echo isset($this->vars['EMAIL']) ? $this->vars['EMAIL'] : $this->lang('EMAIL'); ?>" onblur="AJAXCheckEmail(this.value);" />
</td>
</tr>
<tr id="email_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen" id="email_error_text">&nbsp;</span></td>
</tr>
<?php

$switch_edit_profile_count = ( isset($this->_tpldata['switch_edit_profile.']) ) ?  sizeof($this->_tpldata['switch_edit_profile.']) : 0;
for ($switch_edit_profile_i = 0; $switch_edit_profile_i < $switch_edit_profile_count; $switch_edit_profile_i++)
{
 $switch_edit_profile_item = &$this->_tpldata['switch_edit_profile.'][$switch_edit_profile_i];
 $switch_edit_profile_item['S_ROW_COUNT'] = $switch_edit_profile_i;
 $switch_edit_profile_item['S_NUM_ROWS'] = $switch_edit_profile_count;

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_CURRENT_PASSWORD']) ? $this->vars['L_CURRENT_PASSWORD'] : $this->lang('L_CURRENT_PASSWORD'); ?>:</span> *<br />
<span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_PASSWORD_EXPLAIN']) ? $this->vars['L_CONFIRM_PASSWORD_EXPLAIN'] : $this->lang('L_CONFIRM_PASSWORD_EXPLAIN'); ?></span></td>
<td class="row2">
<input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="<?php echo isset($this->vars['CUR_PASSWORD']) ? $this->vars['CUR_PASSWORD'] : $this->lang('CUR_PASSWORD'); ?>" />
</td>
</tr>
<?php

} // END switch_edit_profile

if(isset($switch_edit_profile_item)) { unset($switch_edit_profile_item); } 

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_NEW_PASSWORD']) ? $this->vars['L_NEW_PASSWORD'] : $this->lang('L_NEW_PASSWORD'); ?>:</span> *<br />
<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_IF_CHANGED']) ? $this->vars['L_PASSWORD_IF_CHANGED'] : $this->lang('L_PASSWORD_IF_CHANGED'); ?></span></td>
<td class="row2">
<input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="<?php echo isset($this->vars['NEW_PASSWORD']) ? $this->vars['NEW_PASSWORD'] : $this->lang('NEW_PASSWORD'); ?>" onchange="ComparePasswords(this.value, document.addprofile.password_confirm.value);" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_CONFIRM_PASSWORD']) ? $this->vars['L_CONFIRM_PASSWORD'] : $this->lang('L_CONFIRM_PASSWORD'); ?>:</span> * <br />
<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_CONFIRM_IF_CHANGED']) ? $this->vars['L_PASSWORD_CONFIRM_IF_CHANGED'] : $this->lang('L_PASSWORD_CONFIRM_IF_CHANGED'); ?></span></td>
<td class="row2">
<input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="<?php echo isset($this->vars['PASSWORD_CONFIRM']) ? $this->vars['PASSWORD_CONFIRM'] : $this->lang('PASSWORD_CONFIRM'); ?>" onchange="ComparePasswords(document.addprofile.new_password.value, this.value);" />
</td>
</tr>
<tr id="pass_compare_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen"><?php echo isset($this->vars['L_PASSWORD_MISMATCH']) ? $this->vars['L_PASSWORD_MISMATCH'] : $this->lang('L_PASSWORD_MISMATCH'); ?></span></td>
</tr>
<?php

$switch_confirm_count = ( isset($this->_tpldata['switch_confirm.']) ) ?  sizeof($this->_tpldata['switch_confirm.']) : 0;
for ($switch_confirm_i = 0; $switch_confirm_i < $switch_confirm_count; $switch_confirm_i++)
{
 $switch_confirm_item = &$this->_tpldata['switch_confirm.'][$switch_confirm_i];
 $switch_confirm_item['S_ROW_COUNT'] = $switch_confirm_i;
 $switch_confirm_item['S_NUM_ROWS'] = $switch_confirm_count;

?>
<tr>
<td class="row1" colspan="2" align="center"><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_IMPAIRED']) ? $this->vars['L_CONFIRM_CODE_IMPAIRED'] : $this->lang('L_CONFIRM_CODE_IMPAIRED'); ?></span><br /><br /><?php echo isset($this->vars['CONFIRM_IMG']) ? $this->vars['CONFIRM_IMG'] : $this->lang('CONFIRM_IMG'); ?><br /><br /></td>
</tr>
<tr> 
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_CONFIRM_CODE']) ? $this->vars['L_CONFIRM_CODE'] : $this->lang('L_CONFIRM_CODE'); ?>: * </span><br /><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_EXPLAIN']) ? $this->vars['L_CONFIRM_CODE_EXPLAIN'] : $this->lang('L_CONFIRM_CODE_EXPLAIN'); ?></span></td>
<td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
</tr>
<?php

} // END switch_confirm

if(isset($switch_confirm_item)) { unset($switch_confirm_item); } 

?>
<?php

$switch_validation_count = ( isset($this->_tpldata['switch_validation.']) ) ?  sizeof($this->_tpldata['switch_validation.']) : 0;
for ($switch_validation_i = 0; $switch_validation_i < $switch_validation_count; $switch_validation_i++)
{
 $switch_validation_item = &$this->_tpldata['switch_validation.'][$switch_validation_i];
 $switch_validation_item['S_ROW_COUNT'] = $switch_validation_i;
 $switch_validation_item['S_NUM_ROWS'] = $switch_validation_count;

?>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<th class="thSides" colspan="2" height="12" valign="middle"><?php echo isset($this->vars['L_VALIDATION']) ? $this->vars['L_VALIDATION'] : $this->lang('L_VALIDATION'); ?></th>
</tr>
<tr>
<td class="row1" width="38%"><span class="explaintitle"><?php echo isset($this->vars['L_VALIDATION']) ? $this->vars['L_VALIDATION'] : $this->lang('L_VALIDATION'); ?>:</span> *<br /><span class="gensmall"><?php echo isset($this->vars['L_VALIDATION_EXPLAIN']) ? $this->vars['L_VALIDATION_EXPLAIN'] : $this->lang('L_VALIDATION_EXPLAIN'); ?></span></td>
<td class="row2" width="62%"><span class="gen"><img src="<?php echo isset($this->vars['S_ANTI_ROBOT1']) ? $this->vars['S_ANTI_ROBOT1'] : $this->lang('S_ANTI_ROBOT1'); ?>" alt="" border="0"><img src="<?php echo isset($this->vars['S_ANTI_ROBOT2']) ? $this->vars['S_ANTI_ROBOT2'] : $this->lang('S_ANTI_ROBOT2'); ?>" alt="" border="0"><img src="<?php echo isset($this->vars['S_ANTI_ROBOT3']) ? $this->vars['S_ANTI_ROBOT3'] : $this->lang('S_ANTI_ROBOT3'); ?>" alt="" border="0"><img src="<?php echo isset($this->vars['S_ANTI_ROBOT4']) ? $this->vars['S_ANTI_ROBOT4'] : $this->lang('S_ANTI_ROBOT4'); ?>" alt="" border="0"><img src="<?php echo isset($this->vars['S_ANTI_ROBOT5']) ? $this->vars['S_ANTI_ROBOT5'] : $this->lang('S_ANTI_ROBOT5'); ?>" alt="" border="0"><br /><br /><input type="text" name="reg_key" maxlength="5" size="6"></span></td>
</tr>
<?php

} // END switch_validation

if(isset($switch_validation_item)) { unset($switch_validation_item); } 

?>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_PROFILE_INFO']) ? $this->vars['L_PROFILE_INFO'] : $this->lang('L_PROFILE_INFO'); ?></th>
</tr>
<tr>
<td height="22" colspan="2" class="row2"><span class="gensmall"><?php echo isset($this->vars['L_PROFILE_INFO_NOTICE']) ? $this->vars['L_PROFILE_INFO_NOTICE'] : $this->lang('L_PROFILE_INFO_NOTICE'); ?></span></td>
</tr>
<tr>
<td class="row1" width="38%"><span class="explaintitle"><?php echo isset($this->vars['L_ICQ_NUMBER']) ? $this->vars['L_ICQ_NUMBER'] : $this->lang('L_ICQ_NUMBER'); ?>:</span></td>
<td class="row2" width="62%">
<input type="text" name="icq" class="post" style="width: 100px"  size="10" maxlength="15" value="<?php echo isset($this->vars['ICQ']) ? $this->vars['ICQ'] : $this->lang('ICQ'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_AIM']) ? $this->vars['L_AIM'] : $this->lang('L_AIM'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 150px"  name="aim" size="20" maxlength="255" value="<?php echo isset($this->vars['AIM']) ? $this->vars['AIM'] : $this->lang('AIM'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_MESSENGER']) ? $this->vars['L_MESSENGER'] : $this->lang('L_MESSENGER'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 150px"  name="msn" size="20" maxlength="255" value="<?php echo isset($this->vars['MSN']) ? $this->vars['MSN'] : $this->lang('MSN'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_YAHOO']) ? $this->vars['L_YAHOO'] : $this->lang('L_YAHOO'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 150px"  name="yim" size="20" maxlength="255" value="<?php echo isset($this->vars['YIM']) ? $this->vars['YIM'] : $this->lang('YIM'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 200px"  name="website" size="25" maxlength="255" value="<?php echo isset($this->vars['WEBSITE']) ? $this->vars['WEBSITE'] : $this->lang('WEBSITE'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_LOCATION']) ? $this->vars['L_LOCATION'] : $this->lang('L_LOCATION'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 200px"  name="location" size="25" maxlength="100" value="<?php echo isset($this->vars['LOCATION']) ? $this->vars['LOCATION'] : $this->lang('LOCATION'); ?>" />
</td>
</tr>
<!-- FLAGHACK-start -->
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_FLAG']) ? $this->vars['L_FLAG'] : $this->lang('L_FLAG'); ?>:</span></td>
<td class="row2"><span class="gensmall">
<table><tr>
<td><?php echo isset($this->vars['FLAG_SELECT']) ? $this->vars['FLAG_SELECT'] : $this->lang('FLAG_SELECT'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><img src="images/flags/<?php echo isset($this->vars['FLAG_START']) ? $this->vars['FLAG_START'] : $this->lang('FLAG_START'); ?>" width="32" height="20" name="user_flag" /></td>
</tr></table>
</span></td>
</tr>
<!-- FLAGHACK-end -->
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_OCCUPATION']) ? $this->vars['L_OCCUPATION'] : $this->lang('L_OCCUPATION'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 200px"  name="occupation" size="25" maxlength="100" value="<?php echo isset($this->vars['OCCUPATION']) ? $this->vars['OCCUPATION'] : $this->lang('OCCUPATION'); ?>" />
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_INTERESTS']) ? $this->vars['L_INTERESTS'] : $this->lang('L_INTERESTS'); ?>:</span></td>
<td class="row2">
<input type="text" class="post" style="width: 200px"  name="interests" size="35" maxlength="150" value="<?php echo isset($this->vars['INTERESTS']) ? $this->vars['INTERESTS'] : $this->lang('INTERESTS'); ?>" />
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
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_USER_ABSENCE']) ? $this->vars['L_USER_ABSENCE'] : $this->lang('L_USER_ABSENCE'); ?>:</span></td>
<td class="row2"> 
<input type="radio" name="user_absence" value="1" <?php echo isset($this->vars['USER_ABSENCE_YES']) ? $this->vars['USER_ABSENCE_YES'] : $this->lang('USER_ABSENCE_YES'); ?> />
<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="user_absence" value="0" <?php echo isset($this->vars['USER_ABSENCE_NO']) ? $this->vars['USER_ABSENCE_NO'] : $this->lang('USER_ABSENCE_NO'); ?> />
<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_USER_ABSENCE_MODE']) ? $this->vars['L_USER_ABSENCE_MODE'] : $this->lang('L_USER_ABSENCE_MODE'); ?>:</span></td>
<td class="row2"><span class="gensmall"><?php echo isset($this->vars['S_USER_ABSENCE_MODE']) ? $this->vars['S_USER_ABSENCE_MODE'] : $this->lang('S_USER_ABSENCE_MODE'); ?></span></td>
</tr>
<tr> 
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_USER_ABSENCE_TEXT']) ? $this->vars['L_USER_ABSENCE_TEXT'] : $this->lang('L_USER_ABSENCE_TEXT'); ?>:</span></td>
<td class="row2"><textarea name="user_absence_text" cols="75" rows="5"><?php echo isset($this->vars['S_USER_ABSENCE_TEXT']) ? $this->vars['S_USER_ABSENCE_TEXT'] : $this->lang('S_USER_ABSENCE_TEXT'); ?></textarea>
</tr>
<?php

} // END allow_absence

if(isset($allow_absence_item)) { unset($allow_absence_item); } 

?>
<!-- Start add - Gender MOD -->
<tr> 
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_GENDER']) ? $this->vars['L_GENDER'] : $this->lang('L_GENDER'); ?>:</span></td> 
<td class="row2"> 
<input type="radio" <?php echo isset($this->vars['LOCK_GENDER']) ? $this->vars['LOCK_GENDER'] : $this->lang('LOCK_GENDER'); ?> name="gender" value="0" <?php echo isset($this->vars['GENDER_NO_SPECIFY_CHECKED']) ? $this->vars['GENDER_NO_SPECIFY_CHECKED'] : $this->lang('GENDER_NO_SPECIFY_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_NOT_SPECIFY']) ? $this->vars['L_GENDER_NOT_SPECIFY'] : $this->lang('L_GENDER_NOT_SPECIFY'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="gender" value="1" <?php echo isset($this->vars['GENDER_MALE_CHECKED']) ? $this->vars['GENDER_MALE_CHECKED'] : $this->lang('GENDER_MALE_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_MALE']) ? $this->vars['L_GENDER_MALE'] : $this->lang('L_GENDER_MALE'); ?></span>&nbsp;&nbsp; 
<input type="radio" name="gender" value="2" <?php echo isset($this->vars['GENDER_FEMALE_CHECKED']) ? $this->vars['GENDER_FEMALE_CHECKED'] : $this->lang('GENDER_FEMALE_CHECKED'); ?>/> 
<span class="gen"><?php echo isset($this->vars['L_GENDER_FEMALE']) ? $this->vars['L_GENDER_FEMALE'] : $this->lang('L_GENDER_FEMALE'); ?></span></td> 
</tr>
<!-- End add - Gender MOD -->
<!-- Start add - Birthday MOD -->
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_BIRTHDAY']) ? $this->vars['L_BIRTHDAY'] : $this->lang('L_BIRTHDAY'); ?>:<?php echo isset($this->vars['BIRTHDAY_REQUIRED']) ? $this->vars['BIRTHDAY_REQUIRED'] : $this->lang('BIRTHDAY_REQUIRED'); ?></span></td>
<td class="row2"><span class="gen"><?php echo isset($this->vars['S_BIRTHDAY']) ? $this->vars['S_BIRTHDAY'] : $this->lang('S_BIRTHDAY'); ?></span></td>
</tr>
<!-- End add - Birthday MOD -->
<tr> 
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['SIG_DESC']) ? $this->vars['SIG_DESC'] : $this->lang('SIG_DESC'); ?>:</span></td>
<td class="row2"><INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_BUTTON_DESC']) ? $this->vars['SIG_BUTTON_DESC'] : $this->lang('SIG_BUTTON_DESC'); ?>" name="signature"></td>
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
<td class="row1"><span class="explaintitle"><?php echo isset($custom_fields_item['NAME']) ? $custom_fields_item['NAME'] : ''; ?>:<?php echo isset($custom_fields_item['REQUIRED']) ? $custom_fields_item['REQUIRED'] : ''; ?></span>
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
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_PREFERENCES']) ? $this->vars['L_PREFERENCES'] : $this->lang('L_PREFERENCES'); ?></th>
</tr>
<tr>
<td class="row1" width="38%"><span class="explaintitle"><?php echo isset($this->vars['L_PUBLIC_VIEW_EMAIL']) ? $this->vars['L_PUBLIC_VIEW_EMAIL'] : $this->lang('L_PUBLIC_VIEW_EMAIL'); ?>:</span></td>
<td class="row2" width="62%">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="viewemail" value="1" <?php echo isset($this->vars['VIEW_EMAIL_YES']) ? $this->vars['VIEW_EMAIL_YES'] : $this->lang('VIEW_EMAIL_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="viewemail" value="0" <?php echo isset($this->vars['VIEW_EMAIL_NO']) ? $this->vars['VIEW_EMAIL_NO'] : $this->lang('VIEW_EMAIL_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_HIDE_USER']) ? $this->vars['L_HIDE_USER'] : $this->lang('L_HIDE_USER'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="hideonline" value="1" <?php echo isset($this->vars['HIDE_USER_YES']) ? $this->vars['HIDE_USER_YES'] : $this->lang('HIDE_USER_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="hideonline" value="0" <?php echo isset($this->vars['HIDE_USER_NO']) ? $this->vars['HIDE_USER_NO'] : $this->lang('HIDE_USER_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY_EXPLAIN']) ? $this->vars['L_NOTIFY_ON_REPLY_EXPLAIN'] : $this->lang('L_NOTIFY_ON_REPLY_EXPLAIN'); ?></span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="notifyreply" value="1" <?php echo isset($this->vars['NOTIFY_REPLY_YES']) ? $this->vars['NOTIFY_REPLY_YES'] : $this->lang('NOTIFY_REPLY_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="notifyreply" value="0" <?php echo isset($this->vars['NOTIFY_REPLY_NO']) ? $this->vars['NOTIFY_REPLY_NO'] : $this->lang('NOTIFY_REPLY_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_NOTIFY_ON_PRIVMSG']) ? $this->vars['L_NOTIFY_ON_PRIVMSG'] : $this->lang('L_NOTIFY_ON_PRIVMSG'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="notifypm" value="1" <?php echo isset($this->vars['NOTIFY_PM_YES']) ? $this->vars['NOTIFY_PM_YES'] : $this->lang('NOTIFY_PM_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="notifypm" value="0" <?php echo isset($this->vars['NOTIFY_PM_NO']) ? $this->vars['NOTIFY_PM_NO'] : $this->lang('NOTIFY_PM_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_POPUP_ON_PRIVMSG']) ? $this->vars['L_POPUP_ON_PRIVMSG'] : $this->lang('L_POPUP_ON_PRIVMSG'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['L_POPUP_ON_PRIVMSG_EXPLAIN']) ? $this->vars['L_POPUP_ON_PRIVMSG_EXPLAIN'] : $this->lang('L_POPUP_ON_PRIVMSG_EXPLAIN'); ?></span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="popup_pm" value="1" <?php echo isset($this->vars['POPUP_PM_YES']) ? $this->vars['POPUP_PM_YES'] : $this->lang('POPUP_PM_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="popup_pm" value="0" <?php echo isset($this->vars['POPUP_PM_NO']) ? $this->vars['POPUP_PM_NO'] : $this->lang('POPUP_PM_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_ALWAYS_ADD_SIGNATURE']) ? $this->vars['L_ALWAYS_ADD_SIGNATURE'] : $this->lang('L_ALWAYS_ADD_SIGNATURE'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="attachsig" value="1" <?php echo isset($this->vars['ALWAYS_ADD_SIGNATURE_YES']) ? $this->vars['ALWAYS_ADD_SIGNATURE_YES'] : $this->lang('ALWAYS_ADD_SIGNATURE_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="attachsig" value="0" <?php echo isset($this->vars['ALWAYS_ADD_SIGNATURE_NO']) ? $this->vars['ALWAYS_ADD_SIGNATURE_NO'] : $this->lang('ALWAYS_ADD_SIGNATURE_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_ALWAYS_SET_BOOKMARK']) ? $this->vars['L_ALWAYS_SET_BOOKMARK'] : $this->lang('L_ALWAYS_SET_BOOKMARK'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="setbm" value="1" <?php echo isset($this->vars['ALWAYS_SET_BOOKMARK_YES']) ? $this->vars['ALWAYS_SET_BOOKMARK_YES'] : $this->lang('ALWAYS_SET_BOOKMARK_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="setbm" value="0" <?php echo isset($this->vars['ALWAYS_SET_BOOKMARK_NO']) ? $this->vars['ALWAYS_SET_BOOKMARK_NO'] : $this->lang('ALWAYS_SET_BOOKMARK_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_ALWAYS_ALLOW_BBCODE']) ? $this->vars['L_ALWAYS_ALLOW_BBCODE'] : $this->lang('L_ALWAYS_ALLOW_BBCODE'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="allowbbcode" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_BBCODE_YES']) ? $this->vars['ALWAYS_ALLOW_BBCODE_YES'] : $this->lang('ALWAYS_ALLOW_BBCODE_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="allowbbcode" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_BBCODE_NO']) ? $this->vars['ALWAYS_ALLOW_BBCODE_NO'] : $this->lang('ALWAYS_ALLOW_BBCODE_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_ALWAYS_ALLOW_HTML']) ? $this->vars['L_ALWAYS_ALLOW_HTML'] : $this->lang('L_ALWAYS_ALLOW_HTML'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="allowhtml" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_HTML_YES']) ? $this->vars['ALWAYS_ALLOW_HTML_YES'] : $this->lang('ALWAYS_ALLOW_HTML_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="allowhtml" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_HTML_NO']) ? $this->vars['ALWAYS_ALLOW_HTML_NO'] : $this->lang('ALWAYS_ALLOW_HTML_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_ALWAYS_ALLOW_SMILIES']) ? $this->vars['L_ALWAYS_ALLOW_SMILIES'] : $this->lang('L_ALWAYS_ALLOW_SMILIES'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="allowsmilies" value="1" <?php echo isset($this->vars['ALWAYS_ALLOW_SMILIES_YES']) ? $this->vars['ALWAYS_ALLOW_SMILIES_YES'] : $this->lang('ALWAYS_ALLOW_SMILIES_YES'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;</td>
<td><input type="radio" name="allowsmilies" value="0" <?php echo isset($this->vars['ALWAYS_ALLOW_SMILIES_NO']) ? $this->vars['ALWAYS_ALLOW_SMILIES_NO'] : $this->lang('ALWAYS_ALLOW_SMILIES_NO'); ?> />&nbsp;</td>
<td><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_BOARD_LANGUAGE']) ? $this->vars['L_BOARD_LANGUAGE'] : $this->lang('L_BOARD_LANGUAGE'); ?>:</span></td>
<td class="row2"><?php echo isset($this->vars['LANGUAGE_SELECT']) ? $this->vars['LANGUAGE_SELECT'] : $this->lang('LANGUAGE_SELECT'); ?></td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_BOARD_STYLE']) ? $this->vars['L_BOARD_STYLE'] : $this->lang('L_BOARD_STYLE'); ?>:</span></td>
<td class="row2"><?php echo isset($this->vars['STYLE_SELECT']) ? $this->vars['STYLE_SELECT'] : $this->lang('STYLE_SELECT'); ?></td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_TIMEZONE']) ? $this->vars['L_TIMEZONE'] : $this->lang('L_TIMEZONE'); ?>:</span></td>
<td class="row2"><?php echo isset($this->vars['TIMEZONE_SELECT']) ? $this->vars['TIMEZONE_SELECT'] : $this->lang('TIMEZONE_SELECT'); ?></td>
</tr>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_DATE_FORMAT']) ? $this->vars['L_DATE_FORMAT'] : $this->lang('L_DATE_FORMAT'); ?>:</span></td>
<td class="row2"><span class="gensmall"><?php echo isset($this->vars['DATE_FORMAT_SELECT']) ? $this->vars['DATE_FORMAT_SELECT'] : $this->lang('DATE_FORMAT_SELECT'); ?></span></td>
</tr>
<?php

$switch_avatar_block_count = ( isset($this->_tpldata['switch_avatar_block.']) ) ?  sizeof($this->_tpldata['switch_avatar_block.']) : 0;
for ($switch_avatar_block_i = 0; $switch_avatar_block_i < $switch_avatar_block_count; $switch_avatar_block_i++)
{
 $switch_avatar_block_item = &$this->_tpldata['switch_avatar_block.'][$switch_avatar_block_i];
 $switch_avatar_block_item['S_ROW_COUNT'] = $switch_avatar_block_i;
 $switch_avatar_block_item['S_NUM_ROWS'] = $switch_avatar_block_count;

?>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_AVATAR_PANEL']) ? $this->vars['L_AVATAR_PANEL'] : $this->lang('L_AVATAR_PANEL'); ?></th>
</tr>
<tr>
<td class="row1" colspan="2">
<table width="70%" cellspacing="2" cellpadding="0" border="0" align="center">
<tr>
<td width="65%" class="gensmall"><?php echo isset($this->vars['L_AVATAR_EXPLAIN']) ? $this->vars['L_AVATAR_EXPLAIN'] : $this->lang('L_AVATAR_EXPLAIN'); ?></td>
<td align="center" class="gensmall"><?php echo isset($this->vars['L_CURRENT_IMAGE']) ? $this->vars['L_CURRENT_IMAGE'] : $this->lang('L_CURRENT_IMAGE'); ?><br />
<?php echo isset($this->vars['AVATAR']) ? $this->vars['AVATAR'] : $this->lang('AVATAR'); ?><br />
<input type="checkbox" name="avatardel" />
&nbsp;<?php echo isset($this->vars['L_DELETE_AVATAR']) ? $this->vars['L_DELETE_AVATAR'] : $this->lang('L_DELETE_AVATAR'); ?></td>
</tr>
</table>
</td>
</tr>
<?php

$switch_avatar_local_upload_count = ( isset($switch_avatar_block_item['switch_avatar_local_upload.']) ) ? sizeof($switch_avatar_block_item['switch_avatar_local_upload.']) : 0;
for ($switch_avatar_local_upload_i = 0; $switch_avatar_local_upload_i < $switch_avatar_local_upload_count; $switch_avatar_local_upload_i++)
{
 $switch_avatar_local_upload_item = &$switch_avatar_block_item['switch_avatar_local_upload.'][$switch_avatar_local_upload_i];
 $switch_avatar_local_upload_item['S_ROW_COUNT'] = $switch_avatar_local_upload_i;
 $switch_avatar_local_upload_item['S_NUM_ROWS'] = $switch_avatar_local_upload_count;

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_UPLOAD_AVATAR_FILE']) ? $this->vars['L_UPLOAD_AVATAR_FILE'] : $this->lang('L_UPLOAD_AVATAR_FILE'); ?>:</span></td>
<td class="row2">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo isset($this->vars['AVATAR_SIZE']) ? $this->vars['AVATAR_SIZE'] : $this->lang('AVATAR_SIZE'); ?>" />
<input type="file" name="avatar" class="post" style="width:200px" />
</td>
</tr>
<?php

} // END switch_avatar_local_upload

if(isset($switch_avatar_local_upload_item)) { unset($switch_avatar_local_upload_item); } 

?>
<?php

$switch_avatar_remote_upload_count = ( isset($switch_avatar_block_item['switch_avatar_remote_upload.']) ) ? sizeof($switch_avatar_block_item['switch_avatar_remote_upload.']) : 0;
for ($switch_avatar_remote_upload_i = 0; $switch_avatar_remote_upload_i < $switch_avatar_remote_upload_count; $switch_avatar_remote_upload_i++)
{
 $switch_avatar_remote_upload_item = &$switch_avatar_block_item['switch_avatar_remote_upload.'][$switch_avatar_remote_upload_i];
 $switch_avatar_remote_upload_item['S_ROW_COUNT'] = $switch_avatar_remote_upload_i;
 $switch_avatar_remote_upload_item['S_NUM_ROWS'] = $switch_avatar_remote_upload_count;

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_UPLOAD_AVATAR_URL']) ? $this->vars['L_UPLOAD_AVATAR_URL'] : $this->lang('L_UPLOAD_AVATAR_URL'); ?></span>:<br />
<span class="gensmall"><?php echo isset($this->vars['L_UPLOAD_AVATAR_URL_EXPLAIN']) ? $this->vars['L_UPLOAD_AVATAR_URL_EXPLAIN'] : $this->lang('L_UPLOAD_AVATAR_URL_EXPLAIN'); ?></span></td>
<td class="row2">
<input type="text" name="avatarurl" size="40" class="post" style="width:200px" />
</td>
</tr>
<?php

} // END switch_avatar_remote_upload

if(isset($switch_avatar_remote_upload_item)) { unset($switch_avatar_remote_upload_item); } 

?>
<?php

$switch_avatar_remote_link_count = ( isset($switch_avatar_block_item['switch_avatar_remote_link.']) ) ? sizeof($switch_avatar_block_item['switch_avatar_remote_link.']) : 0;
for ($switch_avatar_remote_link_i = 0; $switch_avatar_remote_link_i < $switch_avatar_remote_link_count; $switch_avatar_remote_link_i++)
{
 $switch_avatar_remote_link_item = &$switch_avatar_block_item['switch_avatar_remote_link.'][$switch_avatar_remote_link_i];
 $switch_avatar_remote_link_item['S_ROW_COUNT'] = $switch_avatar_remote_link_i;
 $switch_avatar_remote_link_item['S_NUM_ROWS'] = $switch_avatar_remote_link_count;

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_LINK_REMOTE_AVATAR']) ? $this->vars['L_LINK_REMOTE_AVATAR'] : $this->lang('L_LINK_REMOTE_AVATAR'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['L_LINK_REMOTE_AVATAR_EXPLAIN']) ? $this->vars['L_LINK_REMOTE_AVATAR_EXPLAIN'] : $this->lang('L_LINK_REMOTE_AVATAR_EXPLAIN'); ?></span></td>
<td class="row2">
<input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px" />
</td>
</tr>
<?php

} // END switch_avatar_remote_link

if(isset($switch_avatar_remote_link_item)) { unset($switch_avatar_remote_link_item); } 

?>
<?php

$switch_avatar_local_gallery_count = ( isset($switch_avatar_block_item['switch_avatar_local_gallery.']) ) ? sizeof($switch_avatar_block_item['switch_avatar_local_gallery.']) : 0;
for ($switch_avatar_local_gallery_i = 0; $switch_avatar_local_gallery_i < $switch_avatar_local_gallery_count; $switch_avatar_local_gallery_i++)
{
 $switch_avatar_local_gallery_item = &$switch_avatar_block_item['switch_avatar_local_gallery.'][$switch_avatar_local_gallery_i];
 $switch_avatar_local_gallery_item['S_ROW_COUNT'] = $switch_avatar_local_gallery_i;
 $switch_avatar_local_gallery_item['S_NUM_ROWS'] = $switch_avatar_local_gallery_count;

?>
<tr>
<td class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_AVATAR_GALLERY']) ? $this->vars['L_AVATAR_GALLERY'] : $this->lang('L_AVATAR_GALLERY'); ?>:</span></td>
<td class="row2">
<input type="submit" name="avatargallery" value="<?php echo isset($this->vars['L_SHOW_GALLERY']) ? $this->vars['L_SHOW_GALLERY'] : $this->lang('L_SHOW_GALLERY'); ?>" class="button" />
</td>
</tr>
<?php

} // END switch_avatar_local_gallery

if(isset($switch_avatar_local_gallery_item)) { unset($switch_avatar_local_gallery_item); } 

?>
<?php

} // END switch_avatar_block

if(isset($switch_avatar_block_item)) { unset($switch_avatar_block_item); } 

?>
<tr>
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="button" />
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="3" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_PROFILE_INFO']) ? $this->vars['L_PROFILE_INFO'] : $this->lang('L_PROFILE_INFO'); ?></td>
</tr>
</table>
</form>
