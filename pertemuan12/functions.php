 <?php
 // koneksi ke database -- URUTANNYA JANGAN SAMPAI SALAH ("host","username","password","namaDatabase")
    // karena koneksi mysqli akan dipakai terus maka dibuat sbg variabel untuk lebih cepat
    $conn = mysqli_connect("localhost","root","","phpdasar");

    
    // analoginya :
    // $result itu sebagai lemari
    // $row sebagai bajunya
    // $rows sebagai kotak kosong
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
            // $rows sebagai array baru yang isinya row + row + row
        }
        return $rows;
    }

// TAMBAH

    function tambah($data) {
        global $conn;
    // ambil data dari tiap elemen dalam form 
    // supaya tidak mudah disusupi script dari orang luar alias dihack maka ditambahkan code : htmlspecialchars()
        $nama = htmlspecialchars($data ["nama"]);
        $nrp = htmlspecialchars($data ["nrp"]);
        $email = htmlspecialchars($data ["email"]);
        $jurusan = htmlspecialchars($data ["jurusan"]);
        $gambar = htmlspecialchars($data ["gambar"]);

        $query = "INSERT INTO mahasiswa 
                VALUES
        -- urutannya (id -meskipun nilai kosong krn autoincrement- JANGAN SAMPAI SALAH URUTAN )
                ('', '$nama', '$nrp','$email', '$jurusan', '$gambar')
            ";
// query insert data (koneksi, query) ; untuk menampilkan pakai SELECT * FROM
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

// HAPUS

     function hapus ($id) {
        global $conn;
        mysqli_query ($conn,"DELETE FROM mahasiswa WHERE id = $id");
        
         return mysqli_affected_rows($conn);
    }
     
    function ubah ($data) {
        global $conn;
    // ambil data dari tiap elemen dalam form 
    // supaya tidak mudah disusupi script dari orang luar alias dihack maka ditambahkan code : htmlspecialchars()
        $id = $data["id"];
        $nama = htmlspecialchars($data ["nama"]);
        $nrp = htmlspecialchars($data ["nrp"]);
        $email = htmlspecialchars($data ["email"]);
        $jurusan = htmlspecialchars($data ["jurusan"]);
        $gambar = htmlspecialchars($data ["gambar"]);

        $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id;
            ";
// query insert data (koneksi, query) ; untuk menampilkan pakai SELECT * FROM
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

// function cari
// tanda % berfungsi supaya keyword yang dicari bisa ada didepan atau dibelakang kata2nya
    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                    nama LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' 
                ";
        return query($query);
    }
?>