<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Ridwan", "Salamony"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$ridwan = array(
    "id" => "ridwan",
    "name" => "ridwan Kurniawan",
    "age" => 30,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($ridwan);

var_dump($ridwan["name"]);
var_dump($ridwan["address"]["country"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);