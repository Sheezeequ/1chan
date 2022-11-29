<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:13:30 -0500 (time=1323533610)

?>
<h1><?php echo isset($this->vars['L_BANNER_TITLE']) ? $this->vars['L_BANNER_TITLE'] : $this->lang('L_BANNER_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_BANNER_TEXT']) ? $this->vars['L_BANNER_TEXT'] : $this->lang('L_BANNER_TEXT'); ?></p>

<form method="post" action="<?php echo isset($this->vars['S_BANNER_ACTION']) ? $this->vars['S_BANNER_ACTION'] : $this->lang('S_BANNER_ACTION'); ?>"><table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
	<tr>
		<th class="thCornerL"><?php echo isset($this->vars['L_BANNER_COMMENT']) ? $this->vars['L_BANNER_COMMENT'] : $this->lang('L_BANNER_COMMENT'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_BANNER_ACTIVATED']) ? $this->vars['L_BANNER_ACTIVATED'] : $this->lang('L_BANNER_ACTIVATED'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_TIME_TYPE']) ? $this->vars['L_TIME_TYPE'] : $this->lang('L_TIME_TYPE'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_BANNER_CLICKS']) ? $this->vars['L_BANNER_CLICKS'] : $this->lang('L_BANNER_CLICKS'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_BANNER_VIEW']) ? $this->vars['L_BANNER_VIEW'] : $this->lang('L_BANNER_VIEW'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_BANNER_SPOT']) ? $this->vars['L_BANNER_SPOT'] : $this->lang('L_BANNER_SPOT'); ?></th>
		<th class="thTop"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></th>
		<th class="thCornerR"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></th>
	</tr>
	<?php

$banners_count = ( isset($this->_tpldata['banners.']) ) ?  sizeof($this->_tpldata['banners.']) : 0;
for ($banners_i = 0; $banners_i < $banners_count; $banners_i++)
{
 $banners_item = &$this->_tpldata['banners.'][$banners_i];
 $banners_item['S_ROW_COUNT'] = $banners_i;
 $banners_item['S_NUM_ROWS'] = $banners_count;

?>
	<tr>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($banners_item['BANNER_COMMENT']) ? $banners_item['BANNER_COMMENT'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($banners_item['BANNER_IS_ACTIVE']) ? $banners_item['BANNER_IS_ACTIVE'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><b><?php echo isset($banners_item['L_RULE_TYPE']) ? $banners_item['L_RULE_TYPE'] : ''; ?></b><?php echo isset($banners_item['RULE_BEGIN']) ? $banners_item['RULE_BEGIN'] : ''; ?><?php echo isset($banners_item['RULE_END']) ? $banners_item['RULE_END'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($banners_item['BANNER_CLICKS']) ? $banners_item['BANNER_CLICKS'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($banners_item['BANNER_VIEW']) ? $banners_item['BANNER_VIEW'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($banners_item['BANNER_SPOT']) ? $banners_item['BANNER_SPOT'] : ''; ?></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($banners_item['U_BANNER_EDIT']) ? $banners_item['U_BANNER_EDIT'] : ''; ?>"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></a></td>
		<td class="<?php echo isset($banners_item['ROW_CLASS']) ? $banners_item['ROW_CLASS'] : ''; ?>" align="center"><a href="<?php echo isset($banners_item['U_BANNER_DELETE']) ? $banners_item['U_BANNER_DELETE'] : ''; ?>"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></a></td>
	</tr>
	<?php

} // END banners

if(isset($banners_item)) { unset($banners_item); } 

?>			
	<tr>
		<td class="cat" align="center" colspan="8">
		<input type="submit" class="mainoption" name="add" value="<?php echo isset($this->vars['L_ADD_BANNER']) ? $this->vars['L_ADD_BANNER'] : $this->lang('L_ADD_BANNER'); ?>" /></td>
	</tr>
</table></form>
