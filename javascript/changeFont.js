var font = 0;

function increaseFont() {
    var domBody = document.getElementById("pageBody");

    switch(font) {
        case 0: domBody.style.fontSize = "large";
                font++;
        break;

        case 1: domBody.style.fontSize = "x-large";
                font++;
        break;

        case 2: domBody.style.fontSize = "xx-large";
                font++;
        break;
    }
}

function decreaseFont() {
    var domBody = document.getElementById("pageBody");

    switch(font) {
        case 0: domBody.style.fontSize = "small";
                font--;
        break;

        case -1: domBody.style.fontSize = "x-small";
                font--;
        break;

        case -2: domBody.style.fontSize = "xx-small";
                font--;
        break;
    }
}

function defaultFont() {
    var domBody = document.getElementById("pageBody");
    domBody.style.fontSize = "medium";
    font = 0;
}