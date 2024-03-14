<?php require_once('../koneksi.php');
$qqs = mysql_query("SELECT * FROM anggaran where id='$_GET[data]'");
$qq=mysql_fetch_array($qqs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="editanggaran.php?aksi=ubah" method="post" name="form1" id="form1" enctype="multipart/form-data">
  <table align="left" width="100%">
    <tr valign="baseline">
      <td width="30%" align="left" valign="top" nowrap="nowrap">Nama Kegiatan:</td>
      <td width="70%"><textarea name="kegiatan" cols="50" rows="5"><?=$qq[1];?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Jumlah Anggaran (inputkan Rp.xx.xxx,-):</td>
      <td><input type="text" name="jumlah" value="<?=$qq[2];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Pelaksanaan:</td>
      <td><input type="text" name="pelaksanaan" value="<?=$qq[3];?>" size="45" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Output:</td>
      <td><input type="text" name="output" value="<?=$qq[4];?>" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Realisasi (%):</td>
      <td><input type="text" name="realisasi" value="<?=$qq[5];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Ubah Data" /></td>
    </tr>
  </table>
<input type="hidden" name="id" value="<?=$qq[0];?>"/>

</form>
<p>&nbsp;</p>
</body>
</html>
<?php
if($_GET['aksi']=="ubah"){
	$upd=mysql_query("update anggaran set kegiatan='$_POST[kegiatan]', jumlah='$_POST[jumlah]',pelaksanaan='$_POST[pelaksanaan]',output='$_POST[output]',realisasi='$_POST[realisasi]' where id='$_POST[id]'");
	//echo $upd;
	if($upd){
echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showanggaran.php\">");
	}
	else{ echo "gagal";
	}
}
?>
