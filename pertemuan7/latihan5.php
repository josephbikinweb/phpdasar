<?php
if (!isset($_POST["nama"])) {
    header("Location: latihan4.php");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SELAMAT DATANG</title>
</head>
<body>

<!-- Bedanya dengan $_GET, kalau GET akan muncul datanya di url; kalau POST tidak -->
    <h1>Selamat Datang, <?= $_POST["nama"];?>!</h1>

</body>
</html>