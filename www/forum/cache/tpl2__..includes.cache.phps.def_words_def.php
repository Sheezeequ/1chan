<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:07:41 -0500 (time=1323526061)

?>/***************************************************************************
 *						def_words_def.php
 *						-----------------
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
// $word_replacement : words/replacements
// -----------------
//--------------------------------------------------------------------------------------------------

$word_replacement = array();
<?php

$word_count = ( isset($this->_tpldata['word.']) ) ?  sizeof($this->_tpldata['word.']) : 0;
for ($word_i = 0; $word_i < $word_count; $word_i++)
{
 $word_item = &$this->_tpldata['word.'][$word_i];
 $word_item['S_ROW_COUNT'] = $word_i;
 $word_item['S_NUM_ROWS'] = $word_count;

?>
$word_replacement['<?php echo isset($word_item['WORD']) ? $word_item['WORD'] : ''; ?>'] = '<?php echo isset($word_item['REPLACEMENT']) ? $word_item['REPLACEMENT'] : ''; ?>';
<?php

} // END word

if(isset($word_item)) { unset($word_item); } 

?>