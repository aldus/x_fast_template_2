<?php


class suite_mysql
{

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
				$q = substr($q, 0, -1)." WHERE ".$condition;
				
				break;
			
			case 'insert':
				$q  = "INSERT into `".$table_name."` (`";
				$q .= implode("`,`", array_keys($table_values))."`) VALUES ('";
				$q .= implode("','", array_values($table_values))."')";
				
				break;
			
			case 'delete':
				$q  = "DELETE from `".$table_name."` WHERE ".$condition;
				
				break;
			
			case 'select':
				$q  = "SELECT `";
				$q .= implode("`,`", $table_values)."` ";
				$q .= "FROM `".$table_name."` WHERE ".$condition;
				
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
}
?>