<?php
function sayHello(string $nama, $filter)
{
    $lengkap = $filter($nama);
    echo "hello $lengkap" . PHP_EOL;
}
sayHello("HANAFI", "strtolower");
