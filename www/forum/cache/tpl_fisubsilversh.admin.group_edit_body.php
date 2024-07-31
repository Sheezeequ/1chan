<?php

// eXtreme Styles mod cache. Generated on Thu, 25 Jul 2024 10:58:18 +0300 (time=1721894298)

?><script type="text/javascript" src="../includes/javascript/ajax_searchfunctions.js"></script>
<script type="text/javascript">
<!--
last_username = '<?php echo isset($this->vars['GROUP_MODERATOR']) ? $this->vars['GROUP_MODERATOR'] : $this->lang('GROUP_MODERATOR'); ?>';
//-->
</script>
<div class="maintitle"><?php echo isset($this->vars['L_GROUP_TITLE']) ? $this->vars['L_GROUP_TITLE'] : $this->lang('L_GROUP_TITLE'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_GROUP_ACTION']) ? $this->vars['S_GROUP_ACTION'] : $this->lang('S_GROUP_ACTION'); ?>" method="post" name="post">
<table border="0" cellpadding="3" cellspacing="1" class="forumline" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_GROUP_EDIT_DELETE']) ? $this->vars['L_GROUP_EDIT_DELETE'] : $this->lang('L_GROUP_EDIT_DELETE'); ?></th>
</tr>
<tr> 
<td class="row1" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_ITEMS_REQUIRED']) ? $this->vars['L_ITEMS_REQUIRED'] : $this->lang('L_ITEMS_REQUIRED'); ?></span></td>
</tr>
<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_GROUP_NAME']) ? $this->vars['L_GROUP_NAME'] : $this->lang('L_GROUP_NAME'); ?>:</td>
<td class="row2" width="62%"> 
<input type="text" name="group_name" size="35" maxlength="40" value="<?php echo isset($this->vars['GROUP_NAME']) ? $this->vars['GROUP_NAME'] : $this->lang('GROUP_NAME'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_GROUP_DESCRIPTION']) ? $this->vars['L_GROUP_DESCRIPTION'] : $this->lang('L_GROUP_DESCRIPTION'); ?>:</td>
<td class="row2"> 
<textarea name="group_description" rows="5" cols="30" style="width: 350px" class="post"><?php echo isset($this->vars['GROUP_DESCRIPTION']) ? $this->vars['GROUP_DESCRIPTION'] : $this->lang('GROUP_DESCRIPTION'); ?></textarea>
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_GROUP_MODERATOR']) ? $this->vars['L_GROUP_MODERATOR'] : $this->lang('L_GROUP_MODERATOR'); ?>:</td>
<td class="row2"> 
<input type="text" class="post" name="username" id="username" maxlength="50" size="20" value="<?php echo isset($this->vars['GROUP_MODERATOR']) ? $this->vars['GROUP_MODERATOR'] : $this->lang('GROUP_MODERATOR'); ?>" onkeyup="AJAXUsernameSearch(this.value, 0);" /><span id="username_list" style="display:none;"><span id="username_select">&nbsp;</span>&nbsp;</span>
&nbsp; 
<input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="button" onclick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
</td>
</tr>
<tr id="username_error_tbl" style="display:none;">
<td class="row1">&nbsp;</td>
<td class="row2" id="username_error_text">&nbsp;</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_GROUP_STATUS']) ? $this->vars['L_GROUP_STATUS'] : $this->lang('L_GROUP_STATUS'); ?>:</td>
<td class="row2"> 
<input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_OPEN_TYPE']) ? $this->vars['S_GROUP_OPEN_TYPE'] : $this->lang('S_GROUP_OPEN_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_OPEN_CHECKED']) ? $this->vars['S_GROUP_OPEN_CHECKED'] : $this->lang('S_GROUP_OPEN_CHECKED'); ?> />
<?php echo isset($this->vars['L_GROUP_OPEN']) ? $this->vars['L_GROUP_OPEN'] : $this->lang('L_GROUP_OPEN'); ?> &nbsp;&nbsp; 
<input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_CLOSED_TYPE']) ? $this->vars['S_GROUP_CLOSED_TYPE'] : $this->lang('S_GROUP_CLOSED_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_CLOSED_CHECKED']) ? $this->vars['S_GROUP_CLOSED_CHECKED'] : $this->lang('S_GROUP_CLOSED_CHECKED'); ?> />
<?php echo isset($this->vars['L_GROUP_CLOSED']) ? $this->vars['L_GROUP_CLOSED'] : $this->lang('L_GROUP_CLOSED'); ?> &nbsp;&nbsp; 
<input type="radio" name="group_type" value="<?php echo isset($this->vars['S_GROUP_HIDDEN_TYPE']) ? $this->vars['S_GROUP_HIDDEN_TYPE'] : $this->lang('S_GROUP_HIDDEN_TYPE'); ?>" <?php echo isset($this->vars['S_GROUP_HIDDEN_CHECKED']) ? $this->vars['S_GROUP_HIDDEN_CHECKED'] : $this->lang('S_GROUP_HIDDEN_CHECKED'); ?> />
<?php echo isset($this->vars['L_GROUP_HIDDEN']) ? $this->vars['L_GROUP_HIDDEN'] : $this->lang('L_GROUP_HIDDEN'); ?></td>
</tr>
<?php

$group_edit_count = ( isset($this->_tpldata['group_edit.']) ) ?  sizeof($this->_tpldata['group_edit.']) : 0;
for ($group_edit_i = 0; $group_edit_i < $group_edit_count; $group_edit_i++)
{
 $group_edit_item = &$this->_tpldata['group_edit.'][$group_edit_i];
 $group_edit_item['S_ROW_COUNT'] = $group_edit_i;
 $group_edit_item['S_NUM_ROWS'] = $group_edit_count;

?>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_DELETE_MODERATOR']) ? $this->vars['L_DELETE_MODERATOR'] : $this->lang('L_DELETE_MODERATOR'); ?><br />
<span class="gensmall"><?php echo isset($this->vars['L_DELETE_MODERATOR_EXPLAIN']) ? $this->vars['L_DELETE_MODERATOR_EXPLAIN'] : $this->lang('L_DELETE_MODERATOR_EXPLAIN'); ?></span></td>
<td class="row2"> 
<input type="checkbox" name="delete_old_moderator" value="1" />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_GROUP_DELETE']) ? $this->vars['L_GROUP_DELETE'] : $this->lang('L_GROUP_DELETE'); ?>:</td>
<td class="row2"> 
<input type="checkbox" name="group_delete" value="1" />
<?php echo isset($this->vars['L_GROUP_DELETE_CHECK']) ? $this->vars['L_GROUP_DELETE_CHECK'] : $this->lang('L_GROUP_DELETE_CHECK'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_UPLOAD_QUOTA']) ? $this->vars['L_UPLOAD_QUOTA'] : $this->lang('L_UPLOAD_QUOTA'); ?></td>
<td class="row2"><?php echo isset($this->vars['S_SELECT_UPLOAD_QUOTA']) ? $this->vars['S_SELECT_UPLOAD_QUOTA'] : $this->lang('S_SELECT_UPLOAD_QUOTA'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_PM_QUOTA']) ? $this->vars['L_PM_QUOTA'] : $this->lang('L_PM_QUOTA'); ?></span></td>
<td class="row2"><?php echo isset($this->vars['S_SELECT_PM_QUOTA']) ? $this->vars['S_SELECT_PM_QUOTA'] : $this->lang('S_SELECT_PM_QUOTA'); ?></td>
</tr>
<?php

} // END group_edit

if(isset($group_edit_item)) { unset($group_edit_item); } 

?>
<tr> 
<td class="cat" colspan="2" align="center"> 
<input type="submit" name="group_update" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="button" />
</td>
</tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
</form>
<br />
<br />