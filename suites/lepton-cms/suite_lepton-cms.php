<?php

/**
 *	class suite_lepton-cms
 *	LEPTON-CMS specific methods for xFastTemplate2
 *
 *	@version	0.3.0
 *	@date		2014-10-12
 *	@author		Dietrich Roland Pehlke - Aldus
 *	@package	Lepton-CMS: modules - xFastTemplate2
 *
 */

namspace x_fast_template_2\suites\lepton-cms;

require_once( dirname(__FILE__)."/../suite.php");

class suite_lepton_cms extends suite
{
	private $default_path = "";
	private $default_url = "";
	private $guid = "853E1624-D872-418B-A09E-51D7C7EEC68E";

	public function __construct() {
		if (defined('WB_PATH')) $this->default_path = WB_PATH;
		if (defined('WB_URL')) $this->default_url = WB_URL;
	}
	
	/**
	 *	@suite		Lepton-CMS
	 *
	 *	@since		0.3.0
	 *	@platform	Lepton 1.3.1
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
	 *	Get a section via id  //get_section ( &database, 1 , $result);
	 *	Get a section via id with own text // get_section ($database, 44, $result,  "Diese section gibt es nicht!");
	 *	Get more than one within an array and own "Not-found"-text // get_section ($database,  array (1,2,5), $result, "yeu - anubis % notahere, anjin-san!" );
	 *
	 */
	public function get_section(&$db, $section_id, &$result_array, $not_found_msg = "<br />Section within id <b>%s</b> not found.") {
		
		if (is_array($section_id)) {
			foreach($section_id as $temp_id) $this->get_section($db, $temp_id, $result_array, $not_found_msg);
			return true;
		}
		
		$query_sections = $db->query("SELECT `section_id`,`module` FROM `".TABLE_PREFIX."sections` WHERE `section_id`= '".$section_id."'");
		
		if (true === $db->is_error()) {
			$result_array['content'] = $db->got_error();
			return false;
		}
		
		if( $query_sections->numRows() > 0) {
			$section = $query_sections->fetchRow( MYSQL_ASSOC );
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
	
	/**
	 *	@suite	Lepton-CMS
	 *
	 *
	 */
	public function __get_modules_files ($aPath) {
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
	 *	@suite		Lepton-CMS
	 *
	 *	Looking for the modules witch are involved for the current page_content.
	 *
	 *	@version	0.1.5
	 *	@since		0.1.5
	 *	
	 *	@param	object	A valid databaseinstance - pass by reference!
	 *	@param	integer	Any page_id.
	 *
	 *	@return	array	A linear list within the modul-names.
	 *
	 */
	public function get_modules (&$db, $page_id) {
		
		$return_array = array();
		
		$db->execute_query(
			"SELECT `module` from `".TABLE_PREFIX."sections` where `page_id`='".$page_id."' order by position",
			true,
			$return_array
		);
		
		if (!$db->is_error()) return $db->get_error();
		
		return $return_array;
	}
	
	/**
	 *	@suite		Lepton-CMS
	 *
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Lepton-CMS - Modules
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
	public function register_templatefiles (&$files) {
		
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
	 *	@suite	Lepton-CMS
	 *
	 *	@version	0.1.3
	 *	@since		0.1.3
	 *	@package	Lepton-CMS - Modules
	 *
	 *	All other "external" files to link ... note: there is no test for existing ones here!
	 *
	 */
	public function register_external (&$files) {
	
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
	 *	@suite	Lepton-CMS
	 *	
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Lepton-CMS - Modules
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
	public function register_modfiles (&$db, $page_id) {
		
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
		
		while ($modul = $result->fetchRow( MYSQL_ASSOC ) ) {
			
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
		 *	We're only define the constances if we've got at least one file found!
		 */
		if(!defined('MOD_FRONTEND_CSS_REGISTERED') && (true === $got_one['css']) ) define('MOD_FRONTEND_CSS_REGISTERED', true);
		if(!defined('MOD_FRONTEND_JAVASCRIPT_REGISTERED') && (true === $got_one['js']) ) define('MOD_FRONTEND_JAVASCRIPT_REGISTERED', true);
		
		return $additional_links;
	}
	 
	/**
	 *	@suite	Lepton-CMS
	 *
	 *	@version	0.1.3
	 *	@since		0.1.3
	 *	@package	Lepton-CMS - Modules
	 *	@link		http://code.jellycan.com/files/show_menu2-README.txt
	 *
	 *	@notice		For more informations about show_menu2 please visit
	 *				http://code.jellycan.com/files/show_menu2-README.txt
	 *
	 */
	public function show_menu2 (&$options) {
	
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

	public function capture_echo ($aJobStr="") {
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
	 *	@suite	Lepton-CMS
	 *	
	 *	@version 	0.1.3
	 *	@since		0.1.3
	 *	@package	Lepton-CMS - Modules
	 *
	 *	Sometimes it's a good idea to transform Lepton-CMS values/constants
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
	public function register_lepton_values_to_js (&$values) {
		
		/**
		 *	Basic WB Constants that should reg. ever.
		 */
		$vars = array (
			'WB_URL'		=> array ('type' => 'str', 'value' => WB_URL),
		#	'WB_PATH'		=> array ('type' => 'str', 'value' => WB_PATH),
			'TEMPLATE_DIR'	=> array ('type' => 'str', 'value' => TEMPLATE_DIR)
		);
		
		$vars = array_merge($vars, $values);
		
		$template_js = "<script type='text/javascript'>\n/* <![CDATA[ */\n\t// Coming from xFastTemplate";
		
		foreach ($vars as $key=>&$options) {
			
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
		
		$template_js .= "\n/* ]]> */\n</script>\n";
		
		return $template_js;
	 }
	 
	/**
	 *	To keep the method backward compatible.
	 */
	public function register_wb_values_to_js( &$values) {
		return $this->register_lepton_values_to_js( $values );
	}

	/**
	 *	Looks for an (local) file, and if exists returns the absolute url,
	 *	otherwise the alternate one.
	 *	Makes use of class-vars default_url and default_path.
	 *
	 *	@param	string	Any local path.
	 *	@param	string	Any other one.
	 *
	 *	@return string	Resulting url (absolute).
	 *
	 */
	public function resolve_path ($aPath, $aAlternativePath="") {
		$temp = $this->default_path.$aPath;
		return (true === file_exists($temp)) 
			? $this->default_url.$aPath 
			: $this->default_url.aAlternativePath
			;
	}
	
	/**
	 *
	 *	@param	string	The "called" method(-name)
	 *	@param	array	Assoc. array within the arguments/params
	 *
	 */
	public function __call($function_name, $args) {
		return "Error: class-method '".$function_name."' is not found inside within args - ".implode(",", $args);
	}
}
?>