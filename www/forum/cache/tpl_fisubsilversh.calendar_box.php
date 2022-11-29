<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:47 +0300 (time=1669727207)

?><!-- The javascript presents here comes from MyCalendar 2.2.6 from MojavLinux -->
<script language="Javascript" type="text/javascript">
<!--
var agt = navigator.userAgent.toLowerCase();
var originalFirstChild;

function createTitle(which, string, x, y) 
{
	// record the original first child (protection when deleting)
	if (typeof(originalFirstChild) == 'undefined') 
	{
		originalFirstChild = document.body.firstChild;
	}

	x = document.all ? (event.clientX + document.body.scrollLeft) : x;
	y = document.all ? (event.clientY + document.body.scrollTop) : y;
	element = document.createElement('div');
	element.style.position = 'absolute';
	element.style.zIndex = 1000;
	element.style.visibility = 'hidden';
	excessWidth = 0;
	if (document.all) 
	{
		excessWidth = 50;
	}
	excessHeight = 20;
	element.innerHTML = '<div class="bodyline"><table width="300" cellspacing="0" cellpadding="0" border="0"><tr><td><table width="100%"><tr><td><span class="gen">' + string + '</span></td></tr></table></td></tr></table></div>';
	renderedElement = document.body.insertBefore(element, document.body.firstChild);
	renderedWidth = renderedElement.offsetWidth;
	renderedHeight = renderedElement.offsetHeight;

	// fix overflowing off the right side of the screen
	overFlowX = x + renderedWidth + excessWidth - document.body.offsetWidth;
	x = overFlowX > 0 ? x - overFlowX : x;

	// fix overflowing off the bottom of the screen
	overFlowY = y + renderedHeight + excessHeight - window.innerHeight - window.pageYOffset;
	y = overFlowY > 0 ? y - overFlowY : y;

	renderedElement.style.top = (y + 15) + 'px';
	renderedElement.style.left = (x + 15) + 'px';

	// windows versions of mozilla are like too fast here...we have to slow it down
	if (agt.indexOf('gecko') != -1 && agt.indexOf('win') != -1) 
	{
		setTimeout("renderedElement.style.visibility = 'visible'", 1);
	}
	else 
	{
		renderedElement.style.visibility = 'visible';
	}
}

function destroyTitle() 
{
	// make sure we don't delete the actual page contents (javascript can get out of alignment)
	if (document.body.firstChild != originalFirstChild) 
	{
		document.body.removeChild(document.body.firstChild);
	}
}
//-->
</script>

<?php

$_calendar_box_count = ( isset($this->_tpldata['_calendar_box.']) ) ?  sizeof($this->_tpldata['_calendar_box.']) : 0;
for ($_calendar_box_i = 0; $_calendar_box_i < $_calendar_box_count; $_calendar_box_i++)
{
 $_calendar_box_item = &$this->_tpldata['_calendar_box.'][$_calendar_box_i];
 $_calendar_box_item['S_ROW_COUNT'] = $_calendar_box_i;
 $_calendar_box_item['S_NUM_ROWS'] = $_calendar_box_count;

?>
<?php

$switch_full_month_count = ( isset($_calendar_box_item['switch_full_month.']) ) ? sizeof($_calendar_box_item['switch_full_month.']) : 0;
for ($switch_full_month_i = 0; $switch_full_month_i < $switch_full_month_count; $switch_full_month_i++)
{
 $switch_full_month_item = &$_calendar_box_item['switch_full_month.'][$switch_full_month_i];
 $switch_full_month_item['S_ROW_COUNT'] = $switch_full_month_i;
 $switch_full_month_item['S_NUM_ROWS'] = $switch_full_month_count;

?>
<table align="center" cellpadding="0" cellspacing="1" border="0" width="100%" class="forumline">
<tr>
	<td align="center" class="catHead" colspan="<?php echo isset($_calendar_box_item['SPAN_ALL']) ? $_calendar_box_item['SPAN_ALL'] : ''; ?>" width="100%">
		<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td>&nbsp;</td>
			<td class="quote"><b>&nbsp;<a href="<?php echo isset($_calendar_box_item['U_PREC']) ? $_calendar_box_item['U_PREC'] : ''; ?>" class="gen">&laquo;</a>&nbsp;</b></td>
			<td width="100%" align="center"><?php echo isset($_calendar_box_item['S_MONTH']) ? $_calendar_box_item['S_MONTH'] : ''; ?><?php echo isset($_calendar_box_item['S_YEAR']) ? $_calendar_box_item['S_YEAR'] : ''; ?>&nbsp;<?php echo isset($_calendar_box_item['S_FORUM_LIST']) ? $_calendar_box_item['S_FORUM_LIST'] : ''; ?>&nbsp;<input type="submit" value="<?php echo isset($_calendar_box_item['L_GO']) ? $_calendar_box_item['L_GO'] : ''; ?>" class="liteoption" /></td>
			<td class="quote"><b>&nbsp;<a href="<?php echo isset($_calendar_box_item['U_NEXT']) ? $_calendar_box_item['U_NEXT'] : ''; ?>" class="gen">&raquo;</a>&nbsp;</b></td>
			<td>&nbsp;</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<?php

$_cell_count = ( isset($switch_full_month_item['_cell.']) ) ? sizeof($switch_full_month_item['_cell.']) : 0;
for ($_cell_i = 0; $_cell_i < $_cell_count; $_cell_i++)
{
 $_cell_item = &$switch_full_month_item['_cell.'][$_cell_i];
 $_cell_item['S_ROW_COUNT'] = $_cell_i;
 $_cell_item['S_NUM_ROWS'] = $_cell_count;

?>
	<th width="<?php echo isset($_cell_item['WIDTH']) ? $_cell_item['WIDTH'] : ''; ?>%" nowrap="nowrap"><?php echo isset($_cell_item['L_DAY']) ? $_cell_item['L_DAY'] : ''; ?></th>
	<?php

} // END _cell

if(isset($_cell_item)) { unset($_cell_item); } 

?>
</tr>
<?php

} // END switch_full_month

if(isset($switch_full_month_item)) { unset($switch_full_month_item); } 

?>
<?php

$switch_full_month_no_count = ( isset($_calendar_box_item['switch_full_month_no.']) ) ? sizeof($_calendar_box_item['switch_full_month_no.']) : 0;
for ($switch_full_month_no_i = 0; $switch_full_month_no_i < $switch_full_month_no_count; $switch_full_month_no_i++)
{
 $switch_full_month_no_item = &$_calendar_box_item['switch_full_month_no.'][$switch_full_month_no_i];
 $switch_full_month_no_item['S_ROW_COUNT'] = $switch_full_month_no_i;
 $switch_full_month_no_item['S_NUM_ROWS'] = $switch_full_month_no_count;

?>
<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
	<td width="100%"></td>
	<td align="right" nowrap="nowrap"><span class="mainmenu"><a href="#" onClick="hdr_toggle('calendar_display','calendar_open_close', '<?php echo isset($this->vars['DOWN_ARROW']) ? $this->vars['DOWN_ARROW'] : $this->lang('DOWN_ARROW'); ?>', '<?php echo isset($this->vars['UP_ARROW']) ? $this->vars['UP_ARROW'] : $this->lang('UP_ARROW'); ?>'); return false;" class="gensmall"><img src="<?php echo isset($this->vars['TOGGLE_ICON']) ? $this->vars['TOGGLE_ICON'] : $this->lang('TOGGLE_ICON'); ?>" id="calendar_open_close" hspace="2" border="0" /><?php echo isset($_calendar_box_item['L_CALENDAR_TXT']) ? $_calendar_box_item['L_CALENDAR_TXT'] : ''; ?></a>&nbsp;</span></td>
</tr>
<tbody id="calendar_display" style="display:<?php echo isset($this->vars['TOGGLE_STATUS']) ? $this->vars['TOGGLE_STATUS'] : $this->lang('TOGGLE_STATUS'); ?>">
<tr height="2"><td></td></tr>
<tr><td colspan="2">
	<table align="center" cellpadding="0" cellspacing="1" border="0" width="100%" class="forumline">
	<tr>
		<th align="center" colspan="<?php echo isset($_calendar_box_item['SPAN_ALL']) ? $_calendar_box_item['SPAN_ALL'] : ''; ?>" width="100%"><?php echo isset($_calendar_box_item['L_CALENDAR']) ? $_calendar_box_item['L_CALENDAR'] : ''; ?></th>
	</tr>
<?php

} // END switch_full_month_no

if(isset($switch_full_month_no_item)) { unset($switch_full_month_no_item); } 

?>
<?php

$_row_count = ( isset($_calendar_box_item['_row.']) ) ? sizeof($_calendar_box_item['_row.']) : 0;
for ($_row_i = 0; $_row_i < $_row_count; $_row_i++)
{
 $_row_item = &$_calendar_box_item['_row.'][$_row_i];
 $_row_item['S_ROW_COUNT'] = $_row_i;
 $_row_item['S_NUM_ROWS'] = $_row_count;

?>
<tr>
	<?php

$_cell_count = ( isset($_row_item['_cell.']) ) ? sizeof($_row_item['_cell.']) : 0;
for ($_cell_i = 0; $_cell_i < $_cell_count; $_cell_i++)
{
 $_cell_item = &$_row_item['_cell.'][$_cell_i];
 $_cell_item['S_ROW_COUNT'] = $_cell_i;
 $_cell_item['S_NUM_ROWS'] = $_cell_count;

?>
	<?php

$switch_filled_no_count = ( isset($_cell_item['switch_filled_no.']) ) ? sizeof($_cell_item['switch_filled_no.']) : 0;
for ($switch_filled_no_i = 0; $switch_filled_no_i < $switch_filled_no_count; $switch_filled_no_i++)
{
 $switch_filled_no_item = &$_cell_item['switch_filled_no.'][$switch_filled_no_i];
 $switch_filled_no_item['S_ROW_COUNT'] = $switch_filled_no_i;
 $switch_filled_no_item['S_NUM_ROWS'] = $switch_filled_no_count;

?>
	<td class="row3" colspan="<?php echo isset($_cell_item['SPAN']) ? $_cell_item['SPAN'] : ''; ?>" width="<?php echo isset($_cell_item['WIDTH']) ? $_cell_item['WIDTH'] : ''; ?>%">&nbsp;</td>
	<?php

} // END switch_filled_no

if(isset($switch_filled_no_item)) { unset($switch_filled_no_item); } 

?>
	<?php

$switch_filled_count = ( isset($_cell_item['switch_filled.']) ) ? sizeof($_cell_item['switch_filled.']) : 0;
for ($switch_filled_i = 0; $switch_filled_i < $switch_filled_count; $switch_filled_i++)
{
 $switch_filled_item = &$_cell_item['switch_filled.'][$switch_filled_i];
 $switch_filled_item['S_ROW_COUNT'] = $switch_filled_i;
 $switch_filled_item['S_NUM_ROWS'] = $switch_filled_count;

?>
	<td class="row1" valign="top" colspan="<?php echo isset($_cell_item['SPAN']) ? $_cell_item['SPAN'] : ''; ?>" width="<?php echo isset($_cell_item['WIDTH']) ? $_cell_item['WIDTH'] : ''; ?>%">
		<table cellspacing="0" cellpadding="2" width="100%" height="94" valign="top">
		<tr>
			<td class="row2" align="center" height="4" nowrap="nowrap"><span class="genmed"><a href="<?php echo isset($_cell_item['U_DATE']) ? $_cell_item['U_DATE'] : ''; ?>" alt="<?php echo isset($_cell_item['DATE']) ? $_cell_item['DATE'] : ''; ?>" class="genmed"><?php echo isset($_cell_item['DATE']) ? $_cell_item['DATE'] : ''; ?></a></span></td>
		</tr>
		<tr valign="top">
			<td class="row1" nowrap="nowrap">
				<table cellspacing="0" cellpadding="0" width="100%" valign="top">
				<?php

$_event_count = ( isset($switch_filled_item['_event.']) ) ? sizeof($switch_filled_item['_event.']) : 0;
for ($_event_i = 0; $_event_i < $_event_count; $_event_i++)
{
 $_event_item = &$switch_filled_item['_event.'][$_event_i];
 $_event_item['S_ROW_COUNT'] = $_event_i;
 $_event_item['S_NUM_ROWS'] = $_event_count;

?>
				<?php

$switch_event_count = ( isset($_event_item['switch_event.']) ) ? sizeof($_event_item['switch_event.']) : 0;
for ($switch_event_i = 0; $switch_event_i < $switch_event_count; $switch_event_i++)
{
 $switch_event_item = &$_event_item['switch_event.'][$switch_event_i];
 $switch_event_item['S_ROW_COUNT'] = $switch_event_i;
 $switch_event_item['S_NUM_ROWS'] = $switch_event_count;

?>
				<tr>
					<td class="row1" nowrap="nowrap"><span class="genmed"><?php echo isset($_event_item['EVENT_TYPE']) ? $_event_item['EVENT_TYPE'] : ''; ?><a href="<?php echo isset($_event_item['U_EVENT']) ? $_event_item['U_EVENT'] : ''; ?>" onMouseOver="createTitle(this, '<?php echo isset($_event_item['EVENT_MESSAGE']) ? $_event_item['EVENT_MESSAGE'] : ''; ?>', event.pageX, event.pageY);" onMouseOut="destroyTitle();" class="<?php echo isset($_event_item['EVENT_CLASS']) ? $_event_item['EVENT_CLASS'] : ''; ?>"><?php echo isset($_event_item['EVENT_TITLE']) ? $_event_item['EVENT_TITLE'] : ''; ?></a></span></td>
					<?php

$_more_count = ( isset($switch_event_item['_more.']) ) ? sizeof($switch_event_item['_more.']) : 0;
for ($_more_i = 0; $_more_i < $_more_count; $_more_i++)
{
 $_more_item = &$switch_event_item['_more.'][$_more_i];
 $_more_item['S_ROW_COUNT'] = $_more_i;
 $_more_item['S_NUM_ROWS'] = $_more_count;

?>
					<td class="row1" align="right"><span class="genmed"><a href="#" onClick="hdr_toggle('calendar_display_extend_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>','calendar_open_close_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>', '<?php echo isset($this->vars['DOWN_ARROW']) ? $this->vars['DOWN_ARROW'] : $this->lang('DOWN_ARROW'); ?>', '<?php echo isset($this->vars['UP_ARROW']) ? $this->vars['UP_ARROW'] : $this->lang('UP_ARROW'); ?>'); return false;" class="gensmall">...<img src="<?php echo isset($switch_filled_item['TOGGLE_ICON']) ? $switch_filled_item['TOGGLE_ICON'] : ''; ?>" id="calendar_open_close_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>" hspace="2" border="0" /></a></span></td>
					<?php

} // END _more

if(isset($_more_item)) { unset($_more_item); } 

?>
					<?php

$_more_no_count = ( isset($switch_event_item['_more_no.']) ) ? sizeof($switch_event_item['_more_no.']) : 0;
for ($_more_no_i = 0; $_more_no_i < $_more_no_count; $_more_no_i++)
{
 $_more_no_item = &$switch_event_item['_more_no.'][$_more_no_i];
 $_more_no_item['S_ROW_COUNT'] = $_more_no_i;
 $_more_no_item['S_NUM_ROWS'] = $_more_no_count;

?>
					<td></td>
					<?php

} // END _more_no

if(isset($_more_no_item)) { unset($_more_no_item); } 

?>
				</tr>
				<?php

} // END switch_event

if(isset($switch_event_item)) { unset($switch_event_item); } 

?>
				<?php

$switch_event_no_count = ( isset($_event_item['switch_event_no.']) ) ? sizeof($_event_item['switch_event_no.']) : 0;
for ($switch_event_no_i = 0; $switch_event_no_i < $switch_event_no_count; $switch_event_no_i++)
{
 $switch_event_no_item = &$_event_item['switch_event_no.'][$switch_event_no_i];
 $switch_event_no_item['S_ROW_COUNT'] = $switch_event_no_i;
 $switch_event_no_item['S_NUM_ROWS'] = $switch_event_no_count;

?>
				<tr>
					<td class="row1"><span class="genmed">&nbsp;</span></td>
					<?php

$_more_count = ( isset($switch_event_no_item['_more.']) ) ? sizeof($switch_event_no_item['_more.']) : 0;
for ($_more_i = 0; $_more_i < $_more_count; $_more_i++)
{
 $_more_item = &$switch_event_no_item['_more.'][$_more_i];
 $_more_item['S_ROW_COUNT'] = $_more_i;
 $_more_item['S_NUM_ROWS'] = $_more_count;

?>
					<td class="row1" align="right"><span class="genmed"><a href="#" onClick="hdr_toggle('calendar_display_extend_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>','calendar_open_close_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>', '<?php echo isset($this->vars['DOWN_ARROW']) ? $this->vars['DOWN_ARROW'] : $this->lang('DOWN_ARROW'); ?>', '<?php echo isset($this->vars['UP_ARROW']) ? $this->vars['UP_ARROW'] : $this->lang('UP_ARROW'); ?>'); return false;" class="gensmall">...<img src="<?php echo isset($switch_filled_item['TOGGLE_ICON']) ? $switch_filled_item['TOGGLE_ICON'] : ''; ?>" id="calendar_open_close_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>" hspace="2" border="0" /></a></span></td>
					<?php

} // END _more

if(isset($_more_item)) { unset($_more_item); } 

?>
					<?php

$_more_no_count = ( isset($switch_event_no_item['_more_no.']) ) ? sizeof($switch_event_no_item['_more_no.']) : 0;
for ($_more_no_i = 0; $_more_no_i < $_more_no_count; $_more_no_i++)
{
 $_more_no_item = &$switch_event_no_item['_more_no.'][$_more_no_i];
 $_more_no_item['S_ROW_COUNT'] = $_more_no_i;
 $_more_no_item['S_NUM_ROWS'] = $_more_no_count;

?>
					<td></td>
					<?php

} // END _more_no

if(isset($_more_no_item)) { unset($_more_no_item); } 

?>
				</tr>
				<?php

} // END switch_event_no

if(isset($switch_event_no_item)) { unset($switch_event_no_item); } 

?>
				<?php

$_more_header_count = ( isset($_event_item['_more_header.']) ) ? sizeof($_event_item['_more_header.']) : 0;
for ($_more_header_i = 0; $_more_header_i < $_more_header_count; $_more_header_i++)
{
 $_more_header_item = &$_event_item['_more_header.'][$_more_header_i];
 $_more_header_item['S_ROW_COUNT'] = $_more_header_i;
 $_more_header_item['S_NUM_ROWS'] = $_more_header_count;

?>
				<tbody id="calendar_display_extend_<?php echo isset($switch_filled_item['EVENT_DATE']) ? $switch_filled_item['EVENT_DATE'] : ''; ?>" style="display:<?php echo isset($switch_filled_item['TOGGLE_STATUS']) ? $switch_filled_item['TOGGLE_STATUS'] : ''; ?>">
				<?php

} // END _more_header

if(isset($_more_header_item)) { unset($_more_header_item); } 

?>
				<?php

$_more_footer_count = ( isset($_event_item['_more_footer.']) ) ? sizeof($_event_item['_more_footer.']) : 0;
for ($_more_footer_i = 0; $_more_footer_i < $_more_footer_count; $_more_footer_i++)
{
 $_more_footer_item = &$_event_item['_more_footer.'][$_more_footer_i];
 $_more_footer_item['S_ROW_COUNT'] = $_more_footer_i;
 $_more_footer_item['S_NUM_ROWS'] = $_more_footer_count;

?>
				</tbody>
				<?php

} // END _more_footer

if(isset($_more_footer_item)) { unset($_more_footer_item); } 

?>
				<?php

} // END _event

if(isset($_event_item)) { unset($_event_item); } 

?>
				</table>
			</td>
		</tr>
		</table>
	</td>
	<?php

} // END switch_filled

if(isset($switch_filled_item)) { unset($switch_filled_item); } 

?>
	<?php

} // END _cell

if(isset($_cell_item)) { unset($_cell_item); } 

?>
</tr>
<?php

} // END _row

if(isset($_row_item)) { unset($_row_item); } 

?>
<?php

$switch_full_month_count = ( isset($_calendar_box_item['switch_full_month.']) ) ? sizeof($_calendar_box_item['switch_full_month.']) : 0;
for ($switch_full_month_i = 0; $switch_full_month_i < $switch_full_month_count; $switch_full_month_i++)
{
 $switch_full_month_item = &$_calendar_box_item['switch_full_month.'][$switch_full_month_i];
 $switch_full_month_item['S_ROW_COUNT'] = $switch_full_month_i;
 $switch_full_month_item['S_NUM_ROWS'] = $switch_full_month_count;

?>
<tr>
	<td class="cat" align="center" colspan="<?php echo isset($_calendar_box_item['SPAN_ALL']) ? $_calendar_box_item['SPAN_ALL'] : ''; ?>" width="100%">&nbsp;</td>
</tr>
<?php

} // END switch_full_month

if(isset($switch_full_month_item)) { unset($switch_full_month_item); } 

?>
<?php

$switch_full_month_no_count = ( isset($_calendar_box_item['switch_full_month_no.']) ) ? sizeof($_calendar_box_item['switch_full_month_no.']) : 0;
for ($switch_full_month_no_i = 0; $switch_full_month_no_i < $switch_full_month_no_count; $switch_full_month_no_i++)
{
 $switch_full_month_no_item = &$_calendar_box_item['switch_full_month_no.'][$switch_full_month_no_i];
 $switch_full_month_no_item['S_ROW_COUNT'] = $switch_full_month_no_i;
 $switch_full_month_no_item['S_NUM_ROWS'] = $switch_full_month_no_count;

?>
</table></td></tr></tbody>
<?php

} // END switch_full_month_no

if(isset($switch_full_month_no_item)) { unset($switch_full_month_no_item); } 

?>
</table>
<?php

} // END _calendar_box

if(isset($_calendar_box_item)) { unset($_calendar_box_item); } 

?>