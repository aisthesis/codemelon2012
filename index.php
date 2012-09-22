<?php
/*
 * file:    index.php
 * author:  Marshall Farrier
 * date:    08/23/2012
 * description:
 *          php entry point for codeMelon2012
 * Site aesthetic should draw a lot from http://thenextweb.com/
 */
$pageName = 'HOME';

require_once 'templates/head.html';
require_once 'templates/navigation.html';
require_once 'templates/logo.html';
require_once 'templates/header.html';
require_once 'templates/content-sidebar.html';
require_once 'content/home.html';
require_once 'templates/lower-background.html';
require_once 'templates/footer.html';
?>