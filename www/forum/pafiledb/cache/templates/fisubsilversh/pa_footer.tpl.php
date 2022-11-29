</td>
  </tr>
  <tr>
	<td align="left" valign="top">
	<form method="get" name="jumpbox" action="<?php echo $this->_tpldata['.'][0]['S_JUMPBOX_ACTION']; ?>" onSubmit="if(document.jumpbox.cat_id.value == -1){return false;}">
	<input type="hidden" name="action" value="category" />
	<select name="cat_id" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }">
	<option value="-1"><?php echo ((isset($this->_tpldata['.'][0]['L_JUMP'])) ? $this->_tpldata['.'][0]['L_JUMP'] : ((isset($lang['JUMP'])) ? $lang['JUMP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'JUMP'))) . ' 	}')); ?></option>
	<?php echo $this->_tpldata['.'][0]['JUMPMENU']; ?>
	</select>
	</form>
	
	</td>
	<td align="right" valign="top"><span class="gensmall"><?php echo $this->_tpldata['.'][0]['S_TIMEZONE']; ?></span></td>
  </tr>
</table>

	</td>
  </tr>
</table>
<div align="center"><span class="copyright"><br />
Powered by paFileDB 3.1 ©2002 <a href="http://www.phparena.net/" target="_phpbb" class="copyright">PHP Arena</a><br />
This script (pafiledb integration v 0.0.9d + <a href="http://www.mx-system.com/" target="_phpbb" class="copyright">MX Addon 1.0</a>) is modified by  <a href="http://www.hostsector.com/~mohd/" target="_phpbb" class="copyright">Mohd</a><br />
</span></div>