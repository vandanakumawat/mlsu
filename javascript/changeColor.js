function colorChange(colorCode) {
    var x=document.getElementById("pageBody");
    var y=x.getElementsByClassName("colorBlind");
    var i;

        switch(colorCode) {
            case 1: for(i=0;i<y.length;i++){
                        y[i].style.backgroundImage="linear-gradient(to right, rgb(135,1,25), rgb(135,1,25))";
                        y[i].style.color = "white";
                    }
            break;
                
            case 2: for(i=0;i<y.length;i++){
                        y[i].style.backgroundImage="linear-gradient(to right, rgb(11, 94, 19), rgb(11, 94, 19))";
                        y[i].style.color = "white";
                    }
            break;    
                
            case 3: for(i=0;i<y.length;i++){
                        y[i].style.backgroundImage="linear-gradient(to right, rgb(18, 81, 114), rgb(18, 81, 114))"; 
                        y[i].style.color = "white";
                    }
            break;    
        }
}