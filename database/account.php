<?php
	session_start();
    include_once "database.php";

	if (isset($_POST['savelrl'])) {
		$leerlingen_id = mysqli_real_escape_string($conn, $_POST['leerlingen_id']);
		$voornaamlrl = mysqli_real_escape_string($conn, $_POST['voornaamlrl']);
		$achternaamlrl = mysqli_real_escape_string($conn, $_POST['achternaamlrl']);
		$emaillrl = mysqli_real_escape_string($conn, $_POST['emaillrl']);
		$gebruikersnaamlrl = mysqli_real_escape_string($conn, $_POST['gebruikersnaamlrl']);
        $wachtwoordlrl1 = mysqli_real_escape_string($conn, $_POST['wachtwoordlrl']);
        $wachtwoordlrl2 = mysqli_real_escape_string($conn, $_POST['wachtwoordherhalenlrl']);

        if ($wachtwoordlrl1 == $wachtwoordlrl2){
            $sqla =  "UPDATE leerling SET voornaamlrl='$voornaamlrl', achternaamlrl='$achternaamlrl', emaillrl='$emaillrl', gebruikersnaamlrl='$gebruikersnaamlrl', wachtwoordlrl1='$wachtwoordlrl1' WHERE leerlingen_id='$leerlingen_id'";
            mysqli_query($conn , $sqla);
            header('location: ../mijnaccount.php?Updated');
        } else {
            header('location: ../mijnaccount.php?Error2_passwords_No_Match');
        }

	} 