<?php
require("secondaryHeader.php");

if(isset($_GET["pageName"])) { 
    echo "<script> var pageName = '".$_GET["pageName"]."'; </script>"; 
} 
else {
    echo "<script> var pageName = 'null'; </script>"; 
} 
?>
<html>
  <head>
    <title>Examination Notifications</title>
    <meta name="keywords" content="examination, notification, letter, time, table, list, center, post, under, graduate, postgraduate, undergraduate, Corrigendum, Notice, exam, exams">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/department.css">
   <link rel="stylesheet" type="text/css" href="css/departmentofscience.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("LetterExamination.php");
    });
}
else {
    $(document).ready(function() {
        $("#loadingContainer").load(pageName);
    });
}

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}

</script>
 </head>
<body style='background: #E9E9E9'>
	<?php secondaryHeader(); ?>
   <div class="container-fluid">
    <div class="row">
      <div class='col-md'>
        <table   cellpadding="4" height="15%" style="width:52%;" id="sideNavigationColumn" align='left' cellspacing="0">
          <tr>
                    <td id="listname"><b>Examination Notifications </b></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('LetterExamination.php')" style="text-decoration: none;color: black;margin-top:3%" id="notification">Letter Regrading Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 29 January, 2019</p> </td>
                </tr>
                <tr>            
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('CenterListBCA.php')" style="text-decoration: none;color:black" id="notification">Center list of B.C.A / (annual scheme) /P.G.D.C.A. Examination 2019 </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 19 January, 2019</p> </td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('TimeTableBA.php')" style="text-decoration: none;color:black" id="notification">Time Table of BA III Year (Regular , Ex BA Additional Subject & Remaining Papers of NC) Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 19 January, 2019 </p></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('SubExamCenter.php')" style="text-decoration: none;color:black" id="notification">Regarding Sub Exam Center  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :18 January, 2019</p> </td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('MAHindi.php')" style="text-decoration: none;color:black" id="notification">Corrigendum of MA Hindi III Semester Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On:17 January, 2019</p> </td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('MIB.php')" style="text-decoration: none;color:black" id="notification" >Corrigendum For MIB I Semester (Pcode MIB107/O)  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On:14 January, 2019</p> </td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('PostGraduate.php')" style="text-decoration: none;color:black" id="notification">Revised Center List of Post Graduate Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px;">Uploaded On : 12 January, 2019</p></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('UnderGraduate.php')" style="text-decoration: none;color:black" id="notification">Revised Center List Of Under-Graduate Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 12 January, 2019</p></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('ExaminationNotificationMSC.php')" style="text-decoration: none;color:black" id="notification">Examination Notice For M.Sc. Geology III Semester </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 08 January, 2019 </p></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('UGCenterList.php')" style="text-decoration: none;color:black" id="notification">Center List of Under-Graduate Examination 2019  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :08 January, 2019</p> </td>
                </tr>
           </table>
      </div>
      <div class='col-md' >
	 			<div id="loadingContainer" style="height:700px;margin-top:7%"> 			   
				</div>	
	 	    </div>
  </div>

</body>
</html>