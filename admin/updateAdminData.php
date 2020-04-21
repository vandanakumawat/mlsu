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
            masterNavbar(7);
        break;

        case 102:
            header("location: adminLogin.php");
        break;
    }
}
else {
    header("location: index.php");
}

if(isset($_POST["updateAdmin"])) {
    $tempName = trim($_POST["editName"]);
    $tempUsername = trim($_POST["editUsername"]);
    $tempPassword = trim($_POST["editPassword"]);
    $tempEmail = trim($_POST["editEmail"]);
    $tempIdCode = $_POST["editIdCode"];

    if($tempPassword == "") {
        $tempPassword = $_POST["currentPassword"];
    }
    else {
        $tempPassword = encrypt($tempPassword);
    }

    $query = "UPDATE Credentials SET name = ?, username = ?, password = ?, email = ? WHERE sno = ?";
    
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "ssssi", $tempName, $tempUsername, $tempPassword, $tempEmail, $tempIdCode);
    $result1 = mysqli_stmt_execute($statement);

    if($result1) {
        echo "<script> alert('Admin data Updated'); </script>";
    }
    else {
        echo "<script> alert('Admin data Update Failed!!!'); </script>";
    }
}

if(isset($_POST["deleteAdmin"])) {
    $sql2 = "DELETE FROM Credentials WHERE sno = '".$_POST["editIdCode"]."' ";
    $result2 = mysqli_query($connection, $sql2);

    if($result2) {
        echo "<script> alert('Administrator deleted'); </script>";
    }
    else {
        echo "<script> alert('Administrator deletion failed'); </script>";
    }
}

$sql0 = "SELECT * FROM Credentials WHERE NOT idCode = '101' ";
$result0 = mysqli_query($connection, $sql0);

$i=0;

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<div class="container-fluid" style="font-size: 15px;">
    <div class="row" style="font-weight: bold; text-align: center;"> 
        <div class="col-1" style="padding-right: 0; padding-left: 0;">S. No.</div>
        <div class="col-2" style="padding-right: 0; padding-left: 0;">Name</div>
        <div class="col-2" style="padding-right: 0; padding-left: 0;">Username</div>
        <div class="col-2" style="padding-right: 0; padding-left: 0;">Password</div>
        <div class="col-2" style="padding-right: 0; padding-left: 0;">Email Id</div>
    </div>
<br>
<?php 

while($row0 = mysqli_fetch_array($result0)) {
    $i++;
?>
    <form action="" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
        <div class="row" style="text-align: center;">
            <div class="col-1"><?php echo $i."."; ?></div>
            <input type="hidden" name="editIdCode" value="<?php echo $row0['sno']; ?>">
            <div class="col-2"><input required type="text" name="editName" pattern="[A-Za-z\s].{2,}" title="Name must contain only letters." value="<?php echo $row0['name']; ?>" ></div>
            <div class="col-2"><input required type="text" name="editUsername" pattern="[A-Za-z0-9].{2,}" title="Username must be only alphabets or numbers." value="<?php echo $row0['username']; ?>" ></div>
            <div class="col-2"><input type="password" name="editPassword" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,16}" title="Must contain at least one number and one lowercase and uppercase letter and at least 8 or more characters."></div>
            <input type="hidden" name="currentPassword" value="<?php echo $row0['password']; ?>">
            <div class="col-2"><input required type="email" name="editEmail" value="<?php echo $row0['email']; ?>" ></div>
            <div class="col-1"><input type="submit" name="updateAdmin" value="Update"></div>
            <div class="col-1"><input type="submit" name="deleteAdmin" value="Delete"></div>
        </div>
    </form>
<?php
}
?>
</div>
<?php adminFooter(); ?>