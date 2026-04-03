<?php
if($_POST){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "klaus.lenferding@aikido-hamm.de";
  $subject = "Kontaktformular Nachricht von $name";
  $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";

  mail($to, $subject, $body);
  echo "Danke, Ihre Nachricht wurde gesendet.";
}
?>