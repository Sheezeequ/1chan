<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:57:27 -0500 (time=1323529047)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
	</tr>
</table><center>

<?php

$switch_current_sig_count = ( isset($this->_tpldata['switch_current_sig.']) ) ?  sizeof($this->_tpldata['switch_current_sig.']) : 0;
for ($switch_current_sig_i = 0; $switch_current_sig_i < $switch_current_sig_count; $switch_current_sig_i++)
{
 $switch_current_sig_item = &$this->_tpldata['switch_current_sig.'][$switch_current_sig_i];
 $switch_current_sig_item['S_ROW_COUNT'] = $switch_current_sig_i;
 $switch_current_sig_item['S_NUM_ROWS'] = $switch_current_sig_count;

?>

<form method="post" action="<?php echo isset($this->vars['SIG_LINK']) ? $this->vars['SIG_LINK'] : $this->lang('SIG_LINK'); ?>" name="preview">

<table border="0" cellpadding="3" cellspacing="1" width="660" class="forumline">
	<tr>
		<th class="thHead" colspan="2" height="25" valign="middle"><?php echo isset($this->vars['SIG_CURRENT']) ? $this->vars['SIG_CURRENT'] : $this->lang('SIG_CURRENT'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="140" height="140"><span class="gen"><?php echo isset($this->vars['L_SIGNATURE']) ? $this->vars['L_SIGNATURE'] : $this->lang('L_SIGNATURE'); ?>:</span></td>
		<td class="row2" width="520" valign="bottom"><span class="gen"><?php echo isset($this->vars['CURRENT_PREVIEW']) ? $this->vars['CURRENT_PREVIEW'] : $this->lang('CURRENT_PREVIEW'); ?></span></td>
	</tr>
	<tr>
		<td class="row1" width="140" height="20"><span class="gen"></span></td>
		<td class="row2" width="520" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['PROFIL_IMG']) ? $this->vars['PROFIL_IMG'] : $this->lang('PROFIL_IMG'); ?> <?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?> <?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?> <?php echo isset($this->vars['WWW_IMG']) ? $this->vars['WWW_IMG'] : $this->lang('WWW_IMG'); ?> <?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?> <?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?> <?php echo isset($this->vars['MSN_IMG']) ? $this->vars['MSN_IMG'] : $this->lang('MSN_IMG'); ?> <?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></td>
	</tr>
</table>

<br />

<table border="0" cellpadding="3" cellspacing="1" width="660" class="forumline">
	<tr>
		<th class="thHead" colspan="2" height="25" valign="middle"><?php echo isset($this->vars['SIG_EDIT']) ? $this->vars['SIG_EDIT'] : $this->lang('SIG_EDIT'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="130" height="20">&nbsp;</td>
		<td class="row2" width="530" align="middle">
		<INPUT TYPE="button" value=" B " style="font-weight:bold; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[b][/b]';">
		<INPUT TYPE="button" value=" i " style="font-style:italic; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[i][/i]';">
		<INPUT TYPE="button" value=" u " style="text-decoration: underline; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[u][/u]';">
		<INPUT TYPE="button" value="URL" style="text-decoration: underline; width: 40px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[url][/url]';">
		<INPUT TYPE="button" value="Img" style="width: 40px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[img][/img]';">
		</td>
	</tr>
	<tr>
		<td class="row1" width="130" height="150"><span class="gen"><?php echo isset($this->vars['L_SIGNATURE']) ? $this->vars['L_SIGNATURE'] : $this->lang('L_SIGNATURE'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_SIGNATURE_EXPLAIN']) ? $this->vars['L_SIGNATURE_EXPLAIN'] : $this->lang('L_SIGNATURE_EXPLAIN'); ?><br /><br /><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br /><?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br /><?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
		<td class="row2" width="530" align="middle"><textarea name="signature_text" style="width: 450px" rows="8" cols="70" class="post"><?php echo isset($this->vars['SIGNATURE']) ? $this->vars['SIGNATURE'] : $this->lang('SIGNATURE'); ?></textarea></td>
	</tr>
	<tr>
		<td class="row1" width="130" height="20">&nbsp;</td>
		<td class="row2" width="530" align="middle">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['L_PROFILE']) ? $this->vars['L_PROFILE'] : $this->lang('L_PROFILE'); ?>" name="editprofile">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_CURRENT']) ? $this->vars['SIG_CURRENT'] : $this->lang('SIG_CURRENT'); ?>" name="current">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_PREVIEW']) ? $this->vars['SIG_PREVIEW'] : $this->lang('SIG_PREVIEW'); ?>" name="preview">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_SAVE']) ? $this->vars['SIG_SAVE'] : $this->lang('SIG_SAVE'); ?>" name="save">
		</td>
	</tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
</form>

<?php

} // END switch_current_sig

if(isset($switch_current_sig_item)) { unset($switch_current_sig_item); } 

?>

<?php

$switch_preview_sig_count = ( isset($this->_tpldata['switch_preview_sig.']) ) ?  sizeof($this->_tpldata['switch_preview_sig.']) : 0;
for ($switch_preview_sig_i = 0; $switch_preview_sig_i < $switch_preview_sig_count; $switch_preview_sig_i++)
{
 $switch_preview_sig_item = &$this->_tpldata['switch_preview_sig.'][$switch_preview_sig_i];
 $switch_preview_sig_item['S_ROW_COUNT'] = $switch_preview_sig_i;
 $switch_preview_sig_item['S_NUM_ROWS'] = $switch_preview_sig_count;

?>

<form method="post" action="<?php echo isset($this->vars['SIG_LINK']) ? $this->vars['SIG_LINK'] : $this->lang('SIG_LINK'); ?>" name="preview">

<table border="0" cellpadding="3" cellspacing="1" width="660" class="forumline">
	<tr>
		<th class="thHead" colspan="2" height="25" valign="middle"><?php echo isset($this->vars['SIG_PREVIEW']) ? $this->vars['SIG_PREVIEW'] : $this->lang('SIG_PREVIEW'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="140" height="140"><span class="gen"><?php echo isset($this->vars['L_SIGNATURE']) ? $this->vars['L_SIGNATURE'] : $this->lang('L_SIGNATURE'); ?>:</span></td>
		<td class="row2" width="520" valign="bottom"><span class="gen"><?php echo isset($this->vars['REAL_PREVIEW']) ? $this->vars['REAL_PREVIEW'] : $this->lang('REAL_PREVIEW'); ?></span></td>
	</tr>
	<tr>
		<td class="row1" width="140" height="20"><span class="gen"></span></td>
		<td class="row2" width="520" valign="middle" nowrap="nowrap"><?php echo isset($this->vars['PROFIL_IMG']) ? $this->vars['PROFIL_IMG'] : $this->lang('PROFIL_IMG'); ?> <?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?> <?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?> <?php echo isset($this->vars['WWW_IMG']) ? $this->vars['WWW_IMG'] : $this->lang('WWW_IMG'); ?> <?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?> <?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?> <?php echo isset($this->vars['MSN_IMG']) ? $this->vars['MSN_IMG'] : $this->lang('MSN_IMG'); ?> <?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></td>
	</tr>
</table>

<br />

<table border="0" cellpadding="3" cellspacing="1" width="660" class="forumline">
	<tr>
		<th class="thHead" colspan="2" height="25" valign="middle"><?php echo isset($this->vars['SIG_EDIT']) ? $this->vars['SIG_EDIT'] : $this->lang('SIG_EDIT'); ?></th>
	</tr>
	<tr>
		<td class="row1" width="130" height="20">&nbsp;</td>
		<td class="row2" width="530" align="middle">
		<INPUT TYPE="button" value=" B " style="font-weight:bold; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[b][/b]';">
		<INPUT TYPE="button" value=" i " style="font-style:italic; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[i][/i]';">
		<INPUT TYPE="button" value=" u " style="text-decoration: underline; width: 30px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[u][/u]';">
		<INPUT TYPE="button" value="URL" style="text-decoration: underline; width: 40px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[url][/url]';">
		<INPUT TYPE="button" value="Img" style="width: 40px" onClick="document.preview.signature_text.value=document.preview.signature_text.value + '[img][/img]';">
		</td>
	</tr>
	<tr>
		<td class="row1" width="130" height="150"><span class="gen"><?php echo isset($this->vars['L_SIGNATURE']) ? $this->vars['L_SIGNATURE'] : $this->lang('L_SIGNATURE'); ?>:</span><br /><span class="gensmall"><?php echo isset($this->vars['L_SIGNATURE_EXPLAIN']) ? $this->vars['L_SIGNATURE_EXPLAIN'] : $this->lang('L_SIGNATURE_EXPLAIN'); ?><br /><br /><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br /><?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br /><?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
		<td class="row2" width="530" align="middle"><textarea name="signature_text" style="width: 450px" rows="8" cols="70" class="post"><?php echo isset($this->vars['PREVIEW']) ? $this->vars['PREVIEW'] : $this->lang('PREVIEW'); ?></textarea></td>
	</tr>
	<tr>
		<td class="row1" width="130" height="20">&nbsp;</td>
		<td class="row2" width="530" align="middle">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['L_PROFILE']) ? $this->vars['L_PROFILE'] : $this->lang('L_PROFILE'); ?>" name="editprofile">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_CURRENT']) ? $this->vars['SIG_CURRENT'] : $this->lang('SIG_CURRENT'); ?>" name="current">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_PREVIEW']) ? $this->vars['SIG_PREVIEW'] : $this->lang('SIG_PREVIEW'); ?>" name="preview">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_SAVE']) ? $this->vars['SIG_SAVE'] : $this->lang('SIG_SAVE'); ?>" name="save">
		</td>
	</tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

</form>

<?php

} // END switch_preview_sig

if(isset($switch_preview_sig_item)) { unset($switch_preview_sig_item); } 

?>

<?php

$switch_save_sig_count = ( isset($this->_tpldata['switch_save_sig.']) ) ?  sizeof($this->_tpldata['switch_save_sig.']) : 0;
for ($switch_save_sig_i = 0; $switch_save_sig_i < $switch_save_sig_count; $switch_save_sig_i++)
{
 $switch_save_sig_item = &$this->_tpldata['switch_save_sig.'][$switch_save_sig_i];
 $switch_save_sig_item['S_ROW_COUNT'] = $switch_save_sig_i;
 $switch_save_sig_item['S_NUM_ROWS'] = $switch_save_sig_count;

?>

<form method="post" action="<?php echo isset($this->vars['SIG_LINK']) ? $this->vars['SIG_LINK'] : $this->lang('SIG_LINK'); ?>" name="preview">

<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" height="25" valign="middle"><?php echo isset($this->vars['SIG_SAVE']) ? $this->vars['SIG_SAVE'] : $this->lang('SIG_SAVE'); ?></th>
	</tr>
	<tr>
		<td class="row1" valign="middle" align="middle" height="100"><span class="gen"><?php echo isset($this->vars['SAVE_MESSAGE']) ? $this->vars['SAVE_MESSAGE'] : $this->lang('SAVE_MESSAGE'); ?></span></td>
	</tr>
	<tr>
		<td class="row2" align="middle">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['L_PROFILE']) ? $this->vars['L_PROFILE'] : $this->lang('L_PROFILE'); ?>" name="editprofile">
		<INPUT TYPE="submit" VALUE="<?php echo isset($this->vars['SIG_CURRENT']) ? $this->vars['SIG_CURRENT'] : $this->lang('SIG_CURRENT'); ?>" name="current">
		</td>
	</tr>
</table>

</form>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

<?php

} // END switch_save_sig

if(isset($switch_save_sig_item)) { unset($switch_save_sig_item); } 

?>

</center>
<script language="javascript" type="text/javascript">
<!--
if (<?php echo isset($this->vars['RETURN_PROFILE']) ? $this->vars['RETURN_PROFILE'] : $this->lang('RETURN_PROFILE'); ?> == 1)
{
	document.preview.submit();
}
//-->
</script>