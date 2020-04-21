<?php

function primaryHeader() {
?>

<?php
    require("linksCard.php");
    require("responsiveMenu.php");
?>

    <!-- Header Start -->
    <div class="container-fluid" id="primaryHeader">
        <div class="row">            
            <div class="col">
                    <i onclick="openNav()" class="fa fa-bars" id="responsiveMenu"></i>
                    <a href="#"><img src="images/logo.png" id="topImage" width="388.8px" height="90px"></a>
            </div>
            
            <div class="col-7" id="topLinks" style="font-size: 17px;">
                <div class="row"> <!-- Functionality links at the top of header -->
                    <div class="col" id="topExtraLinks">
                        <a href="https://mlsu.ac.in"> Old Website </a> &nbsp; | &nbsp;
                        <a href="javascript:void(0)" onclick="increaseFont()"> A+ </a> &nbsp;
                        <a href="javascript:void(0)" onclick="defaultFont()"> A </a> &nbsp;
                        <a href="javascript:void(0)" onclick="decreaseFont()"> A- </a> &nbsp; | &nbsp;
                        <a href="javascript:void(0)" onclick="loadCard('screenReaderContainer')" onmouseover="changeCard('screenReaderContainer')" onmouseleave="revertCard()">Screen Reader</a> &nbsp; | &nbsp;
                        <a href="javascript:void(0)" onclick="colorChange(1)"><span id="redColorBlind"> &nbsp;_&nbsp; </span></a> &nbsp;
                        <a href="javascript:void(0)" onclick="colorChange(2)"><span id="greenColorBlind"> &nbsp;_&nbsp; </span></a> &nbsp;
                        <a href="javascript:void(0)" onclick="colorChange(3)"><span id="blueColorBlind"> &nbsp;_&nbsp; </span></a> &nbsp; | &nbsp;

                        <a href="javascript:void(0)" onclick="document.getElementById('searchDialog').style.display='block';"> 
                            <img src="images/search.png" width=25px height=25px > <span id="searchTextNoScroll"> Search </span> 
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col" id="upperNavBar"> <!-- Upper half of the navigation bar -->
                        <a href="javascript:void(0)" id="navBarLink1" onclick="loadCard('academicsLinksContainer', '1')" onmouseover="changeCard('academicsLinksContainer')" onmouseleave="revertCard()">Academics</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <a href="javascript:void(0)" id="navBarLink2" onclick="loadCard('facultyLinksContainer', '2')" onmouseover="changeCard('facultyLinksContainer')" onmouseleave="revertCard()">Faculty</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink3" onclick="loadCard('administrationLinksContainer', '3')" onmouseover="changeCard('administrationLinksContainer')" onmouseleave="revertCard()">Administration</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink4" onclick="loadCard('affiliatedCollegesLinksContainer', '4')" onmouseover="changeCard('affiliatedCollegesLinksContainer')" onmouseleave="revertCard()">Affiliated Colleges</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col" id="lowerNavBar"> <!-- Lower half of the navigation bar -->
                        <a href="javascript:void(0)" id="navBarLink5" onclick="loadCard('aboutUsLinksContainer', '5')" onmouseover="changeCard('aboutUsLinksContainer')" onmouseleave="revertCard()">About Us</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink6" onclick="loadCard('studentsLinksContainer', '6')" onmouseover="changeCard('studentsLinksContainer')" onmouseleave="revertCard()">Students</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink7" onclick="loadCard('mediaLinksContainer', '7')" onmouseover="changeCard('mediaLinksContainer')" onmouseleave="revertCard()">Media</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink8" onclick="loadCard('helplineLinksContainer', '8')" onmouseover="changeCard('helplineLinksContainer')" onmouseleave="revertCard()">Helpline</a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="navBarLink9" onclick="loadCard('contactUsLinksContainer', '9')" onmouseover="changeCard('contactUsLinksContainer')" onmouseleave="revertCard()">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2" id="slideLeft">
                <a href="javascript:void(0)" onclick="slideLeft()"> < </a>
            </div>

            <div class="col-8">

            </div>
            
            <div class="col-2" id="slideRight">
                <a href="javascript:void(0)" onclick="slideRight()"> > </a>
            </div>
        </div>
    </div>

    <!-- Header end -->

    <!-- On scroll header start -->
    <div class="container-fluid" id="scrollPrimaryHeader">
        <div class="row colorBlind" id="scrollTopBar">
            <div class="col-10">
                <i onclick="openNav()" class="fa fa-bars" id="responsiveMenu"></i>
                <a href="#"><img src="images/logoscroll.png" id="topImage" width="388.8px" height="66px"></a>
            </div>
            <div class="col-2" id="searchButtonSmall">
                <a href="javascript:void(0)" onclick="document.getElementById('searchDialog').style.display='block';">
                    <img style="margin-top: 20px;" src="images/search_small.png" height="30px" width="30px" alt="search">
                </a>
            </div>
        </div>

        <div class="row" id="scrollTopNavBar">
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink1" onclick="loadCard('academicsLinksContainer', '1')" onmouseover="changeCard('academicsLinksContainer')" onmouseleave="revertCard()">Academics</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink2" onclick="loadCard('facultyLinksContainer', '2')" onmouseover="changeCard('facultyLinksContainer')" onmouseleave="revertCard()">Faculty</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink3" onclick="loadCard('administrationLinksContainer', '3')" onmouseover="changeCard('administrationLinksContainer')" onmouseleave="revertCard()">Administration</a>
            </div>
            <div class="col-2" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink4" onclick="loadCard('affiliatedCollegesLinksContainer', '4')" onmouseover="changeCard('affiliatedCollegesLinksContainer')" onmouseleave="revertCard()">Affiliated Colleges</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink5" onclick="loadCard('aboutUsLinksContainer', '5')" onmouseover="changeCard('aboutUsLinksContainer')" onmouseleave="revertCard()">About Us</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink6" onclick="loadCard('studentsLinksContainer', '6')" onmouseover="changeCard('studentsLinksContainer')" onmouseleave="revertCard()">Students</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink7" onclick="loadCard('mediaLinksContainer', '7')" onmouseover="changeCard('mediaLinksContainer')" onmouseleave="revertCard()">Media</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink8" onclick="loadCard('helplineLinksContainer', '8')" onmouseover="changeCard('helplineLinksContainer')" onmouseleave="revertCard()">Helpline</a>
            </div>
            <div class="col" id="scrollNavItem">
                <a href="javascript:void(0)" id="scrollNavBarLink9" onclick="loadCard('contactUsLinksContainer', '9')" onmouseover="changeCard('contactUsLinksContainer')" onmouseleave="revertCard()">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- On scroll header end -->

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