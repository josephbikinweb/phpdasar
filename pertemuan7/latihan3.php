<?php
// cek apakah tidak ada data di $_GET
// ! = not => di !isset artinya belum dibikin? kalau isset aja berarti sudah dibikin?
if  (!isset($_GET["Nama"])||
    !isset($_GET["Alamat"])||
    !isset($_GET["NomorHP"])||
    !isset($_GET["Email"])||
    !isset($_GET["Gambar"])
    ) {
    // redirect
    header("Location: latihan2.php");
    exit; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
</head>
<body>
<h1>DETAIL MAHASISWA</h1>
    <ul>
        <li> <img src="image/<?=$_GET["Gambar"];?>"></li>
        <li><?=$_GET["Nama"]; ?></li>
        <li><?=$_GET["Alamat"]; ?></li>
        <li><?=$_GET["NomorHP"]; ?></li>
        <li><?=$_GET["Email"]; ?></li>
    </ul>
</body>
</html>