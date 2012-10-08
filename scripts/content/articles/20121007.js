/*
 * @site codemelon2012
 * @file scripts/content/articles/20121007.js
 * @author Marshall Farrier
 * @created 10/08/2012
 * @last-edited 10/08/2012
 * @description JavaScript for codemelon2012 article 20121007
 * @source http://www.clicktorelease.com/tutorials/css3dclouds/
 */

/*
    Defining our variables
        world and viewport are DOM elements,
        worldXAngle and worldYAngle are floats that hold the world rotations,
        d is an int that defines the distance of the world from the camera 
*/
var world = document.getElementById( 'world' ),
    viewport = document.getElementById( 'viewport' ),
    worldXAngle = 0,
    worldYAngle = 0,
    d = 0;
 
/*
    Event listener to transform mouse position into angles 
    from -180 to 180 degress, both vertically and horizontally
*/
window.addEventListener( 'mousemove', function( e ) {
    worldYAngle = -( .5 - ( e.clientX / window.innerWidth ) ) * 180;
    worldXAngle = ( .5 - ( e.clientY / window.innerHeight ) ) * 180;
    updateView();
} );
 
/*
    Changes the transform property of world to be
    translated in the Z axis by d pixels,
    rotated in the X axis by worldXAngle degrees and
    rotated in the Y axis by worldYAngle degrees.
*/
function updateView() {
    world.style.transform = 'translateZ( ' + d + 'px ) \
        rotateX( ' + worldXAngle + 'deg) \
        rotateY( ' + worldYAngle + 'deg)';
}