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
					alert(result.message);
				}
			});
		}
		else
		{
			alert("Please fill all fields");
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
						alert(result.message);
					}

				});
			}
			else
			{
				alert("Fill the required field");
			}

	});
});