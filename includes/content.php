<?php
namespace content {    
/*
 * @file includes/content.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/28/2012
 * @description PHP functions for linking specific page content
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
    function styling($page) {
        echo '<link href="styles/content/' . $page . '.css" rel="stylesheet" type="text/css" />';
    }
    
    function includeContentHeader($page) {
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
                echo '<h2>Links to Additional Resources</h2>';
                echo '</div>';
        }
    }
}
?>
