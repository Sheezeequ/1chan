<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:25:12 -0500 (time=1323527112)

?><div class="maintitle"><?php echo isset($this->vars['L_EMAIL_TITLE']) ? $this->vars['L_EMAIL_TITLE'] : $this->lang('L_EMAIL_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_EMAIL_EXPLAIN']) ? $this->vars['L_EMAIL_EXPLAIN'] : $this->lang('L_EMAIL_EXPLAIN'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_USER_ACTION']) ? $this->vars['S_USER_ACTION'] : $this->lang('S_USER_ACTION'); ?>">

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<table cellspacing="1" cellpadding="3" border="0" class="forumline" width="100%">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_COMPOSE']) ? $this->vars['L_COMPOSE'] : $this->lang('L_COMPOSE'); ?></th>
</tr>
<tr> 
<td class="row1" align="right"><?php echo isset($this->vars['L_RECIPIENTS']) ? $this->vars['L_RECIPIENTS'] : $this->lang('L_RECIPIENTS'); ?>:</td>
<td class="row2"><?php echo isset($this->vars['S_GROUP_SELECT']) ? $this->vars['S_GROUP_SELECT'] : $this->lang('S_GROUP_SELECT'); ?></td>
</tr>
<tr> 
<td class="row1" align="right"><?php echo isset($this->vars['L_EMAIL_SUBJECT']) ? $this->vars['L_EMAIL_SUBJECT'] : $this->lang('L_EMAIL_SUBJECT'); ?>:</td>
<td class="row2"><input type="text" name="subject" size="45" maxlength="100" tabindex="2" class="post" value="<?php echo isset($this->vars['SUBJECT']) ? $this->vars['SUBJECT'] : $this->lang('SUBJECT'); ?>" /> 
</td>
</tr>
<tr> 
<td class="row1" align="right" valign="top"><?php echo isset($this->vars['L_EMAIL_MSG']) ? $this->vars['L_EMAIL_MSG'] : $this->lang('L_EMAIL_MSG'); ?>:</td>
<td class="row2"><textarea name="message" rows="15" cols="35" style="width:450px" tabindex="3" class="post"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></textarea> 
</td>
</tr>
<tr> 
<td colspan="2" align="center" class="cat"> 
<input type="submit" value="<?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?>" name="submit" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />