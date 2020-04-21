<?php

function secondaryHeader() {
?>

<?php
    require_once("linksCard.php");
    require_once("responsiveMenu.php");
?>
    <link rel="stylesheet" href="css/secondaryHeader.css">
    <link rel="stylesheet" type = "text/css" href="css/searchBox.css">
    <link type="text/css" rel="stylesheet" href="css/linksCard.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="javascript/search.js"></script>
        <script src="javascript/linksCardView.js"></script>
    <!-- Header Start -->
    <div class="container-fluid" id="secondaryHeader">
        <div class="row">
            <div class="col"> <!-- Logo image of university -->
                <i onclick="openNav()" class="fa fa-bars" id="responsiveMenu"></i>
                <a href="home.php"><img src="images/logo.png" id="topImage" width="388.8px" height="95px"></a>
            </div>
            
            <div class="col-7" id="topLinks" style="font-size: 17px;">

                <div class="row">
                    <div class="col" id="upperNavBar"> <!-- Upper half of the navigation bar -->
                        <a href="javascript:void(0)" onclick="loadCard('academicsLinksContainer')" onmouseover="changeCard('academicsLinksContainer')" onmouseleave="revertCard()">Academics</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <a href="javascript:void(0)" onclick="loadCard('facultyLinksContainer')" onmouseover="changeCard('facultyLinksContainer')" onmouseleave="revertCard()">Faculty</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('administrationLinksContainer')" onmouseover="changeCard('administrationLinksContainer')" onmouseleave="revertCard()">Administration</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('affiliatedCollegesLinksContainer')" onmouseover="changeCard('affiliatedCollegesLinksContainer')" onmouseleave="revertCard()">Affiliated Colleges</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="document.getElementById('searchDialog').style.display='block';"> 
                            <img src="images/search.png" width=25px height=25px > <span id="searchTextNoScroll"> Search </span> 
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col" id="lowerNavBar"> <!-- Lower half of the navigation bar -->
                        <a href="javascript:void(0)" onclick="loadCard('aboutUsLinksContainer')" onmouseover="changeCard('aboutUsLinksContainer')" onmouseleave="revertCard()">About Us</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('studentsLinksContainer')" onmouseover="changeCard('studentsLinksContainer')" onmouseleave="revertCard()">Students</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('mediaLinksContainer')" onmouseover="changeCard('mediaLinksContainer')" onmouseleave="revertCard()">Media</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('helplineLinksContainer')" onmouseover="changeCard('helplineLinksContainer')" onmouseleave="revertCard()">Helpline</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('contactUsLinksContainer')" onmouseover="changeCard('contactUsLinksContainer')" onmouseleave="revertCard()">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header end -->

    <!-- Search dialog start -->

    <div id="searchDialog">
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