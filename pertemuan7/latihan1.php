<?php
//  Variable Scope / Lingkup Variabel (global)


$x = 10;
echo $x;
echo "<br>";

// ini tidak bisa jalan karena variabel yang dijalankan function harus ditaruh di dalam function, kecuali ditambah code "global". Contoh dibawah
// function tampilX(){
//     echo $x;
// }

// tampilX();

function tampilX(){
    global $x;
    echo $x;
}

tampilX();

?>
