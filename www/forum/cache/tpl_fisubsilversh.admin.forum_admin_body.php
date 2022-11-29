<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:08:11 +0300 (time=1669727291)

?><!-- mod : categories hierarchy v 2 -->
<div class="maintitle"><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_FORUM_EXPLAIN']) ? $this->vars['L_FORUM_EXPLAIN'] : $this->lang('L_FORUM_EXPLAIN'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td><span class="nav"><a href="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
	<th class="thLeft" colspan="<?php echo isset($this->vars['INC_SPAN']) ? $this->vars['INC_SPAN'] : $this->lang('INC_SPAN'); ?>" width="75%"><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></th>
	<th class="thRight" colspan="4" width="25%"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
</tr>
<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

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
	<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="<?php echo isset($cathead_item['CLASS_CATLEFT']) ? $cathead_item['CLASS_CATLEFT'] : ''; ?>"   colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>" <?php echo isset($cathead_item['WIDTH']) ? $cathead_item['WIDTH'] : ''; ?>><span class="cattitle"><b><a href="<?php echo isset($cathead_item['U_VIEWCAT']) ? $cathead_item['U_VIEWCAT'] : ''; ?>" class="cattitle"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></a></b></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_EDIT']) ? $cathead_item['U_CAT_EDIT'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_DELETE']) ? $cathead_item['U_CAT_DELETE'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle" nowrap="nowrap"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_MOVE_UP']) ? $cathead_item['U_CAT_MOVE_UP'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_MOVE_UP']) ? $this->vars['L_MOVE_UP'] : $this->lang('L_MOVE_UP'); ?></a> <a href="<?php echo isset($cathead_item['U_CAT_MOVE_DOWN']) ? $cathead_item['U_CAT_MOVE_DOWN'] : ''; ?>" class="gen"><?php echo isset($this->vars['L_MOVE_DOWN']) ? $this->vars['L_MOVE_DOWN'] : $this->lang('L_MOVE_DOWN'); ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATRIGHT']) ? $cathead_item['CLASS_CATRIGHT'] : ''; ?>"  align="center" valign="middle"><span class="gen">&nbsp;</span></td>
</tr>
<tr>
	<?php

$inc_count = ( isset($cathead_item['inc.']) ) ? sizeof($cathead_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$cathead_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="row3" colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>"><table cellpadding="2" cellspacing="0" border="0" width="100%"><tr><td><?php echo isset($cathead_item['ICON_IMG']) ? $cathead_item['ICON_IMG'] : ''; ?></td><td width="100%"><span class="gensmall"><?php echo isset($cathead_item['CAT_DESCRIPTION']) ? $cathead_item['CAT_DESCRIPTION'] : ''; ?></span></td></tr></table></td>
	<td class="row3"><span class="gensmall">&nbsp;</span></td>
	<td class="row3"><span class="gensmall">&nbsp;</span></td>
	<td class="row3"><span class="gensmall">&nbsp;</span></td>
	<td class="row3"><span class="gensmall">&nbsp;</span></td>
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
	<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="row2" colspan="<?php echo isset($forumrow_item['INC_SPAN']) ? $forumrow_item['INC_SPAN'] : ''; ?>" <?php echo isset($forumrow_item['WIDTH']) ? $forumrow_item['WIDTH'] : ''; ?>><table cellpadding="0" cellspacing="0" width="100%"><tr><td><?php echo isset($forumrow_item['LINK_IMG']) ? $forumrow_item['LINK_IMG'] : ''; ?></td><td><?php echo isset($forumrow_item['ICON_IMG']) ? $forumrow_item['ICON_IMG'] : ''; ?></td><td width="100%"><span class="gen"><a href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></a></span><br /><span class="gensmall"><?php echo isset($forumrow_item['FORUM_DESC']) ? $forumrow_item['FORUM_DESC'] : ''; ?></span></td></tr></table></td>
	<td class="row1" align="center" valign="middle"><span class="gen"><?php echo isset($forumrow_item['NUM_TOPICS']) ? $forumrow_item['NUM_TOPICS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle"><span class="gen"><?php echo isset($forumrow_item['NUM_POSTS']) ? $forumrow_item['NUM_POSTS'] : ''; ?></span></td>
	<td class="row1" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($forumrow_item['U_FORUM_EDIT']) ? $forumrow_item['U_FORUM_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></span></td>
	<td class="row2" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($forumrow_item['U_FORUM_DELETE']) ? $forumrow_item['U_FORUM_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></span></td>
	<td class="row1" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($forumrow_item['U_FORUM_MOVE_UP']) ? $forumrow_item['U_FORUM_MOVE_UP'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_UP']) ? $this->vars['L_MOVE_UP'] : $this->lang('L_MOVE_UP'); ?></a> <br /> <a href="<?php echo isset($forumrow_item['U_FORUM_MOVE_DOWN']) ? $forumrow_item['U_FORUM_MOVE_DOWN'] : ''; ?>"><?php echo isset($this->vars['L_MOVE_DOWN']) ? $this->vars['L_MOVE_DOWN'] : $this->lang('L_MOVE_DOWN'); ?></a></span></td>
	<td class="row2" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($forumrow_item['U_FORUM_RESYNC']) ? $forumrow_item['U_FORUM_RESYNC'] : ''; ?>"><?php echo isset($this->vars['L_RESYNC']) ? $this->vars['L_RESYNC'] : $this->lang('L_RESYNC'); ?></a></span></td>
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
	<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td colspan="<?php echo isset($catfoot_item['INC_SPAN_ALL']) ? $catfoot_item['INC_SPAN_ALL'] : ''; ?>" class="row2" nowrap="nowrap">
		<img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" />
		<input class="post" type="text" name="<?php echo isset($catfoot_item['S_ADD_NAME']) ? $catfoot_item['S_ADD_NAME'] : ''; ?>" />&nbsp;
		<input type="submit" class="liteoption"  name="<?php echo isset($catfoot_item['S_ADD_FORUM_SUBMIT']) ? $catfoot_item['S_ADD_FORUM_SUBMIT'] : ''; ?>" value="<?php echo isset($this->vars['L_CREATE_FORUM']) ? $this->vars['L_CREATE_FORUM'] : $this->lang('L_CREATE_FORUM'); ?>" />
		<input type="submit" class="liteoption"  name="<?php echo isset($catfoot_item['S_ADD_CAT_SUBMIT']) ? $catfoot_item['S_ADD_CAT_SUBMIT'] : ''; ?>" value="<?php echo isset($this->vars['L_CREATE_CATEGORY']) ? $this->vars['L_CREATE_CATEGORY'] : $this->lang('L_CREATE_CATEGORY'); ?>" />
	</td>
</tr>
<tr>
	<?php

$inc_count = ( isset($catfoot_item['inc.']) ) ? sizeof($catfoot_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$catfoot_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
	<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td colspan="<?php echo isset($catfoot_item['INC_SPAN_ALL']) ? $catfoot_item['INC_SPAN_ALL'] : ''; ?>" height="1" class="spacerow"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
</tr>
<?php

} // END catfoot

if(isset($catfoot_item)) { unset($catfoot_item); } 

?>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
<tr>
	<td colspan="<?php echo isset($this->vars['INC_SPAN_ALL']) ? $this->vars['INC_SPAN_ALL'] : $this->lang('INC_SPAN_ALL'); ?>" class="cat">
		<?php

$switch_board_footer_count = ( isset($this->_tpldata['switch_board_footer.']) ) ?  sizeof($this->_tpldata['switch_board_footer.']) : 0;
for ($switch_board_footer_i = 0; $switch_board_footer_i < $switch_board_footer_count; $switch_board_footer_i++)
{
 $switch_board_footer_item = &$this->_tpldata['switch_board_footer.'][$switch_board_footer_i];
 $switch_board_footer_item['S_ROW_COUNT'] = $switch_board_footer_i;
 $switch_board_footer_item['S_NUM_ROWS'] = $switch_board_footer_count;

?>
		<input class="post" type="text" name="name[0]" />&nbsp;
		<?php

$sub_forum_attach_count = ( isset($switch_board_footer_item['sub_forum_attach.']) ) ? sizeof($switch_board_footer_item['sub_forum_attach.']) : 0;
for ($sub_forum_attach_i = 0; $sub_forum_attach_i < $sub_forum_attach_count; $sub_forum_attach_i++)
{
 $sub_forum_attach_item = &$switch_board_footer_item['sub_forum_attach.'][$sub_forum_attach_i];
 $sub_forum_attach_item['S_ROW_COUNT'] = $sub_forum_attach_i;
 $sub_forum_attach_item['S_NUM_ROWS'] = $sub_forum_attach_count;

?>
		<input type="submit" class="liteoption"  name="addforum[0]" value="<?php echo isset($this->vars['L_CREATE_FORUM']) ? $this->vars['L_CREATE_FORUM'] : $this->lang('L_CREATE_FORUM'); ?>" />
		<?php

} // END sub_forum_attach

if(isset($sub_forum_attach_item)) { unset($sub_forum_attach_item); } 

?>
		<input type="submit" class="liteoption"  name="addcategory[0]" value="<?php echo isset($this->vars['L_CREATE_CATEGORY']) ? $this->vars['L_CREATE_CATEGORY'] : $this->lang('L_CREATE_CATEGORY'); ?>" />
		<?php

} // END switch_board_footer

if(isset($switch_board_footer_item)) { unset($switch_board_footer_item); } 

?>
	</td>
</tr>

</table>
</form>
