<?php
$a = 1;
do {
    echo $a."<br>";
    $a++;
} while ($a <= 10);

echo "<br>";

$b = 19;
do {
    echo $b."<br>";
    $b--;
} while ($b >= 9);

echo "<br>";

$n = 1;
$i = 0;
$t = 0;
do {
    do {
        $i++;
        $t = $i*$n;
        echo $t." ";
    } while ($i <= 10);    
    echo "<br>";
    $i = 0;
    $n++;
} while ($b >= 9);
?>