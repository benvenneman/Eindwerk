<?php
    include "includes/header.php";
    include "database/database.php";
?>

    <?php if (isset($_POST['les'])) {
        $opdrachtnummer = mysqli_real_escape_string($conn, $_POST['opdrachtnummer']);
    ?>

        <?php if ($opdrachtnummer == 2) {?>


    <div class="container">
        <br><br>
        <h1 class="text-center">Opdracht <?php echo $opdrachtnummer; ?></h1>
        <hr><br><br>
        <div class="row">
            <div class="col">

            </div>
                <div class="col-8">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JVbZ6cKwVMI?start=110" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col-4">
                <br>
                <form action="toets.php" method="post">
                    <p>Nog even oefenen</p>
                    <a href="https://www.computermeester.be/grootste-gemene-deler.htm" class="btn btn-primary" role="button" target="_blank">Oefenen</a>
                </form>
            </div>
            <div class="col4">
                <br>
                <form action="toets.php" method="post">
                    <p>Direct beginnen aan de toets</p>
                    <input type="hidden" name="opdrachtnummer" value="<?php echo $opdrachtnummer ?>">
                    <button class="btn btn-primary" type="submit" name="les">Naar de toets</button>
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
        <?php
            } else {
        ?>


<div class="container">
        <br><br>
        <h1 class="text-center">Opdracht <?php echo $opdrachtnummer; ?></h1>
        <hr><br><br>
        <div class="row">
            <div class="col">

            </div>
                <div class="col-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
              
            </div>
            <!--
            <div class="col-4">
                <br>

                <form action="toets.php" method="post">
                    <p>Nog even oefenen</p>
                    <button class="btn bg-primary " type="submit" name="les">Oefening</button>
                </form>
            </div>
             -->
            <div class="col-8 text-center">
                <br>
                <form action="toets.php" method="post">
                    <p>Direct beginnen aan de toets</p>
                    <input type="hidden" name="opdrachtnummer" value="<?php echo $opdrachtnummer ?>">
                    <button class="btn bg-primary" type="submit" name="les">Naar de toets</button>
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

<?php
    }
}
    include "footer.php";
?>
