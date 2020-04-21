<?php
require_once("database.php");

if(isset($_SESSION["loggedInToMLSU"])) {
    if(isset($_POST['delete'])) {
        $linkSno = $_POST['delete'];

        $query = "DELETE FROM HeaderLinks WHERE sno = ?";

        $statement = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($statement, "i", $linkSno);
        $result0 = mysqli_stmt_execute($statement);

        if($result0) {
            echo "Link deleted";
        }
        else {
            echo "Link deletion failed";
        }
    }
    else
    if(isset($_POST['update'])) {
        $linkSno = $_POST['update'];
        $linkName = $_POST['linkName'];
        $linkUrl = $_POST['linkUrl'];

        $query = "UPDATE HeaderLinks SET linkName = ?, linkUrl = ? WHERE sno = ?";

        $statement = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($statement, "ssi", $linkName, $linkUrl, $linkSno);
        $result0 = mysqli_stmt_execute($statement);

        if($result0) {
            echo "Link updated";
        }
        else {
            echo "Link updation failed";
        }
    }
    else
    if(isset($_POST['add'])) {
        $linkName = $_POST['linkName'];
        $linkUrl = $_POST['linkUrl'];

        $query = "INSERT INTO HeaderLinks (linkName, linkUrl) VALUES (?, ?)";

        $statement = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($statement, "ss", $linkName, $linkUrl);
        $result0 = mysqli_stmt_execute($statement);

        if($result0) {
            echo "Link added";
        }
        else {
            echo "Link addition failed";
        }
    }
}
else {
    header("location: adminLogin.php");
}

?>