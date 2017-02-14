<!DOCTYPE html>
<html lang="en">

<head>

    <!--Meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Skriv om ThisBeauty">
    <meta name="author" content="ThisBeauty">

    <!--Website title-->
    <title>ThisBeauty</title>

    <!--JQuery UI CDN-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/modern-business.css" rel="stylesheet">
    <link href="assets/css/bootstrap-custom-checkbox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



<!-- Navigation -->
<nav class="custom_nav navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" width="100px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="book.php">Boka tid</a></li>

                <li><a href="shop.php">Shop</a></li>

                <li><a href="gallery.php">Bilder</a></li>

                <li><a href="contact.php">Kontakt</a></li>

                <li><a href="maps.php">Hitta oss</a></li>

                <li><a href="login.php">Logga in</a></li>

                <li><a href="profile.php"><img src="assets/img/icons/profile.png" width="25px"></a></li>

                <li><a data-toggle="modal" data-target="#checkout"><img src="assets/img/icons/cart.png" width="25px"></a></li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</head>

<div class="row">
        <form action="registration.php" method="post" data-toggle="validator" role="form">
          <hr>
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <form class="form-signin">


        </form>
        <br>

      <h3 class="beautyText">Registrera dig</h3>
      <form action="registration.php" method="post" data-toggle="validator" role="form">


        <!--Förnamn-->
        <div class="form-group col-sm-12">
          <input type="text" name="ffirstname" class="form-control" id="inputName" placeholder="Förnamn" >
        </div>

        <!--Efternamn-->
        <div class="form-group col-sm-12" >
          <input type="text" name="flastname" class="form-control" id="inputName" placeholder="Efternamn">
        </div>


        <!--Lösenord-->
        <div class="form-group col-sm-6" >
          <input type="password" name="fpassword" data-minlength="6" class="form-control" id="inputPassword" placeholder="Lösenord" required>
              <div class="help-block">Minst 6 tecken</div>
        </div>

         <!--Upprepa lösenord-->
        <div class="form-group col-sm-6">
          <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Lösenorden matchar inte" placeholder="Upprepa" required>
              <div class="help-block with-errors"></div>
        </div>

             <!--E-post-->
         <div class="form-group col-sm-12">
          <input type="email" name="femail" class="form-control" id="inputEmail" placeholder="Email" data-error="Ange en giltig e-postadress" required>
          <div class="help-block with-errors"></div>
        </div>

         <!--Telefon-->
        <div class="form-group col-sm-12" >
          <input type="text" name="fphonenumber" class="form-control" id="inputName" placeholder="Telefonnummer">
        </div>

         <!--Adress-->
        <div class="form-group col-sm-12" >
          <input type="text" name="faddress" class="form-control" id="inputName" placeholder="Adress">
        </div>

         <!--Postnummer-->
        <div class="form-group col-sm-6" >
          <input type="text" name="fzipcode" class="form-control" id="inputName" placeholder="Postnummer">
        </div>

         <!--Postort-->
        <div class="form-group col-sm-6" >
          <input type="text" name="fcity" class="form-control" id="inputName" placeholder="Postort">
        </div>

         <!--land-->
        <div class="form-group col-sm-12" >
          <input type="text" name="fcountry" class="form-control" id="inputName" placeholder="Sverige">
        </div>


        <div class="form-group col-sm-12">
          <button type="submit" class="btn btn-primary">Skapa konto</button>
        </div>
      </form>


<?php require 'template/footer.php' ?>
