<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:21 -0500 (time=1323533661)

?><h1><?php echo isset($this->vars['L_ALBUM_CONFIG']) ? $this->vars['L_ALBUM_CONFIG'] : $this->lang('L_ALBUM_CONFIG'); ?></h1>

<p><?php echo isset($this->vars['L_ALBUM_CONFIG_EXPLAIN']) ? $this->vars['L_ALBUM_CONFIG_EXPLAIN'] : $this->lang('L_ALBUM_CONFIG_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ALBUM_CONFIG_ACTION']) ? $this->vars['S_ALBUM_CONFIG_ACTION'] : $this->lang('S_ALBUM_CONFIG_ACTION'); ?>" method="post">
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ALBUM_CONFIG']) ? $this->vars['L_ALBUM_CONFIG'] : $this->lang('L_ALBUM_CONFIG'); ?></th>
	</tr>
	<tr>
	  <td class="row1" width="45%"><span class="genmed"><?php echo isset($this->vars['L_MAX_PICS']) ? $this->vars['L_MAX_PICS'] : $this->lang('L_MAX_PICS'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="9" size="9" name="max_pics" value="<?php echo isset($this->vars['MAX_PICS']) ? $this->vars['MAX_PICS'] : $this->lang('MAX_PICS'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_USER_PICS_LIMIT']) ? $this->vars['L_USER_PICS_LIMIT'] : $this->lang('L_USER_PICS_LIMIT'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="12" size="5" name="user_pics_limit" value="<?php echo isset($this->vars['USER_PICS_LIMIT']) ? $this->vars['USER_PICS_LIMIT'] : $this->lang('USER_PICS_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_MOD_PICS_LIMIT']) ? $this->vars['L_MOD_PICS_LIMIT'] : $this->lang('L_MOD_PICS_LIMIT'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="12" size="5" name="mod_pics_limit" value="<?php echo isset($this->vars['MOD_PICS_LIMIT']) ? $this->vars['MOD_PICS_LIMIT'] : $this->lang('MOD_PICS_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_MAX_FILE_SIZE']) ? $this->vars['L_MAX_FILE_SIZE'] : $this->lang('L_MAX_FILE_SIZE'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="12" size="12" name="max_file_size" value="<?php echo isset($this->vars['MAX_FILE_SIZE']) ? $this->vars['MAX_FILE_SIZE'] : $this->lang('MAX_FILE_SIZE'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_MAX_WIDTH']) ? $this->vars['L_MAX_WIDTH'] : $this->lang('L_MAX_WIDTH'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="9" size="9" name="max_width" value="<?php echo isset($this->vars['MAX_WIDTH']) ? $this->vars['MAX_WIDTH'] : $this->lang('MAX_WIDTH'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_MAX_HEIGHT']) ? $this->vars['L_MAX_HEIGHT'] : $this->lang('L_MAX_HEIGHT'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="9" size="9" name="max_height" value="<?php echo isset($this->vars['MAX_HEIGHT']) ? $this->vars['MAX_HEIGHT'] : $this->lang('MAX_HEIGHT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PIC_DESC_MAX_LENGTH']) ? $this->vars['L_PIC_DESC_MAX_LENGTH'] : $this->lang('L_PIC_DESC_MAX_LENGTH'); ?></span></td>
	  <td class="row2"><input class="post" type="text" size="6" name="desc_length" value="<?php echo isset($this->vars['PIC_DESC_MAX_LENGTH']) ? $this->vars['PIC_DESC_MAX_LENGTH'] : $this->lang('PIC_DESC_MAX_LENGTH'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_GD_VERSION']) ? $this->vars['L_GD_VERSION'] : $this->lang('L_GD_VERSION'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['NO_GD']) ? $this->vars['NO_GD'] : $this->lang('NO_GD'); ?> name="gd_version" value="0" /><?php echo isset($this->vars['L_MANUAL_THUMBNAIL']) ? $this->vars['L_MANUAL_THUMBNAIL'] : $this->lang('L_MANUAL_THUMBNAIL'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['GD_V1']) ? $this->vars['GD_V1'] : $this->lang('GD_V1'); ?> name="gd_version" value="1" />GD1&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['GD_V2']) ? $this->vars['GD_V2'] : $this->lang('GD_V2'); ?> name="gd_version" value="2" />GD2</span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_JPG_ALLOWED']) ? $this->vars['L_JPG_ALLOWED'] : $this->lang('L_JPG_ALLOWED'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['JPG_ENABLED']) ? $this->vars['JPG_ENABLED'] : $this->lang('JPG_ENABLED'); ?> name="jpg_allowed" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['JPG_DISABLED']) ? $this->vars['JPG_DISABLED'] : $this->lang('JPG_DISABLED'); ?> name="jpg_allowed" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PNG_ALLOWED']) ? $this->vars['L_PNG_ALLOWED'] : $this->lang('L_PNG_ALLOWED'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PNG_ENABLED']) ? $this->vars['PNG_ENABLED'] : $this->lang('PNG_ENABLED'); ?> name="png_allowed" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PNG_DISABLED']) ? $this->vars['PNG_DISABLED'] : $this->lang('PNG_DISABLED'); ?> name="png_allowed" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_GIF_ALLOWED']) ? $this->vars['L_GIF_ALLOWED'] : $this->lang('L_GIF_ALLOWED'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['GIF_ENABLED']) ? $this->vars['GIF_ENABLED'] : $this->lang('GIF_ENABLED'); ?> name="gif_allowed" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['GIF_DISABLED']) ? $this->vars['GIF_DISABLED'] : $this->lang('GIF_DISABLED'); ?> name="gif_allowed" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_HOTLINK_PREVENT']) ? $this->vars['L_HOTLINK_PREVENT'] : $this->lang('L_HOTLINK_PREVENT'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['HOTLINK_PREVENT_ENABLED']) ? $this->vars['HOTLINK_PREVENT_ENABLED'] : $this->lang('HOTLINK_PREVENT_ENABLED'); ?> name="hotlink_prevent" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['HOTLINK_PREVENT_DISABLED']) ? $this->vars['HOTLINK_PREVENT_DISABLED'] : $this->lang('HOTLINK_PREVENT_DISABLED'); ?> name="hotlink_prevent" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_HOTLINK_ALLOWED']) ? $this->vars['L_HOTLINK_ALLOWED'] : $this->lang('L_HOTLINK_ALLOWED'); ?></span></td>
	  <td class="row2"><input class="post" type="text" size="40" name="hotlink_allowed" value="<?php echo isset($this->vars['HOTLINK_ALLOWED']) ? $this->vars['HOTLINK_ALLOWED'] : $this->lang('HOTLINK_ALLOWED'); ?>" /></td>
	</tr>
	<!-- Album Category Hierarchy : begin -->
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_SHOW_RECENT_IN_SUBCATS']) ? $this->vars['L_SHOW_RECENT_IN_SUBCATS'] : $this->lang('L_SHOW_RECENT_IN_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['SHOW_RECENT_IN_SUBCATS_ENABLED']) ? $this->vars['SHOW_RECENT_IN_SUBCATS_ENABLED'] : $this->lang('SHOW_RECENT_IN_SUBCATS_ENABLED'); ?> name="show_recent_in_subcats" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['SHOW_RECENT_IN_SUBCATS_DISABLED']) ? $this->vars['SHOW_RECENT_IN_SUBCATS_DISABLED'] : $this->lang('SHOW_RECENT_IN_SUBCATS_DISABLED'); ?> name="show_recent_in_subcats" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_SHOW_RECENT_INSTEAD_OF_NOPICS']) ? $this->vars['L_SHOW_RECENT_INSTEAD_OF_NOPICS'] : $this->lang('L_SHOW_RECENT_INSTEAD_OF_NOPICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED']) ? $this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'] : $this->lang('SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'); ?> name="show_recent_instead_of_nopics" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED']) ? $this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'] : $this->lang('SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'); ?> name="show_recent_instead_of_nopics" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING']) ? $this->vars['L_ALBUM_CATEGORY_SORTING'] : $this->lang('L_ALBUM_CATEGORY_SORTING'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ID']) ? $this->vars['ALBUM_CATEGORY_SORTING_ID'] : $this->lang('ALBUM_CATEGORY_SORTING_ID'); ?> name="album_category_sorting" value="cat_id" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ID']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ID'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ID'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_NAME']) ? $this->vars['ALBUM_CATEGORY_SORTING_NAME'] : $this->lang('ALBUM_CATEGORY_SORTING_NAME'); ?> name="album_category_sorting" value="cat_title" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_NAME']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_NAME'] : $this->lang('L_ALBUM_CATEGORY_SORTING_NAME'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ORDER']) ? $this->vars['ALBUM_CATEGORY_SORTING_ORDER'] : $this->lang('ALBUM_CATEGORY_SORTING_ORDER'); ?> name="album_category_sorting" value="cat_order" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ORDER']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ORDER'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ORDER'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_CATEGORY_DIRECTION']) ? $this->vars['L_ALBUM_CATEGORY_DIRECTION'] : $this->lang('L_ALBUM_CATEGORY_DIRECTION'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ASC']) ? $this->vars['ALBUM_CATEGORY_SORTING_ASC'] : $this->lang('ALBUM_CATEGORY_SORTING_ASC'); ?> name="album_category_sorting_direction" value="ASC" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ASC']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ASC'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ASC'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_DESC']) ? $this->vars['ALBUM_CATEGORY_SORTING_DESC'] : $this->lang('ALBUM_CATEGORY_SORTING_DESC'); ?> name="album_category_sorting_direction" value="DESC" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_DESC']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_DESC'] : $this->lang('L_ALBUM_CATEGORY_SORTING_DESC'); ?></span></td>
	</tr>
    <tr>
      <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_DEBUG_MODE']) ? $this->vars['L_ALBUM_DEBUG_MODE'] : $this->lang('L_ALBUM_DEBUG_MODE'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['ALBUM_DEBUG_MODE_ENABLED']) ? $this->vars['ALBUM_DEBUG_MODE_ENABLED'] : $this->lang('ALBUM_DEBUG_MODE_ENABLED'); ?> name="album_debug_mode" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['ALBUM_DEBUG_MODE_DISABLED']) ? $this->vars['ALBUM_DEBUG_MODE_DISABLED'] : $this->lang('ALBUM_DEBUG_MODE_DISABLED'); ?> name="album_debug_mode" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
    </tr>	
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ALBUM_INDEX_SETTINGS']) ? $this->vars['L_ALBUM_INDEX_SETTINGS'] : $this->lang('L_ALBUM_INDEX_SETTINGS'); ?></th>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_SHOW_PERSONAL_GALLERY_LINK']) ? $this->vars['L_SHOW_PERSONAL_GALLERY_LINK'] : $this->lang('L_SHOW_PERSONAL_GALLERY_LINK'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_SHOW_PERSONAL_GALLERY_LINK_ENABLED']) ? $this->vars['INDEX_SHOW_PERSONAL_GALLERY_LINK_ENABLED'] : $this->lang('INDEX_SHOW_PERSONAL_GALLERY_LINK_ENABLED'); ?> name="show_personal_gallery_link" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_SHOW_PERSONAL_GALLERY_LINK_DISABLED']) ? $this->vars['INDEX_SHOW_PERSONAL_GALLERY_LINK_DISABLED'] : $this->lang('INDEX_SHOW_PERSONAL_GALLERY_LINK_DISABLED'); ?> name="show_personal_gallery_link" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_SHOW_SUBCATS']) ? $this->vars['L_INDEX_SHOW_SUBCATS'] : $this->lang('L_INDEX_SHOW_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_SHOW_SUBCATS_ENABLED']) ? $this->vars['INDEX_SHOW_SUBCATS_ENABLED'] : $this->lang('INDEX_SHOW_SUBCATS_ENABLED'); ?> name="show_index_subcats" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_SHOW_SUBCATS_DISABLED']) ? $this->vars['INDEX_SHOW_SUBCATS_DISABLED'] : $this->lang('INDEX_SHOW_SUBCATS_DISABLED'); ?> name="show_index_subcats" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_LINEBREAK_SUBCATS']) ? $this->vars['L_INDEX_LINEBREAK_SUBCATS'] : $this->lang('L_INDEX_LINEBREAK_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_LINEBREAK_ENABLED']) ? $this->vars['INDEX_LINEBREAK_ENABLED'] : $this->lang('INDEX_LINEBREAK_ENABLED'); ?> name="line_break_subcats" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_LINEBREAK_DISABLED']) ? $this->vars['INDEX_LINEBREAK_DISABLED'] : $this->lang('INDEX_LINEBREAK_DISABLED'); ?> name="line_break_subcats" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_THUMB']) ? $this->vars['L_INDEX_THUMB'] : $this->lang('L_INDEX_THUMB'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_THUMB_ENABLED']) ? $this->vars['INDEX_THUMB_ENABLED'] : $this->lang('INDEX_THUMB_ENABLED'); ?> name="show_index_thumb" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_THUMB_DISABLED']) ? $this->vars['INDEX_THUMB_DISABLED'] : $this->lang('INDEX_THUMB_DISABLED'); ?> name="show_index_thumb" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_TOTAL_PICS']) ? $this->vars['L_INDEX_TOTAL_PICS'] : $this->lang('L_INDEX_TOTAL_PICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_TOTAL_PICS_ENABLED']) ? $this->vars['INDEX_TOTAL_PICS_ENABLED'] : $this->lang('INDEX_TOTAL_PICS_ENABLED'); ?> name="show_index_total_pics" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_TOTAL_PICS_DISABLED']) ? $this->vars['INDEX_TOTAL_PICS_DISABLED'] : $this->lang('INDEX_TOTAL_PICS_DISABLED'); ?> name="show_index_total_pics" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_TOTAL_COMMENTS']) ? $this->vars['L_INDEX_TOTAL_COMMENTS'] : $this->lang('L_INDEX_TOTAL_COMMENTS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_TOTAL_COMMENTS_ENABLED']) ? $this->vars['INDEX_TOTAL_COMMENTS_ENABLED'] : $this->lang('INDEX_TOTAL_COMMENTS_ENABLED'); ?> name="show_index_total_comments" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_TOTAL_COMMENTS_DISABLED']) ? $this->vars['INDEX_TOTAL_COMMENTS_DISABLED'] : $this->lang('INDEX_TOTAL_COMMENTS_DISABLED'); ?> name="show_index_total_comments" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_LAST_COMMENT']) ? $this->vars['L_INDEX_LAST_COMMENT'] : $this->lang('L_INDEX_LAST_COMMENT'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_LAST_COMMENT_ENABLED']) ? $this->vars['INDEX_LAST_COMMENT_ENABLED'] : $this->lang('INDEX_LAST_COMMENT_ENABLED'); ?> name="show_index_last_comment" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_LAST_COMMENT_DISABLED']) ? $this->vars['INDEX_LAST_COMMENT_DISABLED'] : $this->lang('INDEX_LAST_COMMENT_DISABLED'); ?> name="show_index_last_comment" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>					
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_LAST_PIC']) ? $this->vars['L_INDEX_LAST_PIC'] : $this->lang('L_INDEX_LAST_PIC'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_LAST_PIC_ENABLED']) ? $this->vars['INDEX_LAST_PIC_ENABLED'] : $this->lang('INDEX_LAST_PIC_ENABLED'); ?> name="show_index_last_pic" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_LAST_PIC_DISABLED']) ? $this->vars['INDEX_LAST_PIC_DISABLED'] : $this->lang('INDEX_LAST_PIC_DISABLED'); ?> name="show_index_last_pic" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_COMMENTS']) ? $this->vars['L_INDEX_COMMENTS'] : $this->lang('L_INDEX_COMMENTS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_COMMENTS_ENABLED']) ? $this->vars['INDEX_COMMENTS_ENABLED'] : $this->lang('INDEX_COMMENTS_ENABLED'); ?> name="show_index_comments" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_COMMENTS_DISABLED']) ? $this->vars['INDEX_COMMENTS_DISABLED'] : $this->lang('INDEX_COMMENTS_DISABLED'); ?> name="show_index_comments" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_INDEX_PICS']) ? $this->vars['L_INDEX_PICS'] : $this->lang('L_INDEX_PICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['INDEX_PICS_ENABLED']) ? $this->vars['INDEX_PICS_ENABLED'] : $this->lang('INDEX_PICS_ENABLED'); ?> name="show_index_pics" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['INDEX_PICS_DISABLED']) ? $this->vars['INDEX_PICS_DISABLED'] : $this->lang('INDEX_PICS_DISABLED'); ?> name="show_index_pics" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_NEW_PIC_CHECK_INTERVAL']) ? $this->vars['L_NEW_PIC_CHECK_INTERVAL'] : $this->lang('L_NEW_PIC_CHECK_INTERVAL'); ?></span></td>
	  <td class="row2"><span class="genmed"><input class="post" type="text" maxlength="4" size="4" name="new_pic_check_interval" value="<?php echo isset($this->vars['NEW_PIC_CHECK_INTERVAL']) ? $this->vars['NEW_PIC_CHECK_INTERVAL'] : $this->lang('NEW_PIC_CHECK_INTERVAL'); ?>" /> <?php echo isset($this->vars['L_NEW_PIC_CHECK_INTERVAL_DESC']) ? $this->vars['L_NEW_PIC_CHECK_INTERVAL_DESC'] : $this->lang('L_NEW_PIC_CHECK_INTERVAL_DESC'); ?></span></td>
	</tr>	
	<!-- Album Category Hierarchy : end -->
	<!-- Album Category Hierarchy : begin -->
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_ALBUM_PERSONAL_GALLERY_SETTINGS']) ? $this->vars['L_ALBUM_PERSONAL_GALLERY_SETTINGS'] : $this->lang('L_ALBUM_PERSONAL_GALLERY_SETTINGS'); ?></th>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_SHOW_ALL_PICS']) ? $this->vars['L_PERSONAL_SHOW_ALL_PICS'] : $this->lang('L_PERSONAL_SHOW_ALL_PICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_ALL_PICS_ENABLED']) ? $this->vars['PERSONAL_SHOW_ALL_PICS_ENABLED'] : $this->lang('PERSONAL_SHOW_ALL_PICS_ENABLED'); ?> name="show_all_in_personal_gallery" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_ALL_PICS_DISABLED']) ? $this->vars['PERSONAL_SHOW_ALL_PICS_DISABLED'] : $this->lang('PERSONAL_SHOW_ALL_PICS_DISABLED'); ?> name="show_all_in_personal_gallery" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>	
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_SHOW_SUBCATS']) ? $this->vars['L_PERSONAL_SHOW_SUBCATS'] : $this->lang('L_PERSONAL_SHOW_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_SUBCATS_ENABLED']) ? $this->vars['PERSONAL_SHOW_SUBCATS_ENABLED'] : $this->lang('PERSONAL_SHOW_SUBCATS_ENABLED'); ?> name="personal_show_subcats_in_index" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_SUBCATS_DISABLED']) ? $this->vars['PERSONAL_SHOW_SUBCATS_DISABLED'] : $this->lang('PERSONAL_SHOW_SUBCATS_DISABLED'); ?> name="personal_show_subcats_in_index" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_GALLERY']) ? $this->vars['L_PERSONAL_GALLERY'] : $this->lang('L_PERSONAL_GALLERY'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_USER']) ? $this->vars['PERSONAL_GALLERY_USER'] : $this->lang('PERSONAL_GALLERY_USER'); ?> name="personal_gallery" value="<?php echo isset($this->vars['S_USER']) ? $this->vars['S_USER'] : $this->lang('S_USER'); ?>" /><?php echo isset($this->vars['L_REG']) ? $this->vars['L_REG'] : $this->lang('L_REG'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_PRIVATE']) ? $this->vars['PERSONAL_GALLERY_PRIVATE'] : $this->lang('PERSONAL_GALLERY_PRIVATE'); ?> name="personal_gallery" value="<?php echo isset($this->vars['S_PRIVATE']) ? $this->vars['S_PRIVATE'] : $this->lang('S_PRIVATE'); ?>" /><?php echo isset($this->vars['L_PRIVATE']) ? $this->vars['L_PRIVATE'] : $this->lang('L_PRIVATE'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_ADMIN']) ? $this->vars['PERSONAL_GALLERY_ADMIN'] : $this->lang('PERSONAL_GALLERY_ADMIN'); ?> name="personal_gallery" value="<?php echo isset($this->vars['S_ADMIN']) ? $this->vars['S_ADMIN'] : $this->lang('S_ADMIN'); ?>" /><?php echo isset($this->vars['L_ADMIN']) ? $this->vars['L_ADMIN'] : $this->lang('L_ADMIN'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_PERSONAL_MODERATOR']) ? $this->vars['L_ALBUM_PERSONAL_MODERATOR'] : $this->lang('L_ALBUM_PERSONAL_MODERATOR'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_MOD_ENABLED']) ? $this->vars['PERSONAL_MOD_ENABLED'] : $this->lang('PERSONAL_MOD_ENABLED'); ?> name="personal_allow_gallery_mod" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_MOD_DISABLED']) ? $this->vars['PERSONAL_MOD_DISABLED'] : $this->lang('PERSONAL_MOD_DISABLED'); ?> name="personal_allow_gallery_mod" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_GALLERY_VIEW']) ? $this->vars['L_PERSONAL_GALLERY_VIEW'] : $this->lang('L_PERSONAL_GALLERY_VIEW'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_VIEW_ALL']) ? $this->vars['PERSONAL_GALLERY_VIEW_ALL'] : $this->lang('PERSONAL_GALLERY_VIEW_ALL'); ?> name="personal_gallery_view" value="<?php echo isset($this->vars['S_GUEST']) ? $this->vars['S_GUEST'] : $this->lang('S_GUEST'); ?>" /><?php echo isset($this->vars['L_GUEST']) ? $this->vars['L_GUEST'] : $this->lang('L_GUEST'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_VIEW_REG']) ? $this->vars['PERSONAL_GALLERY_VIEW_REG'] : $this->lang('PERSONAL_GALLERY_VIEW_REG'); ?> name="personal_gallery_view" value="<?php echo isset($this->vars['S_USER']) ? $this->vars['S_USER'] : $this->lang('S_USER'); ?>" /><?php echo isset($this->vars['L_REG']) ? $this->vars['L_REG'] : $this->lang('L_REG'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_GALLERY_VIEW_PRIVATE']) ? $this->vars['PERSONAL_GALLERY_VIEW_PRIVATE'] : $this->lang('PERSONAL_GALLERY_VIEW_PRIVATE'); ?> name="personal_gallery_view" value="<?php echo isset($this->vars['S_PRIVATE']) ? $this->vars['S_PRIVATE'] : $this->lang('S_PRIVATE'); ?>" /><?php echo isset($this->vars['L_PRIVATE']) ? $this->vars['L_PRIVATE'] : $this->lang('L_PRIVATE'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_GALLERY_LIMIT']) ? $this->vars['L_PERSONAL_GALLERY_LIMIT'] : $this->lang('L_PERSONAL_GALLERY_LIMIT'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="5" size="5" name="personal_gallery_limit" value="<?php echo isset($this->vars['PERSONAL_GALLERY_LIMIT']) ? $this->vars['PERSONAL_GALLERY_LIMIT'] : $this->lang('PERSONAL_GALLERY_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_SUB_GALLERY_LIMIT']) ? $this->vars['L_PERSONAL_SUB_GALLERY_LIMIT'] : $this->lang('L_PERSONAL_SUB_GALLERY_LIMIT'); ?></span></td>

<td class="row2"><input class="post" type="text" maxlength="5" size="5" name="personal_sub_category_limit" value="<?php echo isset($this->vars['PERSONAL_SUB_GALLERY_LIMIT']) ? $this->vars['PERSONAL_SUB_GALLERY_LIMIT'] : $this->lang('PERSONAL_SUB_GALLERY_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_ALLOW_SUB_GATTEGORY']) ? $this->vars['L_PERSONAL_ALLOW_SUB_GATTEGORY'] : $this->lang('L_PERSONAL_ALLOW_SUB_GATTEGORY'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_SUBCAT_ENABLED']) ? $this->vars['PERSONAL_SUBCAT_ENABLED'] : $this->lang('PERSONAL_SUBCAT_ENABLED'); ?> name="personal_allow_sub_categories" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_SUBCAT_DISABLED']) ? $this->vars['PERSONAL_SUBCAT_DISABLED'] : $this->lang('PERSONAL_SUBCAT_DISABLED'); ?> name="personal_allow_sub_categories" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_SHOW_RECENT_IN_SUBCATS']) ? $this->vars['L_PERSONAL_SHOW_RECENT_IN_SUBCATS'] : $this->lang('L_PERSONAL_SHOW_RECENT_IN_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_RECENT_IN_SUBCATS_ENABLED']) ? $this->vars['PERSONAL_SHOW_RECENT_IN_SUBCATS_ENABLED'] : $this->lang('PERSONAL_SHOW_RECENT_IN_SUBCATS_ENABLED'); ?> name="personal_show_recent_in_subcats" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_RECENT_IN_SUBCATS_DISABLED']) ? $this->vars['PERSONAL_SHOW_RECENT_IN_SUBCATS_DISABLED'] : $this->lang('PERSONAL_SHOW_RECENT_IN_SUBCATS_DISABLED'); ?> name="personal_show_recent_in_subcats" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS']) ? $this->vars['L_PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS'] : $this->lang('L_PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED']) ? $this->vars['PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'] : $this->lang('PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'); ?> name="personal_show_recent_instead_of_nopics" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED']) ? $this->vars['PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'] : $this->lang('PERSONAL_SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'); ?> name="personal_show_recent_instead_of_nopics" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<!-- Album Category Hierarchy : end -->
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_THUMBNAIL_SETTINGS']) ? $this->vars['L_THUMBNAIL_SETTINGS'] : $this->lang('L_THUMBNAIL_SETTINGS'); ?></th>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_THUMBNAIL_CACHE']) ? $this->vars['L_THUMBNAIL_CACHE'] : $this->lang('L_THUMBNAIL_CACHE'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['THUMBNAIL_CACHE_ENABLED']) ? $this->vars['THUMBNAIL_CACHE_ENABLED'] : $this->lang('THUMBNAIL_CACHE_ENABLED'); ?> name="thumbnail_cache" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['THUMBNAIL_CACHE_DISABLED']) ? $this->vars['THUMBNAIL_CACHE_DISABLED'] : $this->lang('THUMBNAIL_CACHE_DISABLED'); ?> name="thumbnail_cache" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_THUMBNAIL_SIZE']) ? $this->vars['L_THUMBNAIL_SIZE'] : $this->lang('L_THUMBNAIL_SIZE'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="4" size="4" name="thumbnail_size" value="<?php echo isset($this->vars['THUMBNAIL_SIZE']) ? $this->vars['THUMBNAIL_SIZE'] : $this->lang('THUMBNAIL_SIZE'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_THUMBNAIL_QUALITY']) ? $this->vars['L_THUMBNAIL_QUALITY'] : $this->lang('L_THUMBNAIL_QUALITY'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="3" size="3" name="thumbnail_quality" value="<?php echo isset($this->vars['THUMBNAIL_QUALITY']) ? $this->vars['THUMBNAIL_QUALITY'] : $this->lang('THUMBNAIL_QUALITY'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ROWS_PER_PAGE']) ? $this->vars['L_ROWS_PER_PAGE'] : $this->lang('L_ROWS_PER_PAGE'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="2" size="2" name="rows_per_page" value="<?php echo isset($this->vars['ROWS_PER_PAGE']) ? $this->vars['ROWS_PER_PAGE'] : $this->lang('ROWS_PER_PAGE'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_COLS_PER_PAGE']) ? $this->vars['L_COLS_PER_PAGE'] : $this->lang('L_COLS_PER_PAGE'); ?></span></td>
	  <td class="row2"><input class="post" type="text" maxlength="2" size="2" name="cols_per_page" value="<?php echo isset($this->vars['COLS_PER_PAGE']) ? $this->vars['COLS_PER_PAGE'] : $this->lang('COLS_PER_PAGE'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_DEFAULT_SORT_METHOD']) ? $this->vars['L_DEFAULT_SORT_METHOD'] : $this->lang('L_DEFAULT_SORT_METHOD'); ?></span></td>
	  <td class="row2">
		<select name="sort_method">
			<option <?php echo isset($this->vars['SORT_TIME']) ? $this->vars['SORT_TIME'] : $this->lang('SORT_TIME'); ?> value='pic_time'><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?></option>
			<option <?php echo isset($this->vars['SORT_PIC_TITLE']) ? $this->vars['SORT_PIC_TITLE'] : $this->lang('SORT_PIC_TITLE'); ?> value='pic_title'><?php echo isset($this->vars['L_PIC_TITLE']) ? $this->vars['L_PIC_TITLE'] : $this->lang('L_PIC_TITLE'); ?></option>
			<option <?php echo isset($this->vars['SORT_USERNAME']) ? $this->vars['SORT_USERNAME'] : $this->lang('SORT_USERNAME'); ?> value='username'><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
			<option <?php echo isset($this->vars['SORT_VIEW']) ? $this->vars['SORT_VIEW'] : $this->lang('SORT_VIEW'); ?> value='pic_view_count'><?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?></option>
			<option <?php echo isset($this->vars['SORT_RATING']) ? $this->vars['SORT_RATING'] : $this->lang('SORT_RATING'); ?> value='rating'><?php echo isset($this->vars['L_RATING']) ? $this->vars['L_RATING'] : $this->lang('L_RATING'); ?></option>
			<option <?php echo isset($this->vars['SORT_COMMENTS']) ? $this->vars['SORT_COMMENTS'] : $this->lang('SORT_COMMENTS'); ?> value='comments'><?php echo isset($this->vars['L_COMMENTS']) ? $this->vars['L_COMMENTS'] : $this->lang('L_COMMENTS'); ?></option>
			<option <?php echo isset($this->vars['SORT_NEW_COMMENT']) ? $this->vars['SORT_NEW_COMMENT'] : $this->lang('SORT_NEW_COMMENT'); ?> value='new_comment'><?php echo isset($this->vars['L_NEW_COMMENT']) ? $this->vars['L_NEW_COMMENT'] : $this->lang('L_NEW_COMMENT'); ?></option>
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
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_FULLPIC_POPUP']) ? $this->vars['L_FULLPIC_POPUP'] : $this->lang('L_FULLPIC_POPUP'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['FULLPIC_POPUP_ENABLED']) ? $this->vars['FULLPIC_POPUP_ENABLED'] : $this->lang('FULLPIC_POPUP_ENABLED'); ?> name="fullpic_popup" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['FULLPIC_POPUP_DISABLED']) ? $this->vars['FULLPIC_POPUP_DISABLED'] : $this->lang('FULLPIC_POPUP_DISABLED'); ?> name="fullpic_popup" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_EXTRA_SETTINGS']) ? $this->vars['L_EXTRA_SETTINGS'] : $this->lang('L_EXTRA_SETTINGS'); ?></th>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_RATE_SYSTEM']) ? $this->vars['L_RATE_SYSTEM'] : $this->lang('L_RATE_SYSTEM'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['RATE_ENABLED']) ? $this->vars['RATE_ENABLED'] : $this->lang('RATE_ENABLED'); ?> name="rate" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['RATE_DISABLED']) ? $this->vars['RATE_DISABLED'] : $this->lang('RATE_DISABLED'); ?> name="rate" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_RATE_SCALE']) ? $this->vars['L_RATE_SCALE'] : $this->lang('L_RATE_SCALE'); ?></span></td>
	  <td class="row2"><input class="post" type="text" name="rate_scale" value="<?php echo isset($this->vars['RATE_SCALE']) ? $this->vars['RATE_SCALE'] : $this->lang('RATE_SCALE'); ?>" size="3" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_COMMENT_SYSTEM']) ? $this->vars['L_COMMENT_SYSTEM'] : $this->lang('L_COMMENT_SYSTEM'); ?></span></td>
	  <td class="row2"><span class="genmed"><input type="radio" <?php echo isset($this->vars['COMMENT_ENABLED']) ? $this->vars['COMMENT_ENABLED'] : $this->lang('COMMENT_ENABLED'); ?> name="comment" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" <?php echo isset($this->vars['COMMENT_DISABLED']) ? $this->vars['COMMENT_DISABLED'] : $this->lang('COMMENT_DISABLED'); ?> name="comment" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
	</tr>
</table></form>

<br clear="all" />