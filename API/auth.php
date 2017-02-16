<?php

session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");  //Om användaren inte är inloggad skickas den vidare till inloggningssidan.
exit(); }
?>
