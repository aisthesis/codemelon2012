/*
 * site:    codemelon2012
 * file:	scripts/content-sidebar.js
 * author:	Marshall Farrier
 * date:	9/22/2012
 * description:
 *   JavaScript to determine sidebar behavior for codemelon2012
 */

function contentSidebarMain() {
    duration = 1500;
    $('#content-sidebar h4.channels').click(function() {        
        $('#main-content section').animate({'opacity' : 1}, duration);
    });
    highlightChannel('apps');
    highlightChannel('programming');
    highlightChannel('robotics');
    highlightChannel('site');
    highlightChannel('tutorials');
    highlightChannel('web');
}

function highlightChannel(channel) {
    $('#content-sidebar .' + channel + ' a').click(function() {
        $('#main-content section').animate({'opacity' : 0.1}, duration);
        $('#main-content section.' + channel).animate({'opacity' : 1}, duration);
    })
}
