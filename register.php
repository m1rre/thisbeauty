<?php require 'template/header.php' ?>

<div class="row">
    <h3 class="beautyText">Bli en del av This Beauty</h3>
    <hr>
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="account-wall">
            <form class="form-signin">
                <label>Skapa Konto</label>
                <input type="email" class="form-control" placeholder="Ange e-postadress" required autofocus>
                <input type="password" class="form-control" placeholder="Ange Lösenord" required>
                <input type="text" class="form-control" placeholder="Ange förnamn" required>
                <input type="text" class="form-control" placeholder="Ange efternamn" required>
                <input type="number" class="form-control" placeholder="Ange telefonnummer" required>
                <hr>
                <button class="btn btn-lg btn-default btn-block" type="submit">
                    Bli medlem</button>

            </form>
            <br>
        </div>
        <a href="#" class="text-center new-account">Logga in konto </a>
    </div>
</div>


<?php require 'template/footer.php' ?>
