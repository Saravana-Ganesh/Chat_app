<?php
	$connection = odbc_connect('Test2','dinesh','ganesh');
	//$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
	session_start();
	date_default_timezone_set('Asia/Kolkata');
	$datetime=date("Y-m-d-l g:i:sa");
	$current_mail=$_SESSION['var'];
	echo $current_mail;
	$current_group=$_SESSION['var3'];
	$message="INSERT INTO $current_group values('$current_mail','$_POST[message]','$datetime',NULL)";	
	$msg=odbc_exec($connection,$message);
	echo "<script>location.href='chat.php'</script>";
?>