$(document).ready(function(){
	$("#apitest").on('click',function(){
//alert("jjjjj");
	var username=$("#username").val();
	var fname=$("#firstname").val();
	var lname=$("#lastname").val();
	var email=$("#email").val();
	var phone=$("#phone").val();
	var pass=$("#password").val();


		if(username!="" && fname!="" && lname!="" && email!="" && phone!="" && pass!="")
		{
			$.ajax({
				type:"POST",
				url:"http://localhost/myapi/create_user.php",
				data:"username="+username+"&firstname="+fname+"&lastname="+lname+"&email="+email+
				"&phone="+phone+"&password="+pass,
				dataType:"json",
				success:function(result){
					//alert(result);
					if (result.status==200){
						//alert(result.message);
						toastr.success(result.message);
						setTimeout(function()
						{
							window.location.href="verify_view.php?e="+btoa(email); },3000);
					
					}
					else
					{
						toastr.error(result.message);
						//alert(result.message);
					}
					
				}
			});
		}
		else
		{
			toastr.error("Please fill all fields");
		}
	});
	

	$("#login").on('click',function(){
		var email=$("#email").val();
		var pass=$("#password").val();
			if(email!="" && pass!="")
			{
				$.ajax({
					type:"POST",
					url:"http://localhost/myapi/login.php",
					data:"email="+email+"&password="+pass,
					dataType:"json",
					success:function(result){
						toastr.success(result.message);
					}

				});
			}
			else
			{
				toastr.error("Fill the required field");
			}

	});

	$("#verify").on('click',function(){
		var email=$("#email").val();
		var otp=$("#otp").val();
			
				$.ajax({
					type:"POST",
					url:"http://localhost/myapi/verify_email.php",
					data:"email="+email+"&otp="+otp,
					dataType:"json",
					success:function(result){
						toastr.success(result.message);
					}

				});

	});

	
});

