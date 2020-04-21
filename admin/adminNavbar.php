<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/adminNavbar.css">

<?php

function masterNavbar($pageNo) {
?>
    <div class="topnav" id="myTopnav">
        <a href="addNewNotification.php" <?php if($pageNo == 1) echo 'class="active"'; ?>>Add Notification</a>
        <a href="viewGeneralNotifications.php" <?php if($pageNo == 2) echo 'class="active"'; ?>>General Notifications</a>
        <a href="viewExaminationsNotifications.php" <?php if($pageNo == 3) echo 'class="active"'; ?>>Examinations</a>
        <a href="viewUpcomingEventsNotifications.php" <?php if($pageNo == 4) echo 'class="active"'; ?>>Upcoming Events</a>
        <a href="viewTendersNotifications.php" <?php if($pageNo == 5) echo 'class="active"'; ?>>Tenders </a>
        <a href="addNewAdmin.php" <?php if($pageNo == 6) echo 'class="active"'; ?>>Add Admin</a>
        <a href="updateAdminData.php" <?php if($pageNo == 7) echo 'class="active"'; ?>>Update Admin Data</a>
        <a href="addImportantLinks.php" <?php if($pageNo == 8) echo 'class="active"'; ?>>Important Links</a>
        <a href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
<?php
}

function adminNavbar($pageNo) {
?>
    <div class="topnav" id="myTopnav">
        <a href="addNewNotification.php" <?php if($pageNo == 1) echo 'class="active"'; ?> >Add Notification</a>
        <a href="viewGeneralNotifications.php" <?php if($pageNo == 2) echo 'class="active"'; ?>>General Notifications</a>
        <a href="viewExaminationsNotifications.php" <?php if($pageNo == 3) echo 'class="active"'; ?>>Examinations</a>
        <a href="viewUpcomingEventsNotifications.php" <?php if($pageNo == 4) echo 'class="active"'; ?>>Upcoming Events</a>
        <a href="viewTendersNotifications.php" <?php if($pageNo == 5) echo 'class="active"'; ?>>Tenders</a>
        <a href="addImportantLinks.php" <?php if($pageNo == 6) echo 'class="active"'; ?>>Important Links</a>
        <a href="adminUploadImages.php" <?php if($pageNo == 7) echo 'class="active"'; ?>>Upload Photos</a>
        <a href="adminUploadVideos.php" <?php if($pageNo == 8) echo 'class="active"'; ?>>Upload Videos</a>
        <a href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <?php
    }

?>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>