<?php
$mahasiswa = [
    ["Nama" => "Joseph", 
    "Alamat"=> "Puncak Permai", 
    "Nomor HP"=>"082335677444", 
    "Email" =>"jnugro78@gmail.com",
    "Gambar" => "img1.png"],

    ["Nama" =>"Jojo", 
    "Alamat"=>"Krembangan Baru", 
    "Nomor HP"=>"082335677777", 
    "Email" =>"jnugroho78@gmail.com",
    "Gambar" => "img2.png"],
    
    ["Nama" =>"Jo", 
    "Alamat"=>"Krembangan", 
    "Nomor HP"=>"082335677888", 
    "Email" =>"abc78@gmail.com",
    "Gambar" => "img3.png",
    "Tugas"=> [90,80,100],],
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
        <li>
            <img src="image/<?=$mhs["Gambar"]?>">
        </li>
        <li>Nama        :<?= $mhs["Nama"];?></li>
        <li>Alamat      :<?= $mhs["Alamat"];?></li>
        <li>Nomor HP    :<?= $mhs["Nomor HP"];?></li>
        <li>Email       :<?= $mhs["Email"];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>