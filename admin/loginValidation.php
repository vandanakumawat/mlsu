<?php
require_once("database.php");

function encrypt($myPassword) {

    $digest = md5("thisisthesaltstring");
    $salt = '$2a$07$'.$digest.'$';
    $password = crypt($myPassword, $salt);
    $password = substr($password, 28);

    return $password;
}

if(isset($_POST["adminSubmit"])) {
    $adminUsername = trim($_POST["adminUsername"]);
    $adminPassword = trim($_POST["adminPassword"]);

    if($adminUsername == "") {
        header("location: adminLogin.php?error=login_failed");
    }

    $adminPassword = encrypt($adminPassword);

    $query = "SELECT * FROM Credentials WHERE username = ? AND password = ? ";
    
    mysqli_stmt_init($connection);

    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "ss", $adminUsername, $adminPassword);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if(mysqli_num_rows($result) == 0) {
        header("location: adminLogin.php?error=login_failed");
    }
    else {
        $row = mysqli_fetch_array($result);

        $_SESSION["loggedInToMLSU"] = 1;
        $_SESSION["idCode"] = $row["idCode"];
        $_SESSION["username"] = $row["username"];

        mysqli_stmt_close($statement);
        header("location: addNewNotification.php");
    }
}
else {
    header("location: index.php");
}

?>