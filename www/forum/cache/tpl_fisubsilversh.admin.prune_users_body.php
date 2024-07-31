<?php

// eXtreme Styles mod cache. Generated on Thu, 25 Jul 2024 10:55:22 +0300 (time=1721894122)

?><script language="JavaScript"><!--
 function SetDays()	{ document.DaysFrm.submit() }
 // --></script>

<h1><?php echo isset($this->vars['L_PRUNE_USERS']) ? $this->vars['L_PRUNE_USERS'] : $this->lang('L_PRUNE_USERS'); ?></h1>

<p><?php echo isset($this->vars['L_PRUNE_USERS_EXPLAIN']) ? $this->vars['L_PRUNE_USERS_EXPLAIN'] : $this->lang('L_PRUNE_USERS_EXPLAIN'); ?></p>
<form name="DaysFrm" action="<?php echo isset($this->vars['S_PRUNE_USERS']) ? $this->vars['S_PRUNE_USERS'] : $this->lang('S_PRUNE_USERS'); ?>" method="post">
<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">

	<tr> 
		<td class="cat" align="center"><b><?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></b></td>
	      <td class="cat" align="center" nowrap><b><?php echo isset($this->vars['L_PRUNE_ACTION']) ? $this->vars['L_PRUNE_ACTION'] : $this->lang('L_PRUNE_ACTION'); ?></b></td> 
		<td class="cat" align="center"><b><?php echo isset($this->vars['L_PRUNE_LIST']) ? $this->vars['L_PRUNE_LIST'] : $this->lang('L_PRUNE_LIST'); ?></b></td>
	</tr>
<?php

$prune_list_count = ( isset($this->_tpldata['prune_list.']) ) ?  sizeof($this->_tpldata['prune_list.']) : 0;
for ($prune_list_i = 0; $prune_list_i < $prune_list_count; $prune_list_i++)
{
 $prune_list_item = &$this->_tpldata['prune_list.'][$prune_list_i];
 $prune_list_item['S_ROW_COUNT'] = $prune_list_i;
 $prune_list_item['S_NUM_ROWS'] = $prune_list_count;

?>
	<tr> 
		<td class="row1" align="left"><?php echo isset($prune_list_item['S_DAYS']) ? $prune_list_item['S_DAYS'] : ''; ?></td>
		<td class="row2" align="left">(<?php echo isset($prune_list_item['USER_COUNT']) ? $prune_list_item['USER_COUNT'] : ''; ?>)<br/><?php echo isset($prune_list_item['U_PRUNE']) ? $prune_list_item['U_PRUNE'] : ''; ?><br/><?php echo isset($prune_list_item['L_PRUNE_EXPLAIN']) ? $prune_list_item['L_PRUNE_EXPLAIN'] : ''; ?></td>	
		<td class="row3" align="left"><?php echo isset($prune_list_item['LIST']) ? $prune_list_item['LIST'] : ''; ?></td>
	</tr>
<?php

} // END prune_list

if(isset($prune_list_item)) { unset($prune_list_item); } 

?>
</table></form>

