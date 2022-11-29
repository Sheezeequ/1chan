<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:32:53 -0400 (time=1411975973)

?><?php

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

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
	  <td align="left"><span class="maintitle"><?php echo isset($this->vars['L_PAGE_NAME']) ? $this->vars['L_PAGE_NAME'] : $this->lang('L_PAGE_NAME'); ?></span>
	  	<br /><span class="gensmall"><b><?php echo isset($this->vars['L_VERSION']) ? $this->vars['L_VERSION'] : $this->lang('L_VERSION'); ?> <?php echo isset($this->vars['VERSION']) ? $this->vars['VERSION'] : $this->lang('VERSION'); ?>
	  	<br /><?php echo isset($this->vars['NIVISEC_CHECKER_VERSION']) ? $this->vars['NIVISEC_CHECKER_VERSION'] : $this->lang('NIVISEC_CHECKER_VERSION'); ?></b></span><br /><br />
	  <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?><br /><br /><?php echo isset($this->vars['VERSION_CHECK_DATA']) ? $this->vars['VERSION_CHECK_DATA'] : $this->lang('VERSION_CHECK_DATA'); ?></span></td>
	</tr>
</table>

<br />
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" name="user_list_form" method="post">

<p>
<table border="0" cellpadding="0" cellspacing="5" align="center">
   <tr><td align="center"><?php echo isset($this->vars['LETTER_HEADING']) ? $this->vars['LETTER_HEADING'] : $this->lang('LETTER_HEADING'); ?></td></tr>
   <tr><td align="center"><input type="text" name="user_search" class="post" size="20" maxlength="50" value="<?php echo isset($this->vars['USER_SEARCH']) ? $this->vars['USER_SEARCH'] : $this->lang('USER_SEARCH'); ?>" />
	   &nbsp;<input type="submit" name="submit" class="mainoption" value="<?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?>" /></td></tr>
</table>
</p>

<table  border="0" cellpadding="3" cellspacing="1" width="96%" class="forumline" align="center">
	<tr>
		<td class="row3" height="30" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_USERNAME']) ? $this->vars['S_USERNAME'] : $this->lang('S_USERNAME'); ?>" class="cattitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_USERNAME']) ? $this->vars['IMG_USERNAME'] : $this->lang('IMG_USERNAME'); ?></td>
		<?php

$colorgroup_switch_count = ( isset($this->_tpldata['colorgroup_switch.']) ) ?  sizeof($this->_tpldata['colorgroup_switch.']) : 0;
for ($colorgroup_switch_i = 0; $colorgroup_switch_i < $colorgroup_switch_count; $colorgroup_switch_i++)
{
 $colorgroup_switch_item = &$this->_tpldata['colorgroup_switch.'][$colorgroup_switch_i];
 $colorgroup_switch_item['S_ROW_COUNT'] = $colorgroup_switch_i;
 $colorgroup_switch_item['S_NUM_ROWS'] = $colorgroup_switch_count;

?>
		<td class="row3" height="25" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_COLORGROUP']) ? $this->vars['S_COLORGROUP'] : $this->lang('S_COLORGROUP'); ?>" class="cattitle"><?php echo isset($this->vars['L_COLOR_GROUP']) ? $this->vars['L_COLOR_GROUP'] : $this->lang('L_COLOR_GROUP'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_COLORGROUP']) ? $this->vars['IMG_COLORGROUP'] : $this->lang('IMG_COLORGROUP'); ?></td>
		<?php

} // END colorgroup_switch

if(isset($colorgroup_switch_item)) { unset($colorgroup_switch_item); } 

?>
		<td class="row3" height="25" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_RANK']) ? $this->vars['S_RANK'] : $this->lang('S_RANK'); ?>" class="cattitle"><?php echo isset($this->vars['L_RANK']) ? $this->vars['L_RANK'] : $this->lang('L_RANK'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_RANK']) ? $this->vars['IMG_RANK'] : $this->lang('IMG_RANK'); ?></td>
		<td class="row3" height="25" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_AVATAR']) ? $this->vars['S_AVATAR'] : $this->lang('S_AVATAR'); ?>" class="cattitle"><?php echo isset($this->vars['L_AVATAR']) ? $this->vars['L_AVATAR'] : $this->lang('L_AVATAR'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_AVATAR']) ? $this->vars['IMG_AVATAR'] : $this->lang('IMG_AVATAR'); ?></td>
		<td class="row3" height="25" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_PM']) ? $this->vars['S_PM'] : $this->lang('S_PM'); ?>" class="cattitle"><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_PM']) ? $this->vars['IMG_PM'] : $this->lang('IMG_PM'); ?></td>
		<td class="row3" height="25" valign="middle" align="center"><a href="<?php echo isset($this->vars['S_ACTIVE']) ? $this->vars['S_ACTIVE'] : $this->lang('S_ACTIVE'); ?>" class="cattitle"><?php echo isset($this->vars['L_ACTIVE']) ? $this->vars['L_ACTIVE'] : $this->lang('L_ACTIVE'); ?></a>&nbsp;<?php echo isset($this->vars['IMG_ACTIVE']) ? $this->vars['IMG_ACTIVE'] : $this->lang('IMG_ACTIVE'); ?></td>
		<td class="row2" height="25" valign="middle" align="center">&nbsp;</td>
</tr>
<?php

$userrow_count = ( isset($this->_tpldata['userrow.']) ) ?  sizeof($this->_tpldata['userrow.']) : 0;
for ($userrow_i = 0; $userrow_i < $userrow_count; $userrow_i++)
{
 $userrow_item = &$this->_tpldata['userrow.'][$userrow_i];
 $userrow_item['S_ROW_COUNT'] = $userrow_i;
 $userrow_item['S_NUM_ROWS'] = $userrow_count;

?>
<tr>
	<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>"><span class="gensmall"><?php echo isset($userrow_item['BOOKMARK']) ? $userrow_item['BOOKMARK'] : ''; ?><?php echo isset($userrow_item['NAME']) ? $userrow_item['NAME'] : ''; ?><?php echo isset($userrow_item['BOOKMARK_END']) ? $userrow_item['BOOKMARK_END'] : ''; ?></span>&nbsp;&nbsp;<span class="gensmall"><?php echo isset($userrow_item['MODULE_COUNT']) ? $userrow_item['MODULE_COUNT'] : ''; ?></span></td>
	<?php

$colorrow_count = ( isset($userrow_item['colorrow.']) ) ? sizeof($userrow_item['colorrow.']) : 0;
for ($colorrow_i = 0; $colorrow_i < $colorrow_count; $colorrow_i++)
{
 $colorrow_item = &$userrow_item['colorrow.'][$colorrow_i];
 $colorrow_item['S_ROW_COUNT'] = $colorrow_i;
 $colorrow_item['S_NUM_ROWS'] = $colorrow_count;

?>
 		<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" nowrap="nowrap" align="center">[&nbsp;<font color="<?php echo isset($colorrow_item['GROUP_COLOR']) ? $colorrow_item['GROUP_COLOR'] : ''; ?>"><?php echo isset($colorrow_item['GROUP_NAME']) ? $colorrow_item['GROUP_NAME'] : ''; ?></font> ]</td>
	<?php

} // END colorrow

if(isset($colorrow_item)) { unset($colorrow_item); } 

?>
	<?php

$blank_colorrow_count = ( isset($userrow_item['blank_colorrow.']) ) ? sizeof($userrow_item['blank_colorrow.']) : 0;
for ($blank_colorrow_i = 0; $blank_colorrow_i < $blank_colorrow_count; $blank_colorrow_i++)
{
 $blank_colorrow_item = &$userrow_item['blank_colorrow.'][$blank_colorrow_i];
 $blank_colorrow_item['S_ROW_COUNT'] = $blank_colorrow_i;
 $blank_colorrow_item['S_NUM_ROWS'] = $blank_colorrow_count;

?>
 		<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" nowrap="nowrap">&nbsp;</td>
	<?php

} // END blank_colorrow

if(isset($blank_colorrow_item)) { unset($blank_colorrow_item); } 

?>

<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($userrow_item['RANK_LIST']) ? $userrow_item['RANK_LIST'] : ''; ?></td>
	<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="checkbox" name="allow_pm_user_<?php echo isset($userrow_item['ID']) ? $userrow_item['ID'] : ''; ?>" <?php echo isset($userrow_item['ALLOW_PM']) ? $userrow_item['ALLOW_PM'] : ''; ?>></td>
	<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="checkbox" name="allow_avatar_user_<?php echo isset($userrow_item['ID']) ? $userrow_item['ID'] : ''; ?>" <?php echo isset($userrow_item['ALLOW_AVATAR']) ? $userrow_item['ALLOW_AVATAR'] : ''; ?>></td>
	<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="checkbox" name="active_user_<?php echo isset($userrow_item['ID']) ? $userrow_item['ID'] : ''; ?>" <?php echo isset($userrow_item['ACTIVE']) ? $userrow_item['ACTIVE'] : ''; ?>></td>
	<td class="<?php echo isset($userrow_item['ROW_CLASS']) ? $userrow_item['ROW_CLASS'] : ''; ?>" align="center"><input type="submit" name="edit_user_<?php echo isset($userrow_item['ID']) ? $userrow_item['ID'] : ''; ?>" value="<?php echo isset($this->vars['L_EDIT_LIST']) ? $this->vars['L_EDIT_LIST'] : $this->lang('L_EDIT_LIST'); ?>" class="liteoption"></td>
</tr>

<?php

} // END userrow

if(isset($userrow_item)) { unset($userrow_item); } 

?>
	<tr>
		<td class="cat" colspan="6" align="center" height="28">
		<input type="hidden" name="mode" value="<?php echo isset($this->vars['S_MODE']) ? $this->vars['S_MODE'] : $this->lang('S_MODE'); ?>">&nbsp;
		</td>
		<td class="row2" height="28">&nbsp;</td>
	</tr>
</table>
</form>

<table  border="0" cellpadding="3" cellspacing="1" width="96%" class="forumline" align="center">
<tr>
	<td><span class="mainmenu"><b><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></b></span></td>
	<td align="right"><span class="mainmenu"><b><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></b></span></td>
</table>
