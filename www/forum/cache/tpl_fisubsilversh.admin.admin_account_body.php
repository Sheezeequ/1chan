<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:57 -0500 (time=1323530577)

?><br /><br />

<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
	<?php

$there_are_users_count = ( isset($this->_tpldata['there_are_users.']) ) ?  sizeof($this->_tpldata['there_are_users.']) : 0;
for ($there_are_users_i = 0; $there_are_users_i < $there_are_users_count; $there_are_users_i++)
{
 $there_are_users_item = &$this->_tpldata['there_are_users.'][$there_are_users_i];
 $there_are_users_item['S_ROW_COUNT'] = $there_are_users_i;
 $there_are_users_item['S_NUM_ROWS'] = $there_are_users_count;

?>
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
        <td><span class="genmed"><b><?php echo isset($this->vars['INFO_MESSAGE']) ? $this->vars['INFO_MESSAGE'] : $this->lang('INFO_MESSAGE'); ?></b></span></td>
        <td align="right" nowrap="nowrap"><span class="genmed"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;
                                                             <?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp; <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" 
                                                              class="liteoption" /></span></td>
  </tr>
</table>
	<?php

} // END there_are_users

if(isset($there_are_users_item)) { unset($there_are_users_item); } 

?>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr> 
        <th height="25" class="thCornerL" nowrap="nowrap">#</th>
        <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
        <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></th>
        <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></th>
        <th width="33%" class="thCornerL" colspan="2" align="center"><?php echo isset($this->vars['L_ACTIONS']) ? $this->vars['L_ACTIONS'] : $this->lang('L_ACTIONS'); ?></th>
  </tr>
  <tr> 
        <td colspan="5" class="row2"><span class="gensmall"><?php echo isset($this->vars['L_ACTIVATION']) ? $this->vars['L_ACTIVATION'] : $this->lang('L_ACTIVATION'); ?></span></td>
        <td align="right" class="row2"><span class="gensmall"><?php echo isset($this->vars['TOTAL']) ? $this->vars['TOTAL'] : $this->lang('TOTAL'); ?></span></td>
  </tr>
<?php

$admin_account_count = ( isset($this->_tpldata['admin_account.']) ) ?  sizeof($this->_tpldata['admin_account.']) : 0;
for ($admin_account_i = 0; $admin_account_i < $admin_account_count; $admin_account_i++)
{
 $admin_account_item = &$this->_tpldata['admin_account.'][$admin_account_i];
 $admin_account_item['S_ROW_COUNT'] = $admin_account_i;
 $admin_account_item['S_NUM_ROWS'] = $admin_account_count;

?>
  <tr> 
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gensmall">&nbsp;<?php echo isset($admin_account_item['ROW_NUMBER']) ? $admin_account_item['ROW_NUMBER'] : ''; ?>&nbsp;</span></td>
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gen"><a href="<?php echo isset($admin_account_item['U_PROFILE']) ? $admin_account_item['U_PROFILE'] : ''; ?>" class="gen"><?php echo isset($admin_account_item['USERNAME']) ? $admin_account_item['USERNAME'] : ''; ?></a></span></td>
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle">&nbsp;<?php echo isset($admin_account_item['EMAIL']) ? $admin_account_item['EMAIL'] : ''; ?>&nbsp;</td>
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><span class="genmed"><?php echo isset($admin_account_item['REG_DATE']) ? $admin_account_item['REG_DATE'] : ''; ?></span><br />
                                                                                                                      <span class="gensmall"><?php echo isset($admin_account_item['WAITING']) ? $admin_account_item['WAITING'] : ''; ?></span></td>
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><a href="<?php echo isset($admin_account_item['U_DELETE']) ? $admin_account_item['U_DELETE'] : ''; ?>" class="gensmall"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
        <td class="<?php echo isset($admin_account_item['ROW_CLASS']) ? $admin_account_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><a href="<?php echo isset($admin_account_item['U_ACTKEY']) ? $admin_account_item['U_ACTKEY'] : ''; ?>" class="gensmall"><?php echo isset($this->vars['L_ACTIVATE']) ? $this->vars['L_ACTIVATE'] : $this->lang('L_ACTIVATE'); ?></a></td>
  </tr>
<?php

} // END admin_account

if(isset($admin_account_item)) { unset($admin_account_item); } 

?>
<?php

$there_are_no_users_count = ( isset($this->_tpldata['there_are_no_users.']) ) ?  sizeof($this->_tpldata['there_are_no_users.']) : 0;
for ($there_are_no_users_i = 0; $there_are_no_users_i < $there_are_no_users_count; $there_are_no_users_i++)
{
 $there_are_no_users_item = &$this->_tpldata['there_are_no_users.'][$there_are_no_users_i];
 $there_are_no_users_item['S_ROW_COUNT'] = $there_are_no_users_i;
 $there_are_no_users_item['S_NUM_ROWS'] = $there_are_no_users_count;

?>
  <tr> 
        <td class="row2" colspan="6" height="28" align="center"><span class="genmed"><b><?php echo isset($this->vars['L_NO_USERS']) ? $this->vars['L_NO_USERS'] : $this->lang('L_NO_USERS'); ?></b></span></td>
  </tr>
<?php

} // END there_are_no_users

if(isset($there_are_no_users_item)) { unset($there_are_no_users_item); } 

?>
  <tr> 
        <td class="cat" colspan="6" height="28">&nbsp;</td>
  </tr>
</table>

<?php

$there_are_users_count = ( isset($this->_tpldata['there_are_users.']) ) ?  sizeof($this->_tpldata['there_are_users.']) : 0;
for ($there_are_users_i = 0; $there_are_users_i < $there_are_users_count; $there_are_users_i++)
{
 $there_are_users_item = &$this->_tpldata['there_are_users.'][$there_are_users_i];
 $there_are_users_item['S_ROW_COUNT'] = $there_are_users_i;
 $there_are_users_item['S_NUM_ROWS'] = $there_are_users_count;

?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
        <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
        <td align="right"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>
<?php

} // END there_are_users

if(isset($there_are_users_item)) { unset($there_are_users_item); } 

?>
</form>