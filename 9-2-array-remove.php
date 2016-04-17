<?php
$a = array(11, 22, 63);
unset($a[0]);

var_dump($a);
/*
array(2) {
  [1]=> int(22)
  [2]=> int(63)
}
*/

$alder = array(
  "Bill Gates" => 60,
  "Mark Zuckerberg" => 31,
  "Steve Wozniak" => 65
);

unset($alder["Mark Zuckerberg"]);

var_dump($alder);

/*
array(2) {
  ["Bill Gates"]=>
  int(60)
  ["Steve Wozniak"]=>
  int(65)
}
*/
