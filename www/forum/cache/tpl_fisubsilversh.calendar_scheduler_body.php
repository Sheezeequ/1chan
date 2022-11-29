<?php

// eXtreme Styles mod cache. Generated on Sat, 21 Mar 2015 16:22:58 -0400 (time=1426969378)

?><form name="_calendar_scheduler" method="post" action="<?php echo isset($this->vars['ACTION']) ? $this->vars['ACTION'] : $this->lang('ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td align="left" valign="middle" class="nav" width="100%"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><?php echo isset($this->vars['NAV_SEPARATOR']) ? $this->vars['NAV_SEPARATOR'] : $this->lang('NAV_SEPARATOR'); ?><a href="<?php echo isset($this->vars['U_CALENDAR_SCHEDULER']) ? $this->vars['U_CALENDAR_SCHEDULER'] : $this->lang('U_CALENDAR_SCHEDULER'); ?>" class="nav"><?php echo isset($this->vars['L_CALENDAR_SCHEDULER']) ? $this->vars['L_CALENDAR_SCHEDULER'] : $this->lang('L_CALENDAR_SCHEDULER'); ?></a></span></td>
	<td align="right" valign="bottom" nowrap="nowrap"><span class="gensmall"><b><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></b></span></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td colspan="3">
		<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
		<tr>
			<?php

$hour_count = ( isset($this->_tpldata['hour.']) ) ?  sizeof($this->_tpldata['hour.']) : 0;
for ($hour_i = 0; $hour_i < $hour_count; $hour_i++)
{
 $hour_item = &$this->_tpldata['hour.'][$hour_i];
 $hour_item['S_ROW_COUNT'] = $hour_i;
 $hour_item['S_NUM_ROWS'] = $hour_count;

?>
			<td class="<?php echo isset($hour_item['CLASS']) ? $hour_item['CLASS'] : ''; ?>" align="center" valign="middle"><span class="genmed"><a href="<?php echo isset($hour_item['U_HOUR']) ? $hour_item['U_HOUR'] : ''; ?>" class="genmed"><?php echo isset($hour_item['HOUR']) ? $hour_item['HOUR'] : ''; ?></a></span></td>
			<?php

} // END hour

if(isset($hour_item)) { unset($hour_item); } 

?>
		</tr>
		</table>
		<br style="font-size:5;" />
	</td>
</tr>
<tr>
	<td valign="top">
		<table cellpadding="3" cellspacing="1" border="0" class="forumline">
		<tr>
			<?php

$header_cell_count = ( isset($this->_tpldata['header_cell.']) ) ?  sizeof($this->_tpldata['header_cell.']) : 0;
for ($header_cell_i = 0; $header_cell_i < $header_cell_count; $header_cell_i++)
{
 $header_cell_item = &$this->_tpldata['header_cell.'][$header_cell_i];
 $header_cell_item['S_ROW_COUNT'] = $header_cell_i;
 $header_cell_item['S_NUM_ROWS'] = $header_cell_count;

?>
			<th width="14%"><?php echo isset($header_cell_item['L_DAY']) ? $header_cell_item['L_DAY'] : ''; ?></th>
			<?php

} // END header_cell

if(isset($header_cell_item)) { unset($header_cell_item); } 

?>
		</tr>
		<tr>
			<td class="cat" colspan="7" align="center">
				<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="quote"><b>&nbsp;<a href="<?php echo isset($this->vars['U_PREC']) ? $this->vars['U_PREC'] : $this->lang('U_PREC'); ?>" class="gen">&laquo;</a>&nbsp;</b></td>
					<td width="100%" align="center"><?php echo isset($this->vars['S_MONTH']) ? $this->vars['S_MONTH'] : $this->lang('S_MONTH'); ?><?php echo isset($this->vars['S_YEAR']) ? $this->vars['S_YEAR'] : $this->lang('S_YEAR'); ?></td>
					<td class="quote"><b>&nbsp;<a href="<?php echo isset($this->vars['U_NEXT']) ? $this->vars['U_NEXT'] : $this->lang('U_NEXT'); ?>" class="gen">&raquo;</a>&nbsp;</b></td>
				</tr>
				</table>
			</td>
		</tr>
		<?php

$row_count = ( isset($this->_tpldata['row.']) ) ?  sizeof($this->_tpldata['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$this->_tpldata['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
		<tr>
			<?php

$cell_count = ( isset($row_item['cell.']) ) ? sizeof($row_item['cell.']) : 0;
for ($cell_i = 0; $cell_i < $cell_count; $cell_i++)
{
 $cell_item = &$row_item['cell.'][$cell_i];
 $cell_item['S_ROW_COUNT'] = $cell_i;
 $cell_item['S_NUM_ROWS'] = $cell_count;

?>
			<td class="<?php echo isset($cell_item['CLASS']) ? $cell_item['CLASS'] : ''; ?>" align="center" height="25"><span class="gen"><?php echo isset($cell_item['DAY']) ? $cell_item['DAY'] : ''; ?></span></td>
			<?php

} // END cell

if(isset($cell_item)) { unset($cell_item); } 

?>
		</tr>
		<?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
		<tr>
			<td class="cat" colspan="7" align="center"><span class="genmed"><a href="<?php echo isset($this->vars['U_CALENDAR']) ? $this->vars['U_CALENDAR'] : $this->lang('U_CALENDAR'); ?>" alt="<?php echo isset($this->vars['L_CALENDAR']) ? $this->vars['L_CALENDAR'] : $this->lang('L_CALENDAR'); ?>" title="<?php echo isset($this->vars['L_CALENDAR']) ? $this->vars['L_CALENDAR'] : $this->lang('L_CALENDAR'); ?>" class="genmed"><img src="<?php echo isset($this->vars['IMG_CALENDAR']) ? $this->vars['IMG_CALENDAR'] : $this->lang('IMG_CALENDAR'); ?>" border="0" align="absbottom" hspace="5" alt="<?php echo isset($this->vars['L_CALENDAR']) ? $this->vars['L_CALENDAR'] : $this->lang('L_CALENDAR'); ?>" title="<?php echo isset($this->vars['L_CALENDAR']) ? $this->vars['L_CALENDAR'] : $this->lang('L_CALENDAR'); ?>" /><?php echo isset($this->vars['L_CALENDAR']) ? $this->vars['L_CALENDAR'] : $this->lang('L_CALENDAR'); ?></a></span></td>
		</tr>
		</table>
	</td>
	<td><span class="gensmall">&nbsp;</span></td>
	<td valign="top" width="100%">
		<?php echo isset($this->vars['TOPIC_LIST_SCHEDULER']) ? $this->vars['TOPIC_LIST_SCHEDULER'] : $this->lang('TOPIC_LIST_SCHEDULER'); ?>
	</td>
</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td align="right" valign="bottom" nowrap="nowrap"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><span class="gensmall"><b><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></b></span></td>
</tr>
</table>
</form>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr> 
	<td align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
</tr>
</table>