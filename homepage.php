<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
function search(){
    $("#searchResult").load("search.php?searchTerm=bca");
    /*$.post(
        "search.php", 
        { searchTerm : document.getElementById('search_box').value }, 
        function(result) {
            document.getElementById('searchResult').innerHTML = result;
            writeData();
        }
    );*/
}
</script>

<input type="text" id="search_box" name="search"> <button onclick="search()"> Search </button>

<div id="searchResult">

</div>