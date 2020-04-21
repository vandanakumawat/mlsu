<?php
require_once("database.php");

if(isset($_POST["scheme"]) && isset($_POST["course"]) && isset($_POST["year"])) {
    $handle = opendir("syllabus/".$_POST["scheme"]."/".$_POST["course"]."/".$_POST["year"]."/");
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
if(isset($_POST["scheme"])) {
    $scheme = $_POST["scheme"];
    
    $query = "SELECT DISTINCT course FROM Syllabus WHERE scheme = ? ORDER BY course";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $scheme);
    mysqli_stmt_execute($statement);
    $result0 = mysqli_stmt_get_result($statement);

    while($row0 = mysqli_fetch_array($result0)) {
        echo json_encode($row0["course"]);
    }
}
else
if(isset($_POST["course"])) {
    $course = $_POST["course"];
    
    $query = "SELECT DISTINCT year FROM Syllabus WHERE course = ? ORDER BY year";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $course);
    mysqli_stmt_execute($statement);
    $result0 = mysqli_stmt_get_result($statement);

    while($row0 = mysqli_fetch_array($result0)) {
        echo json_encode($row0["year"]);
    }
}
?>