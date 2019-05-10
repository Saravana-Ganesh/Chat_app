<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
session_start();
$current_mail=$_SESSION['var'];
foreach($_POST as $name => $umail) 
	{ 
	}
	$name=str_replace("_",".",$name);
	echo $name;
	$_SESSION['memname']=$name;
	echo "<script>location.href='addmember.php'</script>";
	
?>
