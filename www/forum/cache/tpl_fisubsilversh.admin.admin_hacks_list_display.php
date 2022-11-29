<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:24:52 -0500 (time=1323527092)

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
<?php echo isset($this->vars['S_ACTION_ADD']) ? $this->vars['S_ACTION_ADD'] : $this->lang('S_ACTION_ADD'); ?>
<br /><br />

<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="listrow_values">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thCornerL"><?php echo isset($this->vars['L_HACK_NAME']) ? $this->vars['L_HACK_NAME'] : $this->lang('L_HACK_NAME'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_USER_VIEWABLE']) ? $this->vars['L_USER_VIEWABLE'] : $this->lang('L_USER_VIEWABLE'); ?></th>
	  <th class="thTop">&nbsp;</th>
	  <th class="thCornerR"><input type="submit" name="delete_sub" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" class="liteoption"></th>
	</tr>
	<?php

$empty_switch_count = ( isset($this->_tpldata['empty_switch.']) ) ?  sizeof($this->_tpldata['empty_switch.']) : 0;
for ($empty_switch_i = 0; $empty_switch_i < $empty_switch_count; $empty_switch_i++)
{
 $empty_switch_item = &$this->_tpldata['empty_switch.'][$empty_switch_i];
 $empty_switch_item['S_ROW_COUNT'] = $empty_switch_i;
 $empty_switch_item['S_NUM_ROWS'] = $empty_switch_count;

?>
	<tr><td colspan="7" class="row1" align="center"><?php echo isset($this->vars['L_NO_HACKS']) ? $this->vars['L_NO_HACKS'] : $this->lang('L_NO_HACKS'); ?></td></tr>
	<?php

} // END empty_switch

if(isset($empty_switch_item)) { unset($empty_switch_item); } 

?>

	<?php

$listrow_count = ( isset($this->_tpldata['listrow.']) ) ?  sizeof($this->_tpldata['listrow.']) : 0;
for ($listrow_i = 0; $listrow_i < $listrow_count; $listrow_i++)
{
 $listrow_item = &$this->_tpldata['listrow.'][$listrow_i];
 $listrow_item['S_ROW_COUNT'] = $listrow_i;
 $listrow_item['S_NUM_ROWS'] = $listrow_count;

?>
	<tr> 
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" nowrap="nowrap"><span class="gen"><?php echo isset($listrow_item['HACK_NAME']) ? $listrow_item['HACK_NAME'] : ''; ?>&nbsp;<?php echo isset($listrow_item['HACK_VERSION']) ? $listrow_item['HACK_VERSION'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="genmed"><?php echo isset($listrow_item['HACK_AUTHOR']) ? $listrow_item['HACK_AUTHOR'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="genmed"><?php echo isset($listrow_item['HACK_DESC']) ? $listrow_item['HACK_DESC'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($listrow_item['HACK_WEBSITE']) ? $listrow_item['HACK_WEBSITE'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="genmed"><?php echo isset($listrow_item['HACK_DISPLAY']) ? $listrow_item['HACK_DISPLAY'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($listrow_item['S_ACTION_EDIT']) ? $listrow_item['S_ACTION_EDIT'] : ''; ?></span></td>
	  <td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><input type="checkbox" name="delete_id_<?php echo isset($listrow_item['HACK_ID']) ? $listrow_item['HACK_ID'] : ''; ?>"></span></td>
	</tr>
	<?php

} // END listrow

if(isset($listrow_item)) { unset($listrow_item); } 

?>

	<tr> 
	  <td class="cat" colspan="6" height="28" align="right">&nbsp;</td>
	  <td class="cat" align="center">
	  <input type="submit" name="delete_sub" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" class="liteoption"></td>
	</tr>
  </table>
</form>
