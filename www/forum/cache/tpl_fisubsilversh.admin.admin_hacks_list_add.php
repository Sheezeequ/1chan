<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:53 -0500 (time=1323533693)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left"><span class="maintitle"><?php echo isset($this->vars['L_PAGE_NAME']) ? $this->vars['L_PAGE_NAME'] : $this->lang('L_PAGE_NAME'); ?></span>
	  	<br /><span class="gensmall"><b><?php echo isset($this->vars['L_VERSION']) ? $this->vars['L_VERSION'] : $this->lang('L_VERSION'); ?> <?php echo isset($this->vars['VERSION']) ? $this->vars['VERSION'] : $this->lang('VERSION'); ?>
	  	<br /><?php echo isset($this->vars['NIVISEC_CHECKER_VERSION']) ? $this->vars['NIVISEC_CHECKER_VERSION'] : $this->lang('NIVISEC_CHECKER_VERSION'); ?></b></span><br /><br />
	  <span class="genmed"><?php echo isset($this->vars['L_PAGE_DESC']) ? $this->vars['L_PAGE_DESC'] : $this->lang('L_PAGE_DESC'); ?><br /><br /><?php echo isset($this->vars['VERSION_CHECK_DATA']) ? $this->vars['VERSION_CHECK_DATA'] : $this->lang('VERSION_CHECK_DATA'); ?></span></td>
	</tr>
  </table>

<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>" name="update_hacks">
 <table width="100%" cellpadding="6" cellspacing="1" border="0" class="forumline">
<tr>
	<td align="right" class="row2" width="40%"><span class="gen"><?php echo isset($this->vars['L_HACK_NAME']) ? $this->vars['L_HACK_NAME'] : $this->lang('L_HACK_NAME'); ?>:<br /></span><span class="gensmall">*<?php echo isset($this->vars['L_REQUIRED']) ? $this->vars['L_REQUIRED'] : $this->lang('L_REQUIRED'); ?></span></td>
	<td align="left" class="row1"><input type="text" class="post" name="hack_name" value="<?php echo isset($this->vars['S_HACK_NAME']) ? $this->vars['S_HACK_NAME'] : $this->lang('S_HACK_NAME'); ?>" maxlength="255" size="50"></td>
</tr>
<tr>
	<td align="right" class="row2" width="40%"><span class="gen"><?php echo isset($this->vars['L_VERSION']) ? $this->vars['L_VERSION'] : $this->lang('L_VERSION'); ?>:</td>
	<td align="left" class="row1"><input type="text" class="post" name="hack_version" value="<?php echo isset($this->vars['S_HACK_VERSION']) ? $this->vars['S_HACK_VERSION'] : $this->lang('S_HACK_VERSION'); ?>" maxlength="255" size="10"></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?>:</span><br /><span class="gensmall">*<?php echo isset($this->vars['L_REQUIRED']) ? $this->vars['L_REQUIRED'] : $this->lang('L_REQUIRED'); ?></span></td>
	<td align="left" class="row1"><textarea class="post" cols="50" rows="4" name="hack_desc"><?php echo isset($this->vars['S_HACK_DESC']) ? $this->vars['S_HACK_DESC'] : $this->lang('S_HACK_DESC'); ?></textarea></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_DOWNLOAD_URL']) ? $this->vars['L_DOWNLOAD_URL'] : $this->lang('L_DOWNLOAD_URL'); ?>:</span></td>
	<td align="left" class="row1"><textarea class="post" cols="50" rows="4" name="hack_download_url"><?php echo isset($this->vars['S_HACK_DOWNLOAD']) ? $this->vars['S_HACK_DOWNLOAD'] : $this->lang('S_HACK_DOWNLOAD'); ?></textarea></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?>:</span><br /><span class="gensmall">*<?php echo isset($this->vars['L_REQUIRED']) ? $this->vars['L_REQUIRED'] : $this->lang('L_REQUIRED'); ?></span></td>
	<td align="left" class="row1"><input type="text" class="post" name="hack_author" value="<?php echo isset($this->vars['S_HACK_AUTHOR']) ? $this->vars['S_HACK_AUTHOR'] : $this->lang('S_HACK_AUTHOR'); ?>" maxlength="255" size="32"></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_AUTHOR_EMAIL']) ? $this->vars['L_AUTHOR_EMAIL'] : $this->lang('L_AUTHOR_EMAIL'); ?>:</span></td>
	<td align="left" class="row1"><input type="text" class="post" name="hack_author_email" value="<?php echo isset($this->vars['S_HACK_AUTHOR_EMAIL']) ? $this->vars['S_HACK_AUTHOR_EMAIL'] : $this->lang('S_HACK_AUTHOR_EMAIL'); ?>" maxlength="255" size="32"></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?>:</span></td>
	<td align="left" class="row1"><textarea class="post" cols="50" rows="4" name="hack_author_website"><?php echo isset($this->vars['S_HACK_WEBSITE']) ? $this->vars['S_HACK_WEBSITE'] : $this->lang('S_HACK_WEBSITE'); ?></textarea></td>
</tr>
<tr>
	<td align="right" class="row2"><span class="gen"><?php echo isset($this->vars['L_USER_VIEWABLE']) ? $this->vars['L_USER_VIEWABLE'] : $this->lang('L_USER_VIEWABLE'); ?>:</span></td>
	<td align="left" class="row1"><input type="radio" name="hack_hide" value="Yes" <?php echo isset($this->vars['S_HACK_HIDE_YES']) ? $this->vars['S_HACK_HIDE_YES'] : $this->lang('S_HACK_HIDE_YES'); ?>>&nbsp;<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;
	<input type="radio" name="hack_hide" value="No" <?php echo isset($this->vars['S_HACK_HIDE_NO']) ? $this->vars['S_HACK_HIDE_NO'] : $this->lang('S_HACK_HIDE_NO'); ?>>&nbsp;<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr>
	<td align="center" class="cat" colspan="2">
	<input type="hidden" name="<?php echo isset($this->vars['S_HIDDEN']) ? $this->vars['S_HIDDEN'] : $this->lang('S_HIDDEN'); ?>" value="<?php echo isset($this->vars['S_HACK_ID']) ? $this->vars['S_HACK_ID'] : $this->lang('S_HACK_ID'); ?>">
	<input type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption">&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption"></td>
</tr>

</table>
</form>
