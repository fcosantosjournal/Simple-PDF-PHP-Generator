# Simple-PDF-PHP-Generator

### Example to use

Inside to file index.php from ./ folder, you can see, how to print on PDF pages the content from HTML codes

#### Put one call to tcpdf librarie on beginning at your file

> require_once('./tcpdf/tcpdf_include.php');

#### In this case, I used the uniqid function to create a unique name for the new PDF file, but you can use your way to make this.

> $id = uniqid(microtime(), true);

#### Put your HTML code on the $content variable

> $content = "Hello word!";
> createPage($content, $pdf);

#### You can call the function N times for create new pages

> $content = "Hello word two!";
> createPage($content, $pdf);

#### This QRCode Generator, will go to created a QRCode on the last started Page.

> $pdf->write2DBarcode("https://yoursite.com/exampleValidator/<b>$id</b>", 'QRCODE,L', 150, 8, 50, 50, $style, 'N');

#### Create a Output for the file
> $pdf->Output("$id.pdf", "I");

#### You can see more in the original examples, in my case, I adapted for really simple use

> https://tcpdf.org/
