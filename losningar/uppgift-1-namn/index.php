<?php
//Hämtat från SCB: http://www.scb.se/sv_/Hitta-statistik/Statistik-efter-amne/Befolkning/Amnesovergripande-statistik/Namnstatistik/30898/30905/Nyfodda---Flickor-efter-namngivningsar-och-tilltalsnamn-topp-100-/397548/
$names = array(
  "Elsa", "Alice", "Maja", "Saga", "Ella", "Lilly", "Olivia",
  "Ebba", "Wilma", "Julia", "Agnes", "Freja", "Isabelle", "Alva",
  "Klara", "Linnea", "Alma", "Astrid", "Ellen", "Molly"
);

//En variabel som innehåller vilket namn som är längst
$longest_name = "";

//Loopa över all anamn
foreach($names as $current_name) {

  //Om det nuvarande namnets längd är större än det längsta namnet hittills... spara det!
  if(strlen($current_name) > strlen($longest_name)) {
    $longest_name = $current_name;
  }
}

//Skriv ut det längsta namnet
echo "Det längst namnet är: " . $longest_name;
?>