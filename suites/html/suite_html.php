<?php

/**
 *	class suite_html
 *	(x)HTML specific methods for xFastTemplate2
 *
 *	@version	0.2.0
 *	@date		2011-03-28
 *	@author		Dietrich Roland Pehlke - Aldus
 *	
 */

class suite_html
{

	private $guid = "D8E3CED0-8F26-4874-BC32-C531E15C7FB0";

	/**
	 *
	 *	Public public function; more or less experimental for including
	 *	conditional comments for differt css.
	 *
	 *	@since	0.7.0
	 *	@state	@dev, private - none public
	 *
	 *	@param	string	The condition, f.ex. "IE" or "IE6", "IE7", "&gt;IE6"
	 *	@param	string	The url for the css file
	 *	@param	bool	Optional formatflag for the output
	 *
	 *	@return string	The Conditional-Comment.
	 *
	 *
	 */
	public function build_css_condition ($aCondition="IE", $aHref="", $aImport=true) {
		
		if (true == $aImport) {
			$str = "<!--[if ".$aCondition."]>\n<style type='text/css'>@import url(".$aHref.");</style>\n<![endif]-->\n";
		} else {
			$str = "<!--[if ".$aCondition."]>\n<link rel='stylesheet' href='".$aHref."'>\n<![endif]-->\n";
		}
		
		return $str;
	}
	
	/**
	 *	0.7.0 Some experimental public functions for the next update
	 *	
	 *	Quickform (1) -> XHTML1 strict: hidden Element
	 *
	 */
	public function qf_xhtml1_hidden($aName ="", $aValue="") {
		return "<p><input type=\"hidden\" name=\"".$aName."\" value=\"".$aValue."\" /></p>\n";
	}
	
	public function get_xhtml1_js_link ($aFileName="") {
		if ($aFileName == "") {
			return "";
		} else {
			return "<script type=\"text/javascript\" src=\"".$aFileName."\" charset=\"utf-8\"></script>\n";
		}
	}
	
	public function get_xhtml1_css_link ($aFileName="", $media='screen') {
		if ($aFileName == "") {
			return "";
		} else {
			return "<link rel=\"stylesheet\" type=\"text/css\" media=\"".$media."\" href=\"".$aFileName."\" />\n";
		}
	}
	
	/**
	 *
	 */
	public function _get_xhtml1_meta_tag ($aHttp_equiv= "", $aContent="", $aType="name") {
		return "\t<meta ".$aType."=\"".$aHttp_equiv."\" content=\"".$aContent."\" />\n";
	}
	
	/**
	 *
	 */
	public function build_xhtml1_metaTags ($aArray, $aType='name') {
		$str ="";
		foreach ($aArray as $a => $v)  $str .= $this->_get_xhtml1_meta_tag($a, $v, $aType);
		return $str;
	}
	/**
	 *
	 */
	public function _build_xhtml1_img_tag ($aFileName="", $aAltStr="") {
		return "<p><img src='".$aFileName."' width='0px' height='0px' alt='".$aAltStr."'/></p>\n";
	}
	
	/**
	 *	Public
	 */
	public function build_preloader ($aArray) {
		$str = "\n<!-- preloader -->\n";
		foreach ($aArray as $a => $v) $str .= $this->_build_xhtml1_img_tag($v, $a);
		return $str;
	}
	
	public function build_attributes ($aArray = Array() ) {
		$str = "";
		foreach($aArray as $a => $b) $str .= $a."=\"".$b."\" ";
		return $str;
	}
}
?>