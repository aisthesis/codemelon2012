<?php
/*
 * @file index.php
 * @author Marshall Farrier
 * @date 08/23/2012
 * @description php entry point for codeMelon2012
 * Site aesthetic should draw a lot from http://thenextweb.com/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
$page = 'home';
$animate = true;
if (isset($_GET['animate'])) {
    $animate = $_GET['animate'];
}
$article = '';
// necessary php includes
require_once 'includes/common.php';
require_once 'includes/navigation.php';
require_once 'includes/content.php';
require_once 'includes/articles.php';

require_once 'templates/head.html';
require_once 'templates/navigation.html';
require_once 'templates/logo.html';
require_once 'templates/header.html';
content_sidebar($page);
// require_once 'templates/content-sidebar.html';
require_once 'content/home.html';
require_once 'templates/lower-background.html';
require_once 'templates/footer.html';
?>