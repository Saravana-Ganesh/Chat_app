<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
session_start();
	$current_group=$_SESSION['var3'];
	$current_mail=$_SESSION['var'];
   $grpmem="select distinct username,email from register inner join $current_group on register.email=$current_group.email_id";
   $memgrp=odbc_exec($connection,$grpmem);
   $user_name=$_SESSION['current_username'];
   echo "<h2 style='text-align:center'><u>Members in Group</u></h2>";
   $i=1;
   //$admin="select distinct username from register inner join $current_group on register.email=$current_group.email_id where id=1";
   //$admin=odbc_exec($connection,$admin);
  /*while($cu_row=odbc_fetch_array($admin))
   {
	   $admin_name=$cu_row['username'];
   }*/
   
   	while ($currentrow = odbc_fetch_array($memgrp))
	{
		$o=0;
		$ad=0;
		$u_name=$currentrow['username'];
		$u_mail1=$currentrow['email'];
		$admin="select distinct email_id from $current_group where email_id='$u_mail1' and id=1";
		$admin=odbc_exec($connection,$admin);
		while($admi=odbc_fetch_array($admin))
		{
			$admi=$admi['email_id'];
			$ad=$ad+1;
			if($admi==$current_mail)
			{
				$you="admin";
			}
		}
		$on_line=" select email_id from online where email_id='$u_mail1'";
		$on_line=odbc_exec($connection,$on_line);
		while($onl=odbc_fetch_array($on_line))
		{
			$u_mail2=$onl['email_id'];
			$o=$o+1;
		}	
		if(($ad==1) AND ($u_name!=$user_name))
		{
			echo "<h2 style='text-align:center;color:red'>$u_name";
			echo " (ADMIN)";
			$i=$i+1;
			if($o==1)
			{
				echo" (active now)";
				echo"</h2>";
			}
			else
			{
				echo"</h2>";
			}
			
		}
		elseif($u_name!=$user_name)
		{
			echo "<h2 style='text-align:center'>$u_name";
			if($o==1)
			{
				echo" (active now)";
				echo"</h2>";
			}
			else
			{
				echo"</h2>";
			}
			$i=$i+1;
		}
	}
	if($you=="admin")
	{
		echo "<h2 style='text-align:center;color:red'>You (ADMIN)</h2>";
		echo "<h2 style='text-align:center'>Totaly $i members are in $current_group </h2>";
	}
	else
	{
		echo "<h2 style='text-align:center'>You</h2>";
		echo "<h2 style='text-align:center'>Totaly $i members are in $current_group</h2>";	
	}

?>