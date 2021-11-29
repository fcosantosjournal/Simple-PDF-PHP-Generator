# Simple-PDF-PHP-Generator

### Example to use

Inside to file index.php from ./ folder, you can see, how to print on PDF pages the content from HTML codes

```sh
<?php
require_once('./tcpdf/tcpdf_include.php');

$id = uniqid(microtime(), true);

$content = "Hello Word!";
createPage($content, $pdf);

$content = "Hello Word two!";
createPage($content, $pdf);

$pdf->write2DBarcode("https://yoursite.com/exampleValidator/$id", 'QRCODE,L', 150, 8, 50, 50, $style, 'N');

$pdf->Output("$id.pdf", "I");
```

#### Put one call to tcpdf librarie on beginning at your file

```sh
require_once('./tcpdf/tcpdf_include.php');
```

#### In this case, I used the uniqid function to create a unique name for the new PDF file, but you can use your way to make this.

```sh
$id = uniqid(microtime(), true);
```

#### Put your HTML code on the $content variable

```sh
$content = "Hello word!";
createPage($content, $pdf);
```
#### You can call the function N times for create new pages

```sh
$content = "Hello word two!";
createPage($content, $pdf);
```

#### This QRCode Generator, will go to created a QRCode on the last started Page.

```sh
$pdf->write2DBarcode("https://yoursite.com/exampleValidator/$id", 'QRCODE,L', 150, 8, 50, 50, $style, 'N');
```

#### Create a Output for the file

```sh
$pdf->Output("$id.pdf", "I");
```
#### You can see more in the original examples, in my case, I adapted for really simple use

```sh
https://tcpdf.org/ 
```
