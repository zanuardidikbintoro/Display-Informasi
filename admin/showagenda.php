<?
session_start();

include "../koneksi.php";
$lihat=mysql_query("select * from agenda order by id DESC");
//$low=mysql_fetch_array($lihat);
$i=0;
?>

<table class="table table-striped table-advance table-hover">
  <tr>
    <td width="2%" align="center" bgcolor="#FF6600">No</td>
    <td width="15%" align="center" bgcolor="#FF6600">Hari</td>
    <td width="12%" align="center" bgcolor="#FF6600">Waktu</td>
     <td width="17%" align="center" bgcolor="#FF6600">Judul</td>
      <td width="16%" align="center" bgcolor="#FF6600">Lokasi</td>
       <td width="18%" align="center" bgcolor="#FF6600">Keterangan</td>
     <td colspan="2" align="center" bgcolor="#FF6600">&nbsp;</td>
  </tr>
  <? 
  while($low=mysql_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td ><?=$i;?></td>
    <td><?=$low[1];?></td>
    <td><?=$low[5];?></td>
    <td><?=$low[2];?></td>
    <td><?=$low[4];?></td>
    <td><?=$low[3];?></td>
    <td width="9%" align="center"><a href="index.php?menu=editagenda.php&data=<?=$low[0];?>"><button type="button" class="btn btn-info">Edit</button></a></td>
    <td width="11%" align="center"><a href="index.php?menu=showagenda.php&data=<?=$low[0];?>&aksi=hapus"><button type="button" class="btn btn-danger">Hapus</button></a></td>
  </tr>
  <? } ?>
</table>
<?
if($aksi=="hapus"){
	?>
    <p>
 <div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?
$lihat=mysql_query("select * from agenda where id=$_GET[data]");
$hps=mysql_fetch_array($lihat);
	
echo "Yakin akan menghapus data agenda <b>$hps[1]</b> : <b>$hps[2]</b> ?";	
echo "<center><p> <a href=index.php?menu=showagenda.php&uhui=ya&id=$_GET[data] class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showagenda.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ $sql=mysql_query("delete from agenda where id=$_GET[id]");
if($sql) 
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showagenda.php\">");
//header("location:index.php?menu=showlow.php");
}


?></div>