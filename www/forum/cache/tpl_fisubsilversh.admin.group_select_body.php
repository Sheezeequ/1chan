<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:29 -0500 (time=1323530549)

?><div class="maintitle"><?php echo isset($this->vars['L_GROUP_TITLE']) ? $this->vars['L_GROUP_TITLE'] : $this->lang('L_GROUP_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_GROUP_EXPLAIN']) ? $this->vars['L_GROUP_EXPLAIN'] : $this->lang('L_GROUP_EXPLAIN'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_GROUP_ACTION']) ? $this->vars['S_GROUP_ACTION'] : $this->lang('S_GROUP_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th><?php echo isset($this->vars['L_GROUP_SELECT']) ? $this->vars['L_GROUP_SELECT'] : $this->lang('L_GROUP_SELECT'); ?></th>
</tr>
<?php

$select_box_count = ( isset($this->_tpldata['select_box.']) ) ?  sizeof($this->_tpldata['select_box.']) : 0;
for ($select_box_i = 0; $select_box_i < $select_box_count; $select_box_i++)
{
 $select_box_item = &$this->_tpldata['select_box.'][$select_box_i];
 $select_box_item['S_ROW_COUNT'] = $select_box_i;
 $select_box_item['S_NUM_ROWS'] = $select_box_count;

?>
<tr> 
<td class="row1" align="center"><?php echo isset($this->vars['S_GROUP_SELECT']) ? $this->vars['S_GROUP_SELECT'] : $this->lang('S_GROUP_SELECT'); ?>&nbsp;&nbsp; 
<input type="submit" name="edit" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption" />
&nbsp;</td>
</tr>
<?php

} // END select_box

if(isset($select_box_item)) { unset($select_box_item); } 

?>
<tr> 
<td class="cat" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" class="button" name="new" value="<?php echo isset($this->vars['L_CREATE_NEW_GROUP']) ? $this->vars['L_CREATE_NEW_GROUP'] : $this->lang('L_CREATE_NEW_GROUP'); ?>" />
</td>
</tr>
</table>
</form>
<br />
<br />