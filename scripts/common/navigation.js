/*
 * site:    codemelon2012
 * file:	scripts/navigation.js
 * author:	Marshall Farrier
 * date:	9/5/2012
 * description:
 *   navigation JavaScript for codemelon2012
 */

function navigationMain(activePage) {
    $('#navigation td:contains("' + activePage + '")').addClass("active-link");
}