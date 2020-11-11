<?php
# String = “AKU SUKA MAKAN NASI PADANG”
$teks = "aku suka makan nasi padang";
$n = 4;
$index = 0;
$tabel = [];
$temp = explode(" ", $teks);

for ($i = 0; $i <= $n; $i++) {
    $min = 0;
    $temp_teks = "";
    while ($min <= $i) {
        $temp_teks = $temp_teks . " " . $temp[$min];
        $min++;
    }
    array_push($tabel, $temp_teks);
}

for ($i = 4; $i >= $index; $i--) {
    $max = 4;
    $temp_teks = "";
    while ($max >= $i) {
        $temp_teks = $temp_teks . " " . $temp[$max];
        $max--;
    }
    array_push($tabel, $temp_teks);
}

print_r($tabel);
