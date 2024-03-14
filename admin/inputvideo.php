<form name="frmupl" method="post" action="index.php?menu=inputvideo.php&aksi=upload" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="83%">&nbsp;</td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" size="30" onblur='if (this.value == &quot;&quot;) {this.value = &quot;Input judul&quot;;}' onfocus='if (this.value == &quot;Input judul&quot;) {this.value =&quot;&quot;;}' value='Input judul'></td>
  </tr>
  <tr>
    <td>Durasi</td>
    <td>:</td>
    <td><input type="text" name="durasi" size="30" id="durasi" />
      &nbsp;&nbsp;&nbsp; *masukkan dalam detik</td>
  </tr>
  <tr>
    <td>Upload Video</td>
    <td>:</td>
    <td><input type="file" name="video" id="video">
    *masukkan file berformat FLV (Max: 999 MB)</td>
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
	//echo "Nama: $_POST[judul], gambar = $video_name, ukuran=$gambar_size";
	
	if(!empty($video)){
	copy($video,"../video/$video_name");
	$inputgbr=mysql_query("insert into video (judul, video, durasi) values ('$_POST[judul]','$video_name','$_POST[durasi]')");
	if($inputgbr) echo "sukses";
	}
	else echo "Harap masukkan file video";
	
}



?>
