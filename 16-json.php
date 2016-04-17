<?php
//JSON encode
$names = array("Peter", "Erik", "Johan", "Jessica");
echo json_encode($names);

//["Peter","Erik","Johan","Jessica"]

//JSON decode
$names_json = '["Peter","Erik","Johan","Jessica"]';
$names = json_decode($names_json);

/*
array(4) {
  [0]=> string(5) "Peter"
  [1]=> string(4) "Erik"
  [2]=> string(5) "Johan"
  [3]=> string(7) "Jessica"
}
*/

