<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
session_start();
	$mailing=$_SESSION['mailing'];
	echo $mailing;
	//echo "<script>location.href='fb.html'</script>";
?>