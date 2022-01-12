<?php

   
    $page_title = "BeerLocator - Aggiungi";
    require "../LAYOUT/header.php";

    require "../SCRIPT/PHP/db_connect.php";

    $sql = "SELECT * FROM manufacturers ORDER BY manufacturer_name";
    $result = $conn->query($sql);
    

   
?>

<link rel="stylesheet" href="../CSS/main_style.css">
<link rel="stylesheet" href="../CSS/beer_add.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <section class="object__container">
        <div class="beerAdd__container">

        <form>
            <label for="cars">Birrificio:</label>
                <select name="manufacturers" id="manufacturers">
                <option value="-1">Seleziona Birrificio</option>
                <?php while($row = mysqli_fetch_assoc($result)){
                
                
                
                    $manufacturer_id = $row["manufacturer_id"];
                    $manufacturer_name = $row["manufacturer_name"];
                    echo " <option value='".$manufacturer_id."'>".$manufacturer_name."</option>";
                }
                    
                ?>
                    
                </select>
                
            <input type="button" value="Birrificio non presente nella lista">
            </form>
           
        </div>
    </section>


<?php
    require "../LAYOUT/footer.php";
    require "../SCRIPT/PHP/db_connect_close.php";
?>