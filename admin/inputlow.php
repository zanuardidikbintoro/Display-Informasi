<form name="inputnews" action="index.php?menu=inputlow.php&aksi=kirim" enctype="multipart/form-data" method="post">
<table class="table table-striped table-advance table-hover">
  <tr>
    <td width="23%" valign="top">Running Text</td>
    <td width="1%" valign="top">:</td>
    <td width="76%" valign="top"><input name="nama" type="text" id="kat2" size="50"></td>
  </tr>
  <tr>
    <td valign="top">Keterangan</td>
    <td valign="top">:</td>
    <td valign="top"><textarea name="lowongan" cols="50" rows="5"></textarea></td>
  </tr>
</table>
<input name="kirim" type="submit" value="Kirim" />
<input name="reset" type="reset" value="Ulangi" />
</form>
<?
include "../koneksi.php";
if($_GET['aksi']=="kirim"){
$sql=mysql_query("insert into lowongan(kategori,perusahaan,pekerjaan,syarat,kontak) values ('$_POST[kategori]','$_POST[nama]','$_POST[lowongan]','$_POST[kualifikasi]','$_POST[kontak]')");
if($sql){
	echo "input data berhasil";
}
else echo "error";

	
}




?>