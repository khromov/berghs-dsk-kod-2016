<link rel="stylesheet" type="text/css" href="css/paraply.css">
<h2>Kodexempel</h2>
<ul>
<?php
//Hämta ut alla filer i mappen som slutar med .php
$files = glob(__DIR__.'/*.php');

//Sortera
natsort($files);

//Loopa och skapa en lista
foreach($files as $file) {
  $exploded = explode("/", $file);
  $filename = $exploded[sizeof($exploded)-1];
  echo "<li><a href='{$filename}'>{$filename}</a></li>\n";
}
?>
</li>
