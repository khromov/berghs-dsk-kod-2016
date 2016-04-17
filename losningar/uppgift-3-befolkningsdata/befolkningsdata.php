<?php
//Hämta befolkningsdata i Stockholm
$data = file_get_contents("http://data.stockholm.se/set/Befolkning/Befolkning/?apikey=7AX6UAG8G2D5L0X2C84A34R1XEZ105D0");

//Ladda in datan som ett objekt
$xml_parsed = simplexml_load_string($data);

//Här ska datan sparas
$man_bromma_2012 = 0;

//Loopa över alla värden
foreach($xml_parsed->befolkning as $entry) {
  //Om området är Bromma, året är 2012 och könet är man...
  if($entry->AREA_TEXT == 'Bromma' && $entry->YEAR == '2012' && $entry->KONK_TEXT == 'män') {
      //Addera till det totala värdet
      $man_bromma_2012 = $man_bromma_2012 + intval($entry->BEF_ANTAL);
  }
}

//Skriv ut värdet
echo "Totala antalet män i Bromma år 2012 var: " . $man_bromma_2012;
