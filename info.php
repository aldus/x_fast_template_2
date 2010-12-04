<?php

/**
 *	@version	0.5.1
 *	@date		2010-12-04
 *	@author		Dietrich Roland Pehlke
 *	@package	Websitebaker - Modules: xFastTemplate2
 *
 *	0.5.1	2010-12-04	Bugfix inside include.php method build_mysql_query - condition was an empty string.
 *
 *	0.5.0	2010-08-29	Introduce "suites" to keep the base-class small - and prevent to
 *						pre-process unused methods or functions.
 *						Some XHTML-Modifications (e.g. <![CDATA[ for Javascript).
 *
 *	0.4.1	2010-08-02	Minimal code-changes and optimations for WB.
 *
 *	0.4.0	2010-05-14	Add public method "resolve_path" and two new class-properties
 *						'default_path' and 'default_url'.
 *
 *	0.3.2	2010-05-13	Add public method "get_all_by_query"
 *
 *	0.3.1	2010-05-11	Bugfix/Addition inside method 'clean_up_str' for double-quotes and JS.
 *
 *	0.3.0	2010-05-10	Add method 'build_mysql_query'.
 *						Add method 'clean_up_str' for JavaScript(-s).
 *						Add method 'get_all' to transform a mySQL result into an array.
 *						Add documentation (made with PHP-Documentor).
 *
 *	0.2.8	2010-05-02	Remove the deprecated ereg inside the getBlocks method.
 *
 *	0.2.7	2010-01-22	Add globals to capture_echo to avoid conflicts within $wb, $database and $TEXT.
 *
 *	0.2.6	2009-23-12	Add private function "__mb_sql_regcase" as sql_regcase is deprecated in 5.3.0
 *
 *	0.2.5	2009-11-24	Add argument "type='text/css' to the css-tag(-s).
 *						Remove unused files and folders from the package/project.
 *						Add a PHP 4.x version "include_php4.php" to the package/project.
 *						Minor typos cleanings.
 *
 *	0.2.4	2009-10-25	Bugfixes - removing references that causes in Call-time 
 *						pass-by-reference warnings.
 *
 *	0.2.3	2009-10-18	Bugfix inside "get_sections" - the result is now stored
 *						inside an array that holds the content and the links to 
 *						the frontend.js and frontend.css files to avoid unespected results.
 *
 *	0.2.2	2009-10-18	Bugfix inside "register_modfiles" - causes double loading
 *						of css and js files if one module is used more then one time
 *						on a page; e.g. a gallery or a code-module.
 *
 *	0.2.1	2009-10-18	Bugfix inside "get_section" - if an array was given, only
 *						the last one was returned.
 *
 *	0.2.0	2009-10-18	Add method "get_section".
 *
 *	0.1.5	2009-10-17	Add method "get_modules".
 *						Some cosmetic changes in the source-code (comments, etc.).
 *	
 *	0.1.4	2009-10-14	Fixed reg-exp. inside "findClasses" and "findIDs" to
 *						find class|id names within double quotes and|or minus
 *						and|or underscore at all.
 *	
 *	0.1.3	2009-10-12	Adding some methods, e.g. for register_modul_files.
 *						Add missing "build_css_link" method.
 *						Bugfix inside "remove_unusedmarkers" for numbers.
 *
 *	0.1.2	2009-07-13	Removing the PHP4 constructor-function.
 *
 */

$module_directory     = "x_fast_template_2";
$module_name          = "xFastTemplate2";
$module_function      = "snippet";
$module_version       = "0.5.1";
$module_platform      = "2.8";
$module_author        = "Dietrich Roland Pehlke (Aldus).";
$module_license       = "GNU General Public License";
$module_description   = "Implantation of drp-xFastTemplate2. <a href=\"../../modules/x_fast_template_2/doc/index.html\" target=\"_blank\">Documentation</a>";
$module_guid		  = "7588B558-135A-4F6A-9263-9E3102D5EF61";

?>