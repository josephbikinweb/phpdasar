<?php
// BELAJAR PHP untuk pemula 12.Insert dan Delete
// koneksi ke DBMS
    $conn = mysqli_connect("localhost", "root", "","phpdasar");
// cek apakah tombol submit sudah ditekan atau belum
    if (isset ($_POST["submit"])) {
// ambil data dari tiap elemen dalam form
        $nama = $_POST ["nama"];
        $nrp = $_POST ["nrp"];
        $email = $_POST ["email"];
        $jurusan = $_POST ["jurusan"];
        $gambar = $_POST ["gambar"];
        
// query insert data
        $query = "INSERT INTO mahasiswa 
                VALUES
        -- urutannya (id -meskipun nilai kosong krn autoincrement- JANGAN SAMPAI SALAH URUTAN )
                ('', '$nama', '$nrp','$email', '$jurusan', '$gambar')
            ";
// query insert data (koneksi, query) ; untuk menampilkan pakai SELECT * FROM
        mysqli_query($conn, $query);

// Cek apakah data berhasil ditambahkan atau tidak
        // var_dump(mysqli_affected_rows($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "berhasil";
        } else {
            echo "gagal";
            echo "<br>" ;
            echo mysqli_error($conn);
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
            <input type="text" name="nama">
        </li>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp">
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