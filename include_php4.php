<?php

/**
 *	Website Baker Project <http://www.websitebaker.org/>
 *	Copyright (C) 2004-2007, Ryan Djurovich
 *	
 *	Website Baker is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *	
 *	Website Baker is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General License for more details.
 *	
 *	You should have received a copy of the GNU General License
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
 *	@require	PHP 4.4.x
 *	
 *	0.1.1	2008-08-26	First beta run
 *
 */

if (!class_exists('HTML_Template_xFastTemplate2')) {

/**
 *
 * @version		0.7.1 beta
 * @build		31
 * @date		2008-05-12
 * @author		Dietrich Roland Pehlke
 * @license		free - without any warrenties as it is
 * @state		@dev
 * @require		PHP 5.2.x
 *
 *
 *	0.7.1	2008-08-16	Additional changes for Websitebaker.
 *						Add new function "capture_echo" to get rid of bufferon-action-capture-bufferoff
 *						inside Websitebaker.
 *	
 *	0.7.0	2008-05-12	Some additional functions.
 *						Change code for PHP 5.2.x
 *	
 *	0.6.6	2008-04-08	Bugix for PHP 4.x
 *	
 *	0.6.5	2008-03-26	Renamed "stripComments" into "removeComments".
 *						Minor changes inside the regExpr.
 *	
 *	0.6.4	2008-03-22	Add new function "remove_unusedMarkers" for removing unused markers.
 *	
 *	0.6.3	2008-03-12	Minor typos in function-description eleminated ( ->direct ).
 *			2008-03-18	Add description(-s) to ->getBlocks
 *			
 *	0.6.2	2007-09-01	Add new function "setMarker" for easier define the begin and end-marker.
 *	
 *						Modifications at the preg-patterns to handle double-markers in the form:
 *							{aMarker}, {{aMarker}}, or f.ex. <<<< A MARKER >>>>
 *	
 *						New function "__buildPattern" for "central"-building the preg-replace pattern
 *						at one place instead of 20 places.
 *						
 *						Minor changes for: the classname and the filename: PEAR-Compatible.
 *						Class:	HTML_Template_xFastTemplate2
 *						File:	xFastTemplate2.php
 *	
 *	0.6.1	2007-08-30	Add " " and TAB into the preg-replace patterns to alowed spaces and tabs
 *						in the marker, f.ex. "{  A-Marker  }" instead of strict "{A-Marker}".
 *	
 *	0.6.0	2007-08-28	"preg_replace" instead of "ereg_replace"|"str_replace" in functions:
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
 *						Also: function get_masterTable is marked for obsolete!
 *	
 *						Also: Testfunction (Alpha!): renderTemplate, renderSequence for tests
 *						
 *			2007-08-29	Minor fixes and changes in "getSequence"; include now foreach instead "for".
 *	
 *	
 *	0.5.0	2007-08-09	Bugfix in function "findClasses".
 *						Add new function "findIDs".
 *	
 *	0.4.3	2007-07-18	Added $this->pathAddition into function "direct"
 *
 *	0.4.2	2007-06-27	Pathaddition-Bugfix in _error for the correct path
 *						to the error-template. Minor text-changes in the error-messages.
 *						Bugfix in direct(). 
 *	
 *	0.4.1	2007-06-26	HTML-Entities: & and " masked in the function "__parseStr"
 *						added to avoid future problems with embedded entities.
 *
 *	0.4.0	2007-04-08	Minor typos and additions in the documentation and DocBlocks
 *					
 *	0.4.0	2007-04-08	New function: get_masterTable2
 *						Additional function for another way to handle masterTable.
 *
 *	0.3.0				New function: get_masterTable
 *
 *	0.3.0	2007-04-04	New function: direct 
 *
 *	0.3.0	2007-04-04	New function: get_by_souce
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

/**
 *	Experimental addition to 0.2.4
 *
 *
 */
class xft2_fms 
{

	var	$buffer=	array ();
	
	var $_metas=	array ();
	
	var $_css=		array ();
	
	var $_js=		array ();
	
	var $_modules=	array ();
	

	function add_page_modules_files (&$db, $page_id) {
	
	
	}
}

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
	var $pathAddition = "templates/";
	
	/**
	 *	Variable defines the "start" marker.
	 *
	 *	Default setting is "{"
	 *
	 *	@type	string
	 *	@version	0.1.2
	 *
	 */
	var $marker_begin = "{";
	
	/**
	 *	Variable defines the "end" marker.
	 *
	 *	Default setting is "}"
	 *
	 *	@type		string
	 *	@version	0.1.2
	 *
	 */
	var $marker_end = "}";
	
	/**
	 *	variable holds the current version.
	 *
	 *	@type		string
	 *	@version	0.1.2
	 *
	 */
	var $versionStr = "0.7.5 @dev Beta for PHP 4.4.x [2008-11-14]";
	
	/**
	 *	array hold the error-messages
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
	var $xft2_error_msg;
	
	/**
	 *	Variable holds the language in witch the error will display
	 *
	 *	At this time only 'german' (default) and 'english' is supported
	 *	but as a variable you can add more.
	 *
	 *	@type		string
	 *	@version	0.2.0
	 *
	 */
	var $lang = 'german';
	
	/**
	 *	Variable holds the name of the cache-folder, incl. ending slash
	 *
	 *	@type		string
	 *	@version	0.6.0
	 *
	 */
	var $cachefolder = 'xft2_cache/';
	
	function HTML_Template_xFastTemplate2() {
		$this->__construct();
	}
	
	/**
	 *	Constructor of the class
	 *
	 * 
	 */
	function __construct() {
		$this->_define_error_msg();
	
	}
	
	/**
	 *	De-Constructor of the class
	 *
	 * 
	 */
	function __destruct() {
	
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
	function get_by_template () {
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
	function get_by_source () {
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
	
	function get_sequence () {
	
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
	function get_masterTable () {
	
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
	* Another way to build a Table
	*
	* Form of the template is a little bit difference to the 
	* below one:
	*
	* 1[0] Comment and/or additional informations - will be ignored while parsing
	* 2[1] Head - Table begin
	* 3[2] Comment and/or additional informations - will be ignored while parsing
	* 4[3] TR - informations, mostly a class, define for all TD inside
	* 5[4] Comment and/or additional informations - will be ignored while parsing
	* 6[5] TD - informations, a two-dimensional Array
	* 7[6] Comment and/or additional informations - will be ignored while parsing
	* 8[7] Table end and additional informations of some HTML/XHTML1
	* x[x-1] Following lines will be ignored ...
	*
	*
	* Example:
	*  1 <!-- [Version: 0.4.0] - [Date: 2007-04-08] - [Author: Dietrich Roland Pehlke] - [Package: xClassLib/@private] -->
	*  2 <table class={class}>
	*  3 <!-- -->
	*  4 <tr class={class}>{content}</tr>
	*  5 <!-- -->
	*  6 <td class={class}>{content}</td>
	*  7 <!-- -->
	*  8 </table>
	*  9
	* 10
	* 11 Client: Dr. Vieselmeier - Germany
	* 12 Current web-version 2.0
	* 13
	* 14 Example from the xClassLib for "Haddewig CCC" 
	* 15 @2007 Stefan Haddewig & Dietrich Roland Pehlke
	*
	*
	*
	* Notice: there is no Table-Caption in this kind of Table;
	* also a Table footer is missing. Could be added inside in the template.
	*
	* @param aTemplatePath	string	Filename of the Template
	* @param aHeadArray		array	The Table-Begin 
	* @param aTR_info		array	The TR - Informations
	* @param aTD_info		array	Two-Dimensional Array with the TD-Records
	* @param aTabelEnd		array	Holds the informations for the end of the Records
	*
	* @date	2004-04-08 - Eastern
	* @since 0.4.0 Beta
	*
	*/
	
	function get_masterTable2 ($aTemplatePath, $aHeadArray, $aTR_Info, $aTD_Info, $aTableEnd= Array() ) {
		
		if (!file_exists($this->pathAddition.$aTemplatePath)) 
				$this->_error(101, "[xft2] get_masterTable2", $this->pathAddition.$aTemplatePath);
		
		$templateStrArray = file($this->pathAddition.$aTemplatePath);
		
		$tempStr = $templateStrArray[1];
		$returnStr = "";		
		
		/**
			Head - Kopfinformation
		*/
		
		$Pattern = Array();
		$Replace = Array();
		
		foreach($aHeadArray as $aLookUp => $aValue) {
			$Pattern[] = $this->__buildPattern($aLookUp);
			$Replace[] = $aValue;
		}
		$returnStr .= preg_replace($Pattern, $Replace, $tempStr);

		/**
			Content - Inhalt
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
			End - Endinformationen
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
	* @since	0.3.0
	* @param 	string	Filename, including pathaddition!
	*/
	function direct () {
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
	function removeComments (&$aHTML_Source, $option_remove_newLine=false) {
	
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
	function remove_comments (&$aHTML_Source, $option_remove_newLine=false) {
		return $this->removeComments ($aHTML_Source, $option_remove_newLine);
	}
	
	/**
	 *	Finds Keywords inside
	 *
	 *	More a utilitie than an usefull runtime-function,
	 *	only used for 'unknown' templates and 'real'-beta.
	 *	Will be obsolete in future.
	 *
	 *	@since	0.1.1
	 *
	 */
	function getKeywords () {
		$n = func_num_args();
		if ($n == 0) {
			die("Konnte keine Keywords finden, weil kein Template angegeben worden ist! [ 200 ]");
		} else {
			$all_args = func_get_args();
			
			if (!file_exists($this->pathAddition.$all_args[0])) die("Datei: ".$this->pathAddition.$all_args[0]." nicht vorhanden oder Pfad fehlerhaft. [function->getKeywords]");
			
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
	function __parseStr ($aHTML_Source) {
		
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
	 *	@param	string	$aJob		A reference string from the function witch throws the error.
	 *	@param	string	$aFilename	The full path to a given File
	 *
	 *	-- <i>If the template for the error-messages 'xft2_error.tmpl', placed by default
	 *	-- in 'templates/', is not found the 'noErrorTmpl' string will be placed on top of the 
	 *	-- message.</i>
	 *
	 */
	function _error ($aNumber, $aJob, $aFilename) {
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
	 *	function is called from the constructor.
	 *
	 *	@since	0.2.0
	 *	@notice	At this time only 'german' and 'english' are supported
	 *	@see	__construct
	 *
	 */
	function _define_error_msg () {
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
				'500' => 'Call for an obsolete function that doesn\'t exsits anymore!'
			)
		);
	}
	
	/**
	 *	Looking up for css-classes
	 *
	 *	@since 0.4.1
	 *
	 */
	function findClasses ($aHTML_Source) {
		
		$matches = Array();
		preg_match_all("[class=[\"|\']([\n,\t,0-9,a-z,A-Z, _-]{0,})[\"|\']]", $aHTML_Source, $matches, PREG_PATTERN_ORDER);
		return $matches;
	}
	
	/**
	 *	Looking up for css-ids
	 *
	 *	@since 0.5.0
	 */
	function findIds ($aHTML_Source) {
		
		$matches = Array();
		preg_match_all("[id=[\"|\']([\n,\t,0-9,a-z,A-Z, _-]{0,})[\"|\']]", $aHTML_Source, $matches, PREG_PATTERN_ORDER);
		return $matches;
	}
	
	/**
	 *
	 *	First test alpha dev - very rough (2007-08-28)
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
	 *			and the first step for an "renderSequence" function.
	 *
	 *
	 *	Also:	Problems with double unqoutet marks, like {{a_key}} or ??a_key??
	 *			It's still recomented at this time to use only one char for
	 *			the marks, like {a_lookup}, #a_lookup#, ?a_lookup?, !a_lookup!
	 *
	 */
	function renderTemplate ($aFileName, $aValueArray) {

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
	function renderSequence () {
		
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
	 *	function for setting up the markers.
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
	function setMarker ($aBeginMarker = "{", $aEndMarker="}") {
		if (func_num_args() == 1) $aEndMarker = $aBeginMarker;
		$this->marker_begin = quotemeta($aBeginMarker);
		$this->marker_end = quotemeta($aEndMarker);
	}
	
	/**
	 *	function to build the preg-replace pattern, so 
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
	function __buildPattern ($aLookUp = "") {
		return "*[\\".$this->marker_begin."]{1,}[ |\t\n]{0,}".$this->__mb_sql_regcase($aLookUp)."[ |\t\n]{0,}[\\".$this->marker_end."]{1,}*";
	}
	
	/**
	 *	As "sql_regcase" is marked as deprecated in PHP 5.3.x
	 *	we are in the need to do it ouerself. (The "mb_" stands for "multi(-ble) byte")
	 *
	 *	@since	0.2.6 (WB)
	 *	@access	private
	 *	@param	string	the string to transform
	 *	@param	string	an encoding for the mb_xxx functions, default is "auto".
	 *	@return	string	the sql pattern
	 *
	 */
	function __mb_sql_regcase($aString, $encoding='auto'){
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
	 *	function to get a assoc. Array
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
	function getBlocks ($aFilename) {
	
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
	function remove_unusedMarkers (&$aString) {
		$Pattern = Array("*[\\".$this->marker_begin."]{1,}[ |\t\n]{0,}[a-z A-Z 0-9_,!-]{1,}[ |\t\n]{0,}[\\".$this->marker_end."]{1,}*");
		$Replace = Array("");
		$aString = preg_replace($Pattern, $Replace, $aString);
	}
	
	/**
	 *	0.7.0 Some experimental functions for the next update
	 *	
	 *	Quickform (1) -> XHTML1 strict: hidden Element
	 *
	 */
	function qf_xhtml1_hidden($aName ="", $aValue="") {
		return "<p><input type=\"hidden\" name=\"".$aName."\" value=\"".$aValue."\" /></p>\n";
	}
	
	function get_xhtml1_js_link ($aFileName="") {
		if ($aFileName == "") {
			return "";
		} else {
			return "<script type=\"text/javascript\" src=\"".$aFileName."\" charset=\"utf-8\"></script>\n";
		}
	}
	
	function get_xhtml1_css_link ($aFileName="", $media='screen') {
		if ($aFileName == "") {
			return "";
		} else {
			return "<link rel=\"stylesheet\" type=\"text/css\" media=\"".$media."\" href=\"".$aFileName."\" />\n";
		}
	}
	
	/**
	 *	Private
	 */
	function _get_xhtml1_meta_tag ($aHttp_equiv= "", $aContent="", $aType="name") {
		return "\t<meta ".$aType."=\"".$aHttp_equiv."\" content=\"".$aContent."\" />\n";
	}
	
	/**
	 *	Public
	 */
	function build_xhtml1_metaTags ($aArray, $aType='name') {
		$str ="";
		foreach ($aArray as $a => $v)  $str .= $this->_get_xhtml1_meta_tag($a, $v, $aType);
		return $str;
	}
	/**
	 *	Private
	 *	M.f.i.
	 */
	function _build_xhtml1_img_tag ($aFileName="", $aAltStr="") {
		return "<p><img src='".$aFileName."' width='0px' height='0px' alt='".$aAltStr."'/></p>\n";
	}
	
	/**
	 *	Public
	 */
	function build_preloader ($aArray) {
		$str = "\n<!-- preloader -->\n";
		foreach ($aArray as $a => $v) $str .= $this->_build_xhtml1_img_tag($v, $a);
		return $str;
	}
	
	function build_attributes ($aArray = Array() ) {
		$str = "";
		foreach($aArray as $a => $b) $str .= $a."=\"".$b."\" ";
		return $str;
	}
	
	/**
	 *
	 *	function; more or less experimental for including
	 *	conditional comments for differt css.
	 *
	 *	@since	0.7.0
	 *	@state	@dev, - none public
	 *
	 *	@param	string	The condition, f.ex. "IE" or "IE6", "IE7", "&gt;IE6"
	 *	@param	string	The url for the css file
	 *	@param	bool	Optional formatflag for the output
	 *
	 *	@return string	The Conditional-Comment.
	 *
	 *
	 */
	function build_css_condition ($aCondition="IE", $aHref="", $aImport=true) {
		
		if (true == $aImport) {
			$str = "<!--[if ".$aCondition."]>\n<style type='text/css'>@import url(".$aHref.");</style>\n<![endif]-->\n";
		} else {
			$str = "<!--[if ".$aCondition."]>\n<link rel='stylesheet' href='".$aHref."'>\n<![endif]-->\n";
		}
		
		return $str;
	}
	
	/**
	 *	Website Baker ...
	 *
	 *	@version	0.1.0
	 *	@since		0.7.1
	 *	@package	Websitebaker - Modules
	 *
	 */
	function capture_echo ($aJobStr="") {
		ob_start();
			global $wb;
			global $database;
			global $TEXT;
			
			eval ($aJobStr);
			$result_str = ob_get_contents();
		ob_end_clean();
		return $result_str;
	}
	
	/**
	 *	Website Baker ...
	 *
	 *	@version	0.1.3
	 *	@since		0.1.3
	 *	@package	Website Baker - Modules
	 *	@link		http://code.jellycan.com/files/show_menu2-README.txt
	 *
	 *	@notice		For more informations about show_menu2 please visit
	 *				http://code.jellycan.com/files/show_menu2-README.txt
	 *
	 */
	function show_menu2 (&$options) {
	
		$op = array (
			'amenu'			=> 0,
			'astart'		=> 'SM2_ROOT',
			'amaxlevel'		=> 'SM2_CURR+1',
			'aoptions'		=> 'SM2_TRIM',
			'aitemopen'		=> '[li][a][menu_title]</a>',
			'aitemclose'	=> '</li>',
			'amenuopen'		=> '[ul]',
			'amenuclose'	=> '</ul>',
			'atopitemopen'	=> false,
			'atopmenuopen'	=> false
		);
		
		foreach($options as $key=>$value) {
			$key = strtolower($key);
			if (true === array_key_exists($key, $op) )  $op[$key]=$value;
		}
		
		$arg = "";
		
		foreach($op as $key=>$value) {
			if (is_bool($value)) $value = ($value == true) ? 'true' : 'false';
			
			switch ($key) {
				case 'aitemopen':
				case 'aitemclose':
				case 'amenuopen':
				case 'amenuclose':
					$value = "'".$value."'";
					break;
			}
			$arg .= $value.", ";
		}
		$arg = substr($arg, 0, -2);
		
		$source = $this->capture_echo("show_menu2(".$arg.");");
		
		return $source;
	}
	
	/**
	 *	Website Baker ...
	 *	
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Website Baker - Modules
	 *
	 *	Sometimes it's a good idea to transform WB values/constants
	 *	into javascript.
	 *
	 *	@param	array	Assoc. array within the (JS-)Name and 
	 *					the values inside a assoc. array with at least
	 *					two keys: 'type' and 'value'.
	 *
	 *					Supported types are: 'string','str', 's'.
	 *					As for future modifications there are also "function", "interger".
	 *					Strings are escaped in quotes - all other values are leaved untouched.
	 *
	 *
	 */
	function register_wb_values_to_js (&$values) {
		
		/**
		 *	Basic WB Constants that should reg. ever.
		 */
		$vars = array (
			'WB_URL'		=> array ('type' => 'str', 'value' => WB_URL),
			'WB_PATH'		=> array ('type' => 'str', 'value' => WB_PATH),
			'TEMPLATE_DIR'	=> array ('type' => 'str', 'value' => TEMPLATE_DIR)
		);
		
		$vars = array_merge($vars, $values);
		
		$template_js = "<script type='text/javascript'>\n// Coming from WB";
		
		foreach ($vars as $key=>$options) {
			
			switch (strtolower($options['type'])) {
				
				case 'string':
				case 'str':
				case 's':
					$value = "\"".$options['value']."\"";
					break;

				case 'integer':
				case 'int':
				case 'i':
				case 'float':
				case 'double':
				case 'function':
					/**
					 *	Keeping untouched
					 */
				default:
					$value = $options['value'];
			}
			$template_js .= "\n\tvar ".$key."=\t".$value.";";
		}
		
		$template_js .= "\n</script>\n";
		
		return $template_js;
	 }
	 
	/**
	 *	Website Baker ...
	 *	
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Website Baker - Modules
	 *
	 *	The other version of "register_modfiles" ... but this one
	 *	is only stepping one time thrue the sections.
	 *	Also the method is looking for subfolders like "css" or "js".
	 *
	 *	@param	object	A valid database-object instance - pass by reference!
	 *	@param	integer	Any Page-Id.
	 *
	 *	@return	string	A HTML-String within the links to the modules-specific css/js files.
	 *
	 */
	function register_modfiles (&$db, $page_id) {
		
		$query = "SELECT module from ".TABLE_PREFIX."sections WHERE page_id='".$page_id."' AND module<>'wysiwyg' order by position";
		$result = $db->query( $query );
		
		if (!$result) return $db->get_error();
		
		if ($result->numRows() < 1) return "";
		
		$file_list = array (
			'css'	=> array (
				'frontend.css',
				'css/frontend.css'
				),
			'js'	=> array (
				'frontend.js',
				'js/frontend.js'
				)
		);
		
		$additional_links = "";
		
		$baselink = WB_PATH."/modules/";

		$got_one = array('css' => false, 'js' => false);
		
		/**
		 *	To avoid the situation that files are linked twice, e.g.
		 *	if you got two or more sections within the same module like 'image-flow'.
		 *
		 */
		$linked_modules = array();
		
		while ($modul = $result->fetchRow() ) {
			
			if (true === in_array($modul['module'], $linked_modules)) continue;
			
			$linked_modules[] = $modul['module'];
			
			$temp_folder = $baselink.$modul['module']."/";
			
			foreach($file_list as $base_type=>$files) {
				
				$base_type = strtolower($base_type);
				
				foreach($files as $fp) {

	 				if ( true === file_exists($temp_folder.$fp)) {
	 					$temp = str_replace (WB_PATH, WB_URL, $temp_folder);
				
						$additional_links .= ($base_type == 'js') 
							? $this->get_xhtml1_js_link($temp.$fp)
							: $this->get_xhtml1_css_link($temp.$fp) 
							;
							
						$got_one[$base_type] = true;
					}
				}
			}
		}
		
		/**
		 *	We're only define the constances if we've got at least one file founded!
		 */
		if(!defined('MOD_FRONTEND_CSS_REGISTERED') && (true === $got_one['css']) ) define('MOD_FRONTEND_CSS_REGISTERED', true);
		if(!defined('MOD_FRONTEND_JAVASCRIPT_REGISTERED') && (true === $got_one['js']) ) define('MOD_FRONTEND_JAVASCRIPT_REGISTERED', true);
		
		return $additional_links;
	 }
	 
	/**
	 *	Website Baker ...
	 *
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Website Baker - Modules
	 *
	 *	Looks for the template-specific css/js files inside the Template-Directory
	 *
	 *	@param	array	Assoc. array within the file-paths:
	 *
	 *	@example	$paths =  array (
	 *					'css' => array (
	 *						'/css/whatever.css',
	 *						'/css/print.css'
	 *						),
	 *					'js' => array (
	 *						'/js/frontend.css',
	 *						'/js/drp_http_xhtml_request.js'
	 *					 	)
	 *					);
	 *
	 */
	function register_templatefiles (&$files) {
		
		$additional_links = "";
		
		foreach($files as $base_type=>$file_list) {
			
			$base_type = strtolower($base_type);
			
			foreach($file_list as $temp_file) {
				$temp_info = explode("|", $temp_file);
				$temp_file = trim($temp_info[0]);
				if(count($temp_info) == 1) $temp_info[1] = "screen";
				$temp = TEMPLATE_DIR.$temp_file;
				$temp = str_replace(WB_URL, WB_PATH, $temp);
				
				if (file_exists($temp) ) {
					
					$temp = str_replace(WB_PATH, WB_URL, $temp);
					
					$additional_links .= ($base_type == 'js') 
						? $this->get_xhtml1_js_link($temp)
						: $this->get_xhtml1_css_link($temp, trim($temp_info[1]))
						;
				}
			}
		}
		
		return $additional_links;
	}
	 
	/**
	 *	Website Baker ...
	 *
	 *	@version	0.1.3
	 *	@since		0.1.3
	 *	@package	Website Baker - Modules
	 *
	 *	All other "external" files to link ... note: there is no test for existing ones here!
	 *
	 */
	function register_external (&$files) {
	
		$additional_links = "";
	
		foreach($files as $base_type=>$file_list) {
			foreach($file_list as $temp_file) {
				
				$additional_links .= (strtolower($base_type) == 'js') 
					? $this->get_xhtml1_js_link($temp_file)
					: $this->get_xhtml1_css_link($temp_file)
					;
			}
		}
	
		return $additional_links;
	}
	
	/**
	 *	Website Baker ...
	 *
	 *	Looking for the modules witch are involved for the current page_content.
	 *
	 *	@version	0.1.5
	 *	@since		0.1.5
	 *	@package	Website Baker - Modules
	 *	
	 *	@param	object	A valid databaseinstance - pass by reference!
	 *	@param	integer	Any page_id.
	 *
	 *	@return	array	A linear list within the modul-names.
	 *
	 */
	function get_modules (&$db, $page_id) {
		$query = "SELECT section_id, module from ".TABLE_PREFIX."sections where page_id='".$page_id."' order by position";
		
		$result = $db->query( $query );
		
		if (!$result) return $db->get_error();
		
		$return_array = array();
		
		while ($data = $result->fetchRow() ) {
			$return_array[] = $data['module'];
		}
		
		return $return_array;
	}
	
	/**
	 *	Website Baker ...
	 *
	 *	@since		0.2.0
	 *	@platform	WB 2.8.0
	 *
	 *	@param	db			object	Any database-connector instance.
	 *	@param	section_id	mixed	could be a single integer or an array of section_ids
	 *	@param	results		array 	A assoc. array within "content" and  "links" as keys.
	 *	@param	not_found	string	optional an message-string within on placeholder (%s) for the 
	 *								requested section_id
	 *
	 *	@return boolean		true|false if failed
	 *
	 *	@examples:
	 *	Aufruf einer Sektion via id  //get_section ( &database, 1 , $result);
	 *	Aufruf einer Sektion via id mit eigenem Text // get_section ($database, 44, $result,  "Diese section gibt es nicht!");
	 *	Aufruf mit array und eigenem "Not-found"-Text // get_section ($database,  array (1,2,5), $result, "yeu - anubis % notahere, anjin-san!" );
	 *
	 */
	function get_section(&$db, $section_id, &$result_array, $not_found_msg = "<br />Section within id <b>%s</b> not found.") {
		
		if (is_array($section_id)) {
			foreach($section_id as $temp_id) $this->get_section($db, $temp_id, $result_array, $not_found_msg);
			return true;
		}
		
		$query_sections = $db->query("SELECT section_id,module FROM ".TABLE_PREFIX."sections WHERE section_id = '$section_id' ");
		
		if (true === $db->is_error()) {
			$result_array['content'] = $db->got_error();
			return false;
		}
		
		if( $query_sections->numRows() > 0) {
			$section = $query_sections->fetchRow();
			$section_id = $section['section_id'];
			$module = $section['module'];
			
			ob_start();
				global $database;
				global $TEXT;
				global $wb;
				require_once (WB_PATH."/modules/".$module."/view.php");
				$result_str = ob_get_contents();
			ob_end_clean();
			
			$result_array['content'] .= $result_str;
			$result_array['links']	 .= $this->__get_modules_files( WB_PATH."/modules/".$module);
			return true;
			
		} else {
			$result_array['content'] .= sprintf($not_found_msg, $section_id);
			return false;
		}
	}
	
	function __get_modules_files ($aPath) {
		$f = array (
			'css' => array (
				'/css/frontend.css',
				'/frontend.css'
				),
			'js' => array (
				'/js/frontend.js',
				'/frontend.js'
			)
		);
		
		$additional_links = "";
		
		foreach($f as $base_type=>$files) {
			foreach($files as $temp_file) {
				$path = $aPath.$temp_file;
				if (true == file_exists($path)) {
					
					$temp = str_replace(WB_PATH, WB_URL, $path);
					
					$additional_links .= ($base_type == 'js') 
						? $this->get_xhtml1_js_link($temp)
						: $this->get_xhtml1_css_link($temp)
						;
				}
			}
		}
		
		return $additional_links;
	}
	
	/**
	 *
	 *	@since 0.3.0
	 *
	 *	@param	string	The type, e.g. "update" or "insert"
	 *	@param	string	The tablename
	 *	@param	array	Assoc. array, that holds the field names corr. to the values
	 *	@param	string	The condition
	 *
	 *	@return	string	The mySQL query-string
	 *
	 */
	function build_mysql_query ($type, $table_name, $table_values, $condition="") {
		
		switch( strtolower($type) ) {
			
			case 'update':
				$q = "UPDATE `".$table_name."` set ";
				foreach($table_values as $field => $value) $q .= "`".$field."`='".$value."',";
				$q = substr($q, -1)." where ".$condition;
				
				break;
			
			case 'insert':
				$q  = "INSERT into `".$table_name."` (`";
				$q .= implode("`,`", array_keys($table_values))."`) VALUES ('";
				$q .= implode("','", array_values($table_values))."')";
				
				break;
			
			case 'delete':
				$q  = "DELETE from `".$table_name."` where ".$condition;
				
				break;
				
			default:
				$q  = NULL; // "Error: type doesn't match to 'update', 'insert', or 'delete'!";
				
		}
		
		return $q;
	}
	
	/**
	 *	For JavaScript we are sometime in the need to escape the linebreaks.
	 *
	 *	@param string The string - pass by reference.
	 *
	 */
	 function clean_up_str (&$aStr) {
	 	$var = array(
	 		"\n" => "\\n",
	 		"\r" => "\\r"
	 	);
	 	
	 	$aStr = str_replace(array_keys($var), array_values($var), $aStr);
	 
	 }
}
/** End of Class */	

}
/** End of if_not_class_exists */
?>