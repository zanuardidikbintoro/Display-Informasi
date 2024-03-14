<form name="frmlogin" method="post" enctype="multipart/form-data" action="login.php?aksi=login">
<table width="100%" border="0" cellspacing="0" cellpadding="3" style="border-color:#C60; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" align='center' >
  <tr>
    <td width="18%">Username</td>
    <td width="1%">:</td>
    <td width="81%"><input name="username" type="text" size="25">
    *harus diisi</td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input name="password" type="password" size="25"> 
    *harus diisi</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Login" name="submit" style="background-color:#F90; color:#FFF"></td>
  </tr>
</table>
</form>
<?
if($_GET['aksi']=="login"){
if(empty($_POST['username']) && empty($_POST['password'])){
	
echo "Kesalahan: silahkan masukkan username dan password anda<br>";	
}
if($_POST['username']=="admin" && $_POST['password']=="purworejo")
{
session_start();
//echo "Selamat anda berhasil masuk";
$user=$_POST['username'];
$pass=$_POST['password'];
$username=session_register('user');
$password=session_register('pass');
echo "Username anda ".$_SESSION['user'];
echo "Password anda ".$_SESSION['pass'];	
echo "Login success, Loading....";
 echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php\">");
//header("location:index.php");	
}
else {
echo "Username dan password anda salah";	
}

}
?>