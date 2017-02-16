<?php

// Uppdaterar användarens addressuppgifter (address, postnummer och postort) genom ett formulär på mina sidor
require('db.php');
include("auth.php");
$email = $_SESSION['email'];

if( isset($_POST['faddress']) ) {
    $sql = "UPDATE `users` SET `address` = :vaddress, `zipcode` = :vzipcode, `city` = :vcity WHERE `email` = :vemail";
    $stm_update = $pdo->prepare($sql);
    $stm_update->execute(['vaddress' => $_POST['faddress'], 'vzipcode' => $_POST['fzipcode'], 'vcity' => $_POST['fcity'], 'vemail' => $email]);
    echo json_encode(true);
    }

?>
