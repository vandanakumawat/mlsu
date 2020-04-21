<html>
  <head>
    <title>RTI</title>
    <meta name="keywords" content="RTI, right, information, act">
  	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" type="text/css" href="css/departmentofscience.css">
      <script>
 /*       $(document).ready(function() {
    $("#loadingContainer").load("Act.php");
});

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}*/
      </script>
  </head>
<body>
   <div class='container-fluid'>      <!-- Images Start-->
   	  <div class="row">
   	  	<div class="col-md">
   	  		<h1 class='heading'><i>RTI</i></h1>
   	  	</div>
   	  </div>
      <div class="row">
        <div class="col-md">
          <table class="table table-bordered table-striped" style="margin-top:2%">
            <tr>
              <td><a href="javascript:void(0)" onclick="loadDepartment('#')" style="text-decoration: none;color: black"><h4>Act</h4> </a><br><embed src="pdf/rti.pdf" type="application/pdf" width="100%" height="400px" ></embed>
			  </td>
            </tr>
            <tr>
              <td><a href="javascript:void(0)" onclick="loadDepartment('#')" style="text-decoration: none;color: black"><h4>RTI Act 2005</h4></a><br><embed src="pdf/rti2005.pdf" type="application/pdf" width="100%" height="400px" ></embed>
			  </td>
            </tr>
          </table>
        </div>
      </div>
   </div>
</body>
</html>
