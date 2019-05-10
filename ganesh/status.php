<?php
$connection = odbc_connect('Test2','dinesh','ganesh');
session_start();
date_default_timezone_set('Asia/Kolkata');
$datetime=date("Y-m-d-l g:i:sa");
$current_mail=$_SESSION['var'];
$status="INSERT INTO status values('$current_mail','$_POST[status]','$datetime',0,getdate())";	
$status=odbc_exec($connection,$status);
echo "<script>location.href='fb.html'</script>";
?>