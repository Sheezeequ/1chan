<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:23:17 -0500 (time=1323530597)

?><h1><?php echo isset($this->vars['L_ADMIN_USERS_LIST_MAIL_TITLE']) ? $this->vars['L_ADMIN_USERS_LIST_MAIL_TITLE'] : $this->lang('L_ADMIN_USERS_LIST_MAIL_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_ADMIN_USERS_LIST_MAIL_EXPLAIN']) ? $this->vars['L_ADMIN_USERS_LIST_MAIL_EXPLAIN'] : $this->lang('L_ADMIN_USERS_LIST_MAIL_EXPLAIN'); ?></p>
<table width="100%" cellpadding="6" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
	</tr>
	<?php

$userrow_count = ( isset($this->_tpldata['userrow.']) ) ?  sizeof($this->_tpldata['userrow.']) : 0;
for ($userrow_i = 0; $userrow_i < $userrow_count; $userrow_i++)
{
 $userrow_item = &$this->_tpldata['userrow.'][$userrow_i];
 $userrow_item['S_ROW_COUNT'] = $userrow_i;
 $userrow_item['S_NUM_ROWS'] = $userrow_count;

?>
	<tr>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['USERNAME']) ? $userrow_item['USERNAME'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><a href="mailto:<?php echo isset($userrow_item['EMAIL']) ? $userrow_item['EMAIL'] : ''; ?>"><?php echo isset($userrow_item['EMAIL']) ? $userrow_item['EMAIL'] : ''; ?></a></span></td>
	</tr>
	<?php

} // END userrow

if(isset($userrow_item)) { unset($userrow_item); } 

?>
	<tr>
		<td class="cat" height="28" align="center" valign="middle" colspan="8">
		</td>
	</tr>
</table>