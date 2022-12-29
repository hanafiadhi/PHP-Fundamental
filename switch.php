<?php
$nilai = "B";
switch ($nilai) {
    case "A":
        echo "selamat anda lulus" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "selamat lulus" . PHP_EOL;
        break;
    case "D":
        echo "tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "belajar lagi ya :)" . PHP_EOL;
}

// syntax alternatif

switch ($nilai):
    case "A":
        echo "selamat anda lulus" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "selamat" . PHP_EOL;
        break;
    case "D":
        echo "tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "belajar lagi ya :)" . PHP_EOL;
endswitch;
