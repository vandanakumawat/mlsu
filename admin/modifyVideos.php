<?php
require_once("database.php");

function deleteFiles($target) {
    if(is_dir($target)) {
        $handle = opendir($target);

        while($file = readdir($handle)) {
            unlink($target."/".$file);
        }
    
        if(rmdir($target)) {
            return 1;
        }
        else {
            return 0;
        }
    }
    else {
        echo "No such directory exists";
    }
}

if(isset($_POST["fileName"])) {
    $eventTitle = $_POST["fileName"];

    $query = "DELETE FROM Videos WHERE Event = ?";
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $eventTitle);
    
    if(deleteFiles("../videos/".$_POST["fileName"])) {
        if(mysqli_stmt_execute($statement)) {
            echo "Files deleted";
        }
    }
    else {
        echo "Deletion error!";
    }
}

if(isset($_POST["videoSno"])) {
    $sno = $_POST["videoSno"];
    $name = $_POST["videoName"];
    $title = $_POST["videoTitle"];

    $query = "DELETE FROM Videos WHERE sno = ?";
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "i", $sno);
    
    if(unlink("../videos/".$title."/".$name)) {
        if(mysqli_stmt_execute($statement))
            echo "Video deleted";
    }
    else {
        echo $name;
    }
}
?>