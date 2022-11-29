<?php

// eXtreme Styles mod cache. Generated on Sat, 27 Sep 2014 11:47:40 -0400 (time=1411832860)

?><form method="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr> 
	<td align="left" valign="middle" class="nav" width="100%"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_SEPARATOR']) ? $this->vars['NAV_SEPARATOR'] : $this->lang('NAV_SEPARATOR'); ?><a href="<?php echo isset($this->vars['U_USER']) ? $this->vars['U_USER'] : $this->lang('U_USER'); ?>" class="nav"><?php echo isset($this->vars['L_USER']) ? $this->vars['L_USER'] : $this->lang('L_USER'); ?></a><?php echo isset($this->vars['NAV_SEPARATOR']) ? $this->vars['NAV_SEPARATOR'] : $this->lang('NAV_SEPARATOR'); ?><a href="<?php echo isset($this->vars['U_OPTION']) ? $this->vars['U_OPTION'] : $this->lang('U_OPTION'); ?>" class="nav"><?php echo isset($this->vars['L_OPTION']) ? $this->vars['L_OPTION'] : $this->lang('L_OPTION'); ?></a></span></td>
</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="1" border="0" align="center" class="forumline">
<tr>
	<th colspan="2"><?php echo isset($this->vars['L_MOD_NAME']) ? $this->vars['L_MOD_NAME'] : $this->lang('L_MOD_NAME'); ?></th>
</tr>
<tr>
	<td valign="top" class="row3" width="200">
		<table cellpadding="10" cellspacing="1" border="0" class="bodyline" width="100%">
		<?php

$mod_count = ( isset($this->_tpldata['mod.']) ) ?  sizeof($this->_tpldata['mod.']) : 0;
for ($mod_i = 0; $mod_i < $mod_count; $mod_i++)
{
 $mod_item = &$this->_tpldata['mod.'][$mod_i];
 $mod_item['S_ROW_COUNT'] = $mod_i;
 $mod_item['S_NUM_ROWS'] = $mod_count;

?>
		<tr>
			<td class="<?php echo isset($mod_item['CLASS']) ? $mod_item['CLASS'] : ''; ?>" align="<?php echo isset($mod_item['ALIGN']) ? $mod_item['ALIGN'] : ''; ?>" nowrap="nowrap">
				<a href="<?php echo isset($mod_item['U_MOD']) ? $mod_item['U_MOD'] : ''; ?>" class="gen"><?php echo isset($mod_item['L_MOD']) ? $mod_item['L_MOD'] : ''; ?></a>
				<?php

$sub_count = ( isset($mod_item['sub.']) ) ? sizeof($mod_item['sub.']) : 0;
for ($sub_i = 0; $sub_i < $sub_count; $sub_i++)
{
 $sub_item = &$mod_item['sub.'][$sub_i];
 $sub_item['S_ROW_COUNT'] = $sub_i;
 $sub_item['S_NUM_ROWS'] = $sub_count;

?>
				<hr />
				<table cellpadding="2" cellspacing="1" border="0" align="left" width="100%">
					<?php

$row_count = ( isset($sub_item['row.']) ) ? sizeof($sub_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$sub_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
					<tr>
						<td align="left" class="<?php echo isset($row_item['CLASS']) ? $row_item['CLASS'] : ''; ?>" nowrap="nowrap"><span class="genmed">&nbsp;&nbsp;&raquo;&nbsp;<a href="<?php echo isset($row_item['U_MOD']) ? $row_item['U_MOD'] : ''; ?>" class="genmed"><?php echo isset($row_item['L_MOD']) ? $row_item['L_MOD'] : ''; ?></a>&nbsp;&nbsp;</span></td>
					</tr>
					<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
				</table>
				<?php

} // END sub

if(isset($sub_item)) { unset($sub_item); } 

?>
			</td>
		</tr>
		<?php

} // END mod

if(isset($mod_item)) { unset($mod_item); } 

?>
		</table>
	</td>
	<td valign="top" class="row3">
		<table cellpadding="5" cellspacing="1" border="0" width="100%" class="bodyline">
		<?php

$field_count = ( isset($this->_tpldata['field.']) ) ?  sizeof($this->_tpldata['field.']) : 0;
for ($field_i = 0; $field_i < $field_count; $field_i++)
{
 $field_item = &$this->_tpldata['field.'][$field_i];
 $field_item['S_ROW_COUNT'] = $field_i;
 $field_item['S_NUM_ROWS'] = $field_count;

?>
		<tr>
			<td class="row1" width="50%"><span class="gen"><?php echo isset($field_item['L_NAME']) ? $field_item['L_NAME'] : ''; ?></span><span class="gensmall"><?php echo isset($field_item['L_EXPLAIN']) ? $field_item['L_EXPLAIN'] : ''; ?></span></td>
			<td class="row2" width="50%" nowrap="nowrap"><span class="gen"><?php echo isset($field_item['INPUT']) ? $field_item['INPUT'] : ''; ?></span></td>
		</tr>
		<?php

} // END field

if(isset($field_item)) { unset($field_item); } 

?>
		</table>
	</td>
</tr>
<tr>
	<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
		<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
</form>