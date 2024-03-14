<form name="inputnews" action="insertnews.php?aksi=kirim" enctype="multipart/form-data">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="23%">Kategori</td>
    <td width="1%">:</td>
    <td width="76%"><input name="kategori" type="text" id="kat" size="25"></td>
  </tr>
  <tr>
    <td>Nama Perusahaan</td>
    <td>:</td>
    <td><input name="nama" type="text" id="kat2" size="50"></td>
  </tr>
  <tr>
    <td>Lowongan</td>
    <td>:</td>
    <td><input name="lowongan" type="text" id="kat3" size="45"></td>
  </tr>
  <tr>
    <td>Kualifikasi</td>
    <td>:</td>
    <td><textarea name="kualifikasi" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Kontak</td>
    <td>:</td>
    <td><textarea name="kontak" cols="20" rows="5"></textarea></td>
  </tr>
</table>
<input name="kirim" type="submit" value="Kirim" />
<input name="reset" type="reset" value="Ulangi" />
</form>
<?
include "koneksi.php";
if($aksi=="kirim"){
$sql=mysql_query("insert into lowongan(kategori,perusahaan,pekerjaan,syarat,kontak) values ('$_POST[kategori]','$_

	
}




?>