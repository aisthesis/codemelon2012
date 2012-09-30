<?php
namespace common {
/*
 * @file includes/common.php
 * @site codeMelon2012
 * @author Marshall Farrier
 * @date 09/25/2012
 * @description common PHP functions
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
    function setAnimation($animate) {
        echo '<script>';
        if ($animate) {
            echo 'window.doAnimation = true;';
        }
        else {
            echo 'window.doAnimation = false;';
        }
        echo '</script>';
    }
    function javaScriptFile($page) {
        echo '"scripts/content/' . $page . '.js"';
    }

    function includeSidebarCss($page) {
        // not included on pages: links
        // take advantage of PHP's fallthrough logic in switch
        switch ($page) {
            case "home":
            case "other pages using sidebar":
                echo '<script type="text/javascript" src="scripts/common/content-sidebar.js"></script>';
        }
    }
   
    function includeBannerImage($page) {
        // not included on pages: links
        // take advantage of PHP's fallthrough logic in switch
        switch ($page) {
            case "home":
            case "other pages using banner image":
                echo '<div class="banner-image">';
                echo '<p>3.1415926535897932384626433832795028841971693993751058209749445923078164062862';
                echo '089986280348253421170679821480865132823066470938446095505822317253594081284811174502';
                echo '8410270193852110555964462294895493038196442881097566593344612847564823378678316527120190';
                echo '914564856692346034861045432664821339360726024914127372458700660631558817488152092096';
                echo '282925409171536436789259036001133053054882046652138414695194151160943305727036575959195309';
                echo '2186117381932611793105118548074462379962749567351885752724891227938183011949129833673362';
                echo '44065664308602139494639522473719070217986094370277053921717629317675238467481846766';
                echo '940513200056812714526356082778577134275778960917363717872146844090122495343014654958';
                echo '53710507922796892589235420199561121290219608640344181598136297747713099605187072113499';
                echo '999983729780499510597317328160963185950244594553469083026425223082533446850352619311881';
                echo '71010003137838752886587533208381420617177669147303598253490428755468731159562863882</p>';
                echo '</div>';

        }
    }
    
}
?>