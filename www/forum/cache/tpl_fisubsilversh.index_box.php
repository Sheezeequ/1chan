<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:47 +0300 (time=1669727207)

?><script type="text/javascript" src="includes/javascript/ajax_forumfunctions.js"></script>

<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
<?php

$tablehead_count = ( isset($catrow_item['tablehead.']) ) ? sizeof($catrow_item['tablehead.']) : 0;
for ($tablehead_i = 0; $tablehead_i < $tablehead_count; $tablehead_i++)
{
 $tablehead_item = &$catrow_item['tablehead.'][$tablehead_i];
 $tablehead_item['S_ROW_COUNT'] = $tablehead_i;
 $tablehead_item['S_NUM_ROWS'] = $tablehead_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr> 
	<th colspan="<?php echo isset($tablehead_item['INC_SPAN']) ? $tablehead_item['INC_SPAN'] : ''; ?>" width="100%" nowrap="nowrap">&nbsp;<?php echo isset($tablehead_item['L_FORUM']) ? $tablehead_item['L_FORUM'] : ''; ?>&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>&nbsp;</th>
	<th nowrap="nowrap">&nbsp;</th>
	<th width="150" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?>&nbsp;</th>
</tr>
<?php

} // END tablehead

if(isset($tablehead_item)) { unset($tablehead_item); } 

?>
<?php

$cathead_count = ( isset($catrow_item['cathead.']) ) ? sizeof($catrow_item['cathead.']) : 0;
for ($cathead_i = 0; $cathead_i < $cathead_count; $cathead_i++)
{
 $cathead_item = &$catrow_item['cathead.'][$cathead_i];
 $cathead_item['S_ROW_COUNT'] = $cathead_i;
 $cathead_item['S_NUM_ROWS'] = $cathead_count;

?>
<tr> 
	<?php

$inc_count = ( isset($cathead_item['inc.']) ) ? sizeof($cathead_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$cathead_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="46" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="<?php echo isset($cathead_item['CLASS_CAT']) ? $cathead_item['CLASS_CAT'] : ''; ?>" width="100%" colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>"><span class="cattitle"><a href="<?php echo isset($cathead_item['U_VIEWCAT']) ? $cathead_item['U_VIEWCAT'] : ''; ?>" class="cattitle" title="<?php echo isset($cathead_item['CAT_DESC']) ? $cathead_item['CAT_DESC'] : ''; ?>"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_ROWPIC']) ? $cathead_item['CLASS_ROWPIC'] : ''; ?>" colspan="5" align="right">&nbsp;</td>
</tr>
<?php

} // END cathead

if(isset($cathead_item)) { unset($cathead_item); } 

?>
<?php

$forumrow_count = ( isset($catrow_item['forumrow.']) ) ? sizeof($catrow_item['forumrow.']) : 0;
for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
{
 $forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
 $forumrow_item['S_ROW_COUNT'] = $forumrow_i;
 $forumrow_item['S_NUM_ROWS'] = $forumrow_count;

?>
<tr> 
	<?php

$inc_count = ( isset($forumrow_item['inc.']) ) ? sizeof($forumrow_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$forumrow_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="46" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td  class="<?php echo isset($forumrow_item['INC_CLASS']) ? $forumrow_item['INC_CLASS'] : ''; ?>" align="center" valign="middle" height="50"><?php echo isset($forumrow_item['S_MARK_LINK_START']) ? $forumrow_item['S_MARK_LINK_START'] : ''; ?><img src="<?php echo isset($forumrow_item['FORUM_FOLDER_IMG']) ? $forumrow_item['FORUM_FOLDER_IMG'] : ''; ?>" id="forumimage_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>" alt="<?php echo isset($forumrow_item['L_FORUM_FOLDER_ALT']) ? $forumrow_item['L_FORUM_FOLDER_ALT'] : ''; ?>" border="0" title="<?php echo isset($forumrow_item['L_FORUM_FOLDER_ALT']) ? $forumrow_item['L_FORUM_FOLDER_ALT'] : ''; ?>" /><?php echo isset($forumrow_item['S_MARK_LINK_END']) ? $forumrow_item['S_MARK_LINK_END'] : ''; ?></td>
	<td class="row1" width="100%" height="50" colspan="<?php echo isset($forumrow_item['INC_SPAN']) ? $forumrow_item['INC_SPAN'] : ''; ?>" valign="top">
		<?php

$forum_icon_count = ( isset($forumrow_item['forum_icon.']) ) ? sizeof($forumrow_item['forum_icon.']) : 0;
for ($forum_icon_i = 0; $forum_icon_i < $forum_icon_count; $forum_icon_i++)
{
 $forum_icon_item = &$forumrow_item['forum_icon.'][$forum_icon_i];
 $forum_icon_item['S_ROW_COUNT'] = $forum_icon_i;
 $forum_icon_item['S_NUM_ROWS'] = $forum_icon_count;

?>
		<table cellpadding="2" cellspacing="0" border="0" width="100%" height="47">
		<tr>
			<td width="46" align="center"><a href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>"><img src="<?php echo isset($forumrow_item['ICON_IMG']) ? $forumrow_item['ICON_IMG'] : ''; ?>" border="0" /></a></td>
			<td>
		<?php

} // END forum_icon

if(isset($forum_icon_item)) { unset($forum_icon_item); } 

?>
		<span class="forumlink"><a href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>" class="forumlink"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></a><br /></span>
		<span class="genmed"><?php echo isset($forumrow_item['FORUM_DESC']) ? $forumrow_item['FORUM_DESC'] : ''; ?></span>
		<span class="gensmall"><?php echo isset($forumrow_item['L_MODERATOR']) ? $forumrow_item['L_MODERATOR'] : ''; ?><?php echo isset($forumrow_item['MODERATORS']) ? $forumrow_item['MODERATORS'] : ''; ?><?php echo isset($forumrow_item['L_LINKS']) ? $forumrow_item['L_LINKS'] : ''; ?><?php echo isset($forumrow_item['LINKS']) ? $forumrow_item['LINKS'] : ''; ?></span>
		<?php

$forum_icon_count = ( isset($forumrow_item['forum_icon.']) ) ? sizeof($forumrow_item['forum_icon.']) : 0;
for ($forum_icon_i = 0; $forum_icon_i < $forum_icon_count; $forum_icon_i++)
{
 $forum_icon_item = &$forumrow_item['forum_icon.'][$forum_icon_i];
 $forum_icon_item['S_ROW_COUNT'] = $forum_icon_i;
 $forum_icon_item['S_NUM_ROWS'] = $forum_icon_count;

?>
			</td>
		</tr>
		</table>
		<?php

} // END forum_icon

if(isset($forum_icon_item)) { unset($forum_icon_item); } 

?>
	</td>
	<?php

$forum_link_no_count = ( isset($forumrow_item['forum_link_no.']) ) ? sizeof($forumrow_item['forum_link_no.']) : 0;
for ($forum_link_no_i = 0; $forum_link_no_i < $forum_link_no_count; $forum_link_no_i++)
{
 $forum_link_no_item = &$forumrow_item['forum_link_no.'][$forum_link_no_i];
 $forum_link_no_item['S_ROW_COUNT'] = $forum_link_no_i;
 $forum_link_no_item['S_NUM_ROWS'] = $forum_link_no_count;

?>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall"><?php echo isset($forumrow_item['TOPICS']) ? $forumrow_item['TOPICS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall"><?php echo isset($forumrow_item['POSTS']) ? $forumrow_item['POSTS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall"><?php echo isset($forumrow_item['ICONS']) ? $forumrow_item['ICONS'] : ''; ?></span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><?php echo isset($forumrow_item['LAST_POST']) ? $forumrow_item['LAST_POST'] : ''; ?></span></td>
	<?php

} // END forum_link_no

if(isset($forum_link_no_item)) { unset($forum_link_no_item); } 

?>
	<?php

$forum_link_count = ( isset($forumrow_item['forum_link.']) ) ? sizeof($forumrow_item['forum_link.']) : 0;
for ($forum_link_i = 0; $forum_link_i < $forum_link_count; $forum_link_i++)
{
 $forum_link_item = &$forumrow_item['forum_link.'][$forum_link_i];
 $forum_link_item['S_ROW_COUNT'] = $forum_link_i;
 $forum_link_item['S_NUM_ROWS'] = $forum_link_count;

?>
	<td class="row3" align="center" valign="middle" height="50" colspan="4"><span class="gensmall"><?php echo isset($forum_link_item['HIT_COUNT']) ? $forum_link_item['HIT_COUNT'] : ''; ?></span></td>
	<?php

} // END forum_link

if(isset($forum_link_item)) { unset($forum_link_item); } 

?>
</tr>
<?php

} // END forumrow

if(isset($forumrow_item)) { unset($forumrow_item); } 

?>
<?php

$catfoot_count = ( isset($catrow_item['catfoot.']) ) ? sizeof($catrow_item['catfoot.']) : 0;
for ($catfoot_i = 0; $catfoot_i < $catfoot_count; $catfoot_i++)
{
 $catfoot_item = &$catrow_item['catfoot.'][$catfoot_i];
 $catfoot_item['S_ROW_COUNT'] = $catfoot_i;
 $catfoot_item['S_NUM_ROWS'] = $catfoot_count;

?>
<tr>
	<?php

$inc_count = ( isset($catfoot_item['inc.']) ) ? sizeof($catfoot_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$catfoot_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td width="46" class="<?php echo isset($inc_item['INC_CLASS']) ? $inc_item['INC_CLASS'] : ''; ?>"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td colspan="<?php echo isset($catfoot_item['INC_SPAN']) ? $catfoot_item['INC_SPAN'] : ''; ?>" height="1" class="spacerow"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" alt="" width="1" height="1" /></td>
</tr>
<?php

} // END catfoot

if(isset($catfoot_item)) { unset($catfoot_item); } 

?>
<?php

$tablefoot_count = ( isset($catrow_item['tablefoot.']) ) ? sizeof($catrow_item['tablefoot.']) : 0;
for ($tablefoot_i = 0; $tablefoot_i < $tablefoot_count; $tablefoot_i++)
{
 $tablefoot_item = &$catrow_item['tablefoot.'][$tablefoot_i];
 $tablefoot_item['S_ROW_COUNT'] = $tablefoot_i;
 $tablefoot_item['S_NUM_ROWS'] = $tablefoot_count;

?>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br class="gensmall" />
<?php

} // END tablefoot

if(isset($tablefoot_item)) { unset($tablefoot_item); } 

?>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>