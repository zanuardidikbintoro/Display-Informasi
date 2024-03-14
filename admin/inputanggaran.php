<?php require_once('../Connections/konek.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO anggaran (id, kegiatan, jumlah, pelaksanaan, `output`, realisasi) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['kegiatan'], "text"),
                       GetSQLValueString($_POST['jumlah'], "text"),
                       GetSQLValueString($_POST['pelaksanaan'], "text"),
                       GetSQLValueString($_POST['output'], "text"),
                       GetSQLValueString($_POST['realisasi'], "text"));

  mysql_select_db($database_konek, $konek);
  $Result1 = mysql_query($insertSQL, $konek) or die(mysql_error());

  $insertGoTo = "lihatanggaran.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_konek, $konek);
$query_Recordset1 = "SELECT * FROM anggaran";
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
      <td width="30%" align="left" valign="top" nowrap="nowrap">Nama Kegiatan:</td>
      <td width="70%"><textarea name="kegiatan" cols="50" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Jumlah Anggaran (inputkan Rp.xx.xxx,-):</td>
      <td><input type="text" name="jumlah" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Pelaksanaan:</td>
      <td><input type="text" name="pelaksanaan" value="" size="45" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Output:</td>
      <td><input type="text" name="output" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">Realisasi (%):</td>
      <td><input type="text" name="realisasi" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert" /></td>
    </tr>
  </table>
  <input type="hidden" name="id" value="" />
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
