<?php
$badWords = $_GET["badwords"];

$text = "Siete dei coglioni";

$newBadWords =str_replace($badWords,"***",$text);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badwords</title>
  </head>
  <body>
    <h1> <?php echo $newBadWords ?></h1>

  </body>
</html>
