<?php
$angka = 3;
switch($angka){
    case 1:
        echo "isi variabel adalah angka satu";
        break;
    case 2:
        echo "isi variabel adalah angka dua";
        break;
    case 3:
        echo "isi variabel adalah angka tiga";
        break;
    case 4:
        echo "isi variabel adalah angka empat";
        break;
    case 5:
        echo "isi variabel adalah angka lima";
        break;
        default:
        echo "isi variabel tidak ditemukan";
}

echo "<br><br>";

$hari = 'Selasa';
switch($hari){
    case 'Senin':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Selasa':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Rabu':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Kamis':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Jumat':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Sabtu':
        echo "Hari ini adalah hari ".$hari;
        break;
    case 'Minggu':
        echo "Hari ini adalah hari ".$hari;
        break;
        default:
        echo "isi variabel tidak ditemukan";
}

echo "<br><br>";

$nilai = 9;
$keterangan = "Nilai Anda ";
switch(true){
    case ($nilai >= 9):
        $predikat = "Sangat Baik<br>";
        break;
    case ($nilai < 9 && $nilai >= 8):
        $predikat = "Baik<br>";
        break;
    case ($nilai < 8 && $nilai >= 6):
        $predikat = "Cukup Baik<br>";
        break;
        default:
        $predikat = "Perlu ditingkatkans<br>";
    }
    echo $keterangan.$predikat;
?>