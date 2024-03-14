<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
include "koneksi.php";
$sql=mysql_query("select * from anggaran order by id asc");
?>

<marquee direction="up" scrolldelay="50" height="500">

<table width="100%" border="0" cellspacing="0" cellpadding="10" style="font-size:20px">
<?
while($hasil=mysql_fetch_array($sql)){
?>
  <tr class="badge">
    <td  width="27%"><img src="namakeg.png" width="300" height="" /></td>
    <td width="1%">&nbsp;</td>
    <td width="72%"><b><?=$hasil[1];?></b></td>
  </tr>
  <tr>
    <td><img src="jml.png" width="300" height="" /></td>
    <td>&nbsp;</td>
    <td><?=$hasil[2];?></td>
  </tr>
  <tr>
    <td><img src="pelaksanaan.png" width="300" /></td>
    <td>&nbsp;</td>
    <td><?=$hasil[3];?></td>
  </tr>
  <tr>
    <td><img src="output.png" width="300" height="" /></td>
    <td>&nbsp;</td>
    <td><?=$hasil[4];?></td>
  </tr>
  <tr>
    <td><img src="realisasi.png" width="300" height="" /></td>
    <td>&nbsp;</td>
    <td><?=$hasil[5];?></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <? } ?>
</table>


</marquee>

</body>
</html>