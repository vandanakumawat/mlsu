<?php
require_once("database.php");

if(isset($_POST['submitNotification'])) {
    $tableName = $_POST['notificationType'];
    
    $date = getdate();
    $date = $date["year"]."-".$date["mon"]."-".$date["mday"];
    $date = date('Y-m-d', strtotime($date));

    $tempTitle = trim($_POST['notificationTitle']);
    $tempUploader = $_SESSION["username"];

    $fileName = $tempTitle.".pdf";
    $fileTmp  = $_FILES["notificationAttachment"]["tmp_name"];
    $fileSize = $_FILES["notificationAttachment"]["size"];
    $fileType = $_FILES["notificationAttachment"]["type"];

    if($fileSize > 10485760) {  //max file size - 10MB
        header("location: addNewNotification.php?flag=fail&error=Maximum file size exceeded");
    } 

    if($fileType != "application/pdf") {
        header("location: addNewNotification.php?flag=fail&error=File must be a PDF");
    }

    $query = "INSERT INTO ".$tableName." (title, postDate, lastUpdated, attachment, uploader) VALUES (?, ?, ?, ?, ?)";
    
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "sssss", $tempTitle, $date, $date, $fileName, $tempUploader);
    $result1 = mysqli_stmt_execute($statement);
 
    if($result1) {
        move_uploaded_file($fileTmp, "pdf/".$fileName);
        header("location: addNewNotification.php?flag=success");
    }
    else {
        header("location: addNewNotification.php?flag=fail&error=Notification not submitted");
    } 
}
else {
    header("location: index.php");
}
?>