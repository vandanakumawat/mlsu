<?php

function adminHeader() {
?>
    <link rel="stylesheet" href="css/adminHeader.css">
    <link rel="stylesheet" type = "text/css" href="css/searchBox.css">
    <link type="text/css" rel="stylesheet" href="css/linksCard.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">

    <!-- Header Start -->
    <div class="container-fluid" id="adminHeader">
        <div class="row">
            <div class="col"> <!-- Logo image of university -->
                <a href="../home.php"><img src="images/logo.png" id="topImage" width="388.8px" height="66px"></a>
            </div>
        </div>
    </div>

    <!-- Header end -->

<?php
}

function adminFooter() {
?>
    <div id="aboutUs">
        This website is made by <a href="javascript:void(0)" style="text-decoration:none"onclick="alert(' Ashrut Sharma \n Siddharth Surelia \n Tirthika Bandi \n Vandana Kumawat')"> <i>our Students</i> </a>
    </div>
<?php
}
?>