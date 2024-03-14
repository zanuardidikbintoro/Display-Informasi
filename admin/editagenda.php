<?php 
session_start();
require_once('../koneksi.php');


//mysql_select_db($database_konek, $konek);
$qqs = mysql_query("SELECT * FROM agenda where id='$_GET[data]'");
$qq=mysql_fetch_array($qqs);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="editagenda.php?aksi=ubah" method="post" name="form1" id="form1" enctype="multipart/form-data">
  <table align="left" width="100%">
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Hari</td>
      <td align="left"><input type="hidden" name="id" value="<?=$qq[0];?>"/><input type="text" name="hari" value="<?=$qq[1];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Judul</td>
      <td align="left"><input type="text" name="judul" value="<?=$qq[2];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Keterangan</td>
      <td align="left"><textarea name="keterangan" rows="5" cols="50"><? echo $qq[3];?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Lokasi</td>
      <td align="left"><input type="text" name="lokasi" value="<?=$qq[4];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Waktu</td>
      <td align="left"><input type="text" name="waktu" value="<?=$qq[5];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update Data" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
//mysql_free_result($Recordset1);
if($aksi=="ubah"){
	$upd=mysql_query("update agenda set hari='$_POST[hari]', judul='$_POST[judul]',keterangan='$_POST[keterangan]',lokasi='$_POST[lokasi]',waktu='$_POST[waktu]' where id='$_POST[id]'");
	if($upd){
echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showagenda.php\">");
	}
	else{ echo "gagal";
	}
}
?>
