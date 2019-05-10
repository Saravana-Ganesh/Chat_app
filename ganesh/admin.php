<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
session_start();
$current_mail=$_SESSION['var'];
$current_group=$_SESSION['var3'];
$qry="SELECT * FROM $current_group WHERE ID=1 AND EMAIL_ID='$current_mail'";
$qry=odbc_exec($connection,$qry);
$i=0;
while(odbc_fetch_row($qry))
{
	$i=i+1;
}
if($i==1)
{
	echo"<a href='addmemhtml.php' style='padding:10px'><button type='button' class='btn btn-success'>Add People</button></a>";
	echo"<a href='deletegroup.php'><button type='button' class='btn btn-danger'>Delete Group</button></a>";
}
?>