<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:09:10 -0500 (time=1323533350)

?><div class="maintitle"><?php echo isset($this->vars['L_PLUSCONFIG_TITLE']) ? $this->vars['L_PLUSCONFIG_TITLE'] : $this->lang('L_PLUSCONFIG_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_PLUSCONFIG_EXPLAIN']) ? $this->vars['L_PLUSCONFIG_EXPLAIN'] : $this->lang('L_PLUSCONFIG_EXPLAIN'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post">
<table width="99%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_INDEX_LAYOUT']) ? $this->vars['L_INDEX_LAYOUT'] : $this->lang('L_INDEX_LAYOUT'); ?></th>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_SELECT_LAYOUT']) ? $this->vars['L_SELECT_LAYOUT'] : $this->lang('L_SELECT_LAYOUT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_PLUSSTYLE_EXPLAIN']) ? $this->vars['L_PLUSSTYLE_EXPLAIN'] : $this->lang('L_PLUSSTYLE_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="index_layout" value="<?php echo isset($this->vars['PLUSSTYLE_2']) ? $this->vars['PLUSSTYLE_2'] : $this->lang('PLUSSTYLE_2'); ?>" <?php echo isset($this->vars['PLUSSTYLE_2_CHECKED']) ? $this->vars['PLUSSTYLE_2_CHECKED'] : $this->lang('PLUSSTYLE_2_CHECKED'); ?> />
<?php echo isset($this->vars['L_PLUSSTYLE2']) ? $this->vars['L_PLUSSTYLE2'] : $this->lang('L_PLUSSTYLE2'); ?>&nbsp;<br />
<input type="radio" name="index_layout" value="<?php echo isset($this->vars['PLUSSTYLE_1']) ? $this->vars['PLUSSTYLE_1'] : $this->lang('PLUSSTYLE_1'); ?>" <?php echo isset($this->vars['PLUSSTYLE_1_CHECKED']) ? $this->vars['PLUSSTYLE_1_CHECKED'] : $this->lang('PLUSSTYLE_1_CHECKED'); ?> />
<?php echo isset($this->vars['L_PLUSSTYLE1']) ? $this->vars['L_PLUSSTYLE1'] : $this->lang('L_PLUSSTYLE1'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_DEFAULTAVATAR']) ? $this->vars['L_ENABLE_DEFAULTAVATAR'] : $this->lang('L_ENABLE_DEFAULTAVATAR'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DEFAULTAVATAR_EXPLAIN']) ? $this->vars['L_DEFAULTAVATAR_EXPLAIN'] : $this->lang('L_DEFAULTAVATAR_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="default_avatar" value="1" <?php echo isset($this->vars['DEFAULT_AVATAR_YES']) ? $this->vars['DEFAULT_AVATAR_YES'] : $this->lang('DEFAULT_AVATAR_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="default_avatar" value="0" <?php echo isset($this->vars['DEFAULT_AVATAR_NO']) ? $this->vars['DEFAULT_AVATAR_NO'] : $this->lang('DEFAULT_AVATAR_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_BANNERS']) ? $this->vars['L_ENABLE_BANNERS'] : $this->lang('L_ENABLE_BANNERS'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_BANNERS_EXPLAIN']) ? $this->vars['L_BANNERS_EXPLAIN'] : $this->lang('L_BANNERS_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_banners" value="1" <?php echo isset($this->vars['BANNERS_YES']) ? $this->vars['BANNERS_YES'] : $this->lang('BANNERS_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_banners" value="0" <?php echo isset($this->vars['BANNERS_NO']) ? $this->vars['BANNERS_NO'] : $this->lang('BANNERS_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_LINKS']) ? $this->vars['L_ENABLE_LINKS'] : $this->lang('L_ENABLE_LINKS'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_LINKS_EXPLAIN']) ? $this->vars['L_LINKS_EXPLAIN'] : $this->lang('L_LINKS_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="show_links" value="1" <?php echo isset($this->vars['LINKS_YES']) ? $this->vars['LINKS_YES'] : $this->lang('LINKS_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="show_links" value="0" <?php echo isset($this->vars['LINKS_NO']) ? $this->vars['LINKS_NO'] : $this->lang('LINKS_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_QUICKREPLY']) ? $this->vars['L_ENABLE_QUICKREPLY'] : $this->lang('L_ENABLE_QUICKREPLY'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_QUICKREPLY_EXPLAIN']) ? $this->vars['L_QUICKREPLY_EXPLAIN'] : $this->lang('L_QUICKREPLY_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="show_quickreply" value="1" <?php echo isset($this->vars['QUICKREPLY_YES']) ? $this->vars['QUICKREPLY_YES'] : $this->lang('QUICKREPLY_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="show_quickreply" value="0" <?php echo isset($this->vars['QUICKREPLY_NO']) ? $this->vars['QUICKREPLY_NO'] : $this->lang('QUICKREPLY_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_SHOUTBOX']) ? $this->vars['L_ENABLE_SHOUTBOX'] : $this->lang('L_ENABLE_SHOUTBOX'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_SHOUTBOX_EXPLAIN']) ? $this->vars['L_SHOUTBOX_EXPLAIN'] : $this->lang('L_SHOUTBOX_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="show_shoutbox" value="1" <?php echo isset($this->vars['SHOUTBOX_YES']) ? $this->vars['SHOUTBOX_YES'] : $this->lang('SHOUTBOX_YES'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_YES']) ? $this->vars['L_SHOUTBOX_YES'] : $this->lang('L_SHOUTBOX_YES'); ?>&nbsp;&nbsp;
<input type="radio" name="show_shoutbox" value="2" <?php echo isset($this->vars['SHOUTBOX_YES_REG']) ? $this->vars['SHOUTBOX_YES_REG'] : $this->lang('SHOUTBOX_YES_REG'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_YES_REG']) ? $this->vars['L_SHOUTBOX_YES_REG'] : $this->lang('L_SHOUTBOX_YES_REG'); ?>&nbsp;&nbsp;
<input type="radio" name="show_shoutbox" value="0" <?php echo isset($this->vars['SHOUTBOX_NO']) ? $this->vars['SHOUTBOX_NO'] : $this->lang('SHOUTBOX_NO'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_NO']) ? $this->vars['L_SHOUTBOX_NO'] : $this->lang('L_SHOUTBOX_NO'); ?><br />
<input type="radio" name="show_shoutbox" value="3" <?php echo isset($this->vars['SHOUTBOX_PORTAL']) ? $this->vars['SHOUTBOX_PORTAL'] : $this->lang('SHOUTBOX_PORTAL'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_PORTAL']) ? $this->vars['L_SHOUTBOX_PORTAL'] : $this->lang('L_SHOUTBOX_PORTAL'); ?>&nbsp;&nbsp;
<input type="radio" name="show_shoutbox" value="4" <?php echo isset($this->vars['SHOUTBOX_PORTAL_REG']) ? $this->vars['SHOUTBOX_PORTAL_REG'] : $this->lang('SHOUTBOX_PORTAL_REG'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_PORTAL_REG']) ? $this->vars['L_SHOUTBOX_PORTAL_REG'] : $this->lang('L_SHOUTBOX_PORTAL_REG'); ?><br />
<input type="radio" name="show_shoutbox" value="5" <?php echo isset($this->vars['SHOUTBOX_INDEX']) ? $this->vars['SHOUTBOX_INDEX'] : $this->lang('SHOUTBOX_INDEX'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_INDEX']) ? $this->vars['L_SHOUTBOX_INDEX'] : $this->lang('L_SHOUTBOX_INDEX'); ?>&nbsp;&nbsp;
<input type="radio" name="show_shoutbox" value="6" <?php echo isset($this->vars['SHOUTBOX_INDEX_REG']) ? $this->vars['SHOUTBOX_INDEX_REG'] : $this->lang('SHOUTBOX_INDEX_REG'); ?> />&nbsp;<?php echo isset($this->vars['L_SHOUTBOX_INDEX_REG']) ? $this->vars['L_SHOUTBOX_INDEX_REG'] : $this->lang('L_SHOUTBOX_INDEX_REG'); ?>
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_LASTVISIT']) ? $this->vars['L_ENABLE_LASTVISIT'] : $this->lang('L_ENABLE_LASTVISIT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_LASTVISIT_EXPLAIN']) ? $this->vars['L_LASTVISIT_EXPLAIN'] : $this->lang('L_LASTVISIT_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="show_last_visit" value="0" <?php echo isset($this->vars['LASTVISIT_NO']) ? $this->vars['LASTVISIT_NO'] : $this->lang('LASTVISIT_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>&nbsp;&nbsp;
<input type="radio" name="show_last_visit" value="1" <?php echo isset($this->vars['LASTVISIT_YES']) ? $this->vars['LASTVISIT_YES'] : $this->lang('LASTVISIT_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;
<input type="radio" name="show_last_visit" value="2" <?php echo isset($this->vars['LASTVISIT_24GUEST']) ? $this->vars['LASTVISIT_24GUEST'] : $this->lang('LASTVISIT_24GUEST'); ?> />
<?php echo isset($this->vars['L_LASTVISIT_24GUEST']) ? $this->vars['L_LASTVISIT_24GUEST'] : $this->lang('L_LASTVISIT_24GUEST'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_CONTACT_CONFIG']) ? $this->vars['L_CONTACT_CONFIG'] : $this->lang('L_CONTACT_CONFIG'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_CONTACT_EXPLAIN']) ? $this->vars['L_CONTACT_EXPLAIN'] : $this->lang('L_CONTACT_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="text" maxlength="255" size="40" name="contact_email" value="<?php echo isset($this->vars['CONTACT_MAIL']) ? $this->vars['CONTACT_MAIL'] : $this->lang('CONTACT_MAIL'); ?>" class="post" /></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_SHORTURLS']) ? $this->vars['L_ENABLE_SHORTURLS'] : $this->lang('L_ENABLE_SHORTURLS'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_SHORTURLS_EXPLAIN']) ? $this->vars['L_SHORTURLS_EXPLAIN'] : $this->lang('L_SHORTURLS_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_shorturls" value="1" <?php echo isset($this->vars['SHORTURLS_YES']) ? $this->vars['SHORTURLS_YES'] : $this->lang('SHORTURLS_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_shorturls" value="0" <?php echo isset($this->vars['SHORTURLS_NO']) ? $this->vars['SHORTURLS_NO'] : $this->lang('SHORTURLS_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_DISABLE_SID']) ? $this->vars['L_DISABLE_SID'] : $this->lang('L_DISABLE_SID'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DISABLE_SID_EXPLAIN']) ? $this->vars['L_DISABLE_SID_EXPLAIN'] : $this->lang('L_DISABLE_SID_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="disable_sid" value="1" <?php echo isset($this->vars['DISABLESID_YES']) ? $this->vars['DISABLESID_YES'] : $this->lang('DISABLESID_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="disable_sid" value="0" <?php echo isset($this->vars['DISABLESID_NO']) ? $this->vars['DISABLESID_NO'] : $this->lang('DISABLESID_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_ANTIROBOT']) ? $this->vars['L_ENABLE_ANTIROBOT'] : $this->lang('L_ENABLE_ANTIROBOT'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_ANTIROBOT_EXPLAIN']) ? $this->vars['L_ANTIROBOT_EXPLAIN'] : $this->lang('L_ANTIROBOT_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_antirobot" value="1" <?php echo isset($this->vars['ANTIROBOT_YES']) ? $this->vars['ANTIROBOT_YES'] : $this->lang('ANTIROBOT_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_antirobot" value="0" <?php echo isset($this->vars['ANTIROBOT_NO']) ? $this->vars['ANTIROBOT_NO'] : $this->lang('ANTIROBOT_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_CONFIRM_POST']) ? $this->vars['L_ENABLE_CONFIRM_POST'] : $this->lang('L_ENABLE_CONFIRM_POST'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_POST_EXPLAIN']) ? $this->vars['L_CONFIRM_POST_EXPLAIN'] : $this->lang('L_CONFIRM_POST_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_confirm_post" value="1" <?php echo isset($this->vars['CONFIRM_POST_YES']) ? $this->vars['CONFIRM_POST_YES'] : $this->lang('CONFIRM_POST_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_confirm_post" value="0" <?php echo isset($this->vars['CONFIRM_POST_NO']) ? $this->vars['CONFIRM_POST_NO'] : $this->lang('CONFIRM_POST_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_ENABLE_GENTIME']) ? $this->vars['L_ENABLE_GENTIME'] : $this->lang('L_ENABLE_GENTIME'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_GENTIME_EXPLAIN']) ? $this->vars['L_GENTIME_EXPLAIN'] : $this->lang('L_GENTIME_EXPLAIN'); ?></span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_gentime" value="1" <?php echo isset($this->vars['GENTIME_YES']) ? $this->vars['GENTIME_YES'] : $this->lang('GENTIME_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_gentime" value="0" <?php echo isset($this->vars['GENTIME_NO']) ? $this->vars['GENTIME_NO'] : $this->lang('GENTIME_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_FULLTEXT_CONFIG']) ? $this->vars['L_FULLTEXT_CONFIG'] : $this->lang('L_FULLTEXT_CONFIG'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_FULLTEXT_EXPLAIN']) ? $this->vars['L_FULLTEXT_EXPLAIN'] : $this->lang('L_FULLTEXT_EXPLAIN'); ?></span><br /><br /><span class="code">ALTER TABLE phpbb_posts_text ADD FULLTEXT(post_text);</span></td>
<td class="row2" nowrap="nowrap"> 
<input type="radio" name="enable_fulltextsearch" value="1" <?php echo isset($this->vars['FULLTEXT_YES']) ? $this->vars['FULLTEXT_YES'] : $this->lang('FULLTEXT_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="enable_fulltextsearch" value="0" <?php echo isset($this->vars['FULLTEXT_NO']) ? $this->vars['FULLTEXT_NO'] : $this->lang('FULLTEXT_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" />
</td>
</tr>
</table>
</form>
<br clear="all" />
