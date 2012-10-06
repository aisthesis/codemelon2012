<?php
/*
	php script for documentation of Edge class
	
	author: Marshall Farrier
	date: 5/21/11
*/
	include 'template/error.php';
	
	$page_title = 'codeMelon | Java libraries';
	$content_height = '2048';
	// Used for alternating row colors
	$i = 1;
	
	// insert header:
	include_once('template/header.html');
	// insert graph package navigation
	include_once('template/package_nav_graph.html');
	// insert graph package overview
	include_once('template/class_graph_edge.html');
?>