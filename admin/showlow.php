<?
session_start();

include "../koneksi.php";
$lihat=mysql_query("select * from lowongan order by id DESC");
//$low=mysql_fetch_array($lihat);
$i=0;
?>

<table class="table table-striped table-advance table-hover">
  <tr>
    <td width="4%" align="center" bgcolor="#FF6600">No</td>
    <td width="35%" align="center" bgcolor="#FF6600">Informasi</td>
    <td width="29%" align="center" bgcolor="#FF6600">Keterangan</td>
     <td colspan="2" align="center" bgcolor="#FF6600">&nbsp;</td>
  </tr>
  <? 
  while($low=mysql_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td><?=$i;?></td>
    <td><?=$low[2];?></td>
    <td><?=$low[3];?></td>
    <td width="17%" align="center"><a href="index.php?menu=editlow.php&data=<?=$low[0];?>"><button type="button" class="btn btn-info">Edit</button></a></td>
    <td width="15%" align="center"><a href="index.php?menu=showlow.php&data=<?=$low[0];?>&aksi=hapus"><button type="button" class="btn btn-danger">Hapus</button></a></td>
  </tr>
  <? } ?>
</table>
<?
if($aksi=="hapus"){
	?>
    <p>
 <div> 
    <?
$lihat=mysql_query("select * from lowongan where id=$_GET[data]");
$hps=mysql_fetch_array($lihat);
	
echo "Yakin akan menghapus data  <b>$hps[2]</b> ?";	
echo "<center><p> <a href=index.php?menu=showlow.php&uhui=ya&id=$_GET[data] class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showlow.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ $sql=mysql_query("delete from lowongan where id=$_GET[id]");
if($sql) 
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showlow.php\">");
//header("location:index.php?menu=showlow.php");
}


?></div>