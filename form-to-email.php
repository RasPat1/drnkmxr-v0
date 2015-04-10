<?php

$type_id = $_POST['type'];
$visitor_email = $_POST['email'];

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

if ($type_id == 1) {
  $type = "Bartender";
} else if ($type_id == 2) {
  $type = "Customer";
}

if ($vistor_email) {
  $email_to = "julia+signups@drnkmxr.com";
  $email_subject = "New Form submission";
  $email_body = "Email: $visitor_email\nRole: $type";

  $headers = "From: $visitor_email \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  //Send the email!

  mail($email_to, $email_subject, $email_body, $headers);

  $_GET['submitted'] = true;
}
//done. redirect to thank-you page.
header('Location: index.php?submitted=1');

// Function to validate against any email injection attempts
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
?> 