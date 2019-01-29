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
                    $selector = $_GET["selector"];
                    $validator = $_GET["validator"];

                    if (empty($selector) || empty($validator)) {
                        echo "Uw aanvraag is niet geldig";
                    } else {
                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                        ?>
                            <form action="database/reset-password1.php" method="post">
                                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                                <input type="password" name="pwd" placeholder="Geef een nieuw wachtwoord in">
                                <input type="password" name="pwd-repeat" placeholder="Herhaal uw wachtwoord">
                                <button type="submit" name="reset-password-submit">Wachtwoord aanpassen</button>
                            </form>
                <?php
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
