/*
 * site:    codemelon2012
 * file:	scripts/background.js
 * author:	Marshall Farrier
 * date:	9/16/2012
 * description:
 *   add some css for backgrounds based on calculations
 */

function backgroundMain() {
    var contentWrapperTop = $('#content-wrapper').position().top;
    var contentWrapperBottom = contentWrapperTop + $('#content-wrapper').height();
    var lowerBackgroundTop = $('#lower-background').position().top;
    var overlap = 16;
    var contentWrapperMargin = 160;
    $('#lower-background').height(contentWrapperBottom - lowerBackgroundTop - overlap + contentWrapperMargin);
}