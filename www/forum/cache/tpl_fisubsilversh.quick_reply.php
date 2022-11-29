<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Sep 2014 03:15:37 -0400 (time=1411974937)

?><?php

$quick_reply_count = ( isset($this->_tpldata['quick_reply.']) ) ?  sizeof($this->_tpldata['quick_reply.']) : 0;
for ($quick_reply_i = 0; $quick_reply_i < $quick_reply_count; $quick_reply_i++)
{
 $quick_reply_item = &$this->_tpldata['quick_reply.'][$quick_reply_i];
 $quick_reply_item['S_ROW_COUNT'] = $quick_reply_i;
 $quick_reply_item['S_NUM_ROWS'] = $quick_reply_count;

?>
<script language='JavaScript'>
	function openAllSmiles(){
		smiles = window.open('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', '_phpbbsmilies', 'HEIGHT=250,resizable=yes,scrollbars=yes,WIDTH=300');
		smiles.focus();
		return false;
	}
	
	function quoteSelection() {

		theSelection = false;
			if (window.getSelection)
			{
				theSelection = window.getSelection();
			}
			else if (document.getSelection)
			{
				theSelection = document.getSelection();
			}
			else if (document.selection)
			{
				theSelection = document.selection.createRange().text;
			}

		if (theSelection) {
			// Add tags around selection
					emoticon( '[quote]' + theSelection + '[/quote]\n');
			document.post.message.focus();
			theSelection = '';
			return;
			}
			else
			{
			alert('<?php echo isset($this->vars['L_NO_TEXT_SELECTED']) ? $this->vars['L_NO_TEXT_SELECTED'] : $this->lang('L_NO_TEXT_SELECTED'); ?>');
		}
	}

	function storeCaret(textEl) {
		if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
	}

	function emoticon(text) {
		if (document.post.message.createTextRange && document.post.message.caretPos) {
			var caretPos = document.post.message.caretPos;
			caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
			document.post.message.focus();
		} else {
			document.post.message.value  += text;
			document.post.message.focus();
		}
	}

	function checkForm() {
		formErrors = false;
		if (document.post.message.value.length < 2) {
			formErrors = '<?php echo isset($this->vars['L_EMPTY_MESSAGE']) ? $this->vars['L_EMPTY_MESSAGE'] : $this->lang('L_EMPTY_MESSAGE'); ?>';
		}
		if (formErrors) {
			alert(formErrors);
			return false;
		} else {
			if (document.post.quick_quote.checked) {
				document.post.message.value = document.post.last_msg.value + document.post.message.value;
			} 
			document.post.quick_quote.checked = false;
			return true;
		}
	}
</script>
<form action='<?php echo isset($quick_reply_item['POST_ACTION']) ? $quick_reply_item['POST_ACTION'] : ''; ?>' method='post' name='post' onsubmit='return checkForm(this)'>
<input type="hidden" name="sid" value="<?php echo isset($quick_reply_item['SID']) ? $quick_reply_item['SID'] : ''; ?>">  
<tr>
<th><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?></th>
<th><b><?php echo isset($this->vars['L_QUICK_REPLY']) ? $this->vars['L_QUICK_REPLY'] : $this->lang('L_QUICK_REPLY'); ?></b></th>
</tr>
<?php

$user_logged_out_count = ( isset($quick_reply_item['user_logged_out.']) ) ? sizeof($quick_reply_item['user_logged_out.']) : 0;
for ($user_logged_out_i = 0; $user_logged_out_i < $user_logged_out_count; $user_logged_out_i++)
{
 $user_logged_out_item = &$quick_reply_item['user_logged_out.'][$user_logged_out_i];
 $user_logged_out_item['S_ROW_COUNT'] = $user_logged_out_i;
 $user_logged_out_item['S_NUM_ROWS'] = $user_logged_out_count;

?>
<?php

} // END user_logged_out

if(isset($user_logged_out_item)) { unset($user_logged_out_item); } 

?>
<td class="row1" rowspan="1" align="left"><input type='checkbox' name='quick_quote'> <span class="gensmall"><?php echo isset($this->vars['L_QUOTE_LAST_MESSAGE']) ? $this->vars['L_QUOTE_LAST_MESSAGE'] : $this->lang('L_QUOTE_LAST_MESSAGE'); ?></span><br>
<?php

$user_logged_in_count = ( isset($quick_reply_item['user_logged_in.']) ) ? sizeof($quick_reply_item['user_logged_in.']) : 0;
for ($user_logged_in_i = 0; $user_logged_in_i < $user_logged_in_count; $user_logged_in_i++)
{
 $user_logged_in_item = &$quick_reply_item['user_logged_in.'][$user_logged_in_i];
 $user_logged_in_item['S_ROW_COUNT'] = $user_logged_in_i;
 $user_logged_in_item['S_NUM_ROWS'] = $user_logged_in_count;

?>
&nbsp;<input type='checkbox' name='attach_sig' <?php echo isset($user_logged_in_item['ATTACH_SIGNATURE']) ? $user_logged_in_item['ATTACH_SIGNATURE'] : ''; ?>><span class="gensmall"><?php echo isset($this->vars['L_ATTACH_SIGNATURE']) ? $this->vars['L_ATTACH_SIGNATURE'] : $this->lang('L_ATTACH_SIGNATURE'); ?></span><br>
&nbsp;<input type='checkbox' name='notify' <?php echo isset($user_logged_in_item['NOTIFY_ON_REPLY']) ? $user_logged_in_item['NOTIFY_ON_REPLY'] : ''; ?>><span class="gensmall"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?></span>
<?php

} // END user_logged_in

if(isset($user_logged_in_item)) { unset($user_logged_in_item); } 

?>
</td>
<input type='hidden' name='mode' value='reply'>
<input type='hidden' name='t' value='<?php echo isset($quick_reply_item['TOPIC_ID']) ? $quick_reply_item['TOPIC_ID'] : ''; ?>'>
<input type='hidden' name='last_msg' value='<?php echo isset($quick_reply_item['LAST_MESSAGE']) ? $quick_reply_item['LAST_MESSAGE'] : ''; ?>'>
<!--input type='hidden' name='message' value=''-->
<td class="row1" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class='row1' valign='top'>
<textarea name='message' rows="6" cols="35" style="width:450px" wrap='virtual' tabindex='1' class='post' onselect='storeCaret(this);' onclick='storeCaret(this);' onkeyup='storeCaret(this);'></textarea><br>
<INPUT TYPE='button' name='smiles_all' class='liteoption' VALUE='<?php echo isset($this->vars['L_ADD_SMILIES']) ? $this->vars['L_ADD_SMILIES'] : $this->lang('L_ADD_SMILIES'); ?>' ONCLICK="openAllSmiles();">&nbsp;
<input type='button' name='quoteselected' class='liteoption' value='<?php echo isset($this->vars['L_QUOTE_SELECTED']) ? $this->vars['L_QUOTE_SELECTED'] : $this->lang('L_QUOTE_SELECTED'); ?>' onclick='javascript:quoteSelection()'>&nbsp;
<input type='submit' name='preview' class='liteoption' value='<?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?>'>&nbsp;
<input type='submit' accesskey='s' name='post' class='mainoption' value='<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>'>

</tr>
</table>
</td>
</form>
<?php

} // END quick_reply

if(isset($quick_reply_item)) { unset($quick_reply_item); } 

?>