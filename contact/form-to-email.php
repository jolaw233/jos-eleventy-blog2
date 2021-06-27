<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $request = $_POST['request[]']
  $message = $_POST['message'];

  $email_from = 'hello@dreamsboutstars.com';
  $email_subject = "You have a new enquiry@";
  $email_body = "You have received a new message from $name.\n".
     "Here is the message:\n $message".

  $to = "hello@dreamsboutstars.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>
