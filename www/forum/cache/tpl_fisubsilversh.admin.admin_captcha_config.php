<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 10:29:03 -0500 (time=1323530943)

?><h1><?php echo isset($this->vars['L_CAPTCHA_CONFIGURATION']) ? $this->vars['L_CAPTCHA_CONFIGURATION'] : $this->lang('L_CAPTCHA_CONFIGURATION'); ?></h1>

<p><?php echo isset($this->vars['L_CAPTCHA_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CAPTCHA_CONFIGURATION_EXPLAIN'] : $this->lang('L_CAPTCHA_CONFIGURATION_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_CAPTCHA_CONFIG_ACTION']) ? $this->vars['S_CAPTCHA_CONFIG_ACTION'] : $this->lang('S_CAPTCHA_CONFIG_ACTION'); ?>" method="post"><table width="100%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
	<tr>
	  <th class="thHead" colspan="2">&nbsp;</th>
	</tr>
	<tr>
		<td class="spacerow" colspan="2" align="center"><span class="gensmall"><?php echo isset($this->vars['L_VC_ACTIVE']) ? $this->vars['L_VC_ACTIVE'] : $this->lang('L_VC_ACTIVE'); ?></span></td>
	</tr>

	<tr>
		<td class="row1" colspan="2" align="center"><?php echo isset($this->vars['CAPTCHA_IMG']) ? $this->vars['CAPTCHA_IMG'] : $this->lang('CAPTCHA_IMG'); ?></td>
	</tr>

	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_WIDTH']) ? $this->vars['L_WIDTH'] : $this->lang('L_WIDTH'); ?></b></td>
		<td class="row2" width="50%"><input class="post" type="text" maxlength="3" size="4" name="width" value="<?php echo isset($this->vars['WIDTH']) ? $this->vars['WIDTH'] : $this->lang('WIDTH'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_HEIGHT']) ? $this->vars['L_HEIGHT'] : $this->lang('L_HEIGHT'); ?></b></td>
		<td class="row2"><input class="post" type="text" maxlength="3" size="4" name="height" value="<?php echo isset($this->vars['HEIGHT']) ? $this->vars['HEIGHT'] : $this->lang('HEIGHT'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_PRE_LETTERS']) ? $this->vars['L_PRE_LETTERS'] : $this->lang('L_PRE_LETTERS'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_PRE_LETTERS_EXPLAIN']) ? $this->vars['L_PRE_LETTERS_EXPLAIN'] : $this->lang('L_PRE_LETTERS_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" maxlength="3" size="4" name="pre_letters" value="<?php echo isset($this->vars['PRE_LETTERS']) ? $this->vars['PRE_LETTERS'] : $this->lang('PRE_LETTERS'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_GREAT_PRE_LETTERS']) ? $this->vars['L_GREAT_PRE_LETTERS'] : $this->lang('L_GREAT_PRE_LETTERS'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_GREAT_PRE_LETTERS_EXPLAIN']) ? $this->vars['L_GREAT_PRE_LETTERS_EXPLAIN'] : $this->lang('L_GREAT_PRE_LETTERS_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="radio" name="pre_letters_great" value="1" <?php echo isset($this->vars['S_GREAT_PRE_LETTERS_YES']) ? $this->vars['S_GREAT_PRE_LETTERS_YES'] : $this->lang('S_GREAT_PRE_LETTERS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="pre_letters_great" value="0" <?php echo isset($this->vars['S_GREAT_PRE_LETTERS_NO']) ? $this->vars['S_GREAT_PRE_LETTERS_NO'] : $this->lang('S_GREAT_PRE_LETTERS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_RND_FONT_PER_LETTER']) ? $this->vars['L_RND_FONT_PER_LETTER'] : $this->lang('L_RND_FONT_PER_LETTER'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_RND_FONT_PER_LETTER_EXPLAIN']) ? $this->vars['L_RND_FONT_PER_LETTER_EXPLAIN'] : $this->lang('L_RND_FONT_PER_LETTER_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="radio" name="font" value="1" <?php echo isset($this->vars['S_RND_FONT_PER_LETTER_YES']) ? $this->vars['S_RND_FONT_PER_LETTER_YES'] : $this->lang('S_RND_FONT_PER_LETTER_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="font" value="0" <?php echo isset($this->vars['S_RND_FONT_PER_LETTER_NO']) ? $this->vars['S_RND_FONT_PER_LETTER_NO'] : $this->lang('S_RND_FONT_PER_LETTER_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr>
		<td class="spacerow" colspan="2" align="center"><b><?php echo isset($this->vars['L_BACKGROUND_CONFIG']) ? $this->vars['L_BACKGROUND_CONFIG'] : $this->lang('L_BACKGROUND_CONFIG'); ?></b></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_BACKGROUND_COLOR']) ? $this->vars['L_BACKGROUND_COLOR'] : $this->lang('L_BACKGROUND_COLOR'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_BACKGROUND_COLOR_EXPLAIN']) ? $this->vars['L_BACKGROUND_COLOR_EXPLAIN'] : $this->lang('L_BACKGROUND_COLOR_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" maxlength="7" size="8" name="background_color" value="<?php echo isset($this->vars['BACKGROUND_COLOR']) ? $this->vars['BACKGROUND_COLOR'] : $this->lang('BACKGROUND_COLOR'); ?>" />&nbsp;<b style="background-color=<?php echo isset($this->vars['BACKGROUND_COLOR']) ? $this->vars['BACKGROUND_COLOR'] : $this->lang('BACKGROUND_COLOR'); ?>">&nbsp;&nbsp;&nbsp;</b></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_ALLOW_CHESS']) ? $this->vars['L_ALLOW_CHESS'] : $this->lang('L_ALLOW_CHESS'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_CHESS_EXPLAIN']) ? $this->vars['L_ALLOW_CHESS_EXPLAIN'] : $this->lang('L_ALLOW_CHESS_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="radio" name="chess" value="1" <?php echo isset($this->vars['S_ALLOW_CHESS_YES']) ? $this->vars['S_ALLOW_CHESS_YES'] : $this->lang('S_ALLOW_CHESS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="chess" value="0" <?php echo isset($this->vars['S_ALLOW_CHESS_NO']) ? $this->vars['S_ALLOW_CHESS_NO'] : $this->lang('S_ALLOW_CHESS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>&nbsp;&nbsp;<input type="radio" name="chess" value="2" <?php echo isset($this->vars['S_ALLOW_CHESS_RND']) ? $this->vars['S_ALLOW_CHESS_RND'] : $this->lang('S_ALLOW_CHESS_RND'); ?> /> <?php echo isset($this->vars['L_RANDOM']) ? $this->vars['L_RANDOM'] : $this->lang('L_RANDOM'); ?></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_ALLOW_ELLIPSES']) ? $this->vars['L_ALLOW_ELLIPSES'] : $this->lang('L_ALLOW_ELLIPSES'); ?></b></td>
		<td class="row2"><input type="radio" name="ellipses" value="1" <?php echo isset($this->vars['S_ALLOW_ELLIPSES_YES']) ? $this->vars['S_ALLOW_ELLIPSES_YES'] : $this->lang('S_ALLOW_ELLIPSES_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="ellipses" value="0" <?php echo isset($this->vars['S_ALLOW_ELLIPSES_NO']) ? $this->vars['S_ALLOW_ELLIPSES_NO'] : $this->lang('S_ALLOW_ELLIPSES_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>&nbsp;&nbsp;<input type="radio" name="ellipses" value="2" <?php echo isset($this->vars['S_ALLOW_ELLIPSES_RND']) ? $this->vars['S_ALLOW_ELLIPSES_RND'] : $this->lang('S_ALLOW_ELLIPSES_RND'); ?> /> <?php echo isset($this->vars['L_RANDOM']) ? $this->vars['L_RANDOM'] : $this->lang('L_RANDOM'); ?></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_ALLOW_ARCS']) ? $this->vars['L_ALLOW_ARCS'] : $this->lang('L_ALLOW_ARCS'); ?></b></td>
		<td class="row2"><input type="radio" name="arcs" value="1" <?php echo isset($this->vars['S_ALLOW_ARCS_YES']) ? $this->vars['S_ALLOW_ARCS_YES'] : $this->lang('S_ALLOW_ARCS_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="arcs" value="0" <?php echo isset($this->vars['S_ALLOW_ARCS_NO']) ? $this->vars['S_ALLOW_ARCS_NO'] : $this->lang('S_ALLOW_ARCS_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>&nbsp;&nbsp;<input type="radio" name="arcs" value="2" <?php echo isset($this->vars['S_ALLOW_ARCS_RND']) ? $this->vars['S_ALLOW_ARCS_RND'] : $this->lang('S_ALLOW_ARCS_RND'); ?> /> <?php echo isset($this->vars['L_RANDOM']) ? $this->vars['L_RANDOM'] : $this->lang('L_RANDOM'); ?></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_ALLOW_LINES']) ? $this->vars['L_ALLOW_LINES'] : $this->lang('L_ALLOW_LINES'); ?></b></td>
		<td class="row2"><input type="radio" name="lines" value="1" <?php echo isset($this->vars['S_ALLOW_LINES_YES']) ? $this->vars['S_ALLOW_LINES_YES'] : $this->lang('S_ALLOW_LINES_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="lines" value="0" <?php echo isset($this->vars['S_ALLOW_LINES_NO']) ? $this->vars['S_ALLOW_LINES_NO'] : $this->lang('S_ALLOW_LINES_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>&nbsp;&nbsp;<input type="radio" name="lines" value="2" <?php echo isset($this->vars['S_ALLOW_LINES_RND']) ? $this->vars['S_ALLOW_LINES_RND'] : $this->lang('S_ALLOW_LINES_RND'); ?> /> <?php echo isset($this->vars['L_RANDOM']) ? $this->vars['L_RANDOM'] : $this->lang('L_RANDOM'); ?></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_ALLOW_IMAGE']) ? $this->vars['L_ALLOW_IMAGE'] : $this->lang('L_ALLOW_IMAGE'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_ALLOW_IMAGE_EXPLAIN']) ? $this->vars['L_ALLOW_IMAGE_EXPLAIN'] : $this->lang('L_ALLOW_IMAGE_EXPLAIN'); ?></span></td>
		<td class="row2"><input type="radio" name="image" value="1" <?php echo isset($this->vars['S_ALLOW_IMAGE_YES']) ? $this->vars['S_ALLOW_IMAGE_YES'] : $this->lang('S_ALLOW_IMAGE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" name="image" value="0" <?php echo isset($this->vars['S_ALLOW_IMAGE_NO']) ? $this->vars['S_ALLOW_IMAGE_NO'] : $this->lang('S_ALLOW_IMAGE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></td>
	</tr>
	<tr> 
		<td class="spacerow" colspan="2" height="1"><img src="templates/fisubsilversh/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_FOREGROUND_LATTICE']) ? $this->vars['L_FOREGROUND_LATTICE'] : $this->lang('L_FOREGROUND_LATTICE'); ?></b>&nbsp;<span class="gensmall"><?php echo isset($this->vars['L_FOREGROUND_LATTICE_EXPLAIN']) ? $this->vars['L_FOREGROUND_LATTICE_EXPLAIN'] : $this->lang('L_FOREGROUND_LATTICE_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" maxlength="3" size="3" name="foreground_lattice_x" value="<?php echo isset($this->vars['LATTICE_X_LINES']) ? $this->vars['LATTICE_X_LINES'] : $this->lang('LATTICE_X_LINES'); ?>" /> x <input class="post" type="text" maxlength="3" size="3" name="foreground_lattice_y" value="<?php echo isset($this->vars['LATTICE_Y_LINES']) ? $this->vars['LATTICE_Y_LINES'] : $this->lang('LATTICE_Y_LINES'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_FOREGROUND_LATTICE_COLOR']) ? $this->vars['L_FOREGROUND_LATTICE_COLOR'] : $this->lang('L_FOREGROUND_LATTICE_COLOR'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_FOREGROUND_LATTICE_COLOR_EXPLAIN']) ? $this->vars['L_FOREGROUND_LATTICE_COLOR_EXPLAIN'] : $this->lang('L_FOREGROUND_LATTICE_COLOR_EXPLAIN'); ?></span></td>
		<td class="row2"><input class="post" type="text" maxlength="7" size="8" name="lattice_color" value="<?php echo isset($this->vars['LATTICE_COLOR']) ? $this->vars['LATTICE_COLOR'] : $this->lang('LATTICE_COLOR'); ?>" />&nbsp;<b style="background-color=<?php echo isset($this->vars['LATTICE_COLOR']) ? $this->vars['LATTICE_COLOR'] : $this->lang('LATTICE_COLOR'); ?>">&nbsp;&nbsp;&nbsp;</b></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_GAMMACORRECT']) ? $this->vars['L_GAMMACORRECT'] : $this->lang('L_GAMMACORRECT'); ?></b>&nbsp;<span class="gensmall"><?php echo isset($this->vars['L_GAMMACORRECT_EXPLAIN']) ? $this->vars['L_GAMMACORRECT_EXPLAIN'] : $this->lang('L_GAMMACORRECT_EXPLAIN'); ?></span></td>
		<td class="row2">&nbsp;1.0&nbsp;:&nbsp;<input class="post" type="text" maxlength="3" size="4" name="gammacorrect" value="<?php echo isset($this->vars['GAMMACORRECT']) ? $this->vars['GAMMACORRECT'] : $this->lang('GAMMACORRECT'); ?>" /></td>
	</tr>
	<tr>
		<td class="row1"><b><?php echo isset($this->vars['L_GENERATE_JPEG']) ? $this->vars['L_GENERATE_JPEG'] : $this->lang('L_GENERATE_JPEG'); ?></b><br /><span class="gensmall"><?php echo isset($this->vars['L_GENERATE_JPEG_EXPAIN']) ? $this->vars['L_GENERATE_JPEG_EXPAIN'] : $this->lang('L_GENERATE_JPEG_EXPAIN'); ?></span></td>
		<td class="row2">&nbsp;<input type="radio" name="jpeg" value="1" <?php echo isset($this->vars['S_JPEG_IMAGE_YES']) ? $this->vars['S_JPEG_IMAGE_YES'] : $this->lang('S_JPEG_IMAGE_YES'); ?> /> JPEG&nbsp;<b>·</b>&nbsp;<?php echo isset($this->vars['L_JPEG_QUALITY']) ? $this->vars['L_JPEG_QUALITY'] : $this->lang('L_JPEG_QUALITY'); ?>:&nbsp;<input class="post" type="text" maxlength="2" size="2" name="jpeg_quality" value="<?php echo isset($this->vars['JPEG_QUALITY']) ? $this->vars['JPEG_QUALITY'] : $this->lang('JPEG_QUALITY'); ?>" />&nbsp;%<br />
		&nbsp;<input type="radio" name="jpeg" value="0" <?php echo isset($this->vars['S_JPEG_IMAGE_NO']) ? $this->vars['S_JPEG_IMAGE_NO'] : $this->lang('S_JPEG_IMAGE_NO'); ?> /> PNG</td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" /></td>
	</tr>
</table></form>