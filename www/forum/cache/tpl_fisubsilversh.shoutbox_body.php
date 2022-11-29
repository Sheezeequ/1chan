<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:57 +0300 (time=1669727217)

?><HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<link rel="stylesheet" href="<?php echo isset($this->vars['T_URL']) ? $this->vars['T_URL'] : $this->lang('T_URL'); ?>/<?php echo isset($this->vars['T_HEAD_STYLESHEET']) ? $this->vars['T_HEAD_STYLESHEET'] : $this->lang('T_HEAD_STYLESHEET'); ?>" type="text/css">
</HEAD>

<body bgcolor="<?php echo isset($this->vars['T_TR_COLOR3']) ? $this->vars['T_TR_COLOR3'] : $this->lang('T_TR_COLOR3'); ?>" text="<?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>" link="<?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>" vlink="<?php echo isset($this->vars['T_BODY_VLINK']) ? $this->vars['T_BODY_VLINK'] : $this->lang('T_BODY_VLINK'); ?>"> 
<script language="JavaScript" src="<?php echo isset($this->vars['T_URL']) ? $this->vars['T_URL'] : $this->lang('T_URL'); ?>/bbcode.js" type="text/javascript" ></script>
<form method="post" name="post" action="<?php echo isset($this->vars['U_SHOUTBOX']) ? $this->vars['U_SHOUTBOX'] : $this->lang('U_SHOUTBOX'); ?>" onsubmit="return checkForm(this)">
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<table width="100%" height="26" cellpadding="0" cellspacing="0" border="0" class="row1">
<tr>
			<td class="row1" align="center" valign="middle" width="100%">
				<center><span class="gensmall">
 	<?php

$switch_auth_post_count = ( isset($this->_tpldata['switch_auth_post.']) ) ?  sizeof($this->_tpldata['switch_auth_post.']) : 0;
for ($switch_auth_post_i = 0; $switch_auth_post_i < $switch_auth_post_count; $switch_auth_post_i++)
{
 $switch_auth_post_item = &$this->_tpldata['switch_auth_post.'][$switch_auth_post_i];
 $switch_auth_post_item['S_ROW_COUNT'] = $switch_auth_post_i;
 $switch_auth_post_item['S_NUM_ROWS'] = $switch_auth_post_count;

?>
 	<?php

$switch_bbcode_count = ( isset($switch_auth_post_item['switch_bbcode.']) ) ? sizeof($switch_auth_post_item['switch_bbcode.']) : 0;
for ($switch_bbcode_i = 0; $switch_bbcode_i < $switch_bbcode_count; $switch_bbcode_i++)
{
 $switch_bbcode_item = &$switch_auth_post_item['switch_bbcode.'][$switch_bbcode_i];
 $switch_bbcode_item['S_ROW_COUNT'] = $switch_bbcode_i;
 $switch_bbcode_item['S_NUM_ROWS'] = $switch_bbcode_count;

?>
	  <input type="button" class="button" accesskey="b" name="addbbcode0" value=" <?php echo isset($this->vars['L_B']) ? $this->vars['L_B'] : $this->lang('L_B'); ?> " style="font-weight:bold; width: 20px" onClick="bbstyle(0)" />
	  <input type="button" class="button" accesskey="i" name="addbbcode2" value=" <?php echo isset($this->vars['L_I']) ? $this->vars['L_I'] : $this->lang('L_I'); ?> " style="font-style:italic; width: 20px" onClick="bbstyle(2)" />
	  <input type="button" class="button" accesskey="u" name="addbbcode4" value=" <?php echo isset($this->vars['L_U']) ? $this->vars['L_U'] : $this->lang('L_U'); ?> " style="text-decoration: underline; width: 20px" onClick="bbstyle(4)" />
	  <input type="button" class="button" accesskey="q" name="addbbcode6" value=" <?php echo isset($this->vars['L_QUOTE']) ? $this->vars['L_QUOTE'] : $this->lang('L_QUOTE'); ?> " style="width: 50px" onClick="bbstyle(6)" />&nbsp;&nbsp;
	<span  class="nav"><a href="<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>" onclick="window.open('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav"><?php echo isset($this->vars['L_SMILIES']) ? $this->vars['L_SMILIES'] : $this->lang('L_SMILIES'); ?></a></span>
 	<?php

} // END switch_bbcode

if(isset($switch_bbcode_item)) { unset($switch_bbcode_item); } 

?>
<?php echo isset($this->vars['L_TEXT']) ? $this->vars['L_TEXT'] : $this->lang('L_TEXT'); ?>:
<input type="text" class="liteoption" name="message" value="<?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?>" size="18%" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"/>
&nbsp;&nbsp;
		<input type="submit" class="mainoption" value="<?php echo isset($this->vars['L_SHOUT_SUBMIT']) ? $this->vars['L_SHOUT_SUBMIT'] : $this->lang('L_SHOUT_SUBMIT'); ?>" name="shout" />

	<?php

} // END switch_auth_post

if(isset($switch_auth_post_item)) { unset($switch_auth_post_item); } 

?>
	<?php

$switch_auth_no_post_count = ( isset($this->_tpldata['switch_auth_no_post.']) ) ?  sizeof($this->_tpldata['switch_auth_no_post.']) : 0;
for ($switch_auth_no_post_i = 0; $switch_auth_no_post_i < $switch_auth_no_post_count; $switch_auth_no_post_i++)
{
 $switch_auth_no_post_item = &$this->_tpldata['switch_auth_no_post.'][$switch_auth_no_post_i];
 $switch_auth_no_post_item['S_ROW_COUNT'] = $switch_auth_no_post_i;
 $switch_auth_no_post_item['S_NUM_ROWS'] = $switch_auth_no_post_count;

?>
				<?php echo isset($this->vars['L_SHOUTBOX_LOGIN']) ? $this->vars['L_SHOUTBOX_LOGIN'] : $this->lang('L_SHOUTBOX_LOGIN'); ?>&nbsp;
	<?php

} // END switch_auth_no_post

if(isset($switch_auth_no_post_item)) { unset($switch_auth_no_post_item); } 

?>
				<input type="submit" class="liteoption" value="<?php echo isset($this->vars['L_SHOUT_REFRESH']) ? $this->vars['L_SHOUT_REFRESH'] : $this->lang('L_SHOUT_REFRESH'); ?>" name="refresh" /></center><br/>
				</span>		
				<center>
			</td>

</tr>
</table>
		 <iframe src="<?php echo isset($this->vars['U_SHOUTBOX_VIEW']) ? $this->vars['U_SHOUTBOX_VIEW'] : $this->lang('U_SHOUTBOX_VIEW'); ?>" align="left" width="100%" height="160" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="true">
		</iframe>


</form>
</body>