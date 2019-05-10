$(document).ready(function()
	{
	$('#submit').click(function(e) 
		{
			var email = $('#email').val();
			var p1=$('#psw1').val();
			var p2=$('#psw2').val();
			// Initializing Variables With Regular Expressions
			var name_regex = /^[a-zA-Z]+$/;
			var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			var add_regex = /^[0-9a-zA-Z]+$/;
			var zip_regex = /^[0-9]+$/;
			var phoneCheck=new RegExp('[0-9]{10}');		
			//Validating Email Field.
			if (!email.match(email_regex) || email.length == 0) 
			{
				$('#p3').text("* Error in ur EmailId*"); // This Segment Displays The Validation Rule For Email
				$("#email").focus();
				return false;
			}
			//Validating password.
		    else if(!p1.match(p2))
			{
				console.log(p1);
				$('#p20').text("*Password didn't match*");//This displays password are not matched.
				$("#psw1").focus();
				return false;
			}
			else 
			{
				alert("Form Submitted Successfuly!");
				return true;
			}
			});	
	});
	