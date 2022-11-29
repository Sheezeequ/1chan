<?php

// eXtreme Styles mod cache. Generated on Wed, 19 Jun 2013 16:23:40 -0400 (time=1371673420)

?>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom" nowrap>
			<span class="nav">
			<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a>
			</span>
		</td>
	</tr>
</table>
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
	<tr>
		<th class="thHead"><?php echo isset($this->vars['L_TELL_FRIEND_TITLE']) ? $this->vars['L_TELL_FRIEND_TITLE'] : $this->lang('L_TELL_FRIEND_TITLE'); ?></th>
	</tr>
	<tr>
		<td class="row1">
		<br><br>
		<form action="<?php echo isset($this->vars['SUBMIT_ACTION']) ? $this->vars['SUBMIT_ACTION'] : $this->lang('SUBMIT_ACTION'); ?>" method="post">
		<table width="70%" align="center">
			<tr>
			<td>
			<span class="nav"><?php echo isset($this->vars['L_TELL_FRIEND_SENDER_USER']) ? $this->vars['L_TELL_FRIEND_SENDER_USER'] : $this->lang('L_TELL_FRIEND_SENDER_USER'); ?></span>
			</td>
			<td>
			<span class="nav"><?php echo isset($this->vars['SENDER_NAME']) ? $this->vars['SENDER_NAME'] : $this->lang('SENDER_NAME'); ?></span>
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav"><?php echo isset($this->vars['L_TELL_FRIEND_SENDER_EMAIL']) ? $this->vars['L_TELL_FRIEND_SENDER_EMAIL'] : $this->lang('L_TELL_FRIEND_SENDER_EMAIL'); ?></span>
			</td>
			<td>
			<span class="nav"><?php echo isset($this->vars['SENDER_MAIL']) ? $this->vars['SENDER_MAIL'] : $this->lang('SENDER_MAIL'); ?></span>
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav"><?php echo isset($this->vars['L_TELL_FRIEND_RECIEVER_USER']) ? $this->vars['L_TELL_FRIEND_RECIEVER_USER'] : $this->lang('L_TELL_FRIEND_RECIEVER_USER'); ?></span>
			</td>
			<td>
			<input type="text" name="friendname" size="25" maxlength="100">
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav"><?php echo isset($this->vars['L_TELL_FRIEND_RECIEVER_EMAIL']) ? $this->vars['L_TELL_FRIEND_RECIEVER_EMAIL'] : $this->lang('L_TELL_FRIEND_RECIEVER_EMAIL'); ?></span>
			</td>
			<td>
			<input type="text" name="friendemail" size="25" maxlength="100">
			</td>
			</tr>
			<tr>
			<td valign=top>
			<span class="nav"><?php echo isset($this->vars['L_TELL_FRIEND_MSG']) ? $this->vars['L_TELL_FRIEND_MSG'] : $this->lang('L_TELL_FRIEND_MSG'); ?></span>
			</td>
			<td>
			<textarea name="message" rows="10" cols="50"><?php echo isset($this->vars['L_TELL_FRIEND_BODY']) ? $this->vars['L_TELL_FRIEND_BODY'] : $this->lang('L_TELL_FRIEND_BODY'); ?>
			</textarea>
			</td>
			</tr>
			<input type="hidden" name="topic" value="">
		</table>
		<br><center>
		<input type="hidden" name="topic" size="25" maxlength="100" value="<?php echo isset($this->vars['TOPIC']) ? $this->vars['TOPIC'] : $this->lang('TOPIC'); ?>">
		<input type="hidden" name="linkk" size="25" maxlength="100" value="<?php echo isset($this->vars['LINK']) ? $this->vars['LINK'] : $this->lang('LINK'); ?>">
		<input type="submit" name="submit" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>">
		</center>
		</form>
		<br />
		</td>
	</tr>
	<tr>
		<td height="28" class="cat">&nbsp;</td>
	</tr>
</table>

