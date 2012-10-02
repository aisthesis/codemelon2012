<?php
/*
 * @file articles.php
 * @author Marshall Farrier
 * @date 10/01/2012
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @description articles for codeMelon2012
 *      This page will be called for all articles.
 *      The name of the article will be passed as a GET parameter and will then be used to fetch the
 *      content.
 */
$page = 'articles';
$article = '';
if (isset($_GET['article'])) {
    $article = $_GET['article'];
}
$animate = true;
if (isset($_GET['animate'])) {
    $animate = $_GET['animate'];
}
// necessary php includes
require_once 'includes/common.php';
require_once 'includes/navigation.php';
require_once 'includes/content.php';

require_once 'templates/head.html';
require_once 'templates/navigation.html';
require_once 'templates/logo.html';
content_article($article);
require_once 'templates/lower-background.html';
require_once 'templates/footer.html';
?>
