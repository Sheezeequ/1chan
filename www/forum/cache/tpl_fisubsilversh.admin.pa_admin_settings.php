<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:12 -0500 (time=1323530532)

?><h1><?php echo isset($this->vars['L_SETTINGSTITLE']) ? $this->vars['L_SETTINGSTITLE'] : $this->lang('L_SETTINGSTITLE'); ?></h1>

<p><?php echo isset($this->vars['L_SETTINGSEXPLAIN']) ? $this->vars['L_SETTINGSEXPLAIN'] : $this->lang('L_SETTINGSEXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_SETTINGS_ACTION']) ? $this->vars['S_SETTINGS_ACTION'] : $this->lang('S_SETTINGS_ACTION'); ?>" method="post" name="form">
<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead"><?php echo isset($this->vars['L_SETTINGS']) ? $this->vars['L_SETTINGS'] : $this->lang('L_SETTINGS'); ?></th>
  </tr> 
  <tr>
	<td width="50%" class="row1"><?php echo isset($this->vars['L_DBNAME']) ? $this->vars['L_DBNAME'] : $this->lang('L_DBNAME'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_DBNAMEINFO']) ? $this->vars['L_DBNAMEINFO'] : $this->lang('L_DBNAMEINFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="50" name="settings_dbname" value="<?php echo isset($this->vars['SETTINGS_DBNAME']) ? $this->vars['SETTINGS_DBNAME'] : $this->lang('SETTINGS_DBNAME'); ?>" /></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_TOPNUM']) ? $this->vars['L_TOPNUM'] : $this->lang('L_TOPNUM'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_TOPNUMINFO']) ? $this->vars['L_TOPNUMINFO'] : $this->lang('L_TOPNUMINFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="settings_topnumber" value="<?php echo isset($this->vars['SETTINGS_TOPNUMBER']) ? $this->vars['SETTINGS_TOPNUMBER'] : $this->lang('SETTINGS_TOPNUMBER'); ?>" /></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_NFDAYS']) ? $this->vars['L_NFDAYS'] : $this->lang('L_NFDAYS'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_NFDAYSINFO']) ? $this->vars['L_NFDAYSINFO'] : $this->lang('L_NFDAYSINFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="settings_newdays" value="<?php echo isset($this->vars['SETTINGS_NEWDAYS']) ? $this->vars['SETTINGS_NEWDAYS'] : $this->lang('SETTINGS_NEWDAYS'); ?>" /></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_FILE_IN_PAGE']) ? $this->vars['L_FILE_IN_PAGE'] : $this->lang('L_FILE_IN_PAGE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_FILE_IN_PAGE_INFO']) ? $this->vars['L_FILE_IN_PAGE_INFO'] : $this->lang('L_FILE_IN_PAGE_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="settings_file_page" value="<?php echo isset($this->vars['SETTINGS_FILE_PAGE']) ? $this->vars['SETTINGS_FILE_PAGE'] : $this->lang('SETTINGS_FILE_PAGE'); ?>" /></td>
  </tr>  
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_SHOW_VIEWALL']) ? $this->vars['L_SHOW_VIEWALL'] : $this->lang('L_SHOW_VIEWALL'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_VIEWALL_INFO']) ? $this->vars['L_VIEWALL_INFO'] : $this->lang('L_VIEWALL_INFO'); ?></span></td>
	<td class="row2">
	<select name="settings_viewall" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_VIEW_ALL_YES']) ? $this->vars['S_VIEW_ALL_YES'] : $this->lang('S_VIEW_ALL_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_VIEW_ALL_NO']) ? $this->vars['S_VIEW_ALL_NO'] : $this->lang('S_VIEW_ALL_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>
	</select></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_DISABLE']) ? $this->vars['L_DISABLE'] : $this->lang('L_DISABLE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_DISABLE_INFO']) ? $this->vars['L_DISABLE_INFO'] : $this->lang('L_DISABLE_INFO'); ?></span></td>
	<td class="row2">
	<select name="settings_disable" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_DISABLE_YES']) ? $this->vars['S_DISABLE_YES'] : $this->lang('S_DISABLE_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_DISABLE_NO']) ? $this->vars['S_DISABLE_NO'] : $this->lang('S_DISABLE_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_HOTLINK']) ? $this->vars['L_HOTLINK'] : $this->lang('L_HOTLINK'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_HOTLINK_INFO']) ? $this->vars['L_HOTLINK_INFO'] : $this->lang('L_HOTLINK_INFO'); ?></span></td>
	<td class="row2">
	<select name="hotlink_prevent" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_HOTLINK_YES']) ? $this->vars['S_HOTLINK_YES'] : $this->lang('S_HOTLINK_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_HOTLINK_NO']) ? $this->vars['S_HOTLINK_NO'] : $this->lang('S_HOTLINK_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr> 
	<tr>
	  <td class="row1"><?php echo isset($this->vars['L_HOTLINK_ALLOWED']) ? $this->vars['L_HOTLINK_ALLOWED'] : $this->lang('L_HOTLINK_ALLOWED'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_HOTLINK_ALLOWED_INFO']) ? $this->vars['L_HOTLINK_ALLOWED_INFO'] : $this->lang('L_HOTLINK_ALLOWED_INFO'); ?></span></td>
	  <td class="row2"><input class="post" type="text" size="40" name="hotlink_allowed" value="<?php echo isset($this->vars['HOTLINK_ALLOWED']) ? $this->vars['HOTLINK_ALLOWED'] : $this->lang('HOTLINK_ALLOWED'); ?>" /></td>
	</tr>  
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_FILE_IN_PAGE']) ? $this->vars['L_FILE_IN_PAGE'] : $this->lang('L_FILE_IN_PAGE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_FILE_IN_PAGE_INFO']) ? $this->vars['L_FILE_IN_PAGE_INFO'] : $this->lang('L_FILE_IN_PAGE_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="5" maxlength="5" name="settings_file_page" value="<?php echo isset($this->vars['SETTINGS_FILE_PAGE']) ? $this->vars['SETTINGS_FILE_PAGE'] : $this->lang('SETTINGS_FILE_PAGE'); ?>" /></td>
  </tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_DEFAULT_SORT_METHOD']) ? $this->vars['L_DEFAULT_SORT_METHOD'] : $this->lang('L_DEFAULT_SORT_METHOD'); ?></span></td>
	  <td class="row2">
		<select name="sort_method">
		<option <?php echo isset($this->vars['SORT_NAME']) ? $this->vars['SORT_NAME'] : $this->lang('SORT_NAME'); ?> value='file_name'><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></option>
		<option <?php echo isset($this->vars['SORT_TIME']) ? $this->vars['SORT_TIME'] : $this->lang('SORT_TIME'); ?> value='file_time'><?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?></option>
		<option <?php echo isset($this->vars['SORT_RATING']) ? $this->vars['SORT_RATING'] : $this->lang('SORT_RATING'); ?> value='file_rating'><?php echo isset($this->vars['L_RATING']) ? $this->vars['L_RATING'] : $this->lang('L_RATING'); ?></option>
		<option <?php echo isset($this->vars['SORT_DOWNLOADS']) ? $this->vars['SORT_DOWNLOADS'] : $this->lang('SORT_DOWNLOADS'); ?> value='file_dls'><?php echo isset($this->vars['L_DOWNLOADS']) ? $this->vars['L_DOWNLOADS'] : $this->lang('L_DOWNLOADS'); ?></option>
		<option <?php echo isset($this->vars['SORT_UPDATE_TIME']) ? $this->vars['SORT_UPDATE_TIME'] : $this->lang('SORT_UPDATE_TIME'); ?> value='file_update_time'><?php echo isset($this->vars['L_UPDATE_TIME']) ? $this->vars['L_UPDATE_TIME'] : $this->lang('L_UPDATE_TIME'); ?></option>
		</select>
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_DEFAULT_SORT_ORDER']) ? $this->vars['L_DEFAULT_SORT_ORDER'] : $this->lang('L_DEFAULT_SORT_ORDER'); ?></span></td>
	  <td class="row2">
		<select name="sort_order">
			<option <?php echo isset($this->vars['SORT_ASC']) ? $this->vars['SORT_ASC'] : $this->lang('SORT_ASC'); ?> value='ASC'><?php echo isset($this->vars['L_ASC']) ? $this->vars['L_ASC'] : $this->lang('L_ASC'); ?></option>
			<option <?php echo isset($this->vars['SORT_DESC']) ? $this->vars['SORT_DESC'] : $this->lang('SORT_DESC'); ?> value='DESC'><?php echo isset($this->vars['L_DESC']) ? $this->vars['L_DESC'] : $this->lang('L_DESC'); ?></option>
		</select>
	  </td>
	</tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_PHP_TPL']) ? $this->vars['L_PHP_TPL'] : $this->lang('L_PHP_TPL'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_PHP_TPL_INFO']) ? $this->vars['L_PHP_TPL_INFO'] : $this->lang('L_PHP_TPL_INFO'); ?></span></td>
	<td class="row2">
	<select name="settings_tpl_php" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_PHP_TPL_YES']) ? $this->vars['S_PHP_TPL_YES'] : $this->lang('S_PHP_TPL_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_PHP_TPL_NO']) ? $this->vars['S_PHP_TPL_NO'] : $this->lang('S_PHP_TPL_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_MAX_FILE_SIZE']) ? $this->vars['L_MAX_FILE_SIZE'] : $this->lang('L_MAX_FILE_SIZE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_MAX_FILE_SIZE_INFO']) ? $this->vars['L_MAX_FILE_SIZE_INFO'] : $this->lang('L_MAX_FILE_SIZE_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="8" maxlength="15" name="max_file_size" value="<?php echo isset($this->vars['MAX_FILE_SIZE']) ? $this->vars['MAX_FILE_SIZE'] : $this->lang('MAX_FILE_SIZE'); ?>" /> <?php echo isset($this->vars['S_FILESIZE']) ? $this->vars['S_FILESIZE'] : $this->lang('S_FILESIZE'); ?></td>
  </tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_UPLOAD_DIR']) ? $this->vars['L_UPLOAD_DIR'] : $this->lang('L_UPLOAD_DIR'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_UPLOAD_DIR_EXPLAIN']) ? $this->vars['L_UPLOAD_DIR_EXPLAIN'] : $this->lang('L_UPLOAD_DIR_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="text" size="25" maxlength="100" name="upload_dir" class="post" value="<?php echo isset($this->vars['UPLOAD_DIR']) ? $this->vars['UPLOAD_DIR'] : $this->lang('UPLOAD_DIR'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_SCREENSHOT_DIR']) ? $this->vars['L_SCREENSHOT_DIR'] : $this->lang('L_SCREENSHOT_DIR'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_SCREENSHOT_DIR_EXPLAIN']) ? $this->vars['L_SCREENSHOT_DIR_EXPLAIN'] : $this->lang('L_SCREENSHOT_DIR_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="text" size="25" maxlength="100" name="screenshots_dir" class="post" value="<?php echo isset($this->vars['SCREENSHOT_DIR']) ? $this->vars['SCREENSHOT_DIR'] : $this->lang('SCREENSHOT_DIR'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><?php echo isset($this->vars['L_FORBIDDEN_EXTENSIONS']) ? $this->vars['L_FORBIDDEN_EXTENSIONS'] : $this->lang('L_FORBIDDEN_EXTENSIONS'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_FORBIDDEN_EXTENSIONS_EXPLAIN']) ? $this->vars['L_FORBIDDEN_EXTENSIONS_EXPLAIN'] : $this->lang('L_FORBIDDEN_EXTENSIONS_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="text" size="25" maxlength="100" name="forbidden_extensions" class="post" value="<?php echo isset($this->vars['FORBIDDEN_EXTENSIONS']) ? $this->vars['FORBIDDEN_EXTENSIONS'] : $this->lang('FORBIDDEN_EXTENSIONS'); ?>" /></td>
	</tr>
  <tr>
	<th colspan="2" class="thHead"><?php echo isset($this->vars['L_PERMISSION_SETTINGS']) ? $this->vars['L_PERMISSION_SETTINGS'] : $this->lang('L_PERMISSION_SETTINGS'); ?></th>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ATUH_SEARCH']) ? $this->vars['L_ATUH_SEARCH'] : $this->lang('L_ATUH_SEARCH'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_ATUH_SEARCH_INFO']) ? $this->vars['L_ATUH_SEARCH_INFO'] : $this->lang('L_ATUH_SEARCH_INFO'); ?></span></td>
	<td class="row2"><?php echo isset($this->vars['S_ATUH_SEARCH']) ? $this->vars['S_ATUH_SEARCH'] : $this->lang('S_ATUH_SEARCH'); ?></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ATUH_STATS']) ? $this->vars['L_ATUH_STATS'] : $this->lang('L_ATUH_STATS'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_ATUH_STATS_INFO']) ? $this->vars['L_ATUH_STATS_INFO'] : $this->lang('L_ATUH_STATS_INFO'); ?></span></td>
	<td class="row2"><?php echo isset($this->vars['S_ATUH_STATS']) ? $this->vars['S_ATUH_STATS'] : $this->lang('S_ATUH_STATS'); ?></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ATUH_TOPLIST']) ? $this->vars['L_ATUH_TOPLIST'] : $this->lang('L_ATUH_TOPLIST'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_ATUH_TOPLIST_INFO']) ? $this->vars['L_ATUH_TOPLIST_INFO'] : $this->lang('L_ATUH_TOPLIST_INFO'); ?></span></td>
	<td class="row2"><?php echo isset($this->vars['S_ATUH_TOPLIST']) ? $this->vars['S_ATUH_TOPLIST'] : $this->lang('S_ATUH_TOPLIST'); ?></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ATUH_VIEWALL']) ? $this->vars['L_ATUH_VIEWALL'] : $this->lang('L_ATUH_VIEWALL'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_ATUH_VIEWALL_INFO']) ? $this->vars['L_ATUH_VIEWALL_INFO'] : $this->lang('L_ATUH_VIEWALL_INFO'); ?></span></td>
	<td class="row2"><?php echo isset($this->vars['S_ATUH_VIEWALL']) ? $this->vars['S_ATUH_VIEWALL'] : $this->lang('S_ATUH_VIEWALL'); ?></td>
  </tr>
  <tr>
	<th colspan="2" class="thHead"><?php echo isset($this->vars['L_COMMENT_SETTINGS']) ? $this->vars['L_COMMENT_SETTINGS'] : $this->lang('L_COMMENT_SETTINGS'); ?></th>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ALLOW_HTML']) ? $this->vars['L_ALLOW_HTML'] : $this->lang('L_ALLOW_HTML'); ?></td>
	<td class="row2">
	<select name="allow_html" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_ALLOW_HTML_YES']) ? $this->vars['S_ALLOW_HTML_YES'] : $this->lang('S_ALLOW_HTML_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_ALLOW_HTML_NO']) ? $this->vars['S_ALLOW_HTML_NO'] : $this->lang('S_ALLOW_HTML_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>		
	</select></td>
  </tr> 
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ALLOW_BBCODE']) ? $this->vars['L_ALLOW_BBCODE'] : $this->lang('L_ALLOW_BBCODE'); ?></td>
	<td class="row2">
	<select name="allow_bbcode" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_ALLOW_BBCODE_YES']) ? $this->vars['S_ALLOW_BBCODE_YES'] : $this->lang('S_ALLOW_BBCODE_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_ALLOW_BBCODE_NO']) ? $this->vars['S_ALLOW_BBCODE_NO'] : $this->lang('S_ALLOW_BBCODE_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>			
	</select></td>
  </tr> 
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ALLOW_SMILIES']) ? $this->vars['L_ALLOW_SMILIES'] : $this->lang('L_ALLOW_SMILIES'); ?></span></td>
	<td class="row2">
	<select name="allow_smilies" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_ALLOW_SMILIES_YES']) ? $this->vars['S_ALLOW_SMILIES_YES'] : $this->lang('S_ALLOW_SMILIES_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_ALLOW_SMILIES_NO']) ? $this->vars['S_ALLOW_SMILIES_NO'] : $this->lang('S_ALLOW_SMILIES_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>
	</select></td>
  </tr> 
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ALLOW_LINKS']) ? $this->vars['L_ALLOW_LINKS'] : $this->lang('L_ALLOW_LINKS'); ?></td>
	<td class="row2">
	<select name="allow_comment_links" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_ALLOW_LINKS_YES']) ? $this->vars['S_ALLOW_LINKS_YES'] : $this->lang('S_ALLOW_LINKS_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_ALLOW_LINKS_NO']) ? $this->vars['S_ALLOW_LINKS_NO'] : $this->lang('S_ALLOW_LINKS_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_LINKS_MESSAGE']) ? $this->vars['L_LINKS_MESSAGE'] : $this->lang('L_LINKS_MESSAGE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_LINKS_MESSAGE_INFO']) ? $this->vars['L_LINKS_MESSAGE_INFO'] : $this->lang('L_LINKS_MESSAGE_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="50" name="no_comment_link_message" value="<?php echo isset($this->vars['MESSAGE_LINK']) ? $this->vars['MESSAGE_LINK'] : $this->lang('MESSAGE_LINK'); ?>" /></td>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_ALLOW_IMAGE']) ? $this->vars['L_ALLOW_IMAGE'] : $this->lang('L_ALLOW_IMAGE'); ?></span></td>
	<td class="row2">
	<select name="allow_comment_images" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_ALLOW_IMAGES_YES']) ? $this->vars['S_ALLOW_IMAGES_YES'] : $this->lang('S_ALLOW_IMAGES_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_ALLOW_IMAGES_NO']) ? $this->vars['S_ALLOW_IMAGES_NO'] : $this->lang('S_ALLOW_IMAGES_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
    <tr>
	<td class="row1"><?php echo isset($this->vars['L_IMAGE_MESSAGE']) ? $this->vars['L_IMAGE_MESSAGE'] : $this->lang('L_IMAGE_MESSAGE'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_IMAGE_MESSAGE_INFO']) ? $this->vars['L_IMAGE_MESSAGE_INFO'] : $this->lang('L_IMAGE_MESSAGE_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="50" name="no_comment_image_message" value="<?php echo isset($this->vars['MESSAGE_IMAGE']) ? $this->vars['MESSAGE_IMAGE'] : $this->lang('MESSAGE_IMAGE'); ?>" /></td>
  </tr>
   <tr>
	<td class="row1"><?php echo isset($this->vars['L_MAX_CHAR']) ? $this->vars['L_MAX_CHAR'] : $this->lang('L_MAX_CHAR'); ?><br><span class="gensmall"><?php echo isset($this->vars['L_MAX_CHAR_INFO']) ? $this->vars['L_MAX_CHAR_INFO'] : $this->lang('L_MAX_CHAR_INFO'); ?></span></td>
	<td class="row2"><input type="text" class="post" size="6" name="max_comment_chars" value="<?php echo isset($this->vars['MAX_CHAR']) ? $this->vars['MAX_CHAR'] : $this->lang('MAX_CHAR'); ?>" /></td>
  </tr>
  <tr>
	<th colspan="2" class="thHead"><?php echo isset($this->vars['L_VALIDATION_SETTINGS']) ? $this->vars['L_VALIDATION_SETTINGS'] : $this->lang('L_VALIDATION_SETTINGS'); ?></th>
  </tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_NEED_VALIDATION']) ? $this->vars['L_NEED_VALIDATION'] : $this->lang('L_NEED_VALIDATION'); ?></td>
	<td class="row2">
	<select name="need_validation" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_NEED_VALIDATION_YES']) ? $this->vars['S_NEED_VALIDATION_YES'] : $this->lang('S_NEED_VALIDATION_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_NEED_VALIDATION_NO']) ? $this->vars['S_NEED_VALIDATION_NO'] : $this->lang('S_NEED_VALIDATION_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
	<tr>
	  <td class="row1"><?php echo isset($this->vars['L_VALIDATOR']) ? $this->vars['L_VALIDATOR'] : $this->lang('L_VALIDATOR'); ?></td>
	  <td class="row2">
		<select name="validator">
		<option <?php echo isset($this->vars['VALIDATOR_ADMIN']) ? $this->vars['VALIDATOR_ADMIN'] : $this->lang('VALIDATOR_ADMIN'); ?> value='validator_admin'><?php echo isset($this->vars['L_VALIDATOR_ADMIN_OPTION']) ? $this->vars['L_VALIDATOR_ADMIN_OPTION'] : $this->lang('L_VALIDATOR_ADMIN_OPTION'); ?></option>
		<option <?php echo isset($this->vars['VALIDATOR_MOD']) ? $this->vars['VALIDATOR_MOD'] : $this->lang('VALIDATOR_MOD'); ?> value='validator_mod'><?php echo isset($this->vars['L_VALIDATOR_MOD_OPTION']) ? $this->vars['L_VALIDATOR_MOD_OPTION'] : $this->lang('L_VALIDATOR_MOD_OPTION'); ?></option>
		</select>
	  </td>
	</tr>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_PM_NOTIFY']) ? $this->vars['L_PM_NOTIFY'] : $this->lang('L_PM_NOTIFY'); ?></td>
	<td class="row2">
	<select name="pm_notify" class="forminput">
	<option value="1"<?php echo isset($this->vars['S_PM_NOTIFY_YES']) ? $this->vars['S_PM_NOTIFY_YES'] : $this->lang('S_PM_NOTIFY_YES'); ?>><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></option>
	<option value="0"<?php echo isset($this->vars['S_PM_NOTIFY_NO']) ? $this->vars['S_PM_NOTIFY_NO'] : $this->lang('S_PM_NOTIFY_NO'); ?>><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></option>	
	</select></td>
  </tr>
  <tr>
	<td align="center" class="cat" colspan="2"><input class="liteoption" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" name="submit" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />
	</td>
  </tr>
</table>	
</form>
