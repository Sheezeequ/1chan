<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:14:38 +0300 (time=1669727678)

?><form method="post" action="search.php?mode=results">
  <input type="hidden" name="search_where" value="f<?php echo isset($this->vars['FORUM_ID']) ? $this->vars['FORUM_ID'] : $this->lang('FORUM_ID'); ?>">
  <input type="hidden" name="show_results" value="topics">
  <input type="hidden" name="search_terms" value="any">
  <input type="hidden" name="search_fields" value="all">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td class="maintitle"><?php echo isset($this->vars['BANNER_13_IMG']) ? $this->vars['BANNER_13_IMG'] : $this->lang('BANNER_13_IMG'); ?><br/><a href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a></td>
<td class="gensmall" align="right" valign="bottom"><?php echo isset($this->vars['L_MODERATOR']) ? $this->vars['L_MODERATOR'] : $this->lang('L_MODERATOR'); ?>: <?php echo isset($this->vars['MODERATORS']) ? $this->vars['MODERATORS'] : $this->lang('MODERATORS'); ?><br />
<?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?><br/><?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?><br />
<strong><a href="<?php echo isset($this->vars['U_MARK_READ']) ? $this->vars['U_MARK_READ'] : $this->lang('U_MARK_READ'); ?>"><?php echo isset($this->vars['L_MARK_TOPICS_READ']) ? $this->vars['L_MARK_TOPICS_READ'] : $this->lang('L_MARK_TOPICS_READ'); ?></a></strong></td>
</tr>
</table>
<?php echo isset($this->vars['BOARD_ANNOUNCES']) ? $this->vars['BOARD_ANNOUNCES'] : $this->lang('BOARD_ANNOUNCES'); ?>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr> 
<td><br /><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a></td>
<td align="left" valign="middle" class="nav" width="100%"><br /><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<td nowrap="nowrap" class="nav" align="right"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?><br /><br /><span class="gensmall"><?php echo isset($this->vars['L_SEARCH_FOR']) ? $this->vars['L_SEARCH_FOR'] : $this->lang('L_SEARCH_FOR'); ?>: </span><input class="liteoption" type="text" name="search_keywords" value="" size="20" maxlength="150" />&nbsp;<input type="submit" name="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" alt="<?php echo isset($this->vars['L_SUBMIT_SEARCH']) ? $this->vars['L_SUBMIT_SEARCH'] : $this->lang('L_SUBMIT_SEARCH'); ?>" class="liteoption" /></td>
</tr>
</table>
</form>
<script type="text/javascript" src="includes/javascript/ajax_topicfunctions.js"></script>
<form method="post" action="<?php echo isset($this->vars['S_POST_DAYS_ACTION']) ? $this->vars['S_POST_DAYS_ACTION'] : $this->lang('S_POST_DAYS_ACTION'); ?>">
<?php echo isset($this->vars['BOARD_INDEX']) ? $this->vars['BOARD_INDEX'] : $this->lang('BOARD_INDEX'); ?>
<?php echo isset($this->vars['TOPICS_LIST_BOX']) ? $this->vars['TOPICS_LIST_BOX'] : $this->lang('TOPICS_LIST_BOX'); ?>
</form>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" title="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a></td>
<td align="left" valign="middle" class="nav" width="100%"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?></span></td>
<td nowrap="nowrap" class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
<td class="gensmall" align="right" valign="top"><strong><a href="<?php echo isset($this->vars['U_MARK_READ']) ? $this->vars['U_MARK_READ'] : $this->lang('U_MARK_READ'); ?>"><?php echo isset($this->vars['L_MARK_TOPICS_READ']) ? $this->vars['L_MARK_TOPICS_READ'] : $this->lang('L_MARK_TOPICS_READ'); ?></a></strong><br />
<?php echo isset($this->vars['L_MODERATOR']) ? $this->vars['L_MODERATOR'] : $this->lang('L_MODERATOR'); ?>: <?php echo isset($this->vars['MODERATORS']) ? $this->vars['MODERATORS'] : $this->lang('MODERATORS'); ?><br />
<?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?><br/><?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?>
</td>
</tr>
</table>
<br />
<table width="100%" cellspacing="0" border="0" align="center" cellpadding="0">
<tr>
<td valign="top">
<table border="0" cellspacing="1" cellpadding="0">
<tr>
<td><img src="<?php echo isset($this->vars['FOLDER_NEW_IMG']) ? $this->vars['FOLDER_NEW_IMG'] : $this->lang('FOLDER_NEW_IMG'); ?>" alt="<?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?></td>
<td>&nbsp;&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_IMG']) ? $this->vars['FOLDER_IMG'] : $this->lang('FOLDER_IMG'); ?>" alt="<?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?>" title="<?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?></td>
<td>&nbsp;&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_ANNOUNCE_IMG']) ? $this->vars['FOLDER_ANNOUNCE_IMG'] : $this->lang('FOLDER_ANNOUNCE_IMG'); ?>" alt="<?php echo isset($this->vars['L_ANNOUNCEMENT']) ? $this->vars['L_ANNOUNCEMENT'] : $this->lang('L_ANNOUNCEMENT'); ?>" title="<?php echo isset($this->vars['L_ANNOUNCEMENT']) ? $this->vars['L_ANNOUNCEMENT'] : $this->lang('L_ANNOUNCEMENT'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_ANNOUNCEMENT']) ? $this->vars['L_ANNOUNCEMENT'] : $this->lang('L_ANNOUNCEMENT'); ?></td>
</tr>
<tr>
<td><img src="<?php echo isset($this->vars['FOLDER_HOT_NEW_IMG']) ? $this->vars['FOLDER_HOT_NEW_IMG'] : $this->lang('FOLDER_HOT_NEW_IMG'); ?>" alt="<?php echo isset($this->vars['L_NEW_POSTS_HOT']) ? $this->vars['L_NEW_POSTS_HOT'] : $this->lang('L_NEW_POSTS_HOT'); ?>" title="<?php echo isset($this->vars['L_NEW_POSTS_HOT']) ? $this->vars['L_NEW_POSTS_HOT'] : $this->lang('L_NEW_POSTS_HOT'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NEW_POSTS_HOT']) ? $this->vars['L_NEW_POSTS_HOT'] : $this->lang('L_NEW_POSTS_HOT'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_HOT_IMG']) ? $this->vars['FOLDER_HOT_IMG'] : $this->lang('FOLDER_HOT_IMG'); ?>" alt="<?php echo isset($this->vars['L_NO_NEW_POSTS_HOT']) ? $this->vars['L_NO_NEW_POSTS_HOT'] : $this->lang('L_NO_NEW_POSTS_HOT'); ?>" vspace="4" title="<?php echo isset($this->vars['L_NO_NEW_POSTS_HOT']) ? $this->vars['L_NO_NEW_POSTS_HOT'] : $this->lang('L_NO_NEW_POSTS_HOT'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NO_NEW_POSTS_HOT']) ? $this->vars['L_NO_NEW_POSTS_HOT'] : $this->lang('L_NO_NEW_POSTS_HOT'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_STICKY_IMG']) ? $this->vars['FOLDER_STICKY_IMG'] : $this->lang('FOLDER_STICKY_IMG'); ?>" alt="<?php echo isset($this->vars['L_STICKY']) ? $this->vars['L_STICKY'] : $this->lang('L_STICKY'); ?>" title="<?php echo isset($this->vars['L_STICKY']) ? $this->vars['L_STICKY'] : $this->lang('L_STICKY'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_STICKY']) ? $this->vars['L_STICKY'] : $this->lang('L_STICKY'); ?></td>
</tr>
<tr>
<td><img src="<?php echo isset($this->vars['FOLDER_LOCKED_NEW_IMG']) ? $this->vars['FOLDER_LOCKED_NEW_IMG'] : $this->lang('FOLDER_LOCKED_NEW_IMG'); ?>" alt="<?php echo isset($this->vars['L_NEW_POSTS_LOCKED']) ? $this->vars['L_NEW_POSTS_LOCKED'] : $this->lang('L_NEW_POSTS_LOCKED'); ?>" title="<?php echo isset($this->vars['L_NEW_POSTS_LOCKED']) ? $this->vars['L_NEW_POSTS_LOCKED'] : $this->lang('L_NEW_POSTS_LOCKED'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NEW_POSTS_LOCKED']) ? $this->vars['L_NEW_POSTS_LOCKED'] : $this->lang('L_NEW_POSTS_LOCKED'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_LOCKED_IMG']) ? $this->vars['FOLDER_LOCKED_IMG'] : $this->lang('FOLDER_LOCKED_IMG'); ?>" alt="<?php echo isset($this->vars['L_NO_NEW_POSTS_LOCKED']) ? $this->vars['L_NO_NEW_POSTS_LOCKED'] : $this->lang('L_NO_NEW_POSTS_LOCKED'); ?>" title="<?php echo isset($this->vars['L_NO_NEW_POSTS_LOCKED']) ? $this->vars['L_NO_NEW_POSTS_LOCKED'] : $this->lang('L_NO_NEW_POSTS_LOCKED'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_NO_NEW_POSTS_LOCKED']) ? $this->vars['L_NO_NEW_POSTS_LOCKED'] : $this->lang('L_NO_NEW_POSTS_LOCKED'); ?></td>
<td>&nbsp;</td>
<td><img src="<?php echo isset($this->vars['FOLDER_MOVED_IMG']) ? $this->vars['FOLDER_MOVED_IMG'] : $this->lang('FOLDER_MOVED_IMG'); ?>" alt="<?php echo isset($this->vars['L_MOVED']) ? $this->vars['L_MOVED'] : $this->lang('L_MOVED'); ?>" title="<?php echo isset($this->vars['L_MOVED']) ? $this->vars['L_MOVED'] : $this->lang('L_MOVED'); ?>" /></td>
<td class="gensmall"><?php echo isset($this->vars['L_MOVED']) ? $this->vars['L_MOVED'] : $this->lang('L_MOVED'); ?></td>
</tr>
</table>
</td>
<td align="right" valign="top"><span class="gensmall"><?php echo isset($this->vars['S_AUTH_LIST']) ? $this->vars['S_AUTH_LIST'] : $this->lang('S_AUTH_LIST'); ?></span></td>
</tr>
</table>
