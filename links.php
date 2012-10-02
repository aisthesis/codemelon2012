<?php
/*
 * @file links.php
 * @author Marshall Farrier
 * @date 09/24/2012
 * @description php links page for codeMelon2012
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
$page = 'links';
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
require_once 'templates/header.html';
content_sidebar($page);
require_once 'content/links.html';
require_once 'templates/lower-background.html';
require_once 'templates/footer.html';
?>