<?php
	include("developer_functions_0.php");
	include("developer_functions_1.php");
	include("developer_functions_2.php");

	$zero 	= "video";

	$v = false;
	if( isset($_GET['query']) && isset($_GET['value']) ) { $v = valid( $_GET['query'], $_GET['value'] ); }
	if( $v==false ) { exit(0); }
	
	include('article_video.php');
?>