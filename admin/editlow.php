<?
include "../koneksi.php";

if($_GET['aksi']!="kirim"){
$sqlku=mysql_query("select * from lowongan where id=$_GET[data]");
$data=mysql_fetch_array($sqlku);
}
?>

<form name="inputnews" action="index.php?menu=editlow.php&aksi=kirim" enctype="multipart/form-data" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <!-- <tr>
    <td width="23%">Kategori</td>
    <td width="1%">:</td>
    <td width="76%"><input name="kategori" type="text" id="kat" size="25" value="<?=$data[1];?>"></td>
  </tr> -->
  <tr>
    <td>Running Text</td>
    <td>:</td>
    <td><input name="nama" type="text" id="kat2" size="50" value="<?=$data[2];?>"></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input name="lowongan" type="text" id="kat3" size="45" value="<?=$data[3];?>"></td>
  </tr>
  <!--
  <tr>
    <td>Kualifikasi</td>
    <td>:</td>
    <td><textarea name="kualifikasi" cols="30" rows="5"><?=$data[4];?></textarea></td>
  </tr>
  <tr>
    <td>Kontak</td>
    <td>:</td>
    <td><textarea name="kontak" cols="30" rows="5"><?=$data[5];?></textarea></td>
  </tr>
  -->
</table>
<input type="hidden" value="<?=$data[0];?>" name="id" />
<input name="kirim" type="submit" value="Kirim" />
<input name="reset" type="reset" value="Ulangi" />
</form>
<?
if($_GET['aksi']=="kirim"){
$sql=mysql_query("update lowongan set kategori='$_POST[kategori]',perusahaan='$_POST[nama]',pekerjaan='$_POST[lowongan]',syarat='$_POST[kualifikasi]',kontak= '$_POST[kontak]' where id=$_POST[id]");

if($sql){
	echo "Update berhasil";
}
else echo "error";

	
}




?>