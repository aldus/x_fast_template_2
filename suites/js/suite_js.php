<?php


class suite_js
{
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