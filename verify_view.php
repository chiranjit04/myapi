
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Verify Mail</title>
<link rel="stylesheet" href="css/boot.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="apijs/bootstrap.js"></script>
<link rel="stylesheet" href="css/body.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>
<div class="signup-form">
    <form action="#" id="verify" method="post">
		<h2>Email verification</h2>
		<p>Verify your email</p>
		<hr>
		<?php 
			$email=base64_decode($_REQUEST['e']);
		 ?>
		<div class="form-group">
			<div class="input-group">
				<input type="hidden" class="form-control" id="email" name="email" value="<?php echo base64_decode($_REQUEST['e']); ?>">
			</div>
        </div>
        
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="text" class="form-control" id="otp" name="otp" placeholder="Please enter mail varification code" required="required">
			</div>
        </div>
	
		<div class="form-group text-center">
            <button type="button"  id="verify" class="btn btn-primary btn-lg">Verify</button>
        </div>
    </form>
	
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="apijs/api.js"></script>
</html>