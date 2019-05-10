<?php
  $connection = odbc_connect('Test2','dinesh','ganesh');
  $dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
  session_start();
  if(is_resource($connection))
	{
	}
		session_start();
		$qry="INSERT INTO register values('".$_POST[username]."','".$_POST[email]."','".$_POST[psw]."')";
		if(odbc_exec($connection,$qry))
		{
			echo"<script>alert('Account created successfully')</script>";		
			echo "<script>location.href='signin.html'</script>";
		}
		else
		{
			echo"<script>alert('Account already exists')</script>";
			echo "<script>location.href='po.html'</script>";
		}
			
?>
		