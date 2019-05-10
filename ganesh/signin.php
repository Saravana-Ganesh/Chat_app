<?php
	    $connection = odbc_connect('Test2','dinesh','ganesh');
		session_start();
		$a="select * from register where email='".$_POST['username']."' and psw='".$_POST['password']."'";
		$a=odbc_exec($connection,$a);$i=0;
		while(odbc_fetch_row($a))
		{
			$i=$i+1;
			$mail=$_POST['username'];
			$_SESSION['var']=$mail;
		}
		if(($i!=1) && (!isset($_SESSION['var'])))
		{
			echo "<script>alert('Incorrect Username or Password')</script>";
			echo "<script>location.href='signin.html'</script>"; 
		}
		elseif(($i==1)&&(isset($_SESSION['var'])))
		{
			$online="insert into online values('$mail')";
			odbc_exec($connection,$online);
			echo"<script>location.href='fb.html'</script>";
		}		
?>
