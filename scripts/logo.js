/*
 * site:    codemelon2012
 * file:	scripts/logo.js
 * author:	Marshall Farrier
 * date:	8/26/2012
 * description:
 *   logo JavaScript for codemelon2012
 */
function logoMain(activePage) {
    setFinalPositions();
    activateHoverEffects();
}

function setFinalPositions() {
    $('#logo div.slice').css({
        'top' : '72px',
        'left' : '72px'
    });
    $('#logo div.logo-text').css ({
        'left' : '128px',
        'top' : '28px'
    });
}
function activateHoverEffects() {  
    $('#logo').css('overflow', 'visible');
    animateHover('#logo div.logo-text', {left : '+=64'}, {left : '-=64'});
    animateHover('#logo div.melon', {left : '-=64'}, {left : '+=64'});
    animateHover('#logo div.slice', {top : '+=64'}, {top : '-=64'});
}

function animateHover(elementName, targetMap, returnMap) {
    var moved = false;
    $(elementName).hover(function() {
        moved = true;
        $(this).animate(
            targetMap, 
            {queue:true, duration:640}
        );
    }, function() {
        if (moved) {
            $(this).animate(
                returnMap, 
                {queue:true, duration:640}
            );
        }
    });
}
/*
function logoMain() { 
    var logoWidth = $('#logo').width();
    $('#logo .slice').css('left', '+=' + logoWidth * 0.9);
    $('#logo .slice').stop().animate(
        {left:(64 + logoWidth * 0.2)},
        {queue:false, duration:4000, easing:'easeOutBack', complete: fadeLogo}
    );
    $('#logo .melon').css('left', '-=' + (logoWidth * 0.3));
    $('#logo .melon').stop().animate(
        {left:(logoWidth * 0.2)},
        {queue:false, duration:3000, easing:'easeOutElastic'}
    );
}


function fadeLogo() {
    $('#logo .melon h1').fadeOut(2000);
    $('#logo .slice h1').fadeOut(2000, makeFullTitle);
}

function makeFullTitle() {
    $('#logo h1').remove();
    $('<div class=together><h1 class="code-text">code</h1><h1 class="melon-text">Melon</h1></div>')
        .appendTo('#logo');
    $('#logo .together').css('left', '+=128px')
    $('#logo .together').stop().animate(
        {top:50},
        {duration:1000, easing:'easeOutBounce', complete: activateHoverEffects}
    );
}
*/