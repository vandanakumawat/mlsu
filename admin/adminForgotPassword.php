<?php
require_once("database.php");

if(isset($_POST["forgotPasswordEmail"])) {
    $tempEmail = $_POST["adminEmail"];

    $query = "SELECT sno FROM Credentials WHERE email = ?";

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "s", $tempEmail);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if($result) {
        $row = mysqli_fetch_array($result);

        $otp = mt_rand(100000, 999999);
        $otp = md5($otp);

        $_SESSION["mlsu_admin_otp"] = $otp;

        $url = "localhost/mlsu/changePassword.php?otp=".$_SESSION["mlsu_admin_otp"]."&id=".$row["sno"];
        
        $to = $tempEmail;
        $subject = "MLSU-Forgot Password";
        $message = "This email was sent to you in response of a password reset request made from MLSU admin panel. <br> If you did not made any such request please ignore this message. <br> <b> Visit the following link to reset your password:- </b> <a href='".$url."' target='blank'> ".$url." </a> <br> This link is valid for a limited time.";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        /* $headers .= 'From: <webmaster@example.com>' . "\r\n"; */     

        $mail = mail($to, $subject, $message, $headers);

        echo $message;

        if($mail) {
            echo "<script> alert('Email sent successfully'); </script>";
        }
        else {
            echo "<script> alert('Email NOT sent!!!'); </script>";
        }
    }
    else {
        echo "<script> alert('No such email id exists!!!'); </script>";
    }
}
?>

<html>

<style>
table th {
    text-align: center;
    font-size: 20px;
}
</style>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title> Forgot Passsword </title>
</head>

<body>
    <div id="forgotPassword">
    <form action="" method="post">
        <table cellpadding="10px" align="center">
            <th> Forgot Password </th>

            <tr>
                <td style="text-align: left;">
                    Email Id <br><br>
                    <input title="Enter email id associated with your account." class="form-control" type="email" required id="inputEmail" name="adminEmail">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;"><a href="adminLogin.php">Log In</a></td>
            </tr>
            
            <tr>
                <td colspan="2"> <input class="form-control btn btn-info" type="submit" name="forgotPasswordEmail" value="Send Email"> </td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>