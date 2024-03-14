<?
session_start();
if(session_is_registered("user")&&session_is_registered("pass")){
	
?>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.tablesatu {
	padding-left: 30px;
	padding-right: 20px;
	padding-top: 5px;
	padding-bottom: 5px;
}
a.tabel:link{
		color:#F60;
		text-decoration:none;
}
a.tabel:hover{
		color: #FC0;
				text-decoration:underline;

}
a.tabel:visited{
		color:#F60;
				text-decoration:none;

}
a.tabel:active{
		color:#F60;
				text-decoration:none;

}
a.ngedit:link{
		color:#F60;
		text-decoration:none;
}
a.ngedit:hover{
		color: #666;
				text-decoration:underline;

}
a.ngedit:visited{
		color:#F60;
				text-decoration:none;

}
a.ngedit:active{
		color:#F60;
				text-decoration:none;

}


</style>
<?
if($_GET['menu']=="inputlow.php") $anu="Input Running Text";
if($_GET['menu']=="inputanggaran.php") $anu="Input Anggaran dan Kegiatan";
if($_GET['menu']=="showanggaran.php") $anu="Edit Anggaran dan Kegiatan";
if($_GET['menu']=="showlow.php") $anu="Edit Running Text";
if($_GET['menu']=="inputpeng.php") $anu="Input Pengumuman";
if($_GET['menu']=="editlow.php") $anu="Edit Lowongan Kerja";
if($_GET['menu']=="inputbanner.php") $anu="Input Banner Informasi";
if($_GET['menu']=="inputvideo.php") $anu="Input video";
if($_GET['menu']=="showvideo.php") $anu="Edit video";
if($_GET['menu']=="inputagenda.php") $anu="Input Agenda";
if($_GET['menu']=="showagenda.php") $anu="Edit Agenda";
if($_GET['menu']=="showbanner.php") $anu="Edit Banner Informasi";
if($_GET['menu']=="ubahgbrbg.php") $anu="Ubah Gambar Background Utama";
if($_GET['menu']=="ubahbg.php") $anu="Ubah Warna Background Anggaran dan Kegiatan";
?>

<title>Admin Page</title>

<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="21%">&nbsp;</td>
    <td width="62%" align="center" valign="middle"><img src="../img/admintop.jpg" width="300" height="100" /></td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><img src="../img/admin.jpg" width="" height="" /></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" width="10" height="10" style="alignment-adjust: middle; " /><a href="index.php?menu=inputlow.php" class="tabel"> Input Informasi (Running text)</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" width="10" height="10" style="alignment-adjust: middle; " /><a href="index.php?menu=showlow.php" class="tabel"> Edit Running Text</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /><a href="index.php?menu=inputteks.php" class="tabel"> Edit Ukuran Running Text</a></td>
      </tr>
     <!-- <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /><a href="index.php?menu=inputteksberita.php" class="tabel"> Edit Ukuran Running Text Berita</a></td>
      </tr>-->
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /><a href="index.php?menu=editlebar.php" class="tabel"> Edit Ukuran Lebar banner</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=inputagenda.php" class="tabel"> Input Agenda </a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=showagenda.php" class="tabel"> Edit Agenda </a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=inputbanner.php" class="tabel"> Input Banner Kanan</a></td>
      
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=showbanner.php" class="tabel"> Edit Banner Kanan</a></td>
      </tr></tr> 
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=inputanggaran.php" class="tabel"> Input Anggaran Kegiatan</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=showanggaran.php" class="tabel"> Edit Anggaran Kegiatan</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=inputpeng.php" class="tabel"> Input Pengumuman</a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=ubahgbrbg.php" class="tabel"> Ubah gambar background </a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" alt="" width="10" height="10" style="alignment-adjust: middle; " /> <a href="index.php?menu=ubahbg.php" class="tabel"> Ubah warna background </a></td>
      </tr>
      <tr>
        <td class="tablesatu"><img src="../img/left.JPG" width="10" height="10" style="alignment-adjust: middle; " /> <a href="logout.php" class="tabel"> Logout</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td valign="top" style="padding-top:30px; padding-bottom:30px; padding-left:30px; padding-right:30px"><? 
	echo "<h2>$anu</h2>";
	if(!empty($menu))
	include $menu;
	else { echo "<h2>Selamat datang admin, gunakan menu di sebelah kiri untuk administrasi</h2>";}
	?></td>
    <td><a href="../index.php" target="_blank" class="ngedit">Preview</a> [Klik], Press F11 to Full Screen</td>
  </tr>
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
    <td align="center" bgcolor="#000000" style="padding-top:20px; padding-bottom:20px"><font color="#999999" face="Arial, Gadget, sans-serif" size="2">Copyright &copy;2016 Pemkab Purworejo - <a href="http://www.raseco.web.id">raseco</a></font></td>
    <td bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
<? }

else{
	echo " <div style='border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px' align='center' > ";
	echo "<h2>Anda tidak diperkenankan melihat halaman ini, silahkan login terlebih dahulu!</h2><br><a href=login.php>Klik disini untuk LOGIN</a></div><br>";
	
}
 ?>
