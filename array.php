<?php
// membuat array berisi nama gunung
$gunung = array('Lawu', 'Merapi', 'Merbabu', 'Sindoro', 'Sumbing');

// menampilkan data array dengan nomor urut 1
// echo $gunung[1];

// echo "<br>";

// penamaan isi array
// $gunung['Lawu'] = "3265";
// $gunung['Merapi'] = "2930";
// $gunung['Merbabu'] = "3145";
// $gunung['Sindoro'] = "3136";
// $gunung['Sumbing'] = "3371";
// menampilkan isi array yang bernama Merapi
// echo $gunung['Merapi'];

// // penamaan isi array
// $gunung1 = array(
//     'Lawu' => "3265",
//     'Merapi' => "2930",
//     'Merbabu' => "3145",
//     'Sindoro' => "3136",
//     'Sumbing' => "3371"
// );

// echo "<br>";

// // menampilkan isi array
// echo $gunung1['Merbabu'];

// echo "<br>";

// //count() untuk menghitung isi array
// for ($x=0; $x<count($gunung); $x++) { 
//     echo $gunung[$x]."<br>";   
// }

// double array
// $mdpl = array('3265 mdpl', '2930 mdpl', '3145 mdpl', '3136 mdpl', '3371 mdpl');

// for($i=0; $i<count($gunung); $i++) { 
//     echo $gunung[$i]." punya kketinggian ".$mdpl[$i]."<br>";
// }

echo "<br>";

$nama = array(
    'Badrun', 'Indah', 'Neji', 'Andi', 'Ryan'
);
$score = array(
    90, 70, 74, 92, 86
);

echo "<table border='1'>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nilai</th>
    <th>Keterangan</th>
</tr>";

$no=1;
for ($b=0; $b < count($nama); $b++) { 
    $hasil = $score[$b] >= 75 ? "<font color='lime'>Lulus KKM" : "<font color='red'>Belum Lulus KKM";
    echo "
        <tr>
            <th align='center'>$no</th>
            <th align='center'>$nama[$b]</th>
            <th align='center'>$score[$b]</th>
            <th align='center'>$hasil</th>
        </tr>";
        $no++;
}
echo "</table>";
?>