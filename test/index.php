<?php

/**
 *	Test units for xFastTemplate2
 *	@version	0.1.0
 *	@date		2013-01-10
 *	@author		Dietrich Roland Pehlke
 *	@package	Lepton-CMS - Modules - Tests
 *	@license	Free - use it as you want without any warrenty.
 *
 */
 
/**
 *	Getting the instance
 */

require_once( dirname(__FILE__)."/../include.php");

$xft2 = new HTML_Template_xFastTemplate2();

$xft2->set_template_folder( dirname(__FILE__)."/templates/");

/**
 *	Storrage for the html-content and test-results.
 */
$test_content = "";
$test_content .= "<b>Initial basic test(-s).</b>";
/**
 *	1
 */
$test_content .= $xft2->get_by_template(
	"simple_line.lte",	# templatefile
	array( 				# values
		'message' => "1. Hello world!"
	)
);
$test_content .= "<hr class='delimiter' />";
/**
 *	2
 */
$template_str = $xft2->direct( "simple_line.lte");

$test_content .= $xft2->get_by_source(
	$template_str,			# var that holds the template string
	array(					# values
		"message" => "2. build by source"
	)
);
$test_content .= "<hr class='delimiter' />";

/**
 *	3
 */
$results = array();
$source = $xft2->parse_template_file(
	'simple_template.lte',	# template file
	$results				# storrage for the values, results
);

# echo "<pre>";
# print_r( $results );
# echo "</pre>";

$counter = 0;
foreach($results as $ref=>$source) {
	$test_content .= $xft2->get_by_source( $source, 
		array( 'message' => ($counter++) . " coming form parse_template_file"
		)
	);
}
$test_content .= "<hr class='delimiter' />";

/**
 *	4
 */
require_once( dirname(__FILE__)."/../../../config.php" );
global $database;

$test_content .= "<b>All modules on page x.</b>";
$all_modules = $xft2->get_modules( $database, 5 );
foreach($all_modules as &$name) $test_content .= "<p>Module(-s) on page 5: ".$name."</p>";

$test_content .= "<hr class='delimiter' />";

/**	
 *	5
 */
$test_content .= "<b>Getting installed table-names via list_tables.</b>";

$fields = $xft2->list_tables( $database, TABLE_PREFIX );
foreach($fields as $temp_name) $test_content .= "<p>".$temp_name."</p>";

$test_content .= "<hr class='delimiter' />";

/**
 *	6
 */
$test_content .= "<b>Getting table informations and field_names via describe_table.</b>";
$storrage = array();
$xft2->describe_table(
	$database,
	TABLE_PREFIX."mod_wysiwyg",
	$storrage
);
foreach($storrage as $key => $value) {
	$test_content .="<div class='t_info'>";
	foreach($value as $sk => $sv) {
		$test_content .= "<p>".$sk."= ".$sv."</p>";
	}
	$test_content .= "</div>";
}

$test_content .= "<hr class='delimiter' />";

/**
 *	7
 */
$test_content .= "<b>Building queries.</b>";
$fields = array(
	'id'	=> rand(2,34),
	'page_id' => rand(2,55),
	'section_name' => 'unknown',
	'module_name'	=> 'test',
	'date'	=> TIME()
);
$q = $xft2->build_mysql_query(
	'insert',
	TABLE_PREFIX."mod_test",
	$fields,
	''
);
$test_content .= "<p class='query'>".$q."</p>";

$q = $xft2->build_mysql_query(
	'update',
	TABLE_PREFIX."mod_test",
	$fields,
	'`page_id`=12'
);
$test_content .= "<p class='query'>".$q."</p>";

$fields = array(
	'plan'	=> array(
		'operation'	=> "add",
		'type'		=> "varchar(255)",
		'charset'	=> "utf8",
		'collate'	=> "utf8_general_ci",
		'params'	=> "not NULL default ''"
	)
);

$q = $xft2->build_mysql_query(
	'alter',
	TABLE_PREFIX."mod_test",
	$fields,
	''
);
$test_content .= "<p class='query'>".$q."</p>";

$test_content .= "<hr class='delimiter' />";

/**
 *	8
 */
$test_content .= "<b>Generating source.</b>";
$values = array(
	'version'	=> '0.1.0',
	'date'		=> date("Y-m-d", time() ),
	'class_name' => "xft2_experimental_class",
	'guid'	=> 'ABA5A01C-D1E4-48A5-89FA-D7AC6AF52632',
	'hash'	=> md5( microtime() )
);
$source = $xft2->get_by_template(
	'simple_source.lte',
	$values
);

$test_content .= "<pre>".$source."</pre>";

/**
 *	9
 */
$test_content .= "<b>Testing css methods.</b>";
$path = dirname(__FILE__)."/css/test.css";
$css = $xft2->optimize_css( 
	$path,
	"",
	true
);
$test_content .= "<pre>".$css."</pre>";

$test_content .= "<hr class='delimiter' />";

$test_content .= "<p>end</p>";

$page_content = array(
	'version'	=> $xft2->versionStr,
	'date'		=> date("Y-m-d H:i:s", time() ),
	'content' => $test_content,
	'module_url' => WB_URL."/modules/x_fast_template_2/test"
);

$page = $xft2->get_by_template(
	'testpage.lte',
	$page_content
);

$xft2->remove_unusedMarkers($page);

echo $page

?>