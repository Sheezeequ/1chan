<?php

// eXtreme Styles mod cache. Generated on Wed, 17 Jun 2015 23:30:32 -0400 (time=1434598232)

?><script language="JavaScript" type="text/javascript">
<!--
function checkForm() {
	formErrors = false;    

	if (document.linkdata.link_title.value == '') {
		formErrors = '<?php echo isset($this->vars['L_LINK_TITLE']) ? $this->vars['L_LINK_TITLE'] : $this->lang('L_LINK_TITLE'); ?>';	
	} else if (document.linkdata.link_url.value == 'http://') {
		formErrors = '<?php echo isset($this->vars['L_LINK_URL']) ? $this->vars['L_LINK_URL'] : $this->lang('L_LINK_URL'); ?>';	
	} else if (document.linkdata.link_logo_src.value == 'http://' ) {
		formErrors = '<?php echo isset($this->vars['L_LINK_LOGO_SRC']) ? $this->vars['L_LINK_LOGO_SRC'] : $this->lang('L_LINK_LOGO_SRC'); ?>';	
	} else if (document.linkdata.link_category.value == '' ) {
		formErrors = '<?php echo isset($this->vars['L_LINK_CATEGORY']) ? $this->vars['L_LINK_CATEGORY'] : $this->lang('L_LINK_CATEGORY'); ?>';	
	} else if (document.linkdata.link_desc.value == '' ) {
		formErrors = '<?php echo isset($this->vars['L_LINK_DESC']) ? $this->vars['L_LINK_DESC'] : $this->lang('L_LINK_DESC'); ?>';	
	}

	if (formErrors) {
		alert('<?php echo isset($this->vars['L_PLEASE_ENTER_YOUR']) ? $this->vars['L_PLEASE_ENTER_YOUR'] : $this->lang('L_PLEASE_ENTER_YOUR'); ?>' + formErrors);
		return false;
	} 
	
	return true;
}
//-->
</script>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="right" style="font-weight: bold;font-size: 11px; color: orange">&#149;&nbsp;<a href="<?php echo isset($this->vars['U_SITE_LINKS']) ? $this->vars['U_SITE_LINKS'] : $this->lang('U_SITE_LINKS'); ?>"><?php echo isset($this->vars['LINKS_HOME']) ? $this->vars['LINKS_HOME'] : $this->lang('LINKS_HOME'); ?></a>&nbsp;&nbsp;&#149;&nbsp;<a href="<?php echo isset($this->vars['U_SITE_SEARCH']) ? $this->vars['U_SITE_SEARCH'] : $this->lang('U_SITE_SEARCH'); ?>"><?php echo isset($this->vars['L_SEARCH_SITE']) ? $this->vars['L_SEARCH_SITE'] : $this->lang('L_SEARCH_SITE'); ?></a>&nbsp;&nbsp;&#149;&nbsp;<a href="<?php echo isset($this->vars['U_SITE_TOP']) ? $this->vars['U_SITE_TOP'] : $this->lang('U_SITE_TOP'); ?>"><?php echo isset($this->vars['L_DESCEND_BY_HITS']) ? $this->vars['L_DESCEND_BY_HITS'] : $this->lang('L_DESCEND_BY_HITS'); ?></a>&nbsp;&nbsp;&#149;&nbsp;<a href="<?php echo isset($this->vars['U_SITE_NEW']) ? $this->vars['U_SITE_NEW'] : $this->lang('U_SITE_NEW'); ?>"><?php echo isset($this->vars['L_DESCEND_BY_JOINDATE']) ? $this->vars['L_DESCEND_BY_JOINDATE'] : $this->lang('L_DESCEND_BY_JOINDATE'); ?></a>
	  </td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr> 
	  <?php

$lock_count = ( isset($this->_tpldata['lock.']) ) ?  sizeof($this->_tpldata['lock.']) : 0;
for ($lock_i = 0; $lock_i < $lock_count; $lock_i++)
{
 $lock_item = &$this->_tpldata['lock.'][$lock_i];
 $lock_item['S_ROW_COUNT'] = $lock_i;
 $lock_item['S_NUM_ROWS'] = $lock_count;

?>
	  <td width="10%" nowrap="nowrap" valign="top">
		<?php

$logout_count = ( isset($lock_item['logout.']) ) ? sizeof($lock_item['logout.']) : 0;
for ($logout_i = 0; $logout_i < $logout_count; $logout_i++)
{
 $logout_item = &$lock_item['logout.'][$logout_i];
 $logout_item['S_ROW_COUNT'] = $logout_i;
 $logout_item['S_NUM_ROWS'] = $logout_count;

?>
		<table border="0" cellpadding="0" cellspacing="1" width="100%" class="forumline">
		  <tr> 
			<th class="thHead" align="left">&nbsp;<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?></th>
		  </tr>
		<tr><td class="row1">
		<form method="post" action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>">
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
		<tr>
			<td class="row1">
			  <span class="gensmall"><?php echo isset($this->vars['L_LINK_REGISTER_GUEST_RULE']) ? $this->vars['L_LINK_REGISTER_GUEST_RULE'] : $this->lang('L_LINK_REGISTER_GUEST_RULE'); ?></span>
			</td>
		  </tr>
		  <tr>
			<td class="row1">
			  <span class="gensmall"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span><br /><input type="text" name="username" size="25" maxlength="40" value="" class="post" />
			</td>
		  </tr>
		  <tr>
			<td class="row1">
			  <span class="gensmall"><?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>:<br /><input type="password" name="password" size="25" maxlength="32" class="post" />
			</td>
		  </tr>
		  <tr> 
			<td class="row1"><span class="gensmall"><?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?>: <input type="checkbox" name="autologin" /></span></td>
		  </tr>
		  <tr>
			<td class="row1" align="center"><input type="hidden" name="redirect" value="<?php echo isset($this->vars['U_SITE_LINKS']) ? $this->vars['U_SITE_LINKS'] : $this->lang('U_SITE_LINKS'); ?>" /><input type="submit" name="login" class="mainoption" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" /><br /><br /><span class="gensmall"><a href="<?php echo isset($this->vars['U_REGISTER']) ? $this->vars['U_REGISTER'] : $this->lang('U_REGISTER'); ?>"><?php echo isset($this->vars['L_REGISTER']) ? $this->vars['L_REGISTER'] : $this->lang('L_REGISTER'); ?></a></span></td>
		  </tr>
		</table></form>
		</td></tr>
		</table>
		<?php

} // END logout

if(isset($logout_item)) { unset($logout_item); } 

?>
		
		<?php

$submit_count = ( isset($lock_item['submit.']) ) ? sizeof($lock_item['submit.']) : 0;
for ($submit_i = 0; $submit_i < $submit_count; $submit_i++)
{
 $submit_item = &$lock_item['submit.'][$submit_i];
 $submit_item['S_ROW_COUNT'] = $submit_i;
 $submit_item['S_NUM_ROWS'] = $submit_count;

?>
		<table border="0" cellpadding="0" cellspacing="1" width="100%" class="forumline">
		  <tr> 
			<th class="thHead" align="left">&nbsp;<?php echo isset($this->vars['L_LINK_REGISTER']) ? $this->vars['L_LINK_REGISTER'] : $this->lang('L_LINK_REGISTER'); ?></th>
		  </tr>
		<form name="linkdata" method="post" action="<?php echo isset($this->vars['U_LINK_REG']) ? $this->vars['U_LINK_REG'] : $this->lang('U_LINK_REG'); ?>">
		<tr><td class="row1">
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
			<tr> 
			  <td class="row1"><span class="gensmall">
			  <?php echo isset($this->vars['L_LINK_REGISTER_RULE']) ? $this->vars['L_LINK_REGISTER_RULE'] : $this->lang('L_LINK_REGISTER_RULE'); ?>
			  </span></td>
			</tr>			
			<tr> 
			  <td class="row1"><br /><span class="gensmall"><?php echo isset($this->vars['L_LINK_TITLE']) ? $this->vars['L_LINK_TITLE'] : $this->lang('L_LINK_TITLE'); ?></span><br /><input type="text" name="link_title" value="" size="15" maxlength="20" class="post" style="width:160px"></td>
			</tr>
			<tr> 
			  <td class="row1"><span class="gensmall"><?php echo isset($this->vars['L_LINK_URL']) ? $this->vars['L_LINK_URL'] : $this->lang('L_LINK_URL'); ?></span><br /><input type="text" name="link_url" value="http://" size="15" maxlength="100" style="width:160px" class="post"></td>
			</tr>
			<tr> 
			  <td class="row1"><span class="gensmall"><?php echo isset($this->vars['L_LINK_LOGO_SRC']) ? $this->vars['L_LINK_LOGO_SRC'] : $this->lang('L_LINK_LOGO_SRC'); ?></span><br /><input type="text" size="15" maxlength="120" style="width:160px" name="link_logo_src" value="http://" class="post"><br /><span class="gensmall">[<a href="javascript: void(0)" onclick="var img_src=document.linkdata.link_logo_src.value;if(img_src=='http://' || img_src=='') img_src='images/links/no_logo88a.gif';_preview=window.open(img_src, '_preview', 'toolbar=no,width=200,height=100,top=300,left=300');"><?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?></a>]</span><br /><br /></td>
			</tr>
			<tr> 
			  <td class="row1">
			  	<span class="gensmall"><?php echo isset($this->vars['L_LINK_CATEGORY']) ? $this->vars['L_LINK_CATEGORY'] : $this->lang('L_LINK_CATEGORY'); ?></span><br />
				<select name="link_category" style="width:160px">
				  <option value="" selected>----------------</option><?php echo isset($this->vars['LINK_CAT_OPTION']) ? $this->vars['LINK_CAT_OPTION'] : $this->lang('LINK_CAT_OPTION'); ?>
				</select>
			  </td>
			</tr>
			<tr> 
			  <td class="row1"><span class="gensmall"><?php echo isset($this->vars['L_LINK_DESC']) ? $this->vars['L_LINK_DESC'] : $this->lang('L_LINK_DESC'); ?></span><br /><textarea name="link_desc" cols="15" rows="4" class="post" style="width:160px" maxsize="120" wrap="VIRTUAL"></textarea></td>
			</tr>
			
		</table>
		</td></tr>
		<tr> 
		  <td class="cat" align="center"><input type="submit" name="addlink" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="liteoption"></td>
		</tr>
		</form>
		</table>
		<?php

} // END submit

if(isset($submit_item)) { unset($submit_item); } 

?>
	  </td>
	  <td width="10" nowrap="nowrap">&nbsp;</td>
	  <?php

} // END lock

if(isset($lock_item)) { unset($lock_item); } 

?>
	  <td width="100%" nowrap="nowrap" valign="top">
		<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
		<tr>
			  <th class="thHead" align="left" colspan="2">&nbsp;<?php echo isset($this->vars['L_LINK_TITLE1']) ? $this->vars['L_LINK_TITLE1'] : $this->lang('L_LINK_TITLE1'); ?></th>
		</tr>
		<?php

$linkrow_count = ( isset($this->_tpldata['linkrow.']) ) ?  sizeof($this->_tpldata['linkrow.']) : 0;
for ($linkrow_i = 0; $linkrow_i < $linkrow_count; $linkrow_i++)
{
 $linkrow_item = &$this->_tpldata['linkrow.'][$linkrow_i];
 $linkrow_item['S_ROW_COUNT'] = $linkrow_i;
 $linkrow_item['S_NUM_ROWS'] = $linkrow_count;

?>
		<tr>
		<td rowspan="2" valign="top" align="right" class="<?php echo isset($linkrow_item['ROW_CLASS']) ? $linkrow_item['ROW_CLASS'] : ''; ?>">&nbsp;<?php echo isset($linkrow_item['LINK_LOGO']) ? $linkrow_item['LINK_LOGO'] : ''; ?>&nbsp;</td>
		<td width="100%" class="<?php echo isset($linkrow_item['ROW_CLASS']) ? $linkrow_item['ROW_CLASS'] : ''; ?>">
		<a href="<?php echo isset($linkrow_item['LINK_URL']) ? $linkrow_item['LINK_URL'] : ''; ?>" target="_blank" class="genmed"><?php echo isset($linkrow_item['LINK_TITLE']) ? $linkrow_item['LINK_TITLE'] : ''; ?></a><br /><span class="genmed"><?php echo isset($linkrow_item['LINK_DESC']) ? $linkrow_item['LINK_DESC'] : ''; ?></span>
		</td>
		</tr>
		<tr>
		<td class="<?php echo isset($linkrow_item['ROW_CLASS']) ? $linkrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="genmed"><?php echo isset($this->vars['L_LINK_CATEGORY']) ? $this->vars['L_LINK_CATEGORY'] : $this->lang('L_LINK_CATEGORY'); ?>: <?php echo isset($linkrow_item['LINK_CATEGORY']) ? $linkrow_item['LINK_CATEGORY'] : ''; ?>&nbsp;&nbsp;,&nbsp;<?php echo isset($this->vars['L_LINK_JOINED']) ? $this->vars['L_LINK_JOINED'] : $this->lang('L_LINK_JOINED'); ?>: <?php echo isset($linkrow_item['LINK_JOINED']) ? $linkrow_item['LINK_JOINED'] : ''; ?>&nbsp;&nbsp;,&nbsp;<?php echo isset($this->vars['L_LINK_HITS']) ? $this->vars['L_LINK_HITS'] : $this->lang('L_LINK_HITS'); ?>: <?php echo isset($linkrow_item['LINK_HITS']) ? $linkrow_item['LINK_HITS'] : ''; ?>&nbsp;&nbsp;,&nbsp;<?php echo isset($this->vars['L_LINK_SUBMITER']) ? $this->vars['L_LINK_SUBMITER'] : $this->lang('L_LINK_SUBMITER'); ?>&nbsp;<?php echo isset($linkrow_item['U_LINK_USER']) ? $linkrow_item['U_LINK_USER'] : ''; ?></span></td>
		</tr>
		<?php

} // END linkrow

if(isset($linkrow_item)) { unset($linkrow_item); } 

?>
		</table><br />
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		  <tr> 
			<td valign="top"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
			<td align="right"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
		  </tr>
		</table>	  
	  </td>
	</tr> 
</table>