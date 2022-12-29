<?php

function finalValue(int $value): string
{

    if ($value >= 80) {
        return 80;
    } elseif ($value >= 70) {
        return "B";
    } else {
        return "tidak ada";
    }
};
$var = finalValue(90);
var_dump($var);
