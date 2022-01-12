
<?php
    $page_title = "BeerLocator";
    require "../LAYOUT/header.php";
?>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/flags.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        </br></br>
        
        <section class="object__container barcode_limit">
            <div class="barcode__container">
                <button class="barcode__button"><span class="material-icons md-36">qr_code_scanner</span></br>Scansiona Barcode</button>
                <div class="barcode__button__info">
                    Per utilizzare lo scanner di codici a barre é necessario fornire l'autorizzazione
                </div>
            </div>
        </section>

        <div class="orDiv">Oppure</div>

        <section class="object__container">
            <div>
                <form action="../BEER/search.php/" autocomplete="off" method="GET">
                    <input type="text" name="q" id="cercaBirra" placeholder="Cerca birra" onkeyup="showHint(this.value)">
                    <span class="material-icons" id="searchIco">search</span>
                </form>
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