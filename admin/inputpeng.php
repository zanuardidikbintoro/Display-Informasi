<?
include "../koneksi.php";
$cari=mysql_query("select * from pengumuman where id=1");
$isi=mysql_fetch_array($cari);


?>
<form action="index.php?menu=inputpeng.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">Isi Pengumuman</td>
    <td valign="top">:</td>
    <td><textarea name="isi" cols="70" rows="5" style="border-color:#9C0; background-color: #FBB144"><?=$isi[1];?></textarea></td>
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
	$input=mysql_query("update pengumuman set pengumuman='$_POST[isi]' where id=1");
	if($input) header("location:index.php?menu=inputpeng.php");
	else echo "gagal";
}


?>

