<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:36:48 -0500 (time=1323527808)

?>﻿<?php echo '<?'; ?>xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<response>
	<?php

$tag_count = ( isset($this->_tpldata['tag.']) ) ?  sizeof($this->_tpldata['tag.']) : 0;
for ($tag_i = 0; $tag_i < $tag_count; $tag_i++)
{
 $tag_item = &$this->_tpldata['tag.'][$tag_i];
 $tag_item['S_ROW_COUNT'] = $tag_i;
 $tag_item['S_NUM_ROWS'] = $tag_count;

?>
	<<?php echo isset($tag_item['TAGNAME']) ? $tag_item['TAGNAME'] : ''; ?>><?php echo isset($tag_item['VALUE']) ? $tag_item['VALUE'] : ''; ?></<?php echo isset($tag_item['TAGNAME']) ? $tag_item['TAGNAME'] : ''; ?>>
	<?php

} // END tag

if(isset($tag_item)) { unset($tag_item); } 

?>
</response>