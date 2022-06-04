<?php
 require 'function.php';

// ambil data di rul
$id = $_GET["id"];
// query data siswa berdasarkan id
$ssw = query("SELECT * FROM siswa WHERE id = $id")[0];


 $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
        // cek apakah data berhasil di ubah atau tidak
        if (ubah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'php-mysql2.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'php-mysql2.php';
            </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
    <style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        list-style: none;
    }
    </style>
</head>

<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $ssw["id"];?>">
        <ul>
            <li>
                <label for="NIS">NIS : </label>
                <input type="text" name="NIS" id="NIS" required value="<?= $ssw["NIS"]; ?>">
            </li>
            <br>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required value="<?= $ssw["Nama"]; ?>">
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $ssw["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $ssw["jurusan"]; ?>">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $ssw["gambar"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
    <a href="php-mysql2.php">Kembali</a>
</body>

</html>