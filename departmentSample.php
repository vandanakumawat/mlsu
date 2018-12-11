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

::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js""></script>
<script>

$(document).ready(function() {
    $("#loadingContainer").load("departmentOfScience.php", function() {
        alert("loaded");
    });
});

</script>

<table style="position: absolute; margin:0; top: 12%; left:0; max-width:100%;" width="100%" height="550px">
    <tr>
        <td> 
            <table>
                <tr>
                    <td> Departments </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                <tr>
                    <td> Department of ..... </td>
                </tr>
                
            </table>
        </td>

        <td width="80%">
            <div id="loadingContainer" style="height:100%; width:100%; overflow-y: scroll;">
                a
            </div>
        </td>
    </tr>
</table>

<?php
footer();
?>