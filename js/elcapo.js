//This function generate a random URL from the images array
function randomBg() {
    var images = ['http://local.wordpress.test/wp-content/uploads/2017/12/image2.png', 'http://local.wordpress.test/wp-content/uploads/2017/12/image1.png', 'http://local.wordpress.test/wp-content/uploads/2017/12/bg1.jpg'];
    return images[Math.floor(Math.random() * images.length)];
}

jQuery(function() {
    jQuery("#header").css({"background-image": "url("+ randomBg() +")"});
});
