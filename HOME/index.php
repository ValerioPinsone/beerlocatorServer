
<?php
    $page_title = "BeerLocator";
    require "../LAYOUT/header.php";
?>
        <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/flags.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        </br></br>
        
        <section class="object__container">
            <div>
                <input type="text" id="cercaBirra" placeholder="Cerca birra" onkeyup="showHint(this.value)">
                <span class="material-icons" id="searchIco">search</span>
            </div>
            <div id="searchSuggestion">
                <section class="searchSuggestion_item" id="suggestion1">
                    
                </section>
                
            </div>
        </section>

    </br><hr></br>

        <section class="object__container">
            <section class="buttons__50">
                <button class="beer__button left"><span class="material-icons md-36">edit_location</span></br>Registra</button>
                <button class="beer__button right"><span class="material-icons md-24">map</span></br>Localizza</button>
            </section>
        </section>

    </br><hr></br>







    <!--Auto suggestion script-->
        <script>
            
            function showHint(str) {
            if (str.length == 0) {
                document.getElementById("cercaBirra").innerHTML = "";
                document.getElementById("suggestion1").style.display = "none";
                return;
            } else {
                document.getElementById("suggestion1").style.display = "block";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("suggestion1").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", "../SCRIPT/PHP/search_suggestion_engine.php?q=" + str, true);
                xmlhttp.send();
            }
            }
        </script>
    <!-- / Auto suggestion script-->
    
    <!-- / CORPO PAGINA -->    
    </div>

<!-- / BODY CONTAINER -->   
</div>

<?php
    require "../LAYOUT/footer.php";
?>