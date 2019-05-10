<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
	session_start();
	$current_mail=$_SESSION['var'];
	$username="select username from register where email='$current_mail'";
	$username=odbc_exec($connection,$username);
		if(odbc_fetch_row($username))
		{
			$name=odbc_result($username,"username");
			$_SESSION['current_username']=$name;
		}
	echo"<nav class='navbar navbar-expand-sm' style='background-color:#466bb7;border-radius:unset;'>
	  <form class='form-inline' action='/action_page.php'
	  style='margin-bottom:1.5px;margin-top:1.5px;margin-left:100px;'>
	  <img src='fb.png' alt='Girl in a jacket' style='width:50px;height:29px;'>

		<input class='form-control' type='text' placeholder='Search' style='width:500px;border-radius:unset;height:29px;'>
		<span class='glyphicon glyphicon-search'></span>
		<a href='aa.php'><button type='button' style='
		margin-right: 191px;
		margin-bottom:0;
		margin-top: 0;background-color:#466bb7;color:white;float:left;margin-left:450px;
		border:none;'>$name</button></a>
		</input>
	  </form>
	</nav>
	<br>";
?>