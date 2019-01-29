<?php
    include "includes/header.php";
    if(isset($_SESSION['gebruikersnaamlrl'])) {
?>
 <div class="container">
    <br><br><h1 class="text-center">Account <?php echo $_SESSION['voornaamlrl']; ?></h1><hr><br><br>
            <div class="row">
                <div class="col-md-3 ">

                </div>
                <div class="col-md-6" >
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $_SESSION['gebruikersnaamlrl']; ?></h2>
                            <form action="database/account.php" method="POST">
                                <table class="table table-user-information ">
                                    <tbody>
                                        <input type="hidden" name="leerlingen_id" value="<?php echo $_SESSION['leerlingen_id']; ?>">
                                        <tr>
                                            <td>Voornaam:</td>
                                            <td><input type="text" name="voornaamlrl" value="<?php echo $_SESSION['voornaamlrl']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Achternaam:</td>
                                            <td><input type="text" name="achternaamlrl" value="<?php echo $_SESSION['achternaamlrl']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="emaillrl" value="<?php echo $_SESSION['emaillrl']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>gebruikersnaam:</td>
                                            <td><input type="text" name="gebruikersnaamlrl" value="<?php echo $_SESSION['gebruikersnaamlrl']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Wachtwoord:</td>
                                            <td><input type="password" name="wachtwoordlrl"></td>
                                        </tr>
                                        <tr>
                                            <td>Wachtwoord herhalen:</td>
                                            <td><input type="password" name="wachtwoordherhalenlrl"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <input type="submit" name="savelrl" value="Aanpassen" class="btn bg-primary"><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">

                </div>
            </div>
        </div>
    <?php } elseif(isset($_SESSION['gebruikersnaamlkr'])) {?>
        <div class="container">
    <br><br><h1 class="text-center">Account <?php echo $_SESSION['voornaamlkr']; ?></h1><hr><br><br>
            <div class="row">
                <div class="col-md-3 ">

                </div>
                <div class="col-md-6" >
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $_SESSION['gebruikersnaamlkr']; ?></h2>
                            <form action="database/account.php" method="POST">
                                <table class="table table-user-information ">
                                    <tbody>
                                        <input type="hidden" name="leerkrachten_id" value="<?php echo $_SESSION['leerkrachten_id']; ?>">
                                        <tr>
                                            <td>Voornaam:</td>
                                            <td><input type="text" name="voornaamlkr" value="<?php echo $_SESSION['voornaamlkr']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Achternaam:</td>
                                            <td><input type="text" name="achternaamlkr" value="<?php echo $_SESSION['achternaamlkt']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="emaillkr" value="<?php echo $_SESSION['emaillkr']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>gebruikersnaam:</td>
                                            <td><input type="text" name="gebruikersnaamlkr" value="<?php echo $_SESSION['gebruikersnaamlkr']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Wachtwoord:</td>
                                            <td><input type="password" name="wachtwoordlkr" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Wachtwoord herhalen:</td>
                                            <td><input type="password" name="wachtwoordherhalenlkr" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <input type="submit" name="savelrl" value="Aanpassen" class="btn bg-primary"><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">

                </div>
            </div>
        </div>

<?php
    }
    include "includes/footer.php";
?>
