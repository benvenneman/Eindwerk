<?php
    include "includes/header.php";
    include "database/database.php";

      if(isset($_SESSION['gebruikersnaamlrl'])) {?> 
        <h1>U hebt hier geen rechten toe</h1>
    <?php } elseif (isset($_SESSION['gebruikersnaamlkr'])) { 
        if (isset($_POST['bekijklrl'])) {
            $leerlingen_id = mysqli_real_escape_string($conn, $_POST['leerlingen_id']);
          } 
      
          $results = mysqli_query($conn, "SELECT * FROM leerling WHERE leerlingen_id = '$leerlingen_id'"); 
?>  
    <div class="container">
    <br><br><h1 class="text-center">Opdrachten</h1><hr><br><br>      
        <div class="row">
            <div class="col-sm-2">

            </div> 
        <div class="col-sm-8 text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email </th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                    <td><?php echo $row['voornaamlrl']; ?></td>
                    <td><?php echo $row['achternaamlrl']; ?></td>
                    <td><?php echo $row['emaillrl']; ?></td>

                    </tr>
                <?php } ?>

            </table>
            <div class="col-sm-2">
                    
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-2">

            </div>    
            <div class="col-sm-8 text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Opdracht</th>
                        <th scope="col">Gemaakt</th>
                        <th scope="col">Punten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $aantal = 1;
                            $opdracht = 1;
                            $les = 1;
                            $i = 0;
                            $results = mysqli_query($conn, "SELECT * FROM les WHERE leerlingen_id = '$leerlingen_id'");
                            while ($row = mysqli_fetch_array($results)) {
                                while ($i < 10) :
                        ?>
                            <tr>
                                <form class="" action="les.php" method="post">
                                    <td>Opdracht <?php echo $aantal ?></td>
                                    <td>
                                        <?php if($row["les_$les"] == 0){ ?>
                                            <img src="image/kruis.png" width:="35" height="35">
                                        <?php } else { ?>
                                            <img src="image/vink.png" width:="35" height="35">
                                        <?php } ?>
                                    </td>
                                </form>
                                <td><?php echo $row["ples_".$les]; ?></td>
                            </tr>
                        <?php
                            $aantal = $aantal + 1;
                            $les = $les + 1;
                            $opdracht = $opdracht + 1;
                            $i = $i + 1;
                            endwhile;
                        } 
                        ?>
                    </tbody>
                </table>
            <div class="col-sm-2">
                    
            </div>
        </div>
    </div>


  <?php
    } else { 
        include_once "nietingelogd.php";
    } 
    include "footer.php";
?>