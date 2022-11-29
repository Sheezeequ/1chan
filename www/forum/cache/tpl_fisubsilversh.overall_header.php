<?php

// eXtreme Styles mod cache. Generated on Tue, 29 Nov 2022 16:06:47 +0300 (time=1669727207)

?><?php echo '<?'; ?>xml version="1.0" encoding="<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo isset($this->vars['S_CONTENT_DIRECTION']) ? $this->vars['S_CONTENT_DIRECTION'] : $this->lang('S_CONTENT_DIRECTION'); ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<?php echo isset($this->vars['META']) ? $this->vars['META'] : $this->lang('META'); ?>
<?php echo isset($this->vars['NAV_LINKS']) ? $this->vars['NAV_LINKS'] : $this->lang('NAV_LINKS'); ?>
<title><?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?> :: <?php echo isset($this->vars['PAGE_TITLE']) ? $this->vars['PAGE_TITLE'] : $this->lang('PAGE_TITLE'); ?></title>
<link rel="stylesheet" href="templates/fisubsilversh/<?php echo isset($this->vars['T_HEAD_STYLESHEET']) ? $this->vars['T_HEAD_STYLESHEET'] : $this->lang('T_HEAD_STYLESHEET'); ?>" type="text/css" />
<link rel="shortcut icon" href="./favicon.ico" />
<script language="JavaScript" type="text/javascript" src="includes/toggle_display.js"></script>
<?php

$switch_enable_pm_popup_count = ( isset($this->_tpldata['switch_enable_pm_popup.']) ) ?  sizeof($this->_tpldata['switch_enable_pm_popup.']) : 0;
for ($switch_enable_pm_popup_i = 0; $switch_enable_pm_popup_i < $switch_enable_pm_popup_count; $switch_enable_pm_popup_i++)
{
 $switch_enable_pm_popup_item = &$this->_tpldata['switch_enable_pm_popup.'][$switch_enable_pm_popup_i];
 $switch_enable_pm_popup_item['S_ROW_COUNT'] = $switch_enable_pm_popup_i;
 $switch_enable_pm_popup_item['S_NUM_ROWS'] = $switch_enable_pm_popup_count;

?>
<script type="text/javascript">
<!--
	if ( <?php echo isset($this->vars['PRIVATE_MESSAGE_NEW_FLAG']) ? $this->vars['PRIVATE_MESSAGE_NEW_FLAG'] : $this->lang('PRIVATE_MESSAGE_NEW_FLAG'); ?> )
	{
		window.open('<?php echo isset($this->vars['U_PRIVATEMSGS_POPUP']) ? $this->vars['U_PRIVATEMSGS_POPUP'] : $this->lang('U_PRIVATEMSGS_POPUP'); ?>', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<?php

} // END switch_enable_pm_popup

if(isset($switch_enable_pm_popup_item)) { unset($switch_enable_pm_popup_item); } 

?>
<script type="text/javascript">
<!--
var phpEx = '<?php echo isset($this->vars['PHPEX']) ? $this->vars['PHPEX'] : $this->lang('PHPEX'); ?>';
var POST_FORUM_URL = '<?php echo isset($this->vars['POST_FORUM_URL']) ? $this->vars['POST_FORUM_URL'] : $this->lang('POST_FORUM_URL'); ?>';
var POST_TOPIC_URL = '<?php echo isset($this->vars['POST_TOPIC_URL']) ? $this->vars['POST_TOPIC_URL'] : $this->lang('POST_TOPIC_URL'); ?>';
var POST_POST_URL = '<?php echo isset($this->vars['POST_POST_URL']) ? $this->vars['POST_POST_URL'] : $this->lang('POST_POST_URL'); ?>';
var ajax_page_charset = '<?php echo isset($this->vars['S_CONTENT_ENCODING']) ? $this->vars['S_CONTENT_ENCODING'] : $this->lang('S_CONTENT_ENCODING'); ?>';
var S_SID = '<?php echo isset($this->vars['S_SID']) ? $this->vars['S_SID'] : $this->lang('S_SID'); ?>';
var ajax_core_defined = 0;
var phpbb_root_path = '<?php echo isset($this->vars['PHPBB_ROOT_PATH']) ? $this->vars['PHPBB_ROOT_PATH'] : $this->lang('PHPBB_ROOT_PATH'); ?>';
//-->
</script>

<script type="text/javascript" src="includes/javascript/ajax_core.js"></script>

<script language="Javascript" type="text/javascript"> 
<!-- 
function setCheckboxes(theForm, elementName, isChecked)
{
    var chkboxes = document.forms[theForm].elements[elementName];
    var count = chkboxes.length;

    if (count) 
	{
        for (var i = 0; i < count; i++) 
		{
            chkboxes[i].checked = isChecked;
    	}
    } 
	else 
	{
    	chkboxes.checked = isChecked;
    } 

    return true;
} 
//--> 
</script>
<!-- Start add - Birthday MOD -->
<?php echo isset($this->vars['GREETING_POPUP']) ? $this->vars['GREETING_POPUP'] : $this->lang('GREETING_POPUP'); ?>
<!-- End add - Birthday MOD -->
<script type="text/javascript">
<!--
window.status = "<?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?>";
// -->
</script>
<!-- Start add - Protect user account MOD -->
<?php echo isset($this->vars['PASSWD_POPUP']) ? $this->vars['PASSWD_POPUP'] : $this->lang('PASSWD_POPUP'); ?>
<!-- End add - Protect user account MOD -->
<?php

$switch_absence_count = ( isset($this->_tpldata['switch_absence.']) ) ?  sizeof($this->_tpldata['switch_absence.']) : 0;
for ($switch_absence_i = 0; $switch_absence_i < $switch_absence_count; $switch_absence_i++)
{
 $switch_absence_item = &$this->_tpldata['switch_absence.'][$switch_absence_i];
 $switch_absence_item['S_ROW_COUNT'] = $switch_absence_i;
 $switch_absence_item['S_NUM_ROWS'] = $switch_absence_count;

?>
<script language="Javascript" type="text/javascript">
<!--
	window.open('<?php echo isset($this->vars['U_ABSENCE_POPUP']) ? $this->vars['U_ABSENCE_POPUP'] : $this->lang('U_ABSENCE_POPUP'); ?>', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
//-->
</script>
<?php

} // END switch_absence

if(isset($switch_absence_item)) { unset($switch_absence_item); } 

?>
</head>
<body>
<!-- Start add - Complete banner MOD -->
<?php

$switch_Banners_count = ( isset($this->_tpldata['switch_Banners.']) ) ?  sizeof($this->_tpldata['switch_Banners.']) : 0;
for ($switch_Banners_i = 0; $switch_Banners_i < $switch_Banners_count; $switch_Banners_i++)
{
 $switch_Banners_item = &$this->_tpldata['switch_Banners.'][$switch_Banners_i];
 $switch_Banners_item['S_ROW_COUNT'] = $switch_Banners_i;
 $switch_Banners_item['S_NUM_ROWS'] = $switch_Banners_count;

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="20%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_1_IMG']) ? $this->vars['BANNER_1_IMG'] : $this->lang('BANNER_1_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_2_IMG']) ? $this->vars['BANNER_2_IMG'] : $this->lang('BANNER_2_IMG'); ?></div></td></tr>
</table>
</td>
<td width="60%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_3_IMG']) ? $this->vars['BANNER_3_IMG'] : $this->lang('BANNER_3_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_4_IMG']) ? $this->vars['BANNER_4_IMG'] : $this->lang('BANNER_4_IMG'); ?></div></td></tr>
</table>
</td>
<td width="20%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_5_IMG']) ? $this->vars['BANNER_5_IMG'] : $this->lang('BANNER_5_IMG'); ?></div></td></tr>
<tr><td><div align="center"><?php echo isset($this->vars['BANNER_6_IMG']) ? $this->vars['BANNER_6_IMG'] : $this->lang('BANNER_6_IMG'); ?></div></td></tr>
</table>
</td>
</tr>
</table>
<?php

} // END switch_Banners

if(isset($switch_Banners_item)) { unset($switch_Banners_item); } 

?>
<!-- End add - Complete banner MOD -->
<a name="top" id="top"></a>
<table class="bodyline" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td>
<table class="topbkg" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr> 
<td><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><img src="templates/fisubsilversh/images/phpbb2_logo.jpg" border="0" alt="<?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?>" title="<?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?>" width="240" height="110" /></a></td>
<td align="center" width="100%"><?php echo isset($this->vars['BANNER_0_IMG']) ? $this->vars['BANNER_0_IMG'] : $this->lang('BANNER_0_IMG'); ?></td><td><a href="<?php echo isset($this->vars['U_PORTAL']) ? $this->vars['U_PORTAL'] : $this->lang('U_PORTAL'); ?>"><img src="templates/fisubsilversh/images/phpbb2_logor.jpg" border="0" alt="<?php echo isset($this->vars['L_HOME']) ? $this->vars['L_HOME'] : $this->lang('L_HOME'); ?>" title="<?php echo isset($this->vars['L_HOME']) ? $this->vars['L_HOME'] : $this->lang('L_HOME'); ?>" width="140" height="110" /></a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr> 
<td align="center" class="topnav">&nbsp;<a href="<?php echo isset($this->vars['U_FAQ']) ? $this->vars['U_FAQ'] : $this->lang('U_FAQ'); ?>"><?php echo isset($this->vars['L_FAQ']) ? $this->vars['L_FAQ'] : $this->lang('L_FAQ'); ?></a>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_SEARCH']) ? $this->vars['U_SEARCH'] : $this->lang('U_SEARCH'); ?>"><?php echo isset($this->vars['L_SEARCH']) ? $this->vars['L_SEARCH'] : $this->lang('L_SEARCH'); ?></a>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_PREFERENCES']) ? $this->vars['U_PREFERENCES'] : $this->lang('U_PREFERENCES'); ?>"><?php echo isset($this->vars['L_PREFERENCES']) ? $this->vars['L_PREFERENCES'] : $this->lang('L_PREFERENCES'); ?></a>
<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_BOOKMARKS']) ? $this->vars['U_BOOKMARKS'] : $this->lang('U_BOOKMARKS'); ?>"><?php echo isset($this->vars['L_BOOKMARKS']) ? $this->vars['L_BOOKMARKS'] : $this->lang('L_BOOKMARKS'); ?></a>
&nbsp; &#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_SEARCH_NEW']) ? $this->vars['U_SEARCH_NEW'] : $this->lang('U_SEARCH_NEW'); ?>"><?php echo isset($this->vars['L_SEARCH_NEW2']) ? $this->vars['L_SEARCH_NEW2'] : $this->lang('L_SEARCH_NEW2'); ?></a>
<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_GROUP_CP']) ? $this->vars['U_GROUP_CP'] : $this->lang('U_GROUP_CP'); ?>"><?php echo isset($this->vars['L_USERGROUPS']) ? $this->vars['L_USERGROUPS'] : $this->lang('L_USERGROUPS'); ?></a>
<?php

$switch_user_logged_out_count = ( isset($this->_tpldata['switch_user_logged_out.']) ) ?  sizeof($this->_tpldata['switch_user_logged_out.']) : 0;
for ($switch_user_logged_out_i = 0; $switch_user_logged_out_i < $switch_user_logged_out_count; $switch_user_logged_out_i++)
{
 $switch_user_logged_out_item = &$this->_tpldata['switch_user_logged_out.'][$switch_user_logged_out_i];
 $switch_user_logged_out_item['S_ROW_COUNT'] = $switch_user_logged_out_i;
 $switch_user_logged_out_item['S_NUM_ROWS'] = $switch_user_logged_out_count;

?>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_REGISTER']) ? $this->vars['U_REGISTER'] : $this->lang('U_REGISTER'); ?>"><?php echo isset($this->vars['L_REGISTER']) ? $this->vars['L_REGISTER'] : $this->lang('L_REGISTER'); ?></a>
<?php

} // END switch_user_logged_out

if(isset($switch_user_logged_out_item)) { unset($switch_user_logged_out_item); } 

?>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_PROFILE']) ? $this->vars['U_PROFILE'] : $this->lang('U_PROFILE'); ?>"><?php echo isset($this->vars['L_PROFILE']) ? $this->vars['L_PROFILE'] : $this->lang('L_PROFILE'); ?></a>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_PRIVATEMSGS']) ? $this->vars['U_PRIVATEMSGS'] : $this->lang('U_PRIVATEMSGS'); ?>"><?php echo isset($this->vars['PRIVATE_MESSAGE_INFO']) ? $this->vars['PRIVATE_MESSAGE_INFO'] : $this->lang('PRIVATE_MESSAGE_INFO'); ?></a>
&nbsp;&#8226;&nbsp;
<a href="<?php echo isset($this->vars['U_LOGIN_LOGOUT']) ? $this->vars['U_LOGIN_LOGOUT'] : $this->lang('U_LOGIN_LOGOUT'); ?>"><?php echo isset($this->vars['L_LOGIN_LOGOUT']) ? $this->vars['L_LOGIN_LOGOUT'] : $this->lang('L_LOGIN_LOGOUT'); ?></a></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php echo isset($this->vars['CALENDAR_BOX']) ? $this->vars['CALENDAR_BOX'] : $this->lang('CALENDAR_BOX'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>