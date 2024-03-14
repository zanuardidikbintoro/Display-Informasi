<?
include "koneksi.php";
$cari=mysql_query("select * from pengumuman where id=1");
$isi=mysql_fetch_array($cari);


?>
<? if(!empty($isi[1])){ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><marquee direction="left" scrolldelay="100"><font color="#FFCC00" face="Tahoma, Geneva, sans-serif" size="4"><img src="img/alert.png" width="33" height="28" />&nbsp;&nbsp;<?=$isi[1];?></font></marquee></td>
  </tr>
</table>
<? } ?>

