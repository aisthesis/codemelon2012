/*
 * site:    codemelon2012
 * file:	scripts/main.js
 * author:	Marshall Farrier
 * date:	8/24/2012
 * description:
 *   main JavaScript for codemelon2012
 * links:
 *   http://code.google.com/p/jquery-rotate/ (if needed)
 */

function codeMelonMain(activePage) {
    if (!$.support.boxModel) {
        window.location.replace("templates/no-boxmodel.html");
    }
    navigationMain(activePage);
    logoMain(activePage);
    /*
     * This sometimes doesn't work properly in Chrome (overlap at the bottom is too big).
     * This is presumably because the function is sometimes called asynchronously before
     * the rest of the page is set up. The call on resize is working fine.
     */
    backgroundMain();
    $(window).resize(backgroundMain);
}