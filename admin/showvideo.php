<?
session_start();
include "../koneksi.php";
if($aksi=="hapus"){
	?>
    <p>
<div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?
$lihat=mysql_query("select * from video where id=$_GET[data]");
$hps=mysql_fetch_array($lihat);
	
echo "Yakin akan menghapus video $hps[2]</b> ?";	
echo "<center><p> <a href='index.php?menu=showvideo.php&uhui=ya&id=$_GET[data]&img=$hps[2]' class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showlow.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ 
unlink("../video/$_GET[img]");
$sql=mysql_query("delete from video where id=$_GET[id]");
if($sql) //header("location:index.php?menu=showvideo.php");
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showvideo.php\">");
}


?></div>
<?

include "../koneksi.php";
$lihat=mysql_query("select * from video order by id DESC");
//$low=mysql_fetch_array($lihat);
$i=0;
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%" align="center" bgcolor="#FF6600">No</td>
    <td width="35%" align="center" bgcolor="#FF6600">Judul</td>
    <td width="29%" align="center" bgcolor="#FF6600">Durasi</td>
     <td colspan="3" align="center" bgcolor="#FF6600">&nbsp;</td>
  </tr>
  <? 
  while($low=mysql_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td style=" border-bottom-color: #3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><?=$i;?></td>
    <td style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><?=$low[1];?> </td>
    <td style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><? echo $low[3]." detik";
	
	?></td>
    <td width="17%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><a href="#" 
onclick="Popup=window.open('preview.php?id=<?=$low[0];?>','Popup','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=640,height=400,left=430,top=23'); return false;">
<b><font face="Arial" size="2" color="#0000">
Lihat Preview</font></b></a></td>
    <td width="17%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><a href="index.php?menu=editvideo.php&data=<?=$low[0];?>" class="ngedit">Edit</a></td>
    <td width="15%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><a href="index.php?menu=showvideo.php&data=<?=$low[0];?>&aksi=hapus" class="ngedit">Hapus</a></td>
  </tr>
  <? } ?>
</table>

