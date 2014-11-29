<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

if (version_compare(JVERSION,'1.6.0','ge')) {
	if (!JFactory::getUser()->authorise('core.manage', 'com_aceftp')) {
		return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	}
	
	if (JFactory::getUser()->authorise('core.admin', 'com_aceftp')) {
		JToolBarHelper::preferences('com_aceftp', '550');
	}
}

$doc = JFactory::getDocument();
$doc->addStyleSheet('components/com_aceftp/assets/css/aceftp.css');
$doc->addScript('components/com_aceftp/assets/js/iframeresizer.js');

JToolBarHelper::title(JText::_('AceFTP'), 'aceftp');

define('JPATH_QUIX', 'administrator/components/com_aceftp/quixplorer');
define('JPATH_QUIX_SHORT', 'components/com_aceftp/quixplorer');
include_once(JPATH_ROOT .'/'. JPATH_QUIX ."/index.php");
?>

<?php
echo '<div style="margin: 10px; text-align: center;"><a href="http://www.joomace.net/joomla-extensions/aceftp-joomla-file-manager" target="_blank">AceFTP | Copyright &copy; 2009-2012 JoomAce LLC</a></div>';
