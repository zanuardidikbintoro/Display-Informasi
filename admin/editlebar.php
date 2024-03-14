<?
include "../koneksi.php";
$cari=mysql_query("select * from informasi where id=5");
$isi=mysql_fetch_array($cari);


?>

<form action="index.php?menu=editlebar.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">
<img src="../logo.png" width="<?=$isi[1];?>" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">Masukkan lebar banner (tinggi akan menyesuaikan)</td>
    <td valign="top">:</td>
    <td><input name="isi" value="<?=$isi[1];?>" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update" name="kirim">
    <input type="reset" value="Reset" name="reset"></td>
  </tr>
</table></form>
<?
if($aksi=="kirim"){
	$input=mysql_query("update informasi set info='$_POST[isi]' where id=5");
	if($input)  echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=editlebar.php\">");
	else echo "gagal";
}


?>

