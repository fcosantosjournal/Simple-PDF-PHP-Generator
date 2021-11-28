<?php
require_once('./tcpdf/tcpdf_include.php');

//Create a name for the file
$id = uniqid(microtime(), true);

// Write the HTML content
$content = "Ola<br>ola";
createPage($content, $pdf);

// You can call the function N times for create new pages
$content = "Ola 2";
createPage($content, $pdf);

//This QRCode Generator, will go to created a QRCode on the last started Page.
$pdf->write2DBarcode("https://google.com/validator/$id", 'QRCODE,L', 150, 8, 50, 50, $style, 'N');

//Create a Output for the file
$pdf->Output("$id.pdf", "I");
