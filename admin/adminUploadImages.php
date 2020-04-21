<?php
require_once("database.php");
require_once("adminNavbar.php");
require_once("adminHeader.php");

if(isset($_SESSION["loggedInToMLSU"])) {
    adminHeader();

    switch($_SESSION["idCode"]) {
        case 101:
            masterNavbar(1);
        break;

        case 102:
            adminNavbar(7);
        break;
    }
}
else {
    header("location: index.php");
} 

if(isset($_POST['submitPhotos'])) {
    $validExtension = array("jpeg", "jpg", "png");
    $error = array();

    foreach($_FILES["uploadedImages"]["tmp_name"] as $key=>$value) {
        $fileName = md5_file($_FILES["uploadedImages"]["tmp_name"][$key]);
        $fileTmp = $_FILES["uploadedImages"]["tmp_name"][$key];

        $ext = pathinfo($_FILES["uploadedImages"]["name"][$key], PATHINFO_EXTENSION);

        if(in_array($ext, $validExtension)) {
            $fileName = $fileName.".".$ext;
            if($_FILES["uploadedImages"]["size"][$key] < 10000000) { //less than approximately 10MB
                $eventTitle = $_POST["eventTitle"];

                if(!file_exists("../photos/".$eventTitle)) {
                    mkdir("../photos/".$eventTitle, 0777, true);
                }

                if(move_uploaded_file($fileTmp, "../photos/".$eventTitle."/".$fileName)) {
                    $query = "INSERT INTO Photos (Event, Image) VALUES (?, ?)";

                    $statement = mysqli_prepare($connection, $query);
                    mysqli_stmt_bind_param($statement, "ss", $eventTitle, $fileName);
                    mysqli_stmt_execute($statement);
                }
            }
            else {
                array_push($error, $_FILES["uploadedImages"]["name"][$key]);
            }
        }
        else {
            array_push($error, $_FILES["uploadedImages"]["name"][$key]);
        }
    }

    if($error === 1) {
        echo "<script> alert('Some files were not uploaded correctly'); </script>";
    }
    else {
        echo "<script> alert('Files uploaded successfully'); </script>";
    }
}

$sql0 = "SELECT DISTINCT Event FROM Photos";
$result0 = mysqli_query($connection, $sql0);

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/adminUploadImages.css">
</head>

<script>

function deleteEvent(eventName) {
    if(confirm("This will delete all media related to this event! Continue?")) {
        $.post("modifyImages.php", {fileName: eventName}, function(result) {
            alert(result);
            window.location.href="adminUploadImages.php";
        });
    }
}

function deletePhoto(sno, name, title) {
    $.post("modifyImages.php", {imageSno: sno, imageName: name, imageTitle: title}, function(result) {
        alert(result);
        window.location.href="adminUploadImages.php";
    });
}

</script>

<br><br>

<body>
    <div id="addNewImage">
        <form action="" method="post" enctype="multipart/form-data">
        <table align="center" cellpadding="15px">
            <th style="text-align: center;"> <h3> Add Photos </h3> </th>

            <tr>
                <td style="text-align: left;"> 
                    Event Title <br><br>
                    <input class="form-control" type="text" name="eventTitle" required maxlength="100">
                </td>
            </tr>

            <tr>
                <td style="text-align: left;"> 
                    Images <br><br>
                    <input class="form-control" type="file" name="uploadedImages[]" multiple required> 
                </td>
            </tr>

            <tr>
                <td style="text-align: center; font-size: 15px; color: red;">
                    <?php 
                        $len = sizeof($error);

                        if($len > 0) 
                            echo "These files were not uploaded due to <br> invalid file type or large file size: <br>";

                        for($i=0; $i<$len; $i++) {
                            echo "- ".$error[$i]."<br>";
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td> 
                    <input class="form-control btn btn-info" type="submit" name="submitPhotos" value="Submit"> 
                </td>
            </tr>
        </table>
        </form>
    </div>

    <div class="container-fluid">
        <?php
            while($row0 = mysqli_fetch_array($result0)) {
                echo "<br><div class='row'> <h3>".$row0['Event']."</h3> &nbsp;&nbsp;&nbsp; ";
                ?>
                <a href='javascript:void(0)' onclick="deleteEvent('<?php echo $row0['Event']; ?>')" class='fa fa-trash' style='font-size: 30px; text-decoration: none;'> </a> 
                <?php
                echo "</div> <br>";
                $sql1 = "SELECT * FROM Photos WHERE Event = '".$row0['Event']."'";
                $result1 = mysqli_query($connection, $sql1);
                $t = 0;

                echo "<div class='row' style='text-align: center;'>";
                while($row1 = mysqli_fetch_array($result1)) {
                    echo "<div class='col-3'> 
                            <img src='../photos/".$row0['Event']."/".$row1["Image"]."' height='200px' width='250px'> 
                            <br> 
                            <a href='../photos/".$row0['Event']."/".$row1["Image"]."' target='blank' style='padding: 5px 20px 5px 20px; font-size: 25px; text-decoration: none;' class='fa fa-external-link'></a>";
                    ?>
                        <a href='javascript:void(0)' onclick='deletePhoto("<?php echo $row1["sno"]; ?>", "<?php echo $row1["Image"]; ?>", "<?php echo $row1["Event"]; ?>")' style='padding: 5px 20px 5px 20px; font-size: 25px; text-decoration: none;' class='fa fa-trash-o'></a> 
                    <?php
                        echo "</div>";
                    $t++;

                    if($t >= 4) {
                        $t = 0;
                        echo "</div> <br>";
                        echo "<div class='row' style='text-align: center;'>";
                    }
                }
                echo "</div>";
            }
        ?>
    </div>
</body>