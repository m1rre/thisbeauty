<?php

session_start();

//gör en array som innehåller tid/datum och typ av behandling för att se resultatet.

if (empty($_SESSION['timebooking'])) {
$_SESSION['timebooking'] = array();
}

array_push($_SESSION['timebooking'], $_POST['date'], $_POST['type']);

?>
