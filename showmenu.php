<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<?php require_once('Connections/koneksiku.php'); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="28%">Pilih Kategori Menu </td>
    <td width="39%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td>
	   <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
       <option>--Pilih Kelas--</option>
<?
    
	$sql=mysql_query("select * from kategori");
	while($kelas=mysql_fetch_array($sql)){
		if($kelas[0]==$idkat){$cek="selected";} else{$cek="";}
	?>
   <option value="home.php?menu=editmenu.php&id=<?=$kelas[0];?>"><?=$kelas[1];?></option> 
    <?	
	}
	
	?></select>
	
	     
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>