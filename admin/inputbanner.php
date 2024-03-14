<form name="frmupl" method="post" action="index.php?menu=inputbanner.php&aksi=upload" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="83%">&nbsp;</td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" size="30"></td>
  </tr>
  <tr>
    <td>Upload Banner</td>
    <td>:</td>
    <td><input type="file" name="gambar"> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Upload" name="upload" />
    <input type="reset" value="Reset" name="reset" />
    </td>
  </tr>
</table>
</form>
<?
include "../koneksi.php";
if($_GET['aksi']=="upload"){
	//echo "Nama: $_POST[judul], gambar = $gambar_name, ukuran=$gambar_size";
	if(!empty($gambar)){
	copy($gambar,"../banner/$gambar_name");
	$inputgbr=mysql_query("insert into gambar (judul, gambar, size) values ('$_POST[judul]','$gambar_name','$gambar_size')");
	if($inputgbr) echo "sukses";
	}
	else echo "Harap masukkan file gambar";
	
}



?>
