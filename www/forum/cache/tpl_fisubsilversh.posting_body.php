<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:36:03 -0500 (time=1323527763)

?><script type="text/javascript">
<!--
var L_RESULTS = '<?php echo isset($this->vars['L_SEARCH_RESULTS']) ? $this->vars['L_SEARCH_RESULTS'] : $this->lang('L_SEARCH_RESULTS'); ?>';
var L_RESULT = '<?php echo isset($this->vars['L_SEARCH_RESULT']) ? $this->vars['L_SEARCH_RESULT'] : $this->lang('L_SEARCH_RESULT'); ?>';
var L_MORE_MATCHES = '<?php echo isset($this->vars['L_MORE_MATCHES']) ? $this->vars['L_MORE_MATCHES'] : $this->lang('L_MORE_MATCHES'); ?>';
//-->
</script>

<script type="text/javascript" src="includes/javascript/ajax_postfunctions.js"></script>


<script language="JavaScript" src="bbcode_box/add_bbcode.js" type="text/javascript"></script>
<form action="<?php echo isset($this->vars['S_POST_ACTION']) ? $this->vars['S_POST_ACTION'] : $this->lang('S_POST_ACTION'); ?>" method="post" name="post" onsubmit="return checkForm(this)" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?>>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle"><?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></td>
</tr>
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> 
<?php

$switch_not_privmsg_count = ( isset($this->_tpldata['switch_not_privmsg.']) ) ?  sizeof($this->_tpldata['switch_not_privmsg.']) : 0;
for ($switch_not_privmsg_i = 0; $switch_not_privmsg_i < $switch_not_privmsg_count; $switch_not_privmsg_i++)
{
 $switch_not_privmsg_item = &$this->_tpldata['switch_not_privmsg.'][$switch_not_privmsg_i];
 $switch_not_privmsg_item['S_ROW_COUNT'] = $switch_not_privmsg_i;
 $switch_not_privmsg_item['S_NUM_ROWS'] = $switch_not_privmsg_count;

?>
<?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?>
<?php

} // END switch_not_privmsg

if(isset($switch_not_privmsg_item)) { unset($switch_not_privmsg_item); } 

?>
&nbsp;&raquo; <?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></td>
</tr>
</table>
<div id="preview_box" <?php echo isset($this->vars['S_DISPLAY_PREVIEW']) ? $this->vars['S_DISPLAY_PREVIEW'] : $this->lang('S_DISPLAY_PREVIEW'); ?>><?php echo isset($this->vars['POST_PREVIEW_BOX']) ? $this->vars['POST_PREVIEW_BOX'] : $this->lang('POST_PREVIEW_BOX'); ?></div>
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2"><?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></th>
</tr>
<?php

$switch_username_select_count = ( isset($this->_tpldata['switch_username_select.']) ) ?  sizeof($this->_tpldata['switch_username_select.']) : 0;
for ($switch_username_select_i = 0; $switch_username_select_i < $switch_username_select_count; $switch_username_select_i++)
{
 $switch_username_select_item = &$this->_tpldata['switch_username_select.'][$switch_username_select_i];
 $switch_username_select_item['S_ROW_COUNT'] = $switch_username_select_i;
 $switch_username_select_item['S_NUM_ROWS'] = $switch_username_select_count;

?>
<tr>
<td align="right" class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span></td>
<td class="row2"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" onblur="AJAXCheckPostUsername(this.value);" /> 
</td>
</tr>
<tr id="post_username_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen" id="post_username_error_text">&nbsp;</span></td>
</tr>
<?php

} // END switch_username_select

if(isset($switch_username_select_item)) { unset($switch_username_select_item); } 

?>
<?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ?  sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
<tr> 
<td align="right" class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span></td>
<td class="row2"> <input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" onkeyup="AJAXCheckPMUsername(this.value);" /><span id="pm_username_select">&nbsp;</span> 
&nbsp; <input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="button" onclick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /> 
</td>
</tr>
<tr id="pm_username_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen" id="pm_username_error_text">&nbsp;</span></td>
</tr>
<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>
<tr>
<td width="22%" align="right" class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>:</span></td>
<td class="row2" width="78%"><input type="text" <?php echo isset($this->vars['S_LOCK_SUBJECT']) ? $this->vars['S_LOCK_SUBJECT'] : $this->lang('S_LOCK_SUBJECT'); ?> name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="<?php echo isset($this->vars['SUBJECT']) ? $this->vars['SUBJECT'] : $this->lang('SUBJECT'); ?>" <?php echo isset($this->vars['S_AJAX_BLUR']) ? $this->vars['S_AJAX_BLUR'] : $this->lang('S_AJAX_BLUR'); ?> /> 
</td>
</tr>
<tr id="subject_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen"><?php echo isset($this->vars['L_EMPTY_SUBJECT']) ? $this->vars['L_EMPTY_SUBJECT'] : $this->lang('L_EMPTY_SUBJECT'); ?></span></td>
</tr>
<tr id="searchresults_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2"><span class="gen">
<a href="#" target="_blank" class="gen" id="searchresults_lnk">No results found.</a>
</span></td>
</tr>
<?php

$topic_description_count = ( isset($this->_tpldata['topic_description.']) ) ?  sizeof($this->_tpldata['topic_description.']) : 0;
for ($topic_description_i = 0; $topic_description_i < $topic_description_count; $topic_description_i++)
{
 $topic_description_item = &$this->_tpldata['topic_description.'][$topic_description_i];
 $topic_description_item['S_ROW_COUNT'] = $topic_description_i;
 $topic_description_item['S_NUM_ROWS'] = $topic_description_count;

?>
<tr>
<td width="22%" align="right" class="row1"><span class="explaintitle"><?php echo isset($this->vars['L_TOPIC_DESCRIPTION']) ? $this->vars['L_TOPIC_DESCRIPTION'] : $this->lang('L_TOPIC_DESCRIPTION'); ?></span></td>
<td class="row2" width="78%"> <span class="gen">
<input type="text" name="topic_desc" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="<?php echo isset($this->vars['TOPIC_DESCRIPTION']) ? $this->vars['TOPIC_DESCRIPTION'] : $this->lang('TOPIC_DESCRIPTION'); ?>" />
</span> </td>
</tr>
<?php

} // END topic_description

if(isset($topic_description_item)) { unset($topic_description_item); } 

?>
<?php

$switch_news_cat_count = ( isset($this->_tpldata['switch_news_cat.']) ) ?  sizeof($this->_tpldata['switch_news_cat.']) : 0;
for ($switch_news_cat_i = 0; $switch_news_cat_i < $switch_news_cat_count; $switch_news_cat_i++)
{
 $switch_news_cat_item = &$this->_tpldata['switch_news_cat.'][$switch_news_cat_i];
 $switch_news_cat_item['S_ROW_COUNT'] = $switch_news_cat_i;
 $switch_news_cat_item['S_NUM_ROWS'] = $switch_news_cat_count;

?>
<tr>
<td class="row1" width="22%" align="right"><span class="explaintitle"><?php echo isset($switch_news_cat_item['L_NEWS_CATEGORY']) ? $switch_news_cat_item['L_NEWS_CATEGORY'] : ''; ?></span></td>
<td class="row2" width="78%">
<select name="<?php echo isset($switch_news_cat_item['S_NAME']) ? $switch_news_cat_item['S_NAME'] : ''; ?>">
<?php echo isset($switch_news_cat_item['S_CATEGORY_BOX']) ? $switch_news_cat_item['S_CATEGORY_BOX'] : ''; ?>
</select>
</td>
</tr>
<?php

} // END switch_news_cat

if(isset($switch_news_cat_item)) { unset($switch_news_cat_item); } 

?>
<?php

$switch_icon_checkbox_count = ( isset($this->_tpldata['switch_icon_checkbox.']) ) ?  sizeof($this->_tpldata['switch_icon_checkbox.']) : 0;
for ($switch_icon_checkbox_i = 0; $switch_icon_checkbox_i < $switch_icon_checkbox_count; $switch_icon_checkbox_i++)
{
 $switch_icon_checkbox_item = &$this->_tpldata['switch_icon_checkbox.'][$switch_icon_checkbox_i];
 $switch_icon_checkbox_item['S_ROW_COUNT'] = $switch_icon_checkbox_i;
 $switch_icon_checkbox_item['S_NUM_ROWS'] = $switch_icon_checkbox_count;

?>
<tr>
<td valign="top" align="right" class="row1"><span class="explaintitle"><b><?php echo isset($this->vars['L_ICON_TITLE']) ? $this->vars['L_ICON_TITLE'] : $this->lang('L_ICON_TITLE'); ?></b></td>
<td class="row2">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<?php

$row_count = ( isset($switch_icon_checkbox_item['row.']) ) ? sizeof($switch_icon_checkbox_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$switch_icon_checkbox_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
<tr>
<td nowrap="nowrap">
<span class="gen">
<?php

$cell_count = ( isset($row_item['cell.']) ) ? sizeof($row_item['cell.']) : 0;
for ($cell_i = 0; $cell_i < $cell_count; $cell_i++)
{
 $cell_item = &$row_item['cell.'][$cell_i];
 $cell_item['S_ROW_COUNT'] = $cell_i;
 $cell_item['S_NUM_ROWS'] = $cell_count;

?>
<input type="radio" name="post_icon" value="<?php echo isset($cell_item['ICON_ID']) ? $cell_item['ICON_ID'] : ''; ?>"<?php echo isset($cell_item['ICON_CHECKED']) ? $cell_item['ICON_CHECKED'] : ''; ?>>&nbsp;<?php echo isset($cell_item['ICON_IMG']) ? $cell_item['ICON_IMG'] : ''; ?>&nbsp;&nbsp;
<?php

} // END cell

if(isset($cell_item)) { unset($cell_item); } 

?>
</span>
</td>
</tr>
<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
</table>
</td>
</tr>
<?php

} // END switch_icon_checkbox

if(isset($switch_icon_checkbox_item)) { unset($switch_icon_checkbox_item); } 

?>
<tr>
<td class="row1" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="1">
<tr>
<td align="right"><span class="explaintitle"><?php echo isset($this->vars['L_MESSAGE_BODY']) ? $this->vars['L_MESSAGE_BODY'] : $this->lang('L_MESSAGE_BODY'); ?>:</span></td>
</tr>
<tr>
<td align="center"><br />
<table width="100" border="0" cellspacing="0" cellpadding="5">
<tr align="center">
<td colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>" class="gensmall"><span class="explaintitle"><?php echo isset($this->vars['L_EMOTICONS']) ? $this->vars['L_EMOTICONS'] : $this->lang('L_EMOTICONS'); ?></span></td>
</tr>
<?php

$smilies_row_count = ( isset($this->_tpldata['smilies_row.']) ) ?  sizeof($this->_tpldata['smilies_row.']) : 0;
for ($smilies_row_i = 0; $smilies_row_i < $smilies_row_count; $smilies_row_i++)
{
 $smilies_row_item = &$this->_tpldata['smilies_row.'][$smilies_row_i];
 $smilies_row_item['S_ROW_COUNT'] = $smilies_row_i;
 $smilies_row_item['S_NUM_ROWS'] = $smilies_row_count;

?>
<tr align="center">
<?php

$smilies_col_count = ( isset($smilies_row_item['smilies_col.']) ) ? sizeof($smilies_row_item['smilies_col.']) : 0;
for ($smilies_col_i = 0; $smilies_col_i < $smilies_col_count; $smilies_col_i++)
{
 $smilies_col_item = &$smilies_row_item['smilies_col.'][$smilies_col_i];
 $smilies_col_item['S_ROW_COUNT'] = $smilies_col_i;
 $smilies_col_item['S_NUM_ROWS'] = $smilies_col_count;

?>
<td><a href="javascript:emoticon('<?php echo isset($smilies_col_item['SMILEY_CODE']) ? $smilies_col_item['SMILEY_CODE'] : ''; ?>')"><img src="<?php echo isset($smilies_col_item['SMILEY_IMG']) ? $smilies_col_item['SMILEY_IMG'] : ''; ?>" border="0" alt="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" title="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" /></a></td>
<?php

} // END smilies_col

if(isset($smilies_col_item)) { unset($smilies_col_item); } 

?>
</tr>
<?php

} // END smilies_row

if(isset($smilies_row_item)) { unset($smilies_row_item); } 

?>
<?php

$switch_smilies_extra_count = ( isset($this->_tpldata['switch_smilies_extra.']) ) ?  sizeof($this->_tpldata['switch_smilies_extra.']) : 0;
for ($switch_smilies_extra_i = 0; $switch_smilies_extra_i < $switch_smilies_extra_count; $switch_smilies_extra_i++)
{
 $switch_smilies_extra_item = &$this->_tpldata['switch_smilies_extra.'][$switch_smilies_extra_i];
 $switch_smilies_extra_item['S_ROW_COUNT'] = $switch_smilies_extra_i;
 $switch_smilies_extra_item['S_NUM_ROWS'] = $switch_smilies_extra_count;

?>
<tr align="center">
<td colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>" class="nav"><a href="<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>" onclick="window.open('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', '_phpbbsmilies', 'HEIGHT=250,resizable=yes,scrollbars=yes,WIDTH=300');return false;" target="_phpbbsmilies"><?php echo isset($this->vars['L_MORE_SMILIES']) ? $this->vars['L_MORE_SMILIES'] : $this->lang('L_MORE_SMILIES'); ?></a></td>
</tr>
<?php

} // END switch_smilies_extra

if(isset($switch_smilies_extra_item)) { unset($switch_smilies_extra_item); } 

?>
</table>
</td>
</tr>
</table>
</td>
<td class="row2" valign="top">
<table width="500" border="0" cellspacing="0" cellpadding="2">
<tr align="right" valign="middle"> 
<td>
<p style="margin-top: 0; margin-bottom: 0" align="left">
<span class="gen"> 
<span class="genmed">&nbsp;<select name="fc" onChange="BBCfc()" onMouseOver="helpline('fc')"
<option style="color:darkred; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="darkred" class="genmed">
<option selected><?php echo isset($this->vars['L_FONT_COLOR']) ? $this->vars['L_FONT_COLOR'] : $this->lang('L_FONT_COLOR'); ?></option>
<option style="color:black" value="<?php echo isset($this->vars['T_FONTCOLOR1']) ? $this->vars['T_FONTCOLOR1'] : $this->lang('T_FONTCOLOR1'); ?>"><?php echo isset($this->vars['L_COLOR_DEFAULT']) ? $this->vars['L_COLOR_DEFAULT'] : $this->lang('L_COLOR_DEFAULT'); ?></option>
<option value="darkred"><?php echo isset($this->vars['L_COLOR_DARK_RED']) ? $this->vars['L_COLOR_DARK_RED'] : $this->lang('L_COLOR_DARK_RED'); ?></option>
<option style="color:red; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="red" class="genmed"><?php echo isset($this->vars['L_COLOR_RED']) ? $this->vars['L_COLOR_RED'] : $this->lang('L_COLOR_RED'); ?></option>
<option style="color:orange; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="orange" class="genmed"><?php echo isset($this->vars['L_COLOR_ORANGE']) ? $this->vars['L_COLOR_ORANGE'] : $this->lang('L_COLOR_ORANGE'); ?></option>
<option style="color:brown; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="brown" class="genmed"><?php echo isset($this->vars['L_COLOR_BROWN']) ? $this->vars['L_COLOR_BROWN'] : $this->lang('L_COLOR_BROWN'); ?></option>
<option style="color:yellow; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="yellow" class="genmed"><?php echo isset($this->vars['L_COLOR_YELLOW']) ? $this->vars['L_COLOR_YELLOW'] : $this->lang('L_COLOR_YELLOW'); ?></option>
<option style="color:green; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="green" class="genmed"><?php echo isset($this->vars['L_COLOR_GREEN']) ? $this->vars['L_COLOR_GREEN'] : $this->lang('L_COLOR_GREEN'); ?></option>
<option style="color:olive; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="olive" class="genmed"><?php echo isset($this->vars['L_COLOR_OLIVE']) ? $this->vars['L_COLOR_OLIVE'] : $this->lang('L_COLOR_OLIVE'); ?></option>
<option style="color:cyan; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="cyan" class="genmed"><?php echo isset($this->vars['L_COLOR_CYAN']) ? $this->vars['L_COLOR_CYAN'] : $this->lang('L_COLOR_CYAN'); ?></option>
<option style="color:blue; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="blue" class="genmed"><?php echo isset($this->vars['L_COLOR_BLUE']) ? $this->vars['L_COLOR_BLUE'] : $this->lang('L_COLOR_BLUE'); ?></option>
<option style="color:darkblue; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="darkblue" class="genmed"><?php echo isset($this->vars['L_COLOR_DARK_BLUE']) ? $this->vars['L_COLOR_DARK_BLUE'] : $this->lang('L_COLOR_DARK_BLUE'); ?></option>
<option style="color:indigo; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="indigo" class="genmed"><?php echo isset($this->vars['L_COLOR_INDIGO']) ? $this->vars['L_COLOR_INDIGO'] : $this->lang('L_COLOR_INDIGO'); ?></option>
<option style="color:violet; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="violet" class="genmed"><?php echo isset($this->vars['L_COLOR_VIOLET']) ? $this->vars['L_COLOR_VIOLET'] : $this->lang('L_COLOR_VIOLET'); ?></option>
<option style="color:white; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="white" class="genmed"><?php echo isset($this->vars['L_COLOR_WHITE']) ? $this->vars['L_COLOR_WHITE'] : $this->lang('L_COLOR_WHITE'); ?></option>
<option style="color:black; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="black" class="genmed"><?php echo isset($this->vars['L_COLOR_BLACK']) ? $this->vars['L_COLOR_BLACK'] : $this->lang('L_COLOR_BLACK'); ?></option>
</select>&nbsp;&nbsp; <select name="fs" onChange="BBCfs()" onMouseOver="helpline('fs')" 
<option value="7" class="genmed" dir="ltr">
<option selected><?php echo isset($this->vars['L_FONT_SIZE']) ? $this->vars['L_FONT_SIZE'] : $this->lang('L_FONT_SIZE'); ?></option>
<?php echo isset($this->vars['L_FONT_TINY']) ? $this->vars['L_FONT_TINY'] : $this->lang('L_FONT_TINY'); ?></option>
<option value="9" class="genmed"><?php echo isset($this->vars['L_FONT_SMALL']) ? $this->vars['L_FONT_SMALL'] : $this->lang('L_FONT_SMALL'); ?></option>
<option value="12" class="genmed"><?php echo isset($this->vars['L_FONT_NORMAL']) ? $this->vars['L_FONT_NORMAL'] : $this->lang('L_FONT_NORMAL'); ?></option>
<option value="18" class="genmed"><?php echo isset($this->vars['L_FONT_LARGE']) ? $this->vars['L_FONT_LARGE'] : $this->lang('L_FONT_LARGE'); ?></option>
<option  value="24" class="genmed"><?php echo isset($this->vars['L_FONT_HUGE']) ? $this->vars['L_FONT_HUGE'] : $this->lang('L_FONT_HUGE'); ?></option>
</select> <span lang="ar-sy">&nbsp;</span><select name="ft" onChange="BBCft()" onMouseOver="helpline('ft')" 
<option style="color:black; background-color: #FFFFFF " value="<?php echo isset($this->vars['L_ARIAL']) ? $this->vars['L_ARIAL'] : $this->lang('L_ARIAL'); ?>" class="genmed" dir="ltr">
<option selected><?php echo isset($this->vars['L_FONT_TYPE']) ? $this->vars['L_FONT_TYPE'] : $this->lang('L_FONT_TYPE'); ?></option>
<option value="Arial">Default font</option>
<option style="color:black; background-color: #FFFFFF " value="Andalus" class="genmed">Andalus</option> 
<option style="color:black; background-color: #FFFFFF " value="Arial" class="genmed">Arial</option> 
<option style="color:black; background-color: #FFFFFF " value="Comic Sans MS" class="genmed">Comic Sans MS</option> 
<option style="color:black; background-color: #FFFFFF " value="Courier New" class="genmed">Courier New</option> 
<option value="Lucida Console">Lucida Console</option>
<option style="color:black; background-color: #FFFFFF " value="Microsoft Sans Serif" class="genmed">Microsoft Sans Serif</option> 
<option style="color:black; background-color: #FFFFFF " value="Symbol" class="genmed">Symbol</option> 
<option style="color:black; background-color: #FFFFFF " value="Tahoma" class="genmed">Tahoma</option> 
<option style="color:black; background-color: #FFFFFF " value="Times New Roman" class="genmed">Times New Roman</option> 
<option style="color:black; background-color: #FFFFFF " value="Traditional Arabic" class="genmed">Traditional Arabic</option> 
<option style="color:black; background-color: #FFFFFF " value="Verdana" class="genmed">Verdana</option> 
<option style="color:black; background-color: #FFFFFF " value="Webdings" class="genmed">Webdings</option> 
<option style="color:black; background-color: #FFFFFF " value="Wingdings" class="genmed">Wingdings</option> 
</select></span></span></span><p style="margin-top: 0; margin-bottom: 0">
<span class="genmed"><span style="font-size: 5pt">&nbsp;</span></span></td>
</tr>
<span class="gen"> 
<tr> 
<td width="450"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td> 
<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr> 
<td>
<p dir="ltr" align="left"><span class="gen">  
<span class="genmed"> 
<img border="1" src="bbcode_box/images/justify.gif" width="24" height="20" name="justify" type="image" onClick="BBCjustify()" onMouseOver="helpline('justify')" style="border-style: outset; border-width: 1" alt="justify"><img border="0" src="bbcode_box/images/right.gif" width="24" height="20" name="right" type="image" onClick="BBCright()" onMouseOver="helpline('right')" style="border-style: outset; border-width: 1" alt="right"><img border="0" src="bbcode_box/images/center.gif" width="24" height="20" name="center" type="image" onClick="BBCcenter()" onMouseOver="helpline('center')" style="border-style: outset; border-width: 1" alt="center"><img border="0" src="bbcode_box/images/left.gif" width="24" height="20" name="left" type="image" onClick="BBCleft()" onMouseOver="helpline('left')" style="border-style: outset; border-width: 1" alt="left">&nbsp;&nbsp; 
<img border="1" src="bbcode_box/images/bold.gif" width="24" height="20" name="bold" type="image" onClick="BBCbold()" onMouseOver="helpline('b')" style="border-style: outset; border-width: 1" alt="bold"><img border="0" src="bbcode_box/images/italic.gif" width="24" height="20" name="italic" type="image" onClick="BBCitalic()" onMouseOver="helpline('i')" style="border-style: outset; border-width: 1" alt="italic"><img border="0" src="bbcode_box/images/under.gif" width="24" height="20" name="under" type="image" onClick="BBCunder()" onMouseOver="helpline('u')" style="border-style: outset; border-width: 1" alt="under line"><img border="0" src="bbcode_box/images/strike.gif" width="24" height="20" name="strik" type="image" onClick="BBCstrik()" onMouseOver="helpline('s')" style="border-style: outset; border-width: 1" alt="strike through">&nbsp;&nbsp; 
<img border="1" src="bbcode_box/images/fade.gif" width="24" height="20" name="fade" type="image" onClick="BBCfade()" onMouseOver="helpline('fade')" style="border-style: outset; border-width: 1" alt="fade"><img border="0" src="bbcode_box/images/grad.gif" width="24" height="20" name="grad" type="image" onClick="BBCgrad()" onMouseOver="helpline('grad')" style="border-style: outset; border-width: 1" alt="gradient"><img border="0" src="bbcode_box/images/glow.gif" width="24" height="20" name="glow" type="image" onClick="BBCglow()" onMouseOver="helpline('glow')" style="border-style: outset; border-width: 1" alt="glow"><img border="0" src="bbcode_box/images/shadow.gif" width="24" height="20" name="shadow" type="image" onClick="BBCshadow()" onMouseOver="helpline('shadow')" style="border-style: outset; border-width: 1" alt="shadow"><img border="0" src="bbcode_box/images/highl.gif" width="24" height="20" name="highlight" type="image" onClick="BBChighlight()" onMouseOver="helpline('highlight')" style="border-style: outset; border-width: 1" alt="highlight">&nbsp;&nbsp; 
<img border="1" src="bbcode_box/images/marqd.gif" width="24" height="20" name="marqd" type="image" onClick="BBCmarqd()" onMouseOver="helpline('marqd')" style="border-style: outset; border-width: 1" alt="Marque to down"><img border="0" src="bbcode_box/images/marqu.gif" width="24" height="20" name="marqu" type="image" onClick="BBCmarqu()" onMouseOver="helpline('marqu')" style="border-style: outset; border-width: 1" alt="Marque to up"><img border="0" src="bbcode_box/images/marql.gif" width="24" height="20" name="marql" type="image" onClick="BBCmarql()" onMouseOver="helpline('marql')" style="border-style: outset; border-width: 1" alt="Marque to left"><img border="0" src="bbcode_box/images/marqr.gif" width="24" height="20" name="marqr" type="image" onClick="BBCmarqr()" onMouseOver="helpline('marqr')" style="border-style: outset; border-width: 1" alt="Marque to right"></span></span>
</p>
</td> 
</tr> 
<tr> 
<td>
<p align="left" style="margin-top: 0; margin-bottom: 0">
<span style="font-size: 5pt">&nbsp;</span></p><p align="left" dir="ltr" style="margin-top: 0; margin-bottom: 0"><span class="gen"> 
<span class="genmed"> 
<img border="0" src="bbcode_box/images/code.gif" width="24" height="20" name="code" type="image" onClick="BBCcode()" onMouseOver="helpline('code')" style="border-style: outset; border-width: 1" alt="Code"><img border="0" src="bbcode_box/images/phpcode.gif" width="24" height="20" name="php" type="image" onClick="BBCphp()" onMouseOver="helpline('php')" style="border-style: outset; border-width: 1" alt="PHP"><img border="0" src="bbcode_box/images/quote.gif" width="24" height="20" name="quote" type="image" onClick="BBCquote()" onMouseOver="helpline('quote')" style="border-style: outset; border-width: 1" alt="Quote">&nbsp;&nbsp; 
<img border="0" src="bbcode_box/images/url.gif" width="24" height="20" name="url" type="image" onClick="BBCurl()" onMouseOver="helpline('url')" style="border-style: outset; border-width: 1" alt="URL"><img border="0" src="bbcode_box/images/email.gif" width="24" height="20" name="email" type="image" onClick="BBCmail()" onMouseOver="helpline('mail')" style="border-style: outset; border-width: 1" alt="Email">&nbsp;&nbsp; 
<img border="0" src="bbcode_box/images/img.gif" width="24" height="20" name="img" type="image" onClick="BBCimg()" onMouseOver="helpline('img')" style="border-style: outset; border-width: 1" alt="Image"><img border="0" src="bbcode_box/images/imgl.gif" width="24" height="20" name="imgl" type="image" onClick="BBCimgl()" onMouseOver="helpline('imgl')" style="border-style: outset; border-width: 1" alt="Imagel"><img border="0" src="bbcode_box/images/imgr.gif" width="24" height="20" name="imgr" type="image" onClick="BBCimgr()" onMouseOver="helpline('imgr')" style="border-style: outset; border-width: 1" alt="Imager">&nbsp;&nbsp;<img border="0" src="bbcode_box/images/flash.gif" width="24" height="20" name="flash" type="image" onClick="BBCflash()" onMouseOver="helpline('flash')" style="border-style: outset; border-width: 1" alt="Flash"><img border="0" src="bbcode_box/images/video.gif" width="24" height="20" name="video" type="image" onClick="BBCvideo()" onMouseOver="helpline('video')" style="border-style: outset; border-width: 1" alt="Video"><img border="0" src="bbcode_box/images/sound.gif" width="24" height="20" name="stream" type="image" onClick="BBCstream()" onMouseOver="helpline('stream')" style="border-style: outset; border-width: 1" alt="Stream"><img border="0" src="bbcode_box/images/ram.gif" width="24" height="20" name="ram" type="image" onClick="BBCram()" onMouseOver="helpline('ram')" style="border-style: outset; border-width: 1" alt="Real Media">&nbsp;&nbsp; 
<img border="0" src="bbcode_box/images/smile.gif" width="24" height="20" name="smile" type="image" onclick="window.open('smilie_creator.php?mode=text2schild', '_phpbbcreatesmilies', 'HEIGHT=375,resizable=yes,scrollbars=yes,WIDTH=450');return false;" target="_phpbbcreatesmilies" onMouseOver="helpline('smile')" style="border-style: outset; border-width: 1" alt="Smilie Creator"><img border="0" src="bbcode_box/images/google.gif" width="24" height="20" name="google" type="image" onClick="BBCgoogle()" onMouseOver="helpline('google')" style="border-style: outset; border-width: 1" alt="Google"><img border="0" src="bbcode_box/images/hr.gif" width="24" height="20" name="hr" type="image" onClick="BBChr()" onMouseOver="helpline('hr')" style="border-style: outset; border-width: 1" alt="H-Line">&nbsp;&nbsp;<img border="0" src="bbcode_box/images/plain.gif" width="24" height="20" name="plain" type="image" onClick="BBCplain()" onMouseOver="helpline('plain')" style="border-style: outset; border-width: 1" alt="Remove BBcode"></span></td> 
</tr> 
</table> 
</td> 
</tr> 
</table>
</td>
</tr>
<tr>
<td colspan="9">
<input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="<?php echo isset($this->vars['L_STYLES_TIP']) ? $this->vars['L_STYLES_TIP'] : $this->lang('L_STYLES_TIP'); ?>" />
</td>
</tr>
<tr>
<td colspan="9">
<textarea name="message" rows="15" cols="35" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></textarea>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" valign="top"><span class="explaintitle"><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?>:</span><br />
<span class="gensmall"><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br />
<?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br />
<?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
<td class="row2"> 
<table cellspacing="0" cellpadding="1" border="0">
<?php

$switch_html_checkbox_count = ( isset($this->_tpldata['switch_html_checkbox.']) ) ?  sizeof($this->_tpldata['switch_html_checkbox.']) : 0;
for ($switch_html_checkbox_i = 0; $switch_html_checkbox_i < $switch_html_checkbox_count; $switch_html_checkbox_i++)
{
 $switch_html_checkbox_item = &$this->_tpldata['switch_html_checkbox.'][$switch_html_checkbox_i];
 $switch_html_checkbox_item['S_ROW_COUNT'] = $switch_html_checkbox_i;
 $switch_html_checkbox_item['S_NUM_ROWS'] = $switch_html_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="disable_html" <?php echo isset($this->vars['S_HTML_CHECKED']) ? $this->vars['S_HTML_CHECKED'] : $this->lang('S_HTML_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_DISABLE_HTML']) ? $this->vars['L_DISABLE_HTML'] : $this->lang('L_DISABLE_HTML'); ?></td>
</tr>
<?php

} // END switch_html_checkbox

if(isset($switch_html_checkbox_item)) { unset($switch_html_checkbox_item); } 

?>
<?php

$switch_bbcode_checkbox_count = ( isset($this->_tpldata['switch_bbcode_checkbox.']) ) ?  sizeof($this->_tpldata['switch_bbcode_checkbox.']) : 0;
for ($switch_bbcode_checkbox_i = 0; $switch_bbcode_checkbox_i < $switch_bbcode_checkbox_count; $switch_bbcode_checkbox_i++)
{
 $switch_bbcode_checkbox_item = &$this->_tpldata['switch_bbcode_checkbox.'][$switch_bbcode_checkbox_i];
 $switch_bbcode_checkbox_item['S_ROW_COUNT'] = $switch_bbcode_checkbox_i;
 $switch_bbcode_checkbox_item['S_NUM_ROWS'] = $switch_bbcode_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="disable_bbcode" <?php echo isset($this->vars['S_BBCODE_CHECKED']) ? $this->vars['S_BBCODE_CHECKED'] : $this->lang('S_BBCODE_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_DISABLE_BBCODE']) ? $this->vars['L_DISABLE_BBCODE'] : $this->lang('L_DISABLE_BBCODE'); ?></td>
</tr>
<?php

} // END switch_bbcode_checkbox

if(isset($switch_bbcode_checkbox_item)) { unset($switch_bbcode_checkbox_item); } 

?>
<?php

$switch_smilies_checkbox_count = ( isset($this->_tpldata['switch_smilies_checkbox.']) ) ?  sizeof($this->_tpldata['switch_smilies_checkbox.']) : 0;
for ($switch_smilies_checkbox_i = 0; $switch_smilies_checkbox_i < $switch_smilies_checkbox_count; $switch_smilies_checkbox_i++)
{
 $switch_smilies_checkbox_item = &$this->_tpldata['switch_smilies_checkbox.'][$switch_smilies_checkbox_i];
 $switch_smilies_checkbox_item['S_ROW_COUNT'] = $switch_smilies_checkbox_i;
 $switch_smilies_checkbox_item['S_NUM_ROWS'] = $switch_smilies_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="disable_smilies" <?php echo isset($this->vars['S_SMILIES_CHECKED']) ? $this->vars['S_SMILIES_CHECKED'] : $this->lang('S_SMILIES_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_DISABLE_SMILIES']) ? $this->vars['L_DISABLE_SMILIES'] : $this->lang('L_DISABLE_SMILIES'); ?></td>
</tr>
<?php

} // END switch_smilies_checkbox

if(isset($switch_smilies_checkbox_item)) { unset($switch_smilies_checkbox_item); } 

?>
<?php

$switch_signature_checkbox_count = ( isset($this->_tpldata['switch_signature_checkbox.']) ) ?  sizeof($this->_tpldata['switch_signature_checkbox.']) : 0;
for ($switch_signature_checkbox_i = 0; $switch_signature_checkbox_i < $switch_signature_checkbox_count; $switch_signature_checkbox_i++)
{
 $switch_signature_checkbox_item = &$this->_tpldata['switch_signature_checkbox.'][$switch_signature_checkbox_i];
 $switch_signature_checkbox_item['S_ROW_COUNT'] = $switch_signature_checkbox_i;
 $switch_signature_checkbox_item['S_NUM_ROWS'] = $switch_signature_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="attach_sig" <?php echo isset($this->vars['S_SIGNATURE_CHECKED']) ? $this->vars['S_SIGNATURE_CHECKED'] : $this->lang('S_SIGNATURE_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_ATTACH_SIGNATURE']) ? $this->vars['L_ATTACH_SIGNATURE'] : $this->lang('L_ATTACH_SIGNATURE'); ?></td>
</tr>
<?php

} // END switch_signature_checkbox

if(isset($switch_signature_checkbox_item)) { unset($switch_signature_checkbox_item); } 

?>
<?php

$switch_bookmark_checkbox_count = ( isset($this->_tpldata['switch_bookmark_checkbox.']) ) ?  sizeof($this->_tpldata['switch_bookmark_checkbox.']) : 0;
for ($switch_bookmark_checkbox_i = 0; $switch_bookmark_checkbox_i < $switch_bookmark_checkbox_count; $switch_bookmark_checkbox_i++)
{
 $switch_bookmark_checkbox_item = &$this->_tpldata['switch_bookmark_checkbox.'][$switch_bookmark_checkbox_i];
 $switch_bookmark_checkbox_item['S_ROW_COUNT'] = $switch_bookmark_checkbox_i;
 $switch_bookmark_checkbox_item['S_NUM_ROWS'] = $switch_bookmark_checkbox_count;

?>
<tr> 
<td> 
<input type="checkbox" name="setbm" <?php echo isset($this->vars['S_SETBM_CHECKED']) ? $this->vars['S_SETBM_CHECKED'] : $this->lang('S_SETBM_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_SET_BOOKMARK']) ? $this->vars['L_SET_BOOKMARK'] : $this->lang('L_SET_BOOKMARK'); ?></td>
</tr>
<?php

} // END switch_bookmark_checkbox

if(isset($switch_bookmark_checkbox_item)) { unset($switch_bookmark_checkbox_item); } 

?>
<?php

$switch_notify_checkbox_count = ( isset($this->_tpldata['switch_notify_checkbox.']) ) ?  sizeof($this->_tpldata['switch_notify_checkbox.']) : 0;
for ($switch_notify_checkbox_i = 0; $switch_notify_checkbox_i < $switch_notify_checkbox_count; $switch_notify_checkbox_i++)
{
 $switch_notify_checkbox_item = &$this->_tpldata['switch_notify_checkbox.'][$switch_notify_checkbox_i];
 $switch_notify_checkbox_item['S_ROW_COUNT'] = $switch_notify_checkbox_i;
 $switch_notify_checkbox_item['S_NUM_ROWS'] = $switch_notify_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="notify" <?php echo isset($this->vars['S_NOTIFY_CHECKED']) ? $this->vars['S_NOTIFY_CHECKED'] : $this->lang('S_NOTIFY_CHECKED'); ?> />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?></td>
</tr>
<?php

} // END switch_notify_checkbox

if(isset($switch_notify_checkbox_item)) { unset($switch_notify_checkbox_item); } 

?>
<?php

$switch_delete_checkbox_count = ( isset($this->_tpldata['switch_delete_checkbox.']) ) ?  sizeof($this->_tpldata['switch_delete_checkbox.']) : 0;
for ($switch_delete_checkbox_i = 0; $switch_delete_checkbox_i < $switch_delete_checkbox_count; $switch_delete_checkbox_i++)
{
 $switch_delete_checkbox_item = &$this->_tpldata['switch_delete_checkbox.'][$switch_delete_checkbox_i];
 $switch_delete_checkbox_item['S_ROW_COUNT'] = $switch_delete_checkbox_i;
 $switch_delete_checkbox_item['S_NUM_ROWS'] = $switch_delete_checkbox_count;

?>
<tr>
<td>
<input type="checkbox" name="delete" />
</td>
<td class="gensmall"><?php echo isset($this->vars['L_DELETE_POST']) ? $this->vars['L_DELETE_POST'] : $this->lang('L_DELETE_POST'); ?></td>
</tr>
<?php

} // END switch_delete_checkbox

if(isset($switch_delete_checkbox_item)) { unset($switch_delete_checkbox_item); } 

?>
<?php

$switch_type_cal_count = ( isset($this->_tpldata['switch_type_cal.']) ) ?  sizeof($this->_tpldata['switch_type_cal.']) : 0;
for ($switch_type_cal_i = 0; $switch_type_cal_i < $switch_type_cal_count; $switch_type_cal_i++)
{
 $switch_type_cal_item = &$this->_tpldata['switch_type_cal.'][$switch_type_cal_i];
 $switch_type_cal_item['S_ROW_COUNT'] = $switch_type_cal_i;
 $switch_type_cal_item['S_NUM_ROWS'] = $switch_type_cal_count;

?>
		  <tr><td colspan="2"><hr /></td></tr>
		  <tr>
			<td></td>
			<td valign="top">
				<table cellpadding="2" cellspacing="0" width="100%" border="0">
				<tr>
					<td align="right" nowrap="nowrap"><span class="gen"><b><?php echo isset($this->vars['L_CALENDAR_TITLE']) ? $this->vars['L_CALENDAR_TITLE'] : $this->lang('L_CALENDAR_TITLE'); ?>&nbsp;:</b></span></td>
					<td align="left" width="100%">
						<span class="genmed">
							<?php echo isset($this->vars['S_CALENDAR_DAY']) ? $this->vars['S_CALENDAR_DAY'] : $this->lang('S_CALENDAR_DAY'); ?><?php echo isset($this->vars['S_CALENDAR_MONTH']) ? $this->vars['S_CALENDAR_MONTH'] : $this->lang('S_CALENDAR_MONTH'); ?><?php echo isset($this->vars['S_CALENDAR_YEAR']) ? $this->vars['S_CALENDAR_YEAR'] : $this->lang('S_CALENDAR_YEAR'); ?>&nbsp;
							<a href="#" name="#" class="genmed" onClick="document.post.topic_calendar_day.value=<?php echo isset($this->vars['TODAY_DAY']) ? $this->vars['TODAY_DAY'] : $this->lang('TODAY_DAY'); ?>;document.post.topic_calendar_month.value=<?php echo isset($this->vars['TODAY_MONTH']) ? $this->vars['TODAY_MONTH'] : $this->lang('TODAY_MONTH'); ?>;document.post.topic_calendar_year.value=<?php echo isset($this->vars['TODAY_YEAR']) ? $this->vars['TODAY_YEAR'] : $this->lang('TODAY_YEAR'); ?>;" /><?php echo isset($this->vars['L_TODAY']) ? $this->vars['L_TODAY'] : $this->lang('L_TODAY'); ?></a>
						</span>
					</td>
				</tr>
				<tr>
					<td align="right" nowrap="nowrap"><span class="gen"><b><?php echo isset($this->vars['L_TIME']) ? $this->vars['L_TIME'] : $this->lang('L_TIME'); ?>&nbsp;:</b></span></td>
					<td align="left" width="100%">
						<span class="genmed">
							<input name="topic_calendar_hour" type="post" maxlength="2" size="3" value="<?php echo isset($this->vars['CALENDAR_HOUR']) ? $this->vars['CALENDAR_HOUR'] : $this->lang('CALENDAR_HOUR'); ?>" />&nbsp;<?php echo isset($this->vars['L_HOURS']) ? $this->vars['L_HOURS'] : $this->lang('L_HOURS'); ?>&nbsp;&nbsp;
							<input name="topic_calendar_min" type="post" maxlength="2" size="3" value="<?php echo isset($this->vars['CALENDAR_MIN']) ? $this->vars['CALENDAR_MIN'] : $this->lang('CALENDAR_MIN'); ?>" />&nbsp;<?php echo isset($this->vars['L_MINUTES']) ? $this->vars['L_MINUTES'] : $this->lang('L_MINUTES'); ?>
						</span>
					</td>
				</tr>
				<tr><td></td><td><hr /></td></tr>
				<tr>
					<td align="right" nowrap="nowrap"><span class="gen"><b><?php echo isset($this->vars['L_CALENDAR_DURATION']) ? $this->vars['L_CALENDAR_DURATION'] : $this->lang('L_CALENDAR_DURATION'); ?>&nbsp;:</b></span></td>
					<td align="left" width="100%">
						<span class="genmed">
							<input name="topic_calendar_duration_day" type="post" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_DAY']) ? $this->vars['CALENDAR_DURATION_DAY'] : $this->lang('CALENDAR_DURATION_DAY'); ?>" />&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?>&nbsp;&nbsp;
							<input name="topic_calendar_duration_hour" type="post" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_HOUR']) ? $this->vars['CALENDAR_DURATION_HOUR'] : $this->lang('CALENDAR_DURATION_HOUR'); ?>" />&nbsp;<?php echo isset($this->vars['L_HOURS']) ? $this->vars['L_HOURS'] : $this->lang('L_HOURS'); ?>&nbsp;&nbsp;
							<input name="topic_calendar_duration_min" type="post" maxlength="5" size="3" value="<?php echo isset($this->vars['CALENDAR_DURATION_MIN']) ? $this->vars['CALENDAR_DURATION_MIN'] : $this->lang('CALENDAR_DURATION_MIN'); ?>" />&nbsp;<?php echo isset($this->vars['L_MINUTES']) ? $this->vars['L_MINUTES'] : $this->lang('L_MINUTES'); ?>
						</span>
					</td>
				</tr>
				</table>
			</td>
		  </tr>
		  <tr><td colspan="2"><hr /></td></tr>
		  <?php

} // END switch_type_cal

if(isset($switch_type_cal_item)) { unset($switch_type_cal_item); } 

?>
<?php

$switch_type_toggle_count = ( isset($this->_tpldata['switch_type_toggle.']) ) ?  sizeof($this->_tpldata['switch_type_toggle.']) : 0;
for ($switch_type_toggle_i = 0; $switch_type_toggle_i < $switch_type_toggle_count; $switch_type_toggle_i++)
{
 $switch_type_toggle_item = &$this->_tpldata['switch_type_toggle.'][$switch_type_toggle_i];
 $switch_type_toggle_item['S_ROW_COUNT'] = $switch_type_toggle_i;
 $switch_type_toggle_item['S_NUM_ROWS'] = $switch_type_toggle_count;

?>
<tr>
<td></td>
<td><strong><?php echo isset($this->vars['S_TYPE_TOGGLE']) ? $this->vars['S_TYPE_TOGGLE'] : $this->lang('S_TYPE_TOGGLE'); ?></strong></td>
</tr>
<?php

} // END switch_type_toggle

if(isset($switch_type_toggle_item)) { unset($switch_type_toggle_item); } 

?>
</table>
</td>
</tr>
<?php echo isset($this->vars['ATTACHBOX']) ? $this->vars['ATTACHBOX'] : $this->lang('ATTACHBOX'); ?>
<?php echo isset($this->vars['POLLBOX']) ? $this->vars['POLLBOX'] : $this->lang('POLLBOX'); ?> 
<!-- Visual Confirmation -->
<?php

$switch_confirm_count = ( isset($this->_tpldata['switch_confirm.']) ) ?  sizeof($this->_tpldata['switch_confirm.']) : 0;
for ($switch_confirm_i = 0; $switch_confirm_i < $switch_confirm_count; $switch_confirm_i++)
{
 $switch_confirm_item = &$this->_tpldata['switch_confirm.'][$switch_confirm_i];
 $switch_confirm_item['S_ROW_COUNT'] = $switch_confirm_i;
 $switch_confirm_item['S_NUM_ROWS'] = $switch_confirm_count;

?>
<tr>
	<td class="row1" colspan="2" align="center"><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_IMPAIRED']) ? $this->vars['L_CONFIRM_CODE_IMPAIRED'] : $this->lang('L_CONFIRM_CODE_IMPAIRED'); ?></span><br /><br /><?php echo isset($this->vars['CONFIRM_IMG']) ? $this->vars['CONFIRM_IMG'] : $this->lang('CONFIRM_IMG'); ?><br /><br /></td>
</tr>
<tr> 
  <td class="row1"><span class="gen"><?php echo isset($this->vars['L_CONFIRM_CODE']) ? $this->vars['L_CONFIRM_CODE'] : $this->lang('L_CONFIRM_CODE'); ?>: * </span><br /><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_EXPLAIN']) ? $this->vars['L_CONFIRM_CODE_EXPLAIN'] : $this->lang('L_CONFIRM_CODE_EXPLAIN'); ?></span></td>
  <td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
</tr>
<?php

} // END switch_confirm

if(isset($switch_confirm_item)) { unset($switch_confirm_item); } 

?>
<tr>
<td class="cat" colspan="2" align="center" height="28"><?php echo isset($this->vars['S_HIDDEN_FORM_FIELDS']) ? $this->vars['S_HIDDEN_FORM_FIELDS'] : $this->lang('S_HIDDEN_FORM_FIELDS'); ?>
<input type="submit" tabindex="5" name="preview" <?php echo isset($this->vars['S_EDIT_AJAX']) ? $this->vars['S_EDIT_AJAX'] : $this->lang('S_EDIT_AJAX'); ?>class="mainoption" value="<?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?>" />
&nbsp;&nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
</form>
<?php echo isset($this->vars['TOPIC_REVIEW_BOX']) ? $this->vars['TOPIC_REVIEW_BOX'] : $this->lang('TOPIC_REVIEW_BOX'); ?> 
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> 
<?php

$switch_not_privmsg_count = ( isset($this->_tpldata['switch_not_privmsg.']) ) ?  sizeof($this->_tpldata['switch_not_privmsg.']) : 0;
for ($switch_not_privmsg_i = 0; $switch_not_privmsg_i < $switch_not_privmsg_count; $switch_not_privmsg_i++)
{
 $switch_not_privmsg_item = &$this->_tpldata['switch_not_privmsg.'][$switch_not_privmsg_i];
 $switch_not_privmsg_item['S_ROW_COUNT'] = $switch_not_privmsg_i;
 $switch_not_privmsg_item['S_NUM_ROWS'] = $switch_not_privmsg_count;

?>
<?php echo isset($this->vars['NAV_CAT_DESC']) ? $this->vars['NAV_CAT_DESC'] : $this->lang('NAV_CAT_DESC'); ?>
<?php

} // END switch_not_privmsg

if(isset($switch_not_privmsg_item)) { unset($switch_not_privmsg_item); } 

?>
&nbsp;&raquo; <?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></td>
</tr>
<tr>
	<td><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
</tr>
</table>
