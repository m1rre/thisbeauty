<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$salt1 = "18gI%f5A";
		$salt2 = "@Y4p91bN";
		$salt_password = md5($salt1.$password.$salt2);
		
	//Checking if user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='$salt_password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			//echo json_encode(true);
            header("Location: index.php"); // Skickar vidare användaren till startsidan
            }else{
                echo json_encode(false);
				}
    }
?>
