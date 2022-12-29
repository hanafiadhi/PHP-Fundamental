<?php
function sayHello(string $nama, callable $filter)
{
    $namaLengkap = call_user_func($filter, $nama);
    echo "Hello $namaLengkap" . PHP_EOL;
};
sayHello("hanafi", function ($nama) {
    return strtoupper($nama);
});
sayHello("hamam", "strtoupper");
