<?php

// eXtreme Styles mod cache. Generated on Sun, 21 Jun 2015 02:05:55 -0400 (time=1434866755)

?><form name="form" method="get" action="<?php echo isset($this->vars['FORM_ACTION']) ? $this->vars['FORM_ACTION'] : $this->lang('FORM_ACTION'); ?>">
<table width="60%" cellpadding="1" cellspacing="1" border="0" align="center">
  <tr>
        <td align="center"><span class="genmed"><?php echo isset($this->vars['L_SHOWING_POSTS']) ? $this->vars['L_SHOWING_POSTS'] : $this->lang('L_SHOWING_POSTS'); ?> <b><?php echo isset($this->vars['STATUS']) ? $this->vars['STATUS'] : $this->lang('STATUS'); ?></b></span></td>
  </tr>
  <tr>
        <td align="center"><span class="gensmall"><?php echo isset($this->vars['L_SELECT_MODE']) ? $this->vars['L_SELECT_MODE'] : $this->lang('L_SELECT_MODE'); ?>
                                                  [ <a href="<?php echo isset($this->vars['FORM_ACTION']) ? $this->vars['FORM_ACTION'] : $this->lang('FORM_ACTION'); ?>?mode=today" class="mainmenu"><?php echo isset($this->vars['L_TODAY']) ? $this->vars['L_TODAY'] : $this->lang('L_TODAY'); ?></a> ]
                                                  [ <a href="<?php echo isset($this->vars['FORM_ACTION']) ? $this->vars['FORM_ACTION'] : $this->lang('FORM_ACTION'); ?>?mode=yesterday" class="mainmenu"><?php echo isset($this->vars['L_YESTERDAY']) ? $this->vars['L_YESTERDAY'] : $this->lang('L_YESTERDAY'); ?></a> ]
                                                  [ <a href="<?php echo isset($this->vars['FORM_ACTION']) ? $this->vars['FORM_ACTION'] : $this->lang('FORM_ACTION'); ?>?mode=last24" class="mainmenu"><?php echo isset($this->vars['L_LAST24']) ? $this->vars['L_LAST24'] : $this->lang('L_LAST24'); ?></a> ]
                                                  [ <a href="<?php echo isset($this->vars['FORM_ACTION']) ? $this->vars['FORM_ACTION'] : $this->lang('FORM_ACTION'); ?>?mode=lastweek" class="mainmenu"><?php echo isset($this->vars['L_LASTWEEK']) ? $this->vars['L_LASTWEEK'] : $this->lang('L_LASTWEEK'); ?></a> ]
                                                  [ <?php echo isset($this->vars['L_LAST']) ? $this->vars['L_LAST'] : $this->lang('L_LAST'); ?> <input type="hidden" name="mode" value="lastXdays" />
                                                                   <input type="text" name="amount_days" size="2" value="<?php echo isset($this->vars['AMOUNT_DAYS']) ? $this->vars['AMOUNT_DAYS'] : $this->lang('AMOUNT_DAYS'); ?>" maxlength="3" class="post" />
                                                                   <a href="javascript:document.form.submit();" class="mainmenu"><?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></a> ]</span></td>
  </tr>
</table></form>

<table width="100%" cellpadding="1" cellspacing="1" border="0" align="center">
  <tr>
        <td><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0" align="center" class="forumline">
  <tr>
        <th colspan="5"><?php echo isset($this->vars['L_RECENT_TITLE']) ? $this->vars['L_RECENT_TITLE'] : $this->lang('L_RECENT_TITLE'); ?></th>
  </tr>
  <?php

$recent_count = ( isset($this->_tpldata['recent.']) ) ?  sizeof($this->_tpldata['recent.']) : 0;
for ($recent_i = 0; $recent_i < $recent_count; $recent_i++)
{
 $recent_item = &$this->_tpldata['recent.'][$recent_i];
 $recent_item['S_ROW_COUNT'] = $recent_i;
 $recent_item['S_NUM_ROWS'] = $recent_count;

?>
  <tr> 
        <td class="<?php echo isset($recent_item['ROW_CLASS']) ? $recent_item['ROW_CLASS'] : ''; ?>" align="center" valign="middle"><img src="<?php echo isset($recent_item['TOPIC_FOLDER_IMG']) ? $recent_item['TOPIC_FOLDER_IMG'] : ''; ?>" alt="<?php echo isset($recent_item['TOPIC_FOLDER_ALT']) ? $recent_item['TOPIC_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($recent_item['TOPIC_FOLDER_ALT']) ? $recent_item['TOPIC_FOLDER_ALT'] : ''; ?>" /></td>
        <td class="<?php echo isset($recent_item['ROW_CLASS']) ? $recent_item['ROW_CLASS'] : ''; ?>" nowrap="nowrap"><span class="topictitle"><?php echo isset($recent_item['NEWEST_IMG']) ? $recent_item['NEWEST_IMG'] : ''; ?><?php echo isset($recent_item['TOPIC_TYPE']) ? $recent_item['TOPIC_TYPE'] : ''; ?><a href="<?php echo isset($recent_item['U_VIEW_TOPIC']) ? $recent_item['U_VIEW_TOPIC'] : ''; ?>" class="topictitle"><?php echo isset($recent_item['TOPIC_TITLE']) ? $recent_item['TOPIC_TITLE'] : ''; ?></a></span>
                                                                                       <span class="gensmall"><?php echo isset($recent_item['GOTO_PAGE']) ? $recent_item['GOTO_PAGE'] : ''; ?><br /><?php echo isset($recent_item['FIRST_TIME']) ? $recent_item['FIRST_TIME'] : ''; ?><?php echo isset($recent_item['FIRST_AUTHOR']) ? $recent_item['FIRST_AUTHOR'] : ''; ?></span></td>
        <td class="<?php echo isset($recent_item['ROW_CLASS']) ? $recent_item['ROW_CLASS'] : ''; ?>" width="10%" align="left"><span class="postdetails">&nbsp;<?php echo isset($recent_item['L_REPLIES']) ? $recent_item['L_REPLIES'] : ''; ?>: <?php echo isset($recent_item['REPLIES']) ? $recent_item['REPLIES'] : ''; ?>
                                                                                                   <br />&nbsp;<?php echo isset($recent_item['L_VIEWS']) ? $recent_item['L_VIEWS'] : ''; ?>: <?php echo isset($recent_item['VIEWS']) ? $recent_item['VIEWS'] : ''; ?></span></td>
        <td class="<?php echo isset($recent_item['ROW_CLASS']) ? $recent_item['ROW_CLASS'] : ''; ?>" width="25%" nowrap="nowrap">&nbsp;<span class="genmed"><a href="<?php echo isset($recent_item['U_VIEW_FORUM']) ? $recent_item['U_VIEW_FORUM'] : ''; ?>" class="genmed"><?php echo isset($recent_item['FORUM_NAME']) ? $recent_item['FORUM_NAME'] : ''; ?></span></td>
        <td class="<?php echo isset($recent_item['ROW_CLASS']) ? $recent_item['ROW_CLASS'] : ''; ?>" align="right" width="20%" nowrap="nowrap"><span class="gensmall"> <?php echo isset($recent_item['LAST_URL']) ? $recent_item['LAST_URL'] : ''; ?> <?php echo isset($recent_item['LAST_TIME']) ? $recent_item['LAST_TIME'] : ''; ?>&nbsp;&nbsp;
                                                                                                                             <br /><?php echo isset($recent_item['LAST_AUTHOR']) ? $recent_item['LAST_AUTHOR'] : ''; ?></span>&nbsp;&nbsp;</td>
  </tr>
  <?php

} // END recent

if(isset($recent_item)) { unset($recent_item); } 

?>
  <?php

$switch_no_topics_count = ( isset($this->_tpldata['switch_no_topics.']) ) ?  sizeof($this->_tpldata['switch_no_topics.']) : 0;
for ($switch_no_topics_i = 0; $switch_no_topics_i < $switch_no_topics_count; $switch_no_topics_i++)
{
 $switch_no_topics_item = &$this->_tpldata['switch_no_topics.'][$switch_no_topics_i];
 $switch_no_topics_item['S_ROW_COUNT'] = $switch_no_topics_i;
 $switch_no_topics_item['S_NUM_ROWS'] = $switch_no_topics_count;

?>
  <tr>
        <td colspan="5" class="row1" align="center" height="28"><span class="gen"><i><?php echo isset($this->vars['L_NO_TOPICS']) ? $this->vars['L_NO_TOPICS'] : $this->lang('L_NO_TOPICS'); ?></i></span></td>
  </tr>
  <?php

} // END switch_no_topics

if(isset($switch_no_topics_item)) { unset($switch_no_topics_item); } 

?>
  <tr>
        <td colspan="5" class="cat" height="28">&nbsp;</td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
        <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
        <td align="right"><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>