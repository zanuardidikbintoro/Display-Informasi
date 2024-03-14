<title>DINAS KESEHATAN KABUPATEN MOROWALI</title>
<meta http-equiv="refresh" content="3600" />
<?
include "koneksi.php";
$ambilw=mysql_query("select warna from warnabg where id=1");
$warna=mysql_fetch_array($ambilw);
$ambilwbg=mysql_query("select warna from warnabg where id=2");
$bg=mysql_fetch_array($ambilwbg);
$cari=mysql_query("select * from informasi where id=4");
$isi=mysql_fetch_array($cari);
$cari1=mysql_query("select * from informasi where id=5");
$isi1=mysql_fetch_array($cari1);
?>

<style type="text/css">
body
{
background-image: url('bg/<?=$bg[0];?>');
background-repeat: inherit;
background-color: #000;
background-size: 2000px 400px;
font-family:Tahoma, Geneva, sans-serif;
} 
#trik_atas {position:fixed;_position:absolute;bottom:0px; left:0;right:0;clip:inherit;z-index: 2;
_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
#float-left{position:fixed;_position:absolute;top:0px;float:left; margin-left:-500px;z-index:10;
clip:inherit;_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
#float-right{
position:fixed;_position:absolute;top:0px;float:right; margin-left:641px;z-index:10;
clip:inherit;_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
.atas {
	font-size: 24px;
}
.atas {
	color: #CCC;
}
.atase {
	font-size: 18px;
}
.aaas {
	font-size: 18px;
}
.adasd {
	font-size: 16px;
}
.atas .adasd {
	color: #CCC;
}
.cdd {
	color: #9C0;
	font-size: 24px;
}
.videoplace {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: normal;
	color: #F60;
	
}
.transparan1{opacity:1;filter:alpha(opacity=100); background:#<?=$warna[0];?>}
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="logo.png" alt="" width="<?=$isi1[1];?>" /></td>
  </tr>
  <tr>
    <td width="50%" align="right"style=""><img src="agenda.png" /></td>
    <td width="50%" align="left" style=""><img src="anggarandankeg.png"/></td>
  </tr>
  <tr>
  <td  align="center" valign="top" bgcolor="#66CCCC" style="padding-left:20px; padding-right:20px; padding-top:0px">
      <? //include "showvideo.php"; 
 include "jadwalbupati.php";
   ?></td>
    <td  align="center" valign="top" class="transparan1" bgcolor="#000" style="padding-left:20px; padding-right:20px; padding-top:0px"><? 
	include "anggaran.php";?>
    
   
    </td>
  </tr>
  <tr>
    <td colspan="2"><div id="trik_atas"><? include "tampilow.php";?></div></td>
    
  </tr>
</table>
<?
//include "koneksi.php";






?>