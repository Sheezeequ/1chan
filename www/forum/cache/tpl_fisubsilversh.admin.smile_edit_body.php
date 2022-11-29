<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 14:31:19 -0500 (time=1323545479)

?><div class="maintitle"><?php echo isset($this->vars['L_SMILEY_TITLE']) ? $this->vars['L_SMILEY_TITLE'] : $this->lang('L_SMILEY_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_SMILEY_EXPLAIN']) ? $this->vars['L_SMILEY_EXPLAIN'] : $this->lang('L_SMILEY_EXPLAIN'); ?></div>
<br />
<script language="javascript" type="text/javascript">
<!--
function update_smiley(newimage)
{
	document.smiley_image.src = "<?php echo isset($this->vars['S_SMILEY_BASEDIR']) ? $this->vars['S_SMILEY_BASEDIR'] : $this->lang('S_SMILEY_BASEDIR'); ?>/" + newimage;
}
//-->
</script>

<form method="post" action="<?php echo isset($this->vars['S_SMILEY_ACTION']) ? $this->vars['S_SMILEY_ACTION'] : $this->lang('S_SMILEY_ACTION'); ?>">
<table class="forumline" cellspacing="1" cellpadding="4" border="0" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_SMILEY_CONFIG']) ? $this->vars['L_SMILEY_CONFIG'] : $this->lang('L_SMILEY_CONFIG'); ?></th>
</tr>
<tr> 
<td class="row2"><?php echo isset($this->vars['L_SMILEY_CODE']) ? $this->vars['L_SMILEY_CODE'] : $this->lang('L_SMILEY_CODE'); ?></td>
<td class="row2"> 
<input type="text" name="smile_code" value="<?php echo isset($this->vars['SMILEY_CODE']) ? $this->vars['SMILEY_CODE'] : $this->lang('SMILEY_CODE'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_SMILEY_URL']) ? $this->vars['L_SMILEY_URL'] : $this->lang('L_SMILEY_URL'); ?></td>
<td class="row1"> 
<select name="smile_url" onchange="update_smiley(this.options[selectedIndex].value);"><?php echo isset($this->vars['S_FILENAME_OPTIONS']) ? $this->vars['S_FILENAME_OPTIONS'] : $this->lang('S_FILENAME_OPTIONS'); ?> 
</select>
&nbsp; <img name="smiley_image" src="<?php echo isset($this->vars['SMILEY_IMG']) ? $this->vars['SMILEY_IMG'] : $this->lang('SMILEY_IMG'); ?>" border="0" alt="" /> &nbsp;</td>
</tr>
<tr> 
<td class="row2"><?php echo isset($this->vars['L_SMILEY_EMOTION']) ? $this->vars['L_SMILEY_EMOTION'] : $this->lang('L_SMILEY_EMOTION'); ?></td>
<td class="row2"> 
<input type="text" name="smile_emotion" value="<?php echo isset($this->vars['SMILEY_EMOTICON']) ? $this->vars['SMILEY_EMOTICON'] : $this->lang('SMILEY_EMOTICON'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
<input class="mainoption" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />
</td>
</tr>
</table>
</form>
<br />