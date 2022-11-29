<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:01 -0500 (time=1323530521)

?>
<h1><?php echo isset($this->vars['L_PROFILE_FIELD_LIST_TITLE']) ? $this->vars['L_PROFILE_FIELD_LIST_TITLE'] : $this->lang('L_PROFILE_FIELD_LIST_TITLE'); ?></h1>

<P><?php echo isset($this->vars['L_PROFILE_FIELD_LIST_EXPLAIN']) ? $this->vars['L_PROFILE_FIELD_LIST_EXPLAIN'] : $this->lang('L_PROFILE_FIELD_LIST_EXPLAIN'); ?></p>

<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
	<tr>
		<th class="thCornerL"><?php echo isset($this->vars['L_ID']) ? $this->vars['L_ID'] : $this->lang('L_ID'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></th>
		<th colspan="2" class="thCornerR"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
	</tr>
	<?php

$switch_no_fields_count = ( isset($this->_tpldata['switch_no_fields.']) ) ?  sizeof($this->_tpldata['switch_no_fields.']) : 0;
for ($switch_no_fields_i = 0; $switch_no_fields_i < $switch_no_fields_count; $switch_no_fields_i++)
{
 $switch_no_fields_item = &$this->_tpldata['switch_no_fields.'][$switch_no_fields_i];
 $switch_no_fields_item['S_ROW_COUNT'] = $switch_no_fields_i;
 $switch_no_fields_item['S_NUM_ROWS'] = $switch_no_fields_count;

?>
	<tr>
	  <td class="row1" colspan="4"><?php echo isset($switch_no_fields_item['NO_FIELDS_EXIST']) ? $switch_no_fields_item['NO_FIELDS_EXIST'] : ''; ?></td>
	</tr>
	<?php

} // END switch_no_fields

if(isset($switch_no_fields_item)) { unset($switch_no_fields_item); } 

?>
	<?php

$switch_fields_count = ( isset($this->_tpldata['switch_fields.']) ) ?  sizeof($this->_tpldata['switch_fields.']) : 0;
for ($switch_fields_i = 0; $switch_fields_i < $switch_fields_count; $switch_fields_i++)
{
 $switch_fields_item = &$this->_tpldata['switch_fields.'][$switch_fields_i];
 $switch_fields_item['S_ROW_COUNT'] = $switch_fields_i;
 $switch_fields_item['S_NUM_ROWS'] = $switch_fields_count;

?>
	<?php

$profile_fields_count = ( isset($switch_fields_item['profile_fields.']) ) ? sizeof($switch_fields_item['profile_fields.']) : 0;
for ($profile_fields_i = 0; $profile_fields_i < $profile_fields_count; $profile_fields_i++)
{
 $profile_fields_item = &$switch_fields_item['profile_fields.'][$profile_fields_i];
 $profile_fields_item['S_ROW_COUNT'] = $profile_fields_i;
 $profile_fields_item['S_NUM_ROWS'] = $profile_fields_count;

?>
	<tr>
		<td class="<?php echo isset($profile_fields_item['ROW_CLASS']) ? $profile_fields_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($profile_fields_item['ID']) ? $profile_fields_item['ID'] : ''; ?></td>
		<td class="<?php echo isset($profile_fields_item['ROW_CLASS']) ? $profile_fields_item['ROW_CLASS'] : ''; ?>"><?php echo isset($profile_fields_item['NAME']) ? $profile_fields_item['NAME'] : ''; ?></td>
		<td class="<?php echo isset($profile_fields_item['ROW_CLASS']) ? $profile_fields_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($profile_fields_item['U_PROFILE_FIELD_EDIT']) ? $profile_fields_item['U_PROFILE_FIELD_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
		<td class="<?php echo isset($profile_fields_item['ROW_CLASS']) ? $profile_fields_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($profile_fields_item['U_PROFILE_FIELD_DELETE']) ? $profile_fields_item['U_PROFILE_FIELD_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
	</tr>
	<?php

} // END profile_fields

if(isset($profile_fields_item)) { unset($profile_fields_item); } 

?>
	<?php

} // END switch_fields

if(isset($switch_fields_item)) { unset($switch_fields_item); } 

?>
	<tr>
		<td class="catBottom" colspan="4" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?></td>
	</tr>
</table>
