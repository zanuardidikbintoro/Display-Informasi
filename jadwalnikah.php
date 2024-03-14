<marquee direction="up" scrolldelay="150" height="500">
<?
include "koneksi.php";
$i=0;
$cari=mysql_query("select * from agenda order by id DESC limit 0,10");
?>
<table width="100%" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <td width="4%" align="center" bgcolor="#FFCC33"><strong>No</strong></td>
    <td width="21%" align="center" bgcolor="#FFCC33"><strong>Hari/Tgl</strong></td>
    <td width="11%" align="center" bgcolor="#FFCC33"><strong>Jam</strong></td>
    <td width="25%" align="center" bgcolor="#FFCC33"><strong>Nama</strong></td>
    <td width="19%" align="center" bgcolor="#FFCC33"><strong>Tempat</strong></td>
    <td width="20%" align="center" bgcolor="#FFCC33"><strong>Petugas</strong></td>
  </tr>
  <?
while($isi=mysql_fetch_array($cari)){
$i++;
	
	?>
  <tr>
  <td bgcolor="#CCCCCC"><?=$i;?></td>
    <td bgcolor="#CCCCCC"><?=$isi[1];?></td>
    <td bgcolor="#CCCCCC"><?=$isi[2];?></td>
    <td bgcolor="#CCCCCC"><?=$isi[3];?></td>
    <td bgcolor="#CCCCCC"><?=$isi[4];?></td>
    <td bgcolor="#CCCCCC"><?=$isi[5];?></td>
  </tr>
  <? } ?>
</table>



    
  </marquee>