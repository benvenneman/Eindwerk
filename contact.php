<?php
    include "includes/header.php";
?>


    <div class="container">
    <br><br><h1 class="text-center">Contact</h1><hr><br><br>
    <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6 text-center">
                <form action="includes/contact.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Naam:</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Volledige naam">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"></span>Email adres:</label>
                        <input type="email" class="form-control" name="mail" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Uw bericht:</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn bg-primary">Verzenden</button>
                </form>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
<?php
    include "includes/footer.php";
?>

