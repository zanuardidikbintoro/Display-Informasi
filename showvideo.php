<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<?
include "koneksi.php";
$vid=mysql_query("select * from video order by rand() limit 1");
$hasil=mysql_fetch_array($vid);

?>

<meta http-equiv="refresh" content="<?=$hasil[3];?>" />
<body>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="900" height="506" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_1&amp;streamName=video/<?=$hasil[2];?>&amp;autoPlay=true&amp;autoRewind=true" />
  <param name="swfversion" value="8,0,0,0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="../Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="900" height="506">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_1&amp;streamName=video/<?=$hasil[2];?>&amp;autoPlay=true&amp;autoRewind=true" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="../Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>



</body>
</html>