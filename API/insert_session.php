<?php
//sessionen startar, början av dokumentet
session_start();


/*        $date = $_POST['date'];
		$time = $_POST['time'];
		$type = $_POST['type'];
		$newtime = $date . " " . $time;*/
		

if (empty($_SESSION['timebooking'])) {
$_SESSION['timebooking'] = array();
}

array_push($_SESSION['timebooking'], $_POST['date'], $_POST['type']);

/*var_dump($_SESSION['timebooking']);*/



?>
