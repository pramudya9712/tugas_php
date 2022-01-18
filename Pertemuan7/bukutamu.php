<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieport"content="width=divice-width,initial-scale=1.0">
    <title>Form Input Komentar</title>
</head> 
<body>
    <form action="tampilkomentar.php"method="post"> 
        <h1>Buku Tamu</h1>
        <p>Komentar dan Saran Anda sangat Kami Butuhkan.</p>
        <p>Untuk Meningkatkan Kualitas Situs Kami</p>
        <hr>
        Nama Anda:<input type="text"name="nama">
        <br><br>
        Email Anda:<input type="email"name="email">
        <br><br>
        Komentar:<textarea name="Komentar"id="Komentar"cols="60" rows="10"></textarea>    
        <br><br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>
</html>        