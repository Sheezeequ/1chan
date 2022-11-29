<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:14:18 -0400 (time=1411974858)

?><div class="maintitle"><?php echo isset($this->vars['L_DATABASE_RESTORE']) ? $this->vars['L_DATABASE_RESTORE'] : $this->lang('L_DATABASE_RESTORE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_RESTORE_EXPLAIN']) ? $this->vars['L_RESTORE_EXPLAIN'] : $this->lang('L_RESTORE_EXPLAIN'); ?></div>
<br />
<form enctype="multipart/form-data" method="post" action="<?php echo isset($this->vars['S_DBUTILS_ACTION']) ? $this->vars['S_DBUTILS_ACTION'] : $this->lang('S_DBUTILS_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr>
		
<th><?php echo isset($this->vars['L_SELECT_FILE']) ? $this->vars['L_SELECT_FILE'] : $this->lang('L_SELECT_FILE'); ?></th>
	</tr>
	<tr>
		<td class="row1" align="center">&nbsp;
<input type="file" name="backup_file" class="post" />
&nbsp;&nbsp;<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="restore_start" value="<?php echo isset($this->vars['L_START_RESTORE']) ? $this->vars['L_START_RESTORE'] : $this->lang('L_START_RESTORE'); ?>" class="mainoption" />&nbsp;</td>
	</tr>
</table>
</form>
<br />
<br />