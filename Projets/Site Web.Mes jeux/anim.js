var images = new Array('image_1.png', 'image_2.png');
var index = 1;

function rotateImage() {
    $('#face').fadeOut('fast', function () {
        $(this).attr('src', images[index]);
        $(this).fadeIn('fast', function () {
            if (index == images.length - 1) {
                index = 0;
            }
            else {
                index++;
            }
        });
    });
}
$(document).ready(function () {
    setInterval(rotateImage, 2500);
});

