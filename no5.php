<?php
$buah = array(
    array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);

# soal a :menambahkan buah Pisang yang harganya 5000 dan rasanya manis ke variabel buah dan tampilkan Nama Buah dengan urutan secara descending
$new = array("NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS");
array_push($buah, $new);

$n = count($buah);
$tabel1 = [];

for ($i = 0; $i < $n; $i++) {
    $nama = $buah[$i]['NAMA'];
    array_push($tabel1, $nama);
}

for ($i = 0; $i < $n; $i++) {
    $max = $tabel1[$i];
    $index_max = $i;

    for ($j = $i + 1; $j < $n; $j++) {
        if ($tabel1[$j] > $max) {
            $max = $tabel1[$j];
            $index_max = $j;
        }
    }

    $temp = $tabel1[$i];
    $tabel1[$i] = $tabel1[$index_max];
    $tabel1[$index_max] = $temp;
}
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel1);

# soal b : menampilkan Nama Buah yang nama buahnya mengandung Huruf "K"
$char = 'K';
$tabel2 = [];
for ($i = 0; $i < $n; $i++) {
    $nama = $tabel1[$i];
    if (strpos($nama, $char) !== false) {
        array_push($tabel2, $nama);
    }
}
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel2);

# soal c : menampilkan Buah, yang harganya kurang dari 10.000 yang rasanya Manis
$tabel3 = [];
$n = count($buah);

for ($i = 0; $i < $n; $i++) {
    $nama = $buah[$i]['NAMA'];
    $harga = $buah[$i]['HARGA'];
    $rasa = $buah[$i]['RASA'];

    if (($harga < 10000) and ($rasa == "MANIS")) {
        $data = array(
            "NAMA" => $nama, "HARGA" => $harga, "RASA" => $rasa
        );
        array_push($tabel3, $data);
    }
}
# hapus // sebelum kata print_r dibawah untuk menampilkan hasil
// print_r($tabel3);
