<?php

include("auth.php"); //include auth.php file on all secure pages
require('db.php');

$email = $_SESSION['email'];

//Visar användarens tidigare ordrar på mina sidor
$stm_select = $pdo->prepare('SELECT * FROM `order` WHERE email = :email'); //Väljer den e-postadress som är inloggad
$stm_select->execute(['email' => $email]);
$resultat = array();

foreach($stm_select as $row) {
    $resultat[] = $row;

}

//JSON_UNESCAPED_UNICODE används för att kunna skriva ut åäö.
echo json_encode($resultat, JSON_UNESCAPED_UNICODE);
?>
