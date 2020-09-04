<?php
// array
// membuat array
$hari = array("Senin","Selasa","Rabu");
$bulan = ["Januari","Februari","Maret"];
$arr = [100,"teks",true];
// menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);
// menampilkan 1 elemen pada array
echo $arr[0];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
echo "<br>";
echo "<br>";
echo "<br>";

?>