<?php

// eXtreme Styles mod cache. Generated on Wed, 01 Oct 2014 06:12:01 -0400 (time=1412158321)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <a href="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" class="nav"><?php echo isset($this->vars['L_PAGE_NAME']) ? $this->vars['L_PAGE_NAME'] : $this->lang('L_PAGE_NAME'); ?></a></span></td>
	</tr>
</table>
<br />
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thCornerL"><?php echo isset($this->vars['L_HACK_NAME']) ? $this->vars['L_HACK_NAME'] : $this->lang('L_HACK_NAME'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
	  <th class="thTop"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></th>
	  <th class="thCornerR"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></th>
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
	</tr>
	<?php

} // END listrow

if(isset($listrow_item)) { unset($listrow_item); } 

?>

	<tr> 
	  <td class="cat" colspan="4" height="28" align="right">&nbsp;</td>
	</tr>
  </table>
