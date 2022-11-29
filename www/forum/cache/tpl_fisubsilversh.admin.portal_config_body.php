<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:31:35 -0400 (time=1411975895)

?><div class="maintitle"><center><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></center></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post">
<table width="99%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_GENERAL_SETTINGS']) ? $this->vars['L_GENERAL_SETTINGS'] : $this->lang('L_GENERAL_SETTINGS'); ?></th>
</tr>
<tr>
<td class="row1" width="38%"><b><?php echo isset($this->vars['L_WELCOME_TEXT']) ? $this->vars['L_WELCOME_TEXT'] : $this->lang('L_WELCOME_TEXT'); ?></b><br />
<span class="gensmall"><?php echo isset($this->vars['L_WELCOME_TEXT_EXPLAIN']) ? $this->vars['L_WELCOME_TEXT_EXPLAIN'] : $this->lang('L_WELCOME_TEXT_EXPLAIN'); ?></span></td>
<td class="row2" width="62%"><textarea maxlength="9999" size="40" name="welcome_text" rows="10" cols="45"><?php echo isset($this->vars['WELCOME_TEXT']) ? $this->vars['WELCOME_TEXT'] : $this->lang('WELCOME_TEXT'); ?></textarea>
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_POLL_FORUM']) ? $this->vars['L_POLL_FORUM'] : $this->lang('L_POLL_FORUM'); ?></b><br><br><span class="gensmall"><br>*<u><?php echo isset($this->vars['L_COMMA']) ? $this->vars['L_COMMA'] : $this->lang('L_COMMA'); ?></u>*</td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="40" name="poll_forum" value="<?php echo isset($this->vars['POLL_FORUM']) ? $this->vars['POLL_FORUM'] : $this->lang('POLL_FORUM'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_NUMBER_RECENT_TOPICS']) ? $this->vars['L_NUMBER_RECENT_TOPICS'] : $this->lang('L_NUMBER_RECENT_TOPICS'); ?></b><br><br></td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="5" name="number_recent_topics" value="<?php echo isset($this->vars['NUMBER_RECENT_TOPICS']) ? $this->vars['NUMBER_RECENT_TOPICS'] : $this->lang('NUMBER_RECENT_TOPICS'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_NUMBER_RECENT_FILES']) ? $this->vars['L_NUMBER_RECENT_FILES'] : $this->lang('L_NUMBER_RECENT_FILES'); ?></b><br><br></td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="5" name="number_recent_files" value="<?php echo isset($this->vars['NUMBER_RECENT_FILES']) ? $this->vars['NUMBER_RECENT_FILES'] : $this->lang('NUMBER_RECENT_FILES'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_LAST_SEEN']) ? $this->vars['L_LAST_SEEN'] : $this->lang('L_LAST_SEEN'); ?></b><br><br></td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="5" name="last_seen" value="<?php echo isset($this->vars['LAST_SEEN']) ? $this->vars['LAST_SEEN'] : $this->lang('LAST_SEEN'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_EXCEPT_FORUM']) ? $this->vars['L_EXCEPT_FORUM'] : $this->lang('L_EXCEPT_FORUM'); ?></b><br><br><span class="gensmall"><br>*<u><?php echo isset($this->vars['L_EXCEPT_COMMA']) ? $this->vars['L_EXCEPT_COMMA'] : $this->lang('L_EXCEPT_COMMA'); ?></u>*</td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="40" name="exceptional_forums" value="<?php echo isset($this->vars['EXCEPT_FORUM']) ? $this->vars['EXCEPT_FORUM'] : $this->lang('EXCEPT_FORUM'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_NUMBER_TOPPOSTERS']) ? $this->vars['L_NUMBER_TOPPOSTERS'] : $this->lang('L_NUMBER_TOPPOSTERS'); ?></b><br><br />
<span class="gensmall"><?php echo isset($this->vars['L_TOPPOSTERS_EXPLAIN']) ? $this->vars['L_TOPPOSTERS_EXPLAIN'] : $this->lang('L_TOPPOSTERS_EXPLAIN'); ?></span></td>
<td class="row2"> 
<input type="text" maxlength="5" size="5" name="number_top_posters" value="<?php echo isset($this->vars['NUMBER_TOP_POSTERS']) ? $this->vars['NUMBER_TOP_POSTERS'] : $this->lang('NUMBER_TOP_POSTERS'); ?>" class="post" />
</td>
</tr>
<tr>
<th colspan="2"><?php echo isset($this->vars['L_RECENT_PIC_SETTINGS']) ? $this->vars['L_RECENT_PIC_SETTINGS'] : $this->lang('L_RECENT_PIC_SETTINGS'); ?></th>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_PIC_CAT_ID']) ? $this->vars['L_PIC_CAT_ID'] : $this->lang('L_PIC_CAT_ID'); ?></b><br><span class="gensmall"><br>*<u><?php echo isset($this->vars['L_PIC_COMMA']) ? $this->vars['L_PIC_COMMA'] : $this->lang('L_PIC_COMMA'); ?></u>*</td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="40" name="cat_id" value="<?php echo isset($this->vars['PIC_CAT_ID']) ? $this->vars['PIC_CAT_ID'] : $this->lang('PIC_CAT_ID'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_PIC_NUMBER']) ? $this->vars['L_PIC_NUMBER'] : $this->lang('L_PIC_NUMBER'); ?></b></td>
<td class="row2" width="62%">
<input type="text" maxlength="255" size="5" name="pics_number" value="<?php echo isset($this->vars['PIC_NUMBER']) ? $this->vars['PIC_NUMBER'] : $this->lang('PIC_NUMBER'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_PIC_ALL']) ? $this->vars['L_PIC_ALL'] : $this->lang('L_PIC_ALL'); ?></b></td>
<td class="row2" width="62%">
<input type="radio" name="pics_all" value="1" <?php echo isset($this->vars['PIC_ALL_YES']) ? $this->vars['PIC_ALL_YES'] : $this->lang('PIC_ALL_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="pics_all" value="0" <?php echo isset($this->vars['PIC_ALL_NO']) ? $this->vars['PIC_ALL_NO'] : $this->lang('PIC_ALL_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_PIC_SORT']) ? $this->vars['L_PIC_SORT'] : $this->lang('L_PIC_SORT'); ?></b></td>
<td class="row2" width="62%">
<input type="radio" name="pics_sort" value="1" <?php echo isset($this->vars['PIC_SORT_YES']) ? $this->vars['PIC_SORT_YES'] : $this->lang('PIC_SORT_YES'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp; 
<input type="radio" name="pics_sort" value="0" <?php echo isset($this->vars['PIC_SORT_NO']) ? $this->vars['PIC_SORT_NO'] : $this->lang('PIC_SORT_NO'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr>
<td class="row1" width="38%"><b><br><?php echo isset($this->vars['L_PIC_THUMBSIZE']) ? $this->vars['L_PIC_THUMBSIZE'] : $this->lang('L_PIC_THUMBSIZE'); ?></b></td>
<td class="row2" width="62%">
<input type="text" maxlength="5" size="5" name="pics_thumbsize" value="<?php echo isset($this->vars['PIC_THUMBSIZE']) ? $this->vars['PIC_THUMBSIZE'] : $this->lang('PIC_THUMBSIZE'); ?>" class="post" />
</td>
</tr>
<tr>
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><br><br>
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp;
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" />
</td>
</tr>
</table>
</form>
<br clear="all" />