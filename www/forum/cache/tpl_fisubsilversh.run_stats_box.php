<?php

// eXtreme Styles mod cache. Generated on Thu, 25 Jul 2024 10:46:54 +0300 (time=1721893614)

?><br class="nav" />
<table cellpadding="2" cellspacing="1" border="0" width="100%" class="bodyline">
<tr>
	<td colspan="2" align="center"><span class="gensmall">
	<?php echo isset($this->vars['L_STAT_PAGE_DUR']) ? $this->vars['L_STAT_PAGE_DUR'] : $this->lang('L_STAT_PAGE_DUR'); ?><?php echo isset($this->vars['L_STAT_QUERIES']) ? $this->vars['L_STAT_QUERIES'] : $this->lang('L_STAT_QUERIES'); ?><?php echo isset($this->vars['L_STAT_SETUP']) ? $this->vars['L_STAT_SETUP'] : $this->lang('L_STAT_SETUP'); ?>
	</span></td>
</tr>
<?php

$stat_run_count = ( isset($this->_tpldata['stat_run.']) ) ?  sizeof($this->_tpldata['stat_run.']) : 0;
for ($stat_run_i = 0; $stat_run_i < $stat_run_count; $stat_run_i++)
{
 $stat_run_item = &$this->_tpldata['stat_run.'][$stat_run_i];
 $stat_run_item['S_ROW_COUNT'] = $stat_run_i;
 $stat_run_item['S_NUM_ROWS'] = $stat_run_count;

?>
<tr>
	<?php

$light_count = ( isset($stat_run_item['light.']) ) ? sizeof($stat_run_item['light.']) : 0;
for ($light_i = 0; $light_i < $light_count; $light_i++)
{
 $light_item = &$stat_run_item['light.'][$light_i];
 $light_item['S_ROW_COUNT'] = $light_i;
 $light_item['S_NUM_ROWS'] = $light_count;

?>
	<td class="row1">
	<?php

} // END light

if(isset($light_item)) { unset($light_item); } 

?>
	<?php

$light_ELSE_count = ( isset($stat_run_item['light_ELSE.']) ) ? sizeof($stat_run_item['light_ELSE.']) : 0;
for ($light_ELSE_i = 0; $light_ELSE_i < $light_ELSE_count; $light_ELSE_i++)
{
 $light_ELSE_item = &$stat_run_item['light_ELSE.'][$light_ELSE_i];
 $light_ELSE_item['S_ROW_COUNT'] = $light_ELSE_i;
 $light_ELSE_item['S_NUM_ROWS'] = $light_ELSE_count;

?>
	<td class="row2">
	<?php

} // END light_ELSE

if(isset($light_ELSE_item)) { unset($light_ELSE_item); } 

?>
	<span class="gensmall">
		<b><?php echo isset($stat_run_item['STAT_FILE']) ? $stat_run_item['STAT_FILE'] : ''; ?></b><br />
		<?php echo isset($stat_run_item['STAT_LINE']) ? $stat_run_item['STAT_LINE'] : ''; ?><br />
		<?php echo isset($stat_run_item['STAT_TIME']) ? $stat_run_item['STAT_TIME'] : ''; ?><br />
	</span></td>
	<?php

$light_count = ( isset($stat_run_item['light.']) ) ? sizeof($stat_run_item['light.']) : 0;
for ($light_i = 0; $light_i < $light_count; $light_i++)
{
 $light_item = &$stat_run_item['light.'][$light_i];
 $light_item['S_ROW_COUNT'] = $light_i;
 $light_item['S_NUM_ROWS'] = $light_count;

?>
	<td class="row1">
	<?php

} // END light

if(isset($light_item)) { unset($light_item); } 

?>
	<?php

$light_ELSE_count = ( isset($stat_run_item['light_ELSE.']) ) ? sizeof($stat_run_item['light_ELSE.']) : 0;
for ($light_ELSE_i = 0; $light_ELSE_i < $light_ELSE_count; $light_ELSE_i++)
{
 $light_ELSE_item = &$stat_run_item['light_ELSE.'][$light_ELSE_i];
 $light_ELSE_item['S_ROW_COUNT'] = $light_ELSE_i;
 $light_ELSE_item['S_NUM_ROWS'] = $light_ELSE_count;

?>
	<td class="row2">
	<?php

} // END light_ELSE

if(isset($light_ELSE_item)) { unset($light_ELSE_item); } 

?>
		<table cellpadding="2" cellspacing="1" width="100%" class="bodyline">
		<tr><td class="row3"><span class="gensmall"><?php echo isset($this->vars['L_STAT_REQUEST']) ? $this->vars['L_STAT_REQUEST'] : $this->lang('L_STAT_REQUEST'); ?>
		</span></td></tr><tr><td class="row1"><span class="gensmall">&nbsp;<?php echo isset($stat_run_item['STAT_REQUEST']) ? $stat_run_item['STAT_REQUEST'] : ''; ?>&nbsp;
		</span></td></tr>
		</table>
		<?php

$explain_count = ( isset($stat_run_item['explain.']) ) ? sizeof($stat_run_item['explain.']) : 0;
for ($explain_i = 0; $explain_i < $explain_count; $explain_i++)
{
 $explain_item = &$stat_run_item['explain.'][$explain_i];
 $explain_item['S_ROW_COUNT'] = $explain_i;
 $explain_item['S_NUM_ROWS'] = $explain_count;

?>
		<table cellpadding="2" cellspacing="1" width="100%" class="bodyline">
		<tr>
			<?php

$cell_count = ( isset($explain_item['cell.']) ) ? sizeof($explain_item['cell.']) : 0;
for ($cell_i = 0; $cell_i < $cell_count; $cell_i++)
{
 $cell_item = &$explain_item['cell.'][$cell_i];
 $cell_item['S_ROW_COUNT'] = $cell_i;
 $cell_item['S_NUM_ROWS'] = $cell_count;

?>
			<td align="center" class="row3"><span class="gensmall">&nbsp;
				<?php echo isset($cell_item['STAT_LEGEND']) ? $cell_item['STAT_LEGEND'] : ''; ?>&nbsp;
			</span></td>
			<?php

} // END cell

if(isset($cell_item)) { unset($cell_item); } 

?>
		</tr>
		<?php

$table_count = ( isset($explain_item['table.']) ) ? sizeof($explain_item['table.']) : 0;
for ($table_i = 0; $table_i < $table_count; $table_i++)
{
 $table_item = &$explain_item['table.'][$table_i];
 $table_item['S_ROW_COUNT'] = $table_i;
 $table_item['S_NUM_ROWS'] = $table_count;

?>
		<tr>
			<?php

$cell_count = ( isset($table_item['cell.']) ) ? sizeof($table_item['cell.']) : 0;
for ($cell_i = 0; $cell_i < $cell_count; $cell_i++)
{
 $cell_item = &$table_item['cell.'][$cell_i];
 $cell_item['S_ROW_COUNT'] = $cell_i;
 $cell_item['S_NUM_ROWS'] = $cell_count;

?>
			<?php

$light_count = ( isset($cell_item['light.']) ) ? sizeof($cell_item['light.']) : 0;
for ($light_i = 0; $light_i < $light_count; $light_i++)
{
 $light_item = &$cell_item['light.'][$light_i];
 $light_item['S_ROW_COUNT'] = $light_i;
 $light_item['S_NUM_ROWS'] = $light_count;

?>
			<td class="row1">
			<?php

} // END light

if(isset($light_item)) { unset($light_item); } 

?>
			<?php

$light_ELSE_count = ( isset($cell_item['light_ELSE.']) ) ? sizeof($cell_item['light_ELSE.']) : 0;
for ($light_ELSE_i = 0; $light_ELSE_i < $light_ELSE_count; $light_ELSE_i++)
{
 $light_ELSE_item = &$cell_item['light_ELSE.'][$light_ELSE_i];
 $light_ELSE_item['S_ROW_COUNT'] = $light_ELSE_i;
 $light_ELSE_item['S_NUM_ROWS'] = $light_ELSE_count;

?>
			<td class="row2">
			<?php

} // END light_ELSE

if(isset($light_ELSE_item)) { unset($light_ELSE_item); } 

?>
			<span class="gensmall">&nbsp;
				<?php echo isset($cell_item['STAT_VALUE']) ? $cell_item['STAT_VALUE'] : ''; ?>&nbsp;
			</span></td>
			<?php

} // END cell

if(isset($cell_item)) { unset($cell_item); } 

?>
		</tr>
		<?php

} // END table

if(isset($table_item)) { unset($table_item); } 

?>
		</table>
		<?php

} // END explain

if(isset($explain_item)) { unset($explain_item); } 

?>
	</td>
</tr>
<?php

} // END stat_run

if(isset($stat_run_item)) { unset($stat_run_item); } 

?>
</table>
