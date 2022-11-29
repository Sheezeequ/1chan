<?php

// eXtreme Styles mod cache. Generated on Wed, 19 Jun 2013 05:32:15 -0400 (time=1371634335)

?><script language="JavaScript" type="text/javascript">
<!--
window.onunload = doUnload;

// set gDoConfirmSubit to false, if you don't want to confirm submit
// setting it to false, will always submit even with no changes
var gDoConfirmSubmit = false;
var gFormHasChanged = false;

// small dummy function to ensure that when unloading that we set tab to null
function doUnload()
{	
	checkForm(null,null);
}

// unset the global change 'check' variable
function unsetChange()
{
	gFormHasChanged = false;
}

// set the global change 'check' variable
function setChange()
{
	gFormHasChanged = true;
}

// this function gets called when user clicks 'submit' NOT when changing tabs
function confirmSubmit()
{
	var lResult = false;
	if (gDoConfirmSubmit)
	{
		if (gFormHasChanged)
		{
			if (confirm('<?php echo isset($this->vars['L_ASK_SAVE_CHANGES']) ? $this->vars['L_ASK_SAVE_CHANGES'] : $this->lang('L_ASK_SAVE_CHANGES'); ?>'))
			{
				lResult = true;			
				document.config.save_config.value='true';
			}
		}
		else
		{
			alert('<?php echo isset($this->vars['L_NOTHING_TO_SAVE']) ? $this->vars['L_NOTHING_TO_SAVE'] : $this->lang('L_NOTHING_TO_SAVE'); ?>')
		}
	}
	else
	{
		lResult = true;	
		document.config.save_config.value='true';	
	}
	
	unsetChange();	
	return lResult;
}

// this function gets called when user clicks 'submit' AND when changing tabs
function checkForm(tab,subtab)
{
	if (tab != null || subtab != null)
	{
		if (gFormHasChanged)
		{
			if (confirm('<?php echo isset($this->vars['L_SETTINGS_CHANGED_ASK_SAVE']) ? $this->vars['L_SETTINGS_CHANGED_ASK_SAVE'] : $this->lang('L_SETTINGS_CHANGED_ASK_SAVE'); ?>'))
			{
				document.config.save_config.value='true';
			}
		}
		
		unsetChange();
		
		// when using the document.config.submit() call, the submit button wasn't submitted in EI (bug in EI ?), so here is a workaround :
		// when hitting submit, the 'tab' var will always be null, and thus we are sumitting and thus we can do an 'old' submit method
		// meaning we don't use javascript to submit the form....

		document.config.tab.value = (tab != null) ? tab : document.config.tab.value;
		document.config.subtab.value = (subtab != null) ? subtab : document.config.subtab.value;
		document.config.submit();
	}
}

// -->
</script>
<script language="JavaScript" type="text/javascript">unsetChange();</script>
<h1><?php echo isset($this->vars['L_ALBUM_CONFIG']) ? $this->vars['L_ALBUM_CONFIG'] : $this->lang('L_ALBUM_CONFIG'); ?></h1>
<p><?php echo isset($this->vars['L_ALBUM_CONFIG_EXPLAIN']) ? $this->vars['L_ALBUM_CONFIG_EXPLAIN'] : $this->lang('L_ALBUM_CONFIG_EXPLAIN'); ?></p>
<p><?php echo isset($this->vars['L_ALBUM_CONFIG_NOTICE']) ? $this->vars['L_ALBUM_CONFIG_NOTICE'] : $this->lang('L_ALBUM_CONFIG_NOTICE'); ?></p>
<p><i><?php echo isset($this->vars['L_ALBUM_CONFIG_EXPLAIN_DETAIL']) ? $this->vars['L_ALBUM_CONFIG_EXPLAIN_DETAIL'] : $this->lang('L_ALBUM_CONFIG_EXPLAIN_DETAIL'); ?></i></p>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="tab_border">
<tr>
	<?php

$header_row_count = ( isset($this->_tpldata['header_row.']) ) ?  sizeof($this->_tpldata['header_row.']) : 0;
for ($header_row_i = 0; $header_row_i < $header_row_count; $header_row_i++)
{
 $header_row_item = &$this->_tpldata['header_row.'][$header_row_i];
 $header_row_item['S_ROW_COUNT'] = $header_row_i;
 $header_row_item['S_NUM_ROWS'] = $header_row_count;

?>
	<th class="tab_headers" nowrap="1"><a href="#" onClick="checkForm('<?php echo isset($header_row_item['TAB_SELECT_NAME']) ? $header_row_item['TAB_SELECT_NAME'] : ''; ?>');" class="tab_links"><?php echo isset($header_row_item['L_TAB_TITLE']) ? $header_row_item['L_TAB_TITLE'] : ''; ?></a></th>
	<?php

} // END header_row

if(isset($header_row_item)) { unset($header_row_item); } 

?>	
	<th class="filler" width="100%">&nbsp;</th>
</tr>
<tr>
	<td colspan="<?php echo isset($this->vars['HEADER_COL_SPAN']) ? $this->vars['HEADER_COL_SPAN'] : $this->lang('HEADER_COL_SPAN'); ?>">
		<form name="config" action="<?php echo isset($this->vars['S_ALBUM_CONFIG_ACTION']) ? $this->vars['S_ALBUM_CONFIG_ACTION'] : $this->lang('S_ALBUM_CONFIG_ACTION'); ?>" method="post" onSubmit="return confirmSubmit();">
		<input type="hidden" name="tab" value="<?php echo isset($this->vars['H_SELECTED_TAB']) ? $this->vars['H_SELECTED_TAB'] : $this->lang('H_SELECTED_TAB'); ?>" />
		<input type="hidden" name="subtab" value="<?php echo isset($this->vars['V_SELECTED_TAB']) ? $this->vars['V_SELECTED_TAB'] : $this->lang('V_SELECTED_TAB'); ?>" />
		<input type="hidden" name="config_table" value="<?php echo isset($this->vars['CONFIG_TABLE']) ? $this->vars['CONFIG_TABLE'] : $this->lang('CONFIG_TABLE'); ?>" />
		<input type="hidden" name="save_config" value="false" />
		<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
			<tr>
				<th class="thHead" colspan="2"><?php echo isset($this->vars['L_CONFIG_TAB']) ? $this->vars['L_CONFIG_TAB'] : $this->lang('L_CONFIG_TAB'); ?></th>
			</tr>			
			<?php echo isset($this->vars['CONFIGURATION_BOX']) ? $this->vars['CONFIGURATION_BOX'] : $this->lang('CONFIGURATION_BOX'); ?>
			<tr>
				<td class="cat" colspan="2" align="center"><input type="submit" name="submitted" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" onclick="unsetChange();" class="liteoption" /></td>
			</tr>
		</table>
		</form>
	</td>
</tr>
<?php

$switch_on_save_confirmation_count = ( isset($this->_tpldata['switch_on_save_confirmation.']) ) ?  sizeof($this->_tpldata['switch_on_save_confirmation.']) : 0;
for ($switch_on_save_confirmation_i = 0; $switch_on_save_confirmation_i < $switch_on_save_confirmation_count; $switch_on_save_confirmation_i++)
{
 $switch_on_save_confirmation_item = &$this->_tpldata['switch_on_save_confirmation.'][$switch_on_save_confirmation_i];
 $switch_on_save_confirmation_item['S_ROW_COUNT'] = $switch_on_save_confirmation_i;
 $switch_on_save_confirmation_item['S_NUM_ROWS'] = $switch_on_save_confirmation_count;

?>
<tr>
	<td align="center" colspan="<?php echo isset($this->vars['HEADER_COL_SPAN']) ? $this->vars['HEADER_COL_SPAN'] : $this->lang('HEADER_COL_SPAN'); ?>"><br />
		<table cellpadding="4" cellspacing="1" border="0" class="forumline">
			<tr>
				<td class="tab_headers"><?php echo isset($this->vars['L_SETTINGS_SAVED']) ? $this->vars['L_SETTINGS_SAVED'] : $this->lang('L_SETTINGS_SAVED'); ?></td>
			</tr>
		</table>	
	</td>
</tr>
<?php

} // END switch_on_save_confirmation

if(isset($switch_on_save_confirmation_item)) { unset($switch_on_save_confirmation_item); } 

?>
</table>
<br clear="all" />