<?php
//API: http://openweathermap.org/current
$raw_data = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Stockholm,Sweden&appid=1e774e8396e05d1cd5a37a94af313346');
$data = json_decode($raw_data, true);

//Kolla om vi får tillbaka data från API:t
if(isset($data['weather'][0]['main'])) {

  //Om datan säger att det ska regna...
  if($data['weather'][0]['main'] === 'Rain') {
    //Sätt $paraply till sant
    $rain = true;
  }
  else {
    //Annars kommer det inte regna, sätt $paraply till falskt
    $rain = false;
  }
}
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
    <h3>Behöver jag ta med ett paraply till Berghs idag?</h3>

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

<!-- //$raw_data = '{"coord":{"lon":18.06,"lat":59.33},"weather":[{"id":800,"main":"Clear","description":"clear sky","icon":"01d"}],"base":"cmc stations","main":{"temp":282.15,"pressure":1022,"humidity":45,"temp_min":282.15,"temp_max":282.15},"wind":{"speed":2.6,"deg":150},"clouds":{"all":0},"dt":1460397000,"sys":{"type":1,"id":5420,"message":0.007,"country":"SE","sunrise":1460346100,"sunset":1460397412},"id":2673730,"name":"Stockholm","cod":200}'; -->
