<?php

// eXtreme Styles mod cache. Generated on Mon, 02 Mar 2015 14:42:44 -0500 (time=1425325364)

?><script type="text/javascript" src="includes/javascript/ajax_topicfunctions.js"></script>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td colspan="2" class="maintitle"><?php echo isset($this->vars['L_SEARCH_MATCHES']) ? $this->vars['L_SEARCH_MATCHES'] : $this->lang('L_SEARCH_MATCHES'); ?></td>
	</tr>
	<tr>
		<td width="100%" class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></a> &raquo; <?php echo isset($this->vars['L_SEARCH_MATCHES']) ? $this->vars['L_SEARCH_MATCHES'] : $this->lang('L_SEARCH_MATCHES'); ?></td>
		<td nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
	</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?></th>
<th><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?></th>
<th><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
<th><?php echo isset($this->vars['L_REPLIES']) ? $this->vars['L_REPLIES'] : $this->lang('L_REPLIES'); ?></th>
<th><?php echo isset($this->vars['L_VIEWS']) ? $this->vars['L_VIEWS'] : $this->lang('L_VIEWS'); ?></th>
<th><?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?></th>
</tr>
<?php

$searchresults_count = ( isset($this->_tpldata['searchresults.']) ) ?  sizeof($this->_tpldata['searchresults.']) : 0;
for ($searchresults_i = 0; $searchresults_i < $searchresults_count; $searchresults_i++)
{
 $searchresults_item = &$this->_tpldata['searchresults.'][$searchresults_i];
 $searchresults_item['S_ROW_COUNT'] = $searchresults_i;
 $searchresults_item['S_NUM_ROWS'] = $searchresults_count;

?>
<tr>
<td width="4%" class="row1"><?php echo isset($searchresults_item['S_MARK_LINK_START']) ? $searchresults_item['S_MARK_LINK_START'] : ''; ?><img src="<?php echo isset($searchresults_item['TOPIC_FOLDER_IMG']) ? $searchresults_item['TOPIC_FOLDER_IMG'] : ''; ?>" id="topicimage_<?php echo isset($searchresults_item['TOPIC_ID']) ? $searchresults_item['TOPIC_ID'] : ''; ?>" alt="<?php echo isset($searchresults_item['L_TOPIC_FOLDER_ALT']) ? $searchresults_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($searchresults_item['L_TOPIC_FOLDER_ALT']) ? $searchresults_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" border="0" /><?php echo isset($searchresults_item['S_MARK_LINK_END']) ? $searchresults_item['S_MARK_LINK_END'] : ''; ?></td>
<td class="row1"><strong><a href="<?php echo isset($searchresults_item['U_VIEW_FORUM']) ? $searchresults_item['U_VIEW_FORUM'] : ''; ?>"><?php echo isset($searchresults_item['FORUM_NAME']) ? $searchresults_item['FORUM_NAME'] : ''; ?></a></strong></td>
<td class="row2" <?php echo isset($searchresults_item['S_AJAX_EDIT_TITLE']) ? $searchresults_item['S_AJAX_EDIT_TITLE'] : ''; ?>><span class="topictitle"><span id="topicnewest_<?php echo isset($searchresults_item['TOPIC_ID']) ? $searchresults_item['TOPIC_ID'] : ''; ?>"><?php echo isset($searchresults_item['NEWEST_POST_IMG']) ? $searchresults_item['NEWEST_POST_IMG'] : ''; ?></span><?php echo isset($searchresults_item['TOPIC_TYPE']) ? $searchresults_item['TOPIC_TYPE'] : ''; ?><a href="<?php echo isset($searchresults_item['U_VIEW_TOPIC']) ? $searchresults_item['U_VIEW_TOPIC'] : ''; ?>" id="topiclink_<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>" ><?php echo isset($searchresults_item['TOPIC_TITLE']) ? $searchresults_item['TOPIC_TITLE'] : ''; ?></a>
<?php

$can_edit_title_count = ( isset($searchresults_item['can_edit_title.']) ) ? sizeof($searchresults_item['can_edit_title.']) : 0;
for ($can_edit_title_i = 0; $can_edit_title_i < $can_edit_title_count; $can_edit_title_i++)
{
 $can_edit_title_item = &$searchresults_item['can_edit_title.'][$can_edit_title_i];
 $can_edit_title_item['S_ROW_COUNT'] = $can_edit_title_i;
 $can_edit_title_item['S_NUM_ROWS'] = $can_edit_title_count;

?>
<span id="title_<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>" style="display:none;"><input type="text" class="post" name="topictitle_<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>" id="topictitle_<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($searchresults_item['TOPIC_TITLE']) ? $searchresults_item['TOPIC_TITLE'] : ''; ?>" size="40" maxlength="60" onkeyup="AJAXTitleEditKeyUp(event, <?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" /><input type="hidden" id="orig_topictitle_<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($searchresults_item['TOPIC_TITLE']) ? $searchresults_item['TOPIC_TITLE'] : ''; ?>" />&nbsp;<input type="button" onclick="AJAXEndTitleEdit(<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="mainoption" />&nbsp;<input type="button" onclick="AJAXCancelTitleEdit(<?php echo isset($searchresults_item['TOPIC_FIRST_POST_ID']) ? $searchresults_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span>
<?php

} // END can_edit_title

if(isset($can_edit_title_item)) { unset($can_edit_title_item); } 

?>
</span><br /><span class="gensmall"><?php echo isset($searchresults_item['GOTO_PAGE']) ? $searchresults_item['GOTO_PAGE'] : ''; ?></span>
</td>
<td class="row1" align="center"><span class="genmed">&nbsp;<?php echo isset($searchresults_item['TOPIC_AUTHOR']) ? $searchresults_item['TOPIC_AUTHOR'] : ''; ?>&nbsp;</span></td>
<td class="row2" align="center"><span class="gensmall"><?php echo isset($searchresults_item['REPLIES']) ? $searchresults_item['REPLIES'] : ''; ?></span></td>
<td class="row1" align="center"><span class="gensmall"><?php echo isset($searchresults_item['VIEWS']) ? $searchresults_item['VIEWS'] : ''; ?></span></td>
<td class="row2" align="center" nowrap="nowrap"><span class="gensmall"><?php echo isset($searchresults_item['LAST_POST_TIME']) ? $searchresults_item['LAST_POST_TIME'] : ''; ?><br />
<?php echo isset($searchresults_item['LAST_POST_AUTHOR']) ? $searchresults_item['LAST_POST_AUTHOR'] : ''; ?> <?php echo isset($searchresults_item['LAST_POST_IMG']) ? $searchresults_item['LAST_POST_IMG'] : ''; ?></span></td>
</tr>
<?php

} // END searchresults

if(isset($searchresults_item)) { unset($searchresults_item); } 

?>
<tr>
<td class="cat" colspan="7">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td width="100%" class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></a> &raquo; <?php echo isset($this->vars['L_SEARCH_MATCHES']) ? $this->vars['L_SEARCH_MATCHES'] : $this->lang('L_SEARCH_MATCHES'); ?></td>
		<td nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
	</tr>
	<tr>
		<td colspan="2"><br />
			<?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>
