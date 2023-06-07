<?php
//jumlah kalori  yang dimakan si fu
$senin = 3 * 2500;
$selasa = 2 * 2500;
$rabu = 2 * 2500;
$kamis = 3 * 2500;
$jumat = 3 * 2500;
$sabtu = 2 * 2500;
$minggu = 1 * 2500;

//jumlah jam tidurnya
$jamtidurfu = 8;
$senin = 5;
$selasa = 6;
$rabu = 8;
$kamis = 8;
$jumat = 5;
$sabtu = 6;
$minggu = 4;

//jumlah kalori fu
$kaloriperminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

//jumlah waktu
$waktuperminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

//hasil
if ($kaloriperminggu >= 17500 && $waktuperminggu >= 56) {
    echo "Fu sudah sehat";
} else{
    echo "Fu masih tetap sakit";
}
?>