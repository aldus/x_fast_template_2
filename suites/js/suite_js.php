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

namespace x_fast_template_2\suites\js;

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
	 
	 /**
	  *	@param	string	Any filename and path of a given js-file
	  *	@return	string	Compressed/modified content of the js-file
	  *
	  */
	 public function optimize ($aFileName) {
	
		$source = implode("", FILE($aFileName));
		$temp = explode(".", $aFileName);
		$last = array_pop($temp);
		$new_file_name = implode(".", $temp)."_opt.".$last;
		
		$pattern = Array(
			"*[\\/][\\/][\\{,\\},_,\\[,\\],#,\\(,\\),;,:, ,\\.,\\-,a-z,A-Z,0-9,!,?,\\',\",\r\n,\t]{0,}[\n|\r]*",
			"*[\t]{0,}*", 
			"*[\n|\r]{2,}*", 
			"*[\n][ ]{0,}*",
			"*[)][ ]{0,}[)]*",
			"*[ ]{0,}[(][ ]{0,}[(]*",
			"*[ ]{0,}([\\=|\\+|\\-|\\*|\\<|\\/|\\?|\\:])[ ]{1,}*",
			"*[ ]{0,}([(|)])*",
			"*[ ]{0,}([\{|\\}])[ ]{0,}*",
			"*[\n|\r]{1,}*",
			"*[\\}][\n|\r][\\}]*",
			"*[\\}]{2}[\n|\r][\\}]*",
			"*[;][\n|\r]*"
			);
			
		$replace = Array("","", "\n", "\n", "))", "((", "\\1", "\\1", "\\1","\n", "}}", "}}}", ";");
		
		$source = preg_replace($pattern, $replace, $source);
		
		if (file_exists($new_file_name)) unlink($new_file_name);
		$fp = fopen($new_file_name, "w");
		if ($fp) {
			fwrite($fp, $source, strlen($source));
			fclose($fp);
		}
		
		return $source;
	}

}