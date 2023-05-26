let cardImgs = new Array( 
    "camp1Pines.jpg",
    "camp2Wawona.jpg",
    "camp3YosemiteCreek.jpg",
    "camp4.jpg",
    "camp5Tuolumne.jpg",
    "camp6Whitewolf.jpg"
)

function navigateToReservations(){
    location.href = "http://localhost/NPS/reservations.php";
}

function navigateToCamp(n){
    var url = ["http://localhost/NPS/Camp1_PinesCampground.php",
    "http://localhost/NPS/Camp2_WawonaCampground.php",
    "http://localhost/NPS/Camp3_YosemiteCreek.php",
    "http://localhost/NPS/Camp4_Camp4.php",
    "http://localhost/NPS/Camp5_TuolumneMeadows.php",
    "http://localhost/NPS/Camp6_WhiteWolf.php"];
    location.href = url[n];
}

function placeCardImgs() {
    cardImgs.forEach((e, i) => {
        let tempClass = document.querySelectorAll(`.card${i}`);

        tempClass.forEach((elem) => {
            elem.style.backgroundImage = `url("assets/images/${e}")`;
        })
    })

    let card = document.querySelectorAll('.theCard');

    card.forEach((elm, i) => {
        elm.addEventListener('mouseover', () => {
            card[i].setAttribute("style", "transform: rotateY(180deg);")
        })

        elm.addEventListener('mouseout', () => {
            card[i].setAttribute("style", "transform: rotateY(0deg);")
        })
    })
}




window.onload = placeCardImgs();