<?php

function createName()
{
    $name = "Ridwan"; // local scope
}

createName();
echo $name . PHP_EOL;
