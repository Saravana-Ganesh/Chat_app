<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
session_start();
$current_mail=$_SESSION['var'];
 foreach($_POST as $name => $table_name) 
	{
	 $_SESSION['var3']=$name;
	}
	echo $name;
	echo "<script>location.href='chat.php'</script>";
?>