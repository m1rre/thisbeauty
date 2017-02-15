<?php
	require('db.php'); //lägger till databasuppgifter
       
      	if( isset($_POST['ffirstname']) ) {
	
		//Skapar variablar som hämtar de inskrivna värdena i formuläret	
        $firstname = stripslashes($_POST['ffirstname']); //Stripslashed döljer backslash från strängen
		$firstname = mysqli_real_escape_string($con,$firstname); //mysqli_real_escape lägger till backslash framför "farliga" characters, t.e.x. nyrad. Kan hindra SQL-attacker.

        $lastname = stripslashes($_POST['flastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);

        $password = stripslashes($_POST['fpassword']);
		$password = mysqli_real_escape_string($con,$password);
        $salt1 = "18gI%f5A";
        $salt2 = "@Y4p91bN";
        $salt_password = md5($salt1.$password.$salt2); //kombinerar saltvärderna med md5 för att få en säkrare saltning än enbart md5

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
       

	// kolla om användaren finns i databasen genom att räkna antal rader i databastabellen där e-postadressen finns
	$sql = "SELECT COUNT(*) AS 'antal_rader' FROM `users`WHERE email = :email";
	$stm_count = $pdo->prepare($sql);
	$stm_count->execute(['email' => $_POST['femail']]);
	foreach( $stm_count as $row ) {
		$antal_rader = $row['antal_rader'];
	}

	if( $antal_rader > 0 ) {

		echo json_encode(false);

	} else {
        
        //Lägg till användare i databasen
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
			echo json_encode(true);
		}
        }
?>
