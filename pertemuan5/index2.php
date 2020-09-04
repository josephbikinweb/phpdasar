<?php
$mahasiswa = ["Joseph", "Puncak Permai", "082335677444", "jnugro78@gmail.com"];
?>

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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li> <?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <br>

    <ul>
        <li><?= $mahasiswa[0];?></li>
        <li><?= $mahasiswa[1];?></li>
        <li><?= $mahasiswa[2];?></li>
        <li><?= $mahasiswa[3];?></li>
    </ul>
        
</body>
</html>