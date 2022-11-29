<?php

// eXtreme Styles mod cache. Generated on Mon, 12 Dec 2011 06:04:04 -0500 (time=1323687844)

?><table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td width="100%"><a class="maintitle" href="<?php echo isset($this->vars['U_MEMBERLIST_GALLERY']) ? $this->vars['U_MEMBERLIST_GALLERY'] : $this->lang('U_MEMBERLIST_GALLERY'); ?>"><?php echo isset($this->vars['L_PICTURES_OF_USER']) ? $this->vars['L_PICTURES_OF_USER'] : $this->lang('L_PICTURES_OF_USER'); ?></a><br />
		<span class="genmed"><?php echo isset($this->vars['L_MEMBERLIST_GALLERY_EXPLAIN']) ? $this->vars['L_MEMBERLIST_GALLERY_EXPLAIN'] : $this->lang('L_MEMBERLIST_GALLERY_EXPLAIN'); ?></span></td>
  	<?php

$switch_show_album_search_count = ( isset($this->_tpldata['switch_show_album_search.']) ) ?  sizeof($this->_tpldata['switch_show_album_search.']) : 0;
for ($switch_show_album_search_i = 0; $switch_show_album_search_i < $switch_show_album_search_count; $switch_show_album_search_i++)
{
 $switch_show_album_search_item = &$this->_tpldata['switch_show_album_search.'][$switch_show_album_search_i];
 $switch_show_album_search_item['S_ROW_COUNT'] = $switch_show_album_search_i;
 $switch_show_album_search_item['S_NUM_ROWS'] = $switch_show_album_search_count;

?>	
	<td align="right" valign="bottom" nowrap="nowrap">
  		<form name="search" action="album_search.php">
			<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_FOR']) ? $this->vars['L_SEARCH_FOR'] : $this->lang('L_SEARCH_FOR'); ?>: &nbsp;&nbsp;
			<select name="mode">
				<option value="user"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
				<option value="name"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></option>
				<option value="desc"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></option>
			</select>
			&nbsp;&nbsp;<?php echo isset($this->vars['L_THAT_CONTAINS']) ? $this->vars['L_THAT_CONTAINS'] : $this->lang('L_THAT_CONTAINS'); ?>:&nbsp;&nbsp; <input type="text" name="search" maxlength="20">&nbsp;&nbsp;<input type="submit" value="Go"></span>
		</form>
	</td>
  	<?php

} // END switch_show_album_search

if(isset($switch_show_album_search_item)) { unset($switch_show_album_search_item); } 

?>	
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
  	<?php

$switch_show_all_pics_count = ( isset($this->_tpldata['switch_show_all_pics.']) ) ?  sizeof($this->_tpldata['switch_show_all_pics.']) : 0;
for ($switch_show_all_pics_i = 0; $switch_show_all_pics_i < $switch_show_all_pics_count; $switch_show_all_pics_i++)
{
 $switch_show_all_pics_item = &$this->_tpldata['switch_show_all_pics.'][$switch_show_all_pics_i];
 $switch_show_all_pics_item['S_ROW_COUNT'] = $switch_show_all_pics_i;
 $switch_show_all_pics_item['S_NUM_ROWS'] = $switch_show_all_pics_count;

?>
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_PICS']) ? $this->vars['U_SHOW_ALL_PICS'] : $this->lang('U_SHOW_ALL_PICS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_PICS_IMG']) ? $this->vars['SHOW_ALL_PICS_IMG'] : $this->lang('SHOW_ALL_PICS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_PICS']) ? $this->vars['L_SHOW_ALL_PICS'] : $this->lang('L_SHOW_ALL_PICS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_PICS']) ? $this->vars['L_SHOW_ALL_PICS'] : $this->lang('L_SHOW_ALL_PICS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_pics

if(isset($switch_show_all_pics_item)) { unset($switch_show_all_pics_item); } 

?>
  	<?php

$switch_show_all_ratings_count = ( isset($this->_tpldata['switch_show_all_ratings.']) ) ?  sizeof($this->_tpldata['switch_show_all_ratings.']) : 0;
for ($switch_show_all_ratings_i = 0; $switch_show_all_ratings_i < $switch_show_all_ratings_count; $switch_show_all_ratings_i++)
{
 $switch_show_all_ratings_item = &$this->_tpldata['switch_show_all_ratings.'][$switch_show_all_ratings_i];
 $switch_show_all_ratings_item['S_ROW_COUNT'] = $switch_show_all_ratings_i;
 $switch_show_all_ratings_item['S_NUM_ROWS'] = $switch_show_all_ratings_count;

?>	
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_RATINGS']) ? $this->vars['U_SHOW_ALL_RATINGS'] : $this->lang('U_SHOW_ALL_RATINGS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_RATINGS_IMG']) ? $this->vars['SHOW_ALL_RATINGS_IMG'] : $this->lang('SHOW_ALL_RATINGS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_RATINGS']) ? $this->vars['L_SHOW_ALL_RATINGS'] : $this->lang('L_SHOW_ALL_RATINGS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_RATINGS']) ? $this->vars['L_SHOW_ALL_RATINGS'] : $this->lang('L_SHOW_ALL_RATINGS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_ratings

if(isset($switch_show_all_ratings_item)) { unset($switch_show_all_ratings_item); } 

?>
  	<?php

$switch_show_all_comments_count = ( isset($this->_tpldata['switch_show_all_comments.']) ) ?  sizeof($this->_tpldata['switch_show_all_comments.']) : 0;
for ($switch_show_all_comments_i = 0; $switch_show_all_comments_i < $switch_show_all_comments_count; $switch_show_all_comments_i++)
{
 $switch_show_all_comments_item = &$this->_tpldata['switch_show_all_comments.'][$switch_show_all_comments_i];
 $switch_show_all_comments_item['S_ROW_COUNT'] = $switch_show_all_comments_i;
 $switch_show_all_comments_item['S_NUM_ROWS'] = $switch_show_all_comments_count;

?>	
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_COMMENTS']) ? $this->vars['U_SHOW_ALL_COMMENTS'] : $this->lang('U_SHOW_ALL_COMMENTS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_COMMENTS_IMG']) ? $this->vars['SHOW_ALL_COMMENTS_IMG'] : $this->lang('SHOW_ALL_COMMENTS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_COMMENTS']) ? $this->vars['L_SHOW_ALL_COMMENTS'] : $this->lang('L_SHOW_ALL_COMMENTS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_COMMENTS']) ? $this->vars['L_SHOW_ALL_COMMENTS'] : $this->lang('L_SHOW_ALL_COMMENTS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_comments

if(isset($switch_show_all_comments_item)) { unset($switch_show_all_comments_item); } 

?>
	<td class="nav" width="90%"><span class="nav">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> -> <a class="nav" href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a> -> <a class="nav" href="<?php echo isset($this->vars['U_MEMBERLIST_GALLERY']) ? $this->vars['U_MEMBERLIST_GALLERY'] : $this->lang('U_MEMBERLIST_GALLERY'); ?>"><?php echo isset($this->vars['L_PICTURES_OF_USER']) ? $this->vars['L_PICTURES_OF_USER'] : $this->lang('L_PICTURES_OF_USER'); ?></a></span></td>
	<td nowrap="nowrap"><span class="gensmall"><b><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></b></span></td>
  </tr>
</table>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<th class="thTop" height="25" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>"><?php echo isset($this->vars['L_PICTURES_OF_USER']) ? $this->vars['L_PICTURES_OF_USER'] : $this->lang('L_PICTURES_OF_USER'); ?></th>
  </tr>
  <?php

$no_pics_count = ( isset($this->_tpldata['no_pics.']) ) ?  sizeof($this->_tpldata['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$this->_tpldata['no_pics.'][$no_pics_i];
 $no_pics_item['S_ROW_COUNT'] = $no_pics_i;
 $no_pics_item['S_NUM_ROWS'] = $no_pics_count;

?>
  <tr>
	<td class="row1" align="center" height="50"><span class="gen"><?php echo isset($this->vars['L_NO_PICTURES_BY_USER']) ? $this->vars['L_NO_PICTURES_BY_USER'] : $this->lang('L_NO_PICTURES_BY_USER'); ?></span></td>
  </tr>
  <?php

} // END no_pics

if(isset($no_pics_item)) { unset($no_pics_item); } 

?>
  <?php

$picrow_count = ( isset($this->_tpldata['picrow.']) ) ?  sizeof($this->_tpldata['picrow.']) : 0;
for ($picrow_i = 0; $picrow_i < $picrow_count; $picrow_i++)
{
 $picrow_item = &$this->_tpldata['picrow.'][$picrow_i];
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
	<td align="center" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>" class="row1"><span class="genmed"><a href="<?php echo isset($piccol_item['U_PIC']) ? $piccol_item['U_PIC'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><img src="<?php echo isset($piccol_item['THUMBNAIL']) ? $piccol_item['THUMBNAIL'] : ''; ?>" border="0" alt="<?php echo isset($piccol_item['DESC']) ? $piccol_item['DESC'] : ''; ?>" title="<?php echo isset($piccol_item['DESC']) ? $piccol_item['DESC'] : ''; ?>" vspace="10" /></a></span></td>
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
	<?php echo isset($this->vars['L_PIC_CAT']) ? $this->vars['L_PIC_CAT'] : $this->lang('L_PIC_CAT'); ?>: <a href="<?php echo isset($pic_detail_item['U_PIC_CAT']) ? $pic_detail_item['U_PIC_CAT'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><?php echo isset($pic_detail_item['CATEGORY']) ? $pic_detail_item['CATEGORY'] : ''; ?></a><br />
	<?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($pic_detail_item['TIME']) ? $pic_detail_item['TIME'] : ''; ?><br />
	<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($pic_detail_item['VIEW']) ? $pic_detail_item['VIEW'] : ''; ?><br />
	<?php echo isset($pic_detail_item['RATING']) ? $pic_detail_item['RATING'] : ''; ?>
	<?php echo isset($pic_detail_item['COMMENTS']) ? $pic_detail_item['COMMENTS'] : ''; ?>
	<?php echo isset($pic_detail_item['IP']) ? $pic_detail_item['IP'] : ''; ?>
	<?php echo isset($pic_detail_item['DELETE']) ? $pic_detail_item['DELETE'] : ''; ?></span>
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
		<form action="<?php echo isset($this->vars['U_MEMBERLIST_GALLERY']) ? $this->vars['U_MEMBERLIST_GALLERY'] : $this->lang('U_MEMBERLIST_GALLERY'); ?>" method="post">
		<span class="gensmall"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:
		<select name="sort_method">
			<option <?php echo isset($this->vars['SORT_TIME']) ? $this->vars['SORT_TIME'] : $this->lang('SORT_TIME'); ?> value='pic_time'><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?></option>
			<option <?php echo isset($this->vars['SORT_PIC_TITLE']) ? $this->vars['SORT_PIC_TITLE'] : $this->lang('SORT_PIC_TITLE'); ?> value='pic_title'><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?></option>
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

<table width="100%" cellspacing="2" border="0" cellpadding="2">
  <tr>
  	<?php

$switch_show_all_pics_count = ( isset($this->_tpldata['switch_show_all_pics.']) ) ?  sizeof($this->_tpldata['switch_show_all_pics.']) : 0;
for ($switch_show_all_pics_i = 0; $switch_show_all_pics_i < $switch_show_all_pics_count; $switch_show_all_pics_i++)
{
 $switch_show_all_pics_item = &$this->_tpldata['switch_show_all_pics.'][$switch_show_all_pics_i];
 $switch_show_all_pics_item['S_ROW_COUNT'] = $switch_show_all_pics_i;
 $switch_show_all_pics_item['S_NUM_ROWS'] = $switch_show_all_pics_count;

?>
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_PICS']) ? $this->vars['U_SHOW_ALL_PICS'] : $this->lang('U_SHOW_ALL_PICS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_PICS_IMG']) ? $this->vars['SHOW_ALL_PICS_IMG'] : $this->lang('SHOW_ALL_PICS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_PICS']) ? $this->vars['L_SHOW_ALL_PICS'] : $this->lang('L_SHOW_ALL_PICS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_PICS']) ? $this->vars['L_SHOW_ALL_PICS'] : $this->lang('L_SHOW_ALL_PICS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_pics

if(isset($switch_show_all_pics_item)) { unset($switch_show_all_pics_item); } 

?>
  	<?php

$switch_show_all_ratings_count = ( isset($this->_tpldata['switch_show_all_ratings.']) ) ?  sizeof($this->_tpldata['switch_show_all_ratings.']) : 0;
for ($switch_show_all_ratings_i = 0; $switch_show_all_ratings_i < $switch_show_all_ratings_count; $switch_show_all_ratings_i++)
{
 $switch_show_all_ratings_item = &$this->_tpldata['switch_show_all_ratings.'][$switch_show_all_ratings_i];
 $switch_show_all_ratings_item['S_ROW_COUNT'] = $switch_show_all_ratings_i;
 $switch_show_all_ratings_item['S_NUM_ROWS'] = $switch_show_all_ratings_count;

?>	
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_RATINGS']) ? $this->vars['U_SHOW_ALL_RATINGS'] : $this->lang('U_SHOW_ALL_RATINGS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_RATINGS_IMG']) ? $this->vars['SHOW_ALL_RATINGS_IMG'] : $this->lang('SHOW_ALL_RATINGS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_RATINGS']) ? $this->vars['L_SHOW_ALL_RATINGS'] : $this->lang('L_SHOW_ALL_RATINGS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_RATINGS']) ? $this->vars['L_SHOW_ALL_RATINGS'] : $this->lang('L_SHOW_ALL_RATINGS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_ratings

if(isset($switch_show_all_ratings_item)) { unset($switch_show_all_ratings_item); } 

?>
  	<?php

$switch_show_all_comments_count = ( isset($this->_tpldata['switch_show_all_comments.']) ) ?  sizeof($this->_tpldata['switch_show_all_comments.']) : 0;
for ($switch_show_all_comments_i = 0; $switch_show_all_comments_i < $switch_show_all_comments_count; $switch_show_all_comments_i++)
{
 $switch_show_all_comments_item = &$this->_tpldata['switch_show_all_comments.'][$switch_show_all_comments_i];
 $switch_show_all_comments_item['S_ROW_COUNT'] = $switch_show_all_comments_i;
 $switch_show_all_comments_item['S_NUM_ROWS'] = $switch_show_all_comments_count;

?>	
	<td><a href="<?php echo isset($this->vars['U_SHOW_ALL_COMMENTS']) ? $this->vars['U_SHOW_ALL_COMMENTS'] : $this->lang('U_SHOW_ALL_COMMENTS'); ?>"><img src="<?php echo isset($this->vars['SHOW_ALL_COMMENTS_IMG']) ? $this->vars['SHOW_ALL_COMMENTS_IMG'] : $this->lang('SHOW_ALL_COMMENTS_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_SHOW_ALL_COMMENTS']) ? $this->vars['L_SHOW_ALL_COMMENTS'] : $this->lang('L_SHOW_ALL_COMMENTS'); ?>" title="<?php echo isset($this->vars['L_SHOW_ALL_COMMENTS']) ? $this->vars['L_SHOW_ALL_COMMENTS'] : $this->lang('L_SHOW_ALL_COMMENTS'); ?>" /></a></td>	
  	<?php

} // END switch_show_all_comments

if(isset($switch_show_all_comments_item)) { unset($switch_show_all_comments_item); } 

?>  
	<td width="100%"><span class="nav">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> -> <a class="nav" href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a> -> <a class="nav" href="<?php echo isset($this->vars['U_MEMBERLIST_GALLERY']) ? $this->vars['U_MEMBERLIST_GALLERY'] : $this->lang('U_MEMBERLIST_GALLERY'); ?>"><?php echo isset($this->vars['L_PICTURES_OF_USER']) ? $this->vars['L_PICTURES_OF_USER'] : $this->lang('L_PICTURES_OF_USER'); ?></a></span></td>
	<td align="right" nowrap="nowrap"><span class="gensmall"><b><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></b></span><br /><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
  </tr>
  <tr>
	<td colspan="4" align="right"><span class="gensmall"><b><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></b></span></td>
  </tr>
</table>
</form>

<br />

<div align="center" style="font-family: Verdana; font-size: 10px; letter-spacing: -1px">Powered by Photo Album Addon <?php echo isset($this->vars['ALBUM_VERSION']) ? $this->vars['ALBUM_VERSION'] : $this->lang('ALBUM_VERSION'); ?> &copy; 2002-2003 <a href="http://smartor.is-root.com" target="_blank">Smartor</a></div>