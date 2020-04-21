<?php
require("secondaryHeader.php");
?>
<html>
  <head>
    <title>Upcoming Events</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/department.css">
   <link rel="stylesheet" type="text/css" href="css/departmentofscience.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>


$(document).ready(function() {
    $("#loadingContainer").load("NationalSeminar.php");
});

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
                    <td id="listname"><b>Upcoming Events</b></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('NaizAhmedMemorial.php')" style="text-decoration: none;color: black;margin-top:3%" id="notification">40th Naiz Ahmed Memorial Debate 2018-19  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :09 January, 2019</p> </td>
                </tr>
                <tr>            
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('NationalTraining.php')" style="text-decoration: none;color:black" id="notification">National Training Workshop On Research Ethics and Utilization of Electronic Resources </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 28 December, 2018</p> </td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('26Convocation.php')" style="text-decoration: none;color:black" id="notification">26th Convocation   </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :  27 November, 2018</p></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('ManagementDevelpoment.php')" style="text-decoration: none;color:black" id="notification">Management Development Programme on Advanced Option Strategies Saturday, November 24, 2018   </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :16 November, 2018</p> </td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('NationArt.php')" style="text-decoration: none;color:black" id="notification">Nation Art Camp  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On:16 November, 2018</p> </td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('WestZone.php')" style="text-decoration: none;color:black" id="notification" >West Zone Inter University Tennis (Men) Tournament 2018-19   </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On:30 October, 2018</p> </td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('NationalWorkshop.php')" style="text-decoration: none;color:black" id="notification">National Workshop on Computational Techniques For Education & Research  </a><br><p style="color:red;text-align:left;font-size: 12px;">Uploaded On :30 October, 2018</p></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('SkillDevelopment.php')" style="text-decoration: none;color:black" id="notification">Skill Development Programme by Infosys for undergraduates @ FMS</a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :23 October, 2018</p></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('Seminar.php')" style="text-decoration: none;color:black" id="notification">Seminar on "New Vision of Tearchers Education: Issues & Challenges"  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On : 14 March, 2018 </p></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('NationalSeminar.php')" style="text-decoration: none;color:black" id="notification">National Seminar On Industrial Advance & Academic Research (IAAR-2018)  </a><br><p style="color:red;text-align:left;font-size: 12px">Uploaded On :27 February, 2018</p> </td>
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