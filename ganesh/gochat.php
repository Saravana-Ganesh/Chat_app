<?php
		$connection = odbc_connect('Test2','dinesh','ganesh');
		session_start();
		$fk_tables="SELECT OBJECT_NAME(fk.parent_object_id) AS Table_Name
		FROM sys.foreign_keys fk	
			INNER JOIN sys.objects o ON fk.referenced_object_id = o.object_id 
				ORDER BY Table_Name";
		$rows=odbc_exec($connection,$fk_tables); 
		$current_mail=$_SESSION['var'];
		$u_name="select username from register where email='$current_mail'";
		$u_name=odbc_exec($connection,$u_name);
		if(odbc_fetch_row($u_name))
		{
			session_start();
			$name=odbc_result($u_name,"username");
			echo"<h3 style='color:red'><center>HAIII ";
			echo $name;echo".........";"</center></h3>";
			$_SESSION['current_username']=$name;
			echo"
		<div class='container' style='margin-left:-194px'>               
		  <h3><a href='groupcreation.html'><button type='button' class='btn btn-success'> New group</button></a>
			<a href='signout.php'><input type='button' value='signout' name='signout' class='btn btn-primary'></a>
		 </h3>
		</div>";
		}
		else
		{
			echo"<h3 style='color:red'>You are not logged in....Please login</h3>";
			echo"<a href='signin.html'><input type='button' value='signin' name='signin' class='btn btn-primary'></a>";
		}
		echo"<br>";
		$j=0;
		$k;
		while ($cur_row = odbc_fetch_array($rows))
		{
			$table_name=$cur_row['Table_Name'];
			$select="select email_id from $table_name where email_id='".$current_mail."'";
			$count_rows="select count(*) as count from $table_name where email_id='".$current_mail."'";
			if($count_rows=odbc_exec($connection,$count_rows))
			{	$i=0;
				while($crow=odbc_fetch_array($count_rows))
				{
					$i=($crow['count']);
					break;
				}
			}
			else
			{
				echo "query not executed";
			}
			if(($i>0)&&(j==0)&&($k!=5))
			{
				echo"You are partcipants in the following group";
				$j=7;
				$k=5;
			}
			if(odbc_exec($connection,$select)AND $i>0)
			{	
				echo "<form action='groupchat.php' method='POST'>
				<button type='submit' style='width:100px';  class='btn btn-info' name='$table_name'>$table_name</button>
				</form>";
				echo"<hr>";
			}
		}
		if(($i==0)&&($k!=5))
				echo"<h3 style='color:red'>You are not participant in any group</h3>";
		
	?>
	