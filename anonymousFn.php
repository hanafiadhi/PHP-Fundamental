<?php
$sapa = function (string $nama) {
    echo "hello $nama" . PHP_EOL;
};

$sapa("hanafi");

$sayHello("hanafi", function (string $nama) {
    return strtoupper($nama);
});
