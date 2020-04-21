<?php
require_once("database.php");

$sql0 = "SELECT DISTINCT Event FROM Photos";
$result0 = mysqli_query($connection, $sql0);

?>

    <script>
        function zoomIn(object) {
            document.getElementById("zoomContent").innerHTML = "<img style='border-radius: 5px;' src='"+object.src+"' height='100%' width='100%'>";
            document.getElementById("zoomIn").style.display = "block";
        }

        function zoomOut() {
            document.getElementById("zoomIn").style.display = "none";
        }
    </script>

    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Photo Gallery</title>
    <meta name="keywords" content="photo, photos, image, images, gallery, photo, photos, image, images, gallery">
    <div class="container-fluid">
        <?php
            while($row0 = mysqli_fetch_array($result0)) {
                echo "<br><div class='row'> <h3>".$row0['Event']."</h3> &nbsp;&nbsp;&nbsp; ";
                echo "</div> <br>";
                $sql1 = "SELECT * FROM Photos WHERE Event = '".$row0['Event']."'";
                $result1 = mysqli_query($connection, $sql1);
                $t = 0;

                echo "<div class='row' style='text-align: center;'>";
                while($row1 = mysqli_fetch_array($result1)) {
                    echo "<div class='col-4'> 
                            <img onclick='zoomIn(this)' src='photos/".$row0['Event']."/".$row1["Image"]."' style='border-radius: 5px;' height='200px' width='250px'> 
                            <br>";
                    echo "</div>";
                    $t++;

                    if($t >= 3) {
                        $t = 0;
                        echo "</div> <br>";
                        echo "<div class='row' style='text-align: center;'>";
                    }
                }
                echo "</div>";
            }
        ?>
    </div>

    <div id="zoomIn">
        <i onclick="zoomOut()" id="closeBtn" class="fa fa-close"></i>
        <div id="zoomContent">

        </div>
    </div>