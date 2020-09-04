<?php
    // koneksi ke database -- URUTANNYA JANGAN SAMPAI SALAH ("host","username","password","namaDatabase")
    // karena koneksi mysqli akan dipakai terus maka dibuat sbg variabel untuk lebih cepat
    $conn = mysqli_connect("localhost","root","","phpdasar");

    // NEXT : AMBIL data dari tabel mahasiswa / query data mahasiswa
    // PARAMETER ada 2 (koneksi, query nya) - sintaks db nya huruf besar
    // variabel result akan menemukan kesalahan bila terjadi, kalau tidak pakai maka kita tidak akan tahu
    $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
   

    // Kalau mau cek ada error apa pakai function if dibawah ini
    // if(!$result) {
    //         echo mysqli_error($conn);
    // }

    // ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row()  / / mengembalikan array numeric
    // mysqli_fetch_assoc() / / mengembalikan array associative
    // mysqli_fetch_array() / / mengembalikan array numeric atau associative; kekurangannya                             data yang disajikan double (numeric dan associative)
    // mysqli_fetch_object() / / mengembalikan array associative 

    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[2]);

    // $mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs["jurusan"]);
    
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs["jurusan"]);
    
    // $mhs = mysqli_fetch_object($result);
    // var_dump($mhs->email);

// LOOPING untuk ambil semua isi database
// while ($mhs = mysqli_fetch_assoc($result) ) {
//       var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
        
    <h1>DAFTAR MAHASISWA</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</td>
            <!--Aksi untuk tombol ubah  -->
            <th>Aksi</td>
            <th>Gambar</td>
            <th>NRP</td>
            <th>Nama</td>
            <th>Email</td>
            <th>Jurusan</th>
        </tr>

        <tr>
        <?php $i = 1;?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        
            <td><?= $i; ?> </td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="image/<?= $row["gambar"];?>" width="75"></td>
            <td><?= $row["nrp"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
            
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
    </table>

</body>
</html>