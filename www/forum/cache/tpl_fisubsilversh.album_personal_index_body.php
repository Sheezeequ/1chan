<?php

// eXtreme Styles mod cache. Generated on Wed, 04 Jan 2012 15:08:19 -0500 (time=1325707699)

?>  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> -> <a href="<?php echo isset($this->vars['U_ALBUM']) ? $this->vars['U_ALBUM'] : $this->lang('U_ALBUM'); ?>" class="nav"><?php echo isset($this->vars['L_ALBUM']) ? $this->vars['L_ALBUM'] : $this->lang('L_ALBUM'); ?></a></span></td>
	  <td align="right" nowrap="nowrap"><span class="gensmall">
  		<form name="search" action="album_search.php">
			<span class="gensmall"><?php echo isset($this->vars['L_SEARCH_FOR']) ? $this->vars['L_SEARCH_FOR'] : $this->lang('L_SEARCH_FOR'); ?>: &nbsp;&nbsp;
			<select name="mode">
				<option value="user"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></option>
				<option value="name"><?php echo isset($this->vars['L_NAME']) ? $this->vars['L_NAME'] : $this->lang('L_NAME'); ?></option>
				<option value="desc"><?php echo isset($this->vars['L_DESCRIPTION']) ? $this->vars['L_DESCRIPTION'] : $this->lang('L_DESCRIPTION'); ?></option>
			</select>
			&nbsp;&nbsp;<?php echo isset($this->vars['L_THAT_CONTAINS']) ? $this->vars['L_THAT_CONTAINS'] : $this->lang('L_THAT_CONTAINS'); ?>:&nbsp;&nbsp; <input type="text" name="search" maxlength="20">&nbsp;&nbsp;<input type="submit" value="Go"></span>
		</form>
		</td>
	</tr>
  </table>
  <!-- Album Category Hierarchy : begin -->
<?php echo isset($this->vars['ALBUM_BOARD_INDEX']) ? $this->vars['ALBUM_BOARD_INDEX'] : $this->lang('ALBUM_BOARD_INDEX'); ?>    
<!-- Album Category Hierarchy : end -->
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	  <th width="100%" height="25" nowrap="nowrap" class="thCornerL">&nbsp;<?php echo isset($this->vars['L_USERS_PERSONAL_GALLERIES']) ? $this->vars['L_USERS_PERSONAL_GALLERIES'] : $this->lang('L_USERS_PERSONAL_GALLERIES'); ?>&nbsp;</th>
	  <th class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?>&nbsp;</th>
	  <th class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_PICS']) ? $this->vars['L_PICS'] : $this->lang('L_PICS'); ?>&nbsp;</th>
	</tr>
	<?php

$memberrow_count = ( isset($this->_tpldata['memberrow.']) ) ?  sizeof($this->_tpldata['memberrow.']) : 0;
for ($memberrow_i = 0; $memberrow_i < $memberrow_count; $memberrow_i++)
{
 $memberrow_item = &$this->_tpldata['memberrow.'][$memberrow_i];
 $memberrow_item['S_ROW_COUNT'] = $memberrow_i;
 $memberrow_item['S_NUM_ROWS'] = $memberrow_count;

?>
	<tr>
	  <td height="28" class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><a href="<?php echo isset($memberrow_item['U_VIEWGALLERY']) ? $memberrow_item['U_VIEWGALLERY'] : ''; ?>" class="gen"><?php echo isset($memberrow_item['USERNAME']) ? $memberrow_item['USERNAME'] : ''; ?></a></span></td>
	  <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center" nowrap="nowrap"><span class="gensmall">&nbsp;<?php echo isset($memberrow_item['JOINED']) ? $memberrow_item['JOINED'] : ''; ?>&nbsp;</span></td>
	  <td class="<?php echo isset($memberrow_item['ROW_CLASS']) ? $memberrow_item['ROW_CLASS'] : ''; ?>" align="center"><span class="gensmall"><?php echo isset($memberrow_item['PICS']) ? $memberrow_item['PICS'] : ''; ?></span></td>
	</tr>
	<?php

} // END memberrow

if(isset($memberrow_item)) { unset($memberrow_item); } 

?>
  <tr>
	<td class="cat" colspan="3" align="center"h>
	<form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
		<span class="gensmall"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>:&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>:&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp;
		   <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SORT']) ? $this->vars['L_SORT'] : $this->lang('L_SORT'); ?>" class="liteoption" />
		</span></form>
	</td>
  </tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
	<td align="right"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>


<br />

<!--
You must keep my copyright notice visible with its original content
-->
<div align="center" style="font-family: Verdana; font-size: 10px; letter-spacing: -1px">Powered by Photo Album Addon <?php echo isset($this->vars['ALBUM_VERSION']) ? $this->vars['ALBUM_VERSION'] : $this->lang('ALBUM_VERSION'); ?> &copy; 2002-2003 <a href="http://smartor.is-root.com" target="_blank">Smartor</a> with Volodymyr (CLowN) Skoryk's SP1 addon</div>
