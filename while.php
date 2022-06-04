<?php
    echo "While 1<br>";
    $a = 1;
    while($a <= 10){
        echo "Angka $a <br>";
        $a++;
    }
    
    echo "<br>";
    
    echo "While 2<br>";
    $b = 11;
    while($b >= 4){
        echo "Angka $b <br>";
        $b--;
    }
    
    echo "<br>";
    echo "While 3<br>";
    $c = 1;
    while($c <= 14){
        if($c==5){
            break;
        }
        echo "$c<br>";
        $c++;
    }
    
?>