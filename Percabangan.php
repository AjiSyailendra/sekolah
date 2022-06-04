<?php
    // tidak sama dengan
    // atau <>
    // sama dengan
    // == atau ===
    // lebih dari dan lebih dari sama dengan
    // > dan >=


    // echo "belajar percabangan IF<br>";
    // $angka1 = 8;
    // $angka2 = 8;
    // if ($angka1 == $angka2){ // kondisi tidak meemneuhi, maka if tidak memenuhi
    //     echo "Angka 1 dan Angka 2 besarnya sama";
    // } else{
    //     echo "Angka 1 d an Angka 2 besarnya tidak sama";
    // }

    // echo "<br>";

    // if ($angka1 >= $angka2){ // kondisi tidak meemneuhi, maka if tidak memenuhi
    //     echo "benar";
    // } else{
    //     echo "salah";
    // }

    // echo "<br>";
    
    $nama = "Endra";
    $Nama = "Endra";
    // echo $nama." ".$Nama;
    // echo "<br>";
    // if ($nama == $Nama){ // kondisi tidak meemneuhi, maka if tidak memenuhi
    //     echo "benar";
    // } else{
    //     echo "salah";
    // }

    if(($Nama) && is_null($Nama)){
        echo "Benar";
    } else{
        echo "Salah";
    }
?>