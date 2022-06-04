<?php
echo "FOR 1<br>";
for($a=1; $a<=10; $a++){
    echo $a."<br>";
}

echo "<br>";

echo "FOR 2<br>";
for($kata=1; $kata<=15; $kata++){
    echo "belajar pemrograman PHP di SMKN 6 Surakarta<br>";
}

echo "<br>";

echo "FOR 3<br>";
for($i=1; $i<=12; $i++){
    echo "Perulangan ke-".$i."<br>";
}

echo "<br>";

echo "FOR 4<br>";
for($f4=17; $f4>=0; $f4--){
    echo "Perulangan ke-".$f4."<br>";
}

echo "<br>";

echo "FOR 5<br>";
for($baris=1; $baris<=5; $baris++){
    for($kolom=1; $kolom<=$baris; $kolom++){
        echo "*";
    }
    echo "<br>";
}
?>