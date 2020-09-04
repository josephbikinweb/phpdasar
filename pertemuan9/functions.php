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
?>