<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:22:10 -0500 (time=1323530530)

?>
<h1><?php echo isset($this->vars['L_LICENSETITLE']) ? $this->vars['L_LICENSETITLE'] : $this->lang('L_LICENSETITLE'); ?></h1>

<p><?php echo isset($this->vars['L_LICENSEEXPLAIN']) ? $this->vars['L_LICENSEEXPLAIN'] : $this->lang('L_LICENSEEXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_DELETE_LIC_ACTION']) ? $this->vars['S_DELETE_LIC_ACTION'] : $this->lang('S_DELETE_LIC_ACTION'); ?>" method="post"><table width="100%" cellpadding="3" cellspacing="1" class="forumline">
  <tr>
	<th  class="thHead"><?php echo isset($this->vars['L_LICENSETITLE']) ? $this->vars['L_LICENSETITLE'] : $this->lang('L_LICENSETITLE'); ?></th>
  </tr>
	<?php echo isset($this->vars['ROW']) ? $this->vars['ROW'] : $this->lang('ROW'); ?>
  <tr>
	<td align="center" class="cat" >
	<input class="liteoption" type="submit" value="add" name="license">&nbsp;

	<input class="liteoption" type="submit" value="edit" name="license">&nbsp;

	<input class="liteoption" type="submit" value="delete" name="license">
	</td>
  </tr>
</table>
</form>
