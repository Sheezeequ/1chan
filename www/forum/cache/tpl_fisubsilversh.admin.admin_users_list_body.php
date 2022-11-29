<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:33:11 -0400 (time=1411975991)

?><h1><?php echo isset($this->vars['L_ADMIN_USERS_LIST']) ? $this->vars['L_ADMIN_USERS_LIST'] : $this->lang('L_ADMIN_USERS_LIST'); ?></h1>

<p><?php echo isset($this->vars['L_THERE_ARE']) ? $this->vars['L_THERE_ARE'] : $this->lang('L_THERE_ARE'); ?> <?php echo isset($this->vars['TOTAL_USERS']) ? $this->vars['TOTAL_USERS'] : $this->lang('TOTAL_USERS'); ?> <?php echo isset($this->vars['L_MEMBERS']) ? $this->vars['L_MEMBERS'] : $this->lang('L_MEMBERS'); ?>.</p>

<form action="<?php echo isset($this->vars['U_LIST_ACTION']) ? $this->vars['U_LIST_ACTION'] : $this->lang('U_LIST_ACTION'); ?>" method="post">
<p><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:
<select name="sort">
<option value="user_id" class="genmed" <?php echo isset($this->vars['ID_SELECTED']) ? $this->vars['ID_SELECTED'] : $this->lang('ID_SELECTED'); ?> ><?php echo isset($this->vars['L_ID']) ? $this->vars['L_ID'] : $this->lang('L_ID'); ?></option>
<option value="username" class="genmed" <?php echo isset($this->vars['USERNAME_SELECTED']) ? $this->vars['USERNAME_SELECTED'] : $this->lang('USERNAME_SELECTED'); ?> ><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
<option value="user_posts" class="genmed" <?php echo isset($this->vars['POSTS_SELECTED']) ? $this->vars['POSTS_SELECTED'] : $this->lang('POSTS_SELECTED'); ?> ><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></option>
<option value="user_lastvisit" class="genmed" <?php echo isset($this->vars['LASTVISIT_SELECTED']) ? $this->vars['LASTVISIT_SELECTED'] : $this->lang('LASTVISIT_SELECTED'); ?> ><?php echo isset($this->vars['L_LAST_VISIT']) ? $this->vars['L_LAST_VISIT'] : $this->lang('L_LAST_VISIT'); ?></option>
</select>
&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>:
<select name="order">
<option value="" <?php echo isset($this->vars['ASC_SELECTED']) ? $this->vars['ASC_SELECTED'] : $this->lang('ASC_SELECTED'); ?> ><?php echo isset($this->vars['L_SORT_ASCENDING']) ? $this->vars['L_SORT_ASCENDING'] : $this->lang('L_SORT_ASCENDING'); ?></option>
<option value="DESC" <?php echo isset($this->vars['DESC_SELECTED']) ? $this->vars['DESC_SELECTED'] : $this->lang('DESC_SELECTED'); ?> ><?php echo isset($this->vars['L_SORT_DESCENDING']) ? $this->vars['L_SORT_DESCENDING'] : $this->lang('L_SORT_DESCENDING'); ?></option>
</select>
&nbsp;<input type="submit" value="<?php echo isset($this->vars['L_SORT']) ? $this->vars['L_SORT'] : $this->lang('L_SORT'); ?>" class="liteoption">
</form>

<table width="100%" cellpadding="6" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thCornerL" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_ID']) ? $this->vars['L_ID'] : $this->lang('L_ID'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></th>
		<th class="thTop" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_LAST_VISIT']) ? $this->vars['L_LAST_VISIT'] : $this->lang('L_LAST_VISIT'); ?></th>
		<th class="thCornerR" height="25" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['L_ACTIVE']) ? $this->vars['L_ACTIVE'] : $this->lang('L_ACTIVE'); ?></th>
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
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['NUMBER']) ? $userrow_item['NUMBER'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="gensmall"><a href="<?php echo isset($userrow_item['U_ADMIN_USER']) ? $userrow_item['U_ADMIN_USER'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a><br /><a href="<?php echo isset($userrow_item['U_ADMIN_USER_AUTH']) ? $userrow_item['U_ADMIN_USER_AUTH'] : ''; ?>"><?php echo isset($this->vars['L_PERMISSION']) ? $this->vars['L_PERMISSION'] : $this->lang('L_PERMISSION'); ?></a></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['USERNAME']) ? $userrow_item['USERNAME'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['EMAIL']) ? $userrow_item['EMAIL'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['POSTS']) ? $userrow_item['POSTS'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['JOINED']) ? $userrow_item['JOINED'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['LAST_VISIT']) ? $userrow_item['LAST_VISIT'] : ''; ?></span></td>
		<td class="<?php echo isset($userrow_item['COLOR']) ? $userrow_item['COLOR'] : ''; ?>" align="center" valign="middle" height="28" nowrap="nowrap"><span class="genmed"><?php echo isset($userrow_item['ACTIVE']) ? $userrow_item['ACTIVE'] : ''; ?></span></td>
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

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
		<td align="right" valign="middle"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
	</tr>
</table>

<br />
