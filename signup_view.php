
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Sign up Form</title>
<link rel="stylesheet" href="css/boot.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="apijs/bootstrap.js"></script>
<link rel="stylesheet" href="css/body.css">

</head>
<body>
<div class="signup-form">
    <form action="#" id="form_api" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" id="password" name="password" placeholder="Password" required="required">
			</div>
        </div>
	
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group text-center">
            <button type="button"  id="apitest" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="text-center" style="color: white;">Already have an account? <a href="login_view.php">Login here</a></div>
</div>
</body>
<script src="apijs/api.js"></script>
</html>                            