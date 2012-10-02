<?php
// namespaces unsupported in PHP 5.2, which is running on HostRocket
// namespace content;    
/*
 * @file includes/content.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/28/2012
 * @description PHP functions for linking specific page content
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
function content_title($page) {
    switch($page) {
        case "home":
            echo '<title>Welcome to codeMelon</title>';
            break;
        case "links":
            echo '<title>codeMelon - Links</title>';
            break;
        default:
            echo '<title>codeMelon</title>';
    }
}
function content_styling($page) {
    echo '<link href="styles/content/' . $page . '.css" rel="stylesheet" type="text/css" />';
}

function content_includeHeader($page) {
    // not included on pages: links
    // take advantage of PHP's fallthrough logic in switch
    switch ($page) {
        case "home":
        case "other pages using content header":
            echo '<div id="header"><table><tr>';
            echo '<td><div class="outer"><div class="image-wrapper">';
            echo '<img width="240" height="200" src="images/RoboticArm.jpg" />';
            echo '</div></div></td>';
            echo '<td><div class="outer"><div class="image-wrapper">';
            echo '<img width="240" height="200" src="images/JeffRowleyJaws2012.jpg" />';
            echo '</div></div></td>';
            echo '<td><div class="outer"><div class="image-wrapper">';
            echo '<iframe width="240" height="200" src="http://www.youtube.com/embed/QmWD76jwjbQ" frameborder="0"></iframe>';
            echo '</div></div></td>';
            echo '</tr></table></div>';
            break;
        case "links":
            echo '<div id="header">';
            echo '<h2>Additional Resources</h2>';
            echo '</div>';
    }
}

function content_sidebar($page) {
    switch ($page) {
        case "home":         
            require_once 'templates/content-sidebar.html';
            break;
        default:
            echo '<div>';
    }
}


function content_article($article) {
    require_once 'content/articles/' . $article . '.html';
}
?>