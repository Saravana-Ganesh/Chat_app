<?php
	$connection = odbc_connect('Test2','dinesh','ganesh');
	$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
	session_start();
	if(is_resource($connection))
	{
		echo"HAIII BOSS...YOUR CONNECTION ESTABLISHED in the message";
		echo "<br>";
		//$member_exists="
		session_start();
		foreach($_POST as $name => $umail) 
			{ 
			}
		$name=str_replace("_",".",$name);
		$group_nam=$_SESSION['var3'];
		$admin_email=$_SESSION['var'];
		echo $group_nam;
		echo $u_mail;
		$member="INSERT INTO $group_nam(EMAIL_ID) VALUES ('$name')";
		if(odbc_exec($connection,$member))
		{
			echo "<script>alert('Member Added Successfully');</script>";
			echo"<script>location.href='addmemhtml.php'</script>";
		}
		else
		{
			echo"<script>alert('Member does not added ');</script>";
			echo"<script>location.href='addmemhtml.php'</script>";
		}
	}
?>