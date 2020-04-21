<?php
require("secondaryHeader.php");
require("footer.php");

if(isset($_GET["pageName"])) { 
    echo "<script> var pageName = '".$_GET["pageName"]."'; </script>"; 
} 
else {
    echo "<script> var pageName = 'null'; </script>"; 
}
?>

<html>
  <head>
    <title>Academics</title>
     <meta charset="utf-8">
    <meta name="keywords" content="academics, academics, academic, departments, department">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("departmentofscience.php");
    });
}
else {
    if(pageName != "") {
        $(document).ready(function() {
            $("#loadingContainer").load(pageName);
        });
    }
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
	 		  <table  height='70%' style="width:48%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>Academics</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofscience.php')" style="text-decoration: none;color: black">Department of Science</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofcommerce.php')" style="text-decoration: none;color:black">Department of Commerce</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofmanagement.php')" style="text-decoration: none;color:black">Department of Management</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="https://www.mlsu.ac.in/education/" onclick="loadDepartment(#)" style="text-decoration: none;color:black">Department of Education</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentoflaw.php')" style="text-decoration: none;color:black">Department of Law</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofhumanities.php')" style="text-decoration: none;color:black">Department of Humanities</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofsocialstudies.php')" style="text-decoration: none;color:black">Department of Social<br> Sciences</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('otherdepartments.php')" style="text-decoration: none;color:black">Other Departments</a> </td>
                </tr>
	         </table>
	 		</div>
	 		<div class='col-md'>
	 			<div id="loadingContainer" style="height:450px;margin-top:6%">
                    
				</div>	
	 	    </div>
	 	</div>
  </div>
  <br><br>
    <?php footer(); ?>
</body>
</html>