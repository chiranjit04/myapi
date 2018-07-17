<?php
$R=$_POST;

$to="pennbase.tech@gmail.com";
$from=$R['e'];
$em_name=$R['n'];
$html=$R['m'];
$subject=$R['s'];
if (filter_var($R['e'], FILTER_VALIDATE_EMAIL)) {

include 'mailer.php';

}
else {

echo "email_error";

}
?>