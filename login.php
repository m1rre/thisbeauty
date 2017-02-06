<?php require 'template/header.php' ?>

<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="assets/img/profile.png" >

                <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Ange e-postadress" required autofocus>
                    <input type="password" class="form-control" placeholder="Ange Lösenord" required>
                    <button class="btn btn-lg btn-default btn-block" type="submit">
                        Logga in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Kom ihåg mig
                    </label>
                </form>
                <br>
            </div>
            <a href="register.php" class="text-center new-account">Registrera konto </a>
        </div>
    </div>


<?php require 'template/footer.php' ?>
