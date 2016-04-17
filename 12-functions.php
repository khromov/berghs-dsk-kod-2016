<?php
//Enkel funktion
function hello_world() {
  echo "Hej världen!";
}

hello_world();

//Funktion med argument
function add_numbers_and_echo($number_one, $number_two) {
  echo $number_one + $number_two;
}

add_numbers_and_echo(2, 3);
//5

//Funktion med returvärden
function add_numbers($number_one, $number_two) {
  return $number_one + $number_two;
}

$added = add_numbers(2, 3);
echo $added;
//5