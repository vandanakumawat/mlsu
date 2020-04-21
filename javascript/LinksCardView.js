var status = 0;
var baseCard = "";
var currentCard = "";
var linkNo = 0;

function removeClasses() {
    for(i=1; i<=9; i++) {
        document.getElementById("navBarLink"+i).classList.remove("linkClicked");
        document.getElementById("scrollNavBarLink"+i).classList.remove("scrollLinkClicked");
    }
}

function loadCard(cardName, no) {
    status = 1;
    baseCard = cardName;
    linkNo = no;
    document.getElementById(cardName).style.display = "block";
    removeClasses();
    document.getElementById("navBarLink"+linkNo).classList.add("linkClicked");
    document.getElementById("scrollNavBarLink"+linkNo).classList.add("scrollLinkClicked");
}

function changeCard(cardName) {
    if(status == 1) {
        currentCard = cardName;
        document.getElementById(baseCard).style.display = "none";
        document.getElementById(cardName).style.display = "block";
    }
}

function revertCard() {
    if(status == 1) {
        document.getElementById(currentCard).style.display = "none";
        document.getElementById(baseCard).style.display = "block";
    }
}

function closeCard(cardName) {
    status = 0;
    document.getElementById(cardName).style.display = "none";
    removeClasses();
}