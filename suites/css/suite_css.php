<?php

/**
 *	class suite_css
 *	JavaScript specific methods for xFastTemplate2
 *
 *	@version	0.1.0
 *	@date		2013-01-12
 *	@author		Dietrich Roland Pehlke - Aldus
 *	
 */


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
	
		$css_str = implode("", FILE($aCSS_file) );
		
		$pattern = array("*[\t]{1,}*", 
			"*[;][\n|\r]{1,}*", 
			"*[ ]{0,}[\{][ ]{0,}[\n|\r]{1,}*", 
			"*[\/][\*][\{,\},_,\[,\],#,\(,\),;,:, ,\.,\-,a-z,A-Z,0-9,!,?,\',\",\r\n,\t]{0,}[\*][\/]*", 
			"*[\n|\r]{1,}*", "*[;][ ]{0,}[\n|\r]*"
		);
		$replace = array("", "; ", " { ", "", "\n", "; ");
		
		$r = preg_replace($pattern, $replace, $css_str);
		
		if (strlen($aTargetFolder) > 0 ) {
			$t = explode("/", $new_file_name);
			$new_file_name = $aTargetFolder.array_pop($t);
		}
		
		$fp = fopen($new_file_name, "w");
		if ($fp) {
			fwrite($fp, $r, strlen($r));
			fclose($fp);
		}
		
		return (true === $return_result) ? $r : NULL;
	}

}