<?php
$a = array(5, 11, "hej");

var_dump($a);
/*
array(3) {
  [0]=> int(5)
  [1]=> int(11)
  [2]=> string(3) "hej"
}
*/

echo "    ";
echo $a[0] + $a[1];
//16

echo $a[2];
//hej

echo $a[3];
//PHP Notice:  Undefined offset: 3

var_dump($a);
?>
