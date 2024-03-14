<marquee direction="up" scrolldelay="100" height="500">
<?
include "koneksi.php";
$cari=mysql_query("select * from agenda order by id DESC limit 0,10");
while($isi=mysql_fetch_array($cari)){
	
	?>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="20" style="font-size:24px">
  <tr>
    <td colspan="3" align="center" valign="middle" bgcolor="#F5F5F5"><img src="img/calendar_date_event_month-512.png" width="100" height="102" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;<b><?=$isi[1];?>
    </b></td>
    </tr>
  <tr height="50">
    <td width="18%" valign="middle">Jam</td>
    <td width="3%" valign="middle">:</td>
    <td width="79%" valign="middle"><?=$isi[2];?></td>
  </tr>
  <tr height="50">
    <td valign="middle" bgcolor="#E6E6E6">Nama</td>
    <td valign="middle" bgcolor="#E6E6E6">:</td>
    <td valign="middle" bgcolor="#E6E6E6"><?=$isi[3];?></td>
  </tr>
  <tr height="50">
    <td valign="middle">Tempat</td>
    <td valign="middle">:</td>
    <td valign="middle"><?=$isi[4];?></td>
  </tr>
  <tr height="50">
    <td valign="middle" bgcolor="#E6E6E6">Petugas</td>
    <td valign="middle" bgcolor="#E6E6E6">:</td>
    <td valign="middle" bgcolor="#E6E6E6"><?=$isi[5];?></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#FF6600" /></td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
  
    <?
	
	
}


?></marquee>