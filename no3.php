<?php
# diketahui array [20,10,100,30,15,5]
$tabel = [20, 10, 100, 30, 15, 5];

# soal a : urutkan secara asc dan desc
# sorting asc
$tabel1 = [20, 10, 100, 30, 15, 5];
$n = count($tabel1) - 1;
for ($i = 0; $i <= $n; $i++) {
    $min = $tabel1[$i];
    $index_min = $i;

    for ($j = $i + 1; $j <= $n; $j++) {
        if ($tabel1[$j] < $min) {
            $min = $tabel1[$j];
            $index_min = $j;
        }
    }

    $temp = $tabel1[$i];
    $tabel1[$i] = $tabel1[$index_min];
    $tabel1[$index_min] = $temp;
}
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel1);

#sorting desc
$tabel2 = [20, 10, 100, 30, 15, 5];
$n = count($tabel2) - 1;
for ($i = 0; $i <= $n; $i++) {
    $max = $tabel2[$i];
    $index_max = $i;

    for ($j = $i + 1; $j <= $n; $j++) {
        if ($tabel2[$j] > $max) {
            $max = $tabel2[$j];
            $index_max = $j;
        }
    }

    $temp = $tabel2[$i];
    $tabel2[$i] = $tabel2[$index_max];
    $tabel2[$index_max] = $temp;
}
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel2);

# soal b : tambahkan angka 180 di posisi terakhir pada array di atas
array_push($tabel, 180);
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel);

# soal c : hapus angka 30 pada array di atas
array_splice($tabel, 3, 1);
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel);
