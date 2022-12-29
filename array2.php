<?php
$value = array("hanafi", "adhi", 4.0, 20);
var_dump($value[3]);
$value[3] = 21;
var_dump($value);

unset($value[0]);
var_dump($value);
$value[] = 'sukses';
var_dump($value);
var_dump(count($value));
