<?php
include('object/users.php');

$email=trim($_REQUEST['email']);
$otp=trim($_REQUEST['otp']);

if(empty($otp))
{
	$data=array("status"=>201,"message"=>"Please enter the otp !");
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
		$data=array("status"=>201,"message"=>"Your Entered otp is incorrct !");
	}
}
echo json_encode($data);

?>