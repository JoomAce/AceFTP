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
		if(document.adduser.user.value=="" || document.adduser.home_dir.value=="") {
			alert("<?php echo $GLOBALS["error_msg"]["miscfieldmissed"]; ?>");
			return false;
		}
		if(document.adduser.pass1.value!=document.adduser.pass2.value) {
			alert("<?php echo $GLOBALS["error_msg"]["miscnopassmatch"]; ?>");
			return false;
		}
		return true;
	}
// -->
</script>
