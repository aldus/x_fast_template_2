<?php

/**
 *	class suite_css
 *	CSS specific methods for xFastTemplate2
 *
 *	@version	0.1.0
 *	@date		2013-01-12
 *	@author		Dietrich Roland Pehlke - Aldus
 *	
 */

namespace x_fast_template_2\suites\css;

class suite_css
{

	private $guid = "E8E1CF47-7453-431E-9F05-907127ACE236";

	public $filename_addition = "opt";
	
	public function __construct() {
	
	}
	
	public function __destruct() {
	
	}
	
	/**
	 *	@param	string	A css-filename or path to a given one.
	 *	@param	string	A target folder
	 *	@param	bool	Return the result. Default true.
	 *	@return mixed	NULL or the result.
	 */
	public function optimize ($aCSS_file, $aTargetFolder= "", $return_result = true) {
		$temp = explode(".", $aCSS_file);
		$term_2 = array_pop($temp);
		$new_file_name = implode(".", $temp)."_".$this->filename_addition.".".$term_2;
	
		$css_str = file_get_contents( $aCSS_file );
		
		$pattern = array(
		/* 1 */	"*[\t]{1,}*", 
		/* 2 */	"*[;][\n|\r]{1,}*", 
		/* 3 */	"*[ ]{0,}[\{][ ]{0,}[\n|\r]{1,}*", 
		/* 4 */	"*[\/][\*][\{,\},_,\[,\],#,\(,\),;,:, ,\.,\-,a-z,A-Z,0-9,!,?,\',\",\r\n,\t]{0,}[\*][\/]*", 
		/* 5 */	"*[\n|\r]{1,}*", 
		/* 6 */	"*[;][ ]{0,}[\n|\r]*"
		);
		
		$replace = array(
		/* 1 */ "",
		/* 2 */ "; ",
		/* 3 */ " { ",
		/* 4 */ "",
		/* 5 */ "\n",
		/* 6 */ "; "
		);
		
		$r = preg_replace($pattern, $replace, $css_str);
		
		if (strlen($aTargetFolder) > 0 ) {
			$t = explode("/", $new_file_name);
			$new_file_name = $aTargetFolder.array_pop($t);
		}
		
		if (file_exists($new_file_name)) unlink($new_file_name);
		
		$fp = fopen($new_file_name, "w");
		if ($fp) {
			fwrite($fp, $r, strlen($r));
			fclose($fp);
		}
		
		return (true === $return_result) ? $r : NULL;
	}
}