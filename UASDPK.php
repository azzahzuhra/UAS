<?php

//gaji ayah setiap minggu
//setiap lembur perhari ditambah 100rb
$gaji = array(100000,300000,500000,100000,300000);
$totalsubgaji = 0;

// Perulangan 
foreach ($gaji as $gaji) {
    $totalsubgaji += $gaji;
}

// Percabangan 
if ($totalsubgaji >= 300000) {
    echo "gaji ayah sudah cukup untuk keperluan keluarga.";
} elseif ($totalsubgaji >=250000) {
    echo "Ayah masih perlu tambahan uang";
} else {
    echo "kebutuhan keluarga hampir tidak tercukupi.";
}

?> 