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
            adminNavbar(8);
        break;
    }
}
else {
    header("location: index.php");
} 

if(isset($_POST['submitVideos'])) {
    $validExtension = array("mp4");
    $error = array();

    foreach($_FILES["uploadedVideos"]["tmp_name"] as $key=>$value) {
        $fileName = md5_file($_FILES["uploadedVideos"]["tmp_name"][$key]);
        $fileTmp = $_FILES["uploadedVideos"]["tmp_name"][$key];

        $ext = pathinfo($_FILES["uploadedVideos"]["name"][$key], PATHINFO_EXTENSION);

        if(in_array($ext, $validExtension)) {
            $fileName = $fileName.".".$ext;
            if($_FILES["uploadedVideos"]["size"][$key] < 100000000) { //less than approximately 100MB
                $eventTitle = $_POST["eventTitle"];

                if(!file_exists("../videos/".$eventTitle)) {
                    mkdir("../videos/".$eventTitle, 0777, true);
                }

                if(move_uploaded_file($fileTmp, "../videos/".$eventTitle."/".$fileName)) {
                    $query = "INSERT INTO Videos (Event, Video) VALUES (?, ?)";

                    $statement = mysqli_prepare($connection, $query);
                    mysqli_stmt_bind_param($statement, "ss", $eventTitle, $fileName);
                    mysqli_stmt_execute($statement);
                }
            }
            else {
                array_push($error, $_FILES["uploadedVideos"]["name"][$key]);
            }
        }
        else {
            array_push($error, $_FILES["uploadedVideos"]["name"][$key]);
        }
    }

    if($error === 1) {
        echo "<script> alert('Some files were not uploaded correctly'); </script>";
    }
    else {
        echo "<script> alert('Files uploaded successfully'); </script>";
    }
}

$sql0 = "SELECT DISTINCT Event FROM Videos";
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
        $.post("modifyVideos.php", {fileName: eventName}, function(result) {
            alert(result);
            window.location.href="adminUploadVideos.php";
        });
    }
}

function deletePhoto(sno, name, title) {
    $.post("modifyVideos.php", {videoSno: sno, videoName: name, videoTitle: title}, function(result) {
        alert(result);
        window.location.href="adminUploadVideos.php";
    });
}

</script>

<br><br>

<body>
    <div id="addNewVideo">
        <form action="" method="post" enctype="multipart/form-data">
        <table align="center" cellpadding="15px">
            <th style="text-align: center;"> <h3> Add Videos </h3> </th>

            <tr>
                <td style="text-align: left;"> 
                    Event Title <br><br>
                    <input class="form-control" type="text" name="eventTitle" required maxlength="100">
                </td>
            </tr>

            <tr>
                <td style="text-align: left;"> 
                    Videos <br><br>
                    <input class="form-control" type="file" name="uploadedVideos[]" multiple required> 
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
                    <input class="form-control btn btn-info" type="submit" name="submitVideos" value="Submit"> 
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
                $sql1 = "SELECT * FROM Videos WHERE Event = '".$row0['Event']."'";
                $result1 = mysqli_query($connection, $sql1);
                $t = 0;

                echo "<div class='row' style='text-align: center;'>";
                while($row1 = mysqli_fetch_array($result1)) {
                    echo "<div class='col-3'> 
                            <video height='200px' width='250px' controls> <source src='../videos/".$row0['Event']."/".$row1["Video"]."'> </video>
                            <br> 
                            <a href='../videos/".$row0['Event']."/".$row1["Video"]."' target='blank' style='padding: 5px 20px 5px 20px; font-size: 25px; text-decoration: none;' class='fa fa-external-link'></a>";
                    ?>
                        <a href='javascript:void(0)' onclick='deletePhoto("<?php echo $row1["sno"]; ?>", "<?php echo $row1["Video"]; ?>", "<?php echo $row1["Event"]; ?>")' style='padding: 5px 20px 5px 20px; font-size: 25px; text-decoration: none;' class='fa fa-trash-o'></a> 
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