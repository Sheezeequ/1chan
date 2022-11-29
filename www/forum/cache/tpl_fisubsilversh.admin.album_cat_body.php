<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:18 -0500 (time=1323533658)

?><!-- Album Category Hierarchy : begin -->
<h1><?php echo isset($this->vars['L_ALBUM_CAT_TITLE']) ? $this->vars['L_ALBUM_CAT_TITLE'] : $this->lang('L_ALBUM_CAT_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_ALBUM_CAT_EXPLAIN']) ? $this->vars['L_ALBUM_CAT_EXPLAIN'] : $this->lang('L_ALBUM_CAT_EXPLAIN'); ?></p>
<form method="post" action="<?php echo isset($this->vars['S_ALBUM_ACTION']) ? $this->vars['S_ALBUM_ACTION'] : $this->lang('S_ALBUM_ACTION'); ?>">
<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td><span class="nav"><a href="<?php echo isset($this->vars['S_ALBUM_ACTION']) ? $this->vars['S_ALBUM_ACTION'] : $this->lang('S_ALBUM_ACTION'); ?>" class="nav"><?php echo isset($this->vars['L_ALBUM_INDEX']) ? $this->vars['L_ALBUM_INDEX'] : $this->lang('L_ALBUM_INDEX'); ?></a></span></td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">

<tr>
	<th class="thLeft" colspan="<?php echo isset($this->vars['HEADER_INC_SPAN']) ? $this->vars['HEADER_INC_SPAN'] : $this->lang('HEADER_INC_SPAN'); ?>" width="75%%"><?php echo isset($this->vars['L_ALBUM_TITLE']) ? $this->vars['L_ALBUM_TITLE'] : $this->lang('L_ALBUM_TITLE'); ?></th>
	<th class="thRight" colspan="3" width="25%"><?php echo isset($this->vars['L_ALBUM_ACTION']) ? $this->vars['L_ALBUM_ACTION'] : $this->lang('L_ALBUM_ACTION'); ?></th>
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
	<td class="row2" rowspan="<?php echo isset($inc_item['ROWSPAN']) ? $inc_item['ROWSPAN'] : ''; ?>" width="46">&nbsp;</td>
	<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td class="<?php echo isset($cathead_item['CLASS_CATLEFT']) ? $cathead_item['CLASS_CATLEFT'] : ''; ?>" colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>" <?php echo isset($cathead_item['WIDTH']) ? $cathead_item['WIDTH'] : ''; ?>><span class="cattitle"><b><a href="<?php echo isset($cathead_item['U_VIEWCAT']) ? $cathead_item['U_VIEWCAT'] : ''; ?>" class="cattitle"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></a></b></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_EDIT']) ? $cathead_item['U_CAT_EDIT'] : ''; ?>" class="gen"><?php echo isset($cathead_item['L_EDIT']) ? $cathead_item['L_EDIT'] : ''; ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_DELETE']) ? $cathead_item['U_CAT_DELETE'] : ''; ?>" class="gen"><?php echo isset($cathead_item['L_DELETE']) ? $cathead_item['L_DELETE'] : ''; ?></a></span></td>
	<td class="<?php echo isset($cathead_item['CLASS_CATMIDDLE']) ? $cathead_item['CLASS_CATMIDDLE'] : ''; ?>" align="center" valign="middle" nowrap="nowrap"><span class="gen"><a href="<?php echo isset($cathead_item['U_CAT_MOVE_UP']) ? $cathead_item['U_CAT_MOVE_UP'] : ''; ?>" class="gen"><?php echo isset($cathead_item['L_MOVE_UP']) ? $cathead_item['L_MOVE_UP'] : ''; ?></a> <a href="<?php echo isset($cathead_item['U_CAT_MOVE_DOWN']) ? $cathead_item['U_CAT_MOVE_DOWN'] : ''; ?>" class="gen"><?php echo isset($cathead_item['L_MOVE_DOWN']) ? $cathead_item['L_MOVE_DOWN'] : ''; ?></a></span></td>
</tr>
	<?php

} // END cathead

if(isset($cathead_item)) { unset($cathead_item); } 

?>
	<?php

$cattitle_count = ( isset($catrow_item['cattitle.']) ) ? sizeof($catrow_item['cattitle.']) : 0;
for ($cattitle_i = 0; $cattitle_i < $cattitle_count; $cattitle_i++)
{
 $cattitle_item = &$catrow_item['cattitle.'][$cattitle_i];
 $cattitle_item['S_ROW_COUNT'] = $cattitle_i;
 $cattitle_item['S_NUM_ROWS'] = $cattitle_count;

?>
<tr>
	<td class="row3" colspan="<?php echo isset($cattitle_item['INC_SPAN_ALL']) ? $cattitle_item['INC_SPAN_ALL'] : ''; ?>"><span class="gensmall"><?php echo isset($cattitle_item['CAT_DESCRIPTION']) ? $cattitle_item['CAT_DESCRIPTION'] : ''; ?></span></td>
</tr>
	<?php

} // END cattitle

if(isset($cattitle_item)) { unset($cattitle_item); } 

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
	<td class="row2" width="46">&nbsp;</td>
		<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td colspan="<?php echo isset($catfoot_item['INC_SPAN_ALL']) ? $catfoot_item['INC_SPAN_ALL'] : ''; ?>" class="row2" nowrap="nowrap">&nbsp;
		<input class="post" type="text" name="<?php echo isset($catfoot_item['S_ADD_NAME']) ? $catfoot_item['S_ADD_NAME'] : ''; ?>" />&nbsp;
		<input type="submit" <?php echo isset($this->vars['DISABLE_CREATION']) ? $this->vars['DISABLE_CREATION'] : $this->lang('DISABLE_CREATION'); ?> class="liteoption"  name="<?php echo isset($catfoot_item['S_ADD_CAT_SUBMIT']) ? $catfoot_item['S_ADD_CAT_SUBMIT'] : ''; ?>" value="<?php echo isset($this->vars['L_CREATE_CATEGORY']) ? $this->vars['L_CREATE_CATEGORY'] : $this->lang('L_CREATE_CATEGORY'); ?>" />
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
	<td class="row2" width="46">&nbsp;</td>
		<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
	<td colspan="<?php echo isset($catfoot_item['INC_SPAN_ALL']) ? $catfoot_item['INC_SPAN_ALL'] : ''; ?>" height="1" class="spacerow">&nbsp;</td>
</tr>
	<?php

} // END catfoot

if(isset($catfoot_item)) { unset($catfoot_item); } 

?>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>

<?php

$switch_board_footer_count = ( isset($this->_tpldata['switch_board_footer.']) ) ?  sizeof($this->_tpldata['switch_board_footer.']) : 0;
for ($switch_board_footer_i = 0; $switch_board_footer_i < $switch_board_footer_count; $switch_board_footer_i++)
{
 $switch_board_footer_item = &$this->_tpldata['switch_board_footer.'][$switch_board_footer_i];
 $switch_board_footer_item['S_ROW_COUNT'] = $switch_board_footer_i;
 $switch_board_footer_item['S_NUM_ROWS'] = $switch_board_footer_count;

?>
<tr>
	<td colspan="<?php echo isset($this->vars['INC_SPAN_ALL']) ? $this->vars['INC_SPAN_ALL'] : $this->lang('INC_SPAN_ALL'); ?>" class="cat">
		<input class="post" type="text" name="name[0]" />&nbsp;
		<input type="submit" <?php echo isset($this->vars['DISABLE_CREATION']) ? $this->vars['DISABLE_CREATION'] : $this->lang('DISABLE_CREATION'); ?> class="liteoption"  name="addcategory[0]" value="<?php echo isset($this->vars['L_CREATE_CATEGORY']) ? $this->vars['L_CREATE_CATEGORY'] : $this->lang('L_CREATE_CATEGORY'); ?>" />
	</td>
</tr>
<?php

} // END switch_board_footer

if(isset($switch_board_footer_item)) { unset($switch_board_footer_item); } 

?>
</table>
<input type="hidden" value="new" name="mode" />
</form>
<!-- Album Category Hierarchy : end -->