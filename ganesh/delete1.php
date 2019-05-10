<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
$dsn = "Driver={SQL Server};Server=10.12.121.137;Database=First;";
session_start();
$current_group=$_SESSION['var3'];
		$delete="drop table $current_group";
		$d=odbc_exec($connection,$delete);
		echo"<script>location.href='aftlog.php';</script>";
?>