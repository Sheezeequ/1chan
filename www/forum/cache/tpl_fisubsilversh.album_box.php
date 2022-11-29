<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Dec 2011 11:36:55 -0500 (time=1324226215)

?><?php

$catheader_count = ( isset($this->_tpldata['catheader.']) ) ?  sizeof($this->_tpldata['catheader.']) : 0;
for ($catheader_i = 0; $catheader_i < $catheader_count; $catheader_i++)
{
 $catheader_item = &$this->_tpldata['catheader.'][$catheader_i];
 $catheader_item['S_ROW_COUNT'] = $catheader_i;
 $catheader_item['S_NUM_ROWS'] = $catheader_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
 <tr> 
	<th width="80%" class="thCornerL" height="25" nowrap="nowrap">&nbsp;<?php echo isset($catheader_item['L_CATEGORY']) ? $catheader_item['L_CATEGORY'] : ''; ?>&nbsp;</th>
	<?php

$thumb_count = ( isset($catheader_item['thumb.']) ) ? sizeof($catheader_item['thumb.']) : 0;
for ($thumb_i = 0; $thumb_i < $thumb_count; $thumb_i++)
{
 $thumb_item = &$catheader_item['thumb.'][$thumb_i];
 $thumb_item['S_ROW_COUNT'] = $thumb_i;
 $thumb_item['S_NUM_ROWS'] = $thumb_count;

?>
	<th width="5%" class="<?php echo isset($thumb_item['CLASS']) ? $thumb_item['CLASS'] : ''; ?>">&nbsp;<?php echo isset($thumb_item['L_LAST_PIC_THUMB']) ? $thumb_item['L_LAST_PIC_THUMB'] : ''; ?>&nbsp;</th>
	<?php

} // END thumb

if(isset($thumb_item)) { unset($thumb_item); } 

?>
	<?php

$total_pics_count = ( isset($catheader_item['total_pics.']) ) ? sizeof($catheader_item['total_pics.']) : 0;
for ($total_pics_i = 0; $total_pics_i < $total_pics_count; $total_pics_i++)
{
 $total_pics_item = &$catheader_item['total_pics.'][$total_pics_i];
 $total_pics_item['S_ROW_COUNT'] = $total_pics_i;
 $total_pics_item['S_NUM_ROWS'] = $total_pics_count;

?>	
	<th width="5%" class="<?php echo isset($total_pics_item['CLASS']) ? $total_pics_item['CLASS'] : ''; ?>">&nbsp;<?php echo isset($total_pics_item['L_TOTAL_PICS']) ? $total_pics_item['L_TOTAL_PICS'] : ''; ?>&nbsp;</th>
	<?php

} // END total_pics

if(isset($total_pics_item)) { unset($total_pics_item); } 

?>
	<?php

$total_comments_count = ( isset($catheader_item['total_comments.']) ) ? sizeof($catheader_item['total_comments.']) : 0;
for ($total_comments_i = 0; $total_comments_i < $total_comments_count; $total_comments_i++)
{
 $total_comments_item = &$catheader_item['total_comments.'][$total_comments_i];
 $total_comments_item['S_ROW_COUNT'] = $total_comments_i;
 $total_comments_item['S_NUM_ROWS'] = $total_comments_count;

?>
	<th width="5%" class="<?php echo isset($total_comments_item['CLASS']) ? $total_comments_item['CLASS'] : ''; ?>">&nbsp;<?php echo isset($total_comments_item['L_TOTAL_COMMENTS']) ? $total_comments_item['L_TOTAL_COMMENTS'] : ''; ?>&nbsp;</th>
	<?php

} // END total_comments

if(isset($total_comments_item)) { unset($total_comments_item); } 

?>
	<?php

$pics_count = ( isset($catheader_item['pics.']) ) ? sizeof($catheader_item['pics.']) : 0;
for ($pics_i = 0; $pics_i < $pics_count; $pics_i++)
{
 $pics_item = &$catheader_item['pics.'][$pics_i];
 $pics_item['S_ROW_COUNT'] = $pics_i;
 $pics_item['S_NUM_ROWS'] = $pics_count;

?>
	<th width="5%" class="<?php echo isset($pics_item['CLASS']) ? $pics_item['CLASS'] : ''; ?>">&nbsp;<?php echo isset($pics_item['L_PICS']) ? $pics_item['L_PICS'] : ''; ?>&nbsp;</th>
	<?php

} // END pics

if(isset($pics_item)) { unset($pics_item); } 

?>
	<?php

$comments_count = ( isset($catheader_item['comments.']) ) ? sizeof($catheader_item['comments.']) : 0;
for ($comments_i = 0; $comments_i < $comments_count; $comments_i++)
{
 $comments_item = &$catheader_item['comments.'][$comments_i];
 $comments_item['S_ROW_COUNT'] = $comments_i;
 $comments_item['S_NUM_ROWS'] = $comments_count;

?>
	<th width="5%" class="<?php echo isset($comments_item['CLASS']) ? $comments_item['CLASS'] : ''; ?>" nowrap="nowrap">&nbsp;<?php echo isset($comments_item['L_COMMENTS']) ? $comments_item['L_COMMENTS'] : ''; ?>&nbsp;</th>
	<?php

} // END comments

if(isset($comments_item)) { unset($comments_item); } 

?>
	<?php

$last_comment_count = ( isset($catheader_item['last_comment.']) ) ? sizeof($catheader_item['last_comment.']) : 0;
for ($last_comment_i = 0; $last_comment_i < $last_comment_count; $last_comment_i++)
{
 $last_comment_item = &$catheader_item['last_comment.'][$last_comment_i];
 $last_comment_item['S_ROW_COUNT'] = $last_comment_i;
 $last_comment_item['S_NUM_ROWS'] = $last_comment_count;

?>
	<th width="15%" class="<?php echo isset($last_comment_item['CLASS']) ? $last_comment_item['CLASS'] : ''; ?>" nowrap="nowrap">&nbsp;<?php echo isset($last_comment_item['L_LAST_COMMENT_INFO']) ? $last_comment_item['L_LAST_COMMENT_INFO'] : ''; ?>&nbsp;</th>
	<?php

} // END last_comment

if(isset($last_comment_item)) { unset($last_comment_item); } 

?>
	<?php

$last_pic_count = ( isset($catheader_item['last_pic.']) ) ? sizeof($catheader_item['last_pic.']) : 0;
for ($last_pic_i = 0; $last_pic_i < $last_pic_count; $last_pic_i++)
{
 $last_pic_item = &$catheader_item['last_pic.'][$last_pic_i];
 $last_pic_item['S_ROW_COUNT'] = $last_pic_i;
 $last_pic_item['S_NUM_ROWS'] = $last_pic_count;

?>	
	<th class="<?php echo isset($last_pic_item['CLASS']) ? $last_pic_item['CLASS'] : ''; ?>" nowrap="nowrap">&nbsp;<?php echo isset($last_pic_item['L_LAST_PIC']) ? $last_pic_item['L_LAST_PIC'] : ''; ?>&nbsp;</th>
	<?php

} // END last_pic

if(isset($last_pic_item)) { unset($last_pic_item); } 

?>
  </tr>
  <tr>
	<?php

$col_span_count = ( isset($catheader_item['col_span.']) ) ? sizeof($catheader_item['col_span.']) : 0;
for ($col_span_i = 0; $col_span_i < $col_span_count; $col_span_i++)
{
 $col_span_item = &$catheader_item['col_span.'][$col_span_i];
 $col_span_item['S_ROW_COUNT'] = $col_span_i;
 $col_span_item['S_NUM_ROWS'] = $col_span_count;

?>	
	<td class="cat" colspan="<?php echo isset($col_span_item['HEADER_COL_SPAN']) ? $col_span_item['HEADER_COL_SPAN'] : ''; ?>" height="28"><span class="cattitle"><?php echo isset($catheader_item['L_PUBLIC_CATS']) ? $catheader_item['L_PUBLIC_CATS'] : ''; ?></span></td>
	<?php

} // END col_span

if(isset($col_span_item)) { unset($col_span_item); } 

?>		
  </tr> 
<?php

} // END catheader

if(isset($catheader_item)) { unset($catheader_item); } 

?>

<?php

$catmain_count = ( isset($this->_tpldata['catmain.']) ) ?  sizeof($this->_tpldata['catmain.']) : 0;
for ($catmain_i = 0; $catmain_i < $catmain_count; $catmain_i++)
{
 $catmain_item = &$this->_tpldata['catmain.'][$catmain_i];
 $catmain_item['S_ROW_COUNT'] = $catmain_i;
 $catmain_item['S_NUM_ROWS'] = $catmain_count;

?>
	<?php

$catrow_count = ( isset($catmain_item['catrow.']) ) ? sizeof($catmain_item['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$catmain_item['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
<tr>
	<td class="row1" height="50" onMouseOver="this.style.backgroundColor='<?php echo isset($catrow_item['T_TD_COLOR1']) ? $catrow_item['T_TD_COLOR1'] : ''; ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($catrow_item['T_TR_COLOR1']) ? $catrow_item['T_TR_COLOR1'] : ''; ?>';">
		<img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="<?php echo isset($catrow_item['SPACER_WIDTH']) ? $catrow_item['SPACER_WIDTH'] : ''; ?>" height="0" /><span class="forumlink"><a href="<?php echo isset($catrow_item['U_VIEWCAT']) ? $catrow_item['U_VIEWCAT'] : ''; ?>" class="forumlink"><?php echo isset($catrow_item['CAT_TITLE']) ? $catrow_item['CAT_TITLE'] : ''; ?></a>
		<?php

$newpics_count = ( isset($catrow_item['newpics.']) ) ? sizeof($catrow_item['newpics.']) : 0;
for ($newpics_i = 0; $newpics_i < $newpics_count; $newpics_i++)
{
 $newpics_item = &$catrow_item['newpics.'][$newpics_i];
 $newpics_item['S_ROW_COUNT'] = $newpics_i;
 $newpics_item['S_NUM_ROWS'] = $newpics_count;

?>
			<img src="<?php echo isset($newpics_item['I_NEWEST_PICS']) ? $newpics_item['I_NEWEST_PICS'] : ''; ?>" alt="<?php echo isset($newpics_item['L_NEWEST_PICS']) ? $newpics_item['L_NEWEST_PICS'] : ''; ?>" title="<?php echo isset($newpics_item['L_NEWEST_PICS']) ? $newpics_item['L_NEWEST_PICS'] : ''; ?>">
		<?php

} // END newpics

if(isset($newpics_item)) { unset($newpics_item); } 

?>
		<br /></span>
		<img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="<?php echo isset($catrow_item['SPACER_WIDTH']) ? $catrow_item['SPACER_WIDTH'] : ''; ?>" height="0" /><span class="genmed"><?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?><!--<br />--></span>
		<span class="gensmall"><?php echo isset($catrow_item['L_MODERATORS']) ? $catrow_item['L_MODERATORS'] : ''; ?> <?php echo isset($catrow_item['MODERATORS']) ? $catrow_item['MODERATORS'] : ''; ?></span>
		<?php

$subcat_link_count = ( isset($catrow_item['subcat_link.']) ) ? sizeof($catrow_item['subcat_link.']) : 0;
for ($subcat_link_i = 0; $subcat_link_i < $subcat_link_count; $subcat_link_i++)
{
 $subcat_link_item = &$catrow_item['subcat_link.'][$subcat_link_i];
 $subcat_link_item['S_ROW_COUNT'] = $subcat_link_i;
 $subcat_link_item['S_NUM_ROWS'] = $subcat_link_count;

?>
		<span class="gensmall"><?php echo isset($subcat_link_item['L_LINKS']) ? $subcat_link_item['L_LINKS'] : ''; ?>: <?php echo isset($subcat_link_item['LINKS']) ? $subcat_link_item['LINKS'] : ''; ?></span>
		<?php

} // END subcat_link

if(isset($subcat_link_item)) { unset($subcat_link_item); } 

?>
	</td>
	<?php

$thumb_count = ( isset($catrow_item['thumb.']) ) ? sizeof($catrow_item['thumb.']) : 0;
for ($thumb_i = 0; $thumb_i < $thumb_count; $thumb_i++)
{
 $thumb_item = &$catrow_item['thumb.'][$thumb_i];
 $thumb_item['S_ROW_COUNT'] = $thumb_i;
 $thumb_item['S_NUM_ROWS'] = $thumb_count;

?>
	<td class="<?php echo isset($this->vars['COL0']) ? $this->vars['COL0'] : $this->lang('COL0'); ?>" align="center" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['THUMB_OVER_COLOR']) ? $this->vars['THUMB_OVER_COLOR'] : $this->lang('THUMB_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['THUMB_OUT_COLOR']) ? $this->vars['THUMB_OUT_COLOR'] : $this->lang('THUMB_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($thumb_item['LAST_PIC_URL']) ? $thumb_item['LAST_PIC_URL'] : ''; ?></span></td>
	<?php

} // END thumb

if(isset($thumb_item)) { unset($thumb_item); } 

?>	
	<?php

$total_pics_count = ( isset($catrow_item['total_pics.']) ) ? sizeof($catrow_item['total_pics.']) : 0;
for ($total_pics_i = 0; $total_pics_i < $total_pics_count; $total_pics_i++)
{
 $total_pics_item = &$catrow_item['total_pics.'][$total_pics_i];
 $total_pics_item['S_ROW_COUNT'] = $total_pics_i;
 $total_pics_item['S_NUM_ROWS'] = $total_pics_count;

?>		
	<td class="<?php echo isset($this->vars['COL1']) ? $this->vars['COL1'] : $this->lang('COL1'); ?>" align="center" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['TOTAL_PICS_OVER_COLOR']) ? $this->vars['TOTAL_PICS_OVER_COLOR'] : $this->lang('TOTAL_PICS_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['TOTAL_PICS_OUT_COLOR']) ? $this->vars['TOTAL_PICS_OUT_COLOR'] : $this->lang('TOTAL_PICS_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($total_pics_item['TOTAL_PICS']) ? $total_pics_item['TOTAL_PICS'] : ''; ?></span></td>
	<?php

} // END total_pics

if(isset($total_pics_item)) { unset($total_pics_item); } 

?>	
	<?php

$total_comments_count = ( isset($catrow_item['total_comments.']) ) ? sizeof($catrow_item['total_comments.']) : 0;
for ($total_comments_i = 0; $total_comments_i < $total_comments_count; $total_comments_i++)
{
 $total_comments_item = &$catrow_item['total_comments.'][$total_comments_i];
 $total_comments_item['S_ROW_COUNT'] = $total_comments_i;
 $total_comments_item['S_NUM_ROWS'] = $total_comments_count;

?>
	<td class="<?php echo isset($this->vars['COL2']) ? $this->vars['COL2'] : $this->lang('COL2'); ?>" align="center" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['TOTAL_COMMENTS_OVER_COLOR']) ? $this->vars['TOTAL_COMMENTS_OVER_COLOR'] : $this->lang('TOTAL_COMMENTS_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['TOTAL_COMMENTS_OUT_COLOR']) ? $this->vars['TOTAL_COMMENTS_OUT_COLOR'] : $this->lang('TOTAL_COMMENTS_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($total_comments_item['TOTAL_COMMENTS']) ? $total_comments_item['TOTAL_COMMENTS'] : ''; ?></span></td>	
	<?php

} // END total_comments

if(isset($total_comments_item)) { unset($total_comments_item); } 

?>	
	<?php

$pics_count = ( isset($catrow_item['pics.']) ) ? sizeof($catrow_item['pics.']) : 0;
for ($pics_i = 0; $pics_i < $pics_count; $pics_i++)
{
 $pics_item = &$catrow_item['pics.'][$pics_i];
 $pics_item['S_ROW_COUNT'] = $pics_i;
 $pics_item['S_NUM_ROWS'] = $pics_count;

?>	
	<td class="<?php echo isset($this->vars['COL3']) ? $this->vars['COL3'] : $this->lang('COL3'); ?>" align="center" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['PICS_OVER_COLOR']) ? $this->vars['PICS_OVER_COLOR'] : $this->lang('PICS_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['PICS_OUT_COLOR']) ? $this->vars['PICS_OUT_COLOR'] : $this->lang('PICS_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($pics_item['PICS']) ? $pics_item['PICS'] : ''; ?></span></td>
	<?php

} // END pics

if(isset($pics_item)) { unset($pics_item); } 

?>
	<?php

$comments_count = ( isset($catrow_item['comments.']) ) ? sizeof($catrow_item['comments.']) : 0;
for ($comments_i = 0; $comments_i < $comments_count; $comments_i++)
{
 $comments_item = &$catrow_item['comments.'][$comments_i];
 $comments_item['S_ROW_COUNT'] = $comments_i;
 $comments_item['S_NUM_ROWS'] = $comments_count;

?>	
	<td class="<?php echo isset($this->vars['COL4']) ? $this->vars['COL4'] : $this->lang('COL4'); ?>" align="center" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['COMMENTS_OVER_COLOR']) ? $this->vars['COMMENTS_OVER_COLOR'] : $this->lang('COMMENTS_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['COMMENTS_OUT_COLOR']) ? $this->vars['COMMENTS_OUT_COLOR'] : $this->lang('COMMENTS_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($comments_item['COMMENTS']) ? $comments_item['COMMENTS'] : ''; ?></span></td>
	<?php

} // END comments

if(isset($comments_item)) { unset($comments_item); } 

?>
	<?php

$last_comment_count = ( isset($catrow_item['last_comment.']) ) ? sizeof($catrow_item['last_comment.']) : 0;
for ($last_comment_i = 0; $last_comment_i < $last_comment_count; $last_comment_i++)
{
 $last_comment_item = &$catrow_item['last_comment.'][$last_comment_i];
 $last_comment_item['S_ROW_COUNT'] = $last_comment_i;
 $last_comment_item['S_NUM_ROWS'] = $last_comment_count;

?>	
	<td class="<?php echo isset($this->vars['COL5']) ? $this->vars['COL5'] : $this->lang('COL5'); ?>" align="center" nowrap="nowrap" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['LAST_COMMENT_OVER_COLOR']) ? $this->vars['LAST_COMMENT_OVER_COLOR'] : $this->lang('LAST_COMMENT_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['LAST_COMMENT_OUT_COLOR']) ? $this->vars['LAST_COMMENT_OUT_COLOR'] : $this->lang('LAST_COMMENT_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($last_comment_item['LAST_COMMENT_INFO']) ? $last_comment_item['LAST_COMMENT_INFO'] : ''; ?></span></td>	
	<?php

} // END last_comment

if(isset($last_comment_item)) { unset($last_comment_item); } 

?>
	<?php

$last_pic_count = ( isset($catrow_item['last_pic.']) ) ? sizeof($catrow_item['last_pic.']) : 0;
for ($last_pic_i = 0; $last_pic_i < $last_pic_count; $last_pic_i++)
{
 $last_pic_item = &$catrow_item['last_pic.'][$last_pic_i];
 $last_pic_item['S_ROW_COUNT'] = $last_pic_i;
 $last_pic_item['S_NUM_ROWS'] = $last_pic_count;

?>		
	<td class="<?php echo isset($this->vars['COL6']) ? $this->vars['COL6'] : $this->lang('COL6'); ?>" align="center" nowrap="nowrap" onMouseOver="this.style.backgroundColor='<?php echo isset($this->vars['LAST_PIC_OVER_COLOR']) ? $this->vars['LAST_PIC_OVER_COLOR'] : $this->lang('LAST_PIC_OVER_COLOR'); ?>';" onMouseOut="this.style.backgroundColor='<?php echo isset($this->vars['LAST_PIC_OUT_COLOR']) ? $this->vars['LAST_PIC_OUT_COLOR'] : $this->lang('LAST_PIC_OUT_COLOR'); ?>';"><span class="gensmall"><?php echo isset($last_pic_item['LAST_PIC_INFO']) ? $last_pic_item['LAST_PIC_INFO'] : ''; ?></span></td>
	<?php

} // END last_pic

if(isset($last_pic_item)) { unset($last_pic_item); } 

?>	
</tr>
	<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
<?php

} // END catmain

if(isset($catmain_item)) { unset($catmain_item); } 

?>	

<?php

$catfooter_count = ( isset($this->_tpldata['catfooter.']) ) ?  sizeof($this->_tpldata['catfooter.']) : 0;
for ($catfooter_i = 0; $catfooter_i < $catfooter_count; $catfooter_i++)
{
 $catfooter_item = &$this->_tpldata['catfooter.'][$catfooter_i];
 $catfooter_item['S_ROW_COUNT'] = $catfooter_i;
 $catfooter_item['S_NUM_ROWS'] = $catfooter_count;

?>
  <?php

$cat_public_footer_count = ( isset($catfooter_item['cat_public_footer.']) ) ? sizeof($catfooter_item['cat_public_footer.']) : 0;
for ($cat_public_footer_i = 0; $cat_public_footer_i < $cat_public_footer_count; $cat_public_footer_i++)
{
 $cat_public_footer_item = &$catfooter_item['cat_public_footer.'][$cat_public_footer_i];
 $cat_public_footer_item['S_ROW_COUNT'] = $cat_public_footer_i;
 $cat_public_footer_item['S_NUM_ROWS'] = $cat_public_footer_count;

?>
  <tr>
	<td class="cat" colspan="<?php echo isset($cat_public_footer_item['FOOTER_COL_SPAN']) ? $cat_public_footer_item['FOOTER_COL_SPAN'] : ''; ?>" height="28"><span class="cattitle"><a href="<?php echo isset($cat_public_footer_item['U_USERS_PERSONAL_GALLERIES']) ? $cat_public_footer_item['U_USERS_PERSONAL_GALLERIES'] : ''; ?>" class="cattitle"><?php echo isset($cat_public_footer_item['L_USERS_PERSONAL_GALLERIES']) ? $cat_public_footer_item['L_USERS_PERSONAL_GALLERIES'] : ''; ?></a>&nbsp;&raquo;&nbsp;<a href="<?php echo isset($cat_public_footer_item['U_YOUR_PERSONAL_GALLERY']) ? $cat_public_footer_item['U_YOUR_PERSONAL_GALLERY'] : ''; ?>" class="cattitle"><?php echo isset($cat_public_footer_item['L_YOUR_PERSONAL_GALLERY']) ? $cat_public_footer_item['L_YOUR_PERSONAL_GALLERY'] : ''; ?></a></span></td>
  </tr>
  <?php

} // END cat_public_footer

if(isset($cat_public_footer_item)) { unset($cat_public_footer_item); } 

?>  
 </table>
 <table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br clear="all" />
<?php

} // END catfooter

if(isset($catfooter_item)) { unset($catfooter_item); } 

?>