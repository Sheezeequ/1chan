<?php

// eXtreme Styles mod cache. Generated on Mon, 02 Mar 2015 12:56:24 -0500 (time=1425318984)

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
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th width="150"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
<th width="100%"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
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
<td class="cat" colspan="2"><?php echo isset($this->vars['L_TOPIC']) ? $this->vars['L_TOPIC'] : $this->lang('L_TOPIC'); ?>:&nbsp;<a href="<?php echo isset($searchresults_item['U_TOPIC']) ? $searchresults_item['U_TOPIC'] : ''; ?>" class="topictitle" id="topiclink_top_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>"><?php echo isset($searchresults_item['TOPIC_TITLE']) ? $searchresults_item['TOPIC_TITLE'] : ''; ?></a></td>
</tr>
<tr>
<td width="150" valign="top" class="row1" rowspan="2"><span class="name"><?php echo isset($searchresults_item['POSTER_NAME']) ? $searchresults_item['POSTER_NAME'] : ''; ?></span><br />
<br />
<span class="postdetails"><?php echo isset($this->vars['L_REPLIES']) ? $this->vars['L_REPLIES'] : $this->lang('L_REPLIES'); ?>: <strong><?php echo isset($searchresults_item['TOPIC_REPLIES']) ? $searchresults_item['TOPIC_REPLIES'] : ''; ?></strong><br />
<?php echo isset($this->vars['L_VIEWS']) ? $this->vars['L_VIEWS'] : $this->lang('L_VIEWS'); ?>: <strong><?php echo isset($searchresults_item['TOPIC_VIEWS']) ? $searchresults_item['TOPIC_VIEWS'] : ''; ?></strong></span><br />
<img src="images/spacer.gif" alt="" width="150" height="1" />
</td>
<td width="100%" valign="top" class="row1" <?php echo isset($searchresults_item['S_AJAX_EDIT_TITLE']) ? $searchresults_item['S_AJAX_EDIT_TITLE'] : ''; ?>><span class="postdetails"><a href="<?php echo isset($searchresults_item['U_POST']) ? $searchresults_item['U_POST'] : ''; ?>"><img src="<?php echo isset($searchresults_item['MINI_POST_IMG']) ? $searchresults_item['MINI_POST_IMG'] : ''; ?>" alt="<?php echo isset($searchresults_item['L_MINI_POST_ALT']) ? $searchresults_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($searchresults_item['L_MINI_POST_ALT']) ? $searchresults_item['L_MINI_POST_ALT'] : ''; ?>" /></a><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>:&nbsp;<strong><a href="<?php echo isset($searchresults_item['U_FORUM']) ? $searchresults_item['U_FORUM'] : ''; ?>" class="postdetails"><?php echo isset($searchresults_item['FORUM_NAME']) ? $searchresults_item['FORUM_NAME'] : ''; ?></a></strong>&nbsp; 
&nbsp;<?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($searchresults_item['POST_DATE']) ? $searchresults_item['POST_DATE'] : ''; ?>&nbsp; &nbsp;<?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>: <strong><a href="<?php echo isset($searchresults_item['U_POST']) ? $searchresults_item['U_POST'] : ''; ?>" id="topiclink_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>"><?php echo isset($searchresults_item['POST_SUBJECT']) ? $searchresults_item['POST_SUBJECT'] : ''; ?></a></strong>
<?php

$can_edit_count = ( isset($searchresults_item['can_edit.']) ) ? sizeof($searchresults_item['can_edit.']) : 0;
for ($can_edit_i = 0; $can_edit_i < $can_edit_count; $can_edit_i++)
{
 $can_edit_item = &$searchresults_item['can_edit.'][$can_edit_i];
 $can_edit_item['S_ROW_COUNT'] = $can_edit_i;
 $can_edit_item['S_NUM_ROWS'] = $can_edit_count;

?>
<span id="title_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" style="display:none;"><input type="text" class="post" name="topictitle_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" id="topictitle_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" value="<?php echo isset($searchresults_item['POST_RAW_SUBJECT']) ? $searchresults_item['POST_RAW_SUBJECT'] : ''; ?>" size="40" maxlength="60" onkeyup="AJAXTitleEditKeyUp(event, <?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>)" /><input type="hidden" id="orig_topictitle_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" value="<?php echo isset($searchresults_item['POST_RAW_SUBJECT']) ? $searchresults_item['POST_RAW_SUBJECT'] : ''; ?>" />&nbsp;<input type="button" onclick="AJAXEndTitleEdit(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="mainoption" />&nbsp;<input type="button" onclick="AJAXCancelTitleEdit(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span>
<?php

} // END can_edit

if(isset($can_edit_item)) { unset($can_edit_item); } 

?>
</span></td>
</tr>
<tr>
<td valign="top" class="row1">
<?php echo isset($searchresults_item['U_EDIT_IMG']) ? $searchresults_item['U_EDIT_IMG'] : ''; ?><span id="postmessage_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>"><span class="postbody"><?php echo isset($searchresults_item['MESSAGE']) ? $searchresults_item['MESSAGE'] : ''; ?></span></span>
<?php

$can_edit_count = ( isset($searchresults_item['can_edit.']) ) ? sizeof($searchresults_item['can_edit.']) : 0;
for ($can_edit_i = 0; $can_edit_i < $can_edit_count; $can_edit_i++)
{
 $can_edit_item = &$searchresults_item['can_edit.'][$can_edit_i];
 $can_edit_item['S_ROW_COUNT'] = $can_edit_i;
 $can_edit_item['S_NUM_ROWS'] = $can_edit_count;

?>
<div class="gen" id="post_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" style="display:none; text-align:right;">
<textarea id="posttext_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" rows="15" cols="35" wrap="virtual" class="post" style="width:100%;" onkeyup="AJAXPostEditkeyUp(event, <?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>)"><?php echo isset($searchresults_item['RAW_MESSAGE']) ? $searchresults_item['RAW_MESSAGE'] : ''; ?></textarea><textarea id="orig_posttext_<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>" rows="1" cols="1" style="display:none;"><?php echo isset($searchresults_item['RAW_MESSAGE']) ? $searchresults_item['RAW_MESSAGE'] : ''; ?></textarea><br />
<input type="button" value=" + " onclick="AJAXEnlargePostArea(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>);return false;" class="liteoption" />&nbsp;<input type="button" value=" - " onclick="AJAXShortenPostArea(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>);return false;" class="liteoption" />&nbsp;&nbsp;&nbsp;<input type="button" onclick="AJAXEndPostEdit(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>, <?php echo isset($this->vars['RETURN_CHARS']) ? $this->vars['RETURN_CHARS'] : $this->lang('RETURN_CHARS'); ?>);return false;" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="liteoption" />&nbsp;<input type="button" onclick="AJAXCancelPostEdit(<?php echo isset($searchresults_item['U_POST_ID']) ? $searchresults_item['U_POST_ID'] : ''; ?>);return false;" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" />&nbsp;<a href="<?php echo isset($searchresults_item['U_EDIT_POST']) ? $searchresults_item['U_EDIT_POST'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_FULL_EDIT']) ? $this->vars['L_FULL_EDIT'] : $this->lang('L_FULL_EDIT'); ?></a>
</div>
<?php

} // END can_edit

if(isset($can_edit_item)) { unset($can_edit_item); } 

?>
</td>
</tr>
<?php

} // END searchresults

if(isset($searchresults_item)) { unset($searchresults_item); } 

?>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr> 
<td width="100%" class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></a> &raquo; <?php echo isset($this->vars['L_SEARCH_MATCHES']) ? $this->vars['L_SEARCH_MATCHES'] : $this->lang('L_SEARCH_MATCHES'); ?></td>
<td nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
<tr>
	<td colspan="2"><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>
