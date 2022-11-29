<?php

// eXtreme Styles mod cache. Generated on Sat, 27 Sep 2014 11:47:42 -0400 (time=1411832862)

?>  <br />
  <table width="100%" cellspacing="2" cellpadding="2" border="0" class="forumline">
  	<tr>
  	  <td align="center"><span class="cattitle" align="center"><b><?php echo isset($this->vars['L_VIEW_TITLE']) ? $this->vars['L_VIEW_TITLE'] : $this->lang('L_VIEW_TITLE'); ?></b></span></td>
  	</tr>
  </table>

  <br />

<?php

$updated_count = ( isset($this->_tpldata['updated.']) ) ?  sizeof($this->_tpldata['updated.']) : 0;
for ($updated_i = 0; $updated_i < $updated_count; $updated_i++)
{
 $updated_item = &$this->_tpldata['updated.'][$updated_i];
 $updated_item['S_ROW_COUNT'] = $updated_i;
 $updated_item['S_NUM_ROWS'] = $updated_count;

?>
  <table width="100%" cellpadding="3" cellspacing="0" border="0" class="forumline">
	<tr>
	  <td width="100%" class="genmed" align="center"><?php echo isset($updated_item['L_ABSENCE_DELETED']) ? $updated_item['L_ABSENCE_DELETED'] : ''; ?></td>
	</tr>
  </table>
<?php

} // END updated

if(isset($updated_item)) { unset($updated_item); } 

?>
<form action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" name="notify" method="get">
<?php

$notify_count = ( isset($this->_tpldata['notify.']) ) ?  sizeof($this->_tpldata['notify.']) : 0;
for ($notify_i = 0; $notify_i < $notify_count; $notify_i++)
{
 $notify_item = &$this->_tpldata['notify.'][$notify_i];
 $notify_item['S_ROW_COUNT'] = $notify_i;
 $notify_item['S_NUM_ROWS'] = $notify_count;

?>
  <table width="100%" cellpadding="3" cellspacing="0" border="0" class="forumline">
	<tr>
	  <td width="100%" class="genmed" align="center"><?php echo isset($notify_item['L_ABSENCE_NOTIFY']) ? $notify_item['L_ABSENCE_NOTIFY'] : ''; ?></td>
	</tr>
	<tr>
	  <td width="100%" class="genmed" align="center">
	  <input type="submit" name="submit" value="<?php echo isset($notify_item['L_YES']) ? $notify_item['L_YES'] : ''; ?>" class="mainoption">
	  </td>
	</tr>
  </table>
<?php

} // END notify

if(isset($notify_item)) { unset($notify_item); } 

?>
</form>

  <table width="100%" cellspacing="2" cellpadding="2" border="0">
  	<tr>
  	  <td align="center"><span class="genmed" align="center"><a href="javascript:window.close();" class="genmed"><br /><?php echo isset($this->vars['L_CLOSE']) ? $this->vars['L_CLOSE'] : $this->lang('L_CLOSE'); ?></a></span></td>
  	</tr>
  </table>
