<?php
//Hämta befolkningsdata i Stockholm - tips:
//använd följande API: http://open.stockholm.se/oppna-data/befolkningsdata/

//Ladda in datan som ett objekt med SimpleXML

//Skapa en integer-variabel som är 0 för att kunna lagra resultatet
$man_i_bromma_2012 = 0;

//Loopa över alla värden från API:et och ta ut alla
//värden för män i Bromma år 2012.

  //Addera ihop antalet män med variabeln du skapade ovan.

//Skriv ut värdet
echo "Totala antalet män i Bromma år 2012 var: " . $man_i_bromma_2012;
