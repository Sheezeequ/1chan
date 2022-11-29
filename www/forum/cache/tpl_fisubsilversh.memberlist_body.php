<?php

// eXtreme Styles mod cache. Generated on Sun, 15 Mar 2015 03:08:33 -0400 (time=1426403313)

?><form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td colspan="2" class="maintitle"><?php echo isset($this->vars['L_MEMBERLIST']) ? $this->vars['L_MEMBERLIST'] : $this->lang('L_MEMBERLIST'); ?></td>
	</tr>
<tr> 
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_MEMBERLIST']) ? $this->vars['L_MEMBERLIST'] : $this->lang('L_MEMBERLIST'); ?></td>
<td align="right" nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<th>#</th>
<th><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></th>
<th><?php echo isset($this->vars['L_ON_OFF_STATUS']) ? $this->vars['L_ON_OFF_STATUS'] : $this->lang('L_ON_OFF_STATUS'); ?></th>
<th><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
<th><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
<th><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?></th>
<th><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></th>
<th><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></th>
<th><?php echo isset($this->vars['L_LOGON']) ? $this->vars['L_LOGON'] : $this->lang('L_LOGON'); ?></th>
<th><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></th>
<th><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></th>
<!-- Custom Profile Fields MOD start + -->
<?php

$custom_field_names_count = ( isset($this->_tpldata['custom_field_names.']) ) ?  sizeof($this->_tpldata['custom_field_names.']) : 0;
for ($custom_field_names_i = 0; $custom_field_names_i < $custom_field_names_count; $custom_field_names_i++)
{
 $custom_field_names_item = &$this->_tpldata['custom_field_names.'][$custom_field_names_i];
 $custom_field_names_item['S_ROW_COUNT'] = $custom_field_names_i;
 $custom_field_names_item['S_NUM_ROWS'] = $custom_field_names_count;

?>
<th><?php echo isset($custom_field_names_item['FIELD_NAME']) ? $custom_field_names_item['FIELD_NAME'] : ''; ?></th>
<?php

} // END custom_field_names

if(isset($custom_field_names_item)) { unset($custom_field_names_item); } 

?>
<!-- Custom Profile Fields MOD finish -->
</tr>
<?php

$memberrow_count = ( isset($this->_tpldata['memberrow.']) ) ?  sizeof($this->_tpldata['memberrow.']) : 0;
for ($memberrow_i = 0; $memberrow_i < $memberrow_count; $memberrow_i++)
{
 $memberrow_item = &$this->_tpldata['memberrow.'][$memberrow_i];
 $memberrow_item['S_ROW_COUNT'] = $memberrow_i;
 $memberrow_item['S_NUM_ROWS'] = $memberrow_count;

?>
<tr>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['ROW_NUMBER']) ? $memberrow_item['ROW_NUMBER'] : ''; ?>&nbsp;</td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['PM_IMG']) ? $memberrow_item['PM_IMG'] : ''; ?>&nbsp;</td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['USER_ONLINE']) ? $memberrow_item['USER_ONLINE'] : ''; ?>&nbsp;</td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($memberrow_item['U_VIEWPROFILE']) ? $memberrow_item['U_VIEWPROFILE'] : ''; ?>"><?php echo isset($memberrow_item['USERNAME']) ? $memberrow_item['USERNAME'] : ''; ?></a></td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['EMAIL_IMG']) ? $memberrow_item['EMAIL_IMG'] : ''; ?>&nbsp;</td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><table class="gen"><tr><td align=center width="100%"><?php echo isset($memberrow_item['FROM']) ? $memberrow_item['FROM'] : ''; ?></td><td align=right><?php echo isset($memberrow_item['FLAG']) ? $memberrow_item['FLAG'] : ''; ?></td></tr></table></td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gensmall"><?php echo isset($memberrow_item['JOINED']) ? $memberrow_item['JOINED'] : ''; ?></span></td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($memberrow_item['POSTS']) ? $memberrow_item['POSTS'] : ''; ?></td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gensmall"><?php echo isset($memberrow_item['LAST_LOGON']) ? $memberrow_item['LAST_LOGON'] : ''; ?></span></td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['WWW_IMG']) ? $memberrow_item['WWW_IMG'] : ''; ?>&nbsp;</td>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center">&nbsp;<?php echo isset($memberrow_item['GALLERY_IMG']) ? $memberrow_item['GALLERY_IMG'] : ''; ?>&nbsp;</td>
<!-- Custom Profile Fields MOD start + -->
<?php

$custom_fields_count = ( isset($memberrow_item['custom_fields.']) ) ? sizeof($memberrow_item['custom_fields.']) : 0;
for ($custom_fields_i = 0; $custom_fields_i < $custom_fields_count; $custom_fields_i++)
{
 $custom_fields_item = &$memberrow_item['custom_fields.'][$custom_fields_i];
 $custom_fields_item['S_ROW_COUNT'] = $custom_fields_i;
 $custom_fields_item['S_NUM_ROWS'] = $custom_fields_count;

?>
<td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gensmall"><?php echo isset($custom_fields_item['CUSTOM_FIELD']) ? $custom_fields_item['CUSTOM_FIELD'] : ''; ?></span></td>
<?php

} // END custom_fields

if(isset($custom_fields_item)) { unset($custom_fields_item); } 

?>
<!-- Custom Profile Fields MOD finish -->
</tr>
<?php

} // END memberrow

if(isset($memberrow_item)) { unset($memberrow_item); } 

?>
<tr align="center">
<!-- 
Custom Profile Fields MOD start <> 
Original code: <td class="cat" colspan="11"> 
// -->
<td class="cat" colspan="<?php echo isset($this->vars['NUMCOLS']) ? $this->vars['NUMCOLS'] : $this->lang('NUMCOLS'); ?>">
<!-- Custom Profile Fields MOD finish <=> -->
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td class="gensmall"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;</td>
	<td><?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;</td>
	<td class="gensmall"><?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>:&nbsp;</td>
	<td><?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;</td>
	<td><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="catbutton" /></td>
	</tr>
	</table>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr> 
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_MEMBERLIST']) ? $this->vars['L_MEMBERLIST'] : $this->lang('L_MEMBERLIST'); ?></td>
<td align="right" nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
</form>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>