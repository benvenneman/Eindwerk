<?php

session_start();

if (isset($_POST['submit'])) {

include 'database.php';

$gebruikersnaamlrl= mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
$wachtwoordlrl = mysqli_real_escape_string($conn, $_POST['wachtwoord']);
$errors = array();
//Error handlers
//Check if inputs are empty
if (empty($gebruikersnaamlrl) || empty($wachtwoordlrl)) {
  header("Location: ../loginlrl.php?error1");
  exit();
} else {
  $sql = "SELECT * FROM leerling WHERE emaillrl ='$gebruikersnaamlrl' OR gebruikersnaamlrl='$gebruikersnaamlrl'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header("Location: ../loginlrl.php?login=error2");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //De-hashing the password
      $hashedPwdCheck = password_verify($wachtwoordlrl, $row['wachtwoordlrl']);
      if ($hashedPwdCheck == false) {
        header("Location: ../loginlrl.php?login=error3");
        exit();
      } elseif ($hashedPwdCheck == true) {
        //Inloggen van de gebruiker
        $_SESSION['leerlingen_id'] = $row['leerlingen_id'];
        $_SESSION['leerkracht_id'] = $row['leerkracht_id'];
        $_SESSION['voornaamlrl'] = $row['voornaamlrl'];
        $_SESSION['achternaamlrl'] = $row['achternaamlrl'];
        $_SESSION['emaillrl'] = $row['emaillrl'];
        $_SESSION['gebruikersnaamlrl'] = $row['gebruikersnaamlrl'];
        $_SESSION['wachtwoordlrl'] = $row['wachtwoordlrl'];
        header("Location: ../index.php?login=succes");
        exit();
      }
    }
  }
}
} else {
header("Location: ../loginlrl.php?login=error4");
exit();
}
