<?php
$xml = file_get_contents('example-2.xml');
$xml_data = simplexml_load_string($xml);
var_dump($xml_data);

/*
object(SimpleXMLElement)#1 (1) {
  ["employee"]=>
  array(3) {
    [0]=>
    object(SimpleXMLElement)#2 (2) {
      ["firstName"]=>
      string(4) "John"
      ["lastName"]=>
      string(3) "Doe"
    }
    [1]=>
    object(SimpleXMLElement)#3 (2) {
      ["firstName"]=>
      string(4) "Anna"
      ["lastName"]=>
      string(5) "Smith"
    }
    [2]=>
    object(SimpleXMLElement)#4 (2) {
      ["firstName"]=>
      string(5) "Peter"
      ["lastName"]=>
      string(5) "Jones"
    }
  }
}
*/