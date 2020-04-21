<?php
require_once("database.php");
require_once("adminNavbar.php");
require_once("adminHeader.php");

if(isset($_SESSION["loggedInToMLSU"])) {
    adminHeader();

    switch($_SESSION["idCode"]) {
        case 101:
            masterNavbar(5);
        break;

        case 102:
            adminNavbar(5);
        break;
    }
}
else {
    header("location: index.php");
}

if(isset($_POST["updateNotification"])) {
    $uploadError = 0;
    
    $date = getdate();
    $date = $date["year"]."-".$date["mon"]."-".$date["mday"];
    $date = date('Y-m-d', strtotime($date));

    $tempTitle = trim($_POST["editTitle"]);
    $tempIdCode = $_POST["editIdCode"];
    $fileName = $tempTitle.".pdf";

    if($tempTitle == "") {
        $uploadError = 1;
    }

    if(is_uploaded_file($_FILES["editAttachment"]["tmp_name"])) {
        $fileTmp = $_FILES["editAttachment"]["tmp_name"];
        $fileSize = $_FILES["editAttachment"]["size"];
        $fileType = $_FILES["editAttachment"]["type"];

        if($fileSize > 10485760) {  //max file size - 10MB
            $uploadError = 1;
            echo "<script> alert('Maximum file size exceeded'); </script>";
        } 
        else
        if($fileType != "application/pdf") {
            $uploadError = 1;
            echo "<script> alert('File must be a PDF'); </script>";
        }
        else {
            unlink("pdf/".$_POST["attachmentName"]);
            move_uploaded_file($fileTmp, "pdf/".$fileName);
        }
    }
    
    if($uploadError == 0) {
        if(file_exists("pdf/".$_POST["attachmentName"])) {
            rename("pdf/".$_POST["attachmentName"], "pdf/".$tempTitle.".pdf");
        }

        $query = "UPDATE TendersNotifications SET title = ?, lastUpdated = ?, attachment = ? WHERE sno = ?";

        $statement = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($statement, "sssi", $tempTitle, $date, $fileName, $tempIdCode);
        $result1 = mysqli_stmt_execute($statement);

        if($result1) {
            echo "<script> alert('Notification Updated'); </script>";
        }
        else {
            echo "<script> alert('Notification Update Failed!!!'); </script>";
        }
    }
}

if(isset($_POST["deleteNotification"])) { 
    $sql2 = "DELETE FROM TendersNotifications WHERE sno = '".$_POST['editIdCode']."'";
    $result2 = mysqli_query($connection, $sql2);

    if($result2) {
        if(file_exists(("pdf/".$_POST["attachmentName"])))
            unlink("pdf/".$_POST["attachmentName"]);
        echo "<script> alert('Notification deleted'); </script>";
    }
    else {
        echo "<script> alert('Notification deletion failed'); </script>";
    }
}

$sql0 = "SELECT * FROM TendersNotifications";
$result0 = mysqli_query($connection, $sql0);

$i=0;

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<div class="container" style="font-size: 15px;">
    <div class="row" style="font-weight: bold;"> 
        <div class="col-1" style="padding-right: 0; padding-left: 0;">S. No.</div>
        <div class="col-3" style="padding-right: 0; padding-left: 0;">Title</div>
        <div class="col-1" style="padding-right: 0; padding-left: 0;">Post Date</div>
        <div class="col-1" style="padding-right: 0; padding-left: 0;">Last Updated</div>
        <div class="col-3" style="padding-right: 0; padding-left: 0;">Document Attached</div>
        <div class="col-1" style="padding-right: 0; padding-left: 0;">Uploader</div>
    </div>
<br>
<?php 

while($row0 = mysqli_fetch_array($result0)) {
    $i++;
?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><?php echo $i."."; ?></div>
            <input type="hidden" name="editIdCode" value="<?php echo $row0['sno']; ?>">
            <div class="col-3" style="padding-right: 0; padding-left: 0;"><input required type="text" name="editTitle" value="<?php echo $row0['title']; ?>" ></div>
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><?php echo $row0["postDate"]; ?></div>
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><?php echo $row0["lastUpdated"]; ?></div>
            <div class="col-3" style="padding-right: 0; padding-left: 0;">
                <?php echo '<a href="pdf/'.$row0["attachment"].'" target="blank">'.$row0["attachment"].'</a>'; ?> 
                <input type="hidden" name="attachmentName" value="<?php echo $row0["attachment"]; ?>">
                <input type="file" name="editAttachment" >
            </div>
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><?php echo $row0["uploader"]; ?></div>
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><input type="submit" name="updateNotification" value="Update"></div>
            <div class="col-1" style="padding-right: 0; padding-left: 0;"><input type="submit" name="deleteNotification" value="Delete"></div>
        </div>
    </form>
<?php
}
?>

</div>

<?php adminFooter(); ?>