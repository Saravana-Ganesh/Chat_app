<?php
	session_start();
	$current_group=$_SESSION['var3'];
	echo"
	<div class='head' style='background-color:#445d8a'>
		<a href='aftlog.php'><input type='button' value='Go To Home'style='background-color:#0b508c;
    color: wheat;float:left;clear:float;width: 119px;padding:10px;'class='btn btn-default'></button></a>		
		<h3 style='float:left;padding-top: 6px;color:#fffefe;margin-left:37%'>$current_group</h3>
		<a href='signout.php'><input type='button'style='background-color:#966ca7;
    color: lightgoldenrodyellow;float:right;padding: 10px;width: 112px;' value='signout' name='signout' class='btn btn-default'></a></button>
	</div>
	";
?>		