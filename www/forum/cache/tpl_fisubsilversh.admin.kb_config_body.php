<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:15:15 -0400 (time=1411974915)

?>
<h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" method="post">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_NEW_NAME']) ? $this->vars['L_NEW_NAME'] : $this->lang('L_NEW_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NEW_EXPLAIN']) ? $this->vars['L_NEW_EXPLAIN'] : $this->lang('L_NEW_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="allow_new" value="1" <?php echo isset($this->vars['S_NEW_YES']) ? $this->vars['S_NEW_YES'] : $this->lang('S_NEW_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_new" value="0" <?php echo isset($this->vars['S_NEW_NO']) ? $this->vars['S_NEW_NO'] : $this->lang('S_NEW_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_APPROVE_NEW_NAME']) ? $this->vars['L_APPROVE_NEW_NAME'] : $this->lang('L_APPROVE_NEW_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_APPROVE_NEW_EXPLAIN']) ? $this->vars['L_APPROVE_NEW_EXPLAIN'] : $this->lang('L_APPROVE_NEW_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="approve_new" value="1" <?php echo isset($this->vars['S_APPROVE_NEW_YES']) ? $this->vars['S_APPROVE_NEW_YES'] : $this->lang('S_APPROVE_NEW_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="approve_new" value="0" <?php echo isset($this->vars['S_APPROVE_NEW_NO']) ? $this->vars['S_APPROVE_NEW_NO'] : $this->lang('S_APPROVE_NEW_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_EDIT_NAME']) ? $this->vars['L_EDIT_NAME'] : $this->lang('L_EDIT_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_EDIT_EXPLAIN']) ? $this->vars['L_EDIT_EXPLAIN'] : $this->lang('L_EDIT_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="allow_edit" value="1" <?php echo isset($this->vars['S_EDIT_YES']) ? $this->vars['S_EDIT_YES'] : $this->lang('S_EDIT_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_edit" value="0" <?php echo isset($this->vars['S_EDIT_NO']) ? $this->vars['S_EDIT_NO'] : $this->lang('S_EDIT_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_APPROVE_EDIT_NAME']) ? $this->vars['L_APPROVE_EDIT_NAME'] : $this->lang('L_APPROVE_EDIT_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_APPROVE_EDIT_EXPLAIN']) ? $this->vars['L_APPROVE_EDIT_EXPLAIN'] : $this->lang('L_APPROVE_EDIT_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="approve_edit" value="1" <?php echo isset($this->vars['S_APPROVE_EDIT_YES']) ? $this->vars['S_APPROVE_EDIT_YES'] : $this->lang('S_APPROVE_EDIT_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="approve_edit" value="0" <?php echo isset($this->vars['S_APPROVE_EDIT_NO']) ? $this->vars['S_APPROVE_EDIT_NO'] : $this->lang('S_APPROVE_EDIT_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr> 
        <td class="row1" width="50%"><?php echo isset($this->vars['L_ANON_NAME']) ? $this->vars['L_ANON_NAME'] : $this->lang('L_ANON_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ANON_EXPLAIN']) ? $this->vars['L_ANON_EXPLAIN'] : $this->lang('L_ANON_EXPLAIN'); ?></span></td> 
        <td class="row2" width="50%"><input type="radio" name="allow_anon" value="1" <?php echo isset($this->vars['S_ANON_YES']) ? $this->vars['S_ANON_YES'] : $this->lang('S_ANON_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_anon" value="0" <?php echo isset($this->vars['S_ANON_NO']) ? $this->vars['S_ANON_NO'] : $this->lang('S_ANON_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td> 
    </tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_NOTIFY_NAME']) ? $this->vars['L_NOTIFY_NAME'] : $this->lang('L_NOTIFY_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NOTIFY_EXPLAIN']) ? $this->vars['L_NOTIFY_EXPLAIN'] : $this->lang('L_NOTIFY_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="notify" value="0" <?php echo isset($this->vars['S_NOTIFY_NONE']) ? $this->vars['S_NOTIFY_NONE'] : $this->lang('S_NOTIFY_NONE'); ?> /><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?>&nbsp; &nbsp;<input type="radio" name="notify" value="2" <?php echo isset($this->vars['S_NOTIFY_EMAIL']) ? $this->vars['S_NOTIFY_EMAIL'] : $this->lang('S_NOTIFY_EMAIL'); ?> /><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?>&nbsp; &nbsp;<input type="radio" name="notify" value="1" <?php echo isset($this->vars['S_NOTIFY_PM']) ? $this->vars['S_NOTIFY_PM'] : $this->lang('S_NOTIFY_PM'); ?> /><?php echo isset($this->vars['L_PM']) ? $this->vars['L_PM'] : $this->lang('L_PM'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_ADMIN_ID_NAME']) ? $this->vars['L_ADMIN_ID_NAME'] : $this->lang('L_ADMIN_ID_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ADMIN_ID_EXPLAIN']) ? $this->vars['L_ADMIN_ID_EXPLAIN'] : $this->lang('L_ADMIN_ID_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input class="post" type="text" name="admin_id" value="<?php echo isset($this->vars['ADMIN_ID']) ? $this->vars['ADMIN_ID'] : $this->lang('ADMIN_ID'); ?>" size="5" maxlength="4" /></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_MOD_GROUP']) ? $this->vars['L_MOD_GROUP'] : $this->lang('L_MOD_GROUP'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_MOD_GROUP_EXPLAIN']) ? $this->vars['L_MOD_GROUP_EXPLAIN'] : $this->lang('L_MOD_GROUP_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><?php echo isset($this->vars['MOD_GROUP']) ? $this->vars['MOD_GROUP'] : $this->lang('MOD_GROUP'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_HEADER_BANNER']) ? $this->vars['L_HEADER_BANNER'] : $this->lang('L_HEADER_BANNER'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_HEADER_BANNER_EXPLAIN']) ? $this->vars['L_HEADER_BANNER_EXPLAIN'] : $this->lang('L_HEADER_BANNER_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="header_banner" value="1" <?php echo isset($this->vars['S_HEADER_BANNER_YES']) ? $this->vars['S_HEADER_BANNER_YES'] : $this->lang('S_HEADER_BANNER_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="header_banner" value="0" <?php echo isset($this->vars['S_HEADER_BANNER_NO']) ? $this->vars['S_HEADER_BANNER_NO'] : $this->lang('S_HEADER_BANNER_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_STATS_LIST']) ? $this->vars['L_STATS_LIST'] : $this->lang('L_STATS_LIST'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_STATS_LIST_EXPLAIN']) ? $this->vars['L_STATS_LIST_EXPLAIN'] : $this->lang('L_STATS_LIST_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="stats_list" value="1" <?php echo isset($this->vars['S_STATS_LIST_YES']) ? $this->vars['S_STATS_LIST_YES'] : $this->lang('S_STATS_LIST_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="stats_list" value="0" <?php echo isset($this->vars['S_STATS_LIST_NO']) ? $this->vars['S_STATS_LIST_NO'] : $this->lang('S_STATS_LIST_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_ARTICLE_PAG']) ? $this->vars['L_ARTICLE_PAG'] : $this->lang('L_ARTICLE_PAG'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ARTICLE_PAG_EXPLAIN']) ? $this->vars['L_ARTICLE_PAG_EXPLAIN'] : $this->lang('L_ARTICLE_PAG_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input class="post" type="text" name="art_pagination" value="<?php echo isset($this->vars['ARTICLE_PAG']) ? $this->vars['ARTICLE_PAG'] : $this->lang('ARTICLE_PAG'); ?>" size="5" maxlength="4" /></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_COMMENTS_PAG']) ? $this->vars['L_COMMENTS_PAG'] : $this->lang('L_COMMENTS_PAG'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_COMMENTS_PAG_EXPLAIN']) ? $this->vars['L_COMMENTS_PAG_EXPLAIN'] : $this->lang('L_COMMENTS_PAG_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input class="post" type="text" name="comments_pagination" value="<?php echo isset($this->vars['COMMENTS_PAG']) ? $this->vars['COMMENTS_PAG'] : $this->lang('COMMENTS_PAG'); ?>" size="5" maxlength="4" /></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><span class="gen"><?php echo isset($this->vars['L_NEWS_SORT']) ? $this->vars['L_NEWS_SORT'] : $this->lang('L_NEWS_SORT'); ?></span></td>
		<td class="row2" width="50%"><?php echo isset($this->vars['NEWS_SORT']) ? $this->vars['NEWS_SORT'] : $this->lang('NEWS_SORT'); ?> </td>
	</tr>
	<tr>
		<td class="row1" width="50%"><span class="gen"><?php echo isset($this->vars['L_NEWS_SORT_PAR']) ? $this->vars['L_NEWS_SORT_PAR'] : $this->lang('L_NEWS_SORT_PAR'); ?></span></td>
		<td class="row2" width="50%"><?php echo isset($this->vars['NEWS_SORT_PAR']) ? $this->vars['NEWS_SORT_PAR'] : $this->lang('NEWS_SORT_PAR'); ?> </td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_COMMENTS_INFO']) ? $this->vars['L_COMMENTS_INFO'] : $this->lang('L_COMMENTS_INFO'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_COMMENTS']) ? $this->vars['L_COMMENTS'] : $this->lang('L_COMMENTS'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_COMMENTS_EXPLAIN']) ? $this->vars['L_COMMENTS_EXPLAIN'] : $this->lang('L_COMMENTS_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="comments" value="1" <?php echo isset($this->vars['S_COMMENTS_YES']) ? $this->vars['S_COMMENTS_YES'] : $this->lang('S_COMMENTS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="comments" value="0" <?php echo isset($this->vars['S_COMMENTS_NO']) ? $this->vars['S_COMMENTS_NO'] : $this->lang('S_COMMENTS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_COMMENTS_SHOW']) ? $this->vars['L_COMMENTS_SHOW'] : $this->lang('L_COMMENTS_SHOW'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_COMMENTS_SHOW_EXPLAIN']) ? $this->vars['L_COMMENTS_SHOW_EXPLAIN'] : $this->lang('L_COMMENTS_SHOW_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="comments_show" value="1" <?php echo isset($this->vars['S_COMMENTS_SHOW_YES']) ? $this->vars['S_COMMENTS_SHOW_YES'] : $this->lang('S_COMMENTS_SHOW_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="comments_show" value="0" <?php echo isset($this->vars['S_COMMENTS_SHOW_NO']) ? $this->vars['S_COMMENTS_SHOW_NO'] : $this->lang('S_COMMENTS_SHOW_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr> 
        <td class="row1" width="50%"><?php echo isset($this->vars['L_BUMP_POST']) ? $this->vars['L_BUMP_POST'] : $this->lang('L_BUMP_POST'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_BUMP_POST_EXPLAIN']) ? $this->vars['L_BUMP_POST_EXPLAIN'] : $this->lang('L_BUMP_POST_EXPLAIN'); ?></span></td> 
        <td class="row2" width="50%"><input type="radio" name="bump_post" value="1" <?php echo isset($this->vars['S_BUMP_POST_YES']) ? $this->vars['S_BUMP_POST_YES'] : $this->lang('S_BUMP_POST_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="bump_post" value="0" <?php echo isset($this->vars['S_BUMP_POST_NO']) ? $this->vars['S_BUMP_POST_NO'] : $this->lang('S_BUMP_POST_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td> 
    </tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_FORUM_ID']) ? $this->vars['L_FORUM_ID'] : $this->lang('L_FORUM_ID'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_FORUM_ID_EXPLAIN']) ? $this->vars['L_FORUM_ID_EXPLAIN'] : $this->lang('L_FORUM_ID_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><?php echo isset($this->vars['FORUMS']) ? $this->vars['FORUMS'] : $this->lang('FORUMS'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_DEL_TOPIC']) ? $this->vars['L_DEL_TOPIC'] : $this->lang('L_DEL_TOPIC'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_DEL_TOPIC_EXPLAIN']) ? $this->vars['L_DEL_TOPIC_EXPLAIN'] : $this->lang('L_DEL_TOPIC_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="del_topic" value="1" <?php echo isset($this->vars['S_DEL_TOPIC_YES']) ? $this->vars['S_DEL_TOPIC_YES'] : $this->lang('S_DEL_TOPIC_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="del_topic" value="0" <?php echo isset($this->vars['S_DEL_TOPIC_NO']) ? $this->vars['S_DEL_TOPIC_NO'] : $this->lang('S_DEL_TOPIC_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_RATINGS_INFO']) ? $this->vars['L_RATINGS_INFO'] : $this->lang('L_RATINGS_INFO'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_ALLOW_RATING']) ? $this->vars['L_ALLOW_RATING'] : $this->lang('L_ALLOW_RATING'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_RATING_EXPLAIN']) ? $this->vars['L_ALLOW_RATING_EXPLAIN'] : $this->lang('L_ALLOW_RATING_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="allow_rating" value="1" <?php echo isset($this->vars['S_ALLOW_RATING_YES']) ? $this->vars['S_ALLOW_RATING_YES'] : $this->lang('S_ALLOW_RATING_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_rating" value="0" <?php echo isset($this->vars['S_ALLOW_RATING_NO']) ? $this->vars['S_ALLOW_RATING_NO'] : $this->lang('S_ALLOW_RATING_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_ALLOW_ANONYMOS_RATING']) ? $this->vars['L_ALLOW_ANONYMOS_RATING'] : $this->lang('L_ALLOW_ANONYMOS_RATING'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_ANONYMOS_RATING_EXPLAIN']) ? $this->vars['L_ALLOW_ANONYMOS_RATING_EXPLAIN'] : $this->lang('L_ALLOW_ANONYMOS_RATING_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="allow_anonymos_rating" value="1" <?php echo isset($this->vars['S_ALLOW_ANONYMOS_RATING_YES']) ? $this->vars['S_ALLOW_ANONYMOS_RATING_YES'] : $this->lang('S_ALLOW_ANONYMOS_RATING_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_anonymos_rating" value="0" <?php echo isset($this->vars['S_ALLOW_ANONYMOS_RATING_NO']) ? $this->vars['S_ALLOW_ANONYMOS_RATING_NO'] : $this->lang('S_ALLOW_ANONYMOS_RATING_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_VOTES_CHECK_IP']) ? $this->vars['L_VOTES_CHECK_IP'] : $this->lang('L_VOTES_CHECK_IP'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_VOTES_CHECK_IP_EXPLAIN']) ? $this->vars['L_VOTES_CHECK_IP_EXPLAIN'] : $this->lang('L_VOTES_CHECK_IP_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="votes_check_ip" value="1" <?php echo isset($this->vars['S_VOTES_CHECK_IP_YES']) ? $this->vars['S_VOTES_CHECK_IP_YES'] : $this->lang('S_VOTES_CHECK_IP_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="votes_check_ip" value="0" <?php echo isset($this->vars['S_VOTES_CHECK_IP_NO']) ? $this->vars['S_VOTES_CHECK_IP_NO'] : $this->lang('S_VOTES_CHECK_IP_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_VOTES_CHECK_USERID']) ? $this->vars['L_VOTES_CHECK_USERID'] : $this->lang('L_VOTES_CHECK_USERID'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_VOTES_CHECK_USERID_EXPLAIN']) ? $this->vars['L_VOTES_CHECK_USERID_EXPLAIN'] : $this->lang('L_VOTES_CHECK_USERID_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="votes_check_userid" value="1" <?php echo isset($this->vars['S_VOTES_CHECK_USERID_YES']) ? $this->vars['S_VOTES_CHECK_USERID_YES'] : $this->lang('S_VOTES_CHECK_USERID_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="votes_check_userid" value="0" <?php echo isset($this->vars['S_VOTES_CHECK_USERID_NO']) ? $this->vars['S_VOTES_CHECK_USERID_NO'] : $this->lang('S_VOTES_CHECK_USERID_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_PRE_TEXT_NAME']) ? $this->vars['L_PRE_TEXT_NAME'] : $this->lang('L_PRE_TEXT_NAME'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_PRE_TEXT_NAME']) ? $this->vars['L_PRE_TEXT_NAME'] : $this->lang('L_PRE_TEXT_NAME'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_PRE_TEXT_EXPLAIN']) ? $this->vars['L_PRE_TEXT_EXPLAIN'] : $this->lang('L_PRE_TEXT_EXPLAIN'); ?></span></td>
		<td class="row2" width="50%"><input type="radio" name="show_pretext" value="1" <?php echo isset($this->vars['S_SHOW_PRETEXT']) ? $this->vars['S_SHOW_PRETEXT'] : $this->lang('S_SHOW_PRETEXT'); ?> /> <?php echo isset($this->vars['L_SHOW']) ? $this->vars['L_SHOW'] : $this->lang('L_SHOW'); ?>&nbsp;&nbsp;<input type="radio" name="show_pretext" value="0" <?php echo isset($this->vars['S_HIDE_PRETEXT']) ? $this->vars['S_HIDE_PRETEXT'] : $this->lang('S_HIDE_PRETEXT'); ?> /> <?php echo isset($this->vars['L_HIDE']) ? $this->vars['L_HIDE'] : $this->lang('L_HIDE'); ?></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_PRE_TEXT_HEADER']) ? $this->vars['L_PRE_TEXT_HEADER'] : $this->lang('L_PRE_TEXT_HEADER'); ?></td>
		<td class="row2" width="50%"><input text="text" name="pt_header" value="<?php echo isset($this->vars['L_PT_HEADER']) ? $this->vars['L_PT_HEADER'] : $this->lang('L_PT_HEADER'); ?>" size="40" maxlength="100" /></td>
	</tr>
	<tr>
		<td class="row1" width="50%"><?php echo isset($this->vars['L_PRE_TEXT_BODY']) ? $this->vars['L_PRE_TEXT_BODY'] : $this->lang('L_PRE_TEXT_BODY'); ?></td>
		<td class="row2" width="50%"><textarea name="pt_body" cols="40" rows="5"><?php echo isset($this->vars['L_PT_BODY']) ? $this->vars['L_PT_BODY'] : $this->lang('L_PT_BODY'); ?></textarea></td>
	</tr>
	<tr>
		<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
	</tr>
</table>
</form>
<br clear="all" />