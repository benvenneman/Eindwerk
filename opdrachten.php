<?php
    include "includes/header.php";
    include "database/database.php";
    $id = $_SESSION['leerlingen_id'];
?>

<div class="container">
        <br><br><h1 class="text-center">Opdrachten</h1><hr><br><br>    

<?php  if(isset($_SESSION['gebruikersnaamlrl'])) {?>    
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
                            $results = mysqli_query($conn, "SELECT * FROM les WHERE leerlingen_id = '$id'");
                            while ($row = mysqli_fetch_array($results)) {
                                while ($i < 10) :
                        ?>
                            <tr>
                                <form class="" action="les.php" method="post">
                                    <td>
                                        <input type="hidden" name="opdrachtnummer" value="<?php echo $aantal ?>"> 
                                        <button class="btn bg-primary" type="submit" name="les"><?php echo "Opdracht $aantal"; ?></button></td>
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
<?php } elseif (isset($_SESSION['gebruikersnaamlkr'])) { ?>
    <div class="row">
            <div class="col-sm-3">
            
            </div>  
                <div class="col-sm-6 text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Les</th>
                        <th scope="col">Opdracht</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $aantal = 1;
                            $opdracht = 1;
                            $les = 1;
                            $i = 0;
                            while ($i < 10) :
                        ?>
                            <tr>
                                <td><?php echo "les $opdracht";?></td>
                                <form class="" action="les.php" method="post">
                                    <td> <button class="btn bg-primary" type="submit" name="<?php echo "les$aantal"; ?>" ><?php echo "Opdracht $aantal"; ?></button></td>
                                </form>
                            </tr>
                        <?php
                            $aantal = $aantal + 1;
                            $les = $les + 1;
                            $opdracht = $opdracht + 1;
                            $i = $i + 1;
                            endwhile;
                        ?>
                    </tbody>
                </table>
                <div class="col-sm-3">
                    
                </div>
        </div>
    </div>

<?php
    } else { 
            include_once "nietingelogd.php";
    } 
    include "footer.php";
?>