<?php
    include "includes/header.php";
?>

    <div class="container">
    <br><br><h1 class="text-center">Login Leerling</h1><hr><br><br>
    <div class="row">
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm-6 text-center">
            <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($fullUrl, "error1") == true) {
                    echo "<p class='alert alert-danger'>Vul al de velden in!</p>";
                } elseif (strpos($fullUrl, "error2") == true) {
                    echo "<p class='alert alert-danger'>Uw gebruikersnaam bestaat niet.</p>";
                } elseif (strpos($fullUrl, "error3") == true) {
                    echo "<p class='alert alert-danger'>Uw wachtwoord is fout.</p>";
                }
            ?>
            <form action="database/loginlrl.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gebruikersnaam:</label>
                    <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" name="gebruikersnaam" placeholder="Gebruikersnaam">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Wachtwoord:</label>
                    <input type="password" class="form-control text-center" id="exampleInputPassword1" name="wachtwoord" placeholder="Wachtwoord">
                </div>
                <div class="form-check">
                    <a href="reset-password.php">Wachtwoord vergeten?</a>
                </div>
                <br>
                <input type="submit" name="submit" value="Inloggen" class="btn bg-primary"><br><br>
            </form>
            </div>
            <div class="col-sm-3">
                
            </div>
        </div>
    </div>

<?php
    include "includes/footer.php";
?>