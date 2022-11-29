<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:24:06 -0500 (time=1323527046)

?><?php

$switch_mini_cal_add_events_count = ( isset($this->_tpldata['switch_mini_cal_add_events.']) ) ?  sizeof($this->_tpldata['switch_mini_cal_add_events.']) : 0;
for ($switch_mini_cal_add_events_i = 0; $switch_mini_cal_add_events_i < $switch_mini_cal_add_events_count; $switch_mini_cal_add_events_i++)
{
 $switch_mini_cal_add_events_item = &$this->_tpldata['switch_mini_cal_add_events.'][$switch_mini_cal_add_events_i];
 $switch_mini_cal_add_events_item['S_ROW_COUNT'] = $switch_mini_cal_add_events_i;
 $switch_mini_cal_add_events_item['S_NUM_ROWS'] = $switch_mini_cal_add_events_count;

?>
<form name="mini_cal" id ="mini_cal" action="<?php echo isset($this->vars['U_MINI_CAL_ADD_EVENT']) ? $this->vars['U_MINI_CAL_ADD_EVENT'] : $this->lang('U_MINI_CAL_ADD_EVENT'); ?>" method="post">
<?php

} // END switch_mini_cal_add_events

if(isset($switch_mini_cal_add_events_item)) { unset($switch_mini_cal_add_events_item); } 

?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr><th>
            <?php echo isset($this->vars['L_MINI_CAL_CALENDAR']) ? $this->vars['L_MINI_CAL_CALENDAR'] : $this->lang('L_MINI_CAL_CALENDAR'); ?>
            
        </span>
      </td>
  </tr>
  <tr><td class="row1" align="center">
  	<table width="100%">
        <tr><td align="left" colspan="2"><?php echo isset($this->vars['U_PREV_MONTH']) ? $this->vars['U_PREV_MONTH'] : $this->lang('U_PREV_MONTH'); ?></td><td colspan="3" align="center"><span class="genmed"><?php echo isset($this->vars['L_MINI_CAL_MONTH']) ? $this->vars['L_MINI_CAL_MONTH'] : $this->lang('L_MINI_CAL_MONTH'); ?></span></td><td align="right" colspan="2"><?php echo isset($this->vars['U_NEXT_MONTH']) ? $this->vars['U_NEXT_MONTH'] : $this->lang('U_NEXT_MONTH'); ?></td></tr>
		<tr>
		<td width="16%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_SUN']) ? $this->vars['L_MINI_CAL_SUN'] : $this->lang('L_MINI_CAL_SUN'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_MON']) ? $this->vars['L_MINI_CAL_MON'] : $this->lang('L_MINI_CAL_MON'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_TUE']) ? $this->vars['L_MINI_CAL_TUE'] : $this->lang('L_MINI_CAL_TUE'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_WED']) ? $this->vars['L_MINI_CAL_WED'] : $this->lang('L_MINI_CAL_WED'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_THU']) ? $this->vars['L_MINI_CAL_THU'] : $this->lang('L_MINI_CAL_THU'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_FRI']) ? $this->vars['L_MINI_CAL_FRI'] : $this->lang('L_MINI_CAL_FRI'); ?></span></td>
                <td width="14%"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_SAT']) ? $this->vars['L_MINI_CAL_SAT'] : $this->lang('L_MINI_CAL_SAT'); ?></span></td>
		</tr>
		<?php

$mini_cal_row_count = ( isset($this->_tpldata['mini_cal_row.']) ) ?  sizeof($this->_tpldata['mini_cal_row.']) : 0;
for ($mini_cal_row_i = 0; $mini_cal_row_i < $mini_cal_row_count; $mini_cal_row_i++)
{
 $mini_cal_row_item = &$this->_tpldata['mini_cal_row.'][$mini_cal_row_i];
 $mini_cal_row_item['S_ROW_COUNT'] = $mini_cal_row_i;
 $mini_cal_row_item['S_NUM_ROWS'] = $mini_cal_row_count;

?>
		<tr>
			<?php

$mini_cal_days_count = ( isset($mini_cal_row_item['mini_cal_days.']) ) ? sizeof($mini_cal_row_item['mini_cal_days.']) : 0;
for ($mini_cal_days_i = 0; $mini_cal_days_i < $mini_cal_days_count; $mini_cal_days_i++)
{
 $mini_cal_days_item = &$mini_cal_row_item['mini_cal_days.'][$mini_cal_days_i];
 $mini_cal_days_item['S_ROW_COUNT'] = $mini_cal_days_i;
 $mini_cal_days_item['S_NUM_ROWS'] = $mini_cal_days_count;

?>
			<td class="row1" align="center"><span class="gensmall"><?php echo isset($mini_cal_days_item['MINI_CAL_DAY']) ? $mini_cal_days_item['MINI_CAL_DAY'] : ''; ?></span></td>
			<?php

} // END mini_cal_days

if(isset($mini_cal_days_item)) { unset($mini_cal_days_item); } 

?>
		</tr>
		<?php

} // END mini_cal_row

if(isset($mini_cal_row_item)) { unset($mini_cal_row_item); } 

?>
	</table>
  	</td>
  </tr>
  <?php

$switch_mini_cal_birthdays_count = ( isset($this->_tpldata['switch_mini_cal_birthdays.']) ) ?  sizeof($this->_tpldata['switch_mini_cal_birthdays.']) : 0;
for ($switch_mini_cal_birthdays_i = 0; $switch_mini_cal_birthdays_i < $switch_mini_cal_birthdays_count; $switch_mini_cal_birthdays_i++)
{
 $switch_mini_cal_birthdays_item = &$this->_tpldata['switch_mini_cal_birthdays.'][$switch_mini_cal_birthdays_i];
 $switch_mini_cal_birthdays_item['S_ROW_COUNT'] = $switch_mini_cal_birthdays_i;
 $switch_mini_cal_birthdays_item['S_NUM_ROWS'] = $switch_mini_cal_birthdays_count;

?>
  <tr><td class="row1" align="left"><span class="gensmall"><?php echo isset($this->vars['L_WHOSBIRTHDAY_TODAY']) ? $this->vars['L_WHOSBIRTHDAY_TODAY'] : $this->lang('L_WHOSBIRTHDAY_TODAY'); ?></span></td></tr>
  <tr><td class="row1" align="left"><span class="gensmall"><?php echo isset($this->vars['L_WHOSBIRTHDAY_WEEK']) ? $this->vars['L_WHOSBIRTHDAY_WEEK'] : $this->lang('L_WHOSBIRTHDAY_WEEK'); ?></span></td></tr> 
  <?php

} // END switch_mini_cal_birthdays

if(isset($switch_mini_cal_birthdays_item)) { unset($switch_mini_cal_birthdays_item); } 

?>
  <?php

$switch_mini_cal_events_count = ( isset($this->_tpldata['switch_mini_cal_events.']) ) ?  sizeof($this->_tpldata['switch_mini_cal_events.']) : 0;
for ($switch_mini_cal_events_i = 0; $switch_mini_cal_events_i < $switch_mini_cal_events_count; $switch_mini_cal_events_i++)
{
 $switch_mini_cal_events_item = &$this->_tpldata['switch_mini_cal_events.'][$switch_mini_cal_events_i];
 $switch_mini_cal_events_item['S_ROW_COUNT'] = $switch_mini_cal_events_i;
 $switch_mini_cal_events_item['S_NUM_ROWS'] = $switch_mini_cal_events_count;

?>
  <tr><td class="row2" align="center"><span class="gensmall"><?php echo isset($this->vars['L_MINI_CAL_EVENTS']) ? $this->vars['L_MINI_CAL_EVENTS'] : $this->lang('L_MINI_CAL_EVENTS'); ?>:</span></td></tr>
  <?php

} // END switch_mini_cal_events

if(isset($switch_mini_cal_events_item)) { unset($switch_mini_cal_events_item); } 

?>
  <?php

$mini_cal_events_count = ( isset($this->_tpldata['mini_cal_events.']) ) ?  sizeof($this->_tpldata['mini_cal_events.']) : 0;
for ($mini_cal_events_i = 0; $mini_cal_events_i < $mini_cal_events_count; $mini_cal_events_i++)
{
 $mini_cal_events_item = &$this->_tpldata['mini_cal_events.'][$mini_cal_events_i];
 $mini_cal_events_item['S_ROW_COUNT'] = $mini_cal_events_i;
 $mini_cal_events_item['S_NUM_ROWS'] = $mini_cal_events_count;

?>
  <tr><td class="row1"><span class="gensmall"><?php echo isset($mini_cal_events_item['MINI_CAL_EVENT_DATE']) ? $mini_cal_events_item['MINI_CAL_EVENT_DATE'] : ''; ?> - <a href="<?php echo isset($mini_cal_events_item['U_MINI_CAL_EVENT']) ? $mini_cal_events_item['U_MINI_CAL_EVENT'] : ''; ?>" class="gensmall"><?php echo isset($mini_cal_events_item['S_MINI_CAL_EVENT']) ? $mini_cal_events_item['S_MINI_CAL_EVENT'] : ''; ?></a></span></td></tr>
  <?php

} // END mini_cal_events

if(isset($mini_cal_events_item)) { unset($mini_cal_events_item); } 

?>
  <?php

$mini_cal_no_events_count = ( isset($this->_tpldata['mini_cal_no_events.']) ) ?  sizeof($this->_tpldata['mini_cal_no_events.']) : 0;
for ($mini_cal_no_events_i = 0; $mini_cal_no_events_i < $mini_cal_no_events_count; $mini_cal_no_events_i++)
{
 $mini_cal_no_events_item = &$this->_tpldata['mini_cal_no_events.'][$mini_cal_no_events_i];
 $mini_cal_no_events_item['S_ROW_COUNT'] = $mini_cal_no_events_i;
 $mini_cal_no_events_item['S_NUM_ROWS'] = $mini_cal_no_events_count;

?>
  <tr><td class="row1"><span class="genMed"><?php echo isset($this->vars['L_MINI_CAL_NO_EVENTS']) ? $this->vars['L_MINI_CAL_NO_EVENTS'] : $this->lang('L_MINI_CAL_NO_EVENTS'); ?></span></td></tr>
  <?php

} // END mini_cal_no_events

if(isset($mini_cal_no_events_item)) { unset($mini_cal_no_events_item); } 

?>
  <?php

$switch_mini_cal_add_events_count = ( isset($this->_tpldata['switch_mini_cal_add_events.']) ) ?  sizeof($this->_tpldata['switch_mini_cal_add_events.']) : 0;
for ($switch_mini_cal_add_events_i = 0; $switch_mini_cal_add_events_i < $switch_mini_cal_add_events_count; $switch_mini_cal_add_events_i++)
{
 $switch_mini_cal_add_events_item = &$this->_tpldata['switch_mini_cal_add_events.'][$switch_mini_cal_add_events_i];
 $switch_mini_cal_add_events_item['S_ROW_COUNT'] = $switch_mini_cal_add_events_i;
 $switch_mini_cal_add_events_item['S_NUM_ROWS'] = $switch_mini_cal_add_events_count;

?>
  <tr><td class="row1" height="28" align="center">
        <span class="genmed">
            <?php echo isset($this->vars['S_MINI_CAL_EVENTS_FORUMS_LIST']) ? $this->vars['S_MINI_CAL_EVENTS_FORUMS_LIST'] : $this->lang('S_MINI_CAL_EVENTS_FORUMS_LIST'); ?> <input type="submit" value="<?php echo isset($this->vars['L_MINI_CAL_ADD_EVENT']) ? $this->vars['L_MINI_CAL_ADD_EVENT'] : $this->lang('L_MINI_CAL_ADD_EVENT'); ?>" class="liteoption" />
            <input type="Hidden" name="mode" id="mode" value="newtopic" />
        </span>
      </td>
  </tr>
  <?php

} // END switch_mini_cal_add_events

if(isset($switch_mini_cal_add_events_item)) { unset($switch_mini_cal_add_events_item); } 

?>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php

$switch_mini_cal_add_events_count = ( isset($this->_tpldata['switch_mini_cal_add_events.']) ) ?  sizeof($this->_tpldata['switch_mini_cal_add_events.']) : 0;
for ($switch_mini_cal_add_events_i = 0; $switch_mini_cal_add_events_i < $switch_mini_cal_add_events_count; $switch_mini_cal_add_events_i++)
{
 $switch_mini_cal_add_events_item = &$this->_tpldata['switch_mini_cal_add_events.'][$switch_mini_cal_add_events_i];
 $switch_mini_cal_add_events_item['S_ROW_COUNT'] = $switch_mini_cal_add_events_i;
 $switch_mini_cal_add_events_item['S_NUM_ROWS'] = $switch_mini_cal_add_events_count;

?>
</form>
<?php

} // END switch_mini_cal_add_events

if(isset($switch_mini_cal_add_events_item)) { unset($switch_mini_cal_add_events_item); } 

?>
<br />
