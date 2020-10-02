<?php
$badWords = $_GET["badwords"];

$newBadWords =str_replace($badWords,"***",$badWords)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badwords</title>
  </head>
  <body>
    <h1>Siete dei <?php echo $newBadWords ?></h1>

  </body>
</html>
