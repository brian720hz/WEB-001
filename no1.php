<?php
# $angka = "1,3,5,7,9,11,13,15" #
# Tampilkan dengan menggunakan perulangan #

$n = 15;
$angka = "";
for ($i = 1; $i <= $n; $i++) {
    if ($i == 15) {
        if ($i % 2 == 1) {
            $angka = $angka . strval($i);
        }
    } else {
        if ($i % 2 == 1) {
            $angka = $angka . strval($i) . ",";
        }
    }
}

echo ($angka);
