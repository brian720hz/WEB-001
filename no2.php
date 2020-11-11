<?php

$tanggal = "2020-05-01";

# Soal a : Ubah format tanggal di atas menjadi 05-20-01 menggunakan substring
$strip = substr($tanggal, 4, 1);
$pertama = substr($tanggal, 5, 2);
$kedua = substr($tanggal, 0, 2);
$ketiga = substr($tanggal, 8, 2);

$hasil = $pertama . $strip . $kedua . $strip . $ketiga;
# hapus // sebelum kata echo dibawah untuk menampilkan hasil
// echo ($hasil);

# Soal b : Ubah format tanggal di atas menjadi 05-20-01 menggunakan format date php
$date = strtotime($tanggal);
$new_format_date = date('m-y-d', $date);
# hapus // sebelum kata echo dibawah untuk menampilkan hasil
// echo ($new_format_date);

# Soal c : Tampilkan 6 bulan kedepan dari tanggal di atas
$tanggal_new = $tanggal;
$tanggal_new = date('Y-m-d', strtotime("+6 months", strtotime($tanggal_new)));
# hapus // sebelum kata echo dibawah untuk menampilkan hasil
// echo ($tanggal_new);

# Soal d : Berapa umur anda jika dihitung dari tanggal di atas
$tgl_lahir = "1998-09-12";
$age_day = date_diff(date_create($tgl_lahir), date_create($tanggal))->d;
$age_month = date_diff(date_create($tgl_lahir), date_create($tanggal))->m;
$age_year = date_diff(date_create($tgl_lahir), date_create($tanggal))->y;

$age = $age_year . " tahun " . $age_month . " bulan " . $age_day . " hari ";
# hapus // sebelum kata echo dibawah untuk menampilkan hasil
// echo $age;
