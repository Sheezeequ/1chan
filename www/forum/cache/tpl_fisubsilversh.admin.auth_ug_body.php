<?php

// eXtreme Styles mod cache. Generated on Sat, 31 Mar 2012 07:13:23 -0400 (time=1333192403)

?><div class="maintitle"><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></div>
<br />
<div class="subtitle"><?php echo isset($this->vars['L_USER_OR_GROUPNAME']) ? $this->vars['L_USER_OR_GROUPNAME'] : $this->lang('L_USER_OR_GROUPNAME'); ?>: <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>">

<?php

$switch_user_auth_count = ( isset($this->_tpldata['switch_user_auth.']) ) ?  sizeof($this->_tpldata['switch_user_auth.']) : 0;
for ($switch_user_auth_i = 0; $switch_user_auth_i < $switch_user_auth_count; $switch_user_auth_i++)
{
 $switch_user_auth_item = &$this->_tpldata['switch_user_auth.'][$switch_user_auth_i];
 $switch_user_auth_item['S_ROW_COUNT'] = $switch_user_auth_i;
 $switch_user_auth_item['S_NUM_ROWS'] = $switch_user_auth_count;

?>
<?php echo isset($this->vars['USER_LEVEL']) ? $this->vars['USER_LEVEL'] : $this->lang('USER_LEVEL'); ?><br />
<br />
<?php echo isset($this->vars['USER_GROUP_MEMBERSHIPS']) ? $this->vars['USER_GROUP_MEMBERSHIPS'] : $this->lang('USER_GROUP_MEMBERSHIPS'); ?><br />
<?php

} // END switch_user_auth

if(isset($switch_user_auth_item)) { unset($switch_user_auth_item); } 

?>

<?php

$switch_group_auth_count = ( isset($this->_tpldata['switch_group_auth.']) ) ?  sizeof($this->_tpldata['switch_group_auth.']) : 0;
for ($switch_group_auth_i = 0; $switch_group_auth_i < $switch_group_auth_count; $switch_group_auth_i++)
{
 $switch_group_auth_item = &$this->_tpldata['switch_group_auth.'][$switch_group_auth_i];
 $switch_group_auth_item['S_ROW_COUNT'] = $switch_group_auth_i;
 $switch_group_auth_item['S_NUM_ROWS'] = $switch_group_auth_count;

?>
<?php echo isset($this->vars['GROUP_MEMBERSHIP']) ? $this->vars['GROUP_MEMBERSHIP'] : $this->lang('GROUP_MEMBERSHIP'); ?><br />
<?php

} // END switch_group_auth

if(isset($switch_group_auth_item)) { unset($switch_group_auth_item); } 

?>

<div class="subtitle"><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></div>

<div class="genmed"><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></div>
<br />
  
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th width="30%" colspan="<?php echo isset($this->vars['INC_SPAN']) ? $this->vars['INC_SPAN'] : $this->lang('INC_SPAN'); ?>"><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?></th>
<?php

$acltype_count = ( isset($this->_tpldata['acltype.']) ) ?  sizeof($this->_tpldata['acltype.']) : 0;
for ($acltype_i = 0; $acltype_i < $acltype_count; $acltype_i++)
{
 $acltype_item = &$this->_tpldata['acltype.'][$acltype_i];
 $acltype_item['S_ROW_COUNT'] = $acltype_i;
 $acltype_item['S_NUM_ROWS'] = $acltype_count;

?>
<th><?php echo isset($acltype_item['L_UG_ACL_TYPE']) ? $acltype_item['L_UG_ACL_TYPE'] : ''; ?></th>
<?php

} // END acltype

if(isset($acltype_item)) { unset($acltype_item); } 

?>
<th><?php echo isset($this->vars['L_MODERATOR_STATUS']) ? $this->vars['L_MODERATOR_STATUS'] : $this->lang('L_MODERATOR_STATUS'); ?></th>
</tr>
<?php

$row_count = ( isset($this->_tpldata['row.']) ) ?  sizeof($this->_tpldata['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$this->_tpldata['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
<?php

$cathead_count = ( isset($row_item['cathead.']) ) ? sizeof($row_item['cathead.']) : 0;
for ($cathead_i = 0; $cathead_i < $cathead_count; $cathead_i++)
{
 $cathead_item = &$row_item['cathead.'][$cathead_i];
 $cathead_item['S_ROW_COUNT'] = $cathead_i;
 $cathead_item['S_NUM_ROWS'] = $cathead_count;

?>
<tr> 
<?php

$inc_count = ( isset($cathead_item['inc.']) ) ? sizeof($cathead_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$cathead_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
<td colspan="<?php echo isset($cathead_item['INC_SPAN']) ? $cathead_item['INC_SPAN'] : ''; ?>" class="<?php echo isset($cathead_item['CLASS_CAT']) ? $cathead_item['CLASS_CAT'] : ''; ?>" align="left" nowrap> <span class="cattitlemed"><?php echo isset($cathead_item['CAT_TITLE']) ? $cathead_item['CAT_TITLE'] : ''; ?></span></td>
<?php

$aclvalues_count = ( isset($cathead_item['aclvalues.']) ) ? sizeof($cathead_item['aclvalues.']) : 0;
for ($aclvalues_i = 0; $aclvalues_i < $aclvalues_count; $aclvalues_i++)
{
 $aclvalues_item = &$cathead_item['aclvalues.'][$aclvalues_i];
 $aclvalues_item['S_ROW_COUNT'] = $aclvalues_i;
 $aclvalues_item['S_NUM_ROWS'] = $aclvalues_count;

?>
<td class="<?php echo isset($cathead_item['CLASS_CAT']) ? $cathead_item['CLASS_CAT'] : ''; ?>" align="left" nowrap><span class="cattitlemed">&nbsp;</span></td>
<?php

} // END aclvalues

if(isset($aclvalues_item)) { unset($aclvalues_item); } 

?>
<td class="<?php echo isset($cathead_item['CLASS_CAT']) ? $cathead_item['CLASS_CAT'] : ''; ?>" align="left" nowrap><span class="cattitlemed">&nbsp;</span></td>
</tr>
<?php

} // END cathead

if(isset($cathead_item)) { unset($cathead_item); } 

?>
<?php

$forums_count = ( isset($row_item['forums.']) ) ? sizeof($row_item['forums.']) : 0;
for ($forums_i = 0; $forums_i < $forums_count; $forums_i++)
{
 $forums_item = &$row_item['forums.'][$forums_i];
 $forums_item['S_ROW_COUNT'] = $forums_i;
 $forums_item['S_NUM_ROWS'] = $forums_count;

?>
<?php

$inc_count = ( isset($forums_item['inc.']) ) ? sizeof($forums_item['inc.']) : 0;
for ($inc_i = 0; $inc_i < $inc_count; $inc_i++)
{
 $inc_item = &$forums_item['inc.'][$inc_i];
 $inc_item['S_ROW_COUNT'] = $inc_i;
 $inc_item['S_NUM_ROWS'] = $inc_count;

?>
<td class="row2" width="46"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="46" height="0" /></td>
<?php

} // END inc

if(isset($inc_item)) { unset($inc_item); } 

?>
<td class="row1" align="left" colspan="<?php echo isset($forums_item['INC_SPAN']) ? $forums_item['INC_SPAN'] : ''; ?>"><span class="gentbl"><?php echo isset($forums_item['FORUM_NAME']) ? $forums_item['FORUM_NAME'] : ''; ?></span></td>
<?php

$aclvalues_count = ( isset($forums_item['aclvalues.']) ) ? sizeof($forums_item['aclvalues.']) : 0;
for ($aclvalues_i = 0; $aclvalues_i < $aclvalues_count; $aclvalues_i++)
{
 $aclvalues_item = &$forums_item['aclvalues.'][$aclvalues_i];
 $aclvalues_item['S_ROW_COUNT'] = $aclvalues_i;
 $aclvalues_item['S_NUM_ROWS'] = $aclvalues_count;

?>
<td class="row2" align="center"><?php echo isset($aclvalues_item['S_ACL_SELECT']) ? $aclvalues_item['S_ACL_SELECT'] : ''; ?></td>
<?php

} // END aclvalues

if(isset($aclvalues_item)) { unset($aclvalues_item); } 

?>
<td class="row1" align="center"><?php echo isset($forums_item['S_MOD_SELECT']) ? $forums_item['S_MOD_SELECT'] : ''; ?></td>
</tr>
<?php

} // END forums

if(isset($forums_item)) { unset($forums_item); } 

?>
<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
<tr> 
<td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" class="row1" align="center"><span class="gensmall"><?php echo isset($this->vars['U_SWITCH_MODE']) ? $this->vars['U_SWITCH_MODE'] : $this->lang('U_SWITCH_MODE'); ?></span></td>
</tr>
<tr> 
<td colspan="<?php echo isset($this->vars['S_COLUMN_SPAN']) ? $this->vars['S_COLUMN_SPAN'] : $this->lang('S_COLUMN_SPAN'); ?>" class="cat" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" name="reset" />
</td>
</tr>
</table>
</form>
