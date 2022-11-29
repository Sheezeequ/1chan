<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:39:19 -0500 (time=1323527959)

?><table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td><a class="maintitle" href="<?php echo isset($this->vars['U_VIEW_CAT']) ? $this->vars['U_VIEW_CAT'] : $this->lang('U_VIEW_CAT'); ?>"><?php echo isset($this->vars['CAT_TITLE']) ? $this->vars['CAT_TITLE'] : $this->lang('CAT_TITLE'); ?></a><br />
		<span class="gensmall"><b><?php echo isset($this->vars['L_MODERATORS']) ? $this->vars['L_MODERATORS'] : $this->lang('L_MODERATORS'); ?>: <?php echo isset($this->vars['MODERATORS']) ? $this->vars['MODERATORS'] : $this->lang('MODERATORS'); ?></b></span>
		<!-- Album Category Hierarchy : begin -->
		<?php

$personal_gallery_header_count = ( isset($this->_tpldata['personal_gallery_header.']) ) ?  sizeof($this->_tpldata['personal_gallery_header.']) : 0;
for ($personal_gallery_header_i = 0; $personal_gallery_header_i < $personal_gallery_header_count; $personal_gallery_header_i++)
{
 $personal_gallery_header_item = &$this->_tpldata['personal_gallery_header.'][$personal_gallery_header_i];
 $personal_gallery_header_item['S_ROW_COUNT'] = $personal_gallery_header_i;
 $personal_gallery_header_item['S_NUM_ROWS'] = $personal_gallery_header_count;

?>
		<br><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_GALLERY_EXPLAIN']) ? $this->vars['L_PERSONAL_GALLERY_EXPLAIN'] : $this->lang('L_PERSONAL_GALLERY_EXPLAIN'); ?></span>
		<?php

} // END personal_gallery_header

if(isset($personal_gallery_header_item)) { unset($personal_gallery_header_item); } 

?>
		<!-- Album Category Hierarchy : end -->
	</td>

   
   <td align="right">
  		<form name="search" action="album_search.php">
			<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_FOR']) ? $this->vars['L_SEARCH_FOR'] : $this->lang('L_SEARCH_FOR'); ?>: &nbsp;&nbsp;
			<select name="mode">
				<option value="user"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
				<option value="name"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></option>
				<option value="desc"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></option>
			</select>
			&nbsp;&nbsp;<?php echo isset($this->vars['L_THAT_CONTAINS']) ? $this->vars['L_THAT_CONTAINS'] : $this->lang('L_THAT_CONTAINS'); ?>:&nbsp;&nbsp; <input type="text" name="search" maxlength="20">&nbsp;&nbsp;<input type="submit" value="Go"></span>
		</form>
		
		<span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span>
  </td>
 </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
<!-- Album Category Hierarchy : begin -->  
	<?php

$enable_picture_upload_count = ( isset($this->_tpldata['enable_picture_upload.']) ) ?  sizeof($this->_tpldata['enable_picture_upload.']) : 0;
for ($enable_picture_upload_i = 0; $enable_picture_upload_i < $enable_picture_upload_count; $enable_picture_upload_i++)
{
 $enable_picture_upload_item = &$this->_tpldata['enable_picture_upload.'][$enable_picture_upload_i];
 $enable_picture_upload_item['S_ROW_COUNT'] = $enable_picture_upload_i;
 $enable_picture_upload_item['S_NUM_ROWS'] = $enable_picture_upload_count;

?>
	<td><a href="<?php echo isset($this->vars['U_UPLOAD_PIC']) ? $this->vars['U_UPLOAD_PIC'] : $this->lang('U_UPLOAD_PIC'); ?>"><img src="<?php echo isset($this->vars['UPLOAD_PIC_IMG']) ? $this->vars['UPLOAD_PIC_IMG'] : $this->lang('UPLOAD_PIC_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_UPLOAD_PIC']) ? $this->vars['L_UPLOAD_PIC'] : $this->lang('L_UPLOAD_PIC'); ?>" title="<?php echo isset($this->vars['L_UPLOAD_PIC']) ? $this->vars['L_UPLOAD_PIC'] : $this->lang('L_UPLOAD_PIC'); ?>" /></a></td>
	<?php

} // END enable_picture_upload

if(isset($enable_picture_upload_item)) { unset($enable_picture_upload_item); } 

?>
	<?php

$enable_view_toggle_count = ( isset($this->_tpldata['enable_view_toggle.']) ) ?  sizeof($this->_tpldata['enable_view_toggle.']) : 0;
for ($enable_view_toggle_i = 0; $enable_view_toggle_i < $enable_view_toggle_count; $enable_view_toggle_i++)
{
 $enable_view_toggle_item = &$this->_tpldata['enable_view_toggle.'][$enable_view_toggle_i];
 $enable_view_toggle_item['S_ROW_COUNT'] = $enable_view_toggle_i;
 $enable_view_toggle_item['S_NUM_ROWS'] = $enable_view_toggle_count;

?>
	<td><a href="<?php echo isset($this->vars['U_TOGGLE_VIEW_ALL']) ? $this->vars['U_TOGGLE_VIEW_ALL'] : $this->lang('U_TOGGLE_VIEW_ALL'); ?>"><img src="<?php echo isset($this->vars['TOGGLE_VIEW_ALL_IMG']) ? $this->vars['TOGGLE_VIEW_ALL_IMG'] : $this->lang('TOGGLE_VIEW_ALL_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>" title="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>" /></a></td>
	<?php

} // END enable_view_toggle

if(isset($enable_view_toggle_item)) { unset($enable_view_toggle_item); } 

?>	
	<td class="nav" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> <?php echo isset($this->vars['ALBUM_NAVIGATION_ARROW']) ? $this->vars['ALBUM_NAVIGATION_ARROW'] : $this->lang('ALBUM_NAVIGATION_ARROW'); ?> <a href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>" class="nav"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<!-- Album Category Hierarchy : end -->
  </tr>
</table>
<!-- Album Category Hierarchy : begin -->
<?php echo isset($this->vars['ALBUM_BOARD_INDEX']) ? $this->vars['ALBUM_BOARD_INDEX'] : $this->lang('ALBUM_BOARD_INDEX'); ?>    
<!-- Album Category Hierarchy : end -->
<?php

$recent_pics_block_count = ( isset($this->_tpldata['recent_pics_block.']) ) ?  sizeof($this->_tpldata['recent_pics_block.']) : 0;
for ($recent_pics_block_i = 0; $recent_pics_block_i < $recent_pics_block_count; $recent_pics_block_i++)
{
 $recent_pics_block_item = &$this->_tpldata['recent_pics_block.'][$recent_pics_block_i];
 $recent_pics_block_item['S_ROW_COUNT'] = $recent_pics_block_i;
 $recent_pics_block_item['S_NUM_ROWS'] = $recent_pics_block_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<th class="thTop" height="25" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" nowrap="nowrap"><?php echo isset($this->vars['L_RECENT_PUBLIC_PICS']) ? $this->vars['L_RECENT_PUBLIC_PICS'] : $this->lang('L_RECENT_PUBLIC_PICS'); ?></th>
  </tr>
  <?php

$no_pics_count = ( isset($recent_pics_block_item['no_pics.']) ) ? sizeof($recent_pics_block_item['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$recent_pics_block_item['no_pics.'][$no_pics_i];
 $no_pics_item['S_ROW_COUNT'] = $no_pics_i;
 $no_pics_item['S_NUM_ROWS'] = $no_pics_count;

?>
  <tr>
	<td class="row1" align="center" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" height="50"><span class="gen"><?php echo isset($this->vars['L_NO_PICS']) ? $this->vars['L_NO_PICS'] : $this->lang('L_NO_PICS'); ?></span></td>
  </tr>
  <?php

} // END no_pics

if(isset($no_pics_item)) { unset($no_pics_item); } 

?>
  <?php

$recent_pics_count = ( isset($recent_pics_block_item['recent_pics.']) ) ? sizeof($recent_pics_block_item['recent_pics.']) : 0;
for ($recent_pics_i = 0; $recent_pics_i < $recent_pics_count; $recent_pics_i++)
{
 $recent_pics_item = &$recent_pics_block_item['recent_pics.'][$recent_pics_i];
 $recent_pics_item['S_ROW_COUNT'] = $recent_pics_i;
 $recent_pics_item['S_NUM_ROWS'] = $recent_pics_count;

?>
  <tr>
  <?php

$recent_col_count = ( isset($recent_pics_item['recent_col.']) ) ? sizeof($recent_pics_item['recent_col.']) : 0;
for ($recent_col_i = 0; $recent_col_i < $recent_col_count; $recent_col_i++)
{
 $recent_col_item = &$recent_pics_item['recent_col.'][$recent_col_i];
 $recent_col_item['S_ROW_COUNT'] = $recent_col_i;
 $recent_col_item['S_NUM_ROWS'] = $recent_col_count;

?>
	<td class="row1" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>" align="center"><a href="<?php echo isset($recent_col_item['U_PIC']) ? $recent_col_item['U_PIC'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><img src="<?php echo isset($recent_col_item['THUMBNAIL']) ? $recent_col_item['THUMBNAIL'] : ''; ?>" border="0" alt="<?php echo isset($recent_col_item['DESC']) ? $recent_col_item['DESC'] : ''; ?>" title="<?php echo isset($recent_col_item['DESC']) ? $recent_col_item['DESC'] : ''; ?>" vspace="10" /></a></td>
  <?php

} // END recent_col

if(isset($recent_col_item)) { unset($recent_col_item); } 

?>
  </tr>
  <tr>
  <?php

$recent_detail_count = ( isset($recent_pics_item['recent_detail.']) ) ? sizeof($recent_pics_item['recent_detail.']) : 0;
for ($recent_detail_i = 0; $recent_detail_i < $recent_detail_count; $recent_detail_i++)
{
 $recent_detail_item = &$recent_pics_item['recent_detail.'][$recent_detail_i];
 $recent_detail_item['S_ROW_COUNT'] = $recent_detail_i;
 $recent_detail_item['S_NUM_ROWS'] = $recent_detail_count;

?>
    <td class="row2"><span class="gensmall"><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <?php echo isset($recent_detail_item['TITLE']) ? $recent_detail_item['TITLE'] : ''; ?><br />
  	<?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?>: <?php echo isset($recent_detail_item['POSTER']) ? $recent_detail_item['POSTER'] : ''; ?><br /><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($recent_detail_item['TIME']) ? $recent_detail_item['TIME'] : ''; ?><br />
  	<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($recent_detail_item['VIEW']) ? $recent_detail_item['VIEW'] : ''; ?><br /><?php echo isset($recent_detail_item['RATING']) ? $recent_detail_item['RATING'] : ''; ?><?php echo isset($recent_detail_item['IP']) ? $recent_detail_item['IP'] : ''; ?></span>
	</td>
  <?php

} // END recent_detail

if(isset($recent_detail_item)) { unset($recent_detail_item); } 

?>
  </tr>
  <?php

} // END recent_pics

if(isset($recent_pics_item)) { unset($recent_pics_item); } 

?>
</table>
<p />
<?php

} // END recent_pics_block

if(isset($recent_pics_block_item)) { unset($recent_pics_block_item); } 

?>
<?php

$index_pics_block_count = ( isset($this->_tpldata['index_pics_block.']) ) ?  sizeof($this->_tpldata['index_pics_block.']) : 0;
for ($index_pics_block_i = 0; $index_pics_block_i < $index_pics_block_count; $index_pics_block_i++)
{
 $index_pics_block_item = &$this->_tpldata['index_pics_block.'][$index_pics_block_i];
 $index_pics_block_item['S_ROW_COUNT'] = $index_pics_block_i;
 $index_pics_block_item['S_NUM_ROWS'] = $index_pics_block_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<th class="thTop" height="25" align="center" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" nowrap="nowrap"><?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?>
  <?php

$enable_gallery_title_count = ( isset($index_pics_block_item['enable_gallery_title.']) ) ? sizeof($index_pics_block_item['enable_gallery_title.']) : 0;
for ($enable_gallery_title_i = 0; $enable_gallery_title_i < $enable_gallery_title_count; $enable_gallery_title_i++)
{
 $enable_gallery_title_item = &$index_pics_block_item['enable_gallery_title.'][$enable_gallery_title_i];
 $enable_gallery_title_item['S_ROW_COUNT'] = $enable_gallery_title_i;
 $enable_gallery_title_item['S_NUM_ROWS'] = $enable_gallery_title_count;

?>
	 :: <?php echo isset($this->vars['CAT_TITLE']) ? $this->vars['CAT_TITLE'] : $this->lang('CAT_TITLE'); ?>
  <?php

} // END enable_gallery_title

if(isset($enable_gallery_title_item)) { unset($enable_gallery_title_item); } 

?></th>
  </tr>
  <?php

$no_pics_count = ( isset($index_pics_block_item['no_pics.']) ) ? sizeof($index_pics_block_item['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$index_pics_block_item['no_pics.'][$no_pics_i];
 $no_pics_item['S_ROW_COUNT'] = $no_pics_i;
 $no_pics_item['S_NUM_ROWS'] = $no_pics_count;

?>
  <tr>
	<td class="row5" align="center" height="50"><span class="gen"><?php echo isset($this->vars['L_NO_PICS']) ? $this->vars['L_NO_PICS'] : $this->lang('L_NO_PICS'); ?></span></td>
  </tr>
  <?php

} // END no_pics

if(isset($no_pics_item)) { unset($no_pics_item); } 

?>
  <?php

$picrow_count = ( isset($index_pics_block_item['picrow.']) ) ? sizeof($index_pics_block_item['picrow.']) : 0;
for ($picrow_i = 0; $picrow_i < $picrow_count; $picrow_i++)
{
 $picrow_item = &$index_pics_block_item['picrow.'][$picrow_i];
 $picrow_item['S_ROW_COUNT'] = $picrow_i;
 $picrow_item['S_NUM_ROWS'] = $picrow_count;

?>
  <tr>
  <?php

$piccol_count = ( isset($picrow_item['piccol.']) ) ? sizeof($picrow_item['piccol.']) : 0;
for ($piccol_i = 0; $piccol_i < $piccol_count; $piccol_i++)
{
 $piccol_item = &$picrow_item['piccol.'][$piccol_i];
 $piccol_item['S_ROW_COUNT'] = $piccol_i;
 $piccol_item['S_NUM_ROWS'] = $piccol_count;

?>
	<td align="center" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>" class="row1"><span class="genmed"><a href="<?php echo isset($piccol_item['U_PIC']) ? $piccol_item['U_PIC'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><img src="<?php echo isset($piccol_item['THUMBNAIL']) ? $piccol_item['THUMBNAIL'] : ''; ?>" border="0" alt="<?php echo isset($piccol_item['DESC']) ? $piccol_item['DESC'] : ''; ?>" title="<?php echo isset($piccol_item['DESC']) ? $piccol_item['DESC'] : ''; ?>" vspace="10" /></a><br /><?php echo isset($piccol_item['APPROVAL']) ? $piccol_item['APPROVAL'] : ''; ?></span></td>
  <?php

} // END piccol

if(isset($piccol_item)) { unset($piccol_item); } 

?>
  </tr>
  <tr>
  <?php

$pic_detail_count = ( isset($picrow_item['pic_detail.']) ) ? sizeof($picrow_item['pic_detail.']) : 0;
for ($pic_detail_i = 0; $pic_detail_i < $pic_detail_count; $pic_detail_i++)
{
 $pic_detail_item = &$picrow_item['pic_detail.'][$pic_detail_i];
 $pic_detail_item['S_ROW_COUNT'] = $pic_detail_i;
 $pic_detail_item['S_NUM_ROWS'] = $pic_detail_count;

?>
	<td class="row2"><span class="gensmall">
	<?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <?php echo isset($pic_detail_item['TITLE']) ? $pic_detail_item['TITLE'] : ''; ?><br />
    <?php

$cats_count = ( isset($pic_detail_item['cats.']) ) ? sizeof($pic_detail_item['cats.']) : 0;
for ($cats_i = 0; $cats_i < $cats_count; $cats_i++)
{
 $cats_item = &$pic_detail_item['cats.'][$cats_i];
 $cats_item['S_ROW_COUNT'] = $cats_i;
 $cats_item['S_NUM_ROWS'] = $cats_count;

?>
    <?php echo isset($this->vars['L_PIC_CAT']) ? $this->vars['L_PIC_CAT'] : $this->lang('L_PIC_CAT'); ?>: <a href="<?php echo isset($cats_item['U_PIC_CAT']) ? $cats_item['U_PIC_CAT'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><?php echo isset($cats_item['CATEGORY']) ? $cats_item['CATEGORY'] : ''; ?></a><br />
    <?php

} // END cats

if(isset($cats_item)) { unset($cats_item); } 

?>
	<?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?>: <?php echo isset($pic_detail_item['POSTER']) ? $pic_detail_item['POSTER'] : ''; ?><br />
	<?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($pic_detail_item['TIME']) ? $pic_detail_item['TIME'] : ''; ?><br />
	<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($pic_detail_item['VIEW']) ? $pic_detail_item['VIEW'] : ''; ?><br />
	<?php echo isset($pic_detail_item['RATING']) ? $pic_detail_item['RATING'] : ''; ?>
	<?php echo isset($pic_detail_item['COMMENTS']) ? $pic_detail_item['COMMENTS'] : ''; ?>
	<?php echo isset($pic_detail_item['IP']) ? $pic_detail_item['IP'] : ''; ?>
	<?php echo isset($pic_detail_item['EDIT']) ? $pic_detail_item['EDIT'] : ''; ?>  <?php echo isset($pic_detail_item['DELETE']) ? $pic_detail_item['DELETE'] : ''; ?>  <?php echo isset($pic_detail_item['LOCK']) ? $pic_detail_item['LOCK'] : ''; ?>  <?php echo isset($pic_detail_item['MOVE']) ? $pic_detail_item['MOVE'] : ''; ?></span>
	</td>
  <?php

} // END pic_detail

if(isset($pic_detail_item)) { unset($pic_detail_item); } 

?>
  </tr>
  <?php

} // END picrow

if(isset($picrow_item)) { unset($picrow_item); } 

?>
  <tr>
	<td class="cat" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" align="center" height="28">
		<form action="<?php echo isset($this->vars['S_ALBUM_ACTION']) ? $this->vars['S_ALBUM_ACTION'] : $this->lang('S_ALBUM_ACTION'); ?>" method="post">
		<span class="gensmall"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:
		<select name="sort_method">
			<option <?php echo isset($this->vars['SORT_TIME']) ? $this->vars['SORT_TIME'] : $this->lang('SORT_TIME'); ?> value='pic_time'><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?></option>
			<option <?php echo isset($this->vars['SORT_PIC_TITLE']) ? $this->vars['SORT_PIC_TITLE'] : $this->lang('SORT_PIC_TITLE'); ?> value='pic_title'><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?></option>
			<?php echo isset($this->vars['SORT_USERNAME_OPTION']) ? $this->vars['SORT_USERNAME_OPTION'] : $this->lang('SORT_USERNAME_OPTION'); ?>
			<option <?php echo isset($this->vars['SORT_VIEW']) ? $this->vars['SORT_VIEW'] : $this->lang('SORT_VIEW'); ?> value='pic_view_count'><?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?></option>
			<?php echo isset($this->vars['SORT_RATING_OPTION']) ? $this->vars['SORT_RATING_OPTION'] : $this->lang('SORT_RATING_OPTION'); ?>
			<?php echo isset($this->vars['SORT_COMMENTS_OPTION']) ? $this->vars['SORT_COMMENTS_OPTION'] : $this->lang('SORT_COMMENTS_OPTION'); ?>
			<?php echo isset($this->vars['SORT_NEW_COMMENT_OPTION']) ? $this->vars['SORT_NEW_COMMENT_OPTION'] : $this->lang('SORT_NEW_COMMENT_OPTION'); ?>
		</select>
		&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>:
		<select name="sort_order">
			<option <?php echo isset($this->vars['SORT_ASC']) ? $this->vars['SORT_ASC'] : $this->lang('SORT_ASC'); ?> value='ASC'><?php echo isset($this->vars['L_ASC']) ? $this->vars['L_ASC'] : $this->lang('L_ASC'); ?></option>
			<option <?php echo isset($this->vars['SORT_DESC']) ? $this->vars['SORT_DESC'] : $this->lang('SORT_DESC'); ?> value='DESC'><?php echo isset($this->vars['L_DESC']) ? $this->vars['L_DESC'] : $this->lang('L_DESC'); ?></option>
		</select>
		&nbsp;<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SORT']) ? $this->vars['L_SORT'] : $this->lang('L_SORT'); ?>" class="liteoption" /></span>
	</td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php

} // END index_pics_block

if(isset($index_pics_block_item)) { unset($index_pics_block_item); } 

?>
<table width="100%" cellspacing="2" border="0" cellpadding="2">
  <tr>
	<!-- Album Category Hierarchy : begin -->
	<?php

$enable_picture_upload_count = ( isset($this->_tpldata['enable_picture_upload.']) ) ?  sizeof($this->_tpldata['enable_picture_upload.']) : 0;
for ($enable_picture_upload_i = 0; $enable_picture_upload_i < $enable_picture_upload_count; $enable_picture_upload_i++)
{
 $enable_picture_upload_item = &$this->_tpldata['enable_picture_upload.'][$enable_picture_upload_i];
 $enable_picture_upload_item['S_ROW_COUNT'] = $enable_picture_upload_i;
 $enable_picture_upload_item['S_NUM_ROWS'] = $enable_picture_upload_count;

?>  
		<td><a href="<?php echo isset($this->vars['U_UPLOAD_PIC']) ? $this->vars['U_UPLOAD_PIC'] : $this->lang('U_UPLOAD_PIC'); ?>"><img src="<?php echo isset($this->vars['UPLOAD_PIC_IMG']) ? $this->vars['UPLOAD_PIC_IMG'] : $this->lang('UPLOAD_PIC_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_UPLOAD_PIC']) ? $this->vars['L_UPLOAD_PIC'] : $this->lang('L_UPLOAD_PIC'); ?>" title="<?php echo isset($this->vars['L_UPLOAD_PIC']) ? $this->vars['L_UPLOAD_PIC'] : $this->lang('L_UPLOAD_PIC'); ?>" /></a></td>
	<?php

} // END enable_picture_upload

if(isset($enable_picture_upload_item)) { unset($enable_picture_upload_item); } 

?>
	<?php

$enable_view_toggle_count = ( isset($this->_tpldata['enable_view_toggle.']) ) ?  sizeof($this->_tpldata['enable_view_toggle.']) : 0;
for ($enable_view_toggle_i = 0; $enable_view_toggle_i < $enable_view_toggle_count; $enable_view_toggle_i++)
{
 $enable_view_toggle_item = &$this->_tpldata['enable_view_toggle.'][$enable_view_toggle_i];
 $enable_view_toggle_item['S_ROW_COUNT'] = $enable_view_toggle_i;
 $enable_view_toggle_item['S_NUM_ROWS'] = $enable_view_toggle_count;

?>
	<td><a href="<?php echo isset($this->vars['U_TOGGLE_VIEW_ALL']) ? $this->vars['U_TOGGLE_VIEW_ALL'] : $this->lang('U_TOGGLE_VIEW_ALL'); ?>"><img src="<?php echo isset($this->vars['TOGGLE_VIEW_ALL_IMG']) ? $this->vars['TOGGLE_VIEW_ALL_IMG'] : $this->lang('TOGGLE_VIEW_ALL_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>" title="<?php echo isset($this->vars['L_TOGGLE_VIEW_ALL']) ? $this->vars['L_TOGGLE_VIEW_ALL'] : $this->lang('L_TOGGLE_VIEW_ALL'); ?>" /></a></td>
	<?php

} // END enable_view_toggle

if(isset($enable_view_toggle_item)) { unset($enable_view_toggle_item); } 

?>			
	<td class="nav" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> <?php echo isset($this->vars['ALBUM_NAVIGATION_ARROW']) ? $this->vars['ALBUM_NAVIGATION_ARROW'] : $this->lang('ALBUM_NAVIGATION_ARROW'); ?> <a href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>" class="nav"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<!-- Album Category Hierarchy : end -->
	<td align="right" nowrap="nowrap"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br />
		<span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
  <tr>
	<td colspan="3"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
  </tr>
</table>
</form>

<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td align="right" class="gensmall" nowrap="nowrap"><?php echo isset($this->vars['ALBUM_JUMPBOX']) ? $this->vars['ALBUM_JUMPBOX'] : $this->lang('ALBUM_JUMPBOX'); ?></td>
  </tr>
  <tr>
	<td align="right" class="gensmall"><?php echo isset($this->vars['S_AUTH_LIST']) ? $this->vars['S_AUTH_LIST'] : $this->lang('S_AUTH_LIST'); ?></td>
  </tr>
</table>

<br />

<!--
You must keep my copyright notice visible with its original content
-->
<div align="center" style="font-family: Verdana; font-size: 10px; letter-spacing: -1px">Powered by Photo Album Addon <?php echo isset($this->vars['ALBUM_VERSION']) ? $this->vars['ALBUM_VERSION'] : $this->lang('ALBUM_VERSION'); ?> &copy; 2002-2003 <a href="http://smartor.is-root.com" target="_blank">Smartor</a> with Volodymyr (CLowN) Skoryk's SP1 addon & IdleVoid's Album Category Hierarchy mod!</div>
