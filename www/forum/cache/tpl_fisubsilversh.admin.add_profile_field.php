<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:21:58 -0500 (time=1323530518)

?>
<h1><?php echo isset($this->vars['L_ADD_FIELD_TITLE']) ? $this->vars['L_ADD_FIELD_TITLE'] : $this->lang('L_ADD_FIELD_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_ADD_FIELD_EXPLAIN']) ? $this->vars['L_ADD_FIELD_EXPLAIN'] : $this->lang('L_ADD_FIELD_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ADD_FIELD_ACTION']) ? $this->vars['S_ADD_FIELD_ACTION'] : $this->lang('S_ADD_FIELD_ACTION'); ?>" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_GENERAL_SETTINGS']) ? $this->vars['L_GENERAL_SETTINGS'] : $this->lang('L_GENERAL_SETTINGS'); ?></th>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_NEW_FIELD_NAME']) ? $this->vars['L_NEW_FIELD_NAME'] : $this->lang('L_NEW_FIELD_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NEW_FIELD_EXPLAIN']) ? $this->vars['L_NEW_FIELD_EXPLAIN'] : $this->lang('L_NEW_FIELD_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" maxlength="255" size="40" name="field_name" value="<?php echo isset($this->vars['FIELD_NAME']) ? $this->vars['FIELD_NAME'] : $this->lang('FIELD_NAME'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><?php echo isset($this->vars['L_NEW_FIELD_DESCRIPTION']) ? $this->vars['L_NEW_FIELD_DESCRIPTION'] : $this->lang('L_NEW_FIELD_DESCRIPTION'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NEW_FIELD_DESCRIPTION_EXPLAIN']) ? $this->vars['L_NEW_FIELD_DESCRIPTION_EXPLAIN'] : $this->lang('L_NEW_FIELD_DESCRIPTION_EXPLAIN'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="255" size="40" name="field_descrition" value="<?php echo isset($this->vars['FIELD_DESCRIPTION']) ? $this->vars['FIELD_DESCRIPTION'] : $this->lang('FIELD_DESCRIPTION'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1" valign="top"><?php echo isset($this->vars['L_NEW_FIELD_TYPE']) ? $this->vars['L_NEW_FIELD_TYPE'] : $this->lang('L_NEW_FIELD_TYPE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NEW_FIELD_TYPE_EXPLAIN']) ? $this->vars['L_NEW_FIELD_TYPE_EXPLAIN'] : $this->lang('L_NEW_FIELD_TYPE_EXPLAIN'); ?></span></td>
		<td class="row2">
			<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
				<tr>
				  <td class="row3" colspan="2"><input type="radio" name="field_type" value="<?php echo isset($this->vars['S_TEXT_FIELD']) ? $this->vars['S_TEXT_FIELD'] : $this->lang('S_TEXT_FIELD'); ?>"<?php echo isset($this->vars['TEXT_FIELD_CHECKED']) ? $this->vars['TEXT_FIELD_CHECKED'] : $this->lang('TEXT_FIELD_CHECKED'); ?> /><?php echo isset($this->vars['L_TEXT_FIELD']) ? $this->vars['L_TEXT_FIELD'] : $this->lang('L_TEXT_FIELD'); ?> :: <input name="text" type="text" class="post" style="width: 200px" value="<?php echo isset($this->vars['L_TEXT_FIELD_EXAMPLE']) ? $this->vars['L_TEXT_FIELD_EXAMPLE'] : $this->lang('L_TEXT_FIELD_EXAMPLE'); ?>" /></td>
				</tr>
				<tr>
				  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_TEXT_FIELD_SETTINGS']) ? $this->vars['L_TEXT_FIELD_SETTINGS'] : $this->lang('L_TEXT_FIELD_SETTINGS'); ?></th>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_DEFAULT_VALUE']) ? $this->vars['L_DEFAULT_VALUE'] : $this->lang('L_DEFAULT_VALUE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_VALUE_EXPLAIN']) ? $this->vars['L_DEFAULT_VALUE_EXPLAIN'] : $this->lang('L_DEFAULT_VALUE_EXPLAIN'); ?></span></td>
				  <td class="row2"><input class="post" type="text" maxlength="255" size="25" name="text_field_default" value="<?php echo isset($this->vars['TEXT_FIELD_DEFAULT']) ? $this->vars['TEXT_FIELD_DEFAULT'] : $this->lang('TEXT_FIELD_DEFAULT'); ?>" /></td>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_MAX_LENGTH']) ? $this->vars['L_MAX_LENGTH'] : $this->lang('L_MAX_LENGTH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_LENGTH_TEXT_FIELD_EXPLAIN']) ? $this->vars['L_MAX_LENGTH_TEXT_FIELD_EXPLAIN'] : $this->lang('L_MAX_LENGTH_TEXT_FIELD_EXPLAIN'); ?></span></td>
				  <td class="row2"><input class="post" type="text" maxlength="3" size="3" name="text_field_maxlen" value="<?php echo isset($this->vars['TEXT_FIELD_MAXLENGTH']) ? $this->vars['TEXT_FIELD_MAXLENGTH'] : $this->lang('TEXT_FIELD_MAXLENGTH'); ?>" /></td>
				</tr>
			</table>
			<br />
			<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
				<tr>
				  <td class="row3" colspan="2"><input type="radio" name="field_type" value="<?php echo isset($this->vars['S_TEXTAREA']) ? $this->vars['S_TEXTAREA'] : $this->lang('S_TEXTAREA'); ?>"<?php echo isset($this->vars['TEXTAREA_CHECKED']) ? $this->vars['TEXTAREA_CHECKED'] : $this->lang('TEXTAREA_CHECKED'); ?> /><?php echo isset($this->vars['L_TEXTAREA']) ? $this->vars['L_TEXTAREA'] : $this->lang('L_TEXTAREA'); ?> :: <textarea style="width: 200px" rows="1" class="post"><?php echo isset($this->vars['L_TEXTAREA_EXAMPLE']) ? $this->vars['L_TEXTAREA_EXAMPLE'] : $this->lang('L_TEXTAREA_EXAMPLE'); ?></textarea></td>
				</tr>
				<tr>
				  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_TEXT_AREA_SETTINGS']) ? $this->vars['L_TEXT_AREA_SETTINGS'] : $this->lang('L_TEXT_AREA_SETTINGS'); ?></th>
				</tr>
				<tr>
				  <td class="row1" valign="top"><?php echo isset($this->vars['L_DEFAULT_VALUE']) ? $this->vars['L_DEFAULT_VALUE'] : $this->lang('L_DEFAULT_VALUE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_VALUE_EXPLAIN']) ? $this->vars['L_DEFAULT_VALUE_EXPLAIN'] : $this->lang('L_DEFAULT_VALUE_EXPLAIN'); ?></span></td>
				  <td class="row2"><textarea style="width: 300px" rows="6" class="post" name="text_area_default"><?php echo isset($this->vars['TEXTAREA_DEFAULT']) ? $this->vars['TEXTAREA_DEFAULT'] : $this->lang('TEXTAREA_DEFAULT'); ?></textarea></td>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_MAX_LENGTH']) ? $this->vars['L_MAX_LENGTH'] : $this->lang('L_MAX_LENGTH'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MAX_LENGTH_TEXTAREA_EXPLAIN']) ? $this->vars['L_MAX_LENGTH_TEXTAREA_EXPLAIN'] : $this->lang('L_MAX_LENGTH_TEXTAREA_EXPLAIN'); ?></span></td>
				  <td class="row2"><input class="post" type="text" size="4" name="text_area_maxlen" value="<?php echo isset($this->vars['TEXTAREA_MAXLENGTH']) ? $this->vars['TEXTAREA_MAXLENGTH'] : $this->lang('TEXTAREA_MAXLENGTH'); ?>" /></td>
				</tr>
			</table>
			<br />
			<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
				<tr>
				  <td class="row3" colspan="2"><input type="radio" name="field_type" value="<?php echo isset($this->vars['S_RADIO']) ? $this->vars['S_RADIO'] : $this->lang('S_RADIO'); ?>"<?php echo isset($this->vars['RADIO_CHECKED']) ? $this->vars['RADIO_CHECKED'] : $this->lang('RADIO_CHECKED'); ?> /><?php echo isset($this->vars['L_RADIO']) ? $this->vars['L_RADIO'] : $this->lang('L_RADIO'); ?> :: <input type="radio" name="radio_test" checked="checked" />&nbsp;<input type="radio" name="radio_test" /> <span class="gen"><?php echo isset($this->vars['L_RADIO_EXAMPLE']) ? $this->vars['L_RADIO_EXAMPLE'] : $this->lang('L_RADIO_EXAMPLE'); ?></td>
				</tr>
				<tr>
				  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_RADIO_BUTTON_SETTINGS']) ? $this->vars['L_RADIO_BUTTON_SETTINGS'] : $this->lang('L_RADIO_BUTTON_SETTINGS'); ?></th>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_AVAILABLE_VALUES']) ? $this->vars['L_AVAILABLE_VALUES'] : $this->lang('L_AVAILABLE_VALUES'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_AVAILABLE_VALUES_EXPLAIN']) ? $this->vars['L_AVAILABLE_VALUES_EXPLAIN'] : $this->lang('L_AVAILABLE_VALUES_EXPLAIN'); ?></span></td>
				  <td class="row2"><textarea name="radio_values" class="post" style="width: 150px" rows="5"><?php echo isset($this->vars['RADIO_VALUES']) ? $this->vars['RADIO_VALUES'] : $this->lang('RADIO_VALUES'); ?></textarea></td>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_DEFAULT_VALUE']) ? $this->vars['L_DEFAULT_VALUE'] : $this->lang('L_DEFAULT_VALUE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_VALUE_RADIO_EXPLAIN']) ? $this->vars['L_DEFAULT_VALUE_RADIO_EXPLAIN'] : $this->lang('L_DEFAULT_VALUE_RADIO_EXPLAIN'); ?></span></td>
				  <td class="row2"><input class="post" type="text" name="radio_default_value" style="width: 150px" value="<?php echo isset($this->vars['RADIO_DEFAULT']) ? $this->vars['RADIO_DEFAULT'] : $this->lang('RADIO_DEFAULT'); ?>"></td>
				</tr>
			</table>
			<br />
			<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
				<tr>
				  <td class="row3" colspan="2"><input type="radio" name="field_type" value="<?php echo isset($this->vars['S_CHECKBOX']) ? $this->vars['S_CHECKBOX'] : $this->lang('S_CHECKBOX'); ?>"<?php echo isset($this->vars['CHECKBOX_CHECKED']) ? $this->vars['CHECKBOX_CHECKED'] : $this->lang('CHECKBOX_CHECKED'); ?> /><?php echo isset($this->vars['L_CHECKBOX']) ? $this->vars['L_CHECKBOX'] : $this->lang('L_CHECKBOX'); ?> :: <input type="checkbox" />&nbsp;<input type="checkbox" /> <span class="gen"><?php echo isset($this->vars['L_CHECKBOX_EXAMPLE']) ? $this->vars['L_CHECKBOX_EXAMPLE'] : $this->lang('L_CHECKBOX_EXAMPLE'); ?></td>
				</tr>
				<tr>
				  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_CHECKBOX_SETTINGS']) ? $this->vars['L_CHECKBOX_SETTINGS'] : $this->lang('L_CHECKBOX_SETTINGS'); ?></th>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_AVAILABLE_VALUES']) ? $this->vars['L_AVAILABLE_VALUES'] : $this->lang('L_AVAILABLE_VALUES'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_AVAILABLE_VALUES_EXPLAIN']) ? $this->vars['L_AVAILABLE_VALUES_EXPLAIN'] : $this->lang('L_AVAILABLE_VALUES_EXPLAIN'); ?></span></td>
				  <td class="row2"><textarea name="checkbox_values" class="post" style="width: 150px" rows="5"><?php echo isset($this->vars['CHECKBOX_VALUES']) ? $this->vars['CHECKBOX_VALUES'] : $this->lang('CHECKBOX_VALUES'); ?></textarea></td>
				</tr>
				<tr>
				  <td class="row1"><?php echo isset($this->vars['L_DEFAULT_VALUE']) ? $this->vars['L_DEFAULT_VALUE'] : $this->lang('L_DEFAULT_VALUE'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEFAULT_VALUE_CHECKBOX_EXPLAIN']) ? $this->vars['L_DEFAULT_VALUE_CHECKBOX_EXPLAIN'] : $this->lang('L_DEFAULT_VALUE_CHECKBOX_EXPLAIN'); ?></span></td>
				  <td class="row2"><textarea name="check_default_values" class="post" style="width: 150px" rows="5"><?php echo isset($this->vars['CHECKBOX_DEFAULT']) ? $this->vars['CHECKBOX_DEFAULT'] : $this->lang('CHECKBOX_DEFAULT'); ?></textarea></td>
				</tr>
			</table>
		</td>
	</tr>
  <tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ADMIN_SETTINGS']) ? $this->vars['L_ADMIN_SETTINGS'] : $this->lang('L_ADMIN_SETTINGS'); ?></th>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_REQUIRED_FIELD']) ? $this->vars['L_REQUIRED_FIELD'] : $this->lang('L_REQUIRED_FIELD'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_REQUIRED_FIELD_EXPLAIN']) ? $this->vars['L_REQUIRED_FIELD_EXPLAIN'] : $this->lang('L_REQUIRED_FIELD_EXPLAIN'); ?></span></td>
		<td class="row2">
      <input type="radio" name="required" value="<?php echo isset($this->vars['S_REQUIRED']) ? $this->vars['S_REQUIRED'] : $this->lang('S_REQUIRED'); ?>"<?php echo isset($this->vars['REQUIRED_CHECKED']) ? $this->vars['REQUIRED_CHECKED'] : $this->lang('REQUIRED_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
  		<input type="radio" name="required" value="<?php echo isset($this->vars['S_NOT_REQUIRED']) ? $this->vars['S_NOT_REQUIRED'] : $this->lang('S_NOT_REQUIRED'); ?>"<?php echo isset($this->vars['NOT_REQUIRED_CHECKED']) ? $this->vars['NOT_REQUIRED_CHECKED'] : $this->lang('NOT_REQUIRED_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_USER_CAN_VIEW']) ? $this->vars['L_USER_CAN_VIEW'] : $this->lang('L_USER_CAN_VIEW'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_USER_CAN_VIEW_EXPLAIN']) ? $this->vars['L_USER_CAN_VIEW_EXPLAIN'] : $this->lang('L_USER_CAN_VIEW_EXPLAIN'); ?></span></td>
		<td class="row2">
      <input type="radio" name="user_can_view" value="<?php echo isset($this->vars['S_ALLOW_VIEW']) ? $this->vars['S_ALLOW_VIEW'] : $this->lang('S_ALLOW_VIEW'); ?>"<?php echo isset($this->vars['ALLOW_VIEW_CHECKED']) ? $this->vars['ALLOW_VIEW_CHECKED'] : $this->lang('ALLOW_VIEW_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
  		<input type="radio" name="user_can_view" value="<?php echo isset($this->vars['S_DISALLOW_VIEW']) ? $this->vars['S_DISALLOW_VIEW'] : $this->lang('S_DISALLOW_VIEW'); ?>"<?php echo isset($this->vars['DISALLOW_VIEW_CHECKED']) ? $this->vars['DISALLOW_VIEW_CHECKED'] : $this->lang('DISALLOW_VIEW_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
  <tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_VIEW_SETTINGS']) ? $this->vars['L_VIEW_SETTINGS'] : $this->lang('L_VIEW_SETTINGS'); ?></th>
	</tr>
	<tr>
	  <td class="row3" colspan="2" align="center"><span class="genmed"><?php echo isset($this->vars['L_VIEW_DISCLAIMER']) ? $this->vars['L_VIEW_DISCLAIMER'] : $this->lang('L_VIEW_DISCLAIMER'); ?></span></td>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_VIEW_IN_PROFILE']) ? $this->vars['L_VIEW_IN_PROFILE'] : $this->lang('L_VIEW_IN_PROFILE'); ?></td>
		<td class="row2">
      <input type="radio" name="view_in_profile" value="<?php echo isset($this->vars['S_VIEW_IN_PROFILE']) ? $this->vars['S_VIEW_IN_PROFILE'] : $this->lang('S_VIEW_IN_PROFILE'); ?>"<?php echo isset($this->vars['VIEW_IN_PROFILE_CHECKED']) ? $this->vars['VIEW_IN_PROFILE_CHECKED'] : $this->lang('VIEW_IN_PROFILE_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
  		<input type="radio" name="view_in_profile" value="<?php echo isset($this->vars['S_NO_VIEW_IN_PROFILE']) ? $this->vars['S_NO_VIEW_IN_PROFILE'] : $this->lang('S_NO_VIEW_IN_PROFILE'); ?>"<?php echo isset($this->vars['NO_VIEW_IN_PROFILE_CHECKED']) ? $this->vars['NO_VIEW_IN_PROFILE_CHECKED'] : $this->lang('NO_VIEW_IN_PROFILE_CHECKED'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1" style="padding-left: 1cm"><span class="gensmall"><?php echo isset($this->vars['L_PROFILE_LOCATIONS_EXPLAIN']) ? $this->vars['L_PROFILE_LOCATIONS_EXPLAIN'] : $this->lang('L_PROFILE_LOCATIONS_EXPLAIN'); ?></span></td>
	  <td class="row2" style="padding-left: 1cm">
	    <input type="radio" name="profile_location" value="<?php echo isset($this->vars['S_CONTACTS']) ? $this->vars['S_CONTACTS'] : $this->lang('S_CONTACTS'); ?>"<?php echo isset($this->vars['CONTACTS_CHECKED']) ? $this->vars['CONTACTS_CHECKED'] : $this->lang('CONTACTS_CHECKED'); ?> />
	    <span class="gen"><?php echo isset($this->vars['L_CONTACTS_COLUMN']) ? $this->vars['L_CONTACTS_COLUMN'] : $this->lang('L_CONTACTS_COLUMN'); ?></span><br />
	    <input type="radio" name="profile_location" value="<?php echo isset($this->vars['S_ABOUT']) ? $this->vars['S_ABOUT'] : $this->lang('S_ABOUT'); ?>"<?php echo isset($this->vars['ABOUT_CHECKED']) ? $this->vars['ABOUT_CHECKED'] : $this->lang('ABOUT_CHECKED'); ?> />
    <span class="gen"><?php echo isset($this->vars['L_ABOUT_COLUMN']) ? $this->vars['L_ABOUT_COLUMN'] : $this->lang('L_ABOUT_COLUMN'); ?></span>	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_VIEW_IN_MEMBERLIST']) ? $this->vars['L_VIEW_IN_MEMBERLIST'] : $this->lang('L_VIEW_IN_MEMBERLIST'); ?></td>
		<td class="row2">
      <input type="radio" name="view_in_memberlist" value="<?php echo isset($this->vars['S_VIEW_IN_MEMBERLIST']) ? $this->vars['S_VIEW_IN_MEMBERLIST'] : $this->lang('S_VIEW_IN_MEMBERLIST'); ?>"<?php echo isset($this->vars['VIEW_IN_MEMBERLIST']) ? $this->vars['VIEW_IN_MEMBERLIST'] : $this->lang('VIEW_IN_MEMBERLIST'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
  		<input type="radio" name="view_in_memberlist" value="<?php echo isset($this->vars['S_NO_VIEW_IN_MEMBERLIST']) ? $this->vars['S_NO_VIEW_IN_MEMBERLIST'] : $this->lang('S_NO_VIEW_IN_MEMBERLIST'); ?>"<?php echo isset($this->vars['NO_VIEW_IN_MEMBERLIST']) ? $this->vars['NO_VIEW_IN_MEMBERLIST'] : $this->lang('NO_VIEW_IN_MEMBERLIST'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_VIEW_IN_TOPIC']) ? $this->vars['L_VIEW_IN_TOPIC'] : $this->lang('L_VIEW_IN_TOPIC'); ?></td>
		<td class="row2">
      <input type="radio" name="view_in_topic" value="<?php echo isset($this->vars['S_VIEW_IN_TOPIC']) ? $this->vars['S_VIEW_IN_TOPIC'] : $this->lang('S_VIEW_IN_TOPIC'); ?>"<?php echo isset($this->vars['VIEW_IN_TOPIC']) ? $this->vars['VIEW_IN_TOPIC'] : $this->lang('VIEW_IN_TOPIC'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></span>&nbsp;&nbsp; 
  		<input type="radio" name="view_in_topic" value="<?php echo isset($this->vars['S_NO_VIEW_IN_TOPIC']) ? $this->vars['S_NO_VIEW_IN_TOPIC'] : $this->lang('S_NO_VIEW_IN_TOPIC'); ?>"<?php echo isset($this->vars['NO_VIEW_IN_TOPIC']) ? $this->vars['NO_VIEW_IN_TOPIC'] : $this->lang('NO_VIEW_IN_TOPIC'); ?> />
  		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1" style="padding-left: 1cm"><span class="gensmall"><?php echo isset($this->vars['L_TOPIC_LOCATIONS_EXPLAIN']) ? $this->vars['L_TOPIC_LOCATIONS_EXPLAIN'] : $this->lang('L_TOPIC_LOCATIONS_EXPLAIN'); ?></span></td>
	  <td class="row2" style="padding-left: 1cm">
	    <input type="radio" name="signature_wrap" value="<?php echo isset($this->vars['S_AUTHOR']) ? $this->vars['S_AUTHOR'] : $this->lang('S_AUTHOR'); ?>"<?php echo isset($this->vars['AUTHOR_CHECKED']) ? $this->vars['AUTHOR_CHECKED'] : $this->lang('AUTHOR_CHECKED'); ?> />
	    <span class="gen"><?php echo isset($this->vars['L_AUTHOR_COLUMN']) ? $this->vars['L_AUTHOR_COLUMN'] : $this->lang('L_AUTHOR_COLUMN'); ?></span>
      <br /><input type="radio" name="signature_wrap" value="<?php echo isset($this->vars['S_ABOVE_SIGNATURE']) ? $this->vars['S_ABOVE_SIGNATURE'] : $this->lang('S_ABOVE_SIGNATURE'); ?>"<?php echo isset($this->vars['ABOVE_SIG_CHECKED']) ? $this->vars['ABOVE_SIG_CHECKED'] : $this->lang('ABOVE_SIG_CHECKED'); ?> />
      <span class="gen"><?php echo isset($this->vars['L_ABOVE_SIGNATURE']) ? $this->vars['L_ABOVE_SIGNATURE'] : $this->lang('L_ABOVE_SIGNATURE'); ?></span>
      <br /><input type="radio" name="signature_wrap" value="<?php echo isset($this->vars['S_BELOW_SIGNATURE']) ? $this->vars['S_BELOW_SIGNATURE'] : $this->lang('S_BELOW_SIGNATURE'); ?>"<?php echo isset($this->vars['BELOW_SIG_CHECKED']) ? $this->vars['BELOW_SIG_CHECKED'] : $this->lang('BELOW_SIG_CHECKED'); ?> />
      <span class="gen"><?php echo isset($this->vars['L_BELOW_SIGNATURE']) ? $this->vars['L_BELOW_SIGNATURE'] : $this->lang('L_BELOW_SIGNATURE'); ?></span></td>
	</tr>
	<tr>
		<td class="cat" colspan="2" align="center" id="submitbar"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" onclick="selectAll()" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />		</td>
	</tr>
</table>
</form>
