<?php

require_once("smtpvalidateclass.php");

// the email to validate  
$emails = array['joe@gmail.com'];  
// an optional sender  
$sender = 'user@example.com';  
// instantiate the class  
$SMTP_Valid = new SMTP_validateEmail();  
// do the validation  
$result = $SMTP_Valid->validate($emails, $sender);  
// view results  
var_dump($result);  
echo $email.' is '.($result ? 'valid' : 'invalid')."\n";  
  
// send email?   
if ($result) {  
  //mail(...);  
}

?>  
