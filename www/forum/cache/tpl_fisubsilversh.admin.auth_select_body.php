<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:08:22 +0300 (time=1669727302)

?><div class="maintitle"><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></div>
<br />
<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr>
<th><?php echo isset($this->vars['L_AUTH_SELECT']) ? $this->vars['L_AUTH_SELECT'] : $this->lang('L_AUTH_SELECT'); ?></th>
</tr>
<tr>
<td class="row1" align="center" height="30"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><?php echo isset($this->vars['S_AUTH_SELECT']) ? $this->vars['S_AUTH_SELECT'] : $this->lang('S_AUTH_SELECT'); ?>&nbsp;&nbsp; 
<input type="submit" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption" />&nbsp;</td>
</tr>
</table>
</form>
