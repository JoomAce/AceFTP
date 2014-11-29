<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 footer for html-page
 */
function show_footer()
{
	?>
   </center>
   </body>
   </html>
   <?php
}

/**
  If no user is logged in, show the login option
  */
function show_login ()
{
	if (login_ok())
		return;
	echo '<small> - <a href="' . make_link("login", NULL) . '">' . $GLOBALS['messages']['btnlogin'] . "</a></small>";
}
?>
