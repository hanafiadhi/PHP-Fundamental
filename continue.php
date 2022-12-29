<?php
for ($hitung = 0; $hitung <= 100; $hitung++) {
    if ($hitung % 2 == 1) {
        continue;
    }
    echo "Hello Countinue : " . $hitung . PHP_EOL;
}
