<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:49 -0500 (time=1323530569)

?><script type="text/javascript" src="../includes/javascript/ajax_searchfunctions.js"></script>

<div class="maintitle"><?php echo isset($this->vars['L_USER_TITLE']) ? $this->vars['L_USER_TITLE'] : $this->lang('L_USER_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_USER_EXPLAIN']) ? $this->vars['L_USER_EXPLAIN'] : $this->lang('L_USER_EXPLAIN'); ?></div>
<br />
<form method="post" name="post" action="<?php echo isset($this->vars['S_USER_ACTION']) ? $this->vars['S_USER_ACTION'] : $this->lang('S_USER_ACTION'); ?>">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th><?php echo isset($this->vars['L_USER_SELECT']) ? $this->vars['L_USER_SELECT'] : $this->lang('L_USER_SELECT'); ?></th>
</tr>
<tr> 
<td class="row1" align="center">
<input type="text" class="post" name="username" id="username" maxlength="50" size="20" onkeyup="AJAXUsernameSearch(this.value, 0);" /><input type="checkbox" name="new_user"><?php echo isset($this->vars['L_CREATE_USER']) ? $this->vars['L_CREATE_USER'] : $this->lang('L_CREATE_USER'); ?>
<span id="username_list" style="display:none;"><span id="username_select">&nbsp;</span>&nbsp;</span><input type="hidden" name="mode" value="edit" />
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
<input type="submit" name="submituser" value="<?php echo isset($this->vars['L_LOOK_UP']) ? $this->vars['L_LOOK_UP'] : $this->lang('L_LOOK_UP'); ?>" class="mainoption" />
<input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="button" onclick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
</td>
</tr>
<tr id="username_error_tbl" style="display:none;">
<td class="row1" id="username_error_text">&nbsp;</td>
</tr>
</table>
</form>
<br />