<?php

// eXtreme Styles mod cache. Generated on Mon, 26 Dec 2011 11:26:15 -0500 (time=1324916775)

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
	  <td align="center"><span class="gen"><?php echo isset($this->vars['L_STATUS']) ? $this->vars['L_STATUS'] : $this->lang('L_STATUS'); ?><br /><?php echo isset($this->vars['STATUS_TIME']) ? $this->vars['STATUS_TIME'] : $this->lang('STATUS_TIME'); ?><br /></span>
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
	  <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_COLORS_DESC']) ? $this->vars['L_COLORS_DESC'] : $this->lang('L_COLORS_DESC'); ?><br><?php echo isset($this->vars['HTML_COLOR_LIST']) ? $this->vars['HTML_COLOR_LIST'] : $this->lang('HTML_COLOR_LIST'); ?></span><br /><br /><?php echo isset($this->vars['VERSION_CHECK_DATA']) ? $this->vars['VERSION_CHECK_DATA'] : $this->lang('VERSION_CHECK_DATA'); ?></span></td>
	</tr>
</table>

<br />
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" name="user_list_form" method="post">

<table  border="0" cellpadding="3" cellspacing="1" width="95%" class="forumline" align="center">
	<tr> 
		<th class="thHead"  height="25" valign="middle" ><?php echo isset($this->vars['L_GROUP_NAME']) ? $this->vars['L_GROUP_NAME'] : $this->lang('L_GROUP_NAME'); ?></th>
		<th class="thHead"  height="25" valign="middle" ><?php echo isset($this->vars['L_USER_COUNT']) ? $this->vars['L_USER_COUNT'] : $this->lang('L_USER_COUNT'); ?></th>
		<th class="thHead"  height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_EXAMPLE']) ? $this->vars['L_EXAMPLE'] : $this->lang('L_EXAMPLE'); ?></th>
		<th class="thHead"  height="25" valign="middle" ><?php echo isset($this->vars['L_COLOR']) ? $this->vars['L_COLOR'] : $this->lang('L_COLOR'); ?></th>
		<th class="thHead"  height="25" valign="middle" ><?php echo isset($this->vars['L_STATUS']) ? $this->vars['L_STATUS'] : $this->lang('L_STATUS'); ?></th>
		<th class="thHead"  height="25" valign="middle" >&nbsp;</th>
		<th class="thHead"  height="25" valign="middle" >&nbsp;</th>
		<th class="thHead"  height="25" valign="middle" >&nbsp;</th>
		<th class="thHead"  height="25" valign="middle" ><?php echo isset($this->vars['L_HIDE_ON_INDEX']) ? $this->vars['L_HIDE_ON_INDEX'] : $this->lang('L_HIDE_ON_INDEX'); ?></th>
	</tr>
<?php

$grouprow_count = ( isset($this->_tpldata['grouprow.']) ) ?  sizeof($this->_tpldata['grouprow.']) : 0;
for ($grouprow_i = 0; $grouprow_i < $grouprow_count; $grouprow_i++)
{
 $grouprow_item = &$this->_tpldata['grouprow.'][$grouprow_i];
 $grouprow_item['S_ROW_COUNT'] = $grouprow_i;
 $grouprow_item['S_NUM_ROWS'] = $grouprow_count;

?>
<tr>
	<td class="row1" width="45%"><span class="gen"><?php echo isset($grouprow_item['NAME']) ? $grouprow_item['NAME'] : ''; ?></span></td>
	<td class="row2" align="center"><span class="gen"><?php echo isset($grouprow_item['COUNT']) ? $grouprow_item['COUNT'] : ''; ?></span></td>
	<td class="row1" align="center" nowrap="nowrap"><span class="gen">[ <span  style="font-weight:bold;color:<?php echo isset($grouprow_item['COLOR']) ? $grouprow_item['COLOR'] : ''; ?>"><?php echo isset($this->vars['L_EXAMPLE']) ? $this->vars['L_EXAMPLE'] : $this->lang('L_EXAMPLE'); ?></span> ]</span></td>
	<td class="row2" align="center"><span class="gen"><input type="text" class="post" name="color_change_<?php echo isset($grouprow_item['ID']) ? $grouprow_item['ID'] : ''; ?>" value="<?php echo isset($grouprow_item['COLOR']) ? $grouprow_item['COLOR'] : ''; ?>" size="9" maxlength="50"></span></td>
	<td class="row1" align="center"><span class="gensmall"><?php echo isset($grouprow_item['STATUS']) ? $grouprow_item['STATUS'] : ''; ?></span></td>
	<td class="row2" align="center"><span class="gen"><input type="submit" name="edit_group_<?php echo isset($grouprow_item['ID']) ? $grouprow_item['ID'] : ''; ?>" class="liteoption" value="<?php echo isset($this->vars['L_DEFINE_USERS']) ? $this->vars['L_DEFINE_USERS'] : $this->lang('L_DEFINE_USERS'); ?>"></span></td>
	<td class="row1" align="center"><span class="gen"><input type="submit" name="delete_group_<?php echo isset($grouprow_item['ID']) ? $grouprow_item['ID'] : ''; ?>" class="liteoption" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>"></span></td>
	<td class="row2" align="center" nowrap="nowrap"><span class="genmed"><?php echo isset($grouprow_item['MOVE_UP']) ? $grouprow_item['MOVE_UP'] : ''; ?><br><?php echo isset($grouprow_item['MOVE_DOWN']) ? $grouprow_item['MOVE_DOWN'] : ''; ?></span></td>
	<td class="row1" align="center"><span class="genmed"><input type="submit" name="<?php echo isset($grouprow_item['HIDE']) ? $grouprow_item['HIDE'] : ''; ?>" class="liteoption" value="<?php echo isset($grouprow_item['L_HIDE']) ? $grouprow_item['L_HIDE'] : ''; ?>"></span></td>
</tr>
<?php

} // END grouprow

if(isset($grouprow_item)) { unset($grouprow_item); } 

?>
<?php

$emptyswitch_count = ( isset($this->_tpldata['emptyswitch.']) ) ?  sizeof($this->_tpldata['emptyswitch.']) : 0;
for ($emptyswitch_i = 0; $emptyswitch_i < $emptyswitch_count; $emptyswitch_i++)
{
 $emptyswitch_item = &$this->_tpldata['emptyswitch.'][$emptyswitch_i];
 $emptyswitch_item['S_ROW_COUNT'] = $emptyswitch_i;
 $emptyswitch_item['S_NUM_ROWS'] = $emptyswitch_count;

?>
<tr>
	<td class="row1" colspan="7" align="center"><span class="gen"><?php echo isset($this->vars['L_NO_GROUPS']) ? $this->vars['L_NO_GROUPS'] : $this->lang('L_NO_GROUPS'); ?></span></td>
</tr>
<?php

} // END emptyswitch

if(isset($emptyswitch_item)) { unset($emptyswitch_item); } 

?>
	<tr>
		<td class="cat" colspan="9" align="center" height="28">
		<input type="hidden" name="mode" value="<?php echo isset($this->vars['S_MODE']) ? $this->vars['S_MODE'] : $this->lang('S_MODE'); ?>">
		<input type="submit" name="update_groups" value="<?php echo isset($this->vars['L_UPDATE']) ? $this->vars['L_UPDATE'] : $this->lang('L_UPDATE'); ?>" class="mainoption">&nbsp;&nbsp;
		<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="liteoption">&nbsp;&nbsp;
		</td>
	</tr>
<tr>
	<td class="row1" width="35%"><span class="gen"><input type="text" name="new_group_name" value="" class="post" size="30" maxlength="255"></span></td>
	<td class="row2" align="center"><span class="gen">&nbsp;</span></td>
	<td class="row1" align="center"><span class="gen">&nbsp;</span></td>
	<td class="row2" align="center"><span class="gen"><input type="text" class="post" name="new_group_color" value="" size="9" maxlength="50"></span></td>
	<td class="row1" align="center"><span class="gensmall"><?php echo isset($grouprow_item['STATUS']) ? $grouprow_item['STATUS'] : ''; ?></span></td>
	<td class="row2" align="center"><span class="gen">&nbsp;</span></td>
	<td class="row1" align="center"><span class="gen">&nbsp;</span></td>
	<td class="row2" align="center"><span class="genmed">&nbsp;</span></td>
	<td class="row1" align="center"><span class="genmed">&nbsp;</span></td>
</tr>
	<tr>
		<td class="cat" colspan="9" align="center" height="28">
		<input type="submit" name="add_new_group" value="<?php echo isset($this->vars['L_ADD_NEW_GROUP']) ? $this->vars['L_ADD_NEW_GROUP'] : $this->lang('L_ADD_NEW_GROUP'); ?>" class="liteoption">
		</td>
	</tr>
</table>
</form>