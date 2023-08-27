<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Ridwan");
$sayHello("Budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Ridwan", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Ridwan", $filterFunction);

$firstName = "Ridwan";
$lastName = "Salamony";

$sayHelloRidwan = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloRidwan();

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloRidwan();
