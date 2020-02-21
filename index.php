<?php
require_once 'class.php';
$qr = new BarcodeQR();
$url = "filename";
$qr->contact("NAME SURNAME", "mail@test.com", "Company NAME", "Title",  "+905555555555"  );
$qr->draw(250, "".$url.".png");
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
    <title>qr code</title>
  </head>
  <body>
    <div class = "main">
      <div class = "wrapper">
        <img src="<?=$url?>.png">
      </div>
    </div>
  </body>
</html>
