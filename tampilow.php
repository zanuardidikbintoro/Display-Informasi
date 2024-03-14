<meta http-equiv="refresh" content="3000"><?
include "koneksi.php";



//tampil lowongan scrolling
$low=mysql_query("select * from lowongan order by id DESC");
$cari=mysql_query("select * from informasi where id=3");
$isi=mysql_fetch_array($cari);

?>
<style>
.jajal{font-size:<?=$isi[1];?>}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <tr align="center" bgcolor="#F05205" valign="middle">
   <td bgcolor="#333333" width="271"><font size=5 color=yellow>Informasi</font><br>
  <font size=3 color="#99FF00"> <font face="Arial, Helvetica, sans-serif" color="#9C0" size="4" >&nbsp;&nbsp;&nbsp;<? include "tanggal.php"; echo tanggal_hari_ini();  ?>
    </font></font></td>
 <td width="745" align="center" valign="middle" style="padding-left:20px; padding-right:20px; background-size:1000px" bgcolor="#FF6600">
<marquee direction="left" scrolldelay="90">

  <? while ($hasil=mysql_fetch_array($low)){ ?>
   
	
	<? 
	if(empty($hasil[3])){
	echo "&nbsp;&nbsp;&nbsp;<font class=jajal color=white>$hasil[2] </font> &nbsp;&nbsp;&nbsp;<img align=absmiddle src=logokecil.png height=40 />";
	}
	else{
	echo "<font class=jajal color=white>$hasil[2] </font><font class=jajal color=yellow>[$hasil[3]]&nbsp;&nbsp;&nbsp;&nbsp;<img align=absmiddle src=img/logokecil.png height=40 /></font>";
	}
	?>
    
    
   
    <? } ?>
 
</marquee>
</td>
<td width="95" align="middle" bgcolor="#006633"><? include "jam.html";?></td></tr>
</table>