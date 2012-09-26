<?php
namespace common;
/*
 * @file common.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/25/2012
 * @description common PHP functions
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
function javaScriptFile($page) {
    echo '"scripts/content/' . $page . '.js"';
}

function includeSidebarCss($page) {
    // not included on pages: links
    // take advantage of PHP's fallthrough logic in switch
    switch ($page) {
        case "home":
        case "blah":
            echo '<script type="text/javascript" src="scripts/common/content-sidebar.js"></script>';
    }
}
?>