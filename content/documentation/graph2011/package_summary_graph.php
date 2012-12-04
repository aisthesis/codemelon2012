<?php
/*
	php script for index page to documentation of Java graph library
	
	author: Marshall Farrier
	date: 4/26/11
*/
	include 'template/error.php';
	
	$page_title = 'codeMelon | Java libraries';
	$content_height = '640';
	
	// insert header:
	include_once('template/header.html');
	// insert graph package navigation
	include_once('template/package_nav_graph.html');
	// insert graph package overview
	include_once('template/package_summary_graph.html');
?>