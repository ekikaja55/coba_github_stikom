<?php

$chika = "halo";
$angka = 5;
$cipta = true;

echo "halo candra fikri bayu seva chika";
//concat digunakan untuk menggabungkan ( . )
// echo $chika . "<br> " . $angka . "<br> " . $cipta;
// = -> mengisi data
// == -> membandingkan antar 2 variabel tanpa melihat tipe variabel nya hanya isi variabelnya saja yang dibandingkan
// === -> membandingkan antar 2 variabel melihat dari tipe variabel dan isi variabelnya



//if (jika) else intinya akan menjalankan code ketika memenuhi suatu kondisi


// $sadam = 1200;

// if ($sadam % 2 == 0) {
//     echo "bilangan " . $sadam . " adalah " . "genap";
// } else if ($sadam % 2 == 1) {
//     echo "bilangan " . $sadam . " adalah " . "ganjil";
// }


// looping -> ULANGI SAMPAI MEMENUHI KONDISI YANG DIINGINKAN
// nanda++ itu berarti nanda = nanda + 1
// nanda-- itu berarti nanda = nanda -1


for ($nanda = 1; $nanda <= 15; $nanda++) {
    if ($nanda % 2 == 0) {
        echo $nanda . "<br>";
    }
}

// loop 1 -> nanda = 0 + 1
// loop 2 -> nanda = 1 + 1
// loop 3 -> nanda = 2 + 1
// loop 4 -> nanda = 3 + 1
// loop 5 -> nanda = 4 + 1


// apakah 5 < 5 SALAH berarti loopnya berhenti
