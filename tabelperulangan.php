<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tabel</title>
</head>
<body>
    <table border="1" align="center" cellspacing="1" cellpadding="0">
    <tr>
        <th width="30">No</th>
        <th width="150">Nama</th>
        <th width="200">Alamat</th>
    </tr>
    <?php
    for($tabel=1; $tabel<=12; $tabel++){
        if ($tabel % 4 == 0){       
            $warnabg="lime";
        }elseif($tabel % 4 == 1){
            $warnabg="red";
        }elseif($tabel % 4 == 2){
            $warnabg="orange";
        }else{ // sama saja dengan $tabel % 4 == 3
            $warnabg="blue";
        } 
        echo 
        "<tr bgcolor=$warnabg>
            <td align='center'>$tabel</td>
            <td align='center'>Endra</td>
            <td align='center'>Mojosongo</td>
        </tr>";
    }
    ?>
    </table>
</body>
</html>