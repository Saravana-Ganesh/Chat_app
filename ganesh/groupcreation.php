<?php
	$connection = odbc_connect('Test2','dinesh','ganesh');
	$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
	session_start();
	if(is_resource($connection))
	{
		echo"HAIII BOSS...YOUR CONNECTION ESTABLISHED in the message";
		echo "<br>";
		
	}
	$group_name=$_POST['group_name'];
	$_SESSION['var3']=$group_name;
	//$mailname=$_POST['mailname'];
	echo"The group name is";
	echo $group_name;
	//echo $mailname;
	$newgroup="create table $group_name
					(
						email_id varchar(100) foreign key references register(email),
						message Text,
						Dat VARCHAR(50),
						ID INT
					)";
	if(odbc_exec($connection,$newgroup))
	{
		echo "<script>alert('Group Created Successfully');</script>";
		$admin_email=$_SESSION['var'];
		$admin_group="INSERT INTO $group_name(EMAIL_ID,ID) VALUES ('".$admin_email."',1)";
		odbc_exec($connection,$admin_group);		
		echo"<script>location.href='addmemhtml.php'</script>";		
	}
	else
	{
		echo "<script>alert('Group Name already exists..try new one');</script>";
		echo"<script>location.href='groupcreation.html'</script>";
	}
?>