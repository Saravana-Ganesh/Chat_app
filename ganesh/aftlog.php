<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height:AUTO;}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body style="background-color: antiquewhite;">
<div class="container-fluid"; style="margin-bottom:310px;margin-left:20%">
  <div class="row content">
    <div class="col-sm-9">
	  <div id='gochat' >
		<h2>Go for chat in your existing group</h2>
	  </div>
      <hr>
    </div>
	
  </div>
</div>
<footer class="container-fluid">
  <p>Felling lucky......</p>
</footer>
<script>
	$(document).ready(function()
	{
		currentgroup();
	});
		var currentgroup=function mem(){
					$.ajax({
						url: "gochat.php",
						success: function(result){
							$('#gochat').html(result);
							console.log(11);
						},error:function(result){
							console.log(22);
						}
					});				
				}
								
		
</script>

</body>
</html>
