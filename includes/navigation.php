<?php
// namespaces unsupported in PHP 5.2, which is running on HostRocket
// namespace navigation;
/*
 * @file navigation.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/25/2012
 * @description functions used for navigation bar
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
function navigation_home($page) {
    if ($page == 'home') {
        echo '"#"';
    }
    else {
        echo '"index.php?animate=0"';
    }
}
function navigation_forum($page) {
    echo '"#"';
}
function navigation_downloads($page) {
    if ($page == 'downloads') {
        echo '"#"';
    }
    else {
        echo '"downloads.php?animate=0"';
    }   
}
function navigation_links($page) {
    if ($page == 'links') {
        echo '"#"';
    }
    else {
        echo '"links.php?animate=0"';
    }   
}
function navigation_about($page) {
    if ($page == 'home') {
        echo '"#about"';
    }
    else {
        echo '"index.php?animate=0#about"';
    }
}function navigation_terms($page) {
    if ($page == 'home') {
        echo '"#terms"';
    }
    else {
        echo '"index.php?animate=0#terms"';
    }
}
?>
