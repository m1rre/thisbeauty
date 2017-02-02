<?php require 'template/header.php' ?>

<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">
                <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-default btn-block" type="submit">
                        Logga in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Kom ihåg mig
                    </label>
                </form>
                <br>
            </div>
            <a href="#" class="text-center new-account">Skapa ett konto </a>
        </div>
    </div>


<?php require 'template/footer.php' ?>
