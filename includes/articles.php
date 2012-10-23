<?php
// namespaces unsupported in PHP 5.2, which is running on HostRocket
// namespace content;    
/*
 * @file includes/articles.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 10/22/2012
 * @description PHP functions for linking arcticle content
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */


function content_article($article) {
    require_once 'content/articles/' . $article . '.html';
}

function content_article_setup($title, $date, $page) {
    require_once 'templates/article-nav.html';
    echo '<div id="content-wrapper" class="outer-width-limiter">';       
    echo '<div id="content">'; 
    echo '<div id="article-menu-arrow" class="down"><div class="arrow"></div></div>';
    echo '<div id="header">';
    echo '<h2>' . $title . '</h2>';
    echo '<div class="date">' . $date . '</div></div>';
    content_sidebar($page);
}

function content_article_style($article) {
    if (!isset($article)) { return; }
    // syntax highlighter styles
    switch ($article) {
        case 'template':
        case '20090805':
        case '20110205':
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
        case 'template':
        case '20090805':
        case '20110205':
        case '20110209':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shCore.js"></script>';
            // call syntaxhighlighter function
            echo '<script type="text/javascript">SyntaxHighlighter.all()</script>';
        
    }
    switch ($article) {
        // include necessary brushes. MUST INCLUDE break here!!!!
        case 'template':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushPlain.js"></script>';
            break;
        case '20090805':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>';
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>';
            break;
        case '20110205':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushJava.js"></script>';
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>';
            break;
        case '20110209':
            echo '<script type="text/javascript"';
            echo ' src="lib/syntaxhighlighter_3.0.83/scripts/shBrushJava.js"></script>';
            break;
    }
    // special scripts for particular articles
    switch ($article) { 
        case '20121007':
        case 'articles requiring special scripts':
            echo '<script type="text/javascript" src="scripts/content/articles/';
            echo $article . '.js"></script>';
    }
}
?>
