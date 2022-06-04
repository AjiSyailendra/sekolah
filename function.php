<?php
    function hitungLuas($panjang, $lebar){
        $luas = $panjang * $lebar;
        echo("Nilai Luasnya $panjang x $lebar = " .$luas);
    }

    function hitung($panjang, $lebar){
        $luas = $panjang * $lebar;
        $keliling = 2*($panjang + $lebar);
        echo("Nilai kelilingnya 2 x ($panjang + $lebar) = " .$keliling);
        echo("</br>");
        echo("Nilai Luasnya $panjang x $lebar = " .$luas);
    }

    hitung(8, 3);
    echo("<br>");
    hitung(9, 5);
    echo("<br>");
    hitung(10, 7);
    echo("<br>");


    //  contoh 1
    function hello(){
        echo ("<h1>Halo Selamat Datang</h1>");
        echo ("<p> Mudah dimengerti, semoga harimu menyenangkan</p>");
    }
    // contoh 2
    function perkenalan(){
        echo ("Assalamualaikum");
        echo (" Perkenalkan nama saya Endra");
        echo (" Saya Sekolah di SMK N 6 Surakarta");
    }
    // contoh 3
    function perkenalan1($salam, $nama, $sekolah){
        echo ($salam);
        echo (" Perkenalkan nama saya $nama");
        echo (" Saya Sekolah di $sekolah");
    }

    // contoh 4
    function perkenalan2($nama, $sekolah, $salam="assalamualaikum"){
        echo ($salam);
        echo (" Perkenalkan nama saya $nama");
        echo (" Saya Sekolah di $sekolah");
    }

    // contoh 5
    function perkenalan3($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        echo (" Umur saya adalah : " .$umur." tahun");
    }
    
    // contoh 6
    function faktorial($angka){
        if ($angka < 2) {
            return 1;
        } else {
            //  memanggil dirinya sendiri
            return ($angka + faktorial($angka-1));
        }
    }

    // pemanggilan
    hello();
    echo("<br>");
    perkenalan();
    echo("<br>");
    perkenalan1("assalamualaikum", "Endra", "SMKN 6 Surakarta");
    echo("<br>");
    perkenalan2("Endra", "SMKN 6 Surakarta");
    echo("<br>");
    perkenalan3(2005, 2022);
    echo("<br>");
    faktorial(10);
?>