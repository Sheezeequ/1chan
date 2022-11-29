<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:13:24 -0400 (time=1411974804)

?><script language="Javascript" type="text/javascript">
<!-- 
var filename="<?php echo isset($this->vars['SOUND']) ? $this->vars['SOUND'] : $this->lang('SOUND'); ?>";
if (navigator.appName == "Microsoft Internet Explorer")
    document.writeln ('<BGSOUND SRC="' + filename + '" LOOP="1">');
else if (navigator.appName == "Netscape")
    document.writeln ('<EMBED SRC="' + filename + '" AUTOSTART=TRUE HIDDEN="True"><P>');
// -->
</script><noscript>
<EMBED SRC="<?php echo isset($this->vars['SOUND']) ? $this->vars['SOUND'] : $this->lang('SOUND'); ?>" AUTOSTART="True" HIDDEN="True" LOOP= "1"> 
<BGSOUND SRC="<?php echo isset($this->vars['SOUND']) ? $this->vars['SOUND'] : $this->lang('SOUND'); ?>" LOOP="1">
</noscript>


<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?> method="post">

  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
   <tr> 
      <td> <?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
      <table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline"> 
	<th colspan="2"><?php echo isset($this->vars['L_CHANGE_PASSWD']) ? $this->vars['L_CHANGE_PASSWD'] : $this->lang('L_CHANGE_PASSWD'); ?></th>
	<tr><td colspan="2" class="row2" align="left"><span class="gen"><?php echo isset($this->vars['L_WELCOME']) ? $this->vars['L_WELCOME'] : $this->lang('L_WELCOME'); ?></span> </td></tr>
<?php

$switch_cur_passwd_on_count = ( isset($this->_tpldata['switch_cur_passwd_on.']) ) ?  sizeof($this->_tpldata['switch_cur_passwd_on.']) : 0;
for ($switch_cur_passwd_on_i = 0; $switch_cur_passwd_on_i < $switch_cur_passwd_on_count; $switch_cur_passwd_on_i++)
{
 $switch_cur_passwd_on_item = &$this->_tpldata['switch_cur_passwd_on.'][$switch_cur_passwd_on_i];
 $switch_cur_passwd_on_item['S_ROW_COUNT'] = $switch_cur_passwd_on_i;
 $switch_cur_passwd_on_item['S_NUM_ROWS'] = $switch_cur_passwd_on_count;

?>
	   <tr>
		<td class="row1" align="right"><span class="gensmall"><?php echo isset($this->vars['L_CUR_PASSWORD']) ? $this->vars['L_CUR_PASSWORD'] : $this->lang('L_CUR_PASSWORD'); ?>:</span></td>
		<td class="row2" align="left"><span class="gensmall"><input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="<?php echo isset($this->vars['CUR_PASSWORD']) ? $this->vars['CUR_PASSWORD'] : $this->lang('CUR_PASSWORD'); ?>" /></span></td>
	   </tr>
<?php

} // END switch_cur_passwd_on

if(isset($switch_cur_passwd_on_item)) { unset($switch_cur_passwd_on_item); } 

?>
	   <tr>
		<td class="row1" align="right"><span class="gensmall"><?php echo isset($this->vars['L_NEW_PASSWORD']) ? $this->vars['L_NEW_PASSWORD'] : $this->lang('L_NEW_PASSWORD'); ?>:</span></td>
		<td class="row2" align="left"><span class="gensmall">
<input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="<?php echo isset($this->vars['NEW_PASSWORD']) ? $this->vars['NEW_PASSWORD'] : $this->lang('NEW_PASSWORD'); ?>" />
</span></td>
	   </tr>
	   <tr>
		<td class="row1" align="right"><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_PASSWORD']) ? $this->vars['L_CONFIRM_PASSWORD'] : $this->lang('L_CONFIRM_PASSWORD'); ?>:</span></td>
		<td class="row2" align="left"><span class="gensmall">
<input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="<?php echo isset($this->vars['PASSWORD_CONFIRM']) ? $this->vars['PASSWORD_CONFIRM'] : $this->lang('PASSWORD_CONFIRM'); ?>" />
</span></td>
	   </tr>
	   <tr>
         <td valign="top" class="row1" align="center" colspan="2"><span class="gen">
		<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>">&nbsp;&nbsp;
		<input type="submit" name="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>"><br /><br />
		<span class="genmed"><a href="javascript:window.close();" class="genmed"><?php echo isset($this->vars['L_CLOSE_WINDOW']) ? $this->vars['L_CLOSE_WINDOW'] : $this->lang('L_CLOSE_WINDOW'); ?></a></span><br /></td> 
        </tr> 
      </table> 
     </td> 
   </tr> 
  </table>
</form>

