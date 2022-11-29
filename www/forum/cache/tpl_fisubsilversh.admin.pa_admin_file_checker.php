<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:08 -0500 (time=1323530528)

?><form action="<?php echo isset($this->vars['S_CHECKER_FILE_ACTION']) ? $this->vars['S_CHECKER_FILE_ACTION'] : $this->lang('S_CHECKER_FILE_ACTION'); ?>" method="post">

<h1><?php echo isset($this->vars['L_FILE_CHECKER']) ? $this->vars['L_FILE_CHECKER'] : $this->lang('L_FILE_CHECKER'); ?></h1>

<p><?php echo isset($this->vars['L_FCHECKER_EXPLAIN']) ? $this->vars['L_FCHECKER_EXPLAIN'] : $this->lang('L_FCHECKER_EXPLAIN'); ?></p>

<table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th colspan="2" class="thHead"><?php echo isset($this->vars['L_FILE_CHECKER']) ? $this->vars['L_FILE_CHECKER'] : $this->lang('L_FILE_CHECKER'); ?></th>
  </tr>
  
<?php

$check_count = ( isset($this->_tpldata['check.']) ) ?  sizeof($this->_tpldata['check.']) : 0;
for ($check_i = 0; $check_i < $check_count; $check_i++)
{
 $check_item = &$this->_tpldata['check.'][$check_i];
 $check_item['S_ROW_COUNT'] = $check_i;
 $check_item['S_NUM_ROWS'] = $check_count;

?>
<tr>
    <td class="row1"><span class="cattitle"><?php echo isset($this->vars['L_FILE_CHECKER_SP1']) ? $this->vars['L_FILE_CHECKER_SP1'] : $this->lang('L_FILE_CHECKER_SP1'); ?></span></td>
</tr>

<?php

$check_step1_count = ( isset($check_item['check_step1.']) ) ? sizeof($check_item['check_step1.']) : 0;
for ($check_step1_i = 0; $check_step1_i < $check_step1_count; $check_step1_i++)
{
 $check_step1_item = &$check_item['check_step1.'][$check_step1_i];
 $check_step1_item['S_ROW_COUNT'] = $check_step1_i;
 $check_step1_item['S_NUM_ROWS'] = $check_step1_count;

?>
<tr>
    <td class="row1"><span class="gensmall"><?php echo isset($check_step1_item['DEL_DURL']) ? $check_step1_item['DEL_DURL'] : ''; ?></span></td>
</tr>
<?php

} // END check_step1

if(isset($check_step1_item)) { unset($check_step1_item); } 

?>

<tr>
    <td class="row1"><span class="cattitle"><?php echo isset($this->vars['L_FILE_CHECKER_SP2']) ? $this->vars['L_FILE_CHECKER_SP2'] : $this->lang('L_FILE_CHECKER_SP2'); ?></span></B></td>
</tr>
<?php

$check_step2_count = ( isset($check_item['check_step2.']) ) ? sizeof($check_item['check_step2.']) : 0;
for ($check_step2_i = 0; $check_step2_i < $check_step2_count; $check_step2_i++)
{
 $check_step2_item = &$check_item['check_step2.'][$check_step2_i];
 $check_step2_item['S_ROW_COUNT'] = $check_step2_i;
 $check_step2_item['S_NUM_ROWS'] = $check_step2_count;

?>
<tr>
    <td class="row1"><span class="gensmall"><?php echo isset($check_step2_item['DEL_SSURL']) ? $check_step2_item['DEL_SSURL'] : ''; ?></span></td>
</tr>
<?php

} // END check_step2

if(isset($check_step2_item)) { unset($check_step2_item); } 

?>

<tr>
    <td class="row1"><span class="cattitle"><?php echo isset($this->vars['L_FILE_CHECKER_SP3']) ? $this->vars['L_FILE_CHECKER_SP3'] : $this->lang('L_FILE_CHECKER_SP3'); ?></span></B></td>
</tr>
<?php

$check_step3_count = ( isset($check_item['check_step3.']) ) ? sizeof($check_item['check_step3.']) : 0;
for ($check_step3_i = 0; $check_step3_i < $check_step3_count; $check_step3_i++)
{
 $check_step3_item = &$check_item['check_step3.'][$check_step3_i];
 $check_step3_item['S_ROW_COUNT'] = $check_step3_i;
 $check_step3_item['S_NUM_ROWS'] = $check_step3_count;

?>
<tr>
    <td class="row1"><span class="gensmall"><?php echo isset($check_step3_item['DEL_FILE']) ? $check_step3_item['DEL_FILE'] : ''; ?></span></td>
</tr>
<?php

} // END check_step3

if(isset($check_step3_item)) { unset($check_step3_item); } 

?>
<tr>
    <td class="row1"><span class="cattitle"><?php echo isset($this->vars['L_FILE_CHECKER_SAVED']) ? $this->vars['L_FILE_CHECKER_SAVED'] : $this->lang('L_FILE_CHECKER_SAVED'); ?>:</span> <span class="gensmall"><?php echo isset($this->vars['SAVED']) ? $this->vars['SAVED'] : $this->lang('SAVED'); ?>.</span></TD>
</TR>
<tr>
	<td class="cat">&nbsp;</td>
</tr>
<?php

} // END check

if(isset($check_item)) { unset($check_item); } 

?>

<?php

$perform_count = ( isset($this->_tpldata['perform.']) ) ?  sizeof($this->_tpldata['perform.']) : 0;
for ($perform_i = 0; $perform_i < $perform_count; $perform_i++)
{
 $perform_item = &$this->_tpldata['perform.'][$perform_i];
 $perform_item['S_ROW_COUNT'] = $perform_i;
 $perform_item['S_NUM_ROWS'] = $perform_count;

?>
  <tr>
	<td class="row1"><?php echo isset($this->vars['L_FILE_SAFTEY']) ? $this->vars['L_FILE_SAFTEY'] : $this->lang('L_FILE_SAFTEY'); ?></td>
  </tr>
  <tr>
	<td align="center" class="cat">
		<input class="mainoption" type="submit" value="<?php echo isset($this->vars['L_FILE_PERFORM']) ? $this->vars['L_FILE_PERFORM'] : $this->lang('L_FILE_PERFORM'); ?>" name="B1">
        <input type="hidden" name="safety" value="1">
	</td>
  </tr>
<?php

} // END perform

if(isset($perform_item)) { unset($perform_item); } 

?>
</table>
</form>
