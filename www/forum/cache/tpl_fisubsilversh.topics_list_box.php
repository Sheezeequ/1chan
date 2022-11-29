<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:14:38 +0300 (time=1669727678)

?><?php

$topics_list_box_count = ( isset($this->_tpldata['topics_list_box.']) ) ?  sizeof($this->_tpldata['topics_list_box.']) : 0;
for ($topics_list_box_i = 0; $topics_list_box_i < $topics_list_box_count; $topics_list_box_i++)
{
 $topics_list_box_item = &$this->_tpldata['topics_list_box.'][$topics_list_box_i];
 $topics_list_box_item['S_ROW_COUNT'] = $topics_list_box_i;
 $topics_list_box_item['S_NUM_ROWS'] = $topics_list_box_count;

?>
<?php

$row_count = ( isset($topics_list_box_item['row.']) ) ? sizeof($topics_list_box_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$topics_list_box_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
<?php

$header_table_count = ( isset($row_item['header_table.']) ) ? sizeof($row_item['header_table.']) : 0;
for ($header_table_i = 0; $header_table_i < $header_table_count; $header_table_i++)
{
 $header_table_item = &$row_item['header_table.'][$header_table_i];
 $header_table_item['S_ROW_COUNT'] = $header_table_i;
 $header_table_item['S_NUM_ROWS'] = $header_table_count;

?>
<?php

$multi_selection_count = ( isset($header_table_item['multi_selection.']) ) ? sizeof($header_table_item['multi_selection.']) : 0;
for ($multi_selection_i = 0; $multi_selection_i < $multi_selection_count; $multi_selection_i++)
{
 $multi_selection_item = &$header_table_item['multi_selection.'][$multi_selection_i];
 $multi_selection_item['S_ROW_COUNT'] = $multi_selection_i;
 $multi_selection_item['S_NUM_ROWS'] = $multi_selection_count;

?>
<script language="Javascript" type="text/javascript">
//
// checkbox selection management
function check_uncheck_main_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>()
{
	var all_checked = true;
	for (i = 0; (i < document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.elements.length) && all_checked; i++)
	{
		if (document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.elements[i].name == '<?php echo isset($topics_list_box_item['FIELDNAME']) ? $topics_list_box_item['FIELDNAME'] : ''; ?>[]<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>')
		{
			all_checked =  document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.elements[i].checked;
		}
	}
	document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.all_mark_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>.checked = all_checked;
}
// check/uncheck all
function check_uncheck_all_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>()
{
	for (i = 0; i < document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.length; i++)
	{
		if (document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.elements[i].name == '<?php echo isset($topics_list_box_item['FIELDNAME']) ? $topics_list_box_item['FIELDNAME'] : ''; ?>[]<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>')
		{
			document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.elements[i].checked = document.<?php echo isset($topics_list_box_item['FORMNAME']) ? $topics_list_box_item['FORMNAME'] : ''; ?>.all_mark_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>.checked;
		}
	}
}
</script>
<?php

} // END multi_selection

if(isset($multi_selection_item)) { unset($multi_selection_item); } 

?>

<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
<tr> 
	<th colspan="<?php echo isset($header_table_item['COLSPAN']) ? $header_table_item['COLSPAN'] : ''; ?>" align="center" nowrap="nowrap">&nbsp;<?php echo isset($row_item['L_TITLE']) ? $row_item['L_TITLE'] : ''; ?>&nbsp;</th>
	<th width="50" align="center" nowrap="nowrap">&nbsp;<?php echo isset($row_item['L_REPLIES']) ? $row_item['L_REPLIES'] : ''; ?>&nbsp;</th>
	<th width="100" align="center" nowrap="nowrap">&nbsp;<?php echo isset($row_item['L_AUTHOR']) ? $row_item['L_AUTHOR'] : ''; ?>&nbsp;</th>
	<th width="50" align="center" nowrap="nowrap">&nbsp;<?php echo isset($row_item['L_VIEWS']) ? $row_item['L_VIEWS'] : ''; ?>&nbsp;</th>
	<th width="150" align="center" nowrap="nowrap">&nbsp;<?php echo isset($row_item['L_LASTPOST']) ? $row_item['L_LASTPOST'] : ''; ?>&nbsp;</th>
	<?php

$multi_selection_count = ( isset($header_table_item['multi_selection.']) ) ? sizeof($header_table_item['multi_selection.']) : 0;
for ($multi_selection_i = 0; $multi_selection_i < $multi_selection_count; $multi_selection_i++)
{
 $multi_selection_item = &$header_table_item['multi_selection.'][$multi_selection_i];
 $multi_selection_item['S_ROW_COUNT'] = $multi_selection_i;
 $multi_selection_item['S_NUM_ROWS'] = $multi_selection_count;

?>
	<th width="20" align="center" nowrap="nowrap"><input type="checkbox" name="all_mark_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>" value="0" onClick="check_uncheck_all_<?php echo isset($header_table_item['BOX_ID']) ? $header_table_item['BOX_ID'] : ''; ?>();" /></th>
	<?php

} // END multi_selection

if(isset($multi_selection_item)) { unset($multi_selection_item); } 

?>
</tr>
<?php

} // END header_table

if(isset($header_table_item)) { unset($header_table_item); } 

?>
<?php

$header_row_count = ( isset($row_item['header_row.']) ) ? sizeof($row_item['header_row.']) : 0;
for ($header_row_i = 0; $header_row_i < $header_row_count; $header_row_i++)
{
 $header_row_item = &$row_item['header_row.'][$header_row_i];
 $header_row_item['S_ROW_COUNT'] = $header_row_i;
 $header_row_item['S_NUM_ROWS'] = $header_row_count;

?>
<tr>
	<td class="row3" colspan="<?php echo isset($row_item['COLSPAN']) ? $row_item['COLSPAN'] : ''; ?>"><span class="gensmall">&nbsp;&nbsp;<b><?php echo isset($row_item['L_TITLE']) ? $row_item['L_TITLE'] : ''; ?></b></span></td>
</tr>
<?php

} // END header_row

if(isset($header_row_item)) { unset($header_row_item); } 

?>
<?php

$topic_count = ( isset($row_item['topic.']) ) ? sizeof($row_item['topic.']) : 0;
for ($topic_i = 0; $topic_i < $topic_count; $topic_i++)
{
 $topic_item = &$row_item['topic.'][$topic_i];
 $topic_item['S_ROW_COUNT'] = $topic_i;
 $topic_item['S_NUM_ROWS'] = $topic_count;

?>
<tr> 
	<?php

$single_selection_count = ( isset($topic_item['single_selection.']) ) ? sizeof($topic_item['single_selection.']) : 0;
for ($single_selection_i = 0; $single_selection_i < $single_selection_count; $single_selection_i++)
{
 $single_selection_item = &$topic_item['single_selection.'][$single_selection_i];
 $single_selection_item['S_ROW_COUNT'] = $single_selection_i;
 $single_selection_item['S_NUM_ROWS'] = $single_selection_count;

?>
	<td class="<?php echo isset($row_item['ROW_CLASS']) ? $row_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle" width="20"><input type="radio" name="<?php echo isset($topics_list_box_item['FIELDNAME']) ? $topics_list_box_item['FIELDNAME'] : ''; ?>" value="<?php echo isset($row_item['FID']) ? $row_item['FID'] : ''; ?>" <?php echo isset($row_item['L_SELECT']) ? $row_item['L_SELECT'] : ''; ?> /></td>
	<?php

} // END single_selection

if(isset($single_selection_item)) { unset($single_selection_item); } 

?>
	<td class="<?php echo isset($row_item['ROW_FOLDER_CLASS']) ? $row_item['ROW_FOLDER_CLASS'] : ''; ?>" align="center" valign="middle" width="20"><?php echo isset($row_item['S_MARK_LINK_START']) ? $row_item['S_MARK_LINK_START'] : ''; ?><img src="<?php echo isset($row_item['TOPIC_FOLDER_IMG']) ? $row_item['TOPIC_FOLDER_IMG'] : ''; ?>" id="topicimage_<?php echo isset($row_item['TOPIC_ID']) ? $row_item['TOPIC_ID'] : ''; ?>" alt="<?php echo isset($row_item['L_TOPIC_FOLDER_ALT']) ? $row_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($row_item['L_TOPIC_FOLDER_ALT']) ? $row_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" border="0" /><?php echo isset($row_item['S_MARK_LINK_END']) ? $row_item['S_MARK_LINK_END'] : ''; ?></td>
	<?php

$icon_count = ( isset($topic_item['icon.']) ) ? sizeof($topic_item['icon.']) : 0;
for ($icon_i = 0; $icon_i < $icon_count; $icon_i++)
{
 $icon_item = &$topic_item['icon.'][$icon_i];
 $icon_item['S_ROW_COUNT'] = $icon_i;
 $icon_item['S_NUM_ROWS'] = $icon_count;

?>
	<td class="<?php echo isset($row_item['ROW_CLASS']) ? $row_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle" width="20"><?php echo isset($row_item['ICON']) ? $row_item['ICON'] : ''; ?></td>
	<?php

} // END icon

if(isset($icon_item)) { unset($icon_item); } 

?>
	<td <?php echo isset($row_item['S_AJAX_EDIT_TITLE']) ? $row_item['S_AJAX_EDIT_TITLE'] : ''; ?> class="<?php echo isset($row_item['ROW_CLASS']) ? $row_item['ROW_CLASS'] : ''; ?>" width="100%">
		<span class="topictitle"><span id="topicnewest_<?php echo isset($row_item['TOPIC_ID']) ? $row_item['TOPIC_ID'] : ''; ?>"><?php echo isset($row_item['NEWEST_POST_IMG']) ? $row_item['NEWEST_POST_IMG'] : ''; ?></span><?php echo isset($row_item['TOPIC_ATTACHMENT_IMG']) ? $row_item['TOPIC_ATTACHMENT_IMG'] : ''; ?> <?php echo isset($row_item['TOPIC_TYPE']) ? $row_item['TOPIC_TYPE'] : ''; ?><a href="<?php echo isset($row_item['U_VIEW_TOPIC']) ? $row_item['U_VIEW_TOPIC'] : ''; ?>" id="topiclink_<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>" class="topictitle"><?php echo isset($row_item['TOPIC_TITLE']) ? $row_item['TOPIC_TITLE'] : ''; ?></a>
		<?php

$can_edit_title_count = ( isset($topic_item['can_edit_title.']) ) ? sizeof($topic_item['can_edit_title.']) : 0;
for ($can_edit_title_i = 0; $can_edit_title_i < $can_edit_title_count; $can_edit_title_i++)
{
 $can_edit_title_item = &$topic_item['can_edit_title.'][$can_edit_title_i];
 $can_edit_title_item['S_ROW_COUNT'] = $can_edit_title_i;
 $can_edit_title_item['S_NUM_ROWS'] = $can_edit_title_count;

?>
	  	<span id="title_<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>" style="display:none;"><input type="text" class="post" name="topictitle_<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>" id="topictitle_<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($row_item['TOPIC_TITLE']) ? $row_item['TOPIC_TITLE'] : ''; ?>" size="40" maxlength="60" onkeyup="AJAXTitleEditKeyUp(event, <?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" /><input type="hidden" id="orig_topictitle_<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>" value="<?php echo isset($row_item['TOPIC_TITLE']) ? $row_item['TOPIC_TITLE'] : ''; ?>" />&nbsp;<input type="button" onclick="AJAXEndTitleEdit(<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_SAVE_CHANGES']) ? $this->vars['L_SAVE_CHANGES'] : $this->lang('L_SAVE_CHANGES'); ?>" class="mainoption" />&nbsp;<input type="button" onclick="AJAXCancelTitleEdit(<?php echo isset($row_item['TOPIC_FIRST_POST_ID']) ? $row_item['TOPIC_FIRST_POST_ID'] : ''; ?>)" value="<?php echo isset($this->vars['L_CANCEL']) ? $this->vars['L_CANCEL'] : $this->lang('L_CANCEL'); ?>" class="liteoption" /></span>
	  	<?php

} // END can_edit_title

if(isset($can_edit_title_item)) { unset($can_edit_title_item); } 

?>
		</span><span class="gensmall">
		<?php

$switch_topic_desc_count = ( isset($topic_item['switch_topic_desc.']) ) ? sizeof($topic_item['switch_topic_desc.']) : 0;
for ($switch_topic_desc_i = 0; $switch_topic_desc_i < $switch_topic_desc_count; $switch_topic_desc_i++)
{
 $switch_topic_desc_item = &$topic_item['switch_topic_desc.'][$switch_topic_desc_i];
 $switch_topic_desc_item['S_ROW_COUNT'] = $switch_topic_desc_i;
 $switch_topic_desc_item['S_NUM_ROWS'] = $switch_topic_desc_count;

?>
             <br /> <?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?> : <?php echo isset($row_item['TOPIC_DESCRIPTION']) ? $row_item['TOPIC_DESCRIPTION'] : ''; ?><br />
              <?php

} // END switch_topic_desc

if(isset($switch_topic_desc_item)) { unset($switch_topic_desc_item); } 

?>
		&nbsp;&nbsp;<?php echo isset($row_item['TOPIC_ANNOUNCES_DATES']) ? $row_item['TOPIC_ANNOUNCES_DATES'] : ''; ?><?php echo isset($row_item['TOPIC_CALENDAR_DATES']) ? $row_item['TOPIC_CALENDAR_DATES'] : ''; ?></span>
		<span class="gensmall">
			<?php echo isset($row_item['GOTO_PAGE']) ? $row_item['GOTO_PAGE'] : ''; ?>
			<?php

$nav_tree_count = ( isset($topic_item['nav_tree.']) ) ? sizeof($topic_item['nav_tree.']) : 0;
for ($nav_tree_i = 0; $nav_tree_i < $nav_tree_count; $nav_tree_i++)
{
 $nav_tree_item = &$topic_item['nav_tree.'][$nav_tree_i];
 $nav_tree_item['S_ROW_COUNT'] = $nav_tree_i;
 $nav_tree_item['S_NUM_ROWS'] = $nav_tree_count;

?>
			<?php echo isset($row_item['TOPIC_NAV_TREE']) ? $row_item['TOPIC_NAV_TREE'] : ''; ?>
			<?php

} // END nav_tree

if(isset($nav_tree_item)) { unset($nav_tree_item); } 

?>
		</span>
	</td>
	<td class="row2" align="center" valign="middle"><span class="postdetails"><?php echo isset($row_item['REPLIES']) ? $row_item['REPLIES'] : ''; ?></span></td>
	<td class="row3" align="center" valign="middle"><span class="name"><?php echo isset($row_item['TOPIC_AUTHOR']) ? $row_item['TOPIC_AUTHOR'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails"><?php echo isset($row_item['VIEWS']) ? $row_item['VIEWS'] : ''; ?></span></td>
	<td class="row3" align="center" valign="middle" nowrap="nowrap"><span class="postdetails"><?php echo isset($row_item['LAST_POST_TIME']) ? $row_item['LAST_POST_TIME'] : ''; ?><br /><?php echo isset($row_item['LAST_POST_AUTHOR']) ? $row_item['LAST_POST_AUTHOR'] : ''; ?> <?php echo isset($row_item['LAST_POST_IMG']) ? $row_item['LAST_POST_IMG'] : ''; ?></span></td>
	<?php

$multi_selection_count = ( isset($topic_item['multi_selection.']) ) ? sizeof($topic_item['multi_selection.']) : 0;
for ($multi_selection_i = 0; $multi_selection_i < $multi_selection_count; $multi_selection_i++)
{
 $multi_selection_item = &$topic_item['multi_selection.'][$multi_selection_i];
 $multi_selection_item['S_ROW_COUNT'] = $multi_selection_i;
 $multi_selection_item['S_NUM_ROWS'] = $multi_selection_count;

?>
	<td class="row2" align="center" valign="middle"><span class="postdetails"><input type="checkbox" name="<?php echo isset($topics_list_box_item['FIELDNAME']) ? $topics_list_box_item['FIELDNAME'] : ''; ?>[]<?php echo isset($row_item['BOX_ID']) ? $row_item['BOX_ID'] : ''; ?>" value="<?php echo isset($row_item['FID']) ? $row_item['FID'] : ''; ?>" onClick="javascript:check_uncheck_main_<?php echo isset($row_item['BOX_ID']) ? $row_item['BOX_ID'] : ''; ?>();" <?php echo isset($row_item['L_SELECT']) ? $row_item['L_SELECT'] : ''; ?> /></span></td>
	<?php

} // END multi_selection

if(isset($multi_selection_item)) { unset($multi_selection_item); } 

?>
</tr>
<?php

} // END topic

if(isset($topic_item)) { unset($topic_item); } 

?>
<?php

$no_topics_count = ( isset($row_item['no_topics.']) ) ? sizeof($row_item['no_topics.']) : 0;
for ($no_topics_i = 0; $no_topics_i < $no_topics_count; $no_topics_i++)
{
 $no_topics_item = &$row_item['no_topics.'][$no_topics_i];
 $no_topics_item['S_ROW_COUNT'] = $no_topics_i;
 $no_topics_item['S_NUM_ROWS'] = $no_topics_count;

?>
<tr> 
	<td class="row1" colspan="<?php echo isset($row_item['COLSPAN']) ? $row_item['COLSPAN'] : ''; ?>" height="30" align="center" valign="middle"><span class="gen"><?php echo isset($row_item['L_NO_TOPICS']) ? $row_item['L_NO_TOPICS'] : ''; ?></span></td>
</tr>
<?php

} // END no_topics

if(isset($no_topics_item)) { unset($no_topics_item); } 

?>
<?php

$bottom_count = ( isset($row_item['bottom.']) ) ? sizeof($row_item['bottom.']) : 0;
for ($bottom_i = 0; $bottom_i < $bottom_count; $bottom_i++)
{
 $bottom_item = &$row_item['bottom.'][$bottom_i];
 $bottom_item['S_ROW_COUNT'] = $bottom_i;
 $bottom_item['S_NUM_ROWS'] = $bottom_count;

?>
<tr> 
	<td class="cat" colspan="<?php echo isset($row_item['COLSPAN']) ? $row_item['COLSPAN'] : ''; ?>" align="center" valign="middle"><span class="genmed"><?php echo isset($row_item['FOOTER']) ? $row_item['FOOTER'] : ''; ?></span></td>
</tr>
<?php

} // END bottom

if(isset($bottom_item)) { unset($bottom_item); } 

?>
<?php

$footer_table_count = ( isset($row_item['footer_table.']) ) ? sizeof($row_item['footer_table.']) : 0;
for ($footer_table_i = 0; $footer_table_i < $footer_table_count; $footer_table_i++)
{
 $footer_table_item = &$row_item['footer_table.'][$footer_table_i];
 $footer_table_item['S_ROW_COUNT'] = $footer_table_i;
 $footer_table_item['S_NUM_ROWS'] = $footer_table_count;

?>
</table>
<?php

} // END footer_table

if(isset($footer_table_item)) { unset($footer_table_item); } 

?>
<?php

$spacer_count = ( isset($row_item['spacer.']) ) ? sizeof($row_item['spacer.']) : 0;
for ($spacer_i = 0; $spacer_i < $spacer_count; $spacer_i++)
{
 $spacer_item = &$row_item['spacer.'][$spacer_i];
 $spacer_item['S_ROW_COUNT'] = $spacer_i;
 $spacer_item['S_NUM_ROWS'] = $spacer_count;

?>
<br class="gensmall">
<?php

} // END spacer

if(isset($spacer_item)) { unset($spacer_item); } 

?>
<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
<?php

} // END topics_list_box

if(isset($topics_list_box_item)) { unset($topics_list_box_item); } 

?>