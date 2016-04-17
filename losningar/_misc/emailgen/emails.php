<?php
$first_names = explode("\n", file_get_contents('firstname.txt'));
$last_names = explode("\n", file_get_contents('lastname.txt'));
$services = explode("\n", file_get_contents('domains.txt'));

$result = '';

for($i = 0; $i < 5000; $i++) {
  $result[] = trim($first_names[rand(0, sizeof($first_names)-1)]) . '.' . trim($last_names[rand(0, sizeof($last_names)-1)]) .'@'. trim($services[rand(0, sizeof($services)-1)]);
}

$result = array_unique($result);

$string = '';
foreach($result as $single_result) {
  $string .= $single_result . ",";
}

echo $string;