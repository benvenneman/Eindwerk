<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eindwerk V0.3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-witdh, initial-scale=1,user-scalable=np">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">V0.3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<?php if (isset($_SESSION['gebruikersnaamlkr'])) {?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="leerlingen.php">Leerlingen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="opdrachten.php">Opdrachten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mijnaccount.php">Mijn account</a>
            </li>
            </ul>
            <form action="database/logout.php" method="POST">
                <button class="btn btn-primary float-right" type="submit" name="logoutbutton">Log uit</button>
            </form>
        </div>
    
    <?php } elseif (isset($_SESSION['gebruikersnaamlrl'])) {?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="opdrachten.php">Oefeningen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mijnaccount.php">Mijn account</a>
            </li>
            </ul>
            <form action="database/logout.php" method="POST">
                <button class="btn btn-primary float-right" type="submit" name="logoutbutton">Log uit</button>
            </form>
        </div>

    <?php } else {  ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="loginlrl.php">Login leerling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="loginlkr.php">Login leerkracht</a>
            </li>
            </ul>
        </div>
    <?php  } ?>
    </nav>
