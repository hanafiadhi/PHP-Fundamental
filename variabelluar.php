<?php
$firstname = "hanafi";
$lastname = "adhi";
$sayHello = function () use ($firstname, $lastname) {
    echo "hello $firstname $lastname" . PHP_EOL;
};
$sayHello();
$sayHello = fn () => "hello $firstname $lastname" . PHP_EOL;
echo $sayHello();
