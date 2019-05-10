<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
	$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
	session_start();
	echo"<h2 style='color:red;text-align:center'>Click to Add People In Group</h2>";
	echo"<hr>";
	//Current mail Id and current group name are get by session variables.............
	$current_mail=$_SESSION['var'];
	$current_group=$_SESSION['var3'];
	//The below query selects the people who are not in group..........
	$a="select email from register where email not in (select email_id from $current_group)";
	$a=odbc_exec($connection,$a);
	while ($currentrow = odbc_fetch_array($a))
	{
		$umail=$currentrow['email'];
		echo "<form action='addmember.php' style='margin-left:440px' method='POST'>
				<button type='submit' style='width:250px';  class='btn btn-success' name='$umail'>$umail </button>
			</form>";
				echo"<br>";
	}
?>
