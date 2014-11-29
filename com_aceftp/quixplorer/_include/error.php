<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');


require_once JPATH_ROOT .'/'. JPATH_QUIX ."/_include/header.php";

/**
    show error-message and terminate
 */
function show_error($error,$extra=NULL)
{
    // we do not know whether the language module was already loaded
    $errmsg = isset($GLOBALS["error_msg"]) ? $GLOBALS["error_msg"]["error"] : "ERROR";
    $backmsg = isset($GLOBALS["error_msg"]) ? $GLOBALS["error_msg"]["back"] : "BACK";

	show_header($errmsg);
    ?>
	<center>
        <h2><?php echo $errmsg ?></h2>
        <?php echo $error ?>
        <h3> <a href="javascript:window.history.back()"><?php echo $backmsg ?></a><h3>
        <?php if ($extra != NULL) echo " - " . $extra; ?>
    </center>
    <?php
    show_footer(); exit; 
}
?>
