
<html>
  <head>
    <title>Deparments Of Science</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

$(document).ready(function() {
    $("#loadingContainer").load("departmentofZoology.php");
});

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}

</script>
 </head>
<body style='background: #E9E9E9'>
	 <div class='container-fluid' valign='top' style="background-image:linear-gradient(to right, rgb(55, 99, 132), rgb(245, 207, 148));height:17%;">
	 	<div class='row' style='width: 100%'>
	 		<div class='col-md'>
	 			<img src="images/logo.png" style='height: 60%;width: 50%;margin-top:20px;'>
	 		</div>
	 		<div class='col-md' style='height: 100%;width:0%;margin-left: -24%'>
				
					 			
	 		</div>
	 	</div>
	</div>
	 	<div class="row">
	 		<div class='col-md'>
	 		  <table  height='75%' style="width: 45%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>Deparments Of Science</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('NRCbiotechnology.php')" style="text-decoration: none;color: black">Department of NRC-Biotechnology</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('bioTechnology.php')" style="text-decoration: none;color: black">Department of Bio-Technology</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofBotany.php')" style="text-decoration: none;color: black">Department of Botany</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofChemistry.php')" style="text-decoration: none;color:black" >Department of Chemistry</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofComputer.php')" style="text-decoration: none;color:black">Department of Computer Science</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofEnvironmental.php')" style="text-decoration: none;color:black">Department of Enivironment Science</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofGeology.php')" style="text-decoration: none;color:black">Department of Geology</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofIndustrial.php')" style="text-decoration: none;color:black">Department of Industrial Chemistry</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofMaths.php')" style="text-decoration: none;color:black">Department of Maths & Statistics</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofMicrobiology.php')" style="text-decoration: none;color:black">Department Of Microbiology </a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofPharmacy.php')" style="text-decoration: none;color:black">Department Of Pharmacy </a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofPhysics.php')" style="text-decoration: none;color:black">Department Of Physics </a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofPolymer.php')" style="text-decoration: none;color:black">Department Of Polymer Science </a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofZoology.php')" style="text-decoration: none;color:black">Department Of Zoology </a> </td>
                </tr>
	         </table>
	 		</div>
	 		<div class='col-md' style="margin-left: 2.5%">
	 			<div id="loadingContainer" >
	 			   
				</div>	
	 	    </div>
	 	</div>
	 	<div class='row' style="margin-top: 0px">
	 		<div class="col-md">
	 		  	
	 		</div>
	 	</div>
  </div>
</body>
</html>