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

function content_article_style($article) {
    if (!isset($article)) { return; }
    // syntax highlighter styles
    switch ($article) {
        case '20110209':
            echo '<link href="lib/syntaxhighlighter_3.0.83/styles/shCoreCodeMelon.css"';
            echo ' rel="stylesheet" type="text/css" />';
            echo '<link href="lib/syntaxhighlighter_3.0.83/styles/shThemeCodeMelon.css"';
            echo ' rel="stylesheet" type="text/css" />';
    }
    // special styling for particular articles
    switch ($article) {
        case '20100212':
        case '20100220':
        case '20121007':        
        case 'any other article requiring a special stylesheet':
            echo '<link href="styles/content/articles/' . $article;
            echo '.css" rel="stylesheet" type="text/css" />';   
    }
}
function content_article_script($article) {
    if (!isset($article)) { return; }
    // syntax highlighter scripts
    switch ($article) {
        // include core in all cases
        case '20110209':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shCore.js"></script>';
            // call syntaxhighlighter function
            echo '<script type="text/javascript">SyntaxHighlighter.all()</script>';
        
    }
    switch ($article) {
        // include necessary brushes. MUST INCLUDE break here!!!!
        case '20110209':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushJava.js"></script>';
            break;
    }
    // special scripts for particular articles
    switch ($article) {     
        case 'articles requiring special scripts':
            echo '<script type="text/javascript" src="scripts/content/articles/';
            echo $article . '.js"></script>';
    }
}
?>