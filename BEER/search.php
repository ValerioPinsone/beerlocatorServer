<?php

    $q = $_REQUEST["q"];
    if(!isset($q)){
        header("location: http://www.beerlocator.it");
    }
    $page_title = "BeerLocator - Cerca: ".$q;
    require "../LAYOUT/header.php";

    require "../SCRIPT/PHP/db_connect.php";

    $q = strtolower($q);
    $sql = "SELECT * FROM beers WHERE beer_name like '%".$q."%'";
    $result = $conn->query($sql);
    $numRis = mysqli_num_rows($result);
?>

<link rel="stylesheet" href="../../CSS/main_style.css">
<link rel="stylesheet" href="../../CSS/beer_search.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <p id="numRis"> Risultati trovati: <?php echo $numRis; ?> </p>
    <section class="object__container">
        <div class="beerElem__container">
            
            <?php
            if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_assoc($result)){
                
                
                
                $beer_id = $row["beer_id"];
                $beer_name = $row["beer_name"];

                   echo "<a href='../../BEER/?id=".$beer_id."'>";
                   echo "<div class='beerElem'>";

                   echo "<img src='../../DATA/IMAGES/BEER_LOGOS/no-photo.jpg' alt='beer logo' class='beer__logo'>";
                   echo "<p class='beerElem_title'>".$beer_name."</p>";
                   echo "</div>";
                   echo "</a>";
            }
        }else{
           
            echo "Nessuna corripondenza. </br> torna alla <a href='../../HOME'>Home</a>";
        }
        ?>
        </div>
    </section>


<?php
    require "../LAYOUT/footer.php";
    require "../SCRIPT/PHP/db_connect_close.php";
?>