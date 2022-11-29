<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:57 +0300 (time=1669727217)

?><HEAD><META http-equiv="refresh" content="120;url=<?php echo isset($this->vars['U_SHOUTBOX_VIEW']) ? $this->vars['U_SHOUTBOX_VIEW'] : $this->lang('U_SHOUTBOX_VIEW'); ?>?auto_refresh=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<link rel="stylesheet" href="<?php echo isset($this->vars['T_URL']) ? $this->vars['T_URL'] : $this->lang('T_URL'); ?>/<?php echo isset($this->vars['T_HEAD_STYLESHEET']) ? $this->vars['T_HEAD_STYLESHEET'] : $this->lang('T_HEAD_STYLESHEET'); ?>" type="text/css">
</HEAD>
<body bgcolor="<?php echo isset($this->vars['T_BODY_BGCOLOR']) ? $this->vars['T_BODY_BGCOLOR'] : $this->lang('T_BODY_BGCOLOR'); ?>" text="<?php echo isset($this->vars['T_BODY_TEXT']) ? $this->vars['T_BODY_TEXT'] : $this->lang('T_BODY_TEXT'); ?>" link="<?php echo isset($this->vars['T_BODY_LINK']) ? $this->vars['T_BODY_LINK'] : $this->lang('T_BODY_LINK'); ?>" vlink="<?php echo isset($this->vars['T_BODY_VLINK']) ? $this->vars['T_BODY_VLINK'] : $this->lang('T_BODY_VLINK'); ?>"> 
<table width="100%" height="100%" cellpadding="0" cellspacing="1" border="0" class="forumline">
<?php

$shoutrow_count = ( isset($this->_tpldata['shoutrow.']) ) ?  sizeof($this->_tpldata['shoutrow.']) : 0;
for ($shoutrow_i = 0; $shoutrow_i < $shoutrow_count; $shoutrow_i++)
{
 $shoutrow_item = &$this->_tpldata['shoutrow.'][$shoutrow_i];
 $shoutrow_item['S_ROW_COUNT'] = $shoutrow_i;
 $shoutrow_item['S_NUM_ROWS'] = $shoutrow_count;

?>
<tr>
	<td class="<?php echo isset($shoutrow_item['ROW_CLASS']) ? $shoutrow_item['ROW_CLASS'] : ''; ?>" width="100%" higth="100%">
<span class="gensmall">
	<?php echo isset($shoutrow_item['TIME']) ? $shoutrow_item['TIME'] : ''; ?><br />
	<b><?php echo isset($shoutrow_item['USERNAME']) ? $shoutrow_item['USERNAME'] : ''; ?>:</b><br />
	<?php echo isset($shoutrow_item['SHOUT']) ? $shoutrow_item['SHOUT'] : ''; ?><br/></span>
	</td>
</tr>
<?php

} // END shoutrow

if(isset($shoutrow_item)) { unset($shoutrow_item); } 

?>
</table>
</body>