<?php
include('object/users.php');


$username=trim($_REQUEST['username']);
$firstname=trim($_REQUEST['firstname']);
$lastname=trim($_REQUEST['lastname']);
$email=trim($_REQUEST['email']);
$phone=trim($_REQUEST['phone']);
$password=trim($_REQUEST['password']);
$otp=rand(1, 1000000);

if(empty($username))
{
	$data=array("status"=>201,"message"=>"Please enter username");
}
else if(empty($firstname))
{
	$data=array("status"=>201,"message"=>"Please enter firstname");
}
else if(empty($lastname))
{
	$data=array("status"=>201,"message"=>"Please enter lastname");
}
else if(empty($email))
{
	$data=array("status"=>201,"message"=>"Please enter email");
}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$data=array("status"=>201,"message"=>"Please enter valid email");
		}

else if(empty($phone))
{
	$data=array("status"=>201,"message"=>"Please enter phone");
}
else if(empty($password))
{
	$data=array("status"=>201,"message"=>"Please enter password");
}
else
{
if($obj1->checkEmail($email)>0)
{
	$data=array("status"=>201,"message"=>"Email already exist!");
}
else
{
		
$response = $obj1->createUser($username,$firstname,$lastname,$email,$phone,$password,$otp);
if($response>0)
{
	//if user register then send verification mail
	$obj1->sendEmail($email,$otp,$username);
	$data=array("status"=>200,"message"=>"User created successfully");
}
else
{
	$data=array("status"=>201,"message"=>"User not created!");
}
}
}
echo json_encode($data);
?>