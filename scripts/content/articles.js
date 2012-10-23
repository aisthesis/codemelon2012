/*
 * @site codemelon2012
 * @file scripts/content/articles.js
 * @author Marshall Farrier
 * @date 10/01/2012
 * @description JavaScript for codemelon2012 articles
 */
$(document).ready(function() {
    articleMenu();
    codeMelonMain('articles');
});

function articleMenu() {
    $('#menu-arrow').click(function() {
        if ($(this).hasClass('down')) { openArticleMenu(); }
        else { closeArticleMenu(); }
    });
}

function openArticleMenu() {
    $('#menu-arrow').stop().animate(
        {opacity: 0},
        500,
        function(){
            $(this).removeClass('down').addClass('up').animate({opacity: 1}, 500);
        }
    );   
}

function closeArticleMenu() {  
    $('#menu-arrow').stop().animate(
        {opacity: 0},
        500,
        function(){
            $(this).removeClass('up').addClass('down').animate({opacity: 1}, 500);
        }
    );
}