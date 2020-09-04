<?php
// Pengulangan :

// 1. for
// 2. while
// 3. do while
// 4. foreach : pengulangan khusus array

// 1. for

for ($b=0; $b<5; $b++) {
    echo "Hello World! (for) <br>";
}

// 2. while
// kalau while, kondisinya false tidak akan dijalankan karena dicek awal saat while

$i=0;
while ($i < 5) {
    echo "Hello World! (while) <br>";
    $i++;
}

// 3. do while
// kalau do while, kondisinya false akan dijalankan 1x karena dicek terakhir saat while

$a=1;
do {
   echo "Hello World! (do while) <br>"; 
$a++;
} while ($a <= 5);


?>