<?php
  if(isset($_POST['submit'])) {
    $name= &_POST['name'];
    $subject= &_POST['subject'];
    $mailFrom= &_POST['email'];
    $message= &_POST['message'];
    $mailTo = "alexburghardt2001@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Neue Email von ".$name."bekommen.\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }
?>
