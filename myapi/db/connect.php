<?php

class Connect
{
	public $conn;
	function __construct()
	{
		global $conn;
		if($_SERVER['REMOTE_ADDR']=="127.0.0.1")
		{
		$host="127.0.0.1";
		$database="Rest_api";
		$user="root";
		$password="password";
		}
		else
		{
			$host="127.0.0.1";
			$database="Rest_api";
			$user="root";
			$password="password";
		}
		try
		{
			$conn=new PDO('mysql:host='.$host.';dbname='.$database,$user,$password);
			//print "connection established";
			
		}
		catch(Exception $e)
		{
			print "Error!".$e.getMessage();
		}
	}
}

$conObj=new Connect();
?>