<?
include "koneksi.php";
$cari=mysql_query("select * from agenda order by id DESC limit 0,10");
while($isi=mysql_fetch_array($cari)){
	
	?>
    
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="18%">Hari/Tanggal</td>
    <td width="3%">:</td>
    <td width="79%"><?=$isi[1];?></td>
  </tr>
  <tr>
    <td>Waktu</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kegiatan</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Lokasi</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
    <?
	
	
}


?>