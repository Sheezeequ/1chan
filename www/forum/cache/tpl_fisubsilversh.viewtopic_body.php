<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:21:31 +0300 (time=1669728091)

?><script type="text/javascript" src="includes/javascript/ajax_topicfunctions.js"></script>
<script type="text/javascript">
<!--
is_viewtopic = 1;
highlight = '<?php echo isset($this->vars['HIGHLIGHT']) ? $this->vars['HIGHLIGHT'] : $this->lang('HIGHLIGHT'); ?>';
//-->
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td height="34" valign="top" class="nav"><?php echo isset($this->vars['BANNER_14_IMG']) ? $this->vars['BANNER_14_IMG'] : $this->lang('BANNER_14_IMG'); ?><br/><a href="<?php echo isset($this->vars['U_VIEW_TOPIC']) ? $this->vars['U_VIEW_TOPIC'] : $this->lang('U_VIEW_TOPIC'); ?>" id="topiclink_top" class="maintitle"><?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?></a><br />
<?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span>
<!-- Start add - Topic in Who is online MOD -->
<span class="gensmall"><br/><?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?><br/><?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?></b></span></td>
<!-- End add - Topic in Who is online MOD -->
</td>
<td class="gensmall" align="right" valign="bottom"><a href="<?php echo isset($this->vars['U_VIEW_NEWER_TOPIC']) ? $this->vars['U_VIEW_NEWER_TOPIC'] : $this->lang('U_VIEW_NEWER_TOPIC'); ?>"><?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?></a><br />
<a href="<?php echo isset($this->vars['U_VIEW_OLDER_TOPIC']) ? $this->vars['U_VIEW_OLDER_TOPIC'] : $this->lang('U_VIEW_OLDER_TOPIC'); ?>"><?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?></a><br />
<strong><?php echo isset($this->vars['S_WATCH_TOPIC']) ? $this->vars['S_WATCH_TOPIC'] : $this->lang('S_WATCH_TOPIC'); ?></strong><br />
<?php

$bookmark_state_count = ( isset($this->_tpldata['bookmark_state.']) ) ?  sizeof($this->_tpldata['bookmark_state.']) : 0;
for ($bookmark_state_i = 0; $bookmark_state_i < $bookmark_state_count; $bookmark_state_i++)
{
 $bookmark_state_item = &$this->_tpldata['bookmark_state.'][$bookmark_state_i];
 $bookmark_state_item['S_ROW_COUNT'] = $bookmark_state_i;
 $bookmark_state_item['S_NUM_ROWS'] = $bookmark_state_count;

?>
<a href="<?php echo isset($this->vars['U_BOOKMARK_ACTION']) ? $this->vars['U_BOOKMARK_ACTION'] : $this->lang('U_BOOKMARK_ACTION'); ?>"><?php echo isset($this->vars['L_BOOKMARK_ACTION']) ? $this->vars['L_BOOKMARK_ACTION'] : $this->lang('L_BOOKMARK_ACTION'); ?></a>
<?php

} // END bookmark_state

if(isset($bookmark_state_item)) { unset($bookmark_state_item); } 

?>
</td>
</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td nowrap="nowrap"><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a><a href="<?php echo isset($this->vars['U_POST_REPLY_TOPIC']) ? $this->vars['U_POST_REPLY_TOPIC'] : $this->lang('U_POST_REPLY_TOPIC'); ?>"><img src="<?php echo isset($this->vars['REPLY_IMG']) ? $this->vars['REPLY_IMG'] : $this->lang('REPLY_IMG'); ?>" id="replyimg_top" alt="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" hspace="8" title="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" /></a></td>
<td align="left" valign="middle" class="nav" width="100%"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<td nowrap="nowrap"><a href="<?php echo isset($this->vars['U_VIEW_OLDER_TOPIC']) ? $this->vars['U_VIEW_OLDER_TOPIC'] : $this->lang('U_VIEW_OLDER_TOPIC'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_previous.gif" alt="<?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?>" title="<?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?>" width="15" height="25" border="0" /></a><a href="tellafriend.php?topic=<?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?>&link=<?php echo isset($this->vars['TELL_LINK']) ? $this->vars['TELL_LINK'] : $this->lang('TELL_LINK'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_email.gif" alt="<?php echo isset($this->vars['L_TELL_FRIEND']) ? $this->vars['L_TELL_FRIEND'] : $this->lang('L_TELL_FRIEND'); ?>" width="24" height="25" border="0" title="<?php echo isset($this->vars['L_TELL_FRIEND']) ? $this->vars['L_TELL_FRIEND'] : $this->lang('L_TELL_FRIEND'); ?>" /></a><a href="<?php echo isset($this->vars['U_WATCH_TOPIC']) ? $this->vars['U_WATCH_TOPIC'] : $this->lang('U_WATCH_TOPIC'); ?>"><img src="templates/fisubsilversh/images/topic_watch.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_TOPIC_VIEW_USERS']) ? $this->vars['L_TOPIC_VIEW_USERS'] : $this->lang('L_TOPIC_VIEW_USERS'); ?>" title="<?php echo isset($this->vars['L_TOPIC_VIEW_USERS']) ? $this->vars['L_TOPIC_VIEW_USERS'] : $this->lang('L_TOPIC_VIEW_USERS'); ?>" /></a><a href="<?php echo isset($this->vars['U_POST_EXPORT_TOPIC']) ? $this->vars['U_POST_EXPORT_TOPIC'] : $this->lang('U_POST_EXPORT_TOPIC'); ?>"><img src="templates/fisubsilversh/images/save_topic.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_SAVE_TOPIC']) ? $this->vars['L_SAVE_TOPIC'] : $this->lang('L_SAVE_TOPIC'); ?>" title="<?php echo isset($this->vars['L_SAVE_TOPIC']) ? $this->vars['L_SAVE_TOPIC'] : $this->lang('L_SAVE_TOPIC'); ?>" /></a><a href="<?php echo isset($this->vars['U_PRINT']) ? $this->vars['U_PRINT'] : $this->lang('U_PRINT'); ?>" target="_blank"><img src="templates/fisubsilversh/images/lang_english/topic_print.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_PRINT']) ? $this->vars['L_PRINT'] : $this->lang('L_PRINT'); ?>" title="<?php echo isset($this->vars['L_PRINT']) ? $this->vars['L_PRINT'] : $this->lang('L_PRINT'); ?>" /></a><?php echo isset($this->vars['S_WATCH_TOPIC_IMG']) ? $this->vars['S_WATCH_TOPIC_IMG'] : $this->lang('S_WATCH_TOPIC_IMG'); ?><a href="<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>"><img src="<?php echo isset($this->vars['PRIVMSG_IMG']) ? $this->vars['PRIVMSG_IMG'] : $this->lang('PRIVMSG_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?>" title="<?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?>" /></a><a href="<?php echo isset($this->vars['U_VIEW_NEWER_TOPIC']) ? $this->vars['U_VIEW_NEWER_TOPIC'] : $this->lang('U_VIEW_NEWER_TOPIC'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_next.gif" alt="<?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?>" title="<?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?>" width="14" height="25" border="0" /></a></td>
</tr>
</table>

<?php echo isset($this->vars['POLL_DISPLAY']) ? $this->vars['POLL_DISPLAY'] : $this->lang('POLL_DISPLAY'); ?>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr>
<th width="150" height="28"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
<th width="100%"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
</tr>
<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
<tr>
<td valign="top" class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>"> 
<span class="name"><a name="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" id="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><strong><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></strong><?php echo isset($postrow_item['CARD_IMG']) ? $postrow_item['CARD_IMG'] : ''; ?><br /></span>
<span class="postdetails"><?php echo isset($postrow_item['POSTER_RANK']) ? $postrow_item['POSTER_RANK'] : ''; ?><br /> 
<?php echo isset($postrow_item['RANK_IMAGE']) ? $postrow_item['RANK_IMAGE'] : ''; ?><?php echo isset($postrow_item['POSTER_AVATAR']) ? $postrow_item['POSTER_AVATAR'] : ''; ?><br /><br /> 
<?php echo isset($postrow_item['POSTER_AGE']) ? $postrow_item['POSTER_AGE'] : ''; ?><br />
<?php echo isset($postrow_item['POSTER_JOINED']) ? $postrow_item['POSTER_JOINED'] : ''; ?><br /> 
<?php echo isset($postrow_item['POSTER_POSTS']) ? $postrow_item['POSTER_POSTS'] : ''; ?><br /> 
<?php echo isset($postrow_item['POSTER_FROM']) ? $postrow_item['POSTER_FROM'] : ''; ?><br /> 
<?php

$author_profile_count = ( isset($postrow_item['author_profile.']) ) ? sizeof($postrow_item['author_profile.']) : 0;
for ($author_profile_i = 0; $author_profile_i < $author_profile_count; $author_profile_i++)
{
 $author_profile_item = &$postrow_item['author_profile.'][$author_profile_i];
 $author_profile_item['S_ROW_COUNT'] = $author_profile_i;
 $author_profile_item['S_NUM_ROWS'] = $author_profile_count;

?><?php echo isset($author_profile_item['AUTHOR_VAL']) ? $author_profile_item['AUTHOR_VAL'] : ''; ?><br /><?php

} // END author_profile

if(isset($author_profile_item)) { unset($author_profile_item); } 

?>
</span>
<?php echo isset($postrow_item['POSTER_FROM_FLAG']) ? $postrow_item['POSTER_FROM_FLAG'] : ''; ?>
<img src="images/spacer.gif" alt="" width="150" height="1" /> 
</td> 
<td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" width="100%" height="28" valign="top"> 
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr> 
<!-- Start add - Yellow card admin MOD -->
<form method="post" action="<?php echo isset($postrow_item['S_CARD']) ? $postrow_item['S_CARD'] : ''; ?>">
<!-- End add - Yellow card admin MOD -->
<td class="postdetails"><a href="<?php echo isset($postrow_item['U_MINI_POST']) ? $postrow_item['U_MINI_POST'] : ''; ?>"><img src="<?php echo isset($postrow_item['MINI_POST_IMG']) ? $postrow_item['MINI_POST_IMG'] : ''; ?>" alt="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" /></a><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?>&nbsp; <span <?php echo isset($postrow_item['S_AJAX_EDIT_TITLE']) ? $postrow_item['S_AJAX_EDIT_TITLE'] : ''; ?>><?php echo isset($this->vars['L_POST_SUBJECT']) ? $this->vars['L_POST_SUBJECT'] : $this->lang('L_POST_SUBJECT'); ?>: 
<?php echo isset($postrow_item['POST_SUBJECT_PRE']) ? $postrow_item['POST_SUBJECT_PRE'] : ''; ?><span id="topiclink_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"><?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></span><?php echo isset($postrow_item['POST_SUBJECT_BACK']) ? $postrow_item['POST_SUBJECT_BACK'] : ''; ?></span>
<?php

$can_edit_count = ( isset($postrow_item['can_edit.']) ) ? sizeof($postrow_item['can_edit.']) : 0;
for ($can_edit_i = 0; $can_edit_i < $can_edit_count; $can_edit_i++)
{
 $can_edit_item = &$postrow_item['can_edit.'][$can_edit_i];
 $can_edit_item['S_ROW_COUNT'] = $can_edit_i;
 $can_edit_item['S_NUM_ROWS'] = $can_edit_count;

?>
<span id="title_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" style="display:none;"><input type="text" class="post" name="topictitle_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" id="topictitle_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" value="<?php echo isset($postrow_item['POST_RAW_SUBJECT']) ? $postrow_item['POST_RAW_SUBJECT'] : ''; ?>" size="40" maxlength="60" onkeyup="AJAXTitleEditKeyUp(event, <?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>)" /><input type="hidden" id="orig_topictitle_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" value="<?php echo isset($postrow_item['POST_RAW_SUBJECT']) ? $postrow_item['POST_RAW_SUBJECT'] : ''; ?>" />&nbsp;<input type="button" onclick="AJAXEndTitleEdit(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="mainoption" />&nbsp;<input type="button" onclick="AJAXCancelTitleEdit(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span>
<?php

} // END can_edit

if(isset($can_edit_item)) { unset($can_edit_item); } 

?>
</td>
<td align="right" valign="top" nowrap="nowrap"><?php echo isset($postrow_item['QUOTE_IMG']) ? $postrow_item['QUOTE_IMG'] : ''; ?><?php echo isset($postrow_item['EDIT_IMG']) ? $postrow_item['EDIT_IMG'] : ''; ?><?php echo isset($this->vars['PAGE_BOTTOM_IMG']) ? $this->vars['PAGE_BOTTOM_IMG'] : $this->lang('PAGE_BOTTOM_IMG'); ?><?php echo isset($this->vars['PAGE_TOP_IMG']) ? $this->vars['PAGE_TOP_IMG'] : $this->lang('PAGE_TOP_IMG'); ?><?php echo isset($postrow_item['DELETE_IMG']) ? $postrow_item['DELETE_IMG'] : ''; ?><?php echo isset($postrow_item['IP_IMG']) ? $postrow_item['IP_IMG'] : ''; ?><?php echo isset($postrow_item['U_R_CARD']) ? $postrow_item['U_R_CARD'] : ''; ?><?php echo isset($postrow_item['U_Y_CARD']) ? $postrow_item['U_Y_CARD'] : ''; ?><?php echo isset($postrow_item['U_G_CARD']) ? $postrow_item['U_G_CARD'] : ''; ?><?php echo isset($postrow_item['U_B_CARD']) ? $postrow_item['U_B_CARD'] : ''; ?><?php echo isset($postrow_item['CARD_EXTRA_SPACE']) ? $postrow_item['CARD_EXTRA_SPACE'] : ''; ?><?php echo isset($postrow_item['CARD_HIDDEN_FIELDS']) ? $postrow_item['CARD_HIDDEN_FIELDS'] : ''; ?></td> 
<!-- Start add - Yellow card admin MOD -->
</form>
<!-- End add - Yellow card admin MOD -->
</tr> 
<tr>
<td colspan="2" width="100%" valign="top">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td><hr /></td>
</tr>
<tr>
<td valign="top" class="postbody"><span id="postmessage_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"><?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?></span>
<?php

$can_edit_count = ( isset($postrow_item['can_edit.']) ) ? sizeof($postrow_item['can_edit.']) : 0;
for ($can_edit_i = 0; $can_edit_i < $can_edit_count; $can_edit_i++)
{
 $can_edit_item = &$postrow_item['can_edit.'][$can_edit_i];
 $can_edit_item['S_ROW_COUNT'] = $can_edit_i;
 $can_edit_item['S_NUM_ROWS'] = $can_edit_count;

?>
<div class="gen" id="post_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" style="display:none; text-align:right;">
<textarea id="posttext_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" rows="15" cols="35" wrap="virtual" class="post" style="width:100%;" onkeyup="AJAXPostEditkeyUp(event, <?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>)"><?php echo isset($postrow_item['RAW_MESSAGE']) ? $postrow_item['RAW_MESSAGE'] : ''; ?></textarea><textarea id="orig_posttext_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" rows="1" cols="1" style="display:none;"><?php echo isset($postrow_item['RAW_MESSAGE']) ? $postrow_item['RAW_MESSAGE'] : ''; ?></textarea><br />
<input type="button" value=" + " onclick="AJAXEnlargePostArea(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>);return false;" class="liteoption" />&nbsp;<input type="button" value=" - " onclick="AJAXShortenPostArea(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>);return false;" class="liteoption" />&nbsp;&nbsp;&nbsp;<input type="button" onclick="AJAXEndPostEdit(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>, -1);return false;" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="liteoption" />&nbsp;<input type="button" onclick="AJAXCancelPostEdit(<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>);return false;" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" />&nbsp;<a href="<?php echo isset($postrow_item['U_EDIT_POST']) ? $postrow_item['U_EDIT_POST'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_FULL_EDIT']) ? $this->vars['L_FULL_EDIT'] : $this->lang('L_FULL_EDIT'); ?></a>
</div>
<?php

} // END can_edit

if(isset($can_edit_item)) { unset($can_edit_item); } 

?>
</td>
</tr>
<tr>
<td valign="bottom" class="genmed"><?php echo isset($postrow_item['ATTACHMENTS']) ? $postrow_item['ATTACHMENTS'] : ''; ?><td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan="2" height="100%" valign="bottom">
<?php

$above_sig_count = ( isset($postrow_item['above_sig.']) ) ? sizeof($postrow_item['above_sig.']) : 0;
for ($above_sig_i = 0; $above_sig_i < $above_sig_count; $above_sig_i++)
{
 $above_sig_item = &$postrow_item['above_sig.'][$above_sig_i];
 $above_sig_item['S_ROW_COUNT'] = $above_sig_i;
 $above_sig_item['S_NUM_ROWS'] = $above_sig_count;

?><span class="postdetails"><br /><?php echo isset($above_sig_item['ABOVE_VAL']) ? $above_sig_item['ABOVE_VAL'] : ''; ?></span><?php

} // END above_sig

if(isset($above_sig_item)) { unset($above_sig_item); } 

?>
<span class="postbody"><br /><?php echo isset($postrow_item['SIGNATURE']) ? $postrow_item['SIGNATURE'] : ''; ?></span>
<?php

$below_sig_count = ( isset($postrow_item['below_sig.']) ) ? sizeof($postrow_item['below_sig.']) : 0;
for ($below_sig_i = 0; $below_sig_i < $below_sig_count; $below_sig_i++)
{
 $below_sig_item = &$postrow_item['below_sig.'][$below_sig_i];
 $below_sig_item['S_ROW_COUNT'] = $below_sig_i;
 $below_sig_item['S_NUM_ROWS'] = $below_sig_count;

?><span class="postdetails"><br /><?php echo isset($below_sig_item['BELOW_VAL']) ? $below_sig_item['BELOW_VAL'] : ''; ?></span><?php

} // END below_sig

if(isset($below_sig_item)) { unset($below_sig_item); } 

?>
<br /><span id="editmessage_<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>" class="postdetails"><?php echo isset($postrow_item['EDITED_MESSAGE']) ? $postrow_item['EDITED_MESSAGE'] : ''; ?></span>
</td>
</tr>
</table>

</td>
</tr>
<tr>
<td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($postrow_item['ZODIAC_IMG']) ? $postrow_item['ZODIAC_IMG'] : ''; ?>&nbsp;<?php echo isset($postrow_item['POSTER_GENDER']) ? $postrow_item['POSTER_GENDER'] : ''; ?>&nbsp;<?php echo isset($postrow_item['CHINESE_IMG']) ? $postrow_item['CHINESE_IMG'] : ''; ?></td>
<td valign="bottom" nowrap="nowrap" class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>"><?php echo isset($postrow_item['POSTER_ONLINE']) ? $postrow_item['POSTER_ONLINE'] : ''; ?><?php echo isset($postrow_item['GALLERY_IMG']) ? $postrow_item['GALLERY_IMG'] : ''; ?><?php echo isset($postrow_item['PROFILE_IMG']) ? $postrow_item['PROFILE_IMG'] : ''; ?><?php echo isset($postrow_item['PM_IMG']) ? $postrow_item['PM_IMG'] : ''; ?><?php echo isset($postrow_item['EMAIL_IMG']) ? $postrow_item['EMAIL_IMG'] : ''; ?><?php echo isset($postrow_item['WWW_IMG']) ? $postrow_item['WWW_IMG'] : ''; ?><?php echo isset($postrow_item['AIM_IMG']) ? $postrow_item['AIM_IMG'] : ''; ?><?php echo isset($postrow_item['YIM_IMG']) ? $postrow_item['YIM_IMG'] : ''; ?><?php echo isset($postrow_item['MSN_IMG']) ? $postrow_item['MSN_IMG'] : ''; ?><?php echo isset($postrow_item['ICQ_IMG']) ? $postrow_item['ICQ_IMG'] : ''; ?></td>
</tr>
<tr>
<td class="spacerow" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
<?php

$bookmark_state_count = ( isset($this->_tpldata['bookmark_state.']) ) ?  sizeof($this->_tpldata['bookmark_state.']) : 0;
for ($bookmark_state_i = 0; $bookmark_state_i < $bookmark_state_count; $bookmark_state_i++)
{
 $bookmark_state_item = &$this->_tpldata['bookmark_state.'][$bookmark_state_i];
 $bookmark_state_item['S_ROW_COUNT'] = $bookmark_state_i;
 $bookmark_state_item['S_NUM_ROWS'] = $bookmark_state_count;

?>
<tr align="right">
<td class="row2" colspan="2" height="20"><span class="genmed"><a href="<?php echo isset($this->vars['U_BOOKMARK_ACTION']) ? $this->vars['U_BOOKMARK_ACTION'] : $this->lang('U_BOOKMARK_ACTION'); ?>" class="genmed"><?php echo isset($this->vars['L_BOOKMARK_ACTION']) ? $this->vars['L_BOOKMARK_ACTION'] : $this->lang('L_BOOKMARK_ACTION'); ?></a></span></td>
</tr>
<?php

} // END bookmark_state

if(isset($bookmark_state_item)) { unset($bookmark_state_item); } 

?>
<?php

$switch_show_quickreply_count = ( isset($this->_tpldata['switch_show_quickreply.']) ) ?  sizeof($this->_tpldata['switch_show_quickreply.']) : 0;
for ($switch_show_quickreply_i = 0; $switch_show_quickreply_i < $switch_show_quickreply_count; $switch_show_quickreply_i++)
{
 $switch_show_quickreply_item = &$this->_tpldata['switch_show_quickreply.'][$switch_show_quickreply_i];
 $switch_show_quickreply_item['S_ROW_COUNT'] = $switch_show_quickreply_i;
 $switch_show_quickreply_item['S_NUM_ROWS'] = $switch_show_quickreply_count;

?>
<tr align="center">
		<td class="row1" colspan="2" >
		<?php echo isset($this->vars['QUICKREPLY_OUTPUT']) ? $this->vars['QUICKREPLY_OUTPUT'] : $this->lang('QUICKREPLY_OUTPUT'); ?>
		</td>
	</tr>
<?php

} // END switch_show_quickreply

if(isset($switch_show_quickreply_item)) { unset($switch_show_quickreply_item); } 

?>
<tr>
<td colspan="2" align="center" class="cat">

<form method="post" action="<?php echo isset($this->vars['S_POST_DAYS_ACTION']) ? $this->vars['S_POST_DAYS_ACTION'] : $this->lang('S_POST_DAYS_ACTION'); ?>">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td class="gensmall"><?php echo isset($this->vars['L_DISPLAY_POSTS']) ? $this->vars['L_DISPLAY_POSTS'] : $this->lang('L_DISPLAY_POSTS'); ?>:&nbsp;&nbsp;</td>
<td><?php echo isset($this->vars['S_SELECT_POST_DAYS']) ? $this->vars['S_SELECT_POST_DAYS'] : $this->lang('S_SELECT_POST_DAYS'); ?>&nbsp;</td>
<td><?php echo isset($this->vars['S_SELECT_POST_ORDER']) ? $this->vars['S_SELECT_POST_ORDER'] : $this->lang('S_SELECT_POST_ORDER'); ?>&nbsp;</td>
<td><input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="catbutton" name="submit" /></td>
</tr>
</table>
</form>

</td>
</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td nowrap="nowrap"><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a><a href="<?php echo isset($this->vars['U_POST_REPLY_TOPIC']) ? $this->vars['U_POST_REPLY_TOPIC'] : $this->lang('U_POST_REPLY_TOPIC'); ?>"><img src="<?php echo isset($this->vars['REPLY_IMG']) ? $this->vars['REPLY_IMG'] : $this->lang('REPLY_IMG'); ?>" id="replyimg_bottom" alt="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" hspace="8" title="<?php echo isset($this->vars['L_POST_REPLY_TOPIC']) ? $this->vars['L_POST_REPLY_TOPIC'] : $this->lang('L_POST_REPLY_TOPIC'); ?>" /></a></td>
<td align="left" valign="middle" class="nav" width="100%"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<td nowrap="nowrap"><a href="<?php echo isset($this->vars['U_VIEW_OLDER_TOPIC']) ? $this->vars['U_VIEW_OLDER_TOPIC'] : $this->lang('U_VIEW_OLDER_TOPIC'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_previous.gif" alt="<?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?>" title="<?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?>" width="15" height="25" border="0" /></a><a href="tellafriend.php?topic=<?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?>&link=<?php echo isset($this->vars['TELL_LINK']) ? $this->vars['TELL_LINK'] : $this->lang('TELL_LINK'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_email.gif" alt="<?php echo isset($this->vars['L_TELL_FRIEND']) ? $this->vars['L_TELL_FRIEND'] : $this->lang('L_TELL_FRIEND'); ?>" width="24" height="25" border="0" title="<?php echo isset($this->vars['L_TELL_FRIEND']) ? $this->vars['L_TELL_FRIEND'] : $this->lang('L_TELL_FRIEND'); ?>" /></a><a href="<?php echo isset($this->vars['U_WATCH_TOPIC']) ? $this->vars['U_WATCH_TOPIC'] : $this->lang('U_WATCH_TOPIC'); ?>"><img src="templates/fisubsilversh/images/topic_watch.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_TOPIC_VIEW_USERS']) ? $this->vars['L_TOPIC_VIEW_USERS'] : $this->lang('L_TOPIC_VIEW_USERS'); ?>" title="<?php echo isset($this->vars['L_TOPIC_VIEW_USERS']) ? $this->vars['L_TOPIC_VIEW_USERS'] : $this->lang('L_TOPIC_VIEW_USERS'); ?>" /></a><a href="<?php echo isset($this->vars['U_POST_EXPORT_TOPIC']) ? $this->vars['U_POST_EXPORT_TOPIC'] : $this->lang('U_POST_EXPORT_TOPIC'); ?>"><img src="templates/fisubsilversh/images/save_topic.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_SAVE_TOPIC']) ? $this->vars['L_SAVE_TOPIC'] : $this->lang('L_SAVE_TOPIC'); ?>" title="<?php echo isset($this->vars['L_SAVE_TOPIC']) ? $this->vars['L_SAVE_TOPIC'] : $this->lang('L_SAVE_TOPIC'); ?>" /></a><a href="<?php echo isset($this->vars['U_PRINT']) ? $this->vars['U_PRINT'] : $this->lang('U_PRINT'); ?>" target="_blank"><img src="templates/fisubsilversh/images/lang_english/topic_print.gif" width="24" height="25" border="0" alt="<?php echo isset($this->vars['L_PRINT']) ? $this->vars['L_PRINT'] : $this->lang('L_PRINT'); ?>" title="<?php echo isset($this->vars['L_PRINT']) ? $this->vars['L_PRINT'] : $this->lang('L_PRINT'); ?>" /></a><?php echo isset($this->vars['S_WATCH_TOPIC_IMG']) ? $this->vars['S_WATCH_TOPIC_IMG'] : $this->lang('S_WATCH_TOPIC_IMG'); ?><a href="<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>"><img src="<?php echo isset($this->vars['PRIVMSG_IMG']) ? $this->vars['PRIVMSG_IMG'] : $this->lang('PRIVMSG_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?>" title="<?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?>" /></a><a href="<?php echo isset($this->vars['U_VIEW_NEWER_TOPIC']) ? $this->vars['U_VIEW_NEWER_TOPIC'] : $this->lang('U_VIEW_NEWER_TOPIC'); ?>"><img src="templates/fisubsilversh/images/lang_english/topic_next.gif" alt="<?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?>" title="<?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?>" width="14" height="25" border="0" /></a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td height="34" align="left" valign="top" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?><br />
<br />
<?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?><br />
<br />
<?php echo isset($this->vars['S_TOPIC_ADMIN']) ? $this->vars['S_TOPIC_ADMIN'] : $this->lang('S_TOPIC_ADMIN'); ?><br /><br /><?php echo isset($this->vars['BANNER_15_IMG']) ? $this->vars['BANNER_15_IMG'] : $this->lang('BANNER_15_IMG'); ?></td>
<td class="gensmall" align="right" valign="top"><strong><?php echo isset($this->vars['S_WATCH_TOPIC']) ? $this->vars['S_WATCH_TOPIC'] : $this->lang('S_WATCH_TOPIC'); ?></strong><br />
<a href="<?php echo isset($this->vars['U_VIEW_NEWER_TOPIC']) ? $this->vars['U_VIEW_NEWER_TOPIC'] : $this->lang('U_VIEW_NEWER_TOPIC'); ?>"><?php echo isset($this->vars['L_VIEW_NEXT_TOPIC']) ? $this->vars['L_VIEW_NEXT_TOPIC'] : $this->lang('L_VIEW_NEXT_TOPIC'); ?></a><br />
<a href="<?php echo isset($this->vars['U_VIEW_OLDER_TOPIC']) ? $this->vars['U_VIEW_OLDER_TOPIC'] : $this->lang('U_VIEW_OLDER_TOPIC'); ?>"><?php echo isset($this->vars['L_VIEW_PREVIOUS_TOPIC']) ? $this->vars['L_VIEW_PREVIOUS_TOPIC'] : $this->lang('L_VIEW_PREVIOUS_TOPIC'); ?></a><br />
<?php echo isset($this->vars['S_AUTH_LIST']) ? $this->vars['S_AUTH_LIST'] : $this->lang('S_AUTH_LIST'); ?></td>
</tr>
</table>