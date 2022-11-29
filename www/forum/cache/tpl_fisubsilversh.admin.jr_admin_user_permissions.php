<?php

// eXtreme Styles mod cache. Generated on Sat, 31 Mar 2012 07:11:31 -0400 (time=1333192291)

?><script language="JavaScript">
function toggle_check_all(main, sub_num)
{
	for (var i=0; i < document.module_form.elements.length; i++)
	{
		var checkbox_element = document.module_form.elements[i];
		if ((main.name.search("check_all_page") != -1) && (checkbox_element.type == 'checkbox'))
		{
			checkbox_element.checked = main.checked;
		}		
		else if ((checkbox_element.name.search("check_all") == -1) && (checkbox_element.name.search(sub_num+"_update_module_") != -1) && (checkbox_element.type == 'checkbox'))
		{
			checkbox_element.checked = main.checked;
		}
	}
}
</script>

<?php

$statusrow_count = ( isset($this->_tpldata['statusrow.']) ) ?  sizeof($this->_tpldata['statusrow.']) : 0;
for ($statusrow_i = 0; $statusrow_i < $statusrow_count; $statusrow_i++)
{
 $statusrow_item = &$this->_tpldata['statusrow.'][$statusrow_i];
 $statusrow_item['S_ROW_COUNT'] = $statusrow_i;
 $statusrow_item['S_NUM_ROWS'] = $statusrow_count;

?>
<table width="100%" cellspacing="2" cellpadding="2" border="1" align="center">
	<tr> 
	  <td align="center"><span class="gen"><?php echo isset($this->vars['L_STATUS']) ? $this->vars['L_STATUS'] : $this->lang('L_STATUS'); ?><br /></span>
	  <span class="genmed"><b><?php echo isset($this->vars['I_STATUS_MESSAGE']) ? $this->vars['I_STATUS_MESSAGE'] : $this->lang('I_STATUS_MESSAGE'); ?></b></span><br /></td>
	</tr>
  </table>
<?php

} // END statusrow

if(isset($statusrow_item)) { unset($statusrow_item); } 

?>

<table width="100%" cellspacing="1" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left"><span class="maintitle"><?php echo isset($this->vars['L_PAGE_NAME']) ? $this->vars['L_PAGE_NAME'] : $this->lang('L_PAGE_NAME'); ?></span>
	  	<br /><span class="gensmall"><b><?php echo isset($this->vars['L_VERSION']) ? $this->vars['L_VERSION'] : $this->lang('L_VERSION'); ?> <?php echo isset($this->vars['VERSION']) ? $this->vars['VERSION'] : $this->lang('VERSION'); ?>
	  	<br /><?php echo isset($this->vars['NIVISEC_CHECKER_VERSION']) ? $this->vars['NIVISEC_CHECKER_VERSION'] : $this->lang('NIVISEC_CHECKER_VERSION'); ?></b></span><br /><br />
	  <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?><br /><br /><?php echo isset($this->vars['VERSION_CHECK_DATA']) ? $this->vars['VERSION_CHECK_DATA'] : $this->lang('VERSION_CHECK_DATA'); ?></span></td>
	</tr>
</table>

<br />
<table  border="0" cellpadding="3" cellspacing="1" class="forumline" align="center" width="90%">
	<tr> 
		<th class="thHead" height="25" valign="middle" width="33%"><?php echo isset($this->vars['L_USER_STATS']) ? $this->vars['L_USER_STATS'] : $this->lang('L_USER_STATS'); ?></th>
		<th class="thHead" height="25" valign="middle" width="33%"><?php echo isset($this->vars['L_USER_INFO']) ? $this->vars['L_USER_INFO'] : $this->lang('L_USER_INFO'); ?></th>
		<th class="thHead" height="25" valign="middle" width="33%"><?php echo isset($this->vars['L_COLOR_GROUP']) ? $this->vars['L_COLOR_GROUP'] : $this->lang('L_COLOR_GROUP'); ?></th>
	</tr>
<tr>
<td align="center" class="row1" valign="middle"><span class="gen"><b><?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></b></span><br>
<?php echo isset($this->vars['GROUP_NAME']) ? $this->vars['GROUP_NAME'] : $this->lang('GROUP_NAME'); ?><br><span class="gensmall"><?php echo isset($this->vars['ADMIN_TEXT']) ? $this->vars['ADMIN_TEXT'] : $this->lang('ADMIN_TEXT'); ?></span>
</td>
<td class="row2" align="center" valign="middle">
<form name="user_permissions" action="<?php echo isset($this->vars['S_USER_PERM']) ? $this->vars['S_USER_PERM'] : $this->lang('S_USER_PERM'); ?>" method="post">
<input type="hidden" name="username" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>">
<input type="hidden" name="mode" value="user">
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_EDIT_PERMISSIONS']) ? $this->vars['L_EDIT_PERMISSIONS'] : $this->lang('L_EDIT_PERMISSIONS'); ?>" class="liteoption">
</form>
<form name="user_profile" action="<?php echo isset($this->vars['S_PROFILE']) ? $this->vars['S_PROFILE'] : $this->lang('S_PROFILE'); ?>" method="get">
<input type="hidden" name="<?php echo isset($this->vars['S_USER_POST_URL']) ? $this->vars['S_USER_POST_URL'] : $this->lang('S_USER_POST_URL'); ?>" value="<?php echo isset($this->vars['USER_ID']) ? $this->vars['USER_ID'] : $this->lang('USER_ID'); ?>">
<input type="hidden" name="mode" value="viewprofile">
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_VIEW_PROFILE']) ? $this->vars['L_VIEW_PROFILE'] : $this->lang('L_VIEW_PROFILE'); ?>" class="liteoption">
</form>
<form name="user_management" action="<?php echo isset($this->vars['S_MANAGEMENT']) ? $this->vars['S_MANAGEMENT'] : $this->lang('S_MANAGEMENT'); ?>" method="post">
<input type="hidden" name="username" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>">
<input type="hidden" name="mode" value="edit">
<input type="submit" name="submituser" value="<?php echo isset($this->vars['L_EDIT_USER_DETAILS']) ? $this->vars['L_EDIT_USER_DETAILS'] : $this->lang('L_EDIT_USER_DETAILS'); ?>" class="liteoption">
</form>
</td>


<td align="center" class="row2">
<span class="gensmall"><?php echo isset($this->vars['DISABLED_TEXT']) ? $this->vars['DISABLED_TEXT'] : $this->lang('DISABLED_TEXT'); ?></span><br>



<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" name="module_form" method="post">

<select name="color_group_id" class="post" <?php echo isset($this->vars['DISABLED']) ? $this->vars['DISABLED'] : $this->lang('DISABLED'); ?> size="6">
<option <?php echo isset($this->vars['DEFAULT_SELECT']) ? $this->vars['DEFAULT_SELECT'] : $this->lang('DEFAULT_SELECT'); ?> value="0"><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?></option>
<?php

$grouprow_count = ( isset($this->_tpldata['grouprow.']) ) ?  sizeof($this->_tpldata['grouprow.']) : 0;
for ($grouprow_i = 0; $grouprow_i < $grouprow_count; $grouprow_i++)
{
 $grouprow_item = &$this->_tpldata['grouprow.'][$grouprow_i];
 $grouprow_item['S_ROW_COUNT'] = $grouprow_i;
 $grouprow_item['S_NUM_ROWS'] = $grouprow_count;

?>
<option <?php echo isset($grouprow_item['SELECTED']) ? $grouprow_item['SELECTED'] : ''; ?> value="<?php echo isset($grouprow_item['ID']) ? $grouprow_item['ID'] : ''; ?>"><?php echo isset($grouprow_item['NAME']) ? $grouprow_item['NAME'] : ''; ?></option>
<?php

} // END grouprow

if(isset($grouprow_item)) { unset($grouprow_item); } 

?>
</select>
</td></tr>

<tr>
<td class="row1" align="center"><span class="genmed"><b><?php echo isset($this->vars['L_START_DATE']) ? $this->vars['L_START_DATE'] : $this->lang('L_START_DATE'); ?></b><br>
<?php echo isset($this->vars['START_DATE']) ? $this->vars['START_DATE'] : $this->lang('START_DATE'); ?></span><br><br>
<span class="genmed"><b><?php echo isset($this->vars['L_UPDATE_DATE']) ? $this->vars['L_UPDATE_DATE'] : $this->lang('L_UPDATE_DATE'); ?></b><br>
<?php echo isset($this->vars['UPDATE_DATE']) ? $this->vars['UPDATE_DATE'] : $this->lang('UPDATE_DATE'); ?></span>
</td>

<td class="row3" colspan="2" align="center"><span class="gensmall"><b><?php echo isset($this->vars['L_NOTES']) ? $this->vars['L_NOTES'] : $this->lang('L_NOTES'); ?></b> &nbsp;&nbsp;&nbsp; <?php echo isset($this->vars['L_ALLOW_VIEW']) ? $this->vars['L_ALLOW_VIEW'] : $this->lang('L_ALLOW_VIEW'); ?><input type="checkbox" name="notes_view" value="1" <?php echo isset($this->vars['NOTES_VIEW_CHECKED']) ? $this->vars['NOTES_VIEW_CHECKED'] : $this->lang('NOTES_VIEW_CHECKED'); ?>></span><br>
<TEXTAREA name="admin_notes" class="post" cols="45" rows="5"><?php echo isset($this->vars['NOTES']) ? $this->vars['NOTES'] : $this->lang('NOTES'); ?></TEXTAREA>
</td></tr>
</table>


<br><table  border="0" cellpadding="3" cellspacing="1" class="forumline" align="center" width="95%">
	<tr> 
		<th class="thHead" height="25" valign="middle" colspan="3"><?php echo isset($this->vars['L_MODULE_INFO']) ? $this->vars['L_MODULE_INFO'] : $this->lang('L_MODULE_INFO'); ?></th>
	</tr>
	<tr>
		<td class="row1" colspan="3" align="center" height="28">
		<input type="submit" name="update_user" value="<?php echo isset($this->vars['L_UPDATE']) ? $this->vars['L_UPDATE'] : $this->lang('L_UPDATE'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="liteoption" /></td>
	</tr>
	<tr>
	<td class="cat" align="right">&nbsp;</td><td class="cat" align="center" width="10%">
		
		<input type="checkbox" name="check_all_page" onClick="toggle_check_all(check_all_page, 1);"></td>
		<td class="cat" align="left"><span class="gen">&nbsp;&nbsp;<-- <?php echo isset($this->vars['L_CHECK_ALL']) ? $this->vars['L_CHECK_ALL'] : $this->lang('L_CHECK_ALL'); ?>&nbsp;&nbsp;</span></td>
	</tr>
<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
<tr>
	<td class="catSides" colspan="1"><span class="cattitle"><?php echo isset($catrow_item['CAT']) ? $catrow_item['CAT'] : ''; ?></span></td>
	
		<td class="catSides" align="center" valign="middle" width="10%">
		<input type="checkbox" name="check_all_<?php echo isset($catrow_item['NUM']) ? $catrow_item['NUM'] : ''; ?>" onClick="toggle_check_all(check_all_<?php echo isset($catrow_item['NUM']) ? $catrow_item['NUM'] : ''; ?>, <?php echo isset($catrow_item['NUM']) ? $catrow_item['NUM'] : ''; ?>);">
		</td><td class="catSides" align="left" valign="middle">
		<span class="gensmall">&nbsp;&nbsp;<-- <?php echo isset($this->vars['L_CHECK_ALL_IN_CAT']) ? $this->vars['L_CHECK_ALL_IN_CAT'] : $this->lang('L_CHECK_ALL_IN_CAT'); ?>&nbsp;&nbsp;</span>
		</td>
<?php

$modulerow_count = ( isset($catrow_item['modulerow.']) ) ? sizeof($catrow_item['modulerow.']) : 0;
for ($modulerow_i = 0; $modulerow_i < $modulerow_count; $modulerow_i++)
{
 $modulerow_item = &$catrow_item['modulerow.'][$modulerow_i];
 $modulerow_item['S_ROW_COUNT'] = $modulerow_i;
 $modulerow_item['S_NUM_ROWS'] = $modulerow_count;

?>
<tr>
	<td class="<?php echo isset($modulerow_item['ROW']) ? $modulerow_item['ROW'] : ''; ?>"><span class="gen"><b><?php echo isset($modulerow_item['NAME']) ? $modulerow_item['NAME'] : ''; ?></b></span><br><span class="gensmall"><?php echo isset($modulerow_item['FILENAME']) ? $modulerow_item['FILENAME'] : ''; ?><br>(<?php echo isset($modulerow_item['FILE_HASH']) ? $modulerow_item['FILE_HASH'] : ''; ?>)</span></td>
	<td class="<?php echo isset($modulerow_item['ROW']) ? $modulerow_item['ROW'] : ''; ?>" width="10%" align="center"><span class="gen"><input type="checkbox" <?php echo isset($modulerow_item['CHECKED']) ? $modulerow_item['CHECKED'] : ''; ?> name="<?php echo isset($catrow_item['NUM']) ? $catrow_item['NUM'] : ''; ?>_update_module_<?php echo isset($modulerow_item['FILE_HASH']) ? $modulerow_item['FILE_HASH'] : ''; ?>"></span></td>
	<td class="<?php echo isset($modulerow_item['ROW']) ? $modulerow_item['ROW'] : ''; ?>">&nbsp;</td>
	</tr>
<?php

} // END modulerow

if(isset($modulerow_item)) { unset($modulerow_item); } 

?>
</tr>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
	<tr>
	<td class="cat" align="right">&nbsp;</td><td class="cat" align="center" width="10%">
		
		<input type="checkbox" name="check_all_page1" onClick="toggle_check_all(check_all_page1, 1);"></td>
		<td class="cat" align="left"><span class="gen">&nbsp;&nbsp;<-- <?php echo isset($this->vars['L_CHECK_ALL']) ? $this->vars['L_CHECK_ALL'] : $this->lang('L_CHECK_ALL'); ?>&nbsp;&nbsp;</span></td>
	</tr>
	<tr>
		<td class="cat" colspan="3" align="center" height="28">
		<input type="hidden" name="user_id" value="<?php echo isset($this->vars['USER_ID']) ? $this->vars['USER_ID'] : $this->lang('USER_ID'); ?>">
		<input type="submit" name="update_user" value="<?php echo isset($this->vars['L_UPDATE']) ? $this->vars['L_UPDATE'] : $this->lang('L_UPDATE'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="liteoption" /></td>
	</tr>
</table>
</form>