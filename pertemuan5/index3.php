<?php
$mahasiswa = [
    ["Joseph", "Puncak Permai", "082335677444", "jnugro78@gmail.com"],
    ["Jojo", "Krembangan Baru", "082335677777", "jnugroho78@gmail.com"],
    ["Jo", "Krembangan", "082335677888", "abc78@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama        :<?= $mhs[0];?></li>
        <li>Alamat      :<?= $mhs[1];?></li>
        <li>Nomor HP    :<?= $mhs[2];?></li>
        <li>Email       :<?= $mhs[3];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>