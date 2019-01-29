<?php

    if(isset($_POST["reset-password-submit"])) {

        $selector = $_POST["selector"];
        $validator = $_POST["validator"];
        $password = $_POST["pwd"];
        $passwordRepeat = $_POST["pwd-repeat"];

        if (empty($password) || empty($passwordRepeat)) {
            header("Location: ../create-new-password.php?wachtwoorden_leeg");
            exit();
        } else if ($password != $passwordRepeat) {
            header("Location: ../create-new-password.php?wachtwoorden_niet_zelfde");
            exit();
        }

        $currentDate = date("U");

        require 'database.php';
        
        $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!a";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                echo "Doe een nieuwe aanvraag.a";
                exit();
            } else {

                $tokenBin = hex2bin($validator);
                $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
                
                if ($tokenCheck == false) {
                    echo "Doe een nieuwe aanvraag.b";
                    exit();
                } elseif ($tokenCheck == true) {

                    $tokenEmail = $row['pwdResetEmail'];

                    $sql = "SELECT * FROM leerling WHERE emaillrl=?;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "There was an error!a";
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)) {
                            echo "There was an error!b";
                            exit();
                        } else {

                            $sql = "UPDATE leerling SET wachtwoordlrl=? WHERE emaillrl=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error!a";
                                exit();
                            } else {
                                $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    echo "There was an error!c";
                                    exit();
                                } else {
                                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                    mysqli_stmt_execute($stmt);
                                    header("Location: ../index.php?Gelukt");
                                }
                            }
                        }
                    }
                }
            }
        }

    } else {
        header("Location: ../index.php?error_indrukken");
    }

?>