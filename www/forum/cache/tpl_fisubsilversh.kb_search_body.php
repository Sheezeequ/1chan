<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 14:26:03 -0400 (time=1436207163)

?>
<form action="<?php echo isset($this->vars['S_SEARCH_ACTION']) ? $this->vars['S_SEARCH_ACTION'] : $this->lang('S_SEARCH_ACTION'); ?>" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left"><span class="nav"><a href="<?php echo isset($this->vars['U_PORTAL']) ? $this->vars['U_PORTAL'] : $this->lang('U_PORTAL'); ?>" class="nav"><?php echo isset($this->vars['L_PORTAL']) ? $this->vars['L_PORTAL'] : $this->lang('L_PORTAL'); ?></a></span></td>
	</tr>
</table>

<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr> 
		<th class="thHead" colspan="4" height="25"><?php echo isset($this->vars['L_SEARCH_QUERY']) ? $this->vars['L_SEARCH_QUERY'] : $this->lang('L_SEARCH_QUERY'); ?></th>
	</tr>
	<tr> 
		<td class="row1" colspan="2" width="50%"><span class="gen"><?php echo isset($this->vars['L_SEARCH_KEYWORDS']) ? $this->vars['L_SEARCH_KEYWORDS'] : $this->lang('L_SEARCH_KEYWORDS'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_SEARCH_KEYWORDS_EXPLAIN']) ? $this->vars['L_SEARCH_KEYWORDS_EXPLAIN'] : $this->lang('L_SEARCH_KEYWORDS_EXPLAIN'); ?></span></td>
		<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> <?php echo isset($this->vars['L_SEARCH_ANY_TERMS']) ? $this->vars['L_SEARCH_ANY_TERMS'] : $this->lang('L_SEARCH_ANY_TERMS'); ?><br /><input type="radio" name="search_terms" value="all" /> <?php echo isset($this->vars['L_SEARCH_ALL_TERMS']) ? $this->vars['L_SEARCH_ALL_TERMS'] : $this->lang('L_SEARCH_ALL_TERMS'); ?></span></td>
	</tr>
	<tr> 
		<td class="cat" colspan="4" align="center" height="28"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input class="liteoption" type="submit" value="<?php echo isset($this->vars['S_SEARCH']) ? $this->vars['S_SEARCH'] : $this->lang('S_SEARCH'); ?>" /></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="right" valign="middle"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
	</tr>
</table></form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>
