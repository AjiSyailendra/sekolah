<?php
require 'function.php';
$siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>
</head>

<body>
    <h1>Daftar Siswa SMKN 6 Surakarta</h1>
    <a href="tambah.php">tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Jurusan</td>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($siswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"];?>"
                    oneclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><?= $row["gambar"];?></td>
            <td><?= $row["NIS"];?></td>
            <td><?= $row["Nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>