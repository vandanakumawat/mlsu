<?php
require("database.php");

$sql0 = "SELECT totalVisitors FROM WebsiteInformation";
$result = mysqli_query($connection, $sql0);
$row = mysqli_fetch_array($result);

$_SESSION['totalVisitors'] = $row['totalVisitors'] + 1;

$sql1 = "UPDATE WebsiteInformation SET totalVisitors = '".$_SESSION['totalVisitors']."' ";
mysqli_query($connection, $sql1);

?>

<script>

window.location.href = "home.php";

</script>