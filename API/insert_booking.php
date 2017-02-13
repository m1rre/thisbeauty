
<?php

require("db.php");

//-------------------> KOLLA SÅ DATUM/TID INTE DUBBLERAS (tog bort email) lade till variablar till alla namn.

	if( isset($_GET['time']) ) {

   		$date = $_GET['date'];
		$time = $_GET['time'];
		$type = $_GET['type'];
		$newtime = $date . " " . $time;

//lägger till variablen newtime så den inkluderar både date och time, här kollar vi om det redan finns bokad tid.
		$sql = "SELECT * FROM `timebooking` WHERE `bookingtime` = '{$newtime}'";
		$stm_count = $pdo->prepare($sql);
		$stm_count->execute();

// $cnt (count) räknar from 0  alltså stm_count räknar alla rader from 0
	$cnt = 0;	
	foreach($stm_count as $row) {
		$cnt++;		
}

//-------------------> LÄGG TILL NYA VÄRDEN I DATABASEN tagit bort att uppdatera. obs använde endast cnt för att räkna antal bokningar

  	if($cnt >= 1 ) {
		/*  echo "tiden är redan bokad";*/
		echo json_encode(false);

	} else /*{
		
			try*/ {
				$sql = "INSERT INTO `timebooking` (`bookingtime`, `bookingtype`) VALUES ('{$newtime}', '{$type}')";
				$stm_insert = $pdo->prepare($sql);
				$stm_insert->execute();
				/*echo "<p>Lade till bokning</p>";*/
				echo json_encode(true);


	 } /*catch (PDOExeption $e) {
			echo $e;
		}*/
	}
/*}	*/

?>


