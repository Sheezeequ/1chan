<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 12:25:38 -0400 (time=1436199938)

?><script language="JavaScript"  type="text/javascript" type="text/javascript">
<!--
function ResetCheck()
{
pruef=window.confirm("<?php echo isset($this->vars['kontakt_js1']) ? $this->vars['kontakt_js1'] : $this->lang('kontakt_js1'); ?>");
return pruef;
}

function chkFormular()
{
 if(document.Formular.name.value == "")
  {
   alert("<?php echo isset($this->vars['kontakt_js2']) ? $this->vars['kontakt_js2'] : $this->lang('kontakt_js2'); ?>");
   document.Formular.name.focus();
   return false;
  }
 if(document.Formular.mail.value == "")
  {
   alert("<?php echo isset($this->vars['kontakt_js3']) ? $this->vars['kontakt_js3'] : $this->lang('kontakt_js3'); ?>");
   document.Formular.mail.focus();
   return false;
  }
      if(document.Formular.mail.value.indexOf('@') == -1)
  {
   alert("<?php echo isset($this->vars['kontakt_js4']) ? $this->vars['kontakt_js4'] : $this->lang('kontakt_js4'); ?>");
   document.Formular.mail.focus();
   return false;
  }
if(document.Formular.betreff.value == "")
  {
   alert("<?php echo isset($this->vars['kontakt_js5']) ? $this->vars['kontakt_js5'] : $this->lang('kontakt_js5'); ?>");
   document.Formular.betreff.focus();
   return false;
  }
if(document.Formular.textfeld.value == "")
  {
   alert("<?php echo isset($this->vars['kontakt_js6']) ? $this->vars['kontakt_js6'] : $this->lang('kontakt_js6'); ?>");
   document.Formular.textfeld.focus();
   return false;
  }

}
       //-->
</script>

<body>
<table width="100%" border="0" cellpadding="3" cellspacing="1" style="border-collapse: collapse" class="forumline">
<tr>
<th class="thHead" colspan="2"><center><?php echo isset($this->vars['L_CONTACT']) ? $this->vars['L_CONTACT'] : $this->lang('L_CONTACT'); ?></center></th>
</tr>

<tr><td colspan="2" class="row2"><span class="postbody"><?php echo isset($this->vars['kontakt1']) ? $this->vars['kontakt1'] : $this->lang('kontakt1'); ?></td></tr>
<form name="Formular" action="kontakt_post.php" method="POST" onSubmit="return chkFormular()" OnReset="return ResetCheck()" enctype="multipart/form-data">
<tr>
<td width="38%" class="row1"><font size="3"><span class="postbody"><?php echo isset($this->vars['kontakt2']) ? $this->vars['kontakt2'] : $this->lang('kontakt2'); ?></font></td>
<td align="left" class="row2"><input class="input" name="name" type="text" size="40" maxlength="50"></td>
</tr>
<tr>
<td class="row1"><font size="3"><span class="postbody"><?php echo isset($this->vars['kontakt3']) ? $this->vars['kontakt3'] : $this->lang('kontakt3'); ?></font></td>
<td align="left" class="row2"><input class="input" name="mail" type="text" size="40" maxlength="50"></td>
</tr>
<tr>
<td class="row1"><font size="3"><span class="postbody"><?php echo isset($this->vars['kontakt4']) ? $this->vars['kontakt4'] : $this->lang('kontakt4'); ?></font></td>
<td align="left" class="row2"><input class="input" name="betreff" type="text" size="40" maxlength="50"></td>
</tr>
<tr><td valign="top" class="row1"><font size="3"><span class="postbody"><?php echo isset($this->vars['kontakt5']) ? $this->vars['kontakt5'] : $this->lang('kontakt5'); ?></font></td>

<td align="left" class="row2"><textarea class="input" name="textfeld" cols="39" rows="15" type="text"></textarea></td></tr>
<tr><td class="row1"></td>
<td class="row2"><input type="submit" value="<?php echo isset($this->vars['kontakt6']) ? $this->vars['kontakt6'] : $this->lang('kontakt6'); ?>" onClick="this.document.Formular.Name.focus()">   <input type="reset" value="<?php echo isset($this->vars['kontakt7']) ? $this->vars['kontakt7'] : $this->lang('kontakt7'); ?>"></td>
</tr>
</form>
</span>
</table>
