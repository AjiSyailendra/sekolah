<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data siswa / queri data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa"); // jika salah maka keluar false


// ambil data (fetch) siswa dari object result
// $ssw = mysqli_fetch_row($result); // mengembalikan array numerik
// var_dump($ssw[3]); 

// while ($ssw = mysqli_fetch_assoc($result)) {
//     var_dump($ssw); 
// } // mengembalikan array associative
 

// $ssw = mysqli_fetch_array($result); // mengembalikan keduanya
// var_dump($ssw); 

// $ssw = mysqli_fetch_array($result);  
// var_dump($ssw->email); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Siswa SMKN 6 Surakarta</h1>

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
        <?php while ($row = mysqli_fetch_assoc($result)) :
        ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
            </td>
            <td><?= $row["gambar"];?></td>
            <td><?= $row["NIS"];?></td>
            <td><?= $row["Nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile;?>
    </table>
</body>

</html>