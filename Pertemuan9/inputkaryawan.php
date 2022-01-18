<html>
<form action="outputkaryawan.php" method="POST">
<table align="centre" border="1" cellpadding="0" cellspacing="0">
    <tr align="centre"><td><h2><b> DATA KARYAWAN</b></h2></td></tr>
    <tr>
        <td>
        <table width="450" border="0" cellpadding="0" cellspacing="10" align="centre">
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input name="nama"type="text"size="40"/></td>
            </tr>
            <tr>
                <td>Tempat Tgl Lahir</td>
                <td> : </td>
                <td><input name="ttl"type"text" size="40"/></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <input type="radio" name="jk"value="laki-laki"><label for="laki">Laki-laki</label>
                    <input type="radio" name="jk"value="Perempuan"><label for="Perempuan">Perempuan</label>                   
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td> : </td>
                <td>
                <select name="pdk" value="pdk">
                <option>SMA</option>
                <option>S1</option>
                <option>S2</option>

            </tr>
                <td>Hobi</td>
                <td> : </td>
                <td><input name="hobi" type"text" size="40" /></td>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" value="Simpan"/>
                </td>
                <td>
                <input type="reset" name="reset" value="Batal"/>
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</form>
</html>            





