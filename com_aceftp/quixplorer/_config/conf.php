<?php
/*
* @package		AceFTP
* @copyright	2009-2012 JoomAce LLC, www.joomace.net
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

//------------------------------------------------------------------------------
// Configuration Variables
	
	// login to use QuiXplorer: (true/false)
	// if this variable is set to "false", no login is required
	// for access to quixplorer.
	// the functions allowed by the "anonymous" user are defined
	// via the global_permissions setting
	$GLOBALS["require_login"] = false;
	
	// This variable defines the permissions of anonymous
	// users.
	//
	// If 'require_login' is set to true, this settings are
	// ignored.
	//
	// The detailed permissions are defined in permissions.php
	//
	// A short overview:
	//
	// Value 0x0001 means read only access
	// Value 0x0002 means write only access
	// Value 0x0003 means read / write access
	$GLOBALS["global_permissions"] = 0x0003;
	
	// language: (en, de, es, fr, nl, ru)
	$GLOBALS["language"] = "en";
	
	// the filename of the QuiXplorer script: (you rarely need to change this)
	$GLOBALS["script_name"] = "http://".$GLOBALS['__SERVER']['HTTP_HOST'].$GLOBALS['__SERVER']["PHP_SELF"];
	
	// allow Zip, Tar, TGz -> Only (experimental) Zip-support
	$GLOBALS["zip"] = true;	//function_exists("gzcompress");
	$GLOBALS["tar"] = false;
	$GLOBALS["tgz"] = false;

	// set this to "true" if you want to use uploadify as upload interface
	// this needs flash support
	$GLOBALS["use_uploadify"] = false;
	
//------------------------------------------------------------------------------
// Global User Variables (used when $require_login==false)
	
	// the home directory for the filemanager:
	// use forward slashed to seperate directories ('/')
	// not '\' or '\\', no trailing '/'
	// don't use the root directory as home_dir!
	$GLOBALS["home_dir"] = JPATH_ROOT;
	
	// the url corresponding with the home directory: (no trailing '/')
	$GLOBALS["home_url"] = "";
	
	// show hidden files in QuiXplorer: (hide files starting with '.', as in Linux/UNIX)
	$GLOBALS["show_hidden"] = true;
	
	// filenames not allowed to access: (uses PCRE regex syntax)
	$GLOBALS["no_access"] = "^\.ht";
	
//------------------------------------------------------------------------------

	// Adding values for each language to this array changes
	// the login prompt message from the language-specific file.
	// If there is no value for a language here, the default value
	// of the language file is used.
	$GLOBALS["login_prompt"] = array(
		"de"	=> "Willkommen beim Download-Server",
		"en"	=> "Welcome to this download server",
		"da"  => "Velkommen til denne download server");

	// The title which is displayed in the browser
	$GLOBALS["site_name"] = "My Download Server";

/* NOTE:
	Users can be defined by using the Admin-section,
	or in the file ".config/.htusers.php".
	For more information about PCRE Regex Syntax,
	go to http://www.php.net/pcre.pattern.syntax
*/
//------------------------------------------------------------------------------
?>
