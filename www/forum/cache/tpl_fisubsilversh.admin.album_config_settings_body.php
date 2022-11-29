<?php

// eXtreme Styles mod cache. Generated on Wed, 19 Jun 2013 05:32:15 -0400 (time=1371634335)

?>	<tr>
	  <td class="row1" width="45%"><span class="genmed"><?php echo isset($this->vars['L_MAX_PICS']) ? $this->vars['L_MAX_PICS'] : $this->lang('L_MAX_PICS'); ?></span></td>
	  <td class="row2"><input onchange="setChange();" class="post" type="text" maxlength="9" size="9" name="max_pics" value="<?php echo isset($this->vars['MAX_PICS']) ? $this->vars['MAX_PICS'] : $this->lang('MAX_PICS'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_USER_PICS_LIMIT']) ? $this->vars['L_USER_PICS_LIMIT'] : $this->lang('L_USER_PICS_LIMIT'); ?></span></td>
	  <td class="row2"><input onchange="setChange();" class="post" type="text" maxlength="12" size="5" name="user_pics_limit" value="<?php echo isset($this->vars['USER_PICS_LIMIT']) ? $this->vars['USER_PICS_LIMIT'] : $this->lang('USER_PICS_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_MOD_PICS_LIMIT']) ? $this->vars['L_MOD_PICS_LIMIT'] : $this->lang('L_MOD_PICS_LIMIT'); ?></span></td>
	  <td class="row2"><input onchange="setChange();" class="post" type="text" maxlength="12" size="5" name="mod_pics_limit" value="<?php echo isset($this->vars['MOD_PICS_LIMIT']) ? $this->vars['MOD_PICS_LIMIT'] : $this->lang('MOD_PICS_LIMIT'); ?>" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_HOTLINK_PREVENT']) ? $this->vars['L_HOTLINK_PREVENT'] : $this->lang('L_HOTLINK_PREVENT'); ?></span></td>
	  <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['HOTLINK_PREVENT_ENABLED']) ? $this->vars['HOTLINK_PREVENT_ENABLED'] : $this->lang('HOTLINK_PREVENT_ENABLED'); ?> name="hotlink_prevent" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['HOTLINK_PREVENT_DISABLED']) ? $this->vars['HOTLINK_PREVENT_DISABLED'] : $this->lang('HOTLINK_PREVENT_DISABLED'); ?> name="hotlink_prevent" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_HOTLINK_ALLOWED']) ? $this->vars['L_HOTLINK_ALLOWED'] : $this->lang('L_HOTLINK_ALLOWED'); ?></span></td>
	  <td class="row2"><input onchange="setChange();" class="post" type="text" size="40" name="hotlink_allowed" value="<?php echo isset($this->vars['HOTLINK_ALLOWED']) ? $this->vars['HOTLINK_ALLOWED'] : $this->lang('HOTLINK_ALLOWED'); ?>" /></td>
	</tr>
    <tr>
      <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING']) ? $this->vars['L_ALBUM_CATEGORY_SORTING'] : $this->lang('L_ALBUM_CATEGORY_SORTING'); ?></span></td>
      <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ID']) ? $this->vars['ALBUM_CATEGORY_SORTING_ID'] : $this->lang('ALBUM_CATEGORY_SORTING_ID'); ?> name="album_category_sorting" value="cat_id" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ID']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ID'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ID'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_NAME']) ? $this->vars['ALBUM_CATEGORY_SORTING_NAME'] : $this->lang('ALBUM_CATEGORY_SORTING_NAME'); ?> name="album_category_sorting" value="cat_title" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_NAME']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_NAME'] : $this->lang('L_ALBUM_CATEGORY_SORTING_NAME'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ORDER']) ? $this->vars['ALBUM_CATEGORY_SORTING_ORDER'] : $this->lang('ALBUM_CATEGORY_SORTING_ORDER'); ?> name="album_category_sorting" value="cat_order" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ORDER']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ORDER'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ORDER'); ?></span></td>
    </tr>
    <tr>
      <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_CATEGORY_DIRECTION']) ? $this->vars['L_ALBUM_CATEGORY_DIRECTION'] : $this->lang('L_ALBUM_CATEGORY_DIRECTION'); ?></span></td>
      <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_ASC']) ? $this->vars['ALBUM_CATEGORY_SORTING_ASC'] : $this->lang('ALBUM_CATEGORY_SORTING_ASC'); ?> name="album_category_sorting_direction" value="ASC" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_ASC']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_ASC'] : $this->lang('L_ALBUM_CATEGORY_SORTING_ASC'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_CATEGORY_SORTING_DESC']) ? $this->vars['ALBUM_CATEGORY_SORTING_DESC'] : $this->lang('ALBUM_CATEGORY_SORTING_DESC'); ?> name="album_category_sorting_direction" value="DESC" /><?php echo isset($this->vars['L_ALBUM_CATEGORY_SORTING_DESC']) ? $this->vars['L_ALBUM_CATEGORY_SORTING_DESC'] : $this->lang('L_ALBUM_CATEGORY_SORTING_DESC'); ?></span></td>
    </tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_SHOW_RECENT_IN_SUBCATS']) ? $this->vars['L_SHOW_RECENT_IN_SUBCATS'] : $this->lang('L_SHOW_RECENT_IN_SUBCATS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['SHOW_RECENT_IN_SUBCATS_ENABLED']) ? $this->vars['SHOW_RECENT_IN_SUBCATS_ENABLED'] : $this->lang('SHOW_RECENT_IN_SUBCATS_ENABLED'); ?> name="show_recent_in_subcats" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['SHOW_RECENT_IN_SUBCATS_DISABLED']) ? $this->vars['SHOW_RECENT_IN_SUBCATS_DISABLED'] : $this->lang('SHOW_RECENT_IN_SUBCATS_DISABLED'); ?> name="show_recent_in_subcats" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_SHOW_RECENT_INSTEAD_OF_NOPICS']) ? $this->vars['L_SHOW_RECENT_INSTEAD_OF_NOPICS'] : $this->lang('L_SHOW_RECENT_INSTEAD_OF_NOPICS'); ?></span></td>
	  <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED']) ? $this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'] : $this->lang('SHOW_RECENT_INSTEAD_OF_NOPICS_ENABLED'); ?> name="show_recent_instead_of_nopics" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED']) ? $this->vars['SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'] : $this->lang('SHOW_RECENT_INSTEAD_OF_NOPICS_DISABLED'); ?> name="show_recent_instead_of_nopics" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
	</tr>
    <tr>
      <td class="row1"><span class="genmed"><?php echo isset($this->vars['L_ALBUM_DEBUG_MODE']) ? $this->vars['L_ALBUM_DEBUG_MODE'] : $this->lang('L_ALBUM_DEBUG_MODE'); ?></span></td>
	  <td class="row2"><span class="genmed"><input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_DEBUG_MODE_ENABLED']) ? $this->vars['ALBUM_DEBUG_MODE_ENABLED'] : $this->lang('ALBUM_DEBUG_MODE_ENABLED'); ?> name="album_debug_mode" value="1" /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input onchange="setChange();" type="radio" <?php echo isset($this->vars['ALBUM_DEBUG_MODE_DISABLED']) ? $this->vars['ALBUM_DEBUG_MODE_DISABLED'] : $this->lang('ALBUM_DEBUG_MODE_DISABLED'); ?> name="album_debug_mode" value="0" /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></span></td>
    </tr>