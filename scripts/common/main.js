/*
 * site:    codemelon2012
 * file:	scripts/common/main.js
 * author:	Marshall Farrier
 * created:	8/24/2012
 * edited: 10/14/2012
 * description:
 *   main JavaScript for codemelon2012
 * links:
 *   Smooth page transitions:
 *      http://www.onextrapixel.com/2010/02/23/how-to-use-jquery-to-make-slick-page-transitions/
 */

function codeMelonMain(activePage) {
    if (!$.support.boxModel) {
        window.location.replace("templates/no-boxmodel.html");
    }
    /*
     * The top of the gray footer is sometimes about 32px too high up on the page in Chrome.
     * This is presumably because the function is sometimes called asynchronously before
     * the rest of the page is set up. The call on resize is working fine.
     * Tried to fix this problem by moving this method to the end, but then the lighter band
     * often didn't appear at all.
     * So trying as first item in queue. Seems to work best, although still not 100% accurate.
     */
    backgroundMain();
    $('body').css({'display' : 'none'});
    navigationMain(activePage);
    if (!window.doAnimation) { logoMain(); }
    switch (activePage) {
        case 'HOME':
            contentSidebarMain();
    }
    // fade page in
    $('body').fadeIn(
        500,
        function() {
            if (window.doAnimation) { logoMain(); }
            $(window).resize(backgroundMain);
        }
    );
    // fade page out for internal links
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(250, function(){
            window.location = linkLocation;
        });      
    });
}