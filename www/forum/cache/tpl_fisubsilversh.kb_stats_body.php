<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 12:20:22 -0400 (time=1436199622)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav">
		  <a href="<?php echo isset($this->vars['U_PORTAL']) ? $this->vars['U_PORTAL'] : $this->lang('U_PORTAL'); ?>" class="nav"><?php echo isset($this->vars['L_PORTAL']) ? $this->vars['L_PORTAL'] : $this->lang('L_PORTAL'); ?></a> -> <a href="<?php echo isset($this->vars['U_KB']) ? $this->vars['U_KB'] : $this->lang('U_KB'); ?>" class="nav"><?php echo isset($this->vars['L_KB']) ? $this->vars['L_KB'] : $this->lang('L_KB'); ?></a> <?php echo isset($this->vars['PATH']) ? $this->vars['PATH'] : $this->lang('PATH'); ?>
		</td>
	</tr>
</table>

<?php

$switch_sub_cats_count = ( isset($this->_tpldata['switch_sub_cats.']) ) ?  sizeof($this->_tpldata['switch_sub_cats.']) : 0;
for ($switch_sub_cats_i = 0; $switch_sub_cats_i < $switch_sub_cats_count; $switch_sub_cats_i++)
{
 $switch_sub_cats_item = &$this->_tpldata['switch_sub_cats.'][$switch_sub_cats_i];
 $switch_sub_cats_item['S_ROW_COUNT'] = $switch_sub_cats_i;
 $switch_sub_cats_item['S_NUM_ROWS'] = $switch_sub_cats_count;

?>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr> 
  	   <th class="thCornerL" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?>&nbsp;</th>
	   <th width="50" class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLES']) ? $this->vars['L_ARTICLES'] : $this->lang('L_ARTICLES'); ?>&nbsp;</th>
  </tr>
  <?php

$catrow_count = ( isset($switch_sub_cats_item['catrow.']) ) ? sizeof($switch_sub_cats_item['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$switch_sub_cats_item['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
  <tr> 
  	   <td class="row1" height="50"><span class="forumlink"><?php echo isset($catrow_item['CATEGORY']) ? $catrow_item['CATEGORY'] : ''; ?></span><br /><span class="genmed"><?php echo isset($catrow_item['CAT_DESCRIPTION']) ? $catrow_item['CAT_DESCRIPTION'] : ''; ?></span></td>
	   <td class="row2" align="center" valign="middle"><span class="genmed"><?php echo isset($catrow_item['CAT_ARTICLES']) ? $catrow_item['CAT_ARTICLES'] : ''; ?></span></td>
  </tr>
  <?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
  <tr>
  	  <td class="cat" colspan="2">&nbsp;</td>
  </tr>
</table>
<br />
<?php

} // END switch_sub_cats

if(isset($switch_sub_cats_item)) { unset($switch_sub_cats_item); } 

?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr> 
  	   <th class="thCornerL" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLE']) ? $this->vars['L_ARTICLE'] : $this->lang('L_ARTICLE'); ?>&nbsp;</th>
  	   <th class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_CAT']) ? $this->vars['L_CAT'] : $this->lang('L_CAT'); ?>&nbsp;</th>
  	   <th class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLE_TYPE']) ? $this->vars['L_ARTICLE_TYPE'] : $this->lang('L_ARTICLE_TYPE'); ?>&nbsp;</th>
  	   <th class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLE_AUTHOR']) ? $this->vars['L_ARTICLE_AUTHOR'] : $this->lang('L_ARTICLE_AUTHOR'); ?>&nbsp;</th>
  	   <th class="thTop nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLE_DATE']) ? $this->vars['L_ARTICLE_DATE'] : $this->lang('L_ARTICLE_DATE'); ?>&nbsp;</th>
	   <th class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_VIEWS']) ? $this->vars['L_VIEWS'] : $this->lang('L_VIEWS'); ?>&nbsp;</th>
  </tr>
  <?php

$articlerow_count = ( isset($this->_tpldata['articlerow.']) ) ?  sizeof($this->_tpldata['articlerow.']) : 0;
for ($articlerow_i = 0; $articlerow_i < $articlerow_count; $articlerow_i++)
{
 $articlerow_item = &$this->_tpldata['articlerow.'][$articlerow_i];
 $articlerow_item['S_ROW_COUNT'] = $articlerow_i;
 $articlerow_item['S_NUM_ROWS'] = $articlerow_count;

?>
  <tr> 
  	   <td class="row1" height="50"><?php echo isset($articlerow_item['ARTICLE']) ? $articlerow_item['ARTICLE'] : ''; ?><br /><span class="genmed"><?php echo isset($articlerow_item['ARTICLE_DESCRIPTION']) ? $articlerow_item['ARTICLE_DESCRIPTION'] : ''; ?> <br /><?php echo isset($articlerow_item['U_APPROVE']) ? $articlerow_item['U_APPROVE'] : ''; ?> <?php echo isset($articlerow_item['U_DELETE']) ? $articlerow_item['U_DELETE'] : ''; ?></span></td>
	   <td class="row1" align="center" valign="middle">&nbsp;<span class="genmed"><?php echo isset($articlerow_item['CATEGORY']) ? $articlerow_item['CATEGORY'] : ''; ?></span>&nbsp;</td>
	   <td class="row1" align="center" valign="middle">&nbsp;<span class="genmed"><?php echo isset($articlerow_item['ARTICLE_TYPE']) ? $articlerow_item['ARTICLE_TYPE'] : ''; ?></span>&nbsp;</td>
	   <td class="row2" align="center" valign="middle"><span class="genmed"><?php echo isset($articlerow_item['ARTICLE_AUTHOR']) ? $articlerow_item['ARTICLE_AUTHOR'] : ''; ?></span></td>
	   <td class="row1" align="center" valign="middle" nowrap="nowrap"><span class="gensmall"><?php echo isset($articlerow_item['ARTICLE_DATE']) ? $articlerow_item['ARTICLE_DATE'] : ''; ?></span></td>
	   <td class="row2" align="center" valign="middle"><span class="genmed"><?php echo isset($articlerow_item['ART_VIEWS']) ? $articlerow_item['ART_VIEWS'] : ''; ?></span></td>
  </tr>
  <?php

} // END articlerow

if(isset($articlerow_item)) { unset($articlerow_item); } 

?>
  <?php

$no_articles_count = ( isset($this->_tpldata['no_articles.']) ) ?  sizeof($this->_tpldata['no_articles.']) : 0;
for ($no_articles_i = 0; $no_articles_i < $no_articles_count; $no_articles_i++)
{
 $no_articles_item = &$this->_tpldata['no_articles.'][$no_articles_i];
 $no_articles_item['S_ROW_COUNT'] = $no_articles_i;
 $no_articles_item['S_NUM_ROWS'] = $no_articles_count;

?>
  <tr> 
  	   <td class="row1" align = "center" colspan = "6" height="50"><span class="genmed"><?php echo isset($no_articles_item['COMMENT']) ? $no_articles_item['COMMENT'] : ''; ?></span></td>
  </tr>
  <?php

} // END no_articles

if(isset($no_articles_item)) { unset($no_articles_item); } 

?>
  <tr>
  	  <td class="cat" colspan="6">&nbsp;</td>
  </tr>
</table>
<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right"><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
