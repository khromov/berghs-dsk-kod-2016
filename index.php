<ul>
<?php
//Hämta ut alla filer i mappen som slutar med .php
foreach(glob(__DIR__.'/*.php') as $file) {
  $exploded = explode("/", $file);
  $filename = $exploded[sizeof($exploded)-1];
  echo "<li><a href='{$filename}'>{$filename}</a></li>\n";
}
?>
</li>
