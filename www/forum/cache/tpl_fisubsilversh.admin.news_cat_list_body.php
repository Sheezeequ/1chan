<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:28 -0500 (time=1323533668)

?>
<h1><?php echo isset($this->vars['L_NEWS_TITLE']) ? $this->vars['L_NEWS_TITLE'] : $this->lang('L_NEWS_TITLE'); ?></h1>

<P><?php echo isset($this->vars['L_NEWS_TEXT']) ? $this->vars['L_NEWS_TEXT'] : $this->lang('L_NEWS_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_NEWS_ACTION']) ? $this->vars['S_NEWS_ACTION'] : $this->lang('S_NEWS_ACTION'); ?>">
<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">

  <tr>
    <th class="thCornerL"><?php echo isset($this->vars['L_ICON']) ? $this->vars['L_ICON'] : $this->lang('L_ICON'); ?></th>
    <th class="thTop"><?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?></th>
    <th class="thTop"><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?></th>
    <th colspan="2" class="thCornerR"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
  </tr>
  <tr>
    <td class="row1" colspan="6" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="add" value="<?php echo isset($this->vars['L_NEWS_ADD']) ? $this->vars['L_NEWS_ADD'] : $this->lang('L_NEWS_ADD'); ?>" class="mainoption" /></td>
  </tr>
  <?php

$news_cats_count = ( isset($this->_tpldata['news_cats.']) ) ?  sizeof($this->_tpldata['news_cats.']) : 0;
for ($news_cats_i = 0; $news_cats_i < $news_cats_count; $news_cats_i++)
{
 $news_cats_item = &$this->_tpldata['news_cats.'][$news_cats_i];
 $news_cats_item['S_ROW_COUNT'] = $news_cats_i;
 $news_cats_item['S_NUM_ROWS'] = $news_cats_count;

?>
  <tr>
    <td class="<?php echo isset($news_cats_item['ROW_CLASS']) ? $news_cats_item['ROW_CLASS'] : ''; ?>"><img src="<?php echo isset($news_cats_item['CATEGORY_IMG']) ? $news_cats_item['CATEGORY_IMG'] : ''; ?>" alt="<?php echo isset($news_cats_item['L_CATEGORY']) ? $news_cats_item['L_CATEGORY'] : ''; ?>" /></td>
    <td class="<?php echo isset($news_cats_item['ROW_CLASS']) ? $news_cats_item['ROW_CLASS'] : ''; ?>"><?php echo isset($news_cats_item['L_CATEGORY']) ? $news_cats_item['L_CATEGORY'] : ''; ?></td>
    <td class="<?php echo isset($news_cats_item['ROW_CLASS']) ? $news_cats_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($news_cats_item['TOPIC_COUNT']) ? $news_cats_item['TOPIC_COUNT'] : ''; ?></td>
    <td class="<?php echo isset($news_cats_item['ROW_CLASS']) ? $news_cats_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($news_cats_item['U_NEWS_EDIT']) ? $news_cats_item['U_NEWS_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
    <td class="<?php echo isset($news_cats_item['ROW_CLASS']) ? $news_cats_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($news_cats_item['U_NEWS_DELETE']) ? $news_cats_item['U_NEWS_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
  </tr>
  <?php

} // END news_cats

if(isset($news_cats_item)) { unset($news_cats_item); } 

?>
  <tr>
    <td class="cat" colspan="6" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="add" value="<?php echo isset($this->vars['L_NEWS_ADD']) ? $this->vars['L_NEWS_ADD'] : $this->lang('L_NEWS_ADD'); ?>" class="mainoption" /></td>
  </tr>
</table></form>
