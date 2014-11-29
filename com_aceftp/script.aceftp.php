<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// No Permission
defined('_JEXEC') or die ('Restricted access');

class com_AceftpInstallerScript {
	
	public function postflight($type, $parent) {
?>
<img src="components/com_aceftp/assets/images/logo.png" alt="Joomla File Manager" width="60" height="89" align="left" />

<h2>AceFTP Installation</h2>
<h2><a href="index.php?option=com_aceftp">Go to AceFTP</a></h2>
<table class="adminlist table table-striped">
	<thead>
		<tr>
			<th class="title" colspan="2"><?php echo JText::_('Extension'); ?></th>
			<th width="30%"><?php echo JText::_('Status'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr class="row0">
			<td class="key" colspan="2"><?php echo 'AceFTP '.JText::_('Component'); ?></td>
			<td><strong><?php echo JText::_('Installed'); ?></strong></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3"></td>
		</tr>
	</tfoot>
</table>
	<?php
    }
}