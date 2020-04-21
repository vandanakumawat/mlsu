<?php
require_once("database.php");

if(isset($_POST["scheme"]) && isset($_POST["course"])) {
    $handle = opendir("old-papers/".$_POST["scheme"]."/".$_POST["course"]);

    while($file = readdir($handle)) {
        if($file == "." || $file == "..")
            continue;
            
        echo json_encode($file);
    }
}
else
if(isset($_POST["scheme"])) {
    $scheme = $_POST["scheme"];
    
    $query = "SELECT DISTINCT course FROM OldQuestionPapers WHERE scheme = ? ORDER BY course";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $scheme);
    mysqli_stmt_execute($statement);
    $result0 = mysqli_stmt_get_result($statement);

    while($row0 = mysqli_fetch_array($result0)) {
        echo json_encode($row0["course"]);
    }
}
?>