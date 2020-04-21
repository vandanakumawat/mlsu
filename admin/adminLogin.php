<?php
require_once("database.php");
require_once("adminHeader.php");

if(isset($_GET["error"])) {
    echo "<script> alert('Invalid Username or Password!!!'); </script>";
}

if(isset($_SESSION["loggedInToMLSU"])) {
    header("location: addNewNotification.php");
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/adminLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title> Admin Login </title>
</head>

<body>
    <?php adminHeader(); ?>
    <br>
    <br>
    <div id="adminLogin">
    <form action="loginValidation.php" method="post">
        <table cellpadding="10px" align="center">
            <th colspan="2"> <h3> Admin Login </h3> </th>

            <tr>
                <td style="text-align: left;">
                    Username <br><br>
                    <input class="form-control" type="text" required id="inputUsername" name="adminUsername">
                </td>
            </tr>

            <tr>
                <td style="text-align: left;">
                    Password <br><br>
                    <input class="form-control" type="password" required id="inputPassword" name="adminPassword">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;"><a href="adminForgotPassword.php">Forgot Password?</a></td>
            </tr>
            
            <tr>
                <td colspan="2"> <input class="form-control btn btn-info" type="submit" name="adminSubmit" value="Login"> </td>
            </tr>
        </table>
    </form>
    </div>
    <?php adminFooter(); ?>
</body>

</html>