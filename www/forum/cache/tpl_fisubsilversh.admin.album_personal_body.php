<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:22 -0500 (time=1323533662)

?><h1><?php echo isset($this->vars['L_ALBUM_PERSONAL_TITLE']) ? $this->vars['L_ALBUM_PERSONAL_TITLE'] : $this->lang('L_ALBUM_PERSONAL_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_ALBUM_PERSONAL_EXPLAIN']) ? $this->vars['L_ALBUM_PERSONAL_EXPLAIN'] : $this->lang('L_ALBUM_PERSONAL_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ALBUM_ACTION']) ? $this->vars['S_ALBUM_ACTION'] : $this->lang('S_ALBUM_ACTION'); ?>" method="post">
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thHead" height="25" colspan="2"><?php echo isset($this->vars['L_GROUP_CONTROL']) ? $this->vars['L_GROUP_CONTROL'] : $this->lang('L_GROUP_CONTROL'); ?></th>
	</tr>
	<?php

$creation_grouprow_count = ( isset($this->_tpldata['creation_grouprow.']) ) ?  sizeof($this->_tpldata['creation_grouprow.']) : 0;
for ($creation_grouprow_i = 0; $creation_grouprow_i < $creation_grouprow_count; $creation_grouprow_i++)
{
 $creation_grouprow_item = &$this->_tpldata['creation_grouprow.'][$creation_grouprow_i];
 $creation_grouprow_item['S_ROW_COUNT'] = $creation_grouprow_i;
 $creation_grouprow_item['S_NUM_ROWS'] = $creation_grouprow_count;

?>
	<tr>
		<td class="row1" align="center" height="28"><span class="gen"><?php echo isset($creation_grouprow_item['GROUP_NAME']) ? $creation_grouprow_item['GROUP_NAME'] : ''; ?></span></td>
		<td class="row2" align="center"><input name="private[]" type="checkbox" <?php echo isset($creation_grouprow_item['PRIVATE_CHECKED']) ? $creation_grouprow_item['PRIVATE_CHECKED'] : ''; ?> value="<?php echo isset($creation_grouprow_item['GROUP_ID']) ? $creation_grouprow_item['GROUP_ID'] : ''; ?>" /></td>
	</tr>
	<?php

} // END creation_grouprow

if(isset($creation_grouprow_item)) { unset($creation_grouprow_item); } 

?>
	<tr>
		<td class="catHead" height="25" align="center" nowrap="nowrap" colspan="2"><input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" /></td>
	</tr>
</table>

<p><?php echo isset($this->vars['L_ALBUM_AUTH_EXPLAIN']) ? $this->vars['L_ALBUM_AUTH_EXPLAIN'] : $this->lang('L_ALBUM_AUTH_EXPLAIN'); ?></p>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thCornerL" height="25" nowrap="nowrap"><?php echo isset($this->vars['L_GROUPS']) ? $this->vars['L_GROUPS'] : $this->lang('L_GROUPS'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_VIEW']) ? $this->vars['L_VIEW'] : $this->lang('L_VIEW'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_UPLOAD']) ? $this->vars['L_UPLOAD'] : $this->lang('L_UPLOAD'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_RATE']) ? $this->vars['L_RATE'] : $this->lang('L_RATE'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_COMMENT']) ? $this->vars['L_COMMENT'] : $this->lang('L_COMMENT'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?></th>
		<th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?></th>
		<th class="thCornerR" nowrap="nowrap"><?php echo isset($this->vars['L_IS_MODERATOR']) ? $this->vars['L_IS_MODERATOR'] : $this->lang('L_IS_MODERATOR'); ?></th>
	</tr>
	<?php

$grouprow_count = ( isset($this->_tpldata['grouprow.']) ) ?  sizeof($this->_tpldata['grouprow.']) : 0;
for ($grouprow_i = 0; $grouprow_i < $grouprow_count; $grouprow_i++)
{
 $grouprow_item = &$this->_tpldata['grouprow.'][$grouprow_i];
 $grouprow_item['S_ROW_COUNT'] = $grouprow_i;
 $grouprow_item['S_NUM_ROWS'] = $grouprow_count;

?>
	<tr>
		<td class="row1" align="center" height="28"><span class="gen"><?php echo isset($grouprow_item['GROUP_NAME']) ? $grouprow_item['GROUP_NAME'] : ''; ?></span></td>
		<td class="row2" align="center">
		<input name="view[]" type="checkbox" <?php echo isset($grouprow_item['VIEW_CHECKED']) ? $grouprow_item['VIEW_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="upload[]" type="checkbox" <?php echo isset($grouprow_item['UPLOAD_CHECKED']) ? $grouprow_item['UPLOAD_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="rate[]" type="checkbox" <?php echo isset($grouprow_item['RATE_CHECKED']) ? $grouprow_item['RATE_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="comment[]" type="checkbox" <?php echo isset($grouprow_item['COMMENT_CHECKED']) ? $grouprow_item['COMMENT_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="edit[]" type="checkbox" <?php echo isset($grouprow_item['EDIT_CHECKED']) ? $grouprow_item['EDIT_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="delete[]" type="checkbox" <?php echo isset($grouprow_item['DELETE_CHECKED']) ? $grouprow_item['DELETE_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
		<td class="row2" align="center">
		<input name="moderator[]" type="checkbox" <?php echo isset($grouprow_item['MODERATOR_CHECKED']) ? $grouprow_item['MODERATOR_CHECKED'] : ''; ?> value="<?php echo isset($grouprow_item['GROUP_ID']) ? $grouprow_item['GROUP_ID'] : ''; ?>" />
		</td>
	</tr>
	<?php

} // END grouprow

if(isset($grouprow_item)) { unset($grouprow_item); } 

?>
	<tr>
		<td class="cat" height="25" align="center" colspan="8"><input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" />&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" /></td>
	</tr>
</table>
</form>

<br />