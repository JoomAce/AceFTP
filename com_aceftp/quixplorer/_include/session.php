<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
	This function allows access to session variables
*/
function session_get ($name)
{
	$user = $GLOBALS['__SESSION']["s_user"];
	if (!isset($GLOBALS['__SESSION']))
		return;

	if (!isset($GLOBALS['__SESSION'][$name]))
		return;
	
	return $GLOBALS['__SESSION'][$name];
}

?>
