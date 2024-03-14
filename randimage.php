<?
include "koneksi.php";
//random gambar sementara sesuk genti pideo
$ran=mysql_query("select * from gambar order by rand() limit 1");
$gbr=mysql_fetch_array($ran);

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="banner/<?=$gbr[2];?>" width="783" height="426" border="3" alt="vide"/></td>
  </tr>
  <tr>
    <td align="center"><img src="img/play.jpg" width="786" height="77" /></td>
  </tr>
</table>

