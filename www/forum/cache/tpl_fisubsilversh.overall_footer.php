<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:47 +0300 (time=1669727207)

?><div align="center" class="gensmall"><br /><?php echo isset($this->vars['ADMIN_LINK']) ? $this->vars['ADMIN_LINK'] : $this->lang('ADMIN_LINK'); ?><br /> 
<!--
We request you retain the full copyright notice below including the link to www.phpbb.com
and www.phpbb2.de. This not only gives respect to the large amount of time given freely by 
the developers but also helps build interest, traffic and use of phpBB 2.0. If you cannot 
(for good reason) retain the full copyright we request you at least leave in place the 
Powered by phpBB <?php echo isset($this->vars['PHPBB_VERSION']) ? $this->vars['PHPBB_VERSION'] : $this->lang('PHPBB_VERSION'); ?> line, with phpBB linked to www.phpbb.com. If you refuse
to include even this then support on our forums may be affected. 

The phpBB Group : 2002

If the link to www.phpbb2.de is removed no support is given in our support forums.

www.phpbb2.de

// -->
<?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?><br />
<?php echo isset($this->vars['TRANSLATION_INFO']) ? $this->vars['TRANSLATION_INFO'] : $this->lang('TRANSLATION_INFO'); ?>
<?php

$cback_cracker_tracker_count = ( isset($this->_tpldata['cback_cracker_tracker.']) ) ?  sizeof($this->_tpldata['cback_cracker_tracker.']) : 0;
for ($cback_cracker_tracker_i = 0; $cback_cracker_tracker_i < $cback_cracker_tracker_count; $cback_cracker_tracker_i++)
{
 $cback_cracker_tracker_item = &$this->_tpldata['cback_cracker_tracker.'][$cback_cracker_tracker_i];
 $cback_cracker_tracker_item['S_ROW_COUNT'] = $cback_cracker_tracker_i;
 $cback_cracker_tracker_item['S_NUM_ROWS'] = $cback_cracker_tracker_count;

?>
<br /><?php echo isset($cback_cracker_tracker_item['CTRACKER_FOOTER']) ? $cback_cracker_tracker_item['CTRACKER_FOOTER'] : ''; ?>
<?php

} // END cback_cracker_tracker

if(isset($cback_cracker_tracker_item)) { unset($cback_cracker_tracker_item); } 

?>
</div>
<a name="bot" id="bot"></a></td></tr></table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr> 
<td align="center" class="topnav">Powered by <a href="http://www.phpbb2.de/" target="_phpbb">phpBB2</a> <a href="http://www.phpbb2plus.de">Plus</a>, <a href="http://www.fachwissen-katalog.de" target="_blank">Artikelverzeichnis</a> and <a href="http://www.webkatalog24.org" target="_blank">Webkatalog</a> based on <a href="http://www.phpbb.com/" target="_phpbb">phpBB</a>  
&copy; 2001/6 phpBB Group :: FI Theme :: <a href="<?php echo isset($this->vars['U_CREDITS']) ? $this->vars['U_CREDITS'] : $this->lang('U_CREDITS'); ?>"><?php echo isset($this->vars['L_CREDITS']) ? $this->vars['L_CREDITS'] : $this->lang('L_CREDITS'); ?></a></td>
</tr>
</table>
<br />
</td>
</tr>
</table>
<?php echo isset($this->vars['RUN_STATS_BOX']) ? $this->vars['RUN_STATS_BOX'] : $this->lang('RUN_STATS_BOX'); ?>
<!-- Start add - Complete banner MOD -->
<?php

$switch_Banners_count = ( isset($this->_tpldata['switch_Banners.']) ) ?  sizeof($this->_tpldata['switch_Banners.']) : 0;
for ($switch_Banners_i = 0; $switch_Banners_i < $switch_Banners_count; $switch_Banners_i++)
{
 $switch_Banners_item = &$this->_tpldata['switch_Banners.'][$switch_Banners_i];
 $switch_Banners_item['S_ROW_COUNT'] = $switch_Banners_i;
 $switch_Banners_item['S_NUM_ROWS'] = $switch_Banners_count;

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="20%">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_7_IMG']) ? $this->vars['BANNER_7_IMG'] : $this->lang('BANNER_7_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_8_IMG']) ? $this->vars['BANNER_8_IMG'] : $this->lang('BANNER_8_IMG'); ?></div></td></tr>
</table>
</td>
<td width="60%">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_9_IMG']) ? $this->vars['BANNER_9_IMG'] : $this->lang('BANNER_9_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_10_IMG']) ? $this->vars['BANNER_10_IMG'] : $this->lang('BANNER_10_IMG'); ?></div></td></tr>
</table>
</td>
<td width="20%">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_11_IMG']) ? $this->vars['BANNER_11_IMG'] : $this->lang('BANNER_11_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_12_IMG']) ? $this->vars['BANNER_12_IMG'] : $this->lang('BANNER_12_IMG'); ?></div></td></tr>
</table>
</td>
</tr>
</table>
<?php

} // END switch_Banners

if(isset($switch_Banners_item)) { unset($switch_Banners_item); } 

?>
<!-- End add - Complete banner MOD -->
</body>
</html>