<?php
class Dog {
  var $name;
  var $age;

  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}
$myDog = new Dog("Fido", 8);

echo $myDog->name;
//Fido

echo $myDog->age;
//8

?>