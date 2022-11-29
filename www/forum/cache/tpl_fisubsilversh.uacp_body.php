<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:15:27 +0300 (time=1669727727)

?>
<b><center><?php echo isset($this->vars['L_UACP']) ? $this->vars['L_UACP'] : $this->lang('L_UACP'); ?> :: <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></center></b>

<script language="Javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.attach_list.length; i++)
		{
			document.attach_list.elements[i].checked = status;
		}
	}
</script>

<form method="post" name="attach_list" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">

	<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left" nowrap="nowrap">
			<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td class="nav" align="left"><a class="nav" href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
			</tr>
			</table>
		</td>
		<td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp; 
			<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="liteoption" /></span>
		</td>
	</tr>
	</table>
	
	<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th height="25" class="thCornerL">#</th>
		<th class="thTop"><?php echo isset($this->vars['L_FILENAME']) ? $this->vars['L_FILENAME'] : $this->lang('L_FILENAME'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_FILECOMMENT']) ? $this->vars['L_FILECOMMENT'] : $this->lang('L_FILECOMMENT'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_EXTENSION']) ? $this->vars['L_EXTENSION'] : $this->lang('L_EXTENSION'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_SIZE']) ? $this->vars['L_SIZE'] : $this->lang('L_SIZE'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_DOWNLOADS']) ? $this->vars['L_DOWNLOADS'] : $this->lang('L_DOWNLOADS'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_POST_TIME']) ? $this->vars['L_POST_TIME'] : $this->lang('L_POST_TIME'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_POSTED_IN_TOPIC']) ? $this->vars['L_POSTED_IN_TOPIC'] : $this->lang('L_POSTED_IN_TOPIC'); ?></th>
		<th class="thCornerR"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></th>
	</tr>
	<?php

$attachrow_count = ( isset($this->_tpldata['attachrow.']) ) ?  sizeof($this->_tpldata['attachrow.']) : 0;
for ($attachrow_i = 0; $attachrow_i < $attachrow_count; $attachrow_i++)
{
 $attachrow_item = &$this->_tpldata['attachrow.'][$attachrow_i];
 $attachrow_item['S_ROW_COUNT'] = $attachrow_i;
 $attachrow_item['S_NUM_ROWS'] = $attachrow_count;

?>
	<tr> 
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen">&nbsp;<?php echo isset($attachrow_item['ROW_NUMBER']) ? $attachrow_item['ROW_NUMBER'] : ''; ?>&nbsp;</span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($attachrow_item['U_VIEW_ATTACHMENT']) ? $attachrow_item['U_VIEW_ATTACHMENT'] : ''; ?>" class="gen" target="_blank"><?php echo isset($attachrow_item['FILENAME']) ? $attachrow_item['FILENAME'] : ''; ?></a></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><?php echo isset($attachrow_item['COMMENT']) ? $attachrow_item['COMMENT'] : ''; ?></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><?php echo isset($attachrow_item['EXTENSION']) ? $attachrow_item['EXTENSION'] : ''; ?></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><b><?php echo isset($attachrow_item['SIZE']) ? $attachrow_item['SIZE'] : ''; ?></b></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><b><?php echo isset($attachrow_item['DOWNLOAD_COUNT']) ? $attachrow_item['DOWNLOAD_COUNT'] : ''; ?></b></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gensmall"><?php echo isset($attachrow_item['POST_TIME']) ? $attachrow_item['POST_TIME'] : ''; ?></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="gen"><?php echo isset($attachrow_item['POST_TITLE']) ? $attachrow_item['POST_TITLE'] : ''; ?></span></td>
		<td class="<?php echo isset($attachrow_item['ROW_CLASS']) ? $attachrow_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($attachrow_item['S_DELETE_BOX']) ? $attachrow_item['S_DELETE_BOX'] : ''; ?></td>
		<?php echo isset($attachrow_item['S_HIDDEN']) ? $attachrow_item['S_HIDDEN'] : ''; ?>
	</tr>
	<?php

} // END attachrow

if(isset($attachrow_item)) { unset($attachrow_item); } 

?>
	<tr> 
		<td class="catBottom" colspan="9" height="28" align="right"> 
			<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MARKED']) ? $this->vars['L_DELETE_MARKED'] : $this->lang('L_DELETE_MARKED'); ?>" class="liteoption" />
		</td>
	</tr>
	</table>

	<?php echo isset($this->vars['S_USER_HIDDEN']) ? $this->vars['S_USER_HIDDEN'] : $this->lang('S_USER_HIDDEN'); ?>

	<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
		<td align="right" valign="top" nowrap="nowrap"><b><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall"><?php echo isset($this->vars['L_MARK_ALL']) ? $this->vars['L_MARK_ALL'] : $this->lang('L_MARK_ALL'); ?></a> :: <a href="javascript:select_switch(false);" class="gensmall"><?php echo isset($this->vars['L_UNMARK_ALL']) ? $this->vars['L_UNMARK_ALL'] : $this->lang('L_UNMARK_ALL'); ?></a></span></b></td>
	</tr>
	</table>

	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr> 
		<td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
		<td align="right"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?>&nbsp;</span></td>
	</tr>
	</table>
	
</form>
