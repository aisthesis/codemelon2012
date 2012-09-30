<?php
namespace navigation;
/*
 * @file navigation.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/25/2012
 * @description functions used for navigation bar
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
function home($page) {
    if ($page == 'home') {
        echo '"#"';
    }
    else {
        echo '"index.php?animate=0"';
    }
}
function forum($page) {
    echo '"#"';
}
function downloads($page) {
    if ($page == 'downloads') {
        echo '"#"';
    }
    else {
        echo '"downloads.php?animate=0"';
    }   
}
function links($page) {
    if ($page == 'links') {
        echo '"#"';
    }
    else {
        echo '"links.php?animate=0"';
    }   
}
function about($page) {
    if ($page == 'home') {
        echo '"#about"';
    }
    else {
        echo '"index.php?animate=0#about"';
    }
}
?>
