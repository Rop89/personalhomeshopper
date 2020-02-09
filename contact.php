<?php

  if(isset($_POST['submit']))
  {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "test@mailinator.com";
  $mailheader = "From: $email \r\n";

  $secretKey = "6Ldgu7IUAAAAAAuQOzkFFxi64nOalMa7VwXHMmQ7";
  $responseKey = $_POST['g-recaptcha-response'];
  $UserIP = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

  $response = file_get_contents($url);
  $response = json_decode($response);

  if ($response ->success)
  {
  mail($recipient, $subject, $formcontent, $mailheader);
  echo "Thank You!";
  }
  else
  {
    echo "Invalid Captcha, Please Try Again";
  }
}
  ?>
