<?php

$nilai = 'A';

switch ($nilai) {
    case 'A':
        echo "anda lulus dengan baik";
        break;
    case 'B':
    case 'C':
        echo "anda lulus";
        break;
    case 'D':
        echo "Anda tidak lulus";
        break;
    default:
        echo "Anda salah jurusan";
        break;
}