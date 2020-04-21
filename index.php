<?php

require("database.php");

$sql0 = "UPDATE WebsiteInformation SET totalVisitors = totalVisitors+1";
mysqli_query($connection, $sql0);

header("location: home.php");

?>