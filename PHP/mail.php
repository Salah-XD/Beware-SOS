<?php
$to = 'navappcreator@gmail.com'; 
$from = 'navgosoft@email.com'; 
$fromName = 'Harish'; 
 
$subject = "SOS I'm in Danger"; 
 
$message = "I'm in Dnager I Enabled My Sos and my live location and Voice have been sending to You"; 
 
// Additional headers 
$headers = 'From: '.$fromName.'<'.$from.'>'; 
 
// Send email 
if(mail($to, $subject, $message, $headers)){ 
   echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
?>