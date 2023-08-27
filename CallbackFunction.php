<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ridwan", "strtoupper");
sayHello("Ridwan", "strtolower");
sayHello("Ridwan", function (string $name): string {
    return strtoupper($name);
});
sayHello("Ridwan", fn($name) => strtoupper($name));