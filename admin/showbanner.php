<?
include "../koneksi.php";
if($aksi=="hapus"){
	?>
    <p>
 <div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?
$lihat=mysql_query("select * from gambar where id=$_GET[data]");
$hps=mysql_fetch_array($lihat);
	
echo "Yakin akan menghapus gambar $hps[2]</b> ?";	
echo "<center><p> <a href=index.php?menu=showbanner.php&uhui=ya&id=$_GET[data]&img=$hps[2] class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showlow.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ 
unlink("../banner/$_GET[img]");
$sql=mysql_query("delete from gambar where id=$_GET[id]");
if($sql) //header("location:index.php?menu=showbanner.php");
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showbanner.php\">");
}


?></div>
<?

include "../koneksi.php";
$lihat=mysql_query("select * from gambar order by id DESC");
//$low=mysql_fetch_array($lihat);
$i=0;
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%" align="center" bgcolor="#FF6600">No</td>
    <td width="35%" align="center" bgcolor="#FF6600">Judul</td>
    <td width="29%" align="center" bgcolor="#FF6600">Banner</td>
     <td colspan="2" align="center" bgcolor="#FF6600">&nbsp;</td>
  </tr>
  <? 
  while($low=mysql_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td style=" border-bottom-color: #3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><?=$i;?></td>
    <td style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><?=$low[1];?></td>
    <td style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><? 
	if($low[2]!=NULL){
	$size=$low[3]/1000;
	echo "<img src='../banner/$low[2]' width='150'><br><font size=2 color=#333333><i>$low[2] / $size B</i></font>";	
	}
	else "Belum ada gambar";
	
	?></td>
    <td width="17%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted">&nbsp;</td>
    <td width="15%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><a href="index.php?menu=showbanner.php&data=<?=$low[0];?>&aksi=hapus" class="ngedit">Hapus</a></td>
  </tr>
  <? } ?>
</table>
