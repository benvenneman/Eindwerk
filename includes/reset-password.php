<?php

    if (isset($_POST["reset-request-submit"])) {

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "www.eindwerkdbh.be/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
        
        $expires = date("U") + 1800;

        require '../database/database.php';

        $userEmail = $_POST["email"];

        $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../reset-password.php?error1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../reset-password.php?error2");
            exit();
        } else {
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $userEmail;

        $subject = 'Wachtwoord aanpassen eindwerkDBH';

        $message = '<p>U hebt een nieuw wachtwoord aangevraagt. Indien u dit niet heeft gedaan kan u deze mail negeren.</p>';
        $message .= '<p>Open deze link om je wachtwoord aan te passen: </p>';
        $message .= '<a href="' .$url . '">' . $url . '</a></p>';

        $headers = "From: eindwerkdbh <wachtwoord@eindwerkdbh.be>\r\n";
        $headers .= "Reply-To: wachtwoord@eindwerkdbh.be\r\n";
        $headers .= "Contect-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("Location: ../reset-password.php?success");

    } else {
        header("Location: ../reset-password.php?error3");
    }

?>