<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Dec 2011 11:33:58 -0500 (time=1324226038)

?><script language="javascript" type="text/javascript">
<!--
function jump_to_inbox()
{
	opener.document.location.href = "<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>";
	window.close();
}
//-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td class="bodyline">
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
<tr>
<td class="row1" align="center"><br />
<span class="genmed"><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?><br />
<br />
<a href="javascript:window.close();"><?php echo isset($this->vars['L_CLOSE_WINDOW']) ? $this->vars['L_CLOSE_WINDOW'] : $this->lang('L_CLOSE_WINDOW'); ?></a></span><br />
<br />
</td>
</tr>
</table>
</td>
</tr>
</table>
