<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:35:07 -0400 (time=1411976107)

?><div class="maintitle"><?php echo isset($this->vars['L_ACRONYMS_TITLE']) ? $this->vars['L_ACRONYMS_TITLE'] : $this->lang('L_ACRONYMS_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_ACRONYMS_TEXT']) ? $this->vars['L_ACRONYMS_TEXT'] : $this->lang('L_ACRONYMS_TEXT'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_ACRONYMS_ACTION']) ? $this->vars['S_ACRONYMS_ACTION'] : $this->lang('S_ACRONYMS_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<td colspan="5" align="center" class="cat"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="add" value="<?php echo isset($this->vars['L_ADD_ACRONYM']) ? $this->vars['L_ADD_ACRONYM'] : $this->lang('L_ADD_ACRONYM'); ?>" class="mainoption" />
</td>
</tr>
<tr> 
<th>&nbsp;<?php echo isset($this->vars['L_ACRONYM']) ? $this->vars['L_ACRONYM'] : $this->lang('L_ACRONYM'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?>&nbsp;</th>
<th colspan="2"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
</tr>
<?php

$acronyms_count = ( isset($this->_tpldata['acronyms.']) ) ?  sizeof($this->_tpldata['acronyms.']) : 0;
for ($acronyms_i = 0; $acronyms_i < $acronyms_count; $acronyms_i++)
{
 $acronyms_item = &$this->_tpldata['acronyms.'][$acronyms_i];
 $acronyms_item['S_ROW_COUNT'] = $acronyms_i;
 $acronyms_item['S_NUM_ROWS'] = $acronyms_count;

?>
<tr> 
<td class="<?php echo isset($acronyms_item['ROW_CLASS']) ? $acronyms_item['ROW_CLASS'] : ''; ?>"><?php echo isset($acronyms_item['ACRONYM']) ? $acronyms_item['ACRONYM'] : ''; ?></td>
<td class="<?php echo isset($acronyms_item['ROW_CLASS']) ? $acronyms_item['ROW_CLASS'] : ''; ?>"><?php echo isset($acronyms_item['DESCRIPTION']) ? $acronyms_item['DESCRIPTION'] : ''; ?></td>
<td class="<?php echo isset($acronyms_item['ROW_CLASS']) ? $acronyms_item['ROW_CLASS'] : ''; ?>">&nbsp;<a href="<?php echo isset($acronyms_item['U_ACRONYM_EDIT']) ? $acronyms_item['U_ACRONYM_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a>&nbsp;</td>
<td class="<?php echo isset($acronyms_item['ROW_CLASS']) ? $acronyms_item['ROW_CLASS'] : ''; ?>">&nbsp;<a href="<?php echo isset($acronyms_item['U_ACRONYM_DELETE']) ? $acronyms_item['U_ACRONYM_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a>&nbsp;</td>
</tr>
<?php

} // END acronyms

if(isset($acronyms_item)) { unset($acronyms_item); } 

?>
<tr> 
<td colspan="5" align="center" class="cat"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="add" value="<?php echo isset($this->vars['L_ADD_ACRONYM']) ? $this->vars['L_ADD_ACRONYM'] : $this->lang('L_ADD_ACRONYM'); ?>" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />
