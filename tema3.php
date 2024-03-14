<title>AGENDA BUPATI PURWOREJO</title>
<meta http-equiv="refresh" content="3600" />
<?
include "koneksi.php";
$ambilw=mysql_query("select warna from warnabg where id=1");
$warna=mysql_fetch_array($ambilw);
$ambilwbg=mysql_query("select warna from warnabg where id=2");
$bg=mysql_fetch_array($ambilwbg);
?>
<style type="text/css">
body
{
background-image: url('bg/<?=$bg[0];?>');
background-repeat: repeat;
background-color: #000;
background-size: auto;
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
.transparan1{opacity:0.7;filter:alpha(opacity=70); background:#<?=$warna[0];?>}
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="73%" align="center"><img src="img/hider.png" width="600" height="100" />
    <? include "pengumuman.php";?></td>
    <td width="24%" align="left" style="padding-left:80px">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top" class="transparan1"  >
      <? //include "showvideo.php"; 
   include "jadwalnikah.php";
   ?>      <? //include "showbanner.php";?></td>
  </tr>
  <tr>
    <td colspan="3"><div id="trik_atas"><? include "tampilow.php";?></div></td>
    
  </tr>
</table>
<?
//include "koneksi.php";






?>