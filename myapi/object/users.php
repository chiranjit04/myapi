<?php
include('./db/connect.php');
class Users
{
	public $conn;
	public $id;
	public $username;
	public $firstname;
	public $lastname;
	public $email;
	public $phone;
	public $password;
	public $otp;

	public function createUser($username,$firstname,$lastname,$email,$phone,$password,$otp)
	{
		global $conn;
		$user=$conn->prepare("insert into users set username='".$username."', firstname='".$firstname."', lastname='".$lastname."',email='".$email."',phone='".$phone."',password='".$password."',send_otp='".$otp."' ");
		$res=$user->execute();
		return $res;
	}

	public function checkEmail($email)
	{
		global $conn;
		$checkMail=$conn->prepare("SELECT * FROM users where email='".$email."'");
		$checkMail->execute();
		$mailCount=$checkMail->rowCount();
		return $mailCount;

	}

	public function sendEmail($email,$otp,$username)
	{
		$to=$email;
		$from='chandu2013pal@gmail.com';
		$em_name="Test.com";
		$html='Dear '.$username.' successfully registered. Please verify your mail by using the otp '.$otp;
		$subject="Registration verification";
		include './mail/mailer.php';	
	}

	public function mailVerify($email,$otp)
	{
		global $conn;
		$mailer=$conn->prepare("SELECT * FROM users where email='".$email."' AND send_otp='".$otp."'");
		$mailer->execute();
		$verifyMail=$mailer->rowCount();
		if($verifyMail>0)
		{
			$update=$conn->prepare("update users set email_verify='1' ,status='1' where email='".$email."'");
			$res=$update->execute();
			return $res;
		}

	}

	public function isMailVerify($email)
	{
		global $conn;
		$isMail=$conn->prepare("SELECT * FROM users where email_verify='1' AND email='".$email."'");
		$isMail->execute();
		$isStatus=$isMail->rowCount();
		return $isStatus;
	}

	public function isStatus($email)
	{
		global $conn;
		$isStatus=$conn->prepare("SELECT * FROM users where status='1' AND email='".$email."' ");
		$isStatus->execute();
		$countStatus=$isStatus->rowCount();
		return $countStatus;
	}

	public function signingIn($email,$password)
	{
		global $conn;
		$login=$conn->prepare("SELECT * FROM users where email='".$email."' AND password='".$password."' ");
		$login->execute();
		$thisUser=$login->rowCount();
		return $thisUser;
	}

}

$obj1=new Users();

?>