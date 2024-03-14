<form name="frmlogin" method="post" enctype="multipart/form-data" action="login.php?aksi=login">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input name="username" type="text" size="25"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input name="password" type="password" size="25"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Login" name="submit"></td>
  </tr>
</table>
</form>
<?
if(!empty($_POST['username']) && !empty($_POST['password'])){
	
echo "silahkan masukkan username dan password anda";	
}



?>