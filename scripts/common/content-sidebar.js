/*
 * site:    codemelon2012
 * file:	scripts/content-sidebar.js
 * author:	Marshall Farrier
 * date:	9/22/2012
 * description:
 *   JavaScript to determine sidebar behavior for codemelon2012
 */

function contentSidebarMain() {
    var duration = 1000;
    $('#content-sidebar h4.channels').click(function() { 
        $('#content-sidebar a').css({'color' : '#a9a9a9'});       
        $('#main-content section').animate({'opacity' : 1}, duration);
    });
    highlightChannel('apps', duration);
    highlightChannel('programming', duration);
    highlightChannel('robotics', duration);
    highlightChannel('site', duration);
    highlightChannel('tutorials', duration);
    highlightChannel('web');
}

function highlightChannel(channel, duration) {
    $('#content-sidebar .' + channel + ' a').click(function() {
        $('#content-sidebar a').css({'color' : '#a9a9a9'});
        $(this).css({'color' : '#17d'});
        $('#main-content section').animate({'opacity' : 0.1}, duration);
        $('#main-content section.' + channel).animate({'opacity' : 1}, duration);
    })
}