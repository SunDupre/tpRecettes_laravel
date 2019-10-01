<?php
$to = "someone@example";

$headers = "From: webmaster@containerized-lamp" . "\r\n" . "CC: somebodyelse@google.com";

$subject = "Test Email";
// the message
$msg = "Test email from containerized lamp stack";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
$sent = mail($to, $subject, $msg, $headers);
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Test</title>
  </head>
  <body>
    <section>
      <h1>
        Mail Test
      </h1>
      <?php if ($sent) { ?>
      <div>
        <p>The message has been sent</p>
        <p>Check the <a href="http://localhost:8025">Mailhog Web Interface</a></p>
      </div>
      <?php } else { ?>
      <div>
        <p>An error occurred. Email not sent.</p>
      </div>
      <?php } ?>
    </section>
  </body>
</html>
