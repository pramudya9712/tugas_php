
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>input</title>
 <link rel="stylesheet" href="style.css">
</head>

<body style="max-width: 700px; padding: 10px; margin: 10px auto auto; border:1px solid #0f3460;">
   <h2>PT. Graha Mobilindo</h2>
   <hr>
   <br>
   <br>
   <table>
    <tr>
      <td>Nama Pelanggan</td>
      <td>:</td>
      <td><?php echo $_POST["nama"];?></td>
    </tr>
    <tr>
      <td>Nomor KTP</td>
      <td>:</td>
      <td><?php echo $_POST["ktp"];?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $_POST["alamat"];?></td>
    </tr>
    <tr>
      <td>Nomor HP</td>
      <td>:</td>
      <td><?php echo $_POST["hp"];?></td>
    </tr>
    <tr>
      <td>Merek mobil</td>
      <td>:</td>
      <td><?php echo $_POST["merek"];?></td>
    </tr>
    <tr>
      <td>Jumlah unit</td>
      <td>:</td>
      <td><?php echo $_POST["jumlah"];?></td>
    </tr>
    <tr>
      <td>Harga Mobil</td>
      <td>:</td>
      <td><?php echo $_POST["harga"];?></td>
    </tr>
   </table>
   <br>
   <br>
   <br>
   <div>
   <a href="formulir.php"><input type="button" value="Input Data Lagi"></a>
   </div>
   

</body>


</html>