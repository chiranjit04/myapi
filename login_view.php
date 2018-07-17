<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Login Form</title>
<link rel="stylesheet" href="css/boot.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="apijs/bootstrap.js"></script>
<link rel="stylesheet" href="css/body.css">

</head>
<body>
<div class="signup-form">
    <form action="#" id="form_api" method="post">
		<h2>Login</h2>
		<p>Login to your account</p>
		<hr>
        
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
        
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" id="password" name="password" placeholder="Password" required="required">
			</div>
        </div>
	
		<div class="form-group text-center">
            <button type="button"  id="login" class="btn btn-primary btn-lg">Login</button>
        </div>
    </form>
	<div class="text-center" style="color: white;">Not yet registered ? <a href="signup_view.php">Signup Here</a></div>
</div>
</body>
<script src="apijs/api.js"></script>
</html>