<?php
class Person {
  public $isAlive = true;
  public $firstname;
  public $lastname;
  public $age;

  public function __construct($firstname, $lastname, $age) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
  }

  public function greet() {
    return "Hej! Jag heter " . $this->firstname . " " . $this->lastname . ".";
  }
}

$me = new Person("Stanislav", "Khromov", 27);
var_dump($me);

/*
object(Person)#1 (4) {
  ["isAlive"]=>
  bool(true)
  ["firstname"]=>
  string(9) "Stanislav"
  ["lastname"]=>
  string(7) "Khromov"
  ["age"]=>
  int(27)
}
*/

//Klass, Instans, Attribut, Metod

$me = new Person("Stanislav", "Khromov", 27);

echo $me->greet();

//Hej! Jag heter Stanislav Khromov.

$person1 = new Person("Bill", "Gates", 60);
$person2 = new Person("Mark", "Zuckerberg", 31);
$person3 = new Person("Steve", "Wozniak", 65);

echo $person1->firstname;
echo $person2->firstname;
echo $person3->firstname;

//Bill Mark Steve

echo "\n\n\n";

$people = array();
$people[] = new Person("Bill", "Gates", 60);
$people[] = new Person("Mark", "Zuckerberg", 31);

var_dump($people);

/*
array(3) {
  [0]=>
  object(Person)#5 (4) {
    ["isAlive"]=>
    bool(true)
    ["firstname"]=>
    string(4) "Bill"
    ["lastname"]=>
    string(5) "Gates"
    ["age"]=>
    int(60)
  }
  [1]=>
  object(Person)#6 (4) {
    ["isAlive"]=>
    bool(true)
    ["firstname"]=>
    string(4) "Mark"
    ["lastname"]=>
    string(10) "Zuckerberg"
    ["age"]=>
    int(31)
  }
}
*/

?>