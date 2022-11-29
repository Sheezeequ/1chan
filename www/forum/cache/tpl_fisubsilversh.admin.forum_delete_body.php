<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:08:39 +0300 (time=1669727319)

?><div class="maintitle"><?php echo isset($this->vars['L_FORUM_DELETE']) ? $this->vars['L_FORUM_DELETE'] : $this->lang('L_FORUM_DELETE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_FORUM_DELETE_EXPLAIN']) ? $this->vars['L_FORUM_DELETE_EXPLAIN'] : $this->lang('L_FORUM_DELETE_EXPLAIN'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" method="post">
<table cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_FORUM_DELETE']) ? $this->vars['L_FORUM_DELETE'] : $this->lang('L_FORUM_DELETE'); ?></th>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FORUM_NAME']) ? $this->vars['L_FORUM_NAME'] : $this->lang('L_FORUM_NAME'); ?></td>
<td class="row1"><?php echo isset($this->vars['NAME']) ? $this->vars['NAME'] : $this->lang('NAME'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FORUM_DESC']) ? $this->vars['L_FORUM_DESC'] : $this->lang('L_FORUM_DESC'); ?></td>
<td class="row1"><?php echo isset($this->vars['DESC']) ? $this->vars['DESC'] : $this->lang('DESC'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_MOVE_CONTENTS']) ? $this->vars['L_MOVE_CONTENTS'] : $this->lang('L_MOVE_CONTENTS'); ?></td>
<td class="row1"><?php echo isset($this->vars['S_SELECT_TO']) ? $this->vars['S_SELECT_TO'] : $this->lang('S_SELECT_TO'); ?></td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['S_SUBMIT_VALUE']) ? $this->vars['S_SUBMIT_VALUE'] : $this->lang('S_SUBMIT_VALUE'); ?>" class="mainoption" />
</td>
</tr>
</table>
</form>
<br />
<br />