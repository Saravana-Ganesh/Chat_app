<?php	
	$connection = odbc_connect('Test2','dinesh','ganesh');
	$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
	session_start();
	$current_mail=$_SESSION['var'];
	$current_group=$_SESSION['var3'];
	$allmsg= "SELECT username,message,DAT FROM register INNER JOIN $current_group
				ON register.email = $current_group.email_id 
				where message is not null and dat is not null order by dat";
	$all_msg=odbc_exec($connection,$allmsg);
	//echo  'saravana';
	//odbc_result_all($all_msg);
	/*echo "<table><tr>";
	echo "<th>User_Name</th><th>Message</th><th>Date</th></tr>";*/
	while (odbc_fetch_row($all_msg))
	{
		$User_Name=odbc_result($all_msg,"username");
		$Message=odbc_result($all_msg,"message");
		$Date=odbc_result($all_msg,"DAT");
		$align="select email from register where username='$User_Name' and email='$current_mail'";
		//Right align current user............
		$align=odbc_exec($connection,$align);
		$c_mail='ww';
		if(odbc_fetch_row($align))
		{
			$c_mail=odbc_result($align,"email");
		}
		if($current_mail==$c_mail)
		{
			echo"
			<div class='content container-fluid bootstrap snippets'>
				<div class='col-sm-9 col-xs-12 chat' style='overflow: hidden; outline: none;' tabindex='5001'>
					<div class='col-inside-lg decor-default'>
						<div class='chat-body'>
							<div class='answer right'>
								<div class='avatar' style='margin-right:7px';>
									<img src='https://bootdey.com/img/Content/avatar/avatar2.png' alt='User name'>
								</div>
								<div class='text'>$Message </div>
								<div class='time'>$Date</div>
							</div>
						</div>
					</div>
				</div>
			</div>";
				
			/*echo "<h2>$Message </h2>";
			echo "<p>$Date</p>";
			echo "</div>";*/
		}
		else
		{
			echo"
			<div class='content container-fluid bootstrap snippets'>
				<div class='col-sm-9 col-xs-12 chat' style='overflow: hidden; outline: none;' tabindex='5001'>
					<div class='col-inside-lg decor-default'>
						<div class='chat-body'>
							<div class='answer left'>
								<div class='avatar' style='margin-left:65px;'>
									<img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='User name'>
								</div>
								<div class='answer left'>
										<div class='name'>$User_Name</div>
										<div class='text'>$Message</div>	
										<div class='time'>$Date</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>";
		}
	}
	
?>


