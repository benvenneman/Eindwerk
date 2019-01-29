<?php
    include "includes/header.php";
    include "database/database.php";
?>

    <?php  if(isset($_SESSION['gebruikersnaamlrl'])) {?> 
        <h1>U hebt hier geen rechten toe</h1>
    <?php } elseif (isset($_SESSION['gebruikersnaamlkr'])) { ?>
        <div class="container">
        <br><br><h1 class="text-center">Leerlingen</h1><hr><br><br>      
        <div class="row">
            <div class="col-sm-2">

            </div>    
            <div class="col-sm-8 text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $results = mysqli_query($conn, "SELECT * FROM leerling");
                        while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><?php echo $row['voornaamlrl']; ?></td>
                                <td><?php echo $row['achternaamlrl']; ?></td>
                                <td>
                                    <form action="leerlingbekijken.php" method="post">
                                        <input type="hidden" name="leerlingen_id" value="<?php echo $row['leerlingen_id']; ?>">
                                        <button type="submit" name="bekijklrl" class="btn bg-primary">Bekijken</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
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