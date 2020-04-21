<?php
require_once("database.php");

$sql0 = "SELECT * FROM HeaderLinks";
$result0 = mysqli_query($connection, $sql0);

$linkName = array();
$linkUrl = array();
$totalLinks = 0;

while($row0 = mysqli_fetch_array($result0)) {
    $linkName[$totalLinks] = $row0["linkName"];
    $linkUrl[$totalLinks] = $row0["linkUrl"];
    
    $totalLinks++;
}

function setHeaderLinks() {    
    global $totalLinks;
    global $linkUrl;
    global $linkName;

    echo "<div class='row' id='headerImportantLinks'>";
    for($i=0; $i<$totalLinks; $i++) {
        if($i)
            echo "<span> | </span>";
        echo "<div class='col'><a href='". $linkUrl[$i]."'> ".$linkName[$i]." </a></div>";
    }
    echo "</div>";
}

function setResHeaderLinks() {
    global $totalLinks;
    global $linkUrl;
    global $linkName;

    echo "<div id='headerResImportantLinks'>";
    for($i=0; $i<$totalLinks; $i++) {
        if($i)
            echo "<br>";
        echo "<div class='row'> <div class='col-md'><a href='". $linkUrl[$i]."'> ".$linkName[$i]." </a></div> </div>";
    }
    echo "</div>";
}

?>