<?php

// eXtreme Styles mod cache. Generated on Thu, 25 Jul 2024 10:53:51 +0300 (time=1721894031)

?><table cellspacing="0" cellpadding="0" style="margin-top:-10px;margin-left:-10px;" border="0" width="100%" background="../ctracker/images/acp_head_bg.jpg">
<tr>
  <td align="left" style="vertical-align:top;background:url(../ctracker/images/acp_head_bg.jpg);">
    <img src="../ctracker/images/acp_head.jpg">
  </td>
</tr>
</table>

<h1><?php echo isset($this->vars['L_CT_CONFIG']) ? $this->vars['L_CT_CONFIG'] : $this->lang('L_CT_CONFIG'); ?></h1>

<p><?php echo isset($this->vars['L_CT_CONFIG_D']) ? $this->vars['L_CT_CONFIG_D'] : $this->lang('L_CT_CONFIG_D'); ?></p>

<br><form method="post" action="<?php echo isset($this->vars['S_FORM_ACTION']) ? $this->vars['S_FORM_ACTION'] : $this->lang('S_FORM_ACTION'); ?>">

<table width="99%" cellpadding="6" cellspacing="2" border="0" class="forumline">
  <tr>
    <th colspan="2"><?php echo isset($this->vars['L_TABLE_1']) ? $this->vars['L_TABLE_1'] : $this->lang('L_TABLE_1'); ?></th>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P1']) ? $this->vars['L_CONFIGP_P1'] : $this->lang('L_CONFIGP_P1'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D1']) ? $this->vars['L_CONFIGP_D1'] : $this->lang('L_CONFIGP_D1'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="floodlog"><?php echo isset($this->vars['S_SEL_NUMB1']) ? $this->vars['S_SEL_NUMB1'] : $this->lang('S_SEL_NUMB1'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P2']) ? $this->vars['L_CONFIGP_P2'] : $this->lang('L_CONFIGP_P2'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D2']) ? $this->vars['L_CONFIGP_D2'] : $this->lang('L_CONFIGP_D2'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="proxylog"><?php echo isset($this->vars['S_SEL_NUMB2']) ? $this->vars['S_SEL_NUMB2'] : $this->lang('S_SEL_NUMB2'); ?></select></td>
  </tr>
</table>

<br>

<table width="99%" cellpadding="6" cellspacing="2" border="0" class="forumline">
  <tr>
    <th colspan="2"><?php echo isset($this->vars['L_TABLE_2']) ? $this->vars['L_TABLE_2'] : $this->lang('L_TABLE_2'); ?></th>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P3']) ? $this->vars['L_CONFIGP_P3'] : $this->lang('L_CONFIGP_P3'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D3']) ? $this->vars['L_CONFIGP_D3'] : $this->lang('L_CONFIGP_D3'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="filter"><?php echo isset($this->vars['S_SEL_ONOFF1']) ? $this->vars['S_SEL_ONOFF1'] : $this->lang('S_SEL_ONOFF1'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P4']) ? $this->vars['L_CONFIGP_P4'] : $this->lang('L_CONFIGP_P4'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D4']) ? $this->vars['L_CONFIGP_D4'] : $this->lang('L_CONFIGP_D4'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="floodprot"><?php echo isset($this->vars['S_SEL_ONOFF2']) ? $this->vars['S_SEL_ONOFF2'] : $this->lang('S_SEL_ONOFF2'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P5']) ? $this->vars['L_CONFIGP_P5'] : $this->lang('L_CONFIGP_P5'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D5']) ? $this->vars['L_CONFIGP_D5'] : $this->lang('L_CONFIGP_D5'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="regblock"><?php echo isset($this->vars['S_SEL_ONOFF3']) ? $this->vars['S_SEL_ONOFF3'] : $this->lang('S_SEL_ONOFF3'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P6']) ? $this->vars['L_CONFIGP_P6'] : $this->lang('L_CONFIGP_P6'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D6']) ? $this->vars['L_CONFIGP_D6'] : $this->lang('L_CONFIGP_D6'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="autoban"><?php echo isset($this->vars['S_SEL_ONOFF4']) ? $this->vars['S_SEL_ONOFF4'] : $this->lang('S_SEL_ONOFF4'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P14']) ? $this->vars['L_CONFIGP_P14'] : $this->lang('L_CONFIGP_P14'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D14']) ? $this->vars['L_CONFIGP_D14'] : $this->lang('L_CONFIGP_D14'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="mailfeature"><?php echo isset($this->vars['S_SEL_ONOFF5']) ? $this->vars['S_SEL_ONOFF5'] : $this->lang('S_SEL_ONOFF5'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P15']) ? $this->vars['L_CONFIGP_P15'] : $this->lang('L_CONFIGP_P15'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D15']) ? $this->vars['L_CONFIGP_D15'] : $this->lang('L_CONFIGP_D15'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="pwreset"><?php echo isset($this->vars['S_SEL_ONOFF6']) ? $this->vars['S_SEL_ONOFF6'] : $this->lang('S_SEL_ONOFF6'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P16']) ? $this->vars['L_CONFIGP_P16'] : $this->lang('L_CONFIGP_P16'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D16']) ? $this->vars['L_CONFIGP_D16'] : $this->lang('L_CONFIGP_D16'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="loginfeature"><?php echo isset($this->vars['S_SEL_ONOFF7']) ? $this->vars['S_SEL_ONOFF7'] : $this->lang('S_SEL_ONOFF7'); ?></select></td>
  </tr>
</table>

<br>

<table width="99%" cellpadding="6" cellspacing="2" border="0" class="forumline">
  <tr>
    <th colspan="2"><?php echo isset($this->vars['L_TABLE_3']) ? $this->vars['L_TABLE_3'] : $this->lang('L_TABLE_3'); ?></th>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P9']) ? $this->vars['L_CONFIGP_P9'] : $this->lang('L_CONFIGP_P9'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D9']) ? $this->vars['L_CONFIGP_D9'] : $this->lang('L_CONFIGP_D9'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="maxsearch"><?php echo isset($this->vars['S_SEL_COUNT1']) ? $this->vars['S_SEL_COUNT1'] : $this->lang('S_SEL_COUNT1'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P10']) ? $this->vars['L_CONFIGP_P10'] : $this->lang('L_CONFIGP_P10'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D10']) ? $this->vars['L_CONFIGP_D10'] : $this->lang('L_CONFIGP_D10'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="searchtime"><?php echo isset($this->vars['S_SEL_TIME_HIGH1']) ? $this->vars['S_SEL_TIME_HIGH1'] : $this->lang('S_SEL_TIME_HIGH1'); ?></select></td>
  </tr>
</table>

<br>

<table width="99%" cellpadding="6" cellspacing="2" border="0" class="forumline">
  <tr>
    <th colspan="2"><?php echo isset($this->vars['L_TABLE_4']) ? $this->vars['L_TABLE_4'] : $this->lang('L_TABLE_4'); ?></th>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P11']) ? $this->vars['L_CONFIGP_P11'] : $this->lang('L_CONFIGP_P11'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D11']) ? $this->vars['L_CONFIGP_D11'] : $this->lang('L_CONFIGP_D11'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="regtime"><?php echo isset($this->vars['S_SEL_TIME_HIGH2']) ? $this->vars['S_SEL_TIME_HIGH2'] : $this->lang('S_SEL_TIME_HIGH2'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P12']) ? $this->vars['L_CONFIGP_P12'] : $this->lang('L_CONFIGP_P12'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D12']) ? $this->vars['L_CONFIGP_D12'] : $this->lang('L_CONFIGP_D12'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="posttimespan"><?php echo isset($this->vars['S_SEL_TIME_LOW']) ? $this->vars['S_SEL_TIME_LOW'] : $this->lang('S_SEL_TIME_LOW'); ?></select></td>
  </tr>
  <tr>
    <td align="left" width="75%" class="row2"><b><?php echo isset($this->vars['L_CONFIGP_P13']) ? $this->vars['L_CONFIGP_P13'] : $this->lang('L_CONFIGP_P13'); ?></b><br><span class="gensmall"><?php echo isset($this->vars['L_CONFIGP_D13']) ? $this->vars['L_CONFIGP_D13'] : $this->lang('L_CONFIGP_D13'); ?></span></td>
    <td align="center" width="25%" valign="top" class="row3"><select name="postintime"><?php echo isset($this->vars['S_SEL_COUNT2']) ? $this->vars['S_SEL_COUNT2'] : $this->lang('S_SEL_COUNT2'); ?></select></td>
  </tr>
</table>

<br>
<center><input type="Submit" name="submit" class="mainoption" value="<?php echo isset($this->vars['L_BUT_SUBMIT']) ? $this->vars['L_BUT_SUBMIT'] : $this->lang('L_BUT_SUBMIT'); ?>"></center>

</form>

<center>
<br>
<span class="copyright"><?php echo isset($this->vars['L_SYS_FOOTER']) ? $this->vars['L_SYS_FOOTER'] : $this->lang('L_SYS_FOOTER'); ?></span>
</center>
