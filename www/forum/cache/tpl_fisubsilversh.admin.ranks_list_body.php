<?php

// eXtreme Styles mod cache. Generated on Mon, 12 Dec 2011 06:08:03 -0500 (time=1323688083)

?><div class="maintitle"><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_RANKS_TEXT']) ? $this->vars['L_RANKS_TEXT'] : $this->lang('L_RANKS_TEXT'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_RANKS_ACTION']) ? $this->vars['S_RANKS_ACTION'] : $this->lang('S_RANKS_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>&nbsp;<?php echo isset($this->vars['L_RANK']) ? $this->vars['L_RANK'] : $this->lang('L_RANK'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_RANK_MINIMUM']) ? $this->vars['L_RANK_MINIMUM'] : $this->lang('L_RANK_MINIMUM'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_SPECIAL_RANK']) ? $this->vars['L_SPECIAL_RANK'] : $this->lang('L_SPECIAL_RANK'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?>&nbsp;</th>
<th>&nbsp;<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>&nbsp;</th>
</tr>
<?php

$ranks_count = ( isset($this->_tpldata['ranks.']) ) ?  sizeof($this->_tpldata['ranks.']) : 0;
for ($ranks_i = 0; $ranks_i < $ranks_count; $ranks_i++)
{
 $ranks_item = &$this->_tpldata['ranks.'][$ranks_i];
 $ranks_item['S_ROW_COUNT'] = $ranks_i;
 $ranks_item['S_NUM_ROWS'] = $ranks_count;

?>
<tr> 
<td align="center" nowrap="nowrap" class="<?php echo isset($ranks_item['ROW_CLASS']) ? $ranks_item['ROW_CLASS'] : ''; ?>"><?php echo isset($ranks_item['RANK']) ? $ranks_item['RANK'] : ''; ?></td>
<td class="<?php echo isset($ranks_item['ROW_CLASS']) ? $ranks_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($ranks_item['RANK_MIN']) ? $ranks_item['RANK_MIN'] : ''; ?></td>
<td class="<?php echo isset($ranks_item['ROW_CLASS']) ? $ranks_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($ranks_item['SPECIAL_RANK']) ? $ranks_item['SPECIAL_RANK'] : ''; ?></td>
<td class="<?php echo isset($ranks_item['ROW_CLASS']) ? $ranks_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($ranks_item['U_RANK_EDIT']) ? $ranks_item['U_RANK_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
<td class="<?php echo isset($ranks_item['ROW_CLASS']) ? $ranks_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($ranks_item['U_RANK_DELETE']) ? $ranks_item['U_RANK_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
</tr>
<?php

} // END ranks

if(isset($ranks_item)) { unset($ranks_item); } 

?>
<tr> 
<td class="cat" align="center" colspan="5"> 
<input type="submit" class="mainoption" name="add" value="<?php echo isset($this->vars['L_ADD_RANK']) ? $this->vars['L_ADD_RANK'] : $this->lang('L_ADD_RANK'); ?>" />
</td>
</tr>
</table>
</form>
<br />
