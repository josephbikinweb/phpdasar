<?php
require "functions.php";
// BELAJAR PHP untuk pemula 12.Insert dan Delete
// beda dengan tambah copy adalah ambil data dipindahkan ke function
// koneksi ke DBMS
 
// cek apakah tombol submit sudah ditekan atau belum 
// $_POST adalah method dari formnya yaitu post
// submit ini mengarah ke name'submit'
    if (isset ($_POST["submit"])) {

// cek apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0){
            // echo "Data berhasil ditambahkan";
            echo "
                <script>
                    alert ('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            // echo"Data GAGAL ditambahkan";
            echo "<script>
                    alert ('data gagal ditambahkan');
                    document.location.href = 'index.php';
                </script>
                ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" required>
            <!-- required untuk form harus diisi / tidk boleh kosong -->
        </li>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" required>
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="text" name="gambar">
        </li>
        <button type="submit" name="submit">Tambah Data</button>
    </ul>
    </form>
</body>
</html>