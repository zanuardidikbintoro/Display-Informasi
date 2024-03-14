<?
session_start();
session_unregister("user");
session_unregister("pass");
//header("location:index.php");
echo "Logout success!";
 echo("<meta http-equiv=\"refresh\" content=\"2;url=index.php\">");






?>