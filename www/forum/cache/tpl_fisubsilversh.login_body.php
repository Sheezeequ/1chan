<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:52 +0300 (time=1669727212)

?><form action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="maintitle"><?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<th><?php echo isset($this->vars['L_ENTER_PASSWORD']) ? $this->vars['L_ENTER_PASSWORD'] : $this->lang('L_ENTER_PASSWORD'); ?></th>
</tr>
<tr>
<td class="row1">
<table border="0" cellpadding="3" cellspacing="1" width="100%">
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td width="45%" align="right" class="explaintitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</td>
<td width="55%">
<input type="text" name="username" size="25" maxlength="40" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" class="post" />
</td>
</tr>
<tr>
<td align="right" class="explaintitle"><?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>:</td>
<td>
<input type="password" name="password" size="25" maxlength="32" class="post" />
</td>
</tr>
<?php

$switch_allow_autologin_count = ( isset($this->_tpldata['switch_allow_autologin.']) ) ?  sizeof($this->_tpldata['switch_allow_autologin.']) : 0;
for ($switch_allow_autologin_i = 0; $switch_allow_autologin_i < $switch_allow_autologin_count; $switch_allow_autologin_i++)
{
 $switch_allow_autologin_item = &$this->_tpldata['switch_allow_autologin.'][$switch_allow_autologin_i];
 $switch_allow_autologin_item['S_ROW_COUNT'] = $switch_allow_autologin_i;
 $switch_allow_autologin_item['S_NUM_ROWS'] = $switch_allow_autologin_count;

?>
<tr>
<td colspan="2" align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="genmed"><?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?>:&nbsp;</td>
<td><input name="autologin" type="checkbox" /></td>
</tr>
</table>
</td>
</tr>
<?php

} // END switch_allow_autologin

if(isset($switch_allow_autologin_item)) { unset($switch_allow_autologin_item); } 

?>
<?php

$switch_confirm_count = ( isset($this->_tpldata['switch_confirm.']) ) ?  sizeof($this->_tpldata['switch_confirm.']) : 0;
for ($switch_confirm_i = 0; $switch_confirm_i < $switch_confirm_count; $switch_confirm_i++)
{
 $switch_confirm_item = &$this->_tpldata['switch_confirm.'][$switch_confirm_i];
 $switch_confirm_item['S_ROW_COUNT'] = $switch_confirm_i;
 $switch_confirm_item['S_NUM_ROWS'] = $switch_confirm_count;

?>
<tr>
<td class="row1" colspan="2" align="center">
<span class="genmed"><?php echo isset($this->vars['L_CONFIRM_CODE']) ? $this->vars['L_CONFIRM_CODE'] : $this->lang('L_CONFIRM_CODE'); ?></span><br /><br /><?php echo isset($this->vars['CONFIRM_IMG']) ? $this->vars['CONFIRM_IMG'] : $this->lang('CONFIRM_IMG'); ?><br /><br /></td>
</tr>
<tr>
<td class="row1" colspan="2" align="center">
<input type="text" class="post" name="confirm_code" size="25" maxlength="6" value="" />
</td>
</tr>
<?php

} // END switch_confirm

if(isset($switch_confirm_item)) { unset($switch_confirm_item); } 

?>
<tr>
<td colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="login" class="mainoption" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" />
</td>
</tr>
<tr>
<td colspan="2" class="gensmall" align="center"><a href="<?php echo isset($this->vars['U_SEND_PASSWORD']) ? $this->vars['U_SEND_PASSWORD'] : $this->lang('U_SEND_PASSWORD'); ?>"><?php echo isset($this->vars['L_SEND_PASSWORD']) ? $this->vars['L_SEND_PASSWORD'] : $this->lang('L_SEND_PASSWORD'); ?></a></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="cat">&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?></td>
</tr>
</table>
</form>
