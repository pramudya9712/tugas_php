<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>Mobil</title>
<link rel="stylesheet"href="style.css">
</head>

<body style="max-width: 700px; padding: 10px; margin: 10px auto auto; border:1px solid #0f3460;">
  <h2>PT. Graha Mobilindo</h2>
  <form action="data.php"method="post">
    <table>
        <tr height="50px">
          <td>Nama Pelanggan</td>
          <td>:</td>
          <td><input type="text"name="nama"></td>
        </tr>
        <tr height="40px">
          <td>Nomor KTP</td>
          <td>:</td>
          <td><input type="text"name="ktp"size="30"></td>
        </tr>
        <tr height="40px">
          <td>Alamat</td>
          <td>:</td>
          <td><input type="text" name="alamat" size="50"></td>
        </tr>
        <tr height="40px">
          <td>Nomor HP</td>
          <td>:</td>
          <td><input type="text" name="hp"></td>
        </tr>
        <tr height="40px">
          <td>Merek Mobil</td>
          <td>:</td>
          <td><input type="text" name="merek"></td>
        </tr>
        <tr height="40px">
          <td>Jumlah Unit</td>
          <td>:</td>
          <td><input type="text" name="jumlah"></td>
        </tr>
        <tr height="40px">
          <td>Harga Mobil</td>
          <td>:</td>
          <td><input type="text" name="harga"></td>
        </tr>
      </table>
    <br>
    <button>Kirim</button>
    <button type="reset">Batal</button>
  </form>
</body>

</html>