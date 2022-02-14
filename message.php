<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['to']);
  $subject = htmlspecialchars($_POST['subject']);
  $from = 'coderservice.in@gmail.com';
  $message = htmlspecialchars($_POST['message']);
  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $body = "$message\n\nRegards,\n$name\n\n© CoderAryan";
      $sender = "From: $from";
      if(mail($email, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>
