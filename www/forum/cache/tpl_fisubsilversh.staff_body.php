<?php

// eXtreme Styles mod cache. Generated on Sun, 14 Jun 2015 04:37:15 -0400 (time=1434271035)

?><?php

$switch_list_staff_count = ( isset($this->_tpldata['switch_list_staff.']) ) ?  sizeof($this->_tpldata['switch_list_staff.']) : 0;
for ($switch_list_staff_i = 0; $switch_list_staff_i < $switch_list_staff_count; $switch_list_staff_i++)
{
 $switch_list_staff_item = &$this->_tpldata['switch_list_staff.'][$switch_list_staff_i];
 $switch_list_staff_item['S_ROW_COUNT'] = $switch_list_staff_i;
 $switch_list_staff_item['S_NUM_ROWS'] = $switch_list_staff_count;

?>
<table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
  </tr>
</table>

<table width="90%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
  <tr>
        <th class="thTop"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_FORUMS']) ? $this->vars['L_FORUMS'] : $this->lang('L_FORUMS'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_LOCATION']) ? $this->vars['L_LOCATION'] : $this->lang('L_LOCATION'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_CONTACT']) ? $this->vars['L_CONTACT'] : $this->lang('L_CONTACT'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_MESSENGER']) ? $this->vars['L_MESSENGER'] : $this->lang('L_MESSENGER'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_WWW']) ? $this->vars['L_WWW'] : $this->lang('L_WWW'); ?></th>
  </tr>
  <?php

$user_level_count = ( isset($switch_list_staff_item['user_level.']) ) ? sizeof($switch_list_staff_item['user_level.']) : 0;
for ($user_level_i = 0; $user_level_i < $user_level_count; $user_level_i++)
{
 $user_level_item = &$switch_list_staff_item['user_level.'][$user_level_i];
 $user_level_item['S_ROW_COUNT'] = $user_level_i;
 $user_level_item['S_NUM_ROWS'] = $user_level_count;

?>
  <tr>
        <td class="row3" colspan="6" align="left"><span class="nav"><b><?php echo isset($user_level_item['USER_LEVEL']) ? $user_level_item['USER_LEVEL'] : ''; ?></b></span></td>
  </tr>
  <?php

$staff_count = ( isset($user_level_item['staff.']) ) ? sizeof($user_level_item['staff.']) : 0;
for ($staff_i = 0; $staff_i < $staff_count; $staff_i++)
{
 $staff_item = &$user_level_item['staff.'][$staff_i];
 $staff_item['S_ROW_COUNT'] = $staff_i;
 $staff_item['S_NUM_ROWS'] = $staff_count;

?>
  <tr> 
        <td align="left" class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" valign="top">
                <span class="gen"><a href="<?php echo isset($staff_item['U_PROFILE']) ? $staff_item['U_PROFILE'] : ''; ?>" onclick="window.open('<?php echo isset($staff_item['U_PROFILE']) ? $staff_item['U_PROFILE'] : ''; ?>', 'view_profile', 'HEIGHT=400,top=10,left=10,status=no,resizable=yes,menubar=no,scrollbars=yes,toolbar=no,WIDTH=700');return false;" class="gen"><?php echo isset($staff_item['USERNAME']) ? $staff_item['USERNAME'] : ''; ?></a></span>
                <span class="gensmall"> <?php echo isset($staff_item['USER_STATUS']) ? $staff_item['USER_STATUS'] : ''; ?><br /><?php echo isset($staff_item['RANK']) ? $staff_item['RANK'] : ''; ?><br /><?php echo isset($staff_item['RANK_IMAGE']) ? $staff_item['RANK_IMAGE'] : ''; ?><br />
                <?php echo isset($staff_item['AVATAR']) ? $staff_item['AVATAR'] : ''; ?></span></td>
        <td align="left" class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" width="30%" valign="top"><span class="gen"><?php echo isset($staff_item['FORUMS']) ? $staff_item['FORUMS'] : ''; ?></span></td>
        <td class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" valign="top" align="center"><span class="genmed"><?php echo isset($staff_item['LOCATION']) ? $staff_item['LOCATION'] : ''; ?></span></td>
        <td class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" width="11%" valign="top" align="center"><?php echo isset($staff_item['EMAIL']) ? $staff_item['EMAIL'] : ''; ?> <?php echo isset($staff_item['PM']) ? $staff_item['PM'] : ''; ?></td>
        <td class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" width="11%" valign="top" align="center"><?php echo isset($staff_item['MSN']) ? $staff_item['MSN'] : ''; ?> <?php echo isset($staff_item['YIM']) ? $staff_item['YIM'] : ''; ?> <?php echo isset($staff_item['AIM']) ? $staff_item['AIM'] : ''; ?> <?php echo isset($staff_item['ICQ']) ? $staff_item['ICQ'] : ''; ?></td>
        <td class="<?php echo isset($staff_item['ROW_CLASS']) ? $staff_item['ROW_CLASS'] : ''; ?>" width="11%" valign="top" align="center"><?php echo isset($staff_item['WWW']) ? $staff_item['WWW'] : ''; ?></td>
  </tr>
  <?php

} // END staff

if(isset($staff_item)) { unset($staff_item); } 

?>
  <?php

} // END user_level

if(isset($user_level_item)) { unset($user_level_item); } 

?>
  <tr>
        <td class="cat" colspan="6">&nbsp;</td>
  </tr>
</table>
<?php

} // END switch_list_staff

if(isset($switch_list_staff_item)) { unset($switch_list_staff_item); } 

?>

<?php

$switch_view_profile_count = ( isset($this->_tpldata['switch_view_profile.']) ) ?  sizeof($this->_tpldata['switch_view_profile.']) : 0;
for ($switch_view_profile_i = 0; $switch_view_profile_i < $switch_view_profile_count; $switch_view_profile_i++)
{
 $switch_view_profile_item = &$this->_tpldata['switch_view_profile.'][$switch_view_profile_i];
 $switch_view_profile_item['S_ROW_COUNT'] = $switch_view_profile_i;
 $switch_view_profile_item['S_NUM_ROWS'] = $switch_view_profile_count;

?>
<table border="0" cellspacing="1" cellpadding="3" align="center" width="100%" class="forumline">
  <tr> 
        <th colspan="2" class="thHead"><?php echo isset($this->vars['L_ABOUT_USER']) ? $this->vars['L_ABOUT_USER'] : $this->lang('L_ABOUT_USER'); ?></th>
  </tr>
  <tr> 
        <td align="left" valign="middle" class="row1"><span class="genmed"><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></span></td>
        <td align="left" valign="middle" class="row2" nowrap="nowrap">&nbsp;<span class="gen"> <?php echo isset($this->vars['POSTS']) ? $this->vars['POSTS'] : $this->lang('POSTS'); ?> (<?php echo isset($this->vars['POST_PERCENT']) ? $this->vars['POST_PERCENT'] : $this->lang('POST_PERCENT'); ?>,&nbsp;ø <?php echo isset($this->vars['POSTS_PER_DAY']) ? $this->vars['POSTS_PER_DAY'] : $this->lang('POSTS_PER_DAY'); ?>)</span></td>
  </tr>
  <tr> 
        <td align="left" valign="middle" class="row1"><span class="genmed"><?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?></span></td>
        <td align="left" valign="middle" class="row2" nowrap="nowrap">&nbsp;<span class="gen"> <?php echo isset($this->vars['TOPICS']) ? $this->vars['TOPICS'] : $this->lang('TOPICS'); ?> (<?php echo isset($this->vars['TOPIC_PERCENT']) ? $this->vars['TOPIC_PERCENT'] : $this->lang('TOPIC_PERCENT'); ?>,&nbsp;ø <?php echo isset($this->vars['TOPICS_PER_DAY']) ? $this->vars['TOPICS_PER_DAY'] : $this->lang('TOPICS_PER_DAY'); ?>)</span></td>
  </tr>
<?php

$last_posts_count = ( isset($switch_view_profile_item['last_posts.']) ) ? sizeof($switch_view_profile_item['last_posts.']) : 0;
for ($last_posts_i = 0; $last_posts_i < $last_posts_count; $last_posts_i++)
{
 $last_posts_item = &$switch_view_profile_item['last_posts.'][$last_posts_i];
 $last_posts_item['S_ROW_COUNT'] = $last_posts_i;
 $last_posts_item['S_NUM_ROWS'] = $last_posts_count;

?>
  <tr>
        <td colspan="2" align="left" class="row3">
                <table border="0" cellspacing="0" cellpadding="0" align="center" width="93%">
                  <tr>
                        <td align="left" width="30%"><span class="genmed"><a href="<?php echo isset($last_posts_item['FORUM_URL']) ? $last_posts_item['FORUM_URL'] : ''; ?>" target="_blank" onclick="opener.location.href='<?php echo isset($last_posts_item['FORUM_URL']) ? $last_posts_item['FORUM_URL'] : ''; ?>'; return false;" class="genmed"><b><?php echo isset($last_posts_item['FORUM_NAME']) ? $last_posts_item['FORUM_NAME'] : ''; ?></b></a></span></td>
                        <td align="left" width="40%"><span class="genmed"><a href="<?php echo isset($last_posts_item['LAST_POST_URL']) ? $last_posts_item['LAST_POST_URL'] : ''; ?>" target="_blank" onclick="opener.location.href='<?php echo isset($last_posts_item['LAST_POST_URL']) ? $last_posts_item['LAST_POST_URL'] : ''; ?>'; return false;" class="genmed"><?php echo isset($last_posts_item['LAST_POST_TITLE']) ? $last_posts_item['LAST_POST_TITLE'] : ''; ?></a></span></td>
                        <td align="right"><span class="gensmall"><?php echo isset($last_posts_item['LAST_POST_TIME']) ? $last_posts_item['LAST_POST_TIME'] : ''; ?><br /><?php echo isset($last_posts_item['LAST_POST_PERIOD']) ? $last_posts_item['LAST_POST_PERIOD'] : ''; ?></span></td>
                  </tr>
                </table></td>
  </tr>
<?php

} // END last_posts

if(isset($last_posts_item)) { unset($last_posts_item); } 

?>
  <tr> 
        <td align="left" valign="middle" class="row1"><span class="genmed"><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></span></td>
        <td align="left" valign="middle" class="row2" nowrap="nowrap">&nbsp;<span class="gen"><?php echo isset($this->vars['JOINED']) ? $this->vars['JOINED'] : $this->lang('JOINED'); ?>&nbsp; <?php echo isset($this->vars['JOINED_PERIOD']) ? $this->vars['JOINED_PERIOD'] : $this->lang('JOINED_PERIOD'); ?></span></td>
  </tr>
<?php

$view_signature_count = ( isset($switch_view_profile_item['view_signature.']) ) ? sizeof($switch_view_profile_item['view_signature.']) : 0;
for ($view_signature_i = 0; $view_signature_i < $view_signature_count; $view_signature_i++)
{
 $view_signature_item = &$switch_view_profile_item['view_signature.'][$view_signature_i];
 $view_signature_item['S_ROW_COUNT'] = $view_signature_i;
 $view_signature_item['S_NUM_ROWS'] = $view_signature_count;

?>
  <tr> 
        <td class="spacerow" colspan="2" height="1"></td>
  </tr>
  <tr>
        <td colspan="2" align="left" class="row2"><span class="gensmall"><?php echo isset($this->vars['SIGNATURE']) ? $this->vars['SIGNATURE'] : $this->lang('SIGNATURE'); ?></span></td>
  </tr>
<?php

} // END view_signature

if(isset($view_signature_item)) { unset($view_signature_item); } 

?>
  <tr>
        <td colspan="2" align="center" class="cat"><span class="genmed"><a href="javascript:window.close();" class="genmed"><?php echo isset($this->vars['L_CLOSE_WINDOW']) ? $this->vars['L_CLOSE_WINDOW'] : $this->lang('L_CLOSE_WINDOW'); ?></a></span></td>
  </tr>
</table>
<?php

} // END switch_view_profile

if(isset($switch_view_profile_item)) { unset($switch_view_profile_item); } 

?>