<?php

$nilai = 70;
$absen = 90;

if ($nilai >=80 && $absen >= 80) {
    echo "Nilai anda A";
}elseif(($nilai >=70 && $absen >= 70)){
    echo "Nilai anda B";
}
else{
    echo "maaf anda tidak lulus";
}