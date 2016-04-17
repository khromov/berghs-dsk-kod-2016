<?php
$a = array(11, 22, 63);
$a[] = 18;

var_dump($a);
/*
array(4) {
  [0]=> int(11)
  [1]=> int(22)
  [2]=> int(63)
  [3]=> int(18)
}
*/

$alder = array(
  "Bill Gates" => 60,
  "Mark Zuckerberg" => 31,
  "Steve Wozniak" => 65
);

$alder["Steve Ballmer"] = 60;

var_dump($alder);

/*
array(4) {
  ["Bill Gates"]=> int(60)
  ["Mark Zuckerberg"]=> int(31)
  ["Steve Wozniak"]=> int(65)
  ["Steve Ballmer"]=> int(60)
}
*/

?>
