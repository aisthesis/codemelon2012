<?php
/*
 * @file includes/redirect.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 10/06/2012
 * @description PHP functions used for redirection
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
function redirect_main($target_page) {
    echo '<meta http-equiv="REFRESH" content="16; url=' . $target_page . '">';
}
function redirect_link($target_page) {
    echo '<a href="' . $target_page . '">new location.</a>';
}
?>
