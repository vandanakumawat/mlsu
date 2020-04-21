<?php
require_once("database.php");

function encrypt($myPassword) {
    $digest = md5("thisisthesaltstring");
    $salt = '$2a$07$'.$digest.'$';
    $password = crypt($myPassword, $salt);
    $password = substr($password, 28);

    return $password;
}

if($_GET["otp"] != $_SESSION["mlsu_admin_otp"]) {
    echo "<script> alert('Invalid Link!!!'); window.location.href='adminLogin.php'; </script>";
}

if(isset($_POST["changePassword"])) {
    $tempPassword = $_POST["newPassword"];
    $tempId = $_POST["idCode"];

    if($tempPassword == $_POST["confirmPassword"]) {
        $query = "UPDATE Credentials SET password = ? WHERE sno = ?";

        $tempPassword = encrypt($tempPassword);

        $statement = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($statement, "si", $tempPassword, $tempId);
        $result = mysqli_stmt_execute($statement);

        if($result) {
            echo "<script> alert('Password Updated'); window.location.href='adminLogin.php'; </script>";
        }
        else {
            echo "<script> alert('Password update failed!!!'); </script>";
        }
    }
    else {
        echo "<script> alert('Passwords do not match!!!'); </script>";
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
    <title> Change Password </title>
</head>

<body>
    <div id="changePassword">
    <form action="" method="post">
        <table cellpadding="10px" align="center">
            <th> Change Password </th>

            <tr>
                <td style="text-align: left;">
                    New Password <br><br>
                    <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,16}" title="Must contain at least one number and one lowercase and uppercase letter and at least 8 or more characters." required id="inputUsername" name="newPassword">
                    <input type="hidden" name="idCode" value="<?php echo $_GET["id"]; ?>">
                </td>
            </tr>

            <tr>
                <td style="text-align: left;">
                    Confirm Password <br><br>
                    <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,16}" title="Must contain at least one number and one lowercase and uppercase letter and at least 8 or more characters." required id="inputPassword" name="confirmPassword">
                </td>
            </tr>

            <tr>
                <td> <input class="form-control btn btn-info" type="submit" name="changePassword" value="Change Password"> </td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>