<?php require 'template/header.php' ?>

<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1>Skapa Konto</h1>
        <div class="account-wall">

            <form class="form-signin">

                <input type="email" class="form-control" placeholder="Ange e-postadress" required autofocus>
                <input type="password" class="form-control" placeholder="Ange Lösenord" required>
                <input type="text" class="form-control" placeholder="Ange förnamn" required>
                <input type="text" class="form-control" placeholder="Ange efternamn" required>
                <input type="number" class="form-control" placeholder="Ange telefonnummer" required>
                <button class="btn btn-lg btn-default btn-block" type="submit">
                    Bli medlem</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Kom ihåg mig
                </label>

            </form>
            <br>
        </div>
        <a href="#" class="text-center new-account">Logga in konto </a>
    </div>
</div>


<?php require 'template/footer.php' ?>
