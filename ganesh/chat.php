<html>
	<head>
		<meta HTTP-EQUIV="Pragma" content="no-cache">
		<meta HTTP-EQUIV="Expires" content="-1" >
		<link rel="stylesheet" href="aa.css">
		<link href="a2.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div id="chathead" class="chathead">	
			</div>
		<div class="left">
			<div class="mem_name" style="background-color: cadetblue;">
				<div>
					<div id="chatboxtop"  class="chatboxtop" style="color:#080440;height:500px;
						background-color:#abefb6;
						background-image: url('t.jpg');
						background-repeat: no-repeat;
						background-attachment: fixed;
						background-size:100% 100%;
						margin-top:0px;
						height:460px;
						font-size:10px;">
					</div>
				</div>
				<div id="nonew" class="chatbox">
					<form action="message.php"  method="post">
					 <input type="text" name="message" autocomplete="off" placeholder="Type here to start your chat" required="" style="width:100%; height:100px;">
					 <!--  <input type="text" style="width:100%; height:100px;" class="form-control" placeholder="Type Here To Start Your Chat" name="group_name" required=""/>-->
					  <br>
					  <button type="submit" style="margin-left: 550px;width: 252px;"class="btn btn-success">Send</button>
					  
				
					</form>		
					<div id="mem">
					</div>
					<div class="admin" id="admin" style="margin-left:41%;padding:10px">
					</div>
				</div>
			</div>
		</div>
			<script > 
				var i;
				$(document).ready(function()
				{
					chathead();
					//updat();
					member();
					admin();
					var refInterval = window.setInterval('updat()', 1000);	
					i=0;
				});
				var updat=function sampleFun(){
					$.ajax({
						Type:"POST",
						url: "phpchat.php",
						success: function(result){
							$('#chatboxtop').html(result);
							console.log(11);
						},error:function(result){
							console.log(22);
						}
					});				
						$("#chatboxtop").scrollTop($("#chatboxtop")[0].scrollHeight);
				}
				var member=function mem(){
					$.ajax({
						url: "groupmembers.php",
						success: function(result){
							$('#mem').html(result);
							console.log(11);
						},error:function(result){
							console.log(22);
						}
					});				
				}
				var admin=function admin(){
					$.ajax({
						url: "admin.php",
						success: function(result){
							$('#admin').html(result);
							console.log(11);
						},error:function(result){
							console.log(22);
						}
					});				
				}
				var chathead=function head(){
					$.ajax({
						url: "chathead.php",
						success: function(result){
							$('#chathead').html(result);
							console.log(11);
						},error:function(result){
							console.log(22);
						}
					});				
				}
								
			</script>
	</body>
	
		
		
</html>
