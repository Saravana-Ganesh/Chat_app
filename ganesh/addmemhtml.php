<!DOCTYPE html>
<html lang="en">
<head>
  <title>WELCOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style='background-color:#dec39294';>
<?php
session_start();
$group_nam=$_SESSION['var3'];
echo"<h1 style='text-align:center;color:red';>Welcome to group $group_nam</h1>";
?>
<div class="container">
	<div class="button_align" style="margin-left:40%; padding:10px">
	   <a href='chat.php'><button type='button'  class="btn btn-info">Goto Chat</button></a>
	   <a href='signout.php'><input type='button' value='signout' name='signout' class="btn btn-primary"></a>
   </div>
  <div id="friendname">
  </div>
</div>
	<script>
	$(document).ready(function()
				{
					grpmember();
				});
	var grpmember=function grpmem(){
						$.ajax({
							url: "nogrp.php",
							success: function(result){
								$('#friendname').html(result);
								console.log(11);
							},error:function(result){
								console.log(22);
							}
						});				
					}
	</script>
</body>


</html>
