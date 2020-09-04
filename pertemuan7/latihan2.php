<?php
// $_GET

// $_GET ["nama"] = "Joseph";
// $_GET ["hp"] = "082335677444";
// var_dump($_GET);

$mahasiswa = [
    ["Nama" => "Joseph", 
    "Alamat"=> "Puncak Permai", 
    "NomorHP"=>"082335677444", 
    "Email" =>"jnugro78@gmail.com",
    "Gambar" => "img1.png"],

    ["Nama" =>"Jojo", 
    "Alamat"=>"Krembangan Baru", 
    "NomorHP"=>"082335677777", 
    "Email" =>"jnugroho78@gmail.com",
    "Gambar" => "img2.png"],
    
    ["Nama" =>"Jo", 
    "Alamat"=>"Krembangan", 
    "NomorHP"=>"082335677888", 
    "Email" =>"abc78@gmail.com",
    "Gambar" => "img3.png"],
];
?>

<!-- JANGAN PAKAI nama variabel pakai SPASI : NOT WORKING -->

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

    
    <ul>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan3.php?
                Nama=<?= $mhs["Nama"];?>
                &Alamat=<?= $mhs["Alamat"];?>
                &NomorHP=<?= $mhs["NomorHP"];?>
                &Email=<?= $mhs["Email"];?>
                &Gambar=<?= $mhs["Gambar"];?>
            "> <?= $mhs["Nama"]; ?>
            </a>
        </li>
    <?php endforeach;?>
    </ul>
</body>
</html>
