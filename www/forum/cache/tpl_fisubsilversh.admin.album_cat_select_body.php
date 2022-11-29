<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 11:14:22 -0500 (time=1323533662)

?><h1><?php echo isset($this->vars['L_ALBUM_AUTH_TITLE']) ? $this->vars['L_ALBUM_AUTH_TITLE'] : $this->lang('L_ALBUM_AUTH_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_ALBUM_AUTH_EXPLAIN']) ? $this->vars['L_ALBUM_AUTH_EXPLAIN'] : $this->lang('L_ALBUM_AUTH_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_ALBUM_ACTION']) ? $this->vars['S_ALBUM_ACTION'] : $this->lang('S_ALBUM_ACTION'); ?>" method="post">
<table width="50%" align="center" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
		<th class="thHead" colspan="2" height="28"><?php echo isset($this->vars['L_SELECT_CAT']) ? $this->vars['L_SELECT_CAT'] : $this->lang('L_SELECT_CAT'); ?></th>
	</tr>
	<tr>
		<td class="row1" height="25"><select name="cat_id"><?php echo isset($this->vars['CAT_SELECT_TITLE']) ? $this->vars['CAT_SELECT_TITLE'] : $this->lang('CAT_SELECT_TITLE'); ?></select></td>
		<td class="row1" width="100%" align="center"><input name="submit" type="submit" value="<?php echo isset($this->vars['L_LOOK_UP_CAT']) ? $this->vars['L_LOOK_UP_CAT'] : $this->lang('L_LOOK_UP_CAT'); ?>" class="liteoption" />
		</td>
		</tr>
</table>
</form>

<br />