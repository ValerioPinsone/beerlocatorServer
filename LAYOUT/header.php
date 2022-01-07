<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../DATA/LAYOUT/favicon.png" />
    <link rel="stylesheet" href="../CSS/main_style.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <!--Side Navbar-->
    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../HOME">Home</a>
        <a href="#">Info</a>
        <a href="#">Contatti</a>
        <a href="../AUTH">Login</a>
    </div>
    <!-- / Side Navbar -->

    <div class="body__container" id="body__container">
    <!-- BODY CONTAINER -->

        <div class="navbar" id="navbar">
            <div class="navbar__container">
                <div class="hamburger" onclick="myFunction(this);openNav();" id="hamburger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <img src="../DATA/LAYOUT/blogo.png" id="logo">
                <ul>
                    <li><a href="../AUTH">Login</a></li>
                    <li><a href="#">Contatti</a></li>
                    <li><a href="#">Info</a></li>
                    <li><a href="../HOME">Home</a></li>
                </ul>
            
            </div>
        </div>

        <div class="pusher" id="pusher"></div>
        <!--CORPO PAGINA-->
        <div class="corpoPagina" id="corpoPagina">
            <!--USE object__container -->
