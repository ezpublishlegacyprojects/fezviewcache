<?php

include_once( 'kernel/common/template.php' );

$ini = eZINI::instance( 'fezviewcache.ini' );

$Offset = $Params['Offset'];
$ViewParameters = array();

if( !is_numeric( $Offset ) )
	$Offset = 0;

$ViewParameters['offset'] = $Offset;
$ClassList = eZContentClass::fetchAllClasses();

$tpl = templateInit();
$tpl->setVariable( 'class_list', $ClassList );
$tpl->setVariable( 'view_parameters', $ViewParameters);

$Result = array();
$Result['path'] = array( array( 'url' => false,
								'text' => 'Manage cache' ) );

$Result['left_menu'] = 'design:fezviewcache/menu.tpl';

$Result['content'] = $tpl->fetch( 'design:fezviewcache/list.tpl' );

?>
