<?php 
    $nummer = $_POST["opdrachtnummer"];
    include_once "includes/header.php";
    if ($nummer == 2) { ?>

<link rel="stylesheet" href="css/toets.css">
<script src="js/toets2.js"></script>

</head>
<body onload="init()">
<div class="container">
<p id="demo"></p>
        <br><br>
        <h1 class="text-center">Toets ggd</h1>
        <hr><br><br>
        <div class="row">
            <div class="col-sm-2">
                    
            </div>
            <div class="col-sm-8">
                <div class="text-center">
                    <div class="ggd">
                        <span id="score">Klik op "Verbeteren" om je score te kennen!</span><br>
                        <input value="Verbeteren" name="a" class="btn bg-primary" onclick="verbeteren('<?php echo $nummer; ?>')" type="button"><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
</div>



    <?php } else { ?>




<?php
    include "database/database.php";
    $leerlingen_id = $_SESSION['leerlingen_id'];
    $done = 1;
?>

<link rel="stylesheet" href="css/toets.css">
<script src="js/toets1.js"></script>

</head>
<body onload="init()">
    <div class="container">
        <br><br>
        <h1 class="text-center">Toets <?php echo $opdrachtnummer; ?></h1>
        <hr><br><br>
        <div class="row">
            <div class="col-sm-2">
                        
            </div>
            <div class="col-sm-8">
                <div class="text-center">
                    <div class="toets">
                        <form action="toets.php">
                            <span id="score">Klik op "Verbeteren" om je score te kennen!</span><br>
                            <input value="Verbeteren" name="a" class="btn bg-primary" onclick="verbeteren('<?php echo $nummer; ?>')" type="button"><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            <?php
                if(isset($_GET["score"])) {
                    $score = $_GET['score'];
                    $nummer = $_GET['nummer'];

                    $sql = "UPDATE les SET les_$nummer = '$done', ples_$nummer = '$score' WHERE leerlingen_id = '$leerlingen_id'";
                    mysqli_query($conn, $sql);
                }
            ?>

            </div>
        </div>
    </div>
<?php
    include_once "includes/footer.php";
}
?>