<?php

/**
 *	class suite
 *	Class for specific methods for xFastTemplate2
 *
 *	@version	0.2.0
 *	@date		2011-03-28
 *	@author		Dietrich Roland Pehlke - Aldus
 *	
 */

class suite
{

	private $guid = "2CFB7FF7-74E7-4E1C-8E92-8B9621E1EB7F";

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

}