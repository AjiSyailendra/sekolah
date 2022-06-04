<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika form</title>
</head>

<body>
    <h3>Form Aritmatika Penjumlahan</h3>
    <form method="POST" action="">
        <label>Masukkan nilai 1</label><br>
        <input type=" number" name="bil1" required><br>
        <label>Masukkan nilai 2</label><br>
        <input type="number" name="bil2" required><br> <br>
        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
        <input type="submit" name="kali" value="Kali">
        <input type="submit" name="bagi" value="Bagi"><br><br>
    </form>
</body>

</html>

<?php
// penjumlahan
if (isset($_POST['tambah'])) {
    $angka1 = $_POST['bil1'];
    $angka2 = $_POST['bil2'];
    $hasil = $angka1 + $angka2;
    if ($hasil) {
        echo "Hasil Penjumlahan dari " .$angka1;
        echo " dan " .$angka2;
        echo " adalah " .$hasil;
    }
}

// pengurangan
if (isset($_POST['kurang'])) {
    $angka1 = $_POST['bil1'];
    $angka2 = $_POST['bil2'];
    $hasil = $angka1 - $angka2;
    if ($hasil) {
        echo "Hasil Pengurangan dari " .$angka1;
        echo " dan " .$angka2;
        echo " adalah " .$hasil;
    }
}

// perkalian
if (isset($_POST['kali'])) {
    $angka1 = $_POST['bil1'];
    $angka2 = $_POST['bil2'];
    $hasil = $angka1 * $angka2;
    if ($hasil) {
        echo "Hasil Perkalia  dari " .$angka1;
        echo " dan " .$angka2;
        echo " adalah " .$hasil;
    }
}

// pembagian
if (isset($_POST['bagi'])) {
    $angka1 = $_POST['bil1'];
    $angka2 = $_POST['bil2'];
    $hasil = $angka1 / $angka2;
    if ($hasil) {
        echo "Hasil Pembagian dari " .$angka1;
        echo " dan " .$angka2;
        echo " adalah " .$hasil;
    }
}
?>