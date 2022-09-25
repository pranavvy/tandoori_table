
<?php

if(isset($_POST['email'])) {

  $name = $_POST['name'];
  $from_email = $_POST['email'];
  $to_email = 'info@tandooritable.com ';
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: ".$from_email;
  $status = mail($to_email, $subject, $message, $headers);

  if($status)
  { 
    echo '<p>Your mail has been sent!</p>';
    header("Location: http://tandooritable.com/");
  } else { 
    echo '<p>Something went wrong, Please try again!</p>'; 
  }

}

?>