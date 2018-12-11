<?php
require("linksCard.php");

function topPanel($action) {
?>
    <link rel="stylesheet" type = "text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="javascript/search.js"></script>
    <script src="javascript/LinksCardView.js"></script>

<div class="header" id="header">
    <table height="100%" width="100%">
        <tr>
            <td rowspan="2" style="text-align: left;" width="50%">
                <img style="padding-left: 10px;" src="images/logo.png" width="388.8px" height="66px">
            </td>
        </tr>

        <tr>
            <td id="navbarLinks" >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"onmouseover="showCard(document.getElementById('academicsLinksContainer'));">  
                    Academics 
                </a> 
                <a href="#"> 
                    Faculty
                </a>
                <a href="#"> 
                    Administration 
                </a>
                <a href="#" onmouseover="showCard(document.getElementById('affiliatedCollegesLinksContainer'));">
                    Affiliated Colleges 
                </a>
                <a href="javascript:void(0)" onclick="document.getElementById('searchDialog').style.display='block';"> <img src="images/search.png" width=25px height=25px > <span id="searchText"> Search </span> </a>
            </td>
        
            <td id="navbarLinks">
                <a href="#" onmouseover="showCard(document.getElementById('aboutUsLinksContainer'));">
                    About Us 
                </a> 
                <a href="#"> 
                    Students 
                </a>
                <a href="#" onmouseover="showCard(document.getElementById('mediaLinksContainer'));"> 
                    Media 
                </a>
                <a href="#" onmouseover="showCard(document.getElementById('helplineLinksContainer'));"> 
                    Helpline 
                </a>
                <a href="#" onmouseover="showCard(document.getElementById('contactUsLinksContainer'));"> 
                    Contact Us 
                </a>
            </td>
        </tr>
    </table>
</div>

    <!-- Search dialog start -->

    <div id="searchDialog" class="searchDialog">
        <h1> Search </h1>
        <span id="searchButton">
            <button onclick="search()">
                <img src="images/search_small.png" width="30px" height="30px">
            </button>
        </span>
        <input id="searchBox" type="text" placeholder="What are you lookin for?" >
        <span id="clearButton"> 
            <button onclick="if(document.getElementById('searchBox').value.trim() === '') document.getElementById('searchDialog').style.display = 'none'; else document.getElementById('searchBox').value = '';"> 
                <i class="fa fa-close"> </i>
            </button>
        </span>

        <div id="searchResult">
            
        </div>
    </div>

    <!-- Search dialog end -->
<?php
}
?>