<?php
$html = file_get_contents('http://berghs.se/');
var_dump($html);

//string(24226) "<!DOCTYPE html PUBLIC .....

$file = file_get_contents('example.json');
var_dump($file);

//string(14) "{"example":22}"

