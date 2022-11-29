<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:33:20 -0500 (time=1323527600)

?><div class="maintitle"><?php echo isset($this->vars['L_EDIT_CATEGORY']) ? $this->vars['L_EDIT_CATEGORY'] : $this->lang('L_EDIT_CATEGORY'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_EDIT_CATEGORY_EXPLAIN']) ? $this->vars['L_EDIT_CATEGORY_EXPLAIN'] : $this->lang('L_EDIT_CATEGORY_EXPLAIN'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" method="post">
<table cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_EDIT_CATEGORY']) ? $this->vars['L_EDIT_CATEGORY'] : $this->lang('L_EDIT_CATEGORY'); ?></th>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?></td>
<td class="row2"><input type="text" size="25" name="cat_title" value="<?php echo isset($this->vars['CAT_TITLE']) ? $this->vars['CAT_TITLE'] : $this->lang('CAT_TITLE'); ?>" class="post" /></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_CAT_DESCRIPTION']) ? $this->vars['L_CAT_DESCRIPTION'] : $this->lang('L_CAT_DESCRIPTION'); ?></td>
<td class="row2"><textarea rows="5" cols="45" wrap="virtual" name="cat_desc" class="post"><?php echo isset($this->vars['CAT_DESCRIPTION']) ? $this->vars['CAT_DESCRIPTION'] : $this->lang('CAT_DESCRIPTION'); ?></textarea></td>
</tr>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_ICON']) ? $this->vars['L_ICON'] : $this->lang('L_ICON'); ?></span><span class="gensmall"><br /><?php echo isset($this->vars['L_ICON_EXPLAIN']) ? $this->vars['L_ICON_EXPLAIN'] : $this->lang('L_ICON_EXPLAIN'); ?></span></td>
<td class="row2"><span class="gen"><input name="icon" value="<?php echo isset($this->vars['ICON']) ? $this->vars['ICON'] : $this->lang('ICON'); ?>" type="text" class="post" size="60" /><?php echo isset($this->vars['ICON_IMG']) ? $this->vars['ICON_IMG'] : $this->lang('ICON_IMG'); ?></span></td>
</tr>
<tr>
<td class="row1"><?php echo isset($this->vars['L_CATEGORY_ATTACHMENT']) ? $this->vars['L_CATEGORY_ATTACHMENT'] : $this->lang('L_CATEGORY_ATTACHMENT'); ?></td>
<td class="row2"><select name="cat_main"><?php echo isset($this->vars['S_CAT_LIST']) ? $this->vars['S_CAT_LIST'] : $this->lang('S_CAT_LIST'); ?></select></td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['S_SUBMIT_VALUE']) ? $this->vars['S_SUBMIT_VALUE'] : $this->lang('S_SUBMIT_VALUE'); ?>" class="mainoption" /></td>
</tr>
</table>
</form>
<br clear="all" />
