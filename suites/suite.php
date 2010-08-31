<?php


class suite
{
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