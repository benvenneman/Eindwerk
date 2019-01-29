<?php
    include "includes/header.php";
?>

<?php if (isset($_SESSION['gebruikersnaamlkr'])) { //Kijken of er een leerkracht is ingelogd.?>
    <div class="container">
        <br><br>
        <h1 class="text-center">Welkom <?php echo $_SESSION['voornaamlkr']; ?></h1>
        <hr><br><br>
        <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-1">
                    
                </div>
        </div>
    </div>
<?php } elseif (isset($_SESSION['gebruikersnaamlrl'])) {//Bekijken of de leerling is ingelogd. ?>
    <div class="container">
    <br><br>
    <h1 class="text-center">Welkom <?php echo $_SESSION['voornaamlrl'] ?></h1>
    <hr><br><br>
        <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-1">
                    
                </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
    <br><br>
    <h1 class="text-center">Home</h1>
    <hr><br><br>
        <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, officia sunt eos adipisci aliquid pariatur culpa impedit. A cumque soluta optio unde, ratione obcaecati minus quidem praesentium, veritatis libero sequi.
                </div>
                <div class="col-sm-1">
                    
                </div>
        </div>
    </div>
<?php } ?>
<br><br>
<?php
    include "includes/slide.php";
?>
<br><br>
<?php
    include "includes/footer.php";
?>