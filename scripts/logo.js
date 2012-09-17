/*
 * site:    codemelon2012
 * file:	scripts/logo.js
 * author:	Marshall Farrier
 * date:	8/26/2012
 * description:
 *   logo JavaScript for codemelon2012
 */
function logoMain(activePage) {
    var sliceFinalPosition = {
        top:72,
        left:72
    };
    var logoTextFinalPosition = {
        top:28,
        left:128
    }
    if (activePage == 'HOME') {
        doFullLogoAnimation(sliceFinalPosition, logoTextFinalPosition);
    }
    else {     
        $('#logo div.slice').css(sliceFinalPosition);
        $('#logo div.logo-text').css(logoTextFinalPosition);    
        activateHoverEffects();
    }
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

function doFullLogoAnimation(sliceFinalPosition, logoTextFinalPosition) {
    var windowWidth = $('body').width();
    animateMelon(windowWidth);
    animateSliceAndText(windowWidth, sliceFinalPosition, logoTextFinalPosition);
}

function animateMelon(windowWidth) {
    var elementName = '#logo div.melon';
    var originalLeft = $(elementName).position().left;
    $(elementName).css('left', -0.2 * windowWidth);
    $(elementName).stop().animate(
        {left : originalLeft},
        {queue:false, duration:3000, easing:'easeOutElastic'}
    );
}

function animateLogoText(elementName, logoTextFinalPosition) {
    $(elementName).stop().animate(
        {top:logoTextFinalPosition.top},
        {duration:1000, easing:'easeOutBounce', complete: activateHoverEffects}
    );
}

function animateSliceAndText(windowWidth, sliceFinalPosition, logoTextFinalPosition) {
    var sliceElementName = '#logo div.slice';
    var textElementName = '#logo div.logo-text';
    var originalLeft = $(sliceElementName).position().left + sliceFinalPosition.left;
    // set text off screen to start
    $(textElementName).css('left', logoTextFinalPosition.left);
    $(textElementName).css('top', -64);
    // set slice off screen and animate
    $(sliceElementName).css('top', sliceFinalPosition.top);
    $(sliceElementName).css('left', windowWidth);
    $(sliceElementName).stop().animate(
        {left : originalLeft},
        {queue:false, duration:4000, easing:'easeOutBack', complete: function() {
                animateLogoText(textElementName, logoTextFinalPosition);
            }
        }
    );
}