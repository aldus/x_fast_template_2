<?php

/**
 *	Website Baker Project <http://www.websitebaker.org/>
 *	Copyright (C) 2004-2007, Ryan Djurovich
 *	
 *	Website Baker is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *	
 *	Website Baker is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License
 *	along with Website Baker; if not, write to the Free Software
 *	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 */

/**
 *	@version	0.3.0
 *	@date		2010-05-11
 *	@author		Dietrich Roland Pehlke (Aldus)
 *	@package	Website Baker - Modules: x_fast_template_2
 *	@platform	WB 2.8.x
 *	@require	PHP 5.x
 *	
 *	0.1.1	2008-08-26	First beta run
 *
 */

if (!class_exists('HTML_Template_xFastTemplate2')) {

/**
 *	Experimental addition to 0.2.4
 *
 *
 */
class xft2_fms 
{

	public	$buffer=	array ();
	
	private $_metas=	array ();
	
	private $_css=		array ();
	
	private $_js=		array ();
	
	private $_modules=	array ();
	

	public function add_page_modules_files (&$db, $page_id) {
	
	
	}
}

/**
 *
 * @version		0.7.1 rc1
 * @build		40
 * @date		2010-05-11
 * @author		Dietrich Roland Pehlke
 * @license		free - without any warrenties as it is
 * @state		@RC1
 * @require		PHP 5.2.x
 *
 *
 *	0.7.1	2008-08-16	Additional changes for Websitebaker.
 *						Add new function "capture_echo" to get rid of bufferon-action-capture-bufferoff
 *						inside Websitebaker.
 *	
 *	0.7.0	2008-05-12	Some additional public functions.
 *						Change code for PHP 5.2.x
 *	
 *	0.6.6	2008-04-08	Bugix for PHP 4.x
 *	
 *	0.6.5	2008-03-26	Renamed "stripComments" into "removeComments".
 *						Minor changes inside the regExpr.
 *	
 *	0.6.4	2008-03-22	Add new public public function "remove_unusedMarkers" for removing unused markers.
 *	
 *	0.6.3	2008-03-12	Minor typos in public function-description eleminated ( ->direct ).
 *			2008-03-18	Add description(-s) to ->getBlocks
 *			
 *	0.6.2	2007-09-01	Add new public function "setMarker" for easier define the begin and end-marker.
 *	
 *						Modifications at the preg-patterns to handle double-markers in the form:
 *							{aMarker}, {{aMarker}}, or f.ex. <<<< A MARKER >>>>
 *	
 *						New public function "__buildPattern" for "central"-building the preg-replace pattern
 *						at one place instead of 20 places.
 *						
 *						Minor changes for: the classname and the filename: PEAR-Compatible.
 *						Class:	HTML_Template_xFastTemplate2
 *						File:	xFastTemplate2.php
 *	
 *	0.6.1	2007-08-30	Add " " and TAB into the preg-replace patterns to alowed spaces and tabs
 *						in the marker, f.ex. "{  A-Marker  }" instead of strict "{A-Marker}".
 *	
 *	0.6.0	2007-08-28	"preg_replace" instead of "ereg_replace"|"str_replace" in public functions:
 *						- get_by_template
 *						- get_by_source
 *						- get_masterTable2
 *						- get_sequence
 *						- __parseStr
 *						- stripComments
 *						
 *						Some additions and minor changes in ”stripComments" in the pattern.
 *						Add optional arg for lineFeed removemend.
 *						
 *						Also: public function get_masterTable is marked for obsolete!
 *	
 *						Also: Testpublic function (Alpha!): renderTemplate, renderSequence for tests
 *						
 *			2007-08-29	Minor fixes and changes in "getSequence"; include now foreach instead "for".
 *	
 *	
 *	0.5.0	2007-08-09	Bugfix in public function "findClasses".
 *						Add new public function "findIDs".
 *	
 *	0.4.3	2007-07-18	Added $this->pathAddition into public function "direct"
 *
 *	0.4.2	2007-06-27	Pathaddition-Bugfix in _error for the correct path
 *						to the error-template. Minor text-changes in the error-messages.
 *						Bugfix in direct(). 
 *	
 *	0.4.1	2007-06-26	HTML-Entities: & and " masked in the public function "__parseStr"
 *						added to avoid future problems with embedded entities.
 *
 *	0.4.0	2007-04-08	Minor typos and additions in the documentation and DocBlocks
 *					
 *	0.4.0	2007-04-08	New public function: get_masterTable2
 *						Additional public function for another way to handle masterTable.
 *
 *	0.3.0				New public function: get_masterTable
 *
 *	0.3.0	2007-04-04	New public function: direct 
 *
 *	0.3.0	2007-04-04	New public function: get_by_souce
 *
 *	0.2.1	2007-04-04	Minor BugChanges in the ereg_replace Filters inside "stripComments()"
 *
 *	0.2.0	2007-04-04	Adding lang(-uage) and xft2_error_msg for languages
 *						At this time only: 'german' and 'english'					
 *	0.2.0	2007-04-04	Adding "DocBlocks" for PhpDocumentator.
 *
 *	0.2.0	2007-04-04	Renaming the class into "drp_xFastTemplate2"
 *
 *	0.2.0 	2007-04-04	Included the "xft2_basic.css" into the "xft2_error.tmpl"-file
 *						to get rid of the multible file-handling and confusion ...
 *	
 *	0.1.2	2007-04-02	File "xft2_basic.css" for the styles for the Error-Msg
 *
 *	0.1.2	2007-04-02	Folder "templates" with "xft2_error.tmpl" in it
 *
 */
class HTML_Template_xFastTemplate2 extends xft2_fms
{

	/**
	 *	Varialble defines the path to the template-directory.
	 *
	 *	Default setting is "templates/" in the current working directory.
	 *
	 *	@version	0.1.2
	 *
	 */
	public $pathAddition = "templates/";
	
	/**
	 *	Variable defines the "start" marker.
	 *
	 *	Default setting is "{"
	 *
	 *	@type	string
	 *	@version	0.1.2
	 *
	 */
	public $marker_begin = "{";
	
	/**
	 *	Variable defines the "end" marker.
	 *
	 *	Default setting is "}"
	 *
	 *	@type		string
	 *	@version	0.1.2
	 *
	 */
	public $marker_end = "}";
	
	/**
	 *	variable holds the current version.
	 *
	 *	@type		string
	 *	@version	0.1.2
	 *
	 */
	public $versionStr = "0.5.0 @RC2 PHP 5.3.x - WB2.8.2[2010-08-31]";
	
	/**
	 *	Public array hold the error-messages
	 *
	 *	Form is:
	 *	'language' => Array {
	 *		'headline' => 'Any string that appearce at the top',
	 *		'noErrorTempl' => 'The message comes up if no template for the error isn't found',
	 *
	 *	@type		array
	 *	@version	0.2.0
	 *
	 */
	public $xft2_error_msg;
	
	/**
	 *	Public Variable holds the language in witch the error will display
	 *
	 *	At this time only 'german' (default) and 'english' is supported
	 *	but as a variable you can add more.
	 *
	 *	@type		string
	 *	@version	0.2.0
	 *
	 */
	public $lang = 'german';
	
	/**
	 *	Public Variable holds the name of the cache-folder, incl. ending slash
	 *
	 *	@type		string
	 *	@version	0.6.0
	 *
	 */
	public $cachefolder = 'xft2_cache/';
	
	/**
	 *
	 *
	 *
	 */
	private $__suites = array();
	
	/**
	 *	Constructor of the class
	 *
	 * 
	 */
	public function __construct() {
		$this->_define_error_msg();
	}
	
	/**
	 *	De-Constructor of the class
	 *
	 * 
	 */
	public function __destruct() {
	
	}
	
	/**
	 *	Since 0.5.0 we are handling additional methods or functions
	 *	inside suites, e.g. one suite for "WebsiteBaker", one for "html" or "javascript".
	 *	This allows us to parse only the source we're needed - instead of all.
	 *
	 */
	private function __register_suite($aSuiteName="") {
		$name = strtolower($aSuiteName);
		$return_value = false;
		if (!array_key_exists($name, $this->__suites) ) {
			switch($name) {
				
				case 'websitebaker':
					require_once( dirname(__FILE__)."/suites/websitebaker/suite_websitebaker.php");
					$this->__suites[$name] = new suite_websitebaker();
					$return_value = true;
					break;
					
				case 'mysql':
					require_once( dirname(__FILE__)."/suites/mysql/suite_mysql.php");
					$this->__suites[$name] = new suite_mysql();
					$return_value = true;
					break;
					
				case 'html':
					require_once( dirname(__FILE__)."/suites/html/suite_html.php");
					$this->__suites[$name] = new suite_html();
					$return_value = true;
					break;
					
				case 'js':
					require_once( dirname(__FILE__)."/suites/js/suite_js.php");
					$this->__suites[$name] = new suite_js();
					$return_value = true;
					break;
			}
		} else {
			$return_value = is_object($this->__suites[$name]);
		}
		return $return_value;
	}
	
	public function __call($function, $args) {
		return "method: ".$function." not implanted within ".implode(",", $args);
	}
	
	/**
	 *	Returns a simple HTML-Template
	 *
	 *	@param	string	$aTemplateName The Name of the Template
	 *	@param	array	$aValueArray Holds the information as a Assoziative-Array
	 *	@since	0.2.0
	 *
	 *	e.g: $myPage = $ref->get_by_template('simplePage.tmpl', array('title'=>$aTitle, 'content'=>'Hello World!));
	 *
	 */
	public function get_by_template () {
		$n = func_num_args();
		if ($n == 0) {
			$this->_error(100, "[xft2] get_by_template", "");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0]))
				$this->_error(101, "[xft2] get_by_template", $this->pathAddition.$all_args[0]);
			
			$templateStr = implode("", file($this->pathAddition.$all_args[0]));
			
			$Pattern = Array();
			$Replace = Array();
			
			foreach ($all_args[1] as $aLookUp => $aValue) {
				$Pattern[] = $this->__buildPattern($aLookUp);
				$Replace[] = $aValue;
			}
			
			return preg_replace($Pattern, $Replace, $templateStr);
		}
		return 0;
	}
	
	/**
	 *	The same as above, but with a given string as first argument.
	 *
	 *
	 */
	public function get_by_source () {
		$n = func_num_args();
		if ($n == 0) {
			$this->_error(300, "[xft2] get_by_source", "");
		} else {
			$all_args = func_get_args();
			$templateStr = $all_args[0];
			
			$Pattern = Array();
			$Replace = Array();
			
			foreach ($all_args[1] as $aLookUp => $aValue) {
				$Pattern[] = $this->__buildPattern($aLookUp);
				$Replace[] = $aValue;
			}
			
			return preg_replace($Pattern, $Replace, $templateStr);
		}
		return 0;
	}
	
	/**
	 *	Build by an Sequence
	 *
	 *	Usefull for TABLE, SELECT (Popmenus), and UL (Lists).
	 *	The template needs the following structure and at least 6 lines:
	 *
	 *	1 <!-- a Comment, line will be ignored -->
	 *	2 Data
	 *	3 <!-- a Comment, line will be ignored -->
	 *	4 Data
	 *	5 <!-- a Comment, line will be ignored -->
	 *	6 Data
	 *
	 *	So a typical file could look like this one:
	 *
	 *	1 <!-- 1.1.0 - Dietrich Roland Pehlke - xft2:: -->
	 *	2 <table class='{class}' id='{id}'>
	 *	3 <!-- -- >
	 *	4 <tr class='{tr_class}'><td class='{td_1_1}'>{value1}</td></tr>
	 *	5 <!-- -->
	 *	6 </table>{additions}
	 *
	 *	So only line 2, 4 and 6 will be parsed and embedd. The commentlines can<br>
	 *	be used for additional informations like version, date, author, client, packeges,
	 *	or any other informations.
	 *
	 *	@since	0.1.2
	 *	@param	string	$aTemplateName Name of the Template(-file)
	 *	@param	array	$aHeadInfo Array with the head information for line 2
	 *	@param	array	$bodyContent 2 dimensional Array for the sequence of line 4
	 *	@param	array	$optionalEnd Array with the end-infos for line 6 (optional)
	 *
	 */
	
	public function get_sequence () {
	
		$n = func_num_args();
		if ($n == 0) {
			$this->_error(100, "[xft2] get_sequence", "");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0])) 
				$this->_error(101, "[xft2] get_sequence", $this->pathAddition.$all_args[0]);
			
			$templateStrArray = file($this->pathAddition.$all_args[0]);
			
			$tempStr = $templateStrArray[1];
			$returnStr = "";
			
			/**
			 *	head
			 */
			
			$Pattern = Array();
			$Replace = Array();
			
			foreach($all_args[1] as $aLookUp => $aValue) {
				$Pattern[] = $this->__buildPattern($aLookUp);
				$Replace[] = $aValue;
			}
			$returnStr .= preg_replace($Pattern, $Replace, $tempStr);
			
			/**
			 *	Body -> options
			 *	Zwei-dimensionales Array!
			 */
			 
			foreach ( $all_args[2] as $row) {
				$tempStr = $templateStrArray[3];
				
				$Pattern = Array();
				$Replace = Array();
			
				foreach($row as $aLookUp => $aValue) {		
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] = $aValue;
				}
				$returnStr .= preg_replace($Pattern, $Replace, $tempStr);
			}
			
			/**
			 *	End
			 *	If the optional fourth argument for the footer is given then ...
			 *	
			 *	0.6.0 Marked as Bug! 
			 *
			 */
			
			if ($n == 4) {
				$tempStr = $templateStrArray[5];
				
				$Pattern = Array();
				$Replace = Array();
				
				foreach($all_args[3] as $aLookUp => $aValue) {
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] = $aValue;
				}
				$returnStr .= preg_replace($Pattern, $Replace, $tempStr);
			}
			return $returnStr;
			
		}
		return 0;
	}

	/**
	 *	Returning a Table from an given Template
	 *
	 *	0.6.0:	Marked for Obsolete/Delete!
	 *
	 *	@since	0.2.0
	 *
	 */
	public function get_masterTable () {
	
		$n = func_num_args();
		if ($n == 0) {
			$this->_error(100, "[xft2] get_masterTable", "");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0])) 
				$this->_error(101, "[xft2] get_masterTable", $this->pathAddition.$all_args[0]);
			
			$templateStrArray = file($this->pathAddition.$all_args[0]);
			
			$tempStr = $templateStrArray[1];
			$returnStr = "";
			
			// head
			foreach($all_args[1] as $aLookUp => $aValue) {
				$tempStr = str_replace($this->marker_begin.$aLookUp.$this->marker_end, $this->__parseStr($aValue), $tempStr);
			}
			$returnStr .= $tempStr;
			
			// body -> options
			// Zwei-dimensionales Array!
			// Calculating the offset:
			$offset = count($all_args[2][0]) + 2;
			
			for ($k=0; $k< count($all_args[2]) ; $k++) {
				$tempStr = $templateStrArray[$offset];
				foreach($all_args[2][$k] as $aLookUp => $aValue) {
					$tempStr = str_replace($this->marker_begin.$aLookUp.$this->marker_end, $this->__parseStr($aValue), $tempStr);
				}
				$returnStr .= $tempStr;
			}
			// end
			// If the optional fourth argument for the footer is given then ...
			if ($n == 4) {
				$tempStr = $templateStrArray[14];
				foreach($all_args[3] as $aLookUp => $aValue) {
					$tempStr = str_replace($this->marker_begin.$aLookUp.$this->marker_end, $this->__parseStr($aValue), $tempStr);
				}
				$returnStr .= $tempStr;
			}
			return $returnStr;
			
		}
		return 0;
	}
	
	/**
	 *	Another way to build a Table
	 *
	 *	Form of the template is a little bit difference to the 
	 *	below one:
	 *
	 *	1[0] Comment and/or additional informations - will be ignored while parsing
	 *	2[1] Head - Table begin
	 *	3[2] Comment and/or additional informations - will be ignored while parsing
	 *	4[3] TR - informations, mostly a class, define for all TD inside
	 *	5[4] Comment and/or additional informations - will be ignored while parsing
	 *	6[5] TD - informations, a two-dimensional Array
	 *	7[6] Comment and/or additional informations - will be ignored while parsing
	 *	8[7] Table end and additional informations of some HTML/XHTML1
	 *	x[x-1] Following lines will be ignored ...
	 *
	 *
	 * Example:
	 *	1 <!-- [Version: 0.4.0] - [Date: 2007-04-08] - [Author: Dietrich Roland Pehlke] - [Package: xClassLib/@private] -->
	 *	2 <table class={class}>
	 *	3 <!-- -->
	 *	4 <tr class={class}>{content}</tr>
	 *	5 <!-- -->
	 *	6 <td class={class}>{content}</td>
	 *	7 <!-- -->
	 *	8 </table>
	 *	9
	 * 10
	 * 11 Client: Dr. Vieselmeier - Germany
	 * 12 Current web-version 2.0
	 * 13
	 * 14 Example from the xClassLib for "Haddewig CCC" 
	 * 15 @2007 Stefan Haddewig & Dietrich Roland Pehlke
	 *
	 *
	 *
	 *	Notice: there is no Table-Caption in this kind of Table;
	 *	also a Table footer is missing. Could be added inside in the template.
	 *
	 *	@param	string	Filename of the Template
	 *	@param	array	The Table-Begin 
	 *	@param	array	The TR - Informations
	 *	@param	array	Two-Dimensional Array with the TD-Records
	 *	@param	array	Holds the informations for the end of the Records
	 *
	 * @date	2004-04-08 - Eastern
	 * @since 0.4.0 Beta
	 *
	 */
	
	public function get_masterTable2 ($aTemplatePath, $aHeadArray, $aTR_Info, $aTD_Info, $aTableEnd= Array() ) {
		
		if (!file_exists($this->pathAddition.$aTemplatePath)) 
				$this->_error(101, "[xft2] get_masterTable2", $this->pathAddition.$aTemplatePath);
		
		$templateStrArray = file($this->pathAddition.$aTemplatePath);
		
		$tempStr = $templateStrArray[1];
		$returnStr = "";		
		
		/**
		 *	Head - Kopfinformation
		 */
		
		$Pattern = Array();
		$Replace = Array();
		
		foreach($aHeadArray as $aLookUp => $aValue) {
			$Pattern[] = $this->__buildPattern($aLookUp);
			$Replace[] = $aValue;
		}
		$returnStr .= preg_replace($Pattern, $Replace, $tempStr);

		/**
		 *	Content - Inhalt
		 */
		
		for ($k=0; $k < count($aTD_Info) ; $k++) {
			$rowStr = "";
			for($m=0; $m < count($aTD_Info[$k]); $m++) {
				$tempStr = $templateStrArray[ 5 ];
				
				$Pattern = Array();
				$Replace = Array();
				
				foreach($aTD_Info[$k][$m] as $aLookUp => $aValue) {
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] = $aValue;
				}
				$rowStr .= preg_replace($Pattern, $Replace, $tempStr);
			}
			$tr_str = $templateStrArray[3];
			
			$Pattern = Array();
			$Replace = Array();
			foreach($aTR_Info as $aLookUp => $aValue) {
				$Pattern[] = $this->__buildPattern($aLookUp);
				$Replace[] = $aValue;	
			}
			$tr_str = preg_replace($Pattern, $Replace, $tr_str);
			
			$Pattern = Array($this->__buildPattern('content'));
			$Replace = Array($rowStr);
			$tempStr = preg_replace($Pattern, $Replace, $tr_str);
			
			$returnStr .= $tempStr;
		}
		
		/**
		 *	End - Endinformationen
		 */
		
		$tempStr = $templateStrArray[7];
		
		$Pattern = Array();
		$Replace = Array();
		foreach($aTableEnd as $aLookUp => $aValue) {
			$Pattern[] = $this->__buildPattern($aLookUp);
			$Replace[] = $aValue;	
		}
		$returnStr .= preg_replace($Pattern, $Replace, $tempStr);
		
		return $returnStr;
	}
	
	/**
	 *	Returns the full file without any parsing.
	 *
	 *	@since	0.3.0
	 *	@param 	string	Filename, including pathaddition!
	 */
	public function direct () {
		$n = func_num_args();
		if ($n == 0) {
			$this->_error(400, "[xft2] direct", "");
		} else {
			$all_args = func_get_args();
			if (!file_exists($this->pathAddition.$all_args[0])) {
				$this->_error(401, "[xft2] direct", $all_args[0]);
			} else {
				return implode("", FILE ($this->pathAddition.$all_args[0]));
			}
		}
		return 0;
	}
	
	/**
	 *	Remove HTML - Comments
	 *
	 *	@version	0.1.5
	 *	@since		0.1.1
	 *	@param 		string	$aHTML_Source			The given HTML-String - pass by reference!
	 *	@param		bool	$option_remove_newLine	Optional remove the newline ("\n") escape, default is "false"
	 *	@returns	bool							Always returning true!
	 *
	 *	@notice		Be carefull within using conditional-Comments!
	 *				They're also removed!
	 *
	 *	@notice		Since 0.1.5 where is a missing ">" in the regex. below to avoid
	 *				unexpected results. M.f.i.!
	 *
	 */
	public function removeComments (&$aHTML_Source, $option_remove_newLine=false) {
	
		$Pattern = Array(
			"*[\\<][\\!][-][-][ |\n|\r]([\n,\t,\r,0-9,a-z,A-Z, ,\\\",\\\',\\\/,\%,\&,\<,\\,\,,\;,\!,\?,\-,\–,\.,\=,\*,\_,\:,\[,\]]{0,})[-][-][\\>]*", 
			"*\n([\t]{0,})\n([\t]{0,})*",
			"*(\n([\t]{0,})){1,}*"
		);
		$Replace = Array("", "\n", "\n");
		$aHTML_Source = preg_replace($Pattern, $Replace, $aHTML_Source);
		
		if (true == $option_remove_newLine) $aHTML_Source = ereg_replace("[\n|\r]", "", $aHTML_Source);
		
		return true;
	}
	
	/**
	 *	The same as above, but to get it more //language-style-confirm//
	 *	within other method-calls like "remove_unusedMarkers" we've
	 *	got now this one ...
	 *
	 *	@since	0.1.5
	 *
	 */
	public function remove_comments (&$aHTML_Source, $option_remove_newLine=false) {
		return $this->removeComments ($aHTML_Source, $option_remove_newLine);
	}
	
	/**
	 *	Finds Keywords inside
	 *
	 *	More a utilitie than an usefull runtime-public function,
	 *	only used for 'unknown' templates and 'real'-beta.
	 *	Will be obsolete in future.
	 *
	 *	@since	0.1.1
	 *
	 */
	public function getKeywords () {
		$n = func_num_args();
		if ($n == 0) {
			die("Konnte keine Keywords finden, weil kein Template angegeben worden ist! [ 200 ]");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0])) die("Datei: ".$this->pathAddition.$all_args[0]." nicht vorhanden oder Pfad fehlerhaft. [public function->getKeywords]");
			
			$templateStr = implode("", file($this->pathAddition.$all_args[0]));
			$matches = Array();
			preg_match_all("{\{.*}", $templateStr, $matches, PREG_PATTERN_ORDER);
			
			return $matches;
			
		}
	}
	
	/**
	 *	Some parsing of values to html-entities
	 *
	 *	@version 	2
	 *	@since 	0.1.2
	 *	@param	string	aHTML_Source	The HTML Source, could be also XHMT or XML.
	 * 									Any string.
	 *
	 *	@notice: "<",">" and "&" will be restored so Tags can be placed into the source.
	 *
	 */
	private function __parseStr ($aHTML_Source) {
		
		$aHTML_Source = htmlentities($aHTML_Source);
		
		$Pattern = Array("*[&][l][t][;]*", "*[&][g][t][;]*", "*[&][q][u][o][t][;]*", "*[&][a][m][p][;]*");
		$Replace = Array("<", ">", "\"", "&");
		
		return preg_replace($Pattern, $Replace, $aHTML_Source);
	}
	
	/**
	 *	Displays Errors on the screen
	 *
	 *	@since	0.1.2
	 *	@param	integer	$aNumber	The ErrorNumber, or TypeNumber of the error.
	 *	@param	string	$aJob		A reference string from the public function witch throws the error.
	 *	@param	string	$aFilename	The full path to a given File
	 *
	 *	-- <i>If the template for the error-messages 'xft2_error.tmpl', placed by default
	 *	-- in 'templates/', is not found the 'noErrorTmpl' string will be placed on top of the 
	 *	-- message.</i>
	 *
	 */
	private function _error ($aNumber, $aJob, $aFilename) {
		$aMsg = str_replace('{file}', $aFilename, $this->xft2_error_msg[$this->lang][(string)$aNumber]);
		if (file_exists($this->pathAddition."xft2_error.tmpl") ) { 
			$msg = $this->get_by_template("xft2_error.tmpl", 
				Array(	'error_num' => $aNumber, 
						'error_msg' => $aMsg, 
						'error_job' => $aJob, 
						'version' => $this->versionStr, 
						'headline' =>  $this->xft2_error_msg[$this->lang]['headline'],
						'image_path' => WB_URL
					) 
				);
			die ($msg);
		} else {
			die ("<html><head><title>xFastTemplate2::Error</title><style>* {font-family:Verdana,sans-serif;font-size:11px;color:#900;line-height:1.2;}</style></head><body><i>".$this->xft2_error_msg[$this->lang]['noErrorTmpl']."</i><br>".$this->xft2_error_msg[$this->lang]['headline']."<br>Nr.: ".$aNumber."<br>Job: ".$aJob."<br>Message: ".$aMsg."</body></html>");
		}
	}
	
	/**
	 *	Defines the Array with the Error-Message-Template-Strings
	 *
	 *	Private function is called from the constructor.
	 *
	 *	@since	0.2.0
	 *	@notice	At this time only 'german' and 'english' are supported
	 *	@see	__construct
	 *
	 */
	private function _define_error_msg () {
		$this->xft2_error_msg = Array (
			'german' => Array(
				'headline' => 'Bei der Programmausf&uuml;hrung ist ein Fehler aufgetreten:',
				'noErrorTmpl' => 'Keine Vorlage f&uuml;r die Fehlermeldung gefunden!',
				'100' => 'Kein Template oder Pfad angegeben',
				'101' => 'Die TemplateDatei <b>{file}</b> ist nicht vorhanden oder der Pfad ist fehlerhaft.',
				'200' => 'Anzahl der Zeilen im Template {file} ist incorrect; es m&uuml;ssen mindestens 6 Zeilen vorhanden sein!',
				'300' => 'Kein TemplateString angebeben!',
				'400' => 'Keine Datei angegeben!',
				'401' => 'Datei <b>{file}</b> ist nicht vorhanden oder der Pfad ist fehlerhaft.',
				'500' => 'Aufruf einer nicht mehr inplantierten Funktion!.'
			),
			'english' => Array(
				'headline' => 'An error occurs while operation:',
				'noErrorTmpl' => 'Template for the error-messages not found!',
				'100' => 'No Template given as argumen 1.',
				'101' => 'File <b>{file}</b> could not be found, maybe missing or path is incorrect.',
				'200' => 'Incorrect number of lines in the template {file}; there must be at last 6 lines as a minimum!',
				'300' => 'No source given!',
				'400' => 'No file given!',
				'401' => 'File <b>{file}</b> could not be found; maybe it\'s missing or the path isn\'t correct!',
				'500' => 'Call for an obsolete public function that doesn\'t exsits anymore!'
			)
		);
	}
	
	/**
	 *	Looking up for css-classes
	 *
	 *	@since 0.4.1
	 *
	 */
	public function findClasses ($aHTML_Source) {
		
		$matches = Array();
		preg_match_all("[class=[\"|\']([\n,\t,0-9,a-z,A-Z, _-]{0,})[\"|\']]", $aHTML_Source, $matches, PREG_PATTERN_ORDER);
		return $matches;
	}
	
	/**
	 *	Looking up for css-ids
	 *
	 *	@since 0.5.0
	 */
	public function findIds ($aHTML_Source) {
		
		$matches = Array();
		preg_match_all("[id=[\"|\']([\n,\t,0-9,a-z,A-Z, _-]{0,})[\"|\']]", $aHTML_Source, $matches, PREG_PATTERN_ORDER);
		return $matches;
	}
	
	/**
	 *
	 *	First private test alpha dev - very rough (2007-08-28)
	 *
	 *	Looks for a pre-rendered-template-file and if it is
	 *	valid (*) then returns the hole rendered (pre-compiled) file
	 *	instead of parsing the orginal template-file.
	 *	
	 *	@state @dev - @alpha
	 *	@version 0.6.0
	 *
	 *
	 *	@param string	$aFileName		The filename of the template (HTML/XHML - XML untested yet)
	 *	@param array	$aValueArray	A ass. Array with the 'keys' and the 'values' to excange
	 *									within the template.
	 *
	 *	Notice:
	 *		The templ-file in the cache declared/contains two variables:
	 *
	 *		$result_str ::	Holds the complete String as a result.
	 *		$test_time	::	Holds the filemtime of the orginal template-file
	 *						to determinate changes. If the orginal template-file
	 *						is "younger" a new file will be generated in the 
	 *						cachefolder by following conversation:
	 *
	 *						<orginal_template_filename.tmpl>.<md5-hash>.tmpl
	 *
	 *						Where the md5-hash is produce out of the 'keys' of the
	 *						$aValueArray - so you can use one template in differnce
	 *						circumstances;  f.ex. tables with difference rows.
	 *
	 *
	 *	Todo:	For a single HTML/XHML Page maybe a little bit too mutch
	 *			overhead - but for some "sequencer"-job maybe the right way
	 *			and the first step for an "renderSequence" public function.
	 *
	 *
	 *	Also:	Problems with double unqoutet marks, like {{a_key}} or ??a_key??
	 *			It's still recomented at this time to use only one char for
	 *			the marks, like {a_lookup}, #a_lookup#, ?a_lookup?, !a_lookup!
	 *
	 */
	public function renderTemplate ($aFileName, $aValueArray) {

		if ( 0 == func_num_args() ) {
			$this->_error(100, "[xft2] renderTemplate", "");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0]))
			$this->_error(101, "[xft2] renderTemplate", $this->pathAddition.$all_args[0]);
			
			$org_time = filemtime($this->pathAddition.$all_args[0]);
			
			$md5_key_template = md5(implode(",",array_keys($aValueArray)));
			
			$render_template_name = $all_args[0].".".$md5_key_template.".tmpl";
			
			$new_render = false;
			
			if (file_exists($this->cachefolder.$render_template_name) ) {
				
				/**	
				*	Get the ready template out of the cache
				*/
				
				require ($this->cachefolder.$render_template_name);

				if ($org_time <= $test_time) {

					/** 
					*	Direct return 
					*/
					
					return $result_str;
					
				} else {
					$new_render = true;
				}
			} else {
				$new_render = true;
			}
			
			if ($new_render == true) {
				
				/**
				*	Ok - unsere PreKompilat ist entweder nicht da, oder zu alt:
				*	neu generieren.
				*
				*/
				
				$templateStr = implode("", file($this->pathAddition.$all_args[0]));
				
				$templateStr = "<?php\n\n/**\n*\tAutogenerated by x_fast_template2!\n*\tEdit on own risk!\n*/\n\n\$test_time=\"".$org_time."\";\n\$result_str=\"".$templateStr."\";\n?>\n";
				
				$Pattern = Array();
				$Replace = Array();
		
				foreach($aValueArray as $aLookUp => $aValue) {
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] =  "\".\$aValueArray['".$aLookUp."'].\" ";
				}
				$tempSource = preg_replace($Pattern, $Replace, $templateStr);
				
				$fp = fopen($this->cachefolder.$render_template_name, 'w');
				if ($fp) {
					fwrite($fp, $tempSource, strlen($tempSource) );
					fclose($fp);
			
					require ($this->cachefolder.$render_template_name);
		
					return $result_str;
					
				} else {
					return "Error: couldn't write render!";
				}
			}			
		}
	}

	/**
	 *
	 *	look at "get_sequence" and "renderTemplate" for details yet;
	 *	it's still here in @dev and strict alpha/private!
	 *
	 *
	 *
	 */
	public function renderSequence () {
		
		if ( 0 == func_num_args() ) {
			$this->_error(100, "[xft2] renderSequence", "");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0])) 
				$this->_error(101, "[xft2] renderSequence", $this->pathAddition.$all_args[0]);
			
			/** Getting the last modification date of the orginal template-file. */
			$org_time = filemtime($this->pathAddition.$all_args[0]);
			
			$new_render = false;
			
			/** getting the render_template_name  */ 
			
			$part_1 = implode(",", array_keys($all_args[1])	);
			
			/** part 2 becomes tricky */
			$temp = array_keys($all_args[2][0]);
			$part_2 = "";
			foreach($all_args[2] as $aRef) 	$part_2 .= $temp[0]; /** Please keep in mind, that it is a 2-d Array */
			
			$part_3 = implode(",", array_keys($all_args[3])	);
			
			/** getting the md5-hash */
			$temp_md5 = (string)md5($part_1.$part_2.$part_3);
			
			/** Build the render-template-name */
			$render_template_name = $all_args[0].".".$temp_md5.".tmpl";
			
			/** Looking for the render-template-name in the cache-folder  */
			if ( file_exists ($this->cachefolder.$render_template_name ) ) {
			
				/** File is there ... open */
				require ($this->cachefolder.$render_template_name);
				
				if ($org_time <= $test_time) {

					/** Direct return */
					return $result_str;
					
				} else {
					/** File to old ... new generate */
					$new_render = true;
				}
			} else {
				/** File isn't there ... generate */
				$new_render = true;
			}
			
			if (true == $new_render) {
	
				/** Holds the hole template-date in the array */
				$templateStrArray = file($this->pathAddition.$all_args[0]);
				
				/** first: declare the begin of the file */
				
				$temp_content = "<?php\n\n/**\n*\tAutogenerated by x_fast_template2!\n*\tEdit on own risk!\n*/\n\n\$test_time=\"".$org_time."\";\n\$result_str=\"";
				
				/** 
				 *	Head :: $templateStrArray[1]	
				 *		A simple assoziative Array
				 */
				
				$Pattern = Array();
				$Replace = Array();
				
				foreach($all_args[1] as $aLookUp => $aValue) {
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] = "\".\$all_args[1]['".$aLookUp."'].\"";					
				}
				$temp_content .= preg_replace($Pattern, $Replace, $templateStrArray[1]);
				
				/**	
				 *	Body :: $templateStrArray[3]	
				 *		A two dimensonal Array with an assoziative Array inside ...
				 */
				$row_counter = 0;
				foreach($all_args[2] as $tempRow) {
					$Pattern = Array();
					$Replace = Array();
					foreach($tempRow as $aLookUp => $aValue) {
						$Pattern[] = $this->__buildPattern($aLookUp);
						$Replace[] = "\".\$all_args[2][".$row_counter."]['".$aLookUp."'].\"";
					}
					$temp_content .= preg_replace($Pattern, $Replace, $templateStrArray[3]);
					$row_counter++;
				}
				
				/** 
				 *	Foot :: $templateStrArray[5]	
				 *		Also a simple assoziative Array
				 */
				$Pattern = Array();
				$Replace = Array();
				
				foreach($all_args[3] as $aLookUp => $aValue) {
					$Pattern[] = $this->__buildPattern($aLookUp);
					$Replace[] = "\".\$all_args[3]['".$aLookUp."'].\"";					
				}
				$temp_content .= preg_replace($Pattern, $Replace, $templateStrArray[5]);
				
				/** Making the End ... */
				$temp_content .= "\";\n?>\n";
				
				/**
				 *	Puh - ready to write ...
				 *
				 */
				$fp = fopen($this->cachefolder.$render_template_name, 'w');
				if ($fp) {
					fwrite($fp, $temp_content, strlen($temp_content) );
					fclose($fp);
			
					require ($this->cachefolder.$render_template_name);
		
					return $result_str;
					
				} else {
					return "Error: couldn't write render!";
				}
			}
		}	
	}
	
	/**
	 *	Public public function for setting up the markers.
	 *
	 *	@since	0.6.2
	 *	@param	string	aBeginMarker	The start-marker char, default is "{"
	 *	@param	string	aEndMarker		The end-marker char, default is "}"
	 *
	 *	@notice:	If the second param isn't set, the marker_begin is 
	 *				used for the marker_end!
	 *
	 *	Examples:	$ref->setMarker() 			// Reset the markers to the default chars
	 *				$ref->setMarker('#')		// Both markers are now '#'
	 *				$ref->setMarker('<','>')	// Markers are now for the form '< a_marker >'
	 *
	 *	Problems:	These chars are not recomented for markers:
	 *				'*' (Astrix) [0.6.2]
	 * 
	 */
	public function setMarker ($aBeginMarker = "{", $aEndMarker="}") {
		if (func_num_args() == 1) $aEndMarker = $aBeginMarker;
		$this->marker_begin = quotemeta($aBeginMarker);
		$this->marker_end = quotemeta($aEndMarker);
	}
	
	/**
	 *	Private public function to build the preg-replace pattern, so 
	 *	we havn't it to change 20 times in the source if needed.
	 *	More or less a kind of "central"-building.
	 *
	 *	@since	0.6.2
	 *	@param	string	aLookUp	The Lookup-String in the pattern.
	 *					Default is an empty String.
	 *
	 *
	 *			Ignored-Chars are: Space, Tab, LF/CR
	 *
	 *	Markerforms could f.ex. like:
	 *	a.	{ a_Marker }
	 *	b.	{{ a_Marker }}
	 *	c.	{{[tab] a_Marker [tab] }}
	 *	d.	{{[lf][tab] a_Marker [tab]}
	 *
	 */
	public function __buildPattern ($aLookUp = "") {
		return "*[\\".$this->marker_begin."]{1,}[ |\t\n]{0,}".$this->__mb_sql_regcase($aLookUp)."[ |\t\n]{0,}[\\".$this->marker_end."]{1,}*";
	}
	
	/**
	 *	As "sql_regcase" is marked as deprecated in PHP 5.3.x
	 *	we are in the need to do it ouerself. (The "mb_" stands for "multi(-ble) byte")
	 *
	 *	@since	0.2.6 (WB)
	 *	@param	string	the string to transform
	 *	@param	string	an encoding for the mb_xxx functions, default is "auto".
	 *	@return	string	the sql pattern
	 *
	 */
	private function __mb_sql_regcase($aString, $encoding='auto'){
		$return_str= "";
		$max= mb_strlen($aString,$encoding);
		for ($i= 0; $i < $max; $i++) {
			$char= mb_substr( $aString, $i, 1, $encoding);
			$up= mb_strtoupper( $char, $encoding);
			$low= mb_strtolower( $char, $encoding);
			$return_str .= ($up != $low) ? '['.$up.$low.']' : $char;
  		}
  		return $return_str;
	}
	
	/**
	 *	Public public function to get a assoc. Array
	 *	from a given Template. (include the pathAddition)
	 *
	 *	Blockmarkers are "### <a_name> ###" and "### /<a_name>"
	 *	Any String outside blocks are ignored and can be used for everything,
	 *	f.ex. as for comments, notifications or copyrights ...
	 *
	 *	@since	0.6.2
	 *	@param	string path to the block-templatefile
	 *	@return	an assosiative array
	 *
	 */
	public function getBlocks ($aFilename) {
	
		if (!file_exists($this->pathAddition.$aFilename)) $this->_error(101, "[xft2] getBlocks", $this->pathAddition.$aFilename);
		
		$fp = file($this->pathAddition.$aFilename);
		
		/**
		 *	Marked for optimations!
		 */
		if (!$fp) die ("unknown error by 'getBlocks'");
		
		$r = Array();
		$old_marker = "";
		$mode = 0; // no buffer
		$buffer = "";
		
		foreach ($fp as $zeile) {
			$test = (substr($zeile, 0, 3) == "###");
			if (true == $test) {
				$marker = trim (preg_replace (Array("*[\[]{0,}[\#][\#][\#][ ]{0,}[\/]{0,1}[\]]{0,1}*"), Array(""), $zeile) );
				if ($marker != $old_marker) {
					$old_marker = $marker;
					$mode = 1; // switching the buffer on
				} else {
					$r[$marker] = $buffer;
					$buffer = "";
					$mode = 0; // switching the buffer off
				}
			} else {
				if ($mode == 1) $buffer .= $zeile;
			}
		}
		return $r;
	}
	
	/**
	 *	Removes unused marker
	 *
	 *	@since	0.6.4
	 *	@param string	aStringtoParse -> pass by reference!
	 *
	 */
	public function remove_unusedMarkers (&$aString) {
		$Pattern = Array("*[\\".$this->marker_begin."]{1,}[ |\t\n]{0,}[a-z A-Z 0-9_,!-]{1,}[ |\t\n]{0,}[\\".$this->marker_end."]{1,}*");
		$Replace = Array("");
		$aString = preg_replace($Pattern, $Replace, $aString);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function qf_xhtml1_hidden($aName ="", $aValue="") {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->qf_xhtml1_hidden($aName, $aValue);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function get_xhtml1_js_link ($aFileName="") {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->get_xhtml1_js_link($aFileName);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function get_xhtml1_css_link ($aFileName="", $media='screen') {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->get_xhtml1_css_link($aFileName, $media);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function _get_xhtml1_meta_tag ($aHttp_equiv= "", $aContent="", $aType="name") {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->_get_xhtml1_meta_tag($aHttp_equiv, $aContent, $aType);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function build_xhtml1_metaTags ($aArray, $aType='name') {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->build_xhtml1_metaTags($aArray, $aType);
	}

	/**
	 *	@suite	HTML
	 */
	public function _build_xhtml1_img_tag ($aFileName="", $aAltStr="") {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->_build_xhtml1_img_tag($aFileName, $aAltStr);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function build_preloader ($aArray) {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->build_preloader($aArray);
	}
	
	/**
	 *	@suite	HTML
	 */	
	public function build_attributes ($aArray = Array() ) {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->build_attributes($aArray);
	}
	
	/**
	 *	@suite	HTML
	 */
	public function build_css_condition ($aCondition="IE", $aHref="", $aImport=true) {
		if (false === $this->__register_suite("html")) return NULL;
		return $this->__suites['html']->build_css_condition($aCondition, $aHref, $aImport);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function capture_echo ($aJobStr="") {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->capture_echo($aJobStr);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function show_menu2 (&$options) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->show_menu2($options);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function register_wb_values_to_js (&$values) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->register_wb_values_to_js($values);
		
	 }
	 
	/**
	 *	@suite	WebsiteBaker
	 */
	public function register_modfiles (&$db, $page_id) {
		
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->register_modfiles($db, $page_id);
	 }
	 
	/**
	 *	@suite	WebsiteBaker
	 */
	public function register_templatefiles (&$files) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->register_templatefiles($files);
	}
	 
	/**
	 *	@suite	WebsiteBaker
	 */
	public function register_external (&$files) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->register_external($files);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function get_modules (&$db, $page_id) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->get_modules ($db, $page_id);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function get_section(&$db, $section_id, &$result_array, $not_found_msg = "<br />Section within id <b>%s</b> not found.") {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->get_section($db, $section_id, $result_array, $not_found_msg);
	}
	
	/**
	 *	@suite	WebsiteBaker
	 */
	public function __get_modules_files ($aPath) {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->__get_modules_files ($aPath);
	}

	/**
	 *	@suite	WebsiteBaker
	 */
	public function resolve_path ($aPath, $aAlternativePath="") {
		if (false === $this->__register_suite("websitebaker")) return NULL;
		return $this->__suites['websitebaker']->resolve_path ($aPath, aAlternativePath);
	}

	/**
	 *	@suite	MySQL
	 */
	public function build_mysql_query ($type, $table_name, &$table_values, $condition="") {
		if (false === $this->__register_suite("mysql")) return NULL;
		return $this->__suites['mysql']->build_mysql_query($type, $table_name, $table_values, $condition);
	}
		 
	/**
	 *	@suite	MySQL
	 */
	public function get_all(&$aMySQL_result, &$storage) {
		if (false === $this->__register_suite("mysql")) return NULL;
		return $this->__suites['mysql']->get_all($aMySQL_result, $storage);
	}
	
	/**
	 *	@suite	MySQL
	 */
	public function get_all_by_query( &$db, &$storage, $table_name, &$table_values, $condition) {
		if (false === $this->__register_suite("mysql")) return NULL;
		return $this->__suites['mysql']->get_all_by_query( $db, $storage, $table_name, $table_values, $condition);
	}
	
	/**
	 *	@suite	Javascript
	 */
	 public function clean_up_str (&$aStr) {
		if (false === $this->__register_suite("js")) return NULL;
		return $this->__suites['js']->clean_up_str( $aStr );
	 }
}
/** End of Class */	

}
/** End of if_not_class_exists */
?>