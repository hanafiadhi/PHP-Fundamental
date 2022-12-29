<?php
$nilai = 81;
$absen = 70;
if ($nilai >= 80 && $absen >= 80) {
    echo "nilai anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "nilai anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "nilai anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E";
}
// sytntax alternatif
if ($nilai >= 80 && $absen >= 80) :
    echo "nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "nilai anda D" . PHP_EOL;
else :
    echo "Nilai anda E";
endif;
