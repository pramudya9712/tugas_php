<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Tugas6</title>
</head>
<body>
    <?php
$nama_pembeli="Agung Pramudya";
$alamat="Jakarta";
$kode_buku1="B001";
$kode_buku2="B002";
$kode_buku3="B003";
$nama_buku1="Pemrograman PHP";
$nama_buku2="Visual Basic";
$nama_buku3="Pemrograman C++";
$harga_buku1=50000;
$harga_buku2=60000;
$harga_buku3=70000;
$jumlah_beli=1;
$total_harga1=$jumlah_beli*$harga_buku1;
$total_harga2=$jumlah_beli*$harga_buku2;
$total_harga3=$jumlah_beli*$harga_buku3;
$total_harga=$total_harga1+$total_harga2;

echo"Nama pembeli:$nama_pembeli<br>";
echo"Alamat:$alamat<br>";
echo"Kode Buku:$kode_buku1<br>";
echo"Nama Buku:$nama_buku1<br>";
echo"Harga Buku:$harga_buku1<br>";
echo"Jumlah Beli:$jumlah_beli<br>";
echo"Kode Buku:$kode_buku2<br>";
echo"Nama Buku:$nama_buku2<br>";
echo"Harga Buku:$harga_buku2<br>";
echo"Jumlah_beli:$jumlah_beli<br>";
echo"Total Harga:$total_harga<br><br>";
?>
</body>
</html>