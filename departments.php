<?php
require("secondaryHeader.php");
require("footer.php");

secondaryHeader();
?>

<style>

.footer {
    position: absolute;
    margin: 0;
    top: 100%;
    left: 0;
    width: 100%;
}

</style>

<script>

$(document).ready(function() {
    $("#loadingContainer").load("departmentOfScience.php");
});

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        alert(departmentName);
    });
}

</script>

<html>

<head>
    <title> Departments </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <link type="text/css" rel="stylesheet" href="css/departments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="departmentsList">
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

</html>