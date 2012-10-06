<?php
/*
	php script for documentation of linearprogramming package
	
	author: Marshall Farrier
	date: 5/5/11
*/
	include 'template/error.php';
	
	$page_title = 'codeMelon | Java libraries';
	$content_height = '512';
	// Used for alternating row colors
	$i = 1;
	
	// insert header:
	include_once('template/header.html');
	// insert graph package navigation
	include_once('template/package_nav_linprog.html');
	// insert graph package overview
	include_once('template/pkg_sum_linprog.html');
?>