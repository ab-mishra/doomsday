<?php
include "qrcode.php"; 
// Create QRcode object 
$qc = new QRCODE(); 

// create text QR code 
$qc->URL("https://github.com/payward/kraken-api-client/blob/master/php/KrakenAPIClient.php"); 

echo "this is feature2";
// render QR code
echo "demo";
$qc->QRCODE(400,"sample.png");
?>