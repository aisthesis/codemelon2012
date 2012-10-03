/*
 * site:    codemelon2012
 * file:	scripts/content-sidebar.js
 * author:	Marshall Farrier
 * date:	9/22/2012
 * description:
 *   JavaScript to determine sidebar behavior for codemelon2012
 */

function contentSidebarMain() {
    var ms_to_complete = 800;
    $('#content-sidebar h4.channels').click(function() { 
        $('#content-sidebar a').css({'color' : '#a9a9a9'});       
        $('#main-content section').stop().animate({'opacity' : 1}, {
            duration : ms_to_complete * 2, 
            easing : 'easeInOutQuad',
            queue : false}
        );
    });
    highlightChannel('apps', ms_to_complete);
    highlightChannel('programming', ms_to_complete);
    highlightChannel('robotics', ms_to_complete);
    highlightChannel('site', ms_to_complete);
    highlightChannel('tutorials', ms_to_complete);
    highlightChannel('web');
}

function highlightChannel(channel, ms_to_complete) {
    $('#content-sidebar .' + channel + ' a').click(function() {
        $('#content-sidebar a').css({'color' : '#a9a9a9'});
        $(this).css({'color' : '#17d'});
        $('#main-content section').stop().animate(
            {'opacity' : 0.1}, 
            {
                duration : ms_to_complete, 
                easing : 'easeInOutQuad', 
                complete : function() {
                    if ($(this).hasClass(channel)) {
                        $(this).animate(
                            {'opacity' : 1}, 
                            {
                                duration : ms_to_complete, 
                                easing : 'easeInOutQuad'
                            }
                        );
                    }
                }
            }
        );
    })
}