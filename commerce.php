
<html>
  <head>
    <title>Deparments Of Commerce</title>
    <meta name="keywords" content="department, commerce, tourism, accountancy, banking, business, management">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

$(document).ready(function() {
    $("#loadingContainer").load("departmentoftourism.php");
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
                    <td id="listname"><b>Deparments Of Commerce</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofAccountancy.php')" style="text-decoration: none;color: black">Department of <br/> Accountancy & Statstics</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofBanking.php')" style="text-decoration: none;color: black">      
                       Department of Banking<br/> & Business Economics</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentofBusiness.php')" style="text-decoration: none;color: black">Department of <br/>Business Administration</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentof_Management.php')" style="text-decoration: none;color:black" >Department of <br/>Management Studies</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('departmentoftourism.php')" style="text-decoration: none;color:black">Department of Tourism<br/> & Hotel Management</a> </td>
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