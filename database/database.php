<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "eindwerk1.0";
    $dbport = 8889; //Is de poort van de database server die in MAMP staat.


    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $dbport); //$conn is de databaseconnectie die we overal kunnen gebruiken.

?>