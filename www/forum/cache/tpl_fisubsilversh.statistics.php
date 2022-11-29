<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 14:22:59 -0400 (time=1436206979)

?>
<?php

$main_bottom_count = ( isset($this->_tpldata['main_bottom.']) ) ?  sizeof($this->_tpldata['main_bottom.']) : 0;
for ($main_bottom_i = 0; $main_bottom_i < $main_bottom_count; $main_bottom_i++)
{
 $main_bottom_item = &$this->_tpldata['main_bottom.'][$main_bottom_i];
 $main_bottom_item['S_ROW_COUNT'] = $main_bottom_i;
 $main_bottom_item['S_NUM_ROWS'] = $main_bottom_count;

?>
<center><span class="copyright"><?php echo isset($this->vars['VERSION_INFO']) ? $this->vars['VERSION_INFO'] : $this->lang('VERSION_INFO'); ?><br>
<?php echo isset($this->vars['INSTALL_INFO']) ? $this->vars['INSTALL_INFO'] : $this->lang('INSTALL_INFO'); ?><br>
<?php echo isset($this->vars['VIEWED_INFO']) ? $this->vars['VIEWED_INFO'] : $this->lang('VIEWED_INFO'); ?></span></center>
<?php

} // END main_bottom

if(isset($main_bottom_item)) { unset($main_bottom_item); } 

?>
