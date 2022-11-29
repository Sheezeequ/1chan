<?php

// eXtreme Styles mod cache. Generated on Sat, 13 Dec 2014 04:49:00 -0500 (time=1418464140)

?><table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle"><?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<th width="35%"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
<th width="25%"><?php echo isset($this->vars['L_LAST_UPDATE']) ? $this->vars['L_LAST_UPDATE'] : $this->lang('L_LAST_UPDATE'); ?></th>
<th width="40%"><?php echo isset($this->vars['L_FORUM_LOCATION']) ? $this->vars['L_FORUM_LOCATION'] : $this->lang('L_FORUM_LOCATION'); ?></th>
</tr>
<tr>
<td class="cat" colspan="3"><?php echo isset($this->vars['TOTAL_REGISTERED_USERS_ONLINE']) ? $this->vars['TOTAL_REGISTERED_USERS_ONLINE'] : $this->lang('TOTAL_REGISTERED_USERS_ONLINE'); ?></td>
</tr>
<?php

$reg_user_row_count = ( isset($this->_tpldata['reg_user_row.']) ) ?  sizeof($this->_tpldata['reg_user_row.']) : 0;
for ($reg_user_row_i = 0; $reg_user_row_i < $reg_user_row_count; $reg_user_row_i++)
{
 $reg_user_row_item = &$this->_tpldata['reg_user_row.'][$reg_user_row_i];
 $reg_user_row_item['S_ROW_COUNT'] = $reg_user_row_i;
 $reg_user_row_item['S_NUM_ROWS'] = $reg_user_row_count;

?>
<tr>
<td class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>"><a href="<?php echo isset($reg_user_row_item['U_USER_PROFILE']) ? $reg_user_row_item['U_USER_PROFILE'] : ''; ?>">&nbsp;<?php echo isset($reg_user_row_item['USERNAME']) ? $reg_user_row_item['USERNAME'] : ''; ?></a></td>
<td align="center" nowrap="nowrap" class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>"><?php echo isset($reg_user_row_item['LASTUPDATE']) ? $reg_user_row_item['LASTUPDATE'] : ''; ?></td>
<td class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($reg_user_row_item['U_FORUM_LOCATION']) ? $reg_user_row_item['U_FORUM_LOCATION'] : ''; ?>"><?php echo isset($reg_user_row_item['FORUM_LOCATION']) ? $reg_user_row_item['FORUM_LOCATION'] : ''; ?></a></td>
</tr>
<?php

} // END reg_user_row

if(isset($reg_user_row_item)) { unset($reg_user_row_item); } 

?>
<tr>
<td colspan="3" height="1" class="row3"><img src="images/spacer.gif" width="1" height="1" alt="" /></td>
</tr>
<tr>
<td class="cat" colspan="3"><?php echo isset($this->vars['TOTAL_GUEST_USERS_ONLINE']) ? $this->vars['TOTAL_GUEST_USERS_ONLINE'] : $this->lang('TOTAL_GUEST_USERS_ONLINE'); ?></td>
</tr>
<?php

$guest_user_row_count = ( isset($this->_tpldata['guest_user_row.']) ) ?  sizeof($this->_tpldata['guest_user_row.']) : 0;
for ($guest_user_row_i = 0; $guest_user_row_i < $guest_user_row_count; $guest_user_row_i++)
{
 $guest_user_row_item = &$this->_tpldata['guest_user_row.'][$guest_user_row_i];
 $guest_user_row_item['S_ROW_COUNT'] = $guest_user_row_i;
 $guest_user_row_item['S_NUM_ROWS'] = $guest_user_row_count;

?>
<tr>
<td class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>"><?php echo isset($guest_user_row_item['USERNAME']) ? $guest_user_row_item['USERNAME'] : ''; ?></td>
<td align="center" nowrap="nowrap" class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>"><?php echo isset($guest_user_row_item['LASTUPDATE']) ? $guest_user_row_item['LASTUPDATE'] : ''; ?></td>
<td class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($guest_user_row_item['U_FORUM_LOCATION']) ? $guest_user_row_item['U_FORUM_LOCATION'] : ''; ?>"><?php echo isset($guest_user_row_item['FORUM_LOCATION']) ? $guest_user_row_item['FORUM_LOCATION'] : ''; ?></a></td>
</tr>
<?php

} // END guest_user_row

if(isset($guest_user_row_item)) { unset($guest_user_row_item); } 

?>
<tr>
<td colspan="3" class="row1"><span class="gensmall"><?php echo isset($this->vars['L_ONLINE_EXPLAIN']) ? $this->vars['L_ONLINE_EXPLAIN'] : $this->lang('L_ONLINE_EXPLAIN'); ?></span></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></td>
</tr>
<tr>
	<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
</tr>
</table>