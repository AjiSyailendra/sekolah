<?php
// IF ELSE 1
$teman = "Danis";
if ($teman == "Danis") {
    echo "Dia adalah teman saya";
}else{
    echo "Dia bukan teman saya";
}  

echo "<br><br>";

// IF ELSE 2
$teman2 = "Danis";
if ($teman2 == "Danis") {
    echo "Danis adalah teman saya";
}else if ($teman2 == "Ayuk") {
    echo "Ayuk adalah teman saya";
} else{
    echo "Dia bukan teman saya";
}  

echo "<br><br>";

$warna = "merah";
if ($warna == "biru") {
    $color = "blue";
} else if ($warna == "merah") {
    $color = "red";
} else{
    $color = "green";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE</title>
</head>
<body>
    <font color="<?php echo $color;?>">
        Belajar Pemrograman di SMK Negeri 6 Surakarta
    </font>
</body>
</html>