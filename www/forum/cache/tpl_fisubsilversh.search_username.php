<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:23:29 -0500 (time=1323530609)

?><script type="text/javascript" src="includes/javascript/ajax_searchfunctions.js"></script>

<script language="javascript" type="text/javascript">
<!--
function refresh_username(selected_username)
{
	if (selected_username == '-1')
	{
		return;
	}
	
	opener.document.forms['post'].username.value = selected_username;
	opener.focus();
	window.close();
}
//-->
</script>
<form method="post" name="search" action="<?php echo isset($this->vars['S_SEARCH_ACTION']) ? $this->vars['S_SEARCH_ACTION'] : $this->lang('S_SEARCH_ACTION'); ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="10" align="center">
<tr>
<td class="forumline">
<table width="100%" class="forumline" cellpadding="3" cellspacing="1" border="0">
<tr>
<th><?php echo isset($this->vars['L_SEARCH_USERNAME']) ? $this->vars['L_SEARCH_USERNAME'] : $this->lang('L_SEARCH_USERNAME'); ?></th>
</tr>
<tr> 
<td valign="top" class="row1"> <br /> <input type="text" name="search_username" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" class="post" onkeyup="AJAXUsernameSearch(this.value, 1);" /> 
&nbsp; <input type="submit" name="search" value="<?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?>" class="button" /> 
<br />
<span class="gensmall" id="username_list" <?php echo isset($this->vars['USERNAME_LIST_VIS']) ? $this->vars['USERNAME_LIST_VIS'] : $this->lang('USERNAME_LIST_VIS'); ?>><?php echo isset($this->vars['L_SEARCH_EXPLAIN']) ? $this->vars['L_SEARCH_EXPLAIN'] : $this->lang('L_SEARCH_EXPLAIN'); ?></span><br />
<span id="username_list"><?php echo isset($this->vars['L_UPDATE_USERNAME']) ? $this->vars['L_UPDATE_USERNAME'] : $this->lang('L_UPDATE_USERNAME'); ?></span><br />
<span id="username_select"><select name="username_list"><?php echo isset($this->vars['S_USERNAME_OPTIONS']) ? $this->vars['S_USERNAME_OPTIONS'] : $this->lang('S_USERNAME_OPTIONS'); ?></select></span>
&nbsp; 
<input type="submit" class="button" onclick="refresh_username(this.form.username_list.options[this.form.username_list.selectedIndex].value);return false;" name="use" value="<?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?>" />
<br />
<br />
<div align="center" class="genmed">
<a href="javascript:window.close();"><?php echo isset($this->vars['L_CLOSE_WINDOW']) ? $this->vars['L_CLOSE_WINDOW'] : $this->lang('L_CLOSE_WINDOW'); ?></a></div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
