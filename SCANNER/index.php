<?php

    $page_title = "BeerLocator - Scanner";
    require "../LAYOUT/header.php";

    require "../SCRIPT/PHP/db_connect.php";

    
?>

<link rel="stylesheet" href="../../CSS/main_style.css">
<link rel="stylesheet" href="../../CSS/scanner.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="../SCRIPT/JAVASCRIPT/html5-qrcode.min.js"></script>
    
    <section class="object__container">
        <div class="scanner__container">
            <p id="debug">nessuno</p>

        <div style="width: 300px" id="reader"></div>
        </div>
    </section>



    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Handle on success condition with the decoded text or result.
            
            document.getElementById("debug").innerHTML=decodedText;
            html5QrcodeScanner.clear();
        }
        const formatsToSupport = [
        Html5QrcodeSupportedFormats.QR_CODE,
        Html5QrcodeSupportedFormats.EAN_13,
        Html5QrcodeSupportedFormats.EAN_8
        ];

        function onScanError(errorMessage) {
            // handle on error condition, with error message
        }

        var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 30, qrbox: 120, aspectRatio: 1 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

    </script>
<?php
    require "../LAYOUT/footer.php";
    require "../SCRIPT/PHP/db_connect_close.php";
?>