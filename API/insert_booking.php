
<?php
start_session();
require"db.php";

//-------------------> KOLLA SÅ DATUM/TID INTE DUBBLERAS

	if( isset($_POST['time']) ) {

   		$date = $_POST['date'];
		$time = $_POST['time'];
		$type = $_POST['type'];
		$newtime = $date . " " . $time;

//lägger till variablen newtime så den inkluderar både date och time
		
		$sql = "SELECT * FROM `timebooking` WHERE `bookingtime` = '{$newtime}'";
		$stm_count = $pdo->prepare($sql);
		$stm_count->execute();

	$cnt = 0;	
	foreach($stm_count as $row) {
		$cnt++;		
}

//-------------------> LÄGG TILL NYA VÄRDEN I DATABASEN

  	if($cnt >= 1 ) {
		// "tiden är redan bokad";
		echo json_encode(false);

	} else {
		$sql = "INSERT INTO `timebooking` (`bookingtime`, `bookingtype`) VALUES ('{$newtime}', '{$type}')";
		$stm_insert = $pdo->prepare($sql);
		$stm_insert->execute();
		// "Lade till bokning";
		echo json_encode(true);


	 } 
}


?>


