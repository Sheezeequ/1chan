<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:34:02 -0500 (time=1323527642)

?><div class="maintitle"><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_FORUM_EXPLAIN']) ? $this->vars['L_FORUM_EXPLAIN'] : $this->lang('L_FORUM_EXPLAIN'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" method="post">
  
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_FORUM_SETTINGS']) ? $this->vars['L_FORUM_SETTINGS'] : $this->lang('L_FORUM_SETTINGS'); ?></th>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FORUM_NAME']) ? $this->vars['L_FORUM_NAME'] : $this->lang('L_FORUM_NAME'); ?></td>
<td class="row2" height="25"> 
<input type="text" size="25" name="forumname" value="<?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FORUM_DESCRIPTION']) ? $this->vars['L_FORUM_DESCRIPTION'] : $this->lang('L_FORUM_DESCRIPTION'); ?></td>
<td class="row2"> 
<textarea rows="5" style="width: 350px" cols="35" name="forumdesc" class="post"><?php echo isset($this->vars['DESCRIPTION']) ? $this->vars['DESCRIPTION'] : $this->lang('DESCRIPTION'); ?></textarea>
</td>
</tr>
<tr>
<td class="row1"><span class="gen"><?php echo isset($this->vars['L_ICON']) ? $this->vars['L_ICON'] : $this->lang('L_ICON'); ?></span><span class="gensmall"><br /><?php echo isset($this->vars['L_ICON_EXPLAIN']) ? $this->vars['L_ICON_EXPLAIN'] : $this->lang('L_ICON_EXPLAIN'); ?></span></td>
<td class="row2"><span class="gen"><input name="icon" value="<?php echo isset($this->vars['ICON']) ? $this->vars['ICON'] : $this->lang('ICON'); ?>" type="text" class="post" size="60" /><?php echo isset($this->vars['ICON_IMG']) ? $this->vars['ICON_IMG'] : $this->lang('ICON_IMG'); ?></span></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?></td>
<td class="row2"> 
<select name="c"><?php echo isset($this->vars['S_CAT_LIST']) ? $this->vars['S_CAT_LIST'] : $this->lang('S_CAT_LIST'); ?></select>
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FORUM_STATUS']) ? $this->vars['L_FORUM_STATUS'] : $this->lang('L_FORUM_STATUS'); ?></td>
<td class="row2"> 
<select name="forumstatus"><?php echo isset($this->vars['S_STATUS_LIST']) ? $this->vars['S_STATUS_LIST'] : $this->lang('S_STATUS_LIST'); ?></select>
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_COUNT_POSTS']) ? $this->vars['L_COUNT_POSTS'] : $this->lang('L_COUNT_POSTS'); ?></td> 
<td class="row2"><input type="radio" name="count_posts" value="1" <?php echo isset($this->vars['COUNT_POSTS_YES']) ? $this->vars['COUNT_POSTS_YES'] : $this->lang('COUNT_POSTS_YES'); ?> /> 
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;<input type="radio" name="count_posts" value="0" <?php echo isset($this->vars['COUNT_POSTS_NO']) ? $this->vars['COUNT_POSTS_NO'] : $this->lang('COUNT_POSTS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td> 
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_AUTO_PRUNE']) ? $this->vars['L_AUTO_PRUNE'] : $this->lang('L_AUTO_PRUNE'); ?></td>
<td class="row2"> 
<table cellspacing="0" cellpadding="1" border="0">
<tr> 
<td align="right" valign="middle"><?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?></td>
<td align="left" valign="middle"> 
<input type="checkbox" name="prune_enable" value="1" <?php echo isset($this->vars['S_PRUNE_ENABLED']) ? $this->vars['S_PRUNE_ENABLED'] : $this->lang('S_PRUNE_ENABLED'); ?> />
</td>
</tr>
<tr> 
<td align="right" valign="middle"><?php echo isset($this->vars['L_PRUNE_DAYS']) ? $this->vars['L_PRUNE_DAYS'] : $this->lang('L_PRUNE_DAYS'); ?></td>
<td align="left" valign="middle">&nbsp; 
<input type="text" name="prune_days" value="<?php echo isset($this->vars['PRUNE_DAYS']) ? $this->vars['PRUNE_DAYS'] : $this->lang('PRUNE_DAYS'); ?>" size="5" class="post" />
&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></td>
</tr>
<tr> 
<td align="right" valign="middle"><?php echo isset($this->vars['L_PRUNE_FREQ']) ? $this->vars['L_PRUNE_FREQ'] : $this->lang('L_PRUNE_FREQ'); ?></td>
<td align="left" valign="middle">&nbsp; 
<input type="text" name="prune_freq" value="<?php echo isset($this->vars['PRUNE_FREQ']) ? $this->vars['PRUNE_FREQ'] : $this->lang('PRUNE_FREQ'); ?>" size="5" class="post" />
&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1"><?php echo isset($this->vars['L_LINK']) ? $this->vars['L_LINK'] : $this->lang('L_LINK'); ?>&nbsp;</td>
<td class="row2" align="center">
<table cellspacing="0" cellpadding="3" border="0">
<tr>
<td align="right"><?php echo isset($this->vars['L_FORUM_LINK']) ? $this->vars['L_FORUM_LINK'] : $this->lang('L_FORUM_LINK'); ?>&nbsp;</td>
<td>
<input type="text" name="forum_link" value="<?php echo isset($this->vars['FORUM_LINK']) ? $this->vars['FORUM_LINK'] : $this->lang('FORUM_LINK'); ?>" size="60" class="post" /><br />
<span class="gensmall"><?php echo isset($this->vars['L_FORUM_LINK_EXPLAIN']) ? $this->vars['L_FORUM_LINK_EXPLAIN'] : $this->lang('L_FORUM_LINK_EXPLAIN'); ?></span>
</td>
</tr>
<tr>
<td align="right"><?php echo isset($this->vars['L_FORUM_LINK_INTERNAL']) ? $this->vars['L_FORUM_LINK_INTERNAL'] : $this->lang('L_FORUM_LINK_INTERNAL'); ?>&nbsp;</td>
<td>
<input type="radio" name="forum_link_internal" value="1" <?php echo isset($this->vars['FORUM_LINK_INTERNAL_YES']) ? $this->vars['FORUM_LINK_INTERNAL_YES'] : $this->lang('FORUM_LINK_INTERNAL_YES'); ?> />&nbsp;<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="forum_link_internal" value="0" <?php echo isset($this->vars['FORUM_LINK_INTERNAL_NO']) ? $this->vars['FORUM_LINK_INTERNAL_NO'] : $this->lang('FORUM_LINK_INTERNAL_NO'); ?> />&nbsp;<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_FORUM_LINK_INTERNAL_EXPLAIN']) ? $this->vars['L_FORUM_LINK_INTERNAL_EXPLAIN'] : $this->lang('L_FORUM_LINK_INTERNAL_EXPLAIN'); ?></span>
</td>
</tr>
<tr>
<td align="right"><?php echo isset($this->vars['L_FORUM_LINK_HIT_COUNT']) ? $this->vars['L_FORUM_LINK_HIT_COUNT'] : $this->lang('L_FORUM_LINK_HIT_COUNT'); ?>&nbsp;</td>
<td>
<input type="radio" name="forum_link_hit_count" value="1" <?php echo isset($this->vars['FORUM_LINK_HIT_COUNT_YES']) ? $this->vars['FORUM_LINK_HIT_COUNT_YES'] : $this->lang('FORUM_LINK_HIT_COUNT_YES'); ?> />&nbsp;<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="forum_link_hit_count" value="0" <?php echo isset($this->vars['FORUM_LINK_HIT_COUNT_NO']) ? $this->vars['FORUM_LINK_HIT_COUNT_NO'] : $this->lang('FORUM_LINK_HIT_COUNT_NO'); ?> />&nbsp;<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?><br />
<span class="gensmall">&nbsp;<?php echo isset($this->vars['L_FORUM_LINK_HIT_COUNT_EXPLAIN']) ? $this->vars['L_FORUM_LINK_HIT_COUNT_EXPLAIN'] : $this->lang('L_FORUM_LINK_HIT_COUNT_EXPLAIN'); ?></span>
</td>
</tr>
</table>
</td>
</tr>
<tr> 
<td colspan="2" align="center" class="cat"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['S_SUBMIT_VALUE']) ? $this->vars['S_SUBMIT_VALUE'] : $this->lang('S_SUBMIT_VALUE'); ?>" class="mainoption" />
</td>
</tr>
</table>
</form>
		
<br clear="all" />
