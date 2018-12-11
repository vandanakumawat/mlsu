<?php

//if(isset($_POST['searchTerm'])){
    echo "<script> var searchTerms = '".$_GET['searchTerm']."'; searchTerms = searchTerms.split(' '); </script>";

    $files = array();

    if($fh = fopen("files.txt", "r")){
        $i=0;

        while(!feof($fh)){
            $files[$i] = trim(fgets($fh));
            str_replace("\n","",$files[$i]);
            $i++;
        }

        fclose($fh);
    }

    echo "<script> var files = []; </script>";

    $no_of_files = sizeof($files);
    for($i=0; $i<$no_of_files; $i++){
        echo "<script> files[".$i."] = '".$files[$i]."'; </script>";
    }
/*}
else{
    header("location:homepage.php");
}*/
?>

<script type="text/javascript" src="javascript/sessvars.js"></script>

<script>

var pageScore = [];     // individual page score
var pageTitle = [];     // Titles of the selected pages
var pageURL = [];       // Urls of the selected pages

function filterSearch(page) {       // filter out all the zero scoring pages
    var i = page;

    while(i--){
        if(pageScore[i] === 0){
            pageScore.splice(i,1);
            pageTitle.splice(i,1);
            pageURL.splice(i,1);
        }
    }

    page = pageScore.length;
    return page;
}

function swap(i, j) {                       // swap function for sorting
    var tempScore = pageScore[i];
    var tempTitle = pageTitle[i];
    var tempURL = pageURL[i];

    pageScore[i] = pageScore[j];
    pageTitle[i] = pageTitle[j];
    pageURL[i] = pageURL[j];

    pageScore[j] = tempScore;
    pageTitle[j] = tempTitle;
    pageURL[j] = tempURL;
}
     
function partition(pivot, left, right) {    // partition function for sorting
    var pivotValue = pageScore[pivot];
    var partitionIndex = left;

    for(var i = left; i < right; i++){
        if(pageScore[i] > pivotValue){
        swap(i, partitionIndex);
        partitionIndex++;
        }
    }

    swap(right, partitionIndex);
    return partitionIndex;
}

function sortSearch(left, right){           // function to sort the search results
    var pivot;
    var partitionIndex;


    if(left < right){
        pivot = right;
        partitionIndex = partition(pivot, left, right);
        
        //sort left and right
        sortSearch(left, partitionIndex - 1);
        sortSearch(partitionIndex + 1, right);
    }
}

function loadXMLDoc() {                     // load each page to check their score
    var doc;            // container for document DOM element      
    var page = 0;       // index number for the array of pages
    var nz_page = 0;    // index number / total count for non-zero scoring pages
    var meta;           // container for meta element
    var keywords;       // array of keywords of each page
    var i, j, k;        // iteration variables
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const parser = new DOMParser();
            const doc = parser.parseFromString(this.responseText, "text/html");

            pageTitle[page] = doc.title;
            pageURL[page] = files[page];
            meta = doc.getElementsByTagName("meta");
            
            i=0;

            while(meta[i]){
                if(meta[i].getAttribute("name") == "keywords"){
                    keywords = meta[i].getAttribute("content").split(',');
                    break;
                }

                i++;
            }

            var noOfKeys = keywords.length;
            var noOfTerms = searchTerms.length

            for(i=0; i<noOfTerms; i++){
                for(j=0; j<noOfKeys; j++){
                    var str1 = searchTerms[i].toUpperCase().trim();
                    var str2 = keywords[j].toUpperCase().trim();
                    if(str1.localeCompare(str2) == 0){
                        pageScore[page]++;
                    }
                }
            }
        }
    };

    for(page=0; page< <?php echo $no_of_files; ?>; page++){
        pageScore[page] = 0;
        pageTitle[page] = "";
        pageURL[page] = "";
        xhttp.open("GET", files[page], false); //POST takes more time than GET
        xhttp.send();
    }

    nz_page = filterSearch(page);
    sortSearch(0, (nz_page-1));
};

loadXMLDoc();

if(pageTitle.length < 1) {
    document.getElementById("resultTable").innerHTML = "<tr> <td> No results found </td> </tr>";
}
else {
    for(var i=0; i<5 && i<pageTitle.length; i++) {
        document.getElementById("resultTable").innerHTML += "<tr> <td> <a style='padding-right: 100%' href='"+pageURL[i]+"'> "+pageTitle[i]+" </a> </td> </tr>";
    }
}

</script>

<style>

#resultTable td {
    /*border-bottom: 2px solid rgb(245, 207, 148);*/
    border-radius: 30px;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
}

#resultTable a {
    text-decoration: none;
    color: white;
}

#resultTable {
    font-family: "Lato","Playfair Display","Raleway";
    font-size: 18px;
    overflow: hidden;
}

#resultTable td:hover {
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.2);
}

</style>

<html>
    <table cellpadding="10px" width="100%" id="resultTable">
        
    </table>
</html>