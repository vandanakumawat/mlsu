var slide;
var count;
var totalSlides = 4;

window.onload = function() {
    slide = document.getElementById("imageSlide");
    count = 1;

    setInterval( function() {
        slide.src = "images/sliderBackground"+count+".jpg";
        if(count < totalSlides)
            count++;
        else
            count = 0;
    }, 3000);
};

function slideLeft() {
    if(count == 0)
        count = totalSlides;
    else
        count--;
    slide.src = "images/sliderBackground"+count+".jpg";      
}

function slideRight() {
    if(count == totalSlides)
        count = 0;
    else
        count++;
    slide.src = "images/sliderBackground"+count+".jpg";
}