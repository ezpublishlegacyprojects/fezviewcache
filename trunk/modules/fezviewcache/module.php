<?php

$Module = array( 'name' => 'fezviewcache',
				 'variable_params' => false,
				 'ui_component_match' => 'module' );

$ViewList = array();

$ViewList['list'] = array( 'script' => 'list.php',
						   'default_navigation_part' => 'fezviewcachenavigationpart',
						   'params' => array(),
						   'unordered_params' => array( 'offset' => 'Offset' ) ,
						   );
$FunctionList = array();

?>
