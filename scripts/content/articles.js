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
    $('#article-menu-arrow').click(function() {
        if ($(this).hasClass('down')) { openArticleMenu(); }
        else { closeArticleMenu(); }
    });
}

function openArticleMenu() {
    $('#article-menu-arrow').stop().animate(
        {opacity: 0},
        500,
        function(){
            $(this).removeClass('down').addClass('up').animate({opacity: 1}, 500);
        }
    ); 
    $('#article-nav').stop().animate({opacity: 0.9}, 1000);
}

function closeArticleMenu() {  
    $('#article-menu-arrow').stop().animate(
        {opacity: 0},
        500,
        function(){
            $(this).removeClass('up').addClass('down').animate({opacity: 1}, 500);
        }
    ); 
    $('#article-nav').stop().animate({opacity: 0}, 1000);
}