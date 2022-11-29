<?php $this->_tpl_include('pa_header.tpl'); ?>
<script language="JavaScript" type="text/javascript">
<!--
// bbCode control by
// subBlue design
// www.subBlue.com

// Startup variables
var imageTag = false;
var theSelection = false;

// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav  = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));

var is_win   = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac    = (clientPC.indexOf("mac")!=-1);


// Helpline messages
b_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_B_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_B_HELP'] : ((isset($lang['BBCODE_B_HELP'])) ? $lang['BBCODE_B_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_B_HELP'))) . ' 	}')); ?>";
i_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_I_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_I_HELP'] : ((isset($lang['BBCODE_I_HELP'])) ? $lang['BBCODE_I_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_I_HELP'))) . ' 	}')); ?>";
u_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_U_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_U_HELP'] : ((isset($lang['BBCODE_U_HELP'])) ? $lang['BBCODE_U_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_U_HELP'))) . ' 	}')); ?>";
q_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_Q_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_Q_HELP'] : ((isset($lang['BBCODE_Q_HELP'])) ? $lang['BBCODE_Q_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_Q_HELP'))) . ' 	}')); ?>";
c_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_C_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_C_HELP'] : ((isset($lang['BBCODE_C_HELP'])) ? $lang['BBCODE_C_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_C_HELP'))) . ' 	}')); ?>";
l_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_L_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_L_HELP'] : ((isset($lang['BBCODE_L_HELP'])) ? $lang['BBCODE_L_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_L_HELP'))) . ' 	}')); ?>";
o_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_O_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_O_HELP'] : ((isset($lang['BBCODE_O_HELP'])) ? $lang['BBCODE_O_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_O_HELP'))) . ' 	}')); ?>";
p_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_P_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_P_HELP'] : ((isset($lang['BBCODE_P_HELP'])) ? $lang['BBCODE_P_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_P_HELP'))) . ' 	}')); ?>";
w_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_W_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_W_HELP'] : ((isset($lang['BBCODE_W_HELP'])) ? $lang['BBCODE_W_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_W_HELP'))) . ' 	}')); ?>";
a_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_A_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_A_HELP'] : ((isset($lang['BBCODE_A_HELP'])) ? $lang['BBCODE_A_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_A_HELP'))) . ' 	}')); ?>";
s_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_S_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_S_HELP'] : ((isset($lang['BBCODE_S_HELP'])) ? $lang['BBCODE_S_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_S_HELP'))) . ' 	}')); ?>";
f_help = "<?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_F_HELP'])) ? $this->_tpldata['.'][0]['L_BBCODE_F_HELP'] : ((isset($lang['BBCODE_F_HELP'])) ? $lang['BBCODE_F_HELP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_F_HELP'))) . ' 	}')); ?>";

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]');
imageTag = false;

// Shows the help messages in the helpline window
function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
}


// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}

// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}

// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}


function checkForm() {

	formErrors = false;    

	if (document.post.message.value.length < 2) {
		formErrors = "<?php echo ((isset($this->_tpldata['.'][0]['L_EMPTY_MESSAGE'])) ? $this->_tpldata['.'][0]['L_EMPTY_MESSAGE'] : ((isset($lang['EMPTY_MESSAGE'])) ? $lang['EMPTY_MESSAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMPTY_MESSAGE'))) . ' 	}')); ?>";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		bbstyle(-1);
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
}

function emoticon(text) {
	text = ' ' + text + ' ';
	if (document.post.message.createTextRange && document.post.message.caretPos) {
		var caretPos = document.post.message.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		document.post.message.focus();
	} else {
	document.post.message.value  += text;
	document.post.message.focus();
	}
}

function bbfontstyle(bbopen, bbclose) {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			document.post.message.value += bbopen + bbclose;
			document.post.message.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		document.post.message.focus();
		return;
	} else {
		document.post.message.value += bbopen + bbclose;
		document.post.message.focus();
		return;
	}
	storeCaret(document.post.message);
}


function bbstyle(bbnumber) {

	donotinsert = false;
	theSelection = false;
	bblast = 0;

	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			document.post.message.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		document.post.message.focus();
		return;
	}

	if ((clientVer >= 4) && is_ie && is_win)
		theSelection = document.selection.createRange().text; // Get text selection
		
	if (theSelection) {
		// Add tags around selection
		document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
		document.post.message.focus();
		theSelection = '';
		return;
	}
	
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}

	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				document.post.message.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			document.post.message.focus();
			return;
	} else { // Open tags
	
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			document.post.message.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
		
		// Open tag
		document.post.message.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		document.post.message.focus();
		return;
	}
	storeCaret(document.post.message);
}

// Insert at Claret position. Code from
// http://www.faqts.com/knowledge_base/view.phtml/aid/1052/fid/130
function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

//-->
</script>
<script language="javascript"> 
<!-- 
	var postmaxchars = <?php echo $this->_tpldata['.'][0]['MESSAGE_LENGTH']; ?>; 
	function checklength(theform)
	{ 
		if (postmaxchars != 0)
		{
			message = "";
		}
  		else
		{
			message = "";
		}
		alert("<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_1'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_1'] : ((isset($lang['MSG_LENGTH_1'])) ? $lang['MSG_LENGTH_1'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_1'))) . ' 	}')); ?>"+theform.message.value.length+"<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_2'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_2'] : ((isset($lang['MSG_LENGTH_2'])) ? $lang['MSG_LENGTH_2'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_2'))) . ' 	}')); ?>\n\r\n\r<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_3'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_3'] : ((isset($lang['MSG_LENGTH_3'])) ? $lang['MSG_LENGTH_3'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_3'))) . ' 	}')); ?>"+postmaxchars+"<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_4'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_4'] : ((isset($lang['MSG_LENGTH_4'])) ? $lang['MSG_LENGTH_4'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_4'))) . ' 	}')); ?>\n\r\n\r<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_5'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_5'] : ((isset($lang['MSG_LENGTH_5'])) ? $lang['MSG_LENGTH_5'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_5'))) . ' 	}')); ?>"+(postmaxchars-theform.message.value.length)+"<?php echo ((isset($this->_tpldata['.'][0]['L_MSG_LENGTH_6'])) ? $this->_tpldata['.'][0]['L_MSG_LENGTH_6'] : ((isset($lang['MSG_LENGTH_6'])) ? $lang['MSG_LENGTH_6'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MSG_LENGTH_6'))) . ' 	}')); ?>"); 
	}
//--> 
</script>

<form action="<?php echo $this->_tpldata['.'][0]['S_POST_ACTION']; ?>" method="post" name="post" onsubmit="return checkForm(this)">

<?php if ($this->_tpldata['.'][0]['PREVIEW']) {  ?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th class="thHead" colspan="2" height="25"><?php echo ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($lang['PREVIEW'])) ? $lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')); ?></th>
	</tr>
	<tr> 
		<td class="row1" valign="top"><span class="postbody"><?php echo $this->_tpldata['.'][0]['PRE_COMMENT']; ?></span></td>
	</tr>
</table>
<br />
<?php } ?>
<table width="100%" cellpadding="2" cellspacing="2">
  <tr>
	<td valign="bottom">
		<span class="nav"><a href="<?php echo $this->_tpldata['.'][0]['U_INDEX']; ?>" class="nav"><?php echo ((isset($this->_tpldata['.'][0]['L_INDEX'])) ? $this->_tpldata['.'][0]['L_INDEX'] : ((isset($lang['INDEX'])) ? $lang['INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INDEX'))) . ' 	}')); ?></a> &raquo; <a href="<?php echo $this->_tpldata['.'][0]['U_DOWNLOAD_HOME']; ?>" class="nav"><?php echo $this->_tpldata['.'][0]['DOWNLOAD']; ?></a><?php $_navlinks_count = (isset($this->_tpldata['navlinks'])) ?  sizeof($this->_tpldata['navlinks']) : 0;if ($_navlinks_count) {for ($this->_navlinks_i = 0; $this->_navlinks_i < $_navlinks_count; $this->_navlinks_i++){ ?> &raquo; <a href="<?php echo $this->_tpldata['navlinks'][$this->_navlinks_i]['U_VIEW_CAT']; ?>" class="nav"><?php echo $this->_tpldata['navlinks'][$this->_navlinks_i]['CAT_NAME']; ?></a><?php }} ?> &raquo; <a href="<?php echo $this->_tpldata['.'][0]['U_FILE_NAME']; ?>" class="nav"><?php echo $this->_tpldata['.'][0]['FILE_NAME']; ?></a> &raquo; <?php echo ((isset($this->_tpldata['.'][0]['L_COMMENT_ADD'])) ? $this->_tpldata['.'][0]['L_COMMENT_ADD'] : ((isset($lang['COMMENT_ADD'])) ? $lang['COMMENT_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COMMENT_ADD'))) . ' 	}')); ?></span>
	</td>
  </tr>
</table>

<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th class="thHead" colspan="2" height="25"><b><?php echo ((isset($this->_tpldata['.'][0]['L_COMMENT_ADD'])) ? $this->_tpldata['.'][0]['L_COMMENT_ADD'] : ((isset($lang['COMMENT_ADD'])) ? $lang['COMMENT_ADD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COMMENT_ADD'))) . ' 	}')); ?></b></th>
	</tr>
	<tr>
		<td class="row1" ><span class="gen"><b><?php echo ((isset($this->_tpldata['.'][0]['L_COMMENT_TITLE'])) ? $this->_tpldata['.'][0]['L_COMMENT_TITLE'] : ((isset($lang['COMMENT_TITLE'])) ? $lang['COMMENT_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COMMENT_TITLE'))) . ' 	}')); ?></b></span></td>
		<td class="row2"><input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="<?php echo $this->_tpldata['.'][0]['SUBJECT']; ?>" /></span></td>
	</tr>
	<tr> 
	  <td class="row1" valign="top"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td><span class="gen"><b><?php echo ((isset($this->_tpldata['.'][0]['L_COMMENT'])) ? $this->_tpldata['.'][0]['L_COMMENT'] : ((isset($lang['COMMENT'])) ? $lang['COMMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COMMENT'))) . ' 	}')); ?></b></span></td>
		  </tr>
		  <tr> 
			<td valign="middle" align="center"> <br />
			  <table width="100" border="0" cellspacing="0" cellpadding="5">
				<tr align="center"> 
				  <td colspan="<?php echo $this->_tpldata['.'][0]['S_SMILIES_COLSPAN']; ?>" class="nav"><a href="<?php echo $this->_tpldata['.'][0]['U_MORE_SMILIES']; ?>" onclick="window.open('<?php echo $this->_tpldata['.'][0]['U_MORE_SMILIES']; ?>', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav"><?php echo ((isset($this->_tpldata['.'][0]['L_EMOTICONS'])) ? $this->_tpldata['.'][0]['L_EMOTICONS'] : ((isset($lang['EMOTICONS'])) ? $lang['EMOTICONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMOTICONS'))) . ' 	}')); ?></a></td>
				</tr>
				<?php $_smilies_row_count = (isset($this->_tpldata['smilies_row'])) ?  sizeof($this->_tpldata['smilies_row']) : 0;if ($_smilies_row_count) {for ($this->_smilies_row_i = 0; $this->_smilies_row_i < $_smilies_row_count; $this->_smilies_row_i++){ ?>
				<tr align="center" valign="middle"> 
				  <?php $_smilies_col_count = (isset($this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col'])) ? sizeof($this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col']) : 0;if ($_smilies_col_count) {for ($this->_smilies_col_i = 0; $this->_smilies_col_i < $_smilies_col_count; $this->_smilies_col_i++){ ?>
				  <td><a href="javascript:emoticon('<?php echo $this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col'][$this->_smilies_col_i]['SMILEY_CODE']; ?>')"><img src="<?php echo $this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col'][$this->_smilies_col_i]['SMILEY_IMG']; ?>" border="0" alt="<?php echo $this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col'][$this->_smilies_col_i]['SMILEY_DESC']; ?>" title="<?php echo $this->_tpldata['smilies_row'][$this->_smilies_row_i]['smilies_col'][$this->_smilies_col_i]['SMILEY_DESC']; ?>" /></a></td>
				  <?php }} ?>
				</tr>
				<?php }} ?>
			  </table>
			</td>
		  </tr>
		</table>
	  </td>
	  <td class="row2" valign="top"><span class="gen"> <span class="genmed"> </span> 
		<table width="450" border="0" cellspacing="0" cellpadding="2">
		  <tr align="center" valign="middle"> 
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onClick="bbstyle(6)" onMouseOver="helpline('q')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onClick="bbstyle(8)" onMouseOver="helpline('c')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onClick="bbstyle(10)" onMouseOver="helpline('l')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onClick="bbstyle(12)" onMouseOver="helpline('o')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px"  onClick="bbstyle(14)" onMouseOver="helpline('p')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"> 
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr> 
				  <td><span class="genmed"> &nbsp;<?php echo ((isset($this->_tpldata['.'][0]['L_FONT_COLOR'])) ? $this->_tpldata['.'][0]['L_FONT_COLOR'] : ((isset($lang['FONT_COLOR'])) ? $lang['FONT_COLOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_COLOR'))) . ' 	}')); ?>: 
					<select name="addbbcode18" onChange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]')" onMouseOver="helpline('s')">
					  <option style="color:black; background-color: #FFFFFF " value="<?php echo $this->_tpldata['.'][0]['T_FONTCOLOR1']; ?>" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_DEFAULT'])) ? $this->_tpldata['.'][0]['L_COLOR_DEFAULT'] : ((isset($lang['COLOR_DEFAULT'])) ? $lang['COLOR_DEFAULT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_DEFAULT'))) . ' 	}')); ?></option>
					  <option style="color:darkred; background-color: #DEE3E7" value="darkred" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_DARK_RED'])) ? $this->_tpldata['.'][0]['L_COLOR_DARK_RED'] : ((isset($lang['COLOR_DARK_RED'])) ? $lang['COLOR_DARK_RED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_DARK_RED'))) . ' 	}')); ?></option>
					  <option style="color:red; background-color: #DEE3E7" value="red" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_RED'])) ? $this->_tpldata['.'][0]['L_COLOR_RED'] : ((isset($lang['COLOR_RED'])) ? $lang['COLOR_RED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_RED'))) . ' 	}')); ?></option>
					  <option style="color:orange; background-color: #DEE3E7" value="orange" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_ORANGE'])) ? $this->_tpldata['.'][0]['L_COLOR_ORANGE'] : ((isset($lang['COLOR_ORANGE'])) ? $lang['COLOR_ORANGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_ORANGE'))) . ' 	}')); ?></option>
					  <option style="color:brown; background-color: #DEE3E7" value="brown" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_BROWN'])) ? $this->_tpldata['.'][0]['L_COLOR_BROWN'] : ((isset($lang['COLOR_BROWN'])) ? $lang['COLOR_BROWN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_BROWN'))) . ' 	}')); ?></option>
					  <option style="color:yellow; background-color: #DEE3E7" value="yellow" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_YELLOW'])) ? $this->_tpldata['.'][0]['L_COLOR_YELLOW'] : ((isset($lang['COLOR_YELLOW'])) ? $lang['COLOR_YELLOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_YELLOW'))) . ' 	}')); ?></option>
					  <option style="color:green; background-color: #DEE3E7" value="green" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_GREEN'])) ? $this->_tpldata['.'][0]['L_COLOR_GREEN'] : ((isset($lang['COLOR_GREEN'])) ? $lang['COLOR_GREEN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_GREEN'))) . ' 	}')); ?></option>
					  <option style="color:olive; background-color: #DEE3E7" value="olive" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_OLIVE'])) ? $this->_tpldata['.'][0]['L_COLOR_OLIVE'] : ((isset($lang['COLOR_OLIVE'])) ? $lang['COLOR_OLIVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_OLIVE'))) . ' 	}')); ?></option>
					  <option style="color:cyan; background-color: #DEE3E7" value="cyan" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_CYAN'])) ? $this->_tpldata['.'][0]['L_COLOR_CYAN'] : ((isset($lang['COLOR_CYAN'])) ? $lang['COLOR_CYAN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_CYAN'))) . ' 	}')); ?></option>
					  <option style="color:blue; background-color: #DEE3E7" value="blue" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_BLUE'])) ? $this->_tpldata['.'][0]['L_COLOR_BLUE'] : ((isset($lang['COLOR_BLUE'])) ? $lang['COLOR_BLUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_BLUE'))) . ' 	}')); ?></option>
					  <option style="color:darkblue; background-color: #DEE3E7" value="darkblue" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_DARK_BLUE'])) ? $this->_tpldata['.'][0]['L_COLOR_DARK_BLUE'] : ((isset($lang['COLOR_DARK_BLUE'])) ? $lang['COLOR_DARK_BLUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_DARK_BLUE'))) . ' 	}')); ?></option>
					  <option style="color:indigo; background-color: #DEE3E7" value="indigo" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_INDIGO'])) ? $this->_tpldata['.'][0]['L_COLOR_INDIGO'] : ((isset($lang['COLOR_INDIGO'])) ? $lang['COLOR_INDIGO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_INDIGO'))) . ' 	}')); ?></option>
					  <option style="color:violet; background-color: #DEE3E7" value="violet" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_VIOLET'])) ? $this->_tpldata['.'][0]['L_COLOR_VIOLET'] : ((isset($lang['COLOR_VIOLET'])) ? $lang['COLOR_VIOLET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_VIOLET'))) . ' 	}')); ?></option>
					  <option style="color:white; background-color: #DEE3E7" value="white" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_WHITE'])) ? $this->_tpldata['.'][0]['L_COLOR_WHITE'] : ((isset($lang['COLOR_WHITE'])) ? $lang['COLOR_WHITE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_WHITE'))) . ' 	}')); ?></option>
					  <option style="color:black; background-color: #DEE3E7" value="black" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_COLOR_BLACK'])) ? $this->_tpldata['.'][0]['L_COLOR_BLACK'] : ((isset($lang['COLOR_BLACK'])) ? $lang['COLOR_BLACK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COLOR_BLACK'))) . ' 	}')); ?></option>
					</select> &nbsp;<?php echo ((isset($this->_tpldata['.'][0]['L_FONT_SIZE'])) ? $this->_tpldata['.'][0]['L_FONT_SIZE'] : ((isset($lang['FONT_SIZE'])) ? $lang['FONT_SIZE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_SIZE'))) . ' 	}')); ?>: <select name="addbbcode20" onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')">
					  <option value="7" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_FONT_TINY'])) ? $this->_tpldata['.'][0]['L_FONT_TINY'] : ((isset($lang['FONT_TINY'])) ? $lang['FONT_TINY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_TINY'))) . ' 	}')); ?></option>
					  <option value="9" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_FONT_SMALL'])) ? $this->_tpldata['.'][0]['L_FONT_SMALL'] : ((isset($lang['FONT_SMALL'])) ? $lang['FONT_SMALL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_SMALL'))) . ' 	}')); ?></option>
					  <option value="12" selected class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_FONT_NORMAL'])) ? $this->_tpldata['.'][0]['L_FONT_NORMAL'] : ((isset($lang['FONT_NORMAL'])) ? $lang['FONT_NORMAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_NORMAL'))) . ' 	}')); ?></option>
					  <option value="18" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_FONT_LARGE'])) ? $this->_tpldata['.'][0]['L_FONT_LARGE'] : ((isset($lang['FONT_LARGE'])) ? $lang['FONT_LARGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_LARGE'))) . ' 	}')); ?></option>
					  <option  value="24" class="genmed"><?php echo ((isset($this->_tpldata['.'][0]['L_FONT_HUGE'])) ? $this->_tpldata['.'][0]['L_FONT_HUGE'] : ((isset($lang['FONT_HUGE'])) ? $lang['FONT_HUGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FONT_HUGE'))) . ' 	}')); ?></option>
					</select>
					</span></td>
				  <td nowrap="nowrap" align="right"><span class="gensmall"><a href="javascript:bbstyle(-1)" class="genmed" onMouseOver="helpline('a')"><?php echo ((isset($this->_tpldata['.'][0]['L_BBCODE_CLOSE_TAGS'])) ? $this->_tpldata['.'][0]['L_BBCODE_CLOSE_TAGS'] : ((isset($lang['BBCODE_CLOSE_TAGS'])) ? $lang['BBCODE_CLOSE_TAGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BBCODE_CLOSE_TAGS'))) . ' 	}')); ?></a></span></td>
				</tr>
			  </table>
			</td>
		  </tr>
		  <tr> 
			<td colspan="9"> <span class="gensmall"> 
			  <input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="<?php echo ((isset($this->_tpldata['.'][0]['L_STYLES_TIP'])) ? $this->_tpldata['.'][0]['L_STYLES_TIP'] : ((isset($lang['STYLES_TIP'])) ? $lang['STYLES_TIP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STYLES_TIP'))) . ' 	}')); ?>" />
			  </span></td>
		  </tr>
		  <tr>
			<td colspan="9" class="row2"><span class="gen"> 
				<textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"><?php echo $this->_tpldata['.'][0]['COMMENT']; ?></textarea>
			</td>
		  </tr>
		</table>
        </td>
	</tr>
	<tr>
		<td class="row1"><span class="gen"><B><?php echo ((isset($this->_tpldata['.'][0]['L_OPTIONS'])) ? $this->_tpldata['.'][0]['L_OPTIONS'] : ((isset($lang['OPTIONS'])) ? $lang['OPTIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'OPTIONS'))) . ' 	}')); ?></b></span><br /><span class="gensmall"><?php echo $this->_tpldata['.'][0]['HTML_STATUS']; ?><br /><?php echo $this->_tpldata['.'][0]['BBCODE_STATUS']; ?><br /><?php echo $this->_tpldata['.'][0]['SMILIES_STATUS']; ?><br /><?php echo $this->_tpldata['.'][0]['LINKS_STATUS']; ?><br /><?php echo $this->_tpldata['.'][0]['IMAGES_STATUS']; ?></span></td>
		<td class="row2"><span class="gen"><?php echo ((isset($this->_tpldata['.'][0]['L_COMMENT_EXPLAIN'])) ? $this->_tpldata['.'][0]['L_COMMENT_EXPLAIN'] : ((isset($lang['COMMENT_EXPLAIN'])) ? $lang['COMMENT_EXPLAIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COMMENT_EXPLAIN'))) . ' 	}')); ?><br /><a href="javascript:checklength(document.post);"><?php echo ((isset($this->_tpldata['.'][0]['L_CHECK_MSG_LENGTH'])) ? $this->_tpldata['.'][0]['L_CHECK_MSG_LENGTH'] : ((isset($lang['CHECK_MSG_LENGTH'])) ? $lang['CHECK_MSG_LENGTH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CHECK_MSG_LENGTH'))) . ' 	}')); ?></a></span></td>
	</tr>
	<tr> 
	  <td class="cat" colspan="2" align="center" height="28"> <?php echo $this->_tpldata['.'][0]['S_HIDDEN_FORM_FIELDS']; ?><input type="submit" tabindex="5" name="preview" class="mainoption" value="<?php echo ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($lang['PREVIEW'])) ? $lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')); ?>" />&nbsp;<input type="submit" accesskey="s" tabindex="6" name="submit" class="mainoption" value="<?php echo ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($lang['SUBMIT'])) ? $lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')); ?>" /></td>
  </form>
	</tr>
  </table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<?php $this->_tpl_include('pa_footer.tpl'); ?>