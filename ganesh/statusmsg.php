<?php
	$connection = odbc_connect('Test2','dinesh','ganesh');
	session_start();
	$current_mail=$_SESSION['var'];
	$status_message= "SELECT username,status_message,DATE FROM register INNER JOIN status
				ON register.email = status.email_id 
				where status_message is not null and date is not null order by ord DESC";
	$status_message=odbc_exec($connection,$status_message);
	while (odbc_fetch_row($status_message))
	{
		
		$User_Name=odbc_result($status_message,"username");
		$Message=odbc_result($status_message,"status_message");
		$Date=odbc_result($status_message,"DATE");
		$mailing=odbc_result($status_message,"email_id");
		$_SESSION['mailing']=$User_Name;
		echo"<div style='background-color:white'>";
		echo '<h5 style="color:#466bb7">';
		echo $User_Name;
		echo '</h5>';
		echo $Date;
		echo"<br>";
		echo "<p style='font-size:24px;'>";
		echo $Message;
		echo "</p>";
		echo"</div>";
		echo'<button onclick="like()" class="fb-like js-fb-like" style="width: 70px;
			margin-top: -15px;
			margin-bottom: 3px;height: 30px;">
			Like
		</button>
		<script>
				function like()
				{
					location.href="like.php";
				}
		</script>';
	}
?>