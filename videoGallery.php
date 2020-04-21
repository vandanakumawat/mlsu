<?php
require_once("database.php");

$sql0 = "SELECT DISTINCT Event FROM Videos";
$result0 = mysqli_query($connection, $sql0);

?>
    <title>Video Gallery</title>
    <meta name="keywords" content="video, videos, image, images, gallery, video, videos, gallery">
    <div class="container-fluid">
        <?php
            while($row0 = mysqli_fetch_array($result0)) {
                echo "<br><div class='row'> <h3>".$row0['Event']."</h3> &nbsp;&nbsp;&nbsp; ";
                echo "</div> <br>";
                $sql1 = "SELECT * FROM Videos WHERE Event = '".$row0['Event']."'";
                $result1 = mysqli_query($connection, $sql1);
                $t = 0;

                echo "<div class='row' style='text-align: center;'>";
                while($row1 = mysqli_fetch_array($result1)) {
                    echo "<div class='col-4'> 
                            <video height='200px' width='250px' controls> <source src='videos/".$row0['Event']."/".$row1["Video"]."'> </video>";
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