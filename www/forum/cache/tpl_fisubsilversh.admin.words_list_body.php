<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:29:01 -0500 (time=1323530941)

?><div class="maintitle"><?php echo isset($this->vars['L_WORDS_TITLE']) ? $this->vars['L_WORDS_TITLE'] : $this->lang('L_WORDS_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_WORDS_TEXT']) ? $this->vars['L_WORDS_TEXT'] : $this->lang('L_WORDS_TEXT'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_WORDS_ACTION']) ? $this->vars['S_WORDS_ACTION'] : $this->lang('S_WORDS_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>&nbsp;<?php echo isset($this->vars['L_WORD']) ? $this->vars['L_WORD'] : $this->lang('L_WORD'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_REPLACEMENT']) ? $this->vars['L_REPLACEMENT'] : $this->lang('L_REPLACEMENT'); ?>&nbsp;</th>
<th colspan="2"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
</tr>
<?php

$words_count = ( isset($this->_tpldata['words.']) ) ?  sizeof($this->_tpldata['words.']) : 0;
for ($words_i = 0; $words_i < $words_count; $words_i++)
{
 $words_item = &$this->_tpldata['words.'][$words_i];
 $words_item['S_ROW_COUNT'] = $words_i;
 $words_item['S_NUM_ROWS'] = $words_count;

?>
<tr> 
<td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($words_item['WORD']) ? $words_item['WORD'] : ''; ?></td>
<td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($words_item['REPLACEMENT']) ? $words_item['REPLACEMENT'] : ''; ?></td>
<td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>">&nbsp;<a href="<?php echo isset($words_item['U_WORD_EDIT']) ? $words_item['U_WORD_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a>&nbsp;</td>
<td class="<?php echo isset($words_item['ROW_CLASS']) ? $words_item['ROW_CLASS'] : ''; ?>">&nbsp;<a href="<?php echo isset($words_item['U_WORD_DELETE']) ? $words_item['U_WORD_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a>&nbsp;</td>
</tr>
<?php

} // END words

if(isset($words_item)) { unset($words_item); } 

?>
<tr> 
<td colspan="5" align="center" class="cat"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="add" value="<?php echo isset($this->vars['L_ADD_WORD']) ? $this->vars['L_ADD_WORD'] : $this->lang('L_ADD_WORD'); ?>" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />