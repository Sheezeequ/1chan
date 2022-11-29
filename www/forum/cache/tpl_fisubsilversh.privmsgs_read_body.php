<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Dec 2011 11:34:20 -0500 (time=1324226060)

?><table cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
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
<form method="post" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></td>
<td width="100%" class="nav">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['BOX_NAME']) ? $this->vars['BOX_NAME'] : $this->lang('BOX_NAME'); ?> :: <?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
</tr>
<tr>
<td align="right" class="row2"><span class="explaintitle"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?>:</span></td>
<td class="row2"><span class="name"><?php echo isset($this->vars['MESSAGE_FROM']) ? $this->vars['MESSAGE_FROM'] : $this->lang('MESSAGE_FROM'); ?></span></td>
</tr>
<tr>
<td align="right" class="row2"><span class="explaintitle"><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?>:</span></td>
<td class="row2"><span class="name"><?php echo isset($this->vars['MESSAGE_TO']) ? $this->vars['MESSAGE_TO'] : $this->lang('MESSAGE_TO'); ?></span></td>
</tr>
<tr>
<td align="right" class="row2"><span class="explaintitle"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>:</span></td>
<td class="row2"><span class="genmed"><?php echo isset($this->vars['POST_DATE']) ? $this->vars['POST_DATE'] : $this->lang('POST_DATE'); ?></span></td>
</tr>
<tr>
<td align="right" class="row2"><span class="explaintitle">&nbsp;&nbsp;<?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>:</span></td>
<td width="100%" class="row2"><table width="100%" border="0" cellspacing="1" cellpadding="0">
	<tr>
		<td class="genmed"><?php echo isset($this->vars['POST_SUBJECT']) ? $this->vars['POST_SUBJECT'] : $this->lang('POST_SUBJECT'); ?></td>
		<td align="right"><?php echo isset($this->vars['QUOTE_PM_IMG']) ? $this->vars['QUOTE_PM_IMG'] : $this->lang('QUOTE_PM_IMG'); ?><?php echo isset($this->vars['EDIT_PM_IMG']) ? $this->vars['EDIT_PM_IMG'] : $this->lang('EDIT_PM_IMG'); ?></td>
	</tr>
</table></td>
</tr>
<tr>
<td valign="top" colspan="2" class="row1"><span class="postbody"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></span>
<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
<?php echo isset($this->vars['ATTACHMENTS']) ? $this->vars['ATTACHMENTS'] : $this->lang('ATTACHMENTS'); ?>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
<br />&nbsp;</td>
</tr>
<tr>
<td height="28" valign="bottom" colspan="2" class="row1"> <?php echo isset($this->vars['PROFILE_IMG']) ? $this->vars['PROFILE_IMG'] : $this->lang('PROFILE_IMG'); ?> <?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?> 
<?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?> <?php echo isset($this->vars['WWW_IMG']) ? $this->vars['WWW_IMG'] : $this->lang('WWW_IMG'); ?> <?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?> <?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?> <?php echo isset($this->vars['MSN_IMG']) ? $this->vars['MSN_IMG'] : $this->lang('MSN_IMG'); ?> <?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></td>
</tr>
<tr>
<td class="cat" colspan="2" align="right"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MSG']) ? $this->vars['L_SAVE_MSG'] : $this->lang('L_SAVE_MSG'); ?>" class="button" />
&nbsp; 
<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MSG']) ? $this->vars['L_DELETE_MSG'] : $this->lang('L_DELETE_MSG'); ?>" class="button" />
<?php

$switch_attachments_count = ( isset($this->_tpldata['switch_attachments.']) ) ?  sizeof($this->_tpldata['switch_attachments.']) : 0;
for ($switch_attachments_i = 0; $switch_attachments_i < $switch_attachments_count; $switch_attachments_i++)
{
 $switch_attachments_item = &$this->_tpldata['switch_attachments.'][$switch_attachments_i];
 $switch_attachments_item['S_ROW_COUNT'] = $switch_attachments_i;
 $switch_attachments_item['S_NUM_ROWS'] = $switch_attachments_count;

?>
&nbsp; 
<input type="submit" name="pm_delete_attach" value="<?php echo isset($this->vars['L_DELETE_ATTACHMENTS']) ? $this->vars['L_DELETE_ATTACHMENTS'] : $this->lang('L_DELETE_ATTACHMENTS'); ?>" class="liteoption" />
<?php

} // END switch_attachments

if(isset($switch_attachments_item)) { unset($switch_attachments_item); } 

?>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" border="0" cellpadding="2">
<tr>
<td><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></td>
<td width="100%" class="nav">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
</tr>
</table>
</form>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
	<tr>
		<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>
