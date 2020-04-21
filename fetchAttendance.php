<?php
require_once("database.php");

if(isset($_POST["course"]) && isset($_POST["faculty"]) && isset($_POST["class"])) {
    $handle = opendir("attendance/".$_POST["course"]."/".$_POST["faculty"]."/".$_POST["class"]."/");
    $files = array();

    while($file = readdir($handle)) {
        if($file == "." || $file == "..")
            continue;
            
        array_push($files, $file);
    }

    if(sizeof($files) > 0)
        echo json_encode($files);
    else
        echo "null";
}
else
if(isset($_POST["faculty"]) && isset($_POST["course"])) {
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    
    $query = "SELECT DISTINCT class FROM StudentAttendance WHERE faculty = ? AND course = ? ORDER BY class";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "ss", $faculty, $course);
    mysqli_stmt_execute($statement);
    $result0 = mysqli_stmt_get_result($statement);

    while($row0 = mysqli_fetch_array($result0)) {
        echo json_encode($row0["class"]);
    }
}
else
if(isset($_POST["course"])) {
    $course = $_POST["course"];
    
    $query = "SELECT DISTINCT faculty FROM StudentAttendance WHERE course = ? ORDER BY faculty";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $course);
    mysqli_stmt_execute($statement);
    $result0 = mysqli_stmt_get_result($statement);

    while($row0 = mysqli_fetch_array($result0)) {
        echo json_encode($row0["faculty"]);
    }
}
?>