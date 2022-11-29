<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:07:41 -0500 (time=1323526061)

?>/***************************************************************************
 *						def_themes_def.php
 *						------------------
 *	begin			: 12/11/2003
 *	copyright		: Ptirhiik
 *	email			: admin@rpgnet-fr.com
 *
 *	version			: 1.0.0 - 12/11/2003
 *
 *	last update		: <?php echo isset($this->vars['TIME']) ? $this->vars['TIME'] : $this->lang('TIME'); ?> by <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

//--------------------------------------------------------------------------------------------------
//
// $themes_style : templates
// --------------
//--------------------------------------------------------------------------------------------------

$themes_style = array(
		<?php

$theme_count = ( isset($this->_tpldata['theme.']) ) ?  sizeof($this->_tpldata['theme.']) : 0;
for ($theme_i = 0; $theme_i < $theme_count; $theme_i++)
{
 $theme_item = &$this->_tpldata['theme.'][$theme_i];
 $theme_item['S_ROW_COUNT'] = $theme_i;
 $theme_item['S_NUM_ROWS'] = $theme_count;

?>
		<?php echo isset($theme_item['ID']) ? $theme_item['ID'] : ''; ?> => array(<?php echo isset($theme_item['CELLS']) ? $theme_item['CELLS'] : ''; ?>),
		<?php

} // END theme

if(isset($theme_item)) { unset($theme_item); } 

?>
);