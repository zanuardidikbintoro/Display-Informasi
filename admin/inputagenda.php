<?php 
session_start();
require_once('../Connections/konek.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO agenda (id, hari, judul, keterangan, lokasi, waktu) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['hari'], "text"),
                       GetSQLValueString($_POST['judul'], "text"),
                       GetSQLValueString($_POST['keterangan'], "text"),
                       GetSQLValueString($_POST['lokasi'], "text"),
                       GetSQLValueString($_POST['waktu'], "text"));

  mysql_select_db($database_konek, $konek);
  $Result1 = mysql_query($insertSQL, $konek) or die(mysql_error());
if($Result1){
  $insertGoTo = "index.php?menu=inputagenda.php&aksi=sukses";
 echo("<meta http-equiv=\"refresh\" content=\"0;url=$insertGoTo\">");
}
}

mysql_select_db($database_konek, $konek);
$query_Recordset1 = "SELECT * FROM agenda";
$Recordset1 = mysql_query($query_Recordset1, $konek) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table class="table table-striped table-advance table-hover">
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Hari</td>
      <td align="left"><input type="text" name="hari" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Jam</td>
      <td align="left"><input type="text" name="judul" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Nama</td>
      <td align="left"><textarea name="keterangan" rows="5" cols="50"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Tempat</td>
      <td align="left"><input type="text" name="lokasi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Petugas</td>
      <td align="left"><input type="text" name="waktu" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Tambah Data" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
//mysql_free_result($Recordset1);
if($aksi=="sukses")echo "Sukses menambah data";
?>
