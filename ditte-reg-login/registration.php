<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
</head>
<body>

<?php
		require('db.php');
       
      	if( isset($_POST['ffirstname']) ) {
		
        $firstname = stripslashes($_POST['ffirstname']);
		$firstname = mysqli_real_escape_string($con,$firstname);

        $lastname = stripslashes($_POST['flastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);

        $password = stripslashes($_POST['fpassword']);
		$password = mysqli_real_escape_string($con,$password);
        $salt1 = "18gI%f5A";
        $salt2 = "@Y4p91bN";
        $salt_password = md5($salt1.$password.$salt2);


		$email = stripslashes($_POST['femail']);
		$email = mysqli_real_escape_string($con,$email);

        $phonenumber = stripslashes($_POST['fphonenumber']);
		$phonenumber  = mysqli_real_escape_string($con,$phonenumber);
		
        $address = stripslashes($_POST['faddress']);
		$address  = mysqli_real_escape_string($con,$address);

        $zipcode = stripslashes($_POST['fzipcode']);
		$zipcode  = mysqli_real_escape_string($con,$zipcode);

        $city = stripslashes($_POST['fcity']);
		$city  = mysqli_real_escape_string($con,$city);

        $country = stripslashes($_POST['fcountry']);
		$country = mysqli_real_escape_string($con,$country);
       

	// kolla om användaren finns i databasen;
	$sql = "SELECT COUNT(*) AS 'antal_rader' FROM `users`WHERE email = :email";
	$stm_count = $pdo->prepare($sql);
	$stm_count->execute(['email' => $_POST['femail']]);
	foreach( $stm_count as $row ) {
		$antal_rader = $row['antal_rader'];
	}

	if( $antal_rader > 0 ) {

		echo "<h3>$email är redan en registrerad användare</h3>";

	} else {

			$sql = "INSERT INTO `users` (`firstname`, `lastname`, `password`, `email`, `phonenumber`, `address`, `city`, `zipcode`, `country`) VALUES (:firstname, :lastname, :password, :email, :phonenumber, :address, :city, :zipcode, :country) ";
			$stm_insert = $pdo->prepare($sql);
			$stm_insert->execute(['firstname' => $_POST['ffirstname'], 
            'lastname' => $lastname, 
            'password' => $salt_password,
            'email' => $email,
            'phonenumber' => $phonenumber,
            'address' => $address,
            'city' => $city,
            'zipcode' => $zipcode,
            'country' => $country]);
			echo "<div class='form'><h3>Du är mu registrerad</h3><br/><a href='login.php'>Klicka här</a> för att logga in</div>";
		}
        }
?>
<h1>Registrera dig</h1>
      <form action="registration.php" method="post" data-toggle="validator" role="form">

        
        <!--Förnamn-->
        <div class="form-group col-sm-12">
          <label for="inputName" class="control-label">Förnamn</label>
          <input type="text" name="ffirstname" class="form-control" id="inputName" placeholder="Förnamn" >
        </div>

        <!--Efternamn-->
        <div class="form-group col-sm-12" >
          <label for="inputName" class="control-label">Efternamn</label>
          <input type="text" name="flastname" class="form-control" id="inputName" placeholder="Efternamn">
        </div>

  
        <!--Lösenord-->
        <div class="form-group col-sm-6" >
          <label for="inputName" class="control-label">Lösenord</label>
          <input type="password" name="fpassword" data-minlength="6" class="form-control" id="inputPassword" placeholder="Lösenord" required>
              <div class="help-block">Minst 6 tecken</div>
        </div>

         <!--Upprepa lösenord-->
        <div class="form-group col-sm-6">
          <label for="inputName" class="control-label">Upprepa lösenord</label>
          <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Lösenorden matchar inte" placeholder="Upprepa" required>
              <div class="help-block with-errors"></div>
        </div>

             <!--E-post-->
         <div class="form-group col-sm-12">
          <label for="inputEmail" class="control-label">E-post</label>
          <input type="email" name="femail" class="form-control" id="inputEmail" placeholder="Email" data-error="Ange en giltig e-postadress" required>
          <div class="help-block with-errors"></div>
        </div>

         <!--Telefon-->
        <div class="form-group col-sm-12" >
          <label for="inputName" class="control-label">Telefon</label>
          <input type="text" name="fphonenumber" class="form-control" id="inputName" placeholder="Telefonnummer">
        </div>

         <!--Adress-->
        <div class="form-group col-sm-12" >
          <label for="inputName" class="control-label">Adress</label>
          <input type="text" name="faddress" class="form-control" id="inputName" placeholder="Adress">
        </div>

         <!--Postnummer-->
        <div class="form-group col-sm-6" >
          <label for="inputName" class="control-label">Postnummer</label>
          <input type="text" name="fzipcode" class="form-control" id="inputName" placeholder="Postnummer">
        </div>

         <!--Postort-->
        <div class="form-group col-sm-6" >
          <label for="inputName" class="control-label">Ort</label>
          <input type="text" name="fcity" class="form-control" id="inputName" placeholder="Postort">
        </div>

         <!--land-->
        <div class="form-group col-sm-12" >
          <label for="inputName" class="control-label">Land</label>
          <input type="text" name="fcountry" class="form-control" id="inputName" placeholder="Sverige">
        </div>


        <div class="form-group col-sm-12">
          <button type="submit" class="btn btn-primary">Skapa konto</button>
        </div>
      </form>




<br /><br />


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
</body>
</html>