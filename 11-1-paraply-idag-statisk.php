<?php
$rain = false;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Behöver jag ta med ett paraply till Berghs idag?
    </title>
    <link rel="stylesheet" type="text/css" href="css/paraply.css">
  </head>
  <body>
    <h3>
      Behöver jag ta med ett paraply till Berghs idag?
    </h3>

    <?php
      if($rain === true) {
        echo '<img src="images/rain.png">';
      }
      else {
        echo '<img src="images/sun.png"';
      }
    ?>
    
    <br>
    <h1>
    <?php
      if($rain === true) {
        echo "Ja!";
      }
      else {
        echo "Nej!";
      }
    ?>
    </h1>
  </body>
</html>
