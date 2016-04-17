<?php
$csv = "Peter,Erik,Johan,Jessica";
$data = explode(",", $csv);

var_dump($data);

/*
array(4) {
  [0]=> string(5) "Peter"
  [1]=> string(4) "Erik"
  [2]=> string(5) "Johan"
  [3]=> string(7) "Jessica"
}
*/

$data = array("Peter", "Erik", "Johan", "Jessica");
$csv = implode(",", $data);
var_dump($csv);

//string(24) "Peter,Erik,Johan,Jessica"