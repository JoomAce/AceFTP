<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<script language="JavaScript1.2" type="text/javascript">
<!--
	function check_pwd() {
		if(document.edituser.user.value=="" || document.edituser.home_dir.value=="") {
			alert("<?php echo $GLOBALS["error_msg"]["miscfieldmissed"]; ?>");
			return false;
		}
		if(document.edituser.chpass.checked &&
			document.edituser.pass1.value!=document.edituser.pass2.value)
		{
			alert("<?php echo $GLOBALS["error_msg"]["miscnopassmatch"]; ?>");
			return false;
		}
		return true;
	}
// -->
</script>
