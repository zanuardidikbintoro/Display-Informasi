<?
include "../koneksi.php";
$qbg=mysql_query("select warna from warnabg where id=2");
$bg=mysql_fetch_array($qbg);
$my_image = array_values(getimagesize('../bg/'.$bg[0]));
 
  list($lebar, $tinggi, $jenis, $attr) = $my_image;

//  print_r($my_image);

 // echo 'Attribute: '.$attr.'<br />';
  
 // echo "Jenis: $jenis <br>";
?>

Gambar background sekarang (<? echo "$bg[0] "; echo "ukuran: $lebar x $tinggi pixel";?>) :<br><br>
<img src="../bg/<?=$bg[0];?>" width="400"><br>

<form action="index.php?menu=ubahgbrbg.php&aksi=kirim" method="post" enctype="multipart/form-data" name="gbr" >

  <p>
 Untuk mengubah gambar, masukkkan file gambar berformat jpg/png/gif :<br> <input name="gambar" type="file">
  </p>
  
    <input type="submit" value="Ubah Background depan" name="submit">
 
</form>
<?

include "../koneksi.php";
if($aksi=="kirim"){
echo "Gambarnya adalah $gambar_name";	
	if(!empty($gambar)){
	copy($gambar,"../bg/$gambar_name");
	$inputgbr=mysql_query("update warnabg set warna='$gambar_name' where id=2");
	if($inputgbr)  echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=ubahgbrbg.php\">");
	}
	else echo "Harap masukkan file gambar";
	
	
}

?>