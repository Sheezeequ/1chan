<?php

// eXtreme Styles mod cache. Generated on Thu, 25 Jul 2024 10:57:47 +0300 (time=1721894267)

?>
<h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post"><table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
    <th class="thHead" colspan="2"><?php echo isset($this->vars['L_GENERAL_SETTINGS']) ? $this->vars['L_GENERAL_SETTINGS'] : $this->lang('L_GENERAL_SETTINGS'); ?></th>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_ALLOW_NEWS_POSTING']) ? $this->vars['L_ALLOW_NEWS_POSTING'] : $this->lang('L_ALLOW_NEWS_POSTING'); ?></td>
    <td class="row2"><input type="radio" name="allow_news" value="1" <?php echo isset($this->vars['NEWS_YES']) ? $this->vars['NEWS_YES'] : $this->lang('NEWS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_news" value="0" <?php echo isset($this->vars['NEWS_NO']) ? $this->vars['NEWS_NO'] : $this->lang('NEWS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_BASE_URL']) ? $this->vars['L_NEWS_BASE_URL'] : $this->lang('L_NEWS_BASE_URL'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_BASE_URL_EXPLAIN']) ? $this->vars['L_NEWS_BASE_URL_EXPLAIN'] : $this->lang('L_NEWS_BASE_URL_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_base_url" value="<?php echo isset($this->vars['NEWS_BASE_URL']) ? $this->vars['NEWS_BASE_URL'] : $this->lang('NEWS_BASE_URL'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_INDEX_FILE']) ? $this->vars['L_NEWS_INDEX_FILE'] : $this->lang('L_NEWS_INDEX_FILE'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_INDEX_FILE_EXPLAIN']) ? $this->vars['L_NEWS_INDEX_FILE_EXPLAIN'] : $this->lang('L_NEWS_INDEX_FILE_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_index_file" value="<?php echo isset($this->vars['NEWS_INDEX_FILE']) ? $this->vars['NEWS_INDEX_FILE'] : $this->lang('NEWS_INDEX_FILE'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_TRIM']) ? $this->vars['L_NEWS_TRIM'] : $this->lang('L_NEWS_TRIM'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_TRIM_EXPLAIN']) ? $this->vars['L_NEWS_TRIM_EXPLAIN'] : $this->lang('L_NEWS_TRIM_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_item_trim" value="<?php echo isset($this->vars['NEWS_ITEM_LENGTH']) ? $this->vars['NEWS_ITEM_LENGTH'] : $this->lang('NEWS_ITEM_LENGTH'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_TOPIC_TRIM']) ? $this->vars['L_NEWS_TOPIC_TRIM'] : $this->lang('L_NEWS_TOPIC_TRIM'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_TOPIC_TRIM_EXPLAIN']) ? $this->vars['L_NEWS_TOPIC_TRIM_EXPLAIN'] : $this->lang('L_NEWS_TOPIC_TRIM_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_title_trim" value="<?php echo isset($this->vars['NEWS_TITLE_LENGTH']) ? $this->vars['NEWS_TITLE_LENGTH'] : $this->lang('NEWS_TITLE_LENGTH'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_ITEMS_DISPLAY']) ? $this->vars['L_NEWS_ITEMS_DISPLAY'] : $this->lang('L_NEWS_ITEMS_DISPLAY'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_ITEMS_DISPLAY_EXPLAIN']) ? $this->vars['L_NEWS_ITEMS_DISPLAY_EXPLAIN'] : $this->lang('L_NEWS_ITEMS_DISPLAY_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_item_num" value="<?php echo isset($this->vars['NEWS_ITEM_NUM']) ? $this->vars['NEWS_ITEM_NUM'] : $this->lang('NEWS_ITEM_NUM'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_PATH']) ? $this->vars['L_NEWS_PATH'] : $this->lang('L_NEWS_PATH'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_NEWS_PATH_EXPLAIN']) ? $this->vars['L_NEWS_PATH_EXPLAIN'] : $this->lang('L_NEWS_PATH_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_path" value="<?php echo isset($this->vars['NEWS_PATH']) ? $this->vars['NEWS_PATH'] : $this->lang('NEWS_PATH'); ?>" /></td>
  </tr>
  <tr>
    <th class="thHead" colspan="2"><?php echo isset($this->vars['L_RSS_SETTINGS']) ? $this->vars['L_RSS_SETTINGS'] : $this->lang('L_RSS_SETTINGS'); ?></th>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_ALLOW_RSS']) ? $this->vars['L_ALLOW_RSS'] : $this->lang('L_ALLOW_RSS'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_RSS_EXPLAIN']) ? $this->vars['L_ALLOW_RSS_EXPLAIN'] : $this->lang('L_ALLOW_RSS_EXPLAIN'); ?></td>
    <td class="row2"><input type="radio" name="allow_rss" value="1" <?php echo isset($this->vars['RSS_YES']) ? $this->vars['RSS_YES'] : $this->lang('RSS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="allow_rss" value="0" <?php echo isset($this->vars['RSS_NO']) ? $this->vars['RSS_NO'] : $this->lang('RSS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_NEWS_ITEMS_DISPLAY']) ? $this->vars['L_NEWS_ITEMS_DISPLAY'] : $this->lang('L_NEWS_ITEMS_DISPLAY'); ?></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="3" name="news_rss_item_count" value="<?php echo isset($this->vars['RSS_ITEM_COUNT']) ? $this->vars['RSS_ITEM_COUNT'] : $this->lang('RSS_ITEM_COUNT'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_SHOW_ABSTRACT']) ? $this->vars['L_RSS_SHOW_ABSTRACT'] : $this->lang('L_RSS_SHOW_ABSTRACT'); ?></td>
    <td class="row2"><input type="radio" name="news_rss_show_abstract" value="1" <?php echo isset($this->vars['RSS_ABSTRACT_YES']) ? $this->vars['RSS_ABSTRACT_YES'] : $this->lang('RSS_ABSTRACT_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="news_rss_show_abstract" value="0" <?php echo isset($this->vars['RSS_ABSTRACT_NO']) ? $this->vars['RSS_ABSTRACT_NO'] : $this->lang('RSS_ABSTRACT_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_DESC']) ? $this->vars['L_RSS_DESC'] : $this->lang('L_RSS_DESC'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_DESC_EXPLAIN']) ? $this->vars['L_RSS_DESC_EXPLAIN'] : $this->lang('L_RSS_DESC_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_desc" value="<?php echo isset($this->vars['RSS_DESC']) ? $this->vars['RSS_DESC'] : $this->lang('RSS_DESC'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_LANG']) ? $this->vars['L_RSS_LANG'] : $this->lang('L_RSS_LANG'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_LANG_EXPLAIN']) ? $this->vars['L_RSS_LANG_EXPLAIN'] : $this->lang('L_RSS_LANG_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_language" value="<?php echo isset($this->vars['RSS_LANG']) ? $this->vars['RSS_LANG'] : $this->lang('RSS_LANG'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_TTL']) ? $this->vars['L_RSS_TTL'] : $this->lang('L_RSS_TTL'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_TTL_EXPLAIN']) ? $this->vars['L_RSS_TTL_EXPLAIN'] : $this->lang('L_RSS_TTL_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_ttl" value="<?php echo isset($this->vars['RSS_TTL']) ? $this->vars['RSS_TTL'] : $this->lang('RSS_TTL'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_CAT']) ? $this->vars['L_RSS_CAT'] : $this->lang('L_RSS_CAT'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_CAT_EXPLAIN']) ? $this->vars['L_RSS_CAT_EXPLAIN'] : $this->lang('L_RSS_CAT_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_cat" value="<?php echo isset($this->vars['RSS_CAT']) ? $this->vars['RSS_CAT'] : $this->lang('RSS_CAT'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_IMG']) ? $this->vars['L_RSS_IMG'] : $this->lang('L_RSS_IMG'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_IMG_EXPLAIN']) ? $this->vars['L_RSS_IMG_EXPLAIN'] : $this->lang('L_RSS_IMG_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_image" value="<?php echo isset($this->vars['RSS_IMG']) ? $this->vars['RSS_IMG'] : $this->lang('RSS_IMG'); ?>" /></td>
  </tr>
  <tr>
    <td class="row1"><?php echo isset($this->vars['L_RSS_IMG_DESC']) ? $this->vars['L_RSS_IMG_DESC'] : $this->lang('L_RSS_IMG_DESC'); ?> <br /><span class="gensmall"><?php echo isset($this->vars['L_RSS_IMG_DESC_EXPLAIN']) ? $this->vars['L_RSS_IMG_DESC_EXPLAIN'] : $this->lang('L_RSS_IMG_DESC_EXPLAIN'); ?></span></td>
    <td class="row2"><input class="post" type="text" size="20" maxlength="255" name="news_rss_image_desc" value="<?php echo isset($this->vars['RSS_IMG_DESC']) ? $this->vars['RSS_IMG_DESC'] : $this->lang('RSS_IMG_DESC'); ?>" /></td>
  </tr>
  <tr>
    <td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
  </tr>
</table></form>

<br clear="all" />
