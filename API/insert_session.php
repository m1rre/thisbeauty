<?php

session_start();
		

if (empty($_SESSION['timebooking'])) {
$_SESSION['timebooking'] = array();
}

array_push($_SESSION['timebooking'], $_POST['date'], $_POST['type']);

?>
