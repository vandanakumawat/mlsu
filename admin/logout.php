<?php
require_once("database.php");
unset($_SESSION["loggedInToMLSU"]);
header("location: adminLogin.php");
?>