<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 12:20:22 -0400 (time=1436199622)

?><table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	   <td align="center" width="100%" valign="middle"><span class="maintitle"><?php echo isset($this->vars['L_KB_TITLE']) ? $this->vars['L_KB_TITLE'] : $this->lang('L_KB_TITLE'); ?></span>&nbsp;</td>
  </tr>
  <tr>
	   <td align="center" class="nav">
	   <?php

$switch_add_article_count = ( isset($this->_tpldata['switch_add_article.']) ) ?  sizeof($this->_tpldata['switch_add_article.']) : 0;
for ($switch_add_article_i = 0; $switch_add_article_i < $switch_add_article_count; $switch_add_article_i++)
{
 $switch_add_article_item = &$this->_tpldata['switch_add_article.'][$switch_add_article_i];
 $switch_add_article_item['S_ROW_COUNT'] = $switch_add_article_i;
 $switch_add_article_item['S_NUM_ROWS'] = $switch_add_article_count;

?>
	   <span class="nav"><?php echo isset($this->vars['L_ADD_ARTICLE']) ? $this->vars['L_ADD_ARTICLE'] : $this->lang('L_ADD_ARTICLE'); ?></span> &nbsp;
	   <?php

} // END switch_add_article

if(isset($switch_add_article_item)) { unset($switch_add_article_item); } 

?>
	   <span class="nav"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<?php

$switch_quick_stats_count = ( isset($this->_tpldata['switch_quick_stats.']) ) ?  sizeof($this->_tpldata['switch_quick_stats.']) : 0;
for ($switch_quick_stats_i = 0; $switch_quick_stats_i < $switch_quick_stats_count; $switch_quick_stats_i++)
{
 $switch_quick_stats_item = &$this->_tpldata['switch_quick_stats.'][$switch_quick_stats_i];
 $switch_quick_stats_item['S_ROW_COUNT'] = $switch_quick_stats_i;
 $switch_quick_stats_item['S_NUM_ROWS'] = $switch_quick_stats_count;

?>
  <tr valign="top">
    <td width="100%">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0" class="forumline" style="margin-top: 21px;">
		<tr>
		  <th class="thHead" colspan="2">&nbsp;<?php echo isset($switch_quick_stats_item['L_QUICK_STATS']) ? $switch_quick_stats_item['L_QUICK_STATS'] : ''; ?>&nbsp;</td>
		</tr>
		<tr><td class="row2"  width = "100%" align="center"><span class="gen">
		<?php

$quick_stats_count = ( isset($switch_quick_stats_item['quick_stats.']) ) ? sizeof($switch_quick_stats_item['quick_stats.']) : 0;
for ($quick_stats_i = 0; $quick_stats_i < $quick_stats_count; $quick_stats_i++)
{
 $quick_stats_item = &$switch_quick_stats_item['quick_stats.'][$quick_stats_i];
 $quick_stats_item['S_ROW_COUNT'] = $quick_stats_i;
 $quick_stats_item['S_NUM_ROWS'] = $quick_stats_count;

?>
		  <?php echo isset($quick_stats_item['Q_TYPE_NAME']) ? $quick_stats_item['Q_TYPE_NAME'] : ''; ?>&nbsp;<?php echo isset($quick_stats_item['Q_TYPE_AMOUNT']) ? $quick_stats_item['Q_TYPE_AMOUNT'] : ''; ?>
		<?php

} // END quick_stats

if(isset($quick_stats_item)) { unset($quick_stats_item); } 

?>
		</span></td></tr>
		
		<tr><td class="row2"  width = "100%" align="center"><span class="gen">::
			<a href="<?php echo isset($this->vars['U_MOST_POPULAR']) ? $this->vars['U_MOST_POPULAR'] : $this->lang('U_MOST_POPULAR'); ?>" class="nav"><?php echo isset($this->vars['L_MOST_POPULAR']) ? $this->vars['L_MOST_POPULAR'] : $this->lang('L_MOST_POPULAR'); ?></a> :: 
			<a href="<?php echo isset($this->vars['U_TOPRATED']) ? $this->vars['U_TOPRATED'] : $this->lang('U_TOPRATED'); ?>" class="nav"><?php echo isset($this->vars['L_TOPRATED']) ? $this->vars['L_TOPRATED'] : $this->lang('L_TOPRATED'); ?></a> :: 
			<a href="<?php echo isset($this->vars['U_LATEST']) ? $this->vars['U_LATEST'] : $this->lang('U_LATEST'); ?>" class="nav"><?php echo isset($this->vars['L_LATEST']) ? $this->vars['L_LATEST'] : $this->lang('L_LATEST'); ?></a> ::
		</span></td></tr>
	  </table>
	</td>
  </tr>
<?php

} // END switch_quick_stats

if(isset($switch_quick_stats_item)) { unset($switch_quick_stats_item); } 

?>
  
  
  <tr valign="top">
	<td>
