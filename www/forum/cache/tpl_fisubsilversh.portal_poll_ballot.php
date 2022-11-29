<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:24:06 -0500 (time=1323527046)

?>    <table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
        <tr>
		<th><?php echo isset($this->vars['L_POLL']) ? $this->vars['L_POLL'] : $this->lang('L_POLL'); ?></th>
	  </tr>
			<tr>
				<td class="row1" colspan="2"><br clear="all" /><form method="POST" action="<?php echo isset($this->vars['S_POLL_ACTION']) ? $this->vars['S_POLL_ACTION'] : $this->lang('S_POLL_ACTION'); ?>"><table cellspacing="0" cellpadding="4" border="0" align="center">
					<tr>
						<td class="row1" align="center"><span class="gensmall"><?php echo isset($this->vars['POLL_QUESTION']) ? $this->vars['POLL_QUESTION'] : $this->lang('POLL_QUESTION'); ?></span></td>
					</tr>
					<tr>
						<td align="center"><table cellspacing="0" cellpadding="2" border="0">
							<?php

$poll_option_count = ( isset($this->_tpldata['poll_option.']) ) ?  sizeof($this->_tpldata['poll_option.']) : 0;
for ($poll_option_i = 0; $poll_option_i < $poll_option_count; $poll_option_i++)
{
 $poll_option_item = &$this->_tpldata['poll_option.'][$poll_option_i];
 $poll_option_item['S_ROW_COUNT'] = $poll_option_i;
 $poll_option_item['S_NUM_ROWS'] = $poll_option_count;

?>
							<tr>
								<td><input type="radio" name="vote_id" value="<?php echo isset($poll_option_item['POLL_OPTION_ID']) ? $poll_option_item['POLL_OPTION_ID'] : ''; ?>" />&nbsp;</td>
								<td><span class="gensmall"><?php echo isset($poll_option_item['POLL_OPTION_CAPTION']) ? $poll_option_item['POLL_OPTION_CAPTION'] : ''; ?></span></td>
							</tr>
							<?php

} // END poll_option

if(isset($poll_option_item)) { unset($poll_option_item); } 

?>
						</table></td>
					</tr>
					<tr>
						<td  class="row1" align="center">
						 <?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
						 <?php echo isset($this->vars['L_SUBMIT_VOTE']) ? $this->vars['L_SUBMIT_VOTE'] : $this->lang('L_SUBMIT_VOTE'); ?>
						 <?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>		
						 <?php

$switch_user_logged_out_count = ( isset($this->_tpldata['switch_user_logged_out.']) ) ?  sizeof($this->_tpldata['switch_user_logged_out.']) : 0;
for ($switch_user_logged_out_i = 0; $switch_user_logged_out_i < $switch_user_logged_out_count; $switch_user_logged_out_i++)
{
 $switch_user_logged_out_item = &$this->_tpldata['switch_user_logged_out.'][$switch_user_logged_out_i];
 $switch_user_logged_out_item['S_ROW_COUNT'] = $switch_user_logged_out_i;
 $switch_user_logged_out_item['S_NUM_ROWS'] = $switch_user_logged_out_count;

?>
						 <span class="gensmall"><?php echo isset($this->vars['LOGIN_TO_VOTE']) ? $this->vars['LOGIN_TO_VOTE'] : $this->lang('LOGIN_TO_VOTE'); ?><span>
						 <?php

} // END switch_user_logged_out

if(isset($switch_user_logged_out_item)) { unset($switch_user_logged_out_item); } 

?>
		  				</td>
					</tr>
				</table><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?></form></td>
			</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<br />