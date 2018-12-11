<?php
require("linksCard.php");

function topPanelWithoutScroll($action) {
?>
    <link rel="stylesheet" type = "text/css" href="css/headerWithoutScroll.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="javascript/search.js"></script>
    <script src="javascript/LinksCardView.js"></script>

    <div class="headerWithoutScroll" id="headerWithoutScroll">
    <!--img id="sliderBackground" src="images/sliderBackground0.jpg" alt="Slider Background" height="100%" width="100%"-->
        <table height="100%" width="100%">
            <tr height="10%">
                <td rowspan="2" style="text-align: left;" width="50%">
                    <img src="images/logo.png" width="388.8px" height="66px">
                </td>
                <td>
                    <a href="#" > Old Website </a> | &nbsp;
                    <a href="javascript:void(0)"> A+ </a> &nbsp;
                    <a href="javascript:void(0)"> A- </a> &nbsp;
                    <a href="javascript:void(0)"> A </a> &nbsp; |
                    <a href="#"> Screen Reader </a> |
                    <span id="redColorBlind"> &nbsp;a&nbsp; </span> &nbsp;
                    <span id="greenColorBlind"> &nbsp;a&nbsp; </span> &nbsp;
                    <span id="blueColorBlind"> &nbsp;a&nbsp; </span> &nbsp;
                </td>
            </tr>

            <tr height="4%">
                <td id="navbarLinks" style="line-height: 200%">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" onmouseover="showCard(document.getElementById('academicsLinksContainer'));"> 
                        Academics 
                    </a> 
                    <a href="#"> Faculty </a>
                    <a href="#"> Administration </a>
                    <a href="#" onmouseover="showCard(document.getElementById('affiliatedCollegesLinksContainer'));"> 
                        Affiliated Colleges 
                    </a>
                    <a href="javascript:void(0)" onclick="document.getElementById('searchDialog').style.display='block';"> <img src="images/search.png" width=25px height=25px > <span id="searchTextNoScroll"> Search </span> </a>
                </td>
            </tr>

            <tr height="4%">
                <td style="text-align:left;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( NAAC Accredited 'A' Grade University ) </td>
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
                <td width=50% height=75% id="slideLeftNoScroll">
                    <a href="javascript:void(0)" onclick="slideLeft()"> &nbsp;<&nbsp; </a>
                </td>
                <td width=50% height=75% id="slideRightNoScroll">
                    <a href="javascript:void(0)" onclick="slideRight()"> &nbsp;>&nbsp; </a>
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