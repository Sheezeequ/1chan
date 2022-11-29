<?php

// eXtreme Styles mod cache. Generated on Mon, 12 Dec 2011 06:08:17 -0500 (time=1323688097)

?><div class="maintitle"><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></div>
<br />
<div class="genmed"><?php echo isset($this->vars['L_RANKS_TEXT']) ? $this->vars['L_RANKS_TEXT'] : $this->lang('L_RANKS_TEXT'); ?></div>
<br />
<form action="<?php echo isset($this->vars['S_RANK_ACTION']) ? $this->vars['S_RANK_ACTION'] : $this->lang('S_RANK_ACTION'); ?>" method="post">
<table class="forumline" cellpadding="3" cellspacing="1" border="0" align="center">
<tr> 
<th colspan="2"><?php echo isset($this->vars['L_RANKS_TITLE']) ? $this->vars['L_RANKS_TITLE'] : $this->lang('L_RANKS_TITLE'); ?></th>
</tr>
<tr> 
<td class="row1" width="38%"><?php echo isset($this->vars['L_RANK_TITLE']) ? $this->vars['L_RANK_TITLE'] : $this->lang('L_RANK_TITLE'); ?>:</td>
<td class="row2" width="62%"> 
<input type="text" name="title" size="35" maxlength="40" value="<?php echo isset($this->vars['RANK']) ? $this->vars['RANK'] : $this->lang('RANK'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_RANK_SPECIAL']) ? $this->vars['L_RANK_SPECIAL'] : $this->lang('L_RANK_SPECIAL'); ?></td>
<td class="row2"> 
<input type="radio" name="special_rank" value="1" <?php echo isset($this->vars['SPECIAL_RANK']) ? $this->vars['SPECIAL_RANK'] : $this->lang('SPECIAL_RANK'); ?> />
<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?> &nbsp;&nbsp; 
<input type="radio" name="special_rank" value="0" <?php echo isset($this->vars['NOT_SPECIAL_RANK']) ? $this->vars['NOT_SPECIAL_RANK'] : $this->lang('NOT_SPECIAL_RANK'); ?> />
<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_RANK_MINIMUM']) ? $this->vars['L_RANK_MINIMUM'] : $this->lang('L_RANK_MINIMUM'); ?>:</td>
<td class="row2"> 
<input type="text" name="min_posts" size="5" maxlength="10" value="<?php echo isset($this->vars['MINIMUM']) ? $this->vars['MINIMUM'] : $this->lang('MINIMUM'); ?>" class="post" />
</td>
</tr>
<tr> 
<td class="row1"><?php echo isset($this->vars['L_RANK_IMAGE']) ? $this->vars['L_RANK_IMAGE'] : $this->lang('L_RANK_IMAGE'); ?>:<br />
<span class="gensmall"><?php echo isset($this->vars['L_RANK_IMAGE_EXPLAIN']) ? $this->vars['L_RANK_IMAGE_EXPLAIN'] : $this->lang('L_RANK_IMAGE_EXPLAIN'); ?></span></td>
<td class="row2"> 
<input type="text" name="rank_image" size="40" maxlength="255" value="<?php echo isset($this->vars['IMAGE']) ? $this->vars['IMAGE'] : $this->lang('IMAGE'); ?>" class="post" />
<br />
<?php echo isset($this->vars['IMAGE_DISPLAY']) ? $this->vars['IMAGE_DISPLAY'] : $this->lang('IMAGE_DISPLAY'); ?></td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"> 
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="button" />
</td>
</tr>
</table>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
</form>
<br />
