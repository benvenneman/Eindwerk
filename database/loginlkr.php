<?php

session_start();

if (isset($_POST['submit'])) {

include 'database.php';

$gebruikersnaamlkr = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
$wachtwoordlkr = mysqli_real_escape_string($conn, $_POST['wachtwoord']);

//Error handlers
//Check if inputs are empty
if (empty($gebruikersnaamlkr) || empty($wachtwoordlkr)) {
  header("Location: ../loginlkr.php?error1");
  exit();
} else {
  $sql = "SELECT * FROM leerkracht WHERE emaillkr ='$gebruikersnaamlkr' OR gebruikersnaamlkr='$gebruikersnaamlkr'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header("Location: ../loginlkr.php?error2");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //De-hashing the password
      $hashedPwdCheck = password_verify($wachtwoordlkr, $row['wachtwoordlkr']);
      if ($hashedPwdCheck == false) {
        header("Location: ../loginlkr.php?error3");
        exit();
      } elseif ($hashedPwdCheck == true) {
        //Inloggen van de gebruiker
        $_SESSION['leerkracht_id'] = $row['leerkracht_id'];
        $_SESSION['school_id'] = $row['school_id'];
        $_SESSION['voornaamlkr'] = $row['voornaamlkr'];
        $_SESSION['achternaamlkt'] = $row['achternaamlkt'];
        $_SESSION['emaillkr'] = $row['emaillkr'];
        $_SESSION['klas'] = $row['klas'];
        $_SESSION['gebruikersnaamlkr'] = $row['gebruikersnaamlkr'];
        $_SESSION['wachtwoordlkr'] = $row['wachtwoordlkr'];
        header("Location: ../index.php?login=succes");
        exit();
      }
    }
  }
}
} else {
header("Location: ../loginlkr.php?error4");
exit();
}
