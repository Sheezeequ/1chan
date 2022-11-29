<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Dec 2011 11:36:55 -0500 (time=1324226215)

?><table width="100%" cellspacing="0" cellpadding="2" border="0">
  <tr>
	<td><span class="gensmall">
	<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
	<?php echo isset($this->vars['LAST_VISIT_DATE']) ? $this->vars['LAST_VISIT_DATE'] : $this->lang('LAST_VISIT_DATE'); ?><br />
	<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
	<?php echo isset($this->vars['CURRENT_TIME']) ? $this->vars['CURRENT_TIME'] : $this->lang('CURRENT_TIME'); ?><br />
	</span><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a>&nbsp;&raquo;&nbsp;<a href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>" class="nav"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a></span></td>

    <td align="right">
  		<form action="album_search.php">
			<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_FOR']) ? $this->vars['L_SEARCH_FOR'] : $this->lang('L_SEARCH_FOR'); ?>: &nbsp;&nbsp;
			<select name="mode">
				<option value="user"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
				<option value="name"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></option>
				<option value="desc"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></option>
			</select>
			&nbsp;&nbsp;<?php echo isset($this->vars['L_THAT_CONTAINS']) ? $this->vars['L_THAT_CONTAINS'] : $this->lang('L_THAT_CONTAINS'); ?>:&nbsp;&nbsp; <input type="text" name="search" maxlength="20">&nbsp;&nbsp;<input type="submit" value="Go"></span>
		</form>
  </td>
 </tr>
</table>

<!-- Album Category Hierarchy : begin -->
<?php echo isset($this->vars['ALBUM_BOARD_INDEX']) ? $this->vars['ALBUM_BOARD_INDEX'] : $this->lang('ALBUM_BOARD_INDEX'); ?>    

<table width="100%" cellspacing="2" cellpadding="1" border="0">
  <tr>
	<td align="right"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
  </tr>
</table>

<?php

$personal_picrow_count = ( isset($this->_tpldata['personal_picrow.']) ) ?  sizeof($this->_tpldata['personal_picrow.']) : 0;
for ($personal_picrow_i = 0; $personal_picrow_i < $personal_picrow_count; $personal_picrow_i++)
{
 $personal_picrow_item = &$this->_tpldata['personal_picrow.'][$personal_picrow_i];
 $personal_picrow_item['S_ROW_COUNT'] = $personal_picrow_i;
 $personal_picrow_item['S_NUM_ROWS'] = $personal_picrow_count;

?>
  <table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">  
  <tr>
  <?php

$piccol_count = ( isset($personal_picrow_item['piccol.']) ) ? sizeof($personal_picrow_item['piccol.']) : 0;
for ($piccol_i = 0; $piccol_i < $piccol_count; $piccol_i++)
{
 $piccol_item = &$personal_picrow_item['piccol.'][$piccol_i];
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

$pic_detail_count = ( isset($personal_picrow_item['pic_detail.']) ) ? sizeof($personal_picrow_item['pic_detail.']) : 0;
for ($pic_detail_i = 0; $pic_detail_i < $pic_detail_count; $pic_detail_i++)
{
 $pic_detail_item = &$personal_picrow_item['pic_detail.'][$pic_detail_i];
 $pic_detail_item['S_ROW_COUNT'] = $pic_detail_i;
 $pic_detail_item['S_NUM_ROWS'] = $pic_detail_count;

?>
	<td class="row2"><span class="gensmall">
	<?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <?php echo isset($pic_detail_item['TITLE']) ? $pic_detail_item['TITLE'] : ''; ?><br />
	<?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($pic_detail_item['TIME']) ? $pic_detail_item['TIME'] : ''; ?><br />
	<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($pic_detail_item['VIEW']) ? $pic_detail_item['VIEW'] : ''; ?><br />
	<?php echo isset($pic_detail_item['RATING']) ? $pic_detail_item['RATING'] : ''; ?>
	<?php echo isset($pic_detail_item['COMMENTS']) ? $pic_detail_item['COMMENTS'] : ''; ?>
	<?php echo isset($pic_detail_item['IP']) ? $pic_detail_item['IP'] : ''; ?>
	<?php echo isset($pic_detail_item['EDIT']) ? $pic_detail_item['EDIT'] : ''; ?>  <?php echo isset($pic_detail_item['DELETE']) ? $pic_detail_item['DELETE'] : ''; ?>  <?php echo isset($pic_detail_item['LOCK']) ? $pic_detail_item['LOCK'] : ''; ?></span>
	</td>
  <?php

} // END pic_detail

if(isset($pic_detail_item)) { unset($pic_detail_item); } 

?>
  </tr>
  </table>  
<?php

} // END personal_picrow

if(isset($personal_picrow_item)) { unset($personal_picrow_item); } 

?>
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
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<p />
<?php

} // END recent_pics_block

if(isset($recent_pics_block_item)) { unset($recent_pics_block_item); } 

?>

<?php

$highest_pics_block_count = ( isset($this->_tpldata['highest_pics_block.']) ) ?  sizeof($this->_tpldata['highest_pics_block.']) : 0;
for ($highest_pics_block_i = 0; $highest_pics_block_i < $highest_pics_block_count; $highest_pics_block_i++)
{
 $highest_pics_block_item = &$this->_tpldata['highest_pics_block.'][$highest_pics_block_i];
 $highest_pics_block_item['S_ROW_COUNT'] = $highest_pics_block_i;
 $highest_pics_block_item['S_NUM_ROWS'] = $highest_pics_block_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline"> 
  <tr> 
   <th height="25" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" nowrap="nowrap"><?php echo isset($this->vars['L_HIGHEST_RATED_PICS']) ? $this->vars['L_HIGHEST_RATED_PICS'] : $this->lang('L_HIGHEST_RATED_PICS'); ?></th> 
  </tr> 
  <?php

$no_pics_count = ( isset($highest_pics_block_item['no_pics.']) ) ? sizeof($highest_pics_block_item['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$highest_pics_block_item['no_pics.'][$no_pics_i];
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

$highest_pics_count = ( isset($highest_pics_block_item['highest_pics.']) ) ? sizeof($highest_pics_block_item['highest_pics.']) : 0;
for ($highest_pics_i = 0; $highest_pics_i < $highest_pics_count; $highest_pics_i++)
{
 $highest_pics_item = &$highest_pics_block_item['highest_pics.'][$highest_pics_i];
 $highest_pics_item['S_ROW_COUNT'] = $highest_pics_i;
 $highest_pics_item['S_NUM_ROWS'] = $highest_pics_count;

?> 
  <tr> 
  <?php

$highest_col_count = ( isset($highest_pics_item['highest_col.']) ) ? sizeof($highest_pics_item['highest_col.']) : 0;
for ($highest_col_i = 0; $highest_col_i < $highest_col_count; $highest_col_i++)
{
 $highest_col_item = &$highest_pics_item['highest_col.'][$highest_col_i];
 $highest_col_item['S_ROW_COUNT'] = $highest_col_i;
 $highest_col_item['S_NUM_ROWS'] = $highest_col_count;

?> 
   <td class="row1" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>" align="center"><a href="<?php echo isset($highest_col_item['U_PIC']) ? $highest_col_item['U_PIC'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><img src="<?php echo isset($highest_col_item['THUMBNAIL']) ? $highest_col_item['THUMBNAIL'] : ''; ?>" border="0" alt="<?php echo isset($highest_col_item['DESC']) ? $highest_col_item['DESC'] : ''; ?>" title="<?php echo isset($highest_col_item['DESC']) ? $highest_col_item['DESC'] : ''; ?>" vspace="10" /></a></td> 
  <?php

} // END highest_col

if(isset($highest_col_item)) { unset($highest_col_item); } 

?> 
  </tr> 
  <tr> 
  <?php

$highest_detail_count = ( isset($highest_pics_item['highest_detail.']) ) ? sizeof($highest_pics_item['highest_detail.']) : 0;
for ($highest_detail_i = 0; $highest_detail_i < $highest_detail_count; $highest_detail_i++)
{
 $highest_detail_item = &$highest_pics_item['highest_detail.'][$highest_detail_i];
 $highest_detail_item['S_ROW_COUNT'] = $highest_detail_i;
 $highest_detail_item['S_NUM_ROWS'] = $highest_detail_count;

?> 
    <td class="row2"><span class="gensmall"><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <?php echo isset($highest_detail_item['H_TITLE']) ? $highest_detail_item['H_TITLE'] : ''; ?><br /> 
     <?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?>: <?php echo isset($highest_detail_item['H_POSTER']) ? $highest_detail_item['H_POSTER'] : ''; ?><br /><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($highest_detail_item['H_TIME']) ? $highest_detail_item['H_TIME'] : ''; ?><br /> 
     <?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($highest_detail_item['H_VIEW']) ? $highest_detail_item['H_VIEW'] : ''; ?><br /><?php echo isset($highest_detail_item['H_RATING']) ? $highest_detail_item['H_RATING'] : ''; ?><?php echo isset($highest_detail_item['H_IP']) ? $highest_detail_item['H_IP'] : ''; ?></span> 
   </td> 
  <?php

} // END highest_detail

if(isset($highest_detail_item)) { unset($highest_detail_item); } 

?> 
  </tr> 
  <?php

} // END highest_pics

if(isset($highest_pics_item)) { unset($highest_pics_item); } 

?> 
</table> 
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<p />
<?php

} // END highest_pics_block

if(isset($highest_pics_block_item)) { unset($highest_pics_block_item); } 

?>


<?php

$random_pics_block_count = ( isset($this->_tpldata['random_pics_block.']) ) ?  sizeof($this->_tpldata['random_pics_block.']) : 0;
for ($random_pics_block_i = 0; $random_pics_block_i < $random_pics_block_count; $random_pics_block_i++)
{
 $random_pics_block_item = &$this->_tpldata['random_pics_block.'][$random_pics_block_i];
 $random_pics_block_item['S_ROW_COUNT'] = $random_pics_block_i;
 $random_pics_block_item['S_NUM_ROWS'] = $random_pics_block_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<th class="thTop" height="25" colspan="<?php echo isset($this->vars['S_COLS']) ? $this->vars['S_COLS'] : $this->lang('S_COLS'); ?>" nowrap="nowrap"><?php echo isset($this->vars['L_RANDOM_PICS']) ? $this->vars['L_RANDOM_PICS'] : $this->lang('L_RANDOM_PICS'); ?></th>
  </tr>
  <?php

$no_pics_count = ( isset($random_pics_block_item['no_pics.']) ) ? sizeof($random_pics_block_item['no_pics.']) : 0;
for ($no_pics_i = 0; $no_pics_i < $no_pics_count; $no_pics_i++)
{
 $no_pics_item = &$random_pics_block_item['no_pics.'][$no_pics_i];
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

$rand_pics_count = ( isset($random_pics_block_item['rand_pics.']) ) ? sizeof($random_pics_block_item['rand_pics.']) : 0;
for ($rand_pics_i = 0; $rand_pics_i < $rand_pics_count; $rand_pics_i++)
{
 $rand_pics_item = &$random_pics_block_item['rand_pics.'][$rand_pics_i];
 $rand_pics_item['S_ROW_COUNT'] = $rand_pics_i;
 $rand_pics_item['S_NUM_ROWS'] = $rand_pics_count;

?>
  <tr>
  <?php

$rand_col_count = ( isset($rand_pics_item['rand_col.']) ) ? sizeof($rand_pics_item['rand_col.']) : 0;
for ($rand_col_i = 0; $rand_col_i < $rand_col_count; $rand_col_i++)
{
 $rand_col_item = &$rand_pics_item['rand_col.'][$rand_col_i];
 $rand_col_item['S_ROW_COUNT'] = $rand_col_i;
 $rand_col_item['S_NUM_ROWS'] = $rand_col_count;

?>
	<td class="row1" width="<?php echo isset($this->vars['S_COL_WIDTH']) ? $this->vars['S_COL_WIDTH'] : $this->lang('S_COL_WIDTH'); ?>" align="center"><a href="<?php echo isset($rand_col_item['U_PIC']) ? $rand_col_item['U_PIC'] : ''; ?>" <?php echo isset($this->vars['TARGET_BLANK']) ? $this->vars['TARGET_BLANK'] : $this->lang('TARGET_BLANK'); ?>><img src="<?php echo isset($rand_col_item['THUMBNAIL']) ? $rand_col_item['THUMBNAIL'] : ''; ?>" border="0" alt="<?php echo isset($rand_col_item['DESC']) ? $rand_col_item['DESC'] : ''; ?>" title="<?php echo isset($rand_col_item['DESC']) ? $rand_col_item['DESC'] : ''; ?>" vspace="10" /></a></td>
  <?php

} // END rand_col

if(isset($rand_col_item)) { unset($rand_col_item); } 

?>
  </tr>
  <tr>
  <?php

$rand_detail_count = ( isset($rand_pics_item['rand_detail.']) ) ? sizeof($rand_pics_item['rand_detail.']) : 0;
for ($rand_detail_i = 0; $rand_detail_i < $rand_detail_count; $rand_detail_i++)
{
 $rand_detail_item = &$rand_pics_item['rand_detail.'][$rand_detail_i];
 $rand_detail_item['S_ROW_COUNT'] = $rand_detail_i;
 $rand_detail_item['S_NUM_ROWS'] = $rand_detail_count;

?>
    <td class="row2"><span class="gensmall"><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?>: <?php echo isset($rand_detail_item['TITLE']) ? $rand_detail_item['TITLE'] : ''; ?><br />
  	<?php echo isset($this->vars['L_POSTER']) ? $this->vars['L_POSTER'] : $this->lang('L_POSTER'); ?>: <?php echo isset($rand_detail_item['POSTER']) ? $rand_detail_item['POSTER'] : ''; ?><br /><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($rand_detail_item['TIME']) ? $rand_detail_item['TIME'] : ''; ?><br />
  	<?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?>: <?php echo isset($rand_detail_item['VIEW']) ? $rand_detail_item['VIEW'] : ''; ?><br /><?php echo isset($rand_detail_item['RATING']) ? $rand_detail_item['RATING'] : ''; ?><?php echo isset($rand_detail_item['IP']) ? $rand_detail_item['IP'] : ''; ?></span>
	</td>
  <?php

} // END rand_detail

if(isset($rand_detail_item)) { unset($rand_detail_item); } 

?>
  </tr>
  <?php

} // END rand_pics

if(isset($rand_pics_item)) { unset($rand_pics_item); } 

?>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php

} // END random_pics_block

if(isset($random_pics_block_item)) { unset($random_pics_block_item); } 

?>
<!-- Album Category Hierarchy : end -->	
	

<?php

$switch_user_logged_out_count = ( isset($this->_tpldata['switch_user_logged_out.']) ) ?  sizeof($this->_tpldata['switch_user_logged_out.']) : 0;
for ($switch_user_logged_out_i = 0; $switch_user_logged_out_i < $switch_user_logged_out_count; $switch_user_logged_out_i++)
{
 $switch_user_logged_out_item = &$this->_tpldata['switch_user_logged_out.'][$switch_user_logged_out_i];
 $switch_user_logged_out_item['S_ROW_COUNT'] = $switch_user_logged_out_i;
 $switch_user_logged_out_item['S_NUM_ROWS'] = $switch_user_logged_out_count;

?>
<form method="post" action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	  <td class="catHead" height="28"><a name="login"></a><span class="cattitle"><?php echo isset($this->vars['L_LOGIN_LOGOUT']) ? $this->vars['L_LOGIN_LOGOUT'] : $this->lang('L_LOGIN_LOGOUT'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1" align="center" height="28"><span class="gensmall"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>:
		<input class="post" type="password" name="password" size="10" />
		&nbsp;&nbsp; &nbsp;&nbsp;<?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?>
		<input class="text" type="checkbox" name="autologin" />
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="mainoption" name="login" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" />
		<input type="hidden" name="redirect" value="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>" />
		</span> </td>
	</tr>
  </table>
</form>
<?php

} // END switch_user_logged_out

if(isset($switch_user_logged_out_item)) { unset($switch_user_logged_out_item); } 

?>

<br clear="all" />

<!--
You must keep my copyright notice visible with its original content
-->
<div align="center" style="font-family: Verdana; font-size: 10px; letter-spacing: -1px">Powered by Photo Album Addon <?php echo isset($this->vars['ALBUM_VERSION']) ? $this->vars['ALBUM_VERSION'] : $this->lang('ALBUM_VERSION'); ?> &copy; 2002-2003 <a href="http://smartor.is-root.com" target="_blank">Smartor</a> with Volodymyr (CLowN) Skoryk's SP1 addon & IdleVoid's Album Category Hierarchy mod!</div>
