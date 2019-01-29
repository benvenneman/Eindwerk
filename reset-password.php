<?php
    include "includes/header.php";
?>

<div class="container">
    <br><br><h1 class="text-center">Wachtwoord aanpassen</h1><hr><br><br>
        <div class="row">
                <div class="col-sm-3">
                    
                </div>

                <div class="col-sm-6">
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "success") == true) {
                        echo "<p class='alert alert-success'>De mail is verzonden. <strong>Bekijk je mailbox!</strong></p>";
                    }
                ?>
                        <p class="text-center">Geef hier uw email adres in en bekijk uw mailbox</p>
                        <form action="includes/reset-password.php" method="post">
                            <input class="form-control text-center"  type="text" name="email" placeholder="Email">
                            <button type="submit" name="reset-request-submit" class="btn bg-primary">Verzenden</button>
                        </form>
                    <?php
                        if (isset($_GET["reset"])) {
                            if ($_GET["reset"] == "success") {
                                echo '<p class="signupsucces>"Bekijk uw email!</p>';
                            }
                        }
                    ?>
                </div>

                <div class="col-sm-3">
                    
                </div>
        </div>
    </div>
<?php
    include "includes/footer.php";
?>