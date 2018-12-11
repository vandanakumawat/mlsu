var links = Array("academicsLinksContainer", "aboutUsLinksContainer", "mediaLinksContainer", "helplineLinksContainer", "affiliatedCollegesLinksContainer", "contactUsLinksContainer");

function showCard(card) {
    for(var i=0; i<links.length; i++) {
        document.getElementById(links[i]).style.display = "none";
    }

    setTimeout( function() { 
        card.style.display = "block"; 
    }, 0);
}

function hideCard() { 
    for(var i=0; i<links.length; i++) {
        document.getElementById(links[i]).style.display = "none";
    }
}