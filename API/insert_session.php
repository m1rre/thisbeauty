<?php
//sessionen startar, början av dokumentet
session_start();


/*        $date = $_GET['date'];
		$time = $_GET['time'];
		$type = $_GET['type'];
		$newtime = $date . " " . $time;*/
		

if (empty($_SESSION['timebooking'])) {
$_SESSION['timebooking'] = array();
}

array_push($_SESSION['timebooking'], $_GET['date'], $_GET['type']);

/*var_dump($_SESSION['timebooking']);*/



?>
