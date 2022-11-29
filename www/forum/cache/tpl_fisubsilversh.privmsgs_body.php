<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:13:24 -0400 (time=1411974804)

?><script language="javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>
<table cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
<td align="right"> 
	  <?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ?  sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
	  <table width="175" cellspacing="1" cellpadding="2" border="0" class="bodyline">
		<tr> 
		  <td colspan="3" width="175" class="row1" nowrap="nowrap"><span class="gensmall"><?php echo isset($this->vars['ATTACH_BOX_SIZE_STATUS']) ? $this->vars['ATTACH_BOX_SIZE_STATUS'] : $this->lang('ATTACH_BOX_SIZE_STATUS'); ?></span></td>
		</tr>
		<tr> 
		  <td colspan="3" width="175" class="row2">
			<table cellspacing="0" cellpadding="1" border="0">
			  <tr> 
				<td bgcolor="<?php echo isset($this->vars['T_TD_COLOR2']) ? $this->vars['T_TD_COLOR2'] : $this->lang('T_TD_COLOR2'); ?>"><img src="templates/fisubsilversh/images/spacer.gif" width="<?php echo isset($this->vars['ATTACHBOX_LIMIT_IMG_WIDTH']) ? $this->vars['ATTACHBOX_LIMIT_IMG_WIDTH'] : $this->lang('ATTACHBOX_LIMIT_IMG_WIDTH'); ?>" height="8" alt="<?php echo isset($this->vars['ATTACH_LIMIT_PERCENT']) ? $this->vars['ATTACH_LIMIT_PERCENT'] : $this->lang('ATTACH_LIMIT_PERCENT'); ?>" /></td>
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
	  <?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
	</td>
<td><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?></td>
<td class="nav"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?> &nbsp;</td>
<td><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?></td>
<td class="nav"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?> &nbsp;</td>
<td><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?></td>
<td class="nav"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?> &nbsp;</td>
<td><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?></td>
<td class="nav"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?> &nbsp;</td>
</tr>
</table>
<br />
<form method="post" name="privmsg_list" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></td>
<td class="nav" width="100%">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a>
<?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ?  sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
 &raquo; <?php echo isset($this->vars['BOX_SIZE_STATUS']) ? $this->vars['BOX_SIZE_STATUS'] : $this->lang('BOX_SIZE_STATUS'); ?>
<?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
</td>
<td nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?></th>
<th><?php echo isset($this->vars['L_FROM_OR_TO']) ? $this->vars['L_FROM_OR_TO'] : $this->lang('L_FROM_OR_TO'); ?></th>
<th><?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?></th>
<th><?php echo isset($this->vars['L_MARK']) ? $this->vars['L_MARK'] : $this->lang('L_MARK'); ?></th>
</tr>
<?php

$listrow_count = ( isset($this->_tpldata['listrow.']) ) ?  sizeof($this->_tpldata['listrow.']) : 0;
for ($listrow_i = 0; $listrow_i < $listrow_count; $listrow_i++)
{
 $listrow_item = &$this->_tpldata['listrow.'][$listrow_i];
 $listrow_item['S_ROW_COUNT'] = $listrow_i;
 $listrow_item['S_NUM_ROWS'] = $listrow_count;

?>
<tr>
<td class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>" align="center" height="30"><a href="<?php echo isset($listrow_item['U_READ']) ? $listrow_item['U_READ'] : ''; ?>"><img src="<?php echo isset($listrow_item['PRIVMSG_FOLDER_IMG']) ? $listrow_item['PRIVMSG_FOLDER_IMG'] : ''; ?>" alt="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" /></a></td>
<td width="100%" class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>"><?php echo isset($listrow_item['PRIVMSG_ATTACHMENTS_IMG']) ? $listrow_item['PRIVMSG_ATTACHMENTS_IMG'] : ''; ?><a href="<?php echo isset($listrow_item['U_READ']) ? $listrow_item['U_READ'] : ''; ?>" class="topictitle"><?php echo isset($listrow_item['SUBJECT']) ? $listrow_item['SUBJECT'] : ''; ?></a></td>
<td align="center" class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>">&nbsp;<a href="<?php echo isset($listrow_item['U_FROM_USER_PROFILE']) ? $listrow_item['U_FROM_USER_PROFILE'] : ''; ?>" class="genmed"><?php echo isset($listrow_item['FROM']) ? $listrow_item['FROM'] : ''; ?></a>&nbsp;</td>
<td nowrap="nowrap" width="15%" align="center" class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>"><span class="gensmall">&nbsp;<?php echo isset($listrow_item['DATE']) ? $listrow_item['DATE'] : ''; ?>&nbsp;</span></td>
<td width="5%" align="center" class="<?php echo isset($listrow_item['ROW_CLASS']) ? $listrow_item['ROW_CLASS'] : ''; ?>">
<input type="checkbox" name="mark[]2" value="<?php echo isset($listrow_item['S_MARK_ID']) ? $listrow_item['S_MARK_ID'] : ''; ?>" /></td>
</tr>
<?php

} // END listrow

if(isset($listrow_item)) { unset($listrow_item); } 

?>
<?php

$switch_no_messages_count = ( isset($this->_tpldata['switch_no_messages.']) ) ?  sizeof($this->_tpldata['switch_no_messages.']) : 0;
for ($switch_no_messages_i = 0; $switch_no_messages_i < $switch_no_messages_count; $switch_no_messages_i++)
{
 $switch_no_messages_item = &$this->_tpldata['switch_no_messages.'][$switch_no_messages_i];
 $switch_no_messages_item['S_ROW_COUNT'] = $switch_no_messages_i;
 $switch_no_messages_item['S_NUM_ROWS'] = $switch_no_messages_count;

?>
<tr>
<td height="40" colspan="5" align="center" class="row1"><?php echo isset($this->vars['L_NO_MESSAGES']) ? $this->vars['L_NO_MESSAGES'] : $this->lang('L_NO_MESSAGES'); ?></td>
</tr>
<?php

} // END switch_no_messages

if(isset($switch_no_messages_item)) { unset($switch_no_messages_item); } 

?>
<tr> 
<td height="28" colspan="5" align="right" class="row3"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MARKED']) ? $this->vars['L_SAVE_MARKED'] : $this->lang('L_SAVE_MARKED'); ?>" class="catbutton" />
<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MARKED']) ? $this->vars['L_DELETE_MARKED'] : $this->lang('L_DELETE_MARKED'); ?>" class="catbutton" />
<input type="submit" name="deleteall" value="<?php echo isset($this->vars['L_DELETE_ALL']) ? $this->vars['L_DELETE_ALL'] : $this->lang('L_DELETE_ALL'); ?>" class="catbutton" />
<input type="button" name="markall" value="<?php echo isset($this->vars['L_MARK_ALL']) ? $this->vars['L_MARK_ALL'] : $this->lang('L_MARK_ALL'); ?>" onclick="javascript:select_switch(true);" class="catbutton" />
<input type="button" name="unmarkall" value="<?php echo isset($this->vars['L_UNMARK_ALL']) ? $this->vars['L_UNMARK_ALL'] : $this->lang('L_UNMARK_ALL'); ?>" onclick="javascript:select_switch(false);" class="catbutton" />
</td>
</tr>
<tr align="center">
	<td class="cat" colspan="5"><table border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="gensmall" nowrap="nowrap"><?php echo isset($this->vars['L_DISPLAY_MESSAGES']) ? $this->vars['L_DISPLAY_MESSAGES'] : $this->lang('L_DISPLAY_MESSAGES'); ?>:&nbsp;</td>
<td><select name="msgdays"><?php echo isset($this->vars['S_SELECT_MSG_DAYS']) ? $this->vars['S_SELECT_MSG_DAYS'] : $this->lang('S_SELECT_MSG_DAYS'); ?></select>&nbsp;</td>
<td><input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" name="submit_msgdays" class="catbutton" /></td>
</tr>
</table></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" border="0" cellpadding="2">
<tr>
<td><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></td>
<td class="nav" width="100%">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a>
<?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ?  sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
 &raquo; <?php echo isset($this->vars['BOX_SIZE_STATUS']) ? $this->vars['BOX_SIZE_STATUS'] : $this->lang('BOX_SIZE_STATUS'); ?>
<?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
</td>
<td align="right" nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?>
</td>
</tr>
</table>
</form>
<table width="100%" cellspacing="2" border="0" cellpadding="2">
<tr>
<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
</tr>
</table>