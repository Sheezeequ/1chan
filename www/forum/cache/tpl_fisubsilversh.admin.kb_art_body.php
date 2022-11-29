<?php

// eXtreme Styles mod cache. Generated on Mon, 26 Dec 2011 11:26:12 -0500 (time=1324916772)

?>
<h1><?php echo isset($this->vars['L_KB_ART_TITLE']) ? $this->vars['L_KB_ART_TITLE'] : $this->lang('L_KB_ART_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_KB_ART_DESCRIPTION']) ? $this->vars['L_KB_ART_DESCRIPTION'] : $this->lang('L_KB_ART_DESCRIPTION'); ?></p>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<td class="catHead" colspan="5" align="center"><span class="cattitle"><?php echo isset($this->vars['L_EDITED']) ? $this->vars['L_EDITED'] : $this->lang('L_EDITED'); ?></span></td>
	</tr>
	<tr>
	  <th class="thCornerL" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE']) ? $this->vars['L_ARTICLE'] : $this->lang('L_ARTICLE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_CAT']) ? $this->vars['L_ARTICLE_CAT'] : $this->lang('L_ARTICLE_CAT'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_TYPE']) ? $this->vars['L_ARTICLE_TYPE'] : $this->lang('L_ARTICLE_TYPE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_AUTHOR']) ? $this->vars['L_ARTICLE_AUTHOR'] : $this->lang('L_ARTICLE_AUTHOR'); ?></th>
	  <th class="thCornerR" nowrap="nowrap"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>	  
	</tr>
	<?php

$editrow_count = ( isset($this->_tpldata['editrow.']) ) ?  sizeof($this->_tpldata['editrow.']) : 0;
for ($editrow_i = 0; $editrow_i < $editrow_count; $editrow_i++)
{
 $editrow_item = &$this->_tpldata['editrow.'][$editrow_i];
 $editrow_item['S_ROW_COUNT'] = $editrow_i;
 $editrow_item['S_NUM_ROWS'] = $editrow_count;

?>
	<tr> 	
	  <td class="row1"><span class="gen"><?php echo isset($editrow_item['ARTICLE']) ? $editrow_item['ARTICLE'] : ''; ?><br /><?php echo isset($notrow_item['ARTICLE_DESCRIPTION']) ? $notrow_item['ARTICLE_DESCRIPTION'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($editrow_item['CATEGORY']) ? $editrow_item['CATEGORY'] : ''; ?></span></td>
	  <td class="row3"><span class="gen"><?php echo isset($editrow_item['ARTICLE_TYPE']) ? $editrow_item['ARTICLE_TYPE'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($editrow_item['ARTICLE_AUTHOR']) ? $editrow_item['ARTICLE_AUTHOR'] : ''; ?></span></td>
	  <td class="row3" align="center"><?php echo isset($editrow_item['U_APPROVE']) ? $editrow_item['U_APPROVE'] : ''; ?> <?php echo isset($editrow_item['U_DELETE']) ? $editrow_item['U_DELETE'] : ''; ?></td>
	</tr>
	<?php

} // END editrow

if(isset($editrow_item)) { unset($editrow_item); } 

?>
</table>
<br />

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<td class="catHead" colspan="5" align="center"><span class="cattitle"><?php echo isset($this->vars['L_NOT_APPROVED']) ? $this->vars['L_NOT_APPROVED'] : $this->lang('L_NOT_APPROVED'); ?></span></td>
	</tr>
	<tr>
	  <th class="thCornerL" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE']) ? $this->vars['L_ARTICLE'] : $this->lang('L_ARTICLE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_CAT']) ? $this->vars['L_ARTICLE_CAT'] : $this->lang('L_ARTICLE_CAT'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_TYPE']) ? $this->vars['L_ARTICLE_TYPE'] : $this->lang('L_ARTICLE_TYPE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_AUTHOR']) ? $this->vars['L_ARTICLE_AUTHOR'] : $this->lang('L_ARTICLE_AUTHOR'); ?></th>
	  <th class="thCornerR" nowrap="nowrap"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>	  
	</tr>
	<?php

$notrow_count = ( isset($this->_tpldata['notrow.']) ) ?  sizeof($this->_tpldata['notrow.']) : 0;
for ($notrow_i = 0; $notrow_i < $notrow_count; $notrow_i++)
{
 $notrow_item = &$this->_tpldata['notrow.'][$notrow_i];
 $notrow_item['S_ROW_COUNT'] = $notrow_i;
 $notrow_item['S_NUM_ROWS'] = $notrow_count;

?>
	<tr> 	
	  <td class="row1"><span class="gen"><?php echo isset($notrow_item['ARTICLE']) ? $notrow_item['ARTICLE'] : ''; ?><br /><?php echo isset($notrow_item['ARTICLE_DESCRIPTION']) ? $notrow_item['ARTICLE_DESCRIPTION'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($notrow_item['CATEGORY']) ? $notrow_item['CATEGORY'] : ''; ?></span></td>
	  <td class="row3"><span class="gen"><?php echo isset($notrow_item['ARTICLE_TYPE']) ? $notrow_item['ARTICLE_TYPE'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($notrow_item['ARTICLE_AUTHOR']) ? $notrow_item['ARTICLE_AUTHOR'] : ''; ?></span></td>
	  <td class="row3" align="center"><?php echo isset($notrow_item['U_APPROVE']) ? $notrow_item['U_APPROVE'] : ''; ?> <?php echo isset($notrow_item['U_DELETE']) ? $notrow_item['U_DELETE'] : ''; ?></td>
	</tr>
	<?php

} // END notrow

if(isset($notrow_item)) { unset($notrow_item); } 

?>
</table>
<br />

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<td class="catHead" colspan="5" align="center"><span class="cattitle"><?php echo isset($this->vars['L_APPROVED']) ? $this->vars['L_APPROVED'] : $this->lang('L_APPROVED'); ?></span></td>
	</tr>
	<tr>
	  <th class="thCornerL" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE']) ? $this->vars['L_ARTICLE'] : $this->lang('L_ARTICLE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_CAT']) ? $this->vars['L_ARTICLE_CAT'] : $this->lang('L_ARTICLE_CAT'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_TYPE']) ? $this->vars['L_ARTICLE_TYPE'] : $this->lang('L_ARTICLE_TYPE'); ?></th>
	  <th class="thTop" nowrap="nowrap"><?php echo isset($this->vars['L_ARTICLE_AUTHOR']) ? $this->vars['L_ARTICLE_AUTHOR'] : $this->lang('L_ARTICLE_AUTHOR'); ?></th>
	  <th class="thCornerR" nowrap="nowrap"><?php echo isset($this->vars['L_ACTION']) ? $this->vars['L_ACTION'] : $this->lang('L_ACTION'); ?></th>	  
	</tr>
	<?php

$approverow_count = ( isset($this->_tpldata['approverow.']) ) ?  sizeof($this->_tpldata['approverow.']) : 0;
for ($approverow_i = 0; $approverow_i < $approverow_count; $approverow_i++)
{
 $approverow_item = &$this->_tpldata['approverow.'][$approverow_i];
 $approverow_item['S_ROW_COUNT'] = $approverow_i;
 $approverow_item['S_NUM_ROWS'] = $approverow_count;

?>
	<tr> 	
	  <td class="row1"><span class="gen"><?php echo isset($approverow_item['ARTICLE']) ? $approverow_item['ARTICLE'] : ''; ?><br /><?php echo isset($approverow_item['ARTICLE_DESCRIPTION']) ? $approverow_item['ARTICLE_DESCRIPTION'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($approverow_item['CATEGORY']) ? $approverow_item['CATEGORY'] : ''; ?></span></td>
	  <td class="row3"><span class="gen"><?php echo isset($approverow_item['ARTICLE_TYPE']) ? $approverow_item['ARTICLE_TYPE'] : ''; ?></span></td>
	  <td class="row2"><span class="gen"><?php echo isset($approverow_item['ARTICLE_AUTHOR']) ? $approverow_item['ARTICLE_AUTHOR'] : ''; ?></span></td>
	  <td class="row3" align="center"><?php echo isset($approverow_item['U_APPROVE']) ? $approverow_item['U_APPROVE'] : ''; ?> <?php echo isset($approverow_item['U_DELETE']) ? $approverow_item['U_DELETE'] : ''; ?></td>
	</tr>
	<?php

} // END approverow

if(isset($approverow_item)) { unset($approverow_item); } 

?>
</table> 
<br clear="all" />