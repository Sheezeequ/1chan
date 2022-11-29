<?php

// eXtreme Styles mod cache. Generated on Wed, 08 Jul 2015 09:14:38 -0400 (time=1436361278)

?><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav"><a href="<?php echo isset($this->vars['U_PORTAL']) ? $this->vars['U_PORTAL'] : $this->lang('U_PORTAL'); ?>" class="nav"><?php echo isset($this->vars['L_PORTAL']) ? $this->vars['L_PORTAL'] : $this->lang('L_PORTAL'); ?></a> -> <a href="<?php echo isset($this->vars['U_KB']) ? $this->vars['U_KB'] : $this->lang('U_KB'); ?>" class="nav"><?php echo isset($this->vars['L_KB']) ? $this->vars['L_KB'] : $this->lang('L_KB'); ?></a></td>
	</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr> 
  	   <th class="thCornerL" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?>&nbsp;</th>
	   <th width="50" class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_ARTICLES']) ? $this->vars['L_ARTICLES'] : $this->lang('L_ARTICLES'); ?>&nbsp;</th>
  </tr>
  <?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
  <tr> 
  	   <td class="row1" height="50"><span class="forumlink"><?php echo isset($catrow_item['CATEGORY']) ? $catrow_item['CATEGORY'] : ''; ?></span><br /><span class="genmed"><?php echo isset($catrow_item['CAT_DESCRIPTION']) ? $catrow_item['CAT_DESCRIPTION'] : ''; ?></span></td>
	   <td class="row2" align="center" valign="middle"><span class="genmed"><?php echo isset($catrow_item['CAT_ARTICLES']) ? $catrow_item['CAT_ARTICLES'] : ''; ?></span></td>
  </tr>
  <?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
  <tr>
  	  <td class="cat" colspan="2">&nbsp;</td>
  </tr>
</table>
<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right"><br /><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
