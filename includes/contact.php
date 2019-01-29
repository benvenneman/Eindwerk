<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $mailFrom = $_POST['mail'];
   $message = $_POST['message'];
   $subject = "Contactmail";

    $mailTo = "contact@eindwerkdbh.be";
    $headers = "Van: ".$mailFrom;
    $txt = "U hebt een bericht ontvangen van ".$name.".\n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("Location: ../contact.php?mail_send");
} else {
    header("Location: ../contact.php?emailerror");
}

?>

