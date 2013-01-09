<?php

/**
 *	class suite_js
 *	JavaScript specific methods for xFastTemplate2
 *
 *	@version	0.2.0
 *	@date		2011-03-28
 *	@author		Dietrich Roland Pehlke - Aldus
 *	
 */


class suite_js
{

	private $guid = "A4267B49-77B2-487A-A1AC-66F687CF8B7B";

	/**
	 *	For JavaScript we are sometime in the need to escape the linebreaks.
	 *
	 *	@since	0.3.0
	 *
	 *	@param	string The string - pass by reference.
	 *
	 */
	 public function clean_up_str (&$aStr) {
	 	$var = array(
	 		"\n" => "\\n",
	 		"\r" => "\\r",
	 		"\"" => "&#34"
	 	);
	 	
	 	$aStr = str_replace(array_keys($var), array_values($var), $aStr);
	 
	 }

}