<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>

<!-- Kalau action tidak diisi maka akan dikirim ke halaman yang sama jadi sebaiknya diisi -->
<!-- method bisa memakai POST atau GET  tapi harus sinkron dengan yang di halaman satunya-->
    <form action="latihan5.php" method="post">
        Masukkan Nama
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
    
</body>
</html>