<?php

$first = [
    "first_name" => "Ridwan"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Salamony"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Ridwan",
    "last_name" => "Salamony"
];

$b = [
    "last_name" => "Salamony",
    "first_name" => "Ridwan"
];

var_dump($a == $b);
var_dump($a === $b);