<?php

// eXtreme Styles mod cache. Generated on Mon, 19 Dec 2011 09:53:33 -0500 (time=1324306413)

?><table width="100%" cellspacing="0" cellpadding="2" border="0" align="center"><tr> 
<td align="left" valign="bottom"><span class="gensmall"> 
<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
<?php echo isset($this->vars['LAST_VISIT_DATE']) ? $this->vars['LAST_VISIT_DATE'] : $this->lang('LAST_VISIT_DATE'); ?><br />
<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
<?php echo isset($this->vars['CURRENT_TIME']) ? $this->vars['CURRENT_TIME'] : $this->lang('CURRENT_TIME'); ?><br />
</span><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
</tr>

</table>

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" class="forumline">
<form action="<?php echo isset($this->vars['U_SHOUTBOX']) ? $this->vars['U_SHOUTBOX'] : $this->lang('U_SHOUTBOX'); ?>" method="post" name="post" onsubmit="return checkForm(this)">
	<tr> 
	  <td class="cat" colspan="2" align="center" height="28"> <?php echo isset($this->vars['S_HIDDEN_FORM_FIELDS']) ? $this->vars['S_HIDDEN_FORM_FIELDS'] : $this->lang('S_HIDDEN_FORM_FIELDS'); ?>
<input type="submit" tabindex="1" name="refresh" class="mainoption" value="<?php echo isset($this->vars['L_SHOUT_REFRESH']) ? $this->vars['L_SHOUT_REFRESH'] : $this->lang('L_SHOUT_REFRESH'); ?>" />&nbsp;
</td>
	</tr>

</table>
</form>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	   <td align="right" valign="bottom" class="gensmall"> 
<span class="nav">
	<?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span>
</td>
	</tr>
</table>
<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
	<tr align="right">
		<td class="catHead" colspan="2" height="28" align="center"><b>&nbsp;<?php echo isset($this->vars['L_SHOUTBOX']) ? $this->vars['L_SHOUTBOX'] : $this->lang('L_SHOUTBOX'); ?>&nbsp;<b/></td>
	</tr>
	<tr>
		<th class="thLeft" width="160" height="26" nowrap="nowrap"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
		<th class="thRight" nowrap="nowrap"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
	</tr>

	<?php

$shoutrow_count = ( isset($this->_tpldata['shoutrow.']) ) ?  sizeof($this->_tpldata['shoutrow.']) : 0;
for ($shoutrow_i = 0; $shoutrow_i < $shoutrow_count; $shoutrow_i++)
{
 $shoutrow_item = &$this->_tpldata['shoutrow.'][$shoutrow_i];
 $shoutrow_item['S_ROW_COUNT'] = $shoutrow_i;
 $shoutrow_item['S_NUM_ROWS'] = $shoutrow_count;

?>
	<tr> 
		<td width="160" align="left" valign="top" class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>">
			<span class="name"><b><?php echo isset($shoutrow_item['SHOUT_USERNAME']) ? $shoutrow_item['SHOUT_USERNAME'] : ''; ?></b></span><br />
			<span class="postdetails"><?php echo isset($shoutrow_item['USER_RANK']) ? $shoutrow_item['USER_RANK'] : ''; ?><br />
			<?php echo isset($shoutrow_item['RANK_IMAGE']) ? $shoutrow_item['RANK_IMAGE'] : ''; ?><br/>
			<?php echo isset($shoutrow_item['USER_AVATAR']) ? $shoutrow_item['USER_AVATAR'] : ''; ?><br /><br/><?php echo isset($shoutrow_item['USER_JOINED']) ? $shoutrow_item['USER_JOINED'] : ''; ?></span></td>
		<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>" width="100%" height="28" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="100%"><a href="<?php echo isset($shoutrow_item['U_MINI_POST']) ? $shoutrow_item['U_MINI_POST'] : ''; ?>"><img src="<?php echo isset($shoutrow_item['MINI_POST_IMG']) ? $shoutrow_item['MINI_POST_IMG'] : ''; ?>" width="12" height="9" alt="<?php echo isset($shoutrow_item['L_MINI_POST_ALT']) ? $shoutrow_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($shoutrow_item['L_MINI_POST_ALT']) ? $shoutrow_item['L_MINI_POST_ALT'] : ''; ?>" border="0" /></a><span class="postdetails"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($shoutrow_item['TIME']) ? $shoutrow_item['TIME'] : ''; ?></span></td>
				<td valign="top" align="right" nowrap="nowrap"><?php echo isset($shoutrow_item['QUOTE_IMG']) ? $shoutrow_item['QUOTE_IMG'] : ''; ?><?php echo isset($shoutrow_item['EDIT_IMG']) ? $shoutrow_item['EDIT_IMG'] : ''; ?><?php echo isset($shoutrow_item['DELETE_IMG']) ? $shoutrow_item['DELETE_IMG'] : ''; ?><?php echo isset($shoutrow_item['IP_IMG']) ? $shoutrow_item['IP_IMG'] : ''; ?></td></form>
			</tr>
			<tr> 
				<td colspan="2"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><span class="postbody"><?php echo isset($shoutrow_item['SHOUT']) ? $shoutrow_item['SHOUT'] : ''; ?><?php echo isset($shoutrow_item['SIGNATURE']) ? $shoutrow_item['SIGNATURE'] : ''; ?></span></td>
			</tr>
			</table>
		</td>
	</tr>
	<tr> 
		<td class="spacerow" colspan="2" height="1"><img src="templates/fisubsilversh/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<?php

} // END shoutrow

if(isset($shoutrow_item)) { unset($shoutrow_item); } 

?>

</table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="top"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
	  <td align="right" valign="bottom" class="gensmall"> 
<span class="nav">
	<?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span>
</td>
	</tr>
</table>