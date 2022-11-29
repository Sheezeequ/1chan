<?php

// eXtreme Styles mod cache. Generated on Sat, 13 Dec 2014 04:48:03 -0500 (time=1418464083)

?><form action="<?php echo isset($this->vars['S_SEARCH_ACTION']) ? $this->vars['S_SEARCH_ACTION'] : $this->lang('S_SEARCH_ACTION'); ?>" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></td>
</tr>
</table>
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
<tr>
<th colspan="4"><?php echo isset($this->vars['L_SEARCH_QUERY']) ? $this->vars['L_SEARCH_QUERY'] : $this->lang('L_SEARCH_QUERY'); ?></th>
</tr>
<tr>
<td class="row1" colspan="2" width="50%"><span class="explaintitle"><?php echo isset($this->vars['L_SEARCH_KEYWORDS']) ? $this->vars['L_SEARCH_KEYWORDS'] : $this->lang('L_SEARCH_KEYWORDS'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_KEYWORDS_EXPLAIN']) ? $this->vars['L_SEARCH_KEYWORDS_EXPLAIN'] : $this->lang('L_SEARCH_KEYWORDS_EXPLAIN'); ?></span></td>
<td class="row2" colspan="2"> <input type="text" style="width: 300px" class="post" name="search_keywords" size="30" />
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="search_terms" value="any" checked="checked" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SEARCH_ANY_TERMS']) ? $this->vars['L_SEARCH_ANY_TERMS'] : $this->lang('L_SEARCH_ANY_TERMS'); ?></td>
</tr>
<tr>
<td><input type="radio" name="search_terms" value="all" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SEARCH_ALL_TERMS']) ? $this->vars['L_SEARCH_ALL_TERMS'] : $this->lang('L_SEARCH_ALL_TERMS'); ?><?php echo isset($this->vars['L_ONLY_BLUECARDS']) ? $this->vars['L_ONLY_BLUECARDS'] : $this->lang('L_ONLY_BLUECARDS'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" colspan="2"><span class="explaintitle"><?php echo isset($this->vars['L_SEARCH_AUTHOR']) ? $this->vars['L_SEARCH_AUTHOR'] : $this->lang('L_SEARCH_AUTHOR'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_AUTHOR_EXPLAIN']) ? $this->vars['L_SEARCH_AUTHOR_EXPLAIN'] : $this->lang('L_SEARCH_AUTHOR_EXPLAIN'); ?></span></td>
<td class="row2" colspan="2">
<input type="text" style="width: 300px" class="post" name="search_author" size="30" />
</td>
</tr>
<tr>
<th colspan="4"><?php echo isset($this->vars['L_SEARCH_OPTIONS']) ? $this->vars['L_SEARCH_OPTIONS'] : $this->lang('L_SEARCH_OPTIONS'); ?></th>
</tr>
<tr>
<td class="row1" align="right"><span class="explaintitle"><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>:</span></td>
<td class="row2">
<select class="post" name="search_where"><?php echo isset($this->vars['S_FORUM_OPTIONS']) ? $this->vars['S_FORUM_OPTIONS'] : $this->lang('S_FORUM_OPTIONS'); ?></select>
</td>
<td class="row1" align="right" nowrap="nowrap"><span class="explaintitle"><?php echo isset($this->vars['L_SEARCH_PREVIOUS']) ? $this->vars['L_SEARCH_PREVIOUS'] : $this->lang('L_SEARCH_PREVIOUS'); ?>:</span></td>
<td class="row2">
<select class="post" name="search_time"><?php echo isset($this->vars['S_TIME_OPTIONS']) ? $this->vars['S_TIME_OPTIONS'] : $this->lang('S_TIME_OPTIONS'); ?></select>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="search_fields" value="all" <?php echo isset($this->vars['S_SEARCH_MESSAGE_OPTIONS']) ? $this->vars['S_SEARCH_MESSAGE_OPTIONS'] : $this->lang('S_SEARCH_MESSAGE_OPTIONS'); ?> /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SEARCH_MESSAGE_TITLE']) ? $this->vars['L_SEARCH_MESSAGE_TITLE'] : $this->lang('L_SEARCH_MESSAGE_TITLE'); ?></td>
</tr>
<tr>
<td><input type="radio" name="search_fields" value="msgonly" <?php echo isset($this->vars['S_SEARCH_MESSAGE_OPTIONS2']) ? $this->vars['S_SEARCH_MESSAGE_OPTIONS2'] : $this->lang('S_SEARCH_MESSAGE_OPTIONS2'); ?> /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SEARCH_MESSAGE_ONLY']) ? $this->vars['L_SEARCH_MESSAGE_ONLY'] : $this->lang('L_SEARCH_MESSAGE_ONLY'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" align="right" nowrap="nowrap"><span class="explaintitle"><?php echo isset($this->vars['L_DISPLAY_RESULTS']) ? $this->vars['L_DISPLAY_RESULTS'] : $this->lang('L_DISPLAY_RESULTS'); ?>:</span></td>
<td class="row2" nowrap="nowrap">
<input type="radio" name="show_results" value="posts" /><span class="genmed"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?><input type="radio" name="show_results" value="topics" checked="checked" /><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?></span></td>
</td>
<td class="row1" align="right" rowspan="2"><span class="explaintitle"><?php echo isset($this->vars['L_SORT_BY']) ? $this->vars['L_SORT_BY'] : $this->lang('L_SORT_BY'); ?>:</span></td>
<td class="row2" nowrap="nowrap"  rowspan="2">
<select class="post" name="sort_by"><?php echo isset($this->vars['S_SORT_OPTIONS']) ? $this->vars['S_SORT_OPTIONS'] : $this->lang('S_SORT_OPTIONS'); ?></select>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="sort_dir" value="ASC" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SORT_ASCENDING']) ? $this->vars['L_SORT_ASCENDING'] : $this->lang('L_SORT_ASCENDING'); ?></td>
</tr>
<tr>
<td><input type="radio" name="sort_dir" value="DESC" checked="checked" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;<?php echo isset($this->vars['L_SORT_DESCENDING']) ? $this->vars['L_SORT_DESCENDING'] : $this->lang('L_SORT_DESCENDING'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" align="right"><span class="explaintitle"><?php echo isset($this->vars['L_RETURN_FIRST']) ? $this->vars['L_RETURN_FIRST'] : $this->lang('L_RETURN_FIRST'); ?>:</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><select class="post" name="return_chars"><?php echo isset($this->vars['S_CHARACTER_OPTIONS']) ? $this->vars['S_CHARACTER_OPTIONS'] : $this->lang('S_CHARACTER_OPTIONS'); ?></select></td>
<td class="genmed" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_CHARACTERS']) ? $this->vars['L_CHARACTERS'] : $this->lang('L_CHARACTERS'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="cat" colspan="4" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input class="button" type="submit" value="<?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?>" />
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> &raquo; <?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></td>
</tr>
</table>
</form>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
	</tr>
</table>