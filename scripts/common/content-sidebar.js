/*
 * site:    codemelon2012
 * file:	scripts/content-sidebar.js
 * author:	Marshall Farrier
 * date:	9/22/2012
 * description:
 *   JavaScript to determine sidebar behavior for codemelon2012
 */

function contentSidebarMain() {
    $('#content-sidebar h4.channels').click(function() {        
        $('#main-content section').show();
    });
    $('#content-sidebar .apps a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.apps').show();
    });
    $('#content-sidebar .programming a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.programming').show();
    });
    $('#content-sidebar .robotics a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.robotics').show();
    });
    $('#content-sidebar .site a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.site').show();
    });
    $('#content-sidebar .tutorials a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.tutorials').show();
    });
    $('#content-sidebar .web a').click(function() {
        $('#main-content section').hide();
        $('#main-content section.web').show();
    });
}
