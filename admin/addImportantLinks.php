<?php
require_once("database.php");
require_once("adminNavbar.php");
require_once("adminHeader.php");

if(isset($_SESSION["loggedInToMLSU"])) {
    adminHeader();

    switch($_SESSION["idCode"]) {
        case 101:
            masterNavbar(8);
        break;

        case 102:
            adminNavbar(6);
        break;
    }
}
else {
    header("location: index.php");
}

$sql0 = "SELECT * FROM HeaderLinks";
$result0 = mysqli_query($connection, $sql0);

?>

<script>

function deleteLink(sno) {
    if(confirm("Are you sure?")) {
        $.post("modifyHeaderLink.php", {delete: sno}, 
        function(result) { 
            alert(result); 
            window.location.href='addImportantLinks.php'; 
        });
    }
}

function updateLink(sno) {
    var name = document.getElementById("linkName"+sno).value;
    var url = document.getElementById("linkUrl"+sno).value;

    if(name === "" || url === "") {
        alert("Field(s) are empty!!!");
    }
    else {
        $.post("modifyHeaderLink.php", {update: sno, linkName: name, linkUrl: url}, 
            function(result) { 
                alert(result); 
                window.location.href='addImportantLinks.php'; 
            });
    }
}

function addNewLink() {
    var name = document.getElementById("linkName").value;
    var url = document.getElementById("linkUrl").value;

    if(name === "" || url === "") {
        alert("Field(s) are empty!!!");
    }
    else {
        $.post("modifyHeaderLink.php", {add: "1", linkName: name, linkUrl: url}, 
        function(result) { 
            alert(result); 
            window.location.href='addImportantLinks.php'; 
        });
    }
}

</script>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/addImportantLinks.css">
</head>

<br><br>

<div id="addNewLink">
    <table cellpadding="10px" align="center">
        <th style="text-align: center; font-size: 20px;" colspan="4"> Add new Link </th>

        <tr>
            <td> <b> Link Name </b> </td>
            <td colspan="3"> <b> Link URL </b> </td>
        </tr>

        <?php
        while($row0 = mysqli_fetch_array($result0)) {
            echo "<tr>";
            echo "<td> <input type='text' maxlength='100' id='linkName".$row0['sno']."' value='".$row0['linkName']."'> </td>";
            echo "<td> <input type='text' maxlength='200' id='linkUrl".$row0['sno']."' value='".$row0['linkUrl']."'> </td>";
            echo "<td> <a href='javascript:void(0)' onclick='updateLink(".$row0['sno'].")'> <i class='fa fa-refresh'> </i> </a> </td>";
            echo "<td> <a href='javascript:void(0)' onclick='deleteLink(".$row0['sno'].")'> <i class='fa fa-close'> </i> </a> </td>";
            echo "</tr>";
        }
        ?>    

        <tr>
            <td> <input type='text' maxlength='100' id='linkName'> </td>
            <td> <input type='text' maxlength='200' id='linkUrl'> </td>
            <td><a href="javascript:void(0)" onclick="addNewLink()"> <i class='fa fa-plus'> </i> </a></td>
        </tr>    
    </table>
</div>

<?php adminFooter(); ?>