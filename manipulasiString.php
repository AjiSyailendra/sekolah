<?php
    // menggabungkan string
    $kalimat1 = "Belajar Pemrograman";
    $kalimat2 = "Sangat Menyenangkan";
    echo $kalimat1." ".$kalimat2."<br>";
    $string1 = "Syailendra";
    $int1 = 90;
    echo $string1." Mendapatkan Nilai : ".$int1;
    
    echo "<br><br>";
    
    // strlen()
    $kalimat3 = "Belajar Pemrograman di SMKN 6 Surakarta";
    echo $kalimat3;
    echo ", panjang karakternya : ".strlen($kalimat3);
    
    echo "<br><br>";

    // str_word_count()
    $kalimat4 = "Belajar Pemrograman di SMKN 6 Surakarta";
    echo $kalimat4;
    echo ", panjang katanya : ".str_word_count($kalimat4);
    
    echo "<br><br>";
    
    // strrev()
    $kalimat5 = "Belajar Pemrograman di SMKN 6 Surakarta";
    echo $kalimat5;
    echo ", apabila dibalik : ".strrev($kalimat5);
    
    echo "<br><br>";
    
    // str_replace()
    $kalimat6 = "Belajar Pemrograman di SMKN 6 Surakarta";
    echo $kalimat6;
    $ganti = str_replace("Belajar", "Sinau",$kalimat6);
    echo ", apabila di replace : ".$ganti;
?>