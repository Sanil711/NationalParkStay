let cardImgs = new Array(
    "highSierra.jpg",
    "theAhwahnee.png",
    "whiteWolfLodge.jpg",
    "hotelWawona.jpg",
    "villageCurry.jpg"
)

let lg = document.querySelector(".logo");

lg.addEventListener('click', () => {
    location.href = "index.html";
})

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