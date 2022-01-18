<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieport"content="width=device-width,initial-scale=1.0">
    <title>Tampil Komentar</title>
</head> 
<body> 
    <h1>Data Komentar Anda</h1>
    <hr>
    Nama Anda:<?php echo $_POST["nama"];?>
    <br><br>
    Email Anda:<?php echo $_POST["email"];?>
    <br><br>
    Komentar:<?php echo $_POST["Komentar"];?>
    <br><br>
    <a href="bukutamu.php">Input Data Lagi</a>

</body>  
</html>
