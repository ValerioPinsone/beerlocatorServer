<?php
    $page_title = "BeerLocator - Birra";
    require "../LAYOUT/header.php";
?>


<?php require "../SCRIPT/PHP/db_connect.php"; ?>



<?php
    $beer_id = $_GET["id"];
    
    $sql = "SELECT * FROM beers WHERE beer_id = '".$beer_id."'";
    
    $result = $conn->query($sql);
    

    if(!$result) {
        exit("Link non valido");
    }else{
        if(mysqli_num_rows($result) > 0 ){
                $row = mysqli_fetch_array ($result);
                $beer_name = $row["beer_name"];
                //$beer_name = mb_convert_encoding($row["beer_name"], "UTF-8" , "UTF-16");
                $beer_info = $row["beer_info"];
                $beer_alcol = $row["beer_alcol"];
                $beer_ibu = $row["beer_ibu"];
                $beer_srm = $row["beer_color_srm"];
                $beer_type_id = $row["beer_type_id"];
                $beer_manufacturer_id = $row["beer_manufacturer_id"];
                $beer_visual = $row["beer_visual"];

                $beer_visual += 1;
                $sql = "UPDATE beers SET beer_visual=".$beer_visual." WHERE beer_id=".$beer_id;
                $conn->query($sql);


                $sql = "SELECT * FROM types WHERE type_id = '".$beer_type_id."'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array ($result);
                $type_name = $row["type_name"];

                $sql = "SELECT * FROM manufacturers WHERE manufacturer_id = '".$beer_manufacturer_id."'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array ($result);
                $manufacturer_name = $row["manufacturer_name"];
                $manufacturer_country_id = $row["manufacturer_country_id"];

                $sql = "SELECT * FROM countries WHERE country_id = '".$manufacturer_country_id."'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array ($result);
                $country_short_name = $row["country_short_name"];
                $country_name = $row["country_name"];
                
           }else{
            
            
            require "../SCRIPT/PHP/db_connect_close.php";
            echo "link non valido.";
            require "../LAYOUT/footer.php";
            exit();
           }
        
    }
?>



<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<link rel="stylesheet" href="../CSS/flags.css">
<link rel="stylesheet" href="../CSS/beer.css">

<section class="beer__container">
<img src="../DATA/IMAGES/BEER_LOGOS/no-photo.jpg" alt="beer logo" class="beer__logo">
<section class="beer__info__container">

    <section class="beer__info__alcol beer__info__elem">
        <section class="beer__info__title"><?php echo $beer_alcol; ?>%</section>
        <section class="beer__info__subtitle">Alcol</section>
    </section>

    <section class="beer__info__star beer__info__elem">
        <section class="beer__info__title"><?php echo $beer_visual; ?></section>
        <section class="beer__info__subtitle">Visual</section>
    </section>

    <section class="beer__info__ibu beer__info__elem">
        <section class="beer__info__title"><?php echo $beer_ibu; ?></section>
        <section class="beer__info__subtitle">IBU</section>
    </section>

    <section class="beer__info__srm beer__info__elem">
        <section class="beer__info__title"><?php echo $beer_srm; ?></section>
        <section class="beer__info__subtitle">SRM</section>
    </section>

    <section class="beer__info__country beer__info__elem">
        <section class="beer__info__title"><div class="phoca-flagbox"><span class="phoca-flag <?php echo strtolower($country_short_name);?>"></span></div></section>
        <section class="beer__info__subtitle">Nazione</section>
    </section>

    <section class="beer__info__type beer__info__elem">
        <section class="beer__info__title"><?php echo $type_name; ?></section>
        <section class="beer__info__subtitle">Tipo</section>
    </section>

</section>

<section class="beer__name__container">
    <section class="beer__name"><?php echo $beer_name; ?></section>
    <section class="manufacturer__name"><?php echo $manufacturer_name; ?></section>
</section>

<section class="beer__description">
     
    <p>
        <?php echo $beer_info; ?>
    </p>
    
</section>


<!--/ beer container -->
</section>


<section class="buttons__50">
    <button class="beer__button left"><span class="material-icons md-36">edit_location</span></br>Registra</button>
    <button class="beer__button right"><span class="material-icons md-24">map</span></br>Localizza</button>
</section>


<section class="beer__gallery__container">
    <p>Ultime foto degli utenti</p>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
    <a href=""><img src="../DATA/IMAGES/BEER_PHOTOS/no-photo.jpg" class="beer__photo"></a>
</section>


<section class="beer__top5users__container">
    <section class="beer__top5users__container__inside">
    <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="user__photo__top5"></a>
    <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="user__photo__top5 number2"></a>
    <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="user__photo__top5 number1"></a>
    <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="user__photo__top5 number3"></a>
    <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="user__photo__top5"></a>
    <p>TOP 5 per questa birra</p>
    </section>
</section>



<section class="comments__container">
    <!--commento-->
    <section class="comments">
        <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="comments__user__pic"></a>
        <p class="comments__user__name">LittleTyd</p>
        <section class="comments__text">
            vvdfbvdvrberb bebb bre ber b b e bre bre br breberb
            breb erb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  rrb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  rrb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  rrb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  rrb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
        </section>
        <section class="comments__buttons">
        <button class="comments__buttons__button"><span class="material-icons md-36">thumb_up</span></br>564</button>
        <button class="comments__buttons__button"><span class="material-icons md-24">flag</span></br>Segnala</button>
        </section>
    </section>
    <!--fine commento-->


    <!--commento-->
    <section class="comments">
        <a href=""><img src="../DATA/IMAGES/USER_PHOTOS/no-photo.jpg" class="comments__user__pic"></a>
        <p class="comments__user__name">GhostShooter</p>
        <section class="comments__text">
            vvdfbvdvrberb bebb bre ber b b e bre bre br breberb
            breb erb berbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
             rbre ber brebreb b  reb e b resourcebundl
             rberbbrbr
        </section>
        <section class="comments__buttons">
        <button class="comments__buttons__button"><span class="material-icons md-36">thumb_up</span></br>39</button>
        <button class="comments__buttons__button"><span class="material-icons md-24">flag</span></br>Segnala</button>
        </section>
    </section>
    <!--fine commento-->


    <section class="comments__showmore">
       <a href="">Altri commenti<span class="material-icons md-36">expand_more</span></a>
    </section>


    <section class="comments__write">
       <form>
           <textarea placeholder="Scrivi un commento"></textarea>
           <input type="submit" value="commenta"></input>
       </form>
    </section>

</section>
<?php
    require "../LAYOUT/footer.php";
?>
<?php require "../SCRIPT/PHP/db_connect_close.php"; ?>