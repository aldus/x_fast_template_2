<?php

/**
 *	MySQL suite for HTML_Template_xFastTemplate2.
 *	Please keep in mind, that the @version belongs to this class!
 *
 *	@version	0.4.0
 *	@date		2010-12-11
 *	@author		Dietrich Roland Pehlke
 *	@package	Lepton-CMS: modules - xFastTemplate2
 *	@require	PHP >= 5.2.2
 *	@licence	GPL
 *
 */

namespace x_fast_template_2\suites\mysql;

class suite_mysql
{

	private $guid = "8D085680-1ED3-4206-9D3A-147B6D4E0DC9";
	
	/**
	 *
	 *	@since	0.3.0
	 *
	 *	@param	string	The type, e.g. "update", "insert" or "delete"
	 *	@param	string	The tablename
	 *	@param	array	Assoc. array, that holds the field names corr. to the values
	 *	@param	string	The condition
	 *
	 *	@return	string	The mySQL query-string or NULL if no type march.
	 *
	 */
	public function build_mysql_query ($type, $table_name, &$table_values, $condition="") {
		
		switch( strtolower($type) ) {
			
			case 'update':
				$q = "UPDATE `".$table_name."` set ";
				foreach($table_values as $field => $value) $q .= "`".$field."`='".$value."',";
				$q = substr($q, 0, -1).( ($condition != "") ? " WHERE ".$condition : "" );
				
				break;
			
			case 'insert':
				$q  = "INSERT into `".$table_name."` (`";
				$q .= implode("`,`", array_keys($table_values))."`) VALUES ('";
				$q .= implode("','", array_values($table_values))."')";
				
				break;
			
			case 'delete':
				$q  = "DELETE from `".$table_name."`".( ($condition != "") ? " WHERE ".$condition : "" );
				
				break;
			
			case 'select':
				$q  = "SELECT `";
				$q .= implode("`,`", $table_values)."` ";
				$q .= "FROM `".$table_name."`".( ($condition != "") ? " WHERE ".$condition : "" );
				
				break;
			
			/**
			 *	Alter a table
			 *
			 *	On this one, we're using the $table_values in a differ way than normal:
			 *	The array has to be formed as
			 * 
			 *	'fieldname' => array(
			 *		'operation'	=> add | delete | set	!required
			 *		'type'		=> field type e.g. VARCHAR(255)	!required
			 *		'charset'	=> optional charset
			 *		'collate'	=> optional collate
			 *		'params'	=> optional any additional params like "not NULL"
			 *	);
			 *
			 *	e.g.:
			 *
			 *	$upgrade_fields = array(
			 *		'plan'	=> array(
			 *			'operation'	=> "add",
			 *			'type'		=> "varchar(255)",
			 *			'charset'	=> "utf8",
			 *			'collate'	=> "utf8_general_ci",
			 *			'params'	=> "not NULL default ''"
			 *		),
			 *		'sort'	=> array(
			 *			'operation' => "add",
			 *			'type'		=> "varchar(255)",
			 *			'charset'	=> "utf8",
			 *			'collate'	=> "utf8_general_ci",
			 *			'params'	=> "not NULL default ''"
			 *		)
			 *	);
			 *
			 */
			case 'alter':
				$q = "ALTER TABLE `".$table_name."`";
				
				foreach($table_values as $name => &$options) {
				
					if ( (!isset($options['operation']) ) || (!isset($options['type']) ) ) continue;
					
					$q .= " ".strtoupper($options['operation'])." `".$name."` ".$options['type'];
					
					if( isset($options['charset'])) $q .= " CHARACTER SET ".$options['charset'];
					if( isset($options['collate'])) $q .= " COLLATE ".$options['collate'];
					if( isset($options['params'])) $q .= " ".$options['params'];
					
					$q .= ",";
				}
				$q = substr($q, 0, -1);
				
				break;
				
			default:
				$q  = NULL; // "Error: type doesn't match to 'update', 'insert', or 'delete'!";
				
		}
		
		return $q;
	}
	
	/**
	 *	Transforms an mysql-query-result in an array.
	 *
	 *	@since	0.3.0
	 *
	 *	@param	mixed	A valid mySQL-result-resource. Pass by reference!
	 *	@param	array	An array as an storage. Pass by reference!
	 *
	 *	@return	nothing	All params are passed by reference.
	 */
	public function get_all(&$aMySQL_result, &$storage) {
		while ( !false == ($data = $aMySQL_result->fetchRow( MYSQL_ASSOC ) ) ) $storage[] = $data;
	}
	
	/**
	 *	Build an assoc. array within the results of a mySQl query.
	 *
	 *	@param	mixed	A valid DB-Connector. Passed by reference.
	 *	@param	array	A linear array that holds the results. Passed by reference.
	 *	@param	string	The (mySQL-) table(-name).
	 *	@param	array	Assoc. array, that holds the field names corr. to the values. Passed by reference.
	 *	@param	string	The (mySQL-) query condition.
	 *
	 */
	public function get_all_by_query( &$db, &$storage, $table_name, &$table_values, $condition) {
		
		$query = $this->build_mysql_query("select", $table_name, $table_values, $condition);
		
		$result = $db->query( $query );
		
		if ($result->numRows() > 0) $this->get_all($result, $storage);
	}
	
	/**
	 *	Returns a linear array within the tablenames of the current database
	 *
	 *	@param	object	A MySQL-Database-Object-Instance. Pass by reference.
	 *	@param	string	Optional string to 'strip' chars from the tablenames, e.g. the prefix.
	 *	@return	array	An array within the tablenames of the current database.
	 *
	 */
	public function list_tables(&$db, &$strip="" ) {
		$result = $db->query("SHOW tables");
		if (!$result) return array( $db->get_error() );
		$ret_value = array();
		while(false != ($data = $result->fetchRow())) {
			$ret_value[] = $data[0];
		}
		if ($strip != "") {
			foreach($ret_value as &$ref) $ref = str_replace($strip, "", $ref);
		}
		return $ret_value;
	}
	
	/**
	 *	Placed for all fields from a given table(-name) an assocc. array
	 *	inside a given storrage-array.
	 *
	 *	@param	object	An MySQL-Instance(-object).
	 *	@param	string	The tablename.
	 *	@param	array	An array to store the results.
	 *	@return	bool	True if success, otherwise false.
	 *
	 */
	public function describe_table(&$db, $tablename, &$storrage) {
		$result = $db->query("DESCRIBE `".$tablename."`");
		if (!$result) return false;
		while(false != ($data = $result->fetchRow( MYSQL_ASSOC ) ) ) {
			$storrage[] = $data;
		}
		return true;
	}
}
?>