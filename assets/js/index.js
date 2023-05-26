// let chngImg = document.querySelector('body');

// let bgImgs = new Array(
//     "/img/bodybg1.png",
//     "/img/bodybg2.png",
//     "/img/bodybg3.png",
//     "/img/bodybg4.png",
//     "/img/bodybg5.png"
// );



// var i = 0;

// function bgChange(){
//     if (i >= bgImgs.length) {
//         i = 0;
//     }
//     chngImg.style.backgroundImage = "url('"+bgImgs[i]+"')";
//     i++;
//     window.setTimeout("bgChange()", 2000);
// }

// window.onload = bgChange();
var currentBackground = 0;

var backgrounds = [];


backgrounds[0] = 'highSierra.jpg';

backgrounds[1] = 'theAhwahnee.png';

backgrounds[2] = 'whiteWolfLodge.jpg';

backgrounds[3] = 'hotelWawona.jpg';

backgrounds[4] = 'villageCurry.jpg';

function changeBackground() {

    currentBackground++;

    if(currentBackground > 4) currentBackground = 0;

    $('#Home').fadeOut(1500,function() {
        $('#Home').css({
            'background-image' : "url('" + backgrounds[currentBackground] + "')"
        });
        $('#Home').fadeIn(1500);
    });


    setTimeout(changeBackground, 5000);
}


$(document).ready(function() {

    setTimeout(changeBackground, 5000);  

}); 
