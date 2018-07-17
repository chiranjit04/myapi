<?php
include('object/users.php');

$email=trim($_REQUEST['email']);
$otp=trim($_REQUEST['otp']);

if(empty($email))
{
	$data=array("status"=>201,"message"=>"Please enter email");
}
elseif(empty($otp))
{
	$data=array("status"=>201,"message"=>"Please enter valid otp !");
}
else
{
	
	$verify=$obj1->mailVerify($email,$otp);
	if($verify>0)
	{
		$data=array("status"=>200,"message"=>"Your email is verified !");
	}
	else
	{
		$data=array("status"=>201,"message"=>"Your mail is not verified !");
	}
}
echo json_encode($data);

?>