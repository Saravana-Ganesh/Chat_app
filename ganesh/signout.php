<?php
include('signin.php');
session_start();
$mail=$_SESSION['var'];
$rem_online="delete from online where email_id='$mail'";
odbc_exec($connection,$rem_online);
if(isset($_SESSION['var']))
{
	unset($_SESSION['var']);
	session_destroy();
	echo "<script>location.href='signin.html'</script>";
}
else
{
	unset($_SESSION['var']);
	session_destroy();
	echo "<script>location.href='signin.html'</script>";
}
?>



