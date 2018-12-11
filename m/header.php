<link rel="stylesheet" type = "text/css" href="css/navbar.css">

<?php

function topPanel(){
?>
    <header>
        <img id="mlsuScrollLogo" src="images/logoscroll.png" width="388.8px" height="66px">  <!--MLSU onScroll Logo -->
        <span id="searchLogo">
        <a href="javascript:void(0)" onclick="alert('search');"> <img src="images/search.png" width=30px height=30px> </a>
        </span>
    </header>
<?php
}

function navbar($action) {
?>
    <div class="mainNavigationOptions"> <!--White Navbar  Options-->
        <a <?php if($action == 1) { echo "class='active'"; } ?> href="javascript:void(0)"> Students </a>
        <a <?php if($action == 2) { echo "class='active'"; } ?> href="javascript:void(0)"> Academics </a>
        <a <?php if($action == 3) { echo "class='active'"; } ?> href="javascript:void(0)"> Administration </a>
        <a <?php if($action == 4) { echo "class='active'"; } ?> href="javascript:void(0)"> Affiliated Colleges </a>
        <a <?php if($action == 5) { echo "class='active'"; } ?> href="javascript:void(0)"> About Us </a>
        <a <?php if($action == 6) { echo "class='active'"; } ?> href="javascript:void(0)"> Faculty </a>
        <a <?php if($action == 7) { echo "class='active'"; } ?> href="javascript:void(0)"> Media </a>
        <a <?php if($action == 8) { echo "class='active'"; } ?> href="javascript:void(0)"> Helpline </a>
        <a <?php if($action == 9) { echo "class='active'"; } ?> href="javascript:void(0)"> Contact Us </a>
    </div>
<?php
}
?>