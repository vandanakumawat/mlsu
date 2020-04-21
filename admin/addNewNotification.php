<?php
require_once("database.php");
require_once("adminNavbar.php");
require_once("adminHeader.php");

if(isset($_SESSION["loggedInToMLSU"])) {
    adminHeader();

    switch($_SESSION["idCode"]) {
        case 101:
            masterNavbar(1);
        break;

        case 102:
            adminNavbar(1);
        break;
    }
}
else {
    header("location: index.php");
} 

if(isset($_GET["flag"])) {
    if($_GET["flag"] == "fail") {
        echo "<script> alert('".$_GET["error"]."'); </script>";
    }
    else {
        echo "<script> alert('Notification submitted successfully'); </script>";
    }
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/addNewNotification.css">
</head>

<br><br>

<div id="addNewNotification">
    <form action="submitNotification.php" method="post" enctype="multipart/form-data">
    <table cellpadding="10px" align="center">
        <th> Add new Notification </th>

        <tr>
            <td style="text-align: left;"> 
                Type <br><br>
                <select class="form-control" name="notificationType" id="typeCombo"> 
                    <option value="GeneralNotifications"> General Notifications </option> 
                    <option value="ExaminationsNotifications"> Examinations Notifications </option>
                    <option value="UpcomingEventsNotifications"> Upcoming Events Notification </option>
                    <option value="TendersNotifications"> Tenders Notifications </option>
                </select> 
            </td>
        </tr>

        <tr>
            <td style="text-align: left;"> 
                Title <br><br>
                <input class="form-control" type="text" name="notificationTitle" required maxlength="50"> 
            </td>
        </tr>

        <tr>
            <td style="text-align: left;"> 
                Attachment <br><br>
                <input class="form-control" type="file" name="notificationAttachment" accept="application/pdf" required> 
            </td>
        </tr>

        <tr>
            <td> 
                <input class="form-control btn btn-info" type="submit" name="submitNotification" value="Submit"> 
            </td>
        </tr>
    </table>
    </form>
</div>

<?php adminFooter(); ?>