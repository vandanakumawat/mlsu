var slide;
var count;
var totalSlides = 3;

function slideLeft() {
    if(count == 0)
        count = totalSlides;
    else
        count--;
    slide.style.backgroundImage = "linear-gradient(to right, rgba(55, 99, 132, 0.65), rgba(245, 207, 148, 0.65)), url(images/sliderBackground"+count+".jpg)";   
}

function slideRight() {
    if(count == totalSlides)
        count = 0;
    else
        count++;
    slide.style.backgroundImage = "linear-gradient(to right, rgba(55, 99, 132, 0.65), rgba(245, 207, 148, 0.65)), url(images/sliderBackground"+count+".jpg)";  
}

window.onload = function() {
    slide = document.getElementById("primaryHeader");
    count = 1;
    
    setInterval( function() {
        slide.style.backgroundImage = "linear-gradient(to right, rgba(55, 99, 132, 0.65), rgba(245, 207, 148, 0.65)), url(images/sliderBackground"+count+".jpg)";  
        if(count < totalSlides)
            count++;
        else
            count = 0;
    }, 5000);

    document.getElementById("searchBox").addEventListener("keydown", function(e) {
        if(e.keyCode === 13) {
            search();
        }
    });

    document.addEventListener("keydown", function(e) {
        if(e.keyCode === 27) {
            document.getElementById('searchDialog').style.display = 'none'; 
        }
    });
};