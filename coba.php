<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
};

sayHello("Hanafi", function ($name) {
    return strtoupper($name);
});
sayHello("Adhi", fn ($name) => strtoupper($name));
sayHello("Hamam", "strtoupper");
sayHello("Firdaus", "strtolower");
