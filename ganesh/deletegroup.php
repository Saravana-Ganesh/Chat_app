<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
session_start();
echo "<script>
if (confirm('Are you sure you want to delete the group'))
	{	
		location.href='delete1.php';
	} 
else
	{
		location.href='chat.php';
	}
</script>";
?>