<?php
require("database.php");
require("secondaryHeader.php");
require("footer.php");
?>

<style>

.footer {
    position: absolute;
    margin: 0;
    top: 100%;
    left: 0;
}

#topImage {
    position: absolute;
    margin: 0;
    top: 70px;
    left: 0;
    width: 100%;
    text-align: center;
}

#departmentsList {
    position: absolute;
    margin: 0;
    top: 220px;
    left: 10%;
    background-color: rgb(55, 99, 132);
    font-family: Raleway;
}

#departmentsList a {
    text-decoration: none;
    color: white;
}

#departmentsList th {
    color: white;
    padding: 20px 20px 20px 10px;
    text-align: left;
    font-size: 30px;
}

#departmentsList td {
    padding: 10px 10px 10px 10px;
    font-size: 17px;
}

#loadingContainer {
    position: absolute;
    margin: 0;
    top: 220px;
    right: 10%;
    /*border: 2px solid green;*/
    height: 61%;
    width: 60%;
    overflow-y: scroll;
    overflow-x: hidden;
}

#loadingContainer::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(document).ready(function() {
    $("#loadingContainer").load("departmentOfScience.php");
});
</script>

<html>

<head>

<title> Departments </title>

<link type="text/css" rel="stylesheet" href="#">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
secondaryHeader();
?>

</head>

<body>

<div id="topImage">
    <img src="images/sliderBackground2.jpg" height="150px" width="80%">
</div>

<div id="departmentsList">
    <table width="100%">
        <th>
            Departments
        </th>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfScience.php')" >Department of Science</a> </td>
        </tr>
        <tr>            
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfCommerce.php')" >Department of Commerce</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfManagement.php')" >Department of Management</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfEducation.php')" >Department of Education</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfLaw.php')" >Department of Law</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfHumanities.php')" >Department of Humanities</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('departmentOfSocialStudies.php')" >Department of Social Sciences</a> </td>
        </tr>
        <tr>
            <td> <a href="javascript:void(0)" onclick="loadDepartment('otherDepartments.php')" >Other Departments</a> </td>
        </tr>
    </table>
</div>

<div id="loadingContainer">

</div>

<?php
footer();
?>

</body>

</html>