<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:49:30 -0500 (time=1323535770)

?><script type="text/javascript" src="includes/javascript/ajax_topicfunctions.js"></script>

<form name="modcpForm" id="modcpForm" method="post" action="<?php echo isset($this->vars['S_MODCP_ACTION']) ? $this->vars['S_MODCP_ACTION'] : $this->lang('S_MODCP_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td colspan="2" class="maintitle"><?php echo isset($this->vars['L_MOD_CP']) ? $this->vars['L_MOD_CP'] : $this->lang('L_MOD_CP'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> <?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?> &raquo; <?php echo isset($this->vars['L_MOD_CP']) ? $this->vars['L_MOD_CP'] : $this->lang('L_MOD_CP'); ?></td>
<td align="right" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="5" align="center"><?php echo isset($this->vars['L_MOD_CP']) ? $this->vars['L_MOD_CP'] : $this->lang('L_MOD_CP'); ?></td>
</tr>
<tr>
<td class="row1" colspan="5" align="center"><span class="genmed"><?php echo isset($this->vars['L_MOD_CP_EXPLAIN']) ? $this->vars['L_MOD_CP_EXPLAIN'] : $this->lang('L_MOD_CP_EXPLAIN'); ?></span></td>
</tr>
<tr>
<th colspan="2"><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?></th>
<th><?php echo isset($this->vars['L_REPLIES']) ? $this->vars['L_REPLIES'] : $this->lang('L_REPLIES'); ?></th>
<th><?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?></th>
<th><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></th>
</tr>
<?php

$topicrow_count = ( isset($this->_tpldata['topicrow.']) ) ?  sizeof($this->_tpldata['topicrow.']) : 0;
for ($topicrow_i = 0; $topicrow_i < $topicrow_count; $topicrow_i++)
{
 $topicrow_item = &$this->_tpldata['topicrow.'][$topicrow_i];
 $topicrow_item['S_ROW_COUNT'] = $topicrow_i;
 $topicrow_item['S_NUM_ROWS'] = $topicrow_count;

?>
<tr>
<td class="row1"><img src="<?php echo isset($topicrow_item['TOPIC_FOLDER_IMG']) ? $topicrow_item['TOPIC_FOLDER_IMG'] : ''; ?>" alt="<?php echo isset($topicrow_item['L_TOPIC_FOLDER_ALT']) ? $topicrow_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($topicrow_item['L_TOPIC_FOLDER_ALT']) ? $topicrow_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" /></td>
<td width="100%" class="row1" ondblclick="AJAXTitleEdit(<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>, 0)">&nbsp;<span class="topictitle"><?php echo isset($topicrow_item['TOPIC_ATTACHMENT_IMG']) ? $topicrow_item['TOPIC_ATTACHMENT_IMG'] : ''; ?><?php echo isset($topicrow_item['TOPIC_TYPE']) ? $topicrow_item['TOPIC_TYPE'] : ''; ?><a href="<?php echo isset($topicrow_item['U_VIEW_TOPIC']) ? $topicrow_item['U_VIEW_TOPIC'] : ''; ?>" id="topiclink_<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>"><?php echo isset($topicrow_item['TOPIC_TITLE']) ? $topicrow_item['TOPIC_TITLE'] : ''; ?></a><span id="title_<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>" style="display:none;"><input type="text" class="post" name="topictitle_<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>" id="topictitle_<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($topicrow_item['TOPIC_TITLE']) ? $topicrow_item['TOPIC_TITLE'] : ''; ?>" size="40" maxlength="60" /><input type="hidden" id="orig_topictitle_<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($topicrow_item['TOPIC_TITLE']) ? $topicrow_item['TOPIC_TITLE'] : ''; ?>" />&nbsp;<input type="button" onclick="AJAXEndTitleEdit(<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="mainoption" />&nbsp;<input type="button" onclick="AJAXCancelTitleEdit(<?php echo isset($topicrow_item['TOPIC_FIRST_POST_ID']) ? $topicrow_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span></span></td>
<td class="row2" align="center"><span class="gensmall"><?php echo isset($topicrow_item['REPLIES']) ? $topicrow_item['REPLIES'] : ''; ?></span></td>
<td align="center" nowrap="nowrap" class="row1"><span class="gensmall"><?php echo isset($topicrow_item['LAST_POST_TIME']) ? $topicrow_item['LAST_POST_TIME'] : ''; ?></span></td>
<td class="row2" align="center"><input type="checkbox" name="topic_id_list[]" value="<?php echo isset($topicrow_item['TOPIC_ID']) ? $topicrow_item['TOPIC_ID'] : ''; ?>" /></td>
</tr>
<?php

} // END topicrow

if(isset($topicrow_item)) { unset($topicrow_item); } 

?>
<tr> 
<td colspan="5" align="right" class="cat"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<?php

$switch_auth_delete_count = ( isset($this->_tpldata['switch_auth_delete.']) ) ?  sizeof($this->_tpldata['switch_auth_delete.']) : 0;
for ($switch_auth_delete_i = 0; $switch_auth_delete_i < $switch_auth_delete_count; $switch_auth_delete_i++)
{
 $switch_auth_delete_item = &$this->_tpldata['switch_auth_delete.'][$switch_auth_delete_i];
 $switch_auth_delete_item['S_ROW_COUNT'] = $switch_auth_delete_i;
 $switch_auth_delete_item['S_NUM_ROWS'] = $switch_auth_delete_count;

?>
<input type="submit" name="delete" class="catbutton" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" />
&nbsp; 
<?php

} // END switch_auth_delete

if(isset($switch_auth_delete_item)) { unset($switch_auth_delete_item); } 

?>
<input type="submit" name="move" class="catbutton" value="<?php echo isset($this->vars['L_MOVE']) ? $this->vars['L_MOVE'] : $this->lang('L_MOVE'); ?>" />
&nbsp; 
<input type="submit" name="lock" class="catbutton" value="<?php echo isset($this->vars['L_LOCK']) ? $this->vars['L_LOCK'] : $this->lang('L_LOCK'); ?>" />
&nbsp; 
<input type="submit" name="unlock" class="catbutton" value="<?php echo isset($this->vars['L_UNLOCK']) ? $this->vars['L_UNLOCK'] : $this->lang('L_UNLOCK'); ?>" />
&nbsp;
<?php

$switch_auth_sticky_count = ( isset($this->_tpldata['switch_auth_sticky.']) ) ?  sizeof($this->_tpldata['switch_auth_sticky.']) : 0;
for ($switch_auth_sticky_i = 0; $switch_auth_sticky_i < $switch_auth_sticky_count; $switch_auth_sticky_i++)
{
 $switch_auth_sticky_item = &$this->_tpldata['switch_auth_sticky.'][$switch_auth_sticky_i];
 $switch_auth_sticky_item['S_ROW_COUNT'] = $switch_auth_sticky_i;
 $switch_auth_sticky_item['S_NUM_ROWS'] = $switch_auth_sticky_count;

?>
<input type="submit" name="sticky" class="catbutton" value="<?php echo isset($this->vars['L_STICKY']) ? $this->vars['L_STICKY'] : $this->lang('L_STICKY'); ?>" />
&nbsp; 
<?php

} // END switch_auth_sticky

if(isset($switch_auth_sticky_item)) { unset($switch_auth_sticky_item); } 

?>
<?php

$switch_auth_announce_count = ( isset($this->_tpldata['switch_auth_announce.']) ) ?  sizeof($this->_tpldata['switch_auth_announce.']) : 0;
for ($switch_auth_announce_i = 0; $switch_auth_announce_i < $switch_auth_announce_count; $switch_auth_announce_i++)
{
 $switch_auth_announce_item = &$this->_tpldata['switch_auth_announce.'][$switch_auth_announce_i];
 $switch_auth_announce_item['S_ROW_COUNT'] = $switch_auth_announce_i;
 $switch_auth_announce_item['S_NUM_ROWS'] = $switch_auth_announce_count;

?>
<input type="submit" name="announce" class="catbutton" value="<?php echo isset($this->vars['L_ANNOUNCE']) ? $this->vars['L_ANNOUNCE'] : $this->lang('L_ANNOUNCE'); ?>" />
&nbsp; 
<?php

} // END switch_auth_announce

if(isset($switch_auth_announce_item)) { unset($switch_auth_announce_item); } 

?>
<input type="submit" name="normalise" class="catbutton" value="<?php echo isset($this->vars['L_NORMALISE']) ? $this->vars['L_NORMALISE'] : $this->lang('L_NORMALISE'); ?>" />
&nbsp;
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
</form>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> <?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?> &raquo; <?php echo isset($this->vars['L_MOD_CP']) ? $this->vars['L_MOD_CP'] : $this->lang('L_MOD_CP'); ?></td>
		<td align="right" class="nav"><span class="gensmall"><a href="#" onclick="setCheckboxes('modcpForm', 'topic_id_list[]', true); return false;"><?php echo isset($this->vars['L_CHECK_ALL']) ? $this->vars['L_CHECK_ALL'] : $this->lang('L_CHECK_ALL'); ?></a>&nbsp;&nbsp;<a href="#" onclick="setCheckboxes('modcpForm', 'topic_id_list[]', false); return false;"><?php echo isset($this->vars['L_UNCHECK_ALL']) ? $this->vars['L_UNCHECK_ALL'] : $this->lang('L_UNCHECK_ALL'); ?></a></span><br/><br/><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
	</tr>
	<tr>
		<td colspan="2"><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
		</tr>
</table>
