<?php
include('object/users.php');

$email=trim($_REQUEST['email']);
$password=trim($_REQUEST['password']);

if(empty($email))
{
	$data=array("status"=>201,"message"=>"Please Enter Your Email !");
}
elseif(empty($password))
{
	$data=array("status"=>201,"message"=>"Please Enter Your Password !");
}
elseif($obj1->checkEmail($email)==0)
{
	$data=array("status"=>201,"message"=>"Your eMail Is Not registered !");
}
elseif($obj1->isMailVerify($email)==0)
{
	$data=array("status"=>201,"message"=>"Your Mail Is Not Verified !");
}
elseif($obj1->isStatus($email)==0)
{
	$data=array("status"=>201,"message"=>"Your Account Is Not Active !");
}
else
{
	$login=$obj1->signingIn($email,$password);
	if($login>0)
	{
		$data=array("status"=>200,"message"=>"Your are loged in !");
	}
	else
	{
		$data=array("status"=>201,"message"=>"Your email or password is incorrect !");
	}
}
echo json_encode($data);

?>